  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Halaman <?= $title ?></h1>
          </div>
          <!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?= site_url('dashboard'); ?>">Dashboard</a></li>
              <li class="breadcrumb-item active"><?= $title ?></li>
            </ol>
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

<!-- Main content -->
<div class="content">
    <div class="container">
        <!-- Card -->
        <div class="card card-success card-outline">
            <div class="card-header d-flex p-0">
                <h3 class="card-title p-3">Daftar Klub Sepak Bola</h3>
                <ul class="nav nav-pills ml-auto p-2">
                    <li>
                        <button type="button" class="btn btn-block bg-gradient-success" id="btnTambahKlub">Tambah Klub</button>
                    </li>
                </ul>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <table id="t_daftar_klub" class="table table-bordered table-striped">
                    <thead>
                        <tr class="fw-bold fs-6 bg-primary text-white" style="text-align: center;">
                            <th>No</th>
                            <th>Klub Sepak Bola</th>
                            <th>Asal Klub Sepak Bola</th>
                            <th>Detail</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        if (count($namaklub) > 0) {
                            $no = 1;
                            foreach ($namaklub as $key => $value) { ?>
                                <tr style="text-align: center;">
                                    <td><?= $no++; ?></td>
                                    <td><?= $value->nama_klub; ?></td>
                                    <td><?= $value->kota_klub; ?></td>
                                    <td><?= $value->detail; ?></td>
                                    <td><a class="nav-icon fas fa-pen text-gray" href="javascript:void(0)" onclick="EditKlubBola('<?= $value->id_klub ?>')"></a> &ensp;
                                        <a class="nav-icon fas fa-trash text-danger" href="javascript:void(0)" onclick="DeleteKlubBola('<?= $value->id_klub ?>')"></a>
                                    </td>
                                </tr>
                            <?php }
                            } else { ?>
                            <tr>
                                <td colspan="12" class="text-center">Data Kosong</td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div>
    <!-- /.container-fluid -->
</div>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->

<div class="modal fade" tabindex="-1" id="ModalTambahKlub">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
			<form id="formtambahklub">
				<input type="hidden" id="id_klub" name="id_klub">
                <div class="modal-header">
                    <h4 class="modal-title" id="title"></h4>
                </div>
                <div class="modal-body">
                    <div class="col-sm-12">
                        <div class="form-group">
                            <p>Nama Klub Sepak Bola<strong class="text-danger">*</strong></p>
                            <input name="nama_klub" id="nama_klub" type="text" class="form-control" placeholder="Masukan Nama Klub Sepak Bola" required>
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="form-group">
                            <p>Kota Klub Sepak Bola<strong class="text-danger">*</strong></p>
                            <input name="kota_klub" id="kota_klub" type="text" class="form-control" placeholder="Masukan Kota Asal Klub Sepak Bola" required>
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="form-group">
                            <p>Detail Klub Sepak Bola</p>
                            <textarea name="detail" id="detail" type="text" class="form-control" placeholder="Masukan Detail Klub Sepak Bola"></textarea>
                        </div>
                    </div>
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
                    <button type="submit" class="btn btn-primary" id="btnSave">Simpan data</button>
                </div>
            </form>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->