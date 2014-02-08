<?php snippet('header') ?>
<?php snippet('menu') ?>
<?php snippet('submenu') ?>

<section class="content">

  <article>

<div class="downloads">
	
	<?php
	$key = "type";
	$value = "b";
	$talks = $pages->children()->filterBy($key, $value, $split=false);
	foreach( $talks->sortBy($sort='code', $dir='asc') as $talk):
		
		?>	
	<div class="thumbnail col-lg-3 col-lg-3 col-lg-3 col-md-4 col-sm-6">
		<div id="item1" class="panel panel-default">
			<div class="panel-heading">
				<h3 class="panel-title"><span class="badge pull-right"><?php echo html($talk->code()) ?></span>
				 <?php echo html($talk->title()) ?></h3>
			</div>
			<div class="panel-body">
				<p class="author"><?php echo html($talk->authors()) ?></p>
				<p class="description"><small><?php echo kirbytext($talk->goals()) ?></small></p>
			</div>
			<div class="panel-footer text-right">
				<?php if ($talk->hasDocuments() ) {
					?><a href="<?php echo ($talk->url()) ?>" class="btn btn-default btn-sm btn-primary">Notes &amp; Details</a>
					<?php
				} else {
					?><a href="<?php echo ($talk->url()) ?>" class="btn btn-default btn-sm btn-primary">More Information</a>
					<?php
				} ?>
			</div> <!-- /panel-footer -->
		</div> <!-- /panel -->
	</div> <!-- /thumbnail -->
	
	<?php endforeach ?>	
	
</div> <!-- /downloads -->
  </article>

</section>

<?php snippet('footer') ?>