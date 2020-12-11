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
<!-- /.content-header -->
<section class="content">
  <div class="container-fluid">
    <div class="card card-success card-outline">
      <div class="card-header">
        <h3 class="card-title">Data Mahasiswa</h3>
        <form class="form ml-3" method="post" style="float: right;">

          <div class="input-group input-group-sm">
            <input class="form-control form-control-navbar" type="search" placeholder="Nyari siapa hayo !?" aria-label="Search" name="key">
            <div class="input-group-append">
              <button class="btn btn-primary mr-2" type="submit">
                <i class="fas fa-search"></i>
              </button>
              <button type="button" class="btn btn-success" data-toggle="modal" data-target="#tambahModal"><i class="fa fa-plus"></i> Tambah Mahasiswa
              </button>
            </div>
            <div class="input-group-append">
              <button class="btn btn-primary mr-2" type="submit">
                <i class="fas fa-search"></i>
              </button>
              <button type="button" class="btn btn-success" data-toggle="modal" data-target="#tambahModal"><i class="fa fa-plus"></i> Tambah Mahasiswa
              </button>
            </div>
          </div>
        </form>

        <!-- /.card-tools -->
      </div>
      <!-- /.card-header -->
      <div class="card-body">
        <div class="row card-mahasiswa">


        </div>
        <?= $pager->links() ?>
      </div>
      <!-- /.card-body -->
    </div>
    <!-- /.card -->
  </div>
  <!-- modal -->

  <!-- modaldelete -->
  <div class="modal fade" id="hapusModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Delete!?</h5>
        </div>
        <div class="modal-body">
          <div class="container">
            <div class="text-center">
              <h5>Yakin Dihapus nih data!?</h5>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <form action="" method="post">
            <?= csrf_field(); ?>
            <input type="hidden" name="_method" value="DELETE">
            <button type="submit" class="btn btn-danger">Delete</button>
          </form>
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
  <!-- modaldetail-->
  <div class="modal fade" id="detailModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Detail Mahasiswa</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
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

                    </tr>

                  </tbody>
                </table>
              </div>
            </div>
          </div>

        </div>

      </div>
    </div>
  </div>
  <!-- modaledit -->
  <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Edit Mahasiswa</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="container">
            <div class="row">
              <div class="col-md-4 mt-3">
                <img src="img/avatar1.png" class="card-img img-thumbnail img-preview">
              </div>
              <div class="col-md-8">

              </div>
            </div>
          </div>

        </div>

      </div>
    </div>
  </div>
  <!-- modaltambah -->
  <div class="modal fade" id="tambahModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Tambah Mahasiswa</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
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
                  <form method="post" enctype="multipart/form-data" action="MahasiswaApi/create">
                    <?= csrf_field(); ?>
                    <div class="form-group">
                      <label for="nim">Nim</label>
                      <input type="text" class="form-control" id="nim" name="nim">
                    </div>
                    <div class="form-group">
                      <label for="nama_mahasiswa">Nama Mahasiswa</label>
                      <input type="text" class="form-control" id="nama_mahasiswa" name="nama_mahasiswa">
                    </div>
                    <!-- <div class="form-group">
                      <label for="firstname">Username</label>
                      <input type="text" class="form-control" id="firstname" name="firstname">
                    </div>
                    <div class="form-group">
                      <label for="email">Email</label>
                      <input type="text" class="form-control" id="email" name="email">
                    </div>
                    <div class="form-group">
                      <label for="password">password</label>
                      <input type="password" class="form-control" id="password" name="password">
                    </div> -->
                    <div class="form-row">
                      <div class="form-group col-md-4">
                        <label for="id_prodi">Prodi</label>
                        <select class="form-control" name="id_prodi">
                          <?php $no = 1;
                          foreach ($prodi as $y => $value) { ?>
                            <option value="<?= $no++ ?>"><?= $value['nama_prodi']; ?></option>
                          <?php } ?>
                        </select>
                      </div>

                      <div class="form-group col-md-4">
                        <label for="id_konsentrasi">Konsentrasi</label>
                        <select class="form-control" name="id_konsentrasi">
                          <?php $no = 1;
                          foreach ($konsentrasi as $y => $value) { ?>
                            <option value="<?= $no++ ?>"><?= $value['nama_konsentrasi']; ?></option>
                          <?php } ?>
                        </select>
                      </div>

                      <div class="form-group col-md-4">
                        <label for="id_jenjang">Jenjang</label>
                        <select class="form-control" name="id_jenjang">
                          <?php $no = 1;
                          foreach ($jenjang as $y => $value) { ?>
                            <option value="<?= $no++ ?>"><?= $value['nama_jenjang']; ?></option>
                          <?php } ?>
                        </select>
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
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- /.col -->



  <!-- /.row -->

  <!-- /.direct-chat-pane -->
</section>
<script>
  var base_url = '<?php echo base_url() ?>';
  const getUserAsync = async () => {
    let response = await fetch(`${base_url}/mahasiswaapi`);
    let data = await response.json()
    return data;
  };

  getUserAsync()
    .then(data => {
      let parse = '';
      data.forEach(r => parse += showCards(r));
      const cardsContainer = document.querySelector('.card-mahasiswa');
      cardsContainer.innerHTML = parse;
    });

  const showCards = r => {
    let warna;
    if (r.id_prodi == 1) {
      warna = 'danger';
    } else if (r.id_prodi == 2) {
      warna = 'success';
    } else {
      warna = 'info';
    }
    return `
    <div class="col-md-3">
            <div class="card card-widget widget-user">
              <div class="widget-user-header bg-${warna}">
                <h3 class="widget-user-username text-right">
                  <font color="white"> ${r.nama_mahasiswa}
                  </font>
                </h3>
                <h5 class="widget-user-desc text-right">${r.kode_prodi} - ${r.kode_konsentrasi} - ${r.kode_jenjang}</h5>
              </div>
              <div class="widget-user-image">
                <img class="img-circle" src="/uploads/${r.gambar}" alt="User Avatar">
              </div>
              <div class="card-footer">
                <div class="row">
                  <div class="col-sm-4 border-right">
                    <div class="description-block">
                      <button type="button" class="btn btn-info" data-toggle="modal" data-target="#detailModal"><i class="fa fa-file"></i></button>
                    </div>
                  </div>
                  <div class="col-sm-4 border-right">
                    <div class="description-block">
                      <button type="button" class="btn btn-success" data-toggle="modal" data-target="#editModal"><i class="fa fa-magic"></i></button>
                    </div>
                  </div>
                  <div class="col-sm-4">
                    <div class="description-block">
                      <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#hapusModal"><i class="fa fa-trash"></i></button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
    `;
  };
</script>
<?= $this->endSection(); ?>