<!DOCTYPE html>
<html lang="en-US">
<head>
    @yield('title')
    @include('client.partial.header')

    @section('head')@show
</head>
<body
    class="home page-template-default page page-id-14 wp-embed-responsive theme-kudil woocommerce-no-js layout-wide page-with-slider no-breadcrumb wpb-js-composer js-comp-ver-6.5.0 vc_responsive">
    <!-- **Wrapper** -->
    <div class="wrapper">
        <!-- ** Inner Wrapper ** -->
            <div class="inner-wrapper">

                <div id="header-wrapper">
                    @include('client.layout.header')
                    @yield('banner')
                </div>

            @yield('content')
            @include('client.layout.footer')
        </div>
    </div>
    @include('client.partial.footer')

    @section('footer')@show
</body>
</html>


