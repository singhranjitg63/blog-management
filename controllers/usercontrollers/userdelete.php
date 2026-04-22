<?php

$config = require('config.php');
$data = new database($config);


$id = $_POST['id'];

// echo "<pre>";
// var_dump($_POST);
// echo "</pre>";
// // die();  

if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $data->query('DELETE FROM users WHERE id = :id',[
        'id' => $id
    ]);
}else{
    $results = $data->query('SELECT * from users')->fetchAll(); 
    }
header("location:/users");
require "dashboard/userdashboard/users.dash.php";