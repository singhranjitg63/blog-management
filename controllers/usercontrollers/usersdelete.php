<?php
$config = require('config.php');
$data = new database($config);



//  if(isset($_REQUEST['delete'])){
//     $del = "DELETE FROM users WHERE id={$_REQUEST['id']}";
//     $data->exec($del);
//  }

require "dashboard/userdashboard/users.dash.php";