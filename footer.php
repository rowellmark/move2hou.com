			<?php if ( !is_home() && !is_page_template( 'template-fullwidth.php' ) && !is_page_template( 'template-homepage.php' ) ) : ?>
			<div class="clearfix"></div>
			</div><!-- end of #inner-page-wrapper .inner -->
			</div><!-- end of #inner-page-wrapper -->
		<?php endif ?>
	</main>

	<footer class="footer">
		<div class="sub-footer">

			<div class="container flex justify-between">
				<div class="footer-info" data-aos="fade-right" data-aos-once="true"  data-aos-offset="200" data-aos-duration="800">

					<div class="footer-logo">
						<a href="<?= do_shortcode('[blogurl]')?>" class="site-name">
							<img src="<?= do_shortcode('[stylesheet_directory]')?>/images/logo.png" alt="Move2Hou" class="block w-100 height-auto" width="269" height="54">
						</a>
					</div><!-- end of footer logo -->


					<div class="footer-contact-info">
						<ul>
							<li>
								<i class="ai-font-phone"></i>
								<?= do_shortcode('[ai_client_phone]{default-phone}[/ai_client_phone]')?>
							</li>
							<li>
								<i class="ai-font-envelope"></i>
								<?= do_shortcode('[ai_client_email]{default-email}[/ai_client_email]')?>
							</li>
							<li>
								<i class="ai-font-location-c"></i>
								<span><?= do_shortcode('[ai_client_address]')?></span>
							</li>
							<li>
								<a href="<?= do_shortcode('[ai_client_instagram]')?>" target="_blank"><i class="ai-font-instagram"></i></a>
							</li>
						</ul>
					</div><!-- end of footer contact info -->


				</div><!-- end of footer info -->

				<div class="footer-nav" data-aos="fade-up" data-aos-once="true"  data-aos-offset="200" data-aos-duration="800">
					<?php wp_nav_menu( array( 'sort_column' => 'menu_order', 'menu_class' => 'footernav', 'theme_location' => 'primary-menu','depth'=>1 ) ); ?>
				</div><!-- end of footer nav -->

				
				<div class="footer-form" data-aos="fade-left" data-aos-once="true"  data-aos-offset="200" data-aos-duration="800">
					<h3>stay connected</h3>
					<?= do_shortcode('[contact-form-7 id="339" title="HP Contact Us" html_class="use-floating-validation-tip"]')?>
				</div><!-- end of footer form -->
			</div>
		</div><!-- end of sub footer -->



		<div class="footer-copyright">
			<div class="container">
				<div class="footer-disclaimer">
					<p>#Move2Hou is committed to providing an accessible website. If you have difficulty accessing content, have difficulty viewing a file on the website, or notice any accessibility problems, please contact us at 832.476.7100 to specify the nature of the accessibility issue and any assistive technology you use. We strive to provide the content you need in the format you require.</p>
				</div>

				<div class="copyright">
					<p>Copyright &copy; <?php echo date('Y') ?> #MOVE2HOU. All Rights Reserved. <a href="#">Privacy Policy</a>. <a href="/sitemap">Sitemap</a>. <?= do_shortcode('[agentimage_credits credits="Real Estate Website Design by <a target="_blank" href="https://www.agentimage.com" style="text-decoration:underline;font-weight:bold">Agent Image</a>"]')?></p>
				</div>

				<div class="copyright-logos flex items-center justify-center">
					<i class="ai-font-realtor-mls"></i>
					<i class="ai-font-eho"></i>
				</div>
			</div>
		</div>

	</footer>
	
	<?php do_action('aios_neighborhoods_footer')?>
	<?php do_action('aios_landing_page_footer')?>
		
	</div><!-- end of #main-wrapper -->


	<?php wp_footer(); ?>
</body>
</html>
