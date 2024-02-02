<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('/css/bootstrap.css') }}">
    <link href="https://cdn.datatables.net/1.11.4/css/dataTables.bootstrap5.min.css" rel="stylesheet">

</head>

<body>
    <!-- Nav bar -->
    <nav class="navbar navbar-expand-md navbar-dark bg-dark">
        <div class="container">
            <a href="" class="navbar-brand"><img src="{{asset('/')}}image/category/car.jpg" height="50" width="50" style="border-radius: 50%;" alt="">Inventory</a>
            <ul class="navbar-nav">
                <li><a href="{{ route('car.create') }}" class="nav-link">Add Car</a></li>
                <li><a href="{{ route('car.index') }}" class="nav-link">View Car</a></li>
            </ul>
        </div>
    </nav>

    @yield('body');

    <!-- All Scripts-->
    <script src="{{ asset('js/bootstrap.bundle.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.11.4/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.4/js/dataTables.bootstrap5.min.js"></script>
    @stack('script')

</body>

</html>
