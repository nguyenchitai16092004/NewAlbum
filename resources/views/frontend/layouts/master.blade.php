<!DOCTYPE html>
<html lang="en">

<head>
    <base href="{{ asset("/frontend") }}/">
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Essence - Fashion Ecommerce Template</title>
    <link rel="icon" href="img/core-img/favicon.ico">
    <link rel="stylesheet" href="css/core-style.css">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    @include('frontend.partials.header')
    @yield('main')
    @include('frontend.partials.footer')

    <script src="js/jquery/jquery-2.2.4.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/classy-nav.min.js"></script>
    <script src="js/active.js"></script>

</body>

</html>
