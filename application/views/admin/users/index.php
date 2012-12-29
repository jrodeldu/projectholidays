    <?php
      if ($this->session->flashdata('success') != '' || $this->session->flashdata('success') != NULL ){
    ?>
      <div class="success-message">
          <?php echo $this->session->flashdata('success'); ?>
      </div>
    <?php
      }
    ?>

    <?php
      if ($this->session->flashdata('error') != '' || $this->session->flashdata('error') != NULL ){
    ?>
      <div class="error-message">
          <?php echo $this->session->flashdata('error'); ?>
      </div>
    <?php
      }
    ?>
      <div class="span9">
        <div class="row-fluid">
          <h1 class="page-title">
            <i class="icon-user icon-white"></i>
            Users List
          </h1>
        </div>
        <div class="row-fluid">
          <div class="spa12">
            <div class="widget">
              <div class="widget-header">
                <i class="icon-th"></i>
                <h3>Users list</h3>
                <a class="btn btn-primary pull-right" href="<?php echo base_url('admin/users/signup'); ?>">Create user</a>
              </div>
              <div class="widget-content">
              <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-hover table-bordered" id="mytable">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Name</th>
                      <th>Surnames</th>
                      <th>Email</th>
                      <th>Sign up date</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php foreach ($users as $user) { ?>
                    <tr class="gradeA">
                      <td><?php echo $user->id; ?></td>
                      <td><?php echo $user->nombre; ?></a></td>
                      <td><?php echo $user->apellidos; ?></td>
                      <td><?php echo $user->email; ?></td>
                      <td><?php echo $user->created_at; ?></td>
                    </tr>
                    <?php } ?>
                  </tbody>
                  <tfoot>
                    <tr>
                      <th>ID</th>
                      <th>ID User</th>
                      <th>Accion</th>
                      <th>Tabla</th>
                      <th>ID Tabla</th>
                    </tr>
                  </tfoot>
              </table>

              </div>
            </div>
          </div><!--/span-->
        </div><!-- /row -->
      </div> <!-- End Widget -->