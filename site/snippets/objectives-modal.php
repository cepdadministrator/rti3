<a data-toggle="modal" href="#<?php echo $code; ?>" class="btn btn-default btn-sm">Objectives</a>

<div class="modal fade" id="<?php echo $code; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="icon-remove"></i></button>
				<h4 class="modal-title">Goals and Objectives</h4>
			</div>
			<div class="modal-body">
				<h4><?php echo $title; ?></h4>
				<?php echo $goals; ?>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
			</div>
		</div><!-- /.modal-content -->
	</div><!-- /.modal-dialog -->
</div><!-- /.modal -->