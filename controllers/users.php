<?php
$config = require('config.php');
$data = new database($config);
// echo "<pre>";
// var_dump($_POST);
// echo "</pre>";
// die();
if ($_SERVER['REQUEST_METHOD'] === 'POST'){

    $data->query('INSERT INTO users(name,email,password,role) 
    VALUES(:name , :email , :password , :role)',
        [
            'name' => $_POST['name'],
            'email' => $_POST['email'],
            'password' => $_POST['password'],
            'role' => $_POST['role']
        ]);
}


require "dashboard/users.dash.php"; 


  