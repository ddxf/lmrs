<!DOCTYPE html><html lang="en">
<head>
    <title>拂晓右耳</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <link rel="stylesheet" href="{{URL::asset('css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{URL::asset('css/bootstrap-theme.css')}}">
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
