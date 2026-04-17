<?php

require "Validator.php";

$config = require('config.php');
$data = new database($config);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
   $errors = [];
   if (!Validator::title($_POST['title'], 1, 255)) {
      $errors['title'] = 'please enter the title of blog.';
   }
   if (!Validator::contant($_POST['contant'], 1,INF)) {
      $errors['contant'] = 'please enter the contant of blog.';
   }
   if (!Validator::user_id($_POST['user_id'], 1, 255)) {
      $errors['user_id'] = 'please enter the user id.';
   }
   if (!Validator::categories_id($_POST['categories_id'], 1, 255)) {
      $errors['categories_id'] = 'please enter the categories id.';
   }
   if (!Validator::image($_POST['image'], 1, 255)) {
      $errors['image'] = 'please enter the link of image .';
   }
   if (empty($errors)){
      $data->query('INSERT INTO posts(title,contant,user_id,categories_id,image)
         VALUES (:title, :contant, :user_id, :categories_id, :image)', [
         'title' => $_POST['title'],
         'contant' => $_POST['contant'],
         'user_id' => $_POST['user_id'],
         'categories_id' => $_POST['categories_id'],
         'image' => $_POST['image'],
      ]);
      header("location:/blogs");
   }
}
require "dashboard/blogdashboard/blog.create.php";
