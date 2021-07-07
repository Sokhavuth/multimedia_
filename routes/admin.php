<?php
//routes/admin.php

$f3->route('GET /admin', function($f3){
    if($f3->get('SESSION.email')){
        require_once('setting.php');

        $f3->mset([
            'appName'=>$setting['siteTitle'], 
            'title'=>'ទំព័រ​ការផ្សាយ', 
            'date'=>$setting['date'],
            'message'=>$setting['message']
        ]);

        $view = new View;
        echo $view->render('views/admin/index.php');
    }else{
        require_once('controllers/login.php');
        login($f3);
    }
});

require('routes/admin/post.php');