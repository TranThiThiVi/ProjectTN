<!DOCTYPE html>
<html lang="en">
<head>
@include('client.share.css')
</head>
<body>
    <div class="boxed_wrapper">
        <!-- Preloader -->
        {{-- <div class="loader-wrap">
            <div class="preloader"><div class="preloader-close">Preloader Close</div></div>
            <div class="layer layer-one"><span class="overlay"></span></div>
            <div class="layer layer-two"><span class="overlay"></span></div>
            <div class="layer layer-three"><span class="overlay"></span></div>
        </div> --}}
        @include('client.share.menu')

        @yield('content')

        <!-- main-footer -->
        @include('client.share.foot')
        <!-- main-footer end -->
    </div>
    @include('client.share.js')
    @yield('js')
</body>
</html>
