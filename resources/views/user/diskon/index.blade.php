@extends('layout.home')
@section('content')
<section class="product_section sec_ptb_100 clearfix">
    <div class="container">
        <div class="row mb_30 align-items-center justify-content-lg-between">
            <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
                <div class="ecommerce_section_title">
                    <h2 class="title_text mb-0">Diskon Produk</h2>
                </div>
            </div>

        </div>
        <div class="row mb_50">
            @foreach ($diskon as $diskon)
                @if ($diskon->diskon)
        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
            <div class="ecommerce_product_grid">

                <div class="tab-content">
                    <div id="ptab12_1" class="tab-pane fade active">
                        <div class="item_image">
                            <a href="{{ route('produks.show', $diskon->judul) }}"><img src="{{ asset('storage/' . $diskon->gambar1) }}" alt="image_not_found" style="max-width: 270px; max-height: 270px;"></a>
                        </div>
                    </div>
                </div>
                <div class="item_content">
                    <span class="item_type text-uppercase">{{ $diskon->kategorigeneral }}</span>
                    <h3 class="item_title">
                        <a href="{{ route('produks.show', $diskon->judul) }}">{{ $diskon->judul }}</a>
                    </h3>
                    <span class="item_price"><strong>Rp.{{ number_format($diskon->harga, 0,',','.') }}</strong>
                </div>
            </div>
        </div>
        @else
        @endif

        @endforeach
        </div>
        
</section>
    
@endsection