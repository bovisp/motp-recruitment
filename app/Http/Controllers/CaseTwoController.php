<?php

namespace App\Http\Controllers;

use App\Candidate;
use Carbon\Carbon;
use App\Traits\Persistable;
use Illuminate\Support\Facades\Cookie;
use App\Http\Requests\CaseTwoTableRequest;

class CaseTwoController extends Controller
{
  use Persistable;
  
  public function show()
  {
    return view('cases.case-two');
  }

  public function image()
  {
    $candidate = $this->candidate();

    $filepath = storage_path() . '/app/public/images/';

    $filename = "{$candidate->id}_{$candidate->firstname}_{$candidate->lastname}_" . 
                Carbon::now()->format('Ymd') .
                '_warm_front.png';

    $fullpath = $filepath . $filename;

    $data = substr(request('imageData'), strpos(request('imageData'), ",") + 1);

    $data = base64_decode($data);

    $imgRes = imagecreatefromstring($data);

    imagepng($imgRes, $fullpath);

    $requestArr = array_merge(request()->all(), [
      'image_url' => $filename
    ]);

    $this->persist($requestArr, 'image_url');
    
    return 'good!';
  }

  public function table(CaseTwoTableRequest $request)
  {
    $answer = $this->answer();
        
    $answer->candidate_id = Candidate::whereSession(Cookie::get('motp_recruitement_session'))->first()->id;

    $answer->fill(request()->all());

    $answer->save();
  }

  public function store()
  {
    request()->validate([
      'body' => 'required'
    ]);

    $this->persist(request()->all(), 'body');
  }
}
