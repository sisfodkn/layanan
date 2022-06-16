<main id="main" class="main">

  <div class="pagetitle">
    <h1>Data Unit Kerja</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="<?php echo base_url('/') ?>">Home</a></li>
        <li class="breadcrumb-item">Master Data</li>
        <li class="breadcrumb-item active">Data Unit Kerja</li>
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
              <a href="<?= base_url('/unitkerja/add'); ?>" class="btn btn-block btn-primary">Tambah Unit Kerja</a>
              <hr />
              <!-- <h5 class="card-title">Datatables</h5>
              <p>Add lightweight datatables to your project with using the <a href="https://github.com/fiduswriter/Simple-DataTables" target="_blank">Simple DataTables</a> library. Just add <code>.datatable</code> class name to any table you wish to conver to a datatable</p>
 -->
              <table id="tableUnitkerja" class="table table-bordered table-striped">
                <thead>
                  <tr class="text-center">
                    <th>No</th>
                    <th>ID Unit</th>
                    <th>Nama Unit</th>
                    <th>Parent Unit</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  $no = 1;
                  foreach ($unitkerja as $row) :
                    $id = $row->id;
                  ?>
                    <tr>
                      <td><?= $no++; ?></td>
                      <td><?= $row->id; ?></td>
                      <td><?= $row->nama; ?></td>
                      <td><?= $row->parent; ?></td>
                      <td class="text-center">
                        <a title="Edit" href="<?= base_url("unitkerja/edit/$id"); ?>" class="btn btn-info btn-sm">Edit</a>
                        <a title="Hapus" href="<?= base_url("unitkerja/delete/$id"); ?>" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus Kode Unit <?= $row->id; ?> ?')">Hapus</a>
                      </td>
                    </tr>
                  <?php endforeach; ?>
                </tbody>
              </table>

              <!--
            <table class="table datatable">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Name</th>
                  <th scope="col">Position</th>
                  <th scope="col">Age</th>
                  <th scope="col">Start Date</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">1</th>
                  <td>Brandon Jacob</td>
                  <td>Designer</td>
                  <td>28</td>
                  <td>2016-05-25</td>
                </tr>
                <tr>
                  <th scope="row">2</th>
                  <td>Bridie Kessler</td>
                  <td>Developer</td>
                  <td>35</td>
                  <td>2014-12-05</td>
                </tr>
                <tr>
                  <th scope="row">3</th>
                  <td>Ashleigh Langosh</td>
                  <td>Finance</td>
                  <td>45</td>
                  <td>2011-08-12</td>
                </tr>
                <tr>
                  <th scope="row">4</th>
                  <td>Angus Grady</td>
                  <td>HR</td>
                  <td>34</td>
                  <td>2012-06-11</td>
                </tr>
                <tr>
                  <th scope="row">5</th>
                  <td>Raheem Lehner</td>
                  <td>Dynamic Division Officer</td>
                  <td>47</td>
                  <td>2011-04-19</td>
                </tr>
              </tbody>
            </table>
-->

            </div>
          </div>
        </div>
        <!-- /.content-wrapper -->

      </div>
    </div>
  </section>

</main><!-- End #main -->