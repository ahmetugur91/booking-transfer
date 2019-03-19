<?php
$hit = \App\Hit::first()->increment("amount");

if(!\App\HitLog::where("created_at",date("Y-m-d"))->where("ip",\Illuminate\Support\Facades\Request::ip())->exists()){
    \App\HitLog::create([
        "ip" => \Illuminate\Support\Facades\Request::ip(),
        "created_at" => date("Y-m-d")
    ]);
}





?>
<!DOCTYPE html>
<html lang="en-US">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1"/>

    <link rel="stylesheet" href="/build/css/intlTelInput.css">

    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
          crossorigin="anonymous">

    <script type="text/javascript">
        window.datepickerDateFormat = "dd/mm/yy";
        window.datepickerAltFormat = "yy-mm-dd";
    </script>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="/assets/js/html5shiv.min.js"></script>
    <script src="/assets/js/respond.min.js"></script>
    <![endif]-->
    <title>Kıbrıs Transfer - @yield("title")</title>
    <script type="text/javascript">
        window._wpemojiSettings = {
            "baseUrl": "https:\/\/s.w.org\/images\/core\/emoji\/2.4\/72x72\/",
            "ext": ".png",
            "svgUrl": "https:\/\/s.w.org\/images\/core\/emoji\/2.4\/svg\/",
            "svgExt": ".svg",
            "source": {
                "concatemoji": "\/assets\/js\/wp-emoji-release.min.js?ver=4.9.7"
            }
        };
        !function (a, b, c) {
            function d(a, b) {
                var c = String.fromCharCode;
                l.clearRect(0, 0, k.width, k.height), l.fillText(c.apply(this, a), 0, 0);
                var d = k.toDataURL();
                l.clearRect(0, 0, k.width, k.height), l.fillText(c.apply(this, b), 0, 0);
                var e = k.toDataURL();
                return d === e
            }

            function e(a) {
                var b;
                if (!l || !l.fillText) return !1;
                switch (l.textBaseline = "top", l.font = "600 32px Arial", a) {
                    case "flag":
                        return !(b = d([55356, 56826, 55356, 56819], [55356, 56826, 8203, 55356, 56819])) && (b = d([55356, 57332, 56128, 56423, 56128, 56418, 56128, 56421, 56128, 56430, 56128, 56423, 56128, 56447], [55356, 57332, 8203, 56128, 56423, 8203, 56128, 56418, 8203, 56128, 56421, 8203, 56128, 56430, 8203, 56128, 56423, 8203, 56128, 56447]), !b);
                    case "emoji":
                        return b = d([55357, 56692, 8205, 9792, 65039], [55357, 56692, 8203, 9792, 65039]), !b
                }
                return !1
            }

            function f(a) {
                var c = b.createElement("script");
                c.src = a, c.defer = c.type = "text/javascript", b.getElementsByTagName("head")[0].appendChild(c)
            }

            var g, h, i, j, k = b.createElement("canvas"),
                l = k.getContext && k.getContext("2d");
            for (j = Array("flag", "emoji"), c.supports = {
                everything: !0,
                everythingExceptFlag: !0
            }, i = 0; i < j.length; i++) c.supports[j[i]] = e(j[i]), c.supports.everything = c.supports.everything && c.supports[j[i]], "flag" !== j[i] && (c.supports.everythingExceptFlag = c.supports.everythingExceptFlag && c.supports[j[i]]);
            c.supports.everythingExceptFlag = c.supports.everythingExceptFlag && !c.supports.flag, c.DOMReady = !1, c.readyCallback = function () {
                c.DOMReady = !0
            }, c.supports.everything || (h = function () {
                c.readyCallback()
            }, b.addEventListener ? (b.addEventListener("DOMContentLoaded", h, !1), a.addEventListener("load", h, !1)) : (a.attachEvent("onload", h), b.attachEvent("onreadystatechange", function () {
                "complete" === b.readyState && c.readyCallback()
            })), g = c.source || {}, g.concatemoji ? f(g.concatemoji) : g.wpemoji && g.twemoji && (f(g.twemoji), f(g.wpemoji)))
        }(window, document, window._wpemojiSettings);

    </script>
    <style type="text/css">
        img.wp-smiley,
        img.emoji {
            display: inline !important;
            border: none !important;
            box-shadow: none !important;
            height: 1em !important;
            width: 1em !important;
            margin: 0 .07em !important;
            vertical-align: -0.1em !important;
            background: none !important;
            padding: 0 !important;
        }
    </style>
    <link rel='stylesheet' id='contact-form-7-css' href='/assets/css/styles.css?ver=5.0.3' type='text/css' media='all'/>
    <link rel='stylesheet' id='woocommerce-layout-css' href='/assets/css/woocommerce-layout.css?ver=3.4.3' type='text/css' media='all'/>
    <link rel='stylesheet' id='woocommerce-smallscreen-css' href='/assets/css/woocommerce-smallscreen.css?ver=3.4.3' type='text/css' media='only screen and (max-width: 768px)'/>
    <link rel='stylesheet' id='woocommerce-general-css' href='/assets/css/woocommerce.css?ver=3.4.3' type='text/css' media='all'/>
    <style id='woocommerce-inline-inline-css' type='text/css'>
        .woocommerce form .form-row .required {
            visibility: visible;
        }
    </style>
    <link rel='stylesheet' id='transfers-font-style-css'
          href='https://fonts.googleapis.com/css?family=Montserrat%3A400%2C700%7CRaleway%3A400%2C500%2C600%2C700&#038;subset=latin%2Clatin-ext&#038;ver=4.9.7' type='text/css' media='all'/>
    <link rel='stylesheet' id='transfers-style-main-css' href='/assets/css/style.css?ver=1.0' type='text/css' media='all'/>
    <link rel='stylesheet' id='transfers-style-css' href='/assets/style.css?ver=1.0' type='text/css' media='all'/>
    <link rel='stylesheet' id='transfers-style-ui-css' href='/assets/css/jquery-ui.theme.min.css?ver=1.0' type='text/css' media='all'/>
    <link rel='stylesheet' id='transfers-fonts-css' href='/assets/css/fonts.css?ver=1.0' type='text/css' media='all'/>
    <link rel='stylesheet' id='transfers-style-color-css' href='/assets/css/theme-pink.css?ver=1.0' type='text/css' media='all'/>
    <script type='text/javascript' src='/assets/js/jquery/jquery.js?ver=1.12.4'></script>
    <script type='text/javascript' src='/assets/js/jquery/jquery-migrate.min.js?ver=1.4.1'></script>
    <link rel='https://api.w.org/' href='https://www.themeenergy.com/themes/wordpress/transfers/wp-json/'/>
    <link rel="EditURI" type="application/rsd+xml" title="RSD" href="https://www.themeenergy.com/themes/wordpress/transfers/xmlrpc.php?rsd"/>
    <link rel="wlwmanifest" type="application/wlwmanifest+xml" href="/assets/wlwmanifest.xml"/>
    <link rel="canonical" href="https://www.themeenergy.com/themes/wordpress/transfers/"/>
    <link rel='shortlink' href='https://www.themeenergy.com/themes/wordpress/transfers/'/>
    <noscript>
        <style>
            .woocommerce-product-gallery {
                opacity: 1 !important;
            }
        </style>
    </noscript>
    <link rel="icon" href="/images/favicon.png" sizes="32x32"/>
    <link rel="icon" href="/images/favicon.png" sizes="192x192"/>
    <link rel="apple-touch-icon-precomposed" href="/images/favicon.png"/>
    <meta name="msapplication-TileImage" content="/images/favicon.png"/>



