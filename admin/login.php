<?php
require_once 'main.php';
require_once 'header.php'
?>
    <h1>Admin panel login page</h1>
    <form action="../includes/login.inc.php" method="post">
        <input type="text" name="username" placeholder="username"><br><br>
        <input type="password" name="password" placeholder="password"><br><br>
        <label>remember me <input type="checkbox" name="remember"></label><br><br>
        <input type="submit" value="login" name="login">
    </form>
<?php require_once 'footer.php' ?>