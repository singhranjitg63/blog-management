<?php

require "Validator.php";

$config = require('config.php');
$data = new database($config);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $errors = [];
    if (!Validator::name($_POST['name'], 1, 255)) {
        $errors['name'] = 'please enter the name.';
    }
    if (!Validator::email($_POST['email'], 1, 255)) {
        $errors['email'] = 'please enter your email.';
    }
    if (!Validator::password($_POST['password'], 1, 9)) {
        $errors['password'] = 'please enter the password.';
    }
    if (!Validator::role($_POST['role'], 1, 255)) {
        $errors['role'] = 'please enter the role of user.';
    }
    if (empty($errors)) {
        $data->query(
            'INSERT INTO users(name,email,password,role) 
    VALUES(:name , :email , :password , :role)',
            [
                'name' => $_POST['name'],
                'email' => $_POST['email'],
                'password' => password_hash($_POST['password'], PASSWORD_BCRYPT),
                'role' => $_POST['role']
            ]
        );
        header("location:/users");
    }
}


require "dashboard/userdashboard/user.create.php";
