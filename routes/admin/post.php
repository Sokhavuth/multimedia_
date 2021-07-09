<?php
//routes/admin/post.php
$f3->route('POST /admin/post', function($f3){
    require('controllers/posts/insert.php');
    insert($f3);
});

$f3->route('GET /admin/post/edit/@id', function($f3){
    require('controllers/posts/selectOne.php');
    selectOne($f3, $f3->get('PARAMS.id'));
});

$f3->route('POST /admin/post/edit/@id', function($f3){
    require('controllers/posts/update.php');
    update($f3, $f3->get('PARAMS.id'));
});