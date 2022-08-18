@extends('layout.master')
@section('content')
<!-- partial -->

<div class="content-wrapper bg-white">
          <div class="row">
            
            
            <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Tentang Kami Table</h4>
                  <div class="table-responsive">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                      <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">Home</button>
                      </li>
                    </ul>
                    <div class="tab-content" id="myTabContent">
                      <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab"><table class="table table-striped">
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
                      @foreach ($aboutuss as $aboutus)
                          
                  <form action="{{ route('aboutus.update', $aboutus->id) }}" method="POST" enctype="multipart/form-data">
                          @csrf
                  
                          @method('PUT')
                              <div class="col-12 grid-margin stretch-card">
                                <div class="card">
                                  <div class="card-body">
                                    <h4 class="card-title">Form Tentang Kami</h4>
                                    <p class="card-description">
                                      Isi Form Tentang Kami
                                    </p>
                                    <form class="forms-sample">
                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                              <div class="form-group">
                                                  <strong>Gambar</strong>
                                                  <input type="hidden" name="oldImage" value="{{ $aboutus->gambar }}">
                                                  @if ($aboutus->gambar)
                                                      <img src="{{ asset('storage/' . $aboutus->gambar) }}" class="img-preview img-fluid mb-3 col-sm-5 d-block">
                                                  @else
                                                      <img class="img-preview img-fluid mb-3">
                                                  @endif
                                                  <img class="img-preview img-fluid mb-3 col-sm-5">
                                                  <div class="input-group mb-3">
                                                      <input type="file" class="form-control" @error('image') is-invalid @enderror name="gambar" id="image" onchange="previewImage()" value="{{ asset('storage/' . $aboutus->gambar) }}">
                                                      @error('image')
                                                          <div class="invalid-feedback">
                                                              {{ $message }}
                                                          </div>
                                                      @enderror
                                                  </div>
                                              </div>
                                          </div>
                                          <div class="form-group">
                                              <label for="exampleInputName1">Judul</label>
                                              <input type="text" class="form-control" id="exampleInputName1" placeholder="Judul" name="judul" value="{{ $aboutus->judul}}">
                                            </div>
                                            <div class="form-group">
                                              <label for="exampleInputName1">Deskripsi</label>
                                              <textarea class="form-control" id="content" name="deskripsi">{{ $aboutus->deskripsi }}</textarea>
                                              <script>
                                                  CKEDITOR.replace('content');
                                              </script>
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
            <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Copyright © 2021. PT. PT PTan</span>
          </div>
        </footer>
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>

@endsection