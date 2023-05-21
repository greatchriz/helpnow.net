@props(['dPage' => ''])
<div class="absolute text-center z-10 bottom-5 start-0 end-0 mx-3">
    <ul class="breadcrumb tracking-[0.5px] breadcrumb-light mb-0 inline-block">
        <li class="inline breadcrumb-item uppercase text-[13px] font-bold duration-500 ease-in-out text-white/50 hover:text-white"><a href="/">Help Now</a></li>
        <li class="inline breadcrumb-item uppercase text-[13px] font-bold duration-500 ease-in-out text-white" aria-current="page">{{ $dPage }}</li>
    </ul>
</div>
