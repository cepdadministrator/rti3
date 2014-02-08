<nav class="navbar navbar-default" role="navigation">
	<div class="container">
		<!-- Brand and toggle get grouped for better mobile display -->
		<div class="navbar-header">
			<button type="button" class="navbar-toggle icon-reorder" data-toggle="collapse" data-target=".navbar-ex1-collapse"></button>
			<a class="navbar-brand" href="<?php echo url('home') ?>"><img src="<?php echo url('assets/icons/RTi3-logo.png') ?>" alt="" /></a>
		</div>

		<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="collapse navbar-collapse navbar-ex1-collapse">
			<ul class="nav navbar-nav">
			    <?php foreach($pages->visible() AS $p): ?>
				    <li <?php echo ($p->isOpen()) ? ' class="active"' : '' ?>><a href="<?php echo $p->url() ?>"><?php echo html($p->title()) ?></a></li>
			    <?php endforeach ?>
			</ul>
		</div><!-- /.navbar-collapse -->
		
	</div>
</nav>