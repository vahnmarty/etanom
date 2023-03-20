@extends('layouts.blank')

@section('content')
    <div class="min-h-screen bg-left-top bg-no-repeat lg:max-h-screen lg:overflow-hidden lg:bg-center"
        style="background-image: url('https://etanom-assets.s3.ap-northeast-1.amazonaws.com/images/bg-hero.webp')">
        <div class="flex flex-col items-center justify-center min-h-screen">
            <div class="px-4 mx-auto sm:px-6 lg:max-w-xl lg:px-8">
                <div>
                    <div>
                        <div>
                            <img src="{{ asset('img/logo.svg') }}" alt="" class="w-auto h-6 lg:h-auto">
                        </div>
                        <h2 class="mt-16 font-bold text-white lg:text-2xl">Thank you for subscribing to our newsletter.</h2>

                        <p class="mt-8 text-white/80">Stay tuned for valuable insights and exclusive offers delivered straight to your inbox.</p>

                        <div class="flex gap-4 mt-8 lg:mt-8">
                            <a href="mailto:hello@etanom.com">
                                <img src="{{ asset('img/email.svg') }}" alt="">
                            </a>
                            <a href="https://www.facebook.com/eTanomPH/">
                                <img src="{{ asset('img/facebook.svg') }}" alt="">
                            </a>
                        </div>
                    </div>
                  
                </div>
            </div>
        </div>
    </div>
@endsection
