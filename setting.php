<?php
//setting.php

require_once('tool.php');

$_tool = new Tool();
date_default_timezone_set("Asia/Phnom_Penh");
$date = $_tool->getKhDate(date('Y/m/d'));

$setting = [];

$setting['date'] = $date;
$setting['siteTitle'] = 'ទូរទស្សន៍​យើង';
$setting['message'] = '';
$setting['adminPostLimit'] = 10;