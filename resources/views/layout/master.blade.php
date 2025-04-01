<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <title>@yield('pageTitle')</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('assets/images/original.png') }}">
    <meta name="description" content="@yield('description')">
    <meta name="keywords" content="@yield('keywords')">
    <meta name="author" content="Ceylon Hospitality Academy">

    {{-- Open Graph / Social Media Sharing --}}
    <meta property="og:title" content="@yield('pageTitle')">
    <meta property="og:description" content="@yield('description')">
    <meta property="og:image" content="{{ asset('assets/images/Logo-c.png') }}">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:type" content="website">

    <!-- main font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <!-- playFair -->
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400..900;1,400..900&display=swap"
        rel="stylesheet">

    {{-- Style CSS --}}
    @include('layout.userStyles')



</head>

<body>



    {{-- Navbar included --}}
    @include('components.navbar')



    {{-- CONTENT --}}
    @yield('content')





    {{-- Footer included --}}
    @include('components.footer')

    {{-- JS --}}
    @include('layout.userScript')



    <script>
        document.addEventListener('scroll', function() {
            const header = document.getElementById('header');
            if (window.scrollY > 0) {
                header.classList.add('scrolled');
            } else {
                header.classList.remove('scrolled');
            }
        });
    </script>
</body>

</html>
