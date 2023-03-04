(function ($, w, d, h, b) {
	$(document).ready(function () {

		/**
		 * Construct.
		 */
		__construct = () => {
			initNavigation();
			onScrollFixed();
			expandedMenu();
			quickSearch();
			

			/// specific for homepage
			if ($(b).hasClass('home')) {
				featuredNeighborhoods();
				initCounter();
				testimonials();
			}

			AOS.init({ disable: 'mobile' });
		}

		initNavigation = () => {
			const $nav = $('#nav');
			if ($nav.length > 0) $nav.navTabDoubleTap();
		}
		onScrollFixed = () => {

			this.onScrollFixed = () => {
				const $header = $('.header');

				$(w).on('load scroll', function () {
					let currentScroll = w.pageYOffset || d.documentElement.scrollTop;
					let isDesktop = w.matchMedia('(min-width: 992px)').matches;

					if (isDesktop) {
						if (currentScroll > 0) {
							$header.addClass('header-float');
						}
						else {
							$header.removeClass('header-float');
						}
					}
					else {
						$header.removeClass('header-float');
					}

				});
			}
			this.onScrollFixed();
		}
		expandedMenu = () => {
		
			const $expandedContainer = $('.expanded-menu-wrap');
			const $expandedButton = $('.expanded-menu-button');
			const $burgerBody = $('.expanded-menu');
			const $expandeClose = $('.expanded-close');

			$(window).on("load", function () {
				$burgerBody.mCustomScrollbar();
			});


			/// open
			$expandedButton.on('click', function () {
				$expandedContainer.addClass('expandedShow');
				$(b).addClass('expandedShow');
			});


			//close
			$expandeClose.on('click', function () {
				$expandedContainer.removeClass('expandedShow');
				$(b).removeClass('expandedShow');
			});


		}
		quickSearch = () => {
			
			const $quickSearchHeading = $('.quick-search-heading-title');
			const $quickSearchBody = $('.qc-form-container');

			$quickSearchHeading.on('click', function () {
				$quickSearchBody.addClass('quickSearchShow');
			});


		}
		featuredNeighborhoods = () => {
			
			var FeatureNeigh = new Splide('.featuredNeighborhoodSlides', {
				type: 'loop',
				perPage: 1,
				focus: 'center',
				autoplay: true,
				interval: 8000,
				flickMaxPages: 3,
				updateOnMove: true,
				pagination: false,
				padding: '30%',
				throttle: 300,
				breakpoints: {
					992: {
						padding: '0',
					}

				},
			});

			FeatureNeigh.mount();

		}
		commaSeparateNumber = (val) => {
			while (/(\d+)(\d{3})/.test(val.toString())) {
				val = val.toString().replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,");
			}
			return val;
		}
		initCounter = () => {

			if ($('body').hasClass('home')) {
				function isScrolledIntoView(elem) {
					const docViewTop = jQuery(window).scrollTop();
					let docViewBottom = docViewTop + jQuery(window).height();

					let elemTop = jQuery(elem).offset().top;
					let elemBottom = elemTop + jQuery(elem).height();

					return elemBottom <= docViewBottom && elemTop >= docViewTop;
				}

				var shown = false;

				$(w).scroll(function () {
					var myelement = $(".hp-performance-number");
					if (isScrolledIntoView(myelement)) {
						if (!shown) {
							$(".fn-lists em").each(function () {
								var $this = $(this);
								const limit = parseInt($this.attr("data-number"));

								$({ Counter: 0 }).animate(
									{ Counter: limit },
									{
										duration: 1000,
										easing: "swing",
										step: function () {
											$this.text(commaSeparateNumber(Math.ceil(this.Counter)));
										},
									}
								);
							});
						}
						shown = true;
					}
				});
			}
		}

		testimonials = () => { 

			var testimonial = new Splide('.testi-lists', {
				perPage: 1,
				// autoplay: true,
				// interval: 8000,
				flickMaxPages: 3,
				updateOnMove: true,
				pagination: false,
				throttle: 300,
				arrows:false
			});

			testimonial.mount();
		}





		/**
		 * Instantiate
		 */
		__construct();

	});

	$(window).on('load', function () {
		$('body').addClass('site-loaded');
	});

})(jQuery, window, document, 'html', 'body');