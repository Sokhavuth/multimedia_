<?php 
//controllers/posts/select.php
function select($f3, $limit){
    $collection = $f3->get('DB')->posts;
    $posts = $collection->find([], ['limit'=>$limit, 'sort'=>['date'=>-1]]);
    $count = $collection->count();
    
    return [$posts, $count];
}