<?php 
  include_once 'header.php';
?>
<section class="index-intro">
     <?php
        if(isset($_SESSION["userid"])){
            echo "<p>Welcome " . $_SESSION["useruid"] . "</p>";
            }
     ?>
<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body class ="login">
    <h2>Login</h2>
    <?php
    session_start();
    if (isset($_SESSION['username'])) {
        header("Location: welcome.php");
        exit();
    }
    if (isset($_POST['submit'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];

        // Hard-coded credentials
        $valid_username = "LetsDoThis";
        $valid_password = "Reza2005";

        if ($username == $valid_username && $password == $valid_password) {
            $_SESSION['username'] = $username;
            header("Location: welcome.php");
            exit();
        } else {
            echo "<p style='color:red;'>Invalid username or password</p>";
        }
    }
    ?>
    <form method="post" action="login.php">
        Username: <input type="text" name="username" required><br>
        Password: <input type="password" name="password" required><br>
        <input type="submit" name="submit" value="Login">
    </form>
</body>
</html>
