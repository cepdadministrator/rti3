

</div>

<div class="container">
	<hr class="soften" />

	<footer>
		<div class="logos">
			<a href="http://www.radonc.utoronto.ca/" target="_blank"><img src="http://cdn.cepdtoronto.ca/signatures/logo-radiation-oncology.gz.svg" onerror="this.onerror=null; this.src='http://cdn.cepdtoronto.ca/signatures/logo-radiation-oncology.gz.png'" alt="Radiation Oncology, Faculty of Medicine, University of Toronto" width="275"></a>
		</div>
	</footer>
</div>

<div class="overlay overlay-contentscale">
	<button type="button" class="overlay-close"><i class="fa fa-times"></i></button>
	<nav>
		<ul class="">
		    <?php foreach($pages->visible() AS $p): ?>
			    <li <?php echo ($p->isOpen()) ? ' class="active"' : '' ?>><a href="<?php echo $p->url() ?>"><?php echo html($p->title()) ?></a></li>
		    <?php endforeach ?>
		</ul>
	</nav>
</div>


	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script src="//code.jquery.com/jquery.js"></script>

	<!-- Include all compiled plugins (below), or include individual files as needed -->
	<?php echo js('assets/js/bootstrap.min.js') ?>
	<?php echo js('assets/js/holder.js') ?>


	<!-- Enable responsive features in IE8 with Respond.js (https://github.com/scottjehl/Respond) -->
	<?php echo js('assets/js/respond.min.js') ?>

	<?php echo js('assets/js/jquery.fittext.js') ?>

	<?php echo js('assets/js/jquery.equalheights.min.js') ?>
	<?php echo js('assets/js/jquery.debouncedresize.js') ?>
	<?php echo js('assets/js/classie.js') ?>
	<?php echo js('assets/js/demo7.js') ?>
	<?php echo js('assets/js/jquery.mixitup.min.js') ?>
	
	
	
	<script type="text/javascript">
		
        setTimeout(function() {  
    		$('.downloads .panel-body').equalHeights();
    		$('.downloads .panel-footer').equalHeights();
         

        },100);
        
		$(function(){
			$('#Grid').mixitup({
                effects: ['fade'],
			    targetDisplayGrid: 'block',
			    targetDisplayList: 'block',
                transitionSpeed: 200
			});
		});
	</script>
	
	<script type="text/javascript">
	  var _gauges = _gauges || [];
	  (function() {
	    var t   = document.createElement('script');
	    t.type  = 'text/javascript';
	    t.async = true;
	    t.id    = 'gauges-tracker';
	    t.setAttribute('data-site-id', '52fe9ae692c6ac4bad002f37');
	    t.src = '//secure.gaug.es/track.js';
	    var s = document.getElementsByTagName('script')[0];
	    s.parentNode.insertBefore(t, s);
	  })();
	</script>
</body>

</html>
