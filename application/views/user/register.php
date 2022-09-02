<div class="auth-wrapper d-flex no-block justify-content-center align-items-center position-relative mt-4" style="background:url(<?= base_url() ?>files/assets/images/big/auth-bg.jpg) no-repeat center center;">
    <div class="col-sm-5 bg-white">
        <div class="p-3">
            <h2 class="mt-3 text-center">Selamat Datang!</h2>
            <p class="text-center"><i>Sistem Pakar Diagnosa Kerusakan Motor</i></p>
            <?php if($this->session->has_userdata('success')): ?>
                    <div class="alert alert-mini alert-success mb-30">
                    <?= $this->session->userdata('success')?>
              </div>
            <?php endif; ?>
            <?= validation_errors('<div class="alert alert-mini alert-danger mb-30">', '</div>');?>
            <form class="mt-4" method="POST" action="<?= base_url('home/post_register') ?>">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label class="text-dark" for="uname">Username</label>
                            <input class="form-control" id="username" name="username" type="text" value="<?php echo set_value('username') ?>" autocomplete="off">
                        </div>
                    </div>

                    <div class="col-lg-12">
                        <div class="form-group">
                            <label class="text-dark" for="name">Nama Lengkap</label>
                            <input class="form-control" id="nama" name="nama" type="text" value="<?php echo set_value('nama') ?>" autocomplete="off">
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label class="text-dark" for="email">Email</label>
                            <input class="form-control" id="email" name="email" type="email" value="<?php echo set_value('email') ?>" autocomplete="off">
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label class="text-dark" for="password">Password</label>
                            <input class="form-control" id="password" name="password" type="password" autocomplete="off">
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label class="text-dark" for="re-password">Re-Type Password</label>
                            <input class="form-control" id="re-password" name="re-password" type="password" autocomplete="off">
                        </div>
                    </div>
                    <div class="col-lg-12 text-center">
                        <button type="submit" class="btn btn-block btn-dark">Register</button>
                        <!-- Distributed by <a href="https://blogbugabagi.blogspot.com" target="_blank" rel="noopener noreferrer">BlogBugaBagi</a> -->
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>