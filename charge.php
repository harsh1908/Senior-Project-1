<?php
/**
 * Created by PhpStorm.
 * User: Nathaniel
 * Date: 2/23/2018
 * Time: 10:28 PM
 */
  require_once('./config.php');
  # Create if valid credit card number thank you page
  # else show error invalid credit card number
  $token  = $_POST['stripeToken'];
  $email  = $_POST['stripeEmail'];

  $customer = \Stripe\Customer::create(
    array(
      'email' => $email,
      'source'  => $token
          )
  );
// test values
  $charge = \Stripe\Charge::create(
    array(
      'customer' => $customer->id,
      'amount'   => 500,
      'currency' => 'usd'
          )
  );

  header('Location: thank-you.php');
exit();
?>
