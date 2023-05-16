<section>
    <div class="container pb-30">
        <div class="section-content">
            <div class="row">
                <div class="col-md-8 pb-sm-20">
                    <h3 class="line-bottom mt-0">Our Mission</h3>
                    <div class="row">
                        {{ $slot }}
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4">
                    <h3 class="line-bottom border-bottom mt-0">Upcoming Events</h3>
                    {{-- create a named slot called "events" and pass it to the component --}}4
                    {{ $events }}
                </div>
            </div>
        </div>
    </div>
</section>
