<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
  protected $fillable = [
    'naptt15', 'naptt18', 'naptt21', 'naptt00', 'naptt03', 'naptt06',
    'napat15', 'napat18', 'napat21', 'napat00', 'napat03', 'napat06',
    'dfptt15', 'dfptt18', 'dfptt21', 'dfptt00', 'dfptt03', 'dfptt06',
    'dfpat15', 'dfpat18', 'dfpat21', 'dfpat00', 'dfpat03', 'dfpat06',
    'candidadte_id', 'case1', 'case2ex1', 'case2ex2'
  ];
}
