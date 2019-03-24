<?php
session_start();
if(!(isset($_SESSION['login'])&&$_SESSION['login']=="true")){
    header('Location: /');

}
$fname = "";
$lname = "";
$address = "";
$city = "";
$postal = "";
$state = "";
$country = "";
$phone = "";
$notify = '1';
include 'db/dbconnect.php';
include 'db/functions.php';
if(isset($_SESSION['email']))

{
    $email = $_SESSION['email'];
    $user = getUserinfo($email);
    $fname = $user['first_name'];
    $lname = $user['last_name'];
    $address = $user['address'];
    $postal = $user['postal'];
    $city = $user['city'];
    $state = $user['state'];
    $country = $user['country'];
    $phone = $user['phone'];
    if(isset($_user['image']))
        $image = $_user['image'];
    $notify = $user['notifications'];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>


    <!-- Bootstrap CSS -->

    <title>Moove - Innovate the World</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <?php include 'includes/header-files.php'; ?>



</head>

<body>
<!-- Profile Nav -->
<section>
    <?php include 'includes/profile-nav.php'; ?>
</section>

<!-- Profile Personal Setting Panel -->
<section>
    <?php include 'includes/profile-panel.php'; ?>
</section>


<!-- Footer -->
<section>
    <?php include 'includes/footer.php' ?>
</section>
</body>

</html>