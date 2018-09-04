<?php
if (isset($_POST['submit'])) {

    $message =
        'Full Name:	' . $_POST['fullname'] . '<br />
Subject:	' . $_POST['subject'] . '<br />
Email:	' . $_POST['emailid'] . '<br />
Message:	' . $_POST['message'] . '
';
    require "phpmailer/class.phpmailer.php"; //include phpmailer class

    // Instantiate Class  
    $mail = new PHPMailer();

    // Set up SMTP  
    $mail->IsSMTP();                // Sets up a SMTP connection  
    $mail->SMTPAuth = true;         // Connection with the SMTP does require authorization    
    $mail->SMTPSecure = "ssl";      // Connect using a TLS connection  
    $mail->Host = "smtp.gmail.com";  //Gmail SMTP server address
    $mail->Port = 465;  //Gmail SMTP port
    $mail->Encoding = '7bit';

    // Authentication  
    $mail->Username = "romy@example.com"; // Your full Gmail address
    $mail->Password = "####"; // Your Gmail password

    // Compose
    $mail->SetFrom($_POST['emailid'], $_POST['fullname']);
    $mail->AddReplyTo($_POST['emailid'], $_POST['fullname']);
    $mail->Subject = "New Contact Form Enquiry";      // Subject (which isn't required)  
    $mail->MsgHTML($message);

    // Send To  
    $mail->AddAddress("romyullislam2012@gmail.com", "Romyull Islam"); // Where to send it - Recipient
    $result = $mail->Send();        // Send!
    $message = $result ? 'Successfully Sent!' : 'Sending Failed!';
    unset($mail);

}
?>
<!doctype html>
<html lang="en">


<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Shipping</title>

    <link rel="apple-touch-icon" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon" href="images/ico/apple-touch-icon-57-precomposed.png">
    <link rel="shortcut icon" href="images/ico/favicon.png">

    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css" media="screen">
    <link href="css/main.css" rel="stylesheet">
    <link href="css/plugin.css" rel="stylesheet">

    <link href="css/style.css" rel="stylesheet">


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script>
        $(document).ready(function () {
            $(".btn").click(function () {
                $("input[type='text'], textarea").val("");
            });
        });
    </script>


</head>

<body class="transparent-header">

