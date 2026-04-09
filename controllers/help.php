<?php

// require "function.php";
$config = require('config.php');
$data = new database($config);

$header = "help ";

$note = $data->query("SELECT * from orders WHERE user_id = 3")->fetchAll(); 
 


require "views/help.view.php";
