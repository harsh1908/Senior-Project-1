<?php session_start();

if(isset($_SESSION['login'])&&$_SESSION['login']=="true"){
    header('Location: /profile.php');
}

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="author" content="Harsh Desai, Apu Tolia, Nathan Auxier, Sagun Sedai, Adam Vida, Wesley Shall">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <!-- Bootstrap CSS -->
    <title>Moove - Innovate the World</title>

    <?php include 'includes/header-files.php'; ?>

</head>
<body>
    <!-- Navigation Bar -->
        <?php include 'includes/nav.php'; ?>

    <!-- Body Main -->
    <section>
    <?php include 'includes/main.php'; ?>
    </section>

    <!-- Footer -->
    <section>
        <?php include 'includes/footer.php'; ?>
    </section>
</body>
</html>
