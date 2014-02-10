<?php snippet('header') ?>
<?php snippet('menu') ?>
<?php snippet('submenu') ?>

<section class="content">

  <article>
    <h1><?php echo html($page->title()) ?></h1>
	
    <?php echo kirbytext($page->text()) ?>
	
	
	<h2>Location</h2>
	
	<p>89 Chestnut St<br>Toronto, ON M5G 1R1</p>
	
	<?php 

	snippet('map', array(
	  'address' => '89 Chesnut St. Toronto',
	  'zoom'    => 15,
	  //'width'   => 100%,
	  'height'  => 300
	));

	?>
	
  </article>

</section>

<?php snippet('footer') ?>