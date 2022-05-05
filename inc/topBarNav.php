
      <nav class="main-header navbar navbar-expand-md navbar-light navbar-success">
      <div class="container">
        <a href="<?php echo base_url ?>" class="navbar-brand">
          <img src="<?php echo validate_image($_settings->info('logo'))?>" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8;width: 2.5rem;height: 2.5rem;max-height: unset">
          <span class="brand-text font-weight-light text-warning"><?php echo (!isMobileDevice()) ? $_settings->info('name'):$_settings->info('short_name'); ?></span>
        </a>

      
        <!-- Right navbar links -->
        <ul class="order-1 order-md-3 navbar-nav navbar-no-expand ml-auto">
          <!-- In case i Want to add anything to the NavBar -->
          
        </ul>
      </div>
      </nav>
      <!-- /.navbar