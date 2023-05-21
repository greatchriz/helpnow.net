<x-layouts.frontend>

    <!-- Start Hero -->
    <section class="relative table w-full py-36 lg:py-44 bg-[url('../../assets/images/company/aboutus.html')] bg-no-repeat bg-center bg-cover" style="background-image: url(/assets/img/about/hero.jpg);">
        <div class="absolute inset-0 bg-black opacity-75"></div>
        <div class="container">
            <div class="grid grid-cols-1 pb-8 text-center mt-10">
                <h3 class="mb-6 md:text-2xl text-xl md:leading-normal leading-normal font-medium text-white">Empowering Lives, Transforming Communities</h3>

                <p class="text-slate-300 text-sm max-w-xl mx-auto">At Help Now, we are dedicated to making a positive difference in the lives of those in need. Through our unwavering commitment and compassionate approach, we strive to empower individuals, families, and communities to overcome challenges and build a brighter future. Together, we can create lasting change and transform lives.</p>
            </div><!--end grid-->
        </div><!--end container-->

        <x-partials.frontend.breadcrumb dPage="About Us" />
    </section><!--end section-->
    <div class="relative">
        <div class="shape absolute sm:-bottom-px -bottom-[2px] start-0 end-0 overflow-hidden z-1 text-white dark:text-slate-900">
            <svg class="w-full h-auto" viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M0 48H1437.5H2880V0H2160C1442.5 52 720 0 720 0H0V48Z" fill="currentColor"></path>
            </svg>
        </div>
    </div>
    <!-- End Hero -->
    <x-partials.frontend.who-we-are-section />

    <x-partials.frontend.team-section
        class="md:py-24 py-16"
        title="Our Journey"
        subtitle="From Humble Beginnings to Transformative Impact."
    >
        <x-partials.frontend.team-section-item
            image="/assets/img/about/portfolio/01.jpg"
            title="Inception"
            content="Our story began with a shared belief in the power of compassion and the desire to make a positive impact on the world. In 2008, a group of dedicated individuals came together, driven by a common purpose: to create a world where every individual has equal opportunities and access to essential resources. Help Now was born out of this vision, igniting a flame of hope that continues to burn brightly today."
        />

        <x-partials.frontend.team-section-item
            image="/assets/img/about/portfolio/02.jpg"
            title="Pioneering New Paths"
            content="Our journey has been marked by groundbreaking initiatives and transformative impact. We have fearlessly ventured into uncharted territory, challenging social norms and breaking barriers that hindered progress. By pioneering innovative programs and services, we have empowered individuals to overcome adversity, realize their potential, and become catalysts for change in their own communities."
        />

        <x-partials.frontend.team-section-item
            image="/assets/img/about/portfolio/03.jpg"
            title="Growing Together"
            content="As Help Now grew, so did our network of compassionate individuals, partners, and supporters. We fostered strong community bonds, collaborating with like-minded organizations and individuals who shared our passion for social change. Together, we have leveraged collective strength, pooled resources, and amplified our impact, reaching even more lives and communities in need."
        />

        <x-partials.frontend.team-section-item
            image="/assets/img/about/portfolio/04.jpg"
            title="Sustainable Change"
            content="Our commitment to sustainable change drives our every endeavor. We strive not only to provide immediate assistance but also to build sustainable solutions that empower individuals and communities in the long run. By focusing on education, skill-building, entrepreneurship, and capacity development, we lay the foundation for lasting change, enabling individuals to break the cycle of poverty and create a brighter future for themselves and future generations."
        />

    </x-partials.frontend.team-section>

    <x-partials.frontend.team-section
        class="md:py-24 py-16"
        title="Our Mission and Vision"
        subtitle="Creating Lasting Impact Through Compassion and Innovation."
    >

        <x-partials.frontend.team-section-item
            image="/assets/img/about/vision/01.jpg"
            title="Our Mission"
            content="To empower individuals, families, and communities facing adversity by providing access to resources, opportunities, and support systems that foster personal growth, resilience, and sustainable development. We are driven by a belief in the inherent dignity and potential of every individual, and we work tirelessly to ensure that no one is left behind."
        />

        <x-partials.frontend.team-section-item
            image="/assets/img/about/vision/02.png"
            title="Our Vision"
            content="A world where everyone has equal opportunities, access to essential resources, and the power to transform their lives. We envision communities that are resilient, inclusive, and empowered, where individuals can thrive and contribute to the greater good. Through our collective efforts, we strive to create sustainable solutions that address social challenges and foster positive change on a global scale."
        />

    </x-partials.frontend.team-section>


    <x-partials.frontend.team-section
        class="md:py-24 py-16"
        title="Our strategy"
        subtitle="Help Now is here to make sure the World's over 10,000,000 seriously ill children and their families can make the most of every moment they have together, whether that’s for years, months or only hours."
    >

        <x-partials.frontend.team-section-item

            image="/assets/img/about/strategy/01.webp"
            title="Improving access"
            content1="We believe that no family should face their journey alone: we want to increase reach so that more children and families can access 24/7 palliative care."
            content2="Right now, there is a postcode lottery of support. Not all families are able to access the care they need. There is a growing demand on services because more babies are born with life-limiting conditions and more young adults are surviving into adulthood."
            content3="And families from BAME communities, or those living in deprived areas, are more likely to have children with life-limiting conditions in the first place."
            content4="This has a major impact on family health and wellbeing. Families can feel isolated and exhausted caring 24/7 and don’t know where to turn, with rates of family breakdown higher in families caring for seriously ill children. Shockingly, mothers of seriously ill children are 50% more likely to die prematurely themselves."
        />

        <x-partials.frontend.team-section-item
            image="/assets/img/about/vision/02.webp"
            title="Better quality life"
            content1="We believe that no family should face their journey alone: we want to increase reach so that more children and families can access 24/7 palliative care."
            content2="Right now, there is a postcode lottery of support. Not all families are able to access the care they need. There is a growing demand on services because more babies are born with life-limiting conditions and more young adults are surviving into adulthood."
            content3="And families from BAME communities, or those living in deprived areas, are more likely to have children with life-limiting conditions in the first place."
            content4="This has a major impact on family health and wellbeing. Families can feel isolated and exhausted caring 24/7 and don’t know where to turn, with rates of family breakdown higher in families caring for seriously ill children. Shockingly, mothers of seriously ill children are 50% more likely to die prematurely themselves."
        />

    </x-partials.frontend.team-section>

</x-layouts.frontend>
