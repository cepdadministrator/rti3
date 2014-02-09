<?php snippet('header') ?>
<?php snippet('menu') ?>
<?php snippet('submenu') ?>

<section class="content">

  <article>
	
    <?php echo kirbytext($page->text()) ?>
		
	<h2>Map</h2>
	<?php 

	snippet('map', array(
	  'address' => '15 King’s College Circle, Toronto, Ontario M5S 3H7',
	  'zoom'    => 16,
	  //'width'   => 100%,
	  'height'  => 300
	));

	?>
	
  </article>

</section>

<?php snippet('footer') ?>