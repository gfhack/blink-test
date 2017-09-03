<?php

use Illuminate\Container\Container;

use Illuminate\Filesystem\Filesystem;

use Illuminate\Translation\FileLoader;
use Illuminate\Translation\Translator;

use Illuminate\Validation\Factory;
use Illuminate\Validation\DatabasePresenceVerifier;

use Illuminate\Database\Capsule\Manager as Capsule;

$capsule = new Capsule;
$capsule->addConnection(require __DIR__.'/config/database.php');
$app->bind('capsule', $capsule);
$capsule->setAsGlobal();
$capsule->bootEloquent();

$loader = new FileLoader(new Filesystem, __DIR__.'/lang');
$translator = new Translator($loader, 'en');
$validation = new Factory($translator, new Container);
$validation->setPresenceVerifier(new DatabasePresenceVerifier(app('capsule')->getDatabaseManager()));
$app->bind('validation', $validation);
