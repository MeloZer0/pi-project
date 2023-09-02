<?php

require __DIR__.'/vendor/autoload.php';

use Kreait\Firebase\Factory;
use Kreait\Firebase\Auth;

$firebase =(new Factory())
        ->withServiceAccount(__DIR__.'/firebaseconfig.json')
        ->withDatabaseUri('https://pi-project-6355e-default-rtdb.firebaseio.com/');

$database = $firebase->createDatabase();
$auth = $firebase->createAuth();

?>