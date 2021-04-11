<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Login</title>
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="{{asset('admin/vendor/bootstrap/css/bootstrap.min.css')}}">
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="{{asset('admin/vendor/fontawesome/css/font-awesome.min.css')}}">
    <!-- Custom Font Icons CSS-->
    <link rel="stylesheet" href="{{asset('admin/css/font.css')}}">
    <!-- Google fonts - Muli-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Muli:300,400,700">

    <!-- Styles -->
    <link href="{{asset('admin/css/login.css')}}" rel="stylesheet">
</head>
<body>

<main>
    @yield('content')
</main>
<script src="{{asset('admin/vendor/js/jquery.min.js')}}"></script>
<script src="{{asset('admin/vendor/js/popper.min.js')}}"> </script>
<script src="{{asset('admin/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
<script src="{{asset('admin/vendor/fontawesome/js/fontawesome.min.js')}}"></script>
<script src="{{asset('admin/js/app.js') }}"></script>
</body>
</html>
