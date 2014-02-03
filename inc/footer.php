<div class="clearfix">
	<ul id="icons-social">
		<li class="fa fa-facebook"></li>
		<li class="fa fa-google-plus"></li>
		<li class="fa fa-linkedin"></li>
		<li class="fa fa-pinterest"></li>
		<li class="fa fa-twitter"></li>
		<li class="fa fa-youtube"></li>
		<li class="fa fa-vimeo-square"></li>
	</ul>
</div>


<!- Javascript -->
<script type="text/javascript" src="/js/pageslide.min.js"></script>
<script type="text/javascript">$(".open").pageslide();</script>
<script type="text/javascript" async src="/js/backstretch.min.js"></script>
<script type="text/javascript" async src="/js/autofix.min.js"></script>
<script type="text/javascript" async src="/js/semantic.min.js"></script>
<script type="text/javascript" async src="/js/tableSort.min.js"></script>

<script>
//Backstretch
	$("#hero").backstretch("/img/hero/utah.jpg");
// AutoFix
	$('header').fixTo('body');
	$('#fooBar').fixTo('#wrapper', {mind: 'header'
	});
	
	$(window).scroll(function() {
		$('#phone').each(function(){
		var imagePos = $(this).offset().top;

		var topOfWindow = $(window).scrollTop();
			if (imagePos < topOfWindow+400) {
				$(this).addClass("slideLeft");
			}
		});
});

</script>
<script>
$('.ui.accordion').accordion();
$('table').tablesort();
$('.ui.modal').modal();
$('.ui.rating').rating();
$('.ui.dropdown').dropdown();
</script>

<script>
$('.message .close').on('click', function() {
  $(this).closest('.message').fadeOut();
});
</script>
<!-- Resmark Tracking -->


