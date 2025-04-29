@extends('layouts.guest-layout')
@section('content')
            <div class="w-11/12 md:w-3/5 mx-auto">
                <div class="my-8 text-center">
                    <h2 class="text-xl font-heading font-semibold tracking-wider text-blue-900 uppercase">
                        Our Services
                    </h2>
                    <p class="text-2xl my-2 text-gray-700">Solutions That Drive Your Business Forward</p>
                    <p class="text-lg text-gray-600 mt-4">Sesware Nexus provides a comprehensive suite of software
                        development and graphic design services to empower businesses in Tanzania. We combine technical
                        expertise with creative vision to deliver solutions that meet your specific needs and drive
                        measurable results</p>
                </div>
            </div>

    {{-- software dev --}}
    <section class="w-full bg-gradient-to-r from-blue-50 to-blue-100 px-4 py-16">
        <h3 class="text-blue-900 text-lg text-center font-semibold">Software Development</h3>
        <p class="text-lg text-gray-600 text-center my-2 w-10/12 mx-auto">Sesware Nexus leverages cutting-edge technologies
            to build custom software solutions that streamline your operations, enhance productivity, and provide valuable
            insights.</p>

        <div
            class="w-full md:w-11/12 mx-auto px-8 py-12 bg-gradient-to-r from-blue-950 to-blue-900 rounded-lg my-8 text-blue-100">
            <div class="flex flex-col md:flex-row gap-3">
                <div class="w-full md:w-1/2">
                    <h4 class="text-blue-200 text-2xl font-semibold mb-4">Web Application Development</h4>
                    <p class="text-justify text-lg">We design, develop, and deploy scalable and secure web applications that
                        automate business processes, manage data effectively, and facilitate online interactions. Our
                        expertise includes e-commerce platforms, content management systems (CMS), customer relationship
                        management (CRM) systems, and custom web portals.</p>

                    <h5 class="text-blue-200 text-xl font-semibold my-4">Get benefited:</h5>
                    <p class="text-lg">Increased efficiency and productivity</p>
                    <p class="text-lg">Improved data management</p>
                    <p class="text-lg">Enhanced collaboration</p>
                    <p class="text-lg">Expanded reach to customers</p>
                </div>
                <div class="w-full md:w-1/2">
                    <h4 class="text-blue-200 font-semibold mb-3 mt-3 md:mt-0 md:ml-12 text-lg text-center md:text-left">The
                        tools we use</h4>
                    <div class="w-full flex flex-wrap justify-center items-center">
                        <div class="w-1/2 md:w-1/4 my-2">
                            <div class="mx-auto text-blue-100 flex flex-col items-center rounded-md">
                                <i class="fab fa-react text-xl"></i>
                                <h2 class="tracking-wide font-semibold">React</h2>
                            </div>
                        </div>
                        <div class="w-1/2 md:w-1/4 my-2">
                            <div class="mx-auto text-blue-100 flex flex-col items-center rounded-md">
                                <i class="fab fa-node-js text-xl"></i>
                                <h2 class="tracking-wide font-semibold">Node.js</h2>
                            </div>
                        </div>
                        <div class="w-1/2 md:w-1/4 my-2">
                            <div class="mx-auto text-blue-100 flex flex-col items-center rounded-md">
                                <i class="fab fa-laravel text-xl"></i>
                                <h2 class="tracking-wide font-semibold">Laravel</h2>
                            </div>
                        </div>
                        <div class="w-1/2 md:w-1/4 my-2">
                            <div class="mx-auto text-blue-100 flex flex-col items-center rounded-md">
                                <img src="https://www.vectorlogo.zone/logos/tailwindcss/tailwindcss-icon.svg"
                                    class="w-8 h-8" alt="Tailwind CSS" />
                                <h2 class="tracking-wide font-semibold">Tailwind</h2>
                            </div>
                        </div>
                        <div class="w-1/2 md:w-1/4 my-2">
                            <div class="mx-auto text-blue-100 flex flex-col items-center rounded-md">
                                <i class="fab fa-bootstrap text-xl"></i>
                                <h2 class="tracking-wide font-semibold">Bootstrap</h2>
                            </div>
                        </div>
                        <div class="w-1/2 md:w-1/4 my-2">
                            <div class="mx-auto text-blue-100 flex flex-col items-center rounded-md">
                                <img src="{{ asset('images/mongodb-4.webp') }}" alt="" class="w-8 h-8">
                                <h2 class="tracking-wide font-semibold">MongoDB</h2>
                            </div>
                        </div>
                        <div class="w-1/2 md:w-1/4 my-2">
                            <div class="mx-auto text-blue-100 flex flex-col items-center rounded-md">
                                <img src="https://www.vectorlogo.zone/logos/mysql/mysql-icon.svg" alt="MySQL"
                                    class="w-8 h-8">
                                <h2 class="tracking-wide font-semibold">mySQL</h2>
                            </div>
                        </div>
                    </div>

                    <div class="w-full m-4 py-4">
                        <div class="text-blue-100 flex items-center flex-wrap gap-2">
                            <span class="rounded-full py-1 px-3 border border-blue-100 font-semibold">User-friendly
                                interfaces</span>
                            <span class="rounded-full py-1 px-3 border border-blue-100 font-semibold">Database
                                integration</span>
                            <span class="rounded-full py-1 px-3 border border-blue-100 font-semibold">API development</span>
                            <span class="rounded-full py-1 px-3 border border-blue-100 font-semibold">Responsive
                                design</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div
            class="w-full md:w-11/12 mx-auto px-8 py-12 bg-gradient-to-l from-blue-950 to-blue-900 rounded-lg my-8 text-blue-100">
            <div class="flex flex-col md:flex-row gap-3">
                <div class="w-full md:w-1/2">
                    <h4 class="text-blue-200 text-2xl font-semibold mb-4">Mobile App Development</h4>
                    <p class="text-justify text-lg">We create cross-platform mobile applications for Android and iOS
                        devices, enabling you to connect with your customers on the go, provide mobile access to your
                        services, and improve internal communication.</p>

                    <h5 class="text-blue-200 text-xl font-semibold my-4">Get benefited:</h5>
                    <p class="text-lg">Enhanced customer engagement</p>
                    <p class="text-lg">Improved accessibility to services</p>
                    <p class="text-lg">Increased brand loyalty</p>
                    <p class="text-lg">Streamlined internal workflows</p>
                </div>
                <div class="w-full md:w-1/2">
                    <h4 class="text-blue-200 font-semibold mb-3 mt-3 md:mt-0 md:ml-12 text-lg text-center md:text-left">The
                        tools we use</h4>
                    <div class="w-full flex flex-wrap justify-center items-center">
                        <div class="w-1/2 md:w-1/4 my-2">
                            <div class="mx-auto text-blue-100 flex flex-col items-center rounded-md">
                                <i class="fab fa-react text-xl"></i>
                                <h2 class="tracking-wide font-semibold">React Native</h2>
                            </div>
                        </div>
                        <div class="w-1/2 md:w-1/4 my-2">
                            <div class="mx-auto text-blue-100 flex flex-col items-center rounded-md">
                                <img src="https://www.vectorlogo.zone/logos/tailwindcss/tailwindcss-icon.svg"
                                    class="w-8 h-8" alt="Tailwind CSS" />
                                <h2 class="tracking-wide font-semibold">Tailwind</h2>
                            </div>
                        </div>
                        <div class="w-1/2 md:w-1/4 my-2">
                            <div class="mx-auto text-blue-100 flex flex-col items-center rounded-md">
                                <img src="{{ asset('images/mongodb-4.webp') }}" alt="" class="w-8 h-8">
                                <h2 class="tracking-wide font-semibold">MongoDB</h2>
                            </div>
                        </div>
                        <div class="w-1/2 md:w-1/4 my-2">
                            <div class="mx-auto text-blue-100 flex flex-col items-center rounded-md">
                                <img src="https://www.vectorlogo.zone/logos/mysql/mysql-icon.svg" alt="MySQL"
                                    class="w-8 h-8">
                                <h2 class="tracking-wide font-semibold">mySQL</h2>
                            </div>
                        </div>
                    </div>

                    <div class="w-full m-4 py-4">
                        <div class="text-blue-100 flex items-center flex-wrap gap-2">
                            <span class="rounded-full py-1 px-3 border border-blue-100 font-semibold">Cross-platform
                                development</span>
                            <span class="rounded-full py-1 px-3 border border-blue-100 font-semibold">User-friendly
                                interfaces</span>
                            <span class="rounded-full py-1 px-3 border border-blue-100 font-semibold">Push
                                notifications</span>
                            <span class="rounded-full py-1 px-3 border border-blue-100 font-semibold">Integration with
                                device features</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- graphic design --}}
    <section class="w-full px-4 py-8 bg-gradient-to-r from-blue-50 to-blue-100">
        <h3 class="text-blue-900 text-lg text-center font-semibold">Graphic Design</h3>
        <p class="text-lg text-gray-600 text-center my-2 w-10/12 mx-auto">Sesware Nexus creates compelling visual
            experiences that enhance your brand identity, communicate your message effectively, and engage your target
            audience.</p>

        <div
            class="w-full md:w-11/12 mx-auto px-8 py-12 bg-gradient-to-r from-blue-950 to-blue-900 rounded-lg my-8 text-blue-100">
            <div class="flex flex-col md:flex-row gap-3">
                <div class="w-full md:w-1/2">
                    <h4 class="text-blue-200 text-2xl font-semibold mb-4">Graphic Design</h4>
                    <p class="text-justify text-lg">We develop comprehensive brand identities that establish a strong and
                        consistent brand presence across all channels, We design a wide range of marketing materials that
                        effectively communicate your brand message and promote your products or services, and visually
                        appealing user interfaces (UI) and user experiences (UX) for software applications and websites</p>

                    <h5 class="text-blue-200 text-xl font-semibold my-4">Get benefited:</h5>
                    <p class="text-lg">Strong brand recognition</p>
                    <p class="text-lg">Consistent brand messaging</p>
                    <p class="text-lg">Enhanced customer engagement</p>
                    <p class="text-lg">Improved user satisfaction</p>
                    <p class="text-lg">Increased user engagement</p>
                </div>
                <div class="w-full md:w-1/2">
                    <h4 class="text-blue-200 font-semibold mb-3 mt-3 md:mt-0 md:ml-12 text-lg text-center md:text-left">The
                        tools we use</h4>
                    <div class="w-full flex flex-wrap justify-center items-center">
                        <div class="w-1/2 md:w-1/4 my-2">
                            <div class="mx-auto text-blue-100 flex flex-col items-center rounded-md">
                                <img src="https://www.vectorlogo.zone/logos/adobe/adobe-icon.svg" class="w-8 h-8"
                                    alt="Adobe" />
                                <h2 class="tracking-wide font-semibold">Adobe</h2>
                            </div>
                        </div>
                    </div>

                    <div class="w-full m-4 py-4">
                        <div class="text-blue-100 flex items-center flex-wrap gap-2">
                            <span class="rounded-full py-1 px-3 border border-blue-100 font-semibold">Logo design</span>
                            <span class="rounded-full py-1 px-3 border border-blue-100 font-semibold">Brand style
                                guides</span>
                            <span class="rounded-full py-1 px-3 border border-blue-100 font-semibold">Website design</span>
                            <span class="rounded-full py-1 px-3 border border-blue-100 font-semibold">Print design</span>
                            <span class="rounded-full py-1 px-3 border border-blue-100 font-semibold">User interface
                                design</span>
                            <span class="rounded-full py-1 px-3 border border-blue-100 font-semibold">Posters</span>
                            <span class="rounded-full py-1 px-3 border border-blue-100 font-semibold">Banners</span>
                            <span class="rounded-full py-1 px-3 border border-blue-100 font-semibold">Flyers</span>
                            <span class="rounded-full py-1 px-3 border border-blue-100 font-semibold">Brochures</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- approach --}}
    <section class="w-full px-4 py-16">
        <h3 class="text-blue-900 text-lg text-center font-semibold">How We Work</h3>
        <p class="text-lg text-gray-600 text-center my-2 w-10/12 mx-auto">We follow a collaborative and iterative approach
            to ensure that we deliver solutions that meet your needs and exceed your expectations.</p>

        <div class="w-full my-2 flex flex-col md:flex-row flex-wrap text-font">
            <div class="w-full md:w-1/3 my-2">
                <div class="w-11/12 mx-auto flex rounded-md p-3 shadow-lg shadow-blue-100 border border-blue-900 flex-col">
                    <span class="text-blue-900 text-xl my-2">1. Consultation</span>
                    <p class="text-font text-lg text-gray-600">We begin by understanding your business goals, requirements,
                        and challenges</p>
                </div>
            </div>
            <div class="w-full md:w-1/3 my-2">
                <div class="w-11/12 mx-auto flex rounded-md p-3 shadow-lg shadow-blue-100 border border-blue-900 flex-col">
                    <span class="text-blue-900 text-xl my-2">2. Planning/Discovery</span>
                    <p class="text-font text-lg text-gray-600">We develop a detailed project plan, including scope,
                        timeline, and deliverables</p>
                </div>
            </div>
            <div class="w-full md:w-1/3 my-2">
                <div class="w-11/12 mx-auto flex rounded-md p-3 shadow-lg shadow-blue-100 border border-blue-900 flex-col">
                    <span class="text-blue-900 text-xl my-2">3. Design/Development</span>
                    <p class="text-font text-lg text-gray-600">Our team creates the software or design assets,
                        incorporating your feedback along the way</p>
                </div>
            </div>
            <div class="w-full md:w-1/3 my-2">
                <div class="w-11/12 mx-auto flex rounded-md p-3 shadow-lg shadow-blue-100 border border-blue-900 flex-col">
                    <span class="text-blue-900 text-xl my-2">4. Testing/Review</span>
                    <p class="text-font text-lg text-gray-600">We rigorously test our work to ensure quality and
                        functionality</p>
                </div>
            </div>
            <div class="w-full md:w-1/3 my-2">
                <div class="w-11/12 mx-auto flex rounded-md p-3 shadow-lg shadow-blue-100 border border-blue-900 flex-col">
                    <span class="text-blue-900 text-xl my-2">5. Delivery/Implementation</span>
                    <p class="text-font text-lg text-gray-600">We deliver the final product and provide ongoing support to
                        ensure your success</p>
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
