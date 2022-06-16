<main id="main" class="main">

  <div class="pagetitle">
    <h1>Data Jabatan</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="<?php echo base_url('/') ?>">Home</a></li>
        <li class="breadcrumb-item">Master Data</li>
        <li class="breadcrumb-item active">Data Jabatan</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->

  <section class="section">
    <div class="row">
      <div class="col-lg-12">
        <div class="content-wrapper">
          <div class="card">
            <div class="card-body">
              <?php if (!empty(session()->getFlashdata('message'))) : ?>
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                  <?php echo session()->getFlashdata('message'); ?>
                </div>
              <?php endif; ?>
              <a href="<?= base_url('/jabatan/add'); ?>" class="btn btn-block btn-primary">Tambah Jabatan</a>
              <hr />
              <!-- <p>Add lightweight datatables to your project with using the <a href="https://github.com/fiduswriter/Simple-DataTables" target="_blank">Simple DataTables</a> library. Just add <code>.datatable</code> class name to any table you wish to conver to a datatable</p>
 -->
              <table id="tableJabatan" class="table table-bordered table-striped">
                <thead>
                  <tr class="text-center">
                    <th>No</th>
                    <th>Nama Jabatan</th>
                    <th>Parent Unit</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  $no = 1;
                  foreach ($jabatan as $row) :
                    $id = $row->id;
                  ?>
                    <tr>
                      <td><?= $no++; ?></td>
                      <td><?= $row->nama; ?></td>
                      <td><?= $row->parent; ?></td>
                      <td class="text-center">
                        <a title="Edit" href="<?= base_url("jabatan/edit/$id"); ?>" class="btn btn-info btn-sm">Edit</a>
                        <a title="Hapus" href="<?= base_url("jabatan/delete/$id"); ?>" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus ID Jabatan <?= $row->id; ?> ?')">Hapus</a>
                      </td>
                    </tr>
                  <?php endforeach; ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>

</main><!-- End #main -->