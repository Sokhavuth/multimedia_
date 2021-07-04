<?php
//routes/index/login.php
$f3->route('GET /login', function($f3){
    if($f3->get('SESSION.email')){
        $view = new View;
        echo $view->render('views/admin/index.php');
    }else{
        require_once('controllers/login.php');
        login($f3);
    }
});

$f3->route('POST /login', function($f3){
    require_once('controllers/users/checkUser.php');
    checkUser($f3);
});