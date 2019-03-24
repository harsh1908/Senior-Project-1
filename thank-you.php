<?php
/**
 * Created by PhpStorm.
 * User: Nathaniel
 * Date: 2/20/2018
 * Time: 12:54 AM
 */
?>
<!DOCTYPE html>
<html lang="en">
<style type="text/css">
    #centered_buttons { display: flex; justify-content: center; }
</style>
<head>
    <?php include 'includes/profile-nav.php'; ?>
    <meta charset="utf-8">
    <?php include 'includes/header-files.php'; ?>

    <div class="a2a_kit a2a_kit_size_32 a2a_default_style" id="centered_buttons">
    </div>

    <div class="jumbotron text-xs-center">
        <h1 class="display-3">Thank You!</h1>
        <p class="lead">Please check your email for a receipt and confirmation of your order.</p>
        <hr>
        <p>
            Having trouble? <a href="contact-us.php">Contact us</a>
        </p>
        <p class="lead">
            <a class="btn btn-primary btn-sm" href="index.php" role="button">Continue to homepage</a>
        </p>
    </div>
</head>
<body>

<section>
    <?php include 'includes/footer.php'; ?>
</section>

</body>
</html>