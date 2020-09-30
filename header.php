<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" />
		<title>Pursuit Theme</title>
		<?php wp_head(); ?> 
	</head>
	<?php
		if(is_front_page()):
			$pursuit_classes = array('pursuit-class', 'my-class');
		else:
			$pursuit_classes = array('no-pursuit-class');
		endif;
	?>
<style>
.featured-image {
  width:100%;
  height: 300px;
  background-repeat: no-repeat;
  background-position-x: center;
  background-size: cover;
}
.featured-image-single {
  width:100%;
  height: 400px;
  background-repeat: no-repeat;
  background-position-x: center;
  background-size: cover;
}	

</style>
	</head>
	<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top"<?php body_class($pursuit_classes); ?>>
	

<!-- The #page-top ID is part of the scrolling feature - the data-spy and data-target are part of the built-in Bootstrap scrollspy function -->

<!--<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">-->

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top stroke animated fadeInDown" role="navigation">
        <div class="container">
			<div class="logo"></div>
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top"></a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
			
				<?php 
					wp_nav_menu(array(
					'theme_location' => 'primary',
					'container' => false,
					'menu_class' => 'nav navbar-nav navbar-right',
					'walker' => new Walker_Nav_Primary()
						)
					); 
				?>
                <!--<ul class="nav navbar-nav">-->
				 <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
                    <!--<li class="hidden">
                        <a class="page-scroll" href="#page-top"></a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#about">About</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#services">Services</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#contact">Contact</a>
                    </li>
                </ul>-->
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
	
	
<!-- This is code for a custom header. This can actually go on any page that you want a custom header but for now it will go in the actual header-->	
	<img src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="" />