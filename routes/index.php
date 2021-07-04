<?php
//routes/index.php

$f3->route('GET /', function(){
    echo 'Hello, world!';
});

require_once ('routes/index/login.php');