<?php
return [
  ['GET', '/', 'IndexController@sayHello'],

  ['GET', '/users', 'UsersController@index'],
  ['GET', '/compute', 'ComputationsController@doMath'],
];
