<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Register</title>
    <link rel="stylesheet" type="text/css" href="style6.css">
    <link rel="stylesheet" type="text/css" href="style1.css">
    <link rel="stylesheet" href="bootstrap.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.2/css/all.css">

</head>
<body>

<?php
require "Header.php";

?>

<div class="regbox" style="top: 80%;">
    <h1> Create a new account </h1>
    <form>
        <p>Username</p>
        <input type="text" placeholder="Enter Username">
        <p>Firstname</p>
        <input type="text" placeholder="Enter first-name">
        <p>Lastname</p>
        <input type="text" placeholder="Enter last-name">
        <p>E-mail</p>
        <input type="email" placeholder="Enter e-mail">
        <p>Passsword</p>
        <input type="password" placeholder="Enter Password">

        <input type="submit" value="Create account" style="background-color: #601286">
        <a href="loginpage.php">Already registered?</a><br>


    </form>
</div>
</body>
</html>