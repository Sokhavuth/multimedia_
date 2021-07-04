<?php
//controllers/login.php

function login($f3){
    require_once('setting.php');
    //require_once('controllers/users/collection.php');
    //collection($f3);

    $f3->mset([
        'appName'=>$setting['siteTitle'], 
        'title'=>'ទំព័រ​ដើម', 
        'date'=>$setting['date'],
        'message'=>$setting['message']
    ]);

    $view=new View;
    echo $view->render('views/login.php');
}