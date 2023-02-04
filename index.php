<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Young Nomads - Your SEO Partner</title>

  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

  <!-- Styles -->
  <link rel="stylesheet" href="/dist/output.css" />
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
</head>

<body class="overflow-x-hidden bg-no-repeat bg-contain bg-bg-img">
  <!-- Navbar -->
  <nav>
    <a href="#" class="z-20">
      <!-- <h1 class="text-xl lg:text-3xl">YoungNomads</h1> -->
      <img class="lg:w-[150px] w-[100px]" src="/images/companies/logo.png" alt="visibility">
    </a>

    <div class="flex items-center justify-end">
      <span class="z-20 block mx-2 text-3xl cursor-pointer lg:hidden">
        <ion-icon onclick="onToggleMenu(this)" name="menu" id="menu-icon""></ion-icon>
      </span>

      <div
        class=" px-4 lg:px-0 bg-no-repeat bg-cover bg-bg-img lg:bg-none z-10 fixed inset-0 w-full translate-x-[-100%]
          bg-[#0e1414] lg:bg-transparent shadow-xl transition duration-300 lg:border-r-0 lg:w-auto lg:static
          lg:shadow-none lg:translate-x-0" id="nav-links">
          <div class="flex flex-col h-full lg:space-x-10 lg:items-center lg:flex-row">
            <ul class="pt-24 space-y-8 lg:pt-0 lg:space-y-0 lg:flex lg:space-x-10">
              <li class="text-indigo-500 nav-link">
                <a href="/">Home</a>
              </li>
              <li class="nav-link">
                <a href="/about.php">About</a>
              </li>
              <li class="nav-link">
                <a href="/case-studies.php">Case Studies</a>
              </li>
              <li class="nav-link">
                <a href="/contact.php">Contact</a>
              </li>
            </ul>
            <button id="show-modal" data-modal-target="popup-modal" data-modal-toggle="popup-modal" class="nav-button"
              type="button">
              FREE AUDIT
            </button>
          </div>
    </div>
  </nav>

  <div id="popup-modal" tabindex="-1"
    class="fixed top-0 left-0 right-0 z-50 flex items-center justify-center hidden w-full h-screen p-0 bg-black bg-opacity-50 md:inset-0">
    <div class="container">
      <div data-aos="fade-up" data-aos-duration="1000"
        class="p-4 border border-gray-700 rounded-lg md:p-14 lg:w-[80%] m-auto bg-[#0e1414]">

        <span class="absolute z-20 mx-2 text-3xl cursor-pointer right-2 top-4">
          <ion-icon id="close-modal" name="close" id="menu-icon""></ion-icon>
              </span>
              
        <div class="mb-10 space-y-4 text-center md:text-left">
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
          <img class="logo" src="/images/companies/kopykitab.png" alt="">
        </div>
        <div class="p-4 bg-gray-700 rounded-lg sm:w-[150px]">
          <img class="logo" src="/images/companies/clever-harvey.webp" alt="">
        </div>
        <div class="p-4 bg-gray-700 rounded-lg sm:w-[150px]">
          <img class="logo" src="/images/companies/Hyreo-Logo.png" alt="">
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
        class="bg-[url('/images/glow/card-red-glow.303cd894.svg')] bg-no-repeat bg-cover px-6 lg:px-14 py-16 flex flex-col md:flex-row items-center justify-between text-center md:text-left border border-gray-700 rounded-xl mb-10 w-[320px] md:w-auto mx-auto md:space-x-5 lg:space-x-[8rem]">
        <img class="md:w-[40%]" src="/images/specs/research.svg" alt="">
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
        class="bg-[url('/images/glow/card-mist-glow.6139fbd9.svg')] bg-no-repeat bg-cover px-6 lg:px-14 py-16 flex flex-col md:flex-row items-center justify-between text-center md:text-left border border-gray-700 rounded-xl mb-10 w-[320px] md:w-auto mx-auto md:space-x-5 lg:space-x-[8rem]">
        <img class="md:w-[40%]" src="/images/specs/strategy.svg" alt="">
        <div class="mt-5 md:mt-0">
          <h3 class="mb-3 text-2xl md:text-3xl lg:text-4xl lg:mb-5">SEO & Content Strategy</h3>
          <p class="md:text-lg">Create a Content Strategy for
            3 or 6 months timeline with
            an expected outcome based
            on data point.</p>
        </div>
      </div>
      <div data-aos="fade-up"
        class="bg-[url('/images/glow/card-purple-glow.bc96a7d4.svg')] bg-no-repeat bg-cover px-6 lg:px-14 py-16 flex flex-col md:flex-row items-center justify-between text-center md:text-left border border-gray-700 rounded-xl mb-10 w-[320px] md:w-auto mx-auto md:space-x-5 lg:space-x-[8rem]">
        <img class="md:w-[40%]" src="/images/specs/seo.svg" alt="">
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
        class="mb-14 md:mb-2 transition bg-none p-8 border border-gray-700 rounded-lg cursor-pointer hover:bg-[url('/images/glow/card-red-glow.303cd894.svg')] bg-no-repeat duration-500 bg-cover">
        <img class="mx-auto my-4 w-14" src="/images/features/sass.png" alt="">
        <h3 class="mb-4 text-2xl">SaaS SEO</h3>
        <p class="mb-4">Get the visibility you deserve
          in the highly competitive
          Software Industry with our
          proven SEO strategy</p>
      </div>

      <div
        class="mb-14 md:mb-2 transition bg-none p-8 border border-gray-700 rounded-lg cursor-pointer hover:bg-[url('/images/glow/card-red-glow.303cd894.svg')] bg-no-repeat duration-500 bg-cover">
        <img class="mx-auto my-4 w-14" src="/images/features/ecommerce.png" alt="">
        <h3 class="mb-4 text-2xl">ECommerce SEO</h3>
        <p class="mb-4">Be it a Shopify site or a
          Wordpress, we can scale
          your business to the masses.</p>
      </div>

      <div
        class="mb-14 md:mb-2 transition bg-none p-8 border border-gray-700 rounded-lg cursor-pointer hover:bg-[url('/images/glow/card-red-glow.303cd894.svg')] bg-no-repeat duration-500 bg-cover">
        <img class="mx-auto my-4 w-14" src="/images/features/content-management.png" alt="">
        <h3 class="mb-4 text-2xl">Content Strategy</h3>
        <p class="mb-4">No SEO is complete without
          a comprehensive Content
          Strategy to win the race. We
          will create a Cotnent Strategy
          that will complement the SEO
          work.</p>
      </div>

      <div
        class="mb-14 md:mb-2 transition bg-none p-8 border border-gray-700 rounded-lg cursor-pointer hover:bg-[url('/images/glow/card-red-glow.303cd894.svg')] bg-no-repeat duration-500 bg-cover">
        <img class="mx-auto my-4 w-14" src="/images/features/consulting.png" alt="">
        <h3 class="mb-4 text-2xl">SEO Consulting</h3>
        <p class="mb-4">Just want to consult for a
          SEO strategy and have
          in-house SEO team? Sure we
          can help you with that.</p>
      </div>

      <div
        class="mb-14 md:mb-2 transition bg-none p-8 border border-gray-700 rounded-lg cursor-pointer hover:bg-[url('/images/glow/card-red-glow.303cd894.svg')] bg-no-repeat duration-500 bg-cover">
        <img class="mx-auto my-4 w-14" src="/images/features/help.png" alt="">
        <h3 class="mb-4 text-2xl">Technical SEO</h3>
        <p class="mb-4">It plays a huge role specially
          for big websites. Get a detailed tech SEO audit and
          get ahead of your
          competitors.</p>
      </div>

      <div
        class="mb-14 md:mb-2 transition bg-none p-8 border border-gray-700 rounded-lg cursor-pointer hover:bg-[url('/images/glow/card-red-glow.303cd894.svg')] bg-no-repeat duration-500 bg-cover">
        <img class="mx-auto my-4 w-14" src="/images/features/offpage.png" alt="">
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
      class="p-4 border border-gray-700 rounded-lg md:p-14 lg:w-[80%] m-auto bg-[url('/images/glow/contact-page-contact-form.png')] bg-cover bg-no-repeat">
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


  <!-- footer -->
  <footer class="container flex-row justify-between md:flex">
    <div class="links-container">
      <a href="#">
        <h1 class="mb-4 text-3xl">YoungNomads</h1>
      </a>
      <div class="links-container">
        <a href="#" class="footer-link"><i class="pr-5 fa-brands fa-linkedin"></i>Linkedin</a>
        <a href="#" class="footer-link"><i class="pr-5 fa-brands fa-twitter"></i>Twitter</a>
      </div>
    </div>

    <div class="links-container">
      <h4 class="text-xl text-gray-400">Address</h4>
      <p>We are based out of beautiful city’s new emerging IT hub – Vijay Nagar, Indore, India.</p>
    </div>

    <div class="links-container">
      <h4 class="text-xl text-gray-400">Contact No.</h4>
      <a href="#" class="footer-link">+91 88 273 36 407</a>
    </div>
  </footer>

  <!-- Newsletter -->
  <div class="container flex flex-col items-center justify-between text-center lg:flex-row lg:text-left">
    <h2 class="mb-8 text-2xl md:text-3xl md:w-96 lg:mb-0">Get the latest updates. Subscribe for our newsletter</h2>
    <div
      class="border border-gray-700 rounded-lg flex justify-between content-center p-2 space-x-4 w-full md:w-[600px] lg:w-auto xl:w-[600px]">
      <input class="w-full p-4 bg-transparent border-none outline-none" type="text" placeholder="Enter your email">
      <button class="primary-button">
        <a class="font-bold" href="#">Subscribe</a></button>
    </div>
  </div>

  <div class="container py-0">
    <hr class="border border-gray-700">
  </div>

  <!-- Subfooter -->
  <div class="container items-center justify-between text-center lg:flex">
    <div class="links-container lg:mb-0 md:flex-row md:justify-center md:space-y-0 md:space-x-10">
      <a href="#" class="footer-link">Privacy policy</a>
      <a href="#" class="footer-link">Terms of Use</a>
      <a href="#" class="footer-link">Link Policy</a>
      <a href="#" class="footer-link">FB Policy</a>
    </div>
    <h5 class="text-gray-400">Copyright © 2023 Young Nomads | Digital Marketing</h5>
  </div>

  <!-- Scripts -->
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script src="https://kit.fontawesome.com/628003722a.js" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bodymovin/5.7.4/lottie.min.js"></script>
  <script src="/js/script.js"></script>
  <!-- <script>

    const animation = bodymovin.loadAnimation({
      // animationData: { /* ... */ },
      container: document.getElementById("lottie-container"), // required
      path: "/images/animations/digitalmarketing.json", // required
      renderer: "svg", // required
      loop: true, // optional
      autoplay: true, // optional
      name: "Demo Animation", // optional
    });

  </script> -->
</body>

</html>