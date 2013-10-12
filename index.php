<?php require 'functions.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes, minimum-scale=1.0, maximum-scale=1.0">	
	<title>The Washington Post at ONA</title>
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css">	
	<link rel="stylesheet" href="<?php WPONA::get_directory(); ?>/css/style.css">
</head>
<body>
<div id="content">
	<div id="intro">
		<h1>Hello</h1>
		<p>The Post is at ONA. Let's meet.</p>
	</div>
	<div id="time">
		<p>3 p.m. - 4, Thur and Fri at the hotel bar</p>
	</div>
	<ul id="meet-us"></ul>
</div>
<script id="meet-template" type="text/html">
	<li class="cf">
		<div class="image-holder"><img alt="{{ name }}" src="{{ photo }}"></div>
		<h3>{{ name }} <a alt="{{ name }} on twitter" href="http://twitter.com/{{ twitter }}"><i class="icon-twitter"></i></a></h3>
		<h6>{{ position }}</h6>
		{{# if talk1 }}
			<h5><a class="talks-open" href="javascript:void(0);">See my talks <i class="icon-chevron-down"></i></a></h5>
			<ul class="talks">
				<li><a alt="{{ talk1 }}" href="{{ talk1link }}">{{ talk1 }}</a></li>
				{{# if talk2 }}<li><a alt="{{ talk2 }}" href="{{ talk2link }}">{{ talk2 }}</a></li>{{/ if }}
				{{# if talk3 }}<li><a alt="{{ talk3 }}" href="{{ talk3link }}">{{ talk3 }}</a></li>{{/ if }}
			</ul>
		{{/ if }}
	</li>
</script>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/handlebars.js/1.0.rc.2/handlebars.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/tabletop.js/1.1.0/tabletop.min.js"></script>
<script src="<?php WPONA::get_directory(); ?>/js/app.js"></script>
</body>
</html>