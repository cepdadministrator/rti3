<nav class="navbar navbar-default" role="navigation">
	<div class="container">
		<!-- Brand and toggle get grouped for better mobile display -->
		<div class="navbar-header">
			<!-- <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse"><i class="fa fa-bars"></i></button> -->
			<button id="trigger-overlay" type="button" class="navbar-toggle visible-xs btn btn-default pull-right"><i class="fa fa-bars"></i></button>
			<a class="navbar-brand" href="<?php echo url('home') ?>"><img src="<?php echo url('assets/icons/RTi3-logo.png') ?>" alt="" /></a>
		</div>

		<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="collapse navbar-collapse navbar-ex1-collapse">
			<ul class="nav pull-right navbar-nav">
			    <?php foreach($pages->visible() AS $p): ?>
				    <li <?php echo ($p->isOpen()) ? ' class="active"' : '' ?>><a href="<?php echo $p->url() ?>"><?php echo html($p->title()) ?></a></li>
			    <?php endforeach ?>
			</ul>
		</div><!-- /.navbar-collapse -->
		
	</div>
</nav>


