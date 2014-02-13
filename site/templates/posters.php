<?php snippet('header') ?>
<?php snippet('menu') ?>
<?php snippet('submenu') ?>
<?php snippet('poster-helper') ?>

<section class="content">
	<article>
			<h1>Posters</h1>

            <div id="poster-selection">
                <div class="btn-group btn-group-justified hidden-xs">
                    <a href="" class="btn btn-default filter" data-filter="all">All</a>
                    <a href="" class="btn btn-default filter" data-filter="session-1">Session 1</a>
                    <a href="" class="btn btn-default filter" data-filter="session-2">Session 2</a>
                    <a href="" class="btn btn-default filter" data-filter="session-3">Session 3</a>
                    <a href="" class="btn btn-default filter" data-filter="session-4">Session 4</a>
                    <a href="" class="btn btn-default filter" data-filter="session-5">Session 5</a>
                </div>
                <div class="btn-group btn-group-vertical visible-xs">
                    <a href="" class="btn btn-default filter" data-filter="all">All</a>
                    <a href="" class="btn btn-default filter" data-filter="session-1">Session 1</a>
                    <a href="" class="btn btn-default filter" data-filter="session-2">Session 2</a>
                    <a href="" class="btn btn-default filter" data-filter="session-3">Session 3</a>
                    <a href="" class="btn btn-default filter" data-filter="session-4">Session 4</a>
                    <a href="" class="btn btn-default filter" data-filter="session-5">Session 5</a>
                </div>               
            </div>


			
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
						
						<div id="P<?php echo $poster->id() ?>" class="mix <?php echo seoUrl($poster->session()) ?>">
							<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
								<div class="panel panel-default <?php echo $classadd; ?>">
									<div class="panel-body">
                                        <?php if (strpos($poster->id(),'.') !== false) { ?>
                                            <p><span class="badge">TOP RANKED </span> <span id="<?php echo seoUrl($poster->session()) ?>" class="pull-right"><?php echo html($poster->session()) ?></span></p>
                                            <?php } else { ?>
										<p><span class="badge">P<?php echo $poster->id() ?> </span> <span id="<?php echo seoUrl($poster->session()) ?>" class="pull-right"><?php echo html($poster->session()) ?></span></p>
                                        <?php } ?>
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