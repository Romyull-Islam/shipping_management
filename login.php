
<?php include('server.php') ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Shipping</title>
    <meta name="description" content="HTML template for multiple tour agency, local agency, traveller, tour hosting based on Twitter Bootstrap 3.x.x" />
    <meta name="keywords" content="tour agency, tour guide, travel, trip, holiday, vocation, relax, adventure, virtual tour, tour planner" />
    <meta name="author" content="crenoveative">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="apple-touch-icon" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon" href="images/ico/apple-touch-icon-57-precomposed.png">
    <link rel="shortcut icon" href="images/ico/favicon.png">
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css" media="screen">
    <link href="css/main.css" rel="stylesheet">
    <link href="css/plugin.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/your-style.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/loginstyle.css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body class="home transparent-header">

<div id="introLoader" class="introLoading"></div>

<!-- start Container Wrapper -->

<div class="container-wrapper">

    <!-- start Header -->

    <header id="header">

        <!-- start Navbar (Header) -->
        <nav class="navbar navbar-default navbar-fixed-top navbar-sticky-function navbar-arrow">

            <div class="container">

                <div class="logo-wrapper">
                    <div class="logo">
                        <a href="index.html"><img class="im" src="images/favicon.png" alt="Logo" /></a>
                    </div>
                </div>
                <div id="navbar" class="navbar-nav-wrapper">

                    <ul class="nav navbar-nav" id="responsive-menu">

                        <li>
                            <a href="index.html">Home</a>

                        </li>

                        <li>
                            <a href="#">Shipping</a>
                            <ul>
                                <li><a href="shipping_policy.html">Shipping Policy</a></li>
                                <li><a href="offered-payment.html">Payment</a></li>
                                <li><a href="offered-payment-done.html">Payment Done</a></li>
                                <li><a href="booking.html">Book Shipment</a></li>
                                <li><a href="shipment_done.html">Shipment Done</a></li>
                            </ul>
                        </li>


                        <li>
                            <a href="gallery.html">Gallery</a>

                        </li>

                        <li>
                            <a href="#">Pages</a>
                            <ul>

                                <li><a href="about-us.html">About Us</a></li>
                                <li><a href="contact-form.php">Contact Us</a></li>

                            </ul>
                        </li>

                    </ul>


                </div><!--/.nav-collapse -->

                <div class="nav-mini-wrapper">
                    <ul class="nav-mini">
                        <li><a  href="register.php"><i class="icon-user-follow" data-toggle="tooltip" data-placement="bottom" title="sign up"></i></a></li>
                        <li><a  href="login.php"><i class="icon-login" data-toggle="tooltip" data-placement="bottom" title="login"></i> </a></li>
                    </ul>
                </div>

            </div>

            <div id="slicknav-mobile"></div>

        </nav>
        <!-- end Navbar (Header) -->

    </header>

    <!-- end Header -->

    <!-- start Main Wrapper -->

    <div class="main-wrapper scrollspy-container">

        <!-- start breadcrumb -->

        <div class="breadcrumb-image-bg pb-100 no-bg" style="background-image:url('images/hero-header/05.jpg');">
            <div class="container">

                <div class="page-title">

                    <div class="row">

                        <div class="col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3">

                            <h2>Please Login First</h2>

                        </div>

                    </div>

                </div>

                <div class="breadcrumb-wrapper">

                    <ol class="breadcrumb">
                        <li><a href="index.html">Home</a></li>
                        <li class="active">Login</li>
                    </ol>

                </div>
            </div>

        </div>

        <!-- end breadcrumb -->

        <div class="bg-light">

            <div class="create-tour-wrapper">

                <div class="container">

                    <div class="row">

                        <div class="col-xs-12 col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2">

                            <div class="form">

                                <div class="create-tour-inner">
                                    <form id="wide" method="post" action="login.php">
                                        <?php include('errors.php'); ?>
                                        <div class="input-group">
                                            <label>Username</label>
                                            <input type="text" name="username" >
                                        </div>
                                        <div class="input-group">
                                            <label>Password</label>
                                            <input type="password" name="password">
                                        </div>
                                        <div class="input-group">
                                            <button type="submit" class="btn" name="login_user">Login</button>
                                        </div>
                                        <p>
                                            Not yet a member? <a href="register.php">Sign up</a>
                                        </p>
                                    </form>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

        <!-- end Main Wrapper -->

        <!-- start Footer Wrapper -->

        <div class="footer-wrapper scrollspy-footer">

            <footer class="main-footer">





                <footer class="bottom-footer">

                    <div class="container">

                        <div class="row">

                            <div class="col-xs-12 col-sm-6 col-md-4">

                                <p class="copy-right">&#169; 2018 RADIANCE Shipping Limited</p>

                            </div>



                            <div class="col-xs-12 col-sm-12 col-md-4">
                                <ul class="bottom-footer-menu for-social">
                                    <li><a href="http://www.twitter.com" target = "_blank"><i class="icon-social-twitter" data-toggle="tooltip" data-placement="top" title="twitter"></i></a></li>
                                    <li><a href="http://www.facebook.com" target = "_blank"><i class="icon-social-facebook" data-toggle="tooltip" data-placement="top" title="facebook"></i></a></li>
                                    <li><a href="http://www.google-plus.com" target = "_blank"><i class="icon-social-google" data-toggle="tooltip" data-placement="top" title="google plus"></i></a></li>
                                    <li><a href="http://www.instrgram.com" target = "_blank"><i class="icon-social-instagram" data-toggle="tooltip" data-placement="top" title="instrgram"></i></a></li>
                                </ul>
                            </div>

                        </div>

                    </div>


                </footer>

        </div>



        <!-- end Footer Wrapper -->

    </div>

    <!-- end Container Wrapper -->


    <!-- start Back To Top -->

    <div id="back-to-top">
        <a href="#"><i class="ion-ios-arrow-up"></i></a>
    </div>

    <!-- end Back To Top -->



    <!-- end Forget Password Modal -->

    <!-- Core JS -->
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/core-plugins.js"></script>
    <script type="text/javascript" src="js/customs.js"></script>

    <!-- Only in Home Page -->
    <script type="text/javascript" src="js/jquery.flexdatalist.js"></script>

</body>
</html>