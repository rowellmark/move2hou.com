<?php get_header(); ?>

<section id="hero" class="relative w-100">

	<div class="slideshow relative w-100 has-after">

		<div class="slide-tagline text-center absolute w-100 h-100 flex items-center top-0 left-0">
			<div class="container">
				<h1 data-aos="fade-up" data-aos-once="true"  data-aos-offset="200" data-aos-duration="800"> <span>#MOVE2HOU </span> Relocation + Luxury Experiences Team</h1>
				<p data-aos="fade-up" data-aos-once="true"  data-aos-offset="200" data-aos-duration="800">Where real estate meets luxury + lifestyle</p>
			</div>
		</div><!-- end of slide tagline -->

		<?php echo do_shortcode('
			[aios_slider id="Homepage Slideshow"]
		'); ?>
	</div><!-- end of slideshow -->



	<div class="hp-quick-search absolute w-100">
		<div class="default-container">
			<div class="qc-wrapper" data-aos="fade-up" data-aos-once="true"  data-aos-offset="200" data-aos-duration="800">
				<div class="quick-search-heading-title absolute">
					<div class="default-title has-line text-center has-line default-title-white inline-block relative">
						<h2 class="inline-block">
							<span>quick</span>
							<em><i>search</i></em>
						</h2>
					</div>
				</div><!-- end of clickable title -->

				<div class="qc-form-container flex relative">
					<div class="qc-title">
						<div class="default-title has-line default-title-white text-center">
							<h2>
								<span>quick</span>
								<em><i>search</i></em>
							</h2>
						</div>
					</div><!-- end of form -->

					<div class="qc-form">
						<form action="#" class="flex items-end">

							<div class="qcForm">
								<label for="qc-property-type">Property type</label>
								<select name="#" id="qc-property-type">
									<option value="#"></option>
								</select>
							</div><!-- end of qc form -->

							<div class="qcForm">
								<label for="qc-city-state">City / State</label>
								<select name="#" id="qc-city-state">
									<option value="#"></option>
								</select>
							</div><!-- end of qc form -->

							<div class="qcForm">
								<label for="qc-property-type">Beds</label>
								<select name="#" id="qc-property-type">
									<option value="#"></option>
								</select>
							</div><!-- end of qc form -->

							<div class="qcForm">
								<label for="qc-property-type">Baths</label>
								<select name="#" id="qc-property-type">
									<option value="#"></option>
								</select>
							</div><!-- end of qc form -->

							<div class="qcForm">
								<label for="qc-property-type">min. $</label>
								<select name="#" id="qc-property-type">
									<option value="#"></option>
								</select>
							</div><!-- end of qc form -->

							<div class="qcForm">
								<label for="qc-property-type">max.$</label>
								<select name="#" id="qc-property-type">
									<option value="#"></option>
								</select>
							</div><!-- end of qc form -->

							<div class="qcBttn">
								<div class="default-button">
									<input type="submit" value="search">
								</div>
							</div><!-- end of qc bttn -->
						</form>
						<p class="text-right">Real Estate IDX Powered by iHomefinder</p>
					</div><!-- end of qc form -->
				</div><!-- end of qc form container -->

			</div><!-- end of qc wrapper -->
	
		</div><!-- end of default container -->
		
	</div><!-- end of quick search -->

	<div class="slide-floating-info absolute h-100" data-aos="fade-left" data-aos-once="true"  data-aos-offset="200" data-aos-duration="800">
		<ul class="flex flex-col h-100 justify-center items-center">
			<li>
				<?= do_shortcode('[ai_client_phone]<i class="ai-font-phone"></i>[/ai_client_phone]')?>
			</li>
			<li>
				<?= do_shortcode('[ai_client_email]<i class="ai-font-envelope"></i>[/ai_client_email]')?>
			</li>
			<li>
				<div class="floating-info-divider"></div>
			</li>
			<li>
				<a href="<?= do_shortcode('[ai_client_instagram]')?>" target="_blank"><i class="ai-font-instagram"></i></a>
			</li>
		</ul>
	</div><!-- end of floating info -->
</section><!-- end of hero -->

<section id="hp-about" class="relative has-after">
	<div class="about-wrapper relative">
		<div class="container flex items-start">
			<div class="about-photo relative has-after" data-aos="fade-up" data-aos-once="true"  data-aos-offset="200" data-aos-duration="800">
				<img src="<?= do_shortcode('[stylesheet_directory]')?>/images/about-photo.jpg" alt="Welcome to #move2hou" class="block relative w-100">
			</div><!-- end of about photo -->
			<div class="about-content" data-aos="fade-right" data-aos-once="true"  data-aos-offset="200" data-aos-duration="800">

				<div class="default-title text-left relative">
					<h2 class="inline-block">
						<span>welcome to</span>
						<em><i>#move2hou</i></em>
					</h2>
				</div>
				<p>It is with great pleasure that EJ & Raeven Young welcomes you to Houston, and to their website. With years of experience in the market, they knows how crucial it is for you to find relevant, up-to- date information. The search is over. Their website is designed to be your one-stop shop for real estate in Houston.</p>
				<p>This is the moment that you should enjoy the most; looking at the available properties in Houston; imagining yourself living in the home that you have always dreamed about. You donít want just another database that gives you rehashed property descriptions. You want to walk around the neighborhood from the comfort of your own home. You want to get a clear picture about life in Houston.</p>

				<div class="default-button inline-block">
					<a href="#"><span>rea</span>d more</a>
				</div>

			</div><!-- end of about content -->
		</div><!-- end of container -->
	</div><!-- end of about wrapper -->
</section><!-- end of hp about -->
<section id="hp-fn" class="relative">
	<div class="hp-fn-wrapper relative">
		<div class="container">

			<div class="default-title has-line text-center" data-aos="fade-up" data-aos-once="true"  data-aos-offset="200" data-aos-duration="800">
				<h2 class="inline-block">
					<span>featured</span>
					<em><i>Neighborhoods</i></em>
				</h2>
			</div>

			<div class="featuredNeighborhoodSlides splide" data-aos="fade-up" data-aos-once="true"  data-aos-offset="200" data-aos-duration="800">

				<div class="splide__track">
					<div class="splide__list">

						<div class="splide__slide featuredNeighborhoodSlide">
							<a href="#" class="block relative">
								<div class="featuredN-image relative">
									<div class="fnImg relative">
										<canvas width="421" height="448" class="block w-100"></canvas>
										<img src="<?= do_shortcode('[stylesheet_directory]')?>/images/fn-1.jpg" alt="The Woodlands" class="block absolute top-0 left-0 w-100 h-100 object-fit-cover object-position-center">
									</div>
								</div>
								<h4>The Woodlands</h4>
							</a>
						</div><!-- end of slide -->
						<div class="splide__slide featuredNeighborhoodSlide">
							<a href="#" class="block relative">
								<div class="featuredN-image relative">
									<div class="fnImg relative">
										<canvas width="421" height="448" class="block w-100"></canvas>
										<img src="<?= do_shortcode('[stylesheet_directory]')?>/images/fn-2.jpg" alt="Conroe" class="block absolute top-0 left-0 w-100 h-100 object-fit-cover object-position-center">
									</div>
								</div>
								<h4>Conroe</h4>
							</a>
						</div><!-- end of slide -->
						<div class="splide__slide featuredNeighborhoodSlide">
							<a href="#" class="block relative">
								<div class="featuredN-image relative">
									<div class="fnImg relative">
										<canvas width="421" height="448" class="block w-100"></canvas>
										<img src="<?= do_shortcode('[stylesheet_directory]')?>/images/fn-3.jpg" alt="Humble / Atascocita " class="block absolute top-0 left-0 w-100 h-100 object-fit-cover object-position-center">
									</div>
								</div>
								<h4>Humble / Atascocita </h4>
							</a>
						</div><!-- end of slide -->
						<div class="splide__slide featuredNeighborhoodSlide">
							<a href="#" class="block relative">
								<div class="featuredN-image relative">
									<div class="fnImg relative">
										<canvas width="421" height="448" class="block w-100"></canvas>
										<img src="<?= do_shortcode('[stylesheet_directory]')?>/images/fn-4.jpg" alt="Porter" class="block absolute top-0 left-0 w-100 h-100 object-fit-cover object-position-center">
									</div>
								</div>
								<h4>Porter</h4>
							</a>
						</div><!-- end of slide -->
						<div class="splide__slide featuredNeighborhoodSlide">
							<a href="#" class="block relative">
								<div class="featuredN-image relative">
									<div class="fnImg relative">
										<canvas width="421" height="448" class="block w-100"></canvas>
										<img src="<?= do_shortcode('[stylesheet_directory]')?>/images/fn-5.jpg" alt="New Caney" class="block absolute top-0 left-0 w-100 h-100 object-fit-cover object-position-center">
									</div>
								</div>
								<h4>New Caney</h4>
							</a>
						</div><!-- end of slide -->
						<div class="splide__slide featuredNeighborhoodSlide">
							<a href="#" class="block relative">
								<div class="featuredN-image relative">
									<div class="fnImg relative">
										<canvas width="421" height="448" class="block w-100"></canvas>
										<img src="<?= do_shortcode('[stylesheet_directory]')?>/images/fn-6.jpg" alt="Kingwood" class="block absolute top-0 left-0 w-100 h-100 object-fit-cover object-position-center">
									</div>
								</div>
								<h4>Kingwood</h4>
							</a>
						</div><!-- end of slide -->
						<div class="splide__slide featuredNeighborhoodSlide">
							<a href="#" class="block relative">
								<div class="featuredN-image relative">
									<div class="fnImg relative">
										<canvas width="421" height="448" class="block w-100"></canvas>
										<img src="<?= do_shortcode('[stylesheet_directory]')?>/images/fn-7.jpg" alt="Cypress" class="block absolute top-0 left-0 w-100 h-100 object-fit-cover object-position-center">
									</div>
								</div>
								<h4>Cypress</h4>
							</a>
						</div><!-- end of slide -->
						<div class="splide__slide featuredNeighborhoodSlide">
							<a href="#" class="block relative">
								<div class="featuredN-image relative">
									<div class="fnImg relative">
										<canvas width="421" height="448" class="block w-100"></canvas>
										<img src="<?= do_shortcode('[stylesheet_directory]')?>/images/fn-8.jpg" alt="Tomball" class="block absolute top-0 left-0 w-100 h-100 object-fit-cover object-position-center">
									</div>
								</div>
								<h4>Tomball</h4>
							</a>
						</div><!-- end of slide -->
						<div class="splide__slide featuredNeighborhoodSlide">
							<a href="#" class="block relative">
								<div class="featuredN-image relative">
									<div class="fnImg relative">
										<canvas width="421" height="448" class="block w-100"></canvas>
										<img src="<?= do_shortcode('[stylesheet_directory]')?>/images/fn-9.jpg" alt="Magnolia" class="block absolute top-0 left-0 w-100 h-100 object-fit-cover object-position-center">
									</div>
								</div>
								<h4>Magnolia</h4>
							</a>
						</div><!-- end of slide -->

					</div>
				</div>
			</div><!-- end of neightborhood slide -->

		</div>
	</div><!-- end of hp fn wrapper -->
</section><!-- end of featured Neighborhoods -->

<section id="hp-featured-properties" class="relative">

	<div class="default-title has-line default-title-white text-center" data-aos="fade-up" data-aos-once="true"  data-aos-offset="200" data-aos-duration="800">
		<h2 class="inline-block">
			<span>featured</span>
			<em><i>properties</i></em>
		</h2>
	</div>

	<div class="fp-lists flex flex-wrap-wrap">

		<div class="fp-list" data-aos="fade-up" data-aos-once="true"  data-aos-offset="200" data-aos-duration="800">
			<a href="#" class="relative block w-100 h-100">
				<div class="fp-img relative w-100 h-100">
					<canvas width="798" height="503" class="block w-100 h-100"></canvas>
					<img src="<?= do_shortcode('[stylesheet_directory]')?>/images/fp-1.jpg" alt="1234 Pine Drop dr 54" class="block absolute top-0 left-0 w-100 h-100 object-fit-cover object-position-center">
				</div>
				<div class="fp-content absolute">
					<h3>$5,295,000</h3>
					<p>1234 Pine Drop dr 54</p>
					<span>3 Beds  <i>/</i>  2 baths <i>/</i> 1,724 Sq.Ft.</span>
					<div class="view-details-button">
						<em>view details</em>
					</div>
				</div>
			</a>
		</div><!-- end of fp list -->
		<div class="fp-list" data-aos="fade-up" data-aos-once="true"  data-aos-offset="200" data-aos-duration="800">
			<a href="#" class="relative block w-100 h-100">
				<div class="fp-img relative w-100 h-100">
					<canvas width="798" height="503" class="block w-100 h-100"></canvas>
					<img src="<?= do_shortcode('[stylesheet_directory]')?>/images/fp-2.jpg" alt="1234 Pine Drop dr 54" class="block absolute top-0 left-0 w-100 h-100 object-fit-cover object-position-center">
				</div>
				<div class="fp-content absolute">
					<h3>$5,295,000</h3>
					<p>1234 Pine Drop dr 54</p>
					<span>3 Beds  <i>/</i>  2 baths <i>/</i> 1,724 Sq.Ft.</span>
					<div class="view-details-button">
						<em>view details</em>
					</div>
				</div>
			</a>
		</div><!-- end of fp list -->
		<div class="fp-list" data-aos="fade-up" data-aos-once="true"  data-aos-offset="200" data-aos-duration="800">
			<a href="#" class="relative block w-100 h-100">
				<div class="fp-img relative w-100 h-100">
					<canvas width="798" height="503" class="block w-100 h-100"></canvas>
					<img src="<?= do_shortcode('[stylesheet_directory]')?>/images/fp-3.jpg" alt="1234 Pine Drop dr 54" class="block absolute top-0 left-0 w-100 h-100 object-fit-cover object-position-center">
				</div>
				<div class="fp-content absolute">
					<h3>$5,295,000</h3>
					<p>1234 Pine Drop dr 54</p>
					<span>3 Beds  <i>/</i>  2 baths <i>/</i> 1,724 Sq.Ft.</span>
					<div class="view-details-button">
						<em>view details</em>
					</div>
				</div>
			</a>
		</div><!-- end of fp list -->
		<div class="fp-list" data-aos="fade-up" data-aos-once="true"  data-aos-offset="200" data-aos-duration="800">
			<a href="#" class="relative block w-100 h-100">
				<div class="fp-img relative w-100 h-100">
					<canvas width="798" height="503" class="block w-100 h-100"></canvas>
					<img src="<?= do_shortcode('[stylesheet_directory]')?>/images/fp-4.jpg" alt="1234 Pine Drop dr 54" class="block absolute top-0 left-0 w-100 h-100 object-fit-cover object-position-center">
				</div>
				<div class="fp-content absolute">
					<h3>$5,295,000</h3>
					<p>1234 Pine Drop dr 54</p>
					<span>3 Beds  <i>/</i>  2 baths <i>/</i> 1,724 Sq.Ft.</span>
					<div class="view-details-button">
						<em>view details</em>
					</div>
				</div>
			</a>
		</div><!-- end of fp list -->
	</div><!-- end of fp lists -->

	<div class="fp-button text-center" data-aos="fade-up" data-aos-once="true"  data-aos-offset="200" data-aos-duration="800">
		<div class="default-button default-button-white inline-block">
			<a href="#">view more properties</a>
		</div>
	</div>
</section><!-- end of featured properties -->

<section id="section-container" class="relative has-before has-after">
	
	<div class="section-container-wrapper default-container relative">


		<div class="hp-cta">
			<div class="cta-lists flex flex-wrap-wrap">
				
				<div class="cta-list" data-aos="fade-up" data-aos-once="true"  data-aos-offset="200" data-aos-duration="800">
					<a href="/find-my-dream-home/" class="block w-100 relative">
						<div class="cta-img relative has-after">
							<canvas width="639" height="463" class="block w-100"></canvas>
							<img src="<?= do_shortcode('[stylesheet_directory]')?>/images/cta-1.jpg" alt="find my dream home" class="block absolute top-0 left-0 w-100 h-100 object-fit-cover object-position-center">
						</div>
						<div class="cta-title absolute">
							<h2>
								<em>find my</em>
								<span>dream home</span>
							</h2>
						</div>
					</a>
				</div><!-- end of cta list -->
				<div class="cta-list" data-aos="fade-up" data-aos-once="true"  data-aos-offset="200" data-aos-duration="800">
					<a href="/what-is-my-home-worth/" class="block w-100 relative">
						<div class="cta-img relative has-after">
							<canvas width="639" height="463" class="block w-100"></canvas>
							<img src="<?= do_shortcode('[stylesheet_directory]')?>/images/cta-2.jpg" alt="what’s my home worth?" class="block absolute top-0 left-0 w-100 h-100 object-fit-cover object-position-center">
						</div>
						<div class="cta-title absolute">
							<h2>
								<em>what’s my</em>
								<span>home worth?</span>
							</h2>
						</div>
					</a>
				</div><!-- end of cta list -->
				<div class="cta-list" data-aos="fade-up" data-aos-once="true"  data-aos-offset="200" data-aos-duration="800">
					<a href="/help-me-relocate/" class="block w-100 relative">
						<div class="cta-img relative has-after">
							<canvas width="639" height="463" class="block w-100"></canvas>
							<img src="<?= do_shortcode('[stylesheet_directory]')?>/images/cta-3.jpg" alt="help me relocate" class="block absolute top-0 left-0 w-100 h-100 object-fit-cover object-position-center">
						</div>
						<div class="cta-title absolute">
							<h2>
								<em>help me</em>
								<span>relocate</span>
							</h2>
						</div>
					</a>
				</div><!-- end of cta list -->
				<div class="cta-list" data-aos="fade-up" data-aos-once="true"  data-aos-offset="200" data-aos-duration="800">
					<a href="#" class="block w-100 relative">
						<div class="cta-img relative has-after">
							<canvas width="639" height="463" class="block w-100"></canvas>
							<img src="<?= do_shortcode('[stylesheet_directory]')?>/images/cta-4.jpg" alt="home" class="block absolute top-0 left-0 w-100 h-100 object-fit-cover object-position-center">
						</div>
						<div class="cta-title absolute">
							<h2>
								<em>home</em>
								<span>valuation</span>
							</h2>
						</div>
					</a>
				</div><!-- end of cta list -->
				<div class="cta-list" data-aos="fade-up" data-aos-once="true"  data-aos-offset="200" data-aos-duration="800">
					<a href="#" class="block w-100 relative">
						<div class="cta-img relative has-after">
							<canvas width="639" height="463" class="block w-100"></canvas>
							<img src="<?= do_shortcode('[stylesheet_directory]')?>/images/cta-5.jpg" alt="neighborhood" class="block absolute top-0 left-0 w-100 h-100 object-fit-cover object-position-center">
						</div>
						<div class="cta-title absolute">
							<h2>
								<em>neighborhood</em>
								<span>guides</span>
							</h2>
						</div>
					</a>
				</div><!-- end of cta list -->
				<div class="cta-list" data-aos="fade-up" data-aos-once="true"  data-aos-offset="200" data-aos-duration="800">
					<a href="#" class="block w-100 relative">
						<div class="cta-img relative has-after">
							<canvas width="639" height="463" class="block w-100"></canvas>
							<img src="<?= do_shortcode('[stylesheet_directory]')?>/images/cta-6.jpg" alt="new developments" class="block absolute top-0 left-0 w-100 h-100 object-fit-cover object-position-center">
						</div>
						<div class="cta-title absolute">
							<h2>
								<em>new</em>
								<span>developments</span>
							</h2>
						</div>
					</a>
				</div><!-- end of cta list -->
			</div>
		</div><!-- end of hp cta -->

		<div class="hp-performance-number">

			<div class="default-title has-line text-center default-title-white relative" data-aos="fade-up" data-aos-once="true"  data-aos-offset="200" data-aos-duration="800">
				<h2 class="inline-block">
					<span>performance</span>
					<em><i>numbers</i></em>
				</h2>
			</div>

			<ul class="fn-lists flex justify-center">
				<li>
					<span>Total <br> sales volume</span>
					<p>$<em data-number="148"></em></p>
					<i>Million</i>
				</li>
				<li>
					<span>average <br> sale price</span>
					<p>$<em data-number="2"></em>.<em data-number="6"></em></p>
					<i>Million</i>
				</li>
				<li>
					<span>average days <br> on market</span>
					<p><em data-number="25"></em></p>
					<i>days</i>
				</li>
				<li>
					<span>no. of clients <br> we’ve helped</span>
					<p><em data-number="4500"></em></p>
					<i>clients</i>
				</li>
			</ul>

		</div>
	</div><!-- end of default container -->
</section><!--end of section container -->

<section id="hp-social-media">
	<div class="container">

		<div class="default-title has-line text-center relative" data-aos="fade-up" data-aos-once="true"  data-aos-offset="200" data-aos-duration="800">
			<h2 class="inline-block">
				<span>get social</span>
				<em><i>follow us</i></em>
			</h2>
		</div>

		<div class="social-lists flex flex-wrap-wrap">
			
			<div class="social-list" data-aos="fade-up" data-aos-once="true"  data-aos-offset="200" data-aos-duration="800">
				<a href="#" class="block w-100 relative">
					<canvas width="268" height="269"></canvas>
					<img src="<?= do_shortcode('[stylesheet_directory]')?>/images/sc-1.jpg" alt="Instagram" class="block absolute top-0 left-0 w-100 h-100 object-fit-cover object-position-center">
				</a>
			</div><!-- end of social list -->
			<div class="social-list" data-aos="fade-up" data-aos-once="true"  data-aos-offset="200" data-aos-duration="800">
				<a href="#" class="block w-100 relative">
					<canvas width="268" height="269"></canvas>
					<img src="<?= do_shortcode('[stylesheet_directory]')?>/images/sc-2.jpg" alt="Instagram" class="block absolute top-0 left-0 w-100 h-100 object-fit-cover object-position-center">
				</a>
			</div><!-- end of social list -->
			<div class="social-list" data-aos="fade-up" data-aos-once="true"  data-aos-offset="200" data-aos-duration="800">
				<a href="#" class="block w-100 relative">
					<canvas width="268" height="269"></canvas>
					<img src="<?= do_shortcode('[stylesheet_directory]')?>/images/sc-3.jpg" alt="Instagram" class="block absolute top-0 left-0 w-100 h-100 object-fit-cover object-position-center">
				</a>
			</div><!-- end of social list -->
			<div class="social-list" data-aos="fade-up" data-aos-once="true"  data-aos-offset="200" data-aos-duration="800">
				<a href="#" class="block w-100 relative">
					<canvas width="268" height="269"></canvas>
					<img src="<?= do_shortcode('[stylesheet_directory]')?>/images/sc-4.jpg" alt="Instagram" class="block absolute top-0 left-0 w-100 h-100 object-fit-cover object-position-center">
				</a>
			</div><!-- end of social list -->
			<div class="social-list" data-aos="fade-up" data-aos-once="true"  data-aos-offset="200" data-aos-duration="800">
				<a href="#" class="block w-100 relative">
					<canvas width="268" height="269"></canvas>
					<img src="<?= do_shortcode('[stylesheet_directory]')?>/images/sc-5.jpg" alt="Instagram" class="block absolute top-0 left-0 w-100 h-100 object-fit-cover object-position-center">
				</a>
			</div><!-- end of social list -->
			<div class="social-list" data-aos="fade-up" data-aos-once="true"  data-aos-offset="200" data-aos-duration="800">
				<a href="#" class="block w-100 relative">
					<canvas width="268" height="269"></canvas>
					<img src="<?= do_shortcode('[stylesheet_directory]')?>/images/sc-6.jpg" alt="Instagram" class="block absolute top-0 left-0 w-100 h-100 object-fit-cover object-position-center">
				</a>
			</div><!-- end of social list -->
			<div class="social-list" data-aos="fade-up" data-aos-once="true"  data-aos-offset="200" data-aos-duration="800">
				<a href="#" class="block w-100 relative">
					<canvas width="268" height="269"></canvas>
					<img src="<?= do_shortcode('[stylesheet_directory]')?>/images/sc-7.jpg" alt="Instagram" class="block absolute top-0 left-0 w-100 h-100 object-fit-cover object-position-center">
				</a>
			</div><!-- end of social list -->
			<div class="social-list" data-aos="fade-up" data-aos-once="true"  data-aos-offset="200" data-aos-duration="800">
				<a href="#" class="block w-100 relative">
					<canvas width="268" height="269"></canvas>
					<img src="<?= do_shortcode('[stylesheet_directory]')?>/images/sc-8.jpg" alt="Instagram" class="block absolute top-0 left-0 w-100 h-100 object-fit-cover object-position-center">
				</a>
			</div><!-- end of social list -->

			
		</div><!-- end of social lists -->


		<div class="social-headings flex items-center justify-between" data-aos="fade-up" data-aos-once="true"  data-aos-offset="200" data-aos-duration="800">
			<div class="ig-title flex items-center">
				<i class="ai-font-instagram"></i>
				@move2hou
			</div>

			<div class="default-button inline-block">
				<a href="#"><span>fol</span>low us on instagram</a>
			</div>

		</div><!-- headings -->
	</div>
</section><!-- end social -->

<section id="hp-testimonials" class="has-after has-before relative">


	<div class="testimonials-wrapper relative">
		
		<div class="container flex justify-end">

			<div class="testimonials-container relative" data-aos="fade-right" data-aos-once="true"  data-aos-offset="200" data-aos-duration="800">

				<div class="testmonials-content relative">

					<div class="default-title has-line text-left relative">
						<h2 class="inline-block">
							<span>client</span>
							<em><i>testimonials</i></em>
						</h2>
					</div>

					<div class="testi-lists splide">
						<div class="splide__track">
							<div class="splide__list">
								<div class="testi-list splide__slide">
									<p>“We can’t thank EJ & Raeven enough for helping us find our dream home in Houston. It’s exactly what we dreamed it would be and we didn’t go over our budget! Their local market knowledge, expertise, and amazing dedication made the whole buying process truly enjoyable. Thank you so much, EJ & Raeven!”</p>
								</div>
							</div>
						</div>
						
					</div><!-- end of testimonials lists -->


					<div class="default-button inline-block">
						<a href="#"><span>rea</span>d more testimonials</a>
					</div>

				</div><!-- end of testimonials content -->

			</div><!-- end of testimonials container -->


		</div><!-- end of container -->


	</div><!-- end of testimonials wrapper -->

</section>


<?php get_footer()?>