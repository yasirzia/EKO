        <footer id="Footer" class="clearfix">
            <div class="widgets_wrapper" style="padding:70px 0;">
                <div class="container">
                    
                    
                    
                    <div class="column one">
                        <aside class="widget_text widget widget_custom_html text-center">
                            <div class="textwidget custom-html-widget">
							<h3>Get in Touch</h3>
                                <h5>EKO Innovation Centre</h5>
                                <p>
                                    VICTOR ‘GBENGA AFOLABI 
Founder/CEO
Eko Innovation Centre

                                </p>
                                <p>
                                    Email: <a href="mailto:info@ekoinnovationhub.com 
"><span >info@ekoinnovationhub.com 
</span></a> |
									Tel: <a href="tel:+61 (0) 3 8376 6284"><span >+61 (0) 3 8376 6284</span></a>
                                    
                                </p>
								<h3>Connect with Us</h3>
								<p style="font-size: 30px; text-align: center;">
                                    <a href="#"><i class="icon-twitter-circled"></i></a>
									<a href="#"><i class="icon-facebook-circled"></i></a>
									<a href="#"><i class="icon-skype-circled"></i></a>
                                </p>
                            </div>
                        </aside>
                    </div>
                </div>
            </div>
            <div class="footer_copy">
                <div class="container">
                    <div class="column one">
                        <a id="back_to_top" class="button button_js" href="#"><i class="icon-up-open-big"></i></a>
                        <div class="copyright">
                            © 2019 EKO Innovation Centre - All Rights Reserved | Designed by: <a href="https://shizo.tech/">Shizo Technologies (@therealshizo)</a>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>
    <div id="Side_slide" class="right dark" data-width="250">
        <div class="close-wrapper">
            <a href="#" class="close"><i class="icon-cancel-fine"></i></a>
        </div>
        <div class="extras">
            <a href="http://bit.ly/1M6lijQ" class="action_button" target="_blank">Buy now <i class="icon-right-open"></i></a>
            <div class="extras-wrapper"></div>
        </div>
        <div class="menu_wrapper"></div>
    </div>
    <div id="body_overlay"></div>



    <!-- JS -->
	
    <script src="js/jquery-2.1.4.min.js"></script>
	<script src="js/ui/jquery-ui.min.js"></script>
	

    <script src="plugins/rs-plugin-5.3.1/js/jquery.themepunch.tools.min.js"></script>
    <script src="plugins/rs-plugin-5.3.1/js/jquery.themepunch.revolution.min.js"></script>

    <script src="plugins/rs-plugin-5.3.1/js/extensions/revolution.extension.video.min.js"></script>
    <script src="plugins/rs-plugin-5.3.1/js/extensions/revolution.extension.slideanims.min.js"></script>
    <script src="plugins/rs-plugin-5.3.1/js/extensions/revolution.extension.actions.min.js"></script>
    <script src="plugins/rs-plugin-5.3.1/js/extensions/revolution.extension.layeranimation.min.js"></script>
    <script src="plugins/rs-plugin-5.3.1/js/extensions/revolution.extension.kenburn.min.js"></script>
    <script src="plugins/rs-plugin-5.3.1/js/extensions/revolution.extension.navigation.min.js"></script>
    <script src="plugins/rs-plugin-5.3.1/js/extensions/revolution.extension.migration.min.js"></script>
    <script src="plugins/rs-plugin-5.3.1/js/extensions/revolution.extension.parallax.min.js"></script>

    <script src="js/jquery.pageSlide.js"></script>
	<script src="js/mfn.menu.js"></script>
    <script src="js/jquery.plugins.js"></script>
    <script src="js/jquery.jplayer.min.js"></script>
    <script src="js/animations/animations.js"></script>
    <script src="js/translate3d.js"></script>
    <script src="js/scripts.js"></script>
	<script src="js/email.js"></script>
	
	
	<!-- script -->
   
	
	<script>
        jQuery(window).load(function() {
            jQuery(".jq-tabs").tabs();

            var retina = window.devicePixelRatio > 1 ? true : false;
            if (retina) {
                var retinaEl = jQuery("#logo img.logo-main");
                var retinaLogoW = retinaEl.width();
                var retinaLogoH = retinaEl.height();
                retinaEl.attr("src", "images/retina-theme.png").width(retinaLogoW).height(retinaLogoH);
                var stickyEl = jQuery("#logo img.logo-sticky");
                var stickyLogoW = stickyEl.width();
                var stickyLogoH = stickyEl.height();
                stickyEl.attr("src", "images/retina-theme.png").width(stickyLogoW).height(stickyLogoH);
                var mobileEl = jQuery("#logo img.logo-mobile");
                var mobileLogoW = mobileEl.width();
                var mobileLogoH = mobileEl.height();
                mobileEl.attr("src", "images/retina-theme.png").width(mobileLogoW).height(mobileLogoH);
                var mobileStickyEl = jQuery("#logo img.logo-mobile-sticky");
                var mobileStickyLogoW = mobileStickyEl.width();
                var mobileStickyLogoH = mobileStickyEl.height();
                mobileStickyEl.attr("src", "images/retina-theme.png").width(mobileStickyLogoW).height(mobileStickyLogoH);
            }
        });
    </script>

     <script>
        var revapi1, tpj;
		  ( function() {
				  if (!/loaded|interactive|complete/.test(document.readyState))
					  document.addEventListener("DOMContentLoaded", onLoad);
				  else
					  onLoad();
				  function onLoad() {
					  if (tpj === undefined) {
						  tpj = jQuery;
						  if ("off" == "on")
							  tpj.noConflict();
					  }
					  if (tpj("#rev_slider_1_1").revolution == undefined) {
						  revslider_showDoubleJqueryError("#rev_slider_1_1");
					  } else {
						  revapi1 = tpj("#rev_slider_1_1").show().revolution({
							  sliderType : "standard",
							  sliderLayout : "auto",
							  dottedOverlay : "none",
							  delay : 9000,
							navigation: {
                        keyboardNavigation: "off",
                        keyboard_direction: "horizontal",
                        mouseScrollNavigation: "off",
                        onHoverStop: "off",
                        touch: {
                            touchenabled: "on",
                            swipe_threshold: 0.7,
                            swipe_min_touches: 1,
                            swipe_direction: "horizontal",
                            drag_block_vertical: false
                        },
                        arrows: {
                            style: "uranus",
                            enable: true,
                            hide_onmobile: false,
                            hide_onleave: false,
                            tmp: '',
                            left: {
                                h_align: "right",
                                v_align: "bottom",
                                h_offset: 90,
                                v_offset: 40
                            },
                            right: {
                                h_align: "right",
                                v_align: "bottom",
                                h_offset: 40,
                                v_offset: 40
                            }
                        },
                        thumbnails: {
                            style: "hesperiden",
                            enable: false,
                            width: 200,
                            height: 80,
                            min_width: 100,
                            wrapper_padding: 5,
                            wrapper_color: "transparent",
                            wrapper_opacity: "1",
                            tmp: '<span class="tp-thumb-image"></span><span class="tp-thumb-title">Slide</span>',
                            visibleAmount: 3,
                            hide_onmobile: true,
                            hide_under: 0,
                            hide_onleave: false,
                            direction: "horizontal",
                            span: false,
                            position: "inner",
                            space: 5,
                            h_align: "left",
                            v_align: "bottom",
                            h_offset: 40,
                            v_offset: 40
                        }
                    },

	

							  visibilityLevels : [1240, 1024, 778, 480],
							  gridwidth : 1240,
							  gridheight : 950,
							  lazyType : "none",
							  shadow : 0,
							  spinner : "spinner3",
							  autoHeight : "off",
							  disableProgressBar : "on",
							  hideThumbsOnMobile : "off",
							  hideSliderAtLimit : 0,
							  hideCaptionAtLimit : 0,
							  hideAllCaptionAtLilmit : 0,
							  startWithSlide: 0,
							  debugMode : false,
							  fallbacks : {
								  simplifyAll : "off",
								  disableFocusListener : false,
							  }
						  });
					  };
				  };
			  }());
    </script>

	
	

	


</body>

</html>