<?php
session_start();
if(!(isset($_SESSION['login'])&&$_SESSION['login']=="true")){
    header('Location: /');
}
include 'db/dbconnect.php';
include 'db/functions.php';

    $fname = "";
    $lname = "";

if(isset($_SESSION['email'])){
    $email = $_SESSION['email'];
    $user = getUserinfo($email);
    $fname = $user['first_name'];
    $lname = $user['last_name'];
}

if(isset($_SESSION['email'])){
    $user = getUserinfo($_SESSION['email']);
    $image = $user['image'];
}
?><!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="author" content="Harsh Desai, Apu Tolia, Nathan Auxier, Sagun Sedai, Adam Vida, Wesley Shall">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <link href="css/style.css" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <title>Moove - Innovate the World</title>

    <?php include 'includes/header-files.php'; ?>
</head>

<body>
<div id=""particles-js"></div>
    <script type="text/javascript" src="js/app.js"></script>
    <script type="text/javascript" src="js/particles.js"></script>

    <!-- Profile Nav -->
    <section>
    <?php include 'includes/profile-nav.php'; ?>
    </section>

    <!-- Profile Dashboard -->
    <?php include 'includes/profile-role.php' ?>

    <!-- Search a ride -->
    <?php include 'includes/profile-main-dashboard.php'?>

    <!-- Footer -->
    <section>
    <?php include 'includes/footer.php' ?>
    </section>


    <!-- Host a ride -->
    <?php include 'includes/hostride.php'?>

    <!-- Search a ride -->
    <?php include 'includes/searchride.php'?>



</body>

</html>