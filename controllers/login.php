<?php
// echo "<pre>";
//     var_dump($_POST);
// echo "</pre>";
require 'Validator.php';
session_start();
if (isset($_SESSION['user'])) {          // after login can't back login page.
    header('location: /dash');
    exit();
}

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

    if ($user) {
        if (password_verify($password, $user['password'])) {
            $_SESSION['user'] = [
                'id' => $user['id'],
                'email' => $user['email'],
                'password' => $user['password'],
                'role' => $user['role']
            ];
            if ($user['role'] !== 'admin') {
                header('location: /blogs');
            } else {
                header('location: /dash');
            }
            exit();
        } else {
            $errors['email'] = 'This email is not valid enter right email';
        }
    } else {
        $errors['password'] = 'This password is not valid enter right password';
    }
}
require "dashboard/login.php";
