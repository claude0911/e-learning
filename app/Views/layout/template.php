<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title; ?></title>
    <?= $this->include('template/frontend/home/css'); ?>
</head>

<body>
    <header>

        <div class="fixed-top">




            <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed">
                <div class="fixed-top">
                    <div class="collapse" id="navbarToggleExternalContent">
                        <div class="bg-dark p-4">
                            <h5 class="text-white h4">Collapsed content</h5>
                            <span class="text-muted">Toggleable via the navbar brand.</span>
                        </div>
                    </div>

                </div>

                <a href="/"><img src="/img/logo.png" alt="logo"></a>
                <div class="collapse navbar-collapse ml-5" id="navbarSupportedContent">
                    <form class="form-inline my-2 my-lg-0">
                        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                    </form>
                </div>
                <ul class="navbar-nav mr-5">
                    <?php $x = session()->get('username'); ?>
                    <?php if ($x) : ?>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" style="margin-right:50px;" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <?= $x; ?>
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="/logout">Logout</a>
                            </div>
                        </li>
                    <?php else :  ?>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Beranda/tentang</a>
                        </li>
                        <div class="col-sm-6">
                            <li class="nav-item">
                                <a class="nav-link" href="/login">Login</a>
                            </li>
                        <?php endif; ?>
                </ul>
            </nav>
    </header>
    <!-- Modal Login
    <div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Login</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="<?php echo base_url('User/proses_login') ?>" method="post" class="needs-validation" novalidate>
                        <div class="form-group">
                            <label for="validationTooltip03">Email Address</label>
                            <input type="text" name="email" id="email" class="form-control" id="validationTooltip03" value="" required>
                            <div class="invalid-tooltip" style="position: relative; z-index : 1151 !important; z-index : 1151 !important;">
                                Masukan Email.
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" name="password" id="password" class="form-control" id="validationTooltip03" value="" required>
                            <div class="invalid-tooltip" style="position: relative; z-index : 1151 !important; z-index : 1151 !important;">
                                Masukan Password.
                            </div>
                        </div>

                        <div class="row align-items-center">
                            <div class="col-md">
                                <button type="submit" class="btn btn-success">Login</button>
                            </div>
                            <div class="col-md text-right">
                                <a href="/register">Belum punya akun !?</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div> -->



    <?= $this->renderSection('content'); ?>
    <?= $this->include('layout/footer'); ?>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <?= $this->include('template/frontend/home/js'); ?>


</body>

</html>