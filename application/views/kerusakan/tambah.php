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
                <form class="mt-4" action="<?= base_url('kerusakan/insert') ?>" method="POST">
                    <h5 class="card-title">Kode Kerusakan</h5>
                    <div class="form-group">
                        <input type="text" class="form-control col-sm-1" name="kode" id="kode" value="<?= $kode; ?>" readonly>
                    </div>

                    <h5 class="card-title">Kerusakan</h5>
                    <div class="form-group">
                        <input type="text" class="form-control" name="kerusakan" id="kerusakan" required oninvalid="this.setCustomValidity('Kerusakan tidak boleh kosong')" oninput="setCustomValidity('')">
                    </div>

                    <h5 class="card-title">Solusi</h5>
                    <div class="form-group">
                        <input type="text" class="form-control" name="solusi" id="solusi" required oninvalid="this.setCustomValidity('Gejala tidak boleh kosong')" oninput="setCustomValidity('')">
                    </div>

                    <div class="clearfix"></div>
                    <h5 class="card-title">Gejala</h5>
                    <?php foreach ($gejala as $g) { ?>
                        <fieldset class="checkbox">
                            <label>
                                <input type="checkbox" name="gejala[]" value="<?= $g['id_gejala'] ?>"> <?= $g['kode_gejala'] . ' - ' . $g['gejala'] ?>
                            </label>
                        </fieldset>
                    <?php } ?>
                    
                    <h5 class="card-title">Harga</h5>
                    <div class="form-group">
                        <input type="text" class="form-control" name="harga" id="harga" required oninvalid="this.setCustomValidity('Harga tidak boleh kosong')" oninput="setCustomValidity('')">
                    </div>
                    <div class="float-right">
                        <button type="submit" class="btn btn-primary"><i class="fa fa-plus"></i> Simpan</button>
                    </div>
                </form>
            </div>
        </div>