</head>
<body data-rsssl=1 class="home page-template page-template-page_home page-template-page_home-php page page-id-30 woocommerce-no-js">
<!-- Preloader -->
<!-- Preloader -->
<div class="preloader">
    <div id="followingBallsG">
        <div id="followingBallsG_1" class="followingBallsG"></div>
        <div id="followingBallsG_2" class="followingBallsG"></div>
        <div id="followingBallsG_3" class="followingBallsG"></div>
        <div id="followingBallsG_4" class="followingBallsG"></div>
    </div>
</div>
<!-- //Preloader -->
<!-- //Preloader -->
<!-- Header -->
<header class="header" role="banner">
    <div class="wrap">
        <!-- Logo -->
        <div class="logo">
            <a href="/" title="Kıbrıs Transfer">
                <!--
                <img src="/assets/images/transfers-1.jpg" alt="Kıbrıs Transfer"/>
                -->

                <img src="/logo/ibo-logo-deneme2.png" alt="Kıbrıs Transfer" style="height: 70px"/>
            </a>
        </div>
        <!-- //Logo -->
        <!--primary navigation-->
        <nav id="nav" class="main-nav">
            <ul id="menu-primary" class="">
                <li id="menu-item-386" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-386">
                    <a href="/">{{trans("site.homepage")}}</a>
                </li>

                <li id="menu-item-386" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-386">
                    <a href="{{route("about")}}">{{trans("site.about_us")}}</a>
                </li>

                <li id="menu-item-386" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-386">
                    <a href="/#booking" style="color:red;font-weight: bold">{{trans("site.reservation")}}</a>
                </li>

                <li id="menu-item-386" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-386">
                    <a href="{{route("pricing")}}">{{trans("site.pricing")}}</a>
                </li>

                <li style="display: none;" id="menu-item-386" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-386">
                    <a href="{{route("faq")}}">{{trans("site.faq")}}</a>
                </li>

                <li id="menu-item-386" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-386">
                    <a href="#">{{trans("site.gallery")}}</a>
                </li>
                <li id="menu-item-386" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-386">
                    <a href="{{route("contact")}}">{{trans("site.contact")}}</a>
                </li>
                <li id="menu-item-386" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-386">
                    <a href="{{route("lang","en")}}">
                        <img src="/images/en.png" style="width: 25px">
                    </a> <a href="{{route("lang","tr")}}">
                        <img src="/images/tr.png" style="width: 25px">
                    </a>
                </li>

            </ul>
        </nav>
        <!--//primary navigation-->
    </div>
