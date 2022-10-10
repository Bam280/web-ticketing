<!doctype html>
<html class="no-js" lang="en">

<head>
    <script src="https://kit.fontawesome.com/2692d3a15a.js" crossorigin="anonymous"></script>
</head>
@include('frontend.partials.head')

<body>

    <div class="main-wrapper">

        <!-- Preloader Start  -->
        <div class="preloader">
            <div class="loader"></div>
        </div>
        <!-- Preloader End  -->
        @include('frontend.partials.navbar')
        @yield('content')
        @include('frontend.partials.footer')

    </div>

    @include('frontend.partials.script')
    @yield('script')

</body>

</html>
