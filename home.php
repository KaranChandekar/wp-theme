<?php
/**
/* Template Name: Home
 * 
 * Display only Home template
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
              
        <div class=" mb-10 space-y-4 text-center md:text-left">
          <p class="text-center mt-14 md:text-xl md:mt-0">Get started with a <span class="text-2xl">FREE SEO
              AUDIT!</span></p>
    </div>
    <form class="flex flex-col md:flex-row md:space-x-10" action="" method="">
      <div class="flex flex-col w-full md:space-y-4">
        <input class="py-6 bg-transparent border-b border-gray-700 outline-none focus:outline-none md:text-xl"
          type="text" placeholder="First Name" name="firstname">
        <input class="py-6 bg-transparent border-b border-gray-700 outline-none focus:outline-none md:text-xl"
          type="text" placeholder="Last Name" name="lastname">
        <input class="py-6 bg-transparent border-b border-gray-700 outline-none focus:outline-none md:text-xl"
          type="email" placeholder="Email" name="email">
      </div>
      <div class="flex flex-col justify-between w-full space-y-4">
        <input class="py-6 bg-transparent border-b border-gray-700 outline-none focus:outline-none md:text-xl"
          type="number" placeholder="Phone No." name="phoneno.">
        <input class="py-6 bg-transparent border-b border-gray-700 outline-none focus:outline-none md:text-xl"
          type="url" placeholder="Website URL" name="url">
        <button class="primary-button" type="submit">
          <a class="font-bold" href="#">Get Report</a></button>
      </div>
    </form>
  </div>
</div>
</div>

<!-- Header -->
<header class="container flex flex-col items-center justify-between pt-40 text-center md:flex-row">
  <div class="mb-10 space-y-6 md:space-y-10 md:mb-0">
    <h1 data-aos="fade-down" data-aos-duration="1000" class="text-3xl font-semibold md:text-4xl lg:text-6xl">Our
      cutting-edge data-driven SEO strategies will bring
      a
      steady stream of
      organic visitors to
      your website and help you rapidly boost sales.</h1>
    <p class="lg:text-2xl" data-aos="fade-down" data-aos-delay="1000">You will be in good
      company</p>
    <div class="flex items-center justify-center space-x-5" data-aos="fade-down" data-aos-delay="1500">
      <div class="p-4 bg-gray-700 rounded-lg sm:w-[150px]">
        <img class="logo" src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/companies/kopykitab.png" alt="">
      </div>
      <div class="p-4 bg-gray-700 rounded-lg sm:w-[150px]">
        <img class="logo" src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/companies/clever-harvey.webp" alt="">
      </div>
      <div class="p-4 bg-gray-700 rounded-lg sm:w-[150px]">
        <img class="logo" src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/companies/Hyreo-Logo.png" alt="">
      </div>
    </div>
    <div data-aos="fade-down" data-aos-delay="2000">
      <button class="primary-button">
        <a class="font-bold" href="#">Get Started</a></button>
    </div>
  </div>
</header>

<div class="container text-center">
  <h2 class="text-3xl font-semibold md:text-4xl lg:text-5xl lg:m-auto" data-aos="fade-up" dataos-delay="400"
    data-aos-duration="1000">Unleash the power of SEO</h2>
  <div class="py-16 md:px-20">
    <div data-aos="fade-up" data-aos-delay="500"
      class="bg-[url('<?php echo esc_url( get_template_directory_uri() ); ?>/images/glow/card-red-glow.303cd894.svg')] bg-no-repeat bg-cover px-6 lg:px-14 py-16 flex flex-col md:flex-row items-center justify-between text-center md:text-left border border-gray-700 rounded-xl mb-10 w-[320px] md:w-auto mx-auto md:space-x-5 lg:space-x-[8rem]">
      <img class="md:w-[40%]" src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/specs/research.svg" alt="">
      <div class="mt-5 md:mt-0">
        <h3 class="mb-3 text-2xl md:text-3xl lg:text-4xl lg:mb-5">Industry and Competitor
          Research</h3>
        <p class="md:text-lg">Understand the industry, do a
          thorough competitor’s
          research, gather all relevant
          data points.</p>
      </div>
    </div>

    <div data-aos="fade-up" data-aos-delay="600" class="flex flex-col items-center justify-center mb-10 md:flex-row">
      <h3 class="mb-10 mr-0 text-xl font-semibold md:mb-0 md:text-2xl md:mr-10">Know How Our Clients Grew!</h3>
      <button id="close-modal" class="primary-button" type="submit">
        <a class="font-bold" href="/case-studies.html">Know The Outcomes</a></button>
    </div>

    <div data-aos="fade-up" data-aos-delay="600"
      class="bg-[url('<?php echo esc_url( get_template_directory_uri() ); ?>/images/glow/card-mist-glow.6139fbd9.svg')] bg-no-repeat bg-cover px-6 lg:px-14 py-16 flex flex-col md:flex-row items-center justify-between text-center md:text-left border border-gray-700 rounded-xl mb-10 w-[320px] md:w-auto mx-auto md:space-x-5 lg:space-x-[8rem]">
      <img class="md:w-[40%]" src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/specs/strategy.svg" alt="">
      <div class="mt-5 md:mt-0">
        <h3 class="mb-3 text-2xl md:text-3xl lg:text-4xl lg:mb-5">SEO & Content Strategy</h3>
        <p class="md:text-lg">Create a Content Strategy for
          3 or 6 months timeline with
          an expected outcome based
          on data point.</p>
      </div>
    </div>
    <div data-aos="fade-up"
      class="bg-[url('<?php echo esc_url( get_template_directory_uri() ); ?>/images/glow/card-purple-glow.bc96a7d4.svg')] bg-no-repeat bg-cover px-6 lg:px-14 py-16 flex flex-col md:flex-row items-center justify-between text-center md:text-left border border-gray-700 rounded-xl mb-10 w-[320px] md:w-auto mx-auto md:space-x-5 lg:space-x-[8rem]">
      <img class="md:w-[40%]" src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/specs/seo.svg" alt="">
      <div class="mt-5 md:mt-0">
        <h3 class="mb-3 text-2xl md:text-3xl lg:text-4xl lg:mb-5">On Page & Off Page SEO</h3>
        <p class="md:text-lg">A continuous sprint of On
          page and Off Page SEO
          along with the content
          calendar.</p>
      </div>
    </div>
  </div>
</div>

<!-- feature section -->
<div class="container text-center">
  <h2 data-aos="fade-up" data-aos-delay="400" class="text-3xl font-semibold md:text-4xl lg:text-5xl lg:mx-auto mb-14">
    Our SEO Services</h2>

  <div data-aos="fade-up" data-aos-delay="500" class="grid-cols-2 gap-8 md:grid xl:grid-cols-3">
    <div
      class="mb-14 md:mb-2 transition bg-none p-8 border border-gray-700 rounded-lg cursor-pointer hover:bg-[url('<?php echo esc_url( get_template_directory_uri() ); ?>/images/glow/card-red-glow.303cd894.svg')] bg-no-repeat duration-500 bg-cover">
      <img class="mx-auto my-4 w-14" src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/features/sass.png" alt="">
      <h3 class="mb-4 text-2xl">SaaS SEO</h3>
      <p class="mb-4">Get the visibility you deserve
        in the highly competitive
        Software Industry with our
        proven SEO strategy</p>
    </div>

    <div
      class="mb-14 md:mb-2 transition bg-none p-8 border border-gray-700 rounded-lg cursor-pointer hover:bg-[url('<?php echo esc_url( get_template_directory_uri() ); ?>/images/glow/card-red-glow.303cd894.svg')] bg-no-repeat duration-500 bg-cover">
      <img class="mx-auto my-4 w-14" src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/features/ecommerce.png" alt="">
      <h3 class="mb-4 text-2xl">ECommerce SEO</h3>
      <p class="mb-4">Be it a Shopify site or a
        Wordpress, we can scale
        your business to the masses.</p>
    </div>

    <div
      class="mb-14 md:mb-2 transition bg-none p-8 border border-gray-700 rounded-lg cursor-pointer hover:bg-[url('<?php echo esc_url( get_template_directory_uri() ); ?>/images/glow/card-red-glow.303cd894.svg')] bg-no-repeat duration-500 bg-cover">
      <img class="mx-auto my-4 w-14" src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/features/content-management.png" alt="">
      <h3 class="mb-4 text-2xl">Content Strategy</h3>
      <p class="mb-4">No SEO is complete without
        a comprehensive Content
        Strategy to win the race. We
        will create a Cotnent Strategy
        that will complement the SEO
        work.</p>
    </div>

    <div
      class="mb-14 md:mb-2 transition bg-none p-8 border border-gray-700 rounded-lg cursor-pointer hover:bg-[url('<?php echo esc_url( get_template_directory_uri() ); ?>/images/glow/card-red-glow.303cd894.svg')] bg-no-repeat duration-500 bg-cover">
      <img class="mx-auto my-4 w-14" src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/features/consulting.png" alt="">
      <h3 class="mb-4 text-2xl">SEO Consulting</h3>
      <p class="mb-4">Just want to consult for a
        SEO strategy and have
        in-house SEO team? Sure we
        can help you with that.</p>
    </div>

    <div
      class="mb-14 md:mb-2 transition bg-none p-8 border border-gray-700 rounded-lg cursor-pointer hover:bg-[url('<?php echo esc_url( get_template_directory_uri() ); ?>/images/glow/card-red-glow.303cd894.svg')] bg-no-repeat duration-500 bg-cover">
      <img class="mx-auto my-4 w-14" src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/features/help.png" alt="">
      <h3 class="mb-4 text-2xl">Technical SEO</h3>
      <p class="mb-4">It plays a huge role specially
        for big websites. Get a detailed tech SEO audit and
        get ahead of your
        competitors.</p>
    </div>

    <div
      class="mb-14 md:mb-2 transition bg-none p-8 border border-gray-700 rounded-lg cursor-pointer hover:bg-[url('<?php echo esc_url( get_template_directory_uri() ); ?>/images/glow/card-red-glow.303cd894.svg')] bg-no-repeat duration-500 bg-cover">
      <img class="mx-auto my-4 w-14" src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/features/offpage.png" alt="">
      <h3 class="mb-4 text-2xl ">Off Page SEO</h3>
      <p class="mb-4">PR and Off Page activity is
        also important to signal
        Google about your company.
        We will create</p>
    </div>
  </div>
</div>

<!-- cta section -->
<div class="container">
  <div class="space-y-10 text-center md:my-20">
    <h2 data-aos="fade-up" data-aos-delay="400"
      class="text-3xl md:text-4xl lg:text-5xl lg:w-[750px] lg:m-auto font-semibold">
      What's so different in our SEO approach ?</h2>
    <div data-aos="fade-up" data-aos-delay="500" class="space-y-6 md:text-xl">
      <h3 class="lg:w-[750px] lg:m-auto">We often get asked this question. We understand your point. You may or may
        not
        get the results that we are
        promising out there. But you will certainly get,</h3>
      <h3 class="p-4 font-bold border border-gray-700 rounded-lg md:text-2xl">Transparent approach</h3>
      <h3 class="p-4 font-bold border border-gray-700 rounded-lg md:text-2xl">Honest update about the project, even if
        its not
        working
      </h3>
      <h3 class="p-4 font-bold border border-gray-700 rounded-lg md:text-2xl">Hunger for your growth</h3>
      <h3 class="p-4 font-bold border border-gray-700 rounded-lg md:text-2xl">Your industry updates</h3>
      <h3 class="p-4 font-bold border border-gray-700 rounded-lg md:text-2xl">Act like a CMO of your company</h3>
      <h3 class="p-4 font-bold border border-gray-700 rounded-lg md:text-2xl">Provide recommendation for other Digital
        Marketing
        initiatives</h3>
      <h3 class="lg:w-[750px] lg:m-auto">We don't limit our self with SEO services, our aim is to help you win the
        whole marketing game
        and stay ahead of competitors.</h3>
      <p>This is our approach for creating value. We believe in principle of Karma.</p>
    </div>
    <button class="primary-button">
      <a href="#" class="font-bold">Get started</a>
    </button>
  </div>
</div>

<!-- Contact Form -->
<div class="container">
  <div data-aos="fade-up"
    class="p-4 border border-gray-700 rounded-lg md:p-14 lg:w-[80%] m-auto bg-[url('<?php echo esc_url( get_template_directory_uri() ); ?>/images/glow/contact-page-contact-form.png')] bg-cover bg-no-repeat">
    <div class="mb-10 space-y-4 text-center md:text-left">
      <h2 class="text-2xl md:text-5xl">Speak to Us</h2>
      <p class="md:text-xl">Fill out your details below if you want to know more about our services. We’ll
        reply ASAP.</p>
    </div>
    <form class="flex flex-col md:flex-row md:space-x-10" action="https://formspree.io/f/mdovagrq" method="POST">
      <div class="flex flex-col w-full md:space-y-4">
        <input class="py-6 bg-transparent border-b border-gray-700 outline-none focus:outline-none md:text-xl"
          type="text" placeholder="First Name" name="firstname">
        <input class="py-6 bg-transparent border-b border-gray-700 outline-none focus:outline-none md:text-xl"
          type="text" placeholder="Last Name" name="lastname">
        <input class="py-6 bg-transparent border-b border-gray-700 outline-none focus:outline-none md:text-xl"
          type="email" placeholder="Email" name="email">
        <input class="py-6 bg-transparent border-b border-gray-700 outline-none focus:outline-none md:text-xl"
          type="number" placeholder="Phone No." name="phoneno.">
      </div>
      <div class="flex flex-col justify-between w-full space-y-4">
        <textarea
          class="py-6 bg-transparent border-b border-gray-700 outline-none focus:outline-none md:h-full md:text-xl"
          name="" id="" placeholder="Message" name="message"></textarea>
        <button class="primary-button" type="submit">
          <a class="font-bold" href="#">Send Enquiry</a></button>
      </div>
    </form>
  </div>
</div>

<?php get_footer(); ?>