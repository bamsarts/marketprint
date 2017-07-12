<!DOCTYPE html>
<html>
<head>
	@include('includes.head')
	
</head>
<body onload="initialize()" class="inmap innerpage">
	
	<main>
		@yield('contents')
	</main>

	<footer>
		
		@include('includes.scripts')

	</footer>

</body>
</html>