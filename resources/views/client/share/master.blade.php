<!doctype html>
<html lang="en" class="no-js">
<head>
 @include('client.share.css')
</head>
<body>
    <div class="body-wrapper">
        <!-- announcement bar start -->
        @include('client.share.header')
        <!-- announcement bar end -->

        <!-- header start -->
        @include('client.share.menu')
        <!-- header end -->
        @yield('noi_dung')

        <!-- footer start -->
        @include('client.share.foot')

        @include('client.share.js')
        @yield('js')
    </div>
</body>

</html>
