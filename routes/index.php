<?php
//routes/index.php

$f3->route('GET /', function($f3){
    require('setting.php');
    require('controllers/posts/select.php');
    $data = select($f3, $setting['indexPostLimit']);

    $f3->mset([
        'appName'=>$setting['siteTitle'], 
        'description'=>$setting['description'],
        'title'=>'ទំព័រ​មុខ', 
        'date'=>$setting['date'],
        'post'=>$data[0]
    ]);

    $view = new View;
    echo $view->render('views/index.php');

});

require __DIR__.('/routes/index/login.php');