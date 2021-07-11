<?php
//controllers/posts/paginate.php
function paginate($f3, $limit, $page){
    $skip = (int)$page * $limit;
    $collection = $f3->get('DB')->posts;
    $posts = $collection->find([], ['limit'=>$limit, 'sort'=>['date'=>-1], 'skip'=>$skip]);
    
    return $posts;
}