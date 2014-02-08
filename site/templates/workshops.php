<?php snippet('header') ?>
<?php snippet('menu') ?>
<?php snippet('submenu') ?>

<section class="content">

  <article>

<div class="downloads">
	
	<?php
	$key = "type";
	$value = "w";
	$talks = $pages->children()->filterBy($key, $value, $split=false);
	foreach( $talks->sortBy($sort='code', $dir='asc') as $talk):
		
		?>	
	<div class="thumbnail col-lg-3 col-lg-3 col-lg-3 col-md-4 col-sm-6">
		<div id="item1" class="panel panel-default">
			<div class="panel-heading">
				<h3 class="panel-title">
					<span class="badge pull-right"><?php echo html($talk->code()) ?></span>
					<?php echo html($talk->title()) ?>
				</h3>
			</div>
			<div class="panel-body">
				<p class="author"><?php echo html($talk->authors()) ?></p>
				<p class="description"><small><?php echo html($talk->abstract()) ?></small></p>
			</div>
			<div class="panel-footer">
				<?php if ($talk->hasDocuments() ) {
					?><a href="<?php echo ($talk->url()) ?>" class="btn btn-default btn-sm btn-primary pull-right">Notes &amp; Details</a>
					<?php
				} else {
					?><a href="<?php echo ($talk->url()) ?>" class="btn btn-default btn-sm btn-primary pull-right">More Information</a>
					<?php
				} ?>
				<?php snippet('objectives-modal', array( 'code' => $talk->code() , 'title' => $talk->title() ,'goals' => kirbytext($talk->goals()) ) ); ?>
			</div> <!-- /panel-footer -->
		</div> <!-- /panel -->
	</div> <!-- /thumbnail -->
	
	<?php endforeach ?>	
	
</div> <!-- /downloads -->
  </article>

</section>

<?php snippet('footer') ?>