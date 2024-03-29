<!DOCTYPE html>
<html
    lang="en"
    class="light scroll-smooth"
    dir="ltr"
>

    <!-- Mirrored from shreethemes.in/techwind/layouts/index-charity.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 02 May 2023 16:46:01 GMT -->

    <head>
        <meta charset="UTF-8">
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1.0"
        >
        <meta
            name="description"
            content="Help Now - Empowering Lives, Creating Change"
        >
        <meta
            name="keywords"
            content="charity, non-profit, organization, empowerment, social change"
        >
        <meta
            name="author"
            content="Help Now Charity Organization"
        >

        <!-- Page Title -->
        <title>Help Now | Empowering Lives, Creating Change</title>

        <meta
            name="version"
            content="1.8.0"
        />
        <meta
            http-equiv="X-UA-Compatible"
            content="IE=edge"
        />

        <!-- favicon -->
        <link
            rel="shortcut icon"
            href="assets/img/favicon.ico"
        />

        <!-- Css -->
        <link
            href="assets/libs/tobii/css/tobii.min.css"
            rel="stylesheet"
        >
        <link
            href="assets/libs/tiny-slider/tiny-slider.css"
            rel="stylesheet"
        >
        <!-- Main Css -->
        <link
            href="assets/libs/%40iconscout/unicons/css/line.css"
            type="text/css"
            rel="stylesheet"
        />
        <link
            rel="stylesheet"
            href="assets/css/icons.css"
        />
        <link
            rel="stylesheet"
            href="assets/css/tailwind.css"
        />

        <style>
            .navcontainer {
                display: flex;
                max-width: 1536px;
                padding-right: 13rem;
                padding-left: 13rem;
                align-items: center;
                justify-content: space-evenly;
            }

        </style>

    </head>

    <body class="font-nunito text-base text-black dark:text-white dark:bg-slate-900">
        <!-- Loader Start -->
        <div id="preloader">
            <div id="status">
                <div class="spinner">
                    <div class="double-bounce1"></div>
                    <div class="double-bounce2"></div>
                </div>
            </div>
        </div>
        <!-- Loader End -->

        <!-- Start Navbar -->
        <nav
            id="topnav"
            class="defaultscroll is-sticky"
        >
            <div class="container">
                <!-- Logo container-->
                <a
                    class="logo"
                    href="/"
                >
                    <span class="inline-block dark:hidden">
                        <img
                            src="assets/img/logo/dark.png"
                            class="l-dark"
                            height="24"
                            alt=""
                        >
                        <img
                            src="assets/img/logo/light.png"
                            class="l-light"
                            height="24"
                            alt=""
                        >
                    </span>
                    <img
                        src="assets/img/logo/dark.png"
                        height="24"
                        class="hidden dark:inline-block"
                        alt=""
                    >
                </a>

                <!-- End Logo container-->
                <div class="menu-extras">
                    <div class="menu-item">
                        <!-- Mobile menu toggle-->
                        <a
                            class="navbar-toggle"
                            id="isToggle"
                            onclick="toggleMenu()"
                        >
                            <div class="lines">
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>
                        </a>
                        <!-- End mobile menu toggle-->
                    </div>
                </div>

                <!--Login button Start-->
                <ul class="buy-button list-none mb-0">
                    <li class="inline mb-0">
                        <a href="/donate">

                            <span class="login-btn-light"><span
                                    class="btn btn-icon rounded-full bg-gray-50 hover:bg-gray-200 dark:bg-slate-900 dark:hover:bg-gray-700 hover:border-gray-100 dark:border-gray-700 dark:hover:border-gray-700"
                                ><i
                                        data-feather="heart"
                                        class="h-4 w-4"
                                    ></i></span></span>
                        </a>
                    </li>

                    <li class="inline ps-1 mb-0">
                        <a href="/donate">
                            <div class="login-btn-primary"><span
                                    class="btn btn-icon rounded-full bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white"
                                ><i
                                        data-feather="heart"
                                        class="h-4 w-4"
                                    ></i></span>

                        </a>
                    </li>
                </ul>
                <!--Login button End-->

                <div id="navigation">
                    <!-- Navigation Menu-->
                    <ul class="navigation-menu nav-light">
                        <li><a
                                href="/"
                                class="sub-menu-item"
                            >Home</a></li>

                        <li><a
                                href="/about-us"
                                class="sub-menu-item"
                            >about Us</a></li>
                        <li><a
                                href="/changing-lives"
                                class="sub-menu-item"
                            >Changing Lives</a></li>
                        <li><a
                                href="/palliative-care-networks"
                                class="sub-menu-item"
                            >Palliative care networks</a></li>
                        {{-- <li class="has-submenu parent-parent-menu-item">
                            <a href="javascript:void(0)">Landings</a><span class="menu-arrow"></span>

                            <ul class="submenu megamenu">
                                <li>
                                    <ul>
                                        <li><a href="index-saas.html" class="sub-menu-item">Saas <span class="bg-emerald-600 inline-block text-white text-[10px] font-bold px-2.5 py-0.5 rounded h-5 ms-1">Animation</span></a></li>
                                        <li><a href="index-classic-saas.html" class="sub-menu-item">Classic Saas </a></li>
                                        <li><a href="index-modern-saas.html" class="sub-menu-item">Modern Saas </a></li>
                                        <li><a href="index-apps.html" class="sub-menu-item">Application</a></li>
                                        <li><a href="index-classic-app.html" class="sub-menu-item">Classic App </a></li>
                                        <li><a href="index-smartwatch.html" class="sub-menu-item">Smartwatch</a></li>
                                        <li><a href="index-marketing.html" class="sub-menu-item">Marketing</a></li>
                                        <li><a href="index-seo.html" class="sub-menu-item">SEO Agency </a></li>
                                        <li><a href="index-payment.html" class="sub-menu-item">Payments</a></li>
                                        <li><a href="index-charity.html" class="sub-menu-item">Charity </a></li>
                                    </ul>
                                </li>

                                <li>
                                    <ul>
                                        <li><a href="index-it-solution.html" class="sub-menu-item">IT Solution</a></li>
                                        <li><a href="index-it-solution-two.html" class="sub-menu-item">It Solution Two </a></li>
                                        <li><a href="index-digital-agency.html" class="sub-menu-item">Digital Agency</a></li>
                                        <li><a href="index-job.html" class="sub-menu-item">Job</a></li>
                                        <li><a href="index-restaurent.html" class="sub-menu-item">Restaurent</a></li>
                                        <li><a href="index-hosting.html" class="sub-menu-item">Hosting</a></li>
                                        <li><a href="index-nft.html" class="sub-menu-item">NFT Marketplace</a></li>
                                        <li><a href="index-hotel.html" class="sub-menu-item">Hotel & Resort</a></li>
                                        <li><a href="index-gym.html" class="sub-menu-item">Gym <span class="bg-black dark:bg-slate-50 inline-block text-white dark:text-slate-900 text-[10px] font-bold px-2.5 py-0.5 rounded h-5 ms-1">Dark</span></a></li>
                                        <li><a href="index-yoga.html" class="sub-menu-item">Yoga <span class="bg-orange-600 inline-block text-white text-[10px] font-bold px-2.5 py-0.5 rounded h-5 ms-1">New</span></a></li>
                                    </ul>
                                </li>

                                <li>
                                    <ul>
                                        <li><a href="index-startup.html" class="sub-menu-item">Startup</a></li>
                                        <li><a href="index-business.html" class="sub-menu-item">Business</a></li>
                                        <li><a href="index-corporate.html" class="sub-menu-item">Corporate</a></li>
                                        <li><a href="index-corporate-two.html" class="sub-menu-item">Corporate Two </a></li>
                                        <li><a href="index-real-estate.html" class="sub-menu-item">Real Estate</a></li>
                                        <li><a href="index-consulting.html" class="sub-menu-item">Consulting </a></li>
                                        <li><a href="index-insurance.html" class="sub-menu-item">Insurance </a></li>
                                        <li><a href="index-construction.html" class="sub-menu-item">Construction </a></li>
                                        <li><a href="index-law.html" class="sub-menu-item">Law Firm </a></li>
                                        <li><a href="index-video.html" class="sub-menu-item">Video </a></li>
                                    </ul>
                                </li>

                                <li>
                                    <ul>
                                        <li><a href="index-personal.html" class="sub-menu-item">Personal</a></li>
                                        <li><a href="index-portfolio.html" class="sub-menu-item">Portfolio</a></li>
                                        <li><a href="index-photography.html" class="sub-menu-item">Photography <span class="bg-black dark:bg-slate-50 inline-block text-white dark:text-slate-900 text-[10px] font-bold px-2.5 py-0.5 rounded h-5 ms-1">Dark</span></a></li>
                                        <li><a href="index-studio.html" class="sub-menu-item">Studio</a></li>
                                        <li><a href="index-coworking.html" class="sub-menu-item">Co-Woriking</a></li>
                                        <li><a href="index-course.html" class="sub-menu-item">Online Courses </a></li>
                                        <li><a href="index-event.html" class="sub-menu-item">Event/Conference </a></li>
                                        <li><a href="index-hospital.html" class="sub-menu-item">Hospital</a></li>
                                        <li><a href="index-phone-number.html" class="sub-menu-item">Phone Number</a></li>
                                        <li><a href="index-forums.html" class="sub-menu-item">Forums </a></li>
                                    </ul>
                                </li>

                                <li>
                                    <ul>
                                        <li><a href="index-crypto.html" class="sub-menu-item">Cryptocurrency  <span class="bg-black dark:bg-slate-50 inline-block text-white dark:text-slate-900 text-[10px] font-bold px-2.5 py-0.5 rounded h-5 ms-1">Dark</span></a></li>
                                        <li><a href="index-landing-one.html" class="sub-menu-item">Landing One</a></li>
                                        <li><a href="index-landing-two.html" class="sub-menu-item">Landing Two</a></li>
                                        <li><a href="index-landing-three.html" class="sub-menu-item">Landing Three</a></li>
                                        <li><a href="index-landing-four.html" class="sub-menu-item">Landing Four</a></li>
                                        <li><a href="index-service.html" class="sub-menu-item">Service Provider</a></li>
                                        <li><a href="index-food-blog.html" class="sub-menu-item">Food Blog </a></li>
                                        <li><a href="index-blog.html" class="sub-menu-item">Blog </a></li>
                                        <li><a href="index-furniture.html" class="sub-menu-item">Furniture <span class="bg-orange-600 inline-block text-white text-[10px] font-bold px-2.5 py-0.5 rounded h-5 ms-1">New</span></a></li>
                                        <li><a href="index-landing-five.html" class="sub-menu-item">Landing Five <span class="bg-green-600 inline-block text-white text-[10px] font-bold px-2.5 py-0.5 rounded h-5 ms-1">Onepage</span></a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>

                        <li class="has-submenu parent-parent-menu-item">
                            <a href="javascript:void(0)">Pages</a><span class="menu-arrow"></span>
                            <ul class="submenu">
                                <li class="has-submenu parent-menu-item"><a href="javascript:void(0)"> Company </a><span class="submenu-arrow"></span>
                                    <ul class="submenu">
                                        <li><a href="page-aboutus.html" class="sub-menu-item"> About Us</a></li>
                                        <li><a href="page-services.html" class="sub-menu-item">Services</a></li>
                                        <li><a href="page-team.html" class="sub-menu-item"> Team</a></li>
                                        <li><a href="page-pricing.html" class="sub-menu-item">Pricing</a></li>
                                        <li><a href="page-testimonial.html" class="sub-menu-item">Testimonial </a></li>
                                    </ul>
                                </li>
                                <li class="has-submenu parent-menu-item"><a href="javascript:void(0)"> Accounts</a><span class="submenu-arrow"></span>
                                    <ul class="submenu">
                                        <li><a href="user-profile.html" class="sub-menu-item">User Profile</a></li>
                                        <li><a href="user-billing.html" class="sub-menu-item">Billing</a></li>
                                        <li><a href="user-payment.html" class="sub-menu-item">Payment</a></li>
                                        <li><a href="user-invoice.html" class="sub-menu-item">Invoice</a></li>
                                        <li><a href="user-social.html" class="sub-menu-item">Social</a></li>
                                        <li><a href="user-notification.html" class="sub-menu-item">Notification</a></li>
                                        <li><a href="user-setting.html" class="sub-menu-item">Setting</a></li>
                                    </ul>
                                </li>
                                <li class="has-submenu parent-menu-item"><a href="javascript:void(0)"> Real Estate</a><span class="submenu-arrow"></span>
                                    <ul class="submenu">
                                        <li><a href="property-listing.html" class="sub-menu-item">Listing</a></li>
                                        <li><a href="property-detail.html" class="sub-menu-item">Property Detail</a></li>
                                    </ul>
                                </li>
                                <li class="has-submenu parent-menu-item"><a href="javascript:void(0)"> Courses </a><span class="submenu-arrow"></span>
                                    <ul class="submenu">
                                        <li><a href="course-listing.html" class="sub-menu-item">Course Listing</a></li>
                                        <li><a href="course-detail.html" class="sub-menu-item">Course Detail</a></li>
                                    </ul>
                                </li>
                                <li class="has-submenu parent-menu-item"><a href="javascript:void(0)"> NFT Market </a><span class="submenu-arrow"></span>
                                    <ul class="submenu">
                                        <li><a href="nft-explore.html" class="sub-menu-item">Explore</a></li>
                                        <li><a href="nft-auction.html" class="sub-menu-item">Auction</a></li>
                                        <li><a href="nft-collection.html" class="sub-menu-item">Collections</a></li>
                                        <li><a href="nft-creators.html" class="sub-menu-item">Creators</a></li>
                                        <li><a href="nft-wallet.html" class="sub-menu-item">Wallet</a></li>
                                        <li><a href="nft-create-item.html" class="sub-menu-item">Create NFT</a></li>
                                        <li><a href="nft-detail.html" class="sub-menu-item">Single NFT</a></li>
                                    </ul>
                                </li>
                                <li><a href="food-recipe.html" class="sub-menu-item">Food Recipe </a></li>
                                <li class="has-submenu parent-menu-item"><a href="javascript:void(0)"> Photography </a><span class="submenu-arrow"></span>
                                    <ul class="submenu">
                                        <li><a href="photography-about.html" class="sub-menu-item">About Us</a></li>
                                        <li><a href="photography-portfolio.html" class="sub-menu-item">Portfolio</a></li>
                                    </ul>
                                </li>
                                <li class="has-submenu parent-menu-item"><a href="javascript:void(0)"> Job / Careers </a><span class="submenu-arrow"></span>
                                    <ul class="submenu">
                                        <li><a href="page-job-grid.html" class="sub-menu-item">All Jobs</a></li>
                                        <li><a href="page-job-detail.html" class="sub-menu-item">Job Detail</a></li>
                                        <li><a href="page-job-apply.html" class="sub-menu-item">Job Apply</a></li>
                                        <li><a href="page-job-candidates.html" class="sub-menu-item">Job Candidates</a></li>
                                        <li><a href="page-job-candidate-detail.html" class="sub-menu-item">Candidate Detail</a></li>
                                        <li><a href="page-job-companies.html" class="sub-menu-item">All Companies</a></li>
                                        <li><a href="page-job-company-detail.html" class="sub-menu-item">Company Detail</a></li>
                                    </ul>
                                </li>
                                <li class="has-submenu parent-menu-item"><a href="javascript:void(0)"> Forums </a><span class="submenu-arrow"></span>
                                    <ul class="submenu">
                                        <li><a href="forums-topic.html" class="sub-menu-item">Forum Topic</a></li>
                                        <li><a href="forums-comments.html" class="sub-menu-item">Forum Comments</a></li>
                                    </ul>
                                </li>
                                <li class="has-submenu parent-menu-item"><a href="javascript:void(0)"> Helpcenter </a><span class="submenu-arrow"></span>
                                    <ul class="submenu">
                                        <li><a href="helpcenter.html" class="sub-menu-item">Overview</a></li>
                                        <li><a href="helpcenter-faqs.html" class="sub-menu-item">FAQs</a></li>
                                        <li><a href="helpcenter-guides.html" class="sub-menu-item">Guides</a></li>
                                        <li><a href="helpcenter-support.html" class="sub-menu-item">Support</a></li>
                                    </ul>
                                </li>
                                <li class="has-submenu parent-menu-item"><a href="javascript:void(0)"> Blog </a><span class="submenu-arrow"></span>
                                    <ul class="submenu">
                                        <li><a href="blog.html" class="sub-menu-item">Blogs</a></li>
                                        <li><a href="blog-sidebar.html" class="sub-menu-item">Blogs & Sidebar</a></li>
                                        <li><a href="blog-detail.html" class="sub-menu-item">Blog Detail</a></li>
                                        <li class="has-submenu child-menu-item"><a href="javascript:void(0)"> Blog Posts </a><span class="submenu-arrow"></span>
                                            <ul class="submenu">
                                                <li><a href="blog-standard-post.html" class="sub-menu-item">Standard Post</a></li>
                                                <li><a href="blog-slider-post.html" class="sub-menu-item">Slider Post</a></li>
                                                <li><a href="blog-gallery-post.html" class="sub-menu-item">Gallery Post</a></li>
                                                <li><a href="blog-youtube-post.html" class="sub-menu-item">Youtube Post</a></li>
                                                <li><a href="blog-vimeo-post.html" class="sub-menu-item">Vimeo Post</a></li>
                                                <li><a href="blog-audio-post.html" class="sub-menu-item">Audio Post</a></li>
                                                <li><a href="blog-blockquote-post.html" class="sub-menu-item">Blockquote</a></li>
                                                <li><a href="blog-left-sidebar-post.html" class="sub-menu-item">Left Sidebar</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li class="has-submenu parent-menu-item"><a href="javascript:void(0)"> Email Template</a><span class="submenu-arrow"></span>
                                    <ul class="submenu">
                                        <li><a href="email-confirmation.html" class="sub-menu-item">Confirmation</a></li>
                                        <li><a href="email-password-reset.html" class="sub-menu-item">Reset Password</a></li>
                                        <li><a href="email-alert.html" class="sub-menu-item">Alert</a></li>
                                        <li><a href="email-invoice.html" class="sub-menu-item">Invoice</a></li>
                                    </ul>
                                </li>
                                <li class="has-submenu parent-menu-item"><a href="javascript:void(0)"> Auth Pages </a><span class="submenu-arrow"></span>
                                    <ul class="submenu">
                                        <li><a href="auth-login.html" class="sub-menu-item">Login</a></li>
                                        <li><a href="auth-signup.html" class="sub-menu-item">Signup</a></li>
                                        <li><a href="auth-re-password.html" class="sub-menu-item">Reset Password</a></li>
                                        <li><a href="auth-lock-screen.html" class="sub-menu-item">Lock Screen</a></li>
                                    </ul>
                                </li>
                                <li class="has-submenu parent-menu-item"><a href="javascript:void(0)"> Utility </a><span class="submenu-arrow"></span>
                                    <ul class="submenu">
                                        <li><a href="page-terms.html" class="sub-menu-item">Terms of Services</a></li>
                                        <li><a href="page-privacy.html" class="sub-menu-item">Privacy Policy</a></li>
                                    </ul>
                                </li>
                                <li class="has-submenu parent-menu-item"><a href="javascript:void(0)"> Special</a><span class="submenu-arrow"></span>
                                    <ul class="submenu">
                                        <li><a href="page-comingsoon.html" class="sub-menu-item">Coming Soon</a></li>
                                        <li><a href="page-maintenance.html" class="sub-menu-item">Maintenance</a></li>
                                        <li><a href="page-error.html" class="sub-menu-item">Error</a></li>
                                        <li><a href="page-thankyou.html" class="sub-menu-item">Thank you</a></li>
                                    </ul>
                                </li>
                                <li class="has-submenu parent-menu-item"><a href="javascript:void(0)"> Contact </a><span class="submenu-arrow"></span>
                                    <ul class="submenu">
                                        <li><a href="contact-detail.html" class="sub-menu-item">Contact Detail</a></li>
                                        <li><a href="contact-one.html" class="sub-menu-item">Contact One</a></li>
                                        <li><a href="contact-two.html" class="sub-menu-item">Contact Two</a></li>
                                    </ul>
                                </li>
                                <li class="has-submenu parent-menu-item"><a href="javascript:void(0)"> Multi Level Menu</a><span class="submenu-arrow"></span>
                                    <ul class="submenu">
                                        <li><a href="javascript:void(0)" class="sub-menu-item">Level 1.0</a></li>
                                        <li class="has-submenu child-menu-item"><a href="javascript:void(0)"> Level 2.0 </a><span class="submenu-arrow"></span>
                                            <ul class="submenu">
                                                <li><a href="javascript:void(0)" class="sub-menu-item">Level 2.1</a></li>
                                                <li><a href="javascript:void(0)" class="sub-menu-item">Level 2.2</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>

                        <li class="has-submenu parent-parent-menu-item">
                            <a href="javascript:void(0)">Portfolio</a><span class="menu-arrow"></span>
                            <ul class="submenu megamenu">
                                <li>
                                    <ul>
                                        <li class="megamenu-head">Modern Portfolio</li>
                                        <li><a href="portfolio-modern-two.html" class="sub-menu-item">Two Column</a></li>
                                        <li><a href="portfolio-modern-three.html" class="sub-menu-item">Three Column</a></li>
                                        <li><a href="portfolio-modern-four.html" class="sub-menu-item">Four Column</a></li>
                                        <li><a href="portfolio-modern-five.html" class="sub-menu-item">Five Column</a></li>
                                        <li><a href="portfolio-modern-six.html" class="sub-menu-item">Six Column</a></li>
                                    </ul>
                                </li>

                                <li>
                                    <ul>
                                        <li class="megamenu-head">Classic Portfolio</li>
                                        <li><a href="portfolio-classic-two.html" class="sub-menu-item">Two Column</a></li>
                                        <li><a href="portfolio-classic-three.html" class="sub-menu-item">Three Column</a></li>
                                        <li><a href="portfolio-classic-four.html" class="sub-menu-item">Four Column</a></li>
                                        <li><a href="portfolio-classic-five.html" class="sub-menu-item">Five Column</a></li>
                                        <li><a href="portfolio-classic-six.html" class="sub-menu-item">Six Column</a></li>
                                    </ul>
                                </li>

                                <li>
                                    <ul>
                                        <li class="megamenu-head">Creative Portfolio</li>
                                        <li><a href="portfolio-creative-two.html" class="sub-menu-item">Two Column</a></li>
                                        <li><a href="portfolio-creative-three.html" class="sub-menu-item">Three Column</a></li>
                                        <li><a href="portfolio-creative-four.html" class="sub-menu-item">Four Column</a></li>
                                        <li><a href="portfolio-creative-five.html" class="sub-menu-item">Five Column</a></li>
                                        <li><a href="portfolio-creative-six.html" class="sub-menu-item">Six Column</a></li>
                                    </ul>
                                </li>

                                <li>
                                    <ul>
                                        <li class="megamenu-head">Masonry Portfolio</li>
                                        <li><a href="portfolio-masonry-two.html" class="sub-menu-item">Two Column</a></li>
                                        <li><a href="portfolio-masonry-three.html" class="sub-menu-item">Three Column</a></li>
                                        <li><a href="portfolio-masonry-four.html" class="sub-menu-item">Four Column</a></li>
                                        <li><a href="portfolio-masonry-five.html" class="sub-menu-item">Five Column</a></li>
                                        <li><a href="portfolio-masonry-six.html" class="sub-menu-item">Six Column</a></li>
                                    </ul>
                                </li>

                                <li>
                                    <ul>
                                        <li class="megamenu-head">Portfolio Detail</li>
                                        <li><a href="portfolio-detail-one.html" class="sub-menu-item">Portfolio One</a></li>
                                        <li><a href="portfolio-detail-two.html" class="sub-menu-item">Portfolio Two</a></li>
                                        <li><a href="portfolio-detail-three.html" class="sub-menu-item">Portfolio Three</a></li>
                                        <li><a href="portfolio-detail-four.html" class="sub-menu-item">Portfolio Four</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>

                        <li class="has-submenu parent-menu-item">
                            <a href="javascript:void(0)">Docs</a><span class="menu-arrow"></span>
                            <ul class="submenu">
                                <li><a href="documentation.html" class="sub-menu-item">Documentation</a></li>
                                <li><a href="changelog.html" class="sub-menu-item">Changelog</a></li>
                                <li><a href="widget.html" class="sub-menu-item">Widget</a></li>
                            </ul>
                        </li> --}}

                        <li><a
                                href="/donate"
                                class="sub-menu-item"
                            >Donate</a></li>


                    </ul>
                    <!--end navigation menu-->

                </div>
                <!--end navigation-->
            </div>
            <!--end container-->
        </nav>
        <!--end header-->
        <!-- End Navbar -->




        {{ $slot }}


        <!-- Footer Start -->
        <footer class="footer bg-dark-footer relative text-gray-200 dark:text-gray-200">
            <div class="container">
                <div class="grid grid-cols-12">
                    <div class="col-span-12">
                        <div class="py-[60px] px-0">
                            <div class="grid md:grid-cols-12 grid-cols-1 gap-[30px]">
                                <div class="lg:col-span-4 md:col-span-12">
                                    <a
                                        href="#"
                                        class="text-[22px] focus:outline-none"
                                    >
                                        <img
                                            src="assets/img/logo/light.png"
                                            alt=""
                                        >
                                    </a>
                                    <p class="mt-6 text-gray-300">At Help Now, we are dedicated to making a positive
                                        impact in the lives of those in need. Our mission is to empower individuals,
                                        families, and communities, and create lasting change. Through our comprehensive
                                        programs and initiatives, we strive to address pressing social issues, provide
                                        essential resources, and promote equality and justice..</p>
                                    <ul class="list-none mt-6">
                                        <li class="inline"><a
                                                href="/"
                                                class="btn btn-icon btn-sm border border-gray-800 rounded-md hover:border-indigo-600 dark:hover:border-indigo-600 hover:bg-indigo-600 dark:hover:bg-indigo-600"
                                            ><i
                                                    class="uil uil-shopping-cart align-middle"
                                                    title="Buy Now"
                                                ></i></a></li>
                                        <li class="inline"><a
                                                href="/"
                                                class="btn btn-icon btn-sm border border-gray-800 rounded-md hover:border-indigo-600 dark:hover:border-indigo-600 hover:bg-indigo-600 dark:hover:bg-indigo-600"
                                            ><i
                                                    class="uil uil-dribbble align-middle"
                                                    title="dribbble"
                                                ></i></a></li>
                                        <li class="inline"><a
                                                href="/"
                                                class="btn btn-icon btn-sm border border-gray-800 rounded-md hover:border-indigo-600 dark:hover:border-indigo-600 hover:bg-indigo-600 dark:hover:bg-indigo-600"
                                            ><i
                                                    class="uil uil-behance"
                                                    title="Behance"
                                                ></i></a></li>
                                        <li class="inline"><a
                                                href="/"
                                                class="btn btn-icon btn-sm border border-gray-800 rounded-md hover:border-indigo-600 dark:hover:border-indigo-600 hover:bg-indigo-600 dark:hover:bg-indigo-600"
                                            ><i
                                                    class="uil uil-linkedin"
                                                    title="Linkedin"
                                                ></i></a></li>
                                        <li class="inline"><a
                                                href="/"
                                                class="btn btn-icon btn-sm border border-gray-800 rounded-md hover:border-indigo-600 dark:hover:border-indigo-600 hover:bg-indigo-600 dark:hover:bg-indigo-600"
                                            ><i
                                                    class="uil uil-facebook-f align-middle"
                                                    title="facebook"
                                                ></i></a></li>
                                        <li class="inline"><a
                                                href="/"
                                                class="btn btn-icon btn-sm border border-gray-800 rounded-md hover:border-indigo-600 dark:hover:border-indigo-600 hover:bg-indigo-600 dark:hover:bg-indigo-600"
                                            ><i
                                                    class="uil uil-instagram align-middle"
                                                    title="instagram"
                                                ></i></a></li>
                                        <li class="inline"><a
                                                href="/"
                                                class="btn btn-icon btn-sm border border-gray-800 rounded-md hover:border-indigo-600 dark:hover:border-indigo-600 hover:bg-indigo-600 dark:hover:bg-indigo-600"
                                            ><i
                                                    class="uil uil-twitter align-middle"
                                                    title="twitter"
                                                ></i></a></li>

                                    </ul>
                                    <!--end icon-->
                                </div>
                                <!--end col-->

                                <div class="lg:col-span-2 md:col-span-4">
                                    <h5 class="tracking-[1px] text-gray-100 font-semibold">Company</h5>
                                    <ul class="list-none footer-list mt-6">
                                        <li><a
                                                href="/about-us"
                                                class="text-gray-300 hover:text-gray-400 duration-500 ease-in-out"
                                            ><i class="uil uil-angle-right-b"></i> About us</a></li>
                                        <li class="mt-[10px]"><a
                                                href="/"
                                                class="text-gray-300 hover:text-gray-400 duration-500 ease-in-out"
                                            ><i class="uil uil-angle-right-b"></i> Services</a></li>
                                        <li class="mt-[10px]"><a
                                                href="/"
                                                class="text-gray-300 hover:text-gray-400 duration-500 ease-in-out"
                                            ><i class="uil uil-angle-right-b"></i> Team</a></li>
                                        <li class="mt-[10px]"><a
                                                href="/"
                                                class="text-gray-300 hover:text-gray-400 duration-500 ease-in-out"
                                            ><i class="uil uil-angle-right-b"></i> Pricing</a></li>
                                        <li class="mt-[10px]"><a
                                                href="/"
                                                class="text-gray-300 hover:text-gray-400 duration-500 ease-in-out"
                                            ><i class="uil uil-angle-right-b"></i> Project</a></li>
                                        <li class="mt-[10px]"><a
                                                href="/donate"
                                                class="text-gray-300 hover:text-gray-400 duration-500 ease-in-out"
                                            ><i class="uil uil-angle-right-b"></i> Donate</a></li>

                                    </ul>
                                </div>
                                <!--end col-->

                                <div class="lg:col-span-3 md:col-span-4">
                                    <h5 class="tracking-[1px] text-gray-100 font-semibold">Join Our Cause:</h5>
                                    <p class="mt-6">You can make a difference by joining our cause and supporting our
                                        work. Whether through volunteering, donating, or spreading awareness, together
                                        we can create a better world.</p>
                                    <a
                                        href="/volunteer"
                                        class="btn btn-primary mt-4"
                                    >Join Now</a>
                                </div>
                                <!--end col-->
                            </div>
                            <!--end grid-->
                        </div>
                        <!--end col-->
                    </div>
                </div>
                <!--end grid-->
            </div>
            <!--end container-->

            <div class="py-[30px] px-0 border-t border-slate-800">
                <div class="container text-center">
                    <div class="grid md:grid-cols-2 items-center">
                        <div class="ltr:md:text-left rtl:md:text-right text-center">
                            <p class="mb-0">© <script>
                                    document.write(new Date().getFullYear())
                                </script> Help Now.</p>
                        </div>

                        <ul class="list-none ltr:md:text-right rtl:md:text-left text-center mt-6 md:mt-0">
                            <li class="inline"><a href="#"><img
                                        src="assets/img/payments/american-ex.png"
                                        class="max-h-6 inline"
                                        title="American Express"
                                        alt=""
                                    ></a></li>
                            <li class="inline"><a href="#"><img
                                        src="assets/img/payments/discover.png"
                                        class="max-h-6 inline"
                                        title="Discover"
                                        alt=""
                                    ></a></li>
                            <li class="inline"><a href="#"><img
                                        src="assets/img/payments/master-card.png"
                                        class="max-h-6 inline"
                                        title="Master Card"
                                        alt=""
                                    ></a></li>
                            <li class="inline"><a href="#"><img
                                        src="assets/img/payments/paypal.png"
                                        class="max-h-6 inline"
                                        title="Paypal"
                                        alt=""
                                    ></a></li>
                            <li class="inline"><a href="#"><img
                                        src="assets/img/payments/visa.png"
                                        class="max-h-6 inline"
                                        title="Visa"
                                        alt=""
                                    ></a></li>
                        </ul>
                    </div>
                    <!--end grid-->
                </div>
                <!--end container-->
            </div>
        </footer>
        <!--end footer-->
        <!-- Footer End -->




        <!-- LTR & RTL Mode Code -->

        {{-- tidio live chat --}}

        <!-- Smartsupp Live Chat script -->
        <script type="text/javascript">
            var _smartsupp = _smartsupp || {};
    _smartsupp.key = '76f2030681f5fd391ca79f6a748e4450058849ef';
    window.smartsupp||(function(d) {
      var s,c,o=smartsupp=function(){ o._.push(arguments)};o._=[];
      s=d.getElementsByTagName('script')[0];c=d.createElement('script');
      c.type='text/javascript';c.charset='utf-8';c.async=true;
      c.src='https://www.smartsuppchat.com/loader.js?';s.parentNode.insertBefore(c,s);
    })(document);
        </script>
        <noscript> Powered by <a
                href=“https://www.smartsupp.com”
                target=“_blank”
            >Smartsupp</a></noscript>

        <script
            src="//code.tidio.co/vfqh1kmcskmzs9o3mmlqiw1ypprflybn.js"
            async
        ></script>

        <!-- JAVASCRIPTS -->
        <script src="assets/libs/jarallax/jarallax.min.js"></script>
        <script src="assets/libs/shufflejs/shuffle.min.js"></script>
        <script src="assets/libs/tobii/js/tobii.min.js"></script>
        <script src="assets/libs/tiny-slider/min/tiny-slider.js"></script>
        <script src="assets/libs/feather-icons/feather.min.js"></script>
        <script src="assets/js/plugins.init.js"></script>
        <script src="assets/js/app.js"></script>

    </body>

    <!-- Mirrored from shreethemes.in/techwind/layouts/index-charity.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 02 May 2023 16:46:07 GMT -->

</html>
