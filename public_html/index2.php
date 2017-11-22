<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>jInvertScroll Demo Page</title>
		<link rel="stylesheet" href="documentation/css/example.css" />
	</head>
	<body>
		<h1>jInvertScroll Example</h1>

		<div class="horizon scroll">
			<img src="documentation/images/horizon.png" alt="" />

		</div>
		<div class="middle scroll">
			<img src="documentation/images/middle.png" alt="" />
		</div>
		<div class="front scroll">
			<img src="documentation/images/front.png" alt="" />
		</div>

		<script type="text/javascript" src="documentation/libs/jquery.min.js"></script>
		<script type="text/javascript" src="documentation/src/jquery.jInvertScroll.js"></script>
		<script type="text/javascript">
			(function($) {
				$.jInvertScroll(['.scroll'],        // an array containing the selector(s) for the elements you want to animate
					{
						height: 6000,                   // optional: define the height the user can scroll, otherwise the overall length will be taken as scrollable height
						onScroll: function(percent) {   //optional: callback function that will be called when the user scrolls down, useful for animating other things on the page
							console.log(percent);
						}
					});
			}(jQuery));
		</script>
	</body>
</html>