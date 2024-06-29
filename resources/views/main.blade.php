@include('layouts.header')
<body class="antialiased">

    <div class="flex flex-col min-h-screen">
        @include('layouts.nav')

        <div class="flex-1">
            @yield('content')
        </div>

        @include('layouts.footer')
    </div>
</body>

</html>
