@php

    $page_title = 'FAQs';
    $short_description = 'Below are some frequently asked questions from our users';

@endphp

{{-- layout --}}
@extends('layouts.fronty')





@section('contents')
    <main class="content">
        <div class="breadcrumb-block w-full lg:h-[400px] sm:h-[360px] h-[320px] relative">
            <div class="bg-img w-full h-full absolute top-0 left-0 z-[-1]"><img alt="banner" loading="lazy" width="4000"
                    height="3000" decoding="async" data-nimg="1" class="w-full h-full object-cover"
                    srcset="/finatex-next.vercel.app/_next/images/banner/case-studies.png&w=3840&q=75 1x"
                    src="/finatex-next.vercel.app/_next/images/banner/case-studies.png&w=3840&q=75"
                    style="color: transparent;"></div>
            <div class="container relative h-full flex items-center">
                <div class="heading-nav flex items-center gap-1 absolute top-8 left-4 py-1.5 px-4 rounded-full bg-line"><a
                        class="hover:underline caption1 text-white" href="/">Home</a><svg
                        xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor"
                        viewBox="0 0 256 256" class="text-white">
                        <path
                            d="M141.66,133.66l-80,80a8,8,0,0,1-11.32-11.32L124.69,128,50.34,53.66A8,8,0,0,1,61.66,42.34l80,80A8,8,0,0,1,141.66,133.66Zm80-11.32-80-80a8,8,0,0,0-11.32,11.32L204.69,128l-74.35,74.34a8,8,0,0,0,11.32,11.32l80-80A8,8,0,0,0,221.66,122.34Z">
                        </path>
                    </svg>
                    <div class="caption1 text-white">FAQs</div>
                </div>
                <div class="text-nav xl:w-1/2 md:w-3/5">
                    <div class="heading3 text-white">FAQs</div>
                    <div class="sub-heading mt-4 text-white font-normal">Explore our frequently asked questions and our
                        answers to them.</div>
                </div>
            </div>
        </div>
        <div class="faq-block lg:py-[100px] sm:py-16 py-10">
            <div class="container flex items-center justify-center">
                <div class="w-full lg:w-2/3">
                    <div class="heading6">Payments</div>
                    <div class="list-question">
                        <div
                            class="question-item hover-box-shadow pointer mt-5 px-7 rounded-lg border border-line cursor-pointer open">
                            <div class="question-item-main flex items-center justify-between py-4 heading7">Which device can
                                I use to enter your service?<svg xmlns="http://www.w3.org/2000/svg" width="1em"
                                    height="1em" fill="currentColor" viewBox="0 0 256 256" class="text-xl">
                                    <path d="M228,128a12,12,0,0,1-12,12H40a12,12,0,0,1,0-24H216A12,12,0,0,1,228,128Z">
                                    </path>
                                </svg></div>
                            <div class="content-question">
                                <div class="border-line w-full"></div>
                                <div class="body3 text-secondary pb-4">You can access our service from any device with an
                                    internet connection.</div>
                            </div>
                        </div>
                        <div
                            class="question-item hover-box-shadow pointer mt-5 px-7 rounded-lg border border-line cursor-pointer ">
                            <div class="question-item-main flex items-center justify-between py-4 heading7">What are your
                                products and services?<svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em"
                                    fill="currentColor" viewBox="0 0 256 256" class="text-xl">
                                    <path
                                        d="M228,128a12,12,0,0,1-12,12H140v76a12,12,0,0,1-24,0V140H40a12,12,0,0,1,0-24h76V40a12,12,0,0,1,24,0v76h76A12,12,0,0,1,228,128Z">
                                    </path>
                                </svg></div>
                            <div class="content-question">
                                <div class="border-line w-full"></div>
                                <div class="body3 text-secondary pb-4">Our products and services include [describe your
                                    products/services briefly].</div>
                            </div>
                        </div>
                        <div
                            class="question-item hover-box-shadow pointer mt-5 px-7 rounded-lg border border-line cursor-pointer ">
                            <div class="question-item-main flex items-center justify-between py-4 heading7">How can I
                                contact your customer support department?<svg xmlns="http://www.w3.org/2000/svg"
                                    width="1em" height="1em" fill="currentColor" viewBox="0 0 256 256" class="text-xl">
                                    <path
                                        d="M228,128a12,12,0,0,1-12,12H140v76a12,12,0,0,1-24,0V140H40a12,12,0,0,1,0-24h76V40a12,12,0,0,1,24,0v76h76A12,12,0,0,1,228,128Z">
                                    </path>
                                </svg></div>
                            <div class="content-question">
                                <div class="border-line w-full"></div>
                                <div class="body3 text-secondary pb-4">You can contact our customer support department by
                                    [provide contact information such as phone number or email] during our business hours.
                                    Our team is ready to assist you with any inquiries or concerns.</div>
                            </div>
                        </div>
                        <div
                            class="question-item hover-box-shadow pointer mt-5 px-7 rounded-lg border border-line cursor-pointer ">
                            <div class="question-item-main flex items-center justify-between py-4 heading7">Can I return
                                items if I'm not satisfied?<svg xmlns="http://www.w3.org/2000/svg" width="1em"
                                    height="1em" fill="currentColor" viewBox="0 0 256 256" class="text-xl">
                                    <path
                                        d="M228,128a12,12,0,0,1-12,12H140v76a12,12,0,0,1-24,0V140H40a12,12,0,0,1,0-24h76V40a12,12,0,0,1,24,0v76h76A12,12,0,0,1,228,128Z">
                                    </path>
                                </svg></div>
                            <div class="content-question">
                                <div class="border-line w-full"></div>
                                <div class="body3 text-secondary pb-4">Yes, you can return items within [specify time frame]
                                    if you are not satisfied. Please review our return policy for further instructions.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="heading6 md:mt-10 mt-6">Suggestion</div>
                    <div class="list-question">
                        <div
                            class="question-item hover-box-shadow pointer mt-5 px-7 rounded-lg border border-line cursor-pointer ">
                            <div class="question-item-main flex items-center justify-between py-4 heading7">What is your
                                warranty policy?<svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em"
                                    fill="currentColor" viewBox="0 0 256 256" class="text-xl">
                                    <path
                                        d="M228,128a12,12,0,0,1-12,12H140v76a12,12,0,0,1-24,0V140H40a12,12,0,0,1,0-24h76V40a12,12,0,0,1,24,0v76h76A12,12,0,0,1,228,128Z">
                                    </path>
                                </svg></div>
                            <div class="content-question">
                                <div class="border-line w-full"></div>
                                <div class="body3 text-secondary pb-4">We offer a [specify duration] warranty on our
                                    products. Please see our warranty policy for specific details and coverage.</div>
                            </div>
                        </div>
                        <div
                            class="question-item hover-box-shadow pointer mt-5 px-7 rounded-lg border border-line cursor-pointer ">
                            <div class="question-item-main flex items-center justify-between py-4 heading7">What are your
                                shipping and delivery policies?<svg xmlns="http://www.w3.org/2000/svg" width="1em"
                                    height="1em" fill="currentColor" viewBox="0 0 256 256" class="text-xl">
                                    <path
                                        d="M228,128a12,12,0,0,1-12,12H140v76a12,12,0,0,1-24,0V140H40a12,12,0,0,1,0-24h76V40a12,12,0,0,1,24,0v76h76A12,12,0,0,1,228,128Z">
                                    </path>
                                </svg></div>
                            <div class="content-question">
                                <div class="border-line w-full"></div>
                                <div class="body3 text-secondary pb-4">Our shipping and delivery policies vary depending on
                                    the location and shipping method chosen. Please refer to our shipping page for detailed
                                    information.</div>
                            </div>
                        </div>
                        <div
                            class="question-item hover-box-shadow pointer mt-5 px-7 rounded-lg border border-line cursor-pointer ">
                            <div class="question-item-main flex items-center justify-between py-4 heading7">What payment
                                methods do you accept?<svg xmlns="http://www.w3.org/2000/svg" width="1em"
                                    height="1em" fill="currentColor" viewBox="0 0 256 256" class="text-xl">
                                    <path
                                        d="M228,128a12,12,0,0,1-12,12H140v76a12,12,0,0,1-24,0V140H40a12,12,0,0,1,0-24h76V40a12,12,0,0,1,24,0v76h76A12,12,0,0,1,228,128Z">
                                    </path>
                                </svg></div>
                            <div class="content-question">
                                <div class="border-line w-full"></div>
                                <div class="body3 text-secondary pb-4">We accept various payment methods, including [list
                                    accepted payment methods]. You can choose the most convenient option during the checkout
                                    process.</div>
                            </div>
                        </div>
                        <div
                            class="question-item hover-box-shadow pointer mt-5 px-7 rounded-lg border border-line cursor-pointer ">
                            <div class="question-item-main flex items-center justify-between py-4 heading7">Do you have a
                                customer loyalty program?<svg xmlns="http://www.w3.org/2000/svg" width="1em"
                                    height="1em" fill="currentColor" viewBox="0 0 256 256" class="text-xl">
                                    <path
                                        d="M228,128a12,12,0,0,1-12,12H140v76a12,12,0,0,1-24,0V140H40a12,12,0,0,1,0-24h76V40a12,12,0,0,1,24,0v76h76A12,12,0,0,1,228,128Z">
                                    </path>
                                </svg></div>
                            <div class="content-question">
                                <div class="border-line w-full"></div>
                                <div class="body3 text-secondary pb-4">Yes, we have a customer loyalty program. Earn points
                                    with each purchase and enjoy exclusive benefits. Join now to start earning rewards!
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="more-question-block mb-[100px]">
            <div class="container">
                <div class="row flex items-center justify-center">
                    <div class="w-full lg:w-2/3">
                        <div class="content bg-gradient-blue rounded-xl flex flex-col items-center gap-4 py-8 px-7">
                            <div class="bg-img w-[120px]"><img alt="" loading="lazy" width="4000"
                                    height="4000" decoding="async" data-nimg="1" class="w-full"
                                    srcset="/finatex-next.vercel.app/_next/images/component/avatar-group.png&w=3840&q=75 1x"
                                    src="/finatex-next.vercel.app/_next/images/component/avatar-group.png&w=3840&q=75"
                                    style="color: transparent;"></div>
                            <div class="text text-center">
                                <div class="heading6 text-white">Still have questions?</div>
                                <div class="body3 text-white mt-2">Can’t find the answer you’re looking for? Please chat to
                                    our friendly team.</div>
                            </div><a class="button-main hover:bg-black bg-blue text-white rounded-full"
                                href="/contact/contact-two">Chat Center</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="cta-block style-two relative lg:h-[120px] h-[180px]">
            <div class="bg-cta w-full h-full absolute top-0 left-0 z-[-1]"><img alt="" loading="lazy"
                    width="5000" height="5000" decoding="async" data-nimg="1" class="w-full h-full object-cover"
                    srcset="/finatex-next.vercel.app/_next/images/cta/bg-cta1.png&w=3840&q=75 1x"
                    src="/finatex-next.vercel.app/_next/images/cta/bg-cta1.png&w=3840&q=75" style="color: transparent;">
            </div>
            <div class="container flex items-center justify-between max-lg:flex-col max-lg:justify-center gap-6 h-full">
                <div class="heading5 max-lg:text-center text-white">Looking for a first-class business consultant?</div><a
                    class="button-main rounded-full hover:bg-black hover:text-white bg-white text-button px-9 py-3"
                    href="/contact/contact-two">Get A Quote</a>
            </div>
        </div>
    </main>
@endsection
