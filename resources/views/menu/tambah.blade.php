<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Wardise Admin</title>

  <!-- Theme style -->
  <link rel="stylesheet" href="../../assets/dist/css/adminlte.css">
  <link rel="stylesheet" href="../../assets/dist/css/othercomponents.css">
  <link rel="stylesheet" href="../../assets/dist/css/jam.css">
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../assets/plugins/fontawesome-free/css/all.min.css">
</head>
<body class="dark-mode hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake border border-white rounded" src="../../assets/dist/img/logowardise.png" alt="AdminLTELogo" height="130" width="160">
  </div>

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-dark">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Notifications Dropdown Menu -->
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-controlsidebar-slide="true" href="#" role="button">
          <i class="fas fa-th-large"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ url('/dashboard') }}" class="brand-link">
      <img src="../assets/dist/img/logowardise.png" alt="AdminLTE Logo" class="brand-image mx-auto d-block" style="opacity: .8">
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{asset('storage/images/'.Auth::user()->gambar)}}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="{{ url('/settings') }}" class="d-block" style="text-transform: capitalize;">{{ Auth::user()->name }}</a>
        </div>
      </div>


      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-header">Halaman Utama</li>
          <li class="nav-item">
              <a href="{{ url('/menus') }}" class="nav-link active">
                  <i class="nav-icon fas fa-utensils"></i>
                  <p>
                    Menu
                  </p>
              </a>
          </li>
          <li class="nav-item">
            <a href="{{ url('/testimoni') }}" class="nav-link">
                <i class="nav-icon fas fa-comments"></i>
                <p>
                  Testimoni
                </p>
            </a>
        </li>
          <li class="nav-header">Halaman Admin</li>
          <li class="nav-item">
              <a href="{{ url('/dashboard') }}" class="nav-link">
                  <i class="nav-icon fas fa-tachometer-alt"></i>
                  <p>
                    Dashboard
                  </p>
              </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('logout') }}" class="nav-link"  onclick="event.preventDefault();
            document.getElementById('logout-form').submit();">
                <i class="nav-icon fas fa-power-off"></i>
                <p>
                  Keluar
                </p>
              <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                  @csrf
              </form>
            </a>
        </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

   <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6 nav-sidebar">
                <div class="nav-link" style="font-size: 30px;">
                  <i class="nav-icon fas fa-utensils"></i>
                  <p>
                    Tambah Menu
                  </p>
                </div>
              </a>
            </div>
            <div class="col-sm-6 mt-3">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="{{ url('/dashboard') }}">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="{{ url('/menus') }}">Menu</a></li>
                <li class="breadcrumb-item active">Tambah Menu</li>
              </ol>
            </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- jquery validation -->
            <div class="card card-primary">
              <!-- /.card-header -->
              <!-- form start -->
              <form id="quickForm" action="{{ url('menus/store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Nama Produk</label>
                    <input type="text" name="nama" class="form-control" id="exampleInputEmail1" placeholder="Masukkan Nama Produk">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Harga Produk</label>
                    <input type="text" name="harga" class="form-control" id="exampleInputPassword1" placeholder="Masukkan Harga Produk">
                  </div>
                  <div class="form-group">
                    <label>Pilih Jenis</label>
                    <select class="form-control" name="jenis" required>
                      <option>Pilih Disini...</option>
                      <option>Makanan</option>
                      <option>Minuman</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputFile">Pilih Gambar</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" name="gambar" class="custom-file-input" id="exampleInputFile">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
            <!-- /.card -->
            </div>
          <!--/.col (left) -->
          <!-- right column -->
          <div class="col-md-6">

          </div>
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer text-center">
    <strong>Copyright &copy; 2021 <i>Café Paradise</i>.</strong>
    All rights reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="../../assets/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- jquery-validation -->
<script src="../../assets/plugins/jquery-validation/jquery.validate.min.js"></script>
<script src="../../assets/plugins/jquery-validation/additional-methods.min.js"></script>
<!-- bs-custom-file-input -->
<script src="../../assets/plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
<!-- AdminLTE App -->
<script src="../../assets/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../assets/dist/js/demo.js"></script>
<!-- Sweetalert Online -->
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script>
    $(function () {
      bsCustomFileInput.init();
    });
</script>
<script>
$(function () {
  $('#quickForm').validate({
    rules: {
      nama: {
        required: true,
      },
      harga: {
        required: true,
      },
      jenis: {
        required: true
      },
      gambar: {
        required: true,
        accept: "jpg|jpeg|png",
      },
    },
    messages: {
      nama: {
        required: "Silakan masukan nama dari produk"
      },
      harga: {
        required: "Silakan masukan harga dari produk"
      },
      jenis: {
          required: "Silakan pilih salah satu dibawah ini"
      },
      gambar: {
        required: "Pilih dan masukkan salah satu gambar",
        accept: "Gambar harus berekstensi jpg, jpeg, png!"
      },
    },
    errorElement: 'span',
    errorPlacement: function (error, element) {
      error.addClass('invalid-feedback');
      element.closest('.form-group').append(error);
    },
    highlight: function (element, errorClass, validClass) {
      $(element).addClass('is-invalid');
    },
    unhighlight: function (element, errorClass, validClass) {
      $(element).removeClass('is-invalid');
    }
  });
});
</script>
</body>
</html>
