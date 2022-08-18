@extends('layout.master')
@section('content')

<form action="{{ route('produk.update', $produk->id) }}" method="POST" enctype="multipart/form-data">
        @csrf

        @method('PUT')
        @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
        <div class="content-wrapper bg-white">
        <div class="row">
            <div class="col-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Form Produk</h4>
                  <p class="card-description">
                    Isi Form Produk
                  </p>
                  <form class="forms-sample">

                        <div class="form-group">
                            <label for="exampleInputName1">Judul</label>
                            <input type="text" class="form-control" id="exampleInputName1" placeholder="Judul" name="judul" value="{{ $produk->judul}}">
                          </div>
                          <div class="form-group">
                            <label for="exampleInputName1">Harga</label>
                            <input type="number" class="form-control" id="exampleInputName1" placeholder="Harga" name="harga" value="{{ $produk->harga}}">
                          </div>
                          <div class="form-group">
                            <label for="exampleInputName1">Deskripsi</label>
                            <textarea class="form-control" id="content" name="deskripsi">{{ $produk->deskripsi}}</textarea>
                            <script>
                                CKEDITOR.replace('content');
                            </script>
                          </div>
                          <div class="form-group">
                            <label for="exampleInputName1">Kategori General</label>
                            <select class="form-control" name="kategorigeneral">
                              @foreach($kategorigeneral as $kategorigeneral)
                              <option value="{{$kategorigeneral->kategorigeneral}}">{{$kategorigeneral->kategorigeneral}}</option>
                              @endforeach
                          </select>                                   
                      </div>
                          <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Gambar 1</strong>
                                <input type="hidden" name="oldImage" value="{{ $produk->gambar1 }}">
                                @if ($produk->gambar1)
                                    <img src="{{ asset('storage/' . $produk->gambar1) }}" class="img-preview img-fluid mb-3 col-sm-5 d-block">
                                @else
                                    <img class="img-preview img-fluid mb-3">
                                @endif
                                <img class="img-preview img-fluid mb-3 col-sm-5">
                                <div class="input-group mb-3">
                                    <input type="file" class="form-control" @error('image') is-invalid @enderror name="gambar1" id="image" onchange="previewImage()" value="{{ asset('storage/' . $produk->gambar1) }}">
                                    @error('image')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Gambar 2</strong>
                                <input type="hidden" name="oldImage" value="{{ $produk->gambar2 }}">
                                @if ($produk->gambar2)
                                    <img src="{{ asset('storage/' . $produk->gambar2) }}" class="img-preview img-fluid mb-3 col-sm-5 d-block">
                                @else
                                    <img class="img-preview img-fluid mb-3">
                                @endif
                                <img class="img-preview img-fluid mb-3 col-sm-5">
                                <div class="input-group mb-3">
                                    <input type="file" class="form-control" @error('image') is-invalid @enderror name="gambar2" id="image" onchange="previewImage()" value="{{ asset('storage/' . $produk->gambar2) }}">
                                    @error('image')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Gambar 3</strong>
                                <input type="hidden" name="oldImage" value="{{ $produk->gambar3 }}">
                                @if ($produk->gambar3)
                                    <img src="{{ asset('storage/' . $produk->gambar3) }}" class="img-preview img-fluid mb-3 col-sm-5 d-block">
                                @else
                                    <img class="img-preview img-fluid mb-3">
                                @endif
                                <img class="img-preview img-fluid mb-3 col-sm-5">
                                <div class="input-group mb-3">
                                    <input type="file" class="form-control" @error('image') is-invalid @enderror name="gambar3" id="image" onchange="previewImage()" value="{{ asset('storage/' . $produk->gambar3) }}">
                                    @error('image')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Gambar 4</strong>
                                <input type="hidden" name="oldImage" value="{{ $produk->gambar4 }}">
                                @if ($produk->gambar4)
                                    <img src="{{ asset('storage/' . $produk->gambar4) }}" class="img-preview img-fluid mb-3 col-sm-5 d-block">
                                @else
                                    <img class="img-preview img-fluid mb-3">
                                @endif
                                <img class="img-preview img-fluid mb-3 col-sm-5">
                                <div class="input-group mb-3">
                                    <input type="file" class="form-control" @error('image') is-invalid @enderror name="gambar4" id="image" onchange="previewImage()" value="{{ asset('storage/' . $produk->gambar4) }}">
                                    @error('image')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="container">
                            <div class="row">

                          <div class="form-group col-sm-1">
                            <label for="slider">Slider</label>
                            <input type="hidden" name="oldjudul" value="{{ $produk->slider}}">
                            <input type="checkbox" id="slider" placeholder="Slider" name="slider" @if ($produk->slider) checked @endif>
                          </div>
                            <div class="form-group col-sm-1">
                              <label for="promo">Promo</label>
                              <input type="hidden" name="oldjudul" value="{{ $produk->promo}}">
                              <input type="checkbox" id="promo" placeholder="Promo" name="promo" @if ($produk->promo) checked @endif>
                            </div>
                              <div class="form-group col-sm-1">
                                <label for="diskon">Diskon</label>
                                <input type="hidden" name="oldjudul" value="{{ $produk->diskon}}">
                                <input type="checkbox" id="diskon" placeholder="Diskon" name="diskon" @if ($produk->diskon) checked @endif>
                              </div>
                        </div>
                          </div>
                          <div class="form-group">
                            <input type="hidden" class="form-control" name="views" value="0">
                          </div>
                          <button type="submit" class="btn btn-primary me-2 ">Submit</button>
                          <a class="btn btn-light" href="{{ route('produk.index') }}">Cancel</a>
                  </form>
                </div>
              </div>
            </div>
</form>

            <!-- content-wrapper ends -->
        <!-- partial:../../partials/_footer.html -->
        <footer class="footer">
          <div class="d-sm-flex justify-content-center justify-content-sm-between">
            <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Halaman ini bersifat rahasia dan hanya boleh diakses oleh pihak yang berwajib</span>
            <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Copyright © 2022.</span>
          </div>
        </footer>
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>

@endsection