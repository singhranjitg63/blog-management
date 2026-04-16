<?php
$config = require('config.php');
$data = new database($config);


$results = $data->query('SELECT * from users')->fetchAll(); 
 

require "dashboard/users.dash.php";