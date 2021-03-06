<nav class="navbar navbar-default navbar-static-top">
	<div class="container">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="<?php echo Router::url('/'); ?>"><?php echo __('Statusengine');?></a>
		</div>
		<div id="navbar" class="navbar-collapse collapse">
			<ul class="nav navbar-nav">
				<li><a href="<?php echo Router::url(['controller' => 'Hosts', 'action' => 'index']); ?>">
					<i class="fa fa-hdd-o"></i>
					<?php echo __('Hosts');?></a>
				</li>
				<li><a href="<?php echo Router::url(['controller' => 'Services', 'action' => 'index']); ?>">
					<i class="fa fa-cog"></i>
					<?php echo __('Services');?></a>
				</li>
				<li><a href="<?php echo Router::url(['controller' => 'Services', 'action' => 'problem']); ?>">
						<i class="fa fa-exclamation-triangle"></i>
						<?php echo __('Problems');?></a>
				</li>
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><?php echo __('More');?> <span class="caret"></span></a>
					<ul class="dropdown-menu" role="menu">
						<li>
							<a href="<?php echo Router::url(['controller' => 'Hostgroups', 'action' => 'index']); ?>">
								<i class="fa fa-server"></i>&nbsp;
								<?php echo __('Host groups');?>
							</a>
						</li>
						<li>
							<a href="<?php echo Router::url(['controller' => 'Servicegroups', 'action' => 'index']); ?>">
								<i class="fa fa-cogs"></i>&nbsp;
								<?php echo __('Service groups');?>
							</a>
						</li>
						<li>
							<a href="<?php echo Router::url(['controller' => 'Objects', 'action' => 'index']); ?>">
								<i class="fa fa-database"></i>&nbsp;
								<?php echo __('Objects');?>
							</a>
						</li>
						<li class="divider"></li>
						<li>
							<a href="<?php echo Router::url(['controller' => 'Downtimes', 'action' => 'index']); ?>">
								<i class="fa fa-pause"></i>&nbsp;
								<?php echo __('Downtimes');?>
							</a>
						</li>
						<li>
							<a href="<?php echo Router::url(['controller' => 'Acknowledgements', 'action' => 'index']); ?>">
								<i class="fa fa-comments"></i>&nbsp;
								<?php echo __('Acknowledgements');?>
							</a>
						</li>
						<li class="divider"></li>
						<li>
							<a href="<?php echo Router::url(['controller' => 'Performance', 'action' => 'index']); ?>">
								<i class="fa fa-rocket"></i>&nbsp;
								<?php echo __('Performance info');?>
							</a>
						</li>
						<li>
							<a href="<?php echo Router::url(['controller' => 'Logentries', 'action' => 'index']); ?>">
								<i class="fa fa-align-left"></i>&nbsp;
								<?php echo __('Log entries');?>
							</a>
						</li>
						<li class="divider"></li>
						<li>
							<a href="<?php echo Router::url(['controller' => 'Users', 'action' => 'index']); ?>">
								<i class="fa fa-users"></i>&nbsp;
								<?php echo __('Users');?>
							</a>
						</li>

					</ul>
				</li>
			</ul>
			<ul class="nav navbar-nav navbar-right">
				<li>
					<a href="<?php echo Router::url([
						'controller' => 'Users',
						'action' => 'logout']); ?>">
							<i class="fa fa-sign-out"></i>
							<?php echo __('Logout');?>
					</a>
				</li>
				<li>
					<a href="javascript:void(0);" title="<?php echo date_default_timezone_get(); ?>">
							<i class="fa fa-clock-o"></i>
							<?php echo date('H:i'); ?> (<?php echo date_default_timezone_get(); ?>)
					</a>
				</li>
			</ul>
		</div><!--/.nav-collapse -->
	</div>
</nav>
