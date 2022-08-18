@extends('layout.navbar')
@section('content')
<section class="breadcrumb_section text-white text-center text-uppercase d-flex align-items-end clearfix" data-background="../../assets/user/images/breadcrumb/bg_01.png">
    <div class="overlay" data-bg-color="#1d1d1d"></div>
    <div class="container">
        <h1 class="page_title text-white">Blog Details</h1>
        <ul class="breadcrumb_nav ul_li_center clearfix">
            <li><a href="/">Home</a></li>
            <li><a href="/blogs">Blog</a></li>
            <li>Blog Details</li>
        </ul>
    </div>
</section>
<section class="details_section blog_details sec_ptb_140 clearfix">
    <div class="container">
        <div class="row justify-content-lg-between">
            <div class="col-lg-9 col-md-12 col-sm-12 col-xs-12">
                <div class="details_image mb_30">
                    <img src="{{ asset('storage/' . $blog->gambar) }}" alt="image_not_found">
                </div>
                <div class="row mb_15 align-items-center justify-content-lg-between">
                    <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12">
                        <ul class="post_meta ul_li clearfix">
                            <li>{{ $blog->created_at }}</li>
                        </ul>
                    </div>
                </div>
                <h2 class="item_title mb_30">{{ $blog->judul }}</h2>
                <p class="mb_30">
                    {!! $blog->deskripsi !!}
                </p>
                <blockquote class="mb_50">
                    <p class="mb_15">
                        Cras nec odio facilisis, suscipit sem sit amet, tincidunt turpis. Praesent diam eros, consectetur ac viverra vitae, imperdiet ut est. 
                    </p>
                    <h4 class="blockquote_title text-uppercase mb-0">John Doe, Envato</h4>
                </blockquote>

                <div class="other_post_wrap mb_50">
                    <a class="other_post" href="#!">
                        <small class="text-uppercase"><i class="fal fa-angle-left mr-2"></i> Prev</small>
                        <span>
                            15 Notable Products at Borvo Interior Design Contest
                        </span>
                    </a>
                    <a class="other_post" href="#!">
                        <small class="text-uppercase">Next <i class="fal fa-angle-right ml-2"></i></small>
                        <span>
                            5 Small Studio Apartments With Beautiful Design
                        </span>
                    </a>
                </div>

                <div class="post_author mb_100 clearfix" data-bg-color="#e6e6e6">
                    <div class="author_image">
                        <img src="assets/images/meta/img_05.png" alt="image_not_found">
                    </div>
                    <div class="author_info_content">
                        <h4 class="author_name text-uppercase">John Doe / <span>About author</span></h4>
                        <p class="mb-0">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus eget mi sem. Nulla facilisi. Sed ultricies eros a nibh tempus, in sodales mi vestibulum. Nullam quis dui ac nisl ultrices euismod et sit amet urna. Morbi semper sapien quis ex te
                        </p>
                    </div>
                </div>

                <div class="related_post_carousel position-relative mb_100">
                    <h3 class="title_text text-uppercase mb_30">Related Articles</h3>
                    <div class="slideshow3_slider" data-slick='{"dots": false}'>
                        @foreach ($blog2 as $blog2)
                            
                        <div class="item">
                            <div class="blog_grid">
                                <a class="blog_image" href="{{ route('blogs.show', $blog2->judul) }}">
                                    <img src="{{ asset('storage/' . $blog2->gambar) }}" alt="image_not_found">
                                </a>
                                <div class="blog_content">
                                    <ul class="post_meta ul_li clearfix">
                                        <li>{{ $blog2->created_at }}</li>
                                    </ul>
                                    <h3 class="blog_title">
                                        <a href="#!">{{ $blog2->judul }}</a>
                                    </h3>
                                    <p class="mb_15">
                                    </p>
                                    <a class="text_btn" href="{{ route('blogs.show', $blog2->judul) }}"><span>Read More</span> <i class="fal fa-long-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                        @endforeach

                    </div>
                    <div class="carousel_nav">
                        <button type="button" class="ss3_left_arrow"><i class="fal fa-angle-left"></i></button>
                        <button type="button" class="ss3_right_arrow"><i class="fal fa-angle-right"></i></button>
                    </div>
                </div>

            </div>

            <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
                <aside class="sidebar_section clearfix">
                    <div class="sb_widget sb_search">
                        <form action="{{ url('/blogs') }}" autocomplete="off" method="get">
                            <div class="form_item mb-0">
                                <input type="search" name="search" placeholder="Search...">
                                <button type="submit" class="submit_btn"><i class="fal fa-search"></i></button>
                            </div>
                        </form>
                    </div>
                    <div class="sb_widget sb_recent_post">
                        <h3 class="sb_widget_title">Recent Posts</h3>
                        @foreach ($blog1 as $blog1)
                            
                        <div class="small_blog">
                            <a href="{{ route('blogs.show', $blog1->judul) }}" class="item_image">
                                <img src="{{ asset('storage/' . $blog1->gambar) }}" alt="image_not_found" style="width: 100px; height: 75px;">
                            </a>
                            <div class="item_content">
                                <h3 class="item_title">
                                    <a href="{{ route('blogs.show', $blog1->judul) }}">
                                        {{ $blog1->judul }}
                                    </a>
                                </h3>
                                <span class="post_date">March 12, 2020</span>
                            </div>
                        </div>
                        @endforeach

                    </div>

                </aside>
            </div>
        </div>
    </div>
</section>
    
@endsection