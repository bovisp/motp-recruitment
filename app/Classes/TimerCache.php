<?php

namespace App\Classes;

use Carbon\Carbon;
use Illuminate\Support\Arr;

class TimerCache
{
  protected static $duration = 7200; // 2 hours in seconds

  public static function set($cookie)
  {
    if (self::cacheItemExists($cookie) === false) {
      self::createCacheItem($cookie);

      return;
    }

    self::addToCachedItem($cookie);

    return;
  }

  public static function remove($cookie)
  {
    self::removeFromCachedItem($cookie);

    return;
  }

  public static function check($cookie)
  {
    $cache = cache()->get('countdown');

    $item = Arr::first($cache, function ($value, $key) use ($cookie) {
      return $value['cookie'] === $cookie;
    });

    if ($item['end'] <= Carbon::now()->timestamp) {
      return false;
    }

    return $item['end'] - Carbon::now()->timestamp;
  }

  protected static function cacheItemExists($cookie)
  {
    if (cache()->has('countdown')) {
      return true;
    }

    return false;
  }

  protected static function createCacheItem($cookie)
  {
    $cache = [];

    $cache = self::pushToCacheItem($cache, $cookie);

    cache()->add('countdown', $cache);

    return;
  }

  protected static function addToCachedItem($cookie)
  {
    $cache = cache()->get('countdown');

    $cache = self::pushToCacheItem($cache, $cookie);

    cache()->put('countdown', $cache);

    return;
  }

  protected static function removeFromCachedItem($cookie)
  {
    $cache = cache()->get('countdown');

    $cache = array_filter($cache, function($item) use ($cookie) {
      return $item['cookie'] !== $cookie;
    });

    cache()->put('countdown', $cache);
  }

  protected static function pushToCacheItem($cache, $cookie)
  {
    array_push($cache, [
      'cookie' => $cookie,
      'start' => $start = Carbon::now()->timestamp,
      'end' => $start + self::$duration
    ]);

    return $cache;
  }
}