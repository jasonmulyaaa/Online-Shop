<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Admin Dashboard </title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="../../assets/vendors/feather/feather.css">
  <link rel="stylesheet" href="../../assets/vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="../../assets/vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" href="../../assets/vendors/typicons/typicons.css">
  <link rel="stylesheet" href="../../assets/vendors/simple-line-icons/css/simple-line-icons.css">
  <link rel="stylesheet" href="../../assets/vendors/css/vendor.bundle.base.css">
  <script src="https://cdn.ckeditor.com/4.16.2/full/ckeditor.js"></script>
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <link rel="stylesheet" href="../../assets/vendors/datatables.net-bs4/dataTables.bootstrap4.css">
  <link rel="stylesheet" href="../../assets/js/select.dataTables.min.css">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="../../assets/css/vertical-layout-light/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="../../assets/images" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js"></script>



  
</head>
<body>
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex align-items-top flex-row">
      <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-start">
        <div class="me-3">
          <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-bs-toggle="minimize">
            <span class="icon-menu"></span>
          </button>
        </div>

      </div>
      <div class="navbar-menu-wrapper d-flex align-items-top"> 
        <ul class="navbar-nav">
          <li class="nav-item font-weight-semibold d-none d-lg-block ms-0">
            <h1 class="welcome-text"><span class="text-black fw-bold">Selamat Pagi, {{ Auth::user()->name }}<span></h1>
            <h3 class="welcome-sub-text">Your performance  </h3>
          </li>
        </ul>
        <ul class="navbar-nav ms-auto">
          <li class="nav-item dropdown ">
            <a class="nav-link" id="UserDropdown" href="#" data-bs-toggle="dropdown" aria-expanded="false">
              <i class="menu-icon mdi mdi mdi-account"></i> </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
              <div class="dropdown-header text-center">
                <i class="menu-icon mdi mdi mdi-account"></i> 
                <p class="mb-1 mt-3 font-weight-semibold">{{ Auth::user()->name }}</p>
              </div>
              <a href="/profile" class="btn btn-link"><i class="dropdown-item-icon mdi mdi-import text-primary me-2"></i>Edit Profil</a>
              <form action="/logout" method="post">
                @csrf
                <button class="btn btn-link"><i class="dropdown-item-icon mdi mdi-import text-primary me-2"></i>Sign Out</button>
              </form>
            </div>
          </li>
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-bs-toggle="offcanvas">
          <span class="mdi mdi-menu"></span>
        </button>
      </div>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_settings-panel.html -->
      
    
      <!-- partial -->
      <!-- partial:partials/_sidebar.html -->
      <nav class="sidebar  sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link" href="/dashboard">
              <i class="mdi mdi-grid-large menu-icon"></i>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
          @if (auth()->user()->role == 'Operator')
              
          <li class="nav-item nav-category">Home</li>
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
              <i class="menu-icon mdi mdi mdi-animation"></i>
              <span class="menu-title">Home</span>
              <i class="menu-arrow"></i> 
            </a>
            <div class="collapse" id="ui-basic">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="/slider">Slider</a></li>
                <li class="nav-item"> <a class="nav-link" href="/service">Service</a></li>
                <li class="nav-item"> <a class="nav-link" href="/preorder">Pre-order</a></li>
                <li class="nav-item"> <a class="nav-link" href="/iklan">Iklan</a></li>
                <li class="nav-item"> <a class="nav-link" href="/banner">Banner</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item nav-category">Produk</li>
          <li class="nav-item">
            <a class="nav-link" href="/produk">
              <i class="menu-icon mdi mdi mdi-comment-question-outline"></i>
              <span class="menu-title">Produk</span>
            </a>
          </li>
          <li class="nav-item nav-category">Blog</li>
          <li class="nav-item">
            <a class="nav-link" href="/blog">
              <i class="menu-icon mdi mdi mdi mdi-clipboard-text"></i>
              <span class="menu-title">Blog</span>
            </a>
          </li>

          @elseif(auth()->user()->role == 'Admin')

          <li class="nav-item nav-category">Home</li>
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
              <i class="menu-icon mdi mdi mdi-animation"></i>
              <span class="menu-title">Home</span>
              <i class="menu-arrow"></i> 
            </a>
            <div class="collapse" id="ui-basic">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="/slider">Slider</a></li>
                <li class="nav-item"> <a class="nav-link" href="/service">Service</a></li>
                <li class="nav-item"> <a class="nav-link" href="/preorder">Pre-order</a></li>
                <li class="nav-item"> <a class="nav-link" href="/iklan">Iklan</a></li>
                <li class="nav-item"> <a class="nav-link" href="/banner">Banner</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item nav-category">Produk</li>
          <li class="nav-item">
            <a class="nav-link" href="/produk">
              <i class="menu-icon mdi mdi mdi-comment-question-outline"></i>
              <span class="menu-title">Produk</span>
            </a>
          </li>
          <li class="nav-item nav-category">Blog</li>
          <li class="nav-item">
            <a class="nav-link" href="/blog">
              <i class="menu-icon mdi mdi mdi mdi-clipboard-text"></i>
              <span class="menu-title">Blog</span>
            </a>
          </li>
          <li class="nav-item nav-category">Tentang Kami</li>
          <li class="nav-item">
            <a class="nav-link" href="/aboutus">
              <i class="menu-icon mdi mdi mdi mdi-book"></i>
              <span class="menu-title">Tentang Kami</span>
            </a>
          </li>
          <li class="nav-item nav-category">Kategori</li>
          <li class="nav-item">
            <a class="nav-link" href="/kategorigeneral">
              <i class="menu-icon mdi mdi mdi mdi-book"></i>
              <span class="menu-title">Kategori General</span>
            </a>
          </li>
          <li class="nav-item nav-category">Contact Us</li>
          <li class="nav-item">
            <a class="nav-link" href="/contactus">
              <i class="menu-icon mdi mdi mdi-earth"></i>
              <span class="menu-title">Contact Us</span>
            </a>
          </li>

          @elseif(auth()->user()->role == 'SuperAdmin')
          <li class="nav-item nav-category">Home</li>
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
              <i class="menu-icon mdi mdi mdi-animation"></i>
              <span class="menu-title">Home</span>
              <i class="menu-arrow"></i> 
            </a>
            <div class="collapse" id="ui-basic">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="/slider">Slider</a></li>
                <li class="nav-item"> <a class="nav-link" href="/service">Service</a></li>
                <li class="nav-item"> <a class="nav-link" href="/preorder">Pre-order</a></li>
                <li class="nav-item"> <a class="nav-link" href="/iklan">Iklan</a></li>
                <li class="nav-item"> <a class="nav-link" href="/banner">Banner</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item nav-category">Produk</li>
          <li class="nav-item">
            <a class="nav-link" href="/produk">
              <i class="menu-icon mdi mdi mdi-comment-question-outline"></i>
              <span class="menu-title">Produk</span>
            </a>
          </li>
          <li class="nav-item nav-category">Blog</li>
          <li class="nav-item">
            <a class="nav-link" href="/blog">
              <i class="menu-icon mdi mdi mdi mdi-clipboard-text"></i>
              <span class="menu-title">Blog</span>
            </a>
          </li>

          <li class="nav-item nav-category">Tentang Kami</li>
          <li class="nav-item">
            <a class="nav-link" href="/aboutus">
              <i class="menu-icon mdi mdi mdi mdi-book"></i>
              <span class="menu-title">Tentang Kami</span>
            </a>
          </li>
          <li class="nav-item nav-category">Kategori</li>
          <li class="nav-item">
            <a class="nav-link" href="/kategorigeneral">
              <i class="menu-icon mdi mdi mdi mdi-book"></i>
              <span class="menu-title">Kategori General</span>
            </a>
          </li>
          <li class="nav-item nav-category">Contact Us</li>
          <li class="nav-item">
            <a class="nav-link" href="/contactus">
              <i class="menu-icon mdi mdi mdi-contact-mail"></i>
              <span class="menu-title">Contact Us</span>
            </a>
          </li>
          <li class="nav-item nav-category">KOnfigurasi</li>
          <li class="nav-item">
            <a class="nav-link" href="/konfigurasi">
              <i class="menu-icon mdi mdi mdi-earth"></i>
              <span class="menu-title">Konfigurasi</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/metamanagement">
              <i class="menu-icon mdi mdi mdi-web"></i>
              <span class="menu-title">Meta Management</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/akun">
              <i class="menu-icon mdi mdi mdi-account-key"></i>
              <span class="menu-title">Akun Management</span>
            </a>
          </li>
          @endif
        </ul>
      </nav>
      <!-- partial -->
          @yield('content')
    </div>

  <!-- container-scroller -->

  <!-- plugins:js -->
  <script src="../../assets/dist/trix.js"></script>
  <script src="../../assets/vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <script src="../../assets/vendors/chart.js/Chart.min.js"></script>
  <script src="../../assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
  <script src="../../assets/vendors/progressbar.js/progressbar.min.js"></script>

  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="../../assets/js/off-canvas.js"></script>
  <script src="../../assets/js/hoverable-collapse.js"></script>
  <script src="../../assets/js/template.js"></script>
  <script src="../../assets/js/settings.js"></script>
  <script src="../../assets/js/todolist.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="../../assets/js/jquery.cookie.js" type="text/javascript"></script>
  <script src="../../assets/js/dashboard.js"></script>
  <script src="../../assets/js/Chart.roundedBarCharts.js"></script>
  <!-- End custom js for this page-->

  
