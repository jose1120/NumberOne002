			<!-- footer -->
			<footer class="footer" role="contentinfo">

				<!-- copyright -->
				<p class="copyright">
					&copy; <?php echo date('Y'); ?> Copyright <?php bloginfo('name'); ?>. <?php _e('Powered by', 'html5blank'); ?>
					<a href="//wordpress.org" title="WordPress">WordPress</a> &amp; <a href="//html5blank.com" title="HTML5 Blank">HTML5 Blank</a>.
				</p>
				<!-- /copyright -->

			</footer>
			<!-- /footer -->

		</div>
		<!-- /wrapper -->

		<?php wp_footer(); ?>

		<!-- analytics -->
		<script>
		(function(f,i,r,e,s,h,l){i['GoogleAnalyticsObject']=s;f[s]=f[s]||function(){
		(f[s].q=f[s].q||[]).push(arguments)},f[s].l=1*new Date();h=i.createElement(r),
		l=i.getElementsByTagName(r)[0];h.async=1;h.src=e;l.parentNode.insertBefore(h,l)
		})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
		ga('create', 'UA-XXXXXXXX-XX', 'yourdomain.com');
		ga('send', 'pageview');
		</script>

		<!--<?php wp_enqueue_script("jquery"); ?>-->

		<script type="text/javascript" src="http://192.168.33.14/wp-content/themes/numberone/js/jquery.js"></script>
        <script type="text/javascript" src="http://192.168.33.14/wp-content/themes/numberone/js/modernizr.custom.28468.js"></script>
        <script src="http://192.168.33.14/wp-content/themes/numberone/js/bootstrap-transition.js" type="text/javascript"></script> 
        <script src="http://192.168.33.14/wp-content/themes/numberone/js/bootstrap-alert.js" type="text/javascript"></script> 
        <script src="http://192.168.33.14/wp-content/themes/numberone/js/bootstrap-modal.js" type="text/javascript"></script> 
        <script src="http://192.168.33.14/wp-content/themes/numberone/js/bootstrap-dropdown.js" type="text/javascript"></script> 
        <script src="http://192.168.33.14/wp-content/themes/numberone/js/bootstrap-scrollspy.js" type="text/javascript"></script> 
        <script src="http://192.168.33.14/wp-content/themes/numberone/js/bootstrap-tab.js" type="text/javascript"></script>
        <script src="http://192.168.33.14/wp-content/themes/numberone/js/bootstrap-tooltip.js" type="text/javascript"></script> 
        <script src="http://192.168.33.14/wp-content/themes/numberone/js/bootstrap-popover.js" type="text/javascript"></script> 
        <script src="http://192.168.33.14/wp-content/themes/numberone/js/bootstrap-button.js" type="text/javascript"></script> 
        <script src="http://192.168.33.14/wp-content/themes/numberone/js/bootstrap-collapse.js" type="text/javascript"></script> 
        <script src="http://192.168.33.14/wp-content/themes/numberone/js/bootstrap-carousel.js" type="text/javascript"></script> 
        <script src="http://192.168.33.14/wp-content/themes/numberone/js/bootstrap-typeahead.js" type="text/javascript"></script> 
        <script src="http://192.168.33.14/wp-content/themes/numberone/js/bootstrap-affix.js" type="text/javascript"></script> 
        <script src="http://192.168.33.14/wp-content/themes/numberone/js/application.js" type="text/javascript"></script> 
        <script type="text/javascript" src="http://192.168.33.14/wp-content/themes/numberone/js/jquery.easing.js"></script>
        <script src="http://192.168.33.14/wp-content/themes/numberone/js/superfish.js" type="text/javascript"></script>
        <script src="http://192.168.33.14/wp-content/themes/numberone/js/jquery.prettyPhoto.js" type="text/javascript"></script>
        <script src="http://192.168.33.14/wp-content/themes/numberone/js/custom.js" type="text/javascript"></script>
        <script src="http://192.168.33.14/wp-content/themes/numberone/js/jquery.ui.totop.js" type="text/javascript"></script> 
        <script type="text/javascript" src="http://192.168.33.14/wp-content/themes/numberone/js/jquery.mousewheel.js"></script>
        <script src="http://192.168.33.14/wp-content/themes/numberone/js/jquery.flexslider-min.js" type="text/javascript"></script> 
        <script type="text/javascript" src="http://192.168.33.14/wp-content/themes/numberone/js/jquery.cslider.js"></script>
        <script type="text/javascript" src="http://192.168.33.14/wp-content/themes/numberone/js/switcher.js"></script>



		<!-- SLIDER -->
		<script type="text/javascript">
			jQuery(document).ready(function($){
	
				$('#da-slider').cslider({
					autoplay	: true,
					bgincrement	: 50
				});

			});
		</script>	
		<!--END: SLIDER -->
				
		<!--PORTFOLIO SLIDER -->
		<script>
			// Can also be used with jQuery(document).ready()
			jQuery(window).load(function() {
			    jQuery('.portfolio_rotator').flexslider({
					animation: 'slide',
					animationLoop: false,
					useCSS: false,
					controlNav: false,
					controlsContainer: '.portfolio-controls',
					easing: 'easeInOutSine',
					animationSpeed:'3000',
					touch: true,
					minItems: 1,
					maxItems: 30,
					mousewheel:false,
					pauseOnHover:true,
					itemWidth:170,
					itemMargin: 30,
					move:1,
					
						
			    });
			});
					  
	    </script>
		<!--END: SLIDER -->
					
		<!--CLIENT SLIDER -->
		<script>
			// Can also be used with jQuery(document).ready()
			jQuery(window).load(function() {
				jQuery('.clients_rotator_widget_wrap').flexslider({
					animation: 'slide',
					animationLoop: false,
					useCSS: false,
					controlNav: false,
					controlsContainer: '.flex-controls-cl',
					easing: 'easeInOutSine',
					animationSpeed:'200',
					touch: true,
					minItems: 1,
					maxItems: 30,
					itemWidth: 170,
					itemMargin: 30,
					mousewheel:false,
					pauseOnHover:true,
					move:5,
				});
			});
					  
		</script>
        <!--END: SLIDER -->

	</body>
</html>