</header>
<!-- //Header -->
<!-- Main -->
<main class="main " role="main">
    <!--- Content -->
@yield("content")
<!--- //Content -->
</main>


<div id="above-footer-sidebar" class="above-footer-sidebar widget-area clearfix" role="complementary">
    <ul>
        <li class="widget widget-sidebar transfers_call_to_action_widget">
            <!-- Call to action -->
            <div class="color cta">
                <div class="wrap">
                    <p class="fadeInLeft">{{trans("site.text1")}}</p>
                    <a href="#" class="btn huge black right fadeInRight">{{trans("site.findtransfer")}}</a>
                </div>
            </div>
            <!-- //Call to action -->
        </li>
    </ul>
</div>
<!-- #secondary -->
<!-- //Main -->
<!-- Footer -->
<footer class="footer black" role="contentinfo">
    <div class="wrap">
        <div id="footer-sidebar" class="footer-sidebar widget-area clearfix row" role="complementary">
            <ul>
                <li class="widget widget-sidebar transfers_about_widget">
                    <article class="about_widget clearfix one-half">
                        <h6>{{trans("site.fbanner1")}}</h6>
                        <p>{{trans("site.fbanner2")}}</p>
                    </article>
                </li>
                <li class="widget widget-sidebar transfers_contact_widget">
                    <article class="transfers_contact_widget one-fourth">
                        <h6>{{trans("site.needhelp")}}</h6>
                        <p>{{trans("site.ourcontact")}}</p>
                        <p class="contact-data">
                            <span class="icon icon-themeenergy_call"></span> {{App\Contact::first()->phone}}
                        </p>
                        <p class="contact-data">
                            <span class="icon icon-themeenergy_mail-2"></span>
                            <a href="mailto:info@cyprustransfer.org">{{App\Contact::first()->email}}</a>
                        </p>
                    </article>
                </li>

            </ul>
        </div>
        <!-- #secondary -->
        <div class="copy">
            <p>© cyprustransfer.org 2018. {{trans("site.rights")}}</p>
            <!--footer navigation-->
            <nav class="foot-nav">
                <ul id="menu-footer" class="">
                    <li id="menu-item-392" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-30 current_page_item menu-item-392">
                        <a href="#">{{trans("site.homepage")}}</a>
                    </li>
                    <li id="menu-item-393" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-393">
                        <a href="#">{{trans("site.contact")}}</a>
                    </li>
                </ul>
            </nav>
            <!--//footer navigation-->
        </div>
    </div>