<!-- Page specific script -->
<script>
    $(function () {
      $("#example1").DataTable({
        "responsive": true, "lengthChange": false, "autoWidth": false,
        "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
      }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
      $('#example2').DataTable({
        "paging": true,
        "lengthChange": false,
        "searching": false,
        "ordering": true,
        "info": true,
        "autoWidth": false,
        "responsive": true,
      });
    });
  </script>

  <script>
    document.addEventListener('trix-file-accept', function(e){
        e.preventDefault();
    })
  </script>

<script>
  $(function(e){
    $("#chkCheckAll").click(function(){
      $(".checkBoxClass").prop('checked',$(this).prop('checked'));
    });
    $("#deleteAllSelectedSlider").click(function(e){
      e.preventDefault();
      var allids = [];
      $("input:checkbox[name=ids]:checked").each(function(){
        allids.push($(this).val());
      });
      $.ajax({
        url:"{{ route('slider.deleteSelected') }}",
        type:"DELETE",
        data:{
          _token:$("input[name=_token]").val(),
          ids:allids
        },
        success:function(response){
          $.each(allids,function(key,val){
            $("#sid"+val).remove();
          })
        }
      });
    })
  });
</script>

<script>
  $(function(e){
    $("#chkCheckAll").click(function(){
      $(".checkBoxClass").prop('checked',$(this).prop('checked'));
    });
    $("#deleteAllSelectedService").click(function(e){
      e.preventDefault();
      var allids = [];
      $("input:checkbox[name=ids]:checked").each(function(){
        allids.push($(this).val());
      });
      $.ajax({
        url:"{{ route('service.deleteSelected') }}",
        type:"DELETE",
        data:{
          _token:$("input[name=_token]").val(),
          ids:allids
        },
        success:function(response){
          $.each(allids,function(key,val){
            $("#sid"+val).remove();
          })
        }
      });
    })
  });
</script>

<script>
  $(function(e){
    $("#chkCheckAll").click(function(){
      $(".checkBoxClass").prop('checked',$(this).prop('checked'));
    });
    $("#deleteAllSelectedPreorder").click(function(e){
      e.preventDefault();
      var allids = [];
      $("input:checkbox[name=ids]:checked").each(function(){
        allids.push($(this).val());
      });
      $.ajax({
        url:"{{ route('preorder.deleteSelected') }}",
        type:"DELETE",
        data:{
          _token:$("input[name=_token]").val(),
          ids:allids
        },
        success:function(response){
          $.each(allids,function(key,val){
            $("#sid"+val).remove();
          })
        }
      });
    })
  });
</script>

<script>
  $(function(e){
    $("#chkCheckAll").click(function(){
      $(".checkBoxClass").prop('checked',$(this).prop('checked'));
    });
    $("#deleteAllSelectedBanner").click(function(e){
      e.preventDefault();
      var allids = [];
      $("input:checkbox[name=ids]:checked").each(function(){
        allids.push($(this).val());
      });
      $.ajax({
        url:"{{ route('banner.deleteSelected') }}",
        type:"DELETE",
        data:{
          _token:$("input[name=_token]").val(),
          ids:allids
        },
        success:function(response){
          $.each(allids,function(key,val){
            $("#sid"+val).remove();
          })
        }
      });
    })
  });
</script>

<script>
  $(function(e){
    $("#chkCheckAll").click(function(){
      $(".checkBoxClass").prop('checked',$(this).prop('checked'));
    });
    $("#deleteAllSelectedKategoriGeneral").click(function(e){
      e.preventDefault();
      var allids = [];
      $("input:checkbox[name=ids]:checked").each(function(){
        allids.push($(this).val());
      });
      $.ajax({
        url:"{{ route('kategorigeneral.deleteSelected') }}",
        type:"DELETE",
        data:{
          _token:$("input[name=_token]").val(),
          ids:allids
        },
        success:function(response){
          $.each(allids,function(key,val){
            $("#sid"+val).remove();
          })
        }
      });
    })
  });
</script>

<script>
  $(function(e){
    $("#chkCheckAll").click(function(){
      $(".checkBoxClass").prop('checked',$(this).prop('checked'));
    });
    $("#deleteAllSelectedProduk").click(function(e){
      e.preventDefault();
      var allids = [];
      $("input:checkbox[name=ids]:checked").each(function(){
        allids.push($(this).val());
      });
      $.ajax({
        url:"{{ route('produk.deleteSelected') }}",
        type:"DELETE",
        data:{
          _token:$("input[name=_token]").val(),
          ids:allids
        },
        success:function(response){
          $.each(allids,function(key,val){
            $("#sid"+val).remove();
          })
        }
      });
    })
  });
</script>

<script>
  $(function(e){
    $("#chkCheckAll").click(function(){
      $(".checkBoxClass").prop('checked',$(this).prop('checked'));
    });
    $("#deleteAllSelectedBlog").click(function(e){
      e.preventDefault();
      var allids = [];
      $("input:checkbox[name=ids]:checked").each(function(){
        allids.push($(this).val());
      });
      $.ajax({
        url:"{{ route('blog.deleteSelected') }}",
        type:"DELETE",
        data:{
          _token:$("input[name=_token]").val(),
          ids:allids
        },
        success:function(response){
          $.each(allids,function(key,val){
            $("#sid"+val).remove();
          })
        }
      });
    })
  });
</script>

<script>
  $(function(e){
    $("#chkCheckAll").click(function(){
      $(".checkBoxClass").prop('checked',$(this).prop('checked'));
    });
    $("#deleteAllSelectedAkun").click(function(e){
      e.preventDefault();
      var allids = [];
      $("input:checkbox[name=ids]:checked").each(function(){
        allids.push($(this).val());
      });
      $.ajax({
        url:"{{ route('akun.deleteSelected') }}",
        type:"DELETE",
        data:{
          _token:$("input[name=_token]").val(),
          ids:allids
        },
        success:function(response){
          $.each(allids,function(key,val){
            $("#sid"+val).remove();
          })
        }
      });
    })
  });
</script>

@include('sweetalert::alert')
<script type="text/javascript">
  $('.show_confirm').click(function(event) {
       var form =  $(this).closest("form");
       var name = $(this).data("name");
       event.preventDefault();
       swal({
           title: `Apakah anda yakin ingin menghapus record ini?`,
           text: "Jika anda menghapus ini, record ini akan selamanya hilang!",
           icon: "warning",
           buttons: true,
           dangerMode: true,
       })
       .then((willDelete) => {
         if (willDelete) {
           form.submit();
         }
       });
   });
</script>

</body>

</html>

