<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // create $pages array
        $pages = [
            [
                'title' => 'Home',
                'slug' => 'home',
                'meta_title' => 'Help Now - Empowering Communities, Changing Lives | Donate & Volunteer',
                'meta_description' => 'Help Now is a charity dedicated to empowering communities and changing lives. Support our mission by donating or volunteering. Join us in making a difference today!',
            ],
            [
                'title' => 'About Us',
                'slug' => 'about-us',
                'meta_title' => 'About Us | Help Now',
                'meta_description' => 'Explore the inspiring story of Help Now, a forward-thinking charity organization driven by the vision of creating a lasting impact on the world.',
            ],
            [
                'title' => 'Our Work',
                'slug' => 'our-work',
                'meta_title' => 'Our Impact - Help Now Charity | Transforming Lives through Action',
                'meta_description' => 'Explore the incredible impact of Help Now Charity through our diverse range of initiatives and projects.',
            ],
            // Page: Get Involved

            // Page Title: Get Involved - Help Now Charity | Be a Catalyst for Change
            // Meta Description: Take an active role in making a difference with Help Now Charity. Find out how you can get involved, volunteer your time, donate resources, or fundraise for our impactful programs. Together, we can amplify our efforts and create a powerful force for positive change. Join us today and be a catalyst for transforming lives.
            [
                'title' => 'Get Involved',
                'slug' => 'get-involved',
                'meta_title' => 'Get Involved - Help Now Charity | Be a Catalyst for Change',
                'meta_description' => 'Take an active role in making a difference with Help Now Charity. Find out how you can get involved, volunteer your time, donate resources, or fundraise for our impactful programs. Together, we can amplify our efforts and create a powerful force for positive change. Join us today and be a catalyst for transforming lives.',
            ],
            // Page: Donate
            // Page Title: Donate - Help Now Charity | Empowering Generosity for a Better World
            // Meta Description: Make a meaningful difference by donating to Help Now Charity. Your generous contributions enable us to provide essential aid, support sustainable projects, and uplift communities in need. Join us in empowering generosity and creating a better world. Together, we can change lives and inspire hope.
            [
                'title' => 'Donate',
                'slug' => 'donate',
                'meta_title' => 'Donate - Help Now Charity | Empowering Generosity for a Better World',
                'meta_description' => 'Make a meaningful difference by donating to Help Now Charity. Your generous contributions enable us to provide essential aid, support sustainable projects, and uplift communities in need. Join us in empowering generosity and creating a better world. Together, we can change lives and inspire hope.',
            ],

            // Page: Events
            // Page Title: Events - Help Now Charity | Engaging the Community for Impactful Change
            // Meta Description: Discover the latest events organized by Help Now Charity, designed to engage the community and drive impactful change. From fundraisers to awareness campaigns, our events provide opportunities to connect, learn, and support our mission. Join us in building a network of compassion and making a lasting difference.
            [
                'title' => 'Events',
                'slug' => 'events',
                'meta_title' => 'Events - Help Now Charity | Engaging the Community for Impactful Change',
                'meta_description' => 'Discover the latest events organized by Help Now Charity, designed to engage the community and drive impactful change. From fundraisers to awareness campaigns, our events provide opportunities to connect, learn, and support our mission. Join us in building a network of compassion and making a lasting difference.',
            ],
        ];

        // loop through each page and create it

        foreach ($pages as $page) {
            \App\Models\Page::create($page);
        }
    }
}
