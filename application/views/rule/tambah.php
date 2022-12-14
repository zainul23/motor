<div class="page-wrapper">
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-7 align-self-center">
                <h4 class="page-title text-truncate text-dark font-weight-medium mb-1"><?= $title ?></h4>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="card">
            <div class="card-body">
                <form class="mt-4" action="<?= base_url('rule/insert') ?>" method="POST">
                    <h5 class="card-title">Gejala</h5>
                    <div class="form-group mb-4">
                        <select class="form-control col-sm-4" name="gejala_id" required>
                            <option value="">Pilih Gejala</option>
                            <?php foreach ($gejala as $g) : ?>
                                <option value="<?= $g['id_gejala'] ?>"><?= $g['kode_gejala'] . ' - ' . $g['gejala'] ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <h5 class="card-title">Gejala Sebelumnya</h5>
                    <div class="form-group mb-4">
                        <select class="form-control col-sm-4" name="gejala_parent">
                            <!-- <option value="">Pilih Gejala</option> -->
                            <!-- <option hidden selected value="<?= $rule['parent'] ?>"><?= $rule['kode_gejala'] . ' - ' . $rule['gejala'] ?></option> -->
                            <!-- <input type="hidden" value="<?= $rule['parent'] ?>"> -->
                            <?php foreach ($gejala as $g) : ?>
                                <option  <?= $g['kode_gejala'] === $rule['parent'] ? 'selected' :''; ?> value="<?= $g['kode_gejala'] ?>"><?= $g['kode_gejala'] . ' - ' . $g['gejala'] ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <h5 class="card-title">Gejala / Kerusakan Ya</h5>
                    <div class="form-group mb-4">
                        <select class="form-control col-sm-4" name="gejala_ya" required>
                            <option value="">Pilih Gejala / Kerusakan</option>
                            <option value="">#Gejala</option>
                            <?php foreach ($gejala as $g) : ?>
                                <option value="<?= $g['kode_gejala'] ?>"><?= $g['kode_gejala'] . ' - ' . $g['gejala'] ?></option>
                            <?php endforeach; ?>
                            <option value="">#Kerusakan</option>
                            <?php foreach ($kerusakan as $k) : ?>
                                <option value="<?= $k['kode_kerusakan'] ?>"><?= $k['kode_kerusakan'] . ' - ' . $k['kerusakan'] ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <h5 class="card-title">Gejala / Kerusakan Tidak</h5>
                    <div class="form-group mb-4">
                        <select class="form-control col-sm-4" name="gejala_tidak">
                            <option value="">Pilih Gejala / Kerusakan</option>
                            <option value="">#Gejala</option>
                            <?php foreach ($gejala as $g) : ?>
                                <option value="<?= $g['kode_gejala'] ?>"><?= $g['kode_gejala'] . ' - ' . $g['gejala'] ?></option>
                            <?php endforeach; ?>
                            <option value="">#Kerusakan</option>
                            <?php foreach ($kerusakan as $k) : ?>
                                <option value="<?= $k['kode_kerusakan'] ?>"><?= $k['kode_kerusakan'] . ' - ' . $k['kerusakan'] ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="float-right">
                        <button type="submit" class="btn btn-primary"><i class="fa fa-plus"></i> Simpan</button>
                    </div>
                </form>
            </div>
        </div>