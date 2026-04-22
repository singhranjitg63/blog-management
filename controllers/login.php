<?php
// echo "<pre>";
//     var_dump($_POST);
// echo "</pre>";
session_start();
if($user){
    header('location: /dash');
}

require 'Validator.php';
$config = require('config.php');
$data = new database($config);


if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $email = $_POST['email'];
    $password = $_POST['password'];

    $errors = [];
    if (! Validator::email($email)) {
        $errors['email'] =  'please enter valid email';
    }
    if (! Validator::password($password, 7, 255)) {
        $errors['password'] = 'please enter valid password.';
    }

    $user = $data->query('SELECT * FROM users WHERE email = :email', [
        'email' => $email
    ])->fetch();

    // var_dump($user);
    if ($user) {
        if (password_verify($password, $user['password'])) {
            $_SESSION['user'] = [
                'id' => $user['id'],
                'email' => $user['email'],
                'password' => $user['password']
            ];
            header('location: /dash');
            exit();
            }
            if (! $user) {
                $errors['email'] = 'This email is not valid enter right email';
            }else{
                $errors['password'] = 'This password is not valid enter right password';
            }
        }
}
require "dashboard/login.php";
