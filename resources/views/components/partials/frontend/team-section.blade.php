@props(['title', 'subtitle'])
<!-- Start Section-->
<section {{ $attributes->merge(['class' => 'relative']) }} >
    <div class="container bg-gray-50 dark:bg-slate-800 shadow dark:shadow-gray-800 p-6 rounded-md">
        <div class="grid grid-cols-1 pb-8 text-center">
            <h3 class="mb-6 md:text-3xl text-2xl md:leading-normal leading-normal font-semibold">{{ $title }}</h3>

            <p class="text-slate-400 max-w-xl mx-auto">{{ $subtitle }}</p>
        </div>

        {{ $slot }}



    </div><!--end container-->

</section><!--end section-->
<!-- End Section-->
