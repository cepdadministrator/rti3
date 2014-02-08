<?php snippet('header') ?>
<?php snippet('menu') ?>
<?php snippet('submenu') ?>

<section class="content">

  <article>
	
	<div class="row">
		<div class="col-md-10 col-md-push-2">
			<div class="row">
				<div class="col-md-8"><h1>Welcome</h1>
				<?php echo kirbytext($page->text()) ?>
				</div>
				<div class="col-md-4">
					<!--<div class="twitter-widget">
						<a class="twitter-timeline" href="https://twitter.com/search?q=%23pemtoronto2013" data-widget-id="390139480889229314">Tweets about "#pemtoronto2013"</a>
						<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
					</div>-->
				</div>
			</div>
		</div>

		<div class="col-md-2 col-md-pull-10">
			&nbsp;
			
		</div>
	</div>
  </article>

</section>

<?php snippet('footer') ?>