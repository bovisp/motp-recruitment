<?php

namespace App\Http\Controllers;

use App\Mark;
use App\Score;
use App\Answer;
use App\Candidate;
use Illuminate\Support\Arr;
use App\Classes\ValidateScore;

class MarkingController extends Controller
{
  public function show(Candidate $candidate)
  {
    $answers = Answer::whereCandidateId($candidate->id)->first();

    $maxScores = Mark::all();

    return view('answers.show', compact('answers', 'candidate', 'maxScores'));
  }

  public function store(Candidate $candidate)
  {
    if ((new ValidateScore)->check() === false) {
      return response()->json([
        'errors' => [
          'marks' => [
            request('type') => __('motpvalidations.scoring.score.invalid')
          ]
        ]
      ], 422);
    }

    $score = Score::whereCandidateId($candidate->id)
      ->whereType(request('type'))
      ->first() ?? Score::make();

    $score['comment'] = request('marks')['comment'];

    $score['score'] = request('marks')['score'];

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
    $candidates = Candidate::with('scores')
      ->latest()
      ->get();

    return view('answers.index', compact('candidates'));
  }
}