</footer>
<!-- //Footer -->
<script type="text/javascript">
    var c = document.body.className;
    c = c.replace(/woocommerce-no-js/, 'woocommerce-js');
    document.body.className = c;
</script>

<script type='text/javascript' src='/assets/js/scripts.js?ver=5.0.3'></script>
<script type='text/javascript' src='/assets/js/scripts_2.js?ver=5.0.3'></script>
<script type='text/javascript' src='/assets/js/jquery/ui/core.min.js?ver=1.11.4'></script>
<script type='text/javascript' src='/assets/js/jquery/ui/widget.min.js?ver=1.11.4'></script>
<script type='text/javascript' src='/assets/js/jquery/ui/mouse.min.js?ver=1.11.4'></script>
<script type='text/javascript' src='/assets/js/jquery/ui/slider.min.js?ver=1.11.4'></script>
<script type='text/javascript' src='/assets/js/jquery/ui/button.min.js?ver=1.11.4'></script>
<script type='text/javascript' src='/assets/js/jquery/ui/datepicker.min.js?ver=1.11.4'></script>
<script type='text/javascript'>
    /*
    // TR
    jQuery(document).ready(function (jQuery) {
        jQuery.datepicker.setDefaults({
            "closeText": "Kapat",
            "currentText": "Today",
            "monthNames": ["Ocak", "Şubat", "Mart", "Nisan", "Mayıs", "Haziran", "Temmuz", "Ağustos", "Eylül", "Ekim", "Kasım", "Aralık"],
            "monthNamesShort": ["Ocak", "Sub", "Mar", "Nis", "May", "Haz", "Tem", "Agus", "Eyl", "Ekim", "Kas", "Aral"],
            "nextText": "Next",
            "prevText": "Previous",
            "dayNames": ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"],
            "dayNamesShort": ["Sun", "Mon", "Tue", "Wed", "Thu", "Fri", "Sat"],
            "dayNamesMin": ["S", "M", "T", "W", "T", "F", "S"],
            "dateFormat": "dd\/mm\/yy",
            "firstDay": 1,
            "isRTL": false
        });
    });
    */
</script>

<script type='text/javascript'>
    jQuery(document).ready(function (jQuery) {
        jQuery.datepicker.setDefaults({
            "closeText": "Kapat",
            "currentText": "Today",
            "monthNames": ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"],
            "monthNamesShort": ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
            "nextText": "Next",
            "prevText": "Previous",
            "dayNames": ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"],
            "dayNamesShort": ["Sun", "Mon", "Tue", "Wed", "Thu", "Fri", "Sat"],
            "dayNamesMin": ["S", "M", "T", "W", "T", "F", "S"],
            "dateFormat": "dd\/mm\/yy",
            "firstDay": 1,
            "isRTL": false
        });
    });
