@props(['tag', 'img', 'title', 'body'])
<div class="lg:w-1/3 md:w-1/2 p-3 picture-item shuffle-item shuffle-item--visible" data-groups="[{{ $tag }}]" style="position: absolute; top: 0px; visibility: visible; will-change: transform; left: 0px; opacity: 1; transition-duration: 250ms; transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1); transition-property: transform, opacity;">
    <div class="blog relative rounded-md shadow dark:shadow-gray-800 overflow-hidden">
        <img src="{{ $img }}" alt="">

        <div class="content p-6">
            <a href="blog-detail.html" class="title h5 text-lg font-medium hover:text-indigo-600 duration-500 ease-in-out">{{ $title }}</a>
            <p class="text-slate-400 mt-3">{{ $body }}</p>

            <div class="mt-4">
                <x-blue-button link="/">
                    Read More
                </x-blue-button>

            </div>
        </div>
    </div>
</div>
<!--end content-->
