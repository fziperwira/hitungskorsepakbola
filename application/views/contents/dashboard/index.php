  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand-md navbar-light navbar-white">
    <div class="container">
      <a href="" class="navbar-brand">
        <img src="<?= base_url(); ?>/public/dist/img/rspb1.png" alt="AdminLTE Logo" class="brand-image elevation-2">
        <span class="brand-text font-weight-light">Rekap Skor Pertandingan Bola</span>
      </a>

      <button class="navbar-toggler order-1" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <!-- <div class="collapse navbar-collapse order-3" id="navbarCollapse">
    </div> -->
  </nav>
  <!-- /.navbar -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Halaman <?= $title ?></h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <!-- <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item"><a href="#">Layout</a></li> -->
              <li class="breadcrumb-item active"><?= $title ?></li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container">
        <!-- Card -->
        <div class="card card-primary">
                <div class="card-header">
                </div>
                <!-- /.card-header -->
                <div class="row">
                    <div class="col-3 mx-auto d-block" style="margin-top: 2%;">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">
                                    <i class="far fa-file-alt"></i>
                                    Daftar Klub Sepak Bola
                                </h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <a href="<?= base_url('listklub') ?>"><img class="btn mx-auto d-block" src="<?php echo base_url(); ?>/public/dist/img/soccer_club.png" style="width:200px; height:200px;"></a>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- ./col -->
                    <div class="col-3 mx-auto d-block" style="margin-top: 2%;">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">
                                    <i class="fas fa-clipboard-check"></i>
                                    Skor Pertandingan
                                </h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <a href="<?= base_url('skorpertandingan') ?>"><img class="btn mx-auto d-block" src="<?php echo base_url(); ?>/public/dist/img/vs_club.png" style="width:200px; height:200px;"></a>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- ./col -->
                    <div class="col-3 mx-auto d-block" style="margin-top: 2%;">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">
                                    <i class="fas fa-clipboard-check"></i>
                                    Hasil Pertandingan
                                </h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <a href="<?= base_url('hasilpertandingan') ?>"><img class="btn mx-auto d-block" src="<?php echo base_url(); ?>/public/dist/img/papan_list.png" style="width:250px; height:200px;"></a>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- ./col -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.card -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
    <div class="p-3">
      <h5>Title</h5>
      <p>Sidebar content</p>
    </div>
  </aside>
  <!-- /.control-sidebar -->