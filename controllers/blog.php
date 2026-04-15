<?php
$config = require('config.php');
$data = new database($config);
// echo "<pre>";
// var_dump($_POST);
// echo "</pre>";
// die();
if ($_SERVER['REQUEST_METHOD'] === 'POST'){

    $data->query('INSERT INTO users(title,contant,user_id,categorie_id,image)
         VALUES (:title, :contant, :user_id, :categorie_id, :image)',[
            'title' => $_POST['title'],
            'contant' => $_POST['contant'],
            'user_id' => $_POST['user_id'],
            'categorie_id' => $_POST['categorie_id'],
            'image' => $_POST['image'],
         ]);
}
require "dashboard/blog.dash.php";