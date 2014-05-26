<?php
/*
 * AUTHORS
 *      Cacatian, Paul Michael
 *      Linatoc, Allen M.
 *      Mendoza, Ramon Jeric B.
 */

// Codes fall below:
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Lalaguna Villas</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">

        <!-- Le styles -->
        <link href="web/bootstrap/assets/css/bootstrap.css" rel="stylesheet">
        <style type="text/css">
            body {
                padding-top: 130px;
                padding-bottom: 40px;
            }
        </style>
        <link href="web/bootstrap/assets/css/bootstrap-responsive.css" rel="stylesheet">
        <link href="web/bootstrap/assets/css/bootstrap-columnar.css" rel="stylesheet">
        <link href="web/css/llv-styles.css" rel="stylesheet">

        <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
          <script src="web/bootstrap/assets/js/html5shiv.js"></script>
        <![endif]-->

        <!-- Fav and touch icons -->
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="web/bootstrap/assets/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="web/bootstrap/assets/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="web/bootstrap/assets/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="web/bootstrap/assets/ico/apple-touch-icon-57-precomposed.png">
        <link rel="shortcut icon" href="web/bootstrap/assets/ico/favicon.png">

        <link href="web/css/bootstrap-custom.css" rel="stylesheet">
        <link href="web/css/header.css" rel="stylesheet">
        <link href="web/css/llv-styles.css" rel="stylesheet">
        <link href="web/css/styles.css" rel="stylesheet">
        <link href="web/css/testimonials.css" rel="stylesheet">
    </head>

    <body>

        <!-- Header starts from here -->

        <div class="navbar navbar-inverse navbar-fixed-top">
            <div class="navbar-inner">
                <div class="container">
                    <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <!-- Logo's here -->
                    <a class="brand col-lg-4" href="#">
                        <!-- Desktop logo --> <img src="web/images/logo.png" class="img-responsive desktop-logo">
                        <!-- Mobile logo  --> <img src="web/images/logo.png" class="img-responsive mobile-logo">
                    </a>
                    <div class="nav-collapse collapse col-lg-6 main-navigation">
                        <ul class="nav">
                            <li class="active"><a href="#">Home</a></li>
                            <li><a href="#about">Rooms</a></li>
                            <li><a href="#contact">Resort</a></li>
                            <li><a href="#attractions">Attractions</a></li>
                            <li><a href="#about">About</a></li>
                            <li><a href="#contact">Contact</a></li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Action</a></li>
                                    <li><a href="#">Another action</a></li>
                                    <li><a href="#">Something else here</a></li>
                                    <li class="divider"></li>
                                    <li class="nav-header">Nav header</li>
                                    <li><a href="#">Separated link</a></li>
                                    <li><a href="#">One more separated link</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div><!--/.nav-collapse -->
                </div>
            </div>
        </div>
        <!-- Header ends here -->

        <!-- Heading hero -->
        <div class="container">

            <!-- Main hero unit for a primary marketing message or call to action -->
            <div class="hero-unit heading-hero ">
                <!-- Sample button
                    <a href="#" class="btn btn-primary btn-large">Learn more &raquo;</a> -->
                <div class="pull-right heading-promotions span5 container-fluid text-center visible-desktop">
                    <div><h3>Get our latest promotions</h3></div>
                    <form method="">
                        <table width="100%">
                            <tr>
                                <td valign="top" align="right">Name</td>
                                <td valign="middle" align="center"><input type="text" class="input-xlarge" style="font-size: 100%;" placeholder="Enter name here"></td>
                            </tr>
                            <tr>
                                <td valign="top" align="right">Email</td>
                                <td valign="middle" align="center"><input type="text" class="input-xlarge" style="font-size: 100%;" placeholder="Email"></td>
                            </tr>
                            <tr>
                                <td colspan="2" align="center">
                                    <input type="submit" class="btn btn-primary btn-large" value="Email it to me">
                                </td>
                            </tr>
                        </table>
                    </form>
                </div>
                <br><br><br><br><br><br><br><br>
                <div class="heading-hero-caption">
                    <span class="">The "Best Kept Secret" in the Philippines</span>
                    <a href="#" class="btn btn-primary btn-large btn-achtung offset3">Book now</a>
                </div>
            </div>

        </div>

        <div class="heading-promotions-mini text-center visible-mobile visible-tablet visible-phone">
            <div><h3>Get our latest promotion</h3></div>
            <form action="" method="post">
                <table class="" width="100%" cellspacing="0">
                    <tr>
                        <td valign="middle" align="center"><input type="text" class="input-xlarge" style="font-size: 100%;" placeholder="Enter name here"></td>
                    </tr>
                    <tr>
                        <td valign="middle" align="center"><input type="text" class="input-xlarge" style="font-size: 100%;" placeholder="Email"></td>
                    </tr>
                    <tr>
                        <td align="center">
                            <input type="submit" class="btn btn-primary center-block" value="Email it to me!">
                        </td>
                    </tr>
                </table>
            </form>
        </div>

        <!-- Testimonials            -->
        <div class="container ">
            <div class="row">
                <div class="span4 testimonial">
                    <!-- Testimonial header -->
                    <div class="row-fluid testimonial-header">
                        <div class="col-lg-5 testimonial-header-provider">PROVIDER</div>
                        <div class="col-lg-5 testimonial-header-rating">RATING</div>
                    </div>
                    <!-- Testimonial body -->
                    <div class="row-fluid testimonial-body">
                        <div class="row-fluid testimonial-body-message">Minim incurreret instituendarum an proident minim laborum. Aut aut quorum dolor fugiat, eiusmod multos quo iudicem philosophari. Quem quamquam te despicationes non dolor appellat ab tempor. Vidisse dolor sint qui fugiat nam fabulas iis fugiat ingeniis. Eram vidisse excepteur, iis fore admodum doctrina.</div>
                        <div class="row-fluid testimonial-body-author">Author</div>
                    </div>
                    <!-- Testimonial header -->
                    <div class="row-fluid testimonial-footer">
                        <a href="javascript:;">Read more</a>
                    </div>
                </div>
            </div>
        </div>


        <br><br><br>

        <!--Rooms Content-->
        <div class="container">

            <!-- Rooms Header            -->
            <div class="row section-header">
                <div class=" page-header span12" valign="middle">
                    <h1 class="orange-color">Rooms</h1>
                </div>
                <!--                <div class="span10 section-title-line "></div>-->
            </div>

            <!-- Example row of columns -->
            <div class="row">
                <div class="span4">
                    <h2>Heading</h2>
                    <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
                    <p><a class="btn" href="#">View details &raquo;</a></p>
                </div>
                <div class="span4">
                    <h2>Heading</h2>
                    <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
                    <p><a class="btn" href="#">View details &raquo;</a></p>
                </div>
                <div class="span4">
                    <h2>Heading</h2>
                    <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
                    <p><a class="btn" href="#">View details &raquo;</a></p>
                </div>
            </div>

            <hr>

            <footer class="text-center">
                <p>&copy; Company 2013</p>
            </footer>

        </div> <!-- /container -->

        <!-- Le javascript
        ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
        <script src="web/bootstrap/assets/js/jquery.js"></script>
        <script src="web/bootstrap/assets/js/bootstrap-transition.js"></script>
        <script src="web/bootstrap/assets/js/bootstrap-alert.js"></script>
        <script src="web/bootstrap/assets/js/bootstrap-modal.js"></script>
        <script src="web/bootstrap/assets/js/bootstrap-dropdown.js"></script>
        <script src="web/bootstrap/assets/js/bootstrap-scrollspy.js"></script>
        <script src="web/bootstrap/assets/js/bootstrap-tab.js"></script>
        <script src="web/bootstrap/assets/js/bootstrap-tooltip.js"></script>
        <script src="web/bootstrap/assets/js/bootstrap-popover.js"></script>
        <script src="web/bootstrap/assets/js/bootstrap-button.js"></script>
        <script src="web/bootstrap/assets/js/bootstrap-collapse.js"></script>
        <script src="web/bootstrap/assets/js/bootstrap-carousel.js"></script>
        <script src="web/bootstrap/assets/js/bootstrap-typeahead.js"></script>

        <!-- OJT custom scripts -->
        <script src="web/js/nav-scroll.js"></script>

        <!-- Fine, it's working -->
    </body>
</html>
