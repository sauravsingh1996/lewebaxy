<!doctype html>
<html> 
<head>
@include('include.head')
</head>
<body>
	 <div class="container">
			<section class="content">
				@yield('content')
			</section>
			
			<input type="hidden" name="hf_base_url" id="hf_base_url" value="{{ url('/') }}">
	</div>
	@include('include.footer')
</body>
</html>   