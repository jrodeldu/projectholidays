<?php
setlocale(LC_ALL,"es_ES@euro","es_ES.utf8","esp");
?>

<div class="span9">
    <div class="row-fluid">
        <div class="span12">
            <h1 class="page-title">
                <i class="icon-tasks icon-white"></i>
                Vacation request
            </h1>
        </div>
    </div>
    <div class="row-fluid">
        <div class="span12">
            <div class="widget">
                <div class="widget-header">
                    <i class="icon-comment"></i>
                    <h3>Vacation details for: <?php echo $result->nombre . ' ' . $result->apellidos . ' [ID Reqest: ' . $result->id . ']'; ?></h3>
                </div>
                <div class="widget-content nopadding">

              <?php echo form_open(base_url('admin/calendario/edit_status/'.$this->uri->segment(4)), array('id' => 'edit_status_request', 'class' => 'form-horizontal')); ?>
                      <?php if(validation_errors()){ ?>
                          <div class="alert alert-block alert-error">
                              <button type="button" class="close" data-dismiss="alert">×</button>
                              <?php echo validation_errors(); ?>
                          </div>
                      <?php } ?>

                    <dl class="dl-horizontal ficha">
                        <dt>Start date:</dt>
                        <dd><?php echo $result->finicio; ?></dd>
                        <dt>End date:</dt>
                        <dd><?php echo $result->ffin; ?></dd>
                        <dt>Information:</dt>
                        <dd><?php echo $result->observaciones; ?></dd>
                        <dt>Current status:</dt>
                        <dd><?php echo $status = ($result->confirmed == 1) ? 'Confirmed' : 'Not Confirmed'; ?></dd>
                    </dl>

                    <label class="control-label"  for="status">Set Status</label>
                    <div class="controls">
                        <select name="status" id="status">
                            <option value="1">Approve</option>
                            <option value="2">Deny</option>
                        </select>
                    </div>


                    <div class="form-actions">
                        <input type="submit" class="btn btn-primary" value="Update Status" />
                        <!--<a class="btn btn-danger" href="#">Deny</a>-->
                        <input type="button" class="btn" value="Cancel" title="Cancel and go back to the Dashboard" onclick="location.href='<?php echo base_url('admin/dashboard'); ?>'" />
                    </div>

                    <?php echo form_close(); ?>

                </div>
            </div>
        </div>
    </div>
</div><!-- span end widget -->