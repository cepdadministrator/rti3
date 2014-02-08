<?php snippet('header') ?>
<?php snippet('menu') ?>
<?php snippet('submenu') ?>

<section class="content">

  <article>
	<div class="talk-actions">
		<?php if ($page->type() == "w"): ?>
			<a href="../workshops" class="btn btn-sm btn-primary pull-right visible-xs visible-sm">All Workshops</a>
		<?php endif; ?>
		<?php if ($page->type() == "b"): ?>
			<a href="../breakouts" class="btn btn-sm btn-primary pull-right visible-xs visible-sm">All Breakouts</a>
		<?php endif; ?>
		<?php if ($page->type() == "q"): ?>
			<a href="../quick-hits" class="btn btn-sm btn-primary pull-right visible-xs visible-sm">All Quick Hits</a>
		<?php endif; ?>
	</div>
	
	<p><span class="label label-primary"><?php echo $page->code() ?></span></p>
    <h1><?php echo html($page->title()) ?></h1>
    <p class="lead"><em><?php echo html($page->authors()) ?></em></p>

	<?php if ($page->abstract() !="" ): ?>
		<h3>Abstract</h3>
    	<?php echo kirbytext($page->abstract()) ?>
	<?php endif; ?>
	<?php if ($page->goals() !="" ): ?>
		<h3>Objectives</h3>
    	<?php echo kirbytext($page->goals()) ?>
	<?php endif; ?>
	    

	<?php if ($page->hasDocuments()): ?>
	<h3>Presentation</h3>
	<div class="list-group">
		<?php
		$key = "kind";
		$presentation = "PR";
		foreach( $page->files()->filterBy($key, $presentation) as $document): ?>
		     <a href="<?php echo $document->url() ?>" class="list-group-item">
				<?php echo $document->caption() ?>
				<span class="badge"><?php echo $document->extension() ?></span>
			</a>  
		<?php endforeach ?>   
	</div>
	  
	<h3>Other attachments</h3>
	<div class="list-group">
		<?php
		$key = "kind";
		$attachment = "AT";
		foreach( $page->files()->filterBy($key, $attachment) as $document): ?>
		<a href="<?php echo $document->url() ?>" class="list-group-item">
			<?php echo $document->caption() ?>
			<span class="badge"><?php echo $document->extension() ?></span>
		</a>
		<?php endforeach ?>     
	</ul>

	<?php endif; ?>


  </article>

</section>

<?php snippet('footer') ?>