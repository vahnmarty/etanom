@extends('layouts.blank')

@section('seo')
    @include('includes.partials.seo', [
        'title' => 'eTanom Newsletter',
        'url' => request()->url(),
        'description' => 'Join our email list and get notified of when we launch eTanom this 2023!',
        'image' => url('img/og.jpeg'),
        'keywords' => 'sikai, galansiyang, reforestation, climate change, newsletter, gforest',
    ])
@endsection

@section('content')
    <div class="min-h-screen bg-left-top bg-no-repeat lg:max-h-screen lg:overflow-hidden lg:bg-center"
        style="background-image: url('img/bg-hero.png');">
        <div class="py-12 md:py-20 lg:py-20">
            <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
                <div class="grid gap-16 lg:grid-cols-2">
                    <div class="flex flex-col">
                        <div>
                            <img src="{{ asset('img/logo.svg') }}" alt="" class="w-auto h-6 lg:h-auto">
                        </div>

                        <h2 class="mt-16 text-4xl font-bold text-white lg:text-6xl">Sprouting Soon!</h2>

                        <h4 class="mt-8 text-xl font-bold leading-1 text-light-green lg:text-3xl">
                            Join our email list and get notified<br> of when we launch eTanom this 2023!
                        </h4>

                        <div
                            class="flex items-center justify-center w-full p-4 mx-auto mt-8 border-4 border-white rounded-sm bg-light-green lg:hidden">
                            <img src="{{ asset('img/preview.png') }}" class="w-auto h-32">
                        </div>

                        <p class="mt-8 text-sm font-light text-white lg:text-base">
                            Amazing deals and freebies await early adopters of our innovative platform for reforestation in
                            the Philippines.
                        </p>

                        <p class="mt-8 text-sm font-light text-white lg:text-base">
                            So don't hesitate to subscribe and join us on our mission to create a sustainable future!
                        </p>

                        <form action="{{ url('newsletter') }}" class="mt-8">
                            @csrf
                            <div class="flex border border-light-green">
                                <input type="email" name="email" autofocus
                                    class="flex-1 pl-4 text-white bg-transparent border-none placeholder:text-light-green hover:bg-light-green/20 focus:ring-1 focus:ring-inset focus:ring-light-green"
                                    placeholder="Enter your email">
                                <button type="submit" class="px-8 bg-light-green hover:bg-light-green/90">Notify
                                    Me!</button>
                            </div>
                        </form>

                        <div class="flex gap-4 mt-8 lg:mt-8">
                            <a href="mailto:hello@etanom.com">
                                <img src="{{ asset('img/email.svg') }}" alt="">
                            </a>
                            <a href="https://www.facebook.com/eTanomPH/">
                                <img src="{{ asset('img/facebook.svg') }}" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="flex-col justify-center hidden lg:flex">
                        <div
                            class="flex items-center justify-center w-64 h-64 p-10 mx-auto border-4 border-white rounded-full bg-light-green">
                            <img src="{{ asset('img/preview.png') }}" class="w-full h-auto">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
