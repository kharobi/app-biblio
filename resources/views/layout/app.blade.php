@include('partials._header')

<body class="layout-light side-menu" >
    {{-- <div class="mobile-search">
        <form action="/" class="search-form">
            <img src="{{ asset('assets/img/svg/search.svg') }}" alt="search" class="svg">
    <input class="form-control me-sm-2 box-shadow-none" type="search" placeholder="Search..." aria-label="Search">
    </form>
    </div> --}}
    
    <header class="">
        @include('partials._top_nav1')
    </header>
    {{-- <div class="container-fluid">
       <br>
       <br>
       <br>
       <br>
       <br>
       <br>
    </div> --}}
    {{-- <div class="container-fluid">
        @include('partials._top_nav1')
    </div> --}}
    <main class="main-content">
        {{-- <div class="sidebar-wrapper">
            <aside class="sidebar sidebar-collapse" id="sidebar">
                @include('partials._menu')
            </aside>
        </div> --}}
        <div class="container-fluid">
            <br>
            <br>
        </div>
        <div class="container-fluid mt-5">
            @yield('content')
        </div>
        <div class="container">
            <br>
            <br>
        </div>
        <footer class="footer-wrapper">
            @include('partials._footer')
        </footer>
    </main>



    <div id="overlayer">
        <span class="loader-overlay">
            <div class="dm-spin-dots spin-lg">
                <span class="spin-dot badge-dot dot-primary"></span>
                <span class="spin-dot badge-dot dot-primary"></span>
                <span class="spin-dot badge-dot dot-primary"></span>
                <span class="spin-dot badge-dot dot-primary"></span>
            </div>
        </span>
    </div>
    <div class="overlay-dark-sidebar"></div>
    <div class="customizer-overlay"></div>
    <div class="customizer-wrapper">
        @include('partials._customizer')
    </div>

    <script>
        var env = {
            iconLoaderUrl: "{{ asset('assets/js/json/icons.json') }}",
            googleMarkerUrl: "{{ asset('assets/img/markar-icon.png')}}",
            editorIconUrl: "{{ asset('assets/img/ui/icons.svg') }}",
            mapClockIcon: "{{ asset('assets/img/svg/clock-ticket1.sv')}}"
        }
    </script>
    <script src="{{ asset('assets/js/jquery.js') }}"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDduF2tLXicDEPDMAtC6-NLOekX0A5vlnY"></script>
    <script src="{{ asset('assets/js/plugins.min.js') }}"></script>
    <script src="{{ asset('assets/js/script.min.js') }}"></script>
    <script src="{{ asset('js/app.min.js') }}"></script>
    <script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/js/style.js') }}"></script>

    @livewireScripts
    @stack('scripts1')
</body>

</html>