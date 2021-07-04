<?php
//controllers/login.php

function login($f3){
    require_once('setting.php');

    $f3->mset([
        'appName'=>$setting['siteTitle'], 
        'title'=>'ទំព័រ​ដើម', 
        'date'=>$setting['date']
    ]);

    $view=new View;
    echo $view->render('views/login.php');
}