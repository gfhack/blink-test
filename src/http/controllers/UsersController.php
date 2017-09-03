<?php

namespace app\http\controllers;

use blink\core\Object;
use blink\http\Request;
use blink\http\Response;

use Illuminate\Validation\Factory as Validator;
use Illuminate\Hashing\BcryptHasher as Hash;

use \app\models\User;

class UsersController extends Object
{
  public function index()
  {
    $users = User::all();

    return $users;
  }
}
