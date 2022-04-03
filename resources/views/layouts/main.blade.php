<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Etrain</title>
    <link rel="icon" href="{{ asset('img/favicon.png') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('css/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>
    @include('partials.header')

    @includeWhen($breadcrumb ?? null, 'partials.breadcrumb')

    @yield('content')

    @include('partials.footer')

    <script src="{{ asset('js/jquery-1.12.1.min.js') }}"></script>
    <script src="{{ asset('js/popper.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/jquery.magnific-popup.js') }}"></script>
    <script src="{{ asset('js/swiper.min.js') }}"></script>
    <script src="{{ asset('js/masonry.pkgd.js') }}"></script>
    <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('js/jquery.nice-select.min.js') }}"></script>
    <script src="{{ asset('js/slick.min.js') }}"></script>
    <script src="{{ asset('js/jquery.counterup.min.js') }}"></script>
    <script src="{{ asset('js/waypoints.min.js') }}"></script>
    <script src="{{ asset('js/custom.js') }}"></script>
    <script src="https://player.vimeo.com/api/player.js"></script>
</body>
<script>
    const options = {
        id: 64609943,
        width: 640,
        loop: true
    };
    var element = $(".my-video");
    const player = new Vimeo.Player(element, options);

    var element1 = $(".my-video1");
    const player1 = new Vimeo.Player(element1, options);

    var element2 = $(".my-video2");
    const player2 = new Vimeo.Player(element2, options);

    var element3 = $(".my-video3");
    const player3 = new Vimeo.Player(element3, options);

    player.setVolume(1);
    player1.setVolume(1);
    player2.setVolume(1);
    player3.setVolume(1);
    player.play();
    player.on('ended', function() {
        player1.play();
    });
    player1.on('ended', function() {
        console.log('played the video!');
    });
    player2.on('ended', function() {
        console.log('played the video!');
    });
    player3.on('ended', function() {
        console.log('played the video!');
    });
</script>
</html>