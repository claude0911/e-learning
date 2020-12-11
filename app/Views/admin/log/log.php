<?= $this->extend('admin/ad'); ?>
<?= $this->section('content'); ?>
<!-- Content Header (Page header) -->
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0 text-dark">Activites</h1>
          Bulan dan Tahun 
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item active">Dashboard v1</li>
        </ol>
      </div><!-- /.col -->
    </div><!-- /.row -->
  </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<!-- Main content -->

<br>
<section class="content">
  <div class="row">
    <div class="col-md-3">
      <div class="card card-primary collapsed-card">
        <div class="card-header">
          <h3 class="card-title">2 min ago</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
            </button>
          </div>
          <br>
          <!-- /.card-tools -->
        </div>
        <!-- /.card-header -->
        <div class="card-body">
          Keterangan Log
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card --> <br>
    </div>
  </div>
  <div class="row">
    <div class="col-md-3">

    </div>
    
    <div class="col-md-3">
      <div class="card card-success">
        <div class="card-header">
          <h3 class="card-title">8 min ago</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
             </button>
          </div>
          
          <!-- /.card-tools -->
        </div>
        <!-- /.card-header -->
        <div class="card-body" style="display: none;">
          Keterangan Log
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card --> <br>
    </div>

  </div>
  <div class="row">
    <div class="col-md-3">
      <div class="card card-danger">
        <div class="card-header">
          <h3 class="card-title">20 min ago</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
            </button>
          </div>
          <!-- /.card-tools -->
        </div>
        <!-- /.card-header -->
        <div class="card-body" style="display: none;">
          Keterangan Log
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
    </div>
  </div>
</section>

<?= $this->endSection(); ?>