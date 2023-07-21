@props(['link'])

<a
    href="{{ $link }}"
    class="py-2 px-5 inline-block font-semibold tracking-wide border align-middle transition duration-500 ease-in-out text-base text-center bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white rounded-md"
>{{ $slot }} <i class="uil uil-arrow-right"></i></a>
