@extends('layout.master')
@section('content')

<form action="{{ route('akun.update', $akun->id) }}" method="POST" enctype="multipart/form-data">
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
                  <h4 class="card-title">Form Akun Management</h4>
                  <p class="card-description">
                    Isi Form Akun Management
                  </p>
                  <form class="forms-sample">
                    <div class="form-group">
                      <label for="exampleInputName1">Username</label>
                      <input type="text" class="form-control" id="exampleInputName1" placeholder="Username" name="name" value="{{ $akun->name}}">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputName1">Email</label>
                      <input type="text" class="form-control" id="exampleInputName1" placeholder="Username" name="email" value="{{ $akun->email}}">
                    </div>
                        <div class="form-group">
                            <label for="exampleInputName1">Role</label>
                            <select class="form-control" name="role">
                              <option value="Admin">Admin</option>
                              <option value="Operator">Operator</option>
                          </select>                           </div>
                          <div class="form-group">
                            <label for="exampleInputName1">New Password</label>
                            <input type="text" class="form-control" id="exampleInputName1" placeholder="Password" name="password">
                          </div>
                    <button type="submit" class="btn btn-primary me-2">Submit</button>
                    <a class="btn btn-light" href="{{ route('akun.index') }}">Cancel</a>
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