<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsletterController extends Controller
{
    public function create(Request $request)
    {
        return view('newsletter');
    }
}
