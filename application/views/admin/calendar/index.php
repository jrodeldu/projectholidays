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
            Vacation request list
          </h1>
        </div>
        <div class="row-fluid">
          <div class="spa12">
            <div class="widget">
              <div class="widget-header">
                <i class="icon-th"></i>
                <h3>Vacation request list</h3>
                <a class="btn btn-primary pull-right" href="<?php echo base_url('admin/calendario/show_calendar'); ?>">Show Calendar</a>
              </div>
              <div class="widget-content">
              <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-hover table-bordered" id="mytable">
                  <thead>
                    <tr>
                      <th>Id Request</th>
                      <th>Name</th>
                      <th>Surnames</th>
                      <th>Email</th>
                      <th>Start date</th>
                      <th>End date</th>
                      <th>Status</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php foreach ($requests as $request) { ?>
                    <tr class="gradeA">
                      <td><?php echo anchor(base_url('admin/calendario/show/'.$request->id), $request->id); ?></td>
                      <td><?php echo $request->nombre; ?></td>
                      <td><?php echo $request->apellidos; ?></td>
                      <td><?php echo $request->email; ?></td>
                      <td><?php echo $request->finicio; ?></td>
                      <td><?php echo $request->ffin; ?></td>
                      <td><?php echo $request->confirmed; ?></td>
                    </tr>
                    <?php } ?>
                  </tbody>
                  <tfoot>
                    <tr>
                      <th>Id Request</th>
                      <th>Name</th>
                      <th>Surnames</th>
                      <th>Email</th>
                      <th>Start date</th>
                      <th>End date</th>
                      <th>Status</th>
                    </tr>
                  </tfoot>
              </table>

              </div>
            </div>
          </div><!--/span-->
        </div><!-- /row -->
      </div> <!-- End Widget -->