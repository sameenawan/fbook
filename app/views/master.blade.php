<!DOCTYPE html>
<html lang='en'>
<head> 
	<meta charset="UTF-8">
	<link href='http://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
	@section('head')
	<title>Project 3</title>
	@show
</head>
<body>
	<div class="header">
		<h1>Developers Best Friend</h1>
		@yield('pagetitle')
	</div>
	<div class="content">
		@yield('body')
	</div>
</body>
