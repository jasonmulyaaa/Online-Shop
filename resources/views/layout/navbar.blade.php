<!DOCTYPE html>
<html lang="zxx">

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


	<body class="home_classic_ecommerce">


		<!-- backtotop - start -->
		<div id="thetop"></div>
		<div class="backtotop" data-bg-color="#000000">
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
		<header class="header_section classic_ecommerce_header sticky_header clearfix">
			

			<div class="header_bottom clearfix">
				<div class="container">
					<div class="row align-items-center">
						<div class="col-lg-3">
							<div class="brand_logo">
								<a class="brand_link" href="/">
									<img src="{{ asset('storage/' . $konfigurasi[0]->logo_header) }}" srcset="{{ asset('storage/' . $konfigurasi[0]->logo_header) }}" alt="logo_not_found">
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
							<nav class="main_menu clearfix">
								<ul class="ul_li_center clearfix">
									<li>
										<a href="/">Home</a>
									</li>
									<li>
										<a href="/about">Tentang Kami</a>
									</li>
									<li>
										<a href="/blogs">Blog</a>
									</li>
									<li><a href="/contact">Kontak Kami</a></li>
								</ul>
							</nav>
						</div>

					</div>
				</div>
			</div>

			<div id="search_body_collapse" class="search_body_collapse collapse">
				<div class="search_body">
					<div class="container">
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

        <main>


			<!-- sidebar mobile menu & sidebar cart - start
			================================================== -->
			<div class="sidebar-menu-wrapper">
				

				<div class="sidebar_mobile_menu">
					<button type="button" class="close_btn"><i class="fal fa-times"></i></button>

					<div class="msb_widget brand_logo text-center">
						<a href="index.html">
							<img src="../../assets/user/images/logo/logo_25_1x.png" srcset="../../assets/images/logo/logo_25_2x.png 2x" alt="logo_not_found">
						</a>
					</div>

					<div class="msb_widget mobile_menu_list clearfix">
						<h3 class="title_text mb_15 text-uppercase"><i class="far fa-bars mr-2"></i> Menu List</h3>
						<ul class="ul_li_block clearfix">
							<li>
								<a href="/">Home</a>
							</li>
							<li>
								<a href="/about">Tentang Kami</a>
							</li>
							<li>
								<a href="/blogs">Blog</a>
							</li>    
							<li>
								<a href="/contact">Kontak Kami</a>
							</li> 
						</ul>
					</div>
				</div>

				<div class="overlay"></div>
			</div>
			<!-- sidebar mobile menu & sidebar cart - end
			================================================== -->

            @yield('content')


            <footer class="footer_section ecommerce_footer bg_black text-white clearfix">
                <div class="footer_widget_area sec_ptb_100 clearfix">
                    <div class="container">
                        <div class="row justify-content-lg-between">
    
                            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                <div class="footer_widget footer_about">
                                    <div class="brand_logo mb_15">
                                        <a href="index.html">
                                            <img src="{{ asset('storage/' . $konfigurasi[0]->logo_header) }}" srcset="../../assets/images/logo/logo_04_2x.png 2x" alt="logo_not_found">
                                        </a>
                                    </div>
    
                                    <p class="mb_50">
                                        {!! $konfigurasi[0]->deskripsi !!}
                                    </p>
    
                                </div>
                            </div>
    
                            <div class="col-lg-2 col-md-4 col-sm-6 col-xs-12">
                                <div class="footer_widget footer_useful_links clearfix">
                                    <h3 class="footer_widget_title text-white">Kontak Kami</h3>
                                    <ul class="ul_li_block">
                                        <li>
                                            {{ $konfigurasi[0]->alamat }}
                                        </li>
                                        <li>Phone: +{{ $konfigurasi[0]->no_telp }}</li>
                                        <li>E-Mail: {{ $konfigurasi[0]->email }}</li>
                                    </ul>
                                </div>
                            </div>
    
                            <div class="col-lg-2 col-md-4 col-sm-6 col-xs-12">
                                <div class="footer_widget footer_useful_links clearfix">
                                    <h3 class="footer_widget_title text-white">Information</h3>
                                    <ul class="ul_li_block">
                                        <li><a href="/">Home</a></li>
                                        <li><a href="/about">Tentang Kami</a></li>
                                        <li><a href="/blogs">Blog</a></li>
                                        <li><a href="/contact">Kontak Kami</a></li>
                                    </ul>
                                </div>
                            </div>
    
                        </div>
                    </div>
                </div>
    
                <div class="footer_bottom text-center d-flex align-items-center clearfix">
                    <div class="container">
                        <p class="copyright_text mb-0">© <a href="#!" class="author_link text-white">Wan Teknologi</a> - All rights Reserved</p>
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
    
            <!-- google map - jquery include -->
            <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDk2HrmqE4sWSei0XdKGbOMOHN3Mm2Bf-M&ver=2.1.6"></script>
            <script src="../../assets/user/js/gmaps.min.js"></script>
    
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
            @include('sweetalert::alert')
