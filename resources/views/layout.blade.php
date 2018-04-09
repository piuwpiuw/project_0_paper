<!doctype html>
<html>
<head>
	<title>@yield('title')</title>
	<meta charset='utf-8'/>
	{{ Html::style('css/basic-print.css') }}
	{{ Html::style('css/basic-screen.css') }}
	<style type='text/css'></style>
</head>
<body>
	@yield('content')
</body>
</html>