<?php
    require 'connection.php';
    $username=$_POST['username'];
    $res=$con->query("select * from soldier where email='$username'");
    if ($res=true) {
        $row=$con->query("select password from soldier where soldier.name='$username'");
        if($result=$row->fetch_assoc()){
            var_dump($result);
        }
    }
?>
<a href="index.php">index.php</a>