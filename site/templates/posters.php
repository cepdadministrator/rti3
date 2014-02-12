<?php snippet('header') ?>
<?php snippet('menu') ?>
<?php snippet('submenu') ?>
<?php snippet('poster-helper') ?>

<section class="content">
	<article>
			<h1>Posters</h1>
			
            <!-- <div class="controls">
                <button class="btn btn-default filter" data-filter="session-1">Session 1</button>
                <button class="btn btn-default filter" data-filter="session-2">Session 2</button>
                <button class="btn btn-default filter" data-filter="session-3">Session 3</button>
                <button class="btn btn-default filter" data-filter="session-4">Session 4</button>
            </div> -->
			
			<div class="downloads">
				<div id="Grid" class="row">
					<?php
					$posters = $pages->find('posters')->children();
					foreach( $posters->sortBy($sort='id', $dir='asc') as $poster) :
						$classadd = "";
						$fileicon = "";
						if ($poster->hasDocuments() ) { 
							$classadd = "with-document";
							$fileicon = '<span class="pull-right"><i class="fa fa-file-o"></i></span>';
						}
						
						
						?>	
						
						<div id="P<?php echo $poster->id() ?>" class="<?php echo seoUrl($poster->session()) ?>">
							<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
								<div class="panel panel-default <?php echo $classadd; ?>">
									<div class="panel-body">
										<p><span class="badge">P<?php echo $poster->id() ?> </span> <span id="<?php echo seoUrl($poster->session()) ?>" class="pull-right"><?php echo html($poster->session()) ?></span></p>
										<?php echo html($poster->title()) ?>
										<p class="author"><?php echo html($poster->author()) ?></p>
									</div>
									<div class="panel-footer">
										<?php if ( $poster->hasDocuments() ) { ?>
											<?php foreach ( $poster->documents() as $document) { ?>
											     <a href="<?php echo $document->url() ?>" class="btn btn-default btn-block" target="_blank">View PDF</a>  
											<?php } ?>   
										<?php } ?>
									</div>
								</div>
							</div> <!-- /col -->
						</div> <!-- /#Px -->

					<?php endforeach ?>	

				</div> <!-- /row -->
			</div> <!-- /downloads -->
	</article>
</section>



<?php snippet('footer') ?>