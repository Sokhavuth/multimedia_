<?php
//routes/admin/post.php
$f3->route('POST /admin/post', function($f3){
    require('controllers/posts/insert.php');
    insert($f3);
});