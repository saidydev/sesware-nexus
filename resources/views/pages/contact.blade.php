@extends('layouts.guest-layout')
@section('content')
    <div class="w-11/12 md:w-3/5 mx-auto">
        <div class="my-8 text-center">
            <h2 class="text-xl font-heading font-semibold tracking-wider text-blue-900 uppercase">
                Contact Us
            </h2>
            <p class="text-2xl my-2 text-gray-700">Ready to transform
                and bring impact to your business?</p>

            <div class="w-fit mx-auto flex flex-col md:flex-row md:items-center md:space-x-4 space-y-3 md:space-y-0 text-lg my-4">
                <a href="" class="hover:text-slate-400">
                    <div class="w-full flex items-center space-x-4">
                        <i class="fa fa-envelope border border-gray-600 hover:bg-blue-900 rounded-full p-2"></i>
                        <span>info@seswarenexus.com</span>
                    </div>
                </a>
                <a href="" class="hover:text-slate-400">
                    <div class="w-full flex items-center space-x-4">
                        <i class="fa fa-phone border border-gray-600 hover:bg-blue-900 rounded-full p-2"></i>
                        <span>0712345678</span>
                    </div>
                </a>
            </div>
        </div>
    </div>

    <section class="w-11/12 mx-auto flex flex-col md:flex-row gap-4 my-4 py-12">
        <div class="w-full md:w-1/2 p-4 bg-gradient-to-br from-blue-100 to-blue-50 rounded-lg">
            <h3 class="my-2 text-blue-900 text-2xl font-semibold text-font">Tell us about your project</h3>
            <form action="" class="flex flex-col space-y-3">
                <div class="flex flex-col space-y-2 w-full md:w-10/12">
                    <label for="name" class="text-lg text-gray-600">Full Name:</label>
                    <input type="text" class="w-full p-2 border border-blue-300 rounded-md bg-blue-50">
                </div>
                <div class="flex flex-col space-y-2 w-full md:w-10/12">
                    <label for="email" class="text-lg text-gray-600">Email:</label>
                    <input type="email" class="w-full p-2 border border-blue-300 rounded-md bg-blue-50">
                </div>
                <div class="flex flex-col space-y-2 w-full md:w-10/12">
                    <label for="company" class="text-lg text-gray-600">Company:</label>
                    <input type="text" class="w-full p-2 border border-blue-300 rounded-md bg-blue-50">
                </div>
                <div class="flex flex-col space-y-2 w-full md:w-10/12">
                    <label for="description" class="text-lg text-gray-600">Project Description (Optional):</label>
                   <textarea name="description" rows="7" class="w-full p-2 border border-blue-300 rounded-md bg-blue-50"></textarea>
                </div>

                <div class="w-full py-4">
                    <button class="bg-blue-600 text-white py-2 px-5 rounded-md font-semibold text-font cursor-pointer hover:bg-blue-700">Send</button>
                </div>
            </form>
        </div>

        <div class="w-full md:w-1/2 p-4 rounded-lg">
            <h3 class="my-2 text-blue-900 text-2xl font-semibold text-font">Frequently Asked Questions</h3>
            <div class="flex flex-col space-y-2 text-font my-2">
                <span class="text-lg text-gray-700 font-semibold">What does Sesware Nexus Do?</span>
                <p class="text-gray-600">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quidem qui atque veritatis facilis sint sit, iure reprehenderit corporis, doloremque blanditiis laudantium itaque. Iusto consequatur necessitatibus omnis consectetur at officia. Est.</p>
            </div>
            <div class="flex flex-col space-y-2 text-font my-2">
                <span class="text-lg text-gray-700 font-semibold">What Services do Sesware nexus offer?</span>
                <p class="text-gray-600">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quidem qui atque veritatis facilis sint sit, iure reprehenderit corporis, doloremque blanditiis laudantium itaque. Iusto consequatur necessitatibus omnis consectetur at officia. Est.</p>
            </div>
            <div class="flex flex-col space-y-2 text-font my-2">
                <span class="text-lg text-gray-700 font-semibold">What are your pricings?</span>
                <p class="text-gray-600">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quidem qui atque veritatis facilis sint sit, iure reprehenderit corporis, doloremque blanditiis laudantium itaque. Iusto consequatur necessitatibus omnis consectetur at officia. Est.</p>
            </div>
            <div class="flex flex-col space-y-2 text-font my-2">
                <span class="text-lg text-gray-700 font-semibold">What are your pricings?</span>
                <p class="text-gray-600">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quidem qui atque veritatis facilis sint sit, iure reprehenderit corporis, doloremque blanditiis laudantium itaque. Iusto consequatur necessitatibus omnis consectetur at officia. Est.</p>
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
                <p class="text-lg md:text-4xl font-semibold text-gray-700">Learn more about us and what we do</p>
            </div>
            <div class="w-fit my-8 mx-auto">
                <a href="{{route('service')}}">
                    <button
                        class="py-3 px-4 bg-blue-950 hover:bg-blue-900 rounded-full font-semibold text-lg md:text-xl transition-colors duration-1000 text-white">
                        our services
                    </button>
                </a>
            </div>
        </div>
    </section>
@endsection
