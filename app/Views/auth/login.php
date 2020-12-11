<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>login</title>
    <?= $this->include('template/frontend/login/css'); ?>
</head>

<body>
    <div class="form" id="form" style="background-image: linear-gradient(to bottom, #00c6fb 0%, #005bea 100%);">
        <a href="/login/mahasiswa" class="btn btn-success">Login as Mahasiswa</a>
        <a href="/login/dosen" class="btn btn-warning" style="float:right;">Login as Dosen</a>
    </div>
    <?= $this->include('template/frontend/login/js'); ?>
</body>

</html>