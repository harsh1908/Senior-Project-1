<?php
/**
 * Created by PhpStorm.
 * User: Nathaniel
 * Date: 2/23/2018
 * Time: 10:18 PM
 */
// Tests path to determine if test is local or live, requires
// corresponding file
//session_start();

$localPath = "C:/xampp/htdocs/stripe-php/init.php";
$livePath = "/var/www/html/stripe-php/init.php";

//require_once('vendor/autoload.php');
if (file_exists ($localPath))
{
    require_once('C:/xampp/htdocs/stripe-php/init.php');
}
elseif (file_exists($livePath))
{
    require_once('/var/www/html/stripe-php/init.php');
}

//require_once('./init.php');
$stripe = array(
    "publishable_key" => "pk_test_3va8LcHzMOGkW9Zt1WTbqCQ9",
    "secret_key"      => "sk_test_6xI7DFWV4Sk2aEnXQkIwzyGt"
);

\Stripe\Stripe::setApiKey($stripe['secret_key']);
?>
