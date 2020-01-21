<?php

namespace App\Http\Controllers;

use App\Score;
use App\Answer;
use App\Candidate;
use Illuminate\Support\Arr;

class MarkingController extends Controller
{
  public function show(Candidate $candidate)
  {
    $answers = Answer::whereCandidateId($candidate->id)->first();

    return view('answers.show', compact('answers', 'candidate'));
  }

  public function store(Candidate $candidate)
  {
    if(!Arr::get(request('marks'), 'comment')) {
      return response()->json([
        'errors' => [
          'marks' => [
            request('type') => __('motpvalidations.scoring.comments.required')
          ]
        ]
          ], 422);
    }

    $score = Score::whereCandidateId($candidate->id)
      ->whereType(request('type'))
      ->first() ?? Score::make();

    $score['comment'] = request('marks')['comment'];

    $score['type'] = request('type');

    $score['candidate_id'] = $candidate->id;

    $score->save();

    return response()->json([
      'score' => $score,
      'message' => __('components.scoring.success')
    ], 200);
  }

  public function index()
  {
    $candidates = Candidate::latest()->get();

    return view('answers.index', compact('candidates'));
  }
}
