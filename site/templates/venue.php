<?php snippet('header') ?>
<?php snippet('menu') ?>
<?php snippet('submenu') ?>

<section class="content">

  <article>
    <h1><?php echo html($page->title()) ?></h1>
	<?php 

	snippet('map', array(
	  'address' => '89 Chesnut St. Toronto',
	  'zoom'    => 15,
	  //'width'   => 100%,
	  'height'  => 200
	));

	?>
	
    <?php echo kirbytext($page->text()) ?>
  </article>

</section>

<?php snippet('footer') ?>