<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Pure CSS slideshow</title>
	<meta name="description" content="Pure CSS slideshow">
	<meta name="author" content="Jochen Vandendriessche">
	<link rel="stylesheet" href="css/reset.css">
	<link rel="stylesheet" href="css/default.css">
	<link rel="stylesheet" href="css/slideshow.css">
</head>
<body>

<div class="page">

	<h1>Pure CSS slideshow</h1>

	<p>A proof of concept to have an image slideshow without javascript</p>

	<div class="slideshow">
		<input type="radio" name="slide" id="item-1" checked="checked" />
		<div class="slideshow-item">
			<img src="http://lorempixel.com/640/360/sports/1" />
			<label for="item-3" class="previous">Go to slide 3</label>
			<label for="item-2" class="next">Go to slide 2</label>
		</div>
	
		<input type="radio" name="slide" id="item-2" />
		<div class="slideshow-item">
			<img src="http://lorempixel.com/640/360/sports/2" />
			<label for="item-1" class="previous">Go to slide 1</label>
			<label for="item-3" class="next">Go to slide 3</label>
		</div>
	
		<input type="radio" name="slide" id="item-3" />
		<div class="slideshow-item">
			<img src="http://lorempixel.com/640/360/sports/3" />
			<label for="item-2" class="previous">Go to slide 2</label>
			<label for="item-1" class="next">Go to slide 1</label>
		</div>

	</div>
	
	<p>By <a href="http://twitter.com/joggink">@joggink</a></p>
	
</div>

</body>
</html>