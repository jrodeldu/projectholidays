	<div class="container-fluid">
		<div class="row-fluid">
			<div class="span3">

			<ul id="main-nav" class="nav nav-tabs nav-stacked accordion">

					<li <?php if ( $this->uri->segment(2) == 'dashboard') echo'class="active"' ?>>
						<a href="<?php echo base_url(); ?>admin/dashboard">
							<i class="icon-home"></i>
							Dashboard
						</a>
					</li>

					<?php if($this->session->userdata('is_admin')) : ?>
					<li <?php if ( $this->uri->segment(2) == 'log') echo'class="active"' ?>>
						<a href="<?php echo base_url(); ?>admin/log">
							<i class="icon-eye-open"></i>
							Log
						</a>
					</li>
					<?php endif ?>

					<?php if($this->session->userdata('is_admin')) : ?>
					<li <?php if ( $this->uri->segment(3) == 'signup') echo'class="active"' ?>>
						<a href="<?php echo base_url(); ?>admin/users">
							<i class="icon-user"></i>
							Users
						</a>
					</li>
					<?php endif ?>

					<li <?php if ( $this->uri->segment(2) == 'calendario') echo'class="active"' ?>>
						<a href="<?php echo base_url(); ?>admin/calendario">
							<i class="icon-calendar"></i>
							Vacation request
						</a>
					</li>

					<li <?php if ( $this->uri->segment(3) == 'edit_password') echo'class="active"' ?>>
						<a href="<?php echo base_url(); ?>admin/users/edit_password">
							<i class="icon-pencil"></i>
							Edit profile
						</a>
					</li>

					<?php if($this->session->userdata('is_admin')) : ?>
					<li <?php if ( $this->uri->segment(2) == 'formulario') echo'class="active"' ?>>
						<a class="accordion-toggle" data-toggle="collapse" data-parent="#main-nav" href="#collapse_forms">
							<i class="icon icon-th-list"></i>
							<span>Pruebas</span> <span class="label label-warning pull-right">8</span>
						</a>
						<ul id="collapse_forms" class="accordion-body collapse <?php if ( $this->uri->segment(2) == 'formulario') echo 'in'; ?>">
							<li class="accordion-inner">
								<a href="<?php echo base_url(); ?>admin/formulario">
								<i class="icon-plus-sign"></i> Formulario base</a>
							</li>
							<li class="accordion-inner">
								<a href="<?php echo base_url(); ?>admin/formulario/tiny_mce">
								<i class="icon-plus-sign"></i> Formulario base TinyMCE</a>
							</li>
						</ul>
					</li>
					<?php endif ?>

				</ul>

			</div><!--/span menu-->