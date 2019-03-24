<?php

session_start();
if(!(isset($_SESSION['login'])&&$_SESSION['login']=="true")){
    header('Location: /');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="author" content="Harsh Desai, Apu Tolia, Nathaniel Auxier">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <link href="scratch.css" rel="stylesheet">
<!--    <link href="css/style.css" rel="stylesheet">-->
<!--    <script src="scratch.js"></script>-->

    <!-- Bootstrap CSS -->
<!--    <title>Moove - let's share</title>-->
<!--    --><?php //include 'includes/header-files.php'; ?>
</head>
<body>
<!-- Navigation Bar-->
<?php //include 'includes/profile-nav.php'; ?>
<?php //////require_once('./config.php'); ?>

<div class='container'>
    <div class='info'>
        <h1>Payment Card</h1>

    </div>
    <form class='modal'>
        <header class='header'>
            <h1>Payment of $145.00</h1>
            <div class='card-type'>
                <a class='card active' href='#'>
                    <img src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/169963/Amex.png'>
                </a>
                <a class='card' href='#'>
                    <img src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/169963/Discover.png'>
                </a>
                <a class='card' href='#'>
                    <img src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/169963/Visa.png'>
                </a>
                <a class='card' href='#'>
                    <img src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/169963/MC.png'>
                </a>
            </div>
        </header>
        <div class='content'>
            <div class='form'>
                <div class='form-row'>
                    <div class='input-group'>
                        <label for=''>Name on card</label>
                        <input placeholder='' type='text'>
                    </div>
                </div>
                <div class='form-row'>
                    <div class='input-group'>
                        <label for=''>Card Number</label>
                        <input maxlength='16' placeholder='' type='number'>
                    </div>
                </div>
                <div class='form-row'>
                    <div class='input-group'>
                        <label for=''>Expiry Date</label>
                        <input placeholder='' type='month'>
                    </div>
                    <div class='input-group'>
                        <label for=''>CVS</label>
                        <input maxlenght='4' placeholder='' type='number'>
                    </div>
                </div>
            </div>
        </div>
        <footer class='footer'>
            <button class='button'>Complete Payment</button>
        </footer>
    </form>
    <p></p>
    <!-- Footer -->

</div>

<!--<div class="page">-->
<!--    <div class="page__demo">-->
<!--        <form class="payment-card">-->
<!--            <div class="payment-card__front">-->
<!--                <div class="payment-card__group">-->
<!--                    <label class="payment-card__field">-->
<!--                        <span class="payment-card__hint">Holder of card</span>-->
<!--                        <input class="payment-card__input" placeholder="Holder of card" pattern="[A-Za-z, ]{2,}" name="holder-card" required>-->
<!--                    </label>-->
<!--                </div>-->
<!--                <div class="payment-card__group">-->
<!--                    <label class="payment-card__field">-->
<!--                        <span class="payment-card__hint">Number of card</span>-->
<!--                        <input type="text" class="payment-card__input" placeholder="Number of card" pattern="[0-9]{16}" name="number-card" required>-->
<!--                    </label>-->
<!--                </div>-->
<!--                <div class="payment-card__group">-->
<!--                    <span class="payment-card__caption">valid thru</span>-->
<!--                </div>-->
<!--                <div class="payment-card__group payment-card__footer">-->
<!--                    <label class="payment-card__field payment-card__month">-->
<!--                        <span class="payment-card__hint">Month</span>-->
<!--                        <input type="text" class="payment-card__input" placeholder="MM" maxlength="2" pattern="[0-9]{2}" name="mm-card" required>-->
<!--                    </label>-->
<!--                    <span class="payment-card__separator">/</span>-->
<!--                    <label class="payment-card__field payment-card__year">-->
<!--                        <span class="payment-card__hint">Year</span>-->
<!--                        <input type="text" class="payment-card__input" placeholder="YY" maxlength="2" pattern="[0-9]{2}" name="year-card" required>-->
<!--                    </label>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="payment-card__back">-->
<!--                <div class="payment-card__group">-->
<!--                    <label class="payment-card__field payment-card__cvc">-->
<!--                        <span class="payment-card__hint">CVC</span>-->
<!--                        <input type="text" class="payment-card__input" placeholder="CVC" maxlength="3" pattern="[0-9]{3}" name="cvc-card" required>-->
<!--                    </label>-->
<!--                </div>-->
<!--            </div>-->
<!---->
<!---->
<!--    </div>-->
<!---->
<!--    </form>-->
<!--</div>-->
<!--<hr>-->
<!---->
<!--<footer class='footer'>-->
<!--    <button class="btn form-control login_btn" type="button" style="background-color: lightgray"  > Complete Payment</button>-->
<!--</footer>-->
<section>
    <?php include 'includes/footer.php'; ?>
</section>

</body>
</html>


<!--<div class='container'>-->
<!--    <div class='info'>-->
<!--        <h1>Payment Card</h1>-->
<!--        <span>-->
<!--      Made with-->
<!--      <i class='fa fa-heart animated infinite pulse'></i>-->
<!--      by-->
<!--      <a href='http://andytran.me'>Andy Tran</a>-->
<!--    </span>-->
<!--    </div>-->
<!--    <form class='modal'>-->
<!--        <header class='header'>-->
<!--            <h1>Payment of $145.00</h1>-->
<!--            <div class='card-type'>-->
<!--                <a class='card active' href='#'>-->
<!--                    <img src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/169963/Amex.png'>-->
<!--                </a>-->
<!--                <a class='card' href='#'>-->
<!--                    <img src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/169963/Discover.png'>-->
<!--                </a>-->
<!--                <a class='card' href='#'>-->
<!--                    <img src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/169963/Visa.png'>-->
<!--                </a>-->
<!--                <a class='card' href='#'>-->
<!--                    <img src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/169963/MC.png'>-->
<!--                </a>-->
<!--            </div>-->
<!--        </header>-->
<!--        <div class='content'>-->
<!--            <div class='form'>-->
<!--                <div class='form-row'>-->
<!--                    <div class='input-group'>-->
<!--                        <label for=''>Name on card</label>-->
<!--                        <input placeholder='' type='text'>-->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class='form-row'>-->
<!--                    <div class='input-group'>-->
<!--                        <label for=''>Card Number</label>-->
<!--                        <input maxlength='16' placeholder='' type='number'>-->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class='form-row'>-->
<!--                    <div class='input-group'>-->
<!--                        <label for=''>Expiry Date</label>-->
<!--                        <input placeholder='' type='month'>-->
<!--                    </div>-->
<!--                    <div class='input-group'>-->
<!--                        <label for=''>CVS</label>-->
<!--                        <input maxlenght='4' placeholder='' type='number'>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--        <footer class='footer'>-->
<!--            <button class='button'>Complete Payment</button>-->
<!--        </footer>-->
<!--    </form>-->
<!--</div>-->
