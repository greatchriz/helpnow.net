<!DOCTYPE html>
<html lang="en" class="light scroll-smooth" dir="ltr">
    
<!-- Mirrored from shreethemes.in/techwind/layouts/index-charity.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 02 May 2023 16:46:01 GMT -->
<head>
        <meta charset="UTF-8" />
        <title>Techwind - Tailwind CSS Multipurpose Landing Page Template</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="Tailwind CSS Saas & Software Landing Page Template" />
        <meta name="keywords" content="agency, application, business, clean, creative, cryptocurrency, it solutions, modern, multipurpose, nft marketplace, portfolio, saas, software, tailwind css" />
        <meta name="author" content="Shreethemes" />
        <meta name="website" content="https://shreethemes.in/" />
        <meta name="email" content="support@shreethemes.in" />
        <meta name="version" content="1.8.0" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <!-- favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.ico" />

        <!-- Css -->
        <link href="assets/libs/tobii/css/tobii.min.css" rel="stylesheet">
        <link href="assets/libs/tiny-slider/tiny-slider.css" rel="stylesheet">
        <!-- Main Css -->
        <link href="assets/libs/%40iconscout/unicons/css/line.css" type="text/css" rel="stylesheet" />
        <link rel="stylesheet" href="assets/css/icons.css" />
        <link rel="stylesheet" href="assets/css/tailwind.css" />

    </head>
    
    <body class="font-nunito text-base text-black dark:text-white dark:bg-slate-900">
        <!-- Loader Start -->
        <!-- <div id="preloader">
            <div id="status">
                <div class="spinner">
                    <div class="double-bounce1"></div>
                    <div class="double-bounce2"></div>
                </div>
            </div>
        </div> -->
        <!-- Loader End -->

        
        <!-- Start Navbar -->
        <nav id="topnav" class="defaultscroll is-sticky">
            <div class="container">
                <!-- Logo container-->
                <a class="logo" href="index.html">
                    <span class="inline-block dark:hidden">
                        <img src="assets/images/logo-dark.png" class="l-dark" height="24" alt="">
                        <img src="assets/images/logo-light.png" class="l-light" height="24" alt="">
                    </span>
                    <img src="assets/images/logo-light.png" height="24" class="hidden dark:inline-block" alt="">
                </a>

                <!-- End Logo container-->
                <div class="menu-extras">
                    <div class="menu-item">
                        <!-- Mobile menu toggle-->
                        <a class="navbar-toggle" id="isToggle" onclick="toggleMenu()">
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
                        <a href="#">
                            <span class="login-btn-primary"><span class="btn btn-icon rounded-full bg-indigo-600/5 hover:bg-indigo-600 border-indigo-600/10 hover:border-indigo-600 text-indigo-600 hover:text-white"><i data-feather="settings" class="h-4 w-4"></i></span></span>
                            <span class="login-btn-light"><span class="btn btn-icon rounded-full bg-gray-50 hover:bg-gray-200 dark:bg-slate-900 dark:hover:bg-gray-700 hover:border-gray-100 dark:border-gray-700 dark:hover:border-gray-700"><i data-feather="settings" class="h-4 w-4"></i></span></span>
                        </a>
                    </li>
            
                    <li class="inline ps-1 mb-0">
                        <a href="https://1.envato.market/techwind" target="_blank">
                            <div class="login-btn-primary"><span class="btn btn-icon rounded-full bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white"><i data-feather="shopping-cart" class="h-4 w-4"></i></span></div>
                            <div class="login-btn-light"><span class="btn btn-icon rounded-full bg-gray-50 hover:bg-gray-200 dark:bg-slate-900 dark:hover:bg-gray-700 hover:border-gray-100 dark:border-gray-700 dark:hover:border-gray-700"><i data-feather="shopping-cart" class="h-4 w-4"></i></span></div>
                        </a>
                    </li>
                </ul>
                <!--Login button End-->

                <div id="navigation">
                    <!-- Navigation Menu-->   
                    <ul class="navigation-menu nav-light">
                        <li><a href="index.html" class="sub-menu-item">Home</a></li>
                
                        <li class="has-submenu parent-parent-menu-item">
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
                        </li>
                
                        <li><a href="contact-one.html" class="sub-menu-item">Contact</a></li>
                    </ul><!--end navigation menu-->
                </div><!--end navigation-->
            </div><!--end container-->
        </nav><!--end header-->
        <!-- End Navbar -->

        <!-- Start Hero -->
        <section class="relative lg:py-44 py-36 bg-[url('../../assets/images/charity/bg.html')] bg-center bg-cover">
            <div class="absolute inset-0 bg-slate-900/50"></div>
            <div class="container relative z-1">
                <div class="grid md:grid-cols-12 grid-cols-1 items-center mt-10 gap-[30px]">
                    <div class="lg:col-span-7 md:col-span-6">
                        <div class="md:me-6">
                            <h4 class="font-bold lg:leading-normal leading-normal text-4xl lg:text-5xl mb-5 text-white">Your Donation Can <br> Change the World</h4>
                            <p class="text-white/75 text-lg max-w-xl">Start working with Techwind that can provide everything you need to generate awareness, drive traffic, connect.</p>
                        
                            <div class="mt-6">
                                <a href="#" class="btn bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white rounded-md">Donate Now</a>
                            </div>
                        </div>
                    </div><!--end col-->

                    <div class="lg:col-span-5 md:col-span-6">
                        <div class="p-6 rounded-lg border-t-8 border-indigo-600 bg-white dark:bg-slate-900 shadow-lg dark:shadow-gray-800">
                            <div class="mb-6 text-center">
                                <h4 class="font-bold lg:leading-normal leading-normal text-3xl mb-3">Make a Donation</h4>
                                <p class="text-slate-400">Your $40.00 monthly donation can give 12 people clean water every year. 100% funds water projects.</p>
                            </div>

                            <form>
                                <div class="grid grid-cols-1">
                                    <div>
                                        <div class="grid md:grid-cols-2 gap-5">
                                            <div class="mb-5">
                                                <label class="form-label font-medium">Your Name : <span class="text-red-600">*</span></label>
                                                <input type="text" class="form-input mt-2" placeholder="Name" name="name" required="">
                                            </div>
        
                                            <div class="mb-5">
                                                <label class="form-label font-medium">Your Email : <span class="text-red-600">*</span></label>
                                                <input type="email" class="form-input mt-2" placeholder="Email" name="email" required="">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="mb-5">
                                        <label class="form-label font-medium">I Want to Donate for</label>
                                        <select class="form-select form-input mt-2">
                                            <option value="Donate For Food">Donate For Food</option>
                                            <option value="Food For Orphan">Food For Orphan</option>
                                            <option value="Home For Homeless">Home For Homeless</option>
                                            <option value="Holyday Gifts In Kind">Holyday Gifts In Kind</option>
                                            <option value="For clean Water in Africa">For clean Water in Africa</option>
                                            <option value="Health and Rights">Health and Rights</option>
                                        </select>
                                    </div>

                                    <div class="mb-5">
                                        <label class="form-label small fw-bold">How much do you want to donate ?</label>
                                        <div class="relative mt-2">
                                            <span class="absolute top-0.5 lstart-0.5 w-9 h-9 text-xl bg-gray-200 dark:bg-slate-700 inline-flex justify-center items-center text-dark dark:text-white rounded" id="basic-addon1"><i class="uil uil-usd-circle"></i></span>
                                            <input type="number" class="form-input ps-12" min="1" max="1000" placeholder="Enter Amount" id="amount" aria-describedby="inputGroupPrepend" required>
                                        </div>
                                    </div><!--end col--> 

                                    <div class="mb-5">
                                        <div class="flex items-center w-full mb-0">
                                            <input class="form-checkbox text-indigo-600 rounded w-4 h-4 me-2 border border-inherit" type="checkbox" value="" id="AcceptT&C">
                                            <label class="form-check-label text-slate-400" for="AcceptT&C">I Accept <a href="#" class="text-indigo-600">Terms And Condition</a></label>
                                        </div>
                                    </div>

                                    <div class="mb-5">
                                        <input type="submit" class="btn bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white rounded-md w-full" value="Donate Now">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
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
                            <h3 class="mb-4 text-lg leading-normal font-semibold">Our programs contribute to peace and development through volunteerism worldwide. Take part in changing the lives of young people across the world.</h3>

                            <p class="text-slate-400 max-w-xl mb-6">We’re focused on providing affordable volunteer travel experiences that are responsible. Our programs heighten global awareness and cultural understanding through the skills and expertise taken by volunteers to their host communities, and through the experiences and lessons that volunteers take back to their own countries and cultures.</p>

                            <a href="#" class="btn bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white rounded-md">Donate Now</a>
                        </div>
                    </div>
                </div><!--end row-->
            </div><!--end container-->

            <div class="container md:mt-24 mt-16">
                <div class="grid grid-cols-1 pb-8 text-center">
                    <h3 class="mb-4 md:text-3xl md:leading-normal text-2xl leading-normal font-semibold">Our Causes</h3>

                    <p class="text-slate-400 max-w-xl mx-auto">Start working with Techwind that can provide everything you need to generate awareness, drive traffic, connect.</p>
                </div><!--end grid-->

                <div class="grid lg:grid-cols-3 md:grid-cols-2 grid-cols-1 mt-8 gap-[30px]">
                    <div class="group relative rounded hover:-mt-1 shadow hover:shadow-md dark:shadow-gray-800 overflow-hidden transition-all duration-300">
                        <div class="relative overflow-hidden">
                            <img src="assets/images/charity/cause01.jpg" alt="">

                            <div class="absolute p-4 start-0 end-0 text-center bg-slate-900/80 -bottom-24 group-hover:bottom-0 transition-all duration-300">
                                <a href="#" class="btn btn-sm bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white rounded-md">Donate Now</a>
                            </div>
                        </div>
                        
                        <div class="p-6">
                            <a href="#" class="hover:text-indigo-600 text-lg font-semibold">Donate For Food</a>
                            <p class="text-slate-400 mt-2">If you use this site regularly and would like to help keep the site on the Internet</p>

                            <div class="mt-3">
                                <div class="flex justify-between mb-2">
                                    <span class="text-slate-400">Progress</span>
                                    <span class="text-slate-400">45%</span>
                                </div>
                                <div class="w-full bg-gray-100 dark:bg-gray-800 rounded-full h-[6px]">
                                    <div class="bg-indigo-600 h-[6px] rounded-full" style="width: 45%"></div>
                                </div>
                                <ul class="flex list-none justify-between mt-3 mb-2">
                                    <li class="font-semibold">
                                        <span class="text-indigo-600">Raised: </span>
                                        <span>$4500</span>
                                    </li>
                                    <li class="text-indigo-600 font-semibold">
                                        <span>Goal: </span>
                                        <span>$10000</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div><!--end content-->

                    <div class="group relative rounded hover:-mt-1 shadow hover:shadow-md dark:shadow-gray-800 overflow-hidden transition-all duration-300">
                        <div class="relative overflow-hidden">
                            <img src="assets/images/charity/cause02.jpg" alt="">

                            <div class="absolute p-4 start-0 end-0 text-center bg-slate-900/80 -bottom-24 group-hover:bottom-0 transition-all duration-300">
                                <a href="#" class="btn btn-sm bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white rounded-md">Donate Now</a>
                            </div>
                        </div>
                        
                        <div class="p-6">
                            <a href="#" class="hover:text-indigo-600 text-lg font-semibold">Food For Orphan</a>
                            <p class="text-slate-400 mt-2">If you use this site regularly and would like to help keep the site on the Internet</p>

                            <div class="mt-3">
                                <div class="flex justify-between mb-2">
                                    <span class="text-slate-400">Progress</span>
                                    <span class="text-slate-400">45%</span>
                                </div>
                                <div class="w-full bg-gray-100 dark:bg-gray-800 rounded-full h-[6px]">
                                    <div class="bg-indigo-600 h-[6px] rounded-full" style="width: 45%"></div>
                                </div>
                                <ul class="flex list-none justify-between mt-3 mb-2">
                                    <li class="font-semibold">
                                        <span class="text-indigo-600">Raised: </span>
                                        <span>$4500</span>
                                    </li>
                                    <li class="text-indigo-600 font-semibold">
                                        <span>Goal: </span>
                                        <span>$10000</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div><!--end content-->

                    <div class="group relative rounded hover:-mt-1 shadow hover:shadow-md dark:shadow-gray-800 overflow-hidden transition-all duration-300">
                        <div class="relative overflow-hidden">
                            <img src="assets/images/charity/cause03.jpg" alt="">

                            <div class="absolute p-4 start-0 end-0 text-center bg-slate-900/80 -bottom-24 group-hover:bottom-0 transition-all duration-300">
                                <a href="#" class="btn btn-sm bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white rounded-md">Donate Now</a>
                            </div>
                        </div>
                        
                        <div class="p-6">
                            <a href="#" class="hover:text-indigo-600 text-lg font-semibold">Home For Homeless</a>
                            <p class="text-slate-400 mt-2">If you use this site regularly and would like to help keep the site on the Internet</p>

                            <div class="mt-3">
                                <div class="flex justify-between mb-2">
                                    <span class="text-slate-400">Progress</span>
                                    <span class="text-slate-400">45%</span>
                                </div>
                                <div class="w-full bg-gray-100 dark:bg-gray-800 rounded-full h-[6px]">
                                    <div class="bg-indigo-600 h-[6px] rounded-full" style="width: 45%"></div>
                                </div>
                                <ul class="flex list-none justify-between mt-3 mb-2">
                                    <li class="font-semibold">
                                        <span class="text-indigo-600">Raised: </span>
                                        <span>$4500</span>
                                    </li>
                                    <li class="text-indigo-600 font-semibold">
                                        <span>Goal: </span>
                                        <span>$10000</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div><!--end content-->

                    <div class="group relative rounded hover:-mt-1 shadow hover:shadow-md dark:shadow-gray-800 overflow-hidden transition-all duration-300">
                        <div class="relative overflow-hidden">
                            <img src="assets/images/charity/cause04.jpg" alt="">

                            <div class="absolute p-4 start-0 end-0 text-center bg-slate-900/80 -bottom-24 group-hover:bottom-0 transition-all duration-300">
                                <a href="#" class="btn btn-sm bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white rounded-md">Donate Now</a>
                            </div>
                        </div>
                        
                        <div class="p-6">
                            <a href="#" class="hover:text-indigo-600 text-lg font-semibold">Holyday Gifts In Kind</a>
                            <p class="text-slate-400 mt-2">If you use this site regularly and would like to help keep the site on the Internet</p>

                            <div class="mt-3">
                                <div class="flex justify-between mb-2">
                                    <span class="text-slate-400">Progress</span>
                                    <span class="text-slate-400">45%</span>
                                </div>
                                <div class="w-full bg-gray-100 dark:bg-gray-800 rounded-full h-[6px]">
                                    <div class="bg-indigo-600 h-[6px] rounded-full" style="width: 45%"></div>
                                </div>
                                <ul class="flex list-none justify-between mt-3 mb-2">
                                    <li class="font-semibold">
                                        <span class="text-indigo-600">Raised: </span>
                                        <span>$4500</span>
                                    </li>
                                    <li class="text-indigo-600 font-semibold">
                                        <span>Goal: </span>
                                        <span>$10000</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div><!--end content-->

                    <div class="group relative rounded hover:-mt-1 shadow hover:shadow-md dark:shadow-gray-800 overflow-hidden transition-all duration-300">
                        <div class="relative overflow-hidden">
                            <img src="assets/images/charity/cause05.jpg" alt="">

                            <div class="absolute p-4 start-0 end-0 text-center bg-slate-900/80 -bottom-24 group-hover:bottom-0 transition-all duration-300">
                                <a href="#" class="btn btn-sm bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white rounded-md">Donate Now</a>
                            </div>
                        </div>
                        
                        <div class="p-6">
                            <a href="#" class="hover:text-indigo-600 text-lg font-semibold">For clean Water in Africa</a>
                            <p class="text-slate-400 mt-2">If you use this site regularly and would like to help keep the site on the Internet</p>

                            <div class="mt-3">
                                <div class="flex justify-between mb-2">
                                    <span class="text-slate-400">Progress</span>
                                    <span class="text-slate-400">45%</span>
                                </div>
                                <div class="w-full bg-gray-100 dark:bg-gray-800 rounded-full h-[6px]">
                                    <div class="bg-indigo-600 h-[6px] rounded-full" style="width: 45%"></div>
                                </div>
                                <ul class="flex list-none justify-between mt-3 mb-2">
                                    <li class="font-semibold">
                                        <span class="text-indigo-600">Raised: </span>
                                        <span>$4500</span>
                                    </li>
                                    <li class="text-indigo-600 font-semibold">
                                        <span>Goal: </span>
                                        <span>$10000</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div><!--end content-->

                    <div class="group relative rounded hover:-mt-1 shadow hover:shadow-md dark:shadow-gray-800 overflow-hidden transition-all duration-300">
                        <div class="relative overflow-hidden">
                            <img src="assets/images/charity/cause06.jpg" alt="">

                            <div class="absolute p-4 start-0 end-0 text-center bg-slate-900/80 -bottom-24 group-hover:bottom-0 transition-all duration-300">
                                <a href="#" class="btn btn-sm bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white rounded-md">Donate Now</a>
                            </div>
                        </div>
                        
                        <div class="p-6">
                            <a href="#" class="hover:text-indigo-600 text-lg font-semibold">Health and Rights</a>
                            <p class="text-slate-400 mt-2">If you use this site regularly and would like to help keep the site on the Internet</p>

                            <div class="mt-3">
                                <div class="flex justify-between mb-2">
                                    <span class="text-slate-400">Progress</span>
                                    <span class="text-slate-400">45%</span>
                                </div>
                                <div class="w-full bg-gray-100 dark:bg-gray-800 rounded-full h-[6px]">
                                    <div class="bg-indigo-600 h-[6px] rounded-full" style="width: 45%"></div>
                                </div>
                                <ul class="flex list-none justify-between mt-3 mb-2">
                                    <li class="font-semibold">
                                        <span class="text-indigo-600">Raised: </span>
                                        <span>$4500</span>
                                    </li>
                                    <li class="text-indigo-600 font-semibold">
                                        <span>Goal: </span>
                                        <span>$10000</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div><!--end content-->
                </div><!--end grid-->
            </div><!--end container-->
        </section><!--end section-->
        <!-- End -->

        <!-- Start -->
        <section class="py-20 w-full table relative bg-[url('../../assets/images/charity/cta.html')] bg-top bg-no-repeat bg-cover">
            <div class="absolute inset-0 bg-slate-900/70"></div>
            <div class="container relative">
                <div class="grid grid-cols-1 text-center">
                    <h3 class="mb-4 md:text-3xl text-2xl text-white font-medium">Senior Citizen Program</h3>

                    <p class="text-white/80 max-w-xl mx-auto">Start working with Techwind that can provide everything you need to generate awareness, drive traffic, connect.</p>
                
                    <a href="#!" data-type="youtube" data-id="yba7hPeTSjk" class="lightbox h-20 w-20 rounded-full shadow-lg dark:shadow-gray-800 inline-flex items-center justify-center bg-white dark:bg-slate-900 text-indigo-600 mx-auto mt-10">
                        <i class="mdi mdi-play inline-flex items-center justify-center text-2xl"></i>
                    </a>
                </div><!--end grid-->
            </div><!--end container-->
        </section><!--end section-->
        <!-- End -->

        <!-- Start -->
        <section class="relative md:py-24 py-16">
            <div class="container">
                <div class="grid grid-cols-1 pb-8 text-center">
                    <h3 class="mb-6 md:text-3xl text-2xl md:leading-normal leading-normal font-semibold">Meet Our Volunteers</h3>

                    <p class="text-slate-400 max-w-xl mx-auto">Start working with Tailwind CSS that can provide everything you need to generate awareness, drive traffic, connect.</p>
                </div><!--end grid-->

                <div class="grid md:grid-cols-12 grid-cols-1 mt-8 gap-[30px]">
                    <div class="lg:col-span-3 md:col-span-6">
                        <div class="group text-center">
                            <div class="relative inline-block mx-auto h-52 w-52 rounded-full overflow-hidden">
                                <img src="assets/images/client/04.jpg" class="" alt="">
                                <div class="absolute inset-0 bg-gradient-to-b from-transparent to-black h-52 w-52 rounded-full opacity-0 group-hover:opacity-100 transition-all duration-500 ease-in-out"></div>

                                <ul class="list-none absolute start-0 end-0 -bottom-20 group-hover:bottom-5 transition-all duration-500 ease-in-out">
                                    <li class="inline"><a href="#" class="btn btn-icon btn-sm rounded-full border border-indigo-600 bg-indigo-600 hover:border-indigo-600 hover:bg-indigo-600 text-white"><i data-feather="facebook" class="h-4 w-4"></i></a></li>
                                    <li class="inline"><a href="#" class="btn btn-icon btn-sm rounded-full border border-indigo-600 bg-indigo-600 hover:border-indigo-600 hover:bg-indigo-600 text-white"><i data-feather="instagram" class="h-4 w-4"></i></a></li>
                                    <li class="inline"><a href="#" class="btn btn-icon btn-sm rounded-full border border-indigo-600 bg-indigo-600 hover:border-indigo-600 hover:bg-indigo-600 text-white"><i data-feather="linkedin" class="h-4 w-4"></i></a></li>
                                </ul><!--end icon-->
                            </div>

                            <div class="content mt-3">
                                <a href="#" class="text-lg font-semibold hover:text-indigo-600 transition-all duration-500 ease-in-out">Jack John</a>
                                <p class="text-slate-400">Volunteer</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="lg:col-span-3 md:col-span-6">
                        <div class="group text-center">
                            <div class="relative inline-block mx-auto h-52 w-52 rounded-full overflow-hidden">
                                <img src="assets/images/client/05.jpg" class="" alt="">
                                <div class="absolute inset-0 bg-gradient-to-b from-transparent to-black h-52 w-52 rounded-full opacity-0 group-hover:opacity-100 transition-all duration-500 ease-in-out"></div>

                                <ul class="list-none absolute start-0 end-0 -bottom-20 group-hover:bottom-5 transition-all duration-500 ease-in-out">
                                    <li class="inline"><a href="#" class="btn btn-icon btn-sm rounded-full border border-indigo-600 bg-indigo-600 hover:border-indigo-600 hover:bg-indigo-600 text-white"><i data-feather="facebook" class="h-4 w-4"></i></a></li>
                                    <li class="inline"><a href="#" class="btn btn-icon btn-sm rounded-full border border-indigo-600 bg-indigo-600 hover:border-indigo-600 hover:bg-indigo-600 text-white"><i data-feather="instagram" class="h-4 w-4"></i></a></li>
                                    <li class="inline"><a href="#" class="btn btn-icon btn-sm rounded-full border border-indigo-600 bg-indigo-600 hover:border-indigo-600 hover:bg-indigo-600 text-white"><i data-feather="linkedin" class="h-4 w-4"></i></a></li>
                                </ul><!--end icon-->
                            </div>

                            <div class="content mt-3">
                                <a href="#" class="text-lg font-semibold hover:text-indigo-600 transition-all duration-500 ease-in-out">Krista John</a>
                                <p class="text-slate-400">Volunteer</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="lg:col-span-3 md:col-span-6">
                        <div class="group text-center">
                            <div class="relative inline-block mx-auto h-52 w-52 rounded-full overflow-hidden">
                                <img src="assets/images/client/06.jpg" class="" alt="">
                                <div class="absolute inset-0 bg-gradient-to-b from-transparent to-black h-52 w-52 rounded-full opacity-0 group-hover:opacity-100 transition-all duration-500 ease-in-out"></div>

                                <ul class="list-none absolute start-0 end-0 -bottom-20 group-hover:bottom-5 transition-all duration-500 ease-in-out">
                                    <li class="inline"><a href="#" class="btn btn-icon btn-sm rounded-full border border-indigo-600 bg-indigo-600 hover:border-indigo-600 hover:bg-indigo-600 text-white"><i data-feather="facebook" class="h-4 w-4"></i></a></li>
                                    <li class="inline"><a href="#" class="btn btn-icon btn-sm rounded-full border border-indigo-600 bg-indigo-600 hover:border-indigo-600 hover:bg-indigo-600 text-white"><i data-feather="instagram" class="h-4 w-4"></i></a></li>
                                    <li class="inline"><a href="#" class="btn btn-icon btn-sm rounded-full border border-indigo-600 bg-indigo-600 hover:border-indigo-600 hover:bg-indigo-600 text-white"><i data-feather="linkedin" class="h-4 w-4"></i></a></li>
                                </ul><!--end icon-->
                            </div>

                            <div class="content mt-3">
                                <a href="#" class="text-lg font-semibold hover:text-indigo-600 transition-all duration-500 ease-in-out">Roger Jackson</a>
                                <p class="text-slate-400">Volunteer</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="lg:col-span-3 md:col-span-6">
                        <div class="group text-center">
                            <div class="relative inline-block mx-auto h-52 w-52 rounded-full overflow-hidden">
                                <img src="assets/images/client/07.jpg" class="" alt="">
                                <div class="absolute inset-0 bg-gradient-to-b from-transparent to-black h-52 w-52 rounded-full opacity-0 group-hover:opacity-100 transition-all duration-500 ease-in-out"></div>

                                <ul class="list-none absolute start-0 end-0 -bottom-20 group-hover:bottom-5 transition-all duration-500 ease-in-out">
                                    <li class="inline"><a href="#" class="btn btn-icon btn-sm rounded-full border border-indigo-600 bg-indigo-600 hover:border-indigo-600 hover:bg-indigo-600 text-white"><i data-feather="facebook" class="h-4 w-4"></i></a></li>
                                    <li class="inline"><a href="#" class="btn btn-icon btn-sm rounded-full border border-indigo-600 bg-indigo-600 hover:border-indigo-600 hover:bg-indigo-600 text-white"><i data-feather="instagram" class="h-4 w-4"></i></a></li>
                                    <li class="inline"><a href="#" class="btn btn-icon btn-sm rounded-full border border-indigo-600 bg-indigo-600 hover:border-indigo-600 hover:bg-indigo-600 text-white"><i data-feather="linkedin" class="h-4 w-4"></i></a></li>
                                </ul><!--end icon-->
                            </div>

                            <div class="content mt-3">
                                <a href="#" class="text-lg font-semibold hover:text-indigo-600 transition-all duration-500 ease-in-out">Johnny English</a>
                                <p class="text-slate-400">Volunteer</p>
                            </div>
                        </div>
                    </div>
                </div><!--end grid-->
            </div><!--end container-->
            <!-- team -->

            <div class="container md:mt-24 mt-16">
                <div class="grid grid-cols-1 pb-8 text-center">
                    <h3 class="mb-6 md:text-3xl text-2xl md:leading-normal leading-normal font-semibold">Blog Or News</h3>

                    <p class="text-slate-400 max-w-xl mx-auto">Start working with Tailwind CSS that can provide everything you need to generate awareness, drive traffic, connect.</p>
                </div><!--end grid-->

                <div class="grid grid-cols-1 lg:grid-cols-3 md:grid-cols-2 mt-8 gap-[30px]">
                    <div class="blog relative rounded-md shadow dark:shadow-gray-800 overflow-hidden">
                        <img src="assets/images/blog/01.jpg" alt="">

                        <div class="content p-6">
                            <a href="blog-detail.html" class="title h5 text-lg font-medium hover:text-indigo-600 duration-500 ease-in-out">Design your apps in your own way</a>
                            <p class="text-slate-400 mt-3">The phrasal sequence of the is now so that many campaign and benefit</p>
                            
                            <div class="mt-4">
                                <a href="blog-detail.html" class="btn btn-link font-normal hover:text-indigo-600 after:bg-indigo-600 duration-500 ease-in-out">Read More <i class="uil uil-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="blog relative rounded-md shadow dark:shadow-gray-800 overflow-hidden">
                        <img src="assets/images/blog/02.jpg" alt="">

                        <div class="content p-6">
                            <a href="blog-detail.html" class="title h5 text-lg font-medium hover:text-indigo-600 duration-500 ease-in-out">How apps is changing the IT world</a>
                            <p class="text-slate-400 mt-3">The phrasal sequence of the is now so that many campaign and benefit</p>
                            
                            <div class="mt-4">
                                <a href="blog-detail.html" class="btn btn-link font-normal hover:text-indigo-600 after:bg-indigo-600 duration-500 ease-in-out">Read More <i class="uil uil-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="blog relative rounded-md shadow dark:shadow-gray-800 overflow-hidden">
                        <img src="assets/images/blog/03.jpg" alt="">

                        <div class="content p-6">
                            <a href="blog-detail.html" class="title h5 text-lg font-medium hover:text-indigo-600 duration-500 ease-in-out">Smartest Applications for Business</a>
                            <p class="text-slate-400 mt-3">The phrasal sequence of the is now so that many campaign and benefit</p>
                            
                            <div class="mt-4">
                                <a href="blog-detail.html" class="btn btn-link font-normal hover:text-indigo-600 after:bg-indigo-600 duration-500 ease-in-out">Read More <i class="uil uil-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div><!--end grid-->
            </div><!--end container-->
        </section><!--end section-->
        <!-- End -->

        <!-- Footer Start -->
        <footer class="footer bg-dark-footer relative text-gray-200 dark:text-gray-200">    
            <div class="container">
                <div class="grid grid-cols-12">
                    <div class="col-span-12">
                        <div class="py-[60px] px-0">
                            <div class="grid md:grid-cols-12 grid-cols-1 gap-[30px]">
                                <div class="lg:col-span-4 md:col-span-12">
                                    <a href="#" class="text-[22px] focus:outline-none">
                                        <img src="assets/images/logo-light.png" alt="">
                                    </a>
                                    <p class="mt-6 text-gray-300">Start working with Tailwind CSS that can provide everything you need to generate awareness, drive traffic, connect.</p>
                                    <ul class="list-none mt-6">
                                        <li class="inline"><a href="https://1.envato.market/techwind" target="_blank" class="btn btn-icon btn-sm border border-gray-800 rounded-md hover:border-indigo-600 dark:hover:border-indigo-600 hover:bg-indigo-600 dark:hover:bg-indigo-600"><i class="uil uil-shopping-cart align-middle" title="Buy Now"></i></a></li>
                                        <li class="inline"><a href="https://dribbble.com/shreethemes" target="_blank" class="btn btn-icon btn-sm border border-gray-800 rounded-md hover:border-indigo-600 dark:hover:border-indigo-600 hover:bg-indigo-600 dark:hover:bg-indigo-600"><i class="uil uil-dribbble align-middle" title="dribbble"></i></a></li>
                                        <li class="inline"><a href="https://www.behance.net/shreethemes" target="_blank" class="btn btn-icon btn-sm border border-gray-800 rounded-md hover:border-indigo-600 dark:hover:border-indigo-600 hover:bg-indigo-600 dark:hover:bg-indigo-600"><i class="uil uil-behance" title="Behance"></i></a></li>
                                        <li class="inline"><a href="http://linkedin.com/company/shreethemes" target="_blank" class="btn btn-icon btn-sm border border-gray-800 rounded-md hover:border-indigo-600 dark:hover:border-indigo-600 hover:bg-indigo-600 dark:hover:bg-indigo-600"><i class="uil uil-linkedin" title="Linkedin"></i></a></li>
                                        <li class="inline"><a href="https://www.facebook.com/shreethemes" target="_blank" class="btn btn-icon btn-sm border border-gray-800 rounded-md hover:border-indigo-600 dark:hover:border-indigo-600 hover:bg-indigo-600 dark:hover:bg-indigo-600"><i class="uil uil-facebook-f align-middle" title="facebook"></i></a></li>
                                        <li class="inline"><a href="https://www.instagram.com/shreethemes/" target="_blank" class="btn btn-icon btn-sm border border-gray-800 rounded-md hover:border-indigo-600 dark:hover:border-indigo-600 hover:bg-indigo-600 dark:hover:bg-indigo-600"><i class="uil uil-instagram align-middle" title="instagram"></i></a></li>
                                        <li class="inline"><a href="https://twitter.com/shreethemes" target="_blank" class="btn btn-icon btn-sm border border-gray-800 rounded-md hover:border-indigo-600 dark:hover:border-indigo-600 hover:bg-indigo-600 dark:hover:bg-indigo-600"><i class="uil uil-twitter align-middle" title="twitter"></i></a></li>
                                        <li class="inline"><a href="mailto:support@shreethemes.in" class="btn btn-icon btn-sm border border-gray-800 rounded-md hover:border-indigo-600 dark:hover:border-indigo-600 hover:bg-indigo-600 dark:hover:bg-indigo-600"><i class="uil uil-envelope align-middle" title="email"></i></a></li>
                                        <li class="inline"><a href="https://forms.gle/QkTueCikDGqJnbky9" target="_blank" class="btn btn-icon btn-sm border border-gray-800 rounded-md hover:border-indigo-600 dark:hover:border-indigo-600 hover:bg-indigo-600 dark:hover:bg-indigo-600"><i class="uil uil-file align-middle" title="customization"></i></a></li>
                                    </ul><!--end icon-->
                                </div><!--end col-->
                        
                                <div class="lg:col-span-2 md:col-span-4">
                                    <h5 class="tracking-[1px] text-gray-100 font-semibold">Company</h5>
                                    <ul class="list-none footer-list mt-6">
                                        <li><a href="page-aboutus.html" class="text-gray-300 hover:text-gray-400 duration-500 ease-in-out"><i class="uil uil-angle-right-b"></i> About us</a></li>
                                        <li class="mt-[10px]"><a href="page-services.html" class="text-gray-300 hover:text-gray-400 duration-500 ease-in-out"><i class="uil uil-angle-right-b"></i> Services</a></li>
                                        <li class="mt-[10px]"><a href="page-team.html" class="text-gray-300 hover:text-gray-400 duration-500 ease-in-out"><i class="uil uil-angle-right-b"></i> Team</a></li>
                                        <li class="mt-[10px]"><a href="page-pricing.html" class="text-gray-300 hover:text-gray-400 duration-500 ease-in-out"><i class="uil uil-angle-right-b"></i> Pricing</a></li>
                                        <li class="mt-[10px]"><a href="portfolio-creative-four.html" class="text-gray-300 hover:text-gray-400 duration-500 ease-in-out"><i class="uil uil-angle-right-b"></i> Project</a></li>
                                        <li class="mt-[10px]"><a href="blog.html" class="text-gray-300 hover:text-gray-400 duration-500 ease-in-out"><i class="uil uil-angle-right-b"></i> Blog</a></li>
                                        <li class="mt-[10px]"><a href="auth-login.html" class="text-gray-300 hover:text-gray-400 duration-500 ease-in-out"><i class="uil uil-angle-right-b"></i> Login</a></li>
                                    </ul>
                                </div><!--end col-->
                        
                                <div class="lg:col-span-3 md:col-span-4">
                                    <h5 class="tracking-[1px] text-gray-100 font-semibold">Usefull Links</h5>
                                    <ul class="list-none footer-list mt-6">
                                        <li><a href="page-terms.html" class="text-gray-300 hover:text-gray-400 duration-500 ease-in-out"><i class="uil uil-angle-right-b"></i> Terms of Services</a></li>
                                        <li class="mt-[10px]"><a href="page-privacy.html" class="text-gray-300 hover:text-gray-400 duration-500 ease-in-out"><i class="uil uil-angle-right-b"></i> Privacy Policy</a></li>
                                        <li class="mt-[10px]"><a href="documentation.html" class="text-gray-300 hover:text-gray-400 duration-500 ease-in-out"><i class="uil uil-angle-right-b"></i> Documentation</a></li>
                                        <li class="mt-[10px]"><a href="changelog.html" class="text-gray-300 hover:text-gray-400 duration-500 ease-in-out"><i class="uil uil-angle-right-b"></i> Changelog</a></li>
                                        <li class="mt-[10px]"><a href="widget.html" class="text-gray-300 hover:text-gray-400 duration-500 ease-in-out"><i class="uil uil-angle-right-b"></i> Widget</a></li>
                                    </ul>
                                </div><!--end col-->
    
                                <div class="lg:col-span-3 md:col-span-4">
                                    <h5 class="tracking-[1px] text-gray-100 font-semibold">Newsletter</h5>
                                    <p class="mt-6">Sign up and receive the latest tips via email.</p>
                                    <form>
                                        <div class="grid grid-cols-1">
                                            <div class="foot-subscribe my-3">
                                                <label class="form-label">Write your email <span class="text-red-600">*</span></label>
                                                <div class="form-icon relative mt-2">
                                                    <i data-feather="mail" class="w-4 h-4 absolute top-3 start-4"></i>
                                                    <input type="email" class="form-input bg-gray-800 border border-gray-800 text-gray-100 ps-12 focus:shadow-none" placeholder="Email" name="email" required="">
                                                </div>
                                            </div>
                                        
                                            <button type="submit" id="submitsubscribe" name="send" class="btn bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white rounded-md">Subscribe</button>
                                        </div>
                                    </form>
                                </div><!--end col-->
                            </div><!--end grid-->
                        </div><!--end col-->
                    </div>
                </div><!--end grid-->
            </div><!--end container-->

            <div class="py-[30px] px-0 border-t border-slate-800">
                <div class="container text-center">
                    <div class="grid md:grid-cols-2 items-center">
                        <div class="ltr:md:text-left rtl:md:text-right text-center">
                            <p class="mb-0">© <script>document.write(new Date().getFullYear())</script> Techwind. Design with <i class="mdi mdi-heart text-red-600"></i> by <a href="https://shreethemes.in/" target="_blank" class="text-reset">Shreethemes</a>.</p>
                        </div>

                        <ul class="list-none ltr:md:text-right rtl:md:text-left text-center mt-6 md:mt-0">
                            <li class="inline"><a href="#"><img src="assets/images/payments/american-ex.png" class="max-h-6 inline" title="American Express" alt=""></a></li>
                            <li class="inline"><a href="#"><img src="assets/images/payments/discover.png" class="max-h-6 inline" title="Discover" alt=""></a></li>
                            <li class="inline"><a href="#"><img src="assets/images/payments/master-card.png" class="max-h-6 inline" title="Master Card" alt=""></a></li>
                            <li class="inline"><a href="#"><img src="assets/images/payments/paypal.png" class="max-h-6 inline" title="Paypal" alt=""></a></li>
                            <li class="inline"><a href="#"><img src="assets/images/payments/visa.png" class="max-h-6 inline" title="Visa" alt=""></a></li>
                        </ul>
                    </div><!--end grid-->
                </div><!--end container-->
            </div>
        </footer><!--end footer-->
        <!-- Footer End -->

        

        <!-- Back to top -->
        <a href="#" onclick="topFunction()" id="back-to-top" class="back-to-top fixed hidden text-lg rounded-full z-10 bottom-5 end-5 h-9 w-9 text-center bg-indigo-600 text-white leading-9"><i class="uil uil-arrow-up"></i></a>
        <!-- Back to top -->

        <!-- Switcher -->
        <div class="fixed top-[30%] -right-2 z-50">
            <span class="relative inline-block rotate-90">
                <input type="checkbox" class="checkbox opacity-0 absolute" id="chk" />
                <label class="label bg-slate-900 dark:bg-white shadow dark:shadow-gray-800 cursor-pointer rounded-full flex justify-between items-center p-1 w-14 h-8" for="chk">
                    <i class="uil uil-moon text-[20px] text-yellow-500"></i>
                    <i class="uil uil-sun text-[20px] text-yellow-500"></i>
                    <span class="ball bg-white dark:bg-slate-900 rounded-full absolute top-[2px] left-[2px] w-7 h-7"></span>
                </label>
            </span>
        </div>
        <!-- Switcher -->

        <!-- LTR & RTL Mode Code -->
        <div class="fixed top-[40%] -right-3 z-50">
            <a href="#" id="switchRtl">
                <span class="py-1 px-3 relative inline-block rounded-t-md -rotate-90 bg-white dark:bg-slate-900 shadow-md dark:shadow dark:shadow-gray-800 font-bold rtl:block ltr:hidden" >LTR</span>
                <span class="py-1 px-3 relative inline-block rounded-t-md -rotate-90 bg-white dark:bg-slate-900 shadow-md dark:shadow dark:shadow-gray-800 font-bold ltr:block rtl:hidden">RTL</span>
            </a>
        </div>
        <!-- LTR & RTL Mode Code -->

        <!-- JAVASCRIPTS -->
        <script src="assets/libs/tobii/js/tobii.min.js"></script>
        <script src="assets/libs/tiny-slider/min/tiny-slider.js"></script>
        <script src="assets/libs/feather-icons/feather.min.js"></script>
        <script src="assets/js/plugins.init.js"></script>
        <script src="assets/js/app.js"></script>
        <!-- JAVASCRIPTS -->
    </body>

<!-- Mirrored from shreethemes.in/techwind/layouts/index-charity.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 02 May 2023 16:46:07 GMT -->
</html>