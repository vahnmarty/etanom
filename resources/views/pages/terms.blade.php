@extends('layouts.guest')

@section('seo')
    @include('includes.partials.seo', [
        'title' => 'eTanom - Terms and Conditions',
        'url' => request()->url(),
        'description' => 'We plant and nurture forests for you.',
        'image' => url('img/plant.png'),
        'keywords' => 'sikai, galansiyang, reforestation, climate change, newsletter, gforest',
    ])
@endsection

@section('content')
<div>
    <section class="max-w-5xl px-8 mx-auto">
        <h1 class="mt-16 text-4xl font-bold text-center lg:text-4xl md:text-left">Terms and Conditions</h1>
        
        <div class="min-h-screen py-16">
        

            <h3 class="mt-8 font-bold">1. General Terms</h3>
            <p>eTanom, provided by Sikai Inc, offers a reforestation platform where users can purchase seedballs to contribute to tree planting. We employ a drone reforestation approach, and users can monitor their contributions through the eTanom dashboard.</p>

            <h3 class="mt-8 font-bold">2. Payments</h3>
            <p>Payments for seedballs are processed instantly as an e-commerce transaction. Users can buy seedballs at any time. We may involve third parties in providing certain services. The legal entity responsible for payment processing is Sikai Inc. These transactions are governed by the laws of the Philippines.</p>

            <h3 class="mt-8 font-bold">3. Privacy Policy</h3>
            <p><strong>Data Storage:</strong> We collect user information during registration, including name and email, for account management and communication purposes.</p>
            <p><strong>Data Sharing:</strong> We do not share user information with third parties except as required by law or with explicit user consent. We do not sell or trade user data.</p>
            <p><strong>Cookie Policy:</strong> eTanom may use cookies to enhance user experience. Users can modify their browser settings to disable cookies, but this may affect the functionality of the platform.</p>

            <h3 class="mt-8 font-bold">4. Delivery Information</h3>
            <p><strong>Delivery Time:</strong> The delivery time for seedballs varies and will be communicated during the purchasing process.</p>
            <p><strong>Delivery Countries:</strong> We deliver our products internationally.</p>

            <h3 class="mt-8 font-bold">5. Refund and Cancellation Policy</h3>
            <p><strong>Refund Policy:</strong> Refunds are not provided. Cancellations are accepted up to 30 days before the scheduled tree planting date.</p>
            <p><strong>Return Process:</strong> Users can cancel their order by contacting us at hello@etanom.com. The cancellation process will be communicated upon request.</p>

            <h3 class="mt-8 font-bold">6. Contact Information</h3>
            <p><strong>Legal Entity Name:</strong> Sikai Inc</p>
            <p><strong>Email Address:</strong> hello@etanom.com</p>
            <p><strong>Phone Number:</strong> +639171073440</p>


            
        </div>
    </section>
</div>
@endsection
