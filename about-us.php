<?php
session_start();
?><!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="author" content="Harsh Desai, Apu Tolia, Nathan Auxier ">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <!-- Bootstrap CSS -->
    <title>About Us | Moove - Let's Innovate the World</title>

    <?php include 'includes/header-files.php'; ?>

    <!-- Sticky Note CSS -->
    <link href="css/stickynote.css" rel="stylesheet">




</head>
<body>
<!-- Navigation Bar -->
<section>
    <?php include 'includes/nav.php'; ?>
</section>

<!-- About Us -->
<section>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2>About Us</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12"><hr></div>
        </div>
        <div class="row">
            <div class="col-lg-9">
                <p id="about-para" class="text-justify">We are a fast-growing company with a simple aim in our minds. Lets make travelling more interesting. This led us to make an app like Moove that primarily focuses on extending the extents of travelling with new people.  </p>
            </div>
            <div class="col-lg-3 text-justify" id="stickynote">
                <ul>
                    <li>
                        <a href="#">
                            <p>When you do things right, people won't be sure you've done anything at all.</p>
                            <p>~~ Team Moove</p>
                        </a>
                    </li>
                </ul>
            </div>

        </div>
    </div>
</section>

<!-- Founders -->
<section>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2>Founders</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12"><hr></div>
        </div>
        <div class="row">
            <div class="col-lg-2">
                <img src="images/harsh.jpg" class="img-fluid" alt="Random">
            </div>
            <div class="col-lg-10">
                <h3>Harsh Desai<em class="pull-right small"><u>Founder and Designer</u></em></h3>
                <br>
                <p>Based in Troy, Michigan, Harsh is pursuing Computer Science engineering at Oakland University. He is a techno-head with an eye for unusual developments. He is always the 'jugadu' kind of guy. He was born and brought up in India, and is still Indian by heart.</p>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12"><hr></div>
        </div>
        <div class="row">
            <div class="col-lg-2">
                <img src="images/apu.jpg" class="img-fluid" alt="Random">
            </div>
            <div class="col-lg-10">
                <h3>Apu Tolia<em class="pull-right small"><u>Co-Founder and Programmer</u></em></h3>
                <br>
                <p>Apurva Tolia is a current student at Oakland University studying Informational Technology with a focus in System’s Administrators. He have a lot of experience when it comes to MySQL and HTML. Eventually, he loves to create a start up and control the entire network and database infrastructure. </p>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12"><hr></div>
        </div>
        <div class="row">
            <div class="col-lg-2">
                <img src="images/nathan.jpg" class="img-fluid" alt="Random">
            </div>
            <div class="col-lg-10">
                <h3>Nathan Auxier<em class="pull-right small"><u>Editor and Marketing Head</u></em></h3>
                <br>
                <p>Based out of Brighton, Michigan, Nathaniel is pursuing Computer Science engineering at Oakland University. He has a knack for analyzing problems and developing new ideas. He is the I in team.</p>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-lg-2">
                <img src="images/sagun.jpg" class="img-fluid" alt="Random">
            </div>
            <div class="col-lg-10">
                <h3>Sagun Sedai <em class="pull-right small"><u>Full Stack Developer</u></em></h3>
                <br>
                <p>Sagun is currently a senior pursuing a Bachelor's degree in Computer Science at Oakland University. He really has a passion for web development and likes to solve complex problems. Some of his favorite hobbies are to play soccer and volunteer to make a positive difference in the community</p>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-lg-2">
                <img src="images/adam.png" class="img-fluid" alt="Random">
            </div>
            <div class="col-lg-10">
                <h3>Adam Vida<em class="pull-right small"><u>Web Developer</u></em></h3>
                <br>
                <p>Adam is pursuing a bachelors degree in Information Technology from Oakland University. When not coding you can find him playing video games or watching sports with his friends.</p>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-lg-2">
                <img src="images/wesley.jpg" class="img-fluid" alt="Random">
            </div>
            <div class="col-lg-10">
                <h3>Wesley Shall<em class="pull-right small"><u>Android Application Developer</u></em></h3>
                <br>
                <p>Wesley is currently a Senior at Oakland University. He is really passionate about the Android application development and Web Development. When its about coding he always give his 100 percent on it. </p>
            </div>
        </div>
    </div>
</section>
<!-- Footer -->
<section>
    <?php include 'includes/footer.php'; ?>
</section>
</body>
</html>