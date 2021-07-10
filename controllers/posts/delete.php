<?php
//controllers/posts/delete.php
function delete($f3, $id){
    $collection = $f3->get('DB')->posts;
    $collection->deleteOne(['id'=>$id]);

    $f3->reroute('/admin');
}