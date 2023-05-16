<x-frontend.layout>
    <x-frontend.sections.home.hero.layout>


        <x-frontend.sections.home.hero.slide
        bgImage="fundpro/images/bg/bg24.jpg"
       />

    </x-frontend.sections.home.hero.layout>


    <x-frontend.sections.home.boxes.layout>
        <x-frontend.sections.home.boxes.box />
        <x-frontend.sections.home.boxes.box />
        <x-frontend.sections.home.boxes.box />
    </x-frontend.sections.home.boxes.layout>

    <x-frontend.sections.home.about.layout />

    <x-frontend.sections.home.causes.layout>
        <x-frontend.sections.home.causes.cause />
    </x-frontend.sections.home.causes.layout>

    <x-frontend.sections.home.funfact.layout>
        <x-frontend.sections.home.funfact.funfact />
    </x-frontend.sections.home.funfact.layout>

    <x-frontend.sections.home.mission-and-events.layout>
        <x-frontend.sections.home.mission-and-events.mission />
        {{-- add this to the names slot events --}}
        <x-slot:events>
            <x-frontend.sections.home.mission-and-events.event />
        </x-slot>
    </x-frontend.sections.home.mission-and-events.layout>

    <x-frontend.sections.home.volunteers.layout>
        <x-frontend.sections.home.volunteers.volunteer />

    </x-frontend.sections.home.volunteers.layout>

    <x-frontend.sections.home.emergency.layout />

    <x-frontend.sections.home.be-a-volunteer.layout>
        <x-frontend.sections.home.be-a-volunteer.form />
    </x-frontend.sections.home.be-a-volunteer.layout>

    <x-frontend.sections.home.emergency.layout>

    </x-frontend.sections.home.emergency.layout>


    <x-frontend.sections.home.testimonials.layout>
        <x-frontend.sections.home.testimonials.testimonial />

    </x-frontend.sections.home.emergency.layout>




    <x-frontend.sections.home.gallery.layout>
        <x-frontend.sections.home.gallery.item />

    </x-frontend.sections.home.gallery.layout>












    {{-- //home/cause/layout --}}




</x-frontend.layout>
