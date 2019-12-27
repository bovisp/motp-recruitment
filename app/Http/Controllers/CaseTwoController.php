<?php

namespace App\Http\Controllers;

use App\Answer;
use App\Candidate;
use Carbon\Carbon;
use Illuminate\Support\Facades\Cache;
use App\Http\Requests\CaseTwoTableRequest;

class CaseTwoController extends Controller
{
    public function show()
    {
      return view('cases/case-two');
    }

    public function image()
    {
      $candidate = Candidate::find(Cache::get('candidateid'));

      $filename = storage_path() . 
                  '/app/public/images/' .
                  "{$candidate->id}_{$candidate->firstname}_{$candidate->lastname}_" . 
                  Carbon::now()->format('Ymd') .
                  '_warm_front.png';

      $data = substr(request('imageData'), strpos(request('imageData'), ",") + 1);

      $data = base64_decode($data);

      $imgRes = imagecreatefromstring($data);

      imagepng($imgRes, $filename);
      
      return 'good!';
    }

    public function table(CaseTwoTableRequest $request)
    {
      $candidate_id = (int) Cache::get('candidateid');
      
      if (Answer::where('candidate_id', $candidate_id)->first() === null) {
        $answer = Answer::make(request()->all());

        $answer->candidate_id = (int) Cache::get('candidateid');

        $answer->save();
      } else {
        $answer = Answer::where('candidate_id', $candidate_id)->first();

        $answer->update(array_merge(
          request()->all(),
          [
            'candidate_id' => $candidate_id
          ]
        ));
      }
    }

    public function getTableData()
    {
      $candidate_id = (int) Cache::get('candidateid');

      return Answer::where('candidate_id', $candidate_id)->first();
    }
}
