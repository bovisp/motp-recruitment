<?php

namespace App;

use App\Score;
use Illuminate\Database\Eloquent\Model;

class Candidate extends Model
{
    protected $fillable = [
      'firstname',
      'lastname'
    ];

    public function scores()
    {
      return $this->hasMany(Score::class);
    }
}
