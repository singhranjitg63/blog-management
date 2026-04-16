<?php

// require "function.php";
$config = require('config.php');
$data = new database($config);

$header = "help ";

$note = $data->query("SELECT * from  WHERE id = 1")->fetchAll(); 
 


require "views/help.view.php";
