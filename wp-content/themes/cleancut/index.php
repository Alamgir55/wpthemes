<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<title <?php bloginfo('name'); ?>  <?php wp_title(''); ?> >CleanCut Theme</title>
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/bootstrap.css">
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/animate.css">
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/font-awesome.css">
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
    <style>
        .showcase{
            height: 700px;
            background:url('./img/showcase.jpg');
        }

        .banner{
            background:url('./img/banner.jpg') no-repeat center center;
        }
    </style>
</head>
<body>
<nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">CleanCut Theme</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav navbar-right">
            <li class="active"><a href="index.html">Home</a></li>
            <li><a href="about.html">About</a></li>
            <li><a href="blog.html">Blog</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <section class="row showcase animated fadeIn">
	    <div class="container">
		    <div class="col-md-12">
			    <div class="showcase-content">
				    <h1>CleanCut Theme</h1>
				    <p class="lead">Custom Wordpress Theme By You</p>
				    <a class="btn btn-default btn-lg"><i class="fa fa-facebook fa-fw"></i> Facebook</a>
				            <a class="btn btn-default btn-lg"><i class="fa fa-twitter fa-fw"></i> Twitter</a>
				            <a class="btn btn-default btn-lg"><i class="fa fa-linkedin fa-fw"></i> Linkedin</a>
			    </div>
		    </div>
	    </div>
    </section>

    <div class="section-a">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-sm-6 animated fadeInLeft">
                    <hr class="section-heading-spacer">
                    <div class="clearfix"></div>
                    <h2 class="section-heading">Lorem ipsum dolor sit:</h2>
                    <p class="lead">Aliquam nec odio quis sapien volutpat imperdiet. Sed sed semper enim, eu viverra nibh. Fusce est velit, egestas in velit sit amet</p>
                </div>
                <div class="col-lg-5 col-lg-offset-2 col-sm-6">
                    <img class="img-responsive img-circle animated fadeInRight" src="img/pic1.jpg" alt="">
                </div>
            </div>
        </div>
    </div>

    <div class="section-b">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-lg-offset-1 col-sm-push-6  col-sm-6 animated fadeInRight">
                    <hr class="section-heading-spacer">
                    <div class="clearfix"></div>
                    <h2 class="section-heading">Sed in justo odio</h2>
                    <p class="lead">Cras gravida sit amet ipsum imperdiet viverra. Maecenas convallis erat volutpat risus posuere, vel dignissim risus bibendum. Suspendisse aliquam!</p>
                </div>
                <div class="col-lg-5 col-sm-pull-6  col-sm-6">
                    <img class="img-responsive img-circle animated fadeInLeft" src="img/pic2.jpg" alt="">
                </div>
            </div>
        </div>
    </div>

    <div class="section-a">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-sm-6 animated fadeInLeft">
                    <hr class="section-heading-spacer">
                    <div class="clearfix"></div>
                    <h2 class="section-heading">Mauris sed auctor eros</h2>
                    <p class="lead">Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Proin quis ante facilisis velit faucibus dignissim. Praesent in cursus arcu</p>
                </div>
                <div class="col-lg-5 col-lg-offset-2 col-sm-6">
                    <img class="img-responsive img-circle animated fadeInRight" src="img/pic3.jpg" alt="">
                </div>
            </div>
        </div>
    </div>

    <section class="banner">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <h2>Follow Us On Social Media:</h2>
                </div>
                <div class="col-lg-6">
                    <ul class="list-inline banner-social-buttons">
                        <li>
                            <a href="#" class="btn btn-default btn-lg"><i class="fa fa-twitter fa-fw"></i> <span class="network-name">Twitter</span></a>
                        </li>
                        <li>
                            <a href="#" class="btn btn-default btn-lg"><i class="fa fa-github fa-fw"></i> <span class="network-name">Github</span></a>
                        </li>
                        <li>
                            <a href="#" class="btn btn-default btn-lg"><i class="fa fa-linkedin fa-fw"></i> <span class="network-name">Linkedin</span></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>


    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <ul class="list-inline">
                        <li>
                            <a href="#">Home</a>
                        </li>
                        <li>
                            <a href="#about">About</a>
                        </li>
                        <li>
                            <a href="#services">Services</a>
                        </li>
                        <li>
                            <a href="#contact">Contact</a>
                        </li>
                    </ul>
                    <p class="copyright text-muted small">Copyright &copy; CleanCut Theme 2016. All Rights Reserved</p>
                </div>
            </div>
        </div>
    </footer>

</body>
</html>