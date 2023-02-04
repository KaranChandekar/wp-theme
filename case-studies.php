<?php
/**
/* Template Name: Case-Studies
 * 
 * Display only Case-Studies template
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
    <header class="container pt-40 overflow-x-hidden">
        <div class="md:w-[80%]">
            <h2 data-aos="fade-right" data-aos-duration="1000" class="mb-4 text-indigo-500">CASE STUDY</h2>
            <h1 data-aos="fade-left" data-aos-delay="400" data-aos-duration="1000"
                class="mb-6 text-5xl lg:text-7xl md:mb-10">An edtech SEO strategy walk through!</h1>
            <p data-aos="fade-left" data-aos-delay="500" data-aos-duration="1000" class="mb-10 text-lg lg:text-2xl">To
                capture organic traffic of student's and parent's seeking career
                counseling in India, client needs
                efficient SEO operations and data-driven decision-making. That's where Young Nomads comes in.</p>
            <button data-aos="fade-left" data-aos-delay="600" data-aos-duration="1000" class="primary-button">
                <a class="font-bold" href="#">Get Started</a></button>
        </div>
    </header>

    <div data-aos="fade-up" data-aos-delay="700" data-aos-duration="1000" class="container">
        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/case-studies/growth.svg" alt="">
    </div>

    <!-- Challenge Section -->

    <div class="container items-center justify-between space-y-10 overflow-x-hidden lg:space-y-0 lg:space-x-24 lg:flex">
        <div data-aos="fade-left" data-aos-delay="500" data-aos-duration="1000">
            <h2 class="text-2xl mb-7 sm:text-4xl md:text-5xl lg:text-6x">The Challenge</h2>
            <p class="mb-4 sm:text-lg">Our client is in the Edtech business selling innovative online courses
                for teens in India.</p>
            <p class="mb-4 sm:text-lg">They were doing good offline, paid ads but wanted to scale their online
                organic presence through SEO and lead
                generation.</p>
            <p class="mb-4 sm:text-lg">Just to remind you there are many Edtech players in India focused on
                SEO like Byjus, Vedantu, Aakash, and many more.</p>
        </div>
        <img data-aos="fade-left" data-aos-delay="1000" data-aos-duration="1000" class="rounded-xl lg:w-1/2"
            src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/case-studies/challenge.gif" alt="Marketing">
    </div>

    <div class="container overflow-x-hidden text-center">
        <h2 data-aos="fade-up" data-aos-duration="500"
            class="mb-10 text-2xl md:mb-20 sm:text-4xl lg:text-5xl max-w-[650px] mx-auto">Google
            Search
            Console
            snapshot for SEO
            enthusiasts.</h2>
        <div data-aos="fade-up" data-aos-duration="1000"
            class="p-4 bg-no-repeat bg-cover rounded-lg md:p-14 bg-card-img">
            <img class="w-full rounded-xl md:w-[80%] lg:w-[60%] mx-auto" src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/case-studies/gsconsole.gif"
                alt="Marketing">
        </div>
    </div>

    <!-- EAT Section -->
    <div class="container">
        <div class="lg:w-10/12 md:py-6">
            <h2 class="text-2xl mb-7 sm:text-4xl md:text-5xl lg:text-6xl">Establishing E-A-T (Expertise-Authority-Trust)
            </h2>
            <p class="mb-8 md:text-lg lg:text-xl">The branding elements were fantastic in terms of the look and feel of
                the website. However, establishing
                oneself as an
                expert in the field was a top priority.</p>
            <p class="mb-8 md:text-lg lg:text-xl">Signaling on various fronts to Google to generate trust and authority
                over a topic was the goal; here is how we did it.</p>
            <div class="relative flex pb-12">
                <div class="absolute inset-0 flex items-center justify-center w-10 h-full">
                    <div class="w-1 h-full bg-gray-200 pointer-events-none"></div>
                </div>
                <div
                    class="relative z-10 inline-flex items-center justify-center flex-shrink-0 w-10 h-10 text-white bg-indigo-500 rounded-full">
                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                        stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                        <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path>
                    </svg>
                </div>
                <div class="flex-grow pl-4">
                    <h3 class="mb-1 text-sm font-medium tracking-wider text-indigo-500 title-font">STEP 1 - Content
                        Strategy</h3>
                    <h2 class="mb-6 text-2xl sm:text-4xl">Keyword Research</h2>
                    <p class="mb-8 md:text-lg lg:text-xl">Using SEMrush, we performed keyword research thoroughly.</p>
                    <p class="mb-8 md:text-lg lg:text-xl">Different variations were taken into account, and the topic
                        map was
                        created. Competitor analysis was done to understand
                        how we can crack the space and create value for the client's prospects.</p>
                    <p class="mb-8 md:text-lg lg:text-xl">Content for the full marketing funnel was planned in this
                        stage.</p>
                    <img class="object-contain mt-12 mb-8 rounded-lg w-full md:w-[80%] lg:w-[60%]"
                        src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/case-studies/eat.png" alt="step">
                </div>
            </div>
            <div class="relative flex pb-12">
                <div class="absolute inset-0 flex items-center justify-center w-10 h-full">
                    <div class="w-1 h-full bg-gray-200 pointer-events-none"></div>
                </div>
                <div
                    class="relative z-10 inline-flex items-center justify-center flex-shrink-0 w-10 h-10 text-white bg-indigo-500 rounded-full">
                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                        stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                        <path d="M22 12h-4l-3 9L9 3l-3 9H2"></path>
                    </svg>
                </div>
                <div class="flex-grow pl-4">
                    <h3 class="mb-1 text-sm font-medium tracking-wider text-indigo-500 title-font">STEP 2</h3>
                    <h2 class="mb-6 text-2xl sm:text-4xl">Technical Auditing</h2>
                    <p class="mb-8 md:text-lg lg:text-xl">Using SEMrush and Screaming Frog, various issues were
                        identified like</p>
                    <p class="mb-8 md:text-lg lg:text-xl">More issues were detected, and all these were taken up with
                        the clients and resolved within the first 45 days. It
                        created a solid base to publish articles and handle higher traffic.</p>
                </div>
            </div>
            <div class="relative flex pb-12">
                <div class="absolute inset-0 flex items-center justify-center w-10 h-full">
                    <div class="w-1 h-full bg-gray-200 pointer-events-none"></div>
                </div>
                <div
                    class="relative z-10 inline-flex items-center justify-center flex-shrink-0 w-10 h-10 text-white bg-indigo-500 rounded-full">
                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                        stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                        <circle cx="12" cy="5" r="3"></circle>
                        <path d="M12 22V8M5 12H2a10 10 0 0020 0h-3"></path>
                    </svg>
                </div>
                <div class="flex-grow pl-4">
                    <h3 class="mb-1 text-sm font-medium tracking-wider text-indigo-500 title-font">STEP 3 - Content
                        Strategy</h3>
                    <h2 class="mb-6 text-2xl sm:text-4xl">Setting up an in-house writer's team.</h2>
                    <p class="mb-8 md:text-lg lg:text-xl">A few training sessions were held to teach the client’s
                        in-house writers about the requirement of content is there to
                        rank content.</p>
                    <p class="mb-8 md:text-lg lg:text-xl">Standard operating procedures were set, and an editor was also
                        trained to proofread and edit the content.</p>
                    <p class="mb-8 md:text-lg lg:text-xl">This whole setup is crucial when you, as a company, generate a
                        huge number of articles, maintaining content velocity,
                        which is a part of the SEO strategy.</p>
                    <p class="mb-8 md:text-lg lg:text-xl">We used Frase to optimize the content and provide a brief for
                        each article using the same tool.</p>
                    <p class="mb-8 md:text-lg lg:text-xl">We used Frase to provide article structures created by giving
                        keywords and country to the tool. It makes an article
                        outline containing the number of words expected, articles ranking on Google's SERP, and more.
                    </p>
                    <p class="mb-8 md:text-lg lg:text-xl">It helps content writers a lot when they research the topic.
                    </p>
                    <p class="mb-8 md:text-lg lg:text-xl">Along with the text, the content must be grammatically
                        correct, plagiarism-free, and have visual elements for higher
                        engagement, like images, videos, and gifs.</p>
                    <p class="mb-8 md:text-lg lg:text-xl">I recommend investing in Grammarly, Hemmingway, or Copyscape
                        to check for plagiarism. It will be helpful whether you
                        have an in-house or content agency.</p>
                    <p class="mb-8 md:text-lg lg:text-xl">This requires skilled personnel to pull off on a scale, and
                        you will also need to sensitize the client to make that
                        investment.</p>
                    <p class="mb-8 md:text-lg lg:text-xl">Luckily, this client was ready to make that investment.
                    </p>
                </div>
            </div>
            <div class="relative flex pb-12">
                <div class="absolute inset-0 flex items-center justify-center w-10 h-full">
                    <div class="w-1 h-full bg-gray-200 pointer-events-none"></div>
                </div>
                <div
                    class="relative z-10 inline-flex items-center justify-center flex-shrink-0 w-10 h-10 text-white bg-indigo-500 rounded-full">
                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                        stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                        <path d="M20 21v-2a4 4 0 00-4-4H8a4 4 0 00-4 4v2"></path>
                        <circle cx="12" cy="7" r="4"></circle>
                    </svg>
                </div>
                <div class="flex-grow pl-4">
                    <h3 class="mb-1 text-sm font-medium tracking-wider text-indigo-500 title-font">STEP 4</h3>
                    <h2 class="mb-6 text-2xl sm:text-4xl">On-Page Optimization</h2>
                    <p class="mb-8 md:text-lg lg:text-xl">Once the content is produced and published, we further
                        optimize the right set of keywords in the heading, title, and
                        meta description.</p>
                    <p class="mb-8 md:text-lg lg:text-xl">We used Frase to optimize the content, also. Once the content
                        was ready, we ran the article through the tool, which
                        helped us understand whether we have covered the topic extensively enough to rank the article.
                    </p>
                    <img class="object-contain mt-12 mb-8 rounded-lg w-full md:w-[80%] lg:w-[60%]"
                        src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/case-studies/step4.png" alt="step">
                    <p class="mb-8 md:text-lg lg:text-xl">After this, one more crucial step is internally linking all
                        the articles as when they are getting published and updated.
                    </p>
                </div>
            </div>
            <div class="relative flex">
                <div
                    class="relative z-10 inline-flex items-center justify-center flex-shrink-0 w-10 h-10 text-white bg-indigo-500 rounded-full">
                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                        stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                        <path d="M22 11.08V12a10 10 0 11-5.93-9.14"></path>
                        <path d="M22 4L12 14.01l-3-3"></path>
                    </svg>
                </div>
                <div class="flex-grow pl-4">
                    <h3 class="mb-1 text-sm font-medium tracking-wider text-indigo-500 title-font">FINISH</h3>
                    <h2 class="mb-6 text-2xl sm:text-4xl">Google Instant Indexing API</h2>
                    <p class="mb-8 md:text-lg lg:text-xl">We used the Instant Indexing feature available in RankMath,
                        which submits the URL to Google's indexing API, and it gets
                        picked up by Google in minutes.</p>
                    <img class="object-contain w-full mt-12 mb-8 rounded-lg md:w-[80%] lg:w-[60%]"
                        src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/case-studies/step5.jpeg" alt="step">
                </div>
            </div>
        </div>
    </div>

    <!-- Grow section -->
    <div class="container items-center justify-between space-y-10 lg:space-y-0 lg:space-x-24 lg:flex">
        <div class="text-center lg:text-left">
            <h2 class="mb-6 text-2xl sm:text-4xl" data-aos="fade-up" data-aos-delay="400" data-aos-duration="1000">
                Helping Brands Grow!</h2>
            <p class="mb-4 sm:text-lg" data-aos="fade-up" data-aos-delay="500" data-aos-duration="1000">Ayush has worked
                with various companies from different sector like Software
                Companies, eCommerce, helping brands launch
                new products. Currently, the company is continuing with the same zeal and helping leading Edtech company
                like
                KopyKitab.com.</p>
            <i class="text-2xl fa-brands fa-linkedin" data-aos="fade-up" data-aos-delay="600"
                data-aos-duration="1000"></i>
        </div>
        <img class="rounded-xl lg:w-1/2" src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/bg/grow.png" alt="Marketing" data-aos="fade-up"
            data-aos-delay="700" data-aos-duration="1000">
    </div>

    <!-- Contact Form -->
    <div class="container">
        <div data-aos="fade-up" data-aos-duration="1000"
            class="p-4 border border-gray-700 rounded-lg md:p-14 lg:w-[80%] m-auto bg-[url('<?php echo esc_url( get_template_directory_uri() ); ?>/images/glow/contact-page-contact-form.png')] bg-cover bg-no-repeat">
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

<?php get_footer(); ?>