	<div class="span9">
    <div class="row-fluid">
        <h1 class="page-title">
            <i class="icon-th-list icon-white"></i>
            Add User Form
        </h1>
    </div>
    <div class="row-fluid">
    <div class="widget">
        <div class="widget-header">
            <i class="icon-th-list"></i>
            <h3>New User</h3>
        </div>
        <div class="widget-content nopadding">
                <?php echo form_open($this->uri->uri_string, array('id' => 'signup_form', 'class' => 'form-horizontal myform')); ?>
                    <?php if(validation_errors()){ ?>
                        <div class="alert alert-block alert-error">
                            <button type="button" class="close" data-dismiss="alert">×</button>
                            <?php echo validation_errors(); ?>
                        </div>
                    <?php } ?>

                        <?php if ( !empty($message) ) { ?>
                        <div class="alert alert-block alert-success">
                            <button type="button" class="close" data-dismiss="alert">×</button>
                            <?php echo $message; ?>
                        </div>
                        <?php } ?>

                        <?php if ( !empty($error) ){ ?>
                        <div class="alert alert-block alert-error">
                            <button type="button" class="close" data-dismiss="alert">×</button>
                            <?php echo $error; ?>
                        </div>
                        <?php } ?>

                    <div class="control-group">
                        <label class="control-label" for="nombre">(*) Name:</label>
                        <div class="controls">
                        <input type="text" id="nombre" maxlength="50" name="nombre" value="<?php echo set_value('nombre'); ?>" placeholder="name" title="Inser user name"/>
                        </div>
                    </div>

                    <div class="control-group">
                        <label class="control-label" for="apellidos">(*) Surnames:</label>
                        <div class="controls">
                        <input type="text" id="apellidos" maxlength="100" name="apellidos" value="<?php echo set_value('apellidos'); ?>" placeholder="surname" title="Insert surnames"/>
                        </div>
                    </div>

                    <div class="control-group">
                        <label class="control-label" for="username">(*) Username:</label>
                        <div class="controls">
                        <input type="text" id="username" name="username" maxlength="30" value="<?php echo set_value('username'); ?>" placeholder="username" title="Insert username"/>
                        </div>
                    </div>

                    <div class="control-group">
                        <label class="control-label" for="userpass">(*) Password:</label>
                        <div class="controls">
                        <input type="password" id="userpass" maxlength="30" name="userpass" placeholder="password" title="Insert password"/>
                        </div>
                    </div>

                    <div class="control-group">
                        <label class="control-label" for="passconf">(*) Confirm password:</label>
                        <div class="controls">
                        <input type="password" id="passconf" maxlength="30" name="passconf" placeholder="password" title="Confirme password"/>
                        </div>
                    </div>

                    <div class="control-group">
                        <label class="control-label" for="email">(*) Email:</label>
                        <div class="controls">
                        <input type="text" id="email" name="email" maxlength="100" value="<?php echo set_value('email'); ?>" placeholder="mymail@mail.com" title="Insert email" />
                        </div>
                    </div>
                    <div class="control-group">
                      <label class="control-label" for="captcha">(*) Captcha code:</label>
                      <div class="controls">
                      <?php echo $recaptcha; ?>
                      </div>
                    </div>

                    <div class="form-actions">
                        <input type="submit" value="Save" class="btn btn-primary" title="Click to save the data" />
                        <input type="button" class="btn" value="Cancel" title="Cancel and go back to the Dashboard" onclick="location.href='<?php echo base_url('admin/dashboard'); ?>'" />
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>