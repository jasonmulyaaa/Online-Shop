<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title>{{ $konfigurasi[0]->title }}</title>
    <link rel="shortcut icon" href="{{ asset('storage/' . $konfigurasi[0]->favicon) }}">

    <!-- fraimwork - css include -->
    <link rel="stylesheet" type="text/css" href="../../assets/user/css/bootstrap.min.css">

    <!-- icon - css include -->
    <link rel="stylesheet" type="text/css" href="../../assets/user/css/fontawesome.css">

    <!-- animation - css include -->
    <link rel="stylesheet" type="text/css" href="../../assets/user/css/animate.css">

    <!-- nice select - css include -->
    <link rel="stylesheet" type="text/css" href="../../assets/user/css/nice-select.css">

    <!-- carousel - css include -->
    <link rel="stylesheet" type="text/css" href="../../assets/user/css/slick.css">
    <link rel="stylesheet" type="text/css" href="../../assets/user/css/slick-theme.css">

    <!-- popup images & videos - css include -->
    <link rel="stylesheet" type="text/css" href="../../assets/user/css/magnific-popup.css">

    <!-- jquery ui - css include -->
    <link rel="stylesheet" type="text/css" href="../../assets/user/css/jquery-ui.css">

    <!-- custom - css include -->
    <link rel="stylesheet" type="text/css" href="../../assets/user/css/style.css">

</head>


