

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
      </h1>

    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <?php if($is_admin == true): ?>

        <div class="row">
          <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-aqua" style="background-color: #022b69 !important;">
              <div class="inner">
                <h3><?php echo $total_products ?></h3>

                <p>Total Products</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag" style="color: #ffffff !important;"></i>
              </div>
              <a href="<?php echo base_url('products/') ?>" class="small-box-footer" style="text-align:left;padding: 3px 3px;">Details<i class="fa fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-green" style="background-color: #022b69 !important;">
              <div class="inner">
                <h3><?php echo $total_paid_orders ?></h3>

                <p>Total Paid Orders</p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars" style="color: #ffffff !important;"></i>
              </div>
              <a href="<?php echo base_url('orders/') ?>" class="small-box-footer" style="text-align:left;padding: 3px 3px;">Details<i class="fa fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-yellow" style="background-color: #022b69 !important;">
              <div class="inner">
                <h3><?php echo $total_users; ?></h3>

                <p>Total Users</p>
              </div>
              <div class="icon">
                <i class="ion ion-android-people" style="color: #ffffff !important;"></i>
              </div>
              <a href="<?php echo base_url('users/') ?>" class="small-box-footer" style="text-align:left;padding: 3px 3px;">Details<i class="fa fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-red" style="background-color: #022b69 !important;">
              <div class="inner">
                <h3><?php echo $total_stores ?></h3>

                <p>Total Stores</p>
              </div>
              <div class="icon">
                <i class="ion ion-android-home" style="color: #ffffff !important;"></i>
              </div>
              <a href="<?php echo base_url('stores/') ?>" class="small-box-footer" style="text-align:left;padding: 3px 3px;">Details<i  class="fa fa-arrow-circle-right" ></i></a>
            </div>
          </div>
          <!-- ./col -->
        </div>
        <!-- /.row -->
      <?php endif; ?>
      

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <script type="text/javascript">
    $(document).ready(function() {
      $("#dashboardMainMenu").addClass('active');
    });
  </script>
