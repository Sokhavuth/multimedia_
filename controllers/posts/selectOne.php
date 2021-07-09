<?php
//controllers/posts/selectOne.php
function selectOne($f3, $id){
    $collection = $f3->get('DB')->posts;
    $post = $collection->findOne(['id'=>$f3->get('PARAMS.id')]);

    require_once('setting.php');

    $f3->mset([
        'appName'=>$setting['siteTitle'], 
        'title'=>'ទំព័រ​កែប្រែ', 
        'date'=>$setting['date'],
        'post'=>$post,
        'id'=>$id
    ]);

    $view = new View;
    echo $view->render('views/admin/index_edit.php');
}