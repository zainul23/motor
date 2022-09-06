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
                <?php if($this->session->has_userdata('error')): ?>
                    <div class="alert alert-mini alert-danger mb-30">
                      <?= $this->session->flashdata('error');?>
                    </div>
                <?php endif; ?>
                <?php if($this->session->has_userdata('success')): ?>
                    <div class="alert alert-mini alert-success mb-30">
                      <?= $this->session->flashdata('success');?>
                    </div>
                <?php endif; ?>
                <form class="mt-4" action="<?= base_url('motor/update_seri/') . $seri['id'] ?>" method="POST">
                    <h5 class="card-title">Sistem Pengapian</h5>
                    <div class="form-group">
                        <select class="form-control" name="merek_id">
                            <option value="" disabled selected>Pilih Sitem Pengapian</option>
                            <?php foreach ($merek as $m) : ?>
                                <option <?= $m['id'] === $seri['merek_id'] ? 'selected' :''; ?> value="<?= $m['id'] ?>"><?= $m['nama'] ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <h5 class="card-title">Seri</h5>
                    <div class="form-group">
                        <input type="text" class="form-control" name="seri" id="seri" value="<?= $seri['nama'] ?>">
                    </div>
                    <div class="float-right">
                        <button type="submit" class="btn btn-primary"><i class="fa fa-plus"></i> Simpan</button>
                    </div>
                </form>
            </div>
        </div>