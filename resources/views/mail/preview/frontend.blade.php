<!-- meta tags and other links -->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="csrf-token" content="{{ csrf_token() }}">
    @include('partials.seo')
  <!-- bootstrap 4  -->
  <link rel="stylesheet" href="{{ asset($activeTemplateTrue.'/css/vendor/bootstrap.min.css') }}">
  <!-- fontawesome 5  -->
  <link rel="stylesheet" href="{{ asset($activeTemplateTrue.'/css/all.min.css') }}">
  <!-- line-awesome webfont -->
  <link rel="stylesheet" href="{{ asset($activeTemplateTrue.'/css/line-awesome.min.css') }}">

  <link rel="stylesheet" href="{{ asset($activeTemplateTrue.'/css/main.css') }}">

{{-- test starts --}}

<link rel="stylesheet" type="text/css" href="{{ asset('assets/templates/new_template/css/spop/spop.css') }}">
<script src="{{ asset('assets/templates/new_template/css/spop/spop.js') }}"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<link rel="shortcut icon" href="assets/img/logos/favicon.png">
 <link rel="apple-touch-icon" href="assets/img/logos/favicon.png">
<link rel="apple-touch-icon" sizes="72x72" href="assets/img/logos/favicon.png">
<link rel="apple-touch-icon" sizes="114x114" href="assets/img/logos/favicon.png">




  <!-- slick slider css -->
  <link rel="stylesheet" href="{{ asset('assets/admin/css/vendor/slick.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/admin/css/vendor/dots.css') }}">
  <!-- slick slider css -->

{{-- <!-- plugins -->
<link rel="stylesheet" href="{{ asset('assets/templates/new_template/css/dafault.css') }}"">
<!-- bootstrap -->
<link rel="stylesheet" href="{{ asset('assets/templates/new_template/css/bootstrap/bootstrap.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/templates/new_template/css/rev_slider/owl-carousel.css') }}">
<link rel="stylesheet" href="{{ asset('assets/templates/new_template/css/nav-menu.css') }}">

<!-- revolution slider css -->
<link rel="stylesheet" href="{{ asset('assets/templates/new_template/css/rev_slider/settings.css') }}">
<link rel="stylesheet" href="{{ asset('assets/templates/new_template/css/rev_slider/layers.css') }}">
<link rel="stylesheet" href="{{ asset('assets/templates/new_template/css/rev_slider/navigation.css') }}">

<!-- search css -->
<link rel="stylesheet" href="{{ asset('assets/templates/new_template/css/search/search.css') }}">

<!-- custom css -->
<link href="{{ asset('assets/templates/new_template/css/style.css') }}" rel="stylesheet" id="colors">
<link rel="stylesheet" href="{{ asset('assets/templates/new_template/css/lang-style.css') }}" type="text/css"> --}}


     {{-- <link rel="stylesheet" href="{{ asset('assets/templates/new_template/css/bootstrap.min.css') }}"> --}}
      <link rel="stylesheet" href="{{ asset('assets/templates/new_template/css/font-awesome.min.css') }}">
      <link rel="stylesheet" href="{{ asset('assets/templates/new_template/css/all.css') }}">
      <link rel="stylesheet" href="{{ asset('assets/templates/new_template/css/alld.css') }}">
      <link rel="stylesheet" type="text/css" href="{{ asset('assets/templates/new_template/css/flaticon-set.css') }}">
      <link rel="stylesheet" href="{{ asset('assets/templates/new_template/css/magnific-popup.css') }}">
      <link rel="stylesheet" href="{{ asset('assets/templates/new_template/css/owl.theme.default.min.css') }}">
      <link rel="stylesheet" href="{{ asset('assets/templates/new_template/css/animate.css') }}">
      <link rel="stylesheet" href="{{ asset('assets/templates/new_template/css/bootsnav.css') }}">
      <link rel="stylesheet" href="{{ asset('assets/templates/new_template/css/vendors.bundle.css') }}">
      <link rel="stylesheet" href="{{ asset('assets/templates/new_template/css/style-2.css') }}">
      <link rel="stylesheet" href="{{ asset('assets/templates/new_template/css/owl-carousel.css') }}">
      <link rel="stylesheet" href="{{ asset('assets/templates/new_template/css/style.css') }}">
      {{-- <link rel="stylesheet" href="{{ asset('assets/templates/new_template/css/dafault.css') }}"> --}}
      <link rel="stylesheet" href="{{ asset('assets/templates/new_template/css/styled.css"') }}">
      <link rel="stylesheet" href="{{ asset('assets/templates/new_template/css/custom.css"') }}">
      <link rel="stylesheet" href="{{ asset('assets/templates/new_template/css/customd.css') }}">
      <link rel="stylesheet" href="{{ asset('assets/templates/new_template/css/responsive.css') }}">
      <link rel="stylesheet" href="{{ asset('assets/templates/new_template/css/particles.css') }}">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <link rel="stylesheet" href="{{ asset('assets/templates/new_themplate/css/css.css') }}">


  <!-- start translate -->
  <script type="text/javascript">
              function googleTranslateElementInit() {
              new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element_id');
              }
      </script>
  <!-- end translate -->
  <style>
    .goog-te-banner-frame{
        display: none!important;
        /* opacity: 0!important; */
    }
    .goog-te-combo{
        color:#000!important
    }

    .goog-te-gadget {
font-family: arial;
font-size: 11px;
color: #666;
white-space: nowrap;
}
.goog-te-gadget, .goog-te-gadget span a {
color: transparent !important;

}

