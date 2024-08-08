{{-- layout --}}
@extends('layouts.front')





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
                    <div class="caption1 text-white">Contact us</div>
                </div>
                <div class="text-nav xl:w-1/2 md:w-3/5">
                    <div class="heading3 text-white">Contact us</div>
                    <div class="sub-heading mt-4 text-white font-normal">Discover transparent pricing options tailored to
                        your budget on our Pricing page.</div>
                </div>
            </div>
        </div>
        <div class="pricing-block style-pricing">
            <div class="pricing-main lg:py-[100px] sm:py-16 py-10">
                <div class="container">
                    <div class="heading flex flex-col items-center gap-y-8">
                        <div class="title text-center">
                            <div class="heading3">Pricing</div>
                            <div class="body1 mt-2">Choose a plan that’s right for you</div>
                        </div>
                        <div class="choose-type flex items-center gap-5">
                            <div class="body3 text-black">Pay Monthly</div>
                            <div class="switch ">
                                <div class="bg-placehover"></div>
                            </div>
                            <div class="body3 text-placehover">Pay Yearly</div>
                        </div>
                    </div>
                    <div class="list-pricing show lg:mt-[60px] mt-8">
                        <div class="flex max-lg:flex-col gap-8">
                            <div class="w-full lg:w-1/3">
                                <div class="pricing-item py-9 px-6 rounded-xl box-shadow">
                                    <div class="heading6">Freebie</div>
                                    <div class="price flex items-end gap-2 mt-5">
                                        <div class="heading2">$0</div>
                                        <div class="body3">/ Month</div>
                                    </div>
                                    <div class="button-block w-full mt-6"><a
                                            class="button-main text-center block hover:text-white hover:bg-blue bg-white border border-blue text-black text-button w-full py-3 rounded-full"
                                            href="#!">Get Started</a></div>
                                    <div class="list-feature md:mt-10 mt-6 flex flex-col gap-3">
                                        <div class="item flex items-center gap-4"> <svg xmlns="http://www.w3.org/2000/svg"
                                                width="1em" height="1em" fill="currentColor" viewBox="0 0 256 256"
                                                class="text-blue text-3xl">
                                                <path
                                                    d="M128,24A104,104,0,1,0,232,128,104.11,104.11,0,0,0,128,24Zm45.66,85.66-56,56a8,8,0,0,1-11.32,0l-24-24a8,8,0,0,1,11.32-11.32L112,148.69l50.34-50.35a8,8,0,0,1,11.32,11.32Z">
                                                </path>
                                            </svg>
                                            <div class="body3">20,000+ of PNG & SVG graphics</div>
                                        </div>
                                        <div class="item flex items-center gap-4"> <svg xmlns="http://www.w3.org/2000/svg"
                                                width="1em" height="1em" fill="currentColor" viewBox="0 0 256 256"
                                                class="text-blue text-3xl">
                                                <path
                                                    d="M128,24A104,104,0,1,0,232,128,104.11,104.11,0,0,0,128,24Zm45.66,85.66-56,56a8,8,0,0,1-11.32,0l-24-24a8,8,0,0,1,11.32-11.32L112,148.69l50.34-50.35a8,8,0,0,1,11.32,11.32Z">
                                                </path>
                                            </svg>
                                            <div class="body3">Access to 100 million stock images</div>
                                        </div>
                                        <div class="item flex items-center gap-4"> <svg xmlns="http://www.w3.org/2000/svg"
                                                width="1em" height="1em" fill="currentColor" viewBox="0 0 256 256"
                                                class="text-placehover text-3xl">
                                                <path
                                                    d="M172.24,99.76a6,6,0,0,1,0,8.48l-56,56a6,6,0,0,1-8.48,0l-24-24a6,6,0,0,1,8.48-8.48L112,151.51l51.76-51.75A6,6,0,0,1,172.24,99.76ZM230,128A102,102,0,1,1,128,26,102.12,102.12,0,0,1,230,128Zm-12,0a90,90,0,1,0-90,90A90.1,90.1,0,0,0,218,128Z">
                                                </path>
                                            </svg>
                                            <div class="body3 text-placehover">Upload custom icons and fonts</div>
                                        </div>
                                        <div class="item flex items-center gap-4"> <svg xmlns="http://www.w3.org/2000/svg"
                                                width="1em" height="1em" fill="currentColor" viewBox="0 0 256 256"
                                                class="text-placehover text-3xl">
                                                <path
                                                    d="M172.24,99.76a6,6,0,0,1,0,8.48l-56,56a6,6,0,0,1-8.48,0l-24-24a6,6,0,0,1,8.48-8.48L112,151.51l51.76-51.75A6,6,0,0,1,172.24,99.76ZM230,128A102,102,0,1,1,128,26,102.12,102.12,0,0,1,230,128Zm-12,0a90,90,0,1,0-90,90A90.1,90.1,0,0,0,218,128Z">
                                                </path>
                                            </svg>
                                            <div class="body3 text-placehover">Unlimited Sharing</div>
                                        </div>
                                        <div class="item flex items-center gap-4"> <svg xmlns="http://www.w3.org/2000/svg"
                                                width="1em" height="1em" fill="currentColor" viewBox="0 0 256 256"
                                                class="text-placehover text-3xl">
                                                <path
                                                    d="M172.24,99.76a6,6,0,0,1,0,8.48l-56,56a6,6,0,0,1-8.48,0l-24-24a6,6,0,0,1,8.48-8.48L112,151.51l51.76-51.75A6,6,0,0,1,172.24,99.76ZM230,128A102,102,0,1,1,128,26,102.12,102.12,0,0,1,230,128Zm-12,0a90,90,0,1,0-90,90A90.1,90.1,0,0,0,218,128Z">
                                                </path>
                                            </svg>
                                            <div class="body3 text-placehover">Upload graphics & video in up to 4k</div>
                                        </div>
                                        <div class="item flex items-center gap-4"> <svg xmlns="http://www.w3.org/2000/svg"
                                                width="1em" height="1em" fill="currentColor" viewBox="0 0 256 256"
                                                class="text-placehover text-3xl">
                                                <path
                                                    d="M172.24,99.76a6,6,0,0,1,0,8.48l-56,56a6,6,0,0,1-8.48,0l-24-24a6,6,0,0,1,8.48-8.48L112,151.51l51.76-51.75A6,6,0,0,1,172.24,99.76ZM230,128A102,102,0,1,1,128,26,102.12,102.12,0,0,1,230,128Zm-12,0a90,90,0,1,0-90,90A90.1,90.1,0,0,0,218,128Z">
                                                </path>
                                            </svg>
                                            <div class="body3 text-placehover">Unlimited Projects</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="w-full lg:w-1/3">
                                <div class="pricing-item py-9 px-6 rounded-xl box-shadow bg-blue text-white">
                                    <div class="heading6">Professional</div>
                                    <div class="price flex items-end gap-2 mt-5">
                                        <div class="heading2">$25</div>
                                        <div class="body3">/ Month</div>
                                    </div>
                                    <div class="button-block w-full mt-6"><a
                                            class="button-main text-center block hover-button-black bg-white border border-blue text-black text-button w-full py-3 rounded-full"
                                            href="#!">Get Started</a></div>
                                    <div class="list-feature md:mt-10 mt-6 flex flex-col gap-3">
                                        <div class="item flex items-center gap-4"> <svg xmlns="http://www.w3.org/2000/svg"
                                                width="1em" height="1em" fill="currentColor" viewBox="0 0 256 256"
                                                class="text-white text-3xl">
                                                <path
                                                    d="M128,24A104,104,0,1,0,232,128,104.11,104.11,0,0,0,128,24Zm45.66,85.66-56,56a8,8,0,0,1-11.32,0l-24-24a8,8,0,0,1,11.32-11.32L112,148.69l50.34-50.35a8,8,0,0,1,11.32,11.32Z">
                                                </path>
                                            </svg>
                                            <div class="body3">20,000+ of PNG & SVG graphics</div>
                                        </div>
                                        <div class="item flex items-center gap-4"> <svg xmlns="http://www.w3.org/2000/svg"
                                                width="1em" height="1em" fill="currentColor" viewBox="0 0 256 256"
                                                class="text-white text-3xl">
                                                <path
                                                    d="M128,24A104,104,0,1,0,232,128,104.11,104.11,0,0,0,128,24Zm45.66,85.66-56,56a8,8,0,0,1-11.32,0l-24-24a8,8,0,0,1,11.32-11.32L112,148.69l50.34-50.35a8,8,0,0,1,11.32,11.32Z">
                                                </path>
                                            </svg>
                                            <div class="body3">Access to 100 million stock images</div>
                                        </div>
                                        <div class="item flex items-center gap-4"> <svg xmlns="http://www.w3.org/2000/svg"
                                                width="1em" height="1em" fill="currentColor" viewBox="0 0 256 256"
                                                class="text-white text-3xl">
                                                <path
                                                    d="M128,24A104,104,0,1,0,232,128,104.11,104.11,0,0,0,128,24Zm45.66,85.66-56,56a8,8,0,0,1-11.32,0l-24-24a8,8,0,0,1,11.32-11.32L112,148.69l50.34-50.35a8,8,0,0,1,11.32,11.32Z">
                                                </path>
                                            </svg>
                                            <div class="body3">Upload custom icons and fonts</div>
                                        </div>
                                        <div class="item flex items-center gap-4"> <svg xmlns="http://www.w3.org/2000/svg"
                                                width="1em" height="1em" fill="currentColor" viewBox="0 0 256 256"
                                                class="text-white text-3xl">
                                                <path
                                                    d="M128,24A104,104,0,1,0,232,128,104.11,104.11,0,0,0,128,24Zm45.66,85.66-56,56a8,8,0,0,1-11.32,0l-24-24a8,8,0,0,1,11.32-11.32L112,148.69l50.34-50.35a8,8,0,0,1,11.32,11.32Z">
                                                </path>
                                            </svg>
                                            <div class="body3">Unlimited Sharing</div>
                                        </div>
                                        <div class="item flex items-center gap-4"> <svg xmlns="http://www.w3.org/2000/svg"
                                                width="1em" height="1em" fill="currentColor" viewBox="0 0 256 256"
                                                class="text-placehover text-3xl">
                                                <path
                                                    d="M172.24,99.76a6,6,0,0,1,0,8.48l-56,56a6,6,0,0,1-8.48,0l-24-24a6,6,0,0,1,8.48-8.48L112,151.51l51.76-51.75A6,6,0,0,1,172.24,99.76ZM230,128A102,102,0,1,1,128,26,102.12,102.12,0,0,1,230,128Zm-12,0a90,90,0,1,0-90,90A90.1,90.1,0,0,0,218,128Z">
                                                </path>
                                            </svg>
                                            <div class="body3 text-placehover">Upload graphics & video in up to 4k
                                            </div>
                                        </div>
                                        <div class="item flex items-center gap-4"> <svg xmlns="http://www.w3.org/2000/svg"
                                                width="1em" height="1em" fill="currentColor" viewBox="0 0 256 256"
                                                class="text-placehover text-3xl">
                                                <path
                                                    d="M172.24,99.76a6,6,0,0,1,0,8.48l-56,56a6,6,0,0,1-8.48,0l-24-24a6,6,0,0,1,8.48-8.48L112,151.51l51.76-51.75A6,6,0,0,1,172.24,99.76ZM230,128A102,102,0,1,1,128,26,102.12,102.12,0,0,1,230,128Zm-12,0a90,90,0,1,0-90,90A90.1,90.1,0,0,0,218,128Z">
                                                </path>
                                            </svg>
                                            <div class="body3 text-placehover">Unlimited Projects</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="w-full lg:w-1/3">
                                <div class="pricing-item py-9 px-6 rounded-xl box-shadow">
                                    <div class="heading6">Enterprise</div>
                                    <div class="price flex items-end gap-2 mt-5">
                                        <div class="heading2">$100</div>
                                        <div class="body3">/ Month</div>
                                    </div>
                                    <div class="button-block w-full mt-6"><a
                                            class="button-main text-center block hover:text-white hover:bg-blue bg-white border border-blue text-black text-button w-full py-3 rounded-full"
                                            href="#!">Get Started</a></div>
                                    <div class="list-feature md:mt-10 mt-6 flex flex-col gap-3">
                                        <div class="item flex items-center gap-4"> <svg xmlns="http://www.w3.org/2000/svg"
                                                width="1em" height="1em" fill="currentColor" viewBox="0 0 256 256"
                                                class="text-blue text-3xl">
                                                <path
                                                    d="M128,24A104,104,0,1,0,232,128,104.11,104.11,0,0,0,128,24Zm45.66,85.66-56,56a8,8,0,0,1-11.32,0l-24-24a8,8,0,0,1,11.32-11.32L112,148.69l50.34-50.35a8,8,0,0,1,11.32,11.32Z">
                                                </path>
                                            </svg>
                                            <div class="body3">20,000+ of PNG & SVG graphics</div>
                                        </div>
                                        <div class="item flex items-center gap-4"> <svg xmlns="http://www.w3.org/2000/svg"
                                                width="1em" height="1em" fill="currentColor" viewBox="0 0 256 256"
                                                class="text-blue text-3xl">
                                                <path
                                                    d="M128,24A104,104,0,1,0,232,128,104.11,104.11,0,0,0,128,24Zm45.66,85.66-56,56a8,8,0,0,1-11.32,0l-24-24a8,8,0,0,1,11.32-11.32L112,148.69l50.34-50.35a8,8,0,0,1,11.32,11.32Z">
                                                </path>
                                            </svg>
                                            <div class="body3">Access to 100 million stock images</div>
                                        </div>
                                        <div class="item flex items-center gap-4"> <svg xmlns="http://www.w3.org/2000/svg"
                                                width="1em" height="1em" fill="currentColor" viewBox="0 0 256 256"
                                                class="text-blue text-3xl">
                                                <path
                                                    d="M128,24A104,104,0,1,0,232,128,104.11,104.11,0,0,0,128,24Zm45.66,85.66-56,56a8,8,0,0,1-11.32,0l-24-24a8,8,0,0,1,11.32-11.32L112,148.69l50.34-50.35a8,8,0,0,1,11.32,11.32Z">
                                                </path>
                                            </svg>
                                            <div class="body3">Upload custom icons and fonts</div>
                                        </div>
                                        <div class="item flex items-center gap-4"> <svg xmlns="http://www.w3.org/2000/svg"
                                                width="1em" height="1em" fill="currentColor" viewBox="0 0 256 256"
                                                class="text-blue text-3xl">
                                                <path
                                                    d="M128,24A104,104,0,1,0,232,128,104.11,104.11,0,0,0,128,24Zm45.66,85.66-56,56a8,8,0,0,1-11.32,0l-24-24a8,8,0,0,1,11.32-11.32L112,148.69l50.34-50.35a8,8,0,0,1,11.32,11.32Z">
                                                </path>
                                            </svg>
                                            <div class="body3">Unlimited Sharing</div>
                                        </div>
                                        <div class="item flex items-center gap-4"> <svg xmlns="http://www.w3.org/2000/svg"
                                                width="1em" height="1em" fill="currentColor" viewBox="0 0 256 256"
                                                class="text-blue text-3xl">
                                                <path
                                                    d="M128,24A104,104,0,1,0,232,128,104.11,104.11,0,0,0,128,24Zm45.66,85.66-56,56a8,8,0,0,1-11.32,0l-24-24a8,8,0,0,1,11.32-11.32L112,148.69l50.34-50.35a8,8,0,0,1,11.32,11.32Z">
                                                </path>
                                            </svg>
                                            <div class="body3">Upload graphics & video in up to 4k</div>
                                        </div>
                                        <div class="item flex items-center gap-4"> <svg xmlns="http://www.w3.org/2000/svg"
                                                width="1em" height="1em" fill="currentColor" viewBox="0 0 256 256"
                                                class="text-blue text-3xl">
                                                <path
                                                    d="M128,24A104,104,0,1,0,232,128,104.11,104.11,0,0,0,128,24Zm45.66,85.66-56,56a8,8,0,0,1-11.32,0l-24-24a8,8,0,0,1,11.32-11.32L112,148.69l50.34-50.35a8,8,0,0,1,11.32,11.32Z">
                                                </path>
                                            </svg>
                                            <div class="body3">Unlimited Projects</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="list-pricing-year hide lg:mt-[60px] mt-8">
                        <div class="flex max-lg:flex-col gap-8">
                            <div class="w-full lg:w-1/3">
                                <div class="pricing-item py-9 px-6 rounded-xl box-shadow">
                                    <div class="heading6">Freebie</div>
                                    <div class="price flex items-end gap-2 mt-5">
                                        <div class="heading2">$0</div>
                                        <div class="body3">/ Year</div>
                                    </div>
                                    <div class="button-block w-full mt-6"><a
                                            class="button-main text-center block hover:text-white hover:bg-blue bg-white border border-blue text-black text-button w-full py-3 rounded-full"
                                            href="#!">Get Started</a></div>
                                    <div class="list-feature md:mt-10 mt-6 flex flex-col gap-3">
                                        <div class="item flex items-center gap-4"> <svg xmlns="http://www.w3.org/2000/svg"
                                                width="1em" height="1em" fill="currentColor" viewBox="0 0 256 256"
                                                class="text-blue text-3xl">
                                                <path
                                                    d="M128,24A104,104,0,1,0,232,128,104.11,104.11,0,0,0,128,24Zm45.66,85.66-56,56a8,8,0,0,1-11.32,0l-24-24a8,8,0,0,1,11.32-11.32L112,148.69l50.34-50.35a8,8,0,0,1,11.32,11.32Z">
                                                </path>
                                            </svg>
                                            <div class="body3">20,000+ of PNG & SVG graphics</div>
                                        </div>
                                        <div class="item flex items-center gap-4"> <svg xmlns="http://www.w3.org/2000/svg"
                                                width="1em" height="1em" fill="currentColor" viewBox="0 0 256 256"
                                                class="text-blue text-3xl">
                                                <path
                                                    d="M128,24A104,104,0,1,0,232,128,104.11,104.11,0,0,0,128,24Zm45.66,85.66-56,56a8,8,0,0,1-11.32,0l-24-24a8,8,0,0,1,11.32-11.32L112,148.69l50.34-50.35a8,8,0,0,1,11.32,11.32Z">
                                                </path>
                                            </svg>
                                            <div class="body3">Access to 100 million stock images</div>
                                        </div>
                                        <div class="item flex items-center gap-4"> <svg xmlns="http://www.w3.org/2000/svg"
                                                width="1em" height="1em" fill="currentColor" viewBox="0 0 256 256"
                                                class="text-placehover text-3xl">
                                                <path
                                                    d="M172.24,99.76a6,6,0,0,1,0,8.48l-56,56a6,6,0,0,1-8.48,0l-24-24a6,6,0,0,1,8.48-8.48L112,151.51l51.76-51.75A6,6,0,0,1,172.24,99.76ZM230,128A102,102,0,1,1,128,26,102.12,102.12,0,0,1,230,128Zm-12,0a90,90,0,1,0-90,90A90.1,90.1,0,0,0,218,128Z">
                                                </path>
                                            </svg>
                                            <div class="body3 text-placehover">Upload custom icons and fonts</div>
                                        </div>
                                        <div class="item flex items-center gap-4"> <svg xmlns="http://www.w3.org/2000/svg"
                                                width="1em" height="1em" fill="currentColor" viewBox="0 0 256 256"
                                                class="text-placehover text-3xl">
                                                <path
                                                    d="M172.24,99.76a6,6,0,0,1,0,8.48l-56,56a6,6,0,0,1-8.48,0l-24-24a6,6,0,0,1,8.48-8.48L112,151.51l51.76-51.75A6,6,0,0,1,172.24,99.76ZM230,128A102,102,0,1,1,128,26,102.12,102.12,0,0,1,230,128Zm-12,0a90,90,0,1,0-90,90A90.1,90.1,0,0,0,218,128Z">
                                                </path>
                                            </svg>
                                            <div class="body3 text-placehover">Unlimited Sharing</div>
                                        </div>
                                        <div class="item flex items-center gap-4"> <svg xmlns="http://www.w3.org/2000/svg"
                                                width="1em" height="1em" fill="currentColor" viewBox="0 0 256 256"
                                                class="text-placehover text-3xl">
                                                <path
                                                    d="M172.24,99.76a6,6,0,0,1,0,8.48l-56,56a6,6,0,0,1-8.48,0l-24-24a6,6,0,0,1,8.48-8.48L112,151.51l51.76-51.75A6,6,0,0,1,172.24,99.76ZM230,128A102,102,0,1,1,128,26,102.12,102.12,0,0,1,230,128Zm-12,0a90,90,0,1,0-90,90A90.1,90.1,0,0,0,218,128Z">
                                                </path>
                                            </svg>
                                            <div class="body3 text-placehover">Upload graphics & video in up to 4k
                                            </div>
                                        </div>
                                        <div class="item flex items-center gap-4"> <svg xmlns="http://www.w3.org/2000/svg"
                                                width="1em" height="1em" fill="currentColor" viewBox="0 0 256 256"
                                                class="text-placehover text-3xl">
                                                <path
                                                    d="M172.24,99.76a6,6,0,0,1,0,8.48l-56,56a6,6,0,0,1-8.48,0l-24-24a6,6,0,0,1,8.48-8.48L112,151.51l51.76-51.75A6,6,0,0,1,172.24,99.76ZM230,128A102,102,0,1,1,128,26,102.12,102.12,0,0,1,230,128Zm-12,0a90,90,0,1,0-90,90A90.1,90.1,0,0,0,218,128Z">
                                                </path>
                                            </svg>
                                            <div class="body3 text-placehover">Unlimited Projects</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="w-full lg:w-1/3">
                                <div class="pricing-item py-9 px-6 rounded-xl box-shadow bg-blue text-white">
                                    <div class="heading6">Professional</div>
                                    <div class="price flex items-end gap-2 mt-5">
                                        <div class="heading2">$200</div>
                                        <div class="body3">/ Year</div>
                                    </div>
                                    <div class="button-block w-full mt-6"><a
                                            class="button-main text-center block hover-button-black bg-white border border-blue text-black text-button w-full py-3 rounded-full"
                                            href="#!">Get Started</a></div>
                                    <div class="list-feature md:mt-10 mt-6 flex flex-col gap-3">
                                        <div class="item flex items-center gap-4"> <svg xmlns="http://www.w3.org/2000/svg"
                                                width="1em" height="1em" fill="currentColor" viewBox="0 0 256 256"
                                                class="text-white text-3xl">
                                                <path
                                                    d="M128,24A104,104,0,1,0,232,128,104.11,104.11,0,0,0,128,24Zm45.66,85.66-56,56a8,8,0,0,1-11.32,0l-24-24a8,8,0,0,1,11.32-11.32L112,148.69l50.34-50.35a8,8,0,0,1,11.32,11.32Z">
                                                </path>
                                            </svg>
                                            <div class="body3">20,000+ of PNG & SVG graphics</div>
                                        </div>
                                        <div class="item flex items-center gap-4"> <svg xmlns="http://www.w3.org/2000/svg"
                                                width="1em" height="1em" fill="currentColor" viewBox="0 0 256 256"
                                                class="text-white text-3xl">
                                                <path
                                                    d="M128,24A104,104,0,1,0,232,128,104.11,104.11,0,0,0,128,24Zm45.66,85.66-56,56a8,8,0,0,1-11.32,0l-24-24a8,8,0,0,1,11.32-11.32L112,148.69l50.34-50.35a8,8,0,0,1,11.32,11.32Z">
                                                </path>
                                            </svg>
                                            <div class="body3">Access to 100 million stock images</div>
                                        </div>
                                        <div class="item flex items-center gap-4"> <svg xmlns="http://www.w3.org/2000/svg"
                                                width="1em" height="1em" fill="currentColor" viewBox="0 0 256 256"
                                                class="text-white text-3xl">
                                                <path
                                                    d="M128,24A104,104,0,1,0,232,128,104.11,104.11,0,0,0,128,24Zm45.66,85.66-56,56a8,8,0,0,1-11.32,0l-24-24a8,8,0,0,1,11.32-11.32L112,148.69l50.34-50.35a8,8,0,0,1,11.32,11.32Z">
                                                </path>
                                            </svg>
                                            <div class="body3">Upload custom icons and fonts</div>
                                        </div>
                                        <div class="item flex items-center gap-4"> <svg xmlns="http://www.w3.org/2000/svg"
                                                width="1em" height="1em" fill="currentColor" viewBox="0 0 256 256"
                                                class="text-white text-3xl">
                                                <path
                                                    d="M128,24A104,104,0,1,0,232,128,104.11,104.11,0,0,0,128,24Zm45.66,85.66-56,56a8,8,0,0,1-11.32,0l-24-24a8,8,0,0,1,11.32-11.32L112,148.69l50.34-50.35a8,8,0,0,1,11.32,11.32Z">
                                                </path>
                                            </svg>
                                            <div class="body3">Unlimited Sharing</div>
                                        </div>
                                        <div class="item flex items-center gap-4"> <svg xmlns="http://www.w3.org/2000/svg"
                                                width="1em" height="1em" fill="currentColor" viewBox="0 0 256 256"
                                                class="text-placehover text-3xl">
                                                <path
                                                    d="M172.24,99.76a6,6,0,0,1,0,8.48l-56,56a6,6,0,0,1-8.48,0l-24-24a6,6,0,0,1,8.48-8.48L112,151.51l51.76-51.75A6,6,0,0,1,172.24,99.76ZM230,128A102,102,0,1,1,128,26,102.12,102.12,0,0,1,230,128Zm-12,0a90,90,0,1,0-90,90A90.1,90.1,0,0,0,218,128Z">
                                                </path>
                                            </svg>
                                            <div class="body3 text-placehover">Upload graphics & video in up to 4k
                                            </div>
                                        </div>
                                        <div class="item flex items-center gap-4"> <svg xmlns="http://www.w3.org/2000/svg"
                                                width="1em" height="1em" fill="currentColor" viewBox="0 0 256 256"
                                                class="text-placehover text-3xl">
                                                <path
                                                    d="M172.24,99.76a6,6,0,0,1,0,8.48l-56,56a6,6,0,0,1-8.48,0l-24-24a6,6,0,0,1,8.48-8.48L112,151.51l51.76-51.75A6,6,0,0,1,172.24,99.76ZM230,128A102,102,0,1,1,128,26,102.12,102.12,0,0,1,230,128Zm-12,0a90,90,0,1,0-90,90A90.1,90.1,0,0,0,218,128Z">
                                                </path>
                                            </svg>
                                            <div class="body3 text-placehover">Unlimited Projects</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="w-full lg:w-1/3">
                                <div class="pricing-item py-9 px-6 rounded-xl box-shadow">
                                    <div class="heading6">Enterprise</div>
                                    <div class="price flex items-end gap-2 mt-5">
                                        <div class="heading2">$800</div>
                                        <div class="body3">/ Year</div>
                                    </div>
                                    <div class="button-block w-full mt-6"><a
                                            class="button-main text-center block hover:text-white hover:bg-blue bg-white border border-blue text-black text-button w-full py-3 rounded-full"
                                            href="#!">Get Started</a></div>
                                    <div class="list-feature md:mt-10 mt-6 flex flex-col gap-3">
                                        <div class="item flex items-center gap-4"> <svg xmlns="http://www.w3.org/2000/svg"
                                                width="1em" height="1em" fill="currentColor" viewBox="0 0 256 256"
                                                class="text-blue text-3xl">
                                                <path
                                                    d="M128,24A104,104,0,1,0,232,128,104.11,104.11,0,0,0,128,24Zm45.66,85.66-56,56a8,8,0,0,1-11.32,0l-24-24a8,8,0,0,1,11.32-11.32L112,148.69l50.34-50.35a8,8,0,0,1,11.32,11.32Z">
                                                </path>
                                            </svg>
                                            <div class="body3">20,000+ of PNG & SVG graphics</div>
                                        </div>
                                        <div class="item flex items-center gap-4"> <svg xmlns="http://www.w3.org/2000/svg"
                                                width="1em" height="1em" fill="currentColor" viewBox="0 0 256 256"
                                                class="text-blue text-3xl">
                                                <path
                                                    d="M128,24A104,104,0,1,0,232,128,104.11,104.11,0,0,0,128,24Zm45.66,85.66-56,56a8,8,0,0,1-11.32,0l-24-24a8,8,0,0,1,11.32-11.32L112,148.69l50.34-50.35a8,8,0,0,1,11.32,11.32Z">
                                                </path>
                                            </svg>
                                            <div class="body3">Access to 100 million stock images</div>
                                        </div>
                                        <div class="item flex items-center gap-4"> <svg xmlns="http://www.w3.org/2000/svg"
                                                width="1em" height="1em" fill="currentColor" viewBox="0 0 256 256"
                                                class="text-blue text-3xl">
                                                <path
                                                    d="M128,24A104,104,0,1,0,232,128,104.11,104.11,0,0,0,128,24Zm45.66,85.66-56,56a8,8,0,0,1-11.32,0l-24-24a8,8,0,0,1,11.32-11.32L112,148.69l50.34-50.35a8,8,0,0,1,11.32,11.32Z">
                                                </path>
                                            </svg>
                                            <div class="body3">Upload custom icons and fonts</div>
                                        </div>
                                        <div class="item flex items-center gap-4"> <svg xmlns="http://www.w3.org/2000/svg"
                                                width="1em" height="1em" fill="currentColor" viewBox="0 0 256 256"
                                                class="text-blue text-3xl">
                                                <path
                                                    d="M128,24A104,104,0,1,0,232,128,104.11,104.11,0,0,0,128,24Zm45.66,85.66-56,56a8,8,0,0,1-11.32,0l-24-24a8,8,0,0,1,11.32-11.32L112,148.69l50.34-50.35a8,8,0,0,1,11.32,11.32Z">
                                                </path>
                                            </svg>
                                            <div class="body3">Unlimited Sharing</div>
                                        </div>
                                        <div class="item flex items-center gap-4"> <svg xmlns="http://www.w3.org/2000/svg"
                                                width="1em" height="1em" fill="currentColor" viewBox="0 0 256 256"
                                                class="text-blue text-3xl">
                                                <path
                                                    d="M128,24A104,104,0,1,0,232,128,104.11,104.11,0,0,0,128,24Zm45.66,85.66-56,56a8,8,0,0,1-11.32,0l-24-24a8,8,0,0,1,11.32-11.32L112,148.69l50.34-50.35a8,8,0,0,1,11.32,11.32Z">
                                                </path>
                                            </svg>
                                            <div class="body3">Upload graphics & video in up to 4k</div>
                                        </div>
                                        <div class="item flex items-center gap-4"> <svg xmlns="http://www.w3.org/2000/svg"
                                                width="1em" height="1em" fill="currentColor" viewBox="0 0 256 256"
                                                class="text-blue text-3xl">
                                                <path
                                                    d="M128,24A104,104,0,1,0,232,128,104.11,104.11,0,0,0,128,24Zm45.66,85.66-56,56a8,8,0,0,1-11.32,0l-24-24a8,8,0,0,1,11.32-11.32L112,148.69l50.34-50.35a8,8,0,0,1,11.32,11.32Z">
                                                </path>
                                            </svg>
                                            <div class="body3">Unlimited Projects</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
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
