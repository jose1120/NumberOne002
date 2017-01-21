<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

		<link href="http://192.168.33.14/wp-content/themes/numberone/bootstrap.css" rel="stylesheet">
        <link href="http://192.168.33.14/wp-content/themes/numberone/bootstrap-responsive.css" rel="stylesheet">
        <link href="http://192.168.33.14/wp-content/themes/numberone/flexslider.css" rel="stylesheet">
        <link href="http://192.168.33.14/wp-content/themes/numberone/switcher.css" rel="stylesheet">
        <link href="http://192.168.33.14/wp-content/themes/numberone/parallax_slider/style.css" rel="stylesheet">
        <noscript>
	        <link rel="stylesheet" type="text/css" href="http://192.168.33.14/wp-content/themes/numberone/parallax_slider/nojs.css" />
        </noscript>
        <link href="http://192.168.33.14/wp-content/themes/numberone/font-awesome.min.css" rel="stylesheet"> 
        <link href="http://192.168.33.14/wp-content/themes/numberone/social.css" rel="stylesheet"> 

		<link href="//www.google-analytics.com" rel="dns-prefetch">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">

		<?php wp_head(); ?>
		<script>
        // conditionizr.com
        // configure environment tests
        conditionizr.config({
            assets: '<?php echo get_template_directory_uri(); ?>',
            tests: {}
        });
        </script>

	</head>
	<body <?php body_class(); ?>>

		<!--Start Main-wrapper-->
        <div class="main-wrapper">
    		<div class="headtop needhead">
        		<div class="action-banner-bg"></div>
        		<div class="action-banner-bg-top"></div>

        		<div class="nav-reaction">
            		<div class="navbar navbar-static-top">
                		<div class="navbar-inner">
                    		<div class="container">
							<div class="logo">
                        		<a class="brand" href="#">
									<span><?php bloginfo('name'); ?></span>
                        		</a>
							</div>
                        		<div id="main-nav">
                            		<div class="nav-collapse collapse">
                                		<ul class="nav">
                                        		<?php html5blank_nav(); ?>
                                    	</ul>
                            		</div><!--nav-collapse-->
                        		</div><!--main-nav-->
                    		</div><!--container-->
                		</div><!--navbar-inner-->
            		</div><!--navbar-->
        		</div><!--nav-reaction-->


				<!--slider start-->
				<div class="banner-rotator">
					<div id="da-slider" class="da-slider">
						<!--<div class="da-slide">
							<h2></h2>
							<p></p>
							<span class="da-link">
								<a href="#">
									<span class="main-link"><i class="fa fa-tablet"></i> Available on market</span>
									<span class="arrow"> &rarr; </span>
								</a>
							</span>
							<div class="da-img visible-desktop"><img src=""></div>
						</div>-->
							

							<?php if (have_posts()): while (have_posts()) : the_post(); ?>
							
							<div class="da-slide">
								<h2><?php the_title(); ?></h2>

								<?php the_content(); ?>
								
								
							</div>
							

							<?php endwhile; ?>

							<?php else: ?>

							<!-- article -->
							<article>

							<h1><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h1>

							</article>
							<!-- /article -->

							<?php endif; ?>
							
						
						<!--da-slide

						<div class="da-slide">
							<h2>def</h2>
							<p>def</p>
							<span class="da-link">
								<a href="#">
									<span class="main-link"><i class="fa fa-tablet"></i> Available on market</span>
									<span class="arrow"> &rarr; </span>
								</a>
							</span>
							<div class="da-img visible-desktop"><img src=""></div>
						</div>da-slide

						<div class="da-slide">
							<h2>ghi</h2>
							<p>ghi</p>
							<span class="da-link">
								<a href="#">
									<span class="main-link"><i class="fa fa-tablet"></i> Available on market</span>
									<span class="arrow"> &rarr; </span>
								</a>
							</span>
							<div class="da-img visible-desktop"><img src=""></div>
						</div>da-slide-->

						<div class="da-arrows">
							<span class="da-arrows-prev"></span>
							<span class="da-arrows-next"></span>
						</div>
					</div><!--da-slider-->
				</div><!--banner-rotator-->

				<div class="top-soc hidden-phone">
					<div class="container">
						<div class="row">
							<ul class="social-top">
								<li>
									<a href="#">
										<i class="fa fa-facebook fa-fw" aria-hidden="true"></i>
									</a>
								</li>
								<li>
									<a href="#">
										<i class="fa fa-twitter fa-fw"></i>
									</a>
								</li>
								<li>
									<a href="#">
										<i class="fa fa-github fa-fw"></i>
									</a>
								</li>
							</ul>
							<form class="form-wrapper cf" method="get" action="<?php echo home_url(); ?>" role="search"> 
  								<input type="search" name="s" class="search-form" placeholder="<?php _e( 'Search...', 'html5blank' ); ?>" required>
	  							<button type="submit" role="button"><?php _e( 'Search', 'html5blank' ); ?></button>
							</form>
						</div><!--row-->
					</div><!--container-->
				</div><!--top-soc-->
    		</div><!--end headtop-->



