<!DOCTYPE html>
<?php
require_once 'User.php';
$user = new User("Kam", "kam0101", "qwwerty");

?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Test</title>
</head>
<body>
    <h1> Welcome on 
<?php
printf("🔬")
?>
        training website
    </h1>
 <?php
 $user->display();
 ?>
</body>
</html>

