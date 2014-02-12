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
                    <div id="application-icons">
                        <div class="row">
                            <div class="col-md-3 col-sm-4 col-xs-6">
                                <a href="<?php echo u('keynotes') ?>" class="thumbnail">
                                    <i class="fa fa-microphone"></i>
                                    <p>Keynotes</p>
                                </a>
                            </div>
                            <div class="col-md-3 col-sm-4 col-xs-6">
                                <a href="<?php echo u('posters') ?>" class="thumbnail">
                                    <i class="fa fa-file-text-o"></i>
                                    <p>Posters</p>
                                </a>
                            </div>
                            <div class="col-md-3 col-sm-4 col-xs-6">
                                <a href="<?php echo u('program') ?>" class="thumbnail">
                                    <i class="fa fa-calendar"></i>
                                    <p>Program</p>
                                </a>
                            </div>
                            <div class="col-md-3 col-sm-4 col-xs-6">
                                <a href="<?php echo u('venue') ?>" class="thumbnail">
                                    <i class="fa fa-map-marker"></i>
                                    <p>Venue</p>
                                </a>
                            </div>
                            <div class="col-md-3 col-sm-4 col-xs-6">
                                <a href="<?php echo u('social') ?>" class="thumbnail">
                                    <i class="fa fa-glass"></i>
                                    <p>Social</p>
                                </a>
                            </div>
                            <div class="col-md-3 col-sm-4 col-xs-6">
                                <a href="<?php echo u('sponsors') ?>" class="thumbnail">
                                    <i class="fa fa-certificate"></i>
                                    <p>Sponsors</p>
                                </a>
                            </div>
                        </div>
                    </div> <!-- #application-icons -->

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