<?php
//controllers/users/checkUser.php

function checkUser($f3){
    $collection = $f3->get('DB')->users;
    $user = $collection->findOne(['email'=>$f3->get('POST.email')]);
        
    if($user){
        $password = $collection->findOne(['password'=>$f3->get('POST.password')]);
        if($password){
            require_once('setting.php');

            $f3->mset([
                'appName'=>$setting['siteTitle'], 
                'title'=>'ទំព័រ​គ្រប់គ្រង', 
                'date'=>$setting['date'],
                'message'=>$setting['message']
            ]);

            $f3->set('SESSION.email', $user['email']);

            $view = new View;
            echo $view->render('views/admin/index.php');
        }else{
            $f3->set('message', 'ពាក្យ​សំងាត់​មិនត្រឹមត្រូវ​ទេ');
            $view = new View;
            echo $view->render('views/login.php');
        }
    }else{
        $f3->set('message', 'Email ​មិនត្រឹមត្រូវ​ទេ');
        $view = new View;
        echo $view->render('views/login.php');
    }
}