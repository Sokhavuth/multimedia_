<?php
//controllers/posts/insert.php
function insert($f3){
    $collection = $f3->get('DB')->posts;

    $post = [
        'id'=>uniqid(),
        'title'=>$f3->get('POST.title'),
        'content'=>$f3->get('POST.content'),
        'category'=>$f3->get('POST.category'),
        'thumb'=>$f3->get('POST.thumb'),
        'date'=>$f3->get('POST.datetime'),
        'video'=>$f3->get('POST.video'),
        'author'=>$f3->get('SESSION.email')
    ];

    $collection->insertOne($post);
    $f3->reroute('/admin');
}

