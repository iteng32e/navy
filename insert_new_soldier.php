<?php
    require_once 'connection.php';
echo 'hi';
    $U=$_POST['username'];
    $E=$_POST['email'];
    $P=$_POST['password'];

    $res=$con->query("INSERT INTO soldier (name , email , password) VALUES ('$U','$E','$P')");
        if(isset($res))
        {
            session_start();
            $_SESSION['username']=$U;
            if (isset($_SESSION['username'])) 
                header('location:' . $config['base_url'].'/source/pages/index.php');
            else
                echo "نشست ایجاد نشد!";
        }
        else
        {
            header('location:' . $config['base_url'].'/source/pages/register.php?error=1'); 
        }
?>