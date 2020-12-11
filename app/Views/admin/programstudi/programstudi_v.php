<?= $this->extend('admin/ad'); ?>
<?= $this->section('content'); ?>
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0 text-dark"><?= $title ?></h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item">Data Mahasiswa</li>
          <li class="breadcrumb-item active">List Mahasiswa</li>

        </ol>
      </div><!-- /.col -->
    </div><!-- /.row -->
  </div><!-- /.container-fluid -->
</div>

<section class="content">
  <div class="container-fluid">

    <div class="card card-success card-outline">
      <div class="card-header">
        <h3 class="card-title">Data Program Studi</h3>

        <!-- <button type="button" class="btn btn-warning " style="float: right;" data-toggle="modal" data-target="#tambahModal"><i class="fa fa-clipboard"></i>
        </button> -->

        <!-- /.card-tools -->
      </div>
      <!-- /.card-header -->
      <div class="card-body">
        <div class="card-body">
          <table class="table table-bordered">
            <thead>
              <tr class="text-center">
                <th>NO</th>
                <th>Program Studi</th>
                <th>Jenjang</th>
                <th>Penanggung Jawab</th>
                <th>SKS</th>
                <th>Aksi</th>

              </tr>
            </thead>
            <?php $no = 1;
            foreach ($pstudi as $x => $value) { ?>
              <tbody>
                <tr class="text-center">
                  <td><?= $no++; ?></td>
                  <td><?= $value['nama_prodi']; ?></td>
                  <td><?= $value['nama_jenjang']; ?></td>
                  <td><?= $value['nama_dosen']; ?></td>
                  <td>............</td>
                  <td><button type="button" class="btn btn-success"><i class="fa fa-magic"></i></button></td>
                </tr>
              </tbody>
            <?php } ?>
          </table>
        </div>

      </div>
      <!-- /.card-body -->
    </div>
    <!-- /.card -->
  </div>

  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="container">
            <div class="row">
              <div class="col-sm">
                <div class="text-center">
                  <img src="/img/insertion-140x140-02.jpg" class="rounded" alt="MONYET">
                </div>
              </div>
              <div class="col-sm">
                <table class="table table-borderless">
                  <thead>
                    <tr>
                      <th scope="col">NIM</th>
                      <th scope="col">NAMA</th>
                      <th scope="col">PRODI</th>
                      <th scope="col">KONSENTRASI</th>
                      <th scope="col">JENJANG</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>181155</td>
                      <td>guanlin</td>
                      <td>Teknik Informatika</td>
                      <td>Sistem Informasi</td>
                      <td>Strata-1</td>
                    </tr>

                  </tbody>
                </table>
              </div>
            </div>
          </div>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="tambahModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Tambah Mahasiswa</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="container">

            <div class="row no-gutters">
              <div class="col-md-4 mt-3">
                <img src="img/avatar1.png" class="card-img img-thumbnail img-preview">
              </div>
              <div class="col-md-8">
                <div class="card-body">
                  <form method="post" enctype="multipart/form-data">
                    <input type="hidden" name="csrf_test_name" value="fc3bfd23188610829b41a63c97cce992">
                    <div class="form-group">
                      <label for="username">Username</label>
                      <input type="text" class="form-control" id="username" name="username">
                    </div>
                    <div class="form-group">
                      <label for="email">Email</label>
                      <input type="email" class="form-control" id="email" placeholder="email@example.com" name="email">
                    </div>
                    <div class="form-row">
                      <div class="form-group col-md-6">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" id="password">
                      </div>

                      <div class="form-group col-md-6">
                        <label for="password_confirm">Confirm Password</label>
                        <input type="password" name="password_confirm" id="password_confirm" class="form-control">
                      </div>

                    </div>
                    <div class="form-group">
                      <label for="gambar">Photo</label>
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="gambar" name="gambar" onchange="Preview()">
                        <label class="custom-file-label" for="customFile">Choose file</label>
                      </div>
                    </div>

                    <button type="submit" class="btn btn-primary" style="float:right;">Tambah</button>
                  </form>
                </div>
              </div>

            </div>

            <div class="row no-gutters">
              <div class="col-sm">
                <div class="text-center">

                </div>
              </div>
              <div class="col-sm">

              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>
</section>

<!-- /.content-header -->






<!-- /.card-body -->
<div class="card-footer clearfix">

</div>
</div>

<!-- /.col -->

<!-- /.row -->

<!-- /.direct-chat-pane -->
</section>
<?= $this->endSection(); ?>