<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @vite('resources/css/app.css')
        <title>Laravel</title>
        <link rel="stylesheet" href="../fontawesome-free-6.5.1-web/css/all.css">
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=Roboto:400,500,600&display=swap" rel="stylesheet"/>
        <link href="https://fonts.bunny.net/css?family=Merriweather:400,500,600&display=swap" rel="stylesheet"/>
        {{-- <style>
            p{
                color: #c892f2;
            }
        </style> --}}
    </head>
    <body class="p-0 m-0 list-none">
        {{-- HEADER/NAV BAR --}}
        <section class="text-white w-full h-auto bg-cover bg-center bg-blue-200" style="background-image: linear-gradient(to right,rgba(175, 111, 238, 0.199),hsla(266, 89%, 11%, 0.944)),url('./images/KANYASI_63.jpg')">
            <nav class="mx-0 px-6 py-2 lg:text-inherit flex justify-between lg:py-6 lg:mx-banner lg:flex lg:justify-between lg:gap-6 items-center">
                <div class="h-10 w-1/4  lg:h-16 lg:w-1/5 bg-cover bg-center" style="background-image: url('./images/SIDE-01.png')">
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

            <div class="flex flex-col gap-4 mx-4 mt-banner pb-10 lg:flex lg:flex-row lg:mx-banner lg:pl-10 lg:mt-banner lg:pb-14 items-center ">
                <div class="flex flex-col gap-4 lg:w-4/5 text-center" style="margin: 5% auto">
                    <h2 class="text-mobilehead lg:text-headimg font-headimg" data-aos="fade-up" data-aos-duration="3000">Innovative <span class="ss"> Tech Solutions </span> for a Smarter Furture.</h2>
                    <h2><hr class="w-6 h-1 lg:w-8 lg:h-2 bg-white border-none" style="margin: 0 auto"></h2>
                    <p class="text-md font-heading lg:block" data-aos="fade-up" data-aos-duration="3000">We create smart,scalable, and future-ready solutions that drive business success.We turn challenges into opportunities with cutting-edge technology.</p>
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
                        <h2 class="text-lg font-content text-slate-400">Services</h2>
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

        <section class="px-mob py-top lg:px-banner lg:py-top font-content flex flex-col gap-4">
            <div class="flex flex-col gap-3 lg:flex lg:flex-row lg:gap-8 lg:item-center font-content">
                <div class="flex flex-col gap-3 w-full lg:gap-3 lg:w-1/2">
                    <h2 class="text-2xl lg:text-3xl font-headimg">Take your Business To The Next Level! </h2>
                    <hr class="h-1 w-20 lg:h-1.5 lg:w-20 bg-hd">
                    <p class="font-content text-md">Success in toda's digital world requires innovation,adaptability and the right tecthnology. Here at SESWARE we help business transform,optimize, and grow by leveraging the power of cutting-edge digital solutions. Let's push boundaries and build the future together!</p>
                    <div class="flex flex-col gap-3 lg:flex-row lg:gap-20">
                        <div class="flex flex-col gap-2">
                            <h3 class="text-lg font-content">Our Vision </h3>
                            <div class="flex flex-col gap-1">
                                <div class="flex gap-1 items-center">
                                    <i class="fa-solid fa-check-circle text-lg text-hd rounded-circle"></i>
                                    <span class="font-content text-md">To be a global leader in digital transformation.</span>
                                </div>
                            </div>
                        </div>
                        <div class="flex flex-col gap-2">
                            <h3 class="text-lg font-content">Our Mission </h3>
                            <div class="flex flex-col gap-1">
                                <div class="flex gap-1 items-center">
                                    <i class="fa-solid fa-check-circle text-lg text-hd rounded-circle"></i>
                                    <span class="font-content text-md">Empowering business with cutting-edge digital solutioins</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="w-full h-img lg:w-1/2 rounded-lg bg-cover bg-center" style="background-image: linear-gradient(to right,rgba(175, 111, 238, 0.199),hsla(266, 89%, 11%, 0.547)),url('./images/KANYASI_50.jpg')">
                </div>
            </div>

            <div class="lg:flex lg:flex-row lg:gap-8 lg:item-center font-content">
                <div class="lg:w-1/2 rounded-lg bg-cover bg-center" style="background-image: linear-gradient(to right,rgba(175,111, 238, 0.199),hsla(266, 91%, 18%, 0.562)),url('./images/KANYASI_50.jpg')"></div>
                <div class="w-full lg:w-1/2 flex flex-col gap-6">
                    <div class="p-1 flex bg-slate-200 items-center rounded-md lg:text-lg">
                        <div class="p-4 w-2/5 lg:p-5 bg-hd lg:w-2/5 rounded-md">
                            <h1 class="text-center text-white">3 <br> YEARS OF <br>Experience</h1>
                        </div>
                        <h2 class="text-lg p-4 lg:text-xl font-medium font-headimg lg:p-5">Our Main Goal is To enhance Business through Technology</h2>
                    </div>
                    <div class="flex flex-col gap-3">
                        <h2 class="text-xl lg:text-3xl font-heading">How We Inhance Business via Technology?</h2>
                        <hr class="h-1 w-20 lg:h-1.5 lg:w-20 bg-hd">
                        <p class="text-md">Our solutions help businesses grow by enhancing efficiency,streamlining operationss,and improve-decision making.Through different solutions and technology we drive into innovation and scalability.</p>
                    </div>
                </div>
            </div>
        </section>

        {{-- CHOOSING US --}}

        <section class="px-mob py-top lg:py-6 lg:px-banner font-content">
            <span>WHY CHOOSING US</span>
            <h2 class="text-xl mb-small lg:text-3xl font-medium font-headimg lg:mb-small">Why <a href="" class="text-hd">sesware</a> is The Right Choice for you</h2>
            <div class="flex  flex-col gap-3 lg:flex lg:flex-row lg:gap-4">
                <div class="w-full lg:w-service flex flex-col lg:flex-col">
                    <div class="grid grid-cols-1 gap-3 lg:grid-cols-2 lg:gap-4">
                        <div class="bg-slate-200 rounded-sm p-3 lg:p-4">
                            <i class="fa-solid fa-lock p-2 lg:p-3 border-2 border-hd text-hd rounded-circle"></i>
                            <h2 class="text-lg font-medium font-content mt-3 mb-3 text-p">Innovative solutions</h2>
                            <p>We stay ahead of industry trends,using the latest technology to develop solutions that drive business efficiency and success.</p>
                        </div>
                        <div class="bg-slate-200 rounded-sm p-3 lg:p-4">
                            <i class="fa-solid fa-lock p-2 lg:p-3 border-2 border-hd text-hd rounded-circle"></i>
                            <h2 class="text-lg font-medium font-content mt-3 mb-3 text-p">Scalability and Flexibility</h2>
                            <p>Our solutions are designed to grow with your business,ensuring long-term adaptability and seamless expansion.</p>
                        </div>
                    </div>
                    <div class="bg-slate-200 rounded-sm p-3 lg:p-4 mt-top lg:mt-small">
                        <i class="fa-solid fa-lock p-2 lg:p-3 border-2 border-hd text-hd rounded-circle"></i>
                        <h2 class="text-lg font-medium font-content mt-3 mb-3 text-p">Reliable Support</h2>
                        <p>We provide continous assistance,maintanance,and updates to keep your technology running smoothly and efficiency.Through our customer services we can provide the best support.</p>
                    </div>
                </div>
                <div class="w-full flex-col lg:w-2/5 flex lg:flex-col">
                    <div class="bg-hd text-white rounded-sm p-3 lg:p-4">
                        <i class="fa-solid fa-lock p-3 lg:p-3 border-2 border-white text-white rounded-circle"></i>
                        <h2 class="text-lg font-medium font-content mt-3 mb-3 text-white">Fast and Secured</h2>
                        <p>Solutions are optimized for high performance,ensuring seamless operations and quick response times.</p>
                        <p class="my-top lg:mb-8">We implement advanced security measures to protect your data,ensuring safe and trustworthy digital experience.</p>
                        <a href="{{route('contact')}}" class="hidden lg:block bg-p lg:p-3 text-white rounded-sm text-center" style="background-image: linear-gradient(to right,#9129f8d2,hsla(266, 89%, 11%, 0.944))"><button>Work with Us</button></a>
                    </div>
                </div>
            </div>
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
