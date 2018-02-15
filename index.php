<?php
//turn on error reporting
error_reporting(E_ALL);
ini_set('display_errors', TRUE);

//Require the autoload file
require_once('vendor/autoload.php');
require_once('/home/gsinghgr/config.php');
require_once ('model/db-functions.php');

$f3 = Base::instance();

$f3->set('DEBUG', 3);

$f3->route('GET /', function() {
    $dbh = connect();
});

//Run fat free
$f3->run();