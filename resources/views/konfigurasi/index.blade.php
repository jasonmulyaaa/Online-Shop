@extends('layout.master')
@section('content')
<div class="content-wrapper bg-white">
    <div class="row">
      
      
      <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Konfigurasi Table</h4>
            <div class="table-responsive">
              <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item" role="presentation">
                  <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">Edit</button>
                </li>
              </ul>
              <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
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
          @foreach ($konfigurasis as $konfigurasi)
          <form action="{{ route('konfigurasi.update', $konfigurasi->id) }}" method="POST" enctype="multipart/form-data">
          
              @csrf
              @method('PUT')
              <div class="col-12 grid-margin stretch-card">
                    <div class="card">
                      <div class="card-body">
                        <h4 class="card-title">Form Konfigurasi</h4>
                        <p class="card-description">
                          Isi Form Konfigurasi
                        </p>
                        <form class="forms-sample">
                        <div class="form-group">
                            <label for="exampleInputName1">Title</label>
                            <input type="text" class="form-control" id="exampleInputName1" placeholder="Title" name="title" value="{{ $konfigurasi->title}}">
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                          <div class="form-group">
                            <strong>Favicon</strong>
                            <input type="hidden" name="oldImage" value="{{ $konfigurasi->favicon }}">
                            @if ($konfigurasi->favicon)
                                <img src="{{ asset('storage/' . $konfigurasi->favicon) }}" class="img-preview img-fluid mb-3 col-sm-5 d-block">
                            @else
                                <img class="img-preview img-fluid mb-3">
                            @endif
                            <img class="img-preview img-fluid mb-3 col-sm-5">
                            <div class="input-group mb-3">
                                <input type="file" class="form-control" @error('image') is-invalid @enderror name="favicon" id="image" onchange="previewImage()" value="{{ asset('storage/' . $konfigurasi->gambar) }}">
                                @error('image')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                              </div>
                              <div class="form-group">
                            <label for="exampleInputName1">Metadata</label>
                            <textarea class="form-control" id="content" placeholder="Metadata" name="metadata">{{ $konfigurasi->metadata}}</textarea>
                            <script>
                              CKEDITOR.replace('content');
                          </script>                          </div>
                          <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                              <strong>Logo Header</strong>
                              <input type="hidden" name="oldImage" value="{{ $konfigurasi->logo_header }}">
                              @if ($konfigurasi->logo_header)
                                  <img src="{{ asset('storage/' . $konfigurasi->logo_header) }}" class="img-preview img-fluid mb-3 col-sm-5 d-block">
                              @else
                                  <img class="img-preview img-fluid mb-3">
                              @endif
                              <img class="img-preview img-fluid mb-3 col-sm-5">
                              <div class="input-group mb-3">
                                  <input type="file" class="form-control" @error('image') is-invalid @enderror name="logo_header" id="image" onchange="previewImage()" value="{{ asset('storage/' . $konfigurasi->logo_header) }}">
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
                            <strong>Logo Footer</strong>
                            <input type="hidden" name="oldImage" value="{{ $konfigurasi->logo_footer }}">
                            @if ($konfigurasi->logo_footer)
                                <img src="{{ asset('storage/' . $konfigurasi->logo_footer) }}" class="img-preview img-fluid mb-3 col-sm-5 d-block">
                            @else
                                <img class="img-preview img-fluid mb-3">
                            @endif
                            <img class="img-preview img-fluid mb-3 col-sm-5">
                            <div class="input-group mb-3">
                                <input type="file" class="form-control" @error('image') is-invalid @enderror name="logo_footer" id="image" onchange="previewImage()" value="{{ asset('storage/' . $konfigurasi->logo_footer) }}">
                                @error('image')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        </div>
                          <div class="form-group">
                            <label for="exampleInputName1">Alamat</label>
                            <input type="text" class="form-control" id="exampleInputName1" placeholder="Alamat" name="alamat" value="{{ $konfigurasi->alamat}}">
                          </div>
                          <div class="form-group">
                            <label for="exampleInputName1">Deskripsi</label>
                            <input type="text" class="form-control" id="exampleInputName1" placeholder="Deskripsi" name="deskripsi" value="{{ $konfigurasi->deskripsi}}">
                          </div>
                          <div class="form-group">
                            <label for="exampleInputName1">No Telepon</label>
                            <input type="number" class="form-control" id="exampleInputName1" placeholder="No Telepon" name="no_telp" value="{{ $konfigurasi->no_telp}}">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputName1">Email</label>
                            <input type="email" class="form-control" id="exampleInputName1" placeholder="Email" name="email" value="{{ $konfigurasi->email}}">
                        </div>
                          <button type="submit" class="btn btn-primary me-2">Submit</button>
                        </form>
                      </div>
                    </div>
                  </div>
          </form>
          @endforeach
              </div>
              </div>
            </div>
          </div>
        </div>
      </div>
          
            
     
      

    
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