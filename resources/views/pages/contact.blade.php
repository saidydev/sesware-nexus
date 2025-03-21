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
        <section class="text-white w-full h-auto bg-cover bg-center bg-blue-200" style="background-image: linear-gradient(to right,rgba(175, 111, 238, 0.199),hsla(266, 89%, 11%, 0.944)),url('./images/KANYASI_66.jpg')">
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
                    <h2 class="text-mobilehead lg:text-headimg font-headimg" data-aos="fade-up" data-aos-duration="3000">Get in Touch - Let's Build Something Amazing Together!</h2>
                    <h2><hr class="w-6 h-1 lg:w-8 lg:h-2 bg-white border-none" style="margin: 0 auto"></h2>
                    <p class="text-md font-heading" data-aos="fade-up" data-aos-duration="3000">Have a questions or need a custom solutions ? Our team is ready to assist you, contact us for advice,technical support.</p>
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



        <section class="px-4 py-top lg:px-banner lg:py-top font-content">
            <form action="{{ route('contact')}}" method="POST">
                @csrf
           <div class="flex flex-col gap-3 lg:gap-4">
            <div class="grid grid-cols-1 gap-4 lg:grid-cols-3 lg:gap-4">
                <div class="flex flex-col gap-1">
                    <label class="font-content">Name (required)</label>
                    <input type="text" placeholder="Your name" required class="h-12 lg:h-12 bg-slate-200 text-black rounded-sm outline-none pl-2 lg:w-full" name="name" id="name">
                </div>
                <div class="flex flex-col gap-1">
                    <label class="font-content">Company (required)</label>
                    <input type="text"  placeholder="Your company name" required class="h-12 lg:h-12 bg-slate-200 text-black rounded-sm outline-none pl-2 lg:w-full" name="company" id="company">
                </div>
                <div class="flex flex-col gap-1">
                    <label class="font-content">Email (required)</label>
                    <input type="email"  placeholder="Your working email" required class="h-12 lg:h-12 bg-slate-200 text-black rounded-sm outline-none pl-2 lg:w-full" name="email" id="email">
                </div>
            </div>
            <div class="grid-cols-1 gap-3 grid lg:grid-cols-3 lg:gap-4">
                <div class="flex flex-col gap-1">
                    <label class="font-content">phone (required)</label>
                    <input type="text" placeholder="Your phone" class="h-12 lg:h-12 bg-slate-200 text-black rounded-sm outline-none pl-2 lg:w-full" name="phone" id="phone">
                </div>
                <div class="flex flex-col gap-1">
                    <label class="font-content">subject (optional)</label>
                    <input type="text"  placeholder="Subject" class="h-12 lg:h-12 bg-slate-200 text-black rounded-sm outline-none pl-2 lg:w-full" name="subject" id="subject">
                </div>
                <div class="flex flex-col gap-1">
                    <label class="font-content">Choose a Budget (TZS)</label>
                    <select class="h-12 lg:h-12 bg-slate-200 text-black rounded-sm outline-none pl-2 lg:w-full" name="budget" id="budget">
                        <option value="less than 500k">Less than 500k</option>
                        <option value="Over than 500k">Over than 500k</option>
                        <option value="1M-above">1M - above</option>
                    </select>
                </div>
            </div>
            <div class="flex flex-col gap-2">
                <label>Project details</label>
                <textarea placeholder="Brief project details" class="h-36 lg:h-40 pt-2 bg-slate-200 text-black rounded-sm outline-none pl-2 lg:w-full" name="details" id="details"></textarea>
            </div>
            <button class="w-max p-3 rounded-sm lg:w-32 text-md font-content lg:p-2 lg:rounded-md text-white hover:bg-p" style="background-image: linear-gradient(to right,#9129f8d2,hsla(266, 89%, 11%, 0.944))">Get a Quote</button>
           </div>
        </form>
        </section>

        <section>
            <div class="flex flex-col gap-3 lg:flex-row lg:gap-4">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7274.357151102437!2d37.31912114007699!3d-3.3030135583088223!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1839df349756f46f%3A0x611a580d0cca73ed!2sMwenge%20Catholic%20University!5e0!3m2!1sen!2stz!4v1738235921416!5m2!1sen!2stz" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="w-full lg:w-1/2"></iframe>
                <div class="hidden lg:grid lg:grid-cols-3 lg:gap-4 lg:w-1/2">
                    <div class="flex flex-col lg:gap-3">
                        <h3 class="text-hd font-semibold">Location</h3>
                        <a href="">Tanzania</a>
                        <a href="">Kilimanjaro,Tanzania</a>
                    </div>
                    <div class="flex flex-col lg:gap-3">
                        <h3 class="text-hd font-semibold">Contacts</h3>
                        <a href="">+255 612 345 678</a>
                        <a href="">sesware@gmail.com</a>
                    </div>
                    <div class="flex flex-col lg:gap-3">
                        <h3 class="text-hd font-semibold">Socials</h3>
                        <a href="">
                <i class="fa-brands fa-facebook"></i>
                        </a>
                        <a href="">
                <i class="fa-brands fa-linkedin"></i>
                        </a>
                        <a href="">
                <i class="fa-brands fa-whatsapp"></i>
                        </a>
                        <a href="">
                <i class="fa-brands fa-instagram"></i>
                        </a>
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
    </body>
</html>
