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

<body class="bg-no-repeat bg-contain bg-bg-img">
    <!-- Navbar -->
    <nav>
        <a href="/index.html" class="z-20">
            <!-- <h1 class="text-xl lg:text-3xl">YoungNomads</h1> -->
            <img class="lg:w-[150px] w-[100px]" src="/images/companies/logo.png" alt="visibility">
        </a>

        <div class="flex items-center justify-end">
            <span class="z-20 block mx-2 text-3xl cursor-pointer lg:hidden">
                <ion-icon onclick="onToggleMenu(this)" name="menu" id="menu-icon""></ion-icon>
          </span>
    
          <div
            class=" px-4 lg:px-0 bg-no-repeat bg-cover bg-bg-img lg:bg-none z-10 fixed inset-0 w-full
                    translate-x-[-100%] bg-[#0e1414] lg:bg-transparent shadow-xl transition duration-300 lg:border-r-0
                    lg:w-auto lg:static lg:shadow-none lg:translate-x-0" id="nav-links">
                    <div class="flex flex-col h-full lg:space-x-10 lg:items-center lg:flex-row">
                        <ul class="pt-24 space-y-8 lg:pt-0 lg:space-y-0 lg:flex lg:space-x-10">
                            <li class="nav-link">
                                <a href="/index.php">Home</a>
                            </li>
                            <li class="nav-link">
                                <a href="/about.php">About</a>
                            </li>
                            <li class="nav-link">
                                <a href="/case-studies.php">Case Studies</a>
                            </li>
                            <li class="text-indigo-500 nav-link">
                                <a href="/">Contact</a>
                            </li>
                        </ul>
                        <button id="show-modal" data-modal-target="popup-modal" data-modal-toggle="popup-modal"
                            class="nav-button" type="button">
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
            <input class="w-full p-4 bg-transparent border-none outline-none" type="text"
                placeholder="Enter your email">
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
    <script src="/js/script.js"></script>
</body>

</html>