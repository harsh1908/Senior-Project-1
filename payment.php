<?php
/**
 * Created by PhpStorm.
 * User: Nathaniel
 * Date: 2/20/2018
 * Time: 12:18 AM
 */
session_start();
/*if(!(isset($_SESSION['login'])&&$_SESSION['login']=="true")){
    header('Location: /');
}*/
//header('Location: /');
//data-zip-code="true"
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="author" content="Harsh Desai, Apu Tolia, Nathaniel Auxier">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <!-- Bootstrap CSS -->
    <title>Moove - let's share</title>
    <?php include 'includes/header-files.php'; ?>
</head>
<body bgcolor="#E6E6FA">

<!-- Navigation Bar -->
<?php include 'includes/profile-nav.php'; ?>
<?php //require_once('./config.php'); ?>
<div class="a2a_kit a2a_kit_size_32 a2a_default_style" id="centered_buttons" ></div>
<form style="background-image: url("/coin.jpg")" action="charge.php" method="POST">
    <script
            src="https://checkout.stripe.com/checkout.js" class="stripe-button"
            data-key="pk_test_3va8LcHzMOGkW9Zt1WTbqCQ9"
            data-amount="500"
            data-name="Moove Service"
            data-currency="USD"
            data-description="First Ride"
            data-image="https://stripe.com/img/documentation/checkout/marketplace.png"
            data-locale="auto">
    </script>
</form>


<!-- Footer -->

</body>
</html>
<!--<section>-->
<!--    --><?php //include 'includes/footer.php'; ?>
<!--</section>-->