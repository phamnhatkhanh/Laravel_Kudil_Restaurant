
@extends('client.layout.layout')

@section('head')
    @parent
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <script>document.documentElement.className = document.documentElement.className + ' yes-js js_active js'</script>
    <title>Shop &#8211; Kudil Restaurant WordPress Theme</title>
    <meta name='robots' content='max-image-preview:large' />
    <link rel='dns-prefetch' href='//s.w.org' />
    <link href='https://fonts.gstatic.com' crossorigin rel='preconnect' />
    <link rel="alternate" type="application/rss+xml" title="Kudil Restaurant WordPress Theme &raquo; Feed"
        href="https://dtkudil.wpengine.com/feed/" />
    <link rel="alternate" type="application/rss+xml" title="Kudil Restaurant WordPress Theme &raquo; Comments Feed"
        href="https://dtkudil.wpengine.com/comments/feed/" />
    <script type="text/javascript">
        window._wpemojiSettings = { "baseUrl": "https:\/\/s.w.org\/images\/core\/emoji\/14.0.0\/72x72\/", "ext": ".png", "svgUrl": "https:\/\/s.w.org\/images\/core\/emoji\/14.0.0\/svg\/", "svgExt": ".svg", "source": { "concatemoji": "https:\/\/dtkudil.wpengine.com\/wp-includes\/js\/wp-emoji-release.min.js?ver=6.0.2" } };
        /*! This file is auto-generated */
        !function (e, a, t) { var n, r, o, i = a.createElement("canvas"), p = i.getContext && i.getContext("2d"); function s(e, t) { var a = String.fromCharCode, e = (p.clearRect(0, 0, i.width, i.height), p.fillText(a.apply(this, e), 0, 0), i.toDataURL()); return p.clearRect(0, 0, i.width, i.height), p.fillText(a.apply(this, t), 0, 0), e === i.toDataURL() } function c(e) { var t = a.createElement("script"); t.src = e, t.defer = t.type = "text/javascript", a.getElementsByTagName("head")[0].appendChild(t) } for (o = Array("flag", "emoji"), t.supports = { everything: !0, everythingExceptFlag: !0 }, r = 0; r < o.length; r++)t.supports[o[r]] = function (e) { if (!p || !p.fillText) return !1; switch (p.textBaseline = "top", p.font = "600 32px Arial", e) { case "flag": return s([127987, 65039, 8205, 9895, 65039], [127987, 65039, 8203, 9895, 65039]) ? !1 : !s([55356, 56826, 55356, 56819], [55356, 56826, 8203, 55356, 56819]) && !s([55356, 57332, 56128, 56423, 56128, 56418, 56128, 56421, 56128, 56430, 56128, 56423, 56128, 56447], [55356, 57332, 8203, 56128, 56423, 8203, 56128, 56418, 8203, 56128, 56421, 8203, 56128, 56430, 8203, 56128, 56423, 8203, 56128, 56447]); case "emoji": return !s([129777, 127995, 8205, 129778, 127999], [129777, 127995, 8203, 129778, 127999]) }return !1 }(o[r]), t.supports.everything = t.supports.everything && t.supports[o[r]], "flag" !== o[r] && (t.supports.everythingExceptFlag = t.supports.everythingExceptFlag && t.supports[o[r]]); t.supports.everythingExceptFlag = t.supports.everythingExceptFlag && !t.supports.flag, t.DOMReady = !1, t.readyCallback = function () { t.DOMReady = !0 }, t.supports.everything || (n = function () { t.readyCallback() }, a.addEventListener ? (a.addEventListener("DOMContentLoaded", n, !1), e.addEventListener("load", n, !1)) : (e.attachEvent("onload", n), a.attachEvent("onreadystatechange", function () { "complete" === a.readyState && t.readyCallback() })), (e = t.source || {}).concatemoji ? c(e.concatemoji) : e.wpemoji && e.twemoji && (c(e.twemoji), c(e.wpemoji))) }(window, document, window._wpemojiSettings);
    </script>
    <style type="text/css">
        img.wp-smiley,
        img.emoji {
            display: inline !important;
            border: none !important;
            box-shadow: none !important;
            height: 1em !important;
            width: 1em !important;
            margin: 0 0.07em !important;
            vertical-align: -0.1em !important;
            background: none !important;
            padding: 0 !important;
        }

    </style>
    <link rel='stylesheet' id='sb_instagram_styles-css'
        href='https://rnzxu3lrgrj1046y63g4g7l1-wpengine.netdna-ssl.com/wp-content/plugins/instagram-feed/css/sbi-styles.min.css?ver=2.6.2'
        type='text/css' media='all' />
    <link rel='stylesheet' id='wp-block-library-css'
        href='https://rnzxu3lrgrj1046y63g4g7l1-wpengine.netdna-ssl.com/wp-includes/css/dist/block-library/style.min.css?ver=6.0.2'
        type='text/css' media='all' />
    <style id='wp-block-library-theme-inline-css' type='text/css'>
        .wp-block-audio figcaption {
            color: #555;
            font-size: 13px;
            text-align: center
        }

        .is-dark-theme .wp-block-audio figcaption {
            color: hsla(0, 0%, 100%, .65)
        }

        .wp-block-code {
            border: 1px solid #ccc;
            border-radius: 4px;
            font-family: Menlo, Consolas, monaco, monospace;
            padding: .8em 1em
        }

        .wp-block-embed figcaption {
            color: #555;
            font-size: 13px;
            text-align: center
        }

        .is-dark-theme .wp-block-embed figcaption {
            color: hsla(0, 0%, 100%, .65)
        }

        .blocks-gallery-caption {
            color: #555;
            font-size: 13px;
            text-align: center
        }

        .is-dark-theme .blocks-gallery-caption {
            color: hsla(0, 0%, 100%, .65)
        }

        .wp-block-image figcaption {
            color: #555;
            font-size: 13px;
            text-align: center
        }

        .is-dark-theme .wp-block-image figcaption {
            color: hsla(0, 0%, 100%, .65)
        }

        .wp-block-pullquote {
            border-top: 4px solid;
            border-bottom: 4px solid;
            margin-bottom: 1.75em;
            color: currentColor
        }

        .wp-block-pullquote__citation,
        .wp-block-pullquote cite,
        .wp-block-pullquote footer {
            color: currentColor;
            text-transform: uppercase;
            font-size: .8125em;
            font-style: normal
        }

        .wp-block-quote {
            border-left: .25em solid;
            margin: 0 0 1.75em;
            padding-left: 1em
        }

        .wp-block-quote cite,
        .wp-block-quote footer {
            color: currentColor;
            font-size: .8125em;
            position: relative;
            font-style: normal
        }

        .wp-block-quote.has-text-align-right {
            border-left: none;
            border-right: .25em solid;
            padding-left: 0;
            padding-right: 1em
        }

        .wp-block-quote.has-text-align-center {
            border: none;
            padding-left: 0
        }

        .wp-block-quote.is-large,
        .wp-block-quote.is-style-large,
        .wp-block-quote.is-style-plain {
            border: none
        }

        .wp-block-search .wp-block-search__label {
            font-weight: 700
        }

        :where(.wp-block-group.has-background) {
            padding: 1.25em 2.375em
        }

        .wp-block-separator.has-css-opacity {
            opacity: .4
        }

        .wp-block-separator {
            border: none;
            border-bottom: 2px solid;
            margin-left: auto;
            margin-right: auto
        }

        .wp-block-separator.has-alpha-channel-opacity {
            opacity: 1
        }

        .wp-block-separator:not(.is-style-wide):not(.is-style-dots) {
            width: 100px
        }

        .wp-block-separator.has-background:not(.is-style-dots) {
            border-bottom: none;
            height: 1px
        }

        .wp-block-separator.has-background:not(.is-style-wide):not(.is-style-dots) {
            height: 2px
        }

        .wp-block-table thead {
            border-bottom: 3px solid
        }

        .wp-block-table tfoot {
            border-top: 3px solid
        }

        .wp-block-table td,
        .wp-block-table th {
            padding: .5em;
            border: 1px solid;
            word-break: normal
        }

        .wp-block-table figcaption {
            color: #555;
            font-size: 13px;
            text-align: center
        }

        .is-dark-theme .wp-block-table figcaption {
            color: hsla(0, 0%, 100%, .65)
        }

        .wp-block-video figcaption {
            color: #555;
            font-size: 13px;
            text-align: center
        }

        .is-dark-theme .wp-block-video figcaption {
            color: hsla(0, 0%, 100%, .65)
        }

        .wp-block-template-part.has-background {
            padding: 1.25em 2.375em;
            margin-top: 0;
            margin-bottom: 0
        }

    </style>
    <link rel='stylesheet' id='wc-block-vendors-style-css'
        href='https://rnzxu3lrgrj1046y63g4g7l1-wpengine.netdna-ssl.com/wp-content/plugins/woocommerce/packages/woocommerce-blocks/build/vendors-style.css?ver=3.8.1'
        type='text/css' media='all' />
    <link rel='stylesheet' id='wc-block-style-css'
        href='https://rnzxu3lrgrj1046y63g4g7l1-wpengine.netdna-ssl.com/wp-content/plugins/woocommerce/packages/woocommerce-blocks/build/style.css?ver=3.8.1'
        type='text/css' media='all' />
    <link rel='stylesheet' id='jquery-selectBox-css'
        href='https://rnzxu3lrgrj1046y63g4g7l1-wpengine.netdna-ssl.com/wp-content/plugins/yith-woocommerce-wishlist/assets/css/jquery.selectBox.css?ver=1.2.0'
        type='text/css' media='all' />
    <link rel='stylesheet' id='yith-wcwl-font-awesome-css'
        href='https://rnzxu3lrgrj1046y63g4g7l1-wpengine.netdna-ssl.com/wp-content/plugins/yith-woocommerce-wishlist/assets/css/font-awesome.css?ver=4.7.0'
        type='text/css' media='all' />
    <link rel='stylesheet' id='yith-wcwl-main-css'
        href='https://rnzxu3lrgrj1046y63g4g7l1-wpengine.netdna-ssl.com/wp-content/plugins/yith-woocommerce-wishlist/assets/css/style.css?ver=3.0.17'
        type='text/css' media='all' />
    <style id='global-styles-inline-css' type='text/css'>
        body {
            --wp--preset--color--black: #000000;
            --wp--preset--color--cyan-bluish-gray: #abb8c3;
            --wp--preset--color--white: #ffffff;
            --wp--preset--color--pale-pink: #f78da7;
            --wp--preset--color--vivid-red: #cf2e2e;
            --wp--preset--color--luminous-vivid-orange: #ff6900;
            --wp--preset--color--luminous-vivid-amber: #fcb900;
            --wp--preset--color--light-green-cyan: #7bdcb5;
            --wp--preset--color--vivid-green-cyan: #00d084;
            --wp--preset--color--pale-cyan-blue: #8ed1fc;
            --wp--preset--color--vivid-cyan-blue: #0693e3;
            --wp--preset--color--vivid-purple: #9b51e0;
            --wp--preset--color--primary: #c59d5f;
            --wp--preset--color--secondary: #9d7d4c;
            --wp--preset--color--tertiary: #d0b07e;
            --wp--preset--gradient--vivid-cyan-blue-to-vivid-purple: linear-gradient(135deg, rgba(6, 147, 227, 1) 0%, rgb(155, 81, 224) 100%);
            --wp--preset--gradient--light-green-cyan-to-vivid-green-cyan: linear-gradient(135deg, rgb(122, 220, 180) 0%, rgb(0, 208, 130) 100%);
            --wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange: linear-gradient(135deg, rgba(252, 185, 0, 1) 0%, rgba(255, 105, 0, 1) 100%);
            --wp--preset--gradient--luminous-vivid-orange-to-vivid-red: linear-gradient(135deg, rgba(255, 105, 0, 1) 0%, rgb(207, 46, 46) 100%);
            --wp--preset--gradient--very-light-gray-to-cyan-bluish-gray: linear-gradient(135deg, rgb(238, 238, 238) 0%, rgb(169, 184, 195) 100%);
            --wp--preset--gradient--cool-to-warm-spectrum: linear-gradient(135deg, rgb(74, 234, 220) 0%, rgb(151, 120, 209) 20%, rgb(207, 42, 186) 40%, rgb(238, 44, 130) 60%, rgb(251, 105, 98) 80%, rgb(254, 248, 76) 100%);
            --wp--preset--gradient--blush-light-purple: linear-gradient(135deg, rgb(255, 206, 236) 0%, rgb(152, 150, 240) 100%);
            --wp--preset--gradient--blush-bordeaux: linear-gradient(135deg, rgb(254, 205, 165) 0%, rgb(254, 45, 45) 50%, rgb(107, 0, 62) 100%);
            --wp--preset--gradient--luminous-dusk: linear-gradient(135deg, rgb(255, 203, 112) 0%, rgb(199, 81, 192) 50%, rgb(65, 88, 208) 100%);
            --wp--preset--gradient--pale-ocean: linear-gradient(135deg, rgb(255, 245, 203) 0%, rgb(182, 227, 212) 50%, rgb(51, 167, 181) 100%);
            --wp--preset--gradient--electric-grass: linear-gradient(135deg, rgb(202, 248, 128) 0%, rgb(113, 206, 126) 100%);
            --wp--preset--gradient--midnight: linear-gradient(135deg, rgb(2, 3, 129) 0%, rgb(40, 116, 252) 100%);
            --wp--preset--duotone--dark-grayscale: url('#wp-duotone-dark-grayscale');
            --wp--preset--duotone--grayscale: url('#wp-duotone-grayscale');
            --wp--preset--duotone--purple-yellow: url('#wp-duotone-purple-yellow');
            --wp--preset--duotone--blue-red: url('#wp-duotone-blue-red');
            --wp--preset--duotone--midnight: url('#wp-duotone-midnight');
            --wp--preset--duotone--magenta-yellow: url('#wp-duotone-magenta-yellow');
            --wp--preset--duotone--purple-green: url('#wp-duotone-purple-green');
            --wp--preset--duotone--blue-orange: url('#wp-duotone-blue-orange');
            --wp--preset--font-size--small: 13px;
            --wp--preset--font-size--medium: 20px;
            --wp--preset--font-size--large: 36px;
            --wp--preset--font-size--x-large: 42px;
        }

        .has-black-color {
            color: var(--wp--preset--color--black) !important;
        }

        .has-cyan-bluish-gray-color {
            color: var(--wp--preset--color--cyan-bluish-gray) !important;
        }

        .has-white-color {
            color: var(--wp--preset--color--white) !important;
        }

        .has-pale-pink-color {
            color: var(--wp--preset--color--pale-pink) !important;
        }

        .has-vivid-red-color {
            color: var(--wp--preset--color--vivid-red) !important;
        }

        .has-luminous-vivid-orange-color {
            color: var(--wp--preset--color--luminous-vivid-orange) !important;
        }

        .has-luminous-vivid-amber-color {
            color: var(--wp--preset--color--luminous-vivid-amber) !important;
        }

        .has-light-green-cyan-color {
            color: var(--wp--preset--color--light-green-cyan) !important;
        }

        .has-vivid-green-cyan-color {
            color: var(--wp--preset--color--vivid-green-cyan) !important;
        }

        .has-pale-cyan-blue-color {
            color: var(--wp--preset--color--pale-cyan-blue) !important;
        }

        .has-vivid-cyan-blue-color {
            color: var(--wp--preset--color--vivid-cyan-blue) !important;
        }

        .has-vivid-purple-color {
            color: var(--wp--preset--color--vivid-purple) !important;
        }

        .has-black-background-color {
            background-color: var(--wp--preset--color--black) !important;
        }

        .has-cyan-bluish-gray-background-color {
            background-color: var(--wp--preset--color--cyan-bluish-gray) !important;
        }

        .has-white-background-color {
            background-color: var(--wp--preset--color--white) !important;
        }

        .has-pale-pink-background-color {
            background-color: var(--wp--preset--color--pale-pink) !important;
        }

        .has-vivid-red-background-color {
            background-color: var(--wp--preset--color--vivid-red) !important;
        }

        .has-luminous-vivid-orange-background-color {
            background-color: var(--wp--preset--color--luminous-vivid-orange) !important;
        }

        .has-luminous-vivid-amber-background-color {
            background-color: var(--wp--preset--color--luminous-vivid-amber) !important;
        }

        .has-light-green-cyan-background-color {
            background-color: var(--wp--preset--color--light-green-cyan) !important;
        }

        .has-vivid-green-cyan-background-color {
            background-color: var(--wp--preset--color--vivid-green-cyan) !important;
        }

        .has-pale-cyan-blue-background-color {
            background-color: var(--wp--preset--color--pale-cyan-blue) !important;
        }

        .has-vivid-cyan-blue-background-color {
            background-color: var(--wp--preset--color--vivid-cyan-blue) !important;
        }

        .has-vivid-purple-background-color {
            background-color: var(--wp--preset--color--vivid-purple) !important;
        }

        .has-black-border-color {
            border-color: var(--wp--preset--color--black) !important;
        }

        .has-cyan-bluish-gray-border-color {
            border-color: var(--wp--preset--color--cyan-bluish-gray) !important;
        }

        .has-white-border-color {
            border-color: var(--wp--preset--color--white) !important;
        }

        .has-pale-pink-border-color {
            border-color: var(--wp--preset--color--pale-pink) !important;
        }

        .has-vivid-red-border-color {
            border-color: var(--wp--preset--color--vivid-red) !important;
        }

        .has-luminous-vivid-orange-border-color {
            border-color: var(--wp--preset--color--luminous-vivid-orange) !important;
        }

        .has-luminous-vivid-amber-border-color {
            border-color: var(--wp--preset--color--luminous-vivid-amber) !important;
        }

        .has-light-green-cyan-border-color {
            border-color: var(--wp--preset--color--light-green-cyan) !important;
        }

        .has-vivid-green-cyan-border-color {
            border-color: var(--wp--preset--color--vivid-green-cyan) !important;
        }

        .has-pale-cyan-blue-border-color {
            border-color: var(--wp--preset--color--pale-cyan-blue) !important;
        }

        .has-vivid-cyan-blue-border-color {
            border-color: var(--wp--preset--color--vivid-cyan-blue) !important;
        }

        .has-vivid-purple-border-color {
            border-color: var(--wp--preset--color--vivid-purple) !important;
        }

        .has-vivid-cyan-blue-to-vivid-purple-gradient-background {
            background: var(--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple) !important;
        }

        .has-light-green-cyan-to-vivid-green-cyan-gradient-background {
            background: var(--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan) !important;
        }

        .has-luminous-vivid-amber-to-luminous-vivid-orange-gradient-background {
            background: var(--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange) !important;
        }

        .has-luminous-vivid-orange-to-vivid-red-gradient-background {
            background: var(--wp--preset--gradient--luminous-vivid-orange-to-vivid-red) !important;
        }

        .has-very-light-gray-to-cyan-bluish-gray-gradient-background {
            background: var(--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray) !important;
        }

        .has-cool-to-warm-spectrum-gradient-background {
            background: var(--wp--preset--gradient--cool-to-warm-spectrum) !important;
        }

        .has-blush-light-purple-gradient-background {
            background: var(--wp--preset--gradient--blush-light-purple) !important;
        }

        .has-blush-bordeaux-gradient-background {
            background: var(--wp--preset--gradient--blush-bordeaux) !important;
        }

        .has-luminous-dusk-gradient-background {
            background: var(--wp--preset--gradient--luminous-dusk) !important;
        }

        .has-pale-ocean-gradient-background {
            background: var(--wp--preset--gradient--pale-ocean) !important;
        }

        .has-electric-grass-gradient-background {
            background: var(--wp--preset--gradient--electric-grass) !important;
        }

        .has-midnight-gradient-background {
            background: var(--wp--preset--gradient--midnight) !important;
        }

        .has-small-font-size {
            font-size: var(--wp--preset--font-size--small) !important;
        }

        .has-medium-font-size {
            font-size: var(--wp--preset--font-size--medium) !important;
        }

        .has-large-font-size {
            font-size: var(--wp--preset--font-size--large) !important;
        }

        .has-x-large-font-size {
            font-size: var(--wp--preset--font-size--x-large) !important;
        }

    </style>
    <link rel='stylesheet' id='contact-form-7-css'
        href='https://rnzxu3lrgrj1046y63g4g7l1-wpengine.netdna-ssl.com/wp-content/plugins/contact-form-7/includes/css/styles.css?ver=5.3.2'
        type='text/css' media='all' />
    <link rel='stylesheet' id='dt-animation-css-css'
        href='https://rnzxu3lrgrj1046y63g4g7l1-wpengine.netdna-ssl.com/wp-content/plugins/designthemes-core-features/shortcodes/css/animations.css?ver=6.0.2'
        type='text/css' media='all' />
    <link rel='stylesheet' id='dt-slick-css-css'
        href='https://rnzxu3lrgrj1046y63g4g7l1-wpengine.netdna-ssl.com/wp-content/plugins/designthemes-core-features/shortcodes/css/slick.css?ver=6.0.2'
        type='text/css' media='all' />
    <link rel='stylesheet' id='dt-sc-css-css'
        href='https://rnzxu3lrgrj1046y63g4g7l1-wpengine.netdna-ssl.com/wp-content/plugins/designthemes-core-features/shortcodes/css/shortcodes.css?ver=6.0.2'
        type='text/css' media='all' />
    <link rel='stylesheet' id='kudil-portfolio-css'
        href='https://rnzxu3lrgrj1046y63g4g7l1-wpengine.netdna-ssl.com/wp-content/plugins/designthemes-core-features/custom-post-types/css/portfolio.css?ver=2.1'
        type='text/css' media='all' />
    <link rel='stylesheet' id='rs-plugin-settings-css'
        href='https://rnzxu3lrgrj1046y63g4g7l1-wpengine.netdna-ssl.com/wp-content/plugins/revslider/public/assets/css/rs6.css?ver=6.3.4'
        type='text/css' media='all' />
    <style id='rs-plugin-settings-inline-css' type='text/css'>
        #rs-demo-id {}

    </style>
    <style id='woocommerce-inline-inline-css' type='text/css'>
        .woocommerce form .form-row .required {
            visibility: visible;
        }

    </style>
    <link rel='stylesheet' id='woocommerce_prettyPhoto_css-css'
        href='https://rnzxu3lrgrj1046y63g4g7l1-wpengine.netdna-ssl.com/wp-content/plugins/woocommerce/assets/css/prettyPhoto.css?ver=6.0.2'
        type='text/css' media='all' />
    <link rel='stylesheet' id='js_composer_front-css'
        href='https://rnzxu3lrgrj1046y63g4g7l1-wpengine.netdna-ssl.com/wp-content/plugins/js_composer/assets/css/js_composer.min.css?ver=6.5.0'
        type='text/css' media='all' />
    <link rel='stylesheet' id='kudil-css'
        href='https://rnzxu3lrgrj1046y63g4g7l1-wpengine.netdna-ssl.com/wp-content/themes/kudil/style.css?ver=2.1'
        type='text/css' media='all' />
    <link rel='stylesheet' id='kudil-base-css'
        href='https://rnzxu3lrgrj1046y63g4g7l1-wpengine.netdna-ssl.com/wp-content/themes/kudil/css/base.css?ver=2.1'
        type='text/css' media='all' />
    <link rel='stylesheet' id='kudil-grid-css'
        href='https://rnzxu3lrgrj1046y63g4g7l1-wpengine.netdna-ssl.com/wp-content/themes/kudil/css/grid.css?ver=2.1'
        type='text/css' media='all' />
    <link rel='stylesheet' id='kudil-widget-css'
        href='https://rnzxu3lrgrj1046y63g4g7l1-wpengine.netdna-ssl.com/wp-content/themes/kudil/css/widget.css?ver=2.1'
        type='text/css' media='all' />
    <link rel='stylesheet' id='kudil-layout-css'
        href='https://rnzxu3lrgrj1046y63g4g7l1-wpengine.netdna-ssl.com/wp-content/themes/kudil/css/layout.css?ver=2.1'
        type='text/css' media='all' />
    <link rel='stylesheet' id='kudil-blog-css'
        href='https://rnzxu3lrgrj1046y63g4g7l1-wpengine.netdna-ssl.com/wp-content/themes/kudil/css/blog.css?ver=2.1'
        type='text/css' media='all' />
    <link rel='stylesheet' id='kudil-contact-css'
        href='https://rnzxu3lrgrj1046y63g4g7l1-wpengine.netdna-ssl.com/wp-content/themes/kudil/css/contact.css?ver=2.1'
        type='text/css' media='all' />
    <link rel='stylesheet' id='kudil-custom-class-css'
        href='https://rnzxu3lrgrj1046y63g4g7l1-wpengine.netdna-ssl.com/wp-content/themes/kudil/css/custom-class.css?ver=2.1'
        type='text/css' media='all' />
    <link rel='stylesheet' id='kudil-browsers-css'
        href='https://rnzxu3lrgrj1046y63g4g7l1-wpengine.netdna-ssl.com/wp-content/themes/kudil/css/browsers.css?ver=2.1'
        type='text/css' media='all' />
    <link rel='stylesheet' id='kudil-bully-css'
        href='https://rnzxu3lrgrj1046y63g4g7l1-wpengine.netdna-ssl.com/wp-content/themes/kudil/css/bully.css?ver=2.1'
        type='text/css' media='all' />
    <link rel='stylesheet' id='prettyphoto-css'
        href='https://rnzxu3lrgrj1046y63g4g7l1-wpengine.netdna-ssl.com/wp-content/plugins/js_composer/assets/lib/prettyphoto/css/prettyPhoto.min.css?ver=6.5.0'
        type='text/css' media='all' />
    <link rel='stylesheet' id='custom-font-awesome-css'
        href='https://rnzxu3lrgrj1046y63g4g7l1-wpengine.netdna-ssl.com/wp-content/themes/kudil/css/font-awesome.min.css?ver=4.3.0'
        type='text/css' media='all' />
    <link rel='stylesheet' id='pe-icon-7-stroke-css'
        href='https://rnzxu3lrgrj1046y63g4g7l1-wpengine.netdna-ssl.com/wp-content/themes/kudil/css/pe-icon-7-stroke.css?ver=6.0.2'
        type='text/css' media='all' />
    <link rel='stylesheet' id='stroke-gap-icons-style-css'
        href='https://rnzxu3lrgrj1046y63g4g7l1-wpengine.netdna-ssl.com/wp-content/themes/kudil/css/stroke-gap-icons-style.css?ver=6.0.2'
        type='text/css' media='all' />
    <link rel='stylesheet' id='icon-moon-css'
        href='https://rnzxu3lrgrj1046y63g4g7l1-wpengine.netdna-ssl.com/wp-content/themes/kudil/css/icon-moon.css?ver=6.0.2'
        type='text/css' media='all' />
    <link rel='stylesheet' id='material-design-iconic-css'
        href='https://rnzxu3lrgrj1046y63g4g7l1-wpengine.netdna-ssl.com/wp-content/themes/kudil/css/material-design-iconic-font.min.css?ver=6.0.2'
        type='text/css' media='all' />
    <link rel='stylesheet' id='kudil-gutenberg-css'
        href='https://rnzxu3lrgrj1046y63g4g7l1-wpengine.netdna-ssl.com/wp-content/themes/kudil/css/gutenberg.css?ver=2.1'
        type='text/css' media='all' />
    <link rel='stylesheet' id='kudil-woo-default-css'
        href='https://rnzxu3lrgrj1046y63g4g7l1-wpengine.netdna-ssl.com/wp-content/themes/kudil/css/woocommerce/woocommerce-default.css?ver=2.1'
        type='text/css' media='all' />
    <link rel='stylesheet' id='kudil-woo-type1-css'
        href='https://rnzxu3lrgrj1046y63g4g7l1-wpengine.netdna-ssl.com/wp-content/themes/kudil/css/woocommerce/type1-fashion.css?ver=2.1'
        type='text/css' media='all' />
    <link rel='stylesheet' id='kudil-woo-type4-css'
        href='https://rnzxu3lrgrj1046y63g4g7l1-wpengine.netdna-ssl.com/wp-content/themes/kudil/css/woocommerce/type4-hosting.css?ver=2.1'
        type='text/css' media='all' />
    <link rel='stylesheet' id='kudil-woo-type8-css'
        href='https://rnzxu3lrgrj1046y63g4g7l1-wpengine.netdna-ssl.com/wp-content/themes/kudil/css/woocommerce/type8-insurance.css?ver=2.1'
        type='text/css' media='all' />
    <link rel='stylesheet' id='kudil-woo-type10-css'
        href='https://rnzxu3lrgrj1046y63g4g7l1-wpengine.netdna-ssl.com/wp-content/themes/kudil/css/woocommerce/type10-medical.css?ver=2.1'
        type='text/css' media='all' />
    <link rel='stylesheet' id='kudil-woo-type11-css'
        href='https://rnzxu3lrgrj1046y63g4g7l1-wpengine.netdna-ssl.com/wp-content/themes/kudil/css/woocommerce/type11-model.css?ver=2.1'
        type='text/css' media='all' />
    <link rel='stylesheet' id='kudil-woo-type12-css'
        href='https://rnzxu3lrgrj1046y63g4g7l1-wpengine.netdna-ssl.com/wp-content/themes/kudil/css/woocommerce/type12-attorney.css?ver=2.1'
        type='text/css' media='all' />
    <link rel='stylesheet' id='kudil-woo-type13-css'
        href='https://rnzxu3lrgrj1046y63g4g7l1-wpengine.netdna-ssl.com/wp-content/themes/kudil/css/woocommerce/type13-architecture.css?ver=2.1'
        type='text/css' media='all' />
    <link rel='stylesheet' id='kudil-woo-type14-css'
        href='https://rnzxu3lrgrj1046y63g4g7l1-wpengine.netdna-ssl.com/wp-content/themes/kudil/css/woocommerce/type14-fitness.css?ver=2.1'
        type='text/css' media='all' />
    <link rel='stylesheet' id='kudil-woo-type16-css'
        href='https://rnzxu3lrgrj1046y63g4g7l1-wpengine.netdna-ssl.com/wp-content/themes/kudil/css/woocommerce/type16-photography.css?ver=2.1'
        type='text/css' media='all' />
    <link rel='stylesheet' id='kudil-woo-type17-css'
        href='https://rnzxu3lrgrj1046y63g4g7l1-wpengine.netdna-ssl.com/wp-content/themes/kudil/css/woocommerce/type17-restaurant.css?ver=2.1'
        type='text/css' media='all' />
    <link rel='stylesheet' id='kudil-woo-type20-css'
        href='https://rnzxu3lrgrj1046y63g4g7l1-wpengine.netdna-ssl.com/wp-content/themes/kudil/css/woocommerce/type20-yoga.css?ver=2.1'
        type='text/css' media='all' />
    <link rel='stylesheet' id='kudil-woo-type21-css'
        href='https://rnzxu3lrgrj1046y63g4g7l1-wpengine.netdna-ssl.com/wp-content/themes/kudil/css/woocommerce/type21-styleshop.css?ver=2.1'
        type='text/css' media='all' />
    <link rel='stylesheet' id='kudil-woo-css'
        href='https://rnzxu3lrgrj1046y63g4g7l1-wpengine.netdna-ssl.com/wp-content/themes/kudil/css/woocommerce.css?ver=2.1'
        type='text/css' media='all' />
    <link rel='stylesheet' id='kudil-customevent-css'
        href='https://rnzxu3lrgrj1046y63g4g7l1-wpengine.netdna-ssl.com/wp-content/themes/kudil/tribe-events/custom.css?ver=2.1'
        type='text/css' media='all' />
    <link rel='stylesheet' id='kudil-popup-css-css'
        href='https://rnzxu3lrgrj1046y63g4g7l1-wpengine.netdna-ssl.com/wp-content/themes/kudil/framework/js/magnific/magnific-popup.css?ver=2.1'
        type='text/css' media='all' />
    <link rel='stylesheet' id='kudil-custom-css'
        href='https://rnzxu3lrgrj1046y63g4g7l1-wpengine.netdna-ssl.com/wp-content/themes/kudil/css/custom.css?ver=2.1'
        type='text/css' media='all' />
    <style id='kudil-custom-inline-css' type='text/css'>
        .dt-sc-menu-sorting a {
            color: rgba(197, 157, 95, 0.6)
        }

        .dt-sc-team.type2 .dt-sc-team-thumb .dt-sc-team-thumb-overlay,
        .dt-sc-hexagon-image span:before,
        .dt-sc-keynote-speakers .dt-sc-speakers-thumb .dt-sc-speakers-thumb-overlay {
            background: rgba(197, 157, 95, 0.9)
        }

        .portfolio .image-overlay,
        .recent-portfolio-widget ul li a:before,
        .dt-sc-image-caption.type2:hover .dt-sc-image-content,
        .dt-sc-fitness-program-short-details-wrapper .dt-sc-fitness-program-short-details {
            background: rgba(197, 157, 95, 0.9)
        }

        .dt-sc-icon-box.type10 .icon-wrapper:before,
        .dt-sc-pr-tb-col.type2 .dt-sc-tb-header:before {
            box-shadow: 5px 0px 0px 0px #c59d5f
        }

        .dt-sc-icon-box.type10:hover .icon-wrapper:before {
            box-shadow: 7px 0px 0px 0px #c59d5f
        }

        .dt-sc-counter.type6 .dt-sc-couter-icon-holder:before {
            box-shadow: 5px 1px 0px 0px #c59d5f
        }

        .dt-sc-button.with-shadow.white,
        .dt-sc-pr-tb-col.type2 .dt-sc-buy-now a {
            box-shadow: 3px 3px 0px 0px #c59d5f
        }

        .dt-sc-restaurant-events-list .dt-sc-restaurant-event-details h6:before {
            border-bottom-color: rgba(197, 157, 95, 0.6)
        }

        .portfolio.type4 .image-overlay,
        .dt-sc-timeline-section.type4 .dt-sc-timeline-thumb-overlay,
        .dt-sc-yoga-classes .dt-sc-yoga-classes-image-wrapper:before,
        .dt-sc-yoga-course .dt-sc-yoga-course-thumb-overlay,
        .dt-sc-yoga-program .dt-sc-yoga-program-thumb-overlay,
        .dt-sc-yoga-pose .dt-sc-yoga-pose-thumb:before,
        .dt-sc-yoga-teacher .dt-sc-yoga-teacher-thumb:before,
        .dt-sc-doctors .dt-sc-doctors-thumb-overlay,
        .dt-sc-event-addon>.dt-sc-event-addon-date,
        .dt-sc-course .dt-sc-course-overlay,
        .dt-sc-process-steps .dt-sc-process-thumb-overlay {
            background: rgba(197, 157, 95, 0.85)
        }

        @media only screen and (max-width: 767px) {

            .dt-sc-contact-info.type4:after,
            .dt-sc-icon-box.type10 .icon-content h4:after,
            .dt-sc-counter.type6.last h4::before,
            .dt-sc-counter.type6 h4::after {
                background-color: #c59d5f
            }
        }

        @media only screen and (max-width: 767px) {

            .dt-sc-timeline-section.type2,
            .dt-sc-timeline-section.type2::before {
                border-color: #c59d5f
            }
        }

        .woocommerce ul.products li.product .woo-type1 .star-rating:before,
        .woocommerce ul.products li.product .woo-type1 .star-rating span:before,
        .woocommerce ul.products li.product .woo-type1 .star-rating:before,
        .woocommerce ul.products li.product .woo-type1 .star-rating span:before,
        .woocommerce .woo-type1 .star-rating:before,
        .woocommerce .woo-type1 .star-rating span:before,
        .woocommerce .woo-type1 .star-rating:before,
        .woocommerce .woo-type1 .star-rating span:before {
            color: rgba(197, 157, 95, 0.75)
        }

        .woocommerce ul.products li.product:hover .woo-type8 .product-content,
        .woocommerce ul.products li.product-category:hover .woo-type8 .product-thumb .image:after,
        .woocommerce ul.products li.product:hover .woo-type8 .product-content,
        .woocommerce ul.products li.product-category:hover .woo-type8 .product-thumb .image:after,
        .woocommerce ul.products li.product:hover .woo-type13 .product-content,
        .woocommerce ul.products li.product:hover .woo-type13 .product-content,
        .woocommerce ul.products li.product.instock:hover .woo-type13 .on-sale-product .product-content,
        .woocommerce ul.products li.product.instock:hover .woo-type13 .on-sale-product .product-content,
        .woocommerce ul.products li.product.outofstock:hover .woo-type13 .out-of-stock-product .product-content,
        .woocommerce ul.products li.product.outofstock:hover .woo-type13 .out-of-stock-product .product-content,
        .woocommerce ul.products li.product-category:hover .woo-type13 .product-thumb .image:after,
        .woocommerce ul.products li.product-category:hover .woo-type13 .product-thumb .image:after {
            background-color: rgba(197, 157, 95, 0.75)
        }

        .woocommerce ul.products li.product:hover .woo-type8 .product-content:after,
        .woocommerce ul.products li.product:hover .woo-type8 .product-content:after {
            border-color: rgba(197, 157, 95, 0.75) rgba(197, 157, 95, 0.75) rgba(255, 255, 255, 0.35) rgba(255, 255, 255, 0.35)
        }

        ul.products li.product:hover .woo-type11 .product-wrapper {
            -webkit-box-shadow: 0 0 0 3px #c59d5f;
            -moz-box-shadow: 0 0 0 3px #c59d5f;
            -ms-box-shadow: 0 0 0 3px #c59d5f;
            -o-box-shadow: 0 0 0 3px #c59d5f;
            box-shadow: 0 0 0 3px #c59d5f;
        }

        .woo-type12 ul.products li.product .product-details {
            -webkit-box-shadow: 0 -3px 0 0 #c59d5f inset;
            -moz-box-shadow: 0 -3px 0 0 #c59d5f inset;
            -ms-box-shadow: 0 -3px 0 0 #c59d5f inset;
            -o-box-shadow: 0 -3px 0 0 #c59d5f inset;
            box-shadow: 0 -3px 0 0 #c59d5f inset;
        }

        ul.products li.product .woo-type14 .product-details,
        ul.products li.product .woo-type14 .product-details h5:after {
            -webkit-box-shadow: 0 0 0 2px #c59d5f inset;
            -moz-box-shadow: 0 0 0 2px #c59d5f inset;
            -ms-box-shadow: 0 0 0 2px #c59d5f inset;
            -o-box-shadow: 0 0 0 2px #c59d5f inset;
            box-shadow: 0 0 0 2px #c59d5f inset;
        }

        .dt-sc-event-month-thumb .dt-sc-event-read-more,
        .dt-sc-training-thumb-overlay {
            background: rgba(157, 125, 76, 0.85)
        }

        @media only screen and (max-width: 767px) {

            .dt-sc-highlight .dt-sc-testimonial.type6 .dt-sc-testimonial-author:after,
            .dt-sc-highlight .dt-sc-testimonial.type6 .dt-sc-testimonial-author:after,
            .skin-highlight .dt-sc-testimonial.type6 .dt-sc-testimonial-author:after {
                background-color: #9d7d4c
            }
        }

        ul.products li.product:hover .woo-type8 .product-details h5:after {
            border-color: rgba(0, 0, 0, 0) rgba(0, 0, 0, 0) #9d7d4c rgba(0, 0, 0, 0);
        }

        ul.products li.product .woo-type20 .product-thumb a.add_to_cart_button:hover,
        ul.products li.product .woo-type20 .product-thumb a.button.product_type_simple:hover,
        ul.products li.product .woo-type20 .product-thumb a.button.product_type_variable:hover,
        ul.products li.product .woo-type20 .product-thumb a.added_to_cart.wc-forward:hover,
        ul.products li.product .woo-type20 .product-thumb a.add_to_wishlist:hover,
        ul.products li.product .woo-type20 .product-thumb .yith-wcwl-wishlistaddedbrowse a:hover,
        ul.products li.product .woo-type20 .product-thumb .yith-wcwl-wishlistexistsbrowse a:hover,
        ul.products li.product:hover .woo-type20 .product-wrapper,
        .woocommerce ul.products li.product .woo-type20 .product-buttons-wrapper a.yith-wcqv-button:hover,
        .woocommerce ul.products li.product .woo-type20 .product-buttons-wrapper a.yith-woocompare-button:hover,
        ul.products li.product .woo-type20 .product-buttons-wrapper a.product_type_external:hover,
        ul.products li.product .woo-type20 .product-buttons-wrapper a.button.product_type_grouped:hover {
            background-color: rgba(157, 125, 76, 0.5)
        }

        .woocommerce ul.products li.product:hover .woo-type20 .product-buttons-wrapper {
            background-color: rgba(157, 125, 76, 0.3);
        }

        .dt-sc-faculty .dt-sc-faculty-thumb-overlay {
            background: rgba(208, 176, 126, 0.9)
        }

        ul.products li.product:hover .woo-type1 .product-thumb:after {
            -webkit-box-shadow: 0 0 0 10px rgba(208, 176, 126, 0.35) inset;
            -moz-box-shadow: 0 0 0 10px rgba(208, 176, 126, 0.35) inset;
            -ms-box-shadow: 0 0 0 10px rgba(208, 176, 126, 0.35) inset;
            -o-box-shadow: 0 0 0 10px rgba(208, 176, 126, 0.35) inset;
            box-shadow: 0 0 0 10px rgba(208, 176, 126, 0.35) inset;
        }

        ul.products li.product .woo-type20 .product-wrapper {
            -webkit-box-shadow: 0 0 0 5px rgba(208, 176, 126, 0.75) inset;
            -moz-box-shadow: 0 0 0 5px rgba(208, 176, 126, 0.75) inset;
            -ms-box-shadow: 0 0 0 5px rgba(208, 176, 126, 0.75) inset;
            -o-box-shadow: 0 0 0 5px rgba(208, 176, 126, 0.75) inset;
            box-shadow: 0 0 0 5px rgba(208, 176, 126, 0.75) inset;
        }

        @-webkit-keyframes color-change {
            0% {
                color: #c59d5f;
            }

            50% {
                color: #9d7d4c;
            }

            100% {
                color: #d0b07e;
            }
        }

        @-moz-keyframes color-change {
            0% {
                color: #c59d5f;
            }

            50% {
                color: #9d7d4c;
            }

            100% {
                color: #d0b07e;
            }
        }

        @-ms-keyframes color-change {
            0% {
                color: #c59d5f;
            }

            50% {
                color: #9d7d4c;
            }

            100% {
                color: #d0b07e;
            }
        }

        @-o-keyframes color-change {
            0% {
                color: #c59d5f;
            }

            50% {
                color: #9d7d4c;
            }

            100% {
                color: #d0b07e;
            }
        }

        @keyframes color-change {
            0% {
                color: #c59d5f;
            }

            50% {
                color: #9d7d4c;
            }

            100% {
                color: #d0b07e;
            }
        }

    </style>
    <script type='text/javascript'
        src='https://rnzxu3lrgrj1046y63g4g7l1-wpengine.netdna-ssl.com/wp-includes/js/jquery/jquery.min.js?ver=3.6.0'
        id='jquery-core-js'></script>
    <script type='text/javascript'
        src='https://rnzxu3lrgrj1046y63g4g7l1-wpengine.netdna-ssl.com/wp-includes/js/jquery/jquery-migrate.min.js?ver=3.3.2'
        id='jquery-migrate-js'></script>
    <script type='text/javascript'
        src='https://rnzxu3lrgrj1046y63g4g7l1-wpengine.netdna-ssl.com/wp-content/plugins/revslider/public/assets/js/rbtools.min.js?ver=6.3.4'
        id='tp-tools-js'></script>
    <script type='text/javascript'
        src='https://rnzxu3lrgrj1046y63g4g7l1-wpengine.netdna-ssl.com/wp-content/plugins/revslider/public/assets/js/rs6.min.js?ver=6.3.4'
        id='revmin-js'></script>
    <script type='text/javascript'
        src='https://rnzxu3lrgrj1046y63g4g7l1-wpengine.netdna-ssl.com/wp-content/plugins/woocommerce/assets/js/jquery-blockui/jquery.blockUI.min.js?ver=2.70'
        id='jquery-blockui-js'></script>
    <script type='text/javascript' id='wc-add-to-cart-js-extra'>
        /* <![CDATA[ */
        var wc_add_to_cart_params = { "ajax_url": "\/wp-admin\/admin-ajax.php", "wc_ajax_url": "\/?wc-ajax=%%endpoint%%", "i18n_view_cart": "View cart", "cart_url": "https:\/\/dtkudil.wpengine.com\/cart\/", "is_cart": "", "cart_redirect_after_add": "no" };
/* ]]> */
    </script>
    <script type='text/javascript'
        src='https://rnzxu3lrgrj1046y63g4g7l1-wpengine.netdna-ssl.com/wp-content/plugins/woocommerce/assets/js/frontend/add-to-cart.min.js?ver=4.8.3'
        id='wc-add-to-cart-js'></script>
    <script type='text/javascript'
        src='https://rnzxu3lrgrj1046y63g4g7l1-wpengine.netdna-ssl.com/wp-content/plugins/js_composer/assets/js/vendors/woocommerce-add-to-cart.js?ver=6.5.0'
        id='vc_woocommerce-add-to-cart-js-js'></script>
    <script type='text/javascript'
        src='https://rnzxu3lrgrj1046y63g4g7l1-wpengine.netdna-ssl.com/wp-content/themes/kudil/framework/js/modernizr.custom.js?ver=6.0.2'
        id='modernizr-custom-js'></script>
    <link rel="https://api.w.org/" href="https://dtkudil.wpengine.com/wp-json/" />
    <link rel="alternate" type="application/json" href="https://dtkudil.wpengine.com/wp-json/wp/v2/pages/9023" />
    <link rel="EditURI" type="application/rsd+xml" title="RSD" href="https://dtkudil.wpengine.com/xmlrpc.php?rsd" />
    <link rel="wlwmanifest" type="application/wlwmanifest+xml"
        href="https://dtkudil.wpengine.com/wp-includes/wlwmanifest.xml" />
    <link rel="canonical" href="https://dtkudil.wpengine.com/shop/" />
    <link rel='shortlink' href='https://dtkudil.wpengine.com/?p=9023' />
    <link rel="alternate" type="application/json+oembed"
        href="https://dtkudil.wpengine.com/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fdtkudil.wpengine.com%2Fshop%2F" />
    <link rel="alternate" type="text/xml+oembed"
        href="https://dtkudil.wpengine.com/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fdtkudil.wpengine.com%2Fshop%2F&#038;format=xml" />

    <script type="text/javascript">
        var jQueryMigrateHelperHasSentDowngrade = false;

        window.onerror = function (msg, url, line, col, error) {
            // Break out early, do not processing if a downgrade reqeust was already sent.
            if (jQueryMigrateHelperHasSentDowngrade) {
                return true;
            }

            var xhr = new XMLHttpRequest();
            var nonce = 'cab2a7f823';
            var jQueryFunctions = [
                'andSelf',
                'browser',
                'live',
                'boxModel',
                'support.boxModel',
                'size',
                'swap',
                'clean',
                'sub',
            ];
            var match_pattern = /\)\.(.+?) is not a function/;
            var erroredFunction = msg.match(match_pattern);

            // If there was no matching functions, do not try to downgrade.
            if (typeof erroredFunction !== 'object' || typeof erroredFunction[1] === "undefined" || -1 === jQueryFunctions.indexOf(erroredFunction[1])) {
                return true;
            }

            // Set that we've now attempted a downgrade request.
            jQueryMigrateHelperHasSentDowngrade = true;

            xhr.open('POST', 'https://dtkudil.wpengine.com/wp-admin/admin-ajax.php');
            xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
            xhr.onload = function () {
                var response,
                    reload = false;

                if (200 === xhr.status) {
                    try {
                        response = JSON.parse(xhr.response);

                        reload = response.data.reload;
                    } catch (e) {
                        reload = false;
                    }
                }

                // Automatically reload the page if a deprecation caused an automatic downgrade, ensure visitors get the best possible experience.
                if (reload) {
                    location.reload();
                }
            };

            xhr.send(encodeURI('action=jquery-migrate-downgrade-version&_wpnonce=' + nonce));

            // Suppress error alerts in older browsers
            return true;
        }
    </script>

    <noscript>
        <style>
            .woocommerce-product-gallery {
                opacity: 1 !important;
            }

        </style>
    </noscript>
    <style type="text/css">
        .recentcomments a {
            display: inline !important;
            padding: 0 !important;
            margin: 0 !important;
        }

    </style>
    <meta name="generator" content="Powered by WPBakery Page Builder - drag and drop page builder for WordPress." />
    <meta name="generator"
        content="Powered by Slider Revolution 6.3.4 - responsive, Mobile-Friendly Slider Plugin for WordPress with comfortable drag and drop interface." />
    <link rel="icon"
        href="https://rnzxu3lrgrj1046y63g4g7l1-wpengine.netdna-ssl.com/wp-content/uploads/2018/05/cropped-favicon-2-32x32.png"
        sizes="32x32" />
    <link rel="icon"
        href="https://rnzxu3lrgrj1046y63g4g7l1-wpengine.netdna-ssl.com/wp-content/uploads/2018/05/cropped-favicon-2-192x192.png"
        sizes="192x192" />
    <link rel="apple-touch-icon"
        href="https://rnzxu3lrgrj1046y63g4g7l1-wpengine.netdna-ssl.com/wp-content/uploads/2018/05/cropped-favicon-2-180x180.png" />
    <meta name="msapplication-TileImage"
        content="https://dtkudil.wpengine.com/wp-content/uploads/2018/05/cropped-favicon-2-270x270.png" />
    <script type="text/javascript">function setREVStartSize(e) {
            //window.requestAnimationFrame(function() {
            window.RSIW = window.RSIW === undefined ? window.innerWidth : window.RSIW;
            window.RSIH = window.RSIH === undefined ? window.innerHeight : window.RSIH;
            try {
                var pw = document.getElementById(e.c).parentNode.offsetWidth,
                    newh;
                pw = pw === 0 || isNaN(pw) ? window.RSIW : pw;
                e.tabw = e.tabw === undefined ? 0 : parseInt(e.tabw);
                e.thumbw = e.thumbw === undefined ? 0 : parseInt(e.thumbw);
                e.tabh = e.tabh === undefined ? 0 : parseInt(e.tabh);
                e.thumbh = e.thumbh === undefined ? 0 : parseInt(e.thumbh);
                e.tabhide = e.tabhide === undefined ? 0 : parseInt(e.tabhide);
                e.thumbhide = e.thumbhide === undefined ? 0 : parseInt(e.thumbhide);
                e.mh = e.mh === undefined || e.mh == "" || e.mh === "auto" ? 0 : parseInt(e.mh, 0);
                if (e.layout === "fullscreen" || e.l === "fullscreen")
                    newh = Math.max(e.mh, window.RSIH);
                else {
                    e.gw = Array.isArray(e.gw) ? e.gw : [e.gw];
                    for (var i in e.rl) if (e.gw[i] === undefined || e.gw[i] === 0) e.gw[i] = e.gw[i - 1];
                    e.gh = e.el === undefined || e.el === "" || (Array.isArray(e.el) && e.el.length == 0) ? e.gh : e.el;
                    e.gh = Array.isArray(e.gh) ? e.gh : [e.gh];
                    for (var i in e.rl) if (e.gh[i] === undefined || e.gh[i] === 0) e.gh[i] = e.gh[i - 1];

                    var nl = new Array(e.rl.length),
                        ix = 0,
                        sl;
                    e.tabw = e.tabhide >= pw ? 0 : e.tabw;
                    e.thumbw = e.thumbhide >= pw ? 0 : e.thumbw;
                    e.tabh = e.tabhide >= pw ? 0 : e.tabh;
                    e.thumbh = e.thumbhide >= pw ? 0 : e.thumbh;
                    for (var i in e.rl) nl[i] = e.rl[i] < window.RSIW ? 0 : e.rl[i];
                    sl = nl[0];
                    for (var i in nl) if (sl > nl[i] && nl[i] > 0) { sl = nl[i]; ix = i; }
                    var m = pw > (e.gw[ix] + e.tabw + e.thumbw) ? 1 : (pw - (e.tabw + e.thumbw)) / (e.gw[ix]);
                    newh = (e.gh[ix] * m) + (e.tabh + e.thumbh);
                }
                if (window.rs_init_css === undefined) window.rs_init_css = document.head.appendChild(document.createElement("style"));
                document.getElementById(e.c).height = newh + "px";
                window.rs_init_css.innerHTML += "#" + e.c + "_wrapper { height: " + newh + "px }";
            } catch (e) {
                console.log("Failure at Presize of Slider:" + e)
            }
            //});
        };</script>
    <style id="kirki-inline-styles">
        .has-primary-background-color {
            background-color: #c59d5f;
        }

        .has-primary-color {
            color: #c59d5f;
        }

        a,
        h1 a:hover,
        h2 a:hover,
        h3 a:hover,
        h4 a:hover,
        h5 a:hover,
        h6 a:hover,
        .breadcrumb a:hover,
        input[type="submit"],
        input[type="reset"],
        button,
        input[type="button"],
        .breadcrumb span.current,
        .main-title-section h2.main-subtitle-text,
        .c-bully,
        .c-bully--inversed {
            color: #c59d5f;
        }

        .dt-header-menu ul.dt-primary-nav li:hover>a,
        .dt-header-menu ul.dt-primary-nav li>a:hover,
        .dt-header-menu ul.dt-primary-nav li ul.sub-menu li:hover>a,
        .dt-header-menu ul.dt-primary-nav li ul.sub-menu li>a:hover,
        #header .white a:hover,
        .dt-header-menu ul.dt-primary-nav li.current-page-item>a,
        .dt-header-menu ul.dt-primary-nav li.current-menu-item>a,
        .dt-header-menu ul.dt-primary-nav li.current-page-ancestor>a,
        .dt-header-menu ul.dt-primary-nav li.current-menu-ancestor>a,
        .no-header-menu ul.dt-primary-nav li:hover>a,
        .no-header-menu ul.dt-primary-nav li>a:hover,
        .no-header-menu ul.dt-primary-nav li ul.children li:hover>a,
        .no-header-menu ul.dt-primary-nav li ul.children li>a:hover,
        .no-header-menu ul.dt-primary-nav li.current_page_item>a,
        .no-header-menu ul.dt-primary-nav li.current_menu_item>a,
        .no-header-menu ul.dt-primary-nav li.current_page_ancestor>a,
        .no-header-menu ul.dt-primary-nav li.current_menu_ancestor>a,
        .no-header-menu ul.dt-primary-nav li ul.sub-menu li.current_page_item>a,
        .no-header-menu ul.dt-primary-nav li ul.sub-menu li.current_menu_item>a,
        .no-header-menu ul.dt-primary-nav li ul.sub-menu li.current_page_ancestor>a,
        .no-header-menu ul.dt-primary-nav li ul.sub-menu li.current_menu_ancestor>a,
        .no-header-menu ul.dt-primary-nav li ul.children li.current_page_item>a,
        .no-header-menu ul.dt-primary-nav li ul.children li.current_menu_item>a,
        .no-header-menu ul.dt-primary-nav li ul.children li.current_page_ancestor>a,
        .no-header-menu ul.dt-primary-nav li ul.children li.current_menu_ancestor>a,
        .mobile-menu ul.dt-primary-nav>li:hover>a,
        .mobile-menu ul.dt-primary-nav>li.current_page_item>a,
        .mobile-menu ul.dt-primary-nav>li.current-menu-item>a,
        .mobile-menu ul.dt-primary-nav>li.current-page-ancestor>a,
        .mobile-menu ul.dt-primary-nav>li.current-menu-ancestor>a,
        .mobile-menu ul.dt-primary-nav li ul.sub-menu li:hover>a,
        .mobile-menu ul.dt-primary-nav ul.sub-menu li.current_page_item>a,
        .mobile-menu ul.dt-primary-nav ul.sub-menu li.current-menu-item>a,
        .mobile-menu ul.dt-primary-nav ul.sub-menu li.current-page-ancestor>a,
        .mobile-menu ul.dt-primary-nav ul.sub-menu li.current-menu-ancestor>a,
        .menu-icons-wrapper .overlay-search #searchform:before,
        #header .header-25 .dt-sc-sociable:before,
        #header .header-25 .menu-icons-wrapper .search a,
        #header .header-25 .cart-info:before,
        #header .header-25 .dt-header-menu .dt-primary-nav>li:before {
            color: #c59d5f;
        }

        .blog-entry .entry-meta a:hover,
        .blog-entry.entry-date-left .entry-date a:hover,
        .blog-entry.entry-date-author-left .entry-date-author .comments:hover,
        .blog-entry.entry-date-author-left .entry-date-author .comments:hover i,
        .entry-meta-data p a:hover,
        .blog-entry.entry-date-author-left .entry-date-author .entry-author a:hover,
        .blog-entry.entry-date-author-left .entry-date-author .comments a:hover,
        .dt-sc-dark-bg .blog-medium-style.white-highlight .dt-sc-button.fully-rounded-border,
        .blog-entry.blog-thumb-style .entry-title h4 a:hover,
        .blog-entry.blog-thumb-style a.read-more:hover,
        .blog-entry .dt-sc-button.simple:hover,
        .blog-entry.bordered:hover .date,
        .blog-entry.post-info-within-image .entry-meta .entry-title h4 a:hover,
        .blog-entry.post-info-within-image .entry-meta a:hover,
        .blog-entry.post-info-within-image .entry-meta a:hover i,
        .blog-entry.post-standard .entry-meta .entry-info a:hover,
        .blog-entry.post-info-vertical-image .entry-meta .entry-info>*:hover,
        .blog-entry.post-info-vertical-image .entry-meta a:hover,
        .blog-entry.post-info-vertical-image .entry-meta .entry-info>*:hover i,
        .blog-entry.post-info-vertical-image .entry-meta .entry-title h4:hover a,
        .blog-entry.post-info-bottom-image .entry-meta .entry-info a:hover,
        .blog-entry.post-info-bottom-image .entry-meta .entry-info a:hover i,
        .blog-entry.entry-center-align .entry-meta .date,
        .blog-entry.entry-center-align .entry-details .dt-sc-button,
        .blog-entry.entry-center-align .entry-title h4 a:hover,
        .pagination ul li a,
        .pagination ul li a:hover,
        .pagination ul li span,
        .pagination ul li a i,
        .pagination ul li a:hover i,
        .page-link a,
        .page-link a span,
        .post-nav-container .post-next-link a:hover,
        .post-nav-container .post-prev-link a:hover,
        .post-nav-container .post-next-link a:hover i,
        .post-nav-container .post-prev-link a:hover i,
        .pagination a:hover,
        .comment-form p:focus span:before,
        .comment-form p:focus-within span:before,
        .wpcf7-form .contact-form:focus>b:before,
        .wpcf7-form .contact-form:focus-within>b:before,
        .blog-entry.entry-minimal-bordered .entry-meta-data a.dt-sc-button:hover,
        .blog-entry.entry-minimal-bordered .entry-meta-data .author a:hover,
        .blog-entry.entry-minimal-bordered .entry-meta-data .comments a:hover,
        .blog-entry.entry-minimal-bordered:hover .entry-title h4 a {
            color: #c59d5f;
        }

        .widget #wp-calendar td a:hover,
        .dt-sc-dark-bg .widget #wp-calendar td a:hover,
        .secondary-sidebar .widget ul li>a:hover,
        .dt-sc-practices-list li:before,
        .secondary-sidebar .type15 .widget.widget_recent_reviews ul li .reviewer,
        .secondary-sidebar .type15 .widget.widget_top_rated_products ul li .amount.amount,
        .secondary-sidebar .type7 aside.widget_recent_entries ul li:before,
        .secondary-sidebar .type7 aside.widget_recent_comments ul li:before,
        .secondary-sidebar .type7 aside.widget_headlines ul li:before,
        .secondary-sidebar .type7 aside.widget_tweetbox ul li:before,
        .secondary-sidebar .type7 aside.widget #sb_instagram .sbi_follow_btn a,
        #main-menu .menu-item-widget-area-container .widget ul li>a:hover,
        #main-menu .dt-sc-dark-bg .menu-item-widget-area-container .widget ul li>a:hover,
        #main-menu .dt-sc-dark-bg .menu-item-widget-area-container .widget_recent_posts .entry-title h4 a:hover,
        #main-menu ul li.menu-item-simple-parent.dt-sc-dark-bg ul li a:hover,
        #main-menu .menu-item-widget-area-container .widget li:hover:before {
            color: #c59d5f;
        }

        #footer .footer-copyright .menu-links li a:hover,
        #footer .footer-copyright .copyright-left a:hover,
        #footer .dt-sc-dark-bg .recent-posts-widget li .entry-meta a:hover,
        #footer .dt-sc-dark-bg .entry-title h4 a:hover,
        #footer .dt-sc-dark-bg a:hover,
        .left-header-footer .dt-sc-sociable.filled li a,
        .footer-widgets a:hover,
        #footer a:hover,
        .dt-sc-skin-color,
        .dt-sc-skin-color a,
        #footer .wpcf7-form.bottom-bordered input[type="submit"],
        #footer .wpcf7-form.bottom-bordered button,
        #footer .wpcf7-form.bottom-bordered input[type="button"],
        #footer .wpcf7-form.bottom-bordered input[type="reset"],
        #footer h1 strong,
        #footer h2 strong,
        #footer h3 strong,
        #footer h4 strong,
        #footer h5 strong,
        #footer h6 strong,
        #footer .dt-sc-dark-bg.map-with-overlay .map-overlay.wpb_column .dt-sc-tabs-horizontal-container ul.dt-sc-tabs-horizontal>li>a:hover,
        #footer .dt-sc-dark-bg.map-with-overlay .map-overlay.wpb_column .dt-sc-tabs-horizontal-container ul.dt-sc-tabs-horizontal>li>a.current,
        #footer .dt-sc-light-bg.map-with-overlay .map-overlay.wpb_column .dt-sc-tabs-horizontal-container ul.dt-sc-tabs-horizontal>li>a:hover,
        #footer .dt-sc-light-bg.map-with-overlay .map-overlay.wpb_column .dt-sc-tabs-horizontal-container ul.dt-sc-tabs-horizontal>li>a.current,
        .footer-19 .blog-entry.blog-default-style .entry-meta .date,
        #footer .footer-19 .blog-entry.blog-default-style a.dt-sc-button.small,
        .footer-20 .widget .recent-posts-widget li .entry-meta p,
        #footer .footer-21 .dt-sc-sociable.partially-rounded li>a:hover>i,
        #footer .footer-22 .dt-sc-newsletter-section.type6 .dt-sc-subscribe-frm input[type="submit"],
        #footer .footer-22 .dt-sc-newsletter-section.type6 .dt-sc-subscribe-frm input[type="email"],
        #footer .footer-22 .dt-sc-newsletter-section.type6 .dt-sc-subscribe-frm input[type="text"],
        #footer .footer-24 .widget.widget_recent_entries ul li .post-date,
        #footer .footer-25.dt-sc-skin-highlight input[type="submit"],
        #footer .footer-25.dt-sc-skin-highlight button,
        #footer .footer-25.dt-sc-skin-highlight input[type="button"],
        #footer .footer-25.dt-sc-skin-highlight input[type="reset"],
        #footer .footer-29 .dt-sc-button.fully-rounded-border,
        .footer-29 .dt-sc-contact-info.type1:hover span,
        .footer-30 .dt-sc-contact-info.type1 span,
        #footer .footer-30 .dt-mc-subscribe form .btn-wrap.icon-only i,
        .footer-34 .wpb_column:hover h3:before,
        #footer .footer-27 .dt-sc-contact-info.type1 a:hover,
        #footer .footer-28.footer-copyright.dt-sc-dark-bg a:hover {
            color: #c59d5f;
        }

        .portfolio .image-overlay .links a:hover,
        .portfolio.type7 .image-overlay .links a,
        .project-details li a:hover,
        .portfolio-categories a:hover,
        .dt-portfolio-single-slider-wrapper #bx-pager a.active:hover:before,
        .dt-portfolio-single-slider-wrapper #bx-pager a,
        .portfolio.type8 .image-overlay .links a,
        .dt-sc-portfolio-sorting.type5 a {
            color: #c59d5f;
        }

        .dt-skin-primary-color,
        ul.side-nav li a:hover,
        .available-domains li span,
        .dt-sc-popular-procedures .details .duration,
        .dt-sc-popular-procedures .details .price,
        .dt-sc-text-with-icon span,
        blockquote.type4 span,
        .dt-sc-contact-info.type3 span,
        .dt-sc-pr-tb-col.type2 .dt-sc-buy-now a,
        .dt-sc-events-list .dt-sc-event-title h5 a,
        .woocommerce-MyAccount-navigation ul>li.is-active>a,
        .side-navigation.type5 ul.side-nav li.current_page_item a,
        .side-navigation.type5 ul.side-nav>li>a:hover,
        blockquote q:before,
        blockquote q:after,
        .dt-sc-progress,
        blockquote q,
        blockquote.type1 q:before,
        blockquote.type1 q:after,
        .dt-sc-progress,
        blockquote.type1 q {
            color: #c59d5f;
        }

        .dt-sc-button.fully-rounded-border,
        .dt-sc-button.rounded-border,
        .dt-sc-button.bordered,
        .dt-sc-button.with-shadow.white,
        .dt-sc-skin-highlight .dt-sc-button.rounded-border:hover,
        .dt-sc-skin-highlight .dt-sc-button.bordered:hover,
        .dt-sc-dark-bg.skin-color .dt-sc-button.fully-rounded-border:hover,
        .dt-sc-button.dt-sc-strike-over-button,
        .dt-custom-title-link p a,
        .dt-sc-button.no-border-bg,
        .dt-sc-button.filled:hover {
            color: #c59d5f;
        }

        .dt-sc-icon-box.type1:hover .icon-content h4,
        .dt-sc-icon-box.type1 .icon-wrapper .icon,
        .dt-sc-icon-box.type4 .icon-wrapper span,
        .dt-sc-icon-box.type5:hover .icon-content h4 a,
        .dt-sc-icon-box.type5.no-icon-bg .icon-wrapper span,
        .dt-sc-icon-box.type5.no-icon-bg:hover .icon-wrapper span,
        .dt-sc-icon-box.type10 .icon-wrapper span,
        .dt-sc-icon-box.type10:hover .icon-content h4,
        .dt-sc-icon-box.type13 .icon-content h4,
        .dt-sc-icon-box.type14 .icon-content h4,
        .dt-sc-icon-box.type8 .icon-wrapper span,
        .dt-sc-icon-box.type8:hover .icon-content h4 {
            color: #c59d5f;
        }

        .dt-sc-testimonial.type4 .dt-sc-testimonial-author cite,
        .dt-sc-testimonial.type5 .dt-sc-testimonial-author cite,
        .dt-sc-testimonial.type7 .dt-sc-testimonial-quote blockquote cite,
        .dt-sc-testimonial.type8 .dt-sc-testimonial-quote blockquote q:before,
        .dt-sc-testimonial.type8 .dt-sc-testimonial-quote blockquote q:after,
        .dt-sc-testimonial-special-wrapper:after,
        .dt-sc-special-testimonial-images-holder .dt-sc-testimonial-image.slick-current .dt-sc-testimonial-author cite,
        .dt-sc-team-carousel-wrapper .dt-sc-team-details .dt-sc-team-social li a:hover {
            color: #c59d5f;
        }

        ul.dt-sc-tabs-horizontal-frame>li>a.current,
        ul.dt-sc-tabs-horizontal>li>a.current,
        ul.dt-sc-tabs-horizontal>li>a:hover,
        ul.dt-sc-tabs-horizontal-frame>li>a:hover,
        .type7 ul.dt-sc-tabs-horizontal-frame>li>a.current {
            color: #c59d5f;
        }

        ul.dt-sc-tabs-vertical-frame>li>a:hover,
        ul.dt-sc-tabs-vertical-frame>li.current a,
        ul.dt-sc-tabs-vertical>li>a.current,
        .dt-sc-tabs-vertical-frame-container.type2 ul.dt-sc-tabs-vertical-frame>li>a.current:before,
        ul.dt-sc-tabs-vertical>li>a:hover {
            color: #c59d5f;
        }

        .dt-sc-toggle-frame-set>.dt-sc-toggle-accordion.active>a,
        .dt-sc-toggle-group-set .dt-sc-toggle.active>a,
        .dt-sc-toggle-frame h5.dt-sc-toggle-accordion.active a,
        .dt-sc-toggle-frame h5.dt-sc-toggle.active a,
        .dt-sc-toggle-panel h2 span {
            color: #c59d5f;
        }

        .dt-sc-title.with-sub-title h3,
        .dt-sc-title.script-with-sub-title h2,
        .dt-sc-title.with-two-color-stripe h2,
        .dt-sc-hexagon-title h2 span,
        #footer .footer-22 .dt-sc-title.script-with-sub-title h3,
        .side-navigation-content .dt-sc-title.script-with-sub-title strong,
        .dt-sc-menu-title,
        .dt-sc-title.script-with-sub-title.dt-sc-custom-title h1,
        .dt-sc-title.script-with-sub-title.dt-sc-custom-title h2,
        .dt-sc-title.script-with-sub-title.dt-sc-custom-title h3,
        .vc_row.dt-sc-custom-info-box p strong,
        .dt-sc-title.script-with-sub-title.dt-sc-custom-title.alter-color h4,
        .dt-sc-title.script-with-sub-title.dt-sc-custom-title.alter-color h5,
        .dt-sc-title.script-with-sub-title.dt-sc-custom-title.alter-color h6,
        .dt-sc-title.script-with-sub-title h4,
        .dt-sc-title.script-with-sub-title h5,
        .dt-sc-title.script-with-sub-title h6 {
            color: #c59d5f;
        }

        .dt-sc-image-with-caption h3 a,
        .dt-sc-image-caption.type3 .dt-sc-image-content h3,
        .dt-sc-event-image-caption .dt-sc-image-content h3,
        .dt-sc-image-caption.type8:hover .dt-sc-image-content h3 a:hover,
        .dt-sc-image-caption.type3 .dt-sc-image-wrapper .icon-wrapper span,
        .dt-sc-image-caption.type7 .dt-sc-image-content a.dt-sc-button,
        .dt-sc-image-caption.type4:hover .dt-sc-image-content h3 {
            color: #c59d5f;
        }

        .dt-sc-contact-info.type3 h6,
        .dt-sc-contact-info.type3 h4 {
            color: #c59d5f;
        }

        .dt-sc-team.hide-social-role-show-on-hover .dt-sc-team-social.rounded-square li a,
        .dt-sc-team.rounded .dt-sc-team-details .dt-sc-team-social li a:hover,
        .dt-sc-team.rounded.team_rounded_border:hover .dt-sc-team-details h4,
        .dt-sc-team.type2 .dt-sc-team-social.rounded-border li a:hover,
        .dt-sc-team.type2 .dt-sc-team-social.rounded-square li a:hover,
        .dt-sc-team.type2 .dt-sc-team-social.square-border li a:hover,
        .dt-sc-team.type2 .dt-sc-team-social.hexagon-border li a:hover,
        .dt-sc-team.type2 .dt-sc-team-social.diamond-square-border li a:hover,
        .dt-sc-team.hide-social-show-on-hover .dt-sc-team-details h5,
        .dt-sc-image-caption.type4 .dt-sc-image-content h3:after,
        .dt-sc-image-caption.type4 .dt-sc-image-wrapper .icon-wrapper span {
            color: #c59d5f;
        }

        .dt-sc-timeline .dt-sc-timeline-content h2 span,
        .dt-sc-hr-timeline-section.type2 .dt-sc-hr-timeline-content:hover h3,
        .dt-sc-timeline-section.type4 .dt-sc-timeline:hover .dt-sc-timeline-content h2,
        .dt-sc-timeline-section.dt-sc-vc-special .dt-sc-timeline .dt-sc-timeline-content .dt-sc-timeline-content-wrapper span,
        .dt-sc-timeline-section.dt-sc-vc-special .dt-sc-timeline-image-wrapper .dt-sc-timeline-thumb-overlay h5 {
            color: #c59d5f;
        }

        .dt-sc-sociable.diamond-square-border li:hover a,
        .dt-sc-sociable.hexagon-border li:hover a,
        .dt-sc-sociable.hexagon-with-border li:hover a,
        .dt-sc-sociable.no-margin li a {
            color: #c59d5f;
        }

        .dt-sc-counter.type1 .dt-sc-counter-number,
        .dt-sc-counter.type3.diamond-square h4,
        .dt-sc-counter.type6:hover h4 {
            color: #c59d5f;
        }

        .dt-products-list .dt-product-item .dt-sc-product-details .dt-product-rating .star-rating:before,
        .dt-products-list .dt-product-item .dt-sc-product-details .dt-product-rating span:before,
        .dt-products-list .dt-product-item:hover .dt-sc-product-details .dt-sc-product-title-wrapper .price-wrapper .price .amount,
        .dt-products-list .dt-product-item:hover .dt-sc-product-details .dt-sc-product-title-wrapper a h2,
        .woocommerce ul.products li.product .product-details h5 a:hover,
        ul.products li.product .woo-type1 .product-details h5,
        ul.products li.product .woo-type1 .product-details h5 a {
            color: #c59d5f;
        }

        .dt-sc-custom-parallax-content .dt-sc-parallax-quote-name p,
        .dt-sc-timeline-section.dt-sc-vc-special .dt-sc-timeline:hover .dt-sc-timeline-content h2 {
            color: #c59d5f;
        }

        th,
        .loader,
        .wpcf7-form-control-wrap:before,
        input[type="submit"]:hover,
        button:hover,
        input[type="button"]:hover,
        input[type="reset"]:hover,
        .dt-inline-modal>h4 {
            background-color: #c59d5f;
        }

        .overlay .overlay-close,
        #header .header-25 .dt-sc-sociable li a,
        #header .header-27 .cart-info:before,
        #header .header-28 .cart-icon span,
        .dt-simpler-slider:before,
        .dt-sc-simpler-content-open .dt-simpler-slider:before,
        .dt-header-menu ul.dt-primary-nav li ul.sub-menu li a span:after {
            background-color: #c59d5f;
        }

        #footer .wpcf7-form.bottom-bordered input[type="submit"]:hover,
        #footer .wpcf7-form.bottom-bordered button:hover,
        #footer .wpcf7-form.bottom-bordered input[type="button"]:hover,
        #footer .wpcf7-form.bottom-bordered input[type="reset"]:hover,
        .footer-20 .footer-20-contact .vc_column-inner,
        #footer .footer-22 .dt-sc-newsletter-section.type6 .dt-sc-subscribe-frm input[type="submit"]:hover,
        #footer .footer-24 .widget.widget_recent_entries ul li:before,
        .footer-29 h3:before,
        .footer-28 .dt-sc-contact-info.type8:hover span {
            background-color: #c59d5f;
        }

        .entry-format a,
        .blog-entry.blog-medium-style:hover .entry-format a,
        .blog-entry.blog-medium-style.dt-blog-medium-highlight.dt-sc-skin-highlight,
        .blog-entry.blog-medium-style.dt-blog-medium-highlight.dt-sc-skin-highlight .entry-format a,
        .dt-sc-dark-bg .blog-medium-style.white-highlight .dt-sc-button.fully-rounded-border:hover,
        .post-edit-link:hover,
        .vc_inline-link:hover,
        .blog-entry.post-info-within-image .entry-meta .dt_scroll_down a:hover,
        .blog-entry.post-info-within-image .entry-meta p.category a:hover,
        .blog-entry.post-info-within-image .entry-meta-data p a:hover,
        .blog-entry.post-standard .entry-meta p.category a:hover,
        .blog-entry.post-standard .entry-meta-data p a:hover,
        .blog-entry.post-standard .entry-meta .entry-info .author:hover i.zmdi:after,
        .blog-entry.post-standard .entry-meta .entry-info .date:hover i.zmdi:after,
        .blog-entry.post-standard .entry-meta .entry-info .comments:hover i.zmdi:after,
        .blog-entry.post-standard .entry-meta .entry-info .views:hover i.zmdi:after,
        .blog-entry.post-standard .entry-meta .entry-info .likes:hover i.zmdi:after,
        .blog-entry.post-info-above-image .entry-meta p.category a:hover,
        .blog-entry.post-info-above-image .entry-meta-data p a:hover,
        .blog-entry.post-info-vertical-image .entry-meta p.category a:hover,
        .blog-entry.post-info-vertical-image .entry-meta-data p a:hover,
        .blog-entry.post-info-vertical-image .entry-thumb .entry-meta .entry-title h4:hover:after,
        .blog-entry.post-info-vertical-image .entry-thumb .entry-meta .entry-title h4:hover:before,
        .blog-entry.post-info-bottom-image .entry-meta-data p a:hover,
        .blog-entry.post-info-bottom-image .entry-meta.bottom-left p.category a:hover,
        .blog-entry.entry-center-align .entry-title h4:after,
        #respond h3#reply-title:after,
        .related-post>h4:after,
        .blog-entry.entry-minimal-bordered .entry-meta p a:hover,
        .comment-reply-link:hover,
        .blog-entry.entry-minimal-bordered:not(.has-post-thumbnail) .sticky-post,
        .page-link>span,
        .page-link a:hover {
            background-color: #c59d5f;
        }

        .widget .dt-sc-newsletter-section.boxed .dt-sc-subscribe-frm input[type="submit"]:hover,
        .tagcloud a:hover,
        .widgettitle:before,
        .widget.widget_categories ul li>a:hover span,
        .widget.widget_archive ul li>a:hover span,
        .secondary-sidebar .type7 aside.widget.widget_archive ul li>a:hover,
        .secondary-sidebar .type7 aside.widget.widget_pages ul li>a:hover,
        .secondary-sidebar .type7 aside.widget.widget_meta ul li>a:hover,
        .secondary-sidebar .type7 aside.widget.widget_nav_menu ul.menu li>a:hover,
        .secondary-sidebar .type7 aside.widget.widget_text ul li>a:hover,
        .secondary-sidebar .type7 aside:hover:before,
        .secondary-sidebar .type7 aside.widget.widget_categories ul li>a:hover,
        .secondary-sidebar .type7 aside.widget .recent-posts-widget li:hover .entry-meta p,
        .secondary-sidebar .type7 aside.widget.widget_essbsocialfollowerscounterwidget .essbfc-template-tinylight li:hover .essbfc-network:before,
        .dt-sc-dark-bg .tagcloud a:hover,
        .dt-sc-dark-bg .widget.widget_categories ul li>a:hover span,
        #footer .dt-sc-dark-bg .widget.widget_categories ul li>a:hover span,
        #footer .dt-sc-dark-bg .widget.widget_archive ul li>a:hover span,
        .related.products>h2:after,
        .upsells.products>h2:after {
            background-color: #c59d5f;
        }

        .dt-sc-portfolio-sorting a.active-sort,
        .dt-sc-portfolio-sorting a:hover,
        .dt-sc-portfolio-sorting a:hover:before,
        .dt-sc-portfolio-sorting a:hover:after,
        .dt-sc-portfolio-sorting a.active-sort:before,
        .dt-sc-portfolio-sorting a.active-sort:after,
        .portfolio.type2 .image-overlay-details,
        .portfolio.type2 .image-overlay .links a:hover,
        .dt-sc-portfolio-sorting.type2,
        .dt-sc-portfolio-sorting.type2:before,
        .portfolio.type6 .image-overlay .links a:hover,
        .portfolio.type7 .image-overlay-details .categories a:before,
        .portfolio.type7 .image-overlay .links a:hover:before {
            background-color: #c59d5f;
        }

        .dt-skin-primary-bg,
        div[class*="dt-skin-primary-bg-opaque"]:not(.ult-vc-hide-row):before,
        div[class*="dt-skin-primary-bg-opaque"] .upb_row_bg:before,
        section[class*="dt-skin-primary-bg-opaque"]:before,
        ul.side-nav li a:hover:before,
        ul.side-nav>li.current_page_item>a:before,
        ul.side-nav>li>ul>li.current_page_item>a:before,
        ul.side-nav>li>ul>li>ul>li.current_page_item>a:before,
        .dt-sc-small-separator,
        .dt-sc-diamond-separator,
        .dt-sc-titled-box h6.dt-sc-titled-box-title,
        .carousel-arrows a:hover,
        .dt-sc-images-wrapper .carousel-arrows a:hover,
        .diamond-narrow-square-border li:hover:before,
        .dt-sc-sociable.hexagon-with-border li,
        .dt-sc-skin-highlight,
        .dt-sc-skin-highlight.extend-bg-fullwidth-left:after,
        .dt-sc-skin-highlight.extend-bg-fullwidth-right:after,
        .dt-skin-primary-bg.extend-bg-fullwidth-left:after,
        .dt-skin-primary-bg.extend-bg-fullwidth-right:after,
        .two-color-section:before,
        .dt-sc-readmore-plus-icon:hover:before,
        .dt-sc-readmore-plus-icon:hover:after,
        .dt-sc-contact-details-on-map .map-switch-icon,
        .dt-sc-content-with-hexagon-shape,
        .dt-sc-hexagons li .dt-sc-hexagon-overlay,
        .available-domains li .tdl:before,
        .available-domains li:hover .dt-sc-button,
        .domain-search-container .domain-search-form,
        .dt-sc-newsletter-section.type1 h2:before,
        .dt-sc-newsletter-section.type1 h2:after,
        .side-navigation.type2 ul.side-nav>li.current_page_item>a,
        .side-navigation.type3 ul.side-nav>li.current_page_item>a,
        .side-navigation.type3 ul.side-nav>li:hover>a,
        .side-navigation.type4 ul.side-nav li a:after,
        .side-navigation.type5 ul.side-nav li:after,
        .dt-mc-subscribe.only-border-bottom form:before {
            background-color: #c59d5f;
        }

        .dt-sc-button.filled,
        .dt-sc-button:hover,
        .dt-sc-button.rounded-border:hover,
        .dt-sc-button.bordered:hover,
        .dt-sc-button.fully-rounded-border:hover,
        .dt-sc-colored-big-buttons:hover,
        .dt-sc-colored-big-buttons span,
        .dt-sc-button.dt-sc-strike-over-button:before,
        .dt-sc-button.dt-sc-strike-over-button:after,
        .dt-sc-portfolio-sorting.type5 a:before,
        .dt-sc-portfolio-sorting.type5 a:after,
        .dt-custom-title-link p a:before,
        .dt-custom-title-link p a:after,
        .comment-reply-link:before,
        .comment-reply-link:after,
        .dt-sc-button.no-border-bg:before {
            background-color: #c59d5f;
        }

        .dt-sc-contact-info.type2:hover span,
        .dt-sc-contact-info.type4 span,
        .dt-sc-contact-info.type4 h6:after,
        .dt-sc-contact-info.type5 .dt-sc-contact-icon,
        .dt-sc-contact-info.type5:hover,
        .dt-sc-contact-info.type6,
        .dt-sc-contact-info.type7 span:after,
        .dt-sc-contact-info.type4:after,
        .university-contact-form .button-field i,
        .dt-sc-contact-info.type8 h6:after,
        .dt-sc-contact-info.type3:hover h6:after {
            background-color: #c59d5f;
        }

        .dt-sc-counter.type1 .dt-sc-counter-number:after,
        .dt-sc-counter.type2 .dt-sc-couter-icon-holder,
        .dt-sc-counter.type3:hover .icon-wrapper,
        .dt-sc-counter.type3.diamond-square .dt-sc-couter-icon-holder .icon-wrapper:before,
        .dt-sc-counter.type4:hover .dt-sc-couter-icon-holder,
        .dt-sc-counter.type5:hover:after,
        .dt-sc-counter.type6 h4:before,
        .dt-sc-counter.type6:hover .dt-sc-couter-icon-holder:before {
            background-color: #c59d5f;
        }

        .dt-sc-icon-box.type1 .icon-content h4:before,
        .dt-sc-icon-box.type3 .icon-wrapper span,
        .dt-sc-icon-box.type3.dt-sc-diamond:hover .icon-wrapper:after,
        .dt-sc-icon-box.type5.rounded-skin .icon-wrapper,
        .dt-sc-icon-box.type5.rounded:hover .icon-wrapper,
        .dt-sc-icon-box.type5:hover .icon-wrapper:before,
        .dt-sc-icon-box.type5.alter .icon-wrapper:before,
        .dt-sc-icon-box.type6 .icon-wrapper,
        .dt-sc-icon-box.type7 .icon-wrapper,
        .dt-sc-contact-info.type8:hover span,
        .dt-sc-icon-box.type10:hover .icon-wrapper:before,
        .dt-sc-icon-box.type10 .icon-content h4:before,
        .dt-sc-icon-box.type11:before,
        .dt-sc-icon-box.type12,
        .dt-sc-icon-box.type13:hover,
        .dt-sc-icon-box.type14:hover,
        .dt-sc-icon-box.type15 .icon-content,
        .dt-sc-icon-box.type2:hover .icon-wrapper:after {
            background-color: #c59d5f;
        }

        .dt-sc-testimonial-wrapper .dt-sc-testimonial-bullets a:hover,
        .dt-sc-testimonial-wrapper .dt-sc-testimonial-bullets a.active {
            background-color: #c59d5f;
        }

        .dt-sc-title.with-two-color-bg:after,
        .dt-sc-triangle-title:after,
        .dt-sc-title.with-right-border-decor:after,
        .dt-sc-title.with-right-border-decor:before,
        .dt-sc-title.with-boxed,
        .mz-title .mz-title-content h2,
        .mz-title-content h3.widgettitle,
        .mz-title .mz-title-content:before,
        .mz-blog .comments a,
        .mz-blog div.vc_gitem-post-category-name,
        .mz-blog .ico-format,
        .side-navigation-content .dt-sc-wings-heading:after,
        .dt-sc-menu-title:before {
            background-color: #c59d5f;
        }

        .dt-sc-team-social.hexagon-border li:hover,
        .dt-sc-team .dt-sc-team-social.diamond-square-border li:hover,
        .dt-sc-team.hide-social-role-show-on-hover .dt-sc-team-social.rounded-square li:hover a,
        .dt-sc-infinite-portfolio-load-more,
        .dt-sc-single-hexagon .dt-sc-single-hexagon-overlay,
        .dt-sc-team-social.rounded-border li a:hover,
        .dt-sc-team-social.rounded-square li a,
        .dt-sc-team-social.square-border li a:hover,
        .dt-sc-team.rounded:hover .dt-sc-team-thumb:after,
        .dt-sc-team.hide-social-role-show-on-hover:hover .dt-sc-team-details,
        .dt-sc-team.hide-social-role-show-on-hover .dt-sc-team-social li:hover,
        .dt-sc-team.style2 .dt-sc-sociable li a,
        .dt-sc-team.style2 .dt-sc-team-details .view-details:hover,
        .dt-sc-team.hide-social-show-on-hover p:after,
        .dt-sc-team.hide-social-show-on-hover .dt-sc-team-social li a:hover,
        .dt-sc-team.hide-details-show-on-hover:before {
            background-color: #c59d5f;
        }

        .dt-sc-pr-tb-col.minimal:hover .dt-sc-price,
        .dt-sc-pr-tb-col.minimal.selected .dt-sc-price,
        .dt-sc-pr-tb-col:hover .dt-sc-buy-now a,
        .dt-sc-pr-tb-col.selected .dt-sc-buy-now a,
        .dt-sc-pr-tb-col.minimal:hover .icon-wrapper:before,
        .dt-sc-pr-tb-col.minimal.selected .icon-wrapper:before,
        .dt-sc-pr-tb-col.type1:hover .dt-sc-tb-header,
        .dt-sc-pr-tb-col.type1.selected .dt-sc-tb-header,
        .dt-sc-pr-tb-col.type2 .dt-sc-tb-header .dt-sc-tb-title:before,
        .dt-sc-pr-tb-col.type2 .dt-sc-tb-content:before,
        .dt-sc-pr-tb-col.type2 .dt-sc-tb-content li .highlight,
        .dt-sc-pr-tb-col.type2:hover .dt-sc-price:before,
        .dt-sc-pr-tb-col.type2.selected .dt-sc-price:before,
        .dt-sc-pr-tb-col.type2:hover .dt-sc-buy-now a {
            background-color: #c59d5f;
        }

        .dt-sc-hr-timeline-section.type1:before,
        .dt-sc-hr-timeline-section.type1 .dt-sc-hr-timeline .dt-sc-hr-timeline-content:after,
        .dt-sc-hr-timeline-section.type1 .dt-sc-hr-timeline-wrapper:before,
        .dt-sc-hr-timeline-section.type1 .dt-sc-hr-timeline-wrapper:after,
        .dt-sc-hr-timeline-section.type2 .dt-sc-hr-timeline-content h3:before,
        .dt-sc-hr-timeline-section.type2 .dt-sc-hr-timeline:hover .dt-sc-hr-timeline-thumb:before {
            background-color: #c59d5f;
        }

        .dt-sc-timeline-section.type2:before,
        .dt-sc-timeline-section.type3 .dt-sc-timeline .dt-sc-timeline-content h2:before,
        .dt-sc-timeline-section.type4 .dt-sc-timeline .dt-sc-timeline-content h2:before,
        .dt-sc-timeline-section.type4 .dt-sc-timeline:hover .dt-sc-timeline-thumb:before,
        .dt-sc-timeline-section.dt-sc-vc-special:before,
        .dt-sc-timeline-section.dt-sc-vc-special:after,
        .dt-sc-timeline-section.dt-sc-vc-special .dt-sc-timeline:hover .dt-sc-timeline-content .dt-sc-timeline-icon-wrapper span {
            background-color: #c59d5f;
        }

        .dt-sc-image-caption.type8 .dt-sc-image-content:before,
        .dt-sc-event-image-caption:hover {
            background-color: #c59d5f;
        }

        .dt-sc-tabs-horizontal-frame-container.type4 ul.dt-sc-tabs-horizontal-frame>li>a.current>span:after,
        .dt-sc-tabs-horizontal-frame-container.type5 ul.dt-sc-tabs-horizontal-frame>li>a.current,
        .dt-sc-tabs-horizontal-frame-container.type6 ul.dt-sc-tabs-horizontal-frame>li>a,
        .type8 ul.dt-sc-tabs-horizontal-frame>li>a.current,
        .type8 ul.dt-sc-tabs-horizontal-frame>li>a:hover {
            background-color: #c59d5f;
        }

        .dt-sc-tabs-vertical-frame-container.type3 ul.dt-sc-tabs-vertical-frame>li>a:hover,
        .dt-sc-tabs-vertical-frame-container.type3 ul.dt-sc-tabs-vertical-frame>li>a.current,
        .dt-sc-tabs-vertical-frame-container.type4 ul.dt-sc-tabs-vertical-frame>li>a:before,
        .dt-sc-tabs-vertical-frame-container.type4 ul.dt-sc-tabs-vertical-frame>li>a:after {
            background-color: #c59d5f;
        }

        .dt-sc-toggle-frame h5.dt-sc-toggle-accordion.active a:before,
        h5.dt-sc-toggle-accordion.active a:before,
        .dt-sc-toggle-frame h5.dt-sc-toggle.active a:before,
        h5.dt-sc-toggle.active a:before,
        .type2 .dt-sc-toggle-frame h5.dt-sc-toggle-accordion.active,
        .type2 .dt-sc-toggle-frame h5.dt-sc-toggle.active,
        .dt-sc-toggle-frame-set.type2>h5.dt-sc-toggle-accordion.active:after,
        .dt-sc-toggle-icon {
            background-color: #c59d5f;
        }

        .dt-sc-video-wrapper .video-overlay-inner a,
        .dt-sc-video-item:hover .dt-sc-vitem-detail,
        .dt-sc-video-item.active .dt-sc-vitem-detail,
        .type2 .dt-sc-video-item:hover,
        .type2 .dt-sc-video-item.active,
        .nicescroll-rails.dt-sc-skin {
            background-color: #c59d5f;
        }

        .live-chat a,
        .dt-bmi-inner-content tbody th,
        .dt-bmi-inner-content tbody tr:nth-child(2n+1) th,
        .dt-sc-menu .menu-categories a:before,
        .hotel-search-container form input[type="submit"]:hover,
        .hotel-search-container .selection-box:after,
        .dt-sc-training-details-overlay,
        .custom-navigation .vc_images_carousel .vc_carousel-indicators li,
        .dt-sc-doctors.style1 .dt-sc-doctors-thumb-wrapper .dt-sc-button,
        .dt-sc-doctors-single .dt-sc-doctors.style1 .dt-sc-doctors-details ul.dt-sc-sociable li a,
        .dt-sc-procedure-item:hover,
        .dt-sc-fitness-procedure-sorting a,
        ul.dt-sc-vertical-nav>li.active>a,
        ul.time-table>li,
        ul.time-slots>li a:hover,
        .dt-sc-available-times ul.time-slots,
        #wpsl-search-btn,
        #wpsl-stores li>p span,
        #wpsl-stores li>p,
        #wpsl-stores li>p~.wpsl-directions,
        .dt-sc-toggle-advanced-options span {
            background-color: #c59d5f;
        }

        .no-header-menu ul li ul.children,
        .dt-header-menu ul.dt-primary-nav li ul.sub-menu {
            border-color: #c59d5f;
        }

        #footer .wpcf7-form.bottom-bordered input[type="submit"]:hover,
        #footer .wpcf7-form.bottom-bordered button:hover,
        #footer .wpcf7-form.bottom-bordered input[type="button"]:hover,
        #footer .wpcf7-form.bottom-bordered input[type="reset"]:hover,
        #footer .footer-22 .dt-sc-newsletter-section.type6 .dt-sc-subscribe-frm input[type="submit"]:hover,
        .footer-26 .tagcloud a:hover {
            border-color: #c59d5f;
        }

        input[type="text"]:focus,
        input[type="password"]:focus,
        input[type="email"]:focus,
        input[type="url"]:focus,
        input[type="tel"]:focus,
        input[type="number"]:focus,
        input[type="range"]:focus,
        input[type="date"]:focus,
        textarea:focus,
        input.text:focus,
        input[type="search"]:focus,
        .comment-form p:focus span,
        .comment-form p:focus-within span,
        .wpcf7-form .contact-form:focus>b,
        .wpcf7-form .contact-form:focus-within>b {
            border-color: #c59d5f;
        }

        .blog-entry.entry-date-left .entry-date span,
        .blog-entry.blog-medium-style:hover .entry-format a,
        .dt-sc-dark-bg .blog-medium-style.white-highlight .dt-sc-button.fully-rounded-border,
        .blog-entry.bordered:hover .date,
        .blog-entry.bordered .entry-details:after,
        .blog-entry.bordered,
        .blog-entry.post-standard .entry-meta .entry-info>*:hover,
        .blog-entry.entry-minimal-bordered .entry-meta-data a.dt-sc-button:before,
        .comment-reply-link,
        .page-link>span,
        .page-link a:hover {
            border-color: #c59d5f;
        }

        .widget .dt-sc-newsletter-section.boxed,
        .widget .dt-sc-newsletter-section.boxed .dt-sc-subscribe-frm input[type="submit"],
        .tagcloud a:hover,
        .dt-sc-dark-bg .tagcloud a:hover,
        .secondary-sidebar .type3 .widgettitle,
        .secondary-sidebar .type6 .widgettitle,
        .secondary-sidebar .type13 .widgettitle:before,
        .secondary-sidebar .type14 .widgettitle,
        .secondary-sidebar .type16 .widgettitle,
        .secondary-sidebar .type7 aside:hover {
            border-color: #c59d5f;
        }

        .dt-sc-portfolio-sorting a.active-sort,
        .dt-sc-portfolio-sorting a:hover,
        .portfolio.type7 .image-overlay .links a:before {
            border-color: #c59d5f;
        }

        .dt-sc-colored-big-buttons,
        .dt-sc-button.fully-rounded-border,
        .dt-sc-button.fully-rounded-border:hover,
        .dt-sc-button.rounded-border.black:hover,
        .dt-sc-button.bordered.black:hover,
        .dt-sc-button.bordered:hover,
        .dt-sc-button.rounded-border:hover,
        .dt-sc-button:before,
        .dt-sc-button:after,
        .dt-sc-button.filled,
        input[type="submit"],
        input[type="reset"],
        button,
        input[type="button"] {
            border-color: #c59d5f;
        }

        .dt-sc-sociable.rounded-border li a:hover,
        .dt-sc-dark-bg .dt-sc-sociable.rounded-border li a:hover,
        .dt-sc-dark-bg .dt-sc-sociable.square-border li a:hover,
        .dt-sc-sociable.diamond-square-border li:hover,
        .diamond-narrow-square-border li:before {
            border-color: #c59d5f;
        }

        .dt-sc-team .dt-sc-team-social.diamond-square-border li:hover,
        .dt-sc-team-social.hexagon-border li:hover,
        .dt-sc-team-social.hexagon-border li:hover:before,
        .dt-sc-team-social.hexagon-border li:hover:after,
        .dt-sc-team-social.rounded-border li a:hover,
        .dt-sc-team-social.square-border li a:hover,
        .dt-sc-team.team_rounded_border.rounded:hover .dt-sc-team-thumb:before {
            border-color: #c59d5f;
        }

        .dt-sc-testimonial.type5 .dt-sc-testimonial-quote,
        .dt-sc-testimonial-images li.selected div,
        .dt-sc-testimonial-wrapper .dt-sc-testimonial-bullets a:hover,
        .dt-sc-testimonial-wrapper .dt-sc-testimonial-bullets a.active,
        .dt-sc-testimonial-wrapper .dt-sc-testimonial-bullets a.active:before,
        .dt-sc-testimonial-wrapper .dt-sc-testimonial-bullets a.active:hover:before,
        .dt-sc-testimonial.type5 .dt-sc-testimonial-author img {
            border-color: #c59d5f;
        }

        ul.dt-sc-tabs-horizontal>li>a.current,
        ul.dt-sc-tabs-vertical>li>a.current,
        .dt-sc-tabs-vertical-frame-container.type3 ul.dt-sc-tabs-vertical-frame>li>a:hover,
        .dt-sc-tabs-vertical-frame-container.type3 ul.dt-sc-tabs-vertical-frame>li>a.current {
            border-color: #c59d5f;
        }

        .type2 .dt-sc-toggle-frame h5.dt-sc-toggle-accordion.active,
        .type2 .dt-sc-toggle-frame h5.dt-sc-toggle.active {
            border-color: #c59d5f;
        }

        .dt-sc-hr-timeline-section.type1 .dt-sc-hr-timeline .dt-sc-hr-timeline-content:before,
        .dt-sc-timeline-section.type2 .dt-sc-timeline-image-wrapper,
        .dt-sc-timeline-section.type2 .dt-sc-timeline .dt-sc-timeline-content:after,
        .dt-sc-timeline-section.type2:after,
        .dt-sc-timeline-section.dt-sc-vc-special .dt-sc-timeline-button a.dt-sc-button,
        .dt-sc-timeline-section.dt-sc-vc-special .dt-sc-timeline-icon-wrapper>span {
            border-color: #c59d5f;
        }

        .dt-sc-counter.type3 .icon-wrapper:before,
        .dt-sc-counter.type3.diamond-square,
        .dt-sc-counter.type5:hover:before,
        .dt-sc-counter.type5:hover:after,
        .dt-sc-counter.type6,
        .dt-sc-counter.type6 .dt-sc-couter-icon-holder:before {
            border-color: #c59d5f;
        }

        .dt-sc-contact-info.type2:hover,
        .dt-sc-contact-info.type4,
        .last .dt-sc-contact-info.type4,
        .dt-sc-contact-info.type3:hover:before {
            border-color: #c59d5f;
        }

        .dt-sc-icon-box.type5.no-icon .icon-content h4,
        .dt-sc-icon-box.type5.no-icon,
        .dt-sc-icon-box.type10,
        .dt-sc-icon-box.type10 .icon-wrapper:before,
        .dt-sc-icon-box.type3.dt-sc-diamond:hover .icon-wrapper:after,
        .dt-sc-icon-box.type11:before {
            border-color: #c59d5f;
        }

        .dt-sc-icon-box.type1:before {
            border-top-color: #c59d5f;
            border-left-color: #c59d5f;
        }

        .dt-sc-icon-box.type1:after {
            border-right-color: #c59d5f;
            border-bottom-color: #c59d5f;
        }

        .dt-sc-image-caption.type2 .dt-sc-image-content,
        .dt-sc-image-caption.type4,
        .dt-sc-icon-box.type10:hover .icon-wrapper:before,
        .dt-sc-image-caption.type7 .dt-sc-image-wrapper:before,
        .dt-sc-image-caption.type7 .dt-sc-image-wrapper:after {
            border-color: #c59d5f;
        }

        .dt-skin-primary-border,
        .dt-sc-title.with-right-border-decor h2:before,
        .dt-sc-pr-tb-col.type2 .dt-sc-tb-header:before,
        .dt-sc-newsletter-section.type2 .dt-sc-subscribe-frm input[type="text"],
        .dt-sc-newsletter-section.type2 .dt-sc-subscribe-frm input[type="email"],
        .dt-sc-text-with-icon.border-bottom,
        .dt-sc-text-with-icon.border-right,
        .dt-sc-hexagons li:hover,
        .dt-sc-hexagons li:hover:before,
        .dt-sc-hexagons li:hover:after,
        .dt-sc-hexagons li,
        .dt-sc-hexagons li:before,
        .dt-sc-hexagons li .dt-sc-hexagon-overlay:before,
        .dt-sc-hexagons li:after,
        .dt-sc-hexagons li .dt-sc-hexagon-overlay:after,
        .dt-sc-single-hexagon,
        .dt-sc-single-hexagon:before,
        .dt-sc-single-hexagon .dt-sc-single-hexagon-overlay:before,
        .dt-sc-single-hexagon:after,
        .dt-sc-single-hexagon .dt-sc-single-hexagon-overlay:after,
        .dt-sc-single-hexagon:hover,
        .dt-sc-single-hexagon:hover:before,
        .dt-sc-single-hexagon:hover:after,
        .carousel-arrows a:hover,
        .vc_custom_carousel .slick-slider .slick-dots,
        .vc_custom_carousel .slick-slider:before,
        .dt-sc-team-navigation .dt-sc-team-pager-prev:before,
        .dt-sc-team-navigation .dt-sc-team-pager-next:before,
        ul.dt-sc-vertical-nav,
        ul.dt-sc-vertical-nav>li:first-child>a,
        .dt-sc-loading:before,
        .side-navigation.type2 ul.side-nav,
        .side-navigation.type2 ul.side-nav li,
        .side-navigation.type2 ul.side-nav li ul,
        .dt-sc-booking-form .wpcf7-form-control-wrap:before,
        .dt-sc-booking-form .frm-control-wrap:before,
        blockquote:before,
        blockquote:after,
        blockquote.type1:before,
        blockquote.type1:after,
        .dt-sc-progress,
        .dt-sc-title.script-with-sub-title.dt-sc-custom-title h4 strong,
        .dt-sc-title.script-with-sub-title.dt-sc-custom-title h5 strong,
        .dt-sc-title.script-with-sub-title.dt-sc-custom-title h6 strong {
            border-color: #c59d5f;
        }

        .dt-image-with-corner-frame:hover:before,
        .dt-image-with-corner-frame:hover:after {
            border-color: #c59d5f;
        }

        .dt-sc-triangle-wrapper:hover .dt-sc-triangle-content:before,
        .dt-sc-pr-tb-col.type2 .dt-sc-tb-content:after,
        .dt-sc-content-with-hexagon-shape:after,
        .type7 ul.dt-sc-tabs-horizontal-frame>li>a.current:before,
        .type7 ul.dt-sc-tabs-horizontal-frame>li>a.current:after,
        .skin-highlight .dt-sc-tabs-horizontal-frame-container.type6 ul.dt-sc-tabs-horizontal-frame>li>a:before,
        .dt-sc-doctors-filter .selection-box:before {
            border-top-color: #c59d5f;
        }

        .dt-sc-up-arrow:before,
        .dt-sc-image-caption .dt-sc-image-wrapper .icon-wrapper:before,
        .dt-sc-triangle-wrapper.alter:hover .dt-sc-triangle-content:before,
        .dt-sc-content-with-hexagon-shape:before,
        .dt-sc-tabs-horizontal-frame-container.type3 ul.dt-sc-tabs-horizontal-frame>li>a.current,
        .dt-sc-tabs-horizontal-frame-container.type4 ul.dt-sc-tabs-horizontal-frame>li>a.current,
        #footer .footer-22 .dt-sc-newsletter-section.type6 {
            border-bottom-color: #c59d5f;
        }

        .type3 .dt-sc-toggle-frame .dt-sc-toggle-content,
        .dt-sc-tabs-vertical-frame-container.type3 ul.dt-sc-tabs-vertical-frame>li>a.current:before,
        .dt-sc-event-image-caption:hover .dt-sc-image-content:before,
        .side-navigation.type2 ul.side-nav>li.current_page_item>a:after,
        .side-navigation.type2 ul.side-nav>li>ul>li.current_page_item>a:after {
            border-left-color: #c59d5f;
        }

        #footer .footer-22.slope-bg.dt-sc-skin-highlight:before,
        #footer .footer-22 .dt-sc-newsletter-section.type6 {
            border-right-color: #c59d5f;
        }

        .dt-sc-attorney-sorting,
        .dt-sc-menu-sorting a.active-sort,
        .dt-sc-menu .image-overlay .price,
        .hotel-search-container form input[type="submit"],
        .vc_row.dt-sc-custom-info-box:before {
            border-color: #c59d5f;
        }

        .dt-products-list .dt-product-item:hover .dt-sc-product-details .dt-sc-product-title-wrapper .price-wrapper .price:after {
            border-color: #c59d5f;
        }

        .error404 .type2 a.dt-sc-back,
        .error404 .type4 .error-box,
        .error404 .type4 .dt-sc-newsletter-section input[type="submit"],
        .error404 .type8 .dt-go-back {
            background-color: #c59d5f;
        }

        .error404 .type2 h2,
        .error404 .type8 h2,
        .error404 .type8 .dt-go-back:hover i {
            color: #c59d5f;
        }

        .under-construction.type4 .dt-sc-counter-wrapper,
        .under-construction.type1 .dt-sc-newsletter-section form input[type="submit"],
        .under-construction.type1 .dt-sc-counter-wrapper .counter-icon-wrapper:before,
        .under-construction.type2 .dt-sc-sociable>li:hover a,
        .under-construction.type7 .dt-sc-sociable>li:hover a,
        .under-construction.type3 .dt-sc-newsletter-section form input[type="submit"],
        .under-construction.type3 .dt-sc-sociable>li:hover a,
        .under-construction.type7 .dt-sc-counter-wrapper,
        .under-construction.type7 .dt-sc-newsletter-section form input[type="submit"] {
            background-color: #c59d5f;
        }

        .under-construction.type3 .dt-sc-sociable>li:hover a {
            border-color: #c59d5f;
        }

        .under-construction.type4 .wpb_wrapper>h2 span,
        .under-construction.type4 .read-more i,
        .under-construction.type4 .wpb_wrapper>h4:after,
        .under-construction.type4 .wpb_wrapper>h4:before,
        .under-construction.type1 .read-more span.fa,
        .under-construction.type1 .read-more a:hover,
        .under-construction.type2 .counter-icon-wrapper .dt-sc-counter-number,
        .under-construction.type2 h2,
        .under-construction.type2 .dt-sc-counter-wrapper h3,
        .under-construction.type2 .mailchimp-newsletter h3,
        .under-construction.type7 h2,
        .under-construction.type7 .mailchimp-newsletter h3,
        .under-construction.type3 p,
        .under-construction.type5 h2 span,
        .under-construction.type5 .dt-sc-counter-number,
        .under-construction.type5 footer .dt-sc-team-social li:hover a,
        .under-construction.type5 input[type="email"],
        .under-construction.type7 .aligncenter .wpb_text_column h2 {
            color: #c59d5f;
        }

        #buddypress div.pagination .pagination-links span,
        #buddypress div.pagination .pagination-links a:hover,
        #buddypress #group-create-body #group-creation-previous,
        #item-header-content #item-meta>#item-buttons .group-button,
        #buddypress div#subnav.item-list-tabs ul li.feed a:hover,
        #buddypress div.activity-meta a:hover,
        #buddypress div.item-list-tabs ul li.selected a span,
        #buddypress .activity-list li.load-more a,
        #buddypress .activity-list li.load-newest a {
            background-color: #c59d5f;
        }

        #buddypress div.pagination .pagination-links span,
        #buddypress div.pagination .pagination-links a:hover,
        #buddypress #members-dir-list ul li:hover {
            border-color: #c59d5f;
        }

        #members-list.item-list.single-line li h5 span.small a.button,
        #buddypress div.item-list-tabs ul li.current a,
        #buddypress #group-create-tabs ul li.current a,
        #buddypress a.bp-primary-action:hover span,
        #buddypress div.item-list-tabs ul li.selected a,
        .widget.buddypress div.item-options a:hover,
        .widget.buddypress div.item-options a.selected,
        #footer .footer-widgets.dt-sc-dark-bg .widget.buddypress div.item-options a.selected,
        .widget.widget_bp_core_members_widget div.item .item-title a:hover,
        .widget.buddypress .bp-login-widget-user-links>div.bp-login-widget-user-link a:hover {
            color: #c59d5f;
        }

        #bbpress-forums li.bbp-header,
        .bbp-submit-wrapper #bbp_topic_submit,
        .bbp-reply-form #bbp_reply_submit,
        .bbp-pagination-links a:hover,
        .bbp-pagination-links span.current,
        #bbpress-forums #subscription-toggle a.subscription-toggle {
            background-color: #c59d5f;
        }

        .bbp-pagination-links a:hover,
        .bbp-pagination-links span.current {
            border-color: #c59d5f;
        }

        .bbp-forums .bbp-body .bbp-forum-info::before {
            color: #c59d5f;
        }

        #tribe-bar-views .tribe-bar-views-list .tribe-bar-views-option a:hover,
        #tribe-bar-views .tribe-bar-views-list .tribe-bar-views-option.tribe-bar-active a:hover,
        #tribe-bar-form .tribe-bar-submit input[type="submit"],
        #tribe-bar-views .tribe-bar-views-list li.tribe-bar-active a,
        .tribe-events-calendar thead th,
        #tribe-events-content .tribe-events-tooltip h4,
        .tribe-events-calendar td.tribe-events-present div[id*="tribe-events-daynum-"],
        .tribe-events-read-more,
        #tribe-events .tribe-events-button,
        .tribe-events-button,
        .tribe-events-calendar td.tribe-events-present div[id*="tribe-events-daynum-"]>a,
        .tribe-events-back>a,
        #tribe_events_filters_toggle {
            background-color: #c59d5f;
        }

        .tribe-events-list .tribe-events-event-cost span {
            border-color: #c59d5f;
        }

        .tribe-grid-header,
        .tribe-grid-allday .tribe-events-week-allday-single,
        .tribe-grid-body .tribe-events-week-hourly-single {
            background-color: #c59d5f;
        }

        .type1.tribe_events .event-image-wrapper .event-datetime>span,
        .type3.tribe_events .event-date,
        .event-meta-tab ul.dt-sc-tabs-horizontal-frame>li>a {
            background-color: #c59d5f;
        }

        .type1 .event-schedule,
        .type1.tribe_events .nav-top-links a:hover,
        .type1.tribe_events .event-image-wrapper .event-datetime>i,
        .type1.tribe_events .event-image-wrapper .event-venue>i,
        .type1.tribe_events h4 a,
        .type2.tribe_events .date-wrapper p span,
        .type2.tribe_events h4 a,
        .type3.tribe_events .right-calc a:hover,
        .type3.tribe_events .tribe-events-sub-nav li a:hover,
        .type3.tribe_events .tribe-events-sub-nav li a span,
        .type4.tribe_events .data-wrapper p span,
        .type4.tribe_events .data-wrapper p i,
        .type4.tribe_events .event-organize h4 a,
        .type4.tribe_events .event-venue h4 a,
        .type5.tribe_events .event-details h3,
        .type5.tribe_events .event-organize h3,
        .type5.tribe_events .event-venue h3,
        .type5.tribe_events .data-wrapper p span,
        .data-wrapper p i,
        .type5.tribe_events .event-organize h4 a,
        .type5.tribe_events .event-venue h4 a {
            color: #c59d5f;
        }

        .dt-sc-event.type1 .dt-sc-event-thumb p,
        .dt-sc-event.type1 .dt-sc-event-meta:before,
        .dt-sc-event.type2:hover .dt-sc-event-meta,
        .dt-sc-event.type3 .dt-sc-event-date,
        .dt-sc-event.type3:hover .dt-sc-event-meta {
            background-color: #c59d5f;
        }

        .dt-sc-event.type4 .dt-sc-event-date:after {
            border-bottom-color: #c59d5f;
        }

        .dt-sc-event.type1 .dt-sc-event-meta p span,
        .dt-sc-event.type1:hover h2.entry-title a,
        .dt-sc-event.type3:hover h2.entry-title a,
        .dt-sc-event.type4 .dt-sc-event-date span {
            color: #c59d5f;
        }

        .widget.tribe_mini_calendar_widget .tribe-mini-calendar thead.tribe-mini-calendar-nav td,
        .widget.tribe_mini_calendar_widget .tribe-mini-calendar .tribe-events-present,
        .widget.tribe_mini_calendar_widget .tribe-mini-calendar .tribe-events-has-events.tribe-mini-calendar-today,
        .tribe-mini-calendar .tribe-events-has-events.tribe-events-present a:hover,
        .widget.tribe_mini_calendar_widget .tribe-mini-calendar td.tribe-events-has-events.tribe-mini-calendar-today a:hover,
        .dt-sc-dark-bg .widget.tribe_mini_calendar_widget .tribe-mini-calendar .tribe-events-present,
        .dt-sc-dark-bg .widget.tribe_mini_calendar_widget .tribe-mini-calendar .tribe-events-has-events.tribe-mini-calendar-today,
        .dt-sc-dark-bg .tribe-mini-calendar .tribe-events-has-events.tribe-events-present a:hover,
        .dt-sc-dark-bg .widget.tribe_mini_calendar_widget .tribe-mini-calendar td.tribe-events-has-events.tribe-mini-calendar-today a:hover {
            background-color: #c59d5f;
        }

        .widget.tribe_mini_calendar_widget .tribe-mini-calendar thead.tribe-mini-calendar-nav td {
            border-color: #c59d5f;
        }

        .widget.tribe-events-countdown-widget .tribe-countdown-text a:hover {
            color: #c59d5f;
        }

        .woocommerce a.button,
        .woocommerce button.button,
        .woocommerce button,
        .woocommerce input.button,
        .woocommerce input[type=button],
        .woocommerce input[type=submit],
        .woocommerce #respond input#submit,
        .woocommerce a.button.alt,
        .woocommerce button.button.alt,
        .woocommerce input.button.alt,
        .woocommerce #respond input#submit.alt,
        .woocommerce .product .summary .add_to_wishlist,
        .woocommerce .wishlist_table .add_to_cart.button,
        .woocommerce .yith-wcwl-add-button a.add_to_wishlist,
        .woocommerce .yith-wcwl-popup-button a.add_to_wishlist,
        .woocommerce .wishlist_table a.ask-an-estimate-button,
        .woocommerce .wishlist-title a.show-title-form,
        .woocommerce .hidden-title-form a.hide-title-form,
        .woocommerce .yith-wcwl-wishlist-new button,
        .woocommerce .wishlist_manage_table a.create-new-wishlist,
        .woocommerce .wishlist_manage_table button.submit-wishlist-changes,
        .woocommerce .yith-wcwl-wishlist-search-form button.wishlist-search-button,
        .woocommerce .cart input.button,
        .woocommerce .shop_table th,
        .woocommerce div.product .woocommerce-tabs ul.tabs li.active a:after,
        .woocommerce-page a.button,
        .woocommerce-page button.button,
        .woocommerce-page button,
        .woocommerce-page input.button,
        .woocommerce-page input[type=button],
        .woocommerce-page input[type=submit],
        .woocommerce-page #respond input#submit,
        .woocommerce-page a.button.alt,
        .woocommerce-page button.button.alt,
        .woocommerce-page input.button.alt,
        .woocommerce-page #respond input#submit.alt,
        .woocommerce-page .product .summary .add_to_wishlist,
        .woocommerce-page .wishlist_table .add_to_cart.button,
        .woocommerce-page .yith-wcwl-add-button a.add_to_wishlist,
        .woocommerce-page .yith-wcwl-popup-button a.add_to_wishlist,
        .woocommerce-page .wishlist_table a.ask-an-estimate-button,
        .woocommerce-page .wishlist-title a.show-title-form,
        .woocommerce-page .hidden-title-form a.hide-title-form,
        .woocommerce-page .yith-wcwl-wishlist-new button,
        .woocommerce-page .wishlist_manage_table a.create-new-wishlist,
        .woocommerce-page .wishlist_manage_table button.submit-wishlist-changes,
        .woocommerce-page .yith-wcwl-wishlist-search-form button.wishlist-search-button,
        .woocommerce-page .cart input.button,
        .woocommerce-page .shop_table th,
        .woocommerce-page div.product .woocommerce-tabs ul.tabs li.active a:after,
        .woocommerce ul.products li.product .featured-tag,
        .woocommerce ul.products li.product:hover .featured-tag,
        .woocommerce.single-product .featured-tag,
        .woocommerce .widget_price_filter .price_slider_wrapper .ui-widget-content,
        .woocommerce ul.products li.product .default .product-buttons-wrapper .wc_inline_buttons>.wc_btn_inline a:hover,
        .woocommerce .view-mode a:hover,
        .woocommerce .view-mode a.active,
        .swiper-button-prev,
        .swiper-button-next,
        .woocommerce ul.products li.product .default .product-buttons-wrapper a.added_to_cart.wc-forward,
        .dt-carousel-navigation a,
        .woocommerce ul.products li.product .style-2 .product-buttons-wrapper a.added_to_cart,
        .woocommerce ul.products li.product .style-2 .product-thumb .yith-wcwl-wishlistexistsbrowse a,
        .woocommerce ul.products li.product .style-3 .product-buttons-wrapper a.added_to_cart,
        .woocommerce ul.products li.product .style-3 .product-thumb .yith-wcwl-wishlistexistsbrowse a,
        .woocommerce ul.products li.product .woo-type12 .product-thumb a.add_to_cart_button,
        .woocommerce ul.products li.product .woo-type12 .product-thumb a.button.product_type_simple,
        .woocommerce ul.products li.product .woo-type12 .product-thumb a.button.product_type_variable,
        .woocommerce ul.products li.product .woo-type12 .product-thumb a.added_to_cart.wc-forward,
        .woocommerce ul.products li.product .woo-type12 .product-thumb a.add_to_wishlist,
        .woocommerce ul.products li.product .woo-type12 .product-thumb .yith-wcwl-wishlistaddedbrowse a,
        .woocommerce ul.products li.product .woo-type12 .product-thumb .yith-wcwl-wishlistexistsbrowse a,
        .woocommerce ul.products li.product .woo-type12 .product-buttons-wrapper a.yith-wcqv-button,
        .woocommerce ul.products li.product .woo-type12 .product-buttons-wrapper .yith-woocompare-button {
            background-color: #c59d5f;
        }

        .woocommerce ul.products li.product .featured-tag:after,
        .woocommerce ul.products li.product:hover .featured-tag:after,
        .woocommerce.single-product .featured-tag:after,
        .dt-products-list .dt-product-item:hover .dt-sc-product-thumb a {
            border-color: #c59d5f;
        }

        .swiper-pagination-bullets .swiper-pagination-bullet-active,
        .swiper-pagination.swiper-pagination-progress .swiper-pagination-progressbar {
            background: #c59d5f;
        }

        .woocommerce-checkout #payment ul.payment_methods li a:hover,
        .woocommerce ul.products li.product .default .product-details .product-price .price,
        .woocommerce .default span.price del .amount,
        .woocommerce .default .product-price del .amount,
        .woocommerce ul.products li.product .woo-type8 .product-buttons-wrapper a.yith-wcqv-button:hover,
        .woocommerce ul.products li.product .woo-type8 .product-buttons-wrapper a.yith-woocompare-button:hover {
            color: #c59d5f;
        }

        ul.products li.product .woo-type1 .product-thumb a.added_to_cart.wc-forward:hover,
        ul.products li.product .woo-type1 .product-thumb .yith-wcwl-wishlistaddedbrowse a:hover,
        .woocommerce ul.products li.product .woo-type1 .product-buttons-wrapper a.yith-wcqv-button:hover,
        .woocommerce ul.products li.product .woo-type1 .product-buttons-wrapper a.yith-woocompare-button:hover,
        ul.products li.product .woo-type1 .product-thumb a.add_to_cart_button,
        ul.products li.product .woo-type1 .product-thumb a.button.product_type_simple,
        ul.products li.product .woo-type1 .product-thumb .yith-wcwl-wishlistexistsbrowse a,
        ul.products li.product .woo-type1 .product-thumb a.add_to_wishlist,
        ul.products li.product .woo-type1 .product-thumb a.button.product_type_variable {
            background-color: #c59d5f;
        }

        .woo-type1 ul.products li.product-category:hover .product-details h5,
        .woo-type1 ul.products li.product-category:hover .product-details h5 .count,
        ul.products li.product .woo-type1 .product-details .product-price .amount,
        ul.products li.product .woo-type1 .product-details span.price,
        ul.products li.product .woo-type1 .product-details span.price del,
        ul.products li.product .woo-type1 .product-details span.price del .amount,
        ul.products li.product .woo-type1 .product-details span.price ins,
        ul.products li.product .woo-type1 .product-details span.price ins .amount,
        .woo-type1.woocommerce.single-product .product .summary .product_meta a:hover,
        .woo-type1.woocommerce div.product .woocommerce-tabs ul.tabs li.active a {
            color: #c59d5f;
        }

        ul.products li.product .woo-type4 .product-thumb a.add_to_cart_button:after,
        ul.products li.product .woo-type4 .product-thumb a.button.product_type_simple:after,
        ul.products li.product .woo-type4 .product-thumb a.button.product_type_variable:after,
        ul.products li.product .woo-type4 .product-thumb a.added_to_cart.wc-forward:after,
        ul.products li.product .woo-type4 .product-thumb a.add_to_wishlist:after,
        ul.products li.product .woo-type4 .product-thumb .yith-wcwl-wishlistaddedbrowse a:after,
        ul.products li.product .woo-type4 .product-thumb .yith-wcwl-wishlistexistsbrowse a:after,
        ul.products li.product .woo-type4 .product-details h5:after,
        .woocommerce ul.products li.product .woo-type4 .product-buttons-wrapper a.yith-wcqv-button:after,
        .woocommerce ul.products li.product .woo-type4 .product-buttons-wrapper a.yith-woocompare-button:after,
        .woocommerce ul.products li.product .woo-type4 .product-buttons-wrapper a.product_type_external:after,
        .woocommerce ul.products li.product .woo-type4 .product-buttons-wrapper a.button.product_type_grouped:after {
            background-color: #c59d5f;
        }

        ul.products li.product-category:hover .woo-type4 .product-details h5,
        ul.products li.product-category:hover .woo-type4 .product-details h5 .count {
            color: #c59d5f;
        }

        ul.products li.product .woo-type8 .product-details,
        ul.products li.product:hover .woo-type8 .product-details h5:before {
            background-color: #c59d5f;
        }

        ul.products li.product .woo-type8 .product-thumb a.add_to_cart_button:hover:before,
        ul.products li.product .woo-type8 .product-thumb a.button.product_type_simple:hover:before,
        ul.products li.product .woo-type8 .product-thumb a.button.product_type_variable:hover:before,
        ul.products li.product .woo-type8 .product-thumb a.added_to_cart.wc-forward:hover:before,
        ul.products li.product .woo-type8 .product-thumb a.add_to_wishlist:hover:before,
        ul.products li.product .woo-type8 .product-thumb .yith-wcwl-wishlistaddedbrowse a:hover:before,
        ul.products li.product .woo-type8 .product-thumb .yith-wcwl-wishlistexistsbrowse a:hover:before,
        ul.products li.product:hover .woo-type8 .product-details h5 a:hover,
        ul.products li.product .woo-type8 .product-buttons-wrapper a.product_type_external:hover:before,
        ul.products li.product .woo-type8 .product-buttons-wrapper a.button.product_type_grouped:hover:before {
            color: #c59d5f;
        }

        ul.products li.product .woo-type10 .product-thumb a.add_to_cart_button,
        ul.products li.product .woo-type10 .product-thumb a.button.product_type_simple,
        ul.products li.product .woo-type10 .product-thumb a.button.product_type_variable,
        ul.products li.product .woo-type10 .product-thumb a.added_to_cart.wc-forward,
        ul.products li.product .woo-type10 .product-thumb a.add_to_wishlist,
        ul.products li.product .woo-type10 .product-thumb .yith-wcwl-wishlistaddedbrowse a,
        ul.products li.product .woo-type10 .product-thumb .yith-wcwl-wishlistexistsbrowse a,
        ul.products li.product:hover .woo-type10 .product-details {
            background-color: #c59d5f;
        }

        ul.products li.product:hover .woo-type10 .product-wrapper {
            border-color: #c59d5f;
        }

        ul.products li.product:hover .woo-type10 .product-details:before,
        ul.products li.product:hover .woo-type10 .product-details:after {
            border-bottom-color: #c59d5f;
        }

        ul.products li.product .woo-type11 .product-thumb a.add_to_cart_button:hover,
        ul.products li.product .woo-type11 .product-thumb a.button.product_type_simple:hover,
        ul.products li.product .woo-type11 .product-thumb a.button.product_type_variable:hover,
        ul.products li.product .woo-type11 .product-thumb a.added_to_cart.wc-forward:hover,
        ul.products li.product .woo-type11 .product-thumb a.add_to_wishlist:hover,
        ul.products li.product .woo-type11 .product-thumb .yith-wcwl-wishlistaddedbrowse a:hover,
        ul.products li.product .woo-type11 .product-thumb .yith-wcwl-wishlistexistsbrowse a:hover,
        .woocommerce .woo-type11 div.product .woocommerce-tabs ul.tabs li.active a:after,
        ul.products li.product .woo-type11 .product-details,
        .woocommerce ul.products li.product .woo-type11 .product-buttons-wrapper a.yith-wcqv-button:hover,
        .woocommerce ul.products li.product .woo-type11 .product-buttons-wrapper a.yith-woocompare-button:hover,
        ul.products li.product .woo-type11 .product-buttons-wrapper a.product_type_external:hover,
        ul.products li.product .woo-type11 .product-buttons-wrapper a.button.product_type_grouped:hover {
            background-color: #c59d5f;
        }

        ul.products li.product .woo-type11 .product-thumb a.add_to_cart_button:before,
        ul.products li.product .woo-type11 .product-thumb a.button.product_type_simple:before,
        ul.products li.product .woo-type11 .product-thumb a.button.product_type_variable:before,
        ul.products li.product .woo-type11 .product-thumb a.added_to_cart.wc-forward:before,
        ul.products li.product .woo-type11 .product-thumb a.add_to_wishlist:before,
        ul.products li.product .woo-type11 .product-thumb .yith-wcwl-wishlistaddedbrowse a:before,
        ul.products li.product .woo-type11 .product-thumb .yith-wcwl-wishlistexistsbrowse a:before,
        .woocommerce ul.products li.product .woo-type11 .product-buttons-wrapper a.yith-wcqv-button,
        .woocommerce ul.products li.product .woo-type11 .product-buttons-wrapper a.yith-woocompare-button,
        ul.products li.product .woo-type11 .product-buttons-wrapper a.product_type_external:before,
        ul.products li.product .woo-type11 .product-buttons-wrapper a.button.product_type_grouped:before {
            color: #c59d5f;
        }

        .woocommerce ul.products li.product .woo-type11 .product-buttons-wrapper a.yith-wcqv-button:hover,
        .woocommerce ul.products li.product .woo-type11 .product-buttons-wrapper a.yith-woocompare-button:hover {
            border-color: #c59d5f;
        }

        .woo-type12 ul.products li.product .product-thumb a.add_to_cart_button,
        .woo-type12 ul.products li.product .product-thumb a.button.product_type_simple,
        .woo-type12 ul.products li.product .product-thumb a.button.product_type_variable,
        .woo-type12 ul.products li.product .product-thumb a.added_to_cart.wc-forward,
        .woo-type12 ul.products li.product .product-thumb a.add_to_wishlist,
        .woo-type12 ul.products li.product .product-thumb .yith-wcwl-wishlistaddedbrowse a,
        .woo-type12 ul.products li.product .product-thumb .yith-wcwl-wishlistexistsbrowse a,
        .woo-type12 ul.products li.product:hover .product-details,
        .woo-type12 ul.products li.product .product-details h5:after {
            background-color: #c59d5f;
        }

        ul.products li.product .woo-type13 .product-details h5:before {
            background-color: #c59d5f;
        }

        ul.products li.product .woo-type13 .product-thumb a.add_to_cart_button:hover:before,
        ul.products li.product .woo-type13 .product-thumb a.button.product_type_simple:hover:before,
        ul.products li.product .woo-type13 .product-thumb a.button.product_type_variable:hover:before,
        ul.products li.product .woo-type13 .product-thumb a.added_to_cart.wc-forward:hover:before,
        ul.products li.product .woo-type13 .product-thumb a.add_to_wishlist:hover:before,
        ul.products li.product .woo-type13 .product-thumb .yith-wcwl-wishlistaddedbrowse a:hover:before,
        ul.products li.product .woo-type13 .product-thumb .yith-wcwl-wishlistexistsbrowse a:hover:before,
        ul.products li.product:hover .woo-type13 .product-details h5 a,
        .woocommerce ul.products li.product .woo-type13 .product-buttons-wrapper a.yith-wcqv-button:hover:after,
        .woocommerce ul.products li.product .woo-type13 .product-buttons-wrapper a.yith-woocompare-button:hover:after,
        ul.products li.product .woo-type13 .product-buttons-wrapper a.product_type_external:hover:before,
        ul.products li.product .woo-type13 .product-buttons-wrapper a.button.product_type_grouped:hover:before {
            color: #c59d5f;
        }

        ul.products li.product:hover .woo-type14 .product-details,
        ul.products li.product .woo-type14 .product-details h5:before,
        ul.products li.product:hover .woo-type14 .product-details h5:after {
            background-color: #c59d5f;
        }

        ul.products li.product:hover .woo-type14 .product-details h5:after {
            border-color: #c59d5f;
        }

        ul.products li.product .woo-type16 .product-wrapper:before,
        ul.products li.product .woo-type16 .product-thumb a.add_to_cart_button:hover,
        ul.products li.product .woo-type16 .product-thumb a.button.product_type_simple:hover,
        ul.products li.product .woo-type16 .product-thumb a.button.product_type_variable:hover,
        ul.products li.product .woo-type16 .product-thumb a.added_to_cart.wc-forward:hover,
        ul.products li.product .woo-type16 .product-thumb a.add_to_wishlist:hover,
        ul.products li.product .woo-type16 .product-thumb .yith-wcwl-wishlistaddedbrowse a:hover,
        ul.products li.product .woo-type16 .product-thumb .yith-wcwl-wishlistexistsbrowse a:hover,
        .woo-type16.woocommerce .shop_table th,
        .woo-type16 .woocommerce .shop_table th,
        .woo-type16.woocommerce div.product .woocommerce-tabs ul.tabs li.active a:after,
        ul.products li.product .woo-type16 .product-buttons-wrapper a.product_type_external:hover,
        ul.products li.product .woo-type16 .product-buttons-wrapper a.button.product_type_grouped:hover {
            background-color: #c59d5f;
        }

        ul.products li.product .woo-type17 .product-thumb a.add_to_cart_button:hover:after,
        ul.products li.product .woo-type17 .product-thumb a.button.product_type_simple:hover:after,
        ul.products li.product .woo-type17 .product-thumb a.button.product_type_variable:hover:after,
        ul.products li.product .woo-type17 .product-thumb a.added_to_cart.wc-forward:hover:after,
        ul.products li.product .woo-type17 .product-thumb a.add_to_wishlist:hover:after,
        ul.products li.product .woo-type17 .product-thumb .yith-wcwl-wishlistaddedbrowse a:hover:after,
        ul.products li.product .woo-type17 .product-thumb .yith-wcwl-wishlistexistsbrowse a:hover:after,
        ul.products li.product:hover .woo-type17 .product-details,
        .woocommerce ul.products li.product .woo-type17 .product-buttons-wrapper a.yith-wcqv-button:hover:after,
        .woocommerce ul.products li.product .woo-type17 .product-buttons-wrapper a.yith-woocompare-button:hover:after,
        ul.products li.product .woo-type17 .product-buttons-wrapper a.product_type_external:hover:after,
        ul.products li.product .woo-type17 .product-buttons-wrapper a.button.product_type_grouped:hover:after {
            background-color: #c59d5f;
        }

        ul.products li.product:hover .woo-type17 .product-wrapper,
        ul.products li.product:hover .woo-type17 .product-thumb a.add_to_cart_button:after,
        ul.products li.product:hover .woo-type17 .product-thumb a.button.product_type_simple:after,
        ul.products li.product:hover .woo-type17 .product-thumb a.button.product_type_variable:after,
        ul.products li.product:hover .woo-type17 .product-thumb a.added_to_cart.wc-forward:after,
        ul.products li.product:hover .woo-type17 .product-thumb a.add_to_wishlist:after,
        ul.products li.product:hover .woo-type17 .product-thumb .yith-wcwl-wishlistaddedbrowse a:after,
        ul.products li.product:hover .woo-type17 .product-thumb .yith-wcwl-wishlistexistsbrowse a:after,
        ul.products li.product .woo-type17 .product-details h5 a:after,
        ul.products li.product-category .woo-type17 .product-details h5:after,
        ul.products li.product .woo-type17 .price,
        .woocommerce ul.products li.product:hover .woo-type17 .product-buttons-wrapper a.yith-wcqv-button:after,
        .woocommerce ul.products li.product:hover .woo-type17 .product-buttons-wrapper a.yith-woocompare-button:after,
        ul.products li.product:hover .woo-type17 .product-buttons-wrapper a.product_type_external:after,
        ul.products li.product:hover .woo-type17 .product-buttons-wrapper a.button.product_type_grouped:after {
            border-color: #c59d5f;
        }

        ul.products li.product .woo-type17 .product-thumb a.add_to_cart_button,
        ul.products li.product .woo-type17 .product-thumb a.button.product_type_simple,
        ul.products li.product .woo-type17 .product-thumb a.button.product_type_variable,
        ul.products li.product .woo-type17 .product-thumb a.added_to_cart.wc-forward,
        ul.products li.product .woo-type17 .product-thumb a.add_to_wishlist,
        ul.products li.product .woo-type17 .product-thumb .yith-wcwl-wishlistaddedbrowse a,
        ul.products li.product .woo-type17 .product-thumb .yith-wcwl-wishlistexistsbrowse a,
        ul.products li.product .woo-type17 .product-buttons-wrapper a.product_type_external,
        ul.products li.product .woo-type17 .product-buttons-wrapper a.button.product_type_grouped,
        ul.products li.product .woo-type17 .product-thumb a.add_to_cart_button:before,
        ul.products li.product .woo-type17 .product-thumb a.button.product_type_simple:before,
        ul.products li.product .woo-type17 .product-thumb a.button.product_type_variable:before,
        ul.products li.product .woo-type17 .product-thumb a.added_to_cart.wc-forward:before,
        ul.products li.product .woo-type17 .product-thumb a.add_to_wishlist:before,
        ul.products li.product .woo-type17 .product-thumb .yith-wcwl-wishlistaddedbrowse a:before,
        ul.products li.product .woo-type17 .product-thumb .yith-wcwl-wishlistexistsbrowse a:before,
        ul.products li.product .woo-type17 .product-details h5 a,
        ul.products li.product-category .woo-type17 .product-details h5,
        ul.products li.product-category .woo-type17 .product-details h5 .count,
        ul.products li.product .woo-type17 .product-details .product-price .amount,
        ul.products li.product .woo-type17 .product-details span.price,
        ul.products li.product .woo-type17 .product-details span.price del,
        ul.products li.product .woo-type17 .product-details span.price del .amount,
        ul.products li.product .woo-type17 .product-details span.price ins,
        ul.products li.product .woo-type17 .product-details span.price ins .amount,
        .woo-type17 .widget.woocommerce ul li:hover:before,
        .woocommerce ul.products li.product .woo-type17 .product-buttons-wrapper a.yith-wcqv-button:before,
        .woocommerce ul.products li.product .woo-type17 .product-buttons-wrapper a.yith-woocompare-button:before,
        ul.products li.product .woo-type17 .product-buttons-wrapper a.product_type_external:before,
        ul.products li.product .woo-type17 .product-buttons-wrapper a.button.product_type_grouped:before {
            color: #c59d5f;
        }

        ul.products li.product .woo-type20 .product-thumb a.add_to_cart_button,
        ul.products li.product .woo-type20 .product-thumb a.button.product_type_simple,
        ul.products li.product .woo-type20 .product-thumb a.button.product_type_variable,
        ul.products li.product .woo-type20 .product-thumb a.added_to_cart.wc-forward,
        ul.products li.product .woo-type20 .product-thumb a.add_to_wishlist,
        ul.products li.product .woo-type20 .product-thumb .yith-wcwl-wishlistaddedbrowse a,
        ul.products li.product .woo-type20 .product-thumb .yith-wcwl-wishlistexistsbrowse a,
        ul.products li.product .woo-type20 .product-wrapper:after,
        .woo-type20.woocommerce ul.products li.product .product-details h5,
        .woocommerce ul.products li.product .woo-type20 .product-details h5,
        ul.products li.product-category .woo-type20 .product-wrapper h3,
        .woocommerce ul.products li.product .woo-type20 .product-buttons-wrapper a.yith-wcqv-button,
        .woocommerce ul.products li.product .woo-type20 .product-buttons-wrapper a.yith-woocompare-button,
        ul.products li.product .woo-type20 .product-buttons-wrapper a.product_type_external,
        ul.products li.product .woo-type20 .product-buttons-wrapper a.button.product_type_grouped {
            border-color: #c59d5f;
        }

        ul.products li.product .woo-type20 .product-thumb a.add_to_cart_button:before,
        ul.products li.product .woo-type20 .product-thumb a.button.product_type_simple:before,
        ul.products li.product .woo-type20 .product-thumb a.button.product_type_variable:before,
        ul.products li.product .woo-type20 .product-thumb a.added_to_cart.wc-forward:before,
        ul.products li.product .woo-type20 .product-thumb a.add_to_wishlist:before,
        ul.products li.product .woo-type20 .product-thumb .yith-wcwl-wishlistaddedbrowse a:before,
        ul.products li.product .woo-type20 .product-thumb .yith-wcwl-wishlistexistsbrowse a:before,
        ul.products li.product .woo-type20 .product-details h5 a,
        ul.products li.product-category .woo-type20 .product-details h5,
        ul.products li.product-category .woo-type20 .product-details h5 .count,
        ul.products li.product .woo-type20 .product-details .product-price .amount,
        ul.products li.product .woo-type20 .product-details span.price,
        ul.products li.product .woo-type20 .product-details span.price del,
        ul.products li.product .woo-type20 .product-details span.price del .amount,
        ul.products li.product .woo-type20 .product-details span.price ins,
        ul.products li.product .woo-type20 .product-details span.price ins .amount,
        ul.products li.product .woo-type20 .product-details .product-rating-wrapper .star-rating:before,
        ul.products li.product .woo-type20 .product-details .product-rating-wrapper .star-rating span:before,
        .woocommerce ul.products li.product .woo-type20 .product-buttons-wrapper a.yith-wcqv-button:before,
        .woocommerce ul.products li.product .woo-type20 .product-buttons-wrapper a.yith-woocompare-button:before,
        ul.products li.product .woo-type20 .product-buttons-wrapper a.product_type_external:before,
        ul.products li.product .woo-type20 .product-buttons-wrapper a.button.product_type_grouped:before {
            color: #c59d5f;
        }

        .woocommerce ul.products li.product .woo-type21 .product-thumb a.add_to_cart_button:hover,
        .woocommerce ul.products li.product .woo-type21 .product-thumb a.button.product_type_simple:hover,
        .woocommerce ul.products li.product .woo-type21 .product-thumb a.button.product_type_variable:hover,
        .woocommerce ul.products li.product .woo-type21 .product-thumb a.added_to_cart.wc-forward:hover,
        .woocommerce ul.products li.product .woo-type21 .product-thumb a.add_to_wishlist:hover,
        .woocommerce ul.products li.product .woo-type21 .product-thumb .yith-wcwl-wishlistaddedbrowse a:hover,
        .woocommerce ul.products li.product .woo-type21 .product-thumb .yith-wcwl-wishlistexistsbrowse a:hover,
        .woo-type21.woocommerce ul.products li.product .product-thumb a.add_to_cart_button:hover,
        .woo-type21.woocommerce ul.products li.product .product-thumb a.button.product_type_simple:hover,
        .woo-type21.woocommerce ul.products li.product .product-thumb a.button.product_type_variable:hover,
        .woo-type21.woocommerce ul.products li.product .product-thumb a.added_to_cart.wc-forward:hover,
        .woo-type21.woocommerce ul.products li.product .product-thumb a.add_to_wishlist:hover,
        .woo-type21.woocommerce ul.products li.product .product-thumb .yith-wcwl-wishlistaddedbrowse a:hover,
        .woo-type21.woocommerce ul.products li.product .product-thumb .yith-wcwl-wishlistexistsbrowse a:hover,
        .woo-type21 .woocommerce a.button:hover,
        .woo-type21 .woocommerce button.button:hover,
        .woo-type21 .woocommerce button:hover,
        .woo-type21 .woocommerce input.button:hover,
        .woo-type21 .woocommerce input[type=button]:hover,
        .woo-type21 .woocommerce input[type=submit]:hover,
        .woo-type21 .woocommerce #respond input#submit:hover,
        .woo-type21 .woocommerce a.button.alt:hover,
        .woo-type21 .woocommerce button.button.alt:hover,
        .woo-type21 .woocommerce input.button.alt:hover,
        .woo-type21 .woocommerce #respond input#submit.alt:hover,
        .woo-type21 .woocommerce .product .summary .add_to_wishlist:hover,
        .woo-type21 .woocommerce .wishlist_table .add_to_cart.button:hover,
        .woo-type21 .woocommerce .yith-wcwl-add-button a.add_to_wishlist:hover,
        .woo-type21 .woocommerce .yith-wcwl-popup-button a.add_to_wishlist:hover,
        .woo-type21 .woocommerce .wishlist_table a.ask-an-estimate-button:hover,
        .woo-type21 .woocommerce .wishlist-title a.show-title-form:hover,
        .woo-type21 .woocommerce .hidden-title-form a.hide-title-form:hover,
        .woo-type21 .woocommerce .yith-wcwl-wishlist-new button:hover,
        .woo-type21 .woocommerce .wishlist_manage_table a.create-new-wishlist:hover,
        .woo-type21 .woocommerce .wishlist_manage_table button.submit-wishlist-changes:hover,
        .woo-type21 .woocommerce .yith-wcwl-wishlist-search-form button.wishlist-search-button:hover,
        .woo-type21 .woocommerce .cart input.button:hover,
        .woo-type21.woocommerce a.button:hover,
        .woo-type21.woocommerce button.button:hover,
        .woo-type21.woocommerce button:hover,
        .woo-type21.woocommerce input.button:hover,
        .woo-type21.woocommerce input[type=button]:hover,
        .woo-type21.woocommerce input[type=submit]:hover,
        .woo-type21.woocommerce #respond input#submit:hover,
        .woo-type21.woocommerce a.button.alt:hover,
        .woo-type21.woocommerce button.button.alt:hover,
        .woo-type21.woocommerce input.button.alt:hover,
        .woo-type21.woocommerce #respond input#submit.alt:hover,
        .woo-type21.woocommerce .product .summary .add_to_wishlist:hover,
        .woo-type21.woocommerce .wishlist_table .add_to_cart.button:hover,
        .woo-type21.woocommerce .yith-wcwl-add-button a.add_to_wishlist:hover,
        .woo-type21.woocommerce .yith-wcwl-popup-button a.add_to_wishlist:hover,
        .woo-type21.woocommerce .wishlist_table a.ask-an-estimate-button:hover,
        .woo-type21.woocommerce .wishlist-title a.show-title-form:hover,
        .woo-type21.woocommerce .hidden-title-form a.hide-title-form:hover,
        .woo-type21.woocommerce .yith-wcwl-wishlist-new button:hover,
        .woo-type21.woocommerce .wishlist_manage_table a.create-new-wishlist:hover,
        .woo-type21.woocommerce .wishlist_manage_table button.submit-wishlist-changes:hover,
        .woo-type21.woocommerce .yith-wcwl-wishlist-search-form button.wishlist-search-button:hover,
        .woo-type21.woocommerce .cart input.button:hover,
        .woo-type21 .woocommerce .product .summary .add_to_wishlist:hover:before,
        .woo-type21.woocommerce .product .summary .add_to_wishlist:hover:before,
        .woocommerce ul.products li.product .woo-type21 .product-buttons-wrapper a.product_type_external:hover,
        .woocommerce ul.products li.product .woo-type21 .product-buttons-wrapper a.button.product_type_grouped:hover {
            background-color: #c59d5f;
        }

        .woo-type21 .woocommerce .product .summary .add_to_wishlist:hover,
        .woo-type21.woocommerce .product .summary .add_to_wishlist:hover {
            color: #c59d5f;
        }

        .has-secondary-background-color {
            background-color: #9d7d4c;
        }

        .has-secondary-color {
            color: #9d7d4c;
        }

        .dt-skin-secondary-color {
            color: #9d7d4c;
        }

        .dt-skin-secondary-bg,
        div[class*="dt-skin-secondary-bg-opaque"]:not(.ult-vc-hide-row):before,
        div[class*="dt-skin-secondary-bg-opaque"] .upb_row_bg:before,
        section[class*="dt-skin-secondary-bg-opaque"]:before,
        .dt-skin-secondary-bg.extend-bg-fullwidth-left:after,
        .dt-skin-secondary-bg.extend-bg-fullwidth-right:after,
        .mz-blog .comments a:hover,
        .mz-blog div.vc_gitem-post-category-name:hover,
        .dt-sc-infinite-portfolio-load-more:hover,
        .dt-sc-counter.type2:hover .dt-sc-couter-icon-holder,
        .dt-sc-icon-box.type3:hover .icon-wrapper span,
        .dt-sc-newsletter-section.type2 .dt-sc-subscribe-frm input[type="submit"]:hover,
        .skin-highlight .dt-sc-testimonial.type6 .dt-sc-testimonial-author:before,
        .skin-highlight .dt-sc-testimonial.type6:after,
        .dt-sc-team-social.rounded-square li a:hover,
        .dt-sc-video-wrapper .video-overlay-inner a:hover,
        .side-navigation.type2 ul.side-nav li a:before,
        .side-navigation.type2 ul.side-nav>li.current_page_item>a:before,
        .side-navigation.type2 ul.side-nav>li>ul>li.current_page_item>a:before,
        .side-navigation.type2 ul.side-nav>li>ul>li>ul>li.current_page_item>a:before,
        .dt-sc-team.hide-details-show-on-hover:hover:after,
        .dt-sc-contact-info.type4 span:after {
            background-color: #9d7d4c;
        }

        .dt-skin-secondary-border,
        .dt-sc-contact-info.type5 .dt-sc-contact-icon,
        .dt-sc-contact-info.type5 .dt-sc-contact-icon:before,
        .dt-sc-contact-info.type5 .dt-sc-contact-icon:after,
        .dt-sc-image-caption.type2:hover .dt-sc-image-content,
        .dt-sc-newsletter-section.type2 .dt-sc-subscribe-frm input[type="email"],
        .dt-sc-sociable.hexagon-with-border li,
        .dt-sc-sociable.hexagon-with-border li:before,
        .dt-sc-sociable.hexagon-with-border li:after,
        .side-navigation.type5 ul.side-nav,
        .side-navigation.type5 ul.side-nav li a,
        .side-navigation.type5 ul.side-nav li ul {
            border-color: #9d7d4c;
        }

        .error404 .type2 a.dt-sc-back:hover,
        .error404 .type4 .dt-sc-newsletter-section input[type="submit"]:hover {
            background-color: #9d7d4c;
        }

        #item-header-content #item-meta>#item-buttons .group-button:hover,
        #buddypress .activity-list li.load-more a:hover,
        #buddypress .activity-list li.load-newest a:hover {
            background-color: #9d7d4c;
        }

        #bbpress-forums #subscription-toggle a.subscription-toggle:hover,
        .bbp-submit-wrapper #bbp_topic_submit:hover {
            background-color: #9d7d4c;
        }

        #tribe-bar-form .tribe-bar-submit input[type="submit"]:hover,
        .tribe-events-read-more:hover,
        #tribe-events .tribe-events-button:hover,
        .tribe-events-button:hover,
        .tribe-events-back>a:hover,
        .datepicker thead tr:first-child th:hover,
        .datepicker tfoot tr th:hover,
        #tribe_events_filters_toggle:hover {
            background-color: #9d7d4c;
        }

        .tribe-grid-header .tribe-week-today {
            background-color: #9d7d4c;
        }

        .woocommerce a.button:hover,
        .woocommerce button.button:hover,
        .woocommerce button:hover,
        .woocommerce input.button:hover,
        .woocommerce input[type=button]:hover,
        .woocommerce input[type=submit]:hover,
        .woocommerce #respond input#submit:hover,
        .woocommerce a.button.alt:hover,
        .woocommerce button.button.alt:hover,
        .woocommerce input.button.alt:hover,
        .woocommerce #respond input#submit.alt:hover,
        .woocommerce .product .summary .add_to_wishlist:hover,
        .woocommerce .wishlist_table .add_to_cart.button:hover,
        .woocommerce .yith-wcwl-add-button a.add_to_wishlist:hover,
        .woocommerce .yith-wcwl-popup-button a.add_to_wishlist:hover,
        .woocommerce .wishlist_table a.ask-an-estimate-button:hover,
        .woocommerce .wishlist-title a.show-title-form:hover,
        .woocommerce .hidden-title-form a.hide-title-form:hover,
        .woocommerce .yith-wcwl-wishlist-new button:hover,
        .woocommerce .wishlist_manage_table a.create-new-wishlist:hover,
        .woocommerce .wishlist_manage_table button.submit-wishlist-changes:hover,
        .woocommerce .yith-wcwl-wishlist-search-form button.wishlist-search-button:hover,
        .woocommerce .cart input.button:hover,
        .woocommerce-page a.button:hover,
        .woocommerce-page button.button:hover,
        .woocommerce-page button:hover,
        .woocommerce-page input.button:hover,
        .woocommerce-page input[type=button]:hover,
        .woocommerce-page input[type=submit]:hover,
        .woocommerce-page #respond input#submit:hover,
        .woocommerce-page a.button.alt:hover,
        .woocommerce-page button.button.alt:hover,
        .woocommerce-page input.button.alt:hover,
        .woocommerce-page #respond input#submit.alt:hover,
        .woocommerce-page .product .summary .add_to_wishlist:hover,
        .woocommerce-page .wishlist_table .add_to_cart.button:hover,
        .woocommerce-page .yith-wcwl-add-button a.add_to_wishlist:hover,
        .woocommerce-page .yith-wcwl-popup-button a.add_to_wishlist:hover,
        .woocommerce-page .wishlist_table a.ask-an-estimate-button:hover,
        .woocommerce-page .wishlist-title a.show-title-form:hover,
        .woocommerce-page .hidden-title-form a.hide-title-form:hover,
        .woocommerce-page .yith-wcwl-wishlist-new button:hover,
        .woocommerce-page .wishlist_manage_table a.create-new-wishlist:hover,
        .woocommerce-page .wishlist_manage_table button.submit-wishlist-changes:hover,
        .woocommerce-page .yith-wcwl-wishlist-search-form button.wishlist-search-button:hover,
        .woocommerce-page .cart input.button:hover,
        .woocommerce a.button.alt.disabled,
        .woocommerce a.button.alt:disabled,
        .woocommerce a.button.alt[disabled]:disabled,
        .woocommerce button.button.alt.disabled,
        .woocommerce button.button.alt:disabled,
        .woocommerce button.button.alt[disabled]:disabled,
        .woocommerce input.button.alt.disabled,
        .woocommerce input.button.alt:disabled,
        .woocommerce input.button.alt[disabled]:disabled,
        .woocommerce #respond input#submit.alt.disabled,
        .woocommerce #respond input#submit.alt:disabled,
        .woocommerce #respond input#submit.alt[disabled]:disabled,
        .woocommerce a.button.alt.disabled:hover,
        .woocommerce a.button.alt:disabled:hover,
        .woocommerce a.button.alt[disabled]:disabled:hover,
        .woocommerce button.button.alt.disabled:hover,
        .woocommerce button.button.alt:disabled:hover,
        .woocommerce button.button.alt[disabled]:disabled:hover,
        .woocommerce input.button.alt.disabled:hover,
        .woocommerce input.button.alt:disabled:hover,
        .woocommerce input.button.alt[disabled]:disabled:hover,
        .woocommerce #respond input#submit.alt.disabled:hover,
        .woocommerce #respond input#submit.alt:disabled:hover,
        .woocommerce #respond input#submit.alt[disabled]:disabled:hover,
        .woocommerce a.button.disabled:hover,
        .woocommerce a.button:disabled:hover,
        .woocommerce a.button:disabled[disabled]:hover,
        .woocommerce button.button.disabled:hover,
        .woocommerce button.button:disabled:hover,
        .woocommerce button.button:disabled[disabled]:hover,
        .woocommerce input.button.disabled:hover,
        .woocommerce input.button:disabled:hover,
        .woocommerce input.button:disabled[disabled]:hover,
        .woocommerce #respond input#submit.disabled:hover,
        .woocommerce #respond input#submit:disabled:hover,
        .woocommerce #respond input#submit:disabled[disabled]:hover {
            background-color: #9d7d4c;
        }

        ul.products li.product .woo-type4 .product-thumb a.add_to_cart_button:hover:after,
        ul.products li.product .woo-type4 .product-thumb a.button.product_type_simple:hover:after,
        ul.products li.product .woo-type4 .product-thumb a.button.product_type_variable:hover:after,
        ul.products li.product .woo-type4 .product-thumb a.added_to_cart.wc-forward:hover:after,
        ul.products li.product .woo-type4 .product-thumb a.add_to_wishlist:hover:after,
        ul.products li.product .woo-type4 .product-thumb .yith-wcwl-wishlistaddedbrowse a:hover:after,
        ul.products li.product .woo-type4 .product-thumb .yith-wcwl-wishlistexistsbrowse a:hover:after,
        .woocommerce ul.products li.product .woo-type4 .product-buttons-wrapper a.product_type_external:hover:after,
        .woocommerce ul.products li.product .woo-type4 .product-buttons-wrapper a.button.product_type_grouped:hover:after {
            background-color: #9d7d4c;
        }

        ul.products li.product:hover .woo-type8 .product-wrapper {
            border-color: #9d7d4c;
        }

        ul.products li.product .woo-type10 .product-thumb a.add_to_cart_button:hover,
        ul.products li.product .woo-type10 .product-thumb a.button.product_type_simple:hover,
        ul.products li.product .woo-type10 .product-thumb a.button.product_type_variable:hover,
        ul.products li.product .woo-type10 .product-thumb a.added_to_cart.wc-forward:hover,
        ul.products li.product .woo-type10 .product-thumb a.add_to_wishlist:hover,
        ul.products li.product .woo-type10 .product-thumb .yith-wcwl-wishlistaddedbrowse a:hover,
        ul.products li.product .woo-type10 .product-thumb .yith-wcwl-wishlistexistsbrowse a:hover,
        .woo-type10.woocommerce ul.products li.product .featured-tag,
        .woo-type10 .woocommerce ul.products li.product .featured-tag,
        .woo-type10.woocommerce.single-product .featured-tag,
        .woocommerce ul.products li.product .woo-type10 .product-buttons-wrapper a.yith-wcqv-button:hover,
        .woocommerce ul.products li.product .woo-type10 .product-buttons-wrapper a.yith-woocompare-button:hover {
            background-color: #9d7d4c;
        }

        ul.products li.product .woo-type11 .product-thumb a.add_to_cart_button,
        ul.products li.product .woo-type11 .product-thumb a.button.product_type_simple,
        ul.products li.product .woo-type11 .product-thumb a.button.product_type_variable,
        ul.products li.product .woo-type11 .product-thumb a.added_to_cart.wc-forward,
        ul.products li.product .woo-type11 .product-thumb a.add_to_wishlist,
        ul.products li.product .woo-type11 .product-thumb .yith-wcwl-wishlistaddedbrowse a,
        ul.products li.product .woo-type11 .product-thumb .yith-wcwl-wishlistexistsbrowse a,
        ul.products li.product:hover .woo-type11 .product-wrapper:before,
        ul.products li.product:hover .woo-type11 .product-wrapper:after,
        .woocommerce ul.products li.product .woo-type11 .product-thumb,
        .woocommerce ul.products li.product .woo-type11 .product-thumb,
        ul.products li.product-category .woo-type11 a img,
        .woocommerce ul.products li.product .woo-type11 .product-buttons-wrapper a.yith-wcqv-button,
        .woocommerce ul.products li.product .woo-type11 .product-buttons-wrapper a.yith-woocompare-button,
        ul.products li.product .woo-type11 .product-buttons-wrapper a.product_type_external,
        ul.products li.product .woo-type11 .product-buttons-wrapper a.button.product_type_grouped {
            border-color: #9d7d4c;
        }

        .woo-type12 ul.products li.product .product-thumb a.add_to_cart_button:hover,
        .woo-type12 ul.products li.product .product-thumb a.button.product_type_simple:hover,
        .woo-type12 ul.products li.product .product-thumb a.button.product_type_variable:hover,
        .woo-type12 ul.products li.product .product-thumb a.added_to_cart.wc-forward:hover,
        .woo-type12 ul.products li.product .product-thumb a.add_to_wishlist:hover,
        .woo-type12 ul.products li.product .product-thumb .yith-wcwl-wishlistaddedbrowse a:hover,
        .woo-type12 ul.products li.product .product-thumb .yith-wcwl-wishlistexistsbrowse a:hover,
        .woo-type12 ul.products li.product:hover .product-details h5:after,
        .woocommerce ul.products li.product .woo-type12 .product-buttons-wrapper a.yith-wcqv-button:hover,
        .woocommerce ul.products li.product .woo-type12 .product-buttons-wrapper a.yith-woocompare-button:hover {
            background-color: #9d7d4c;
        }

        .woocommerce ul.products li.product:hover .woo-type12 .product-thumb a.add_to_cart_button:hover,
        .woocommerce ul.products li.product:hover .woo-type12 .product-thumb a.button.product_type_simple:hover,
        .woocommerce ul.products li.product:hover .woo-type12 .product-thumb a.button.product_type_variable:hover,
        .woocommerce ul.products li.product:hover .woo-type12 .product-thumb a.added_to_cart.wc-forward:hover,
        .woocommerce ul.products li.product:hover .woo-type12 .product-thumb a.add_to_wishlist:hover,
        .woocommerce ul.products li.product:hover .woo-type12 .product-thumb .yith-wcwl-wishlistaddedbrowse a:hover,
        .woocommerce ul.products li.product:hover .woo-type12 .product-thumb .yith-wcwl-wishlistexistsbrowse a:hover,
        .woocommerce ul.products li.product:hover .woo-type12 .product-buttons-wrapper a.yith-wcqv-button:hover,
        .woocommerce ul.products li.product:hover .woo-type12 .product-buttons-wrapper .yith-woocompare-button:hover,
        .woocommerce ul.products li.product:hover .woo-type12 .product-buttons-wrapper a.product_type_external:hover,
        .woocommerce ul.products li.product:hover .woo-type12 .product-buttons-wrapper a.button.product_type_grouped:hover {
            background-color: #9d7d4c;
        }

        .woo-type12 ul.products li.product:hover .product-wrapper {
            border-color: #9d7d4c;
        }

        ul.products li.product .woo-type14 .product-thumb a.add_to_cart_button:hover,
        ul.products li.product .woo-type14 .product-thumb a.button.product_type_simple:hover,
        ul.products li.product .woo-type14 .product-thumb a.button.product_type_variable:hover,
        ul.products li.product .woo-type14 .product-thumb a.added_to_cart.wc-forward:hover,
        ul.products li.product .woo-type14 .product-thumb a.add_to_wishlist:hover,
        ul.products li.product .woo-type14 .product-thumb .yith-wcwl-wishlistaddedbrowse a:hover,
        ul.products li.product .woo-type14 .product-thumb .yith-wcwl-wishlistexistsbrowse a:hover,
        ul.products li.product .woo-type14 .product-buttons-wrapper a.product_type_external:hover,
        ul.products li.product .woo-type14 .product-buttons-wrapper a.button.product_type_grouped:hover {
            background-color: #9d7d4c;
        }

        .woo-type17.woocommerce ul.products li.product .featured-tag,
        .woo-type17 .woocommerce ul.products li.product .featured-tag,
        .woo-type17.woocommerce.single-product .featured-tag {
            background-color: #9d7d4c;
        }

        .woo-type20.woocommerce .shop_table th,
        .woo-type20 .woocommerce .shop_table th,
        .woo-type20.woocommerce div.product .woocommerce-tabs ul.tabs li.active a:after {
            background-color: #9d7d4c;
        }

        .woo-type20 ul.products li.product:hover .product-wrapper:after,
        .woo-type20 div.product div.images img {
            border-color: #9d7d4c;
        }

        .woo-type20.woocommerce-checkout #payment ul.payment_methods li a:hover {
            color: #9d7d4c;
        }

        .has-tertiary-background-color {
            background-color: #d0b07e;
        }

        .has-tertiary-color {
            color: #d0b07e;
        }

        .dt-skin-tertiary-color {
            color: #d0b07e;
        }

        .dt-skin-tertiary-bg,
        div[class*="dt-skin-tertiary-bg-opaque"]:not(.ult-vc-hide-row):before,
        div[class*="dt-skin-tertiary-bg-opaque"] .upb_row_bg:before,
        section[class*="dt-skin-tertiary-bg-opaque"]:before,
        .dt-skin-tertiary-bg.extend-bg-fullwidth-left:after,
        .dt-skin-tertiary-bg.extend-bg-fullwidth-right:after,
        .dt-sc-triangle-title:before,
        .dt-sc-icon-box.type10 .icon-wrapper:after,
        .side-navigation.type1 ul.side-nav>li.current_page_item>a,
        .side-navigation.type1 ul.side-nav>li>ul>li.current_page_item>a,
        .side-navigation.type1 ul.side-nav>li>ul>li>ul>li.current_page_item>a {
            background-color: #d0b07e;
        }

        .dt-skin-tertiary-border {
            border-color: #d0b07e;
        }

        .footer-22 .footer-copyright.vc_row {
            border-top-color: #d0b07e;
        }

        body,
        .wp-block-pullquote {
            color: #505050;
        }

        a {
            color: #505050;
        }

        a:hover {
            color: #c59d5f;
        }

        .main-title-section h1,
        h1.simple-title {
            font-family: Lato;
            font-size: 32px;
            font-weight: 700;
            letter-spacing: 0.5px;
            text-align: inherit;
            text-transform: capitalize;
            color: #ffffff;
        }

        div.breadcrumb a {
            font-family: Lato;
            font-size: 16px;
            font-weight: 400;
            letter-spacing: 0.5px;
            text-transform: none;
            color: #ffffff;
        }

        body {
            font-family: Lato;
            font-size: 16px;
            font-weight: 400;
            letter-spacing: 0.5px;
            line-height: 32px;
            text-align: inherit;
            text-transform: none;
            color: #505050;
        }

        h1 {
            font-family: Pinyon Script;
            font-size: 30px;
            font-weight: 400;
            letter-spacing: 0.5px;
            text-align: inherit;
            text-transform: none;
            color: #000000;
        }

        h2 {
            font-family: Lato;
            font-size: 24px;
            font-weight: 400;
            letter-spacing: 0.5px;
            text-align: inherit;
            text-transform: none;
            color: #000000;
        }

        h3 {
            font-family: Lato;
            font-size: 18px;
            font-weight: 400;
            letter-spacing: 0.5px;
            text-align: inherit;
            text-transform: none;
            color: #000000;
        }

        h4 {
            font-family: Lato;
            font-size: 16px;
            font-weight: 400;
            letter-spacing: 0.5px;
            text-align: inherit;
            text-transform: none;
            color: #000000;
        }

        h5 {
            font-family: Lato;
            font-size: 14px;
            font-weight: 400;
            letter-spacing: 0.5px;
            text-align: inherit;
            text-transform: none;
            color: #000000;
        }

        h6 {
            font-family: Lato;
            font-size: 13px;
            font-weight: 400;
            letter-spacing: 0.5px;
            text-align: inherit;
            text-transform: none;
            color: #000000;
        }

        div.footer-widgets h3.widgettitle {
            font-family: Lato;
            font-size: 16px;
            font-weight: 700;
            letter-spacing: 0px;
            line-height: 32px;
            text-align: left;
            text-transform: none;
            color: #ffffff;
        }

        #footer,
        .footer-copyright,
        div.footer-widgets .widget {
            font-family: Lato;
            font-size: 16px;
            font-weight: 400;
            letter-spacing: 0px;
            line-height: 32px;
            text-align: left;
            text-transform: none;
            color: #808080;
        }

        /* latin-ext */
        @font-face {
            font-family: 'Lato';
            font-style: italic;
            font-weight: 100;
            font-display: swap;
            src: url(https://dtkudil.wpengine.com/wp-content/fonts/lato/S6u-w4BMUTPHjxsIPx-mPCTC79U11vU.woff) format('woff');
            unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
        }

        /* latin */
        @font-face {
            font-family: 'Lato';
            font-style: italic;
            font-weight: 100;
            font-display: swap;
            src: url(https://dtkudil.wpengine.com/wp-content/fonts/lato/S6u-w4BMUTPHjxsIPx-oPCTC79U1.woff) format('woff');
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
        }

        /* latin-ext */
        @font-face {
            font-family: 'Lato';
            font-style: italic;
            font-weight: 300;
            font-display: swap;
            src: url(https://dtkudil.wpengine.com/wp-content/fonts/lato/S6u_w4BMUTPHjxsI9w2_FQfrx9897sxZ.woff) format('woff');
            unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
        }

        /* latin */
        @font-face {
            font-family: 'Lato';
            font-style: italic;
            font-weight: 300;
            font-display: swap;
            src: url(https://dtkudil.wpengine.com/wp-content/fonts/lato/S6u_w4BMUTPHjxsI9w2_Gwfrx9897g.woff) format('woff');
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
        }

        /* latin-ext */
        @font-face {
            font-family: 'Lato';
            font-style: italic;
            font-weight: 400;
            font-display: swap;
            src: url(https://dtkudil.wpengine.com/wp-content/fonts/lato/S6u8w4BMUTPHjxsAUi-sNiXg7eU0.woff) format('woff');
            unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
        }

        /* latin */
        @font-face {
            font-family: 'Lato';
            font-style: italic;
            font-weight: 400;
            font-display: swap;
            src: url(https://dtkudil.wpengine.com/wp-content/fonts/lato/S6u8w4BMUTPHjxsAXC-sNiXg7Q.woff) format('woff');
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
        }

        /* latin-ext */
        @font-face {
            font-family: 'Lato';
            font-style: italic;
            font-weight: 700;
            font-display: swap;
            src: url(https://dtkudil.wpengine.com/wp-content/fonts/lato/S6u_w4BMUTPHjxsI5wq_FQfrx9897sxZ.woff) format('woff');
            unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
        }

        /* latin */
        @font-face {
            font-family: 'Lato';
            font-style: italic;
            font-weight: 700;
            font-display: swap;
            src: url(https://dtkudil.wpengine.com/wp-content/fonts/lato/S6u_w4BMUTPHjxsI5wq_Gwfrx9897g.woff) format('woff');
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
        }

        /* latin-ext */
        @font-face {
            font-family: 'Lato';
            font-style: italic;
            font-weight: 900;
            font-display: swap;
            src: url(https://dtkudil.wpengine.com/wp-content/fonts/lato/S6u_w4BMUTPHjxsI3wi_FQfrx9897sxZ.woff) format('woff');
            unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
        }

        /* latin */
        @font-face {
            font-family: 'Lato';
            font-style: italic;
            font-weight: 900;
            font-display: swap;
            src: url(https://dtkudil.wpengine.com/wp-content/fonts/lato/S6u_w4BMUTPHjxsI3wi_Gwfrx9897g.woff) format('woff');
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
        }

        /* latin-ext */
        @font-face {
            font-family: 'Lato';
            font-style: normal;
            font-weight: 100;
            font-display: swap;
            src: url(https://dtkudil.wpengine.com/wp-content/fonts/lato/S6u8w4BMUTPHh30AUi-sNiXg7eU0.woff) format('woff');
            unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
        }

        /* latin */
        @font-face {
            font-family: 'Lato';
            font-style: normal;
            font-weight: 100;
            font-display: swap;
            src: url(https://dtkudil.wpengine.com/wp-content/fonts/lato/S6u8w4BMUTPHh30AXC-sNiXg7Q.woff) format('woff');
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
        }

        /* latin-ext */
        @font-face {
            font-family: 'Lato';
            font-style: normal;
            font-weight: 300;
            font-display: swap;
            src: url(https://dtkudil.wpengine.com/wp-content/fonts/lato/S6u9w4BMUTPHh7USSwaPHw3q5d0N7w.woff) format('woff');
            unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
        }

        /* latin */
        @font-face {
            font-family: 'Lato';
            font-style: normal;
            font-weight: 300;
            font-display: swap;
            src: url(https://dtkudil.wpengine.com/wp-content/fonts/lato/S6u9w4BMUTPHh7USSwiPHw3q5d0.woff) format('woff');
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
        }

        /* latin-ext */
        @font-face {
            font-family: 'Lato';
            font-style: normal;
            font-weight: 400;
            font-display: swap;
            src: url(https://dtkudil.wpengine.com/wp-content/fonts/lato/S6uyw4BMUTPHjxAwWCWtFCfQ7A.woff) format('woff');
            unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
        }

        /* latin */
        @font-face {
            font-family: 'Lato';
            font-style: normal;
            font-weight: 400;
            font-display: swap;
            src: url(https://dtkudil.wpengine.com/wp-content/fonts/lato/S6uyw4BMUTPHjx4wWCWtFCc.woff) format('woff');
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
        }

        /* latin-ext */
        @font-face {
            font-family: 'Lato';
            font-style: normal;
            font-weight: 700;
            font-display: swap;
            src: url(https://dtkudil.wpengine.com/wp-content/fonts/lato/S6u9w4BMUTPHh6UVSwaPHw3q5d0N7w.woff) format('woff');
            unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
        }

        /* latin */
        @font-face {
            font-family: 'Lato';
            font-style: normal;
            font-weight: 700;
            font-display: swap;
            src: url(https://dtkudil.wpengine.com/wp-content/fonts/lato/S6u9w4BMUTPHh6UVSwiPHw3q5d0.woff) format('woff');
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
        }

        /* latin-ext */
        @font-face {
            font-family: 'Lato';
            font-style: normal;
            font-weight: 900;
            font-display: swap;
            src: url(https://dtkudil.wpengine.com/wp-content/fonts/lato/S6u9w4BMUTPHh50XSwaPHw3q5d0N7w.woff) format('woff');
            unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
        }

        /* latin */
        @font-face {
            font-family: 'Lato';
            font-style: normal;
            font-weight: 900;
            font-display: swap;
            src: url(https://dtkudil.wpengine.com/wp-content/fonts/lato/S6u9w4BMUTPHh50XSwiPHw3q5d0.woff) format('woff');
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
        }

        /* vietnamese */
        @font-face {
            font-family: 'Pinyon Script';
            font-style: normal;
            font-weight: 400;
            font-display: swap;
            src: url(https://dtkudil.wpengine.com/wp-content/fonts/pinyon-script/6xKpdSJbL9-e9LuoeQiDRQR8WOraPKTimDdT9g.woff) format('woff');
            unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;
        }

        /* latin-ext */
        @font-face {
            font-family: 'Pinyon Script';
            font-style: normal;
            font-weight: 400;
            font-display: swap;
            src: url(https://dtkudil.wpengine.com/wp-content/fonts/pinyon-script/6xKpdSJbL9-e9LuoeQiDRQR8WOvaPKTimDdT9g.woff) format('woff');
            unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
        }

        /* latin */
        @font-face {
            font-family: 'Pinyon Script';
            font-style: normal;
            font-weight: 400;
            font-display: swap;
            src: url(https://dtkudil.wpengine.com/wp-content/fonts/pinyon-script/6xKpdSJbL9-e9LuoeQiDRQR8WOXaPKTimDc.woff) format('woff');
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
        }

    </style>
    <style type="text/css" data-type="vc_shortcodes-custom-css">
        .vc_custom_1628238835709 {
            background-image: url(https://rnzxu3lrgrj1046y63g4g7l1-wpengine.netdna-ssl.com/wp-content/uploads/2021/08/Menu-parallax-1.jpg?id=13913) !important;
            background-position: 0 0 !important;
            background-repeat: no-repeat !important;
        }

        .vc_custom_1628238890184 {
            background-image: url(https://rnzxu3lrgrj1046y63g4g7l1-wpengine.netdna-ssl.com/wp-content/uploads/2021/08/Menu-parallax-2.jpg?id=13914) !important;
            background-position: 0 0 !important;
            background-repeat: no-repeat !important;
        }

    </style><noscript>
        <style>
            .wpb_animate_when_almost_visible {
                opacity: 1;
            }

        </style>
    </noscript>
@endsection

@section('banner')
<!-- ** Breadcrumb ** -->
                <section class="main-title-section-wrapper aligncenter">
                    <div class="main-title-section-bg"
                        style='background-image: url(https://rnzxu3lrgrj1046y63g4g7l1-wpengine.netdna-ssl.com/wp-content/uploads/2018/04/parallax-img-3.jpg); background-position: left bottom; background-size: cover; background-repeat: no-repeat; background-attachment: fixed; '>
                    </div>
                    <div class="container">
                        <div class="main-title-section">
                            <h2 class="main-subtitle-text">Crazy About Food</h2>
                            <h1>Shop</h1>
                        </div>
                        <div class="breadcrumb"><a href="https://dtkudil.wpengine.com/">Home</a><span
                                class="fa fa-coffee"></span><span class="current">Shop</span></div>
                    </div>
                </section><!-- ** Breadcrumb End ** -->
@endsection

@section('content')
    <!-- **Main** -->
            <div id="main">

                <!-- ** Container ** -->
                <div class="container">
                    <!-- Primary -->
                    <section id="primary" class="content-full-width">
                        <!-- #post-9023 -->
                        <div id="post-9023" class="post-9023 page type-page status-publish hentry">
                            <section class="vc_section dt_data_bully">
                                <div data-vc-full-width="true" data-vc-full-width-init="false"
                                    class="vc_row wpb_row vc_row-fluid">
                                    <div class="wpb_column vc_column_container vc_col-sm-12">
                                        <div class="vc_column-inner " style=" text-align:center; ">
                                            <div class="wpb_wrapper">
                                                <div class='dt-sc-title with-image with-sub-title aligncenter'>
                                                    <h4>Make your Order</h4>
                                                    <h2>dishes on our menu</h2>
                                                    <p><img width="43" height="43"
                                                            src="https://rnzxu3lrgrj1046y63g4g7l1-wpengine.netdna-ssl.com/wp-content/uploads/2018/04/flower-decor.png"
                                                            class="attachment-full" alt="flower-decor" loading="lazy" />
                                                    </p>
                                                </div>
                                                <div class="wpb_text_column wpb_content_element  dt-sc-intro-text">
                                                    <div class="wpb_wrapper">
                                                        <p>At vero eos et accusamus et iusto odio dignissimos ducimus
                                                            qui blanditiis praesentium voluptatum deleniti atque
                                                            corrupti quos dolores et quas molestias excepturi sint
                                                            occaecati cupiditate non provident, similique sunt in culpa
                                                            qui officia deserunt mollitia animi, id est laborum et
                                                            dolorum fuga.</p>

                                                    </div>
                                                </div>
                                                <div id="1524210090117-fa54dca5-59b6" class="dt-sc-empty-space"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="vc_row-full-width vc_clearfix"></div>
                                <div class="vc_row wpb_row vc_row-fluid">
                                    <div class="wpb_column vc_column_container vc_col-sm-12">
                                        <div class="vc_column-inner ">
                                            <div class="wpb_wrapper">
                                                <div class="vc_row wpb_row vc_inner vc_row-fluid">
                                                    <div class="wpb_column vc_column_container vc_col-sm-12"
                                                        style=" text-align:center; ">
                                                        <div class="vc_column-inner ">
                                                            <div class="wpb_wrapper">
                                                                <h3 class="dt-sc-menu-title">Breakfast</h3>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div id="1524298404374-c2823fc9-ad2c" class="dt-sc-empty-space"></div>
                                                <div class="woocommerce columns-3 ">
                                                    <ul class="products columns-3">
                                                        <li
                                                            class="product type-product post-8884 status-publish first instock product_cat-breakfast has-post-thumbnail downloadable shipping-taxable purchasable product-type-simple">
                                                            <div class="woo-type11">
                                                                <div class="column dt-sc-one-third">
                                                                    <div class="product-wrapper">
                                                                        <div class='product-thumb'><a class="image"
                                                                                href="https://dtkudil.wpengine.com/product/assiette-de-fromages/"
                                                                                title="Assiette De Fromages"><img
                                                                                    width="600" height="600"
                                                                                    src="https://rnzxu3lrgrj1046y63g4g7l1-wpengine.netdna-ssl.com/wp-content/uploads/2013/06/pdt3-600x600.jpg"
                                                                                    class="attachment-shop_catalog size-shop_catalog wp-post-image"
                                                                                    alt=""
                                                                                    srcset="https://rnzxu3lrgrj1046y63g4g7l1-wpengine.netdna-ssl.com/wp-content/uploads/2013/06/pdt3-600x600.jpg 600w, https://rnzxu3lrgrj1046y63g4g7l1-wpengine.netdna-ssl.com/wp-content/uploads/2013/06/pdt3-150x150.jpg 150w, https://rnzxu3lrgrj1046y63g4g7l1-wpengine.netdna-ssl.com/wp-content/uploads/2013/06/pdt3-300x300.jpg 300w, https://rnzxu3lrgrj1046y63g4g7l1-wpengine.netdna-ssl.com/wp-content/uploads/2013/06/pdt3-768x768.jpg 768w, https://rnzxu3lrgrj1046y63g4g7l1-wpengine.netdna-ssl.com/wp-content/uploads/2013/06/pdt3-750x750.jpg 750w, https://rnzxu3lrgrj1046y63g4g7l1-wpengine.netdna-ssl.com/wp-content/uploads/2013/06/pdt3-540x540.jpg 540w, https://rnzxu3lrgrj1046y63g4g7l1-wpengine.netdna-ssl.com/wp-content/uploads/2013/06/pdt3-100x100.jpg 100w, https://rnzxu3lrgrj1046y63g4g7l1-wpengine.netdna-ssl.com/wp-content/uploads/2013/06/pdt3.jpg 1000w"
                                                                                    sizes="(max-width: 600px) 100vw, 600px" /><img
                                                                                    width="600" height="600"
                                                                                    src="https://rnzxu3lrgrj1046y63g4g7l1-wpengine.netdna-ssl.com/wp-content/uploads/2013/06/pdt4-600x600.jpg"
                                                                                    class="secondary-image attachment-shop-catalog"
                                                                                    alt="" loading="lazy"
                                                                                    srcset="https://rnzxu3lrgrj1046y63g4g7l1-wpengine.netdna-ssl.com/wp-content/uploads/2013/06/pdt4-600x600.jpg 600w, https://rnzxu3lrgrj1046y63g4g7l1-wpengine.netdna-ssl.com/wp-content/uploads/2013/06/pdt4-150x150.jpg 150w, https://rnzxu3lrgrj1046y63g4g7l1-wpengine.netdna-ssl.com/wp-content/uploads/2013/06/pdt4-300x300.jpg 300w, https://rnzxu3lrgrj1046y63g4g7l1-wpengine.netdna-ssl.com/wp-content/uploads/2013/06/pdt4-768x768.jpg 768w, https://rnzxu3lrgrj1046y63g4g7l1-wpengine.netdna-ssl.com/wp-content/uploads/2013/06/pdt4-750x750.jpg 750w, https://rnzxu3lrgrj1046y63g4g7l1-wpengine.netdna-ssl.com/wp-content/uploads/2013/06/pdt4-540x540.jpg 540w, https://rnzxu3lrgrj1046y63g4g7l1-wpengine.netdna-ssl.com/wp-content/uploads/2013/06/pdt4-100x100.jpg 100w, https://rnzxu3lrgrj1046y63g4g7l1-wpengine.netdna-ssl.com/wp-content/uploads/2013/06/pdt4.jpg 1000w"
                                                                                    sizes="(max-width: 600px) 100vw, 600px" /></a>
                                                                            <div class="product-buttons-wrapper">
                                                                                <div class="wc_inline_buttons">
                                                                                    <div
                                                                                        class="wc_cart_btn_wrapper wc_btn_inline">
                                                                                        <a href="?add-to-cart=8884"
                                                                                            data-quantity="1"
                                                                                            class="dt-sc-button too-small button product_type_simple add_to_cart_button ajax_add_to_cart"
                                                                                            data-product_id="8884"
                                                                                            data-product_sku=""
                                                                                            aria-label="Add &ldquo;Assiette De Fromages&rdquo; to your cart"
                                                                                            rel="nofollow">Add to
                                                                                            cart</a></div>
                                                                                    <div
                                                                                        class="wcwl_btn_wrapper wc_btn_inline">
                                                                                        <div class="yith-wcwl-add-to-wishlist add-to-wishlist-8884  wishlist-fragment on-first-load"
                                                                                            data-fragment-ref="8884"
                                                                                            data-fragment-options="{&quot;base_url&quot;:&quot;&quot;,&quot;in_default_wishlist&quot;:false,&quot;is_single&quot;:false,&quot;show_exists&quot;:false,&quot;product_id&quot;:8884,&quot;parent_product_id&quot;:8884,&quot;product_type&quot;:&quot;simple&quot;,&quot;show_view&quot;:false,&quot;browse_wishlist_text&quot;:&quot;Browse Wishlist&quot;,&quot;already_in_wishslist_text&quot;:&quot;The product is already in the wishlist!&quot;,&quot;product_added_text&quot;:&quot;Product added!&quot;,&quot;heading_icon&quot;:&quot;&quot;,&quot;available_multi_wishlist&quot;:false,&quot;disable_wishlist&quot;:false,&quot;show_count&quot;:false,&quot;ajax_loading&quot;:false,&quot;loop_position&quot;:false,&quot;item&quot;:&quot;add_to_wishlist&quot;}">

                                                                                            <!-- ADD TO WISHLIST -->

                                                                                            <div
                                                                                                class="yith-wcwl-add-button">
                                                                                                <a href="?add_to_wishlist=8884"
                                                                                                    rel="nofollow"
                                                                                                    data-product-id="8884"
                                                                                                    data-product-type="simple"
                                                                                                    data-original-product-id="8884"
                                                                                                    class="add_to_wishlist single_add_to_wishlist"
                                                                                                    data-title="Add to Wishlist">
                                                                                                    <span>Add to
                                                                                                        Wishlist</span>
                                                                                                </a>
                                                                                            </div>
                                                                                            <!-- COUNT TEXT -->

                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class='product-details'>
                                                                            <h5><a
                                                                                    href="https://dtkudil.wpengine.com/product/assiette-de-fromages/">Assiette
                                                                                    De Fromages</a></h5><span
                                                                                class="product-price"><span
                                                                                    class="price"><span
                                                                                        class="woocommerce-Price-amount amount"><bdi><span
                                                                                                class="woocommerce-Price-currencySymbol">&pound;</span>12.75</bdi></span></span></span>
                                                                            <div class="product-rating-wrapper">
                                                                                <div class="star-rating" role="img"
                                                                                    aria-label="Rated 5.00 out of 5">
                                                                                    <span style="width:100%">Rated
                                                                                        <strong
                                                                                            class="rating">5.00</strong>
                                                                                        out of 5</span></div>
                                                                            </div>
                                                                        </div>
                                                                    </div> <!-- .product-wrapper -->
                                                                </div> <!-- .column -->
                                                            </div> <!-- .style -->
                                                        </li>
                                                        <li
                                                            class="product type-product post-8885 status-publish instock product_cat-breakfast has-post-thumbnail downloadable shipping-taxable purchasable product-type-simple">
                                                            <div class="woo-type11">
                                                                <div class="column dt-sc-one-third">
                                                                    <div class="product-wrapper">
                                                                        <div class='product-thumb'><a class="image"
                                                                                href="https://dtkudil.wpengine.com/product/filet-de-saumon/"
                                                                                title="Filet De Saumon"><img width="600"
                                                                                    height="600"
                                                                                    src="https://rnzxu3lrgrj1046y63g4g7l1-wpengine.netdna-ssl.com/wp-content/uploads/2013/06/pdt2-600x600.jpg"
                                                                                    class="attachment-shop_catalog size-shop_catalog wp-post-image"
                                                                                    alt="" loading="lazy"
                                                                                    srcset="https://rnzxu3lrgrj1046y63g4g7l1-wpengine.netdna-ssl.com/wp-content/uploads/2013/06/pdt2-600x600.jpg 600w, https://rnzxu3lrgrj1046y63g4g7l1-wpengine.netdna-ssl.com/wp-content/uploads/2013/06/pdt2-150x150.jpg 150w, https://rnzxu3lrgrj1046y63g4g7l1-wpengine.netdna-ssl.com/wp-content/uploads/2013/06/pdt2-300x300.jpg 300w, https://rnzxu3lrgrj1046y63g4g7l1-wpengine.netdna-ssl.com/wp-content/uploads/2013/06/pdt2-768x768.jpg 768w, https://rnzxu3lrgrj1046y63g4g7l1-wpengine.netdna-ssl.com/wp-content/uploads/2013/06/pdt2-750x750.jpg 750w, https://rnzxu3lrgrj1046y63g4g7l1-wpengine.netdna-ssl.com/wp-content/uploads/2013/06/pdt2-540x540.jpg 540w, https://rnzxu3lrgrj1046y63g4g7l1-wpengine.netdna-ssl.com/wp-content/uploads/2013/06/pdt2-100x100.jpg 100w, https://rnzxu3lrgrj1046y63g4g7l1-wpengine.netdna-ssl.com/wp-content/uploads/2013/06/pdt2.jpg 1000w"
                                                                                    sizes="(max-width: 600px) 100vw, 600px" /><img
                                                                                    width="600" height="600"
                                                                                    src="https://rnzxu3lrgrj1046y63g4g7l1-wpengine.netdna-ssl.com/wp-content/uploads/2013/06/pdt1-600x600.jpg"
                                                                                    class="secondary-image attachment-shop-catalog"
                                                                                    alt="" loading="lazy"
                                                                                    srcset="https://rnzxu3lrgrj1046y63g4g7l1-wpengine.netdna-ssl.com/wp-content/uploads/2013/06/pdt1-600x600.jpg 600w, https://rnzxu3lrgrj1046y63g4g7l1-wpengine.netdna-ssl.com/wp-content/uploads/2013/06/pdt1-150x150.jpg 150w, https://rnzxu3lrgrj1046y63g4g7l1-wpengine.netdna-ssl.com/wp-content/uploads/2013/06/pdt1-300x300.jpg 300w, https://rnzxu3lrgrj1046y63g4g7l1-wpengine.netdna-ssl.com/wp-content/uploads/2013/06/pdt1-768x768.jpg 768w, https://rnzxu3lrgrj1046y63g4g7l1-wpengine.netdna-ssl.com/wp-content/uploads/2013/06/pdt1-750x750.jpg 750w, https://rnzxu3lrgrj1046y63g4g7l1-wpengine.netdna-ssl.com/wp-content/uploads/2013/06/pdt1-540x540.jpg 540w, https://rnzxu3lrgrj1046y63g4g7l1-wpengine.netdna-ssl.com/wp-content/uploads/2013/06/pdt1-100x100.jpg 100w, https://rnzxu3lrgrj1046y63g4g7l1-wpengine.netdna-ssl.com/wp-content/uploads/2013/06/pdt1.jpg 1000w"
                                                                                    sizes="(max-width: 600px) 100vw, 600px" /></a>
                                                                            <div class="product-buttons-wrapper">
                                                                                <div class="wc_inline_buttons">
                                                                                    <div
                                                                                        class="wc_cart_btn_wrapper wc_btn_inline">
                                                                                        <a href="?add-to-cart=8885"
                                                                                            data-quantity="1"
                                                                                            class="dt-sc-button too-small button product_type_simple add_to_cart_button ajax_add_to_cart"
                                                                                            data-product_id="8885"
                                                                                            data-product_sku=""
                                                                                            aria-label="Add &ldquo;Filet De Saumon&rdquo; to your cart"
                                                                                            rel="nofollow">Add to
                                                                                            cart</a></div>
                                                                                    <div
                                                                                        class="wcwl_btn_wrapper wc_btn_inline">
                                                                                        <div class="yith-wcwl-add-to-wishlist add-to-wishlist-8885  wishlist-fragment on-first-load"
                                                                                            data-fragment-ref="8885"
                                                                                            data-fragment-options="{&quot;base_url&quot;:&quot;&quot;,&quot;in_default_wishlist&quot;:false,&quot;is_single&quot;:false,&quot;show_exists&quot;:false,&quot;product_id&quot;:8885,&quot;parent_product_id&quot;:8885,&quot;product_type&quot;:&quot;simple&quot;,&quot;show_view&quot;:false,&quot;browse_wishlist_text&quot;:&quot;Browse Wishlist&quot;,&quot;already_in_wishslist_text&quot;:&quot;The product is already in the wishlist!&quot;,&quot;product_added_text&quot;:&quot;Product added!&quot;,&quot;heading_icon&quot;:&quot;&quot;,&quot;available_multi_wishlist&quot;:false,&quot;disable_wishlist&quot;:false,&quot;show_count&quot;:false,&quot;ajax_loading&quot;:false,&quot;loop_position&quot;:false,&quot;item&quot;:&quot;add_to_wishlist&quot;}">

                                                                                            <!-- ADD TO WISHLIST -->

                                                                                            <div
                                                                                                class="yith-wcwl-add-button">
                                                                                                <a href="?add_to_wishlist=8885"
                                                                                                    rel="nofollow"
                                                                                                    data-product-id="8885"
                                                                                                    data-product-type="simple"
                                                                                                    data-original-product-id="8885"
                                                                                                    class="add_to_wishlist single_add_to_wishlist"
                                                                                                    data-title="Add to Wishlist">
                                                                                                    <span>Add to
                                                                                                        Wishlist</span>
                                                                                                </a>
                                                                                            </div>
                                                                                            <!-- COUNT TEXT -->

                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class='product-details'>
                                                                            <h5><a
                                                                                    href="https://dtkudil.wpengine.com/product/filet-de-saumon/">Filet
                                                                                    De Saumon</a></h5><span
                                                                                class="product-price"><span
                                                                                    class="price"><span
                                                                                        class="woocommerce-Price-amount amount"><bdi><span
                                                                                                class="woocommerce-Price-currencySymbol">&pound;</span>8.95</bdi></span></span></span>
                                                                            <div class="product-rating-wrapper">
                                                                                <div class="star-rating" role="img"
                                                                                    aria-label="Rated 5.00 out of 5">
                                                                                    <span style="width:100%">Rated
                                                                                        <strong
                                                                                            class="rating">5.00</strong>
                                                                                        out of 5</span></div>
                                                                            </div>
                                                                        </div>
                                                                    </div> <!-- .product-wrapper -->
                                                                </div> <!-- .column -->
                                                            </div> <!-- .style -->
                                                        </li>
                                                        <li
                                                            class="product type-product post-8886 status-publish last instock product_cat-breakfast has-post-thumbnail shipping-taxable purchasable product-type-simple">
                                                            <div class="woo-type11">
                                                                <div class="column dt-sc-one-third">
                                                                    <div class="product-wrapper">
                                                                        <div class='product-thumb'><a class="image"
                                                                                href="https://dtkudil.wpengine.com/product/supreme-nachos/"
                                                                                title="Supreme Nachos"><img width="600"
                                                                                    height="600"
                                                                                    src="https://rnzxu3lrgrj1046y63g4g7l1-wpengine.netdna-ssl.com/wp-content/uploads/2013/06/pdt1-600x600.jpg"
                                                                                    class="attachment-shop_catalog size-shop_catalog wp-post-image"
                                                                                    alt="" loading="lazy"
                                                                                    srcset="https://rnzxu3lrgrj1046y63g4g7l1-wpengine.netdna-ssl.com/wp-content/uploads/2013/06/pdt1-600x600.jpg 600w, https://rnzxu3lrgrj1046y63g4g7l1-wpengine.netdna-ssl.com/wp-content/uploads/2013/06/pdt1-150x150.jpg 150w, https://rnzxu3lrgrj1046y63g4g7l1-wpengine.netdna-ssl.com/wp-content/uploads/2013/06/pdt1-300x300.jpg 300w, https://rnzxu3lrgrj1046y63g4g7l1-wpengine.netdna-ssl.com/wp-content/uploads/2013/06/pdt1-768x768.jpg 768w, https://rnzxu3lrgrj1046y63g4g7l1-wpengine.netdna-ssl.com/wp-content/uploads/2013/06/pdt1-750x750.jpg 750w, https://rnzxu3lrgrj1046y63g4g7l1-wpengine.netdna-ssl.com/wp-content/uploads/2013/06/pdt1-540x540.jpg 540w, https://rnzxu3lrgrj1046y63g4g7l1-wpengine.netdna-ssl.com/wp-content/uploads/2013/06/pdt1-100x100.jpg 100w, https://rnzxu3lrgrj1046y63g4g7l1-wpengine.netdna-ssl.com/wp-content/uploads/2013/06/pdt1.jpg 1000w"
                                                                                    sizes="(max-width: 600px) 100vw, 600px" /><img
                                                                                    width="600" height="600"
                                                                                    src="https://rnzxu3lrgrj1046y63g4g7l1-wpengine.netdna-ssl.com/wp-content/uploads/2013/06/pdt1-600x600.jpg"
                                                                                    class="secondary-image attachment-shop-catalog"
                                                                                    alt="" loading="lazy"
                                                                                    srcset="https://rnzxu3lrgrj1046y63g4g7l1-wpengine.netdna-ssl.com/wp-content/uploads/2013/06/pdt1-600x600.jpg 600w, https://rnzxu3lrgrj1046y63g4g7l1-wpengine.netdna-ssl.com/wp-content/uploads/2013/06/pdt1-150x150.jpg 150w, https://rnzxu3lrgrj1046y63g4g7l1-wpengine.netdna-ssl.com/wp-content/uploads/2013/06/pdt1-300x300.jpg 300w, https://rnzxu3lrgrj1046y63g4g7l1-wpengine.netdna-ssl.com/wp-content/uploads/2013/06/pdt1-768x768.jpg 768w, https://rnzxu3lrgrj1046y63g4g7l1-wpengine.netdna-ssl.com/wp-content/uploads/2013/06/pdt1-750x750.jpg 750w, https://rnzxu3lrgrj1046y63g4g7l1-wpengine.netdna-ssl.com/wp-content/uploads/2013/06/pdt1-540x540.jpg 540w, https://rnzxu3lrgrj1046y63g4g7l1-wpengine.netdna-ssl.com/wp-content/uploads/2013/06/pdt1-100x100.jpg 100w, https://rnzxu3lrgrj1046y63g4g7l1-wpengine.netdna-ssl.com/wp-content/uploads/2013/06/pdt1.jpg 1000w"
                                                                                    sizes="(max-width: 600px) 100vw, 600px" /></a>
                                                                            <div class="product-buttons-wrapper">
                                                                                <div class="wc_inline_buttons">
                                                                                    <div
                                                                                        class="wc_cart_btn_wrapper wc_btn_inline">
                                                                                        <a href="?add-to-cart=8886"
                                                                                            data-quantity="1"
                                                                                            class="dt-sc-button too-small button product_type_simple add_to_cart_button ajax_add_to_cart"
                                                                                            data-product_id="8886"
                                                                                            data-product_sku=""
                                                                                            aria-label="Add &ldquo;Supreme Nachos&rdquo; to your cart"
                                                                                            rel="nofollow">Add to
                                                                                            cart</a></div>
                                                                                    <div
                                                                                        class="wcwl_btn_wrapper wc_btn_inline">
                                                                                        <div class="yith-wcwl-add-to-wishlist add-to-wishlist-8886  wishlist-fragment on-first-load"
                                                                                            data-fragment-ref="8886"
                                                                                            data-fragment-options="{&quot;base_url&quot;:&quot;&quot;,&quot;in_default_wishlist&quot;:false,&quot;is_single&quot;:false,&quot;show_exists&quot;:false,&quot;product_id&quot;:8886,&quot;parent_product_id&quot;:8886,&quot;product_type&quot;:&quot;simple&quot;,&quot;show_view&quot;:false,&quot;browse_wishlist_text&quot;:&quot;Browse Wishlist&quot;,&quot;already_in_wishslist_text&quot;:&quot;The product is already in the wishlist!&quot;,&quot;product_added_text&quot;:&quot;Product added!&quot;,&quot;heading_icon&quot;:&quot;&quot;,&quot;available_multi_wishlist&quot;:false,&quot;disable_wishlist&quot;:false,&quot;show_count&quot;:false,&quot;ajax_loading&quot;:false,&quot;loop_position&quot;:false,&quot;item&quot;:&quot;add_to_wishlist&quot;}">

                                                                                            <!-- ADD TO WISHLIST -->

                                                                                            <div
                                                                                                class="yith-wcwl-add-button">
                                                                                                <a href="?add_to_wishlist=8886"
                                                                                                    rel="nofollow"
                                                                                                    data-product-id="8886"
                                                                                                    data-product-type="simple"
                                                                                                    data-original-product-id="8886"
                                                                                                    class="add_to_wishlist single_add_to_wishlist"
                                                                                                    data-title="Add to Wishlist">
                                                                                                    <span>Add to
                                                                                                        Wishlist</span>
                                                                                                </a>
                                                                                            </div>
                                                                                            <!-- COUNT TEXT -->

                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class='product-details'>
                                                                            <h5><a
                                                                                    href="https://dtkudil.wpengine.com/product/supreme-nachos/">Supreme
                                                                                    Nachos</a></h5><span
                                                                                class="product-price"><span
                                                                                    class="price"><span
                                                                                        class="woocommerce-Price-amount amount"><bdi><span
                                                                                                class="woocommerce-Price-currencySymbol">&pound;</span>14.95</bdi></span></span></span>
                                                                            <div class="product-rating-wrapper">
                                                                                <div class="star-rating" role="img"
                                                                                    aria-label="Rated 4.50 out of 5">
                                                                                    <span style="width:90%">Rated
                                                                                        <strong
                                                                                            class="rating">4.50</strong>
                                                                                        out of 5</span></div>
                                                                            </div>
                                                                        </div>
                                                                    </div> <!-- .product-wrapper -->
                                                                </div> <!-- .column -->
                                                            </div> <!-- .style -->
                                                        </li>
                                                        <li
                                                            class="product type-product post-8881 status-publish first instock product_cat-breakfast has-post-thumbnail downloadable shipping-taxable purchasable product-type-simple">
                                                            <div class="woo-type11">
                                                                <div class="column dt-sc-one-third">
                                                                    <div class="product-wrapper">
                                                                        <div class='product-thumb'><a class="image"
                                                                                href="https://dtkudil.wpengine.com/product/woo-album-1/"
                                                                                title="Woo Album #1"><img width="600"
                                                                                    height="600"
                                                                                    src="https://rnzxu3lrgrj1046y63g4g7l1-wpengine.netdna-ssl.com/wp-content/uploads/2013/06/pdt6-600x600.jpg"
                                                                                    class="attachment-shop_catalog size-shop_catalog wp-post-image"
                                                                                    alt="" loading="lazy"
                                                                                    srcset="https://rnzxu3lrgrj1046y63g4g7l1-wpengine.netdna-ssl.com/wp-content/uploads/2013/06/pdt6-600x600.jpg 600w, https://rnzxu3lrgrj1046y63g4g7l1-wpengine.netdna-ssl.com/wp-content/uploads/2013/06/pdt6-150x150.jpg 150w, https://rnzxu3lrgrj1046y63g4g7l1-wpengine.netdna-ssl.com/wp-content/uploads/2013/06/pdt6-300x300.jpg 300w, https://rnzxu3lrgrj1046y63g4g7l1-wpengine.netdna-ssl.com/wp-content/uploads/2013/06/pdt6-768x768.jpg 768w, https://rnzxu3lrgrj1046y63g4g7l1-wpengine.netdna-ssl.com/wp-content/uploads/2013/06/pdt6-750x750.jpg 750w, https://rnzxu3lrgrj1046y63g4g7l1-wpengine.netdna-ssl.com/wp-content/uploads/2013/06/pdt6-540x540.jpg 540w, https://rnzxu3lrgrj1046y63g4g7l1-wpengine.netdna-ssl.com/wp-content/uploads/2013/06/pdt6-100x100.jpg 100w, https://rnzxu3lrgrj1046y63g4g7l1-wpengine.netdna-ssl.com/wp-content/uploads/2013/06/pdt6.jpg 1000w"
                                                                                    sizes="(max-width: 600px) 100vw, 600px" /><img
                                                                                    width="600" height="600"
                                                                                    src="https://rnzxu3lrgrj1046y63g4g7l1-wpengine.netdna-ssl.com/wp-content/uploads/2013/06/pdt5-600x600.jpg"
                                                                                    class="secondary-image attachment-shop-catalog"
                                                                                    alt="" loading="lazy"
                                                                                    srcset="https://rnzxu3lrgrj1046y63g4g7l1-wpengine.netdna-ssl.com/wp-content/uploads/2013/06/pdt5-600x600.jpg 600w, https://rnzxu3lrgrj1046y63g4g7l1-wpengine.netdna-ssl.com/wp-content/uploads/2013/06/pdt5-150x150.jpg 150w, https://rnzxu3lrgrj1046y63g4g7l1-wpengine.netdna-ssl.com/wp-content/uploads/2013/06/pdt5-300x300.jpg 300w, https://rnzxu3lrgrj1046y63g4g7l1-wpengine.netdna-ssl.com/wp-content/uploads/2013/06/pdt5-768x768.jpg 768w, https://rnzxu3lrgrj1046y63g4g7l1-wpengine.netdna-ssl.com/wp-content/uploads/2013/06/pdt5-750x750.jpg 750w, https://rnzxu3lrgrj1046y63g4g7l1-wpengine.netdna-ssl.com/wp-content/uploads/2013/06/pdt5-540x540.jpg 540w, https://rnzxu3lrgrj1046y63g4g7l1-wpengine.netdna-ssl.com/wp-content/uploads/2013/06/pdt5-100x100.jpg 100w, https://rnzxu3lrgrj1046y63g4g7l1-wpengine.netdna-ssl.com/wp-content/uploads/2013/06/pdt5.jpg 1000w"
                                                                                    sizes="(max-width: 600px) 100vw, 600px" /></a>
                                                                            <div class="product-buttons-wrapper">
                                                                                <div class="wc_inline_buttons">
                                                                                    <div
                                                                                        class="wc_cart_btn_wrapper wc_btn_inline">
                                                                                        <a href="?add-to-cart=8881"
                                                                                            data-quantity="1"
                                                                                            class="dt-sc-button too-small button product_type_simple add_to_cart_button ajax_add_to_cart"
                                                                                            data-product_id="8881"
                                                                                            data-product_sku=""
                                                                                            aria-label="Add &ldquo;Woo Album #1&rdquo; to your cart"
                                                                                            rel="nofollow">Add to
                                                                                            cart</a></div>
                                                                                    <div
                                                                                        class="wcwl_btn_wrapper wc_btn_inline">
                                                                                        <div class="yith-wcwl-add-to-wishlist add-to-wishlist-8881  wishlist-fragment on-first-load"
                                                                                            data-fragment-ref="8881"
                                                                                            data-fragment-options="{&quot;base_url&quot;:&quot;&quot;,&quot;in_default_wishlist&quot;:false,&quot;is_single&quot;:false,&quot;show_exists&quot;:false,&quot;product_id&quot;:8881,&quot;parent_product_id&quot;:8881,&quot;product_type&quot;:&quot;simple&quot;,&quot;show_view&quot;:false,&quot;browse_wishlist_text&quot;:&quot;Browse Wishlist&quot;,&quot;already_in_wishslist_text&quot;:&quot;The product is already in the wishlist!&quot;,&quot;product_added_text&quot;:&quot;Product added!&quot;,&quot;heading_icon&quot;:&quot;&quot;,&quot;available_multi_wishlist&quot;:false,&quot;disable_wishlist&quot;:false,&quot;show_count&quot;:false,&quot;ajax_loading&quot;:false,&quot;loop_position&quot;:false,&quot;item&quot;:&quot;add_to_wishlist&quot;}">

                                                                                            <!-- ADD TO WISHLIST -->

                                                                                            <div
                                                                                                class="yith-wcwl-add-button">
                                                                                                <a href="?add_to_wishlist=8881"
                                                                                                    rel="nofollow"
                                                                                                    data-product-id="8881"
                                                                                                    data-product-type="simple"
                                                                                                    data-original-product-id="8881"
                                                                                                    class="add_to_wishlist single_add_to_wishlist"
                                                                                                    data-title="Add to Wishlist">
                                                                                                    <span>Add to
                                                                                                        Wishlist</span>
                                                                                                </a>
                                                                                            </div>
                                                                                            <!-- COUNT TEXT -->

                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class='product-details'>
                                                                            <h5><a
                                                                                    href="https://dtkudil.wpengine.com/product/woo-album-1/">Woo
                                                                                    Album #1</a></h5><span
                                                                                class="product-price"><span
                                                                                    class="price"><span
                                                                                        class="woocommerce-Price-amount amount"><bdi><span
                                                                                                class="woocommerce-Price-currencySymbol">&pound;</span>9.00</bdi></span></span></span>
                                                                            <div class="product-rating-wrapper"></div>
                                                                        </div>
                                                                    </div> <!-- .product-wrapper -->
                                                                </div> <!-- .column -->
                                                            </div> <!-- .style -->
                                                        </li>
                                                        <li
                                                            class="product type-product post-8882 status-publish instock product_cat-breakfast has-post-thumbnail downloadable shipping-taxable purchasable product-type-simple">
                                                            <div class="woo-type11">
                                                                <div class="column dt-sc-one-third">
                                                                    <div class="product-wrapper">
                                                                        <div class='product-thumb'><a class="image"
                                                                                href="https://dtkudil.wpengine.com/product/woo-album-2/"
                                                                                title="Woo Album #2"><img width="600"
                                                                                    height="600"
                                                                                    src="https://rnzxu3lrgrj1046y63g4g7l1-wpengine.netdna-ssl.com/wp-content/uploads/2013/06/pdt5-600x600.jpg"
                                                                                    class="attachment-shop_catalog size-shop_catalog wp-post-image"
                                                                                    alt="" loading="lazy"
                                                                                    srcset="https://rnzxu3lrgrj1046y63g4g7l1-wpengine.netdna-ssl.com/wp-content/uploads/2013/06/pdt5-600x600.jpg 600w, https://rnzxu3lrgrj1046y63g4g7l1-wpengine.netdna-ssl.com/wp-content/uploads/2013/06/pdt5-150x150.jpg 150w, https://rnzxu3lrgrj1046y63g4g7l1-wpengine.netdna-ssl.com/wp-content/uploads/2013/06/pdt5-300x300.jpg 300w, https://rnzxu3lrgrj1046y63g4g7l1-wpengine.netdna-ssl.com/wp-content/uploads/2013/06/pdt5-768x768.jpg 768w, https://rnzxu3lrgrj1046y63g4g7l1-wpengine.netdna-ssl.com/wp-content/uploads/2013/06/pdt5-750x750.jpg 750w, https://rnzxu3lrgrj1046y63g4g7l1-wpengine.netdna-ssl.com/wp-content/uploads/2013/06/pdt5-540x540.jpg 540w, https://rnzxu3lrgrj1046y63g4g7l1-wpengine.netdna-ssl.com/wp-content/uploads/2013/06/pdt5-100x100.jpg 100w, https://rnzxu3lrgrj1046y63g4g7l1-wpengine.netdna-ssl.com/wp-content/uploads/2013/06/pdt5.jpg 1000w"
                                                                                    sizes="(max-width: 600px) 100vw, 600px" /><img
                                                                                    width="600" height="600"
                                                                                    src="https://rnzxu3lrgrj1046y63g4g7l1-wpengine.netdna-ssl.com/wp-content/uploads/2013/06/pdt4-600x600.jpg"
                                                                                    class="secondary-image attachment-shop-catalog"
                                                                                    alt="" loading="lazy"
                                                                                    srcset="https://rnzxu3lrgrj1046y63g4g7l1-wpengine.netdna-ssl.com/wp-content/uploads/2013/06/pdt4-600x600.jpg 600w, https://rnzxu3lrgrj1046y63g4g7l1-wpengine.netdna-ssl.com/wp-content/uploads/2013/06/pdt4-150x150.jpg 150w, https://rnzxu3lrgrj1046y63g4g7l1-wpengine.netdna-ssl.com/wp-content/uploads/2013/06/pdt4-300x300.jpg 300w, https://rnzxu3lrgrj1046y63g4g7l1-wpengine.netdna-ssl.com/wp-content/uploads/2013/06/pdt4-768x768.jpg 768w, https://rnzxu3lrgrj1046y63g4g7l1-wpengine.netdna-ssl.com/wp-content/uploads/2013/06/pdt4-750x750.jpg 750w, https://rnzxu3lrgrj1046y63g4g7l1-wpengine.netdna-ssl.com/wp-content/uploads/2013/06/pdt4-540x540.jpg 540w, https://rnzxu3lrgrj1046y63g4g7l1-wpengine.netdna-ssl.com/wp-content/uploads/2013/06/pdt4-100x100.jpg 100w, https://rnzxu3lrgrj1046y63g4g7l1-wpengine.netdna-ssl.com/wp-content/uploads/2013/06/pdt4.jpg 1000w"
                                                                                    sizes="(max-width: 600px) 100vw, 600px" /></a>
                                                                            <div class="product-buttons-wrapper">
                                                                                <div class="wc_inline_buttons">
                                                                                    <div
                                                                                        class="wc_cart_btn_wrapper wc_btn_inline">
                                                                                        <a href="?add-to-cart=8882"
                                                                                            data-quantity="1"
                                                                                            class="dt-sc-button too-small button product_type_simple add_to_cart_button ajax_add_to_cart"
                                                                                            data-product_id="8882"
                                                                                            data-product_sku=""
                                                                                            aria-label="Add &ldquo;Woo Album #2&rdquo; to your cart"
                                                                                            rel="nofollow">Add to
                                                                                            cart</a></div>
                                                                                    <div
                                                                                        class="wcwl_btn_wrapper wc_btn_inline">
                                                                                        <div class="yith-wcwl-add-to-wishlist add-to-wishlist-8882  wishlist-fragment on-first-load"
                                                                                            data-fragment-ref="8882"
                                                                                            data-fragment-options="{&quot;base_url&quot;:&quot;&quot;,&quot;in_default_wishlist&quot;:false,&quot;is_single&quot;:false,&quot;show_exists&quot;:false,&quot;product_id&quot;:8882,&quot;parent_product_id&quot;:8882,&quot;product_type&quot;:&quot;simple&quot;,&quot;show_view&quot;:false,&quot;browse_wishlist_text&quot;:&quot;Browse Wishlist&quot;,&quot;already_in_wishslist_text&quot;:&quot;The product is already in the wishlist!&quot;,&quot;product_added_text&quot;:&quot;Product added!&quot;,&quot;heading_icon&quot;:&quot;&quot;,&quot;available_multi_wishlist&quot;:false,&quot;disable_wishlist&quot;:false,&quot;show_count&quot;:false,&quot;ajax_loading&quot;:false,&quot;loop_position&quot;:false,&quot;item&quot;:&quot;add_to_wishlist&quot;}">

                                                                                            <!-- ADD TO WISHLIST -->

                                                                                            <div
                                                                                                class="yith-wcwl-add-button">
                                                                                                <a href="?add_to_wishlist=8882"
                                                                                                    rel="nofollow"
                                                                                                    data-product-id="8882"
                                                                                                    data-product-type="simple"
                                                                                                    data-original-product-id="8882"
                                                                                                    class="add_to_wishlist single_add_to_wishlist"
                                                                                                    data-title="Add to Wishlist">
                                                                                                    <span>Add to
                                                                                                        Wishlist</span>
                                                                                                </a>
                                                                                            </div>
                                                                                            <!-- COUNT TEXT -->

                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class='product-details'>
                                                                            <h5><a
                                                                                    href="https://dtkudil.wpengine.com/product/woo-album-2/">Woo
                                                                                    Album #2</a></h5><span
                                                                                class="product-price"><span
                                                                                    class="price"><span
                                                                                        class="woocommerce-Price-amount amount"><bdi><span
                                                                                                class="woocommerce-Price-currencySymbol">&pound;</span>9.00</bdi></span></span></span>
                                                                            <div class="product-rating-wrapper">
                                                                                <div class="star-rating" role="img"
                                                                                    aria-label="Rated 4.00 out of 5">
                                                                                    <span style="width:80%">Rated
                                                                                        <strong
                                                                                            class="rating">4.00</strong>
                                                                                        out of 5</span></div>
                                                                            </div>
                                                                        </div>
                                                                    </div> <!-- .product-wrapper -->
                                                                </div> <!-- .column -->
                                                            </div> <!-- .style -->
                                                        </li>
                                                        <li
                                                            class="product type-product post-8883 status-publish last instock product_cat-breakfast has-post-thumbnail downloadable shipping-taxable purchasable product-type-simple">
                                                            <div class="woo-type11">
                                                                <div class="column dt-sc-one-third">
                                                                    <div class="product-wrapper">
                                                                        <div class='product-thumb'><a class="image"
                                                                                href="https://dtkudil.wpengine.com/product/woo-album-3/"
                                                                                title="Woo Album #3"><img width="600"
                                                                                    height="600"
                                                                                    src="https://rnzxu3lrgrj1046y63g4g7l1-wpengine.netdna-ssl.com/wp-content/uploads/2013/06/pdt4-600x600.jpg"
                                                                                    class="attachment-shop_catalog size-shop_catalog wp-post-image"
                                                                                    alt="" loading="lazy"
                                                                                    srcset="https://rnzxu3lrgrj1046y63g4g7l1-wpengine.netdna-ssl.com/wp-content/uploads/2013/06/pdt4-600x600.jpg 600w, https://rnzxu3lrgrj1046y63g4g7l1-wpengine.netdna-ssl.com/wp-content/uploads/2013/06/pdt4-150x150.jpg 150w, https://rnzxu3lrgrj1046y63g4g7l1-wpengine.netdna-ssl.com/wp-content/uploads/2013/06/pdt4-300x300.jpg 300w, https://rnzxu3lrgrj1046y63g4g7l1-wpengine.netdna-ssl.com/wp-content/uploads/2013/06/pdt4-768x768.jpg 768w, https://rnzxu3lrgrj1046y63g4g7l1-wpengine.netdna-ssl.com/wp-content/uploads/2013/06/pdt4-750x750.jpg 750w, https://rnzxu3lrgrj1046y63g4g7l1-wpengine.netdna-ssl.com/wp-content/uploads/2013/06/pdt4-540x540.jpg 540w, https://rnzxu3lrgrj1046y63g4g7l1-wpengine.netdna-ssl.com/wp-content/uploads/2013/06/pdt4-100x100.jpg 100w, https://rnzxu3lrgrj1046y63g4g7l1-wpengine.netdna-ssl.com/wp-content/uploads/2013/06/pdt4.jpg 1000w"
                                                                                    sizes="(max-width: 600px) 100vw, 600px" /><img
                                                                                    width="600" height="600"
                                                                                    src="https://rnzxu3lrgrj1046y63g4g7l1-wpengine.netdna-ssl.com/wp-content/uploads/2013/06/pdt7-600x600.jpg"
                                                                                    class="secondary-image attachment-shop-catalog"
                                                                                    alt="" loading="lazy"
                                                                                    srcset="https://rnzxu3lrgrj1046y63g4g7l1-wpengine.netdna-ssl.com/wp-content/uploads/2013/06/pdt7-600x600.jpg 600w, https://rnzxu3lrgrj1046y63g4g7l1-wpengine.netdna-ssl.com/wp-content/uploads/2013/06/pdt7-150x150.jpg 150w, https://rnzxu3lrgrj1046y63g4g7l1-wpengine.netdna-ssl.com/wp-content/uploads/2013/06/pdt7-300x300.jpg 300w, https://rnzxu3lrgrj1046y63g4g7l1-wpengine.netdna-ssl.com/wp-content/uploads/2013/06/pdt7-768x768.jpg 768w, https://rnzxu3lrgrj1046y63g4g7l1-wpengine.netdna-ssl.com/wp-content/uploads/2013/06/pdt7-750x750.jpg 750w, https://rnzxu3lrgrj1046y63g4g7l1-wpengine.netdna-ssl.com/wp-content/uploads/2013/06/pdt7-540x540.jpg 540w, https://rnzxu3lrgrj1046y63g4g7l1-wpengine.netdna-ssl.com/wp-content/uploads/2013/06/pdt7-100x100.jpg 100w, https://rnzxu3lrgrj1046y63g4g7l1-wpengine.netdna-ssl.com/wp-content/uploads/2013/06/pdt7.jpg 1000w"
                                                                                    sizes="(max-width: 600px) 100vw, 600px" /></a>
                                                                            <div class="product-buttons-wrapper">
                                                                                <div class="wc_inline_buttons">
                                                                                    <div
                                                                                        class="wc_cart_btn_wrapper wc_btn_inline">
                                                                                        <a href="?add-to-cart=8883"
                                                                                            data-quantity="1"
                                                                                            class="dt-sc-button too-small button product_type_simple add_to_cart_button ajax_add_to_cart"
                                                                                            data-product_id="8883"
                                                                                            data-product_sku=""
                                                                                            aria-label="Add &ldquo;Woo Album #3&rdquo; to your cart"
                                                                                            rel="nofollow">Add to
                                                                                            cart</a></div>
                                                                                    <div
                                                                                        class="wcwl_btn_wrapper wc_btn_inline">
                                                                                        <div class="yith-wcwl-add-to-wishlist add-to-wishlist-8883  wishlist-fragment on-first-load"
                                                                                            data-fragment-ref="8883"
                                                                                            data-fragment-options="{&quot;base_url&quot;:&quot;&quot;,&quot;in_default_wishlist&quot;:false,&quot;is_single&quot;:false,&quot;show_exists&quot;:false,&quot;product_id&quot;:8883,&quot;parent_product_id&quot;:8883,&quot;product_type&quot;:&quot;simple&quot;,&quot;show_view&quot;:false,&quot;browse_wishlist_text&quot;:&quot;Browse Wishlist&quot;,&quot;already_in_wishslist_text&quot;:&quot;The product is already in the wishlist!&quot;,&quot;product_added_text&quot;:&quot;Product added!&quot;,&quot;heading_icon&quot;:&quot;&quot;,&quot;available_multi_wishlist&quot;:false,&quot;disable_wishlist&quot;:false,&quot;show_count&quot;:false,&quot;ajax_loading&quot;:false,&quot;loop_position&quot;:false,&quot;item&quot;:&quot;add_to_wishlist&quot;}">

                                                                                            <!-- ADD TO WISHLIST -->

                                                                                            <div
                                                                                                class="yith-wcwl-add-button">
                                                                                                <a href="?add_to_wishlist=8883"
                                                                                                    rel="nofollow"
                                                                                                    data-product-id="8883"
                                                                                                    data-product-type="simple"
                                                                                                    data-original-product-id="8883"
                                                                                                    class="add_to_wishlist single_add_to_wishlist"
                                                                                                    data-title="Add to Wishlist">
                                                                                                    <span>Add to
                                                                                                        Wishlist</span>
                                                                                                </a>
                                                                                            </div>
                                                                                            <!-- COUNT TEXT -->

                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class='product-details'>
                                                                            <h5><a
                                                                                    href="https://dtkudil.wpengine.com/product/woo-album-3/">Woo
                                                                                    Album #3</a></h5><span
                                                                                class="product-price"><span
                                                                                    class="price"><span
                                                                                        class="woocommerce-Price-amount amount"><bdi><span
                                                                                                class="woocommerce-Price-currencySymbol">&pound;</span>10.95</bdi></span></span></span>
                                                                            <div class="product-rating-wrapper">
                                                                                <div class="star-rating" role="img"
                                                                                    aria-label="Rated 3.00 out of 5">
                                                                                    <span style="width:60%">Rated
                                                                                        <strong
                                                                                            class="rating">3.00</strong>
                                                                                        out of 5</span></div>
                                                                            </div>
                                                                        </div>
                                                                    </div> <!-- .product-wrapper -->
                                                                </div> <!-- .column -->
                                                            </div> <!-- .style -->
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div id="1524302981202-ee979275-17d5" class="dt-sc-empty-space"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                            <div data-vc-full-width="true" data-vc-full-width-init="false"
                                class="vc_row wpb_row vc_row-fluid dt-sc-dark-bg vc_custom_1628238835709 vc_row-has-fill">
                                <div class="wpb_column vc_column_container vc_col-sm-12">
                                    <div class="vc_column-inner " style=" text-align:center; ">
                                        <div class="wpb_wrapper">
                                            <div id="1523865091863-22bcea49-a84b" class="dt-sc-empty-space"></div>
                                            <div class='dt-sc-title script-with-sub-title '>
                                                <h3>Prepared On Site With</h3>
                                                <h4>Natural Ingredients</h4>
                                            </div>
                                            <div id="1523865091959-7c03b318-c4ba" class="dt-sc-empty-space"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="vc_row-full-width vc_clearfix"></div>
                            <section class="vc_section dt_data_bully">
                                <div class="vc_row wpb_row vc_row-fluid">
                                    <div class="wpb_column vc_column_container vc_col-sm-12">
                                        <div class="vc_column-inner ">
                                            <div class="wpb_wrapper">
                                                <div id="1524303087103-fe772352-bcc5" class="dt-sc-empty-space"></div>
                                                <div class="vc_row wpb_row vc_inner vc_row-fluid">
                                                    <div class="wpb_column vc_column_container vc_col-sm-12"
                                                        style=" text-align:center; ">
                                                        <div class="vc_column-inner ">
                                                            <div class="wpb_wrapper">
                                                                <h3 class="dt-sc-menu-title">Lunch</h3>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div id="1524299624771-39116e3c-dae7" class="dt-sc-empty-space"></div>
                                                <div class="woocommerce columns-3 ">
                                                    <ul class="products columns-3">
                                                        <li
                                                            class="product type-product post-8875 status-publish first instock product_cat-drinks product_cat-lunch has-post-thumbnail shipping-taxable purchasable product-type-simple">
                                                            <div class="woo-type11">
                                                                <div class="column dt-sc-one-third">
                                                                    <div class="product-wrapper">
                                                                        <div class='product-thumb'><a class="image"
                                                                                href="https://dtkudil.wpengine.com/product/chapel-down/"
                                                                                title="Chapel Down"><img width="600"
                                                                                    height="600"
                                                                                    src="https://rnzxu3lrgrj1046y63g4g7l1-wpengine.netdna-ssl.com/wp-content/uploads/2013/06/shop-5-600x600.jpg"
                                                                                    class="attachment-shop_catalog size-shop_catalog wp-post-image"
                                                                                    alt="" loading="lazy"
                                                                                    srcset="https://rnzxu3lrgrj1046y63g4g7l1-wpengine.netdna-ssl.com/wp-content/uploads/2013/06/shop-5-600x600.jpg 600w, https://rnzxu3lrgrj1046y63g4g7l1-wpengine.netdna-ssl.com/wp-content/uploads/2013/06/shop-5-150x150.jpg 150w, https://rnzxu3lrgrj1046y63g4g7l1-wpengine.netdna-ssl.com/wp-content/uploads/2013/06/shop-5-300x300.jpg 300w, https://rnzxu3lrgrj1046y63g4g7l1-wpengine.netdna-ssl.com/wp-content/uploads/2013/06/shop-5-768x768.jpg 768w, https://rnzxu3lrgrj1046y63g4g7l1-wpengine.netdna-ssl.com/wp-content/uploads/2013/06/shop-5-750x750.jpg 750w, https://rnzxu3lrgrj1046y63g4g7l1-wpengine.netdna-ssl.com/wp-content/uploads/2013/06/shop-5-540x540.jpg 540w, https://rnzxu3lrgrj1046y63g4g7l1-wpengine.netdna-ssl.com/wp-content/uploads/2013/06/shop-5-100x100.jpg 100w, https://rnzxu3lrgrj1046y63g4g7l1-wpengine.netdna-ssl.com/wp-content/uploads/2013/06/shop-5.jpg 1000w"
                                                                                    sizes="(max-width: 600px) 100vw, 600px" /><img
                                                                                    width="600" height="600"
                                                                                    src="https://rnzxu3lrgrj1046y63g4g7l1-wpengine.netdna-ssl.com/wp-content/uploads/2013/06/shop-2-600x600.jpg"
                                                                                    class="secondary-image attachment-shop-catalog"
                                                                                    alt="" loading="lazy"
                                                                                    srcset="https://rnzxu3lrgrj1046y63g4g7l1-wpengine.netdna-ssl.com/wp-content/uploads/2013/06/shop-2-600x600.jpg 600w, https://rnzxu3lrgrj1046y63g4g7l1-wpengine.netdna-ssl.com/wp-content/uploads/2013/06/shop-2-150x150.jpg 150w, https://rnzxu3lrgrj1046y63g4g7l1-wpengine.netdna-ssl.com/wp-content/uploads/2013/06/shop-2-300x300.jpg 300w, https://rnzxu3lrgrj1046y63g4g7l1-wpengine.netdna-ssl.com/wp-content/uploads/2013/06/shop-2-768x768.jpg 768w, https://rnzxu3lrgrj1046y63g4g7l1-wpengine.netdna-ssl.com/wp-content/uploads/2013/06/shop-2-750x750.jpg 750w, https://rnzxu3lrgrj1046y63g4g7l1-wpengine.netdna-ssl.com/wp-content/uploads/2013/06/shop-2-540x540.jpg 540w, https://rnzxu3lrgrj1046y63g4g7l1-wpengine.netdna-ssl.com/wp-content/uploads/2013/06/shop-2-100x100.jpg 100w, https://rnzxu3lrgrj1046y63g4g7l1-wpengine.netdna-ssl.com/wp-content/uploads/2013/06/shop-2.jpg 1000w"
                                                                                    sizes="(max-width: 600px) 100vw, 600px" /></a>
                                                                            <div class="product-buttons-wrapper">
                                                                                <div class="wc_inline_buttons">
                                                                                    <div
                                                                                        class="wc_cart_btn_wrapper wc_btn_inline">
                                                                                        <a href="?add-to-cart=8875"
                                                                                            data-quantity="1"
                                                                                            class="dt-sc-button too-small button product_type_simple add_to_cart_button ajax_add_to_cart"
                                                                                            data-product_id="8875"
                                                                                            data-product_sku=""
                                                                                            aria-label="Add &ldquo;Chapel Down&rdquo; to your cart"
                                                                                            rel="nofollow">Add to
                                                                                            cart</a></div>
                                                                                    <div
                                                                                        class="wcwl_btn_wrapper wc_btn_inline">
                                                                                        <div class="yith-wcwl-add-to-wishlist add-to-wishlist-8875  wishlist-fragment on-first-load"
                                                                                            data-fragment-ref="8875"
                                                                                            data-fragment-options="{&quot;base_url&quot;:&quot;&quot;,&quot;in_default_wishlist&quot;:false,&quot;is_single&quot;:false,&quot;show_exists&quot;:false,&quot;product_id&quot;:8875,&quot;parent_product_id&quot;:8875,&quot;product_type&quot;:&quot;simple&quot;,&quot;show_view&quot;:false,&quot;browse_wishlist_text&quot;:&quot;Browse Wishlist&quot;,&quot;already_in_wishslist_text&quot;:&quot;The product is already in the wishlist!&quot;,&quot;product_added_text&quot;:&quot;Product added!&quot;,&quot;heading_icon&quot;:&quot;&quot;,&quot;available_multi_wishlist&quot;:false,&quot;disable_wishlist&quot;:false,&quot;show_count&quot;:false,&quot;ajax_loading&quot;:false,&quot;loop_position&quot;:false,&quot;item&quot;:&quot;add_to_wishlist&quot;}">

                                                                                            <!-- ADD TO WISHLIST -->

                                                                                            <div
                                                                                                class="yith-wcwl-add-button">
                                                                                                <a href="?add_to_wishlist=8875"
                                                                                                    rel="nofollow"
                                                                                                    data-product-id="8875"
                                                                                                    data-product-type="simple"
                                                                                                    data-original-product-id="8875"
                                                                                                    class="add_to_wishlist single_add_to_wishlist"
                                                                                                    data-title="Add to Wishlist">
                                                                                                    <span>Add to
                                                                                                        Wishlist</span>
                                                                                                </a>
                                                                                            </div>
                                                                                            <!-- COUNT TEXT -->

                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class='product-details'>
                                                                            <h5><a
                                                                                    href="https://dtkudil.wpengine.com/product/chapel-down/">Chapel
                                                                                    Down</a></h5><span
                                                                                class="product-price"><span
                                                                                    class="price"><span
                                                                                        class="woocommerce-Price-amount amount"><bdi><span
                                                                                                class="woocommerce-Price-currencySymbol">&pound;</span>14.95</bdi></span></span></span>
                                                                            <div class="product-rating-wrapper">
                                                                                <div class="star-rating" role="img"
                                                                                    aria-label="Rated 4.00 out of 5">
                                                                                    <span style="width:80%">Rated
                                                                                        <strong
                                                                                            class="rating">4.00</strong>
                                                                                        out of 5</span></div>
                                                                            </div>
                                                                        </div>
                                                                    </div> <!-- .product-wrapper -->
                                                                </div> <!-- .column -->
                                                            </div> <!-- .style -->
                                                        </li>
                                                        <li
                                                            class="product type-product post-8874 status-publish instock product_cat-drinks product_cat-lunch has-post-thumbnail shipping-taxable purchasable product-type-simple">
                                                            <div class="woo-type11">
                                                                <div class="column dt-sc-one-third">
                                                                    <div class="product-wrapper">
                                                                        <div class='product-thumb'><a class="image"
                                                                                href="https://dtkudil.wpengine.com/product/filet-de-saumon-2/"
                                                                                title="Filet De Saumon"><img width="600"
                                                                                    height="600"
                                                                                    src="https://rnzxu3lrgrj1046y63g4g7l1-wpengine.netdna-ssl.com/wp-content/uploads/2013/06/pdt13-600x600.jpg"
                                                                                    class="attachment-shop_catalog size-shop_catalog wp-post-image"
                                                                                    alt="" loading="lazy"
                                                                                    srcset="https://rnzxu3lrgrj1046y63g4g7l1-wpengine.netdna-ssl.com/wp-content/uploads/2013/06/pdt13-600x600.jpg 600w, https://rnzxu3lrgrj1046y63g4g7l1-wpengine.netdna-ssl.com/wp-content/uploads/2013/06/pdt13-150x150.jpg 150w, https://rnzxu3lrgrj1046y63g4g7l1-wpengine.netdna-ssl.com/wp-content/uploads/2013/06/pdt13-300x300.jpg 300w, https://rnzxu3lrgrj1046y63g4g7l1-wpengine.netdna-ssl.com/wp-content/uploads/2013/06/pdt13-768x768.jpg 768w, https://rnzxu3lrgrj1046y63g4g7l1-wpengine.netdna-ssl.com/wp-content/uploads/2013/06/pdt13-750x750.jpg 750w, https://rnzxu3lrgrj1046y63g4g7l1-wpengine.netdna-ssl.com/wp-content/uploads/2013/06/pdt13-540x540.jpg 540w, https://rnzxu3lrgrj1046y63g4g7l1-wpengine.netdna-ssl.com/wp-content/uploads/2013/06/pdt13-100x100.jpg 100w, https://rnzxu3lrgrj1046y63g4g7l1-wpengine.netdna-ssl.com/wp-content/uploads/2013/06/pdt13.jpg 1000w"
                                                                                    sizes="(max-width: 600px) 100vw, 600px" /><img
                                                                                    width="600" height="600"
                                                                                    src="https://rnzxu3lrgrj1046y63g4g7l1-wpengine.netdna-ssl.com/wp-content/uploads/2013/06/pdt13-600x600.jpg"
                                                                                    class="secondary-image attachment-shop-catalog"
                                                                                    alt="" loading="lazy"
                                                                                    srcset="https://rnzxu3lrgrj1046y63g4g7l1-wpengine.netdna-ssl.com/wp-content/uploads/2013/06/pdt13-600x600.jpg 600w, https://rnzxu3lrgrj1046y63g4g7l1-wpengine.netdna-ssl.com/wp-content/uploads/2013/06/pdt13-150x150.jpg 150w, https://rnzxu3lrgrj1046y63g4g7l1-wpengine.netdna-ssl.com/wp-content/uploads/2013/06/pdt13-300x300.jpg 300w, https://rnzxu3lrgrj1046y63g4g7l1-wpengine.netdna-ssl.com/wp-content/uploads/2013/06/pdt13-768x768.jpg 768w, https://rnzxu3lrgrj1046y63g4g7l1-wpengine.netdna-ssl.com/wp-content/uploads/2013/06/pdt13-750x750.jpg 750w, https://rnzxu3lrgrj1046y63g4g7l1-wpengine.netdna-ssl.com/wp-content/uploads/2013/06/pdt13-540x540.jpg 540w, https://rnzxu3lrgrj1046y63g4g7l1-wpengine.netdna-ssl.com/wp-content/uploads/2013/06/pdt13-100x100.jpg 100w, https://rnzxu3lrgrj1046y63g4g7l1-wpengine.netdna-ssl.com/wp-content/uploads/2013/06/pdt13.jpg 1000w"
                                                                                    sizes="(max-width: 600px) 100vw, 600px" /></a>
                                                                            <div class="product-buttons-wrapper">
                                                                                <div class="wc_inline_buttons">
                                                                                    <div
                                                                                        class="wc_cart_btn_wrapper wc_btn_inline">
                                                                                        <a href="?add-to-cart=8874"
                                                                                            data-quantity="1"
                                                                                            class="dt-sc-button too-small button product_type_simple add_to_cart_button ajax_add_to_cart"
                                                                                            data-product_id="8874"
                                                                                            data-product_sku=""
                                                                                            aria-label="Add &ldquo;Filet De Saumon&rdquo; to your cart"
                                                                                            rel="nofollow">Add to
                                                                                            cart</a></div>
                                                                                    <div
                                                                                        class="wcwl_btn_wrapper wc_btn_inline">
                                                                                        <div class="yith-wcwl-add-to-wishlist add-to-wishlist-8874  wishlist-fragment on-first-load"
                                                                                            data-fragment-ref="8874"
                                                                                            data-fragment-options="{&quot;base_url&quot;:&quot;&quot;,&quot;in_default_wishlist&quot;:false,&quot;is_single&quot;:false,&quot;show_exists&quot;:false,&quot;product_id&quot;:8874,&quot;parent_product_id&quot;:8874,&quot;product_type&quot;:&quot;simple&quot;,&quot;show_view&quot;:false,&quot;browse_wishlist_text&quot;:&quot;Browse Wishlist&quot;,&quot;already_in_wishslist_text&quot;:&quot;The product is already in the wishlist!&quot;,&quot;product_added_text&quot;:&quot;Product added!&quot;,&quot;heading_icon&quot;:&quot;&quot;,&quot;available_multi_wishlist&quot;:false,&quot;disable_wishlist&quot;:false,&quot;show_count&quot;:false,&quot;ajax_loading&quot;:false,&quot;loop_position&quot;:false,&quot;item&quot;:&quot;add_to_wishlist&quot;}">

                                                                                            <!-- ADD TO WISHLIST -->

                                                                                            <div
                                                                                                class="yith-wcwl-add-button">
                                                                                                <a href="?add_to_wishlist=8874"
                                                                                                    rel="nofollow"
                                                                                                    data-product-id="8874"
                                                                                                    data-product-type="simple"
                                                                                                    data-original-product-id="8874"
                                                                                                    class="add_to_wishlist single_add_to_wishlist"
                                                                                                    data-title="Add to Wishlist">
                                                                                                    <span>Add to
                                                                                                        Wishlist</span>
                                                                                                </a>
                                                                                            </div>
                                                                                            <!-- COUNT TEXT -->

                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class='product-details'>
                                                                            <h5><a
                                                                                    href="https://dtkudil.wpengine.com/product/filet-de-saumon-2/">Filet
                                                                                    De Saumon</a></h5><span
                                                                                class="product-price"><span
                                                                                    class="price"><span
                                                                                        class="woocommerce-Price-amount amount"><bdi><span
                                                                                                class="woocommerce-Price-currencySymbol">&pound;</span>8.95</bdi></span></span></span>
                                                                            <div class="product-rating-wrapper">
                                                                                <div class="star-rating" role="img"
                                                                                    aria-label="Rated 4.17 out of 5">
                                                                                    <span style="width:83.4%">Rated
                                                                                        <strong
                                                                                            class="rating">4.17</strong>
                                                                                        out of 5</span></div>
                                                                            </div>
                                                                        </div>
                                                                    </div> <!-- .product-wrapper -->
                                                                </div> <!-- .column -->
                                                            </div> <!-- .style -->
                                                        </li>
                                                        <li
                                                            class="product type-product post-8872 status-publish last instock product_cat-drinks product_cat-lunch has-post-thumbnail shipping-taxable purchasable product-type-simple">
                                                            <div class="woo-type11">
                                                                <div class="column dt-sc-one-third">
                                                                    <div class="product-wrapper">
                                                                        <div class='product-thumb'><a class="image"
                                                                                href="https://dtkudil.wpengine.com/product/gascogne-blanc/"
                                                                                title="Gascogne Blanc"><img width="600"
                                                                                    height="600"
                                                                                    src="https://rnzxu3lrgrj1046y63g4g7l1-wpengine.netdna-ssl.com/wp-content/uploads/2013/06/pdt15-600x600.jpg"
                                                                                    class="attachment-shop_catalog size-shop_catalog wp-post-image"
                                                                                    alt="" loading="lazy"
                                                                                    srcset="https://rnzxu3lrgrj1046y63g4g7l1-wpengine.netdna-ssl.com/wp-content/uploads/2013/06/pdt15-600x600.jpg 600w, https://rnzxu3lrgrj1046y63g4g7l1-wpengine.netdna-ssl.com/wp-content/uploads/2013/06/pdt15-150x150.jpg 150w, https://rnzxu3lrgrj1046y63g4g7l1-wpengine.netdna-ssl.com/wp-content/uploads/2013/06/pdt15-300x300.jpg 300w, https://rnzxu3lrgrj1046y63g4g7l1-wpengine.netdna-ssl.com/wp-content/uploads/2013/06/pdt15-768x768.jpg 768w, https://rnzxu3lrgrj1046y63g4g7l1-wpengine.netdna-ssl.com/wp-content/uploads/2013/06/pdt15-750x750.jpg 750w, https://rnzxu3lrgrj1046y63g4g7l1-wpengine.netdna-ssl.com/wp-content/uploads/2013/06/pdt15-540x540.jpg 540w, https://rnzxu3lrgrj1046y63g4g7l1-wpengine.netdna-ssl.com/wp-content/uploads/2013/06/pdt15-100x100.jpg 100w, https://rnzxu3lrgrj1046y63g4g7l1-wpengine.netdna-ssl.com/wp-content/uploads/2013/06/pdt15.jpg 1000w"
                                                                                    sizes="(max-width: 600px) 100vw, 600px" /><img
                                                                                    width="600" height="600"
                                                                                    src="https://rnzxu3lrgrj1046y63g4g7l1-wpengine.netdna-ssl.com/wp-content/uploads/2013/06/pdt19-600x600.jpg"
                                                                                    class="secondary-image attachment-shop-catalog"
                                                                                    alt="" loading="lazy"
                                                                                    srcset="https://rnzxu3lrgrj1046y63g4g7l1-wpengine.netdna-ssl.com/wp-content/uploads/2013/06/pdt19-600x600.jpg 600w, https://rnzxu3lrgrj1046y63g4g7l1-wpengine.netdna-ssl.com/wp-content/uploads/2013/06/pdt19-150x150.jpg 150w, https://rnzxu3lrgrj1046y63g4g7l1-wpengine.netdna-ssl.com/wp-content/uploads/2013/06/pdt19-300x300.jpg 300w, https://rnzxu3lrgrj1046y63g4g7l1-wpengine.netdna-ssl.com/wp-content/uploads/2013/06/pdt19-768x768.jpg 768w, https://rnzxu3lrgrj1046y63g4g7l1-wpengine.netdna-ssl.com/wp-content/uploads/2013/06/pdt19-750x750.jpg 750w, https://rnzxu3lrgrj1046y63g4g7l1-wpengine.netdna-ssl.com/wp-content/uploads/2013/06/pdt19-540x540.jpg 540w, https://rnzxu3lrgrj1046y63g4g7l1-wpengine.netdna-ssl.com/wp-content/uploads/2013/06/pdt19-100x100.jpg 100w, https://rnzxu3lrgrj1046y63g4g7l1-wpengine.netdna-ssl.com/wp-content/uploads/2013/06/pdt19.jpg 1000w"
                                                                                    sizes="(max-width: 600px) 100vw, 600px" /></a>
                                                                            <div class="product-buttons-wrapper">
                                                                                <div class="wc_inline_buttons">
                                                                                    <div
                                                                                        class="wc_cart_btn_wrapper wc_btn_inline">
                                                                                        <a href="?add-to-cart=8872"
                                                                                            data-quantity="1"
                                                                                            class="dt-sc-button too-small button product_type_simple add_to_cart_button ajax_add_to_cart"
                                                                                            data-product_id="8872"
                                                                                            data-product_sku=""
                                                                                            aria-label="Add &ldquo;Gascogne Blanc&rdquo; to your cart"
                                                                                            rel="nofollow">Add to
                                                                                            cart</a></div>
                                                                                    <div
                                                                                        class="wcwl_btn_wrapper wc_btn_inline">
                                                                                        <div class="yith-wcwl-add-to-wishlist add-to-wishlist-8872  wishlist-fragment on-first-load"
                                                                                            data-fragment-ref="8872"
                                                                                            data-fragment-options="{&quot;base_url&quot;:&quot;&quot;,&quot;in_default_wishlist&quot;:false,&quot;is_single&quot;:false,&quot;show_exists&quot;:false,&quot;product_id&quot;:8872,&quot;parent_product_id&quot;:8872,&quot;product_type&quot;:&quot;simple&quot;,&quot;show_view&quot;:false,&quot;browse_wishlist_text&quot;:&quot;Browse Wishlist&quot;,&quot;already_in_wishslist_text&quot;:&quot;The product is already in the wishlist!&quot;,&quot;product_added_text&quot;:&quot;Product added!&quot;,&quot;heading_icon&quot;:&quot;&quot;,&quot;available_multi_wishlist&quot;:false,&quot;disable_wishlist&quot;:false,&quot;show_count&quot;:false,&quot;ajax_loading&quot;:false,&quot;loop_position&quot;:false,&quot;item&quot;:&quot;add_to_wishlist&quot;}">

                                                                                            <!-- ADD TO WISHLIST -->

                                                                                            <div
                                                                                                class="yith-wcwl-add-button">
                                                                                                <a href="?add_to_wishlist=8872"
                                                                                                    rel="nofollow"
                                                                                                    data-product-id="8872"
                                                                                                    data-product-type="simple"
                                                                                                    data-original-product-id="8872"
                                                                                                    class="add_to_wishlist single_add_to_wishlist"
                                                                                                    data-title="Add to Wishlist">
                                                                                                    <span>Add to
                                                                                                        Wishlist</span>
                                                                                                </a>
                                                                                            </div>
                                                                                            <!-- COUNT TEXT -->

                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class='product-details'>
                                                                            <h5><a
                                                                                    href="https://dtkudil.wpengine.com/product/gascogne-blanc/">Gascogne
                                                                                    Blanc</a></h5><span
                                                                                class="product-price"><span
                                                                                    class="price"><span
                                                                                        class="woocommerce-Price-amount amount"><bdi><span
                                                                                                class="woocommerce-Price-currencySymbol">&pound;</span>10.95</bdi></span></span></span>
                                                                            <div class="product-rating-wrapper">
                                                                                <div class="star-rating" role="img"
                                                                                    aria-label="Rated 4.67 out of 5">
                                                                                    <span style="width:93.4%">Rated
                                                                                        <strong
                                                                                            class="rating">4.67</strong>
                                                                                        out of 5</span></div>
                                                                            </div>
                                                                        </div>
                                                                    </div> <!-- .product-wrapper -->
                                                                </div> <!-- .column -->
                                                            </div> <!-- .style -->
                                                        </li>
                                                        <li
                                                            class="product type-product post-8873 status-publish first instock product_cat-drinks product_cat-lunch has-post-thumbnail shipping-taxable purchasable product-type-simple">
                                                            <div class="woo-type11">
                                                                <div class="column dt-sc-one-third">
                                                                    <div class="product-wrapper">
                                                                        <div class='product-thumb'><a class="image"
                                                                                href="https://dtkudil.wpengine.com/product/malbec-montes-classi/"
                                                                                title="Malbec Montes Classi"><img
                                                                                    width="600" height="600"
                                                                                    src="https://rnzxu3lrgrj1046y63g4g7l1-wpengine.netdna-ssl.com/wp-content/uploads/2013/06/pdt14-600x600.jpg"
                                                                                    class="attachment-shop_catalog size-shop_catalog wp-post-image"
                                                                                    alt="" loading="lazy"
                                                                                    srcset="https://rnzxu3lrgrj1046y63g4g7l1-wpengine.netdna-ssl.com/wp-content/uploads/2013/06/pdt14-600x600.jpg 600w, https://rnzxu3lrgrj1046y63g4g7l1-wpengine.netdna-ssl.com/wp-content/uploads/2013/06/pdt14-150x150.jpg 150w, https://rnzxu3lrgrj1046y63g4g7l1-wpengine.netdna-ssl.com/wp-content/uploads/2013/06/pdt14-300x300.jpg 300w, https://rnzxu3lrgrj1046y63g4g7l1-wpengine.netdna-ssl.com/wp-content/uploads/2013/06/pdt14-768x768.jpg 768w, https://rnzxu3lrgrj1046y63g4g7l1-wpengine.netdna-ssl.com/wp-content/uploads/2013/06/pdt14-750x750.jpg 750w, https://rnzxu3lrgrj1046y63g4g7l1-wpengine.netdna-ssl.com/wp-content/uploads/2013/06/pdt14-540x540.jpg 540w, https://rnzxu3lrgrj1046y63g4g7l1-wpengine.netdna-ssl.com/wp-content/uploads/2013/06/pdt14-100x100.jpg 100w, https://rnzxu3lrgrj1046y63g4g7l1-wpengine.netdna-ssl.com/wp-content/uploads/2013/06/pdt14.jpg 1000w"
                                                                                    sizes="(max-width: 600px) 100vw, 600px" /><img
                                                                                    width="600" height="600"
                                                                                    src="https://rnzxu3lrgrj1046y63g4g7l1-wpengine.netdna-ssl.com/wp-content/uploads/2013/06/pdt15-600x600.jpg"
                                                                                    class="secondary-image attachment-shop-catalog"
                                                                                    alt="" loading="lazy"
                                                                                    srcset="https://rnzxu3lrgrj1046y63g4g7l1-wpengine.netdna-ssl.com/wp-content/uploads/2013/06/pdt15-600x600.jpg 600w, https://rnzxu3lrgrj1046y63g4g7l1-wpengine.netdna-ssl.com/wp-content/uploads/2013/06/pdt15-150x150.jpg 150w, https://rnzxu3lrgrj1046y63g4g7l1-wpengine.netdna-ssl.com/wp-content/uploads/2013/06/pdt15-300x300.jpg 300w, https://rnzxu3lrgrj1046y63g4g7l1-wpengine.netdna-ssl.com/wp-content/uploads/2013/06/pdt15-768x768.jpg 768w, https://rnzxu3lrgrj1046y63g4g7l1-wpengine.netdna-ssl.com/wp-content/uploads/2013/06/pdt15-750x750.jpg 750w, https://rnzxu3lrgrj1046y63g4g7l1-wpengine.netdna-ssl.com/wp-content/uploads/2013/06/pdt15-540x540.jpg 540w, https://rnzxu3lrgrj1046y63g4g7l1-wpengine.netdna-ssl.com/wp-content/uploads/2013/06/pdt15-100x100.jpg 100w, https://rnzxu3lrgrj1046y63g4g7l1-wpengine.netdna-ssl.com/wp-content/uploads/2013/06/pdt15.jpg 1000w"
                                                                                    sizes="(max-width: 600px) 100vw, 600px" /></a>
                                                                            <div class="product-buttons-wrapper">
                                                                                <div class="wc_inline_buttons">
                                                                                    <div
                                                                                        class="wc_cart_btn_wrapper wc_btn_inline">
                                                                                        <a href="?add-to-cart=8873"
                                                                                            data-quantity="1"
                                                                                            class="dt-sc-button too-small button product_type_simple add_to_cart_button ajax_add_to_cart"
                                                                                            data-product_id="8873"
                                                                                            data-product_sku=""
                                                                                            aria-label="Add &ldquo;Malbec Montes Classi&rdquo; to your cart"
                                                                                            rel="nofollow">Add to
                                                                                            cart</a></div>
                                                                                    <div
                                                                                        class="wcwl_btn_wrapper wc_btn_inline">
                                                                                        <div class="yith-wcwl-add-to-wishlist add-to-wishlist-8873  wishlist-fragment on-first-load"
                                                                                            data-fragment-ref="8873"
                                                                                            data-fragment-options="{&quot;base_url&quot;:&quot;&quot;,&quot;in_default_wishlist&quot;:false,&quot;is_single&quot;:false,&quot;show_exists&quot;:false,&quot;product_id&quot;:8873,&quot;parent_product_id&quot;:8873,&quot;product_type&quot;:&quot;simple&quot;,&quot;show_view&quot;:false,&quot;browse_wishlist_text&quot;:&quot;Browse Wishlist&quot;,&quot;already_in_wishslist_text&quot;:&quot;The product is already in the wishlist!&quot;,&quot;product_added_text&quot;:&quot;Product added!&quot;,&quot;heading_icon&quot;:&quot;&quot;,&quot;available_multi_wishlist&quot;:false,&quot;disable_wishlist&quot;:false,&quot;show_count&quot;:false,&quot;ajax_loading&quot;:false,&quot;loop_position&quot;:false,&quot;item&quot;:&quot;add_to_wishlist&quot;}">

                                                                                            <!-- ADD TO WISHLIST -->

                                                                                            <div
                                                                                                class="yith-wcwl-add-button">
                                                                                                <a href="?add_to_wishlist=8873"
                                                                                                    rel="nofollow"
                                                                                                    data-product-id="8873"
                                                                                                    data-product-type="simple"
                                                                                                    data-original-product-id="8873"
                                                                                                    class="add_to_wishlist single_add_to_wishlist"
                                                                                                    data-title="Add to Wishlist">
                                                                                                    <span>Add to
                                                                                                        Wishlist</span>
                                                                                                </a>
                                                                                            </div>
                                                                                            <!-- COUNT TEXT -->

                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class='product-details'>
                                                                            <h5><a
                                                                                    href="https://dtkudil.wpengine.com/product/malbec-montes-classi/">Malbec
                                                                                    Montes Classi</a></h5><span
                                                                                class="product-price"><span
                                                                                    class="price"><span
                                                                                        class="woocommerce-Price-amount amount"><bdi><span
                                                                                                class="woocommerce-Price-currencySymbol">&pound;</span>12.75</bdi></span></span></span>
                                                                            <div class="product-rating-wrapper">
                                                                                <div class="star-rating" role="img"
                                                                                    aria-label="Rated 3.00 out of 5">
                                                                                    <span style="width:60%">Rated
                                                                                        <strong
                                                                                            class="rating">3.00</strong>
                                                                                        out of 5</span></div>
                                                                            </div>
                                                                        </div>
                                                                    </div> <!-- .product-wrapper -->
                                                                </div> <!-- .column -->
                                                            </div> <!-- .style -->
                                                        </li>
                                                        <li
                                                            class="product type-product post-8870 status-publish outofstock product_cat-drinks product_cat-lunch has-post-thumbnail shipping-taxable purchasable product-type-variable">
                                                            <div class="woo-type11">
                                                                <div class="column dt-sc-one-third">
                                                                    <div class="product-wrapper">
                                                                        <div class='product-thumb'><span
                                                                                class="out-of-stock"><span>Out of
                                                                                    Stock</span></span><a class="image"
                                                                                href="https://dtkudil.wpengine.com/product/ship-your-idea-2/"
                                                                                title="Ship Your Idea"><img width="600"
                                                                                    height="600"
                                                                                    src="https://rnzxu3lrgrj1046y63g4g7l1-wpengine.netdna-ssl.com/wp-content/uploads/2013/06/pdt17-600x600.jpg"
                                                                                    class="attachment-shop_catalog size-shop_catalog wp-post-image"
                                                                                    alt="" loading="lazy"
                                                                                    srcset="https://rnzxu3lrgrj1046y63g4g7l1-wpengine.netdna-ssl.com/wp-content/uploads/2013/06/pdt17-600x600.jpg 600w, https://rnzxu3lrgrj1046y63g4g7l1-wpengine.netdna-ssl.com/wp-content/uploads/2013/06/pdt17-150x150.jpg 150w, https://rnzxu3lrgrj1046y63g4g7l1-wpengine.netdna-ssl.com/wp-content/uploads/2013/06/pdt17-300x300.jpg 300w, https://rnzxu3lrgrj1046y63g4g7l1-wpengine.netdna-ssl.com/wp-content/uploads/2013/06/pdt17-768x768.jpg 768w, https://rnzxu3lrgrj1046y63g4g7l1-wpengine.netdna-ssl.com/wp-content/uploads/2013/06/pdt17-750x750.jpg 750w, https://rnzxu3lrgrj1046y63g4g7l1-wpengine.netdna-ssl.com/wp-content/uploads/2013/06/pdt17-540x540.jpg 540w, https://rnzxu3lrgrj1046y63g4g7l1-wpengine.netdna-ssl.com/wp-content/uploads/2013/06/pdt17-100x100.jpg 100w, https://rnzxu3lrgrj1046y63g4g7l1-wpengine.netdna-ssl.com/wp-content/uploads/2013/06/pdt17.jpg 1000w"
                                                                                    sizes="(max-width: 600px) 100vw, 600px" /><img
                                                                                    width="600" height="600"
                                                                                    src="https://rnzxu3lrgrj1046y63g4g7l1-wpengine.netdna-ssl.com/wp-content/uploads/2013/06/pdt21-600x600.jpg"
                                                                                    class="secondary-image attachment-shop-catalog"
                                                                                    alt="" loading="lazy"
                                                                                    srcset="https://rnzxu3lrgrj1046y63g4g7l1-wpengine.netdna-ssl.com/wp-content/uploads/2013/06/pdt21-600x600.jpg 600w, https://rnzxu3lrgrj1046y63g4g7l1-wpengine.netdna-ssl.com/wp-content/uploads/2013/06/pdt21-150x150.jpg 150w, https://rnzxu3lrgrj1046y63g4g7l1-wpengine.netdna-ssl.com/wp-content/uploads/2013/06/pdt21-300x300.jpg 300w, https://rnzxu3lrgrj1046y63g4g7l1-wpengine.netdna-ssl.com/wp-content/uploads/2013/06/pdt21-768x768.jpg 768w, https://rnzxu3lrgrj1046y63g4g7l1-wpengine.netdna-ssl.com/wp-content/uploads/2013/06/pdt21-750x750.jpg 750w, https://rnzxu3lrgrj1046y63g4g7l1-wpengine.netdna-ssl.com/wp-content/uploads/2013/06/pdt21-540x540.jpg 540w, https://rnzxu3lrgrj1046y63g4g7l1-wpengine.netdna-ssl.com/wp-content/uploads/2013/06/pdt21-100x100.jpg 100w, https://rnzxu3lrgrj1046y63g4g7l1-wpengine.netdna-ssl.com/wp-content/uploads/2013/06/pdt21.jpg 1000w"
                                                                                    sizes="(max-width: 600px) 100vw, 600px" /></a>
                                                                            <div class="product-buttons-wrapper">
                                                                                <div class="wc_inline_buttons">
                                                                                    <div
                                                                                        class="wc_cart_btn_wrapper wc_btn_inline">
                                                                                        <a href="https://dtkudil.wpengine.com/product/ship-your-idea-2/"
                                                                                            data-quantity="1"
                                                                                            class="dt-sc-button too-small button product_type_variable"
                                                                                            data-product_id="8870"
                                                                                            data-product_sku=""
                                                                                            aria-label="Select options for &ldquo;Ship Your Idea&rdquo;"
                                                                                            rel="nofollow">Select
                                                                                            options</a></div>
                                                                                    <div
                                                                                        class="wcwl_btn_wrapper wc_btn_inline">
                                                                                        <div class="yith-wcwl-add-to-wishlist add-to-wishlist-8870  wishlist-fragment on-first-load"
                                                                                            data-fragment-ref="8870"
                                                                                            data-fragment-options="{&quot;base_url&quot;:&quot;&quot;,&quot;in_default_wishlist&quot;:false,&quot;is_single&quot;:false,&quot;show_exists&quot;:false,&quot;product_id&quot;:8870,&quot;parent_product_id&quot;:8870,&quot;product_type&quot;:&quot;variable&quot;,&quot;show_view&quot;:false,&quot;browse_wishlist_text&quot;:&quot;Browse Wishlist&quot;,&quot;already_in_wishslist_text&quot;:&quot;The product is already in the wishlist!&quot;,&quot;product_added_text&quot;:&quot;Product added!&quot;,&quot;heading_icon&quot;:&quot;&quot;,&quot;available_multi_wishlist&quot;:false,&quot;disable_wishlist&quot;:false,&quot;show_count&quot;:false,&quot;ajax_loading&quot;:false,&quot;loop_position&quot;:false,&quot;item&quot;:&quot;add_to_wishlist&quot;}">

                                                                                            <!-- ADD TO WISHLIST -->

                                                                                            <div
                                                                                                class="yith-wcwl-add-button">
                                                                                                <a href="?add_to_wishlist=8870"
                                                                                                    rel="nofollow"
                                                                                                    data-product-id="8870"
                                                                                                    data-product-type="variable"
                                                                                                    data-original-product-id="8870"
                                                                                                    class="add_to_wishlist single_add_to_wishlist"
                                                                                                    data-title="Add to Wishlist">
                                                                                                    <span>Add to
                                                                                                        Wishlist</span>
                                                                                                </a>
                                                                                            </div>
                                                                                            <!-- COUNT TEXT -->

                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class='product-details'>
                                                                            <h5><a
                                                                                    href="https://dtkudil.wpengine.com/product/ship-your-idea-2/">Ship
                                                                                    Your Idea</a></h5><span
                                                                                class="product-price"></span>
                                                                            <div class="product-rating-wrapper">
                                                                                <div class="star-rating" role="img"
                                                                                    aria-label="Rated 4.00 out of 5">
                                                                                    <span style="width:80%">Rated
                                                                                        <strong
                                                                                            class="rating">4.00</strong>
                                                                                        out of 5</span></div>
                                                                            </div>
                                                                        </div>
                                                                    </div> <!-- .product-wrapper -->
                                                                </div> <!-- .column -->
                                                            </div> <!-- .style -->
                                                        </li>
                                                        <li
                                                            class="product type-product post-8871 status-publish last instock product_cat-drinks product_cat-lunch has-post-thumbnail shipping-taxable purchasable product-type-simple">
                                                            <div class="woo-type11">
                                                                <div class="column dt-sc-one-third">
                                                                    <div class="product-wrapper">
                                                                        <div class='product-thumb'><a class="image"
                                                                                href="https://dtkudil.wpengine.com/product/woo-ninja-2/"
                                                                                title="Woo Ninja"><img width="600"
                                                                                    height="600"
                                                                                    src="https://rnzxu3lrgrj1046y63g4g7l1-wpengine.netdna-ssl.com/wp-content/uploads/2013/06/pdt16-600x600.jpg"
                                                                                    class="attachment-shop_catalog size-shop_catalog wp-post-image"
                                                                                    alt="" loading="lazy"
                                                                                    srcset="https://rnzxu3lrgrj1046y63g4g7l1-wpengine.netdna-ssl.com/wp-content/uploads/2013/06/pdt16-600x600.jpg 600w, https://rnzxu3lrgrj1046y63g4g7l1-wpengine.netdna-ssl.com/wp-content/uploads/2013/06/pdt16-150x150.jpg 150w, https://rnzxu3lrgrj1046y63g4g7l1-wpengine.netdna-ssl.com/wp-content/uploads/2013/06/pdt16-300x300.jpg 300w, https://rnzxu3lrgrj1046y63g4g7l1-wpengine.netdna-ssl.com/wp-content/uploads/2013/06/pdt16-768x768.jpg 768w, https://rnzxu3lrgrj1046y63g4g7l1-wpengine.netdna-ssl.com/wp-content/uploads/2013/06/pdt16-750x750.jpg 750w, https://rnzxu3lrgrj1046y63g4g7l1-wpengine.netdna-ssl.com/wp-content/uploads/2013/06/pdt16-540x540.jpg 540w, https://rnzxu3lrgrj1046y63g4g7l1-wpengine.netdna-ssl.com/wp-content/uploads/2013/06/pdt16-100x100.jpg 100w, https://rnzxu3lrgrj1046y63g4g7l1-wpengine.netdna-ssl.com/wp-content/uploads/2013/06/pdt16.jpg 1000w"
                                                                                    sizes="(max-width: 600px) 100vw, 600px" /><img
                                                                                    width="600" height="600"
                                                                                    src="https://rnzxu3lrgrj1046y63g4g7l1-wpengine.netdna-ssl.com/wp-content/uploads/2013/06/pdt20-600x600.jpg"
                                                                                    class="secondary-image attachment-shop-catalog"
                                                                                    alt="" loading="lazy"
                                                                                    srcset="https://rnzxu3lrgrj1046y63g4g7l1-wpengine.netdna-ssl.com/wp-content/uploads/2013/06/pdt20-600x600.jpg 600w, https://rnzxu3lrgrj1046y63g4g7l1-wpengine.netdna-ssl.com/wp-content/uploads/2013/06/pdt20-150x150.jpg 150w, https://rnzxu3lrgrj1046y63g4g7l1-wpengine.netdna-ssl.com/wp-content/uploads/2013/06/pdt20-300x300.jpg 300w, https://rnzxu3lrgrj1046y63g4g7l1-wpengine.netdna-ssl.com/wp-content/uploads/2013/06/pdt20-768x768.jpg 768w, https://rnzxu3lrgrj1046y63g4g7l1-wpengine.netdna-ssl.com/wp-content/uploads/2013/06/pdt20-750x750.jpg 750w, https://rnzxu3lrgrj1046y63g4g7l1-wpengine.netdna-ssl.com/wp-content/uploads/2013/06/pdt20-540x540.jpg 540w, https://rnzxu3lrgrj1046y63g4g7l1-wpengine.netdna-ssl.com/wp-content/uploads/2013/06/pdt20-100x100.jpg 100w, https://rnzxu3lrgrj1046y63g4g7l1-wpengine.netdna-ssl.com/wp-content/uploads/2013/06/pdt20.jpg 1000w"
                                                                                    sizes="(max-width: 600px) 100vw, 600px" /></a>
                                                                            <div class="product-buttons-wrapper">
                                                                                <div class="wc_inline_buttons">
                                                                                    <div
                                                                                        class="wc_cart_btn_wrapper wc_btn_inline">
                                                                                        <a href="?add-to-cart=8871"
                                                                                            data-quantity="1"
                                                                                            class="dt-sc-button too-small button product_type_simple add_to_cart_button ajax_add_to_cart"
                                                                                            data-product_id="8871"
                                                                                            data-product_sku=""
                                                                                            aria-label="Add &ldquo;Woo Ninja&rdquo; to your cart"
                                                                                            rel="nofollow">Add to
                                                                                            cart</a></div>
                                                                                    <div
                                                                                        class="wcwl_btn_wrapper wc_btn_inline">
                                                                                        <div class="yith-wcwl-add-to-wishlist add-to-wishlist-8871  wishlist-fragment on-first-load"
                                                                                            data-fragment-ref="8871"
                                                                                            data-fragment-options="{&quot;base_url&quot;:&quot;&quot;,&quot;in_default_wishlist&quot;:false,&quot;is_single&quot;:false,&quot;show_exists&quot;:false,&quot;product_id&quot;:8871,&quot;parent_product_id&quot;:8871,&quot;product_type&quot;:&quot;simple&quot;,&quot;show_view&quot;:false,&quot;browse_wishlist_text&quot;:&quot;Browse Wishlist&quot;,&quot;already_in_wishslist_text&quot;:&quot;The product is already in the wishlist!&quot;,&quot;product_added_text&quot;:&quot;Product added!&quot;,&quot;heading_icon&quot;:&quot;&quot;,&quot;available_multi_wishlist&quot;:false,&quot;disable_wishlist&quot;:false,&quot;show_count&quot;:false,&quot;ajax_loading&quot;:false,&quot;loop_position&quot;:false,&quot;item&quot;:&quot;add_to_wishlist&quot;}">

                                                                                            <!-- ADD TO WISHLIST -->

                                                                                            <div
                                                                                                class="yith-wcwl-add-button">
                                                                                                <a href="?add_to_wishlist=8871"
                                                                                                    rel="nofollow"
                                                                                                    data-product-id="8871"
                                                                                                    data-product-type="simple"
                                                                                                    data-original-product-id="8871"
                                                                                                    class="add_to_wishlist single_add_to_wishlist"
                                                                                                    data-title="Add to Wishlist">
                                                                                                    <span>Add to
                                                                                                        Wishlist</span>
                                                                                                </a>
                                                                                            </div>
                                                                                            <!-- COUNT TEXT -->

                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class='product-details'>
                                                                            <h5><a
                                                                                    href="https://dtkudil.wpengine.com/product/woo-ninja-2/">Woo
                                                                                    Ninja</a></h5><span
                                                                                class="product-price"><span
                                                                                    class="price"><span
                                                                                        class="woocommerce-Price-amount amount"><bdi><span
                                                                                                class="woocommerce-Price-currencySymbol">&pound;</span>35.00</bdi></span></span></span>
                                                                            <div class="product-rating-wrapper">
                                                                                <div class="star-rating" role="img"
                                                                                    aria-label="Rated 4.50 out of 5">
                                                                                    <span style="width:90%">Rated
                                                                                        <strong
                                                                                            class="rating">4.50</strong>
                                                                                        out of 5</span></div>
                                                                            </div>
                                                                        </div>
                                                                    </div> <!-- .product-wrapper -->
                                                                </div> <!-- .column -->
                                                            </div> <!-- .style -->
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div id="1524303273461-fc29b058-c185" class="dt-sc-empty-space"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                            <div data-vc-full-width="true" data-vc-full-width-init="false"
                                class="vc_row wpb_row vc_row-fluid dt-sc-dark-bg vc_custom_1628238890184 vc_row-has-fill">
                                <div class="wpb_column vc_column_container vc_col-sm-12">
                                    <div class="vc_column-inner " style=" text-align:center; ">
                                        <div class="wpb_wrapper">
                                            <div id="1524303137444-7633154e-7768" class="dt-sc-empty-space"></div>
                                            <div class='dt-sc-title script-with-sub-title '>
                                                <h3>Offering A Champagne</h3>
                                                <h4>As Complimentary</h4>
                                            </div>
                                            <div id="1524303137515-6d812601-8eda" class="dt-sc-empty-space"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="vc_row-full-width vc_clearfix"></div>
                            <section class="vc_section dt_data_bully">
                                <div class="vc_row wpb_row vc_row-fluid">
                                    <div class="wpb_column vc_column_container vc_col-sm-12">
                                        <div class="vc_column-inner ">
                                            <div class="wpb_wrapper">
                                                <div id="1524303255715-5b46d43d-559a" class="dt-sc-empty-space"></div>
                                                <div class="vc_row wpb_row vc_inner vc_row-fluid">
                                                    <div class="wpb_column vc_column_container vc_col-sm-12"
                                                        style=" text-align:center; ">
                                                        <div class="vc_column-inner ">
                                                            <div class="wpb_wrapper">
                                                                <h3 class="dt-sc-menu-title">Dinner &amp; Drinks</h3>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div id="1524299760474-4fee69b3-9555" class="dt-sc-empty-space"></div>
                                                <div class="woocommerce columns-3 ">
                                                    <ul class="products columns-3">
                                                        <li
                                                            class="product type-product post-8869 status-publish first instock product_cat-dinner product_cat-drinks has-post-thumbnail shipping-taxable purchasable product-type-simple">
                                                            <div class="woo-type11">
                                                                <div class="column dt-sc-one-third">
                                                                    <div class="product-wrapper">
                                                                        <div class='product-thumb'><a class="image"
                                                                                href="https://dtkudil.wpengine.com/product/happy-ninja/"
                                                                                title="Happy Ninja"><img width="600"
                                                                                    height="600"
                                                                                    src="https://rnzxu3lrgrj1046y63g4g7l1-wpengine.netdna-ssl.com/wp-content/uploads/2013/06/pdt18-600x600.jpg"
                                                                                    class="attachment-shop_catalog size-shop_catalog wp-post-image"
                                                                                    alt="" loading="lazy"
                                                                                    srcset="https://rnzxu3lrgrj1046y63g4g7l1-wpengine.netdna-ssl.com/wp-content/uploads/2013/06/pdt18-600x600.jpg 600w, https://rnzxu3lrgrj1046y63g4g7l1-wpengine.netdna-ssl.com/wp-content/uploads/2013/06/pdt18-150x150.jpg 150w, https://rnzxu3lrgrj1046y63g4g7l1-wpengine.netdna-ssl.com/wp-content/uploads/2013/06/pdt18-300x300.jpg 300w, https://rnzxu3lrgrj1046y63g4g7l1-wpengine.netdna-ssl.com/wp-content/uploads/2013/06/pdt18-768x768.jpg 768w, https://rnzxu3lrgrj1046y63g4g7l1-wpengine.netdna-ssl.com/wp-content/uploads/2013/06/pdt18-750x750.jpg 750w, https://rnzxu3lrgrj1046y63g4g7l1-wpengine.netdna-ssl.com/wp-content/uploads/2013/06/pdt18-540x540.jpg 540w, https://rnzxu3lrgrj1046y63g4g7l1-wpengine.netdna-ssl.com/wp-content/uploads/2013/06/pdt18-100x100.jpg 100w, https://rnzxu3lrgrj1046y63g4g7l1-wpengine.netdna-ssl.com/wp-content/uploads/2013/06/pdt18.jpg 1000w"
                                                                                    sizes="(max-width: 600px) 100vw, 600px" /><img
                                                                                    width="600" height="600"
                                                                                    src="https://rnzxu3lrgrj1046y63g4g7l1-wpengine.netdna-ssl.com/wp-content/uploads/2013/06/pdt13-600x600.jpg"
                                                                                    class="secondary-image attachment-shop-catalog"
                                                                                    alt="" loading="lazy"
                                                                                    srcset="https://rnzxu3lrgrj1046y63g4g7l1-wpengine.netdna-ssl.com/wp-content/uploads/2013/06/pdt13-600x600.jpg 600w, https://rnzxu3lrgrj1046y63g4g7l1-wpengine.netdna-ssl.com/wp-content/uploads/2013/06/pdt13-150x150.jpg 150w, https://rnzxu3lrgrj1046y63g4g7l1-wpengine.netdna-ssl.com/wp-content/uploads/2013/06/pdt13-300x300.jpg 300w, https://rnzxu3lrgrj1046y63g4g7l1-wpengine.netdna-ssl.com/wp-content/uploads/2013/06/pdt13-768x768.jpg 768w, https://rnzxu3lrgrj1046y63g4g7l1-wpengine.netdna-ssl.com/wp-content/uploads/2013/06/pdt13-750x750.jpg 750w, https://rnzxu3lrgrj1046y63g4g7l1-wpengine.netdna-ssl.com/wp-content/uploads/2013/06/pdt13-540x540.jpg 540w, https://rnzxu3lrgrj1046y63g4g7l1-wpengine.netdna-ssl.com/wp-content/uploads/2013/06/pdt13-100x100.jpg 100w, https://rnzxu3lrgrj1046y63g4g7l1-wpengine.netdna-ssl.com/wp-content/uploads/2013/06/pdt13.jpg 1000w"
                                                                                    sizes="(max-width: 600px) 100vw, 600px" /></a>
                                                                            <div class="product-buttons-wrapper">
                                                                                <div class="wc_inline_buttons">
                                                                                    <div
                                                                                        class="wc_cart_btn_wrapper wc_btn_inline">
                                                                                        <a href="?add-to-cart=8869"
                                                                                            data-quantity="1"
                                                                                            class="dt-sc-button too-small button product_type_simple add_to_cart_button ajax_add_to_cart"
                                                                                            data-product_id="8869"
                                                                                            data-product_sku=""
                                                                                            aria-label="Add &ldquo;Happy Ninja&rdquo; to your cart"
                                                                                            rel="nofollow">Add to
                                                                                            cart</a></div>
                                                                                    <div
                                                                                        class="wcwl_btn_wrapper wc_btn_inline">
                                                                                        <div class="yith-wcwl-add-to-wishlist add-to-wishlist-8869  wishlist-fragment on-first-load"
                                                                                            data-fragment-ref="8869"
                                                                                            data-fragment-options="{&quot;base_url&quot;:&quot;&quot;,&quot;in_default_wishlist&quot;:false,&quot;is_single&quot;:false,&quot;show_exists&quot;:false,&quot;product_id&quot;:8869,&quot;parent_product_id&quot;:8869,&quot;product_type&quot;:&quot;simple&quot;,&quot;show_view&quot;:false,&quot;browse_wishlist_text&quot;:&quot;Browse Wishlist&quot;,&quot;already_in_wishslist_text&quot;:&quot;The product is already in the wishlist!&quot;,&quot;product_added_text&quot;:&quot;Product added!&quot;,&quot;heading_icon&quot;:&quot;&quot;,&quot;available_multi_wishlist&quot;:false,&quot;disable_wishlist&quot;:false,&quot;show_count&quot;:false,&quot;ajax_loading&quot;:false,&quot;loop_position&quot;:false,&quot;item&quot;:&quot;add_to_wishlist&quot;}">

                                                                                            <!-- ADD TO WISHLIST -->

                                                                                            <div
                                                                                                class="yith-wcwl-add-button">
                                                                                                <a href="?add_to_wishlist=8869"
                                                                                                    rel="nofollow"
                                                                                                    data-product-id="8869"
                                                                                                    data-product-type="simple"
                                                                                                    data-original-product-id="8869"
                                                                                                    class="add_to_wishlist single_add_to_wishlist"
                                                                                                    data-title="Add to Wishlist">
                                                                                                    <span>Add to
                                                                                                        Wishlist</span>
                                                                                                </a>
                                                                                            </div>
                                                                                            <!-- COUNT TEXT -->

                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class='product-details'>
                                                                            <h5><a
                                                                                    href="https://dtkudil.wpengine.com/product/happy-ninja/">Happy
                                                                                    Ninja</a></h5><span
                                                                                class="product-price"><span
                                                                                    class="price"><span
                                                                                        class="woocommerce-Price-amount amount"><bdi><span
                                                                                                class="woocommerce-Price-currencySymbol">&pound;</span>18.00</bdi></span></span></span>
                                                                            <div class="product-rating-wrapper">
                                                                                <div class="star-rating" role="img"
                                                                                    aria-label="Rated 5.00 out of 5">
                                                                                    <span style="width:100%">Rated
                                                                                        <strong
                                                                                            class="rating">5.00</strong>
                                                                                        out of 5</span></div>
                                                                            </div>
                                                                        </div>
                                                                    </div> <!-- .product-wrapper -->
                                                                </div> <!-- .column -->
                                                            </div> <!-- .style -->
                                                        </li>
                                                        <li
                                                            class="product type-product post-8867 status-publish instock product_cat-dinner product_cat-drinks has-post-thumbnail shipping-taxable purchasable product-type-simple">
                                                            <div class="woo-type11">
                                                                <div class="column dt-sc-one-third">
                                                                    <div class="product-wrapper">
                                                                        <div class='product-thumb'><a class="image"
                                                                                href="https://dtkudil.wpengine.com/product/ninja-silhouette/"
                                                                                title="Ninja Silhouette"><img
                                                                                    width="600" height="600"
                                                                                    src="https://rnzxu3lrgrj1046y63g4g7l1-wpengine.netdna-ssl.com/wp-content/uploads/2013/06/pdt20-600x600.jpg"
                                                                                    class="attachment-shop_catalog size-shop_catalog wp-post-image"
                                                                                    alt="" loading="lazy"
                                                                                    srcset="https://rnzxu3lrgrj1046y63g4g7l1-wpengine.netdna-ssl.com/wp-content/uploads/2013/06/pdt20-600x600.jpg 600w, https://rnzxu3lrgrj1046y63g4g7l1-wpengine.netdna-ssl.com/wp-content/uploads/2013/06/pdt20-150x150.jpg 150w, https://rnzxu3lrgrj1046y63g4g7l1-wpengine.netdna-ssl.com/wp-content/uploads/2013/06/pdt20-300x300.jpg 300w, https://rnzxu3lrgrj1046y63g4g7l1-wpengine.netdna-ssl.com/wp-content/uploads/2013/06/pdt20-768x768.jpg 768w, https://rnzxu3lrgrj1046y63g4g7l1-wpengine.netdna-ssl.com/wp-content/uploads/2013/06/pdt20-750x750.jpg 750w, https://rnzxu3lrgrj1046y63g4g7l1-wpengine.netdna-ssl.com/wp-content/uploads/2013/06/pdt20-540x540.jpg 540w, https://rnzxu3lrgrj1046y63g4g7l1-wpengine.netdna-ssl.com/wp-content/uploads/2013/06/pdt20-100x100.jpg 100w, https://rnzxu3lrgrj1046y63g4g7l1-wpengine.netdna-ssl.com/wp-content/uploads/2013/06/pdt20.jpg 1000w"
                                                                                    sizes="(max-width: 600px) 100vw, 600px" /><img
                                                                                    width="600" height="600"
                                                                                    src="https://rnzxu3lrgrj1046y63g4g7l1-wpengine.netdna-ssl.com/wp-content/uploads/2013/06/pdt19-600x600.jpg"
                                                                                    class="secondary-image attachment-shop-catalog"
                                                                                    alt="" loading="lazy"
                                                                                    srcset="https://rnzxu3lrgrj1046y63g4g7l1-wpengine.netdna-ssl.com/wp-content/uploads/2013/06/pdt19-600x600.jpg 600w, https://rnzxu3lrgrj1046y63g4g7l1-wpengine.netdna-ssl.com/wp-content/uploads/2013/06/pdt19-150x150.jpg 150w, https://rnzxu3lrgrj1046y63g4g7l1-wpengine.netdna-ssl.com/wp-content/uploads/2013/06/pdt19-300x300.jpg 300w, https://rnzxu3lrgrj1046y63g4g7l1-wpengine.netdna-ssl.com/wp-content/uploads/2013/06/pdt19-768x768.jpg 768w, https://rnzxu3lrgrj1046y63g4g7l1-wpengine.netdna-ssl.com/wp-content/uploads/2013/06/pdt19-750x750.jpg 750w, https://rnzxu3lrgrj1046y63g4g7l1-wpengine.netdna-ssl.com/wp-content/uploads/2013/06/pdt19-540x540.jpg 540w, https://rnzxu3lrgrj1046y63g4g7l1-wpengine.netdna-ssl.com/wp-content/uploads/2013/06/pdt19-100x100.jpg 100w, https://rnzxu3lrgrj1046y63g4g7l1-wpengine.netdna-ssl.com/wp-content/uploads/2013/06/pdt19.jpg 1000w"
                                                                                    sizes="(max-width: 600px) 100vw, 600px" /></a>
                                                                            <div class="product-buttons-wrapper">
                                                                                <div class="wc_inline_buttons">
                                                                                    <div
                                                                                        class="wc_cart_btn_wrapper wc_btn_inline">
                                                                                        <a href="?add-to-cart=8867"
                                                                                            data-quantity="1"
                                                                                            class="dt-sc-button too-small button product_type_simple add_to_cart_button ajax_add_to_cart"
                                                                                            data-product_id="8867"
                                                                                            data-product_sku=""
                                                                                            aria-label="Add &ldquo;Ninja Silhouette&rdquo; to your cart"
                                                                                            rel="nofollow">Add to
                                                                                            cart</a></div>
                                                                                    <div
                                                                                        class="wcwl_btn_wrapper wc_btn_inline">
                                                                                        <div class="yith-wcwl-add-to-wishlist add-to-wishlist-8867  wishlist-fragment on-first-load"
                                                                                            data-fragment-ref="8867"
                                                                                            data-fragment-options="{&quot;base_url&quot;:&quot;&quot;,&quot;in_default_wishlist&quot;:false,&quot;is_single&quot;:false,&quot;show_exists&quot;:false,&quot;product_id&quot;:8867,&quot;parent_product_id&quot;:8867,&quot;product_type&quot;:&quot;simple&quot;,&quot;show_view&quot;:false,&quot;browse_wishlist_text&quot;:&quot;Browse Wishlist&quot;,&quot;already_in_wishslist_text&quot;:&quot;The product is already in the wishlist!&quot;,&quot;product_added_text&quot;:&quot;Product added!&quot;,&quot;heading_icon&quot;:&quot;&quot;,&quot;available_multi_wishlist&quot;:false,&quot;disable_wishlist&quot;:false,&quot;show_count&quot;:false,&quot;ajax_loading&quot;:false,&quot;loop_position&quot;:false,&quot;item&quot;:&quot;add_to_wishlist&quot;}">

                                                                                            <!-- ADD TO WISHLIST -->

                                                                                            <div
                                                                                                class="yith-wcwl-add-button">
                                                                                                <a href="?add_to_wishlist=8867"
                                                                                                    rel="nofollow"
                                                                                                    data-product-id="8867"
                                                                                                    data-product-type="simple"
                                                                                                    data-original-product-id="8867"
                                                                                                    class="add_to_wishlist single_add_to_wishlist"
                                                                                                    data-title="Add to Wishlist">
                                                                                                    <span>Add to
                                                                                                        Wishlist</span>
                                                                                                </a>
                                                                                            </div>
                                                                                            <!-- COUNT TEXT -->

                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class='product-details'>
                                                                            <h5><a
                                                                                    href="https://dtkudil.wpengine.com/product/ninja-silhouette/">Ninja
                                                                                    Silhouette</a></h5><span
                                                                                class="product-price"><span
                                                                                    class="price"><span
                                                                                        class="woocommerce-Price-amount amount"><bdi><span
                                                                                                class="woocommerce-Price-currencySymbol">&pound;</span>20.00</bdi></span></span></span>
                                                                            <div class="product-rating-wrapper">
                                                                                <div class="star-rating" role="img"
                                                                                    aria-label="Rated 5.00 out of 5">
                                                                                    <span style="width:100%">Rated
                                                                                        <strong
                                                                                            class="rating">5.00</strong>
                                                                                        out of 5</span></div>
                                                                            </div>
                                                                        </div>
                                                                    </div> <!-- .product-wrapper -->
                                                                </div> <!-- .column -->
                                                            </div> <!-- .style -->
                                                        </li>
                                                        <li
                                                            class="product type-product post-8865 status-publish last instock product_cat-dinner product_cat-drinks has-post-thumbnail shipping-taxable purchasable product-type-simple">
                                                            <div class="woo-type11">
                                                                <div class="column dt-sc-one-third">
                                                                    <div class="product-wrapper">
                                                                        <div class='product-thumb'><a class="image"
                                                                                href="https://dtkudil.wpengine.com/product/premium-quality/"
                                                                                title="Premium Quality"><img width="600"
                                                                                    height="600"
                                                                                    src="https://rnzxu3lrgrj1046y63g4g7l1-wpengine.netdna-ssl.com/wp-content/uploads/2013/06/pdt22-600x600.jpg"
                                                                                    class="attachment-shop_catalog size-shop_catalog wp-post-image"
                                                                                    alt="" loading="lazy"
                                                                                    srcset="https://rnzxu3lrgrj1046y63g4g7l1-wpengine.netdna-ssl.com/wp-content/uploads/2013/06/pdt22-600x600.jpg 600w, https://rnzxu3lrgrj1046y63g4g7l1-wpengine.netdna-ssl.com/wp-content/uploads/2013/06/pdt22-150x150.jpg 150w, https://rnzxu3lrgrj1046y63g4g7l1-wpengine.netdna-ssl.com/wp-content/uploads/2013/06/pdt22-300x300.jpg 300w, https://rnzxu3lrgrj1046y63g4g7l1-wpengine.netdna-ssl.com/wp-content/uploads/2013/06/pdt22-768x768.jpg 768w, https://rnzxu3lrgrj1046y63g4g7l1-wpengine.netdna-ssl.com/wp-content/uploads/2013/06/pdt22-750x750.jpg 750w, https://rnzxu3lrgrj1046y63g4g7l1-wpengine.netdna-ssl.com/wp-content/uploads/2013/06/pdt22-540x540.jpg 540w, https://rnzxu3lrgrj1046y63g4g7l1-wpengine.netdna-ssl.com/wp-content/uploads/2013/06/pdt22-100x100.jpg 100w, https://rnzxu3lrgrj1046y63g4g7l1-wpengine.netdna-ssl.com/wp-content/uploads/2013/06/pdt22.jpg 1000w"
                                                                                    sizes="(max-width: 600px) 100vw, 600px" /><img
                                                                                    width="600" height="600"
                                                                                    src="https://rnzxu3lrgrj1046y63g4g7l1-wpengine.netdna-ssl.com/wp-content/uploads/2013/06/pdt16-600x600.jpg"
                                                                                    class="secondary-image attachment-shop-catalog"
                                                                                    alt="" loading="lazy"
                                                                                    srcset="https://rnzxu3lrgrj1046y63g4g7l1-wpengine.netdna-ssl.com/wp-content/uploads/2013/06/pdt16-600x600.jpg 600w, https://rnzxu3lrgrj1046y63g4g7l1-wpengine.netdna-ssl.com/wp-content/uploads/2013/06/pdt16-150x150.jpg 150w, https://rnzxu3lrgrj1046y63g4g7l1-wpengine.netdna-ssl.com/wp-content/uploads/2013/06/pdt16-300x300.jpg 300w, https://rnzxu3lrgrj1046y63g4g7l1-wpengine.netdna-ssl.com/wp-content/uploads/2013/06/pdt16-768x768.jpg 768w, https://rnzxu3lrgrj1046y63g4g7l1-wpengine.netdna-ssl.com/wp-content/uploads/2013/06/pdt16-750x750.jpg 750w, https://rnzxu3lrgrj1046y63g4g7l1-wpengine.netdna-ssl.com/wp-content/uploads/2013/06/pdt16-540x540.jpg 540w, https://rnzxu3lrgrj1046y63g4g7l1-wpengine.netdna-ssl.com/wp-content/uploads/2013/06/pdt16-100x100.jpg 100w, https://rnzxu3lrgrj1046y63g4g7l1-wpengine.netdna-ssl.com/wp-content/uploads/2013/06/pdt16.jpg 1000w"
                                                                                    sizes="(max-width: 600px) 100vw, 600px" /></a>
                                                                            <div class="product-buttons-wrapper">
                                                                                <div class="wc_inline_buttons">
                                                                                    <div
                                                                                        class="wc_cart_btn_wrapper wc_btn_inline">
                                                                                        <a href="?add-to-cart=8865"
                                                                                            data-quantity="1"
                                                                                            class="dt-sc-button too-small button product_type_simple add_to_cart_button ajax_add_to_cart"
                                                                                            data-product_id="8865"
                                                                                            data-product_sku=""
                                                                                            aria-label="Add &ldquo;Premium Quality&rdquo; to your cart"
                                                                                            rel="nofollow">Add to
                                                                                            cart</a></div>
                                                                                    <div
                                                                                        class="wcwl_btn_wrapper wc_btn_inline">
                                                                                        <div class="yith-wcwl-add-to-wishlist add-to-wishlist-8865  wishlist-fragment on-first-load"
                                                                                            data-fragment-ref="8865"
                                                                                            data-fragment-options="{&quot;base_url&quot;:&quot;&quot;,&quot;in_default_wishlist&quot;:false,&quot;is_single&quot;:false,&quot;show_exists&quot;:false,&quot;product_id&quot;:8865,&quot;parent_product_id&quot;:8865,&quot;product_type&quot;:&quot;simple&quot;,&quot;show_view&quot;:false,&quot;browse_wishlist_text&quot;:&quot;Browse Wishlist&quot;,&quot;already_in_wishslist_text&quot;:&quot;The product is already in the wishlist!&quot;,&quot;product_added_text&quot;:&quot;Product added!&quot;,&quot;heading_icon&quot;:&quot;&quot;,&quot;available_multi_wishlist&quot;:false,&quot;disable_wishlist&quot;:false,&quot;show_count&quot;:false,&quot;ajax_loading&quot;:false,&quot;loop_position&quot;:false,&quot;item&quot;:&quot;add_to_wishlist&quot;}">

                                                                                            <!-- ADD TO WISHLIST -->

                                                                                            <div
                                                                                                class="yith-wcwl-add-button">
                                                                                                <a href="?add_to_wishlist=8865"
                                                                                                    rel="nofollow"
                                                                                                    data-product-id="8865"
                                                                                                    data-product-type="simple"
                                                                                                    data-original-product-id="8865"
                                                                                                    class="add_to_wishlist single_add_to_wishlist"
                                                                                                    data-title="Add to Wishlist">
                                                                                                    <span>Add to
                                                                                                        Wishlist</span>
                                                                                                </a>
                                                                                            </div>
                                                                                            <!-- COUNT TEXT -->

                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class='product-details'>
                                                                            <h5><a
                                                                                    href="https://dtkudil.wpengine.com/product/premium-quality/">Premium
                                                                                    Quality</a></h5><span
                                                                                class="product-price"><span
                                                                                    class="price"><span
                                                                                        class="woocommerce-Price-amount amount"><bdi><span
                                                                                                class="woocommerce-Price-currencySymbol">&pound;</span>20.00</bdi></span></span></span>
                                                                            <div class="product-rating-wrapper">
                                                                                <div class="star-rating" role="img"
                                                                                    aria-label="Rated 4.50 out of 5">
                                                                                    <span style="width:90%">Rated
                                                                                        <strong
                                                                                            class="rating">4.50</strong>
                                                                                        out of 5</span></div>
                                                                            </div>
                                                                        </div>
                                                                    </div> <!-- .product-wrapper -->
                                                                </div> <!-- .column -->
                                                            </div> <!-- .style -->
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="woocommerce columns-3 ">
                                                    <ul class="products columns-3">
                                                        <li
                                                            class="product type-product post-8875 status-publish first instock product_cat-drinks product_cat-lunch has-post-thumbnail shipping-taxable purchasable product-type-simple">
                                                            <div class="woo-type11">
                                                                <div class="column dt-sc-one-third">
                                                                    <div class="product-wrapper">
                                                                        <div class='product-thumb'><a class="image"
                                                                                href="https://dtkudil.wpengine.com/product/chapel-down/"
                                                                                title="Chapel Down"><img width="600"
                                                                                    height="600"
                                                                                    src="https://rnzxu3lrgrj1046y63g4g7l1-wpengine.netdna-ssl.com/wp-content/uploads/2013/06/shop-5-600x600.jpg"
                                                                                    class="attachment-shop_catalog size-shop_catalog wp-post-image"
                                                                                    alt="" loading="lazy"
                                                                                    srcset="https://rnzxu3lrgrj1046y63g4g7l1-wpengine.netdna-ssl.com/wp-content/uploads/2013/06/shop-5-600x600.jpg 600w, https://rnzxu3lrgrj1046y63g4g7l1-wpengine.netdna-ssl.com/wp-content/uploads/2013/06/shop-5-150x150.jpg 150w, https://rnzxu3lrgrj1046y63g4g7l1-wpengine.netdna-ssl.com/wp-content/uploads/2013/06/shop-5-300x300.jpg 300w, https://rnzxu3lrgrj1046y63g4g7l1-wpengine.netdna-ssl.com/wp-content/uploads/2013/06/shop-5-768x768.jpg 768w, https://rnzxu3lrgrj1046y63g4g7l1-wpengine.netdna-ssl.com/wp-content/uploads/2013/06/shop-5-750x750.jpg 750w, https://rnzxu3lrgrj1046y63g4g7l1-wpengine.netdna-ssl.com/wp-content/uploads/2013/06/shop-5-540x540.jpg 540w, https://rnzxu3lrgrj1046y63g4g7l1-wpengine.netdna-ssl.com/wp-content/uploads/2013/06/shop-5-100x100.jpg 100w, https://rnzxu3lrgrj1046y63g4g7l1-wpengine.netdna-ssl.com/wp-content/uploads/2013/06/shop-5.jpg 1000w"
                                                                                    sizes="(max-width: 600px) 100vw, 600px" /><img
                                                                                    width="600" height="600"
                                                                                    src="https://rnzxu3lrgrj1046y63g4g7l1-wpengine.netdna-ssl.com/wp-content/uploads/2013/06/shop-2-600x600.jpg"
                                                                                    class="secondary-image attachment-shop-catalog"
                                                                                    alt="" loading="lazy"
                                                                                    srcset="https://rnzxu3lrgrj1046y63g4g7l1-wpengine.netdna-ssl.com/wp-content/uploads/2013/06/shop-2-600x600.jpg 600w, https://rnzxu3lrgrj1046y63g4g7l1-wpengine.netdna-ssl.com/wp-content/uploads/2013/06/shop-2-150x150.jpg 150w, https://rnzxu3lrgrj1046y63g4g7l1-wpengine.netdna-ssl.com/wp-content/uploads/2013/06/shop-2-300x300.jpg 300w, https://rnzxu3lrgrj1046y63g4g7l1-wpengine.netdna-ssl.com/wp-content/uploads/2013/06/shop-2-768x768.jpg 768w, https://rnzxu3lrgrj1046y63g4g7l1-wpengine.netdna-ssl.com/wp-content/uploads/2013/06/shop-2-750x750.jpg 750w, https://rnzxu3lrgrj1046y63g4g7l1-wpengine.netdna-ssl.com/wp-content/uploads/2013/06/shop-2-540x540.jpg 540w, https://rnzxu3lrgrj1046y63g4g7l1-wpengine.netdna-ssl.com/wp-content/uploads/2013/06/shop-2-100x100.jpg 100w, https://rnzxu3lrgrj1046y63g4g7l1-wpengine.netdna-ssl.com/wp-content/uploads/2013/06/shop-2.jpg 1000w"
                                                                                    sizes="(max-width: 600px) 100vw, 600px" /></a>
                                                                            <div class="product-buttons-wrapper">
                                                                                <div class="wc_inline_buttons">
                                                                                    <div
                                                                                        class="wc_cart_btn_wrapper wc_btn_inline">
                                                                                        <a href="?add-to-cart=8875"
                                                                                            data-quantity="1"
                                                                                            class="dt-sc-button too-small button product_type_simple add_to_cart_button ajax_add_to_cart"
                                                                                            data-product_id="8875"
                                                                                            data-product_sku=""
                                                                                            aria-label="Add &ldquo;Chapel Down&rdquo; to your cart"
                                                                                            rel="nofollow">Add to
                                                                                            cart</a></div>
                                                                                    <div
                                                                                        class="wcwl_btn_wrapper wc_btn_inline">
                                                                                        <div class="yith-wcwl-add-to-wishlist add-to-wishlist-8875  wishlist-fragment on-first-load"
                                                                                            data-fragment-ref="8875"
                                                                                            data-fragment-options="{&quot;base_url&quot;:&quot;&quot;,&quot;in_default_wishlist&quot;:false,&quot;is_single&quot;:false,&quot;show_exists&quot;:false,&quot;product_id&quot;:8875,&quot;parent_product_id&quot;:8875,&quot;product_type&quot;:&quot;simple&quot;,&quot;show_view&quot;:false,&quot;browse_wishlist_text&quot;:&quot;Browse Wishlist&quot;,&quot;already_in_wishslist_text&quot;:&quot;The product is already in the wishlist!&quot;,&quot;product_added_text&quot;:&quot;Product added!&quot;,&quot;heading_icon&quot;:&quot;&quot;,&quot;available_multi_wishlist&quot;:false,&quot;disable_wishlist&quot;:false,&quot;show_count&quot;:false,&quot;ajax_loading&quot;:false,&quot;loop_position&quot;:false,&quot;item&quot;:&quot;add_to_wishlist&quot;}">

                                                                                            <!-- ADD TO WISHLIST -->

                                                                                            <div
                                                                                                class="yith-wcwl-add-button">
                                                                                                <a href="?add_to_wishlist=8875"
                                                                                                    rel="nofollow"
                                                                                                    data-product-id="8875"
                                                                                                    data-product-type="simple"
                                                                                                    data-original-product-id="8875"
                                                                                                    class="add_to_wishlist single_add_to_wishlist"
                                                                                                    data-title="Add to Wishlist">
                                                                                                    <span>Add to
                                                                                                        Wishlist</span>
                                                                                                </a>
                                                                                            </div>
                                                                                            <!-- COUNT TEXT -->

                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class='product-details'>
                                                                            <h5><a
                                                                                    href="https://dtkudil.wpengine.com/product/chapel-down/">Chapel
                                                                                    Down</a></h5><span
                                                                                class="product-price"><span
                                                                                    class="price"><span
                                                                                        class="woocommerce-Price-amount amount"><bdi><span
                                                                                                class="woocommerce-Price-currencySymbol">&pound;</span>14.95</bdi></span></span></span>
                                                                            <div class="product-rating-wrapper">
                                                                                <div class="star-rating" role="img"
                                                                                    aria-label="Rated 4.00 out of 5">
                                                                                    <span style="width:80%">Rated
                                                                                        <strong
                                                                                            class="rating">4.00</strong>
                                                                                        out of 5</span></div>
                                                                            </div>
                                                                        </div>
                                                                    </div> <!-- .product-wrapper -->
                                                                </div> <!-- .column -->
                                                            </div> <!-- .style -->
                                                        </li>
                                                        <li
                                                            class="product type-product post-8874 status-publish instock product_cat-drinks product_cat-lunch has-post-thumbnail shipping-taxable purchasable product-type-simple">
                                                            <div class="woo-type11">
                                                                <div class="column dt-sc-one-third">
                                                                    <div class="product-wrapper">
                                                                        <div class='product-thumb'><a class="image"
                                                                                href="https://dtkudil.wpengine.com/product/filet-de-saumon-2/"
                                                                                title="Filet De Saumon"><img width="600"
                                                                                    height="600"
                                                                                    src="https://rnzxu3lrgrj1046y63g4g7l1-wpengine.netdna-ssl.com/wp-content/uploads/2013/06/pdt13-600x600.jpg"
                                                                                    class="attachment-shop_catalog size-shop_catalog wp-post-image"
                                                                                    alt="" loading="lazy"
                                                                                    srcset="https://rnzxu3lrgrj1046y63g4g7l1-wpengine.netdna-ssl.com/wp-content/uploads/2013/06/pdt13-600x600.jpg 600w, https://rnzxu3lrgrj1046y63g4g7l1-wpengine.netdna-ssl.com/wp-content/uploads/2013/06/pdt13-150x150.jpg 150w, https://rnzxu3lrgrj1046y63g4g7l1-wpengine.netdna-ssl.com/wp-content/uploads/2013/06/pdt13-300x300.jpg 300w, https://rnzxu3lrgrj1046y63g4g7l1-wpengine.netdna-ssl.com/wp-content/uploads/2013/06/pdt13-768x768.jpg 768w, https://rnzxu3lrgrj1046y63g4g7l1-wpengine.netdna-ssl.com/wp-content/uploads/2013/06/pdt13-750x750.jpg 750w, https://rnzxu3lrgrj1046y63g4g7l1-wpengine.netdna-ssl.com/wp-content/uploads/2013/06/pdt13-540x540.jpg 540w, https://rnzxu3lrgrj1046y63g4g7l1-wpengine.netdna-ssl.com/wp-content/uploads/2013/06/pdt13-100x100.jpg 100w, https://rnzxu3lrgrj1046y63g4g7l1-wpengine.netdna-ssl.com/wp-content/uploads/2013/06/pdt13.jpg 1000w"
                                                                                    sizes="(max-width: 600px) 100vw, 600px" /><img
                                                                                    width="600" height="600"
                                                                                    src="https://rnzxu3lrgrj1046y63g4g7l1-wpengine.netdna-ssl.com/wp-content/uploads/2013/06/pdt13-600x600.jpg"
                                                                                    class="secondary-image attachment-shop-catalog"
                                                                                    alt="" loading="lazy"
                                                                                    srcset="https://rnzxu3lrgrj1046y63g4g7l1-wpengine.netdna-ssl.com/wp-content/uploads/2013/06/pdt13-600x600.jpg 600w, https://rnzxu3lrgrj1046y63g4g7l1-wpengine.netdna-ssl.com/wp-content/uploads/2013/06/pdt13-150x150.jpg 150w, https://rnzxu3lrgrj1046y63g4g7l1-wpengine.netdna-ssl.com/wp-content/uploads/2013/06/pdt13-300x300.jpg 300w, https://rnzxu3lrgrj1046y63g4g7l1-wpengine.netdna-ssl.com/wp-content/uploads/2013/06/pdt13-768x768.jpg 768w, https://rnzxu3lrgrj1046y63g4g7l1-wpengine.netdna-ssl.com/wp-content/uploads/2013/06/pdt13-750x750.jpg 750w, https://rnzxu3lrgrj1046y63g4g7l1-wpengine.netdna-ssl.com/wp-content/uploads/2013/06/pdt13-540x540.jpg 540w, https://rnzxu3lrgrj1046y63g4g7l1-wpengine.netdna-ssl.com/wp-content/uploads/2013/06/pdt13-100x100.jpg 100w, https://rnzxu3lrgrj1046y63g4g7l1-wpengine.netdna-ssl.com/wp-content/uploads/2013/06/pdt13.jpg 1000w"
                                                                                    sizes="(max-width: 600px) 100vw, 600px" /></a>
                                                                            <div class="product-buttons-wrapper">
                                                                                <div class="wc_inline_buttons">
                                                                                    <div
                                                                                        class="wc_cart_btn_wrapper wc_btn_inline">
                                                                                        <a href="?add-to-cart=8874"
                                                                                            data-quantity="1"
                                                                                            class="dt-sc-button too-small button product_type_simple add_to_cart_button ajax_add_to_cart"
                                                                                            data-product_id="8874"
                                                                                            data-product_sku=""
                                                                                            aria-label="Add &ldquo;Filet De Saumon&rdquo; to your cart"
                                                                                            rel="nofollow">Add to
                                                                                            cart</a></div>
                                                                                    <div
                                                                                        class="wcwl_btn_wrapper wc_btn_inline">
                                                                                        <div class="yith-wcwl-add-to-wishlist add-to-wishlist-8874  wishlist-fragment on-first-load"
                                                                                            data-fragment-ref="8874"
                                                                                            data-fragment-options="{&quot;base_url&quot;:&quot;&quot;,&quot;in_default_wishlist&quot;:false,&quot;is_single&quot;:false,&quot;show_exists&quot;:false,&quot;product_id&quot;:8874,&quot;parent_product_id&quot;:8874,&quot;product_type&quot;:&quot;simple&quot;,&quot;show_view&quot;:false,&quot;browse_wishlist_text&quot;:&quot;Browse Wishlist&quot;,&quot;already_in_wishslist_text&quot;:&quot;The product is already in the wishlist!&quot;,&quot;product_added_text&quot;:&quot;Product added!&quot;,&quot;heading_icon&quot;:&quot;&quot;,&quot;available_multi_wishlist&quot;:false,&quot;disable_wishlist&quot;:false,&quot;show_count&quot;:false,&quot;ajax_loading&quot;:false,&quot;loop_position&quot;:false,&quot;item&quot;:&quot;add_to_wishlist&quot;}">

                                                                                            <!-- ADD TO WISHLIST -->

                                                                                            <div
                                                                                                class="yith-wcwl-add-button">
                                                                                                <a href="?add_to_wishlist=8874"
                                                                                                    rel="nofollow"
                                                                                                    data-product-id="8874"
                                                                                                    data-product-type="simple"
                                                                                                    data-original-product-id="8874"
                                                                                                    class="add_to_wishlist single_add_to_wishlist"
                                                                                                    data-title="Add to Wishlist">
                                                                                                    <span>Add to
                                                                                                        Wishlist</span>
                                                                                                </a>
                                                                                            </div>
                                                                                            <!-- COUNT TEXT -->

                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class='product-details'>
                                                                            <h5><a
                                                                                    href="https://dtkudil.wpengine.com/product/filet-de-saumon-2/">Filet
                                                                                    De Saumon</a></h5><span
                                                                                class="product-price"><span
                                                                                    class="price"><span
                                                                                        class="woocommerce-Price-amount amount"><bdi><span
                                                                                                class="woocommerce-Price-currencySymbol">&pound;</span>8.95</bdi></span></span></span>
                                                                            <div class="product-rating-wrapper">
                                                                                <div class="star-rating" role="img"
                                                                                    aria-label="Rated 4.17 out of 5">
                                                                                    <span style="width:83.4%">Rated
                                                                                        <strong
                                                                                            class="rating">4.17</strong>
                                                                                        out of 5</span></div>
                                                                            </div>
                                                                        </div>
                                                                    </div> <!-- .product-wrapper -->
                                                                </div> <!-- .column -->
                                                            </div> <!-- .style -->
                                                        </li>
                                                        <li
                                                            class="product type-product post-8872 status-publish last instock product_cat-drinks product_cat-lunch has-post-thumbnail shipping-taxable purchasable product-type-simple">
                                                            <div class="woo-type11">
                                                                <div class="column dt-sc-one-third">
                                                                    <div class="product-wrapper">
                                                                        <div class='product-thumb'><a class="image"
                                                                                href="https://dtkudil.wpengine.com/product/gascogne-blanc/"
                                                                                title="Gascogne Blanc"><img width="600"
                                                                                    height="600"
                                                                                    src="https://rnzxu3lrgrj1046y63g4g7l1-wpengine.netdna-ssl.com/wp-content/uploads/2013/06/pdt15-600x600.jpg"
                                                                                    class="attachment-shop_catalog size-shop_catalog wp-post-image"
                                                                                    alt="" loading="lazy"
                                                                                    srcset="https://rnzxu3lrgrj1046y63g4g7l1-wpengine.netdna-ssl.com/wp-content/uploads/2013/06/pdt15-600x600.jpg 600w, https://rnzxu3lrgrj1046y63g4g7l1-wpengine.netdna-ssl.com/wp-content/uploads/2013/06/pdt15-150x150.jpg 150w, https://rnzxu3lrgrj1046y63g4g7l1-wpengine.netdna-ssl.com/wp-content/uploads/2013/06/pdt15-300x300.jpg 300w, https://rnzxu3lrgrj1046y63g4g7l1-wpengine.netdna-ssl.com/wp-content/uploads/2013/06/pdt15-768x768.jpg 768w, https://rnzxu3lrgrj1046y63g4g7l1-wpengine.netdna-ssl.com/wp-content/uploads/2013/06/pdt15-750x750.jpg 750w, https://rnzxu3lrgrj1046y63g4g7l1-wpengine.netdna-ssl.com/wp-content/uploads/2013/06/pdt15-540x540.jpg 540w, https://rnzxu3lrgrj1046y63g4g7l1-wpengine.netdna-ssl.com/wp-content/uploads/2013/06/pdt15-100x100.jpg 100w, https://rnzxu3lrgrj1046y63g4g7l1-wpengine.netdna-ssl.com/wp-content/uploads/2013/06/pdt15.jpg 1000w"
                                                                                    sizes="(max-width: 600px) 100vw, 600px" /><img
                                                                                    width="600" height="600"
                                                                                    src="https://rnzxu3lrgrj1046y63g4g7l1-wpengine.netdna-ssl.com/wp-content/uploads/2013/06/pdt19-600x600.jpg"
                                                                                    class="secondary-image attachment-shop-catalog"
                                                                                    alt="" loading="lazy"
                                                                                    srcset="https://rnzxu3lrgrj1046y63g4g7l1-wpengine.netdna-ssl.com/wp-content/uploads/2013/06/pdt19-600x600.jpg 600w, https://rnzxu3lrgrj1046y63g4g7l1-wpengine.netdna-ssl.com/wp-content/uploads/2013/06/pdt19-150x150.jpg 150w, https://rnzxu3lrgrj1046y63g4g7l1-wpengine.netdna-ssl.com/wp-content/uploads/2013/06/pdt19-300x300.jpg 300w, https://rnzxu3lrgrj1046y63g4g7l1-wpengine.netdna-ssl.com/wp-content/uploads/2013/06/pdt19-768x768.jpg 768w, https://rnzxu3lrgrj1046y63g4g7l1-wpengine.netdna-ssl.com/wp-content/uploads/2013/06/pdt19-750x750.jpg 750w, https://rnzxu3lrgrj1046y63g4g7l1-wpengine.netdna-ssl.com/wp-content/uploads/2013/06/pdt19-540x540.jpg 540w, https://rnzxu3lrgrj1046y63g4g7l1-wpengine.netdna-ssl.com/wp-content/uploads/2013/06/pdt19-100x100.jpg 100w, https://rnzxu3lrgrj1046y63g4g7l1-wpengine.netdna-ssl.com/wp-content/uploads/2013/06/pdt19.jpg 1000w"
                                                                                    sizes="(max-width: 600px) 100vw, 600px" /></a>
                                                                            <div class="product-buttons-wrapper">
                                                                                <div class="wc_inline_buttons">
                                                                                    <div
                                                                                        class="wc_cart_btn_wrapper wc_btn_inline">
                                                                                        <a href="?add-to-cart=8872"
                                                                                            data-quantity="1"
                                                                                            class="dt-sc-button too-small button product_type_simple add_to_cart_button ajax_add_to_cart"
                                                                                            data-product_id="8872"
                                                                                            data-product_sku=""
                                                                                            aria-label="Add &ldquo;Gascogne Blanc&rdquo; to your cart"
                                                                                            rel="nofollow">Add to
                                                                                            cart</a></div>
                                                                                    <div
                                                                                        class="wcwl_btn_wrapper wc_btn_inline">
                                                                                        <div class="yith-wcwl-add-to-wishlist add-to-wishlist-8872  wishlist-fragment on-first-load"
                                                                                            data-fragment-ref="8872"
                                                                                            data-fragment-options="{&quot;base_url&quot;:&quot;&quot;,&quot;in_default_wishlist&quot;:false,&quot;is_single&quot;:false,&quot;show_exists&quot;:false,&quot;product_id&quot;:8872,&quot;parent_product_id&quot;:8872,&quot;product_type&quot;:&quot;simple&quot;,&quot;show_view&quot;:false,&quot;browse_wishlist_text&quot;:&quot;Browse Wishlist&quot;,&quot;already_in_wishslist_text&quot;:&quot;The product is already in the wishlist!&quot;,&quot;product_added_text&quot;:&quot;Product added!&quot;,&quot;heading_icon&quot;:&quot;&quot;,&quot;available_multi_wishlist&quot;:false,&quot;disable_wishlist&quot;:false,&quot;show_count&quot;:false,&quot;ajax_loading&quot;:false,&quot;loop_position&quot;:false,&quot;item&quot;:&quot;add_to_wishlist&quot;}">

                                                                                            <!-- ADD TO WISHLIST -->

                                                                                            <div
                                                                                                class="yith-wcwl-add-button">
                                                                                                <a href="?add_to_wishlist=8872"
                                                                                                    rel="nofollow"
                                                                                                    data-product-id="8872"
                                                                                                    data-product-type="simple"
                                                                                                    data-original-product-id="8872"
                                                                                                    class="add_to_wishlist single_add_to_wishlist"
                                                                                                    data-title="Add to Wishlist">
                                                                                                    <span>Add to
                                                                                                        Wishlist</span>
                                                                                                </a>
                                                                                            </div>
                                                                                            <!-- COUNT TEXT -->

                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class='product-details'>
                                                                            <h5><a
                                                                                    href="https://dtkudil.wpengine.com/product/gascogne-blanc/">Gascogne
                                                                                    Blanc</a></h5><span
                                                                                class="product-price"><span
                                                                                    class="price"><span
                                                                                        class="woocommerce-Price-amount amount"><bdi><span
                                                                                                class="woocommerce-Price-currencySymbol">&pound;</span>10.95</bdi></span></span></span>
                                                                            <div class="product-rating-wrapper">
                                                                                <div class="star-rating" role="img"
                                                                                    aria-label="Rated 4.67 out of 5">
                                                                                    <span style="width:93.4%">Rated
                                                                                        <strong
                                                                                            class="rating">4.67</strong>
                                                                                        out of 5</span></div>
                                                                            </div>
                                                                        </div>
                                                                    </div> <!-- .product-wrapper -->
                                                                </div> <!-- .column -->
                                                            </div> <!-- .style -->
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div id="1524303316725-9602c2ac-e5d9" class="dt-sc-empty-space"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div><!-- #post-9023 -->
                    </section><!-- Primary End -->
                </div>
                <!-- ** Container End ** -->

            </div><!-- **Main - End ** -->

@endsection

@section('footer')
    @parent
    <!-- Instagram Feed JS -->
    <script type="text/javascript">
        var sbiajaxurl = "https://dtkudil.wpengine.com/wp-admin/admin-ajax.php";
    </script>
    <script type="text/html" id="wpb-modifications"></script>
    <script type="text/javascript">
        (function () {
            var c = document.body.className;
            c = c.replace(/woocommerce-no-js/, 'woocommerce-js');
            document.body.className = c;
        })()
    </script>
    <style id='kudil-custom-inline-inline-css' type='text/css'>
        .vc_custom_1536209656392 {
            background-color: #000000 !important;
        }

        div[id="1537258805794-0a25aef6-f3de"] {
            height: 0px
        }

        @media only screen and (min-width:992px) and (max-width:1199px) {
            div[id="1537258805794-0a25aef6-f3de"] {
                height: 30px
            }
        }

        @media only screen and (min-width:768px) and (max-width:991px) {
            div[id="1537258805794-0a25aef6-f3de"] {
                height: 30px
            }
        }

        @media (max-width: 767px) {
            div[id="1537258805794-0a25aef6-f3de"] {
                height: 25px
            }
        }


        div#dt-1505558235344-642791a5-e86a img {
            width: 80px;
        }

        @media only screen and (max-width: 767px) {
            div#dt-1505558235344-642791a5-e86a img {
                width: 80px;
            }
        }

        div[id="1539330672323-74cfb197-991e"] {
            height: 0px
        }

        @media only screen and (min-width:992px) and (max-width:1199px) {
            div[id="1539330672323-74cfb197-991e"] {
                height: 30px
            }
        }

        @media only screen and (min-width:768px) and (max-width:991px) {
            div[id="1539330672323-74cfb197-991e"] {
                height: 30px
            }
        }


        div#dt-1505559553043-0fc3b635-35b1 ul.dt-primary-nav>li>a {
            font-size: 16px;
            text-transform: capitalize;
            color: #ffffff;
        }


        div#dt-1505559553043-0fc3b635-35b1 ul.dt-primary-nav>li:hover>a,
        div#dt-1505559553043-0fc3b635-35b1 ul.dt-primary-nav>li.current_page_item>a,
        div#dt-1505559553043-0fc3b635-35b1 ul.dt-primary-nav>li.current-menu-item>a,
        div#dt-1505559553043-0fc3b635-35b1 ul.dt-primary-nav>li.current-page-ancestor>a,
        div#dt-1505559553043-0fc3b635-35b1 ul.dt-primary-nav>li.current-menu-ancestor>a {
            color: #c59d5f;
        }

        div#dt-1505559553043-0fc3b635-35b1 ul>li:not(.has-mega-menu) ul.sub-menu li>a {
            font-size: 15px;
            text-transform: capitalize;
            text-align: left;
            color: #ffffff;
            background-color: #000000;
        }


        div#dt-1505559553043-0fc3b635-35b1 ul>li:not(.has-mega-menu) ul.sub-menu li:hover>a,
        div#dt-1505559553043-0fc3b635-35b1 ul>li:not(.has-mega-menu) ul.sub-menu li>a:hover,
        div#dt-1505559553043-0fc3b635-35b1 ul>li:not(.has-mega-menu) ul.sub-menu li.current-menu-item>a,
        div#dt-1505559553043-0fc3b635-35b1 ul>li:not(.has-mega-menu) ul.sub-menu li.current-page-item>a,
        div#dt-1505559553043-0fc3b635-35b1 ul>li:not(.has-mega-menu) ul.sub-menu li.current-menu-ancestor>a,
        div#dt-1505559553043-0fc3b635-35b1 ul>li:not(.has-mega-menu) ul.sub-menu li.current-page-ancestor>a {
            color: #c59d5f;
        }

        @media only screen and (max-width: 1199px) {
            div#dt-1505559553043-0fc3b635-35b1 {
                display: none;
            }

            div#dt-1505559553043-0fc3b635-35b1-mobile {
                display: block;
            }

            div#dt-1505559553043-0fc3b635-35b1-mobile .menu-trigger>span {
                color: #ffffff
            }

            div#dt-1505559553043-0fc3b635-35b1-mobile .menu-trigger>i {
                color: #ffffff
            }
        }

        @media only screen and (min-width: 1200px) {
            div#dt-1505559553043-0fc3b635-35b1 {
                display: inline-block;
            }

            div#dt-1505559553043-0fc3b635-35b1.center {
                display: table;
            }

            div#dt-1505559553043-0fc3b635-35b1-mobile,
            div#dt-1505559553043-0fc3b635-35b1 li.go-back,
            div#dt-1505559553043-0fc3b635-35b1 li.see-all {
                display: none;
            }
        }

        ul#dt-1524822198822-73feb53a-776d>li>a>i {
            color: #ffffff;
        }

        ul#dt-1524822198822-73feb53a-776d>li>a:hover>i {
            color: #c59d5f;
        }

        div[id="1524210090117-fa54dca5-59b6"] {
            height: 70px
        }

        div[id="1524298404374-c2823fc9-ad2c"] {
            height: 50px
        }

        div[id="1524302981202-ee979275-17d5"] {
            height: 50px
        }

        div[id="1523865091863-22bcea49-a84b"] {
            height: 150px
        }

        div[id="1523865091959-7c03b318-c4ba"] {
            height: 110px
        }

        div[id="1524303087103-fe772352-bcc5"] {
            height: 100px
        }

        div[id="1524299624771-39116e3c-dae7"] {
            height: 50px
        }

        div[id="1524303273461-fc29b058-c185"] {
            height: 50px
        }

        div[id="1524303137444-7633154e-7768"] {
            height: 150px
        }

        div[id="1524303137515-6d812601-8eda"] {
            height: 110px
        }

        div[id="1524303255715-5b46d43d-559a"] {
            height: 100px
        }

        div[id="1524299760474-4fee69b3-9555"] {
            height: 50px
        }

        div[id="1524303316725-9602c2ac-e5d9"] {
            height: 50px
        }

        .vc_custom_1523537863763 {
            background-color: #131212 !important;
        }

        .vc_custom_1537167279388 {
            background-color: #131212 !important;
        }

        .vc_custom_1523595041105 {
            padding-top: 20px !important;
            padding-bottom: 20px !important;
            background-color: #000000 !important;
        }

        .vc_custom_1538048724186 {
            border-bottom-width: 1px !important;
            padding-bottom: 15px !important;
            border-bottom-color: #333333 !important;
            border-bottom-style: solid !important;
        }

        .vc_custom_1537176591307 {
            padding-right: 0px !important;
            padding-left: 0px !important;
        }

        .vc_custom_1537174356532 {
            padding-right: 0px !important;
            padding-left: 0px !important;
        }

        .vc_custom_1525930726704 {
            margin-bottom: 0px !important;
        }

        div[id="1523537107910-2510b04a-0558"] {
            height: 30px
        }

        ul#dt-1523604669584-c5835bdf-bfd0>li>a>i {
            color: #ffffff;
        }

        ul#dt-1523604669584-c5835bdf-bfd0>li>a:hover>i {
            color: #c59d5f;
        }

        div#dt-1523535457383-8bb533f7-11da img {
            width: 80px;
        }

        @media only screen and (max-width: 767px) {
            div#dt-1523535457383-8bb533f7-11da img {
                width: 80px;
            }
        }

        div[id="1537168537865-52f78122-125d"] {
            height: 100px
        }

        @media only screen and (min-width:992px) and (max-width:1199px) {
            div[id="1537168537865-52f78122-125d"] {
                height: 100px
            }
        }

        @media only screen and (min-width:768px) and (max-width:991px) {
            div[id="1537168537865-52f78122-125d"] {
                height: 50px
            }
        }

        @media (max-width: 767px) {
            div[id="1537168537865-52f78122-125d"] {
                height: 50px
            }
        }

        div[id="1537170266206-0ae867fd-254a"] {
            height: 70px
        }

        @media only screen and (min-width:992px) and (max-width:1199px) {
            div[id="1537170266206-0ae867fd-254a"] {
                height: 70px
            }
        }

        @media only screen and (min-width:768px) and (max-width:991px) {
            div[id="1537170266206-0ae867fd-254a"] {
                height: 50px
            }
        }

        @media (max-width: 767px) {
            div[id="1537170266206-0ae867fd-254a"] {
                height: 50px
            }
        }

        @media only screen and (min-width:768px) and (max-width:991px) {
            div[id="1506489946772-da61787f-542c"] {
                height: 20px
            }
        }

        @media (max-width: 767px) {
            div[id="1506489946772-da61787f-542c"] {
                height: 20px
            }
        }

    </style>
    <link rel='stylesheet' id='vc_font_awesome_5_shims-css'
        href='https://rnzxu3lrgrj1046y63g4g7l1-wpengine.netdna-ssl.com/wp-content/plugins/js_composer/assets/lib/bower/font-awesome/css/v4-shims.min.css?ver=6.5.0'
        type='text/css' media='all' />
    <link rel='stylesheet' id='vc_font_awesome_5-css'
        href='https://rnzxu3lrgrj1046y63g4g7l1-wpengine.netdna-ssl.com/wp-content/plugins/js_composer/assets/lib/bower/font-awesome/css/all.min.css?ver=6.5.0'
        type='text/css' media='all' />
    <script type='text/javascript'
        src='https://rnzxu3lrgrj1046y63g4g7l1-wpengine.netdna-ssl.com/wp-content/plugins/yith-woocommerce-wishlist/assets/js/jquery.selectBox.min.js?ver=1.2.0'
        id='jquery-selectBox-js'></script>
    <script type='text/javascript' id='jquery-yith-wcwl-js-extra'>
        /* <![CDATA[ */
        var yith_wcwl_l10n = { "ajax_url": "\/wp-admin\/admin-ajax.php", "redirect_to_cart": "no", "multi_wishlist": "", "hide_add_button": "1", "enable_ajax_loading": "", "ajax_loader_url": "https:\/\/dtkudil.wpengine.com\/wp-content\/plugins\/yith-woocommerce-wishlist\/assets\/images\/ajax-loader-alt.svg", "remove_from_wishlist_after_add_to_cart": "1", "is_wishlist_responsive": "1", "time_to_close_prettyphoto": "3000", "fragments_index_glue": ".", "reload_on_found_variation": "1", "labels": { "cookie_disabled": "We are sorry, but this feature is available only if cookies on your browser are enabled.", "added_to_cart_message": "<div class=\"woocommerce-notices-wrapper\"><div class=\"woocommerce-message\" role=\"alert\">Product added to cart successfully<\/div><\/div>" }, "actions": { "add_to_wishlist_action": "add_to_wishlist", "remove_from_wishlist_action": "remove_from_wishlist", "reload_wishlist_and_adding_elem_action": "reload_wishlist_and_adding_elem", "load_mobile_action": "load_mobile", "delete_item_action": "delete_item", "save_title_action": "save_title", "save_privacy_action": "save_privacy", "load_fragments": "load_fragments" } };
/* ]]> */
    </script>
    <script type='text/javascript'
        src='https://rnzxu3lrgrj1046y63g4g7l1-wpengine.netdna-ssl.com/wp-content/plugins/yith-woocommerce-wishlist/assets/js/jquery.yith-wcwl.js?ver=3.0.17'
        id='jquery-yith-wcwl-js'></script>
    <script type='text/javascript' id='contact-form-7-js-extra'>
        /* <![CDATA[ */
        var wpcf7 = { "apiSettings": { "root": "https:\/\/dtkudil.wpengine.com\/wp-json\/contact-form-7\/v1", "namespace": "contact-form-7\/v1" }, "cached": "1" };
/* ]]> */
    </script>
    <script type='text/javascript'
        src='https://rnzxu3lrgrj1046y63g4g7l1-wpengine.netdna-ssl.com/wp-content/plugins/contact-form-7/includes/js/scripts.js?ver=5.3.2'
        id='contact-form-7-js'></script>
    <script type='text/javascript'
        src='https://rnzxu3lrgrj1046y63g4g7l1-wpengine.netdna-ssl.com/wp-content/plugins/designthemes-core-features/shortcodes/js/jquery.tabs.min.js?ver=6.0.2'
        id='dt-sc-tabs-js'></script>
    <script type='text/javascript'
        src='https://rnzxu3lrgrj1046y63g4g7l1-wpengine.netdna-ssl.com/wp-content/plugins/designthemes-core-features/shortcodes/js/jquery.tipTip.minified.js?ver=6.0.2'
        id='dt-sc-tiptip-js'></script>
    <script type='text/javascript'
        src='https://rnzxu3lrgrj1046y63g4g7l1-wpengine.netdna-ssl.com/wp-content/plugins/designthemes-core-features/shortcodes/js/jquery.inview.js?ver=6.0.2'
        id='dt-sc-inview-js'></script>
    <script type='text/javascript'
        src='https://rnzxu3lrgrj1046y63g4g7l1-wpengine.netdna-ssl.com/wp-content/plugins/designthemes-core-features/shortcodes/js/jquery.animateNumber.min.js?ver=6.0.2'
        id='dt-sc-animatenum-js'></script>
    <script type='text/javascript'
        src='https://rnzxu3lrgrj1046y63g4g7l1-wpengine.netdna-ssl.com/wp-content/plugins/designthemes-core-features/shortcodes/js/jquery.donutchart.js?ver=6.0.2'
        id='dt-sc-donutchart-js'></script>
    <script type='text/javascript'
        src='https://rnzxu3lrgrj1046y63g4g7l1-wpengine.netdna-ssl.com/wp-content/plugins/designthemes-core-features/shortcodes/js/slick.min.js?ver=6.0.2'
        id='dt-sc-slick-js'></script>
    <script type='text/javascript'
        src='https://rnzxu3lrgrj1046y63g4g7l1-wpengine.netdna-ssl.com/wp-content/plugins/designthemes-core-features/shortcodes/js/jquery.toggle.click.js?ver=6.0.2'
        id='dt-sc-toggle-click-js'></script>
    <script type='text/javascript'
        src='https://rnzxu3lrgrj1046y63g4g7l1-wpengine.netdna-ssl.com/wp-content/plugins/designthemes-core-features/shortcodes/js/shortcodes.js?ver=6.0.2'
        id='dt-sc-script-js'></script>
    <script type='text/javascript'
        src='https://rnzxu3lrgrj1046y63g4g7l1-wpengine.netdna-ssl.com/wp-content/plugins/designthemes-core-features/custom-post-types/js/protfolio-custom.js?ver=6.0.2'
        id='dt-sc-portfolio-custom-script-js'></script>
    <script type='text/javascript'
        src='https://rnzxu3lrgrj1046y63g4g7l1-wpengine.netdna-ssl.com/wp-content/plugins/designthemes-fb-pixel/script.js?ver=6.0.2'
        id='dt-fbpixel-script-js'></script>
    <script type='text/javascript'
        src='https://rnzxu3lrgrj1046y63g4g7l1-wpengine.netdna-ssl.com/wp-content/plugins/woocommerce/assets/js/js-cookie/js.cookie.min.js?ver=2.1.4'
        id='js-cookie-js'></script>
    <script type='text/javascript' id='woocommerce-js-extra'>
        /* <![CDATA[ */
        var woocommerce_params = { "ajax_url": "\/wp-admin\/admin-ajax.php", "wc_ajax_url": "\/?wc-ajax=%%endpoint%%" };
/* ]]> */
    </script>
    <script type='text/javascript'
        src='https://rnzxu3lrgrj1046y63g4g7l1-wpengine.netdna-ssl.com/wp-content/plugins/woocommerce/assets/js/frontend/woocommerce.min.js?ver=4.8.3'
        id='woocommerce-js'></script>
    <script type='text/javascript' id='wc-cart-fragments-js-extra'>
        /* <![CDATA[ */
        var wc_cart_fragments_params = { "ajax_url": "\/wp-admin\/admin-ajax.php", "wc_ajax_url": "\/?wc-ajax=%%endpoint%%", "cart_hash_key": "wc_cart_hash_d18e8576199eb6eb96334eaaf54378cf", "fragment_name": "wc_fragments_d18e8576199eb6eb96334eaaf54378cf", "request_timeout": "5000" };
/* ]]> */
    </script>
    <script type='text/javascript'
        src='https://rnzxu3lrgrj1046y63g4g7l1-wpengine.netdna-ssl.com/wp-content/plugins/woocommerce/assets/js/frontend/cart-fragments.min.js?ver=4.8.3'
        id='wc-cart-fragments-js'></script>
    <script type='text/javascript'
        src='https://rnzxu3lrgrj1046y63g4g7l1-wpengine.netdna-ssl.com/wp-content/plugins/woocommerce/assets/js/prettyPhoto/jquery.prettyPhoto.min.js?ver=3.1.6'
        id='prettyPhoto-js'></script>
    <script type='text/javascript'
        src='https://rnzxu3lrgrj1046y63g4g7l1-wpengine.netdna-ssl.com/wp-content/themes/kudil/framework/js/jquery.ui.totop.min.js?ver=6.0.2'
        id='ui-totop-js'></script>
    <script type='text/javascript'
        src='https://rnzxu3lrgrj1046y63g4g7l1-wpengine.netdna-ssl.com/wp-content/themes/kudil/framework/js/jquery.easing.js?ver=6.0.2'
        id='easing-js'></script>
    <script type='text/javascript'
        src='https://rnzxu3lrgrj1046y63g4g7l1-wpengine.netdna-ssl.com/wp-content/themes/kudil/framework/js/jquery.caroufredsel.js?ver=6.0.2'
        id='caroufredsel-js'></script>
    <script type='text/javascript'
        src='https://rnzxu3lrgrj1046y63g4g7l1-wpengine.netdna-ssl.com/wp-content/themes/kudil/framework/js/jquery.debouncedresize.js?ver=6.0.2'
        id='debouncedresize-js'></script>
    <script type='text/javascript'
        src='https://rnzxu3lrgrj1046y63g4g7l1-wpengine.netdna-ssl.com/wp-content/plugins/js_composer/assets/lib/prettyphoto/js/jquery.prettyPhoto.min.js?ver=6.5.0'
        id='prettyphoto-js'></script>
    <script type='text/javascript'
        src='https://rnzxu3lrgrj1046y63g4g7l1-wpengine.netdna-ssl.com/wp-content/themes/kudil/framework/js/jquery.bully.js?ver=6.0.2'
        id='bully-js'></script>
    <script type='text/javascript'
        src='https://rnzxu3lrgrj1046y63g4g7l1-wpengine.netdna-ssl.com/wp-content/themes/kudil/framework/js/jquery.touchswipe.js?ver=6.0.2'
        id='touchswipe-js'></script>
    <script type='text/javascript'
        src='https://rnzxu3lrgrj1046y63g4g7l1-wpengine.netdna-ssl.com/wp-content/themes/kudil/framework/js/jquery.parallax.js?ver=6.0.2'
        id='parallax-js'></script>
    <script type='text/javascript'
        src='https://rnzxu3lrgrj1046y63g4g7l1-wpengine.netdna-ssl.com/wp-content/themes/kudil/framework/js/jquery.downcount.js?ver=6.0.2'
        id='downcount-js'></script>
    <script type='text/javascript'
        src='https://rnzxu3lrgrj1046y63g4g7l1-wpengine.netdna-ssl.com/wp-content/themes/kudil/framework/js/jquery.bxslider.js?ver=6.0.2'
        id='bxslider-js'></script>
    <script type='text/javascript'
        src='https://rnzxu3lrgrj1046y63g4g7l1-wpengine.netdna-ssl.com/wp-content/themes/kudil/framework/js/jquery.fitvids.js?ver=6.0.2'
        id='fitvids-js'></script>
    <script type='text/javascript'
        src='https://rnzxu3lrgrj1046y63g4g7l1-wpengine.netdna-ssl.com/wp-content/themes/kudil/framework/js/jquery.sticky.js?ver=6.0.2'
        id='sticky-js'></script>
    <script type='text/javascript'
        src='https://rnzxu3lrgrj1046y63g4g7l1-wpengine.netdna-ssl.com/wp-content/themes/kudil/framework/js/jquery.simple-sidebar.js?ver=6.0.2'
        id='simple-sidebar-js'></script>
    <script type='text/javascript'
        src='https://rnzxu3lrgrj1046y63g4g7l1-wpengine.netdna-ssl.com/wp-content/themes/kudil/framework/js/jquery.classie.js?ver=6.0.2'
        id='classie-js'></script>
    <script type='text/javascript'
        src='https://rnzxu3lrgrj1046y63g4g7l1-wpengine.netdna-ssl.com/wp-content/themes/kudil/framework/js/jquery.placeholder.js?ver=6.0.2'
        id='placeholder-js'></script>
    <script type='text/javascript'
        src='https://rnzxu3lrgrj1046y63g4g7l1-wpengine.netdna-ssl.com/wp-content/themes/kudil/framework/js/jquery.visualNav.min.js?ver=6.0.2'
        id='visualnav-js'></script>
    <script type='text/javascript'
        src='https://rnzxu3lrgrj1046y63g4g7l1-wpengine.netdna-ssl.com/wp-content/themes/kudil/framework/js/ResizeSensor.min.js?ver=6.0.2'
        id='resizesensor-js'></script>
    <script type='text/javascript'
        src='https://rnzxu3lrgrj1046y63g4g7l1-wpengine.netdna-ssl.com/wp-content/themes/kudil/framework/js/theia-sticky-sidebar.min.js?ver=6.0.2'
        id='theia-sticky-sidebar-js'></script>
    <script type='text/javascript'
        src='https://rnzxu3lrgrj1046y63g4g7l1-wpengine.netdna-ssl.com/wp-content/themes/kudil/framework/js/isotope.pkgd.min.js?ver=6.0.2'
        id='isotope-pkgd-js'></script>
    <script type='text/javascript'
        src='https://rnzxu3lrgrj1046y63g4g7l1-wpengine.netdna-ssl.com/wp-content/themes/kudil/framework/js/magnific/jquery.magnific-popup.min.js?ver=6.0.2'
        id='kudil-popup-js-js'></script>
    <script type='text/javascript' id='kudil-jqcustom-js-extra'>
        /* <![CDATA[ */
        var dttheme_urls = { "theme_base_url": "https:\/\/dtkudil.wpengine.com\/wp-content\/themes\/kudil", "framework_base_url": "https:\/\/dtkudil.wpengine.com\/wp-content\/themes\/kudil\/framework\/", "ajaxurl": "https:\/\/dtkudil.wpengine.com\/wp-admin\/admin-ajax.php", "url": "https:\/\/dtkudil.wpengine.com", "isRTL": "", "loadingbar": "disable", "nicescroll": "disable", "advOptions": "Show Advanced Options", "wpnonce": "5de72569fb" };
/* ]]> */
    </script>
    <script type='text/javascript'
        src='https://rnzxu3lrgrj1046y63g4g7l1-wpengine.netdna-ssl.com/wp-content/themes/kudil/framework/js/custom.js?ver=6.0.2'
        id='kudil-jqcustom-js'></script>
    <script type='text/javascript'
        src='https://rnzxu3lrgrj1046y63g4g7l1-wpengine.netdna-ssl.com/wp-content/plugins/js_composer/assets/js/dist/js_composer_front.min.js?ver=6.5.0'
        id='wpb_composer_front_js-js'></script>
    <script type='text/javascript'
        src='https://maps-api-ssl.google.com/maps/api/js?key=AIzaSyDJlXcXv_Y-u4sHfd-t_kVavI2oJvNXZOM%20'
        id='google-map-js'></script>
    <script type='text/javascript'
        src='https://rnzxu3lrgrj1046y63g4g7l1-wpengine.netdna-ssl.com/wp-content/plugins/designthemes-core-features/shortcodes/js/jquery.gmap.js'
        id='jquery.gmap-js'></script>

@endsection
