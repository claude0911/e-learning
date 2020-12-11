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

<div class="container-fluid">

    <div class="card card-success">
      <div class="card-header">
        <h3 class="card-title">Success Outline</h3>

        <button type="button" class="btn btn-warning " style="float: right;" data-toggle="modal" data-target="#tambahModal"><i class="fa fa-clipboard"></i>
        </button>

        <!-- /.card-tools -->
      </div>
      <!-- /.card-header -->
      <div class="card-body">
      <div class="card-body">
   
      <table class="table table-bordered">
        <thead>
          <tr class="text-center">
            <th>NO</th>
            <th>Nama Dosen</th>
            <th>Mata kuliah</th>
            <th>Deskripsi</th>
            <th>Prodi</th>
            <th>Option</th>

          </tr>
        </thead>
        <tbody>
          
            <tr class="text-center">
              <td></td>
              <td></td>
              <td>
                <div class=>
                  <div></div>
                </div>
              </td>
              <td>...........</td>
              <td>............</span></td>
              <td><button type="button" class="btn btn-success" style="
    margin-right: 10px;"><i class="fa fa-magic"></i></button><button type="button" class="btn btn-danger"><i class="fa fa-trash"></i></button></span></td>
            </tr>
        

        </tbody>
      </table>



    </div>

      </div>
      <!-- /.card-body -->
    </div>
    <!-- /.card -->
  </div>

<section class="content">

  <!-- /.col -->

  <!-- /.row -->

  <!-- /.direct-chat-pane -->
</section>
<?= $this->endSection(); ?>