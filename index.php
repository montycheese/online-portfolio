<!DOCTYPE HTML>

<html>
<head>
    <title>Montana Wong . Montana Wong</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
    <link rel="stylesheet" href="assets/css/main.css" />
    <!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
</head>
<body>
<?php include_once("includes/googleanalytics.php");?>
<!-- Banner -->
<section id="banner">
    <h2><strong>Montana Wong </strong></h2>
    <p>Developer, Designer, Doer</p>
    <ul class="actions">
        <li><a href="resume.php" class="button special">Résumé </a></li>
    </ul>
</section>
<?php
//if(isset($_GET["status"])){
  //  if($_GET["status"] == "emailsuccess"){
    //    echo "<br/><h2>Email sent!</h2><br/>";
    //}
//}
?>
<!-- One -->
<section id="one" class="wrapper special">
    <div class="inner">


        <!--TODO<img src="photo.jpg">-->
        <header class="major">
            <h2>About Me</h2>
        </header>
        <span  style="text-align: center;max-width:100%;"><img id="fullsize" src="images/antarctica.jpg" style="width:542px;" alt="Me" ></span>
        <br/><br/>
        <p>My name is Montana Wong and I'm a Senior at the University of Georgia. I specializing in developing Software, Databases,
            and Web front-end & back-end for a variety of applications.
            I'm also a moonlight amateur filmmaker.<br/><br/>
            If you want to collaborate on something cool, start the next Facebook,<br/>
            talk about a job/project, or just chat,
            I want to hear from you!

        </p>
        <div class="features">
            <div class="feature">
                <a href="projects.php">
                    <i class="fa fa-diamond"></i>
                    <h3>Software Projets</h3>
                    <p>A handful of projects from a variety of applications</p>
                </a>
            </div>
            <div class="feature">
                <a href="film_photo.php">
                    <i class="fa fa-camera-retro"></i>
                    <h3>Short Films and Photography</h3>
                    <p>Learning the art of Mise-en-Scène</p>
                </a>
            </div>
            <div class="feature">
                <a href="travels.php">
                    <i class="fa fa-paper-plane-o"></i>
                    <h3>Travel</h3>
                    <p>Where I've been, where I'm going</p>
                </a>
            </div>
            <div class="feature">
                <a href="https://github.com/montycheese">
                <i class="fa fa-save"></i>
                <h3>GitHub</h3>
                <p>Fork, Commit, Push, Pull.</p>
            </div>
            <div class="feature">
                <a href="https://www.linkedin.com/in/montanawong">
                    <i class="fa fa-envelope-o"></i>
                    <h3>LinkedIn</h3>
                    <p>Let's connect!</p>
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Two -->
<section id="two" class="wrapper style2 special">
    <div class="inner narrow">
        <header>
            <h2>Get in touch</h2>
        </header>
        <form class="grid-form" method="post" action="php/sendEmail.php">
            <div class="form-control narrow">
                <label for="name">Name</label>
                <input name="name" id="name" type="text">
            </div>
            <div class="form-control narrow">
                <label for="email">Email</label>
                <input name="email" id="email" type="email">
            </div>
            <div class="form-control">
                <label for="message">Message</label>
                <textarea name="message" id="message" rows="4"></textarea>
            </div>
            <ul class="actions">
                <li><input value="Send Message" type="submit"></li>
            </ul>
        </form>
    </div>
</section>

<!-- Footer includes javascript imports-->
<?php include("includes/footer.php");?>
<script>
    window.onresize = function(){
        var img = document.getElementById('fullsize');
        img.style.width = "100%";
    };
</script>
</body>
</html>
