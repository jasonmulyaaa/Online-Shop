@extends('layout.master')
@section('content')
<div class="content-wrapper" style="background-color: white;">
    <div class="row">

<div class="col-md-4 grid-margin stretch-card">
  <div class="card">
    <div class="card-body">
      <h4 class="card-title">Total Produk Preorder</h4>
      <div class="media">
        <i class="mdi mdi-compare icon-md text-info d-flex align-self-start me-3"></i>
        <div class="media-body">
          <h5 class="card-text">{{ $preorder }} Produk</h5>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="col-md-4 grid-margin stretch-card">
  <div class="card">
    <div class="card-body">
      <h4 class="card-title">Total Produk {{ Auth::user()->name }}</h4>
      <div class="media">
        <i class="mdi mdi-clipboard-account icon-md text-info d-flex align-self-start me-3"></i>
        <div class="media-body">
          <h5 class="card-text">{{ $produk }} Produk</h5>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="col-md-4 grid-margin stretch-card">
  <div class="card">
    <div class="card-body">
      <h4 class="card-title">Total Banner</h4>
      <div class="media">
        <i class="mdi mdi-image-multiple icon-md text-info d-flex align-self-start me-3"></i>
        <div class="media-body">
          <h5 class="card-text">{{ $banner }} Banner</h5>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="col-md-4 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Total Blog</h4>
        <div class="media">
          <i class="mdi mdi-image-multiple icon-md text-info d-flex align-self-start me-3"></i>
          <div class="media-body">
            <h5 class="card-text">{{ $blog }} Blog</h5>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-md-4 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Total Kategori</h4>
        <div class="media">
          <i class="mdi mdi-image-multiple icon-md text-info d-flex align-self-start me-3"></i>
          <div class="media-body">
            <h5 class="card-text">{{ $kategorigeneral }} Kategori</h5>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-md-4 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Total Data Saran</h4>
        <div class="media">
          <i class="mdi mdi-image-multiple icon-md text-info d-flex align-self-start me-3"></i>
          <div class="media-body">
            <h5 class="card-text">{{ $contactus }} Data Saran</h5>
          </div>
        </div>
      </div>
    </div>
  </div>

          
</div>
</div>
@endsection