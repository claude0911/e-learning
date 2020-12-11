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
          <li class="breadcrumb-item">Data Dosen</li>
          <li class="breadcrumb-item active">List Dosen</li>
        </ol>
      </div><!-- /.col -->
    </div><!-- /.row -->
  </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->
<section class="content">
  <div class="card card-success card-outline">
    <div class="card-header">
      <h3 class="card-title">Data Dosen</h3>
      <button type="button" class="btn btn-success" style="float: right;" data-toggle="modal" data-target="#tambahModal"><i class="fa fa-user-plus"></i>
      </button>

      <!-- /.card-tools -->
    </div>
    <!-- /.card-header -->
    <div class="card-body">
      <!-- Widget: user widget style 1 -->
      <div class="card-body">
        <?= d($dosen); ?>
        <div class="row card-dosen">


        </div>
      </div>
      <!-- /.widget-user -->
    </div>
    <!-- /.card-body -->
  </div>
  <div class="modal fade" id="tambahModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Tambah Dosen</h5>
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
                  <form method="post" enctype="multipart/form-data" action="Dosen/tambahdosen">
                    <?= csrf_field(); ?>
                    <div class="form-group">
                      <label for="nip">NIP</label>
                      <input type="text" class="form-control" id="nip" name="nip">
                    </div>
                    <div class="form-group">
                      <label for="nama_dosen">Nama Dosen</label>
                      <input type="text" class="form-control" id="nama_dosen" name="nama_dosen">
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
  <script>
    var base_url = '<?php echo base_url() ?>';
    const getUserAsync = async () => {
      let response = await fetch(`${base_url}/dosenapi`);
      let data = await response.json()
      return data;
    };

    getUserAsync()
      .then(data => {
        let parse = '';
        data.forEach(r => parse += showCards(r));
        const cardsContainer = document.querySelector('.card-dosen');
        cardsContainer.innerHTML = parse;
      });

    const showCards = r => {
      return `
    <div class="col-md-3">
            <div class="card card-widget widget-user">
              <div class="widget-user-header bg-success">
                <h3 class="widget-user-username text-right">
                  <font color="white"> ${r.nama_dosen}
                  </font>
                </h3>
                <h5 class="widget-user-desc text-right"></h5>
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
</section>
<?= $this->endSection(); ?>