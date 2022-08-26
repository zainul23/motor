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
                <form class="mt-4" action="<?= base_url('motor/update/') . $motor['id'] ?>" method="POST">
                    <h5 class="card-title">Nama</h5>
                    <div class="form-group">
                        <input type="text" class="form-control" name="nama" id="nama" value="<?= $motor['nama']; ?>">
                    </div>
                    <div class="float-right">
                        <a href="<?= base_url('motor/') ?>" class="btn btn-secondary">Batal</a>
                        <button type="submit" class="btn btn-primary"><i class="fa fa-plus"></i> Simpan</button>
                    </div>
                </form>
            </div>
        </div>