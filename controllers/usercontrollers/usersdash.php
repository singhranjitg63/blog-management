<?php

$config = require('config.php');
$data = new database($config);

if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $data->query('DELETE * FROM users WHERE id = id',[
        "id" => $_GET['id']
    ]);
}else{
    $results = $data->query('SELECT * from users')->fetchAll(); 
    }

require "dashboard/userdashboard/users.dash.php";