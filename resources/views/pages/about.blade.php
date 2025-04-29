@extends('layouts.guest-layout')
@section('content')
    <div class="w-full overflow-hidden bg-no-repeat bg-center bg-cover"
        style="background-image: url('{{ asset('images/sample-bg.jpg') }}')">
        <div class="w-full">
            <div class="w-11/12 md:w-3/5 mx-auto">
                <div class="my-8 text-center">
                    <h2 class="text-xl font-heading font-semibold tracking-wider text-blue-900 uppercase">
                        About Sesware Nexus
                    </h2>
                    <p class="text-2xl my-2 text-gray-700">Your Partner in Digital Transformation</p>
                    <p class="text-lg text-gray-600 mt-4">Sesware Nexus is a dynamic team of software developers and graphic
                        designers dedicated to empowering businesses in Tanzania with cutting-edge technology and creative
                        solutions.</p>
                    <p class="text-lg text-gray-600 mt-4">Founded in 2024, we combine technical expertise with a passion for
                        design to deliver tailored software applications and impactful brand experiences that drive real
                        results.</p>
                    <p class="text-lg text-gray-600 mt-4">We understand the unique challenges and opportunities of the
                        Tanzanian market, and we're committed to helping businesses thrive in the digital age.</p>
                </div>

                <div class="w-fit mx-auto my-4 py-4 ">
                    <a href="#">
                        <button
                            class="py-3 px-4 bg-blue-950 hover:bg-blue-900 rounded-full font-semibold text-xl transition-colors duration-1000 text-white">
                            Explore Our Services
                        </button>
                    </a>
                </div>
            </div>
        </div>
    </div>

    {{-- our story --}}
    <section class="w-full bg-gradient-to-r from-blue-300 to-blue-100 p-6 md:p-12">
        <div class="w-11/12 md:w-8/12 mx-auto text-center my-2">
            <h2 class="text-blue-900 font-semibold mb-4 uppercase tracking-wide">Our Story</h2>
            <p class="text-lg md:text-2xl font-semibold text-gray-700">What made Sesware Nexus evolve</p>
        </div>
        <div class="w-11/12 md:w-8/12 my-2 text-justify">
            <p class="text-lg text-gray-600 mt-4">Sesware Nexus was born from a shared vision among our Founders to bridge
                the gap between technology and business needs in Tanzania.</p>
            <p class="text-lg text-gray-600 mt-4">Recognizing the growing demand for customized software solutions and
                professional graphic design, we established Sesware Nexus in 2024 to provide local businesses with reliable
                and innovative services.</p>
            <p class="text-lg text-gray-600 mt-4">From our early projects, we focused on Providing Software solutions for
                small to mid-size businesses. Commitment to Quality, Integrity and Collaboration has been a cornerstone of
                our growth.</p>
            <p class="text-lg text-gray-600 mt-4">Sesware Nexus is a trusted partner for businesses across different regions
                and industries in Tanzania, helping them leverage the power of technology and design to achieve their goals.
            </p>
        </div>

        <div class="w-11/12 md:w-8/12 my-4">
            <h4 class="text-lg md:text-xl font-semibold text-gray-700 mb-4">Our Pillars</h4>
            <div class="text-gray-700 flex items-center flex-wrap gap-2">
                <span class="rounded-full py-1 px-3 border border-gray-500 font-semibold">Innovation</span>
                <span class="rounded-full py-1 px-3 border border-gray-500 font-semibold">Quality</span>
                <span class="rounded-full py-1 px-3 border border-gray-500 font-semibold">Collaboration</span>
                <span class="rounded-full py-1 px-3 border border-gray-500 font-semibold">Integrity</span>
                <span class="rounded-full py-1 px-3 border border-gray-500 font-semibold">Client Focus</span>
            </div>
        </div>
    </section>

    {{-- mission & vision --}}
    <section class="md:py-16">
        <div class="w-11/12 md:w-10/12 mx-auto flex flex-col gap-4">
            <div class="w-11/12 md:w-8/12 mx-auto text-center my-2">
                <h2 class="text-blue-900 font-semibold mb-4 uppercase tracking-wide">Our Mission</h2>
                <p class="text-lg md:text-2xl font-semibold text-gray-700">Know What Drives Us</p>
            </div>
            <div class="grid grid-cols-1 gap-3 md:grid md:grid-cols-2 md:gap-4 lg:grid lg:grid-cols-2 lg:gap-4 text-md">
                <div class="p-6 bg-gradient-to-br from-blue-100 to-blue-50 rounded-lg hover:shadow-md shadow-blue-200">
                    <a href="">
                        <div class="flex flex-col gap-2">
                            <i class="fa fa-bullseye text-3xl text-blue-900 rounded-sm text-lg my-2"></i>
                            <h2 class="text-lg tracking-wide text-blue-900 font-semibold">Our Mission</h2>
                            <p class="text-gray-600 text-justify">To deliver exceptional software and design services that
                                exceed client expectations and contribute to the success of businesses in our community.</p>
                        </div>
                    </a>
                </div>
                <div class="p-6 bg-gradient-to-br from-blue-100 to-blue-50 rounded-lg hover:shadow-md shadow-blue-200">
                    <a href="">
                        <div class="flex flex-col gap-2">
                            <i class="fa fa-eye text-3xl text-blue-900 rounded-sm text-lg my-2"></i>
                            <h2 class="text-lg tracking-wide text-blue-900 font-semibold">Our vision</h2>
                            <p class="text-gray-600 text-justify">To play a key role in driving digital transformation in
                                Tanzania, enabling businesses to compete effectively in the global market.</p>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>

    {{-- team --}}
    <section class="py-8 md:py-16">
        <div class="w-11/12 mx-auto flex flex-col gap-4">
            <div class="w-11/12 md:w-8/12 mx-auto text-center my-2">
                <h2 class="text-blue-900 font-semibold mb-4 uppercase tracking-wide">Our Exceptional Team</h2>
                <p class="text-lg md:text-2xl font-semibold text-gray-700">Meet our Professional Team That drives Innovation
                    at Sesware</p>
            </div>
            <div class="grid grid-cols-1 gap-4 md:grid-cols-2 lg:grid-cols-4 text-md">
                <div class="p-2 bg-gradient-to-b from-blue-400 to-blue-50 rounded-lg hover:shadow-md shadow-blue-200">
                    <div class="w-full flex flex-col gap-2">
                        <div class="w-full h-52 overflow-hidden">
                            <img src="{{ asset('images/KANYASI_57.jpg') }}" alt="design mockup"
                                class="w-full h-full object-cover">
                        </div>
                        <div class="flex flex-col items-center space-y-2">
                            <h2 class="text-lg text-center tracking-wide text-blue-900 font-semibold">Suleiman Ramadhan</h2>
                            <p class="italic text-sm text-center text-gray-600">Co-Founder & Lead Software Developer</p>
                            <div class="w-full flex items-center space-x-2 justify-center">
                                <a href="">
                                    <i class="fab fa-x border border-blue-900 rounded-full py-2 px-3"></i>
                                </a>
                                <a href="">
                                    <i class="fab fa-instagram border border-blue-900 rounded-full p-2"></i>
                                </a>
                                <a href="">
                                    <i class="fab fa-linkedin border border-blue-900 rounded-full p-2"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="p-2 bg-gradient-to-b from-blue-400 to-blue-50 rounded-lg hover:shadow-md shadow-blue-200">
                    <div class="flex flex-col gap-2">
                        <div class="w-full h-52 overflow-hidden">
                            <img src="{{ asset('images/KANYASI_50.jpg') }}" alt="design mockup"
                                class="w-full h-full object-cover">
                        </div>
                        <div class="flex flex-col items-center space-y-2">
                            <h2 class="text-lg text-center tracking-wide text-blue-900 font-semibold">Erick Manyasi</h2>
                            <p class="italic text-sm text-center text-gray-600">Co-Founder & Lead Software Developer</p>
                            <div class="w-full flex items-center space-x-2 justify-center">
                                <a href="">
                                    <i class="fab fa-x border border-blue-900 rounded-full py-2 px-3"></i>
                                </a>
                                <a href="">
                                    <i class="fab fa-instagram border border-blue-900 rounded-full p-2"></i>
                                </a>
                                <a href="">
                                    <i class="fab fa-linkedin border border-blue-900 rounded-full p-2"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="p-2 bg-gradient-to-b from-blue-400 to-blue-50 rounded-lg hover:shadow-md shadow-blue-200">
                    <div class="flex flex-col gap-2">
                        <div class="w-full h-52 overflow-hidden">
                            <img src="{{ asset('images/KANYASI_61.jpg') }}" alt="design mockup"
                                class="w-full h-full object-cover">
                        </div>
                        <div class="flex flex-col items-center space-y-2">
                            <h2 class="text-lg text-center tracking-wide text-blue-900 font-semibold">Said Bessa</h2>
                            <p class="italic text-sm text-center text-gray-600">Co-Founder & Lead Software Developer</p>
                            <div class="w-full flex items-center space-x-2 justify-center">
                                <a href="">
                                    <i class="fab fa-x border border-blue-900 rounded-full py-2 px-3"></i>
                                </a>
                                <a href="">
                                    <i class="fab fa-instagram border border-blue-900 rounded-full p-2"></i>
                                </a>
                                <a href="">
                                    <i class="fab fa-linkedin border border-blue-900 rounded-full p-2"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="p-2 bg-gradient-to-b from-blue-400 to-blue-50 rounded-lg hover:shadow-md shadow-blue-200">
                    <div class="flex flex-col gap-2">
                        <div class="w-full h-52 overflow-hidden">
                            <img src="{{ asset('images/KANYASI_61.jpg') }}" alt="design mockup"
                                class="w-full h-full object-cover">
                        </div>
                        <div class="flex flex-col items-center space-y-2">
                            <h2 class="text-lg text-center tracking-wide text-blue-900 font-semibold">Gilbert Akabanga</h2>
                            <p class="italic text-sm text-center text-gray-600">Senior Graphic Designer</p>
                            <div class="w-full flex items-center space-x-2 justify-center">
                                <a href="">
                                    <i class="fab fa-x border border-blue-900 rounded-full py-2 px-3"></i>
                                </a>
                                <a href="">
                                    <i class="fab fa-instagram border border-blue-900 rounded-full p-2"></i>
                                </a>
                                <a href="">
                                    <i class="fab fa-linkedin border border-blue-900 rounded-full p-2"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- partner with us --}}
    <section class="mx-auto p-6 md:p-12 mt-12 bg-gradient-to-tl from-blue-50 to-blue-100">
        <div class="w-full flex flex-col md:flex-row">
            <div class="w-full md:w-1/3 my-2 p-4">
                <i class="fa fa-handshake text-3xl md:text-5xl text-blue-900"></i>
                <h3 class="text-3xl md:text-5xl text-blue-900 font-semibold">Partner With Us</h3>
                <p class="italic text-gray-600 my-4 text-lg">Your Home For Smart Software solutions</p>
            </div>
            <div class="w-full md:w-2/3 my-2 flex flex-col md:flex-row flex-wrap text-font">
                <div class="w-full md:w-1/2 my-2">
                    <div
                        class="w-11/12 mx-auto flex rounded-md p-3 bg-gradient-to-tr from-blue-50 to-blue-200 border border-blue-900 flex-col hover:scale-105 transition-transform duration-500">
                        <i class="fa fa-puzzle-piece text-blue-900 m-2 text-xl"></i>
                        <span class="text-font text-lg">Tailored software and design to meet your unique business
                            needs</span>
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
