<!DOCTYPE html>
<html lang="en">

	<head>

		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta name="keywords" content="{{ $metamanagement[0]->keywords }}">
		<meta name="search engines" content="{{ $metamanagement[0]->search_engine }}">
		<meta name="author" content="{{ $metamanagement[0]->author }}">
		<meta name="description" content="{{ $metamanagement[0]->deskripsi }}">


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
							<form action="{{ url('/produks') }}" autocomplete="off" method="get">
								<div class="medical_search_bar">
									<div class="form_item">
										<input type="search" name="search" placeholder="search here...">
									</div>
									<div class="option_select mb-0">
										<select>
											<option data-display="All Category">Select A Option</option>
											@foreach ($kategorigeneral1 as $kategorigeneral1)
											<option ><a href="{{ route('kategories.show', $kategorigeneral1->id) }}">{{ $kategorigeneral1->kategorigeneral }}</a></option>
											@endforeach
										</select>
									</div>
									<button type="submit" class="submit_btn"><i class="fal fa-search"></i></button>
								</div>
							</form>
						</div>
						<div class="col-lg-3">
							<div class="supermarket_header_btns clearfix">
								<ul class="action_btns_group ul_li_right clearfix">
									<li>
										<a href="https://wa.me/{{ $konfigurasi[0]->no_telp }}">
											<span>Hubungi</span>
											<strong>Kami?</strong>
										</a>
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
									<i class="far fa-bars"></i> Kategori
								</button>
							</li>
							<li><a href="#!">Home</a></li>
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
			<!-- sidebar mobile menu & sidebar cart - end
			================================================== -->


			<!-- slider_section - start
			================================================== -->
			<section class="slider_section supermarket_slider sec_ptb_50 clearfix" data-background="../../assets/user/images/backgrounds/bg_13.png">
				<div class="container maxw_1460">
					<div class="row justify-content-lg-between">
						<div class="col-lg-3">
							<div class="alldepartments_menu_wrap">
								<div class="alldepartments_dropdown show_lg collapse" id="alldepartments_dropdown">
									<div class="card">
										<ul class="alldepartments_menulist ul_li_block clearfix">
											<li>
												<a href="/promo">
													<span class="icon">
														<img src="../../assets/user/images/icons/supermarket/icon_01.png" alt="icon_not_found">
													</span>
													<strong>Promo</strong>
												</a>
											</li>
											<li>
												<a href="/diskon">
													<span class="icon">
														<img src="../../assets/user/images/icons/supermarket/icon_02.png" alt="icon_not_found">
													</span>
													<strong>Diskon</strong>
												</a>
											</li>

											@foreach ($kategorigeneral as $kategorigeneral)	
											<li class="menu_item_has_child">
												<a href="{{ route('kategories.show', $kategorigeneral->id) }}">
													<span class="icon">
														<img src="{{ asset('storage/' . $kategorigeneral->icon) }}" alt="icon_not_found">
													</span>
													{{ $kategorigeneral->kategorigeneral }}
												</a>
											</li>
											@endforeach
											
										</ul>
									</div>
								</div>
							</div>
						</div>

						<div class="col-lg-9">
							<div class="main_slider clearfix" data-slick='{"arrows": false}'>
								@foreach ($slider as $slider)
								@if ($slider->slider)
								<div class="item clearfix" data-bg-color="#ffc156" style="padding-right: 90px; padding-left: 90px;">
									<div class="slider_image order-last" data-animation="fadeInUp" data-delay=".2s">
										<img src="{{ asset('storage/' . $slider->gambar1) }}" alt="image_not_found" style="max-width: 459px; max-height: 428px;">
									</div>
									<div class="slider_content">
										<h4 data-animation="fadeInUp" data-delay=".4s">Jual untuk mendapatkan apa yang kamu suka</h4>
										<h3 data-animation="fadeInUp" data-delay=".6s">{{ $slider->judul }}</h3>
										<div class="item_price" data-animation="fadeInUp" data-delay=".8s">
											<small>From</small>
											<sup>Rp{{ number_format($slider->harga, 0,',', '.') }}</sup>
										</div>
										<div class="abtn_wrap clearfix" data-animation="fadeInUp" data-delay="1s">
											<a href="https://wa.me/{{ $konfigurasi[0]->no_telp }}" class="custom_btn btn_round bg_supermarket_red">Mulai Beli</a>
										</div>
									</div>
								</div>
								@else
									
								@endif
								
								@endforeach
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- slider_section - end
			================================================== -->


			<!-- policy_section - start
			================================================== -->
			<section class="policy_section sec_ptb_50 pb-0 clearfix">
				<div class="container maxw_1460">
					<div class="supermarket_policy clearfix">
						<ul class="ul_li clearfix">
							@foreach ($service as $service)
							<li>
								<div class="supermarket_policy_item clearfix">
									<div class="item_icon">
										<img src="{{ asset('storage/' . $service->gambar) }}" alt="icon_not_found">
									</div>
									<div class="item_content">
										<h3 class="text-uppercase">{{ $service->judul }}</h3>
										<p>{{ $service->deskripsi }}</p>
									</div>
								</div>
							</li>
							@endforeach
							
						</ul>
					</div>
				</div>
			</section>
			<!-- policy_section - end
			================================================== -->


			<!-- deals_section - start
			================================================== -->
			<section class="deals_section sec_ptb_50 clearfix">
				<div class="container maxw_1460">
					<div class="row align-items-center">
						<div class="col-lg-3">
							<div class="supermarket_section_title clearfix">
								<span class="sub_title text-uppercase">A wide selection of items </span>
								<h2 class="title_text mb-0">Top Flash Deal</h2>
							</div>
						</div>

						<div class="col-lg-7">
							<div class="gray_line"></div>
						</div>

						<div class="col-lg-2">
							<div class="carousel_nav align_right">
								<button type="button" class="left_arrow5"><i class="fal fa-arrow-left"></i></button>
								<button type="button" class="right_arrow5"><i class="fal fa-arrow-right"></i></button>
							</div>
						</div>
					</div>

					<div class="supermarket_deals_carousel position-relative clearfix">
						<div class="slideshow5_slider row clearfix" data-slick='{"dots": false}'>
							@foreach ($produks as $produks)
							<div class="item col">
								<div class="supermarket_deals_item text-center clearfix">
									<a href="{{ route('produks.show', $produks->judul) }}" class="item_image">
										<img src="{{ asset('storage/' . $produks->gambar1) }}" alt="image_not_found">
									</a>
									<div class="item_content">
										<h3 class="item_title">
											<a href="{{ route('produks.show', $produks->judul) }}">{{ $produks->judul }}</a>
										</h3>
									</div>
									<span class="item_instock">{{ $produks->views }} Dilihat</span>
								</div>
							</div>
							@endforeach

							
						</div>
					</div>

				</div>
			</section>
			<!-- deals_section - end
			================================================== -->


			<!-- product_section - start
			================================================== -->
			<section class="product_section sec_ptb_100 bg_white clearfix">
				<div class="container maxw_1460">
					<div class="row justify-content-lg-between">
						<div class="col-lg-3">
							<div class="supermarket_sidebar_tab mb_30">
								<div class="wrap_heade bg_supermarket_red clearfix">
									<h2>Top Flash Deal</h2>
									<span>A wide selection of items</span>
								</div>
								<ul class="ul_li_block nav" role="tablist">
									<li><a class="active" data-toggle="tab" href="#best_deals_tab">All</a></li>
									@foreach ($kategorigeneral2 as $kategorigeneral2)
										
									<li><a data-toggle="tab" href="#{{$kategorigeneral2->kategorigeneral, $kategorigeneral2->id}}">{{ $kategorigeneral2->kategorigeneral }}</a></li>

									@endforeach
								</ul>
							</div>

							<div class="supermarket_advertisement_3">
								<img src="{{ asset('storage/' . $iklan[0]->gambar) }}" alt="image_not_found">
								<div class="item_content text-white">
									<h3 class="item_title text-white">
										{{ $iklan[0]->judul }}
										<span>Dengan Harga</span>
									</h3>
									<span class="item_price"><sup>Rp.</sup>{{ number_format($iklan[0]->harga, 0, ',', '.') }}</span>
									<a class="custom_btn bg_black btn_round" href="https://wa.me/{{ $konfigurasi[0]->no_telp }}">Belanja Sekarang</a>
								</div>
							</div>
						</div>

						<div class="col-lg-9">
							<div class="tab-content">
								<div id="best_deals_tab" class="tab-pane active">
									<ul class="supermarket_product_columns has_4columns ul_li clearfix">
										@foreach ($produk as $produk)
										<li>
											<div class="supermarket_product_item">
												<ul class="product_label ul_li_block clearfix">
													<li data-bg-color="#0062bd">NEW</li>
												</ul>
												<a class="item_image" href="{{ route('produks.show', $produk->judul) }}">
													<img src="{{ asset('storage/' . $produk->gambar1) }}" alt="image_not_found">
												</a>
												<div class="item_content">
													<span class="item_type text-uppercase">{{ $produk->kategorigeneral }}</span>
													<h3 class="item_title">
														<a href="{{ route('produks.show', $produk->judul) }}">
															{{ $produk->judul }}
														</a>
													</h3>
													<div class="item_price">
														<strong>Rp.{{ number_format($produk->harga, 0,',','.') }}</strong>
													</div>
												</div>
											</div>
										</li>
										@endforeach
									</ul>
								</div>
								@foreach ($produks6 as $produks6)
									@if ($kategorigeneral2->kategorigeneral == $produks6->kategorigeneral)
										
								<div id="{{ $kategorigeneral2->kategorigeneral, $kategorigeneral2->id }}" class="tab-pane fade">
									<ul class="supermarket_product_columns has_4columns ul_li clearfix">
										<li>
											<div class="supermarket_product_item">
												<ul class="product_label ul_li_block clearfix">
													<li data-bg-color="#cc1414">-70%</li>
													<li data-bg-color="#0062bd">NEW</li>
												</ul>
												<a class="item_image" href="#!">
													<img src="{{ asset('storage/' . $produks6->kategorigeneral) }}" alt="image_not_found">
												</a>
												<div class="item_content">
													<span class="item_type text-uppercase">{{ $produks6->kategorigeneral }}</span>
													<h3 class="item_title">
														<a href="#!">
															{{ $produks6->judul }}
														</a>
													</h3>
													<div class="item_price">
														<strong>£1,300</strong>
														<del>£2,300</del>
													</div>
												</div>
											</div>
										</li>

									</ul>
								</div>
								@endif

								@endforeach


								<div id="cameras_tab" class="tab-pane fade">
									<ul class="supermarket_product_columns has_4columns ul_li clearfix">
										<li>
											<div class="supermarket_product_item">
												<ul class="product_label ul_li_block clearfix">
													<li data-bg-color="#cc1414">-70%</li>
													<li data-bg-color="#0062bd">NEW</li>
												</ul>
												<a class="item_image" href="#!">
													<img src="../../assets/user/images/shop/supermarket/img_05.png" alt="image_not_found">
												</a>
												<div class="item_content">
													<span class="item_type text-uppercase">Speakers</span>
													<h3 class="item_title">
														<a href="#!">
															Wireless Audio System Multiroom 360 
														</a>
													</h3>
													<div class="item_price">
														<strong>£1,300</strong>
														<del>£2,300</del>
													</div>
												</div>
											</div>
										</li>

										<li>
											<div class="supermarket_product_item">
												<ul class="product_label ul_li_block clearfix">
													<li data-bg-color="#cc1414">-70%</li>
													<li data-bg-color="#0062bd">NEW</li>
												</ul>
												<a class="item_image" href="#!">
													<img src="../../assets/user/images/shop/supermarket/img_06.png" alt="image_not_found">
												</a>
												<div class="item_content">
													<span class="item_type text-uppercase">Speakers</span>
													<h3 class="item_title">
														<a href="#!">
															Wireless Audio System Multiroom 360 
														</a>
													</h3>
													<div class="item_price">
														<strong>£1,300</strong>
														<del>£2,300</del>
													</div>
												</div>
											</div>
										</li>

										<li>
											<div class="supermarket_product_item">
												<ul class="product_label ul_li_block clearfix">
													<li data-bg-color="#cc1414">-70%</li>
													<li data-bg-color="#0062bd">NEW</li>
												</ul>
												<a class="item_image" href="#!">
													<img src="../../assets/user/images/shop/supermarket/img_07.png" alt="image_not_found">
												</a>
												<div class="item_content">
													<span class="item_type text-uppercase">Speakers</span>
													<h3 class="item_title">
														<a href="#!">
															Wireless Audio System Multiroom 360 
														</a>
													</h3>
													<div class="item_price">
														<strong>£1,300</strong>
														<del>£2,300</del>
													</div>
												</div>
											</div>
										</li>

										<li>
											<div class="supermarket_product_item">
												<ul class="product_label ul_li_block clearfix">
													<li data-bg-color="#cc1414">-70%</li>
													<li data-bg-color="#0062bd">NEW</li>
												</ul>
												<a class="item_image" href="#!">
													<img src="../../assets/user/images/shop/supermarket/img_08.png" alt="image_not_found">
												</a>
												<div class="item_content">
													<span class="item_type text-uppercase">Speakers</span>
													<h3 class="item_title">
														<a href="#!">
															Wireless Audio System Multiroom 360 
														</a>
													</h3>
													<div class="item_price">
														<strong>£1,300</strong>
														<del>£2,300</del>
													</div>
												</div>
											</div>
										</li>

										<li>
											<div class="supermarket_product_item">
												<ul class="product_label ul_li_block clearfix">
													<li data-bg-color="#cc1414">-70%</li>
													<li data-bg-color="#0062bd">NEW</li>
												</ul>
												<a class="item_image" href="#!">
													<img src="../../assets/user/images/shop/supermarket/img_09.png" alt="image_not_found">
												</a>
												<div class="item_content">
													<span class="item_type text-uppercase">Speakers</span>
													<h3 class="item_title">
														<a href="#!">
															Wireless Audio System Multiroom 360 
														</a>
													</h3>
													<div class="item_price">
														<strong>£1,300</strong>
														<del>£2,300</del>
													</div>
												</div>
											</div>
										</li>

										<li>
											<div class="supermarket_product_item">
												<ul class="product_label ul_li_block clearfix">
													<li data-bg-color="#8d8d8d">SOLD OUT</li>
												</ul>
												<a class="item_image" href="#!">
													<img src="../../assets/user/images/shop/supermarket/img_10.png" alt="image_not_found">
												</a>
												<div class="item_content">
													<span class="item_type text-uppercase">Speakers</span>
													<h3 class="item_title">
														<a href="#!">
															Wireless Audio System Multiroom 360 
														</a>
													</h3>
													<div class="item_price">
														<strong>£1,300</strong>
														<del>£2,300</del>
													</div>
												</div>
											</div>
										</li>

										<li>
											<div class="supermarket_product_item">
												<ul class="product_label ul_li_block clearfix">
													<li data-bg-color="#cc1414">-70%</li>
													<li data-bg-color="#0062bd">NEW</li>
												</ul>
												<a class="item_image" href="#!">
													<img src="../../assets/user/images/shop/supermarket/img_12.png" alt="image_not_found">
												</a>
												<div class="item_content">
													<span class="item_type text-uppercase">Speakers</span>
													<h3 class="item_title">
														<a href="#!">
															Wireless Audio System Multiroom 360 
														</a>
													</h3>
													<div class="item_price">
														<strong>£1,300</strong>
														<del>£2,300</del>
													</div>
												</div>
											</div>
										</li>

										<li>
											<div class="supermarket_product_item">
												<ul class="product_label ul_li_block clearfix">
													<li data-bg-color="#cc1414">-70%</li>
													<li data-bg-color="#0062bd">NEW</li>
												</ul>
												<a class="item_image" href="#!">
													<img src="../../assets/user/images/shop/supermarket/img_11.png" alt="image_not_found">
												</a>
												<div class="item_content">
													<span class="item_type text-uppercase">Speakers</span>
													<h3 class="item_title">
														<a href="#!">
															Wireless Audio System Multiroom 360 
														</a>
													</h3>
													<div class="item_price">
														<strong>£1,300</strong>
														<del>£2,300</del>
													</div>
												</div>
											</div>
										</li>

										<li>
											<div class="supermarket_product_item">
												<ul class="product_label ul_li_block clearfix">
													<li data-bg-color="#cc1414">-70%</li>
													<li data-bg-color="#0062bd">NEW</li>
												</ul>
												<a class="item_image" href="#!">
													<img src="../../assets/user/images/shop/supermarket/img_12.png" alt="image_not_found">
												</a>
												<div class="item_content">
													<span class="item_type text-uppercase">Speakers</span>
													<h3 class="item_title">
														<a href="#!">
															Wireless Audio System Multiroom 360 
														</a>
													</h3>
													<div class="item_price">
														<strong>£1,300</strong>
														<del>£2,300</del>
													</div>
												</div>
											</div>
										</li>

										<li>
											<div class="supermarket_product_item">
												<ul class="product_label ul_li_block clearfix">
													<li data-bg-color="#cc1414">-70%</li>
													<li data-bg-color="#0062bd">NEW</li>
												</ul>
												<a class="item_image" href="#!">
													<img src="../../assets/user/images/shop/supermarket/img_13.png" alt="image_not_found">
												</a>
												<div class="item_content">
													<span class="item_type text-uppercase">Speakers</span>
													<h3 class="item_title">
														<a href="#!">
															Wireless Audio System Multiroom 360 
														</a>
													</h3>
													<div class="item_price">
														<strong>£1,300</strong>
														<del>£2,300</del>
													</div>
												</div>
											</div>
										</li>

										<li>
											<div class="supermarket_product_item">
												<ul class="product_label ul_li_block clearfix">
													<li data-bg-color="#cc1414">-70%</li>
													<li data-bg-color="#0062bd">NEW</li>
												</ul>
												<a class="item_image" href="#!">
													<img src="../../assets/user/images/shop/supermarket/img_14.png" alt="image_not_found">
												</a>
												<div class="item_content">
													<span class="item_type text-uppercase">Speakers</span>
													<h3 class="item_title">
														<a href="#!">
															Wireless Audio System Multiroom 360 
														</a>
													</h3>
													<div class="item_price">
														<strong>£1,300</strong>
														<del>£2,300</del>
													</div>
												</div>
											</div>
										</li>

										<li>
											<div class="supermarket_product_item">
												<ul class="product_label ul_li_block clearfix">
													<li data-bg-color="#cc1414">-70%</li>
													<li data-bg-color="#0062bd">NEW</li>
												</ul>
												<a class="item_image" href="#!">
													<img src="../../assets/user/images/shop/supermarket/img_15.png" alt="image_not_found">
												</a>
												<div class="item_content">
													<span class="item_type text-uppercase">Speakers</span>
													<h3 class="item_title">
														<a href="#!">
															Wireless Audio System Multiroom 360 
														</a>
													</h3>
													<div class="item_price">
														<strong>£1,300</strong>
														<del>£2,300</del>
													</div>
												</div>
											</div>
										</li>
									</ul>
								</div>

								<div id="audio_tab" class="tab-pane fade">
									<ul class="supermarket_product_columns has_4columns ul_li clearfix">
										<li>
											<div class="supermarket_product_item">
												<ul class="product_label ul_li_block clearfix">
													<li data-bg-color="#cc1414">-70%</li>
													<li data-bg-color="#0062bd">NEW</li>
												</ul>
												<a class="item_image" href="#!">
													<img src="../../assets/user/images/shop/supermarket/img_05.png" alt="image_not_found">
												</a>
												<div class="item_content">
													<span class="item_type text-uppercase">Speakers</span>
													<h3 class="item_title">
														<a href="#!">
															Wireless Audio System Multiroom 360 
														</a>
													</h3>
													<div class="item_price">
														<strong>£1,300</strong>
														<del>£2,300</del>
													</div>
												</div>
											</div>
										</li>

										<li>
											<div class="supermarket_product_item">
												<ul class="product_label ul_li_block clearfix">
													<li data-bg-color="#cc1414">-70%</li>
													<li data-bg-color="#0062bd">NEW</li>
												</ul>
												<a class="item_image" href="#!">
													<img src="../../assets/user/images/shop/supermarket/img_06.png" alt="image_not_found">
												</a>
												<div class="item_content">
													<span class="item_type text-uppercase">Speakers</span>
													<h3 class="item_title">
														<a href="#!">
															Wireless Audio System Multiroom 360 
														</a>
													</h3>
													<div class="item_price">
														<strong>£1,300</strong>
														<del>£2,300</del>
													</div>
												</div>
											</div>
										</li>

										<li>
											<div class="supermarket_product_item">
												<ul class="product_label ul_li_block clearfix">
													<li data-bg-color="#cc1414">-70%</li>
													<li data-bg-color="#0062bd">NEW</li>
												</ul>
												<a class="item_image" href="#!">
													<img src="../../assets/user/images/shop/supermarket/img_07.png" alt="image_not_found">
												</a>
												<div class="item_content">
													<span class="item_type text-uppercase">Speakers</span>
													<h3 class="item_title">
														<a href="#!">
															Wireless Audio System Multiroom 360 
														</a>
													</h3>
													<div class="item_price">
														<strong>£1,300</strong>
														<del>£2,300</del>
													</div>
												</div>
											</div>
										</li>

										<li>
											<div class="supermarket_product_item">
												<ul class="product_label ul_li_block clearfix">
													<li data-bg-color="#cc1414">-70%</li>
													<li data-bg-color="#0062bd">NEW</li>
												</ul>
												<a class="item_image" href="#!">
													<img src="../../assets/user/images/shop/supermarket/img_08.png" alt="image_not_found">
												</a>
												<div class="item_content">
													<span class="item_type text-uppercase">Speakers</span>
													<h3 class="item_title">
														<a href="#!">
															Wireless Audio System Multiroom 360 
														</a>
													</h3>
													<div class="item_price">
														<strong>£1,300</strong>
														<del>£2,300</del>
													</div>
												</div>
											</div>
										</li>

										<li>
											<div class="supermarket_product_item">
												<ul class="product_label ul_li_block clearfix">
													<li data-bg-color="#cc1414">-70%</li>
													<li data-bg-color="#0062bd">NEW</li>
												</ul>
												<a class="item_image" href="#!">
													<img src="../../assets/user/images/shop/supermarket/img_09.png" alt="image_not_found">
												</a>
												<div class="item_content">
													<span class="item_type text-uppercase">Speakers</span>
													<h3 class="item_title">
														<a href="#!">
															Wireless Audio System Multiroom 360 
														</a>
													</h3>
													<div class="item_price">
														<strong>£1,300</strong>
														<del>£2,300</del>
													</div>
												</div>
											</div>
										</li>

										<li>
											<div class="supermarket_product_item">
												<ul class="product_label ul_li_block clearfix">
													<li data-bg-color="#8d8d8d">SOLD OUT</li>
												</ul>
												<a class="item_image" href="#!">
													<img src="../../assets/user/images/shop/supermarket/img_10.png" alt="image_not_found">
												</a>
												<div class="item_content">
													<span class="item_type text-uppercase">Speakers</span>
													<h3 class="item_title">
														<a href="#!">
															Wireless Audio System Multiroom 360 
														</a>
													</h3>
													<div class="item_price">
														<strong>£1,300</strong>
														<del>£2,300</del>
													</div>
												</div>
											</div>
										</li>

										<li>
											<div class="supermarket_product_item">
												<ul class="product_label ul_li_block clearfix">
													<li data-bg-color="#cc1414">-70%</li>
													<li data-bg-color="#0062bd">NEW</li>
												</ul>
												<a class="item_image" href="#!">
													<img src="../../assets/user/images/shop/supermarket/img_12.png" alt="image_not_found">
												</a>
												<div class="item_content">
													<span class="item_type text-uppercase">Speakers</span>
													<h3 class="item_title">
														<a href="#!">
															Wireless Audio System Multiroom 360 
														</a>
													</h3>
													<div class="item_price">
														<strong>£1,300</strong>
														<del>£2,300</del>
													</div>
												</div>
											</div>
										</li>

										<li>
											<div class="supermarket_product_item">
												<ul class="product_label ul_li_block clearfix">
													<li data-bg-color="#cc1414">-70%</li>
													<li data-bg-color="#0062bd">NEW</li>
												</ul>
												<a class="item_image" href="#!">
													<img src="../../assets/user/images/shop/supermarket/img_11.png" alt="image_not_found">
												</a>
												<div class="item_content">
													<span class="item_type text-uppercase">Speakers</span>
													<h3 class="item_title">
														<a href="#!">
															Wireless Audio System Multiroom 360 
														</a>
													</h3>
													<div class="item_price">
														<strong>£1,300</strong>
														<del>£2,300</del>
													</div>
												</div>
											</div>
										</li>

										<li>
											<div class="supermarket_product_item">
												<ul class="product_label ul_li_block clearfix">
													<li data-bg-color="#cc1414">-70%</li>
													<li data-bg-color="#0062bd">NEW</li>
												</ul>
												<a class="item_image" href="#!">
													<img src="../../assets/user/images/shop/supermarket/img_12.png" alt="image_not_found">
												</a>
												<div class="item_content">
													<span class="item_type text-uppercase">Speakers</span>
													<h3 class="item_title">
														<a href="#!">
															Wireless Audio System Multiroom 360 
														</a>
													</h3>
													<div class="item_price">
														<strong>£1,300</strong>
														<del>£2,300</del>
													</div>
												</div>
											</div>
										</li>

										<li>
											<div class="supermarket_product_item">
												<ul class="product_label ul_li_block clearfix">
													<li data-bg-color="#cc1414">-70%</li>
													<li data-bg-color="#0062bd">NEW</li>
												</ul>
												<a class="item_image" href="#!">
													<img src="../../assets/user/images/shop/supermarket/img_13.png" alt="image_not_found">
												</a>
												<div class="item_content">
													<span class="item_type text-uppercase">Speakers</span>
													<h3 class="item_title">
														<a href="#!">
															Wireless Audio System Multiroom 360 
														</a>
													</h3>
													<div class="item_price">
														<strong>£1,300</strong>
														<del>£2,300</del>
													</div>
												</div>
											</div>
										</li>

										<li>
											<div class="supermarket_product_item">
												<ul class="product_label ul_li_block clearfix">
													<li data-bg-color="#cc1414">-70%</li>
													<li data-bg-color="#0062bd">NEW</li>
												</ul>
												<a class="item_image" href="#!">
													<img src="../../assets/user/images/shop/supermarket/img_14.png" alt="image_not_found">
												</a>
												<div class="item_content">
													<span class="item_type text-uppercase">Speakers</span>
													<h3 class="item_title">
														<a href="#!">
															Wireless Audio System Multiroom 360 
														</a>
													</h3>
													<div class="item_price">
														<strong>£1,300</strong>
														<del>£2,300</del>
													</div>
												</div>
											</div>
										</li>

										<li>
											<div class="supermarket_product_item">
												<ul class="product_label ul_li_block clearfix">
													<li data-bg-color="#cc1414">-70%</li>
													<li data-bg-color="#0062bd">NEW</li>
												</ul>
												<a class="item_image" href="#!">
													<img src="../../assets/user/images/shop/supermarket/img_15.png" alt="image_not_found">
												</a>
												<div class="item_content">
													<span class="item_type text-uppercase">Speakers</span>
													<h3 class="item_title">
														<a href="#!">
															Wireless Audio System Multiroom 360 
														</a>
													</h3>
													<div class="item_price">
														<strong>£1,300</strong>
														<del>£2,300</del>
													</div>
												</div>
											</div>
										</li>
									</ul>
								</div>

								<div id="cell_phones_tab" class="tab-pane fade">
									<ul class="supermarket_product_columns has_4columns ul_li clearfix">
										<li>
											<div class="supermarket_product_item">
												<ul class="product_label ul_li_block clearfix">
													<li data-bg-color="#cc1414">-70%</li>
													<li data-bg-color="#0062bd">NEW</li>
												</ul>
												<a class="item_image" href="#!">
													<img src="../../assets/user/images/shop/supermarket/img_05.png" alt="image_not_found">
												</a>
												<div class="item_content">
													<span class="item_type text-uppercase">Speakers</span>
													<h3 class="item_title">
														<a href="#!">
															Wireless Audio System Multiroom 360 
														</a>
													</h3>
													<div class="item_price">
														<strong>£1,300</strong>
														<del>£2,300</del>
													</div>
												</div>
											</div>
										</li>

										<li>
											<div class="supermarket_product_item">
												<ul class="product_label ul_li_block clearfix">
													<li data-bg-color="#cc1414">-70%</li>
													<li data-bg-color="#0062bd">NEW</li>
												</ul>
												<a class="item_image" href="#!">
													<img src="../../assets/user/images/shop/supermarket/img_06.png" alt="image_not_found">
												</a>
												<div class="item_content">
													<span class="item_type text-uppercase">Speakers</span>
													<h3 class="item_title">
														<a href="#!">
															Wireless Audio System Multiroom 360 
														</a>
													</h3>
													<div class="item_price">
														<strong>£1,300</strong>
														<del>£2,300</del>
													</div>
												</div>
											</div>
										</li>

										<li>
											<div class="supermarket_product_item">
												<ul class="product_label ul_li_block clearfix">
													<li data-bg-color="#cc1414">-70%</li>
													<li data-bg-color="#0062bd">NEW</li>
												</ul>
												<a class="item_image" href="#!">
													<img src="../../assets/user/images/shop/supermarket/img_07.png" alt="image_not_found">
												</a>
												<div class="item_content">
													<span class="item_type text-uppercase">Speakers</span>
													<h3 class="item_title">
														<a href="#!">
															Wireless Audio System Multiroom 360 
														</a>
													</h3>
													<div class="item_price">
														<strong>£1,300</strong>
														<del>£2,300</del>
													</div>
												</div>
											</div>
										</li>

										<li>
											<div class="supermarket_product_item">
												<ul class="product_label ul_li_block clearfix">
													<li data-bg-color="#cc1414">-70%</li>
													<li data-bg-color="#0062bd">NEW</li>
												</ul>
												<a class="item_image" href="#!">
													<img src="../../assets/user/images/shop/supermarket/img_08.png" alt="image_not_found">
												</a>
												<div class="item_content">
													<span class="item_type text-uppercase">Speakers</span>
													<h3 class="item_title">
														<a href="#!">
															Wireless Audio System Multiroom 360 
														</a>
													</h3>
													<div class="item_price">
														<strong>£1,300</strong>
														<del>£2,300</del>
													</div>
												</div>
											</div>
										</li>

										<li>
											<div class="supermarket_product_item">
												<ul class="product_label ul_li_block clearfix">
													<li data-bg-color="#cc1414">-70%</li>
													<li data-bg-color="#0062bd">NEW</li>
												</ul>
												<a class="item_image" href="#!">
													<img src="../../assets/user/images/shop/supermarket/img_09.png" alt="image_not_found">
												</a>
												<div class="item_content">
													<span class="item_type text-uppercase">Speakers</span>
													<h3 class="item_title">
														<a href="#!">
															Wireless Audio System Multiroom 360 
														</a>
													</h3>
													<div class="item_price">
														<strong>£1,300</strong>
														<del>£2,300</del>
													</div>
												</div>
											</div>
										</li>

										<li>
											<div class="supermarket_product_item">
												<ul class="product_label ul_li_block clearfix">
													<li data-bg-color="#8d8d8d">SOLD OUT</li>
												</ul>
												<a class="item_image" href="#!">
													<img src="../../assets/user/images/shop/supermarket/img_10.png" alt="image_not_found">
												</a>
												<div class="item_content">
													<span class="item_type text-uppercase">Speakers</span>
													<h3 class="item_title">
														<a href="#!">
															Wireless Audio System Multiroom 360 
														</a>
													</h3>
													<div class="item_price">
														<strong>£1,300</strong>
														<del>£2,300</del>
													</div>
												</div>
											</div>
										</li>

										<li>
											<div class="supermarket_product_item">
												<ul class="product_label ul_li_block clearfix">
													<li data-bg-color="#cc1414">-70%</li>
													<li data-bg-color="#0062bd">NEW</li>
												</ul>
												<a class="item_image" href="#!">
													<img src="../../assets/user/images/shop/supermarket/img_12.png" alt="image_not_found">
												</a>
												<div class="item_content">
													<span class="item_type text-uppercase">Speakers</span>
													<h3 class="item_title">
														<a href="#!">
															Wireless Audio System Multiroom 360 
														</a>
													</h3>
													<div class="item_price">
														<strong>£1,300</strong>
														<del>£2,300</del>
													</div>
												</div>
											</div>
										</li>

										<li>
											<div class="supermarket_product_item">
												<ul class="product_label ul_li_block clearfix">
													<li data-bg-color="#cc1414">-70%</li>
													<li data-bg-color="#0062bd">NEW</li>
												</ul>
												<a class="item_image" href="#!">
													<img src="../../assets/user/images/shop/supermarket/img_11.png" alt="image_not_found">
												</a>
												<div class="item_content">
													<span class="item_type text-uppercase">Speakers</span>
													<h3 class="item_title">
														<a href="#!">
															Wireless Audio System Multiroom 360 
														</a>
													</h3>
													<div class="item_price">
														<strong>£1,300</strong>
														<del>£2,300</del>
													</div>
												</div>
											</div>
										</li>

										<li>
											<div class="supermarket_product_item">
												<ul class="product_label ul_li_block clearfix">
													<li data-bg-color="#cc1414">-70%</li>
													<li data-bg-color="#0062bd">NEW</li>
												</ul>
												<a class="item_image" href="#!">
													<img src="../../assets/user/images/shop/supermarket/img_12.png" alt="image_not_found">
												</a>
												<div class="item_content">
													<span class="item_type text-uppercase">Speakers</span>
													<h3 class="item_title">
														<a href="#!">
															Wireless Audio System Multiroom 360 
														</a>
													</h3>
													<div class="item_price">
														<strong>£1,300</strong>
														<del>£2,300</del>
													</div>
												</div>
											</div>
										</li>

										<li>
											<div class="supermarket_product_item">
												<ul class="product_label ul_li_block clearfix">
													<li data-bg-color="#cc1414">-70%</li>
													<li data-bg-color="#0062bd">NEW</li>
												</ul>
												<a class="item_image" href="#!">
													<img src="../../assets/user/images/shop/supermarket/img_13.png" alt="image_not_found">
												</a>
												<div class="item_content">
													<span class="item_type text-uppercase">Speakers</span>
													<h3 class="item_title">
														<a href="#!">
															Wireless Audio System Multiroom 360 
														</a>
													</h3>
													<div class="item_price">
														<strong>£1,300</strong>
														<del>£2,300</del>
													</div>
												</div>
											</div>
										</li>

										<li>
											<div class="supermarket_product_item">
												<ul class="product_label ul_li_block clearfix">
													<li data-bg-color="#cc1414">-70%</li>
													<li data-bg-color="#0062bd">NEW</li>
												</ul>
												<a class="item_image" href="#!">
													<img src="../../assets/user/images/shop/supermarket/img_14.png" alt="image_not_found">
												</a>
												<div class="item_content">
													<span class="item_type text-uppercase">Speakers</span>
													<h3 class="item_title">
														<a href="#!">
															Wireless Audio System Multiroom 360 
														</a>
													</h3>
													<div class="item_price">
														<strong>£1,300</strong>
														<del>£2,300</del>
													</div>
												</div>
											</div>
										</li>

										<li>
											<div class="supermarket_product_item">
												<ul class="product_label ul_li_block clearfix">
													<li data-bg-color="#cc1414">-70%</li>
													<li data-bg-color="#0062bd">NEW</li>
												</ul>
												<a class="item_image" href="#!">
													<img src="../../assets/user/images/shop/supermarket/img_15.png" alt="image_not_found">
												</a>
												<div class="item_content">
													<span class="item_type text-uppercase">Speakers</span>
													<h3 class="item_title">
														<a href="#!">
															Wireless Audio System Multiroom 360 
														</a>
													</h3>
													<div class="item_price">
														<strong>£1,300</strong>
														<del>£2,300</del>
													</div>
												</div>
											</div>
										</li>
									</ul>
								</div>

								<div id="gps_navi_tab" class="tab-pane fade">
									<ul class="supermarket_product_columns has_4columns ul_li clearfix">
										<li>
											<div class="supermarket_product_item">
												<ul class="product_label ul_li_block clearfix">
													<li data-bg-color="#cc1414">-70%</li>
													<li data-bg-color="#0062bd">NEW</li>
												</ul>
												<a class="item_image" href="#!">
													<img src="../../assets/user/images/shop/supermarket/img_05.png" alt="image_not_found">
												</a>
												<div class="item_content">
													<span class="item_type text-uppercase">Speakers</span>
													<h3 class="item_title">
														<a href="#!">
															Wireless Audio System Multiroom 360 
														</a>
													</h3>
													<div class="item_price">
														<strong>£1,300</strong>
														<del>£2,300</del>
													</div>
												</div>
											</div>
										</li>

										<li>
											<div class="supermarket_product_item">
												<ul class="product_label ul_li_block clearfix">
													<li data-bg-color="#cc1414">-70%</li>
													<li data-bg-color="#0062bd">NEW</li>
												</ul>
												<a class="item_image" href="#!">
													<img src="../../assets/user/images/shop/supermarket/img_06.png" alt="image_not_found">
												</a>
												<div class="item_content">
													<span class="item_type text-uppercase">Speakers</span>
													<h3 class="item_title">
														<a href="#!">
															Wireless Audio System Multiroom 360 
														</a>
													</h3>
													<div class="item_price">
														<strong>£1,300</strong>
														<del>£2,300</del>
													</div>
												</div>
											</div>
										</li>

										<li>
											<div class="supermarket_product_item">
												<ul class="product_label ul_li_block clearfix">
													<li data-bg-color="#cc1414">-70%</li>
													<li data-bg-color="#0062bd">NEW</li>
												</ul>
												<a class="item_image" href="#!">
													<img src="../../assets/user/images/shop/supermarket/img_07.png" alt="image_not_found">
												</a>
												<div class="item_content">
													<span class="item_type text-uppercase">Speakers</span>
													<h3 class="item_title">
														<a href="#!">
															Wireless Audio System Multiroom 360 
														</a>
													</h3>
													<div class="item_price">
														<strong>£1,300</strong>
														<del>£2,300</del>
													</div>
												</div>
											</div>
										</li>

										<li>
											<div class="supermarket_product_item">
												<ul class="product_label ul_li_block clearfix">
													<li data-bg-color="#cc1414">-70%</li>
													<li data-bg-color="#0062bd">NEW</li>
												</ul>
												<a class="item_image" href="#!">
													<img src="../../assets/user/images/shop/supermarket/img_08.png" alt="image_not_found">
												</a>
												<div class="item_content">
													<span class="item_type text-uppercase">Speakers</span>
													<h3 class="item_title">
														<a href="#!">
															Wireless Audio System Multiroom 360 
														</a>
													</h3>
													<div class="item_price">
														<strong>£1,300</strong>
														<del>£2,300</del>
													</div>
												</div>
											</div>
										</li>

										<li>
											<div class="supermarket_product_item">
												<ul class="product_label ul_li_block clearfix">
													<li data-bg-color="#cc1414">-70%</li>
													<li data-bg-color="#0062bd">NEW</li>
												</ul>
												<a class="item_image" href="#!">
													<img src="../../assets/user/images/shop/supermarket/img_09.png" alt="image_not_found">
												</a>
												<div class="item_content">
													<span class="item_type text-uppercase">Speakers</span>
													<h3 class="item_title">
														<a href="#!">
															Wireless Audio System Multiroom 360 
														</a>
													</h3>
													<div class="item_price">
														<strong>£1,300</strong>
														<del>£2,300</del>
													</div>
												</div>
											</div>
										</li>

										<li>
											<div class="supermarket_product_item">
												<ul class="product_label ul_li_block clearfix">
													<li data-bg-color="#8d8d8d">SOLD OUT</li>
												</ul>
												<a class="item_image" href="#!">
													<img src="../../assets/user/images/shop/supermarket/img_10.png" alt="image_not_found">
												</a>
												<div class="item_content">
													<span class="item_type text-uppercase">Speakers</span>
													<h3 class="item_title">
														<a href="#!">
															Wireless Audio System Multiroom 360 
														</a>
													</h3>
													<div class="item_price">
														<strong>£1,300</strong>
														<del>£2,300</del>
													</div>
												</div>
											</div>
										</li>

										<li>
											<div class="supermarket_product_item">
												<ul class="product_label ul_li_block clearfix">
													<li data-bg-color="#cc1414">-70%</li>
													<li data-bg-color="#0062bd">NEW</li>
												</ul>
												<a class="item_image" href="#!">
													<img src="../../assets/user/images/shop/supermarket/img_12.png" alt="image_not_found">
												</a>
												<div class="item_content">
													<span class="item_type text-uppercase">Speakers</span>
													<h3 class="item_title">
														<a href="#!">
															Wireless Audio System Multiroom 360 
														</a>
													</h3>
													<div class="item_price">
														<strong>£1,300</strong>
														<del>£2,300</del>
													</div>
												</div>
											</div>
										</li>

										<li>
											<div class="supermarket_product_item">
												<ul class="product_label ul_li_block clearfix">
													<li data-bg-color="#cc1414">-70%</li>
													<li data-bg-color="#0062bd">NEW</li>
												</ul>
												<a class="item_image" href="#!">
													<img src="../../assets/user/images/shop/supermarket/img_11.png" alt="image_not_found">
												</a>
												<div class="item_content">
													<span class="item_type text-uppercase">Speakers</span>
													<h3 class="item_title">
														<a href="#!">
															Wireless Audio System Multiroom 360 
														</a>
													</h3>
													<div class="item_price">
														<strong>£1,300</strong>
														<del>£2,300</del>
													</div>
												</div>
											</div>
										</li>

										<li>
											<div class="supermarket_product_item">
												<ul class="product_label ul_li_block clearfix">
													<li data-bg-color="#cc1414">-70%</li>
													<li data-bg-color="#0062bd">NEW</li>
												</ul>
												<a class="item_image" href="#!">
													<img src="../../assets/user/images/shop/supermarket/img_12.png" alt="image_not_found">
												</a>
												<div class="item_content">
													<span class="item_type text-uppercase">Speakers</span>
													<h3 class="item_title">
														<a href="#!">
															Wireless Audio System Multiroom 360 
														</a>
													</h3>
													<div class="item_price">
														<strong>£1,300</strong>
														<del>£2,300</del>
													</div>
												</div>
											</div>
										</li>

										<li>
											<div class="supermarket_product_item">
												<ul class="product_label ul_li_block clearfix">
													<li data-bg-color="#cc1414">-70%</li>
													<li data-bg-color="#0062bd">NEW</li>
												</ul>
												<a class="item_image" href="#!">
													<img src="../../assets/user/images/shop/supermarket/img_13.png" alt="image_not_found">
												</a>
												<div class="item_content">
													<span class="item_type text-uppercase">Speakers</span>
													<h3 class="item_title">
														<a href="#!">
															Wireless Audio System Multiroom 360 
														</a>
													</h3>
													<div class="item_price">
														<strong>£1,300</strong>
														<del>£2,300</del>
													</div>
												</div>
											</div>
										</li>

										<li>
											<div class="supermarket_product_item">
												<ul class="product_label ul_li_block clearfix">
													<li data-bg-color="#cc1414">-70%</li>
													<li data-bg-color="#0062bd">NEW</li>
												</ul>
												<a class="item_image" href="#!">
													<img src="../../assets/user/images/shop/supermarket/img_14.png" alt="image_not_found">
												</a>
												<div class="item_content">
													<span class="item_type text-uppercase">Speakers</span>
													<h3 class="item_title">
														<a href="#!">
															Wireless Audio System Multiroom 360 
														</a>
													</h3>
													<div class="item_price">
														<strong>£1,300</strong>
														<del>£2,300</del>
													</div>
												</div>
											</div>
										</li>

										<li>
											<div class="supermarket_product_item">
												<ul class="product_label ul_li_block clearfix">
													<li data-bg-color="#cc1414">-70%</li>
													<li data-bg-color="#0062bd">NEW</li>
												</ul>
												<a class="item_image" href="#!">
													<img src="../../assets/user/images/shop/supermarket/img_15.png" alt="image_not_found">
												</a>
												<div class="item_content">
													<span class="item_type text-uppercase">Speakers</span>
													<h3 class="item_title">
														<a href="#!">
															Wireless Audio System Multiroom 360 
														</a>
													</h3>
													<div class="item_price">
														<strong>£1,300</strong>
														<del>£2,300</del>
													</div>
												</div>
											</div>
										</li>
									</ul>
								</div>

								<div id="computers_tab" class="tab-pane fade">
									<ul class="supermarket_product_columns has_4columns ul_li clearfix">
										<li>
											<div class="supermarket_product_item">
												<ul class="product_label ul_li_block clearfix">
													<li data-bg-color="#cc1414">-70%</li>
													<li data-bg-color="#0062bd">NEW</li>
												</ul>
												<a class="item_image" href="#!">
													<img src="../../assets/user/images/shop/supermarket/img_05.png" alt="image_not_found">
												</a>
												<div class="item_content">
													<span class="item_type text-uppercase">Speakers</span>
													<h3 class="item_title">
														<a href="#!">
															Wireless Audio System Multiroom 360 
														</a>
													</h3>
													<div class="item_price">
														<strong>£1,300</strong>
														<del>£2,300</del>
													</div>
												</div>
											</div>
										</li>

										<li>
											<div class="supermarket_product_item">
												<ul class="product_label ul_li_block clearfix">
													<li data-bg-color="#cc1414">-70%</li>
													<li data-bg-color="#0062bd">NEW</li>
												</ul>
												<a class="item_image" href="#!">
													<img src="../../assets/user/images/shop/supermarket/img_06.png" alt="image_not_found">
												</a>
												<div class="item_content">
													<span class="item_type text-uppercase">Speakers</span>
													<h3 class="item_title">
														<a href="#!">
															Wireless Audio System Multiroom 360 
														</a>
													</h3>
													<div class="item_price">
														<strong>£1,300</strong>
														<del>£2,300</del>
													</div>
												</div>
											</div>
										</li>

										<li>
											<div class="supermarket_product_item">
												<ul class="product_label ul_li_block clearfix">
													<li data-bg-color="#cc1414">-70%</li>
													<li data-bg-color="#0062bd">NEW</li>
												</ul>
												<a class="item_image" href="#!">
													<img src="../../assets/user/images/shop/supermarket/img_07.png" alt="image_not_found">
												</a>
												<div class="item_content">
													<span class="item_type text-uppercase">Speakers</span>
													<h3 class="item_title">
														<a href="#!">
															Wireless Audio System Multiroom 360 
														</a>
													</h3>
													<div class="item_price">
														<strong>£1,300</strong>
														<del>£2,300</del>
													</div>
												</div>
											</div>
										</li>

										<li>
											<div class="supermarket_product_item">
												<ul class="product_label ul_li_block clearfix">
													<li data-bg-color="#cc1414">-70%</li>
													<li data-bg-color="#0062bd">NEW</li>
												</ul>
												<a class="item_image" href="#!">
													<img src="../../assets/user/images/shop/supermarket/img_08.png" alt="image_not_found">
												</a>
												<div class="item_content">
													<span class="item_type text-uppercase">Speakers</span>
													<h3 class="item_title">
														<a href="#!">
															Wireless Audio System Multiroom 360 
														</a>
													</h3>
													<div class="item_price">
														<strong>£1,300</strong>
														<del>£2,300</del>
													</div>
												</div>
											</div>
										</li>

										<li>
											<div class="supermarket_product_item">
												<ul class="product_label ul_li_block clearfix">
													<li data-bg-color="#cc1414">-70%</li>
													<li data-bg-color="#0062bd">NEW</li>
												</ul>
												<a class="item_image" href="#!">
													<img src="../../assets/user/images/shop/supermarket/img_09.png" alt="image_not_found">
												</a>
												<div class="item_content">
													<span class="item_type text-uppercase">Speakers</span>
													<h3 class="item_title">
														<a href="#!">
															Wireless Audio System Multiroom 360 
														</a>
													</h3>
													<div class="item_price">
														<strong>£1,300</strong>
														<del>£2,300</del>
													</div>
												</div>
											</div>
										</li>

										<li>
											<div class="supermarket_product_item">
												<ul class="product_label ul_li_block clearfix">
													<li data-bg-color="#8d8d8d">SOLD OUT</li>
												</ul>
												<a class="item_image" href="#!">
													<img src="../../assets/user/images/shop/supermarket/img_10.png" alt="image_not_found">
												</a>
												<div class="item_content">
													<span class="item_type text-uppercase">Speakers</span>
													<h3 class="item_title">
														<a href="#!">
															Wireless Audio System Multiroom 360 
														</a>
													</h3>
													<div class="item_price">
														<strong>£1,300</strong>
														<del>£2,300</del>
													</div>
												</div>
											</div>
										</li>

										<li>
											<div class="supermarket_product_item">
												<ul class="product_label ul_li_block clearfix">
													<li data-bg-color="#cc1414">-70%</li>
													<li data-bg-color="#0062bd">NEW</li>
												</ul>
												<a class="item_image" href="#!">
													<img src="../../assets/user/images/shop/supermarket/img_12.png" alt="image_not_found">
												</a>
												<div class="item_content">
													<span class="item_type text-uppercase">Speakers</span>
													<h3 class="item_title">
														<a href="#!">
															Wireless Audio System Multiroom 360 
														</a>
													</h3>
													<div class="item_price">
														<strong>£1,300</strong>
														<del>£2,300</del>
													</div>
												</div>
											</div>
										</li>

										<li>
											<div class="supermarket_product_item">
												<ul class="product_label ul_li_block clearfix">
													<li data-bg-color="#cc1414">-70%</li>
													<li data-bg-color="#0062bd">NEW</li>
												</ul>
												<a class="item_image" href="#!">
													<img src="../../assets/user/images/shop/supermarket/img_11.png" alt="image_not_found">
												</a>
												<div class="item_content">
													<span class="item_type text-uppercase">Speakers</span>
													<h3 class="item_title">
														<a href="#!">
															Wireless Audio System Multiroom 360 
														</a>
													</h3>
													<div class="item_price">
														<strong>£1,300</strong>
														<del>£2,300</del>
													</div>
												</div>
											</div>
										</li>

										<li>
											<div class="supermarket_product_item">
												<ul class="product_label ul_li_block clearfix">
													<li data-bg-color="#cc1414">-70%</li>
													<li data-bg-color="#0062bd">NEW</li>
												</ul>
												<a class="item_image" href="#!">
													<img src="../../assets/user/images/shop/supermarket/img_12.png" alt="image_not_found">
												</a>
												<div class="item_content">
													<span class="item_type text-uppercase">Speakers</span>
													<h3 class="item_title">
														<a href="#!">
															Wireless Audio System Multiroom 360 
														</a>
													</h3>
													<div class="item_price">
														<strong>£1,300</strong>
														<del>£2,300</del>
													</div>
												</div>
											</div>
										</li>

										<li>
											<div class="supermarket_product_item">
												<ul class="product_label ul_li_block clearfix">
													<li data-bg-color="#cc1414">-70%</li>
													<li data-bg-color="#0062bd">NEW</li>
												</ul>
												<a class="item_image" href="#!">
													<img src="../../assets/user/images/shop/supermarket/img_13.png" alt="image_not_found">
												</a>
												<div class="item_content">
													<span class="item_type text-uppercase">Speakers</span>
													<h3 class="item_title">
														<a href="#!">
															Wireless Audio System Multiroom 360 
														</a>
													</h3>
													<div class="item_price">
														<strong>£1,300</strong>
														<del>£2,300</del>
													</div>
												</div>
											</div>
										</li>

										<li>
											<div class="supermarket_product_item">
												<ul class="product_label ul_li_block clearfix">
													<li data-bg-color="#cc1414">-70%</li>
													<li data-bg-color="#0062bd">NEW</li>
												</ul>
												<a class="item_image" href="#!">
													<img src="../../assets/user/images/shop/supermarket/img_14.png" alt="image_not_found">
												</a>
												<div class="item_content">
													<span class="item_type text-uppercase">Speakers</span>
													<h3 class="item_title">
														<a href="#!">
															Wireless Audio System Multiroom 360 
														</a>
													</h3>
													<div class="item_price">
														<strong>£1,300</strong>
														<del>£2,300</del>
													</div>
												</div>
											</div>
										</li>

										<li>
											<div class="supermarket_product_item">
												<ul class="product_label ul_li_block clearfix">
													<li data-bg-color="#cc1414">-70%</li>
													<li data-bg-color="#0062bd">NEW</li>
												</ul>
												<a class="item_image" href="#!">
													<img src="../../assets/user/images/shop/supermarket/img_15.png" alt="image_not_found">
												</a>
												<div class="item_content">
													<span class="item_type text-uppercase">Speakers</span>
													<h3 class="item_title">
														<a href="#!">
															Wireless Audio System Multiroom 360 
														</a>
													</h3>
													<div class="item_price">
														<strong>£1,300</strong>
														<del>£2,300</del>
													</div>
												</div>
											</div>
										</li>
									</ul>
								</div>

								<div id="portable_audio_tab" class="tab-pane fade">
									<ul class="supermarket_product_columns has_4columns ul_li clearfix">
										<li>
											<div class="supermarket_product_item">
												<ul class="product_label ul_li_block clearfix">
													<li data-bg-color="#cc1414">-70%</li>
													<li data-bg-color="#0062bd">NEW</li>
												</ul>
												<a class="item_image" href="#!">
													<img src="../../assets/user/images/shop/supermarket/img_05.png" alt="image_not_found">
												</a>
												<div class="item_content">
													<span class="item_type text-uppercase">Speakers</span>
													<h3 class="item_title">
														<a href="#!">
															Wireless Audio System Multiroom 360 
														</a>
													</h3>
													<div class="item_price">
														<strong>£1,300</strong>
														<del>£2,300</del>
													</div>
												</div>
											</div>
										</li>

										<li>
											<div class="supermarket_product_item">
												<ul class="product_label ul_li_block clearfix">
													<li data-bg-color="#cc1414">-70%</li>
													<li data-bg-color="#0062bd">NEW</li>
												</ul>
												<a class="item_image" href="#!">
													<img src="../../assets/user/images/shop/supermarket/img_06.png" alt="image_not_found">
												</a>
												<div class="item_content">
													<span class="item_type text-uppercase">Speakers</span>
													<h3 class="item_title">
														<a href="#!">
															Wireless Audio System Multiroom 360 
														</a>
													</h3>
													<div class="item_price">
														<strong>£1,300</strong>
														<del>£2,300</del>
													</div>
												</div>
											</div>
										</li>

										<li>
											<div class="supermarket_product_item">
												<ul class="product_label ul_li_block clearfix">
													<li data-bg-color="#cc1414">-70%</li>
													<li data-bg-color="#0062bd">NEW</li>
												</ul>
												<a class="item_image" href="#!">
													<img src="../../assets/user/images/shop/supermarket/img_07.png" alt="image_not_found">
												</a>
												<div class="item_content">
													<span class="item_type text-uppercase">Speakers</span>
													<h3 class="item_title">
														<a href="#!">
															Wireless Audio System Multiroom 360 
														</a>
													</h3>
													<div class="item_price">
														<strong>£1,300</strong>
														<del>£2,300</del>
													</div>
												</div>
											</div>
										</li>

										<li>
											<div class="supermarket_product_item">
												<ul class="product_label ul_li_block clearfix">
													<li data-bg-color="#cc1414">-70%</li>
													<li data-bg-color="#0062bd">NEW</li>
												</ul>
												<a class="item_image" href="#!">
													<img src="../../assets/user/images/shop/supermarket/img_08.png" alt="image_not_found">
												</a>
												<div class="item_content">
													<span class="item_type text-uppercase">Speakers</span>
													<h3 class="item_title">
														<a href="#!">
															Wireless Audio System Multiroom 360 
														</a>
													</h3>
													<div class="item_price">
														<strong>£1,300</strong>
														<del>£2,300</del>
													</div>
												</div>
											</div>
										</li>

										<li>
											<div class="supermarket_product_item">
												<ul class="product_label ul_li_block clearfix">
													<li data-bg-color="#cc1414">-70%</li>
													<li data-bg-color="#0062bd">NEW</li>
												</ul>
												<a class="item_image" href="#!">
													<img src="../../assets/user/images/shop/supermarket/img_09.png" alt="image_not_found">
												</a>
												<div class="item_content">
													<span class="item_type text-uppercase">Speakers</span>
													<h3 class="item_title">
														<a href="#!">
															Wireless Audio System Multiroom 360 
														</a>
													</h3>
													<div class="item_price">
														<strong>£1,300</strong>
														<del>£2,300</del>
													</div>
												</div>
											</div>
										</li>

										<li>
											<div class="supermarket_product_item">
												<ul class="product_label ul_li_block clearfix">
													<li data-bg-color="#8d8d8d">SOLD OUT</li>
												</ul>
												<a class="item_image" href="#!">
													<img src="../../assets/user/images/shop/supermarket/img_10.png" alt="image_not_found">
												</a>
												<div class="item_content">
													<span class="item_type text-uppercase">Speakers</span>
													<h3 class="item_title">
														<a href="#!">
															Wireless Audio System Multiroom 360 
														</a>
													</h3>
													<div class="item_price">
														<strong>£1,300</strong>
														<del>£2,300</del>
													</div>
												</div>
											</div>
										</li>

										<li>
											<div class="supermarket_product_item">
												<ul class="product_label ul_li_block clearfix">
													<li data-bg-color="#cc1414">-70%</li>
													<li data-bg-color="#0062bd">NEW</li>
												</ul>
												<a class="item_image" href="#!">
													<img src="../../assets/user/images/shop/supermarket/img_12.png" alt="image_not_found">
												</a>
												<div class="item_content">
													<span class="item_type text-uppercase">Speakers</span>
													<h3 class="item_title">
														<a href="#!">
															Wireless Audio System Multiroom 360 
														</a>
													</h3>
													<div class="item_price">
														<strong>£1,300</strong>
														<del>£2,300</del>
													</div>
												</div>
											</div>
										</li>

										<li>
											<div class="supermarket_product_item">
												<ul class="product_label ul_li_block clearfix">
													<li data-bg-color="#cc1414">-70%</li>
													<li data-bg-color="#0062bd">NEW</li>
												</ul>
												<a class="item_image" href="#!">
													<img src="../../assets/user/images/shop/supermarket/img_11.png" alt="image_not_found">
												</a>
												<div class="item_content">
													<span class="item_type text-uppercase">Speakers</span>
													<h3 class="item_title">
														<a href="#!">
															Wireless Audio System Multiroom 360 
														</a>
													</h3>
													<div class="item_price">
														<strong>£1,300</strong>
														<del>£2,300</del>
													</div>
												</div>
											</div>
										</li>

										<li>
											<div class="supermarket_product_item">
												<ul class="product_label ul_li_block clearfix">
													<li data-bg-color="#cc1414">-70%</li>
													<li data-bg-color="#0062bd">NEW</li>
												</ul>
												<a class="item_image" href="#!">
													<img src="../../assets/user/images/shop/supermarket/img_12.png" alt="image_not_found">
												</a>
												<div class="item_content">
													<span class="item_type text-uppercase">Speakers</span>
													<h3 class="item_title">
														<a href="#!">
															Wireless Audio System Multiroom 360 
														</a>
													</h3>
													<div class="item_price">
														<strong>£1,300</strong>
														<del>£2,300</del>
													</div>
												</div>
											</div>
										</li>

										<li>
											<div class="supermarket_product_item">
												<ul class="product_label ul_li_block clearfix">
													<li data-bg-color="#cc1414">-70%</li>
													<li data-bg-color="#0062bd">NEW</li>
												</ul>
												<a class="item_image" href="#!">
													<img src="../../assets/user/images/shop/supermarket/img_13.png" alt="image_not_found">
												</a>
												<div class="item_content">
													<span class="item_type text-uppercase">Speakers</span>
													<h3 class="item_title">
														<a href="#!">
															Wireless Audio System Multiroom 360 
														</a>
													</h3>
													<div class="item_price">
														<strong>£1,300</strong>
														<del>£2,300</del>
													</div>
												</div>
											</div>
										</li>

										<li>
											<div class="supermarket_product_item">
												<ul class="product_label ul_li_block clearfix">
													<li data-bg-color="#cc1414">-70%</li>
													<li data-bg-color="#0062bd">NEW</li>
												</ul>
												<a class="item_image" href="#!">
													<img src="../../assets/user/images/shop/supermarket/img_14.png" alt="image_not_found">
												</a>
												<div class="item_content">
													<span class="item_type text-uppercase">Speakers</span>
													<h3 class="item_title">
														<a href="#!">
															Wireless Audio System Multiroom 360 
														</a>
													</h3>
													<div class="item_price">
														<strong>£1,300</strong>
														<del>£2,300</del>
													</div>
												</div>
											</div>
										</li>

										<li>
											<div class="supermarket_product_item">
												<ul class="product_label ul_li_block clearfix">
													<li data-bg-color="#cc1414">-70%</li>
													<li data-bg-color="#0062bd">NEW</li>
												</ul>
												<a class="item_image" href="#!">
													<img src="../../assets/user/images/shop/supermarket/img_15.png" alt="image_not_found">
												</a>
												<div class="item_content">
													<span class="item_type text-uppercase">Speakers</span>
													<h3 class="item_title">
														<a href="#!">
															Wireless Audio System Multiroom 360 
														</a>
													</h3>
													<div class="item_price">
														<strong>£1,300</strong>
														<del>£2,300</del>
													</div>
												</div>
											</div>
										</li>
									</ul>
								</div>

								<div id="accesoriess_tab" class="tab-pane fade">
									<ul class="supermarket_product_columns has_4columns ul_li clearfix">
										<li>
											<div class="supermarket_product_item">
												<ul class="product_label ul_li_block clearfix">
													<li data-bg-color="#cc1414">-70%</li>
													<li data-bg-color="#0062bd">NEW</li>
												</ul>
												<a class="item_image" href="#!">
													<img src="../../assets/user/images/shop/supermarket/img_05.png" alt="image_not_found">
												</a>
												<div class="item_content">
													<span class="item_type text-uppercase">Speakers</span>
													<h3 class="item_title">
														<a href="#!">
															Wireless Audio System Multiroom 360 
														</a>
													</h3>
													<div class="item_price">
														<strong>£1,300</strong>
														<del>£2,300</del>
													</div>
												</div>
											</div>
										</li>

										<li>
											<div class="supermarket_product_item">
												<ul class="product_label ul_li_block clearfix">
													<li data-bg-color="#cc1414">-70%</li>
													<li data-bg-color="#0062bd">NEW</li>
												</ul>
												<a class="item_image" href="#!">
													<img src="../../assets/user/images/shop/supermarket/img_06.png" alt="image_not_found">
												</a>
												<div class="item_content">
													<span class="item_type text-uppercase">Speakers</span>
													<h3 class="item_title">
														<a href="#!">
															Wireless Audio System Multiroom 360 
														</a>
													</h3>
													<div class="item_price">
														<strong>£1,300</strong>
														<del>£2,300</del>
													</div>
												</div>
											</div>
										</li>

										<li>
											<div class="supermarket_product_item">
												<ul class="product_label ul_li_block clearfix">
													<li data-bg-color="#cc1414">-70%</li>
													<li data-bg-color="#0062bd">NEW</li>
												</ul>
												<a class="item_image" href="#!">
													<img src="../../assets/user/images/shop/supermarket/img_07.png" alt="image_not_found">
												</a>
												<div class="item_content">
													<span class="item_type text-uppercase">Speakers</span>
													<h3 class="item_title">
														<a href="#!">
															Wireless Audio System Multiroom 360 
														</a>
													</h3>
													<div class="item_price">
														<strong>£1,300</strong>
														<del>£2,300</del>
													</div>
												</div>
											</div>
										</li>

										<li>
											<div class="supermarket_product_item">
												<ul class="product_label ul_li_block clearfix">
													<li data-bg-color="#cc1414">-70%</li>
													<li data-bg-color="#0062bd">NEW</li>
												</ul>
												<a class="item_image" href="#!">
													<img src="../../assets/user/images/shop/supermarket/img_08.png" alt="image_not_found">
												</a>
												<div class="item_content">
													<span class="item_type text-uppercase">Speakers</span>
													<h3 class="item_title">
														<a href="#!">
															Wireless Audio System Multiroom 360 
														</a>
													</h3>
													<div class="item_price">
														<strong>£1,300</strong>
														<del>£2,300</del>
													</div>
												</div>
											</div>
										</li>

										<li>
											<div class="supermarket_product_item">
												<ul class="product_label ul_li_block clearfix">
													<li data-bg-color="#cc1414">-70%</li>
													<li data-bg-color="#0062bd">NEW</li>
												</ul>
												<a class="item_image" href="#!">
													<img src="../../assets/user/images/shop/supermarket/img_09.png" alt="image_not_found">
												</a>
												<div class="item_content">
													<span class="item_type text-uppercase">Speakers</span>
													<h3 class="item_title">
														<a href="#!">
															Wireless Audio System Multiroom 360 
														</a>
													</h3>
													<div class="item_price">
														<strong>£1,300</strong>
														<del>£2,300</del>
													</div>
												</div>
											</div>
										</li>

										<li>
											<div class="supermarket_product_item">
												<ul class="product_label ul_li_block clearfix">
													<li data-bg-color="#8d8d8d">SOLD OUT</li>
												</ul>
												<a class="item_image" href="#!">
													<img src="../../assets/user/images/shop/supermarket/img_10.png" alt="image_not_found">
												</a>
												<div class="item_content">
													<span class="item_type text-uppercase">Speakers</span>
													<h3 class="item_title">
														<a href="#!">
															Wireless Audio System Multiroom 360 
														</a>
													</h3>
													<div class="item_price">
														<strong>£1,300</strong>
														<del>£2,300</del>
													</div>
												</div>
											</div>
										</li>

										<li>
											<div class="supermarket_product_item">
												<ul class="product_label ul_li_block clearfix">
													<li data-bg-color="#cc1414">-70%</li>
													<li data-bg-color="#0062bd">NEW</li>
												</ul>
												<a class="item_image" href="#!">
													<img src="../../assets/user/images/shop/supermarket/img_12.png" alt="image_not_found">
												</a>
												<div class="item_content">
													<span class="item_type text-uppercase">Speakers</span>
													<h3 class="item_title">
														<a href="#!">
															Wireless Audio System Multiroom 360 
														</a>
													</h3>
													<div class="item_price">
														<strong>£1,300</strong>
														<del>£2,300</del>
													</div>
												</div>
											</div>
										</li>

										<li>
											<div class="supermarket_product_item">
												<ul class="product_label ul_li_block clearfix">
													<li data-bg-color="#cc1414">-70%</li>
													<li data-bg-color="#0062bd">NEW</li>
												</ul>
												<a class="item_image" href="#!">
													<img src="../../assets/user/images/shop/supermarket/img_11.png" alt="image_not_found">
												</a>
												<div class="item_content">
													<span class="item_type text-uppercase">Speakers</span>
													<h3 class="item_title">
														<a href="#!">
															Wireless Audio System Multiroom 360 
														</a>
													</h3>
													<div class="item_price">
														<strong>£1,300</strong>
														<del>£2,300</del>
													</div>
												</div>
											</div>
										</li>

										<li>
											<div class="supermarket_product_item">
												<ul class="product_label ul_li_block clearfix">
													<li data-bg-color="#cc1414">-70%</li>
													<li data-bg-color="#0062bd">NEW</li>
												</ul>
												<a class="item_image" href="#!">
													<img src="../../assets/user/images/shop/supermarket/img_12.png" alt="image_not_found">
												</a>
												<div class="item_content">
													<span class="item_type text-uppercase">Speakers</span>
													<h3 class="item_title">
														<a href="#!">
															Wireless Audio System Multiroom 360 
														</a>
													</h3>
													<div class="item_price">
														<strong>£1,300</strong>
														<del>£2,300</del>
													</div>
												</div>
											</div>
										</li>

										<li>
											<div class="supermarket_product_item">
												<ul class="product_label ul_li_block clearfix">
													<li data-bg-color="#cc1414">-70%</li>
													<li data-bg-color="#0062bd">NEW</li>
												</ul>
												<a class="item_image" href="#!">
													<img src="../../assets/user/images/shop/supermarket/img_13.png" alt="image_not_found">
												</a>
												<div class="item_content">
													<span class="item_type text-uppercase">Speakers</span>
													<h3 class="item_title">
														<a href="#!">
															Wireless Audio System Multiroom 360 
														</a>
													</h3>
													<div class="item_price">
														<strong>£1,300</strong>
														<del>£2,300</del>
													</div>
												</div>
											</div>
										</li>

										<li>
											<div class="supermarket_product_item">
												<ul class="product_label ul_li_block clearfix">
													<li data-bg-color="#cc1414">-70%</li>
													<li data-bg-color="#0062bd">NEW</li>
												</ul>
												<a class="item_image" href="#!">
													<img src="../../assets/user/images/shop/supermarket/img_14.png" alt="image_not_found">
												</a>
												<div class="item_content">
													<span class="item_type text-uppercase">Speakers</span>
													<h3 class="item_title">
														<a href="#!">
															Wireless Audio System Multiroom 360 
														</a>
													</h3>
													<div class="item_price">
														<strong>£1,300</strong>
														<del>£2,300</del>
													</div>
												</div>
											</div>
										</li>

										<li>
											<div class="supermarket_product_item">
												<ul class="product_label ul_li_block clearfix">
													<li data-bg-color="#cc1414">-70%</li>
													<li data-bg-color="#0062bd">NEW</li>
												</ul>
												<a class="item_image" href="#!">
													<img src="../../assets/user/images/shop/supermarket/img_15.png" alt="image_not_found">
												</a>
												<div class="item_content">
													<span class="item_type text-uppercase">Speakers</span>
													<h3 class="item_title">
														<a href="#!">
															Wireless Audio System Multiroom 360 
														</a>
													</h3>
													<div class="item_price">
														<strong>£1,300</strong>
														<del>£2,300</del>
													</div>
												</div>
											</div>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- product_section - end
			================================================== -->


			<!-- advertisement_section - start
			================================================== -->

			<!-- advertisement_section - end
			================================================== -->


			<!-- bestseller_section - start
			================================================== -->
			<section class="bestseller_section sec_ptb_50 pb-0 clearfix">
				<div class="container maxw_1460">

					<div class="row mb_50 align-items-center justify-content-lg-between">
						<div class="col-lg-5">
							<div class="supermarket_section_title clearfix">
								<span class="sub_title text-uppercase">A wide selection of items</span>
								<h2 class="title_text mb-0">Bestseller Products</h2>
							</div>
						</div>
					</div>

					<div class="tab-content">
						<div id="top_tab" class="tab-pane active">
							<ul class="supermarket_product_columns has_3columns ul_li bg_white clearfix">
								@foreach ($produks1 as $produks1)
								<li>
									<div class="supermarket_product_listlayout">
										<div class="slideshow1_slider item_image" data-slick='{"arrows": false}'>
											<div class="item">
												<img src="{{ asset('storage/' . $produks1->gambar1) }}" alt="image_not_found">
											</div>
											@if ($produks1->gambar2 == 1)

											@else
											<div class="item">
												<img src="{{ asset('storage/' . $produks1->gambar2) }}" alt="image_not_found">
											</div>
											@endif
											@if ($produks1->gambar3 == 1)

											@else
											<div class="item">
												<img src="{{ asset('storage/' . $produks1->gambar3) }}" alt="image_not_found">
											</div>
											@endif
											@if ($produks1->gambar4 == 1)

											@else
											<div class="item">
												<img src="{{ asset('storage/' . $produks1->gambar4) }}" alt="image_not_found">
											</div>
											@endif

										</div>
										<div class="item_content">
											<span class="item_type text-uppercase" data-bg-color="#0062bd">{{ $produks1->kategorigeneral }}</span>
											<h3 class="item_title">
												<a href="{{ route('produks.show', $produks1->judul) }}">{{ $produks1->judul }}</a>
											</h3>
											<ul class="product_action_btns ul_li clearfix">
												<li><a class="addtocart_btn tooltips" data-placement="top" title="Add To Cart" href="https://wa.me/{{ $konfigurasi[0]->no_telp }}">Start Buying</a></li>
												<li><a class="tooltips" data-placement="top" title="Add To Wishlist" href="#!"><i class="fal fa-heart"></i></a></li>
											</ul>
											<ul class="info_list ul_li_block clearfix">
												<li>
													<div class="item_icon">
														<i class="fal fa-calendar-alt"></i>
													</div>
													<div class="item_content">
														<p class="mb-0">
															Estimated Delivery Time: 21-39days
														</p>
													</div>
												</li>
												<li>
													<div class="item_icon">
														<i class="fal fa-truck-moving"></i>
													</div>
													<div class="item_content">
														<p class="mb-0">
															Total: 1327 orders
														</p>
													</div>
												</li>
											</ul>
										</div>
									</div>
								</li>
								@endforeach
								

							</ul>
						</div>
					</div>

				</div>
			</section>
			<!-- bestseller_section - end
			================================================== -->


			<!-- advertisement_section - start
			================================================== -->

			<!-- advertisement_section - end
			================================================== -->


			<!-- supermarket_feature_carousel - start
			================================================== -->
			<section class="supermarket_feature_carousel arrow_ycenter clearfix" data-slick='{"dots": false}'>
				@foreach ($banner as $banner)
				<div class="item sec_ptb_50 d-flex align-items-center" data-bg-color="#18171c">
					<div class="container maxw_1460">
						<div class="row align-items-center justify-content-lg-between">
							<div class="col-lg-7 order-last">
								<div class="item_image">
									<img style="width: 962px; height: 649px;" src="{{ asset('storage/' . $banner->gambar) }}" alt="image_not_found">
								</div>
							</div>

							<div class="col-lg-5">
								<div class="item_content">
									<span class="item_price">Rp. {{ number_format($banner->harga, 0, ',', '.') }}</span>
									<h4 class="sub_title text-white">ALL-NEW-SPORT</h4>
									<h3 class="item_title text-white mb_30">
										{{ $banner->judul }}
									</h3>
									<a class="custom_btn btn_round bg_electronic_blue" href="https://wa.me/{{ $konfigurasi[0]->no_telp }}" target="__blank">Start Buying</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				@endforeach

			</section>
			<!-- supermarket_feature_carousel - end
			================================================== -->


			<!-- bestseller_section - start
			================================================== -->
			<section class="bestseller_section sec_ptb_100 clearfix">
				<div class="container">
					<div class="row justify-content-lg-between">

						<div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
							<div class="bestseller_wrap">
								<div class="supermarket_section_title mb_50 clearfix">
									<span class="sub_title text-uppercase">A wide selection of items</span>
									<h2 class="title_text mb-0">Bestseller Products</h2>
								</div>
								@foreach ($produks2 as $produks2)
									
								<div class="supermarket_product_small">
									<div class="item_image">
										<a href="{{ route('produks.show', $produks2->judul) }}">
										<img src="{{ asset('storage/' . $produks2->gambar1) }}" alt="image_not_found">
										<ul class="product_label ul_li_block clearfix">
											<li data-bg-color="#cc1414">-70%</li>
										</ul>
										</a>
									</div>
									<div class="item_content">
										<span class="item_type">{{ $produks2->kategorigeneral }}</span>
										<h3 class="item_title">
											<a href="{{ route('produks.show', $produks2->judul) }}">{{ $produks2->judul }}</a>
										</h3>
										<span class="item_price">Rp. {{ number_format($produks2->harga, 0, ',', '.') }}</span>
									</div>
								</div>
								@endforeach
							</div>
						</div>

						<div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
							<div class="bestseller_wrap">
								<div class="supermarket_section_title mb_50 clearfix">
									<span class="sub_title text-uppercase">A wide selection of items</span>
									<h2 class="title_text mb-0">Bestseller Products</h2>
								</div>
								@foreach ($produks3 as $produks3)

								<div class="supermarket_product_small">
									<div class="item_image">
										<a href="{{ route('produks.show', $produks3->judul) }}">
										<img src="{{ asset('storage/' . $produks3->gambar1) }}" alt="image_not_found">
										</a>
										<ul class="product_label ul_li_block clearfix">
											<li data-bg-color="#cc1414">-70%</li>
										</ul>
									</div>
									<div class="item_content">
										<span class="item_type">{{ $produks3->kategorigeneral }}</span>
										<h3 class="item_title">
											<a href="{{ route('produks.show', $produks3->judul) }}">{{ $produks3->judul }}</a>
										</h3>
										<span class="item_price">Rp. {{ number_format($produks3->harga, 0, ',', '.') }}</span>
									</div>
								</div>
								@endforeach

							</div>
						</div>

						<div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
							<div class="bestseller_wrap">
								<div class="supermarket_section_title mb_50 clearfix">
									<span class="sub_title text-uppercase">A wide selection of items</span>
									<h2 class="title_text mb-0">Bestseller Products</h2>
								</div>
								@foreach ($produks4 as $produks4)

								<div class="supermarket_product_small">
									<div class="item_image">
										<a href="{{ route('produks.show', $produks4->judul) }}">
										<img src="{{ asset('storage/' . $produks4->gambar1) }}" alt="image_not_found">
										</a>
										<ul class="product_label ul_li_block clearfix">
											<li data-bg-color="#cc1414">-70%</li>
										</ul>
									</div>
									<div class="item_content">
										<span class="item_type">{{ $produks4->kategorigeneral }}</span>
										<h3 class="item_title">
											<a href="{{ route('produks.show', $produks4->judul) }}">{{ $produks4->judul }}</a>
										</h3>
										<span class="item_price">Rp. {{ number_format($produks4->harga, 0, ',', '.') }}</span>
									</div>
								</div>
								@endforeach

							</div>
						</div>
						
					</div>
				</div>
			</section>
			<!-- bestseller_section - end
			================================================== -->


		</main>
		<!-- main body - end
		================================================== -->


		<!-- footer_section - start
		================================================== -->
		<footer class="footer_section supermarket_footer clearfix">
			<div class="footer_widget_area sec_ptb_100 bg_white clearfix">
				<div class="container">
					<div class="row justify-content-lg-between">

						<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
							<div class="footer_widget bestrated_products">
								<h3 class="footer_widget_title">Best Rated Products</h3>
								@foreach ($produks5 as $produks5)
									
								<div class="supermarket_product_small">
									<span class="item_type">{{ $produks5->kategorigeneral }}</span>
									<h3 class="item_title">
										<a href="#!">{{ $produks5->judul }}</a>
									</h3>
									<span class="item_price">Rp. {{ number_format($produks5->harga, 0, ',', '.') }}</span>
								</div>
								@endforeach
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


	</body>
</html>