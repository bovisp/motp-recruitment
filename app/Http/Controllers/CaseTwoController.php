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

      $filepath = storage_path() . '/app/public/images/';

      $filename = "{$candidate->id}_{$candidate->firstname}_{$candidate->lastname}_" . 
                  Carbon::now()->format('Ymd') .
                  '_warm_front.png';

      $fullpath = $filepath . $filename;

      $data = substr(request('imageData'), strpos(request('imageData'), ",") + 1);

      $data = base64_decode($data);

      $imgRes = imagecreatefromstring($data);

      imagepng($imgRes, $fullpath);

      if (Answer::where('candidate_id', $candidate->id)->first() === null) {
        $answer = Answer::make([
          'image_url' => $filename
        ]);

        $answer->candidate_id = (int) Cache::get('candidateid');

        $answer->save();
      } else {
        $answer = Answer::where('candidate_id', $candidate->id)->first();

        $answer->update([
          'image_url' => $filename
        ]);
      }
      
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

        $answer->update(request()->all());
      }
    }

    public function getTableData()
    {
      $candidate_id = (int) Cache::get('candidateid');

      return Answer::where('candidate_id', $candidate_id)->first();
    }

    public function storeExerciseOneAnswer()
    {
      request()->validate([
        'case2ex1' => 'required'
      ]);

      $candidate_id = (int) Cache::get('candidateid');
      
      if (Answer::where('candidate_id', $candidate_id)->first() === null) {
        $answer = Answer::make([
          'case2ex1' => request('case2ex1')
        ]);

        $answer->candidate_id = (int) Cache::get('candidateid');

        $answer->save();
      } else {
        $answer = Answer::where('candidate_id', $candidate_id)->first();

        $answer->update(request()->all());
      }
    }

    public function getExerciseOneAnswer()
    {
      $candidate_id = (int) Cache::get('candidateid');

      return Answer::where('candidate_id', $candidate_id)->first();
    }

    public function storeExerciseTwoAnswer()
    {
      request()->validate([
        'case2ex2' => 'required'
      ]);

      $candidate_id = (int) Cache::get('candidateid');
      
      if (Answer::where('candidate_id', $candidate_id)->first() === null) {
        $answer = Answer::make([
          'case2ex2' => request('case2ex2')
        ]);

        $answer->candidate_id = (int) Cache::get('candidateid');

        $answer->save();
      } else {
        $answer = Answer::where('candidate_id', $candidate_id)->first();

        $answer->update(request()->all());
      }
    }

    public function getExerciseTwoAnswer()
    {
      $candidate_id = (int) Cache::get('candidateid');

      return Answer::where('candidate_id', $candidate_id)->first();
    }
}
