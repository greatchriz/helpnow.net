<div class="container relative md:mt-24 mt-16">
    <div class="grid md:grid-cols-12 grid-cols-1 gap-[30px]">


        <div class="lg:col-span-12 md:col-span-12">
            <div id="tech" class="">
                <div id="accordion-collapseone" data-accordion="collapse" class="mt-6">

                    @foreach ($faqs as $faq)
                    <div class="relative shadow dark:shadow-gray-800 rounded-md overflow-hidden mt-4">
                        <h2 class="text-base font-semibold" id="accordion-collapse-heading-{{ $faq->id }}">
                            <button type="button" class="flex justify-between items-center p-5 w-full font-medium text-start text-dark dark:text-white" data-accordion-target="#accordion-collapse-body-{{ $faq->id }}" aria-expanded="false" aria-controls="accordion-collapse-body-{{ $faq->id }}">
                                <span>{{ $faq->title }}</span>
                                <svg data-accordion-icon="" class="w-4 h-4 shrink-0" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                                </svg>
                            </button>
                        </h2>
                        <div id="accordion-collapse-body-{{ $faq->id }}" class="hidden" aria-labelledby="accordion-collapse-heading-{{ $faq->id }}">
                            <div class="p-5">
                                <p class="text-slate-400 dark:text-gray-400">{{ $faq->body }}</p>
                            </div>
                        </div>
                    </div>
                    @endforeach


                </div>
            </div>


        </div>
    </div><!--end grid-->
</div>
