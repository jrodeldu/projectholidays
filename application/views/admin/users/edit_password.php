  <div class="span9">
    <div class="row-fluid">
        <h1 class="page-title">
            <i class="icon-th-list icon-white"></i>
            Edit Password Form
        </h1>
    </div>
    <div class="row-fluid">
      <div class="widget">
          <div class="widget-header">
              <i class="icon-th-list"></i>
              <h3>Update password</h3>
          </div>
          <div class="widget-content nopadding">
              <?php echo form_open($this->uri->uri_string, array('id' => 'editpass_form', 'class' => 'form-horizontal')); ?>
                      <?php if(validation_errors()){ ?>
                          <div class="alert alert-block alert-error">
                              <button type="button" class="close" data-dismiss="alert">×</button>
                              <?php echo validation_errors(); ?>
                          </div>
                      <?php } ?>

                    <div class="control-group">
                      <label class="control-label" for="old">(*) Old password:</label>
                      <div class="controls">
                        <input type="password" id="old" maxlength="30" name="old" placeholder="current password" title="Type your current password"/>
                      </div>
                    </div>

                    <div class="control-group">
                      <label class="control-label" for="new">(*) New password:</label>
                      <div class="controls">
                        <input type="password" id="new" maxlength="30" name="new" placeholder="new password" title="Insert your new password"/>
                      </div>
                    </div>

                    <div class="control-group">
                      <label class="control-label" for="new_confirm">(*) Confirm new password:</label>
                      <div class="controls">
                        <input type="password" id="new_confirm" maxlength="30" name="new_confirm" placeholder="new password" title="Confirm your new password"/>
                      </div>
                    </div>

                    <div class="form-actions">
                        <input type="submit" value="Save" class="btn btn-primary" value="Change password" title="Pulse para cambiar datos" />
                        <input type="button" class="btn" value="Cancel" title="Cancel and go back to Dashboard" onclick="location.href='<?php echo base_url(); ?>admin'" />
                    </div>

              <?php echo form_close(); ?>
          </div>
      </div><!-- /widget -->
  </div><!-- /row -->
</div> <!-- /span9 -->