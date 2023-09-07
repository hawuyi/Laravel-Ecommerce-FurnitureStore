<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{asset('css/admin.css')}}">
</head>
<body>
    @include('admin.partials.nav')
   
    <main class="admin-main">
        @if (session('success'))
            <div class="alert alert-success">
                {{session('success')}}
            </div>
        @endif
        @if (session('error'))
            <div class="alert alert-danger">
                {{session('error')}}
            </div>
        @endif
        @if (session('warning'))
            <div class="alert alert-warning">
                {{session('warning')}}
            </div>
        @endif
        @yield('content')
    </main>
</body>
</html>