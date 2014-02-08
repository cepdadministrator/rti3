

</div>

<footer>
	<div class="logos">
		<a href="http://www.radonc.utoronto.ca/" target="_blank" class="right-logo"><img src="http://cdn.cepdtoronto.ca/signatures/logo-radiation-oncology.gz.svg" onerror="this.onerror=null; this.src='http://cdn.cepdtoronto.ca/signatures/logo-radiation-oncology.gz.png'" alt="Radiation Oncology, Faculty of Medicine, University of Toronto" width="275"></a>
	</div>
</footer>

<!-- <form action="#">
  <button onclick="
    var key = google.bookmarkbubble.Bubble.prototype.LOCAL_STORAGE_PREFIX 
            + google.bookmarkbubble.Bubble.prototype.DISMISSED_;
    window.localStorage[key] = String(0);">Reset Counter
  </button>
</form> -->

	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script src="//code.jquery.com/jquery.js"></script>

	<!-- Include all compiled plugins (below), or include individual files as needed -->
	<?php echo js('assets/js/bootstrap.min.js') ?>
	<?php echo js('assets/js/holder.js') ?>


	<!-- Enable responsive features in IE8 with Respond.js (https://github.com/scottjehl/Respond) -->
	<?php echo js('assets/js/respond.min.js') ?>
<!-- 
	<?php echo js('assets/js/bubble/bookmark_bubble.js') ?>
	<?php echo js('assets/js/bubble/example.js') ?>
 -->
	<?php echo js('assets/js/jquery.fittext.js') ?>

	<?php echo js('assets/js/jquery.equalheights.js') ?>
	<?php echo js('assets/js/jquery.debouncedresize.js') ?>

	<script language=javascript type='text/javascript'>
	
		function on_resize(c,t){onresize=function(){clearTimeout(t);t=setTimeout(c,100)};return c};

		$(document).ready(function() {
			on_resize(function() {
				var winW = $(window).width();
				if (winW < 768) {
					$(".panel-heading").removeAttr('style');
					$(".panel-body").removeAttr('style');
				}

				if (winW > 767) {
					$(".panel-heading").removeAttr('style');
					$(".panel-heading").equalHeights();
					$(".panel-body").removeAttr('style');
					$(".panel-body").equalHeights();
					console.log("resized");
				}
			});
		});
	
		$(document).ready(function() {
			var winW = $(window).width();
			if (winW > 767) {
				$(".panel-heading").equalHeights();
				$(".panel-body").equalHeights();
			}

		});
		
		$(document).ready(function(){
			$('#test').click(function(e) {
				e.preventDefault();
				itemID = $(this).attr('data-itemID');
				toggleItem = itemID+" .panel-body";
				$( toggleItem ).toggle();
			});
			$('#toggleDescription').click(function(e) {
				$( ".description" ).toggle();
				$(".panel-body").removeAttr('style');

				var winW = $(window).width();
				
				if (winW > 767) {
					$(".panel-body").removeAttr('style');
					$(".panel-body").equalHeights();
				}
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
    t.setAttribute('data-site-id', '525d8b7e108d7b39b1000090');
    t.src = '//secure.gaug.es/track.js';
    var s = document.getElementsByTagName('script')[0];
    s.parentNode.insertBefore(t, s);
  })();
</script>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-42763020-16', 'cepdtoronto.ca');
  ga('send', 'pageview');

</script>

</body>

</html>
