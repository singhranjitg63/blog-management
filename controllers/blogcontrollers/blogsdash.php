<?php
require 'controllers/auth.php';

$config = require('config.php');
$data = new database($config);


$blogs = $data->query('SELECT * from posts')->fetchAll(); 
 

require "dashboard/blogdashboard/blogs.dash.php";