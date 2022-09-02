<div class="page-wrapper">
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
                <div class="row my-3">
                    <div class="col-7 align-self-center">
                        <h4 class="page-title text-truncate text-dark font-weight-medium mb-1">Data Sistem Pengapian</h4>
                    </div>
                    <div class="col-5 align-self-center">
                        <div class="customize-input float-right form-inline">
                            <form action="<?= base_url('motor/insert') ?>" method="POST">
                                <input type="text" class="form-control mr-2" name="merek">
                                <button class="btn btn-primary"> Tambah</button>
                            </form>
                        </div>
                    </div>
                </div>
                <?php echo $this->session->flashdata('message'); ?>
                <table class="table table-bordered">
                    <thead class="bg-success text-white">
                        <tr>
                            <th class="text-center" width="1%">No</th>
                            <th class="text-center" width="10%">Merek</th>
                            <th class="text-center" width="5%">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1; ?>
                        <?php foreach ($merek as $m) : ?>
                            <tr>
                                <td class="text-center"><?= $i ?></td>
                                <td><?= $m['nama'] ?></td>
                                <td class="text-center">
                                    <a href="<?= base_url('motor/ubah/') . $m['id'] ?>" class="btn btn-sm btn-success"><span><i class="fa fa-edit"></i> Ubah</span></a>
                                    <a href="<?= base_url('motor/delete/') . $m['id'] ?>" class="btn btn-sm btn-danger"><span><i class="fa fa-trash"></i></span> Hapus</a>
                                </td>
                            </tr>
                            <?php $i++; ?>
                        <?php endforeach; ?>
                    </tbody>
                </table>
                
                <div class="row my-3">
                    <div class="col-7 align-self-center">
                        <h4 class="page-title text-truncate text-dark font-weight-medium mb-1">Data Seri</h4>
                    </div>
                    <div class="col-5 align-self-center">
                        <div class="customize-input float-right">
                            <a href="<?= base_url('motor/add_seri') ?>" class="btn btn-primary"><span><i class="fa fa-plus"></i> Tambah</span></a>
                            
                        </div>
                    </div>
                </div>
                <table class="table table-bordered">
                    <thead class="bg-success text-white">
                        <tr>
                            <th class="text-center" width="1%">No</th>
                            <th class="text-center" width="10%">Merek</th>
                            <th class="text-center" width="10%">Seri</th>
                            <th class="text-center" width="5%">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1; ?>
                        <?php foreach ($seri_list as $s) : ?>
                            <tr>
                                <td class="text-center"><?= $i ?></td>
                                <td><?= $s['merek'] ?></td>
                                <td><?= $s['nama'] ?></td>
                                <td class="text-center">
                                    <a href="<?= base_url('motor/ubah_seri/') . $s['id'] ?>" class="btn btn-sm btn-success"><span><i class="fa fa-edit"></i> Ubah</span></a>
                                    <a href="<?= base_url('motor/delete_seri/') . $s['id'] ?>" class="btn btn-sm btn-danger"><span><i class="fa fa-trash"></i></span> Hapus</a>
                                </td>
                            </tr>
                            <?php $i++; ?>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>