@extends('layouts.guest')

@section('content')
    <div class="kenburns">
        @include('includes.header')
        <img src="{{ asset('img/hero1.png') }}" class="kenburns-img">
        <div class="absolute inset-0 top-0 z-10 bg-gray-900/40">
            <div class="flex flex-col items-center justify-center h-full text-center">
                <h1 class="font-extrabold tracking-wide text-white uppercase text-7xl">Easy Access <br>to Reforestation</h1>
                <p class="mt-8 text-2xl font-bold text-white">We plant and nurture forests for you.</p>

                <a href="" class="mt-8 btn-primary">Make an Impact Now</a>
            </div>
        </div>
    </div>

    <section class="max-w-5xl px-4 py-32 mx-auto bg-white sm:px-6">
        <div class="grid grid-cols-12 gap-8">
            <div class="col-span-7">
                <div class="p-6">
                    <img src="{{ asset('img/plant2.jpg') }}" alt="">
                    <a class="mt-2 text-sm italic"
                        href="https://www.freepik.com/free-photo/boy-are-stand-holding-seedlings-are-dry-land-warming-world_5469350.htm#query=climate%20change&position=4&from_view=search&track=robertav1_2_sidr">Image
                        by jcomp</a>
                </div>
            </div>
            <div class="col-span-5">
                <h3 class="text-3xl font-bold text-normal-green">It’s time to disrupt reforestation</h3>

                <p class="mt-8 text-lg text-gray-700">In order to protect and nurture our forests, we aim to plant trees
                    faster than we
                    are
                    cutting them. </p>

                <p class="mt-8 text-lg text-gray-700">We do this by using the latest technology, and engaging in multisector
                    collaboration!</p>

                <a href="" class="mt-8 btn-primary">Learn more</a>
            </div>
        </div>

        <div class="grid grid-cols-12 gap-8 py-16 mt-16">
            <div class="col-span-7">
                <h3 class="text-3xl font-extrabold text-normal-green">Start-to-finish <br>reforestation package</h3>

                <p class="mt-8 text-lg">There’s no need to stress about how to take immediate environmental action. </p>

                <div class="grid grid-cols-2 gap-8 mt-16">
                    <div>
                        <div class="flex items-center justify-center w-10 h-10 bg-gray-900 rounded-full">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="w-6 h-6 text-white">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M2.25 8.25h19.5M2.25 9h19.5m-16.5 5.25h6m-6 2.25h3m-3.75 3h15a2.25 2.25 0 002.25-2.25V6.75A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25v10.5A2.25 2.25 0 004.5 19.5z" />
                            </svg>
                        </div>
                        <h4 class="mt-8 font-bold">Avail a one time purchase, or start a monthly subscription.</h4>
                        <p class="mt-4 text-gray-700">Make an impact to the environment, by funding reforestation.</p>
                    </div>
                    <div>
                        <div class="flex items-center justify-center w-10 h-10 bg-gray-900 rounded-full">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="w-6 h-6 text-white">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M12.75 3.03v.568c0 .334.148.65.405.864l1.068.89c.442.369.535 1.01.216 1.49l-.51.766a2.25 2.25 0 01-1.161.886l-.143.048a1.107 1.107 0 00-.57 1.664c.369.555.169 1.307-.427 1.605L9 13.125l.423 1.059a.956.956 0 01-1.652.928l-.679-.906a1.125 1.125 0 00-1.906.172L4.5 15.75l-.612.153M12.75 3.031a9 9 0 00-8.862 12.872M12.75 3.031a9 9 0 016.69 14.036m0 0l-.177-.529A2.25 2.25 0 0017.128 15H16.5l-.324-.324a1.453 1.453 0 00-2.328.377l-.036.073a1.586 1.586 0 01-.982.816l-.99.282c-.55.157-.894.702-.8 1.267l.073.438c.08.474.49.821.97.821.846 0 1.598.542 1.865 1.345l.215.643m5.276-3.67a9.012 9.012 0 01-5.276 3.67m0 0a9 9 0 01-10.275-4.835M15.75 9c0 .896-.393 1.7-1.016 2.25" />
                            </svg>

                        </div>
                        <h4 class="mt-8 font-bold">Monitor your reforestation progress.</h4>
                        <p class="mt-4 text-gray-700">Keep track of where you money goes, and your environmental impact.</p>
                    </div>
                    <div>
                        <div class="flex items-center justify-center w-10 h-10 bg-gray-900 rounded-full">

                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="w-6 h-6 text-white">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M21 11.25v8.25a1.5 1.5 0 01-1.5 1.5H5.25a1.5 1.5 0 01-1.5-1.5v-8.25M12 4.875A2.625 2.625 0 109.375 7.5H12m0-2.625V7.5m0-2.625A2.625 2.625 0 1114.625 7.5H12m0 0V21m-8.625-9.75h18c.621 0 1.125-.504 1.125-1.125v-1.5c0-.621-.504-1.125-1.125-1.125h-18c-.621 0-1.125.504-1.125 1.125v1.5c0 .621.504 1.125 1.125 1.125z" />
                            </svg>


                        </div>
                        <h4 class="mt-8 font-bold">We do the tree-planting for you.</h4>
                        <p class="mt-4 text-gray-700">With your funding, we take care of everything and ensure the survival
                            of trees from seedling to full-grown.</p>
                    </div>
                    <div>
                        <div class="flex items-center justify-center w-10 h-10 bg-gray-900 rounded-full">

                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="w-6 h-6 text-white">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M3.75 13.5l10.5-11.25L12 10.5h8.25L9.75 21.75 12 13.5H3.75z" />
                            </svg>

                        </div>
                        <h4 class="mt-8 font-bold">We use innovative technology</h4>
                        <p class="mt-4 text-gray-700">Our drone reforestation approach is much faster than manual
                            tree-planting.</p>
                    </div>
                </div>
            </div>
            <div class="col-span-5">

                <div class="h-48 bg-gray-300 w-96"></div>

                <div class="mt-8">
                    <div class="h-48 bg-gray-300 w-96"></div>
                </div>

            </div>
        </div>

    </section>

    <div class="relative bg-light-green">

        <div class="relative py-24 mx-auto max-w-7xl sm:py-32 lg:px-8 lg:py-40">
            <div class="pl-6 pr-6 md:mr-auto md:w-2/3 md:pl-16 lg:w-1/2 lg:pr-24 lg:pl-0 xl:pr-32">
                <p class="mt-2 text-3xl font-extrabold tracking-tight text-gray-900 sm:text-4xl">
                    Be a digital tree-hugger and take action today!
                </p>
                <p class="mt-6 text-xl leading-7 text-gray-900">
                    Take your reforestation journey with us.
                    Create an account, and track your progress.

                </p>
                <div class="mt-8">
                    <a href="#"
                        class="inline-flex rounded-full bg-white px-6 py-2.5 text-sm font-semibold text-green-700 shadow-sm hover:bg-white/80 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-white">
                        Get Started
                    </a>
                </div>
            </div>
        </div>

        <div class="relative top-0 overflow-hidden bg-indigo-600 h-80 md:absolute md:right-0 md:h-full md:w-1/3 lg:w-1/2">
            <img class="object-cover w-full h-full" src="{{ asset('img/tree1.png') }}" alt="">
            <svg viewBox="0 0 926 676" aria-hidden="true"
                class="absolute -bottom-24 left-24 w-[57.875rem] transform-gpu blur-[118px]">
                <path fill="url(#60c3c621-93e0-4a09-a0e6-4c228a0116d8)" fill-opacity=".4"
                    d="m254.325 516.708-90.89 158.331L0 436.427l254.325 80.281 163.691-285.15c1.048 131.759 36.144 345.144 168.149 144.613C751.171 125.508 707.17-93.823 826.603 41.15c95.546 107.978 104.766 294.048 97.432 373.585L685.481 297.694l16.974 360.474-448.13-141.46Z" />
                <defs>
                    <linearGradient id="60c3c621-93e0-4a09-a0e6-4c228a0116d8" x1="926.392" x2="-109.635" y1=".176"
                        y2="321.024" gradientUnits="userSpaceOnUse">
                        <stop stop-color="#776FFF" />
                        <stop offset="1" stop-color="#FF4694" />
                    </linearGradient>
                </defs>
            </svg>
        </div>
    </div>

    <section class="max-w-3xl px-4 py-32 mx-auto bg-white sm:px-6">

        <div class="text-center">
            <h2 class="text-4xl font-extrabold text-normal-green">Not yet ready for any commitments? </h2>
            <p class="mt-6 text-2xl">
                No worries, you can still make a one time purchase without creating an account.
            </p>

            <form action="">

                <div class="flex items-center justify-center gap-6 mt-8">
                    <label class="text-lg">Trees to be planted</label>
                    <input type="number" class="w-32 py-2 text-center border border-gray-300 rounded-md h-9"
                        value="1">
                    <p class="text-lg">1 tree = Php 50.00</p>
                </div>
                <div class="mt-8">
                    <p>Amount of my purchase: <strong class="text-normal-green">Php 50.00</strong></p>
                </div>
                <div class="mt-8">
                    <button type="submit" class="btn-secondary">Let's Plant!</button>
                </div>
            </form>
        </div>
    </section>
@endsection