.goog-te-gadget span a img{
display: none!important;
width:0px!important;
}
</style>

  @stack('script')
</head>

<script type="text/javascript">
    var country_list = ["Afghanistan", "Albania", "Algeria", "Andorra", "Angola", "Anguilla", "Antigua & Barbuda", "Argentina", "Armenia", "Australia", "Austria", "Azerbaijan", "Bahamas", "Bahrain", "Bangladesh", "Belarus", "Belgium",  "Benin", "Bermuda", "Bhutan", "Bolivia", "Bosnia & Herzegovina", "Botswana", "Brazil", "British Virgin Islands", "Brunei", "Bulgaria", "Burundi", "Cambodia", "Cameroon", "Cape Verde", "Chad", "Chile", "China", "Colombia", "Congo", "Costa Rica", "Cote D Ivoire", "Croatia", "Cuba", "Cyprus", "Czech Republic", "Denmark", "Djibouti", "Dominica", "Dominican Republic", "Ecuador", "Egypt", "El Salvador", "Equatorial Guinea", "Estonia", "Ethiopia", "Falkland Islands", "Faroe Islands","Finland", "France", "French Polynesia", "French West Indies", "Gabon", "Gambia", "Georgia", "Germany", "Gibraltar", "Greece", "Greenland", "Grenada", "Guatemala", "Guinea", "Haiti", "Honduras", "Hong Kong", "Hungary", "Iceland", "India", "Indonesia", "Iran", "Iraq", "Ireland", "Israel", "Italy", "Jamaica", "Japan", "Jersey", "Jordan", "Kazakhstan", "Kenya", "Kuwait",  "Latvia", "Lebanon", "Lesotho", "Liberia", "Libya", "Liechtenstein", "Lithuania", "Luxembourg", "Macau", "Macedonia", "Madagascar", "Malawi", "Malaysia", "Maldives", "Mali", "Malta", "Mauritania", "Mauritius", "Mexico", "Moldova", "Monaco", "Mongolia", "Montenegro", "Montserrat", "Morocco", "Mozambique", "Namibia", "Nepal", "Netherlands", "Netherlands Antilles", "New Caledonia", "New Zealand", "Nicaragua", "Norway", "Oman", "Pakistan", "Palestine", "Panama", "Papua New Guinea", "Paraguay", "Peru", "Philippines", "Poland", "Portugal", "Puerto Rico", "Qatar", "Reunion", "Romania", "Russia", "Rwanda", "Saint Pierre & Miquelon",  "San Marino", "Saudi Arabia", "Senegal", "Serbia", "Seychelles", "Sierra Leone", "Singapore", "Slovakia", "Slovenia", "South Africa", "South Korea", "Spain", "Sri Lanka", "Sudan", "Suriname", "Swaziland", "Sweden", "Switzerland", "Syria", "Taiwan", "Tajikistan", "Tanzania", "Thailand", "Togo", "Tonga", "Trinidad & Tobago", "Tunisia", "Turkey", "Turkmenistan", , "Ukraine", "United Arab Emirates", "United Kingdom", "Uruguay", "Uzbekistan", "Venezuela", "Vietnam", "Virgin Islands (US)", "Yemen"];

    function choice(array) {
        return array[Math.floor(Math.random() * array.length)];
    }

    function randomNumber(min, max) {
        return Math.random() * (max - min) + min;
    }


    function payinout() {
        var nu = Math.floor(randomNumber(100, 3500));
        var con = choice(country_list);
        var mode = choice(['deposited', 'withdrew']);

        spop({
            template: "An Investor from " + con + " " + mode + " $" + nu + " ...",

            position: 'bottom-center',
            style: 'success',
            autoclose : 3000,
        });

    }

    setInterval(payinout,10000);


