<?php

namespace app\http\controllers;

use blink\core\Object;

class ComputationsController extends Object
{
  public function doMath()
  {
    $x = 0;
    $y = 1;

    $max = 10000;

    for ($i = 0; $i <= $max; $i++) {
      $z = $x + $y;
      $x = $y;
      $y = $z;
    }

    return ['status' => 'done'];
  }
}
