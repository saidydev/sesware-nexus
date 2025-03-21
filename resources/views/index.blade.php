<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @vite('resources/css/app.css')
    <title>SESWARE</title>
    <link rel="stylesheet" href="./fontawesome-free-6.5.1-web/css/all.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet"> <!-- AOS -->
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Roboto:400,500,600&display=swap" rel="stylesheet" />
    <link href="https://fonts.bunny.net/css?family=Merriweather:400,500,600&display=swap" rel="stylesheet" />
</head>

<body class="p-0 m-0 list-none">
    {{-- HEADER/NAV BAR --}}
    <section class="text-white w-full h-auto bg-cover bg-center bg-blue-200"
        style="background-image: linear-gradient(to right,rgba(175, 111, 238, 0.199),hsla(266, 89%, 11%, 0.944)),url('./images/KANYASI_66.jpg')">
        <nav class="mx-0 px-6 py-2 lg:text-inherit flex justify-between lg:py-6 lg:mx-banner lg:flex lg:justify-between lg:gap-6 items-center">
            <div class="h-10 w-1/4  lg:h-16 lg:w-1/5 bg-contain bg-no-repeat" style="background-image: url('./images/logo.png')">
            </div>
            <div class="lg:flex lg:justify-between lg:w-2/5 font-heading hidden">
                <a href="{{route('home')}}">
                    <li>Home</li>
                </a>

                <a href="{{route('about')}}">
                    <li>About Us</li>
                </a>

                <a href="{{route('service')}}">
                    <li>Services</li>
                </a>

                <a href="{{route('product')}}">
                    <li>Products</li>
                </a>

                <a href="{{route('contact')}}">
                    <li>Contact us</li>
                </a>
            </div>
            <div class="lg:hidden text-white text-lg">
                <i class="fa-solid fa-bars"></i>
                <i class="fa-solid fa-x" style="display: none"></i>
            </div>
        </nav>

        <div
            class="flex flex-col gap-4 mx-4 mt-banner pb-10 lg:flex lg:flex-row lg:mx-banner lg:pl-10 lg:mt-banner lg:pb-14 items-center ">
            <div class="flex flex-col gap-4 lg:w-4/5 text-center" style="margin: 5% auto">
                <h2 class="text-mobilehead lg:text-headimg font-headimg" data-aos="fade-up" data-aos-duration="3000">
                    Innovative <span class="ss"> Digital & IT Solutions </span> for a Modern World.</h2>
                <h2>
                    <hr class="w-6 h-1 lg:w-8 lg:h-2 bg-white border-none" style="margin: 0 auto">
                </h2>
                <p class="text-md font-heading  md:block" data-aos="fade-up" data-aos-duration="3000">Empowering
                    business with cutting-edge technology to stay ahead in a fast-paced difital era.Our Solutions are
                    designed to optimize operations,enhance productivity,and drive growth through innovation and
                    cutting-edge technology.Partner with us to transform your ideas into reality and stay ahead in the
                    ever-evolving digital landscape.</p>
            </div>
            <div class="gap-4 lg:w-1/5 items-center" data-aos="fade-up" data-aos-duration="2000">
                <div class="flex flex-row lg:flex-col gap-6 lg:w-fit lg:ml-auto text-lg text-white cursor-pointer">
                    <i class="fa-brands fa-facebook"></i>
                    <i class="fa-brands fa-linkedin"></i>
                    <i class="fa-brands fa-whatsapp"></i>
                    <i class="fa-brands fa-instagram"></i>
                    <i class="fa-brands fa-twitter"></i>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-hd px-4 py-top lg:px-banner lg:py-top font-content">
        <div class="grid grid-cols-2 gap-3 md:grid md:grid-cols-4 lg:grid lg:grid-cols-7 lg:gap-4">
            <div class="flex gap-2 lg:gap-2 items-center">
                <div class="flex flex-col gap-2">
                    <h1 class="text-xl lg:text-2xl font-semibold text-white">10+</h1>
                    <h2 class="text-lg font-content text-slate-400">Projects</h2>
                </div>
            </div>
            <hr class="hidden lg:block lg:w-1 border-none lg:h-16 bg-slate-500 g:w-fit lg:ml-auto">
            <div class="flex lg:gap-2 items-center">
                <div class="flex flex-col gap-2">
                    <h1 class="text-xl lg:text-2xl font-semibold text-white">24/7</h1>
                    <h2 class="text-lg font-content text-slate-400">services</h2>
                </div>
            </div>
            <hr class="hidden lg:block lg:w-1 border-none lg:h-16 bg-slate-500 g:w-fit lg:ml-auto">
            <div class="flex lg:gap-2 items-center">
                <div class="flex flex-col gap-2">
                    <h1 class="text-xl lg:text-2xl font-semibold text-white">100 +</h1>
                    <h2 class="text-lg font-content text-slate-400">Customers</h2>
                </div>
            </div>
            <hr class="hidden lg:block lg:w-1 border-none lg:h-16 bg-slate-500 g:w-fit lg:ml-auto">
            <div class="flex lg:gap-2 items-center">
                <div class="flex flex-col gap-2">
                    <h1 class="text-xl lg:text-2xl font-semibold text-white"> 3+</h1>
                    <h2 class="text-lg font-content text-slate-400">Years Experience</h2>
                </div>
            </div>
        </div>
    </section>

    {{-- ABOUT --}}

    <section class="px-4 py-top lg:px-banner lg:py-top font-content">
        <div class="flex flex-col gap-4 lg:flex lg:flex-row lg:gap-8">
            <div class="w-full h-auto lg:w-1/2 flex flex-col gap-2 lg:h-auto">
                <div class="flex flex-col lg:flex-row gap-5">
                    <div></div>
                    <span class="text-slate-600 text-lg">OUR STORY</span>
                </div>
                <div class="flex gap-2 items-center">
                    <hr class="w-2 h-24 lg:w-4 border-none lg:h-28 bg-slate-500"
                        style="background-image: linear-gradient(to bottom,rgb(8,11,97),hsla(293, 98%, 39%, 0.738))">
                    <div class="flex flex-col">
                        <h2 class="font-heading text-2xl lg:text-4xl">Innovative Digital & IT Solutions for a Modern
                            World.</h2>
                        <h2 class="text-xl lg:text-2xl text-hd font-headimg">sesware</h2>
                    </div>
                </div>
                <div class="lg:mt-banner w-full h-img lg:w-full lg:h-img rounded-lg bg-cover bg-center"
                    style="background-image: url('./images/KANYASI_57.jpg')" data-aos="fade-right"
                    data-aos-duration="3000">
                </div>
            </div>

            <div class="flex flex-col gap-4 w-full lg:flex-col lg:gap-4 lg:w-1/2 ">
                <div class="flex gap-4">
                    <div class="w-full h-half lg:mt-5 lg:w-full lg:h-half rounded-lg bg-cover bg-center"
                        style="background-image: url('./images/KANYASI_50.jpg')" data-aos="fade-left"
                        data-aos-duration="2000">
                    </div>
                    <div class="w-full h-half lg:mt-5 lg:w-full lg:h-half rounded-lg bg-cover bg-center"
                        style="background-image: url('./images/KANYASI_61.jpg')" data-aos="fade-left"
                        data-aos-duration="3000">
                    </div>
                </div>

                <p class="lg:mt-top lg:text-md text-md font-content">A software developing company specializing in
                    delivering innovative and scalable digital solutions.With a team of experienced
                    developers,designers,and strategies,we help business transform their ideas into high-performance
                    applications and software solutions.</p>
                <div class="grid grid-cols-2 gap-4 lg:grid lg:grid-cols-4 lg:gap-4" data-aos="fade-up"
                    data-aos-duration="3000">
                    <div class="flex gap-2 items-center">
                        <div class="flex flex-col gap-2">
                            <h1 class="text-xl lg:text-2xl font-semibold text-p">10 +</h1>
                            <h2 class="text-md lg:text-lg font-content text-slate-600">Projects</h2>
                        </div>
                    </div>
                    <div class="flex gap-2 items-center">
                        <div class="flex flex-col gap-2">
                            <h1 class="text-xl lg:text-2xl font-semibold text-p">100 +</h1>
                            <h2 class="text-md font-content text-slate-600">Customers</h2>
                        </div>
                    </div>
                    <div class="flex gap-2 items-center">
                        <div class="flex flex-col gap-2">
                            <h1 class="text-xl lg:text-2xl font-semibold text-p">3 +</h1>
                            <h2 class="text-md font-content text-slate-600">Years of Mastery</h2>
                        </div>
                    </div>
                    <div class="flex gap-2 items-center">
                        <div class="flex flex-col gap-2">
                            <h1 class="text-xl lg:text-2xl font-semibold text-p">1 +</h1>
                            <h2 class="text-md font-content text-slate-600">Received Honors</h2>
                        </div>
                    </div>
                </div>
                <div class="relative flex items-center gap-2" data-aos="fade-up" data-aos-duration="3000">
                    <hr class="w-16 h-1 lg:w-20 border-none lg:h-1 bg-slate-500"
                        style="background-image: linear-gradient(to bottom,rgb(8,11,97),hsla(249, 54%, 54%, 0.738))">
                    <a href="{{ route('about') }}"
                        class="text-md font-content p-2 rounded-sm lg:p-2 lg:rounded-md text-white hover:bg-p"
                        style="background-image: linear-gradient(to right,#9129f8d2,hsla(266, 89%, 11%, 0.944))">Read
                        More</a>
                </div>
            </div>
        </div>
    </section>

    {{-- SERVICES --}}

    <section class="px-4 py-top lg:px-banner lg:py-4 font-content">
        <div class="flex flex-col gap-4">
            <span class="text-slate-600">WHAT WE OFFER</span>
            <div class="flex justify-between">
                <h2 class="font-heading text-mobilehead lg:text-2xl text-hd">Our Range of Services.</h2>
                <a href="{{ route('service') }}" class="flex gap-2 items-center hidden lg:block">
                    <span class="text-hd font-content text-lg">More Services</span>
                    <i class="fa-solid fa-arrow-right text-md text-p"></i>
                </a>
            </div>
            <div class="grid grid-cols-1 gap-3 md:grid md:grid-cols-2 md:gap-4 lg:grid lg:grid-cols-2 lg:gap-4 text-md">
                <div class="flex gap-3 bg-sky-50 p-4 lg:p-6 rounded-sm " data-aos="fade-up" data-aos-duration="3000">
                    <div class="flex flex-col gap-2">
                        <i class="fa-solid fa-mobile p-2 text-center w-10 bg-hd  text-white rounded-sm text-lg"></i>
                        <h2 class="text-lg font-heading">Website & App Development </h2>
                        <p class="text-md">We specialize in developing high-performance website and mobile applications that drive engagement and business growth.</p>
                    </div>
                </div>
                <div class="flex gap-3 bg-sky-50 p-4 lg:p-6 rounded-sm"  data-aos="fade-up" data-aos-duration="3000">
                    <div class="flex flex-col gap-2">
                        <i class="fa-solid fa-code p-2 text-center w-10 bg-hd  text-white rounded-sm text-lg"></i>
                        <h2 class="text-lg font-headimg">Custom software development </h2>
                        <p class="text-md">We build tailor-made software solutions to meet unique business needs.Our team ensures efficiency,scalability,and security in every project.</p>
                    </div>
                </div>
                <div class="flex gap-3 bg-sky-50 p-4 lg:p-6 rounded-sm"  data-aos="fade-up" data-aos-duration="3000">
                    <div class="flex flex-col gap-2">
                        <i class="fa-solid fa-paint-brush p-2 text-center w-10 bg-hd  text-white rounded-sm text-lg"></i>
                        <h2 class="text-lg font-headimg">UX/UI design </h2>
                        <p class="font-heading">A great digital experience starts with intuitive and engaging design.Our UX/UI experts create user-friendly interfaces that boost conversions and engagement.</p>
                    </div>
                </div>
                <div class="flex gap-3 bg-sky-50 p-4 lg:p-6 rounded-sm"  data-aos="fade-up" data-aos-duration="3000">
                    <div class="flex flex-col gap-2">
                        <i class="fa-solid fa-globe p-2 text-center w-10 bg-hd  text-white rounded-sm text-lg"></i>
                        <h2 class="text-lg font-headimg">Search Engine Optimization </h2>
                        <p class="font-heading">We optimize websites and apps to rank higher on search engine,attract traffic, and improve online visibilty.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="px-4 lg:px-banner py-top bg-center bg-cover text-md text-white"
        style="background-image: linear-gradient(to right,#9129f8d2,hsla(266, 89%, 11%, 0.944)),url('./images/KANYASI_66.jpg')">
        <div class="flex flex-col gap-4 lg:flex-row lg:gap-4 items-center">
            <div class="flex flex-col gap-3 lg:w-1/2">
                <span class="text-slate-900">OUR STORY</span>
                <h2 class="font-content text-mobilehead lg:text-4xl">Your Gateway to <span class="text-p"> Online
                        Excellence </span> Dream Big in Us.</h2>
                <p class="font-heading text-slate-100">In today's digital world,succes begins with innovation,strategy, and technology. At SESWARE, we are gateway to inline excellence,transforming ideas into powerful digital solutions.</p>
                <a href="{{ route('about') }}"
                    class="bg-p lg:p-2 p-3 w-max text-center rounded-sm lg:w-24 hover:bg-hd"
                    style="background-image: linear-gradient(to right,#9129f8d2,hsla(266, 89%, 11%, 0.944))">
                    <button>View more</button>
                </a>
            </div>
            <div class="w-full h-bgdesign lg:w-1/2 bg-center lg:h-bgdesign bg-cover rounded-md"
                style="background-image: url('./images/KANYASI_63.jpg')" data-aos="fade-bottom"
                data-aos-duration="3000"></div>
        </div>
    </section>

    {{-- Products --}}

    <section class="px-4 py-bs lg:px-bs lg:py-bs">
        <div class="flex flex-col gap-4 lg:flex lg:flex-row lg:gap-4 lg:items-center">
            <div class="flex flex-col gap-4 w-full lg:w-3/5">
                <span class="text-slate-600">PRODUCTS</span>
                <h2 class="font-content text-mobilehead lg:text-4xl">Turning Concepts into cutting-Edge Solutions.</h2>
                <p class="text-md font-heading">Our solutions are built using the latest technologies to meet the evolving needs of business worldwide.</p>
                <a href="{{ route('product') }}"
                    class="bg-hd p-3 w-max lg:p-2 text-white lg:w-1/3 rounded-sm hover:bg-p"
                    style="background-image: linear-gradient(to right,#9129f8d2,hsla(266, 89%, 11%, 0.944))">
                    <button>View More Projects</button>
                </a>
            </div>
            <div class="grid grid-cols-1 gap-3 w-fulll md:grid md:grid-cols-2 md:gap-4 md:w-full text-white">
                <div class="flex flex-col gap-2 p-4 lg:p-6 bg-hd rounded-sm" data-aos="fade-up" data-aos-duration="3000">
                    <i class="fa-solid fa-folder text-p text-2xl"></i>
                    <h2 class="text-lg font-content font-medium">Real estate system</h2>
                    <p class="text-slate-300">Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem porro
                        commodi ducimus unde expedita blanditiis aliquid at officiis totam cum.</p>
                    <a href="" class="flex gap-2 items-center">
                        <span class="font-content text-lg">Live Demo</span>
                        <i class="fa-solid fa-arrow-right text-md text-p"></i>
                    </a>
                </div>
                <div class="flex flex-col gap-2 p-4 lg:p-6 bg-hd lg:relative top-14 rounded-sm" data-aos="fade-up" data-aos-duration="3000">
                    <i class="fa-solid fa-folder text-p text-2xl"></i>
                    <h2 class="text-lg lg:font-content font-medium">Real estate system</h2>
                    <p class="text-slate-300">Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem porro
                        commodi ducimus unde expedita blanditiis aliquid at officiis totam cum.</p>
                    <a href="" class="flex gap-2 items-center">
                        <span class="font-content text-lg">Live Demo</span>
                        <i class="fa-solid fa-arrow-right text-md text-p"></i>
                    </a>
                </div>
                <div class="flex flex-col gap-2 p-4 lg:p-6 bg-hd rounded-sm" data-aos="fade-up" data-aos-duration="3000">
                    <i class="fa-solid fa-folder text-p text-2xl"></i>
                    <h2 class="text-lg lg:font-content font-medium">Real estate system</h2>
                    <p class="text-slate-300">Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem porro
                        commodi ducimus unde expedita blanditiis aliquid at officiis totam cum.</p>
                    <a href="" class="flex gap-2 items-center">
                        <span class="font-content text-lg">Live Demo</span>
                        <i class="fa-solid fa-arrow-right text-md text-p"></i>
                    </a>
                </div>
                <div class="flex flex-col gap-2 p-4 lg:p-6 bg-hd lg:relative top-14 rounded-sm" data-aos="fade-up" data-aos-duration="3000">
                    <i class="fa-solid fa-folder text-p text-2xl"></i>
                    <h2 class="text-lg lg:font-content font-medium">Real estate system</h2>
                    <p class="text-slate-300">Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem porro
                        commodi ducimus unde expedita blanditiis aliquid at officiis totam cum.</p>
                    <a href="" class="flex gap-2 items-center">
                        <span class="font-content text-lg">Live Demo</span>
                        <i class="fa-solid fa-arrow-right text-md text-p"></i>
                    </a>
                </div>
            </div>
            <div>
    </section>

    {{-- FOOTER --}}

    <section class="bg-p py-top px-2 lg:px-banner font-content text-slate-300">
        <div class="grid grid-cols-1 gap-4 md:grid-cols-4 md:gap-4 ">
            <div class="flex flex-col gap-2 lg:gap-3">
                <h3 class="text-white font-semibold">Company</h3>
                <a href="{{route('about')}}">About</a>
                <a href="{{route('about')}}">Team members</a>
                <a href="{{route('product')}}">Projects</a>
                <a href="{{route('home')}}">Investors</a>
            </div>
            <div class="flex flex-col gap-2 lg:gap-3">
                <h3 class="text-white font-semibold">Our Services</h3>
                <a href="{{route('service')}}">Home</a>
                <a href="{{route('service')}}">Web Development</a>
                <a href="{{route('service')}}">System Development</a>
                <a href="{{route('service')}}">SEO</a>
            </div>
            <div class="flex flex-col gap-2 lg:gap-3">
                <h3 class="text-white font-semibold">Quick Link</h3>
                <a href="{{route('contact')}}">Knowledge base</a>
                <a href="{{route('contact')}}">Hire an Expert</a>
                <a href="{{route('contact')}}">FAQ's</a>
                <a href="{{route('contact')}}">Contact</a>
            </div>
            <div class="flex flex-col gap-2 lg:gap-3">
                <h3 class="text-white font-semibold">Location</h3>
                <a href="{{route('contact')}}">Kilimanjaro</a>
                <a href="{{route('contact')}}">Tanzania</a>
                <a href="{{route('contact')}}">P.O.BOX 123</a>
                <a href="{{route('contact')}}">Lindi Street</a>
            </div>
        </div>
    </section>
    <div class="w-full flex items-centerbg-slate-300">
        <div class="md:w-1/4 md:py-4 md:pl-4 md:flex gap-4 text-lg text-white md:bg-hd hidden md:block">
            <i class="fa-brands fa-facebook"></i>
            <i class="fa-brands fa-linkedin"></i>
            <i class="fa-brands fa-whatsapp"></i>
            <i class="fa-brands fa-instagram"></i>
            <i class="fa-brands fa-twitter"></i>
        </div>
        <div class="text-center mt-2 md:ml-auto">
            <a href="#"><span>Copyrights&copy;2025. All rights reserved | Privacy policy | Terms &
                    conditions</span></a>
        </div>
    </div>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>

</html>
