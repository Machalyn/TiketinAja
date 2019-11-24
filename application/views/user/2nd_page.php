<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Hasil Pencarian</title>

    <link href="<?= base_url('vendor/'); ?>sbadmin2/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
    <link href="<?= base_url('asset/'); ?>css/bootstrap.min.css" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="<?= base_url('asset/'); ?>fontawesome-free-5.10.1-web/css/all.css" rel="stylesheet">
</head>
<style>
    .table-responsive {
        margin-top: 20%;
    }

    .card {
        width: 80%;
        height: 40%;
        margin-top: 345px;
        margin-left: 160px;
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
</style>

<body>
    <div id="wrapper">
        <div class="nav-ichi">
            <nav class="navbar navbar-expand-lg">
                <a class="navbar-brand" href="#">Navbar</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Features</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Pricing</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Dropdown link
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <a class="dropdown-item" href="#">Something else here</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
        <div class="container-fluid">
            <div class="vapor ">

                <img class="img shadow" src="<?= base_url('asset/'); ?>vaporrain.jpg">

            </div>
            <!-- Editable table -->
            <div class="card shadow">
                <!-- <div class="card-header">
                <h6 class="m-0 font-weight-bold text-primary">Rute Kereta</h6>
            </div> -->

                <div class="card-body">
                    <table class=" table" id="dataTable" style="margin-top:10px;" cellspacing="0">

                        <thead>
                            <tr>
                                <th style="color:#66b3ff;">ID Rute</th>
                                <th style="color:#66b3ff;">Rute Awal</th>
                                <th> </th>
                                <th style="color:#66b3ff;">Rute Akhir</th>
                                <th style="color:#66b3ff;">Harga</th>
                                <th style="color:#66b3ff;">Pesawat</th>
                                <th style="color:#66b3ff;">Jam Berangkat</th>
                                <th style="color:#66b3ff;">Jam Tiba</th>
                                <th style="color:#66b3ff;">Action</th>

                            </tr>
                        </thead>

                        <tbody>

                            <?php

                            foreach ($rutew as $rp) { ?>
                                <tr>
                                    <td><?= $rp->id_rute ?></td>
                                    <td><?= $rp->rute_awal ?></td>
                                    <td><span><i class="fas fa-plane" style="color: #18A4e0;"></i></span></td>

                                    <td><?= $rp->rute_akhir ?></td>
                                    <td style="color: orange;"><?= $rp->harga ?></td>
                                    <td><?= $rp->nama ?></td>
                                    <td><?= $rp->jam_berangkat ?></td>
                                    <td><?= $rp->jam_tiba ?></td>
                                    <td>
                                        <?php
                                            $rute_awal = $_GET['rute_awal'];
                                            $rute_akhir = $_GET['rute_akhir'];
                                            $date = $_GET['date'];

                                            ?>

                                        <a href="<?php echo base_url() . "User/Pilih?rute_awal={$rute_awal}&&rute_akhir={$rute_akhir}&&date={$date}&&nama={$rp->nama}"; ?>">
                                            <button type="button" style=" width: 150px;" class="btn btn-warning" data-toggle="modal">

                                                <span class="text" style="color: white;">Pilih</span>
                                            </button>
                                        </a>
                                    </td>
                                <?php    } ?>
                                </tr>
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
</body>

</html>