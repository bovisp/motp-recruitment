<?php

namespace App;

use App\Candidate;
use Illuminate\Database\Eloquent\Model;

class Score extends Model
{
    protected $fillable = [
      'candidate_id',
      'comment',
      'type'
    ];

    public function candidate()
    {
      return $this->belongsTo(Candidate::class);
    }
}
