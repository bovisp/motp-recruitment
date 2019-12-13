<?php

namespace App\Http\Controllers;


class CaseTwoController extends Controller
{
    public function show()
    {
      return view('cases/case-two');
    }

    public function image()
    {
      $filename = storage_path() . '/app/public/images/' . 'jqScribbleImage.png';
      $data = substr(request('imageData'), strpos(request('imageData'), ",") + 1);
      $data = base64_decode($data);
      $imgRes = imagecreatefromstring($data);
      imagepng($imgRes, $filename);
      return 'good!';
    }
}
