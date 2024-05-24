<?php 
  include_once 'header.php';
?>
<section class="index-intro">
     <?php
        if(isset($_SESSION["userid"])){
            echo "<p>Welcome " . $_SESSION["useruid"] . "</p>";
            }
     ?>
<?php
session_start();

if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Welcome</title>
</head>
<body class = "welcome">
    <h2>Welcome, <?php echo htmlspecialchars($_SESSION['username']); ?>!</h2>

    <li><a href="logout.php">Logout</a></li>
</body>
</html>
