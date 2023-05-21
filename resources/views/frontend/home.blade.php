<x-layouts.frontend>
        <!-- Start Hero -->
        <section class="relative lg:py-44 py-36 bg-[url('../../assets/images/charity/bg.html')] bg-center bg-cover" style="background-image: url(/assets/img/home/hero.jpg);">
            <div class="absolute inset-0 bg-slate-900/50"></div>
            <div class="container relative z-1">
                <div class="grid md:grid-cols-12 grid-cols-1 items-center mt-10 gap-[30px]">
                    <div class="lg:col-span-7 md:col-span-6">
                        <div class="md:me-6">
                            <h4 class="font-bold lg:leading-normal leading-normal text-4xl lg:text-5xl mb-5 text-white"><b>Help Now</b></h4>
                            {{-- give me a stylish simple font for this hero page section --}}

                            <p class="text-white mb-8" style="font-family: 'Times New Roman', Times, serif;">
                                At <b>Help Now</b>, we recognize that these children are entrepreneurial, tenacious and intelligent. In order to reach out to them and offer a helping hand, we provide support to the children with protection, guidance, education and healthcare. The help offered can lead to street children fulfilling their vast potential. Street children may be marginalised but many are also ambitious, tough and resilient. To establish schools ( both Primary and Secondary) in local Communities In Africa and provide free education for children of less privileged family who cannot afford to send their children/ward to school because of tuition fees.
                            </p>

                            <div class="mt-6">
                                <a href="#" class="btn bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white rounded-md">Donate Now</a>
                            </div>
                        </div>
                    </div><!--end col-->
                </div><!--end grid-->
            </div><!--end container-->
        </section><!--end section-->
        <section class="relative bg-indigo-600 py-12">
            <div class="container">
                <div class="relative grid md:grid-cols-4 grid-cols-2 items-center gap-[30px]">
                    <div class="counter-box text-center">
                        <h1 class="text-4xl font-bold mb-4 text-white"><span class="counter-value" data-target="100">1</span>M</h1>
                        <h5 class="counter-head text-xs font-semibold text-white">PEOPLE FACING FOOD INSECURITY</h5>
                    </div><!--end counter box-->

                    <div class="counter-box text-center">
                        <h1 class="text-4xl font-bold mb-4 text-white"><span class="counter-value" data-target="152">2</span>M</h1>
                        <h5 class="counter-head text-xs font-semibold text-white">PEOPLE WFP AIMS TO REACH IN 2022</h5>
                    </div><!--end counter box-->

                    <div class="counter-box text-center">
                        <h1 class="text-4xl font-bold mb-4 text-white">$<span class="counter-value" data-target="1500">0</span>M</h1>
                        <h5 class="counter-head text-xs font-semibold text-white">WFP'S FUNDING NEEDS IN 2022</h5>
                    </div><!--end counter box-->

                    <div class="counter-box text-center">
                        <h1 class="text-4xl font-bold mb-4 text-white"><span class="counter-value" data-target="29">0</span>M</h1>
                        <h5 class="counter-head text-xs font-semibold text-white">MEALS DISTRIBUTED WORLDWIDE</h5>
                    </div><!--end counter box-->
                </div>
            </div>
        </section>
        <!-- End Hero -->

        <!-- Start -->
        <section class="relative md:py-24 py-16">
            <div class="container">
                <div class="grid md:grid-cols-12 grid-cols-1 items-center gap-[30px]">
                    <div class="md:col-span-6">
                        <div class="lg:me-8">
                            <img src="assets/images/charity/about.jpg" class="rounded-full shadow-lg dark:shadow-gray-800" alt="">
                        </div>
                    </div>

                    <div class="md:col-span-6">
                        <div class="lg:ms-8">
                            <h6 class="text-indigo-600 text-sm font-bold uppercase mb-2">About Us</h6>
                            <h3 class="mb-3 md:text-3xl md:leading-normal text-2xl leading-normal font-semibold">Our Highest Ambition <br> is to Help People</h3>
                            <h3 class="mb-4 text-lg leading-normal font-semibold">In August 2016 <b>Help Now</b> Foundation was granted registration (1168917) by the Charity Commission to carry out its charitable objectives worldwide.</h3>

                            <p class="text-slate-400 max-w-xl mb-6">Our main purpose is simply to promote, market and profile the needs and campaigns of any voluntary sector organisation as well as bring attention and public awareness about the organisation itself, whether established for decades and traditionally rooted or a new startup organisation needing help with the amount of bureaucratic hurdles that must be overcome to achieve registered status.</p>

                            <p class="text-slate-400 max-w-xl mb-6"><b>Help Now</b> is also positioned to help and liaise with organisations on the ground when disaster relief is needed, we will be working to bring live and up-to-the-minute news on what is going with the situation and we will endeavour to stay with the story long after the crisis is over so that the public can see what has been achieved or is continuing to be achieved.</p>

                            <p class="text-slate-400 max-w-xl mb-6">
                                For <b>Help Now</b> to achieve its own aims, we promote content-managed web pages that are prepared with the ability to rank themselves through the most popular search engines. Those pages may contain content such as videos, images, audio and a fully detailed informational article that will educate the public of the organisation's purpose and aims or current campaigns.
                            </p>

                            <p class="text-slate-400 max-w-xl mb-6">
                                We really urge the public to get behind us and give that tiny bit of support we need from you in order for us to help multitudes of charity and non-profit organisation become more visible than they have ever been and therefore helping them to acquire funding or awareness or both.
                            </p>




                            <a href="#" class="btn bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white rounded-md">Donate Now</a>
                        </div>
                    </div>
                </div><!--end row-->
            </div><!--end container-->
        </section><!--end section-->
        <!-- End -->

        <!-- Start our causes-->
        <section class="relative">

            <div class="container md:mt-24 mt-16">
                <div class="grid grid-cols-1 pb-8 text-center">
                    <h3 class="mb-4 md:text-3xl md:leading-normal text-2xl leading-normal font-semibold">Our Causes</h3>

                    <p class="text-slate-400 max-w-xl mx-auto">Discover the Areas Where Your Support Can Make a Difference.</p>
                </div><!--end grid-->

                <div class="grid lg:grid-cols-3 md:grid-cols-2 grid-cols-1 mt-8 gap-[30px]">

                    <x-charity.cause
                        title="American Foundation for Suicide Prevention (AFSP)"
                        charityNumber="13-3393329"
                        description="The American Foundation for Suicide Prevention (AFSP) is a leading organization dedicated to saving lives and bringing hope to those affected by suicide. Through research, education, advocacy, and support programs, AFSP works relentlessly to understand and prevent suicide, aiming to create a world where mental health is prioritized, stigma is reduced, and individuals receive the help they need."
                        image="assets/img/home/causes/american-foundation-for-sucide-prevention.jpeg" progress="64%" raised="$640" goal="$1000"
                    />

                    <x-charity.cause
                        title="Ending Childhood Hunger, Nourishing Futures"
                        charityNumber="32-6854612"
                        description="Feed the Children is a dedicated organization committed to ending childhood hunger and providing nourishment to vulnerable children. Through direct food distribution, sustainable agriculture initiatives, nutrition education, and emergency relief efforts, Feed the Children strives to empower families and communities to break the cycle of hunger and poverty. By addressing food insecurity and promoting access to nutritious meals, Feed the Children envisions a future where no child goes to bed hungry and where every child has the opportunity to grow, thrive, and reach their full potential."
                        image="assets/img/home/causes/feed-the-children.jpeg" progress="64%" raised="$640" goal="$1000"
                    />

                    <x-charity.cause
                        title="Freedom From Torture"
                        description="Freedom From Torture is a dedicated organization working towards the eradication of torture and providing support to survivors. Their comprehensive services aim to heal survivors' physical and psychological wounds, empower them to rebuild their lives, and advocate for human rights globally."
                        charityNumber="47-8312490"
                        Progress="72%"
                        Raised="$8,520"
                        Goal="$12,000"
                        image="assets/img/home/causes/freedom-from-turture.jpeg"
                    />

                    <x-charity.cause
                        title="Hope And Homes For Children"
                        description="Hope And Homes For Children is a dedicated organization working to ensure that every child grows up in a loving family and a safe and nurturing environment. They focus on transforming outdated orphanage systems by advocating for family-based care and providing support to children and families in need. Through their efforts, they aim to protect children's rights, promote their well-being, and create a world where every child has a place to call home."
                        charityNumber="56-9203512"
                        Progress="89%"
                        Raised="$42,780"
                        Goal="$48,000"
                        image="assets/img/home/causes/hope-and-homes-for-children.jpeg"
                    />

                    <x-charity.cause
                        title="International Rescue Committee (IRC)"
                        description="The International Rescue Committee (IRC) is a dedicated organization working to empower people whose lives have been shattered by conflict and disaster. Through their humanitarian relief efforts, they aim to restore safety, dignity, and hope to millions of vulnerable people worldwide. The IRC provides emergency aid, medical care, and education to those in need, while also advocating for refugees' rights and protection."
                        charityNumber="13-5660870"
                        Progress="42%"
                        Raised="$3,360"
                        Goal="$8,000"
                        image="assets/img/home/causes/international-rescue-committee.jpeg"
                    />

                    <x-charity.cause
                        title="Hostage International"
                        description="Hostage International is a compassionate organization dedicated to providing support and care to hostages, their families, and former hostages. They understand the profound impact of hostage situations on individuals and work tirelessly to offer practical and emotional assistance throughout the hostage journey. Their services include reintegration support, trauma counseling, advocacy, and family assistance, with the aim of helping hostages and their families rebuild their lives and find hope after captivity."
                        charityNumber="85-4269013"
                        Progress="61%"
                        Raised="$15,320"
                        Goal="$25,000"
                        image="assets/img/home/causes/hostage-international.png"
                    />

                    <x-charity.cause
                        title="Medstar Health"
                        description="Medstar Health is a leading healthcare organization committed to providing exceptional medical care, advancing research and education, and improving community health. They strive to enhance the well-being of individuals and communities through innovative and compassionate healthcare services. With a focus on patient-centered care, Medstar Health ensures access to quality treatment, promotes preventive measures, and supports community outreach programs to address healthcare disparities and improve overall health outcomes."
                        charityNumber="32-5749136"
                        Progress="89%"
                        Raised="$240,000"
                        Goal="$270,000"
                        image="assets/img/home/causes/medstar-health.jpg"
                    />


                    <x-charity.cause
                        title="Polska-Akcja: Rebuilding Communities in Crisis"
                        description="Polska-Akcja is a nonprofit organization dedicated to providing immediate relief and long-term support to communities affected by disasters such as war or natural calamities. Their dedicated team mobilizes resources, coordinates relief efforts, and works tirelessly to rebuild communities, restore infrastructure, and provide essential services to those in need. Polska-Akcja is committed to standing by affected communities during their most challenging times, offering hope, resilience, and a path to recovery."
                        charityNumber="58-9275109"
                        Progress="67%"
                        Raised="$86,250"
                        Goal="$128,500"
                        image="assets/img/home/causes/polska-akcja-disaster.jpeg"
                    />



                    <x-charity.cause
                        title="Street Child: Empowering Children Through Education"
                        description="Street Child is a nonprofit organization dedicated to providing education and opportunities for vulnerable and street-connected children worldwide. Their mission is to create access to quality education, vocational training, and child protection services, enabling children to break free from the cycle of poverty and build a better future. Street Child works closely with local communities, governments, and partner organizations to implement sustainable programs that address the unique challenges faced by street children and empower them to reach their full potential."
                        charityNumber="73-6102498"
                        Progress="82%"
                        Raised="$315,720"
                        Goal="$385,000"
                        image="assets/img/home/causes/street-child.jpg"
                    />

                </div><!--end grid-->
            </div><!--end container-->
        </section>
        <!-- end -->

        <!-- Start -->
        <section class="py-20 w-full table relative bg-[url('../../assets/images/charity/cta.html')] bg-top bg-no-repeat bg-cover">
            <div class="absolute inset-0 bg-slate-900/70"></div>
            <div class="container relative">
                <div class="grid grid-cols-1 text-center">
                    <h3 class="mb-4 md:text-3xl text-2xl text-white font-medium">Call Us Today</h3>

                    <p class="text-white/80 max-w-xl mx-auto">If you have any questions or would like to learn more about our organization and how you can get involved, please don't hesitate to give us a call. Our dedicated team is ready to assist you.</p>

                    <button style="margin-top: 20px" type="submit" class="btn bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white rounded-md inline-flex items-center justify-center ">Call Us Today
                        <span class="ml-4" style="margin-left: 20px"><i data-feather="phone" class="h-4 w-4"></i></span>
                    </button>


                </div><!--end grid-->
            </div><!--end container-->
        </section><!--end section-->
        <!-- End -->

        <!-- Start -->
        <section class="relative md:py-24 py-16">
            <div class="container">
                <div class="grid grid-cols-1 pb-8 text-center">
                    <h3 class="mb-6 md:text-3xl text-2xl md:leading-normal leading-normal font-semibold">OUR PEOPLE</h3>

                    <p class="text-slate-400 max-w-xl mx-auto">
                        Our dedicated front line teams are supported by an experienced Executive Team and Board of Trustees. These are all people with a wide range of skills gathered from across all three sectors – public, private and charity. Find out more using the filters below..</p>
                </div><!--end grid-->

                <div class="grid md:grid-cols-12 grid-cols-1 mt-8 gap-[30px]">
                    <x-charity.team
                        name="STEPHEN BELL OBE"
                        position="EXECUTIVE TEAM"
                        image="assets/img/home/team/01.avif"
                    />

                    <x-charity.team
                        name="Becky Hewitt"
                        position="EXECUTIVE TEAM"
                        image="assets/img/home/team/02.avif"
                    />



                    <x-charity.team
                        name="Glynis Frew"
                        position="TRUSTEE"
                        image="assets/img/home/team/03.avif"
                    />

                    <x-charity.team
                        name="Dean Finch"
                        position="TRUSTEE"
                        image="assets/img/home/team/04.avif"
                    />

                    {{-- LESLEY-ANNE KNOWLES --}}

                    <x-charity.team
                        name="LESLEY-ANNE KNOWLES"
                        position="TRUSTEE"
                        image="assets/img/home/team/05.avif"
                    />



                    {{-- CATHERINE HEARNE --}}

                    <x-charity.team
                        name="CATHERINE HEARNE"
                        position="TRUSTEE"
                        image="assets/img/home/team/06.avif"

                    />


                    {{-- MIKE BARTON  --}}

                    <x-charity.team
                        name="MIKE BARTON"
                        position="TRUSTEE"
                        image="assets/img/home/team/07.avif"
                    />



                    {{-- STEVE GUYON, OBE --}}

                    <x-charity.team
                        name="STEVE GUYON, OBE"
                        position="TRUSTEE"
                        image="assets/img/home/team/08.avif"
                    />



                    {{-- PETER BROWN --}}

                    <x-charity.team
                        name="PETER BROWN"
                        position="TRUSTEE"
                        image="assets/img/home/team/09.avif"
                    />


                    {{-- GERALDINE KAY --}}

                    <x-charity.team
                        name="GERALDINE KAY"
                        position="TRUSTEE"
                        image="assets/img/home/team/10.avif"
                    />




                    {{-- LESLEY TELFORD --}}





                </div><!--end grid-->
            </div><!--end container-->
            <!-- team -->

        </section><!--end section-->
        <!-- End -->

</x-layouts.frontend>
