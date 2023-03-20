<?php

namespace App\Http\Controllers;

use Mail;
use Illuminate\Http\Request;
use App\Mail\SubscribedToNewsletter;
use App\Models\NewsletterSubscription;

class NewsletterController extends Controller
{
    public function create(Request $request)
    {
        return view('newsletter.sent');
    }

    public function store(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
        ]);

        $subscription = new NewsletterSubscription;
        $subscription->email = $request->email;
        $subscription->save();

        try {
            Mail::to($request->email)->send(new SubscribedToNewsletter);

            $subscription->sent_at = now();
            $subscription->save();

            return redirect('newsletter.sent');

        } catch (\Throwable $th) {
            throw $th;
        }


        
    }
}
