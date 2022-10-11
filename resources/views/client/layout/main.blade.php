@extends('client.layout.layout')
@section('head')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>

@show
@section('content')

<!-- **Main** -->
<div id="main">

    <!-- ** Container ** -->
    <div class="container">
        <!-- Primary -->
        <section id="primary" class="content-full-width">
            <!-- #post-14 -->
            <div id="post-14" class="post-14 page type-page status-publish hentry">

                @foreach ($sections as $section)
                    @if( $section->status == 1)
                        {!!$section->content!!}
                    @endif
                @endforeach




            </div><!-- #post-14 -->
        </section><!-- Primary End -->
    </div>
    <!-- ** Container End ** -->

</div><!-- **Main - End ** -->
<script type="text/javascript">

    // var blogs;

    $.ajax({
        type:"GET",
        dataType:"json",
        url:'/test',
        success:function(response){
            console.log(response.blogs);
            var blogs= (response.blogs);
            var listBlog = $('#home_blogs');
            var itemBlog = $('#blog');

            $.each( blogs, function( key, blog ) {
                var itemBlogClone = itemBlog.clone().removeAttr("style");
                listBlog.append(itemBlogClone);
                itemBlogClone.find("#image_blog").find('img').attr('src',blog.image)
                itemBlogClone.find("#description_blog").text(blog.description);
                itemBlogClone.find("#title_blog").children('a').text(blog.title);
                console.log(itemBlogClone.find("#image_blog").find('img').src);
            });
        }

    });

</script>
@endsection

