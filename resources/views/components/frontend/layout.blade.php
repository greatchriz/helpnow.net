<!DOCTYPE html>
<html dir="ltr" lang="en">

<!-- Mirrored from kodesolution.com/html/2017/fundpro-html/demo/index-mp-layout1.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 15 May 2023 13:47:20 GMT -->
<head>

<!-- Meta Tags -->
<meta name="viewport" content="width=device-width,initial-scale=1.0"/>
<meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
<meta name="keywords" content="charity,crowdfunding,nonprofit,orphan,Poor,funding,fundrising,ngo,children" />
<meta name="author" content="ThemeMascot" />

@foreach($pages  as $page)
    @if($page->slug == request()->path())
        <title>{{ $page->meta_title }}</title>
        <meta name="description" content="{{ $page->meta_description }}" />
    @else
        <title>Help Now - Empowering Communities, Changing Lives | Donate & Volunteer</title>
        <meta name="description" content="Help Now is a charity dedicated to empowering communities and changing lives. Support our mission by donating or volunteering. Join us in making a difference today!" />
    @endif

@endforeach


<!-- Favicon and Touch Icons -->
<link href="fundpro/images/favicon.png" rel="shortcut icon" type="image/png">
<link href="fundpro/images/apple-touch-icon.png" rel="apple-touch-icon">
<link href="fundpro/images/apple-touch-icon-72x72.png" rel="apple-touch-icon" sizes="72x72">
<link href="fundpro/images/apple-touch-icon-114x114.png" rel="apple-touch-icon" sizes="114x114">
<link href="fundpro/images/apple-touch-icon-144x144.png" rel="apple-touch-icon" sizes="144x144">

<!-- Stylesheet -->
<link href="fundpro/css/bootstrap.min.css" rel="stylesheet" type="text/css">
<link href="fundpro/css/jquery-ui.min.css" rel="stylesheet" type="text/css">
<link href="fundpro/css/animate.css" rel="stylesheet" type="text/css">
<link href="fundpro/css/css-plugin-collections.css" rel="stylesheet"/>
<!-- CSS | menuzord megamenu skins -->
<link id="menuzord-menu-skins" href="fundpro/css/menuzord-skins/menuzord-rounded-boxed.css" rel="stylesheet"/>
<!-- CSS | Main style file -->
<link href="fundpro/css/style-main.css" rel="stylesheet" type="text/css">
<!-- CSS | Preloader Styles -->
<link href="fundpro/css/preloader.css" rel="stylesheet" type="text/css">
<!-- CSS | Custom Margin Padding Collection -->
<link href="fundpro/css/custom-bootstrap-margin-padding.css" rel="stylesheet" type="text/css">
<!-- CSS | Responsive media queries -->
<link href="fundpro/css/responsive.css" rel="stylesheet" type="text/css">
<!-- CSS | Style css. This is the file where you can place your own custom css code. Just uncomment it and use it. -->
<!-- <link href="fundpro/css/style.css" rel="stylesheet" type="text/css"> -->

<!-- Revolution Slider 5.x CSS settings -->
<link  href="fundpro/js/revolution-slider/css/settings.css" rel="stylesheet" type="text/css"/>
<link  href="fundpro/js/revolution-slider/css/layers.css" rel="stylesheet" type="text/css"/>
<link  href="fundpro/js/revolution-slider/css/navigation.css" rel="stylesheet" type="text/css"/>

<!-- CSS | Theme Color -->
<link href="fundpro/css/colors/theme-skin-orange.css" rel="stylesheet" type="text/css">

<!-- external javascripts -->
<script src="fundpro/js/jquery-2.2.4.min.js"></script>
<script src="fundpro/js/jquery-ui.min.js"></script>
<script src="fundpro/js/bootstrap.min.js"></script>
<!-- JS | jquery plugin collection for this theme -->
<script src="fundpro/js/jquery-plugin-collection.js"></script>

<!-- Revolution Slider 5.x SCRIPTS -->
<script src="fundpro/js/revolution-slider/js/jquery.themepunch.tools.min.js"></script>
<script src="fundpro/js/revolution-slider/js/jquery.themepunch.revolution.min.js"></script>

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
</head>
<body class="">
<div id="wrapper" class="clearfix">
  <!-- preloader -->
  <div id="preloader">
    <div id="spinner">
      <div class="preloader-dot-loading">
        <div class="fundpro/cssload-loading"><i></i><i></i><i></i><i></i></div>
      </div>
    </div>
    <div id="disable-preloader" class="btn btn-default btn-sm">Disable Preloader</div>
  </div>

  {{-- import header frontend header component --}}
  <x-frontend.header>



    @foreach ($pages as $page)
        <x-frontend.navlink :page="$page" :active="request()->path() === '/' ? $page->slug === 'home' : request()->path() === $page->slug">
            {{ $page->title }}

        </x-frontend.navlink>
    @endforeach





  </x-frontend.header>

  <!-- Start main-content -->
  <div class="main-content">
    {{ $slot }}
  </div>
  <!-- end main-content -->

  <!-- Footer -->
  <x-frontend.footer />

  <a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
</div>
<!-- end wrapper -->

<!-- Footer Scripts -->
<!-- JS | Custom script for all pages -->
<script src="fundpro/js/custom.js"></script>

<!-- SLIDER REVOLUTION 5.0 EXTENSIONS
      (Load Extensions only on Local File Systems !
       The following part can be removed on Server for On Demand Loading) -->
<script type="text/javascript" src="fundpro/js/revolution-slider/js/extensions/revolution.extension.actions.min.js"></script>
<script type="text/javascript" src="fundpro/js/revolution-slider/js/extensions/revolution.extension.carousel.min.js"></script>
<script type="text/javascript" src="fundpro/js/revolution-slider/js/extensions/revolution.extension.kenburn.min.js"></script>
<script type="text/javascript" src="fundpro/js/revolution-slider/js/extensions/revolution.extension.layeranimation.min.js"></script>
<script type="text/javascript" src="fundpro/js/revolution-slider/js/extensions/revolution.extension.migration.min.js"></script>
<script type="text/javascript" src="fundpro/js/revolution-slider/js/extensions/revolution.extension.navigation.min.js"></script>
<script type="text/javascript" src="fundpro/js/revolution-slider/js/extensions/revolution.extension.parallax.min.js"></script>
<script type="text/javascript" src="fundpro/js/revolution-slider/js/extensions/revolution.extension.slideanims.min.js"></script>
<script type="text/javascript" src="fundpro/js/revolution-slider/js/extensions/revolution.extension.video.min.js"></script>

</body>

<!-- Mirrored from kodesolution.com/html/2017/fundpro-html/demo/index-mp-layout1.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 15 May 2023 13:47:26 GMT -->
</html>
