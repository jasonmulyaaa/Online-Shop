@extends('layout.navbar')
@section('content')
    <section class="breadcrumb_section text-white text-center text-uppercase d-flex align-items-end clearfix" data-background="../../assets/user/images/breadcrumb/bg_01.png">
  <div class="overlay" data-bg-color="#1d1d1d"></div>
  <div class="container">
    <h1 class="page_title text-white">Blog News</h1>
    <ul class="breadcrumb_nav ul_li_center clearfix">
      <li><a href="/">Home</a></li>
      <li>Blog News</li>
    </ul>
  </div>
</section>

<section class="blog_section sec_ptb_140 clearfix">
  <div class="container">
    <div class="col-md-6">
    <form action="{{ url()->current() }}" autocomplete="off" method="get">
      <div class="input-group ">
          <input type="text" class="form-control" placeholder="Search" name="search">
          <button class="btn btn-dark" type="submit"><i class="fal fa-search"></i></button>
      </div>
  </form>
  </div>
      @forelse ($blogs as $blog)
               
           @empty

           <br>
           <p class="text-center">Maaf, Hasil tidak ditemukan</p>
               
           @endforelse
      <br>
      <br>
    <div class="row justify-content-lg-between">
      @foreach ($blogs as $blog)
      <div class="col-lg-6 col-md-6">
        <div class="blog_grid">
          <a class="blog_image" href="{{ route('blogs.show', $blog->judul) }}">
            <img src="{{ asset('storage/' . $blog->gambar) }}" alt="image_not_found">
          </a>
          <div class="blog_content">
            <span class="blog_post_time text-uppercase bg_default_red text-white"><i class="fal fa-calendar-alt mr-1"></i> {{ $blog->created_at }}</span>
            <ul class="blog_category ul_li clearfix">
              <li><a href="#!">BACKPACK</a></li>
              <li><a href="#!">FASHIONLIFE</a></li>
              <li><a href="#!">STYLE</a></li>
            </ul>
            <h3 class="blog_title">
              <a href="{{ route('blogs.show', $blog->judul) }}">{{ $blog->judul }}</a>
            </h3>
            <p class="mb_30">
              {!! $blog->deskripsi !!}
            </p>
            <a class="custom_btn bg_default_black text-uppercase" href="{{ route('blogs.show', $blog->judul) }}">Read More <i class="fal fa-arrow-circle-right ml-2"></i></a>
          </div>
        </div>
      </div>
      @endforeach

      {!! $blogs->links() !!}

  </div>
</section>
@endsection