@extends('layout.navbar')
@section('content')
<section class="breadcrumb_section text-white text-center text-uppercase d-flex align-items-end clearfix" data-background="../../assets/user/images/breadcrumb/bg_01.png">
  <div class="overlay" data-bg-color="#1d1d1d"></div>
  <div class="container">
    <h1 class="page_title text-white">Kontak Kami</h1>
    <ul class="breadcrumb_nav ul_li_center clearfix">
      <li><a href="#!">Home</a></li>
      <li>Kontak Kami</li>
    </ul>
  </div>
</section>
<section class="main_contact_section sec_ptb_100 clearfix">
  <div class="container">
    <div class="row justify-content-lg-between">

      <div class="col-lg-5">
        <div class="main_contact_content">
          <h3 class="title_text mb_15">Hubungi Kami</h3>
          <p class="mb_50">
            Jika anda tertarik bekerja sama dengan kami. Mohon hubungilah kami.
          </p>
          <ul class="main_contact_info ul_li_block clearfix">
            <li>
              <span class="icon">
                <i class="fal fa-map-marked-alt"></i>
              </span>
              <p class="mb-0">
                {{ $konfigurasi[0]->alamat }}
              </p>
            </li>
            <li>
              <span class="icon">
                <i class="fal fa-phone-volume"></i>
              </span>
              <p class="mb-0">+{{ $konfigurasi[0]->no_telp }}</p>
            </li>
            <li>
              <span class="icon">
                <i class="fal fa-paper-plane"></i>
              </span>
              <p class="mb-0">{{ $konfigurasi[0]->email }}</p>
            </li>
          </ul>
        </div>
      </div>
      <div class="col-lg-7">
        <div class="main_contact_form">
          @if ($errors->any())
          <div class="alert alert-danger">
              <strong>Whoops!</strong> Sepertinya ada yang salah. Mohon dicek kembali!<br><br>
              <ul>
                  @foreach ($errors->all() as $error)
                      <li>{{ $error }}</li>
                  @endforeach
              </ul>
          </div>
      @endif
          <h3 class="title_text mb_30">Saran</h3>
          <form action="{{ route('contact.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
              <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                <div class="form_item">
                  <input type="text" name="nama" placeholder="Nama Anda">
                </div>
              </div>

              <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
                <div class="form_item">
                  <input type="text" name="subjek" placeholder="Subjek">
                </div>
              </div>
            </div>
            <div class="form_item">
              <textarea name="keterangan" placeholder="Your Message"></textarea>
            </div>
            {!! NoCaptcha::renderJs() !!}
            {!! NoCaptcha::display() !!}
            <br>
            <button type="submit" class="custom_btn bg_default_red text-uppercase">Kirim</button>
          </form>
        </div>
      </div>
      
    </div>
  </div>
</section>
@endsection