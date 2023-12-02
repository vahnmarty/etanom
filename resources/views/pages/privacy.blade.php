@extends('layouts.guest')

@section('seo')
    @include('includes.partials.seo', [
        'title' => 'eTanom - Privacy Polict',
        'url' => request()->url(),
        'description' => 'We plant and nurture forests for you.',
        'image' => url('img/plant.png'),
        'keywords' => 'sikai, galansiyang, reforestation, climate change, newsletter, gforest',
    ])
@endsection

@section('content')
<div>
    <section class="max-w-5xl px-8 mx-auto">
        <h1 class="mt-16 text-4xl font-bold text-center lg:text-4xl md:text-left">Privacy Policy</h1>
        
        <div class="min-h-screen py-16">
            
            <h3 class="mt-8 font-bold">1. Information Collected</h3>
            <p>We collect the following information during the registration process: name and email. This information is used for account management and communication purposes.</p>

            <h3 class="mt-8 font-bold">2. Use of Information</h3>
            <p>The collected information is used to provide and improve our reforestation services. This includes account management, communication with users, and monitoring tree planting progress through the eTanom dashboard.</p>

            <h3 class="mt-8 font-bold">3. Data Security</h3>
            <p>eTanom employs industry-standard security measures to protect user information. However, it's important to note that no method of transmission over the internet or electronic storage is 100% secure.</p>

            <h3 class="mt-8 font-bold">4. Sharing of Information</h3>
            <p>We do not share user information with third parties, except as required by law or with explicit user consent. We do not sell or trade user data.</p>

            <h3 class="mt-8 font-bold">5. Cookies</h3>
            <p>eTanom may use cookies to enhance user experience. Users can modify their browser settings to disable cookies, but this may affect the functionality of the platform.</p>

            <h3 class="mt-8 font-bold">6. Third-Party Links</h3>
            <p>eTanom may contain links to third-party websites. We are not responsible for the privacy practices or content of these external sites.</p>

            <h3 class="mt-8 font-bold">7. Changes to Privacy Policy</h3>
            <p>Changes to the privacy policy will be communicated to users through platform notifications. Users are encouraged to review the policy periodically.</p>

            <h3 class="mt-8 font-bold">8. Contact Information</h3>
            <p>If you have any questions or concerns regarding this privacy policy, please contact us at <a href="mailto:hello@etanom.com" class="font-bold">hello@etanom.com</a></p>



            
        </div>
    </section>
</div>
@endsection
