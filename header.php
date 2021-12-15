<?php
    require_once 'insert_new_soldier.php';
?>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav">
            <li class="nav-item active">
            <a href="Register.php" style="margin-right: 3px" class="btn btn-success reg-btn ">ثبت نام</a>
            </li>
            <li class="nav-item">
            <a href="login.php" class="btn btn-danger btn-group log-btn">ورود</a>
            </li>
        </ul>
    </div>
    <?php
        session_start();
    if (isset($_SESSION['username'])) {
        ?>
        <div class="float-left" style="color: #fff;">خوش آمدید<?= $_SESSION['username'] ?></div>
        <?php
    } else {
        
        if(!isset($_SESSION['user']))
        {
            header('location:' . $config['base_url'].'/source/pages/login.php');
        }
    ?> 
    <a class="navbar-brand" href="#">سایت</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <a class="nav-link" href="#">تماس با ما</a>
        <a class="nav-link" href="<?= $config['base_url'] ?>/source/pages/index.php">خانه <span class="sr-only">(current)</span></a>

        <?php
    }
    ?>
</nav>