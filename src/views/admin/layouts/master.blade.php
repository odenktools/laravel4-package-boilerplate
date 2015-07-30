<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Laravel PHP Framework</title>

	@include('coolcms::admin.partials.header-media')
	
	{{ HTML::script('packages/odenktools/coolcms/js/odenktools.js') }}
	
</head>
<body>
	<div class="welcome">
		
		<h1>MASTER LAYOUT</h1>

        <div>
            @yield('mainContent')
        </div>

		
	</div>
</body>
</html>
