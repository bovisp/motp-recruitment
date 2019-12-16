<?php

namespace App\Http\Controllers;

use App\Candidate;
use Carbon\Carbon;
use Illuminate\Support\Facades\Cache;

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
}