</script>
  <body>
@php echo  fbComment() @endphp


    <!-- scroll-to-top start -->
    <div class="scroll-to-top">
      <span class="scroll-icon">
        <i class="fa fa-rocket" aria-hidden="true"></i>
      </span>
    </div>
    <!-- scroll-to-top end -->

   <!-- start page loading -->
   <div id="preloader">
    <div class="row loader">
        <div class="loader-icon"></div>
    </div>
</div>
<!-- end page loading -->

<!-- start main-wrapper section -->


    <!-- start header section -->
    <div class="">
            {{-- <header id="home">

                <div class="wrap-sticky" style="height: 80px;">

                    <nav class="navbar navbar-default navbar-sticky bootsnav on no-full sticked">
                        <div class="container">

                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                                    data-target="#navbar-menu" aria-expanded="false" style="color:#002333!important;">
                                    <i class="fa fa-bars"></i>
                                </button>
                                <a class="navbar-brand"  href="#">
                                    <img src="{{ asset('assets/templates/new_template/img/logo/logo-calamos-vector-blue.svg') }}" class="logo" alt="Logo" style="width:60%!important;">
                                </a>
                            </div>


                            <div class="navbar-collapse collapse" id="navbar-menu" aria-expanded="false"
                                style="height: 0px;">
                                <ul class="nav navbar-nav navbar-right" data-in="#" data-out="#">
                                    <li>
                                        <a href="{{ route('home') }}">Home</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('company') }}">Company</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('blog') }}">Services</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('faq') }}">faq</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('user.login') }}">Login</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('user.register') }}">Register</a>
                                    </li>
                                    <li>
                                        <div class="top-bar-info mt-4">
                                            <div class=" goog-te-gadget" id="google_translate_element_id"></div>
                                            </div>
                                    </li>

                                </ul>
                            </div>
                            <div class="">


                            </div>
                        </div>
                    </nav>
                </div>

            </header> --}}
        <!-- end header section -->

        @yield('content')

        @stack('renderModal')


        <!-- footer section start -->
                @php
                $links = getContent('links.element','','',1);
                $footer = getContent('footer.content',true);
                $socials = getContent('social_icon.element','','',1);
                @endphp
                    <footer class="footer bg_img" style="background-color: #191919;">
                            <div class="footer__bottom">
                                <div class="container">
                                <div class="row">
                                    <div class="col-md-6 text-md-left text-center">
                                    <p><p>@lang('© '.date('Y').' <a href="'.route('home').'" class="base--color">'.$general->sitename.'</a>. All rights reserved')</p></p>
                                    </div>
                                    <div class="col-md-6">
                                    <ul class="social-link-list d-flex flex-wrap justify-content-md-end justify-content-center">
                                        @foreach($socials as $social)
                                        <li><a href="{{ @$social->data_values->url }}">@php echo @$social->data_values->icon @endphp</a></li>
                                        @endforeach
                                    </ul>
                                    </div>
                                </div>
                                </div>
                            </div>
                    </footer>
        <!-- footer section end -->
    </div>
