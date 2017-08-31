<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<!-- CSRF Token -->
		<meta name="csrf-token" content="{{ csrf_token() }}">

		<title>{{ config('app.name') }}</title>

		<!-- Styles -->
    @yield('styles')
		<link href="{{ secure_asset('css/navbar.css') }}" rel="stylesheet">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.13/semantic.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Pacifico">

		<!-- Scripts -->
		<script>
				window.Laravel = {!! json_encode([
						'csrfToken' => csrf_token(),
				]) !!};
		</script>
</head>
<body>
	<div class="ui padded container segment">
		@include('layouts.nav')
	</div>
	@yield('content')
	@yield('registration')
	<!-- Scripts -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.13/semantic.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.ns-autogrow/1.1.6/jquery.ns-autogrow.min.js"></script>
	@yield('scripts')
  <script src="{{ secure_asset('js/script.js') }}"></script>
</body>
</html>
