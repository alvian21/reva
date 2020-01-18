
</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>

<link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">

    <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">

</head>

<style>
    body {
        font-family: 'Poppins', sans-serif;
    }

    img {
        margin-top: 3%;
    }
</style>

<body>

   @yield('content')
    <!-- Script -->
    <script src="{{ asset('assets/js/plugins/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('assets/js/popper.min.js')}}"></script>
    @yield('script')
</body>

</html>
