<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <title>Ceylon Hospitality Academy</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('assets/images/original.png') }}">

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
