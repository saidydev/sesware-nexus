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
        <section class="text-white w-full h-auto bg-cover  bg-blue-200" style="background-image: linear-gradient(to right,rgba(175, 111, 238, 0.199),hsla(266, 89%, 11%, 0.944)),url('./images/KANYASI_66.jpg')">
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
                    <h2 class="text-mobilehead lg:text-headimg font-headimg" data-aos="fade-up" data-aos-duration="3000">Services</h2>
                    <h2><hr class="w-6 h-1 lg:w-8 lg:h-2 bg-white border-none" style="margin: 0 auto"></h2>
                    <p class="text-md font-heading  lg:block" data-aos="fade-up" data-aos-duration="3000">We provide innovative idea and scalable software solutions to drive business growth.Specializing in delivering high-quality software solutions toilored to meet the unique needs of business across the industry.</p>
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



        <section class="px-mob py-top lg:px-banner lg:py-top font-content">
            <div class="flex flex-col gap-4 lg:flex lg:flex-row lg:gap-4">
                <div class="lg:w-1/2 flex lg:flex-row lg:gap-4">
                    <div class="hidden md:flex md:flex-col md:gap-3 lg:w-2/6">
                        <div class="flex flex-col lg:gap-3 text-center bg-purple-100 rounded-sm lg:p-4">
                            <i class="fa-solid fa-file text-xl"></i>
                            <h1 class="text-2xl font-medium">98%</h1>
                            <span>Successfull clients</span>
                        </div>
                        <div class="flex flex-col lg:gap-3 text-center bg-purple-100 rounded-sm lg:p-4">
                            <i class="fa-solid fa-file text-xl"></i>
                            <h1 class="text-2xl font-medium">98%</h1>
                            <span>Positive reviews</span>
                        </div>
                        <div class="flex flex-col lg:gap-3 text-center bg-hd text-white rounded-sm lg:p-4">
                            <i class="fa-solid fa-file text-xl"></i>
                            <h1 class="text-2xl font-medium">98%</h1>
                            <span>Successfull clients</span>
                        </div>
                    </div>
                    <div class="w-full h-img lg:w-3/5 lg:h-auto rounded-lg bg-cover bg-center" style="background-image: url('./images/KANYASI_36.jpg')"></div>
                </div>
                <div class="flex flex-col gap-3 lg:gap-3 lg:w-1/2">
                    <h2 class="text-2xl lg:text-3xl font-headimg">Take your Business To The Next Level ! </h2>
                    <hr class="h-1 w-20 lg:h-1.5 lg:w-20 bg-hd">
                    <p class="font-content text-md">We are commited in delivering exceptional customer service to ensure a seamless experience with our software solutions.Our dedicated support team is always ready to assist you with any querries,technical issues, or guidance you may need.</p>
                    <div class="flex flex-col gap-3 lg:flex-row lg:gap-20">
                        <div class="flex flex-col">
                            <div class="grid grid-cols-1 gap-3 lg:grid-cols-2 gap-6">
                                <div class="flex gap-2 lg:gap-1 items-center">
                                    <i class="fa-solid fa-check-circle text-lg text-hd rounded-circle"></i>
                                    <span class="font-content text-md font-medium">24/7 hours</span>
                                </div>
                                <div class="flex gap-2 lg:gap-1items-center">
                                    <i class="fa-solid fa-check-circle text-lg text-hd rounded-circle"></i>
                                    <span class="font-content text-md font-medium">Monday - Friday</span>
                                </div>
                                <div class="flex gap-2 lg:gap-1 items-center">
                                    <i class="fa-solid fa-check-circle text-lg text-hd rounded-circle"></i>
                                    <span class="font-content text-md font-medium">+255 123 456 789</span>
                                </div>
                                <div class="flex gap-2 lg:gap-1 items-center">
                                    <i class="fa-solid fa-check-circle text-lg text-hd rounded-circle"></i>
                                    <span class="font-content text-md font-medium">sesware@gmail.com</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a href="{{route('contact')}}" class="w-max md:mt-2 p-2 rounded-sm lg:w-max text-md font-content lg:p-2 lg:rounded-sm text-white hover:bg-p" style="background-image: linear-gradient(to right,#9129f8d2,hsla(266, 89%, 11%, 0.944))">Talk with Customer Service</a>
                </div>
            </div>
        </section>



        <section class="px-mob py-top lg:px-banner lg:py-top font-content">
            <div class="flex flex-col gap-1">
                <h2 class="text-xl lg:text-xl text-hd font-headimg">Which Services we Provide </h2>
                <h2 class="text-2xl lg:text-3xl font-headimg">Modern & Intuitive Technology <br> <span class="text-hd">Solution</span> Available</h2>
            </div>
            <div class="grid grid-cols-1 gap-3 mt-small lg:grid lg:grid-cols-4 lg:gap-6 lg:mt-small">
                <a href="">
                    <div class="bg-hd p-7 lg:p-5 rounded-md lg:rounded-md flex flex-col lg:gap-3 transition-all duration-300 hover:bg-p">
                        <i class="fa-solid fa-paint-brush text-2xl text-white mb-small"></i>
                        <h2 class="text-lg lg:text-lg text-white font-medium font-content">Web Design</h2>
                        <div class="flex justify-between items-center">
                            <div class="font-content">
                                <span class="text-slate-300 text-md">Stunning, user-friendly website designs that captivate and engage.</span>
                            </div>
                        </div>
                    </div>
                </a>
                <a href="">
                    <div class="bg-hd p-7 lg:p-5 rounded-md lg:rounded-md flex flex-col lg:gap-3 transition-all duration-300 hover:bg-p">
                        <i class="fa-solid fa-code text-2xl text-white mb-small"></i>
                        <h2 class="text-lg lg:text-lg text-white font-medium font-content">Web Development</h2>
                        <div class="flex justify-between items-center">
                            <div class="font-content">
                                <span class="text-slate-300 text-md">Fast secure and scalable websites tailored to your needs are developed.</span>
                            </div>
                            {{-- <div>
                                <i class="fa-solid fa-arrow-up-from-bracket p-3 lg:p-3 bg-p rounded-circle text-white hover:bg-hd"></i>
                            </div> --}}
                        </div>
                    </div>
                </a>
                <a href="">
                    <div class="bg-hd p-7 lg:p-5 rounded-md lg:rounded-md flex flex-col lg:gap-3 transition-all duration-300 hover:bg-p">
                        <i class="fa-solid fa-laptop-code text-2xl text-white mb-small"></i>
                        <h2 class="text-lg lg:text-lg text-white font-medium font-content">Software Development</h2>
                        <div class="flex justify-between items-center">
                            <div class="font-content">
                                <span class="text-slate-300 text-md">Custom software solutions to streamline operations and boost efficiency.</span>
                            </div>
                            {{-- <div>
                                <i class="fa-solid fa-arrow-up-from-bracket p-3 lg:p-3 bg-p rounded-circle text-white hover:bg-hd"></i>
                            </div> --}}
                        </div>
                    </div>
                </a>
                <a href="">
                    <div class="bg-hd p-7 lg:p-5 rounded-md lg:rounded-md flex flex-col lg:gap-3 transition-all duration-300 hover:bg-p">
                        <i class="fa-solid fa-mobile-alt text-2xl text-white mb-small"></i>
                        <h2 class="text-lg lg:text-lg text-white font-medium font-content">App Development</h2>
                        <div class="flex justify-between items-center">
                            <div class="font-content">
                                <span class="text-slate-300 text-md">High performance apps that for seamless user experience are made.</span>
                            </div>
                            {{-- <div>
                                <i class="fa-solid fa-arrow-up-from-bracket p-3 lg:p-3 bg-p rounded-circle text-white hover:bg-hd"></i>
                            </div> --}}
                        </div>
                    </div>
                </a>
                <a href="">
                    <div class="bg-hd p-7 lg:p-5 rounded-md lg:rounded-md flex flex-col lg:gap-3 transition-all duration-300 hover:bg-p">
                        <i class="fa-solid fa-search text-2xl text-white mb-small"></i>
                        <h2 class="text-lg lg:text-lg text-white font-medium font-content">SEO</h2>
                        <div class="flex justify-between items-center">
                            <div class="font-content">
                                <span class="text-slate-300 text-md">Improve search ranking and drive organic traffic through Search Engine Optimization.</span>
                            </div>
                            {{-- <div>
                                <i class="fa-solid fa-arrow-up-from-bracket p-3 lg:p-3 bg-p rounded-circle text-white hover:bg-hd"></i>
                            </div> --}}
                        </div>
                    </div>
                </a>
                <a href="">
                    <div class="bg-hd p-7 lg:p-5 rounded-md lg:rounded-md flex flex-col lg:gap-3 transition-all duration-300 hover:bg-p">
                        <i class="fa-solid fa-user-tie text-2xl text-white mb-small"></i>
                        <h2 class="text-lg lg:text-lg text-white font-medium font-content">IT consulting</h2>
                        <div class="flex justify-between items-center">
                            <div class="font-content">
                                <span class="text-slate-300 text-md">Expert guidance to optimize technology and digital transformation.</span>
                            </div>
                            {{-- <div>
                                <i class="fa-solid fa-arrow-up-from-bracket p-3 lg:p-3 bg-p rounded-circle text-white hover:bg-hd"></i>
                            </div> --}}
                        </div>
                    </div>
                </a>
                <a href="">
                    <div class="bg-hd p-7 lg:p-5 rounded-md lg:rounded-md flex flex-col lg:gap-3 transition-all duration-300 hover:bg-p">
                        <i class="fa-solid fa-server text-2xl text-white mb-small"></i>
                        <h2 class="text-lg lg:text-lg text-white font-medium font-content">Hosting service</h2>
                        <div class="flex justify-between items-center">
                            <div class="font-content">
                                <span class="text-slate-300 text-md">Reliable and secure hosting for uninterupted online presence with low cost.</span>
                            </div>
                            {{-- <div>
                                <i class="fa-solid fa-arrow-up-from-bracket p-3 lg:p-3 bg-p rounded-circle text-white hover:bg-hd"></i>
                            </div> --}}
                        </div>
                    </div>
                </a>
                <a href="">
                    <div class="bg-hd p-7 lg:p-5 rounded-md lg:rounded-md flex flex-col lg:gap-3 transition-all duration-300 hover:bg-p">
                        <i class="fa-solid fa-object-group text-2xl text-white mb-small"></i>
                        <h2 class="text-lg lg:text-lg text-white font-medium font-content">UX/UI design</h2>
                        <div class="flex justify-between items-center">
                            <div class="font-content">
                                <span class="text-slate-300 text-md">Intuitive and engaging designs that enhances user experience to customers.</span>
                            </div>
                            {{-- <div>
                                <i class="fa-solid fa-arrow-up-from-bracket p-3 lg:p-3 bg-p rounded-circle text-white hover:bg-hd"></i>
                            </div> --}}
                        </div>
                    </div>
                </a>
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
