
<div class="txt-content">
      <h1>Dashboard Page</h1><br>
      <h3><------ Selamat Datang <?php echo $this->session->userdata('user'); ?> ------></h3>
      <a class="btn btn-danger" data-bs-toggle="offcanvas" href="<?php echo site_url('auth/logout'); ?>" role="button" aria-controls="offcanvasExample">
        Logout
      </a>
</div>
