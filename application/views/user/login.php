<div class="auth-wrapper d-flex no-block justify-content-center align-items-center position-relative mt-4" style="background:url(<?= base_url() ?>files/assets/images/big/auth-bg.jpg) no-repeat center center;">
    <div class="col-sm-5 bg-white">
        <div class="p-3">
            <h2 class="mt-3 text-center">Selamat Datang!</h2>
            <p class="text-center"><i>Sistem Diagnosa Kerusakan Motor</i></p>
            <!-- <?php dump($this->session) ?> -->
                <?php if($this->session->has_userdata('success')): ?>
                        <div class="alert alert-mini alert-success mb-30">
                        <?= $this->session->userdata('success')?>
                </div>
                <?php endif; ?>
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
                            <input type="text" name="email" required oninvalid="this.setCustomValidity('Email tidak boleh kosong')" oninput="setCustomValidity('')" class=" form-control" placeholder="Email">
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label class="text-dark" for="password">Password</label>
                            <input type="password" name="password" required oninvalid="this.setCustomValidity('Password tidak boleh kosong')" oninput="setCustomValidity('')" class=" form-control" placeholder="Password">
                        </div>
                    </div>
                    <div class="col-lg-12 text-center">
                        <button type="submit" class="btn btn-block btn-dark">Login</button>
                        <hr>
                        <a href="<?= site_url('home/register');?>">
                                <i class=""></i> &nbsp; Don't have an account yet?
                        </a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>