<?php

require __DIR__.'/vendor/autoload.php';

use Kreait\Firebase\Factory;
use Kreait\Firebase\Auth;

$factory =(new Factory())
        ->withServiceAccount(__DIR__.'/firebaseconfig.json')
        ->withDatabaseUri('https://pi-project-6355e-default-rtdb.firebaseio.com/');

$database = $factory->createDatabase();
$auth = $factory->createAuth();

?>