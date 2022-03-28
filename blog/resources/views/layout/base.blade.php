<!DOCTYPE html><html lang="en">
<head>
    <title>拂晓右耳</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <link rel="stylesheet" href="{{URL::asset('sass/app.scss')}}">
    <link rel="stylesheet" href="{{URL::asset('css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{URL::asset('css/bootstrap-theme.css')}}">
    <script rel="stylesheet" href="{{URL::asset('css/jquery.min.js')}}"></script>
    <script rel="stylesheet" href="{{URL::asset('css/bootstrap.js')}}"></script>
    <link href="https://fastly.jsdelivr.net/npm/@bootcss/v3.bootcss.com@1.0.35/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="https://fastly.jsdelivr.net/npm/@bootcss/v3.bootcss.com@1.0.35/assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="https://fastly.jsdelivr.net/npm/@bootcss/v3.bootcss.com@1.0.35/examples/starter-template/starter-template.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="https://fastly.jsdelivr.net/npm/@bootcss/v3.bootcss.com@1.0.35/assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="https://fastly.jsdelivr.net/npm/@bootcss/v3.bootcss.com@1.0.35/assets/js/ie-emulation-modes-warning.js"></script>
</head>
<body>

{{-- 包含页头 --}}
@include('layout.heard')

{{-- 继承后插入的内容 --}}
@yield('content')

{{-- 包含页脚 --}}
@include('layout.footer')
</body>
</html>
