<?php
session_start();
if(!(isset($_SESSION['login'])&&$_SESSION['login']=="true")){
    header('Location: /');
}
?><!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="author" content="Harsh Desai, Apu Tolia, Nathan">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <!-- Bootstrap CSS -->
    <title>Moove- Innovate the World</title>

    <?php include 'includes/header-files.php'; ?>


</head>

<body>
<!-- Profile Nav -->
<section>
    <?php include 'includes/profile-nav.php'; ?>
</section>

<!-- Profile Dashboard -->
<?php include 'includes/profile-main-dashboard.php' ?>

<!-- Footer -->
<section>
    <?php include 'includes/footer.php' ?>
</section>
</body>

</html>