<div class="container-wrapper">

    <header id="header">

        <nav class="navbar navbar-default navbar-fixed-top navbar-sticky-function navbar-arrow">

            <div class="container">

                <div class="logo-wrapper">
                    <div class="logo">
                        <a href="index.html"><img class="im" src="images/favicon.png" alt="Logo"/></a>
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


                </div>

                <div class="nav-mini-wrapper">
                    <ul class="nav-mini">
                        <li><a href="register.php"><i class="icon-user-follow" data-toggle="tooltip"
                                                      data-placement="bottom" title="sign up"></i></a></li>
                        <li><a href="login.php"><i class="icon-login" data-toggle="tooltip" data-placement="bottom"
                                                   title="login"></i> </a></li>
                    </ul>
                </div>

            </div>

            <div id="slicknav-mobile"></div>

        </nav>

    </header>


    <div class="main-wrapper scrollspy-container">


        <div class="breadcrumb-wrapper">
            <div class="container">
                <ol class="breadcrumb">
                    <li><a href="index.html">Home</a></li>
                    <li class="active">Contact Us</li>
                </ol>
            </div>
        </div>


        <div class="pt-50">

            <div class="container">

                <div class="row mb-10">

                    <div class="col-xs-12 col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2">

                        <div class="section-title">

                            <h2>Contact Us</h2>
                        </div>
                        <div class="row">
                            <div class="col-xs-12 col-sm-7 col-md-6 col-md-offset-1 mb-30-xs">
                                <form name="forml" id="contact-form" class="contact-form-wrapper" method="post">

                                    <div class="messages"></div>

                                    <div class="row">

                                        <div class="col-sm-12">

                                            <div class="form-group">
                                                <label for="form_name">Your Name <span class="font10 text-danger">(required)</span></label>
                                                <input id="form_name" type="text" class="form-control" name="fullname"
                                                       placeholder="Full Name"/>
                                                <div class="help-block with-errors"></div>
                                            </div>

                                        </div>

                                        <div class="col-sm-12">

                                            <div class="form-group">
                                                <label for="form_email">Your Email <span class="font10 text-danger">(required)</span></label>
                                                <input id="form_email" type="email" class="form-control" name="emailid"
                                                       data-error="Your email is required and must be a valid email address"
                                                       required="required"/>
                                                <div class="help-block with-errors"></div>
                                            </div>

                                        </div>

                                        <div class="col-sm-12">

                                            <div class="form-group">
                                                <label>Subject</label>
                                                <input type="text" class="form-control" name="subject"/>
                                            </div>

                                        </div>

                                        <div class="col-sm-12">

                                            <div class="form-group">
                                                <label for="form_message">Message <span class="font10 text-danger">(required)</span></label>
                                                <textarea id="form_message" class="form-control" name="message" rows="5"
                                                          data-min-length="40"
                                                          data-error="Your message is required and must not less than 40 characters"
                                                          required="required"></textarea>
                                                <div class="help-block with-errors"></div>
                                            </div>

                                        </div>

                                        <div class="col-sm-12 text-right text-left-xs">
                                            <input type="submit" class="mt-5 btn-primary" name="submit"
                                                   value="Send Message"/>
                                        </div>

                                    </div>

                                </form>
                            </div>

                            <div class="col-xs-12 col-sm-5 col-md-4">

                                <ul class="address-list">
                                    <li>
                                        <h5>Address</h5>
                                        <address> Mohammadpur, <br/>Dhaka <br/>Bangladesh</address>
                                    </li>
                                    <li>
                                        <h5>Email</h5><a href="#">romyullislam@hmail.com</a>
                                    </li>
                                    <li>
                                        <h5>Phone Number</h5><a href="#">+8801682314461</a>
                                    </li>
                                    <li>
                                        <h5>Skype</h5><a href="#">romyull.islam</a>
                                    </li>
                                    <li>
                                        <h5>Social Networks</h5>
                                        <div class="contact-social">

                                            <a href="#" data-toggle="tooltip" data-placement="top" title="Facebook"><i
                                                        class="fa fa-facebook"></i></a>
                                            <a href="#" data-toggle="tooltip" data-placement="top" title="Twitter"><i
                                                        class="fa fa-twitter"></i></a>
                                            <a href="#" data-toggle="tooltip" data-placement="top"
                                               title="Google Plus"><i class="fa fa-google-plus"></i></a>
                                            <a href="#" data-toggle="tooltip" data-placement="top" title="Pinterest"><i
                                                        class="fa fa-pinterest"></i></a>

                                        </div>
                                    </li>

                                </ul>

                            </div>
                        </div>
                    </div>
                </div>
                <p><?php if (!empty($message)) echo $message; ?></p>
            </div>

            <div class="footer-wrapper scrollspy-footer">

                <footer class="main-footer">


                    <footer class="bottom-footer">

                        <div class="container">

                            <div class="row">

                                <div class="col-xs-12 col-sm-6 col-md-4">

                                    <p class="copy-right"> 2018 RADIANCE Shipping Limited</p>

                                </div>


                                <div class="col-xs-12 col-sm-12 col-md-4">
                                    <ul class="bottom-footer-menu for-social">
                                        <li><a href="http://www.twitter.com" target="_blank"><i
                                                        class="icon-social-twitter" data-toggle="tooltip"
                                                        data-placement="top" title="twitter"></i></a></li>
                                        <li><a href="http://www.facebook.com" target="_blank"><i
                                                        class="icon-social-facebook" data-toggle="tooltip"
                                                        data-placement="top" title="facebook"></i></a></li>
                                        <li><a href="http://www.google-plus.com" target="_blank"><i
                                                        class="icon-social-google" data-toggle="tooltip"
                                                        data-placement="top" title="google plus"></i></a></li>
                                        <li><a href="http://www.instrgram.com" target="_blank"><i
                                                        class="icon-social-instagram" data-toggle="tooltip"
                                                        data-placement="top" title="instrgram"></i></a></li>
                                    </ul>
                                </div>

                            </div>

                        </div>
                    </footer>

                </footer>


            </div>
        </div>
    </div>

    <div id="back-to-top">
        <a href="#"><i class="ion-ios-arrow-up"></i></a>
    </div>


    <!-- Core JS -->
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/core-plugins.js"></script>
    <script type="text/javascript" src="js/customs.js"></script>

    <!-- Only in Home Page -->
    <script type="text/javascript" src="js/jquery.flexdatalist.js"></script>

</div>
</body>
</html>