<!DOCTYPE html>
<html lang="en-US">
<head>
    @yield('title')
    @include('client.partial.header')
</head>
<body style="font-family: Arial"
    class="home page-template-default page page-id-14 wp-embed-responsive theme-kudil woocommerce-no-js layout-wide page-with-slider no-breadcrumb wpb-js-composer js-comp-ver-6.5.0 vc_responsive">
<!-- **Wrapper** -->
<div class="wrapper">
    <div class="inner-wrapper" style="font-family: Arial">
        @include('client.layout.header')
        @yield('content')
        @include('client.layout.footer')
    </div>
</div>
@include('client.partial.footer')
</body>
</html>
