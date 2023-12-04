<?= $this->extend('layout/default') ?>

<?= $this->section('title') ?>
<title>Create Acara &mdash; E-Wedding</title>
<?= $this->endSection() ?>

<?= $this->section('content') ?>
    <section class="section">
        <div class="section-header">
            <div class="section-header-back">
                <a href="<?=site_url('acara')?>" class="btn"><i class="fas fa-arrow-left"></i></a>
            </div>
            <h1>Create Acara</h1>
        </div>

        <?php if(session()->getFlashdata('success')): ?>
            <div class="alert alert-success alert-dismissible show fade">
                <div class="alert-body">
                    <button class="close" data-dismiss="alert">x</button>
                    <b>Success !</b>
                    <?session()->getFlashdata('success')?>
                </div>
            </div>
        <?php endif; ?>

        <div class="section-body">
            <div class="card">
                <div class="card-header">
                    <h4>Create Acara</h4>
                </div>
                <div class="card-body col-md-6">
                    <form action="<?=site_url('acara')?>" method="post" autocomplete="off">
                        <div class="form-group">
                            <label>Nama Acara *</label>
                            <input type="text" name="name" class="form-control" required autofocus>
                        </div>
                        <div class="form-group">
                            <label>Tanggal Acara *</label>
                            <input type="date" name="date" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Info</label>
                            <textarea name="info" class="form-control"></textarea>
                        </div>
                        <div>
                            <button type="submit" class="btn btn-success"><i class="fas fa-paper-plane"></i>Submit</button>
                            <button type="reset" class="btn btn-secondary">Reset</button>
                        </div>
                    </form>
                </div>
            </div>  
        </div>
    </section>
<?= $this->endSection() ?>