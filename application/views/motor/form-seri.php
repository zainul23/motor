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
                <form class="mt-4" action="<?= base_url('motor/add_seri') ?>" method="POST">
                    <h5 class="card-title">Merek</h5>
                    <div class="form-group">
                        <select class="form-control" name="merek_id">
                            <option value="" disabled selected>Pilih Sitem Pengapian</option>
                            <?php foreach ($merek as $m) : ?>
                                <option value="<?= $m['id'] ?>"><?= $m['nama'] ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <h5 class="card-title">Seri</h5>
                    <div class="form-group">
                        <input type="text" class="form-control" name="seri" id="seri">
                    </div>
                    <div class="float-right">
                        <button type="submit" class="btn btn-primary"><i class="fa fa-plus"></i> Simpan</button>
                    </div>
                </form>
            </div>
        </div>