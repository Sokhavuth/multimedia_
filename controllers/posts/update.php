<?php
//controllers/posts/edit.php
function update($f3, $id){
    $collection = $f3->get('DB')->posts;

    $post = $collection->updateOne(['id'=>$id], 
    ['$set'=>[
        'title'=>$f3->get('POST.title'),
        'content'=>$f3->get('POST.content'),
        'category'=>$f3->get('POST.category'),
        'thumb'=>$f3->get('POST.thumb'),
        'date'=>$f3->get('POST.datetime'),
        'video'=>$f3->get('POST.video')
    ]]);

    $f3->reroute('/admin/post/edit/'.$id);
}