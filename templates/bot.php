<!-- SCRIPTS =============================-->
<script src="../assets/js/jquery-.js"></script>
<script src="../assets/js/bootstrap.min.js"></script>
<script src="../assets/js/anim.js"></script>
<script src="../assets/js/validate.js"></script>

<script>
//----HOVER CAPTION---//	  
jQuery(document).ready(function ($) {
	$('.fadeshop').hover(
		function(){
			$(this).find('.captionshop').fadeIn(150);
		},
		function(){
			$(this).find('.captionshop').fadeOut(150);
		}
	);
});
</script>
	
</body>
</html>