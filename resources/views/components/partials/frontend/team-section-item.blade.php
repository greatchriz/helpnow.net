
@props(['image' => '', 'title' => '', 'content' => '', 'content1' => '', 'content2' => '', 'content3' => '', 'content4' => ''])

<div class="grid md:grid-cols-12 grid-cols-1 gap-[30px] bg-slate-100 m-6 rounded shadow-lg p-3">
    <div class="lg:col-span-5 md:col-span-6">
        <div class="grid grid-cols-1 gap-[30px]">
            <img src="{{ $image }}" class="rounded-md" alt="">
        </div><!--end grid-->
    </div><!--end col-->

    <div class="lg:col-span-7 md:col-span-6">
        <div class="sticky top-20">
            <div class="grid lg:grid-cols-12 grid-cols-1 gap-[30px]">
                <div class="lg:col-span-12">
                    <div class="work-details">


                        @if($title)
                        <h4 class="text-xl font-semibold mb-3 border-b border-gray-100 dark:border-gray-700 pb-3">{{ $title }}</h4>
                        @endif

                            @if($content)
                            <p class="text-slate-400"> {{ $content }}</p>
                            @endif

                            @if($content1)
                                <p class="text-rose-600"> {{ $content1 }}</p>
                                <hr class="my-6">
                            @endif

                            @if ($content2)
                            <p class="text-slate-400"> {{ $content2 }}</p>

                            @endif

                            @if ($content3)
                                <p class="text-slate-400"> {{ $content3 }}</p>
                            @endif

                            @if ($content4)
                                 <p class="text-slate-400"> {{ $content4 }}</p>
                             @endif



                    </div>
                </div><!--end col-->

            </div><!--end grid-->
        </div>
    </div><!--end col-->
</div><!--end grid-->
