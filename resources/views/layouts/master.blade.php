<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('bootstrap/bootstrap-5.0.2-dist/css/bootstrap.min.css')}}">
    <script src="{{asset('bootstrap/bootstrap-5.0.2-dist/js/bootstrap.bundle.min.js')}}" defer></script>
    <title>EduFun</title>
</head>
<body>
    @include('components.navbar')
    @yield('content')
    @include('components.footer')
</body>
</html>