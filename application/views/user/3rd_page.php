<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>pemeriksaan data</title>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

    <script src="<?= base_url('asset/'); ?>sweetalert2/dist/sweetalert2.min.js"></script>
    <link rel="stylesheet" href="<?= base_url('asset/'); ?>sweetalert2/dist/sweetalert2.min.css">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-beta.3/css/bootstrap.css" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="<?= base_url('asset/'); ?>fontawesome-free-5.10.1-web/css/all.css" rel="stylesheet">

    <link href="<?= base_url('vendor/'); ?>sbadmin2/css/sb-admin-2.min.css" rel="stylesheet">
    <link href="<?= base_url('asset/'); ?>css/bootstrap-grid.min.css" rel="stylesheet">
    <link href="<?= base_url('vendor/'); ?>sbadmin2/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
    <link href="<?= base_url('asset/'); ?>css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
                <tr>
                    <th>ID Penumpang</th>
                    <th>Nama Penumpang</th>
                    <th>title</th>
                    <th>telpon</th>
                </tr>
            </thead>
            <tfoot>
                <tr>
                    <th>ID Pesawat</th>
                    <th>Nama Penumpang</th>
                    <th>title</th>
                    <th>telpon</th>
                </tr>
            </tfoot>
            <tbody>

                <?php

                foreach ($coba as $p) { ?>
                    <tr>
                        <td><?php echo $p['id_penumpang']; ?></td>
                        <td><?php echo $p['nama_penumpang']; ?></td>
                        <td><?php echo $p['title']; ?></td>
                        <td><?php echo $p['telpon']; ?></td>

                        <td>



                        <?php    } ?>
                    </tr>

            </tbody>
        </table>
    </div>
</body>