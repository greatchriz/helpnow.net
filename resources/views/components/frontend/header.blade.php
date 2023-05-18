  <!-- Header -->
  <header class="header">

    <div class="header-middle p-0 bg-lightest xs-text-center">
      <div class="container pt-0 pb-0">
        <div class="row">
          <div class="col-xs-12 col-sm-4 col-md-8">
            <div class="widget no-border m-0">
              <a class="menuzord-brand pull-left flip xs-pull-center mb-15" href="index-mp-layout1.html"><img src="images/logo.svg" width="320px" height="70px" alt=""></a>
            </div>
          </div>
          <div class="col-xs-12 col-sm-4 col-md-2">
            <div class="widget no-border m-0">
              <div class="mt-10 mb-10 text-right flip sm-text-center">
                <div class="font-15 text-black-333 mb-5 font-weight-600"><i class="fa fa-phone-square text-theme-colored font-18"></i> +(012) 345 6789</div>
                <a class="font-12 text-gray" href="#">Call us for more details!</a>
              </div>
            </div>
          </div>
          <div class="col-xs-12 col-sm-4 col-md-2">
            <div class="widget no-border m-0">
              <div class="mt-10 mb-10 text-right flip sm-text-center">
                <div class="font-15 text-black-333 mb-5 font-weight-600"><i class="fa fa-building-o text-theme-colored font-18"></i> Charity Location</div>
                <a class="font-12 text-gray" href="#"> 121 King Street, Sydney</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="header-nav">
      <div class="header-nav-wrapper navbar-scrolltofixed bg-light">
        <div class="container">
          <nav id="menuzord" class="menuzord default bg-light">
            <ul class="menuzord-menu">
                {{-- instanstiate a nav-link component and slot in Home and also set an active boolean variable that will be true if the request path is home or empty --}}
                <x-nav-link :active="request()->routeIs('home')" navLink="/">
                    Home
                </x-nav-link>

                {{-- instanstiate a nav-link component and slot in About Us and also set an active boolean variable that will be true if the request path is about-us --}}
                <x-nav-link :active="request()->routeIs('about-us')" navLink="/about-us">
                   About Us
                </x-nav-link>

                {{-- instanstiate a nav-link component and slot in Donate and also set an active boolean variable that will be true if the request path is donate --}}
                <x-nav-link :active="request()->routeIs('donate')" navLink="/donate">
                    Donate
                </x-nav-link>
            </ul>
            <div class="pull-right flip hidden-sm hidden-xs mt-20 pt-5">
             <a class="btn btn-colored btn-flat btn-theme-colored ajaxload-popup" href="ajax-load/donation-form.html">Donate Now</a>
            </div>
          </nav>
        </div>
      </div>
    </div>
  </header>


