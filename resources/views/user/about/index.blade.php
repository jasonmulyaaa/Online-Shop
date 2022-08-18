@extends('layout.home')
@section('content')
<section class="breadcrumb_section text-white text-center text-uppercase d-flex align-items-end clearfix" data-background="../../assets/user/images/backgrounds/bg_13.png">
    <div class="overlay" data-bg-color="#1d1d1d"></div>
    <div class="container">
        <h1 class="page_title text-white">Tentang Kami </h1>
        <ul class="breadcrumb_nav ul_li_center clearfix">
            <li><a href="#!">Home</a></li>
            <li>Tentang Kami</li>
        </ul>
    </div>
</section>
<section class="details_section blog_details sec_ptb_140 clearfix">
    <div class="container">
        <div class="row justify-content-lg-between">
            <div class="col-lg-20 col-md-12 col-sm-12 col-xs-12">
                <div class="details_image mb_30">
                    <img src="{{ asset('storage/' . $about[0]->gambar) }}" alt="image_not_found">
                </div>
                <h2 class="item_title mb_30">{{ $about[0]->judul }}</h2>
                <p class="mb_30">
                    {!! $about[0]->deskripsi !!}
                </p>


            </div>

            <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
                <aside class="sidebar_section clearfix">

                </aside>
            </div>
        </div>
    </div>
</section>
    
@endsection