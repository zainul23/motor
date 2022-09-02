<div class="auth-wrapper d-flex no-block justify-content-center align-items-center position-relative mt-4" style="background:url(<?= base_url() ?>files/assets/images/big/auth-bg.jpg) no-repeat center center;">
    <div class="col-sm-5 bg-white">
        <div class="p-3">
            <h2 class="mt-3 text-center">Selamat Datang!</h2>
            <p class="text-center"><i>Sistem Pakar Diagnosa Kerusakan Motor</i></p>
            <!-- <?php dump($this->session) ?> -->
                <?php if($this->session->has_userdata('error')): ?>
                    <div class="alert alert-mini alert-danger mb-30">
                        <?= $this->session->userdata('error')?>
                    </div>
                <?php endif; ?>
            <!-- <?= validation_errors('<div class="alert alert-mini alert-danger mb-30">', '</div>');?> -->
            <form class="mt-4" method="POST" action="<?= base_url('home/login') ?>">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label class="text-dark" for="email">Email</label>
                            <input class="form-control" id="email" name="email" type="email" value="" autocomplete="off">
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label class="text-dark" for="password">Password</label>
                            <input class="form-control" id="password" name="password" type="password" autocomplete="off">
                        </div>
                    </div>
                    <div class="col-lg-12 text-center">
                        <button type="submit" class="btn btn-block btn-dark">Login</button>
                        <!-- Distributed by <a href="https://blogbugabagi.blogspot.com" target="_blank" rel="noopener noreferrer">BlogBugaBagi</a> -->
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>