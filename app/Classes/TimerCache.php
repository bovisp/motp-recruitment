<?php

namespace App\Classes;

use Carbon\Carbon;
use Illuminate\Support\Arr;

class TimerCache
{
  protected static $duration = 7200; // 2 hours in seconds

  public static function set($cookie)
  {
    if (!cache()->has('countdown')) {
      $cache = [];

      array_push($cache, [
        'cookie' => $cookie,
        'start' => $start = Carbon::now()->timestamp,
        'end' => $start + self::$duration
      ]);

      cache()->add('countdown', $cache);

      return;
    }

    $cache = cache()->get('countdown');

    array_push($cache, [
      'cookie' => $cookie,
      'start' => $start = Carbon::now()->timestamp,
      'end' => $start + self::$duration
    ]);

    cache()->put('countdown', $cache);

    return;
  }

  public static function remove($cookie)
  {
    $cache = cache()->get('countdown');

    $cache = array_filter($cache, function($item) use ($cookie) {
      return $item['cookie'] !== $cookie;
    });

    cache()->put('countdown', $cache);

    return;
  }
}