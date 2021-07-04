<?php
//routes/index/login.php
$f3->route('GET /login', function($f3){
    require_once('controllers/login.php');
    login($f3);
});

$f3->route('POST /login', function($f3){
    echo 'POST Login';
});