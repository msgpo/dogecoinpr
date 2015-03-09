<!DOCTYPE html>
<html>
<head>
<title>Dogecoin Public Relations</title>
<link rel="stylesheet" href="<?php bloginfo("template_url"); ?>/css/bootstrap.css" />
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
<link href="<?php bloginfo("template_url"); ?>/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<!--[if lt IE 9]>
<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
<link rel="stylesheet" href="<?php bloginfo("template_url"); ?>/css/grayscale.css" />
</head>
<body>
<!--<div class="container-fluid">
	<div class="row" id="header">-->
		<!-- Navigation -->
    <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top">
                    <i class="fa fa-play-circle"></i>  Dogecoin Public Relations
                </a>
            </div>
		<?php
			wp_nav_menu( array( 'theme_location' => 'news', 'container_class' => 'collapse navbar-collapse navbar-right navbar-main-collapse', 'items_wrap' => '<ul class="nav navbar-nav">%3$s</ul>', 'depth' => 2 ) );

		?>
		</div>
        <!-- /.container -->
    </nav>

    <!-- Intro Header -->
    <header class="intro">
        <div class="intro-body">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <h1 class="brand-heading">Grayscale</h1>
                        <p class="intro-text">A free, responsive, one page Bootstrap theme.<br>Created by Start Bootstrap.</p>
                        <a href="#about" class="btn btn-circle page-scroll">
                            <i class="fa fa-angle-double-down animated"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </header>
 		
<!--	</div> -->