<?php
//routes/admin.php

$f3->route('GET /admin', function($f3){
    if($f3->get('SESSION.email')){
        require_once('setting.php');
        require_once('controllers/posts/select.php');
        $data = select($f3, $setting['adminPostLimit']);
        
        $f3->mset([
            'appName'=>$setting['siteTitle'], 
            'title'=>'ទំព័រ​ការផ្សាយ', 
            'date'=>$setting['date'],
            'message'=>'ចំនួន​ការផ្សាយ​សរុបៈ '.$data[1],
            'posts'=>$data[0],
            'route'=>'post'
        ]);

        $view = new View;
        echo $view->render('views/admin/index.php');
    }else{
        require_once('controllers/login.php');
        login($f3);
    }
});

$f3->route('GET /admin/logout', function($f3){
    if($f3->get('SESSION.email')){
        $f3->clear('SESSION');
        $f3->reroute('/');
    }else{
        require_once('controllers/login.php');
        login($f3);
    }
});

require('routes/admin/post.php');