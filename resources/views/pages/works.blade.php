@extends('layouts.guest-layout')
@section('content')

            <div class="w-11/12 md:w-3/5 mx-auto">
                <div class="my-8 text-center">
                    <h2 class="text-xl font-heading font-semibold tracking-wider text-blue-900 uppercase">
                        Our Works
                    </h2>
                    <p class="text-2xl my-2 text-gray-700">Featured Projects</p>
                    <p class="text-lg text-gray-600 mt-4">Explore some of our best works that brought
                        impact to businesses</p>
                </div>
            </div>

    <section class="w-full my-4 px-2 py-12">
        <div class="grid grid-cols-1 gap-3 md:grid md:grid-cols-2 md:gap-4 lg:grid lg:gap-4 text-md">
            <div class="p-2 bg-gradient-to-br from-blue-100 to-blue-50 rounded-lg my-4 hover:shadow-md shadow-blue-200">
                <div class="flex flex-col gap-2">
                    <div class="w-full h-96 overflow-hidden">
                        <img src="{{ asset('images/KANYASI_66.jpg') }}" alt="design mockup"
                            class="w-full h-full object-cover">
                    </div>
                    <h2 class="text-lg tracking-wide text-blue-900 font-semibold text-center">School Website</h2>
                    <p class="text-gray-600 text-center">Designing, developing, and deploying custom web-based
                        software to automate business processes, manage data, and facilitate online transactions.
                    </p>
                </div>
            </div>
            <div class="p-2 bg-gradient-to-br from-blue-100 to-blue-50 rounded-lg my-4 hover:shadow-md shadow-blue-200">
                <div class="flex flex-col gap-2">
                    <div class="w-full h-96 overflow-hidden">
                        <img src="{{ asset('images/KANYASI_66.jpg') }}" alt="design mockup"
                            class="w-full h-full object-cover">
                    </div>
                    <h2 class="text-lg tracking-wide text-blue-900 font-semibold text-center">School Website</h2>
                    <p class="text-gray-600 text-center">Designing, developing, and deploying custom web-based
                        software to automate business processes, manage data, and facilitate online transactions.
                    </p>
                </div>
            </div>
            <div class="p-2 bg-gradient-to-br from-blue-100 to-blue-50 rounded-lg my-4 hover:shadow-md shadow-blue-200">
                <div class="flex flex-col gap-2">
                    <div class="w-full h-96 overflow-hidden">
                        <img src="{{ asset('images/KANYASI_66.jpg') }}" alt="design mockup"
                            class="w-full h-full object-cover">
                    </div>
                    <h2 class="text-lg tracking-wide text-blue-900 font-semibold text-center">Company Logo</h2>
                </div>
            </div>
            <div class="p-2 bg-gradient-to-br from-blue-100 to-blue-50 rounded-lg my-4 hover:shadow-md shadow-blue-200">
                <div class="flex flex-col gap-2">
                    <div class="w-full h-96 overflow-hidden">
                        <img src="{{ asset('images/KANYASI_66.jpg') }}" alt="design mockup"
                            class="w-full h-full object-cover">
                    </div>
                    <h2 class="text-lg tracking-wide text-blue-900 font-semibold text-center">Banner Design</h2>
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
