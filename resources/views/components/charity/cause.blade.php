@props(['image', 'title', 'description', 'progress', 'raised', 'goal', 'charityNumber'])


<div class="group relative rounded hover:-mt-1 shadow hover:shadow-md dark:shadow-gray-800 overflow-hidden transition-all duration-300">
    <div class="relative overflow-hidden">
        <img src="{{ $image }}" alt="">

        <div class="absolute p-4 start-0 end-0 text-center bg-slate-900/80 -bottom-24 group-hover:bottom-0 transition-all duration-300">
            <a href="donate" class="btn btn-sm bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white rounded-md">Donate Now</a>
        </div>
    </div>

    <div class="p-6">
        <a href="/donate" class="hover:text-indigo-600 text-lg font-semibold">{{ $title }}</a>

        <p class="text-slate-600 text-sm mt-2">US Regulator (IRS) — Charity Number: {{ $charityNumber }}</p>

        <p class="text-slate-400 mt-2">{{ $description }}</p>

        <div class="mt-3">
            <div class="flex justify-between mb-2">
                <span class="text-slate-400">Progress</span>
                <span class="text-slate-400">{{ $progress }}</span>
            </div>
            <div class="w-full bg-gray-100 dark:bg-gray-800 rounded-full h-[6px]">
                <div class="bg-indigo-600 h-[6px] rounded-full" style="width: {{ $progress }}"></div>
            </div>
            <ul class="flex list-none justify-between mt-3 mb-2">
                <li class="font-semibold">
                    <span class="text-indigo-600">Raised: </span>
                    <span>{{ $raised }}</span>
                </li>
                <li class="text-indigo-600 font-semibold">
                    <span>Goal: </span>
                    <span>{{ $goal }}</span>
                </li>
            </ul>
        </div>
    </div>
</div><!--end content-->
