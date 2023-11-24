@extends('layouts.guest')

@section('seo')
    @include('includes.partials.seo', [
        'title' => 'eTanom - Easy Access to Reforestation',
        'url' => request()->url(),
        'description' => 'We plant and nurture forests for you.',
        'image' => url('img/plant.png'),
        'keywords' => 'sikai, galansiyang, reforestation, climate change, newsletter, gforest',
    ])
@endsection

@section('content')
<div>
    <section class="max-w-5xl px-8 py-16 mx-auto lg:py-24">

        <div class="grid items-center gap-8 md:grid-cols-2">
            <div>
                <h1 class="text-4xl font-bold text-center lg:text-4xl md:text-left">Easy access to reforestation.</h1>
                <p class="mt-8 text-xl text-center md:text-left">
                    We do the tree-planting for you using our drone reforestation approach. 
                </p>

                <div class="text-center md:text-left">
                    <a href="{{ url('register') }}" class="inline-block px-6 py-3 mx-auto mt-6 text-sm font-semibold text-white uppercase rounded-md md:inline-flex bg-normal-green hover:bg-gray-900 ">Get Started</a>
                </div>
            </div>
            <div class="flex justify-center">
                <div class="relative">
                    <img src="{{ asset('img/macbook.png') }}" class="w-full h-auto">
                    <div class="absolute top-[2rem] left-[3.55rem] right-[3.55rem]">
                        <img src="{{ asset('img/app.png') }}" alt="" class="w-full">
                    </div>
                </div>
            </div>
        </div>
        
    </section>
    <section class="bg-gray-200">
        <div class="max-w-5xl px-8 py-16 mx-auto lg:py-24">
            <div class="grid gap-8 sm:grid-cols-3">
                <div class="text-center">
                    <img src="{{ asset('img/carbon-footprint.png') }}" alt="" class="w-32 h-32 mx-auto">

                    <h3 class="mt-8 text-lg font-bold text-gray-600">Calculate your Carbon footprint</h3>
                    <p class="mt-2 text-sm text-gray-600">Use our intuitive calculator to find out how much CO₂ you emit.</p>
                </div>

                <div class="text-center">
                    <img src="{{ asset('img/seed.png') }}" alt="" class="w-32 h-32 mx-auto">

                    <h3 class="mt-8 text-lg font-bold text-gray-600">Purchase Seedballs</h3>
                    <p class="mt-2 text-sm text-gray-600">
                        For only <strong>{{ \App\Models\Seedball::displayPrice() }},</strong> you can make an instant impact and play a part in nurturing the planet's green future.
                    </p>
                </div>

                <div class="text-center">
                    <img src="{{ asset('img/dashboard.png') }}" alt="" class="w-32 h-32 mx-auto">

                    <h3 class="mt-8 text-lg font-bold text-gray-600">Monitor your Progress</h3>
                    <p class="mt-2 text-sm text-gray-600">
                        Keep track of where you money goes, and your environmental impact.
                    </p>
                </div>

            </div>
        </div>
    </section>
</div>
@endsection
