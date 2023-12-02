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
            
            <h3 class="mt-8 font-bold">1. Introduction</h3>
            <p>Welcome to eTanom, the reforestation platform provided by Sikai Inc. By using our services, you agree to comply with and be bound by the following terms and conditions.</p>

            <h3 class="mt-8 font-bold">2. User Accounts</h3>
            <p>Users are required to register an account to access certain features of the platform. The information collected during registration includes name and email. User accounts may be terminated by eTanom under certain circumstances, as outlined in Section 9.</p>

            <h3 class="mt-8 font-bold">3. Drone Reforestation and Seedballs</h3>
            <p>eTanom utilizes drone reforestation for tree planting. Seedballs are the products available for purchase on the platform. Intellectual property, including content and technology, is owned by Sikai Inc.</p>

            <h3 class="mt-8 font-bold">4. Monitoring and Certificates</h3>
            <p>Users can monitor their tree planting progress through the eTanom dashboard. Tree planting certificates will be provided to users upon completion of the planting process.</p>

            <h3 class="mt-8 font-bold">5. Payment and Cancellation</h3>
            <p>Payments for seedballs are processed like an e-commerce transaction. Cancellations are accepted up to 30 days before the scheduled tree planting date. Refunds are not provided.</p>

            <h3 class="mt-8 font-bold">6. User Responsibilities</h3>
            <p>Users are responsible for the accuracy of the information provided during registration. Users must comply with acceptable conduct guidelines outlined in Section 7.</p>

            <h3 class="mt-8 font-bold">7. User Conduct</h3>
            <p>Users are expected to use the platform responsibly and ethically. Unacceptable conduct may result in the termination of the user account.</p>

            <h3 class="mt-8 font-bold">8. Governing Law</h3>
            <p>These terms and conditions are governed by the laws of the Philippines.</p>

            <h3 class="mt-8 font-bold">9. Termination of Accounts/Services</h3>
            <p>eTanom reserves the right to terminate user accounts or services under certain conditions, including violation of terms.</p>

            <h3 class="mt-8 font-bold">10. Changes to Terms and Conditions</h3>
            <p>Users will be informed of changes to terms and conditions through platform notifications.</p>

            <h3 class="mt-8 font-bold">11. Disclaimer of Liability</h3>
            <p>eTanom limits its liability as outlined in a separate disclaimer document.</p>

            <h3 class="mt-8 font-bold">12. Dispute Resolution</h3>
            <p>Disputes will be resolved according to the dispute resolution process outlined in a separate document.</p>

            
        </div>
    </section>
</div>
@endsection
