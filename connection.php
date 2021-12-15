<?php
include('config.php');
$con=new mysqli($config['db']['hostname'],$config['db']['username'],$config['db']['password'],$config['db']['dbname']);
mysqli_set_charset($con, "utf8");
?>