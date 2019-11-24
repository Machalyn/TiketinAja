<div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

        <div class="col-lg-7">

            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">
                    <!-- Nested Row within Card Body -->
                    <div class="row">

                        <div class="col-lg">
                            <div class="p-5">
                                <div class="text-center">
                                    <h1 style="color:#6666ff;">LOGIN</h1>
                                </div>
                                <div class="center" style="margin-left: 31%">
                                    <img src="<?= base_url('asset/'); ?>tiketinaja_login.png">
                                </div>
                                <?= $this->session->flashdata('message') ?>

                                <form class="user" method="post" action="<?= base_url('User'); ?>">

                                    <div class="form-group">
                                        <input type="text" class="form-control form-control-user" id="username" name="username" placeholder="Masukkan Username..." value="<?= set_value('username'); ?>">
                                        <?= form_error('username', '<small class="text-danger pl-3" >', '</small>'); ?>
                                    </div>

                                    <div class=" form-group">
                                        <input type="password" class="form-control form-control-user" id="password" name="password" placeholder="Password">
                                        <?= form_error('password', '<small class="text-danger pl-3" >', '</small>'); ?>
                                    </div>
                                    <button type=" submit" class=" btn btn-primary btn-user btn-block">
                                        Login
                                    </button>

                                </form>
                                <hr>
                                <div class="text-center">
                                    <a class="small" href="">Ga login Ga Asix</a>
                                </div>
                                <div class="text-center">
                                    <a class="small" href="<?= base_url('User/register'); ?>">Create an Account!</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>

</div>