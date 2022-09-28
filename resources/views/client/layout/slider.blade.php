<div id="slider" style="height: 70%">
    <div id="dt-sc-rev-slider" class="dt-sc-main-slider">
        <!-- START Home REVOLUTION SLIDER 6.3.4 --><p class="rs-p-wp-fix"></p>
        <rs-module-wrap id="rev_slider_1_1_wrapper" data-source="gallery"
                        style="background:transparent;padding:0;margin:0px auto;margin-top:0;margin-bottom:0;">
            <rs-module id="rev_slider_1_1" class=" rs-ov-hidden" style="" data-version="6.3.4">
                <rs-slides>
                    @foreach($listBanner as $banner)

                        <rs-slide data-key="rs-{{$banner -> id}}" data-title="Slide"
                                  data-anim="ei:d;eo:d;s:600;t:fade;sl:d;">
                            <img
                                src="{{$banner -> image}}"
                                title="Home" data-panzoom="d:25000;ss:100;se:115;" class="rev-slidebg" data-no-retina>
                            <div style="padding-bottom: 50%">
                                <rs-layer
                                    id="slider-1-slide-3-layer-6"
                                    data-type="image"
                                    data-rsp_ch="on"
                                    data-xy="x:c;yo:570px,570px,320px,296px;"
                                    data-text="l:22;a:inherit;"
                                    data-dim="w:['352px','352px','352px','352px'];h:['55px','55px','55px','55px'];"
                                    data-frame_0="sX:0;tp:600;"
                                    data-frame_1="tp:600;st:4100;sp:1500;sR:4100;"
                                    data-frame_999="o:0;tp:600;st:w;sR:3400;"
                                    style="z-index:5;"
                                >
                                    <img
                                        src="https://rnzxu3lrgrj1046y63g4g7l1-wpengine.netdna-ssl.com/wp-content/uploads/2018/05/txt-bg.png"
                                        width="352" height="55" data-no-retina>
                                </rs-layer><!--

							-->
                                <rs-layer
                                    id="slider-1-slide-3-layer-2"
                                    data-type="text"
                                    data-color="#c59d5f"
                                    data-rsp_ch="on"
                                    data-xy="x:c;xo:5px;yo:399px,399px,178px,160px;"
                                    data-text="s:60,60,40,50;l:75;a:inherit;"
                                    data-frame_0="y:100%;tp:600;"
                                    data-frame_0_mask="u:t;y:100%;"
                                    data-frame_1="tp:600;e:power2.inOut;st:500;sp:2000;sR:500;"
                                    data-frame_1_mask="u:t;"
                                    data-frame_999="o:0;tp:600;st:w;sR:6500;"
                                    style="z-index:4;font-family:Pinyon Script; margin-bottom: 20%">
                                    <p style="width: 100%;">{{$banner -> title}}</p>
                                </rs-layer><!--

							-->
                                <rs-layer
                                    id="slider-1-slide-3-layer-1"
                                    data-type="text"
                                    data-rsp_ch="on"
                                    data-xy="x:c;yo:469px,469px,239px,219px;"
                                    data-text="s:70,70,45,35;l:75;a:inherit;"
                                    data-frame_0="y:100%;tp:600;"
                                    data-frame_0_mask="u:t;y:100%;"
                                    data-frame_1="tp:600;e:power2.inOut;st:2260;sp:2000;sR:2260;"
                                    data-frame_1_mask="u:t;"
                                    data-frame_999="o:0;tp:600;st:w;sR:4740;"
                                    style="z-index:10; height: 100px; text-transform:capitalize;padding-bottom: 3%; padding-top: 5%">
                                    <p style="font-size: 4vw;">{{$banner -> description}}</p>
                                </rs-layer>

                                <rs-layer
                                    id="slider-1-slide-3-layer-3"
                                    data-type="text"
                                    data-rsp_ch="on"
                                    data-xy="x:c;yo:584px,584px,334px,312px;"
                                    data-text="s:25;a:inherit;"
                                    data-frame_0="tp:600;"
                                    data-frame_0_mask="u:t;"
                                    data-frame_1="tp:600;st:5560;sp:1200;sR:5560;"
                                    data-frame_1_mask="u:t;"
                                    data-frame_999="o:0;tp:600;st:w;sR:2240;"
                                    style="z-index:12;font-family:lato;text-transform:uppercase; margin-top: 1%"
                                ><p>Liên hệ</p>
                                </rs-layer>
                            </div>
                        </rs-slide>

                    @endforeach
                </rs-slides>
            </rs-module>
            <script type="text/javascript">
                setREVStartSize({
                    c: 'rev_slider_1_1',
                    rl: [1240, 1240, 778, 480],
                    el: [],
                    gw: [1200, 1200, 778, 480],
                    gh: [1080, 1080, 600, 550],
                    type: 'standard',
                    justify: '',
                    layout: 'fullwidth',
                    mh: "0"
                });
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
                if (document.readyState === "loading") {
                    document.addEventListener('readystatechange', function () {
                        if ((document.readyState === "interactive" || document.readyState === "complete") && !once_revslider11) {
                            once_revslider11 = true;
                            revinit_revslider11();
                        }
                    });
                } else {
                    once_revslider11 = true;
                    revinit_revslider11();
                }
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
</div> <!-- ** Slider End ** -->

