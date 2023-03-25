<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <link href="{{asset('assets')}}/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{asset('assets')}}/css/style.css" rel="stylesheet">
</head>
<body>
@include('doctor.include.header')

@yield('content')

@include('doctor.include.footer')
<script src="{{asset('assets')}}/js/bootstrap.bundle.min.js"></script>
</body>
</html>
