<?
    if (isset($_GET['error']) and $_GET['error']==1) 
        echo "مشکلی در حین ثبت نام رخ داده است! لطفا مجددا تلاش کنید.";
?>
<form action="insert_new_soldier.php" method="POST">
    <input type="text" name="username">
    <input type="email" name="email">
    <input type="password" name="password">
    <input type="submit" value="Register">
</form>