<?php
/**
/* Template Name: Contact
 * 
 * Display only Contact template
 * 
 * @package WordPress
 * @subpackage visibility
 * @since visibility 1.0
*/
get_header(); ?>

    <div id="popup-modal" tabindex="-1"
        class="fixed top-0 left-0 right-0 z-50 flex items-center justify-center hidden w-full h-screen p-0 bg-black bg-opacity-50 md:inset-0">
        <div class="container">
            <div data-aos="fade-up" data-aos-duration="1000"
                class="p-4 border border-gray-700 rounded-lg md:p-14 lg:w-[80%] m-auto bg-[#0e1414]">

                <span class="absolute z-20 mx-2 text-3xl cursor-pointer right-2 top-4">
                    <ion-icon id="close-modal" name="close" id="menu-icon""></ion-icon>
                  </span>
                  
            <div class="mb-10 space-y-4 text-center md:text-left">
                        <p class="text-center mt-14 md:text-xl md:mt-0">Get started with a <span class="text-2xl">FREE
                                SEO
                                AUDIT!</span></p>
            </div>
            <form class="flex flex-col md:flex-row md:space-x-10" action="" method="">
                <div class="flex flex-col w-full md:space-y-4">
                    <input
                        class="py-6 bg-transparent border-b border-gray-700 outline-none focus:outline-none md:text-xl"
                        type="text" placeholder="First Name" name="firstname">
                    <input
                        class="py-6 bg-transparent border-b border-gray-700 outline-none focus:outline-none md:text-xl"
                        type="text" placeholder="Last Name" name="lastname">
                    <input
                        class="py-6 bg-transparent border-b border-gray-700 outline-none focus:outline-none md:text-xl"
                        type="email" placeholder="Email" name="email">
                </div>
                <div class="flex flex-col justify-between w-full space-y-4">
                    <input
                        class="py-6 bg-transparent border-b border-gray-700 outline-none focus:outline-none md:text-xl"
                        type="number" placeholder="Phone No." name="phoneno.">
                    <input
                        class="py-6 bg-transparent border-b border-gray-700 outline-none focus:outline-none md:text-xl"
                        type="url" placeholder="Website URL" name="url">
                    <button class="primary-button" type="submit">
                        <a class="font-bold" href="#">Get Report</a></button>
                </div>
            </form>
        </div>
    </div>
    </div>

    <!-- Header -->
    <header
        class="container flex flex-col items-center justify-between pt-40 text-center md:flex-row md:text-left md:space-x-10">
        <div data-aos="fade-down" data-aos-duration="1000" class="mb-10 md:mb-0">
            <h1 class="mb-6 text-5xl lg:text-7xl md:mb-10">Let's talk</h1>
            <p class="mb-10 text-lg lg:text-2xl">Our team is on hand to answer any questions you have. We'd be more than
                happy to help.</p>
        </div>
        <img data-aos="fade-up" data-aos-delay="500" data-aos-duration="1000" class="w-[90%] sm:w-[70%] md:w-2/5"
            src="/images/bg/contact-ring.png" alt="Marketing">
    </header>

    <!-- Contact Form -->
    <div class="container">
        <div data-aos="fade-up" data-aos-duration="1000"
            class="p-4 border border-gray-700 rounded-lg md:p-14 lg:w-[80%] m-auto bg-[url('/images/glow/contact-page-contact-form.png')] bg-cover bg-no-repeat">
            <div class="mb-10 space-y-4 text-center md:text-left">
                <h2 class="text-2xl md:text-5xl">Speak to Us</h2>
                <p class="md:text-xl">Fill out your details below if you want to learn more about our product. We’ll
                    reply ASAP.</p>
            </div>
            <form class="flex flex-col md:flex-row md:space-x-10" action="">
                <div class="flex flex-col w-full md:space-y-4">
                    <input
                        class="py-6 bg-transparent border-b border-gray-700 outline-none focus:outline-none md:text-xl"
                        type="text" placeholder="First Name">
                    <input
                        class="py-6 bg-transparent border-b border-gray-700 outline-none focus:outline-none md:text-xl"
                        type="text" placeholder="Last Name">
                    <input
                        class="py-6 bg-transparent border-b border-gray-700 outline-none focus:outline-none md:text-xl"
                        type="email" placeholder="Email">
                    <input
                        class="py-6 bg-transparent border-b border-gray-700 outline-none focus:outline-none md:text-xl"
                        type="number" placeholder="Phone No.">
                </div>
                <div class="flex flex-col justify-between w-full space-y-4">
                    <textarea
                        class="py-6 bg-transparent border-b border-gray-700 outline-none focus:outline-none md:h-full md:text-xl"
                        name="" id="" placeholder="Message"></textarea>
                    <button class="primary-button">
                        <a class="font-bold" href="#">Send Enquiry</a></button>
                </div>
            </form>
        </div>
    </div>

    <!-- Already a Customer -->
    <div class="container">
        <div data-aos="zoom-in" data-aos-duration="1000" class="m-auto text-center md:w-[40rem] space-y-6">
            <h2 class="text-2xl md:text-5xl">Already a customer? Chat to our support team</h2>
            <p class="text-lg md:text-xl">Or Reach us through our live chat, accessible through the
                documentation/support
                link
                in your environment
            </p>
            <button class="primary-button">
                <a class="font-bold" href="#">Contact Us</a></button>
        </div>
    </div>

    <!-- Book a demo -->
    <div class="container">
        <div data-aos="fade-up" data-aos-duration="1000"
            class="p-4 text-center bg-no-repeat bg-cover rounded-lg md:p-14 bg-card-img">
            <div class="md:w-[30rem] lg:w-[40rem] m-auto space-y-8">
                <h2 class="text-3xl md:text-5xl lg:text-7xl">Want to see more? Book a demo</h2>
                <button class="primary-button">
                    <a class="font-bold" href="#">Book a demo</a></button>
            </div>
        </div>
    </div>

<?php get_footer(); ?>