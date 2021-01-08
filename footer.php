		
		<!-- <script src="js/imagesloaded.pkgd.min.js"></script> -->
		<script src="js/charming.min.js"></script>
		<script src="js/TweenMax.min.js"></script>
		<script src="js/scripts.js"></script>
		<?php if($page == 'portfolio') { ?>
			<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
			<script>
			  AOS.init();
			</script>
		<?php } ?>
		<script>
			// Preload all the images in the page
			imagesLoaded(document.querySelectorAll('.intro__img, .reel__img'), {background: true}, () => document.body.classList.remove('loading'));
		</script>
	</body>
</html>