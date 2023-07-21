<x-layouts.frontend>

    <section
        class="relative md:pt-60 pt-40 md:pb-64 pb-56 flex items-center bg-[url('../../assets/images/helpcenter.jpg')] bg-center bg-no-repeat bg-cover jarallax"
    >
        <div class="absolute inset-0 bg-black opacity-75"></div>
        <div class="container">
            <div class="grid grid-cols-1 pb-8 text-center mt-10">
                <h3 class="mb-6 md:text-2xl text-xl md:leading-normal leading-normal font-medium text-white">Palliative care networks
                </h3>

                <p class="text-slate-300 text-sm max-w-xl mx-auto">Uniting Professionals and Stakeholders for Coordinated Support and Best Practices
                    .</p>
            </div>
            <!--end grid-->
        </div>
        <!--end container-->

        <div class="absolute text-center z-10 bottom-5 start-0 end-0 mx-3">
            <ul class="breadcrumb tracking-[0.5px] breadcrumb-light mb-0 inline-block">
                <li
                    class="inline breadcrumb-item uppercase text-[13px] font-bold duration-500 ease-in-out text-white/50 hover:text-white">
                    <a href="/">Help Now</a></li>
                <li
                    class="inline breadcrumb-item uppercase text-[13px] font-bold duration-500 ease-in-out text-white"
                    aria-current="page"
                >Palliative care networks</li>
            </ul>
        </div>
    </section>

    <div class="relative">
        <div
            class="shape absolute sm:-bottom-px -bottom-[2px] start-0 end-0 overflow-hidden z-1 text-white dark:text-slate-900">
            <svg
                class="w-full h-auto"
                viewBox="0 0 2880 48"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
            >
                <path
                    d="M0 48H1437.5H2880V0H2160C1442.5 52 720 0 720 0H0V48Z"
                    fill="currentColor"
                ></path>
            </svg>
        </div>
    </div>
    <!-- End -->

    <section class="relative md:py-24 py-16">
        <div class="container relative md:mt-24 mt-16">
            <div class="grid grid-cols-1 pb-8 text-center">
                <h3 class="mb-4 md:text-3xl md:leading-normal text-2xl leading-normal font-semibold">Embracing Unity: UK's Children's Palliative Care Networks
                </h3>
                <p class="text-slate-400 max-w-xl mx-auto">Collaborative Alliances Transforming Care for Children with Life-Limiting Conditions
            </div>
            <!--end grid-->

            <div class="grid lg:grid-cols-12 grid-cols-1" id="reserve-form">
                <div class="lg:col-start-2 lg:col-span-10">

                    <h5 class="mb-4 font-medium text-lg text-indigo-600">
                        In the UK, a network of compassionate children's palliative care providers and organizations stands united in their mission to enhance the lives of children facing life-limiting conditions and their families. These palliative care networks operate in diverse ways, but their core focus remains on fostering collaboration among professionals and stakeholders from the children's palliative care sector. Breaking through organizational barriers, they exchange best practices and strategize effective service planning to address the unique needs of each child.
                    </h5>


                    <p class="text-slate-400 mb-4">
                        At the local level, these networks form powerful partnerships with local authorities and children's trusts, enabling the development of tailored service models that deliver personalized care to each community. Building upon these local foundations, regional networks consolidate efforts, providing strategic leadership that enhances operational efficiency and relevance.
                    </p>

                    <p class="text-slate-400 mb-4">
                        To improve and enhance understanding of the needs of children with life-limiting conditions, local networks – jointly developed with local authorities and children’s trusts – can be an effective model of service provision. Regional networks drawing together local networks can provide strategic leadership to enable services to be operationally relevant and efficient.

                    </p>

                    <p class="text-slate-400 mb-4">As part of its overall strategy, Together for Short Lives is committed to ensuring high standard, equitable care for all children and families through supporting children’s palliative care networks and by hosting regular network summit meetings.
                    </p>


                    {{-- @foreach($policies as $policy)
                        <x-policy title="{{ $policy->title }}" body="{{ $policy->body }}" />
                    @endforeach --}}


                </div>
            </div>

        </div>

        <div class="container relative md:mt-24 mt-16">

            <div class="grid grid-cols-1 pb-8 text-center">
                <h3 class="mb-4 md:text-3xl md:leading-normal text-2xl leading-normal font-semibold">List of our Paediatric Palliative Care Networks all over UK
                </h3>

            </div>
            <!--end grid-->
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
    </section>

</x-layouts.frontend>
