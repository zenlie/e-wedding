<?= $this->extend('layout/default') ?>

<?= $this->section('title') ?>
<title>Data Acara &mdash; E-Wedding</title>
<?= $this->endSection() ?>

<?= $this->section('content') ?>
    <section class="section">
        <div class="section-header">
            <h1>Acara</h1>
        </div>

        <div class="section-body">
            <div class="card">
                <div class="card-header">
                    <h4>Data Acara</h4>
                </div>
                <div class="card-body table-responsive">
                    <table class="table table-striped table-md">
                        <tbody>
                            <tr>
                                <th>#</th>
                                <th>Nama</th>
                                <th>Tanggal</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                            <?php foreach ($e_wedding as $key => $value) : ?>
                                <tr>
                                    <td><?=$key + 1?></td>
                                    <td><?=$value -> name?></td>
                                    <td><?=$value -> date?></td>
                                    <td><?=$value -> info?></td>
                                    <td>
                                        <a href="#" class="btn btn-warning btn-sm"><i class="fas fa-pencil-alt"></i></a>
                                        <a href="#" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
<?= $this->endSection() ?>