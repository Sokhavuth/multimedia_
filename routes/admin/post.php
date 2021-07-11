<?php
//routes/admin/post.php
$f3->route('POST /admin/post', function($f3){
    if($f3->get('SESSION.email')){
        require('controllers/posts/insert.php');
        insert($f3);
    }else{
        require_once('controllers/login.php');
        login($f3);
    }
});

$f3->route('GET /admin/post/edit/@id', function($f3){
    if($f3->get('SESSION.email')){
        require('controllers/posts/selectOne.php');
        selectOne($f3, $f3->get('PARAMS.id'));
    }else{
        require_once('controllers/login.php');
        login($f3);
    }
});

$f3->route('POST /admin/post/edit/@id', function($f3){
    if($f3->get('SESSION.email')){
        require('controllers/posts/update.php');
        update($f3, $f3->get('PARAMS.id'));
    }else{
        require_once('controllers/login.php');
        login($f3);
    }
});

$f3->route('GET /admin/post/delete/@id', function($f3){
    if($f3->get('SESSION.email')){
        require('controllers/posts/delete.php');
        delete($f3, $f3->get('PARAMS.id'));
    }else{
        require_once('controllers/login.php');
        login($f3);
    }
});

$f3->route('POST /admin/post/paginate', function($f3){
    if($f3->get('SESSION.email')){
        require_once('setting.php');
        require('controllers/posts/paginate.php');
        $posts = paginate($f3, $setting['adminPostLimit'], $f3->get('POST.page'));
    
        echo json_encode(iterator_to_array($posts));
    }else{
        require_once('controllers/login.php');
        login($f3);
    }
});