<html>
    <head>
        <meta charset="UTF-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <title><?php echo $appName." - ".$title; ?></title>
        <script src="<?php echo $BASE ?>/public/scripts/jQuery.js"></script>
        <link href="<?php echo $BASE ?>/public/fonts/setup.css" rel="stylesheet" ></link>
        <link href="<?php echo $BASE ?>/public/images/site_logo.png" rel="icon" ></link>
        <link href="<?php echo $BASE ?>/public/styles/global.css" rel="stylesheet"></link>
        <link href="<?php echo $BASE ?>/public/styles/admin/partials/header.css" rel="stylesheet"></link>
    </head>
    <body>
    <div class='site'>
        
    <div class='Header'>
        <div class='wrapper region'>
            <div class='logo'><?php echo $title ?></div>
            <form action='<?php echo $BASE ?>/admin/search' method='post'>
                <select name='label'>
                    <option>ការផ្សាយ</option>
                </select>

                <input type='text' name='search' required />
                <input type='submit' value='បញ្ជូន' />
            </form>

            <div class='logout'>
                <a href='<?php echo $BASE ?>'>ទំព័រ​មុខ</a> | 
                <a href='<?php echo $BASE ?>/admin/logout'>ចេញ​ក្រៅ</a>
            </div>
        </div>
    </div>