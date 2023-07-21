<x-layouts.frontend>

    <section
        class="relative md:pt-60 pt-40 md:pb-64 pb-56 flex items-center bg-[url('../../assets/images/blog/bg1.jpg')] bg-center bg-no-repeat bg-cover jarallax"
    >
        <div class="absolute inset-0 bg-black opacity-75"></div>
        <div class="container">
            <div class="grid grid-cols-1 pb-8 text-center mt-10">
                <h3 class="mb-6 md:text-2xl text-xl md:leading-normal leading-normal font-medium text-white">Championing
                    Change for a Better Tomorrow
                </h3>

                <p class="text-slate-300 text-sm max-w-xl mx-auto">Join hands with us in our pursuit to ensure that
                    children with life-limiting and life-threatening conditions, as well as their families, experience
                    the highest quality of life and end-of-life care. Your generous support can create a vital impact,
                    benefitting communities locally and throughout the UK.</p>
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
                >Changing Lives</li>
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
        <div class="container relative">
            <div class="grid grid-cols-1 justify-center">
                <div class="relative z-2 transition-all duration-500 ease-in-out sm:-mt-[220px] -mt-[200px] m-0">
                    {{-- <div class="filters-group-wrap">
                        <div class="filters-group">
                            <ul class="mb-0 list-none container-filter-white filter-options text-center">
                                <li
                                    class="inline-block text-lg font-semibold mx-2 mb-3 cursor-pointer relative border-b border-transparent text-white/70 transition duration-500 active"
                                    data-group="all"
                                >All</li>
                                <li
                                    class="inline-block text-lg font-semibold mx-2 mb-3 cursor-pointer relative border-b border-transparent text-white/70 transition duration-500"
                                    data-group="business"
                                >Business</li>
                                <li
                                    class="inline-block text-lg font-semibold mx-2 mb-3 cursor-pointer relative border-b border-transparent text-white/70 transition duration-500"
                                    data-group="tech"
                                >Technology</li>
                                <li
                                    class="inline-block text-lg font-semibold mx-2 mb-3 cursor-pointer relative border-b border-transparent text-white/70 transition duration-500"
                                    data-group="lifestyle"
                                >Lifestyle</li>
                                <li
                                    class="inline-block text-lg font-semibold mx-2 mb-3 cursor-pointer relative border-b border-transparent text-white/70 transition duration-500"
                                    data-group="food"
                                >Food</li>
                            </ul>
                        </div>
                    </div>
 --}}


                    <div
                        id="grid"
                        class="md:flex justify-center mx-auto mt-4 shuffle"
                        style="position: relative; overflow: hidden; height: 1460.88px; transition: height 250ms cubic-bezier(0.4, 0, 0.2, 1) 0s;"
                    >

                        <x-changing-lives
                            tag="business"
                            img="assets/images/blog/01.webp"
                            title="
                            Disabled Children’s Partnership"
                            body="Together for Short Lives is a proud member of the Disabled Children's Partnership - a growing coalition of more than 45 organisations - campaigning for improved health and social care for disabled children, young people and their families in England....

                            "
                        />

                        <x-changing-lives
                            tag="business"
                            img="assets/images/blog/02.webp"
                            title="Disabled Children’s Partnership – Calling on MPs and Peers to be “Disabled Children’s Champions”"
                            body="Research from the Disabled Children's Partnership shows that disabled children have been disproportionately affected by COVID-19. Conditions have worsened. Parents are exhausted. Disabled children and families can’t be left out of the conversation on national recovery from the pandemic. Every..."
                        />

                        <x-changing-lives
                            tag="business"
                            img="assets/images/blog/03.webp"
                            title="Save the Children’s Hospice Grant"
                            body="Sign our petition today to help us save the £25 million Children’s Hospice Grant in England. The NHS England Children’s Hospice Grant provides crucial funding to children's hospices in England. However hospices have been told by the NHS that this...

                            "
                        />


                        <!--end content-->
                    </div>
                </div>
            </div>
            <!--end grid-->
        </div>
        <!--end container-->

        <div class="container relative md:mt-24 mt-16">
            <div class="grid grid-cols-1 pb-8 text-center">
                <h3 class="mb-4 md:text-3xl md:leading-normal text-2xl leading-normal font-semibold">Policy and influencing
                </h3>
                <p class="text-slate-400 max-w-xl mx-auto">Find out about our policies and the changes we believe are needed to build a strong and sustainable children’s palliative care sector and transform the lives of the estimated 99,000 babies, children and young people in the UK with life-limiting and life-threatening conditions and their families.
                </p>
            </div>
            <!--end grid-->

            <div class="grid lg:grid-cols-12 grid-cols-1" id="reserve-form">
                <div class="lg:col-start-2 lg:col-span-10">

                    @foreach($policies as $policy)
                        <x-policy title="{{ $policy->title }}" body="{{ $policy->body }}" />
                    @endforeach

                    <div class="mt-6">
                        <a href="page-job-apply.html" class="py-2 px-5 inline-block font-semibold tracking-wide border align-middle transition duration-500 ease-in-out text-base text-center bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white rounded-md">Apply now</a>
                    </div>
                </div>
            </div>

        </div>

    </section>

</x-layouts.frontend>
