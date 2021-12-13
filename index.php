<?php
// Kickstart the framework
require('vendor/autoload.php');
$f3 = \Base::instance();

session_start();

require('tool.php');
$tool = new Tool();
$localhost = $tool->is_localhost();

if($localhost){
    //$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
    //$dotenv->load();
}

$db_url = $_ENV["DATABASE_URI"];

$client = new MongoDB\Client($db_url);
$db = $client->multimedia;

$f3->set('DB', $db);

require_once('routes/index.php');
require_once('routes/admin.php');

$f3->run();