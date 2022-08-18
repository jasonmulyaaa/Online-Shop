@extends('layout.master')
@section('content')
<!-- partial -->

<div class="content-wrapper bg-white">
          <div class="row">
            
            
            <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Meta Management Table</h4>
                  <div class="table-responsive">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                      <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">Home</button>
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
                    @foreach ($meta as $metaitem)
                    <form action="{{ route('metaupdate', $metaitem->id) }}" method="POST" enctype="multipart/form-data">
            
                @csrf
                @method('put')
                            <div class="col-12 grid-margin stretch-card">
                              <div class="card">
                                <div class="card-body">
                                  <h4 class="card-title">Form Meta Management</h4>
                                  <p class="card-description">
                                    Isi Form Meta Management
                                  </p>
                                  <form class="forms-sample">
                                    <div class="form-group">
                                      <label for="exampleInputName1">Meta Keywords</label>
                                      <textarea class="form-control" id="content" name="keywords">{{ $metaitem->keywords }}</textarea>
                                      <script>
                                          CKEDITOR.replace('content');
                                      </script>
                                    </div>
                                    <div class="form-group">
                                      <label for="exampleInputName1">Meta Search Engine</label>
                                      <textarea class="form-control" id="content1" name="search_engine">{{ $metaitem->search_engine }}</textarea>
                                      <script>
                                          CKEDITOR.replace('content1');
                                      </script>
                                    </div>

                                    <div class="form-group">
                                      <label for="exampleInputName1">Meta Deskripsi</label>
                                      <textarea class="form-control" id="content2" name="deskripsi">{{ $metaitem->deskripsi }}</textarea>
                                      <script>
                                          CKEDITOR.replace('content2');
                                      </script>
                                    </div>
                                    <div class="form-group">
                                      <label for="exampleInputName1">Meta Author</label>
                                      <input class="form-control" id="content3" name="author" value="{{ $metaitem->author }}">
                                    </div>
                                    <div class="form-group">
                                      <label for="exampleInputName1">Meta Website</label>
                                      <input class="form-control" id="exampleInputName1" name="website" value="{{ $metaitem->website }}">
                                    </div>
                                    <button type="submit" class="btn btn-primary me-2">Submit</button>
                                  </form>
                                </div>
                              </div>
                            </div>
                            @endforeach
                </form>

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