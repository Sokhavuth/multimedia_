<?php 
//controllers/users/collection.php

function collection($f3){
    $collection = $f3->get('DB')->users;

    $document = $collection->findOne();
	
    if(!$document){
        $root = [
            'email'=>'xxxxx',
            'name'=>'xxxxx',
            'password'=>'xxxxxx',
            'role'=>'xxxxx',
            'thumb'=>'xxxxxx',
            'info'=>'xxxxxx',
            'video'=>'xxxxxx',
            'date'=>'xxxxxx'
        ];

        $collection->insertOne($root);
    }
}