<body class="home_supermarket">


    <!-- backtotop - start -->
    <div id="thetop"></div>
    <div class="backtotop bg_supermarket_red">
        <a href="#" class="scroll">
            <i class="far fa-arrow-up"></i>
        </a>
    </div>
    <!-- backtotop - end -->

    <!-- preloader - start -->
    <!-- <div id="preloader"></div> -->
    <!-- preloader - end -->


    <!-- header_section - start
    ================================================== -->
    <header class="header_section supermarket_header bg-white clearfix">
        <div class="header_top text-white clearfix">
            <div class="container maxw_1460">
                <div class="row align-items-center justify-content-lg-between">
                    <div class="col-lg-5">
                        <p class="welcome_text mb-0">Welcome to Worldwide Online marketplace Store</p>
                    </div>

                    <div class="col-lg-7">
                        <ul class="info_list ul_li_right clearfix">
                            <li><a href="#!"><i class="fal fa-map-marker-alt"></i> Store Locator</a></li>
                            <li><a href="#!"><i class="fal fa-truck"></i> Track Your Order</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="header_middle clearfix">
            <div class="container maxw_1460">
                <div class="row align-items-center justify-content-lg-between">
                    <div class="col-lg-3">
                        <div class="brand_logo">
                            <a class="brand_link" href="/">
                                <img src="{{ asset('storage/' . $konfigurasi[0]->logo_header) }}" srcset="../../assets/user/images/logo/logo_18_2x.png 2x" alt="logo_not_found">
                            </a>

                            <ul class="mh_action_btns ul_li clearfix">
                                <li>
                                    <button type="button" class="search_btn" data-toggle="collapse" data-target="#search_body_collapse" aria-expanded="false" aria-controls="search_body_collapse">
                                        <i class="fal fa-search"></i>
                                    </button>
                                </li>
                                <li><button type="button" class="mobile_menu_btn"><i class="far fa-bars"></i></button></li>
                            </ul>
                        </div>
                    </div>
                    

                    <div class="col-lg-6">
                        <form action="{{ url('/produks') }}">
                            <div class="medical_search_bar">
                                <div class="form_item">
                                    <input type="search" name="search" placeholder="search here...">
                                </div>
                                <button type="submit" class="submit_btn"><i class="fal fa-search"></i></button>
                            </div>
                        </form>
                    </div>
                    <div class="col-lg-3">
                        <div class="supermarket_header_btns clearfix">
                            <ul class="action_btns_group ul_li_right clearfix">
                                <li>
                                    <button type="button">
                                        <span>Need</span>
                                        <strong>Help?</strong>
                                    </button>
                                </li>
                                <li>
                                    <button type="button" class="cart_btn">
                                        <i class="fal fa-shopping-bag"></i>
                                        <span class="btn_badge">2</span>
                                    </button>
                                </li>
                            </ul>
                        </div>
                    </div>


                </div>
            </div>
        </div>

        <div class="header_bottom clearfix">
            <div class="container maxw_1460">
                <nav class="main_menu clearfix">
                    <ul class="ul_li clearfix">
                        <li>
                            <button class="alldepartments_btn bg_supermarket_red text-uppercase" type="button" data-toggle="collapse" data-target="#alldepartments_dropdown" aria-expanded="false" aria-controls="alldepartments_dropdown">
                            </button>
                        </li>
                        <li><a href="/">Home</a></li>
                        <li><a href="/about">Tentang Kami</a></li>
                        <li><a href="/blogs">Blog</a></li>
                        <li><a href="/contact">Kontak Kami</a></li>
                    </ul>
                </nav>
            </div>
        </div>

        <div id="search_body_collapse" class="search_body_collapse collapse">
            <div class="search_body">
                <div class="container-fluid prl_90">
                    <form action="#">
                        <div class="form_item mb-0">
                            <input type="search" name="search" placeholder="Type here...">
                            <button type="submit"><i class="fal fa-search"></i></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        
    </header>
    <!-- header_section - end
    ================================================== -->


    <!-- main body - start
    ================================================== -->
    <main>


        <!-- sidebar mobile menu & sidebar cart - start
        ================================================== -->
        <div class="sidebar-menu-wrapper">

            <div class="sidebar_mobile_menu">
                <button type="button" class="close_btn"><i class="fal fa-times"></i></button>

                <div class="msb_widget brand_logo text-center">
                    <a href="index.html">
                        <img src="../../assets/user/images/logo/logo_25_1x.png" srcset="../../assets/user/images/logo/logo_25_2x.png 2x" alt="logo_not_found">
                    </a>
                </div>

                <div class="msb_widget mobile_menu_list clearfix">
                    <h3 class="title_text mb_15 text-uppercase"><i class="far fa-bars mr-2"></i> Menu List</h3>
                    <ul class="ul_li_block clearfix">
                        <li>
                            <a href="#!">Home</a>
                        </li>
                        <li>
                            <a href="/about" >Tentang Kami</a>
                        </li>
                        <li>
                            <a href="/blogs" >Blog</a>
                        </li>
                        <li>
                            <a href="/contact">Kontak Kami</a>
                        </li>    
                    </ul>
                </div>
            </div>

            <div class="overlay"></div>
        </div>

        @yield('content')


        <footer class="footer_section supermarket_footer clearfix">
			<div class="footer_widget_area sec_ptb_100 bg_white clearfix">
				<div class="container">
					<div class="row justify-content-lg-between">

						<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
							<div class="footer_widget bestrated_products">
								<h3 class="footer_widget_title">Best Rated Products</h3>

								<div class="supermarket_product_small">
									<span class="item_type">Speakers</span>
									<h3 class="item_title">
										<a href="#!">Red Wireless Headphone Solo 2 HD</a>
									</h3>
									<span class="item_price">£2,300</span>
									<ul class="rating_star ul_li clearfix">
										<li><i class="fas fa-star"></i></li>
										<li><i class="fas fa-star"></i></li>
										<li><i class="fas fa-star"></i></li>
										<li><i class="fas fa-star"></i></li>
										<li><i class="fal fa-star"></i></li>
									</ul>
								</div>

								<div class="supermarket_product_small">
									<span class="item_type">Speakers</span>
									<h3 class="item_title">
										<a href="#!">Red Wireless Headphone Solo 2 HD</a>
									</h3>
									<span class="item_price">£2,300</span>
									<ul class="rating_star ul_li clearfix">
										<li><i class="fas fa-star"></i></li>
										<li><i class="fas fa-star"></i></li>
										<li><i class="fas fa-star"></i></li>
										<li><i class="fas fa-star"></i></li>
										<li><i class="fal fa-star"></i></li>
									</ul>
								</div>
							</div>
						</div>

						<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
							<div class="footer_widget footer_useful_links clearfix">
								<h3 class="footer_widget_title">Informasi</h3>
								<ul class="ul_li_block clearfix">
									<li><a href="/">Home</a></li>
									<li><a href="/about">Tentang Kami</a></li>
									<li><a href="/blogs">Blog</a></li>
									<li><a href="/contact">Kontak Kami</a></li>
								</ul>
							</div>
						</div>

						<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
							<div class="footer_widget supermarket_footer_contact">
								<h3 class="footer_widget_title">Informasi Kontak</h3>
								<ul class="ul_li_block clearfix">
									<li>
										<div class="item_icon">
											<i class="fas fa-map-marker-alt"></i>
										</div>
										<div class="item_content">
											<p class="mb-0">
												{{ $konfigurasi[0]->alamat }}
											</p>
										</div>
									</li>
									<li>
										<div class="item_icon">
											<i class="fas fa-phone-alt"></i>
										</div>
										<div class="item_content">
											<p class="mb-0">+{{ $konfigurasi[0]->no_telp }}</p>
										</div>
									</li>
									<li>
										<div class="item_icon">
											<i class="fas fa-envelope"></i>
										</div>
										<div class="item_content">
											<p class="mb-0">Email: {{ $konfigurasi[0]->email }}</p>
											<p class="mb-0">9AM-5PM, Mon - Sat, GMT+3</p>
										</div>
									</li>
								</ul>
							</div>
						</div>

					</div>
				</div>
			</div>

			<div class="footer_middle sec_ptb_50 text-white clearfix" data-bg-color="#23292d">
				<div class="container">
					<div class="row align-items-center justify-content-center">
						<div class="col-lg-5 col-md-7 col-sm-9 col-xs-12">
							<div class="form_item mb-0">
								<form action="#">
									<input type="email" name="email" placeholder="Enter Your Email Address">
									<button type="submit" class="submit_btn">Sign Up</button>
								</form>
							</div>
						</div>

						<div class="col-lg-3 col-md-7 col-sm-9 col-xs-12">
							<div class="footer_electronic_hotline mb_30">
								<i class="fal fa-headset"></i>
								<h4 class="text-white">HUBUNGI KAMI 24/7!</h4>
								<span>+{{ $konfigurasi[0]->no_telp }}</span>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="footer_bottom text-white clearfix" data-bg-color="#191e22">
				<div class="container">
					<div class="row justify-content-lg-between">
						<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
							<p class="copyright_text mb-0">© <a href="#!" class="author_link text-white">Wan Teknologi</a> - All rights Reserved</p>
						</div>
					</div>
				</div>
			</div>
		</footer>
		<!-- footer_section - end
		================================================== -->


		<!-- fraimwork - jquery include -->
		<script src="../../assets/user/js/jquery-3.5.1.min.js"></script>
		<script src="../../assets/user/js/popper.min.js"></script>
		<script src="../../assets/user/js/bootstrap.min.js"></script>

		<!-- mobile menu - jquery include -->
		<script src="../../assets/user/js/mCustomScrollbar.js"></script>

		<!-- animation - jquery include -->
		<script src="../../assets/user/js/parallaxie.js"></script>
		<script src="../../assets/user/js/wow.min.js"></script>

		<!-- nice select - jquery include -->
		<script src="../../assets/user/js/nice-select.min.js"></script>

		<!-- carousel - jquery include -->
		<script src="../../assets/user/js/slick.min.js"></script>

		<!-- countdown timer - jquery include -->
		<script src="../../assets/user/js/countdown.js"></script>

		<!-- popup images & videos - jquery include -->
		<script src="../../assets/user/js/magnific-popup.min.js"></script>

		<!-- filtering & masonry layout - jquery include -->
		<script src="../../assets/user/js/isotope.pkgd.min.js"></script>
		<script src="../../assets/user/js/masonry.pkgd.min.js"></script>
		<script src="../../assets/user/js/imagesloaded.pkgd.min.js"></script>

		<!-- jquery ui - jquery include -->
        <script src="../../assets/user/js/jquery-ui.js"></script>

		<!-- custom - jquery include -->
		<script src="../../assets/user/js/custom.js"></script>