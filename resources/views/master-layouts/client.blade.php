<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>Junjitix - Music Festival Event</title>
    <link rel="icon" href="{{ asset('client/images-dj/icon.png') }}" type="image/gif" sizes="16x16">
    <meta content="text/html;charset=utf-8" http-equiv="Content-Type">
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="Rockfest - Music Festival Event, DJ Concert and Night Club Website Template" name="description" />
    <meta content="" name="keywords" />
    <meta content="" name="author" />
    <!-- CSS Files
    ================================================== -->
    <link id="bootstrap" href="{{ asset('client/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <link id="bootstrap-grid" href="{{ asset('client/css/bootstrap-grid.min.css') }}" rel="stylesheet" type="text/css" />
    <link id="bootstrap-reboot" href="{{ asset('client/css/bootstrap-reboot.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('client/css/animate.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('client/css/owl.carousel.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('client/css/owl.theme.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('client/css/owl.transitions.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('client/css/magnific-popup.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('client/css/jquery.countdown.css') }}" rel="stylesheet" type="text/css" />
    <link id="mdb" href="{{ asset('client/css/mdb.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('client/css/style.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('client/css/de-dj.css') }}" rel="stylesheet" type="text/css" />
    <!-- color scheme -->
    <link id="colors" href="{{ asset('client/css/colors/scheme-02.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('client/css/coloring.css') }}" rel="stylesheet" type="text/css" />
</head>

<body class="dark-scheme">

    {{ $slot }}

    <!-- Javascript Files
    ================================================== -->
    <script src="{{ asset('client/js/jquery.min.js') }}"></script>
    <script src="{{ asset('client/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('client/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('client/js/wow.min.js') }}"></script>
    <script src="{{ asset('client/js/jquery.isotope.min.js') }}"></script>
    <script src="{{ asset('client/js/easing.js') }}"></script>
    <script src="{{ asset('client/js/owl.carousel.js') }}"></script>
    <script src="{{ asset('client/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('client/js/enquire.min.js') }}"></script>
    <script src="{{ asset('client/js/jquery.plugin.js') }}"></script>
    <script src="{{ asset('client/js/jquery.countTo.js') }}"></script>
    <script src="{{ asset('client/js/jquery.countdown.js') }}"></script>
    <script src="{{ asset('client/js/jquery.lazy.min.js') }}"></script>
    <script src="{{ asset('client/js/jquery.lazy.plugins.min.js') }}"></script>
    <script src="{{ asset('client/js/mdb.min.js') }}"></script>
    <script src="{{ asset('client/js/jquery.countdown.js') }}"></script>
    <script src="{{ asset('client/js/countdown-custom.js') }}"></script>
    <script src="{{ asset('client/js/cookit.js') }}"></script>
    <script src="{{ asset('client/js/designesia.js') }}"></script>

<!-- COOKIES PLUGIN  -->
     <script>
      $(document).ready(function() {
        $.cookit({
          backgroundColor: '#cdff6b',
          messageColor: '#000000',
          linkColor: '#000000',
          buttonColor: '#000000',
          messageText: "This website uses cookies to ensure you get the best experience on our website.",
          linkText: "Learn more",
          linkUrl: "02_djfest-index.html",
          buttonText: "I accept",
        });
      });
    </script>
</body>

</html>
