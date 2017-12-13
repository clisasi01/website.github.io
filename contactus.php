<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Contact us for any types of services related to PHP, ASP.NET, C#.NET, SEO, Responsive website, Improve performance and much more.">
    <meta name="keywords" content="">
    <meta name="author" content="">
    <title>Contact Us | Lisa tech </title>
.


    

<link rel="stylesheet" href="http://www.noblecomputer.co.in/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="http://www.noblecomputer.co.in/css/animate.min.css" rel="stylesheet">
<link href="http://www.noblecomputer.co.in/css/prettyPhoto.css" rel="stylesheet">
<link href="http://www.noblecomputer.co.in/css/main.css" rel="stylesheet">
<link href="http://www.noblecomputer.co.in/css/responsive.css" rel="stylesheet">
<!-- googlr font for logos -->
<link href='http://fonts.googleapis.com/css?family=Oleo+Script' rel='stylesheet' type='text/css'>
<!-- end here -->

<!--[if lt IE 9]>
<script src="http://www.noblecomputer.co.in/js/html5shiv.js"></script>
<script src="http://www.noblecomputer.co.in/js/respond.min.js"></script>

</head><!--/head-->


<body class="homepage">
<header id="header">
    <div class="top-bar">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-xs-7">
                    <div class="top-number"><p><i class="fa fa-phone-square"></i> +447538924139</p></div>
                </div>
                <div class="col-sm-6 col-xs-5">
                    <div class="social">
                        <ul class="social-share">
                            <li><a href=" https://www.linkedin.com/in/christopher-lisasi-33677658" target="_blank"><i class="fa fa-linkedin"></i></a></li>
                            <li><a href="https://twitter.com/highvoltage48" target="_blank"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="http://www.youtube.com/c/ChrisLisembe " target="_blank"><i class="fa fa-youtube"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div><!--/.container-->
    </div><!--/.top-bar-->
    <nav class="navbar navbar-inverse" role="banner">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php"><font style="font: 300 35px/1.3 'Oleo Script', Helvetica, sans-serif;">Lisa Tech</font></a>
            </div>

            <div class="collapse navbar-collapse navbar-right">
                <ul class="nav navbar-nav">
                    <li class=""><a href="index.php">Home</a></li>
                    <li class=""><a href="aboutus.php">About Us</a></li>
                    <li class=""><a href="support.php">Support</a></li>
                    <li class=""><a href="contactus.php">Contact</a></li>
                </ul>
            </div>
        </div><!--/.container-->
    </nav><!--/nav-->

</header>




<section id="contact-info">
    <div class="center">
        <h2>How to Reach Us?</h2>
    </div>
    <div class="gmap-area">
        <div class="container">
            <div class="row">
                <div class="col-sm-5 text-center">
                    <div class="gmap">
                        <iframe src="" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                    </div>
                </div>

                <div class="col-sm-7 map-content">
                    <ul class="row">
                        <li class="col-sm-6">
                            <address>
                                <h5>Lisasi Computer & tech</h5>
                                <p>B/h. Halstead Place <br>
                                    <br>
                                    South Shields
                                </p>
                                <p>(M)+447538924139 <br>
                                    Email Address:chrislisembe48@hotmail.com</p>
                            </address>


                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="contact-page">
    <div class="container">
        <div class="center">
            <h2>Drop Your Message</h2>
        </div>
        <div class="row contact-wrap" style="margin-top: -30px;">

            <div class="alert alert-success text-center" id="msg" style="visibility: hidden"></div>

            <div style="color: red; font-size: 12px;" class="col-lg-12 col-lg-push-1 col-md-push-1 col-sm-push-1">* fields are compulsory fields</div>

            <form  class="contact-form" name="contact-form2" method="post" action="">
                <div class="col-sm-5 col-sm-offset-1">
                    <div class="form-group">
                        <label>Name *</label>
                        <input type="text" name="name" class="form-control" required pattern="[A-Za-z ]+" title="Enter Alphabetic Only">
                    </div>
                    <div class="form-group">
                        <label>Email *</label>
                        <input type="email" name="email" class="form-control" required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" title="Enter Proper Email Please">
                    </div>
                    <div class="form-group">
                        <label>Phone</label>
                        <input type="text" name="number" class="form-control" pattern="[0-9]{10}" title="Enter 10 digit only">
                    </div>
                    <div class="form-group">
                        <label>Company Name</label>
                        <input type="text" name="companyname" class="form-control" pattern="[A-Za-z  ]+" title="Enter Alphabetic Only" >
                    </div>
                </div>
                <div class="col-sm-5">
                    <div class="form-group">
                        <label>Subject *</label>
                        <input type="text" name="subject" class="form-control" required pattern="[A-Za-z ]+" title="Enter Alphabetic Only">
                    </div>
                    <div class="form-group">
                        <label>Message *</label>
                        <textarea name="message" id="message" required class="form-control" rows="8"></textarea>
                    </div>
                    <div class="form-group">

                        <input type="submit" name="submit1" class="btn btn-primary btn-lg">
                    </div>
                </div>
            </form>

                    </div><!--/.row-->
    </div><!--/.container-->
</section>




<section id="conatcat-info">
    <div class="container">
        <div class="row">
            <div class="col-sm-8">
                <div class="media contact-info wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                    <div class="pull-left">
                        <i class="fa fa-phone"></i>
                    </div>
                    <div class="media-body">
                        <h2>Have a question or need a custom quote?</h2>
                        <p>If you want to developed website or anywork regarding website and desktop application call us anytime on +91 99250 10051.</p>
                    </div>
                </div>
            </div>
        </div>
    </div><!--/.container-->
</section>

<footer id="footer" class="midnight-blue">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                Designed & Developed By: Chris
            </div>
            <div class="col-sm-6">
                <ul class="pull-right">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="aboutus.php">About Us</a></li>
                    <li><a href="support.php">Support</a></li>
                    <li><a href="contactus.php">Contact Us</a></li>

                </ul>
            </div>
        </div>
    </div>
</footer>
<script src="http://www.noblecomputer.co.in/js/jquery.js"></script>
<script src="http://www.noblecomputer.co.in/js/bootstrap.min.js"></script>
<script src="http://www.noblecomputer.co.in/js/jquery.prettyPhoto.js"></script>
<script src="http://www.noblecomputer.co.in/js/jquery.isotope.min.js"></script>
<script src="http://www.noblecomputer.co.in/js/main.js"></script>
<script src="http://www.noblecomputer.co.in/js/wow.min.js"></script>
</body>
</html>