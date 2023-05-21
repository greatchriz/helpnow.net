@props(['name', 'position', 'image'])

<div class="lg:col-span-3 md:col-span-6">
    <div class="group text-center">
        <div class="relative inline-block mx-auto h-52 w-52 rounded-full overflow-hidden">
            <img src="{{ $image }}" class="" alt="">
            <div class="absolute inset-0 bg-gradient-to-b from-transparent to-black h-52 w-52 rounded-full opacity-0 group-hover:opacity-100 transition-all duration-500 ease-in-out"></div>
        </div>

        <div class="content mt-3">
            <a href="#" class="text-lg font-semibold hover:text-indigo-600 transition-all duration-500 ease-in-out">{{ $name }}</a>
            <p class="text-slate-400">{{ $position }}</p>
        </div>
    </div>
</div>
