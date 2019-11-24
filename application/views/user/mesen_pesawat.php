<!DOCTYPE html>
<span lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Booking Pesawat</title>

        <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-beta.3/css/bootstrap.css" rel="stylesheet">
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
        <link href="<?= base_url('asset/'); ?>fontawesome-free-5.10.1-web/css/all.css" rel="stylesheet">

        <link href="<?= base_url('asset/'); ?>css/bootstrap-grid.min.css" rel="stylesheet">
        <link href="<?= base_url('asset/'); ?>css/bootstrap.min.css" rel="stylesheet">
        <link href="<?= base_url('vendor/'); ?>sbadmin2/css/sb-admin-2.min.css" rel="stylesheet">
    </head>
    <style>

    </style>

    <span id="page-top">
        <div id="wrapper">

            <div class="row">
                <?php
                $rute_awal = $_GET['rute_awal'];
                $rute_akhir = $_GET['rute_akhir'];
                $date = $_GET['date'];
                $nama = $_GET['nama'];

                ?>

                <div class="col-sm-6">
                    <div class="di" style="margin-top: 10%;margin-left: 60px;">
                        <h3>Data Traveller</h3>
                        <h6>Mohon Isikan Data Sesuai Kartu Identitas</h6>
                    </div>

                    <div class="card shadow" style="width: 30wv; wif ; margin-left: 60px;">
                        <div class="card-body">
                            <form action="<?php echo base_url() . 'User/input_pen'; ?>" method="post">

                                <input type="text" class="form-control" hidden id="recipient-name" name="id_penumpang">

                                <div class="form-group">
                                    <label for="recipient-name" class="col-form-label">Title</label>
                                    <select class="form-control" required style="width:25%" type="text" id="title" name="title" placeholder="pilih kota asal..." style="width: 80%;">
                                        <option value="" disabled selected></option>
                                        <option value="Tuan">Tuan</option>
                                        <option value="Nyonya">Nyonya</option>
                                        <option value="Nona">Nona</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="recipient-name" class="col-form-label">Nama Lengkap</label>
                                    <span style="color: red;">*</span>
                                    <input type="text" class="form-control" required style="width:90%" id="recipient-name" name="nama_penumpang" required>
                                </div>


                                <div class="form-group">
                                    <label for="message-text" class="col-form-label">Nomor Telpon</label>
                                    <span style="color: red;">*</span>
                                    <input type="text" class="form-control" required style="width:90%" id="message-text" required name="telpon"></textarea>
                                </div>

                        </div>
                    </div>
                </div>

                <div class="col-sm-6">
                    <div class="card shadow" style="width: 378px; height: 70%;margin-top: 20%; margin-left: 90px;">
                        <div class="card-body">
                            <a href="" class="nav-link" style="margin-left:150px;">
                                <i style="color: #1aa3ff; margin-left:80px;" class="fas fa-search"></i>
                                <span>Detail
                                </span>
                            </a>
                            <div class="round">
                                <span style="color: #ccccb3; font-weight:bold;">O</span>
                                <span style="color:   #8c8c8c">From</span>
                                <br>
                            </div>

                            <div class="vl" style=" border-left: 3px solid  #e0e0d1 ;  height: 50px; margin-left:4px">
                                <span style="margin-left:10px;"><?php $rute_awal = $_GET['rute_awal'];
                                                                echo $rute_awal ?></span>
                            </div>

                            <div class="round2">
                                <span style="color: #88D9F3; font-weight:bold;">O</span>
                                <span style="color:  #99ccff">To</<br><br>
                                    <span style="margin-left:18px;"><?php $rute_akhir = $_GET['rute_akhir'];
                                                                    echo $rute_akhir ?></span>
                            </div>
                            <hr style="border-color: #e0e0d1">
                            <span>Departure</span>
                            <span>•</span>
                            <span><?php $date = $_GET['date'];
                                    echo $date ?></span><br>

                            <div class="div" style="display: inline-block">
                                <img src="<?= base_url('asset/'); ?>pecawat.gif" alt="this slowpoke moves" style=" margin-bottom:25px; margin-left: 150px; float:right;" width=120 />
                                <span style="float:left; margin-top: 35px; font-weight:bold; color: red;"><?php $nama = $_GET['nama'];
                                                                                                            echo $nama ?></span><br>
                                <span style="color: #8c8c8c;">plane</span>
                            </div>
                        </div>
                    </div>
                </div>
                <button type="submit" style="margin-left:500px;" class="btn btn-primary btn-icon-spli">
                    <span class="text" style="color:white;">Lanjutkan Pemesanan</span>
                </button>
                </form>

            </div><!-- end of row -->
        </div><!-- end of wrapper -->

    </span>