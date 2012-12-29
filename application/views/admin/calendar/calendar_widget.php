<script type="text/javascript">
jQuery(function() {
  jQuery('#finicio, #ffin').datepicker();

  jQuery('#finicio, #ffin').datepicker('option', {
    beforeShow: customRange
  });
});

function customRange(input) {
  if (input.id == 'ffin') {
    return {
      minDate: jQuery('#finicio').datepicker("getDate")
    };
  } else if (input.id == 'finicio') {
    return {
      maxDate: jQuery('#ffin').datepicker("getDate")
    };
  }
}
</script>
<div class="span9">
	<div class="row-fluid">
		<h1 class="page-title">
			<i class="icon-calendar icon-white"></i>
			Calendar
		</h1>
	</div>
	<div class="row-fluid">
		<div class="widget">
			<div class="widget-header">
				<i class="icon-calendar"></i>
				<h3>Calendar</h3>
				<span class="label label-info">The calendar only shows confirmed requests!</span>
				<a class="btn btn-primary pull-right" data-toggle="modal" href="#modal_event">Send vacation request</a>
			</div>
			<div class="widget-content nopadding">
				<?php if(validation_errors()){ ?>
		            <div class="alert alert-block alert-error">
		                <button type="button" class="close" data-dismiss="alert">×</button>
		                <?php echo validation_errors(); ?>
		            </div>
	        	<?php } ?>
	        	 <?php
                      if ($this->session->flashdata('success') != '' || $this->session->flashdata('success') != NULL ){
                    ?>
                      <div class="alert alert-success">
                        <button type="button" class="close" data-dismiss="alert">×</button>
                        <strong>Well done!</strong> <?php echo $this->session->flashdata('success'); ?>
                      </div>
                    <?php
                      }
                    ?>

                    <?php
                      if ($this->session->flashdata('error') != '' || $this->session->flashdata('error') != NULL ){
                    ?>
                      <div class="alert alert-error">
                        <button type="button" class="close" data-dismiss="alert">×</button>
                        <strong>Something went wrong!</strong> <?php echo $this->session->flashdata('error'); ?>
                      </div>
                    <?php
                      }
                ?>
	        	<!-- Modal para añadir un evento -->
				<div id="modal_event" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
					  <div class="modal-header">
					    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
					    <h3 id="myModalLabel">Vacation request</h3>
					  </div>
						<div class="modal-body">
							<?php echo form_open(base_url('admin/calendario/add_event'), array('id' => 'add_event', 'class' => 'add_event form-horizontal myform')); ?>
						    <!-- <form id="add_event" action="<?php //echo base_url(); ?>admin/calendario/add_event" method="post" class="add_event form-horizontal myform"> -->
						        <div class="control-group">
						            <label class="control-label" for="finicio">(*) Start date:</label>
						            <div class="controls">
						                <input id="finicio" class="fecha" type="text" maxlength="10" name="finicio" value="<?php echo set_value('finicio'); ?>" title="Escriba la fecha de inicio del evento" />
						            </div>
						        </div>
						        <div class="control-group">
						            <label class="control-label" for="ffin">(*) End date:</label>
						            <div class="controls">
						                <input id="ffin" class="fecha" type="text" maxlength="10" name="ffin" value="<?php echo set_value('ffin'); ?>" title="Escriba la fecha de finalización del evento" />
						            </div>
						        </div>
						        <div class="control-group">
						            <label class="control-label" for="observaciones">Information:</label>
						            <div class="controls">
						                <input type="text" id="observaciones" maxlength="225" name="observaciones" value="<?php echo set_value('observaciones'); ?>" title="Escriba observaciones" class="text" />
						            </div>
						        </div>
						        <div class="modal-footer">
						            <a class="btn" data-dismiss="modal" aria-hidden="true">Close</a>
						            <input type="submit" value="Send request" class="edit btn btn-primary" />
						        </div>
						    </form>
						</div> <!-- end Modal Body -->
					</div><!-- Fin del modal -->
				<div id="calendar" class="widget-content"></div>
			</div> <!-- widget content -->
		</div> <!-- widget -->
	</div> <!-- row -->
</div><!-- span9 -->
