<div class="auth-wrapper d-flex no-block justify-content-center align-items-center position-relative mt-4" style="background:url(<?= base_url() ?>files/assets/images/big/auth-bg.jpg) no-repeat center center;">
        <div class="col-sm-5 bg-white">
            <div class="p-3">
                <h2 class="mt-3 text-center">Selamat Datang!</h2>
                <p class="text-center"><i>Sistem Diagnosa Kerusakan Motor</i></p>
                <form class="mt-4" method="POST" action="<?= base_url('konsultasi/add') ?>">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label class="text-dark" for="uname">Nama Lengkap</label>
                                <input class="form-control" id="nama" name="nama" type="text" required>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label class="text-dark" for="pwd">Email</label>
                                <input class="form-control" id="email" name="email" type="text" required>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label class="text-dark" for="pwd">Sistem Pengapian</label>
                                <select class="form-control" name="merek" required>
                                    <option value="" selected disabled>Pilih Sitem Pengapian</option>
                                    <?php foreach ($merek as $m) : ?>
                                        <option value="<?= $m['nama'] ?>"><?= $m['nama'] ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label class="text-dark" for="pwd">Seri Motor</label>
                                <select class="form-control" name="seri">
                                    <option value="" selected disabled>Pilih Seri</option>
                                    <?php foreach ($seri as $s) : ?>
                                        <option value="<?= $s['nama'] ?>"><?= $s['nama'] ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-12 text-center">
                            <button type="submit" class="btn btn-block btn-dark">Mulai Konsultasi</button>
                            <hr>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>