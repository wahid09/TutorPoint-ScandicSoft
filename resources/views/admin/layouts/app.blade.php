<!DOCTYPE html>
<html>
<head>
	@include('admin/layouts/head')
</head>
<body class="theme-red">
	@include('admin/layouts/pageloder')
	@include('admin/layouts/topnav')
	@include('admin/layouts/sidebar')
	 @section('main-content')
		  @show


	@include('admin/layouts/footer')
</body>
</html>