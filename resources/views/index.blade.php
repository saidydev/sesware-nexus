@extends('layouts.guest-layout')
@section('content')
    <div class="w-full h-[300px] md:h-[400px] lg:h-[500px] overflow-hidden relative">
        <img src={{ asset('images/KANYASI_66.jpg') }} alt=""
            class="w-full object-cover h-[300px] md:h-[400px] lg:h-[500px]">
        <div class="dark-overlay absolute bottom-5">
            <div class="center-div lg:w-4/5 mx-auto">
                <div class="gap-4 my-4 text-center text-white" data-aos="fade-up" data-aos-duration="3000">
                    <h2 class="text-mobilehead lg:text-headimg font-headimg">
                        <span class="ss"> Your Hub For </span> Smart Software Solutions.
                    </h2>
                    <p class="text-2xl hidden md:block">From robust web
                        applications to engaging brand experiences, Sesware Nexus provide the technology and design
                        expertise you need to succeed in today's digital landscape.</p>
                    <div class="w-fit mx-auto my-4">
                        <button
                            class="py-3 px-4 bg-blue-950 hover:bg-blue-900 rounded-full font-semibold text-xl transition-colors duration-1000">
                            Get In Touch
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- ABOUT --}}
    <section class="px-4 py-top md:px-banner md:py-top font-content">
        <div class="flex flex-col gap-4 md:flex-row md:gap-8">
            <div class="w-full md:w-1/2 hidden md:block" data-aos="fade-right" data-aos-duration="3000">
                <div class="w-11/12 mx-auto h-80 overflow-hidden">
                    <img src="{{ asset('images/KANYASI_66.jpg') }}" alt="" class="h-full object-cover rounde-md">
                </div>
            </div>
            <div class="w-full md:w-1/2">
                <h2 class="text-lg text-blue-900 font-semibold mb-4 uppercase tracking-wide">Welcome to Sesware Nexus</h2>
                <p class="text-gray-600 text-justify md:text-lg">Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                    Esse
                    quia quas deleniti. Iusto dignissimos dolor nesciunt praesentium, recusandae neque alias autem beatae
                    cumque eius vero ratione mollitia quos laboriosam laudantium?Omnis excepturi doloribus assumenda
                    laudantium voluptatum consectetur alias exercitationem iste quam voluptate obcaecati ad, nulla atque ea
                    officiis nihil. A aspernatur sint molestias velit, labore dolorem assumenda quam vero quidem.</p>
            </div>
        </div>
    </section>

    {{-- SERVICES --}}
    <section class="md:py-16">
        <div class="w-11/12 md:w-10/12 mx-auto flex flex-col gap-4">
            <div class="w-11/12 md:w-8/12 mx-auto text-center my-2">
                <h2 class="text-blue-900 font-semibold mb-4 uppercase tracking-wide">Our Services</h2>
                <p class="text-lg md:text-2xl font-semibold text-gray-700">We build custom software solutions that
                    streamline your
                    operations, improve efficiency, and provide valuable insights</p>
            </div>
            <div class="grid grid-cols-1 gap-3 md:grid md:grid-cols-2 md:gap-4 lg:grid lg:grid-cols-3 lg:gap-4 text-md">
                <div class="p-6 bg-gradient-to-br from-blue-100 to-blue-50 rounded-lg hover:shadow-md shadow-blue-200">
                    <a href="">
                        <div class="flex flex-col gap-2">
                            <i class="fa fa-globe text-3xl text-blue-900 rounded-sm text-lg my-2"></i>
                            <h2 class="text-lg tracking-wide text-blue-900 font-semibold">Web Application Development</h2>
                            <p class="text-gray-600 text-justify">Designing, developing, and deploying custom web-based
                                software to automate business processes, manage data, and facilitate online transactions.
                            </p>
                        </div>
                    </a>
                </div>
                <div class="p-6 bg-gradient-to-br from-blue-100 to-blue-50 rounded-lg hover:shadow-md shadow-blue-200">
                    <a href="">
                        <div class="flex flex-col gap-2">
                            <i class="fa fa-mobile-phone text-3xl text-blue-900 rounded-sm text-lg my-2"></i>
                            <h2 class="text-lg tracking-wide text-blue-900 font-semibold">Mobile App Development</h2>
                            <p class="text-gray-600 text-justify">Creating native or cross-platform mobile applications for
                                smartphones and tablets to enhance customer engagement.</p>
                        </div>
                    </a>
                </div>
                <div class="p-6 bg-gradient-to-br from-blue-100 to-blue-50 rounded-lg hover:shadow-md shadow-blue-200">
                    <a href="">
                        <div class="flex flex-col gap-2">
                            <i class="fa fa-palette text-3xl text-blue-900 rounded-sm text-lg my-2"></i>
                            <h2 class="text-lg tracking-wide text-blue-900 font-semibold">Graphic Design</h2>
                            <p class="text-gray-600 text-justify">UI/UX Designing for software applications and websites,
                                developing branding identities, and desiging prints and digital marketing materials.</p>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>

    {{-- Call to partner Action --}}
    <section class="mx-auto p-6 md:p-12 flex flex-col md:flex-row my-12 bg-gradient-to-tl from-blue-50 to-blue-100">
        <div class="w-full md:w-1/3 my-2 p-4">
            <i class="fa fa-handshake text-3xl md:text-5xl text-blue-900"></i>
            <h3 class="text-3xl md:text-5xl text-blue-900 font-semibold">Partner With Us</h3>

            <div class="w-fit my-4 md:my-8">
                <button
                    class="py-3 px-4 bg-blue-950 hover:bg-blue-900 rounded-full font-semibold text-lg md:text-xl transition-colors duration-1000 text-white">
                    Get In Touch
                </button>
            </div>
        </div>
        <div class="w-full md:w-2/3 my-2 flex flex-col md:flex-row flex-wrap text-font">
            <div class="w-full md:w-1/2 my-2">
                <div
                    class="w-11/12 mx-auto flex rounded-md p-3 bg-gradient-to-tr from-blue-50 to-blue-200 border border-blue-900 flex-col hover:scale-105 transition-transform duration-500">
                    <i class="fa fa-puzzle-piece text-blue-900 m-2 text-xl"></i>
                    <span class="text-font text-lg">Tailored software and design to meet your unique business needs</span>
                </div>
            </div>
            <div class="w-full md:w-1/2 my-2">
                <div
                    class="w-11/12 mx-auto flex rounded-md p-3 bg-gradient-to-tr from-blue-100 to-blue-200 border border-blue-900 flex-col hover:scale-105 transition-transform duration-500">
                    <i class="fa fa-clock text-blue-900 m-2 text-xl"></i>
                    <span class="text-font text-lg">On-time project delivery and ongoing support</span>
                </div>
            </div>
            <div class="w-full md:w-1/2 my-2">
                <div
                    class="w-11/12 mx-auto flex rounded-md p-3 bg-gradient-to-tr from-blue-100 to-blue-200 border border-blue-900 flex-col hover:scale-105 transition-transform duration-500">
                    <i class="fa fa-users text-blue-900 m-2 text-xl"></i>
                    <span class="text-font text-lg">We work closely with you to ensure your vision is realized</span>
                </div>
            </div>
            <div class="w-full md:w-1/2 my-2">
                <div
                    class="w-11/12 mx-auto flex rounded-md p-3 bg-gradient-to-tr from-blue-100 to-blue-200 border border-blue-900 flex-col hover:scale-105 transition-transform duration-500">
                    <i class="fa fa-line-chart text-blue-900 m-2 text-xl"></i>
                    <span class="text-font text-lg">Delivering solutions that drive measurable business growth</span>
                </div>
            </div>

        </div>
    </section>

    {{-- Portfolio --}}
    <section class="py-8 md:py-16">
        <div class="w-11/12 md:w-10/12 mx-auto flex flex-col gap-4">
            <div class="w-11/12 md:w-8/12 mx-auto text-center my-2">
                <h2 class="text-blue-900 font-semibold mb-4 uppercase tracking-wide">Featured Projects</h2>
                <p class="text-lg md:text-2xl font-semibold text-gray-700">Explore some of our best works that brought
                    impact to businesses</p>
            </div>
            <div class="grid grid-cols-1 gap-3 md:grid md:grid-cols-2 md:gap-4 lg:grid lg:grid-cols-3 lg:gap-4 text-md">
                <div
                    class="p-6 bg-gradient-to-br from-blue-100 to-blue-50 rounded-lg hover:shadow-md shadow-blue-200 border-2 hover:border-blue-900">
                    <div class="flex flex-col gap-2">
                        <div class="w-full h-52 overflow-hidden">
                            <img src="{{ asset('images/KANYASI_66.jpg') }}" alt="design mockup" class="w-full h-full object-cover">
                        </div>
                        <h2 class="text-lg tracking-wide text-blue-900 font-semibold">School Website</h2>
                        <p class="text-gray-600 text-justify">Designing, developing, and deploying custom web-based
                            software to automate business processes, manage data, and facilitate online transactions.
                        </p>
                        <div class="w-fit">
                            <a href="">
                                <button
                                    class="py-2 px-4 bg-blue-950 hover:bg-blue-900 rounded-full font-semibold transition-colors duration-1000 text-white flex items-center space-x-3"
                                    target="_blank">
                                    <span>view project</span> <i class="fa fa-arrow-right"></i>
                                </button>
                            </a>
                        </div>
                    </div>
                </div>
                <div
                    class="p-6 bg-gradient-to-br from-blue-100 to-blue-50 rounded-lg hover:shadow-md shadow-blue-200 border-2 hover:border-blue-900">
                    <div class="flex flex-col gap-2">
                        <div class="w-full h-52 overflow-hidden">
                            <img src="{{ asset('images/KANYASI_66.jpg') }}" alt="design mockup" class="w-full h-full object-cover">
                        </div>
                        <h2 class="text-lg tracking-wide text-blue-900 font-semibold">School Website</h2>
                        <p class="text-gray-600 text-justify">Designing, developing, and deploying custom web-based
                            software to automate business processes, manage data, and facilitate online transactions.
                        </p>
                        <div class="w-fit">
                            <a href="">
                                <button
                                    class="py-2 px-4 bg-blue-950 hover:bg-blue-900 rounded-full font-semibold transition-colors duration-1000 text-white flex items-center space-x-3"
                                    target="_blank">
                                    <span>view project</span> <i class="fa fa-arrow-right"></i>
                                </button>
                            </a>
                        </div>
                    </div>
                </div>
                <div
                    class="p-6 bg-gradient-to-br from-blue-100 to-blue-50 rounded-lg hover:shadow-md shadow-blue-200 border-2 hover:border-blue-900">
                    <div class="flex flex-col gap-2">
                        <div class="w-full h-52 overflow-hidden">
                            <img src="{{ asset('images/KANYASI_66.jpg') }}" alt="design mockup"
                                class="w-full h-full object-cover">
                        </div>
                        <h2 class="text-lg tracking-wide text-blue-900 font-semibold">School Website</h2>
                        <p class="text-gray-600 text-justify">Designing, developing, and deploying custom web-based
                            software to automate business processes, manage data, and facilitate online transactions.
                        </p>
                        <div class="w-fit">
                            <a href="">
                                <button
                                    class="py-2 px-4 bg-blue-950 hover:bg-blue-900 rounded-full font-semibold transition-colors duration-1000 text-white flex items-center space-x-3"
                                    target="_blank">
                                    <span>view project</span> <i class="fa fa-arrow-right"></i>
                                </button>
                            </a>
                        </div>
                    </div>
                </div>
                <div
                    class="p-6 bg-gradient-to-br from-blue-100 to-blue-50 rounded-lg hover:shadow-md shadow-blue-200 border-2 hover:border-blue-900">
                    <div class="flex flex-col gap-2">
                        <div class="w-full h-60 overflow-hidden">
                            <img src="{{ asset('images/KANYASI_66.jpg') }}" alt="design mockup"
                                class="w-full h-full object-cover">
                        </div>
                        <h2 class="text-lg tracking-wide text-blue-900 font-semibold">Product Poster</h2>
                    </div>
                </div>
                <div
                    class="p-6 bg-gradient-to-br from-blue-100 to-blue-50 rounded-lg hover:shadow-md shadow-blue-200 border-2 hover:border-blue-900">
                    <div class="flex flex-col gap-2">
                        <div class="w-full h-60 overflow-hidden">
                            <img src="{{ asset('images/KANYASI_66.jpg') }}" alt="design mockup"
                                class="w-full h-full object-cover">
                        </div>
                        <h2 class="text-lg tracking-wide text-blue-900 font-semibold">Company Logo</h2>
                    </div>
                </div>
                <div
                    class="p-6 bg-gradient-to-br from-blue-100 to-blue-50 rounded-lg hover:shadow-md shadow-blue-200 border-2 hover:border-blue-900">
                    <div class="flex flex-col gap-2">
                        <div class="w-full h-60 overflow-hidden">
                            <img src="{{ asset('images/KANYASI_66.jpg') }}" alt="design mockup"
                                class="w-full h-full object-cover">
                        </div>
                        <h2 class="text-lg tracking-wide text-blue-900 font-semibold">Advertisement Banners</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- tools --}}
    <section class="py-8 md:py-16">
        <div class="w-11/12 md:w-10/12 mx-auto flex flex-col gap-4">
            <div class="w-11/12 md:w-8/12 mx-auto text-center my-2">
                <h2 class="text-blue-900 font-semibold mb-4 uppercase tracking-wide">tools</h2>
                <p class="text-lg md:text-2xl font-semibold text-gray-700">Technologies We Work With</p>
            </div>

            <div class="w-full flex flex-wrap justify-center">
                <div class="w-1/2 md:w-1/4 lg:w-1/5 my-2">
                    <div
                        class="w-11/12 mx-auto text-gray-600 flex flex-col items-center space-y-2 my-4 hover:bg-gray-50 p-2 rounded-md">
                        <i class="fab fa-react text-5xl"></i>
                        <h2 class="text-lg tracking-wide font-semibold">React</h2>
                        <p class="text-lg">Web Development</p>
                    </div>
                </div>
                <div class="w-1/2 md:w-1/4 lg:w-1/5 my-2">
                    <div
                        class="w-11/12 mx-auto text-gray-600 flex flex-col items-center space-y-2 my-4 hover:bg-gray-50 p-2 rounded-md">
                        <i class="fab fa-node-js text-5xl"></i>
                        <h2 class="text-lg tracking-wide font-semibold">Node.js</h2>
                        <p class="text-lg">Web Development</p>
                    </div>
                </div>
                <div class="w-1/2 md:w-1/4 lg:w-1/5 my-2">
                    <div
                        class="w-11/12 mx-auto text-gray-600 flex flex-col items-center space-y-2 my-4 hover:bg-gray-50 p-2 rounded-md">
                        <i class="fab fa-laravel text-5xl"></i>
                        <h2 class="text-lg tracking-wide font-semibold">Laravel</h2>
                        <p class="text-lg">Web Development</p>
                    </div>
                </div>
                <div class="w-1/2 md:w-1/4 lg:w-1/5 my-2">
                    <div
                        class="w-11/12 mx-auto text-gray-600 flex flex-col items-center space-y-2 my-4 hover:bg-gray-50 p-2 rounded-md">
                        <i class="fab fa-react text-5xl"></i>
                        <h2 class="text-lg tracking-wide font-semibold">React Native</h2>
                        <p class="text-lg text-center">Mobile App</p>
                    </div>
                </div>
                <div class="w-1/2 md:w-1/4 lg:w-1/5 my-2">
                    <div
                        class="w-11/12 mx-auto text-gray-600 flex flex-col items-center space-y-2 my-4 hover:bg-gray-50 p-2 rounded-md">
                        <img src="https://www.vectorlogo.zone/logos/tailwindcss/tailwindcss-icon.svg" class="w-12 h-12"
                            alt="Tailwind CSS" />
                        <h2 class="text-lg tracking-wide font-semibold">Tailwind</h2>
                        <p class="text-lg">Web Development</p>
                    </div>
                </div>
                <div class="w-1/2 md:w-1/4 lg:w-1/5 my-2">
                    <div
                        class="w-11/12 mx-auto text-gray-600 flex flex-col items-center space-y-2 my-4 hover:bg-gray-50 p-2 rounded-md">
                        <i class="fab fa-bootstrap text-5xl"></i>
                        <h2 class="text-lg tracking-wide font-semibold">Bootstrap</h2>
                        <p class="text-lg">Web Development</p>
                    </div>
                </div>
                <div class="w-1/2 md:w-1/4 lg:w-1/5 my-2">
                    <div
                        class="w-11/12 mx-auto text-gray-600 flex flex-col items-center space-y-2 my-4 hover:bg-gray-50 p-2 rounded-md">
                        <img src="{{ asset('images/mongo.png') }}" alt="" class="w-14 h-14">
                        <h2 class="text-lg tracking-wide font-semibold">MongoDB</h2>
                        <p class="text-lg">Web Development</p>
                    </div>
                </div>
                <div class="w-1/2 md:w-1/4 lg:w-1/5 my-2">
                    <div
                        class="w-11/12 mx-auto text-gray-600 flex flex-col items-center space-y-2 my-4 hover:bg-gray-50 p-2 rounded-md">
                        <img src="https://www.vectorlogo.zone/logos/mysql/mysql-icon.svg" alt="MySQL"
                            class="w-14 h-14">
                        <h2 class="text-lg tracking-wide font-semibold">mySQL</h2>
                        <p class="text-lg">Web Development</p>
                    </div>
                </div>
                <div class="w-1/2 md:w-1/4 lg:w-1/5 my-2">
                    <div
                        class="w-11/12 mx-auto text-gray-600 flex flex-col items-center space-y-2 my-4 hover:bg-gray-50 p-2 rounded-md">
                        <img src="https://www.vectorlogo.zone/logos/adobe/adobe-icon.svg" alt="Adobe"
                            class="w-14 h-14">
                        <h2 class="text-lg tracking-wide font-semibold">Adobe</h2>
                        <p class="text-lg">Graphic Design</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- testimonials --}}
    <section class="mx-auto p-6 md:p-12 mt-12 bg-gradient-to-tl from-blue-50 to-blue-100">
        <div class="flex flex-col md:flex-row flex-wrap w-full md:w-10/12 mx-auto text-gray-700">
            <div class="w-full text-center md:text-left md:w-1/4 my-4 flex flex-col space-y-1 text-font">
                <span class="text-4xl font-semibold">2024</span>
                <span class="text-xl">Year Founded</span>
            </div>
            <div class="w-full text-center md:text-left md:w-1/4 my-4 flex flex-col space-y-1 text-font">
                <span class="text-4xl font-semibold">3+</span>
                <span class="text-xl">Solutions Developed</span>
            </div>
            <div class="w-full text-center md:text-left md:w-1/4 my-4 flex flex-col space-y-1 text-font">
                <span class="text-4xl font-semibold">{{ date('Y') - 2024 }}+</span>
                <span class="text-xl">Years of Experience</span>
            </div>
            <div class="w-full text-center md:text-left md:w-1/4 my-4 flex flex-col space-y-1 text-font">
                <span class="text-4xl font-semibold">4+</span>
                <span class="text-xl">Technology Experts</span>
            </div>
        </div>

        <div class="w-full md:w-10/12 mx-auto my-4 py-16">
            <div class="w-full flex relative">
                <div class="w-full mx-auto bg-gradient-to-tr from-blue-950 to-blue-900 p-8 rounded-lg text-white slider">
                    <div class="w-full">
                        <div class="flex flex-col md:flex-row gap-4">
                            <div class="w-full md:w-1/5">
                                <img src="{{ asset('images/KANYASI_34.jpg') }}" alt="client"
                                    class="h-32 w-32 md:h-40 md:w-40 object-cover rounded-md">
                            </div>
                            <div class="w-full md:w-4/5 flex flex-col justify-center">
                                <p class="text-lg md:text-3xl text-justify">Lorem ipsum dolor sit amet consectetur
                                    adipisicing
                                    elit. Quisquam
                                    voluptatibus, quos, voluptatum, quisquam voluptatibus quos voluptatum quisquam
                                    voluptatibus quos.</p>
                                <h2 class="text-xl font-semibold mt-4">Client Name</h2>
                                <span class="italic">Manager, MSN Enterprises</span>
                            </div>
                        </div>
                    </div>
                    <div class="w-full">
                        <div class="flex flex-col md:flex-row gap-4">
                            <div class="w-full md:w-1/5">
                                <img src="{{ asset('images/KANYASI_36.jpg') }}" alt="client"
                                    class="h-32 w-32 md:h-40 md:w-40 object-cover rounded-md">
                            </div>
                            <div class="w-full md:w-4/5 flex flex-col justify-center">
                                <p class="text-lg md:text-3xl text-justify">Lorem ipsum dolor sit amet consectetur
                                    adipisicing
                                    elit. Quisquam
                                    voluptatibus, quos, voluptatum, quisquam voluptatibus quos voluptatum quisquam
                                    voluptatibus quos.</p>
                                <h2 class="text-xl font-semibold mt-4">Client Name</h2>
                                <span class="italic">Manager, MSN Enterprises</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="w-fit absolute -top-4 -right-4 bg-blue-900 rounded-full p-2"><i
                        class="fa fa-quote-right text-3xl text-white"></i></div>
            </div>
        </div>

        <div class="w-full md:w-10/12 mx-auto py-12">
            <div class="w-11/12 md:w-8/12 mx-auto text-center my-2">
                <h2 class="text-blue-900 font-semibold mb-4 uppercase tracking-wide text-lg md:text-xl">Ready to transform
                    and bring impact to your business?</h2>
                <p class="text-lg md:text-4xl font-semibold text-gray-700">Let's Discuss Your Project </p>
            </div>
            <div class="w-fit my-8 mx-auto">
                <button
                    class="py-3 px-4 bg-blue-950 hover:bg-blue-900 rounded-full font-semibold text-lg md:text-xl transition-colors duration-1000 text-white">
                    Get In Touch
                </button>
            </div>
        </div>
    </section>
@endsection
