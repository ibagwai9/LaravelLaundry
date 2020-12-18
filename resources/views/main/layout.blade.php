<!DOCTYPE html>
<html lang="en">

<head>
	<title>{{ ENV('APP_TITLE') }}</title>

	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="format-detection" content="telephone=no" />
  	<meta name="csrf-token" content="{{ csrf_token() }}">
	<meta name="description" content="{{ ENV('description') }}">
	<meta name="keywords" content="{{ ENV('keywords') }}">

 	<meta name="theme-color" content="#ffffff">
	<!-- Main style -->
	
	<link rel="stylesheet" href="{{ url('/main/css/style.css') }}">

	<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //Meta-Tags -->
<!-- Custom-Stylesheet-Links -->
<!-- Bootstrap-CSS --> <link href="main/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<!-- Font-awesome-CSS --> <link href="main/css/font-awesome.css" rel="stylesheet">
<!-- Banner-slider-CSS --> <link rel="stylesheet" type="text/css" href="main/css/zoomslider.css" />
<!-- Owl-carousel-CSS --><link href="main/css/owl.carousel.css" rel="stylesheet">
<!-- Index-Page-CSS --><link href="main/css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- //Custom-Stylesheet-Links -->
<!--web-fonts-->
<!-- Logo-font --><link href="//fonts.googleapis.com/css?family=Hind+Vadodara:300,400,500,600,700" rel="stylesheet">
<!-- Body-font --><link href="//fonts.googleapis.com/css?family=Lato:300,400,700" rel="stylesheet">
<!-- Headings-font --><link href="//fonts.googleapis.com/css?family=Cabin+Sketch:400,700" rel="stylesheet">
<!--//web-fonts-->
<!--//fonts-->
<!-- js -->
</head>
<body>
		
	@yield('content')

	@include('main.common.footer')
	<script type="text/javascript" src="{{ url('main/js/jquery-2.1.4.min.js') }}"></script>
	<script type="text/javascript" src="{{ url('main/js/modernizr-2.6.2.min.js') }}"></script>
	<script type="text/javascript" src="{{ url('main/js/jquery.zoomslider.min.js') }}"></script>
	<!-- requried-jsfiles-for owl -->
	<script src="{{ url('main/js/owl.carousel.js') }}"></script>
	<script>
		$(document).ready(function() {
			$("#owl-demo2").owlCarousel({
			items : 1,
			lazyLoad : false,
			autoPlay : true,
			navigation : false,
			navigationText : false,
			pagination : true,
				});
		});
		</script>
								<!-- //requried-jsfiles-for owl -->
	<!-- start-smoth-scrolling -->
	<script type="text/javascript" src="{{ url('main/js/move-top.js') }}"></script>
	<script type="text/javascript" src="{{ url('main/js/easing.js') }}"></script>
	<script type="text/javascript">
		jQuery(document).ready(function($) {
			$(".scroll").click(function(event){		
				event.preventDefault();
				$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
			});
		});
	</script>
	<!-- start-smoth-scrolling -->
	<!-- here stars scrolling icon -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			*/
								
			$().UItoTop({ easingType: 'easeOutQuart' });
								
			});
	</script>
	<!-- //here ends scrolling icon -->
	<!--js for bootstrap working-->
		<script src="{{ url('main/js/bootstrap.js') }}"></script>
	<!-- //for bootstrap working -->

  	@yield('js-scripts')

</body>

</html>
