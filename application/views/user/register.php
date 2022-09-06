<div class="auth-wrapper d-flex no-block justify-content-center align-items-center position-relative mt-4" style="background:url(<?= base_url() ?>files/assets/images/big/auth-bg.jpg) no-repeat center center;">
    <div class="col-sm-5 bg-white">
        <div class="p-3">
            <h2 class="mt-3 text-center">Selamat Datang!</h2>
            <p class="text-center"><i>Sistem Diagnosa Kerusakan Motor</i></p>
            <?php if($this->session->has_userdata('success')): ?>
                    <div class="alert alert-mini alert-success mb-30">
                    <?= $this->session->userdata('success')?>
              </div>
            <?php endif; ?>
            <?= validation_errors('<div class="alert alert-mini alert-danger mb-30">', '</div>');?>
            <form class="mt-4" method="POST" action="<?= base_url('home/register') ?>">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label class="text-dark" for="uname">Username</label>
                            <input type="text" name="username" required oninvalid="this.setCustomValidity('Username tidak boleh kosong')" oninput="setCustomValidity('')" class=" form-control" placeholder="Username">
                        </div>
                    </div>

                    <div class="col-lg-12">
                        <div class="form-group">
                            <label class="text-dark" for="name">Nama Lengkap</label>
                            <input type="text" name="nama" required oninvalid="this.setCustomValidity('Nama tidak boleh kosong')" oninput="setCustomValidity('')" class=" form-control" placeholder="Nama">
                        </div>
                    </div>
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
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label class="text-dark" for="re-password">Ulangi Password</label>
                            <input type="password" name="re-password" required oninvalid="this.setCustomValidity('Password tidak boleh kosong')" oninput="setCustomValidity('')" class=" form-control" placeholder="Password">
                        </div>
                    </div>
                    <div class="col-lg-12 text-center">
                        <button type="submit" class="btn btn-block btn-dark">Register</button>
                        <hr>
                        <a href="<?= site_url('home/login');?>">
                            <i class=""></i> &nbsp; have an account yet ? Sign in</i>
                        </a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>