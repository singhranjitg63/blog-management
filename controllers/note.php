<?php
$config = require('config.php');
$data = new database($config);

$header = "note";

$id = $_GET['id'];

$note = $data->query("SELECT * from orders WHERE id = id",['id' => $id])->fetch(); 
 


require "views/note.view.php";