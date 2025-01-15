<!doctype html>
<html class="no-js" lang="en">

<head>
    <base href="{{ asset('backend/') }}/">
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>@yield('title')</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">

    <!-- favicon
  ============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="img/logo/logo.ico">
    <!-- Google Fonts
  ============================================ -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,900" rel="stylesheet">
    <!-- Bootstrap CSS
  ============================================ -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Bootstrap CSS
  ============================================ -->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <!-- owl.carousel CSS
  ============================================ -->
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/owl.theme.css">
    <link rel="stylesheet" href="css/owl.transitions.css">
    <!-- animate CSS
  ============================================ -->
    <link rel="stylesheet" href="css/animate.css">
    <!-- normalize CSS
  ============================================ -->
    <link rel="stylesheet" href="css/normalize.css">
    <!-- meanmenu icon CSS
  ============================================ -->
    <link rel="stylesheet" href="css/meanmenu.min.css">
    <!-- main CSS
  ============================================ -->
    <link rel="stylesheet" href="css/main.css">
    <!-- educate icon CSS
  ============================================ -->
    <link rel="stylesheet" href="css/educate-custon-icon.css">
    <!-- morrisjs CSS
  ============================================ -->
    <link rel="stylesheet" href="css/morrisjs/morris.css">
    <!-- mCustomScrollbar CSS
  ============================================ -->
    <link rel="stylesheet" href="css/scrollbar/jquery.mCustomScrollbar.min.css">
    <!-- metisMenu CSS
  ============================================ -->
    <link rel="stylesheet" href="css/metisMenu/metisMenu.min.css">
    <link rel="stylesheet" href="css/metisMenu/metisMenu-vertical.css">
    <!-- style CSS
  ============================================ -->
    <link rel="stylesheet" href="style.css">
    <!-- responsive CSS
  ============================================ -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- modernizr JS
  ============================================ -->
    <script src="js/vendor/modernizr-2.8.3.min.js"></script>
    <!-- footer
  ============================================ -->
  <link rel="stylesheet" href="css/footer.css">
   <!-- header
  ============================================ -->
  <link rel="stylesheet" href="css/header.css">

</head>

<body>
    @include('backend.partials.left-sidebar')
    <!-- End Left menu area -->
    <!-- Start Welcome area -->
    <div class="all-content-wrapper">
        @include('backend.partials.header')
        @yield('main')
        @include('backend.partials.footer')
    </div>

    <script>
      document.addEventListener('DOMContentLoaded', function() {
          setTimeout(function() {
              let alerts = document.querySelectorAll('.alert');
              alerts.forEach(alert => {
                  alert.classList.remove('show');
                  alert.classList.add('fade');
                  setTimeout(() => alert.remove(), 500); // Thêm một chút thời gian để hiệu ứng mờ diễn ra
              });
          }, 3000);
      });
  </script>
    <!-- jquery
  ============================================ -->
    <script src="js/vendor/jquery-1.12.4.min.js"></script>
    <!-- bootstrap JS
  ============================================ -->
    <script src="js/bootstrap.min.js"></script>
    <!-- wow JS
  ============================================ -->
    <script src="js/wow.min.js"></script>
    <!-- price-slider JS
  ============================================ -->
    <script src="js/jquery-price-slider.js"></script>
    <!-- meanmenu JS
  ============================================ -->
    <script src="js/jquery.meanmenu.js"></script>
    <!-- owl.carousel JS
  ============================================ -->
    <script src="js/owl.carousel.min.js"></script>
    <!-- sticky JS
  ============================================ -->
    <script src="js/jquery.sticky.js"></script>
    <!-- scrollUp JS
  ============================================ -->
    <script src="js/jquery.scrollUp.min.js"></script>
    <!-- mCustomScrollbar JS
  ============================================ -->
    <script src="js/scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="js/scrollbar/mCustomScrollbar-active.js"></script>
    <!-- metisMenu JS
  ============================================ -->
    <script src="js/metisMenu/metisMenu.min.js"></script>
    <script src="js/metisMenu/metisMenu-active.js"></script>
    <!-- main JS
  ============================================ -->
    <script src="js/main.js"></script>
</body>

</html>
