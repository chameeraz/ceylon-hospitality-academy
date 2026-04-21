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
    <meta property="og:url" content="{{ url()->current() }}">`
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



    {{-- Floating WhatsApp Button --}}
    <a href="https://wa.me/94707397328" target="_blank" rel="noopener noreferrer" aria-label="Chat on WhatsApp"
        style="
            position: fixed;
            bottom: 24px;
            right: 24px;
            z-index: 9999;
            width: 56px;
            height: 56px;
            background-color: #25D366;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0 4px 12px rgba(0,0,0,0.25);
            transition: transform 0.2s ease, box-shadow 0.2s ease;
            text-decoration: none;
        "
        onmouseover="this.style.transform='scale(1.12)';this.style.boxShadow='0 6px 20px rgba(0,0,0,0.35)';"
        onmouseout="this.style.transform='scale(1)';this.style.boxShadow='0 4px 12px rgba(0,0,0,0.25)';">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" width="30" height="30" fill="#ffffff">
            <path d="M16 .5C7.44.5.5 7.44.5 16c0 2.74.72 5.42 2.1 7.78L.5 31.5l7.94-2.08A15.44 15.44 0 0016 31.5C24.56 31.5 31.5 24.56 31.5 16S24.56.5 16 .5zm0 28.2a13.64 13.64 0 01-6.95-1.9l-.5-.3-5.16 1.35 1.38-5.02-.33-.52A13.7 13.7 0 1116 28.7zm7.52-10.27c-.41-.2-2.43-1.2-2.8-1.34-.38-.14-.65-.2-.93.2s-1.07 1.34-1.31 1.62c-.24.27-.48.3-.89.1a11.2 11.2 0 01-3.3-2.04 12.38 12.38 0 01-2.28-2.84c-.24-.41 0-.63.18-.84.17-.18.41-.48.62-.72.2-.24.27-.41.41-.69.14-.27.07-.51-.03-.72-.1-.2-.93-2.24-1.27-3.07-.34-.8-.68-.69-.93-.7h-.79c-.27 0-.72.1-1.1.51s-1.44 1.41-1.44 3.44 1.48 4 1.68 4.27c.2.28 2.9 4.43 7.03 6.21.98.42 1.75.67 2.34.86.98.31 1.88.27 2.58.16.79-.12 2.43-.99 2.77-1.95.34-.96.34-1.78.24-1.95-.1-.17-.38-.27-.79-.48z"/>
        </svg>
    </a>

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