<!-- page-wrapper end -->

{{-- test js starts --}}

  <!-- all js include start -->

  <script src="{{ asset('assets/templates/new_template/js/jquery-1.12.4.min.js') }}"></script>
  <script src="{{ asset('assets/templates/new_template/js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('assets/templates/new_template/js/font-awesome.js') }}"></script>
  <script src="{{ asset('assets/templates/new_template/js/equal-height.min.js') }}"></script>
  <script src="{{ asset('assets/templates/new_template/js/jquery.appear.js') }}"></script>
  <script src="{{ asset('assets/templates/new_template/js/jquery.easing.min.js') }}"></script>
  <script src="{{ asset('assets/templates/new_template/js/jquery.magnific-popup.min.js') }}"></script>
  <script src="{{ asset('assets/templates/new_template/js/modernizr.custom.13711.js') }}"></script>
  <script src="{{ asset('assets/templates/new_template/js/owl.carousel.min.js') }}"></script>
  <script src="{{ asset('assets/templates/new_template/js/wow.min.js') }}"></script>
  <script src="{{ asset('assets/templates/new_template/js/progress-bar.min.js') }}"></script>
  <script src="{{ asset('assets/templates/new_template/js/isotope.pkgd.min.js') }}"></script>
  <script src="{{ asset('assets/templates/new_template/js/imagesloaded.pkgd.min.js') }}"></script>
  <!-- <script src="js/count-to.js"></script> -->
  <!-- <script src="js/bootsnav.js"></script> -->
  <!-- <script src="js/main.js"></script> -->
  <script src="{{ asset('assets/templates/new_template/js/particles.js') }}"></script>
  <script src="{{ asset('assets/templates/new_template/js/particles_app.js') }}"></script>
  <script src="{{ asset('assets/templates/new_template/js/recents.js') }}"></script>






      <!-- tab -->
      <script src="{{ asset('assets/templates/new_template/js/test-js/jquery.min.js') }}"></script>
      <script src="{{ asset('assets/templates/new_template/js/test-js/waypoints.min.js') }}"></script>
      <script src="{{ asset('assets/templates/new_template/js/test-js/jquery.counterup.min.js') }}"></script>
      <script src="{{ asset('assets/templates/new_template/js/test-js/countdown.js') }}"></script>
      <script src="{{ asset('assets/templates/new_template/js/test-js/easy.responsive.tabs.js') }}"></script>
      <script src="{{ asset('assets/templates/new_template/js/test-js/chart.min.js') }}"></script>

      <!-- owl carousel -->
      <script src="{{ asset('assets/templates/new_template/js/test-js/owl.carousel.js') }}"></script>


      <!-- jquery.magnific-popup js -->
      <script src="{{ asset('assets/templates/new_template/js/test-js/jquery.magnific-popup.min.js') }}"></script>

      <script src="{{ asset('assets/templates/new_template/js/test-js/main.js') }}"></script>

    <!-- contact form scripts -->
    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script> --}}
    <!-- <script src="js/mailform/jquery.form.min.js"></script>
    <script src="js/mailform/jquery.rd-mailform.min.c.js"></script> -->


    <!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/630512d237898912e964b6e9/1gb5t32or';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->

    <!-- start translate -->
    <script type="text/javascript">
        (function(){var gtConstEvalStartTime = new Date();/*

        Copyright The Closure Library Authors.
        SPDX-License-Identifier: Apache-2.0
        */
        function d(b){var a=document.getElementsByTagName("head")[0];a||(a=document.body.parentNode.appendChild(document.createElement("head")));a.appendChild(b)}function _loadJs(b){var a=document.createElement("script");a.type="text/javascript";a.charset="UTF-8";a.src=b;d(a)}function _loadCss(b){var a=document.createElement("link");a.type="text/css";a.rel="stylesheet";a.charset="UTF-8";a.href=b;d(a)}function _isNS(b){b=b.split(".");for(var a=window,c=0;c<b.length;++c)if(!(a=a[b[c]]))return!1;return!0}
        function _setupNS(b){b=b.split(".");for(var a=window,c=0;c<b.length;++c)a.hasOwnProperty?a.hasOwnProperty(b[c])?a=a[b[c]]:a=a[b[c]]={}:a=a[b[c]]||(a[b[c]]={});return a}window.addEventListener&&"undefined"==typeof document.readyState&&window.addEventListener("DOMContentLoaded",function(){document.readyState="complete"},!1);
        if (_isNS('google.translate.Element')){return}(function(){var c=_setupNS('google.translate._const');c._cest = gtConstEvalStartTime;gtConstEvalStartTime = undefined;c._cl='en';c._cuc='googleTranslateElementInit';c._cac='';c._cam='';c._ctkk='443047.1598284275';var h='translate.googleapis.com';var s=(true?'https':window.location.protocol=='https:'?'https':'http')+'://';var b=s+h;c._pah=h;c._pas=s;c._pbi=b+'/translate_static/img/te_bk.gif';c._pci=b+'/translate_static/img/te_ctrl3.gif';c._pli=b+'/translate_static/img/loading.gif';c._plla=h+'/translate_a/l';c._pmi=b+'/translate_static/img/mini_google.png';c._ps=b+'/translate_static/css/translateelement.css';c._puh='translate.google.com';_loadCss(c._ps);_loadJs(b+'/translate_static/js/element/main.js');})();})();
        </script>

    <!-- end translate -->

    <!-- all js include end -->
{{-- test js ends --}}



