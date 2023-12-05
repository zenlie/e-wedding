<?= $this->extend('layout/default') ?>

<?= $this->section('title') ?>
<title>Edit Acara &mdash; E-Wedding</title>
<?= $this->endSection() ?>

<?= $this->section('content') ?>
    <section class="section">
        <div class="section-header">
            <div class="section-header-back">
                <a href="<?=site_url('acara')?>" class="btn"><i class="fas fa-arrow-left"></i></a>
            </div>
            <h1>Edit Acara</h1>
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
                    <h4>Edit Acara</h4>
                </div>
                <div class="card-body col-md-6">
                    <form action="<?=site_url('acara/'.$acara->id)?>" method="post" autocomplete="off">
                    <?= csrf_field() ?>
                    <input type="hidden" name="_method" value="PUT">
                         <div class="form-group">
                            <label>Nama Acara *</label>
                            <input type="text" name="name" value="<?=$acara->name?>" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Tanggal Acara *</label>
                            <input type="date" name="date" value="<?=$acara->date?>" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Info</label>
                            <textarea name="info" value="<?=$acara->info?>" class="form-control"></textarea>
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