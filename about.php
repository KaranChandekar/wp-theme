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
                            <li class="text-indigo-500 nav-link">
                                <a href="/">About</a>
                            </li>
                            <li class="nav-link">
                                <a href="/case-studies.php">Case Studies</a>
                            </li>
                            <li class="nav-link">
                                <a href="/contact.php">Contact</a>
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
                  
            <div class="mb-10 space-y-4 text-center  md:text-left">
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
    <header class="container pt-40 text-center">
        <div class="my-10 mx-auto md:w-[500px]" data-aos="zoom-in" data-aos-duration="1000">
            <h1 class="mb-6 text-5xl lg:text-7xl md:mb-10">About Us</h1>
            <p class="mb-3 text-lg lg:text-2xl">Young Nomads is a SEO Company led by Ayush Gupta from a emerging city
                Indore, based in Central India.</p>
            <p class="mb-10 text-lg lg:text-2xl">We are solely focusing on giving hyper growth to our clients through
                organic medium and make their
                business grow.</p>
            <button class="primary-button">
                <a class="font-bold" href="#">Get Started</a></button>
        </div>
    </header>

    <!-- Team Section -->
    <div class="container text-center md:text-left">
        <h3 data-aos="fade-right" data-aos-duration="1000" class="mb-12 text-3xl">Our Team</h3>
        <div class="overflow-x-hidden lg:flex lg:space-x-20">
            <div class="mb-20 lg:mb-0" data-aos="fade-left" data-aos-delay="500" data-aos-duration="1000">
                <div class="md:flex md:mb-6">
                    <img class="mx-auto mb-4 rounded-lg w-60 md:mx-0 md:mb-0" src="/images/team/ayush-gupta.jpg"
                        alt="Ayush Profile">
                    <div class="mb-4 space-y-4 md:mb-0 md:ml-6">
                        <h2 class="text-3xl">Ayush Gupta</h2>
                        <h3 class="text-2xl">FOUNDER</h3>
                        <i class="text-2xl fa-brands fa-linkedin"></i>
                    </div>
                </div>
                <p class="sm:text-lg md:text-xl">He has worked as Software Developer with L&T Infotech for close to 3
                    years,
                    after
                    which he worked as a
                    Digital Marketer
                    for Startups & with leading Digital Marketing agency which has clients like Dominos, Big Basket,
                    Urban
                    Ladder, Cult Fit
                    and many more.</p>
            </div>
            <div data-aos="fade-left" data-aos-delay="1000" data-aos-duration="1000">
                <div class="md:flex md:mb-6">
                    <img class="mx-auto mb-4 rounded-lg w-60 md:mx-0 md:mb-0" src="/images/team/adithya-rathore.jpeg"
                        alt="Ayush Profile">
                    <div class="mb-4 space-y-4 md:mb-0 md:ml-6">
                        <h2 class="text-3xl">Aditya Singh Rathore</h2>
                        <h3 class="text-2xl">CONSULTANT</h3>
                        <i class="text-2xl fa-brands fa-linkedin"></i>
                    </div>
                </div>
                <p class="sm:text-lg md:text-xl">Aditya believes in constant learning and inclusive growth. He has
                    worked on data analytics and is fascinated by
                    data-driven decision-making. He has captained various basketball teams and enjoys live sports. He is
                    an avid reader of
                    evolutionary science. He has also volunteered for NGOs and seeks collective betterment.</p>
            </div>
        </div>
    </div>

    <!-- Careers Section -->
    <div class="container">
        <div class="mb-8 space-y-4 text-center">
            <h3 class="text-xl text-indigo-500" data-aos="fade-up" data-aos-delay="400" data-aos-duration="1000">CAREERS
            </h3>
            <h2 class="text-3xl md:text-4xl lg:text-5xl" data-aos="fade-up" data-aos-delay="500"
                data-aos-duration="1000">Come work with us!</h2>
        </div>
        <div class="grid-cols-2 gap-8 md:grid lg:grid-cols-3" data-aos="fade-up" data-aos-delay="400"
            data-aos-duration="1000">
            <div
                class=" bg-cover p-8 mb-8 space-y-6 border border-gray-700 rounded-lg md:mb-0 hover:bg-[url('/images/glow/card-mist-glow.6139fbd9.svg')] cursor-pointer">
                <img class="bg-[#182222] rounded-full p-2" src="/images/careers/career1.svg" alt="">
                <h3 class="text-2xl">Employee equity plan</h3>
                <p class="md:text-lg">We are strong believers in a business-owner mentality - and want you to be more
                    than just an
                    employee., but to feel
                    you're an integral part of Hubble.</p>
            </div>
            <div
                class=" bg-cover p-8 mb-8 space-y-6 border border-gray-700 rounded-lg md:mb-0 hover:bg-[url('/images/glow/card-mist-glow.6139fbd9.svg')] cursor-pointer">
                <img class="bg-[#182222] rounded-full p-2" src="/images/careers/career2.svg" alt="">
                <h3 class="text-2xl">Competitive salary</h3>
                <p class="md:text-lg">Equity is important - but so is offering salaries that are well aligned with other
                    top tech companies, regardless of
                    where you are located..</p>
            </div>
            <div
                class=" bg-cover p-8 mb-8 space-y-6 border border-gray-700 rounded-lg md:mb-0 hover:bg-[url('/images/glow/card-mist-glow.6139fbd9.svg')] cursor-pointer">
                <img class="bg-[#182222] rounded-full p-2" src="/images/careers/career3.svg" alt="">
                <h3 class="text-2xl">Annual bonus eligibility</h3>
                <p class="md:text-lg">You work hard - and we want to reward teams that go over and above, with both
                    stock and cash bonuses, both ad-hoc and
                    annually.</p>
            </div>
            <div
                class=" bg-cover p-8 mb-8 space-y-6 border border-gray-700 rounded-lg md:mb-0 hover:bg-[url('/images/glow/card-mist-glow.6139fbd9.svg')] cursor-pointer">
                <img class="bg-[#182222] rounded-full p-2" src="/images/careers/career4.svg" alt="">
                <h3 class="text-2xl">PPO medical options</h3>
                <p class="md:text-lg">There are enough worries in life and your medical plan should not be one of them.
                    We provide competitive PPO plans,
                    aligned with big companies.
                </p>
            </div>
            <div
                class=" bg-cover p-8 mb-8 space-y-6 border border-gray-700 rounded-lg md:mb-0 hover:bg-[url('/images/glow/card-mist-glow.6139fbd9.svg')] cursor-pointer">
                <img class="bg-[#182222] rounded-full p-2" src="/images/careers/career5.svg" alt="">
                <h3 class="text-2xl">Dental and vision plan options</h3>
                <p class="md:text-lg">There are enough worries in life and your medical plan should not be one of them.
                    We provide competitive PPO plans,
                    aligned with big companies.</p>
            </div>
            <div
                class=" bg-cover p-8 mb-8 space-y-6 border border-gray-700 rounded-lg md:mb-0 hover:bg-[url('/images/glow/card-mist-glow.6139fbd9.svg')] cursor-pointer">
                <img class="bg-[#182222] rounded-full p-2" src="/images/careers/career6.svg" alt="">
                <h3 class="text-2xl">Parental leave — covering 100% of salary</h3>
                <p class="md:text-lg">As we grow, so are you, both professionally and personally. We cover 100% of your
                    parental leave, regardless of
                    location.</p>
            </div>
            <div
                class=" bg-cover p-8 mb-8 space-y-6 border border-gray-700 rounded-lg md:mb-0 hover:bg-[url('/images/glow/card-mist-glow.6139fbd9.svg')] cursor-pointer">
                <img class="bg-[#182222] rounded-full p-2" src="/images/careers/career7.svg" alt="">
                <h3 class="text-2xl">Telemedicine and OneMedical</h3>
                <p class="md:text-lg">OneMedical is a leader in Telemedicine, which we offer to all employees
                    participating in our healthcare plans.</p>
            </div>
            <div
                class=" bg-cover p-8 mb-8 space-y-6 border border-gray-700 rounded-lg md:mb-0 hover:bg-[url('/images/glow/card-mist-glow.6139fbd9.svg')] cursor-pointer">
                <img class="bg-[#182222] rounded-full p-2" src="/images/careers/career8.svg" alt="">
                <h3 class="text-2xl">Unlimited leave policy</h3>
                <p class="md:text-lg">Life work balance is very important for us. At Hubble, we want you to take the
                    time you need to recharge and spend time
                    with those you care most about.</p>
            </div>
            <div
                class="p-8 mb-8 space-y-6 border border-gray-700 rounded-lg md:mb-0 hover:bg-[url('/images/glow/card-mist-glow.6139fbd9.svg')] cursor-pointer bg-cover ">
                <img class="bg-[#182222] rounded-full p-2" src="/images/careers/career5.svg" alt="">
                <h3 class="text-2xl">Frequent employee social events</h3>
                <p class="md:text-lg">The pandemic has been tough on us all - and we want to everyone to bounce back -
                    with frequent employee events including
                    lunches and social hours.</p>
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
        <img class="rounded-xl lg:w-1/2" src="/images/bg/grow.png" alt="Marketing" data-aos="fade-up"
            data-aos-delay="700" data-aos-duration="1000">
    </div>

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