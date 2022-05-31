<main>
  <div class="container">

    <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

            <div class="d-flex justify-content-center py-4">
              <a href="index.html" class="logo d-flex align-items-center w-auto">
                <img src="<?php echo base_url('assets/img/logo-wtn.png'); ?>" alt="">
                <span class="d-none d-lg-block">Layanan Terpadu <br /> Setjen Wantannas</span>
              </a>
            </div><!-- End Logo -->

            <div class="card mb-3">

              <div class="card-body">

                <div class="pt-4 pb-2">
                  <h5 class="card-title text-center pb-0 fs-4">Login</h5>
                  <p class="text-center small">Masukkan Username & Password</p>
                </div>

                <form action="<?= base_url(); ?>/user/verifikasi" method="post" class="row g-3 needs-validation" novalidate>

                  <?php if (session()->getFlashdata('error')) { ?>
                    <div class="alert alert-warning alert-dismissible fade show middle" role="alert">
                      <?php echo session()->getFlashdata('error'); ?>
                    </div>
                  <?php } ?>

                  <div class="col-12">
                    <label for="username" class="form-label">Username</label>
                    <div class="input-group has-validation">
                      <input type="text" name="username" class="form-control" id="username" value="<?php echo session()->getFlashdata('username'); ?>" required>
                      <div class="invalid-feedback">Silahkan isi username anda.</div>
                    </div>
                  </div>

                  <div class="col-12">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" name="password" class="form-control" id="password" required>
                    <div class="invalid-feedback">Silahkan isi password anda!</div>
                  </div>

                  <!-- <div class="col-12">
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="remember" value="true" id="rememberMe">
                        <label class="form-check-label" for="rememberMe">Remember me</label>
                      </div>
                    </div> -->
                  <div class="col-12">
                    <button name="login" class="btn btn-primary w-100" type="submit">Login</button>
                  </div>
                  <!-- <div class="col-12">
                      <p class="small mb-0">Don't have account? <a href="pages-register.html">Create an account</a></p>
                    </div> -->
                </form>

              </div>
            </div>

            <div class="credits">
              <!-- All the links in the footer should remain intact. -->
              <!-- You can delete the links only if you purchased the pro version. -->
              <!-- Licensing information: https://bootstrapmade.com/license/ -->
              <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
              Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
            </div>

          </div>
        </div>
      </div>

    </section>

  </div>
</main><!-- End #main -->