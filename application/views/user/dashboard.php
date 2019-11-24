<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Mari Terbang</title>

    <!-- Custom fonts for this template-->
    <link href="<?= base_url('asset/'); ?>fontawesome-free-5.10.1-web/css/all.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?= base_url('vendor/'); ?>sbadmin2/css/sb-admin-2.min.css" rel="stylesheet">
    <link href="<?= base_url('asset/'); ?>css/bootstrap-grid.min.css" rel="stylesheet">
    <link href="<?= base_url('asset/'); ?>css/bootstrap.min.css" rel="stylesheet">

</head>
<style>
    .btn {
        border-radius: 24px;
        margin-left: 35%;
        margin-top: 89px;
        width: 150px;
        position: absolute;
        z-index: 1;


    }

    .vapor {
        width: 750px;
        height: 1px;
        padding: 3rem;
        background: white;
        margin-top: 20px;
    }

    .img {
        margin-top: 20px;
        width: 150%;
        height: 367px;
        object-fit: fill;
        margin-left: 155px;
        border-radius: 20px;

    }

    .col-lg-6 {
        margin-left: 26%;
        margin-top: 250px;
        height: 20%;
        border-radius: 35%;
    }

    .nav-ichi {
        margin-top: 7px;
        background-color: white;
    }
</style>


<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">
        <div class="nav-ichi">
            <nav class="navbar navbar-expand-lg">
                <a class="navbar-brand" href="#">TiketinAja</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">History Pemesanan</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Log-Out</a>
                        </li>

                    </ul>
                </div>
            </nav>
        </div>


        <!-- Begin Page Content -->
        <div class="container-fluid">

            <!-- Page Heading -->
            <div class="vapor ">

                <img class="img shadow" src="<?= base_url('asset/'); ?>city1.jpg">

            </div>
            <div class="col-lg-6">

                <!-- Default Card Example -->
                <!-- <div class=" card-header" style="width:20%; margin-top: 35%;">
                    <i class="fas fa-plane" style="color:cornflowerblue;"></i>
                    Pesawat
                </div> -->
                <div class="card shadow mb-4 box-search">
                    <div class="card-body">
                        <form method="get" action="<?= base_url('User/search') ?>">
                            <div class="row">
                                <div class="col-sm-auto">
                                    <label for="message-text" class="col-form-label">Departure</label>
                                    <div class="input-group input-group-sm mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="inputGroup-sizing-sm">
                                                <i class="fas fa-plane-departure" style="color:orange"></i>
                                            </span>
                                        </div>
                                        <select class="form-control" type="text" id="rute_awal" required name="rute_awal" placeholder="pilih kota asal..." style="width: 80%;">
                                            <option value="" disabled selected>Pilih Kota Awal....</option>
                                            <?php
                                            foreach ($rute_awal as $p) { ?>
                                                <option value="<?php echo $p->rute_awal; ?>"><?php echo $p->rute_awal; ?></option>
                                            <?php    } ?>

                                        </select>
                                    </div>
                                </div>

                                <div class="col-sm">
                                    <label for="message-text" class="col-form-label">Arrival</label>
                                    <div class="input-group input-group-sm mb-3">

                                        <div class=" input-group-prepend">
                                            <span class="input-group-text" id="inputGroup-sizing-sm">

                                                <i class="fas fa-plane-arrival" style="color:orange"></i>
                                            </span>
                                        </div>

                                        <select class="form-control" type="text" required id="rute_akhir" name="rute_akhir" placeholder="pilih tujuan..." style="width: 80%;">
                                            <option value="" disabled selected>Pilih Tujuan....</option>
                                            <?php

                                            foreach ($rutep as $a) { ?>
                                                <option value="<?php echo $a->rute_akhir ?>"><?php echo $a->rute_akhir; ?></option>
                                            <?php    } ?>

                                        </select>
                                        <?= form_error('rute_akhir', '<small class="text-danger pl-3" >', '</small>'); ?>
                                    </div>
                                </div>

                                <div class="col-sm">
                                    <label for="message-text" class="col-form-label">Date</label>
                                    <div class="input-group input-group-sm mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="inputGroup-sizing-sm">
                                                <i class="far fa-calendar-alt" style="color:red"></i>
                                            </span>
                                        </div>
                                        <input type="date" class="form-control"  required min="<?php echo date('Y-m-d'); ?>" name="date" placeholder="Username" style="width: 80%;" aria-label="Username" aria-describedby="basic-addon1">
                                    </div>

                                </div>

                                <button type="submit" class="btn btn-info btn-icon-spli">
                                    <span class=" icon text-white-50">
                                        <i class="fas fa-search"></i>
                                    </span>
                                    <span class="text">Cari</span>
                                </button>


                            </div>
                        </form>
                    </div>
                </div>

                <!-- bateas -->
                <!-- <div class="card mb-4 box-search">
                    <div class="card-body">
                        <form method="get" action="<?= base_url('User/search') ?>">
                            <div class="row">
                                <div class="col-sm">


                                    <label for="message-text" class="col-form-label">Departure</label>
                                    <div class="input-group input-group-sm mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="inputGroup-sizing-sm">
                                                <i class="fas fa-plane-departure" style="color:orange"></i>
                                            </span>
                                        </div>
                                        <select class="form-control" type="text" name="rute_awal" placeholder="pilih kota asal..." style="width: 80%;">
                                            <option value="" disabled selected>Pilih Kota Awal....</option>
                                            <?php
                                            foreach ($rute_awal as $p) { ?>
                                                <option value="<?php echo $p->rute_awal; ?>"><?php echo $p->rute_awal; ?></option>
                                            <?php    } ?>

                                        </select>
                                    </div>
                                </div>

                                <div class="col-sm">
                                    <label for="message-text" class="col-form-label">Arrival</label>
                                    <div class="input-group input-group-sm mb-3">

                                        <div class=" input-group-prepend">
                                            <span class="input-group-text" id="inputGroup-sizing-sm">

                                                <i class="fas fa-plane-arrival" style="color:orange"></i>
                                            </span>
                                        </div>

                                        <select class="form-control" type="text" name="rute_akhir" placeholder="pilih tujuan..." style="width: 80%;">
                                            <option value="" disabled selected>Pilih Tujuan....</option>
                                            <?php

                                            foreach ($rutep as $a) { ?>
                                                <option value="<?php echo $a->rute_akhir ?>"><?php echo $a->rute_akhir; ?></option>
                                            <?php    } ?>

                                        </select>
                                    </div>
                                </div>

                                <div class="col-sm">
                                    <label for="message-text" class="col-form-label">Date</label>
                                    <div class="input-group input-group-sm mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="inputGroup-sizing-sm">
                                                <i class="far fa-calendar-alt" style="color:red"></i>
                                            </span>
                                        </div>
                                        <input type="date" class="form-control" min="<?php echo date('Y-m-d'); ?>" placeholder="Username" style="width: 80%;" aria-label="Username" aria-describedby="basic-addon1">
                                    </div>

                                </div>
                            </div>
                    </div>

                </div>

                <button type="button" class="btn btn-info btn-icon-spli">
                    <span class=" icon text-white-50">
                        <i class="fas fa-search"></i>
                    </span>
                    <span class="text">Cari</span>
                </button>
                </form>
            </div> -->



            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- End of Main Content -->
    </div>
    <!-- End of Content Wrapper -->



    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

</body>

</html>