</script>
<script type='text/javascript' src='/assets/js/jquery.validate.min.js?ver=1.0'></script>
<script type='text/javascript' src='/assets/js/jquery-ui-sliderAccess.js?ver=1.0'></script>
<script type='text/javascript' src='/assets/js/jquery-ui-timepicker-addon.js?ver=1.0'></script>
<script type='text/javascript' src='/assets/js/search.js?ver=1.0'></script>
<script type='text/javascript' src='/assets/js/frontend/add-to-cart.min.js?ver=3.4.3'></script>
<script type='text/javascript' src='/assets/js/jquery-blockui/jquery.blockUI.min.js?ver=2.70'></script>
<script type='text/javascript' src='/assets/js/js-cookie/js.cookie.min.js?ver=2.1.4'></script>
<script type='text/javascript' src='/assets/js/comment-reply.min.js?ver=4.9.7'></script>
<script type='text/javascript' src='/assets/js/jquery/ui/effect.min.js?ver=1.11.4'></script>
<script type='text/javascript' src='/assets/js/jquery.uniform.min.js?ver=1.0'></script>
<script type='text/javascript' src='/assets/js/respond.min.js?ver=1.0'></script>
<script type='text/javascript' src='/assets/js/jquery.slicknav.min.js?ver=1.0'></script>
<script type='text/javascript' src='/assets/js/scripts.js?ver=1.0'></script>
<script type='text/javascript' src='/js/custom.js?ver=1.0'></script>
<script type='text/javascript' src='/assets/js/wp-embed.min.js?ver=4.9.7'></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
        crossorigin="anonymous"></script>
<script src="https://www.jqueryscript.net/demo/Simple-jQuery-Plugin-For-Highlighting-Image-Map-Maphilight/jquery.maphilight.js"></script>

<script type='text/javascript' src='http://static.whatshelp.io/widget-send-button/js/init.js'></script>





<script src="build/js/intlTelInput.js"></script>
<script>
    var input = document.querySelector("#phone");
    window.intlTelInput(input, {
        // allowDropdown: false,
        // autoHideDialCode: false,
        // autoPlaceholder: "off",
        // dropdownContainer: document.body,
        // excludeCountries: ["us"],
        // formatOnDisplay: false,
        // geoIpLookup: function(callback) {
        //   $.get("http://ipinfo.io", function() {}, "jsonp").always(function(resp) {
        //     var countryCode = (resp && resp.country) ? resp.country : "";
        //     callback(countryCode);
        //   });
        // },
        // hiddenInput: "full_number",
         initialCountry: "tr",
        // localizedCountries: { 'de': 'Deutschland' },
        // nationalMode: false,
        // onlyCountries: ['us', 'gb', 'ch', 'ca', 'do'],
        // placeholderNumberType: "MOBILE",
        // preferredCountries: ['cn', 'jp'],
         separateDialCode: true,
        utilsScript: "/build/js/utils.js",
    });
</script>

<script>
    var options = {
        facebook: "266184994208649", // Facebook page ID
        call: "+90 548 820 97 98", // Call phone number
        whatsapp: "+90 548 820 97 98", // WhatsApp number
        call_to_action: "{{trans("site.sendMessage")}}", // Call to action
        email: "info@cyprustransfer.org", // Email
        greeting_message: "{{trans("site.howcanihelpyou")}}", // Text of greeting message
        button_color: "#f4b843", // Color of button
        position: "left", // Position may be 'right' or 'left'
        order: "facebook,call", // Order of buttons
    };
    var proto = document.location.protocol, host = "whatshelp.io", url = proto + "//static." + host;
    var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = url + '/widget-send-button/js/init.js';
    s.onload = function () { WhWidgetSendButton.init(host, proto, options); };
    var x = document.getElementsByTagName('script')[0]; x.parentNode.insertBefore(s, x);
</script>


</body>
</html>