@section('banner')
    <!-- ** Slider ** -->
    <div id="slider">
        <div id="dt-sc-rev-slider" class="dt-sc-main-slider">
            <!-- START Home REVOLUTION SLIDER 6.3.4 -->
            <p class="rs-p-wp-fix"></p>
            <rs-module-wrap id="rev_slider_1_1_wrapper" data-source="gallery"
                style="background:transparent;padding:0;margin:0px auto;margin-top:0;margin-bottom:0;">
                <rs-module id="rev_slider_1_1" class=" rs-ov-hidden" style="" data-version="6.3.4">
                    <rs-slides>
                        <rs-slide data-key="rs-1" data-title="Slide"
                            data-thumb="//dtkudil.wpengine.com/wp-content/uploads/2018/05/slider1-100x50.jpg"
                            data-anim="ei:d;eo:d;s:600;t:fade;sl:d;">
                            <img src="https://rnzxu3lrgrj1046y63g4g7l1-wpengine.netdna-ssl.com/wp-content/uploads/2018/05/slider1.jpg"
                                title="Home" data-panzoom="d:25000;ss:100;se:115;" class="rev-slidebg" data-no-retina>
                            <!--
							-->
                            <rs-layer id="slider-1-slide-1-layer-6" data-type="image" data-rsp_ch="on"
                                data-xy="x:c;yo:570px,570px,311px,290px;" data-text="l:22;a:inherit;"
                                data-dim="w:['352px','352px','352px','352px'];h:['55px','55px','55px','55px'];"
                                data-frame_0="sX:0;tp:600;" data-frame_1="tp:600;st:4100;sp:1500;sR:4100;"
                                data-frame_999="o:0;tp:600;st:w;sR:3400;" style="z-index:5;"><img
                                    src="https://rnzxu3lrgrj1046y63g4g7l1-wpengine.netdna-ssl.com/wp-content/uploads/2018/05/txt-bg.png"
                                    width="352" height="55" data-no-retina>
                            </rs-layer>
                            <!--

							-->
                            <rs-layer id="slider-1-slide-1-layer-2" data-type="text" data-color="#c59d5f"
                                data-rsp_ch="on" data-xy="x:c;xo:5px;yo:393px,393px,169px,168px;"
                                data-text="s:60,60,40,43;l:75;a:inherit;" data-frame_0="y:100%;tp:600;"
                                data-frame_0_mask="u:t;y:100%;"
                                data-frame_1="tp:600;e:power2.inOut;st:500;sp:2000;sR:500;" data-frame_1_mask="u:t;"
                                data-frame_999="o:0;tp:600;st:w;sR:6500;" style="z-index:6;font-family:Pinyon Script;">
                                Experience the grand setting
                            </rs-layer>
                            <!--

							-->
                            <rs-layer id="slider-1-slide-1-layer-1" data-type="text" data-rsp_ch="on"
                                data-xy="x:c;yo:471px,471px,230px,221px;" data-text="s:70,70,45,30;l:75;a:inherit;"
                                data-frame_0="y:100%;tp:600;" data-frame_0_mask="u:t;y:100%;"
                                data-frame_1="tp:600;e:power2.inOut;st:2260;sp:2000;sR:2260;" data-frame_1_mask="u:t;"
                                data-frame_999="o:0;tp:600;st:w;sR:4740;"
                                style="z-index:7;font-family:lato;text-transform:uppercase;">the celebrated
                                cuisine of
                            </rs-layer>
                            <!--

							-->
                            <rs-layer id="slider-1-slide-1-layer-3" data-type="text" data-rsp_ch="on"
                                data-xy="x:c;yo:584px,584px,326px,304px;" data-text="s:25;a:inherit;"
                                data-frame_0="tp:600;" data-frame_0_mask="u:t;"
                                data-frame_1="tp:600;st:5560;sp:1200;sR:5560;" data-frame_1_mask="u:t;"
                                data-frame_999="o:0;tp:600;st:w;sR:2240;"
                                style="z-index:8;font-family:lato;text-transform:uppercase;">kudil -
                                Restaurant
                            </rs-layer>
                            <!---->
                        </rs-slide>
                        <rs-slide data-key="rs-2" data-title="Slide"
                            data-thumb="//dtkudil.wpengine.com/wp-content/uploads/2018/05/slider2-100x50.jpg"
                            data-anim="ei:d;eo:d;s:600;t:fade;sl:d;">
                            <img src="https://rnzxu3lrgrj1046y63g4g7l1-wpengine.netdna-ssl.com/wp-content/uploads/2018/05/slider2.jpg"
                                title="Home" data-panzoom="d:25000;ss:100;se:115;" class="rev-slidebg" data-no-retina>
                            <!--
							-->
                            <rs-layer id="slider-1-slide-2-layer-6" data-type="image" data-rsp_ch="on"
                                data-xy="x:c;yo:570px,570px,309px,271px;" data-text="l:22;a:inherit;"
                                data-dim="w:['352px','352px','352px','352px'];h:['55px','55px','55px','55px'];"
                                data-frame_0="sX:0;tp:600;" data-frame_1="tp:600;st:4100;sp:1500;sR:4100;"
                                data-frame_999="o:0;tp:600;st:w;sR:3400;" style="z-index:5;"><img
                                    src="https://rnzxu3lrgrj1046y63g4g7l1-wpengine.netdna-ssl.com/wp-content/uploads/2018/05/txt-bg.png"
                                    width="352" height="55" data-no-retina>
                            </rs-layer>
                            <!--

							-->
                            <rs-layer id="slider-1-slide-2-layer-2" data-type="text" data-color="#c59d5f"
                                data-rsp_ch="on" data-xy="x:c;xo:5px;yo:399px,399px,181px,155px;"
                                data-text="s:60,60,40,30;l:75;a:inherit;" data-frame_0="y:100%;tp:600;"
                                data-frame_0_mask="u:t;y:100%;"
                                data-frame_1="tp:600;e:power2.inOut;st:500;sp:2000;sR:500;" data-frame_1_mask="u:t;"
                                data-frame_999="o:0;tp:600;st:w;sR:6500;" style="z-index:6;font-family:Pinyon Script;">
                                Celebrate
                            </rs-layer>
                            <!--

							-->
                            <rs-layer id="slider-1-slide-2-layer-1" data-type="text" data-rsp_ch="on"
                                data-xy="x:c;yo:469px,469px,229px,199px;" data-text="s:70,70,45,35;l:75;a:inherit;"
                                data-frame_0="y:100%;tp:600;" data-frame_0_mask="u:t;y:100%;"
                                data-frame_1="tp:600;e:power2.inOut;st:2260;sp:2000;sR:2260;" data-frame_1_mask="u:t;"
                                data-frame_999="o:0;tp:600;st:w;sR:4740;"
                                style="z-index:7;font-family:lato;text-transform:uppercase;">Local &
                                Seasonal Food
                            </rs-layer>
                            <!--

							-->
                            <rs-layer id="slider-1-slide-2-layer-3" data-type="text" data-rsp_ch="on"
                                data-xy="x:c;yo:584px,584px,324px,286px;" data-text="s:25;a:inherit;"
                                data-frame_0="tp:600;" data-frame_0_mask="u:t;"
                                data-frame_1="tp:600;st:5560;sp:1200;sR:5560;" data-frame_1_mask="u:t;"
                                data-frame_999="o:0;tp:600;st:w;sR:2240;"
                                style="z-index:8;font-family:lato;text-transform:uppercase;">Farm-To-Table
                            </rs-layer>
                            <!---->
                        </rs-slide>
                        <rs-slide data-key="rs-3" data-title="Slide"
                            data-thumb="//dtkudil.wpengine.com/wp-content/uploads/2018/05/slider3-100x50.jpg"
                            data-anim="ei:d;eo:d;s:600;t:fade;sl:d;">
                            <img src="https://rnzxu3lrgrj1046y63g4g7l1-wpengine.netdna-ssl.com/wp-content/uploads/2018/05/slider3.jpg"
                                title="Home" data-panzoom="d:25000;ss:100;se:115;" class="rev-slidebg" data-no-retina>
                            <!--
							-->
                            <rs-layer id="slider-1-slide-3-layer-6" data-type="image" data-rsp_ch="on"
                                data-xy="x:c;yo:570px,570px,320px,296px;" data-text="l:22;a:inherit;"
                                data-dim="w:['352px','352px','352px','352px'];h:['55px','55px','55px','55px'];"
                                data-frame_0="sX:0;tp:600;" data-frame_1="tp:600;st:4100;sp:1500;sR:4100;"
                                data-frame_999="o:0;tp:600;st:w;sR:3400;" style="z-index:5;"><img
                                    src="https://rnzxu3lrgrj1046y63g4g7l1-wpengine.netdna-ssl.com/wp-content/uploads/2018/05/txt-bg.png"
                                    width="352" height="55" data-no-retina>
                            </rs-layer>
                            <!--

							-->
                            <rs-layer id="slider-1-slide-3-layer-2" data-type="text" data-color="#c59d5f"
                                data-rsp_ch="on" data-xy="x:c;xo:5px;yo:399px,399px,178px,160px;"
                                data-text="s:60,60,40,50;l:75;a:inherit;" data-frame_0="y:100%;tp:600;"
                                data-frame_0_mask="u:t;y:100%;"
                                data-frame_1="tp:600;e:power2.inOut;st:500;sp:2000;sR:500;" data-frame_1_mask="u:t;"
                                data-frame_999="o:0;tp:600;st:w;sR:6500;" style="z-index:6;font-family:Pinyon Script;">
                                Taste the Difference
                            </rs-layer>
                            <!--

							-->
                            <rs-layer id="slider-1-slide-3-layer-1" data-type="text" data-rsp_ch="on"
                                data-xy="x:c;yo:469px,469px,239px,219px;" data-text="s:70,70,45,35;l:75;a:inherit;"
                                data-frame_0="y:100%;tp:600;" data-frame_0_mask="u:t;y:100%;"
                                data-frame_1="tp:600;e:power2.inOut;st:2260;sp:2000;sR:2260;" data-frame_1_mask="u:t;"
                                data-frame_999="o:0;tp:600;st:w;sR:4740;"
                                style="z-index:7;font-family:lato;text-transform:capitalize;">Fine &
                                Delicious Food
                            </rs-layer>
                            <!--

							-->
                            <rs-layer id="slider-1-slide-3-layer-3" data-type="text" data-rsp_ch="on"
                                data-xy="x:c;yo:584px,584px,334px,312px;" data-text="s:25;a:inherit;"
                                data-frame_0="tp:600;" data-frame_0_mask="u:t;"
                                data-frame_1="tp:600;st:5560;sp:1200;sR:5560;" data-frame_1_mask="u:t;"
                                data-frame_999="o:0;tp:600;st:w;sR:2240;"
                                style="z-index:8;font-family:lato;text-transform:uppercase;">Since 1952
                            </rs-layer>
                            <!---->
                        </rs-slide>
                        <rs-slide data-key="rs-4" data-title="Slide"
                            data-thumb="//dtkudil.wpengine.com/wp-content/uploads/2018/05/slider4-100x50.jpg"
                            data-anim="ei:d;eo:d;s:600;t:fade;sl:d;">
                            <img src="https://rnzxu3lrgrj1046y63g4g7l1-wpengine.netdna-ssl.com/wp-content/uploads/2018/05/slider4.jpg"
                                title="Home" data-panzoom="d:25000;ss:100;se:115;" class="rev-slidebg" data-no-retina>
                            <!--
							-->
                            <rs-group id="slider-1-slide-4-layer-11" data-type="group"
                                data-xy="xo:629px,629px,189px,189px;yo:413px,413px,233px,233px;"
                                data-text="l:22;a:inherit;" data-dim="w:544px;h:70px;" data-vbility="t,t,t,f"
                                data-frame_0="x:100%;o:1;tp:600;" data-frame_0_mask="u:t;"
                                data-frame_1="tp:600;st:4100;sp:1200;sR:4100;" data-frame_1_mask="u:t;"
                                data-frame_999="o:0;tp:600;st:w;sR:3700;sA:9000;" style="z-index:7;">
                                <!--
								-->
                                <rs-layer id="slider-1-slide-4-layer-3" data-type="text" data-rsp_ch="on"
                                    data-text="s:25;a:inherit;" data-frame_0="o:1;tp:600;"
                                    data-frame_1="tp:600;st:4100;" data-frame_999="o:0;tp:600;st:w;sR:4600;"
                                    style="z-index:8;font-family:lato;">Grilled Octopus
                                </rs-layer>
                                <!--

								-->
                                <rs-layer id="slider-1-slide-4-layer-8" data-type="text" data-color="#afafaf"
                                    data-rsp_ch="on" data-xy="yo:29px;" data-text="s:16,16,17,17;a:inherit;"
                                    data-frame_0="o:1;tp:600;" data-frame_1="tp:600;st:4100;"
                                    data-frame_999="o:0;tp:600;st:w;sR:4600;" style="z-index:9;font-family:lato;">with
                                    "Borlotti Marinati" and Spicy
                                    Limoncello Vinaigrette
                                </rs-layer>
                                <!--

								-->
                                <rs-layer id="slider-1-slide-4-layer-9" data-type="image" data-rsp_ch="on"
                                    data-xy="x:r;" data-text="l:22;a:inherit;"
                                    data-dim="w:['62px','62px','62px','62px'];h:['34px','34px','34px','34px'];"
                                    data-frame_0="o:1;tp:600;" data-frame_1="tp:600;st:4100;"
                                    data-frame_999="o:0;tp:600;st:w;sR:4600;" style="z-index:10;"><img
                                        src="https://rnzxu3lrgrj1046y63g4g7l1-wpengine.netdna-ssl.com/wp-content/uploads/2018/05/price-bg.png"
                                        width="62" height="34" data-no-retina>
                                </rs-layer>
                                <!--

								-->
                                <rs-layer id="slider-1-slide-4-layer-10" data-type="text" data-rsp_ch="on"
                                    data-xy="x:r;xo:11px;yo:5px;" data-text="a:inherit;" data-frame_0="o:1;tp:600;"
                                    data-frame_1="tp:600;st:4100;" data-frame_999="o:0;tp:600;st:w;sR:4600;"
                                    style="z-index:11;font-family:lato;">$18
                                </rs-layer>
                                <!--
							-->
                            </rs-group>
                            <!--

							-->
                            <rs-group id="slider-1-slide-4-layer-12" data-type="group"
                                data-xy="xo:630px,630px,190px,190px;yo:491px,491px,311px,311px;"
                                data-text="l:22;a:inherit;" data-dim="w:544px;h:70px;" data-vbility="t,t,t,f"
                                data-frame_0="x:100%;o:1;tp:600;" data-frame_0_mask="u:t;"
                                data-frame_1="tp:600;st:4400;sp:1500;sR:4400;" data-frame_1_mask="u:t;"
                                data-frame_999="o:0;tp:600;st:w;sR:3100;sA:9000;" style="z-index:12;">
                                <!--
								-->
                                <rs-layer id="slider-1-slide-4-layer-13" data-type="text" data-rsp_ch="on"
                                    data-text="s:25;a:inherit;" data-frame_0="o:1;tp:600;"
                                    data-frame_1="tp:600;st:4400;" data-frame_999="o:0;tp:600;st:w;sR:4300;"
                                    style="z-index:13;font-family:lato;">Mussels "alla Tarantina"
                                </rs-layer>
                                <!--

								-->
                                <rs-layer id="slider-1-slide-4-layer-14" data-type="text" data-color="#afafaf"
                                    data-rsp_ch="on" data-xy="yo:29px;" data-text="s:16,16,17,17;a:inherit;"
                                    data-frame_0="o:1;tp:600;" data-frame_1="tp:600;st:4400;"
                                    data-frame_999="o:0;tp:600;st:w;sR:4300;" style="z-index:14;font-family:lato;">with
                                    Chianti Vinegar and Ricotta
                                    Salata
                                </rs-layer>
                                <!--

								-->
                                <rs-layer id="slider-1-slide-4-layer-15" data-type="image" data-rsp_ch="on"
                                    data-xy="x:r;" data-text="l:22;a:inherit;"
                                    data-dim="w:['62px','62px','62px','62px'];h:['34px','34px','34px','34px'];"
                                    data-frame_0="o:1;tp:600;" data-frame_1="tp:600;st:4400;"
                                    data-frame_999="o:0;tp:600;st:w;sR:4300;" style="z-index:15;"><img
                                        src="https://rnzxu3lrgrj1046y63g4g7l1-wpengine.netdna-ssl.com/wp-content/uploads/2018/05/price-bg.png"
                                        width="62" height="34" data-no-retina>
                                </rs-layer>
                                <!--

								-->
                                <rs-layer id="slider-1-slide-4-layer-16" data-type="text" data-rsp_ch="on"
                                    data-xy="x:r;xo:11px;yo:5px;" data-text="a:inherit;" data-frame_0="tp:600;"
                                    data-frame_0_mask="u:t;" data-frame_1="tp:600;st:4400;" data-frame_1_mask="u:t;"
                                    data-frame_999="o:0;tp:600;st:w;sR:4300;" style="z-index:16;font-family:lato;">$19
                                </rs-layer>
                                <!--
							-->
                            </rs-group>
                            <!--

							-->
                            <rs-group id="slider-1-slide-4-layer-17" data-type="group"
                                data-xy="xo:630px,630px,190px,190px;yo:569px,569px,389px,389px;"
                                data-text="l:22;a:inherit;" data-dim="w:544px;h:70px;" data-vbility="t,t,t,f"
                                data-frame_0="x:100%;o:1;tp:600;" data-frame_0_mask="u:t;"
                                data-frame_1="tp:600;st:4690;sp:1200;sR:4690;" data-frame_1_mask="u:t;"
                                data-frame_999="o:0;tp:600;st:w;sR:3110;sA:9000;" style="z-index:17;">
                                <!--
								-->
                                <rs-layer id="slider-1-slide-4-layer-18" data-type="text" data-rsp_ch="on"
                                    data-text="s:25;a:inherit;" data-frame_0="o:1;tp:600;"
                                    data-frame_1="tp:600;st:4690;" data-frame_999="o:0;tp:600;st:w;sR:4010;"
                                    style="z-index:18;font-family:lato;">Roasted Beet Tartare
                                </rs-layer>
                                <!--

								-->
                                <rs-layer id="slider-1-slide-4-layer-19" data-type="text" data-color="#afafaf"
                                    data-rsp_ch="on" data-xy="yo:29px;" data-text="s:16,16,17,17;a:inherit;"
                                    data-frame_0="o:1;tp:600;" data-frame_1="tp:600;st:4690;"
                                    data-frame_999="o:0;tp:600;st:w;sR:4010;" style="z-index:19;font-family:lato;">with
                                    Rice Beans and Arugula
                                </rs-layer>
                                <!--

								-->
                                <rs-layer id="slider-1-slide-4-layer-20" data-type="image" data-rsp_ch="on"
                                    data-xy="x:r;" data-text="l:22;a:inherit;"
                                    data-dim="w:['62px','62px','62px','62px'];h:['34px','34px','34px','34px'];"
                                    data-frame_0="o:1;tp:600;" data-frame_1="tp:600;st:4690;"
                                    data-frame_999="o:0;tp:600;st:w;sR:4010;" style="z-index:20;"><img
                                        src="https://rnzxu3lrgrj1046y63g4g7l1-wpengine.netdna-ssl.com/wp-content/uploads/2018/05/price-bg.png"
                                        width="62" height="34" data-no-retina>
                                </rs-layer>
                                <!--

								-->
                                <rs-layer id="slider-1-slide-4-layer-21" data-type="text" data-rsp_ch="on"
                                    data-xy="x:r;xo:11px;yo:5px;" data-text="a:inherit;" data-frame_0="o:1;tp:600;"
                                    data-frame_1="tp:600;st:4690;" data-frame_999="o:0;tp:600;st:w;sR:4010;"
                                    style="z-index:21;font-family:lato;">$10
                                </rs-layer>
                                <!--
							-->
                            </rs-group>
                            <!--

							-->
                            <rs-group id="slider-1-slide-4-layer-22" data-type="group"
                                data-xy="xo:630px,630px,190px,190px;yo:646px,646px,466px,466px;"
                                data-text="l:22;a:inherit;" data-dim="w:544px;h:70px;" data-vbility="t,t,t,f"
                                data-frame_0="x:100%;o:1;tp:600;" data-frame_0_mask="u:t;"
                                data-frame_1="tp:600;st:4990;sp:1200;sR:4990;" data-frame_1_mask="u:t;"
                                data-frame_999="o:0;tp:600;st:w;sR:2810;sA:9000;" style="z-index:22;">
                                <!--
								-->
                                <rs-layer id="slider-1-slide-4-layer-23" data-type="text" data-rsp_ch="on"
                                    data-text="s:25;a:inherit;" data-frame_0="o:1;tp:600;"
                                    data-frame_1="tp:600;st:4990;" data-frame_999="o:0;tp:600;st:w;sR:3710;"
                                    style="z-index:23;font-family:lato;">Armandino's Salumi
                                </rs-layer>
                                <!--

								-->
                                <rs-layer id="slider-1-slide-4-layer-24" data-type="text" data-color="#afafaf"
                                    data-rsp_ch="on" data-xy="yo:29px;" data-text="s:16,16,17,17;a:inherit;"
                                    data-frame_0="o:1;tp:600;" data-frame_1="tp:600;st:4990;"
                                    data-frame_999="o:0;tp:600;st:w;sR:3710;" style="z-index:24;font-family:lato;">
                                    Culatello and Hot Soppressata
                                </rs-layer>
                                <!--

								-->
                                <rs-layer id="slider-1-slide-4-layer-25" data-type="image" data-rsp_ch="on"
                                    data-xy="x:r;" data-text="l:22;a:inherit;"
                                    data-dim="w:['62px','62px','62px','62px'];h:['34px','34px','34px','34px'];"
                                    data-frame_0="o:1;tp:600;" data-frame_1="tp:600;st:4990;"
                                    data-frame_999="o:0;tp:600;st:w;sR:3710;" style="z-index:25;"><img
                                        src="https://rnzxu3lrgrj1046y63g4g7l1-wpengine.netdna-ssl.com/wp-content/uploads/2018/05/price-bg.png"
                                        width="62" height="34" data-no-retina>
                                </rs-layer>
                                <!--

								-->
                                <rs-layer id="slider-1-slide-4-layer-26" data-type="text" data-rsp_ch="on"
                                    data-xy="x:r;xo:11px;yo:5px;" data-text="a:inherit;" data-frame_0="o:1;tp:600;"
                                    data-frame_1="tp:600;st:4990;" data-frame_999="o:0;tp:600;st:w;sR:3710;"
                                    style="z-index:26;font-family:lato;">$15
                                </rs-layer>
                                <!--
							-->
                            </rs-group>
                            <!--

							-->
                            <rs-layer id="slider-1-slide-4-layer-2" data-type="text" data-color="#c59d5f"
                                data-rsp_ch="on" data-xy="x:l,l,l,c;xo:630px,630px,190px,0;yo:229px,229px,58px,210px;"
                                data-text="s:60,60,40,30;l:75;a:inherit;" data-frame_0="y:100%;tp:600;"
                                data-frame_0_mask="u:t;y:100%;"
                                data-frame_1="tp:600;e:power2.inOut;st:500;sp:2000;sR:500;" data-frame_1_mask="u:t;"
                                data-frame_999="o:0;tp:600;st:w;sR:6500;" style="z-index:5;font-family:Pinyon Script;">
                                Todays Special
                            </rs-layer>
                            <!--

							-->
                            <rs-layer id="slider-1-slide-4-layer-1" data-type="text" data-rsp_ch="on"
                                data-xy="x:l,l,l,c;xo:626px,626px,186px,0;yo:299px,299px,119px,258px;"
                                data-text="s:70,70,45,35;l:75;a:inherit;" data-frame_0="y:100%;tp:600;"
                                data-frame_0_mask="u:t;y:100%;"
                                data-frame_1="tp:600;e:power2.inOut;st:2260;sp:2000;sR:2260;" data-frame_1_mask="u:t;"
                                data-frame_999="o:0;tp:600;st:w;sR:4740;"
                                style="z-index:6;font-family:lato;text-transform:uppercase;">Tasting Menus
                            </rs-layer>
                            <!--

							-->
                            <rs-layer id="slider-1-slide-4-layer-27" class="tp-shape tp-shapewrapper" data-type="shape"
                                data-rsp_ch="on" data-xy="xo:631px,631px,191px,191px;yo:384px,384px,204px,204px;"
                                data-text="a:inherit;" data-dim="w:540px;h:2px;" data-vbility="t,t,t,f"
                                data-frame_0="sX:0;tp:600;" data-frame_1="tp:600;st:3490;sp:1000;sR:3490;"
                                data-frame_999="o:0;tp:600;st:w;sR:4510;" style="z-index:27;background-color:#c59d5f;">
                            </rs-layer>
                            <!--

							-->
                            <rs-layer id="slider-1-slide-4-layer-28" class="tp-shape tp-shapewrapper" data-type="shape"
                                data-rsp_ch="on" data-xy="xo:631px,631px,191px,191px;yo:390px,390px,210px,210px;"
                                data-text="a:inherit;" data-dim="w:540px;h:2px;" data-vbility="t,t,t,f"
                                data-frame_0="sX:0;tp:600;" data-frame_1="tp:600;st:3490;sp:1000;sR:3490;"
                                data-frame_999="o:0;tp:600;st:w;sR:4510;" style="z-index:28;background-color:#c59d5f;">
                            </rs-layer>
                            <!---->
                        </rs-slide>
                    </rs-slides>
                    <rs-static-layers>
                        <!--

							-->
                        <rs-layer id="slider-1-slide-1-layer-29" class="rs-layer-static" data-type="text"
                            data-rsp_ch="on" data-xy="x:c;xo:-1px;y:b;yo:35px;" data-text="s:45;l:22;a:inherit;"
                            data-onslides="s:1;" data-frame_0="y:-15px;tp:600;" data-frame_1="tp:600;st:0;sp:1500;"
                            data-frame_999="o:0;tp:600;st:w;sR:7500;" data-loop_0="y:-15;"
                            data-loop_999="sp:2000;e:power2.in;yym:t;yys:t;yyf:t;"
                            style="z-index:42;font-family:Open Sans;"><i class="fa-angle-double-down"></i>
                        </rs-layer>
                        <!--
					-->
                    </rs-static-layers>
                </rs-module>
                <script type="text/javascript">
                    setREVStartSize({ c: 'rev_slider_1_1', rl: [1240, 1240, 778, 480], el: [], gw: [1200, 1200, 778, 480], gh: [1080, 1080, 600, 550], type: 'standard', justify: '', layout: 'fullwidth', mh: "0" });
                    var revapi1,
                        tpj;
                    function revinit_revslider11() {
                        jQuery(function () {
                            tpj = jQuery;
                            revapi1 = tpj("#rev_slider_1_1");
                            if (revapi1 == undefined || revapi1.revolution == undefined) {
                                revslider_showDoubleJqueryError("rev_slider_1_1");
                            } else {
                                revapi1.revolution({
                                    sliderLayout: "fullwidth",
                                    visibilityLevels: "1240,1240,778,480",
                                    gridwidth: "1200,1200,778,480",
                                    gridheight: "1080,1080,600,550",
                                    spinner: "spinner0",
                                    perspectiveType: "local",
                                    responsiveLevels: "1240,1240,778,480",
                                    progressBar: {
                                        color: "rgba(255,255,255,0.33)",
                                        vertical: "top",
                                        size: 5
                                    },
                                    navigation: {
                                        mouseScrollNavigation: false,
                                        onHoverStop: false,
                                        arrows: {
                                            enable: true,
                                            style: "persephone",
                                            hide_onmobile: true,
                                            hide_under: 678,
                                            left: {
                                                v_align: "bottom",
                                                h_offset: 30,
                                                v_offset: 30
                                            },
                                            right: {
                                                h_align: "left",
                                                v_align: "bottom",
                                                h_offset: 73,
                                                v_offset: 30
                                            }
                                        }
                                    },
                                    fallbacks: {
                                        allowHTML5AutoPlayOnAndroid: true
                                    },
                                });
                            }

                        });
                    } // End of RevInitScript
                    var once_revslider11 = false;
                    if (document.readyState === "loading") { document.addEventListener('readystatechange', function () { if ((document.readyState === "interactive" || document.readyState === "complete") && !once_revslider11) { once_revslider11 = true; revinit_revslider11(); } }); } else { once_revslider11 = true; revinit_revslider11(); }
                </script>
                <script>
                    var htmlDivCss = unescape("%23rev_slider_1_1_wrapper%20.persephone.tparrows%20%7B%0A%09cursor%3Apointer%3B%0A%09background%3Argba%28197%2C%20157%2C%2095%2C%200.8%29%3B%0A%09width%3A40px%3B%0A%09height%3A40px%3B%0A%09position%3Aabsolute%3B%0A%09display%3Ablock%3B%0A%09z-index%3A1000%3B%0A%20%20%20%20border%3A1px%20solid%20rgba%28255%2C%20255%2C%20255%2C%200%29%3B%0A%7D%0A%23rev_slider_1_1_wrapper%20.persephone.tparrows%3Ahover%20%7B%0A%09background%3A%23c59d5f%3B%0A%7D%0A%23rev_slider_1_1_wrapper%20.persephone.tparrows%3Abefore%20%7B%0A%09font-family%3A%20%27revicons%27%3B%0A%09font-size%3A15px%3B%0A%09color%3A%20%23ffffff%3B%0A%09display%3Ablock%3B%0A%09line-height%3A%2040px%3B%0A%09text-align%3A%20center%3B%0A%7D%0A%23rev_slider_1_1_wrapper%20.persephone.tparrows.tp-leftarrow%3Abefore%20%7B%0A%09content%3A%20%27%5Ce824%27%3B%0A%7D%0A%23rev_slider_1_1_wrapper%20.persephone.tparrows.tp-rightarrow%3Abefore%20%7B%0A%09content%3A%20%27%5Ce825%0A%27%3B%0A%7D%0A%0A%0A");
                    var htmlDiv = document.getElementById('rs-plugin-settings-inline-css');
                    if (htmlDiv) {
                        htmlDiv.innerHTML = htmlDiv.innerHTML + htmlDivCss;
                    } else {
                        var htmlDiv = document.createElement('div');
                        htmlDiv.innerHTML = '<style>' + htmlDivCss + '</style>';
                        document.getElementsByTagName('head')[0].appendChild(htmlDiv.childNodes[0]);
                    }
                </script>
                <script>
                    var htmlDivCss = unescape("%0A%0A%0A%0A");
                    var htmlDiv = document.getElementById('rs-plugin-settings-inline-css');
                    if (htmlDiv) {
                        htmlDiv.innerHTML = htmlDiv.innerHTML + htmlDivCss;
                    } else {
                        var htmlDiv = document.createElement('div');
                        htmlDiv.innerHTML = '<style>' + htmlDivCss + '</style>';
                        document.getElementsByTagName('head')[0].appendChild(htmlDiv.childNodes[0]);
                    }
                </script>
            </rs-module-wrap>
            <!-- END REVOLUTION SLIDER -->
        </div>
    </div><!-- ** Slider End ** -->
@endsection
