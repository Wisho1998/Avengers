<!DOCTYPE html>
<html>
	<head>
		<title>Avengers | @yield('title')</title>
		<link rel="icon" type="image/png" href="Icon.png" />
		<link href="https://fonts.googleapis.com/css?family=Marvel" rel="stylesheet"> 	
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link href="{{ asset('css/avengers.css')}}" rel="stylesheet" />
		<link href="{{ asset('css/avengers.css')}}" rel="stylesheet" />
		
		<link href="{{ asset('assets/plugins/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" />
		
		@yield('styles')
	</head>
	<body>
		@include('components.header')
		
		@yield('content')
		<script type="text/javascript" src="{{ asset('assets/plugins/jquery/jquery.min.js')}}"></script>
		<script type="text/javascript" src="{{ asset('assets/plugins/bootstrap/js/bootstrap.min.js')}}"></script>
		@yield('scripts')
	</body>
</html>
