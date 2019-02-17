<?php

//error_reporting(E_ALL);
//ini_set('display_errors', 1);

require_once __DIR__ . '/../vendor/autoload.php';

try {
    $calculator = new \App\Common\Calculator();
    echo $calculator->sum(10, 20);
} catch (Exception $e) {
    var_dump($e);
}
