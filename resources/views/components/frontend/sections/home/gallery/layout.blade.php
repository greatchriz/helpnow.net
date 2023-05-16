<!-- Section: Gallery -->
<section
    id="gallery"
    class="bg-silver-light"
>
    <div class="container">
        <div class="section-title text-center">
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <h2 class="text-uppercase line-bottom-center mt-0">Photo <span
                            class="text-theme-colored font-weight-600"
                        >Gallery</span></h2>
                    <div class="title-icon">
                        <i class="flaticon-charity-hand-holding-a-heart"></i>
                    </div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem autem voluptatem obcaecati!
                        <br>ipsum dolor sit Rem autem voluptatem obcaecati</p>
                </div>
            </div>
        </div>
        <div class="section-content">
            <div class="row">
                <div class="col-md-12">
                    <!-- Portfolio Gallery Grid -->

                    <div
                        class="gallery-isotope grid-4 gutter-small clearfix"
                        data-lightbox="gallery"
                    >

                    {{ $slot }}

                    </div>
                    <!-- End Portfolio Gallery Grid -->
                </div>
            </div>
        </div>
    </div>
</section>