@php
    $cookie = App\Models\Frontend::where('data_keys','cookie.data')->first();
@endphp
@if(@$cookie->data_values->status && !session('cookie_accepted'))
  <div class="cookie__wrapper">
    <div class="container">
      <div class="d-flex flex-wrap align-items-center justify-content-between">
        <p class="txt my-2">
          @php echo @$cookie->data_values->description @endphp
          <!--<a href="{{ @$cookie->data_values->link }}" target="_blank">@lang('Cookie Policy')</a>-->
        </p>
          <button class="cmn-btn btn-md my-2 policy">@lang('Accept')</button>
      </div>
    </div>
  </div>
@endif
    <!-- jQuery library -->
  <script src="{{ asset($activeTemplateTrue.'/js/vendor/jquery-3.5.1.min.js') }}"></script>
  <!-- bootstrap js -->
  <script src="{{ asset($activeTemplateTrue.'/js/vendor/bootstrap.bundle.min.js') }}"></script>

  @stack('script-lib')
  <!-- slick slider js -->
  <script src="{{ asset($activeTemplateTrue.'/js/vendor/slick.min.js') }}"></script>
  <script src="{{ asset($activeTemplateTrue.'/js/vendor/wow.min.js') }}"></script>
  <!-- dashboard custom js -->
  <script src="{{ asset($activeTemplateTrue.'/js/app.js') }}"></script>


  @include($activeTemplate.'partials.notify')
  @include('partials.plugins')

@stack('script')

<script>
    (function () {
        "use strict";
        $(document).on("change", ".langSel", function () {
            window.location.href = "{{url('/')}}/change/" + $(this).val();
        });

        $('.policy').on('click',function(){
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.get('{{route('cookie.accept')}}', function(response){
                iziToast.success({message: response, position: "topRight"});
                $('.cookie__wrapper').addClass('d-none');
            });
        });
    })();
</script>


</body>
</html>

  </body>
</html>
