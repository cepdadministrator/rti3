<?php snippet('header') ?>
<?php snippet('menu') ?>
<?php snippet('submenu') ?>

<section class="content">
	<article>
			<h1>Posters</h1>
			<div class="downloads">
				<div class="row">
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

						<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
							<div class="panel panel-default <?php echo $classadd; ?>">
								<div class="panel-body">
									<p><span class="badge"><?php echo html($poster->id()) ?></span> <?php echo $fileicon; ?></p>
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

					<?php endforeach ?>	

				</div> <!-- /row -->
			</div> <!-- /downloads -->
	</article>
</section>



<?php snippet('footer') ?>