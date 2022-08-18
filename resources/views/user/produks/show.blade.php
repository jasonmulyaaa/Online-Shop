@extends('layout.navbar')
@section('content')
<section class="details_section shop_details sec_ptb_140 clearfix">
  <div class="container">
    <div class="row mb_100 justify-content-lg-between">
      <div class="col-lg-5 col-md-5">
        <div class="shop_details_image">
          <div class="tab-content">
            <div id="tab_1" class="tab-pane active">
              <img src="{{ asset('storage/' . $produk->gambar1) }}" alt="image_not_found" style="max-width: 459px; max-height: 769px;">
            </div>
            @if ($produk->gambar2)
            <div id="tab_2" class="tab-pane fade">
              <img src="{{ asset('storage/' . $produk->gambar2) }}" alt="image_not_found">
            </div>
            @else
            @endif
            @if ($produk->gambar3)
            <div id="tab_3" class="tab-pane fade">
              <img src="{{ asset('storage/' . $produk->gambar3) }}" alt="image_not_found">
            </div>
            @else
            @endif
            @if ($produk->gambar4)
            <div id="tab_4" class="tab-pane fade">
              <img src="{{ asset('storage/' . $produk->gambar4) }}" alt="image_not_found">
            </div>
            @else
            @endif
          </div>

          <ul class="nav ul_li clearfix" role="tablist">
            <li>
              <a class="active" data-toggle="tab" href="#tab_1">
                <img src="{{ asset('storage/' . $produk->gambar1) }}" alt="image_not_found">
              </a>
            </li>
            @if ($produk->gambar2 == 1)
            <li>

            </li>
            @else
            <li>
              <a data-toggle="tab" href="#tab_2">
                <img src="{{ asset('storage/' . $produk->gambar2) }}">
              </a>
            </li>
            @endif
            @if ($produk->gambar3 == 1)
            <li>

            </li>
            @else
            <li>
              <a data-toggle="tab" href="#tab_3">
                <img src="{{ asset('storage/' . $produk->gambar3) }}">
              </a>
            </li>
            @endif
            @if ($produk->gambar4 == 1)
            <li>

            </li>
            @else
            <li>
              <a data-toggle="tab" href="#tab_4">
                <img src="{{ asset('storage/' . $produk->gambar4) }}">
              </a>
            </li>
            @endif
          </ul>
        </div>
      </div>

      <div class="col-lg-7 col-md-7">
        <div class="shop_details_content">
          <h2 class="item_title">{{ $produk->judul }}</h2>
          <span class="item_price">Rp.{{ number_format($produk->harga, 0,',','.') }}</span>
          <hr>

          <p class="mb-0">
            {!! $produk->deskripsi !!}
          </p>
          <hr>
          <ul class="btns_group_1 ul_li mb_30 clearfix">

            <li>
              <a class="custom_btn bg_black text-uppercase" href="https://wa.me/{{ $konfigurasi[0]->no_telp }}" target="__blank"><i class="fal fa-solid fa-phone mr-2"></i> Hubungi Kami</a>
            </li>
          </ul>

          <hr>

          <ul class="product_info ul_li_block clearfix">
            <li><strong>Categories:</strong> <a href="#!">{{ $produk->kategorigeneral }}</a></li>
          </ul>
        </div>
      </div>
    </div>

    

    <hr class="mt-0 mb_100">
        <h2 class="title_text mb-0">Produk Lainnya</h2>
      <br>
    <div class="popular_products arrow_ycenter mt__30">
      <div class="slideshow4_slider row" data-slick='{"dots": false}'>
        @foreach ($produks as $produk)
            
        <div class="col item">
          <div class="ecommerce_product_grid">
            <ul class="product_label ul_li clearfix">
              <li class="bg_leafgreen">New</li>
            </ul>
            <div class="tab-content">
              <div id="ptab8_1" class="tab-pane fade active">
                <div class="item_image">
                  <a href="{{ route('produks.show', $produk->judul) }}"></a><img src="{{ asset('storage/' . $produk->gambar1) }}" alt="image_not_found" style="max-width: 270px; max-height: 270px;"></a>
                </div>
              </div>

            </div>
            <div class="item_content">
              <span class="item_type text-uppercase">{{ $produk->kategorigeneral }}</span>
              <h3 class="item_title">
                <a href="{{ route('produks.show', $produk->judul) }}">{{ $produk->judul }}</a>
              </h3>

              <span class="item_price"><strong>Rp.{{ number_format($produk->harga, 0,',','.') }}</strong> </span>
            </div>
          </div>
        </div>
        @endforeach

      </div>
      <div class="carousel_nav">
        <button type="button" class="ss4_left_arrow"><i class="fal fa-angle-left"></i></button>
        <button type="button" class="ss4_right_arrow"><i class="fal fa-angle-right"></i></button>
      </div>
    </div>
  </div>
</section>
@endsection