<?php
require 'controllers/auth.php';

if (isset($_SESSION['user']['role']) && ($_SESSION['user']['role'] !== 'admin')) {    //for user login it can not open users page.
    if (isset($_SESSION['user'])) {
        header('location: /dash');
        exit();
    }
}

$config = require('config.php');
$data = new database($config);


$results = $data->query('SELECT * from users')->fetchAll();


require "dashboard/userdashboard/users.dash.php";
