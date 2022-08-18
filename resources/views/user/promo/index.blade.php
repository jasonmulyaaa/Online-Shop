@extends('layout.home')
@section('content')
<section class="product_section sec_ptb_100 clearfix">
    <div class="container">
        <div class="row mb_30 align-items-center justify-content-lg-between">
            <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
                <div class="ecommerce_section_title">
                    <h2 class="title_text mb-0">Promo Produk</h2>
                </div>
            </div>

        </div>

        <div class="col-lg-9">
            <div class="tab-content">
            <div id="best_deals_tab" class="tab-pane active">
                <ul class="supermarket_product_columns has_4columns ul_li clearfix">
            @foreach ($promo as $promo)
                @if ($promo->promo)
                <li>
                    <div class="supermarket_product_item">
                        <ul class="product_label ul_li_block clearfix">
                            <li data-bg-color="#0062bd">Promo</li>
                        </ul>
                        <a class="item_image" href="{{ route('produks.show', $promo->judul) }}">
                            <img src="{{ asset('storage/' . $promo->gambar1) }}" alt="image_not_found">
                        </a>
                        <div class="item_content">
                            <span class="item_type text-uppercase">{{ $promo->kategorigeneral }}</span>
                            <h3 class="item_title">
                                <a href="{{ route('produks.show', $promo->judul) }}">
                                    {{ $promo->judul }}
                                </a>
                            </h3>
                            <div class="item_price">
                                <strong>Rp.{{ number_format($promo->harga, 0,',','.') }}</strong>
                            </div>
                        </div>
                    </div>
                </li>
                @else
                    
                @endif
            
            @endforeach
        </ul>
    </div>
        </div>

        <div class="load_more text-center clearfix">
            <a class="custom_btn bg_gray text-uppercase" href="#!">Load More</a>
        </div>
    </div>
</section>
    
@endsection