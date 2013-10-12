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
	<div id="meet-us"></div>
</div>
<script id="meet-template" type="text/html">
<ul>
	<% _.each( people, function( person ) { %>
		<li class="cf">
			<div class="image-holder"><img alt="<%= person.name %>" src="<%= person.photo %>"></div>
			<h3><%= person.name %> <a alt="<%= person.name %> on twitter" href="http://twitter.com/<%= person.twitter %>"><i class="icon-twitter"></i></a></h3>
			<h6><%= person.position %></h6>
		</li>
	<% } ); %>
</ul>
</script>

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/underscore.js/1.5.2/underscore-min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/backbone.js/1.0.0/backbone-min.js"></script>
<script src="<?php WPONA::get_directory(); ?>/js/lib/tabletop/backbone.tabletopSync.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/tabletop.js/1.1.0/tabletop.min.js"></script>
<script src="<?php WPONA::get_directory(); ?>/js/app.js"></script>

</body>
</html>