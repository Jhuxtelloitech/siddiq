<!DOCTYPE html>
<html lang="en-gb" dir="ltr">

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>ASSIN NORTH SENIOR HIGH TECHNICAL-ANSTECH</title>
<script src="assets/js/5F7Vrfd93Winz4wbXg6tieJMlHQ.js"></script>
<link rel="icon" type="image/png" href="assets/img/bg1.png">
<link href="assets/css/font.css" rel="stylesheet">
<link rel="stylesheet" href="assets/css/main.css" />
<style type="text/css">
   #particles-js {
        position: absolute;
        left: 0px;
        top: 0px;
        right: 0px;
        width: 100%;
      }
</style>

<script type="text/javascript">
    function disableBack() { window.history.forward(); }
    setTimeout("disableBack()", 0);
    window.onunload = function () { null };
</script>

</head>
<body class="uk-background-primary" style="background: url(assets/img/logo.png); background-size: cover;background-repeat: no-repeat;">
<div data-uk-sticky="sel-target: .uk-navbar-container; cls-active: uk-navbar-sticky">
    <nav class="uk-navbar-container uk-margin uk-light">
        <div class="uk-container">
            <div data-uk-navbar>
                <div class="uk-navbar-left"><img src="assets/img/bg.png" style="margin-right: 0px; " width="50" height="50">
                    <a class="uk-navbar-item uk-logo uk-text-small" href="index-2.html" style="margin-left: -5px; font-size: 18px;">ANSTECH</a>
                </div>
                <div class="uk-navbar-center uk-visible@m">
                    <ul class="uk-navbar-nav">
                        <li class="uk-active"><a href="index-2.html" style="text-transform:uppercase; font-size: 18px;"><img src="assets/img/home.png" style="margin-right: 0px; " width="50" height="50">Home</a></li>
                        <li><a href="admissions.html" style="text-transform:uppercase; font-size: 18px;"> <img src="assets/img/adm.png" style="margin-right: 0px; " width="50" height="50">Admissions</a></li>
                    </ul>
                </div>
                <div class="uk-navbar-right">
                    <a class="uk-navbar-toggle uk-hidden@m" href="#offcanvas" data-uk-navbar-toggle-icon data-uk-toggle></a>
                </div>
            </div>
        </div>
    </nav>
</div>
<style type="text/css">
    .uk-form-label {color:#fff;} 
    .uk-container-small {
        max-width: 450px;
    } 

    @media(max-width: 510px) {
        .uk-container {
            margin: 5px;
        }
    }
    .tm-margin-large-top {
        margin-top: 70px;
    }
    @media (min-width: 640px) { 
        .tm-form-xlarge:not(textarea):not([multiple]):not([size]){
            height: 45px;
        }
        .tm-form-contact .uk-form-label {
            font-size: 1.0rem; 
        }
        .tm-form-xlarge {
            font-size: 1.0rem;
            letter-spacing: 1px;
        }
    } 

    .tm-button:hover {
        background: red!important;
    }

    @supports (-webkit-backdrop-filter: none) or (backdrop-filter: none) {
        .tm-button:hover {
            -webkit-backdrop-filter: blur(10px)!important;
            backdrop-filter: blur(10px)!important;
            background-color: SlateBlue!important;
            cursor: pointer!important;
        }
    }

</style>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>



<section class="tm-margin-large-top">
    <div class="uk-container uk-container-small" style="background-color: rgb(33, 25, 21);padding: 30px;border-radius: 5px;">   
        <div class="uk-text-center">
            <?php
            // Assuming you have started the session before this point
            session_start();

            // Check if the user is logged in
            if(isset($_SESSION['user'])) {
                // User is logged in, display dashboard
                $user = $_SESSION['user'];

                echo "<div class='uk-flex uk-flex-between uk-flex-middle'>
                          <div>
                              <button class='tm-button' onclick='viewPersonalRecords()'>Personal Records</button>
                          </div>
                          <div>
                              <p style='color: #fff;'>Welcome, " . $user['name'] . "</p>
                          </div>
                          <div>
                              <button class='tm-button' onclick='logout()'>Logout</button>
                          </div>
                      </div>";
            } else {
                // User is not logged in, show login form or redirect to login page
                echo "<p style='color: #fff;'>Please log in to view your dashboard.</p>";
                // You can add a login form or redirect to the login page
            }
            ?>
        </div> 
    </div>
</section>



<footer class="uk-section tm-primary-color-dark uk-light uk-text-center" style="margin-top: 50px; height: 150px;z-index:-1;">
    <div class="uk-container">
        <div class="uk-margin-medium tm-text-xsmall uk-text-meta copyright">
            <a href="https://jhuxtelloitech.github.io/jhuxtelloitech/#" target="_blank">JESTAi</a>|
            <a href="https://jhuxtelloitech.github.io/jhuxtelloitech/" target="_blank">COPYRIGHT &COPY</a> | 2023-2025
        </div>
    </div>
</footer>

<div id="offcanvas" data-uk-offcanvas="flip: true; overlay: true">
    <div class="uk-offcanvas-bar" style="background-color: #152029;">
        <button class="uk-offcanvas-close" type="button" data-uk-close></button>
        <ul class="uk-nav uk-nav-default">
            <li class="uk-nav-header uk-logo">&nbsp;</li>
            <li>&nbsp;</li>
            <li><a href="index-2.html" style="text-transform:uppercase;">Homepage</a></li>
            <li><a href="admissions.html" style="text-transform:uppercase;">Admissions</a></li>
        </ul>
    </div>
</div>

<script>
    function validate(){
        if(document.getElementById("index_no").value.length != 12){
            alert("Error: Index number should be 12 characters in length");
            return false;
        } else {
        }
    }
</script>

<div id="offcanvas" data-uk-offcanvas="flip: true; overlay: true">
    <div class="uk-offcanvas-bar" style="background-color: #152029;">
        <button class="uk-offcanvas-close" type="button" data-uk-close></button>
        <ul class="uk-nav uk-nav-default">
            <li class="uk-nav-header uk-logo">&nbsp;</li>
            <li>&nbsp;</li>
            <li><a href="index-2.html" style="text-transform:uppercase;">Homepage</a></li>
            <li><a href="admissions.html" style="text-transform:uppercase;">Admissions</a></li>
        </ul>
    </div>
</div>

<script src="assets/js/uikit.min.js" type="724ad945e7657fcfa5cc1a25-text/javascript"></script>
<script src="assets/js/uikit-icons.min.js" type="724ad945e7657fcfa5cc1a25-text/javascript"></script>
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-112804063-4" type="724ad945e7657fcfa5cc1a25-text/javascript"></script>
<script src="assets/js/rocket-loader.min.js" data-cf-settings="724ad945e7657fcfa5cc1a25-|49" defer=""></script>
<script type="text/javascript" src="assets/particles/particles.js"></script>
<script type="text/javascript" src="assets/particles/app.js"></script>
<script src="../code.jquery.com/jquery-3.6.0.js"></script>
</body>
</html>
