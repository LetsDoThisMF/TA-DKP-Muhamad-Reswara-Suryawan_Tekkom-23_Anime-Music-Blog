<?php 
  include_once 'header.php';
?>

<?php
class User {
    public $username;
    public $password;

    public function __construct($username, $password) {
        $this->username = $username;
        $this->password = $password;
    }
}

session_start();

if (isset($_SESSION['username'])) {
    header("Location: welcome.php");
    exit();
}

if (isset($_POST['submit'])) {
    $user = new User($_POST['username'], $_POST['password']);
    $valid_user = new User("LetsDoThis", "Reza2005");
    if ($user->username == $valid_user->username && $user->password == $valid_user->password) {
        $_SESSION['username'] = $user->username;
        header("Location: welcome.php");
        exit();
    } else {
        echo "<p style='color:red;'>Invalid username or password</p>";
    }
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body class="login">
    <h2>Login</h2>
    <form method="post" action="login.php">
        Username: <input type="text" name="username" required><br>
        Password: <input type="password" name="password" required><br>
        <input type="submit" name="submit" value="Login">
    </form>
</body>
</html>
