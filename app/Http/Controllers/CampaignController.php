<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Campaign;
use App\Mail\PhishingEmail;
use Illuminate\Support\Facades\Mail;

class CampaignController extends Controller
{
    public function store(Request $request)
    {
        // Create new phishing campaign
        Campaign::create($request->all());

        // Send phishing email
        Mail::to($request->target_email)->send(
            new PhishingEmail($request->phishing_url)
        );

        return redirect()->route('campaigns.index')
                         ->with('success', 'Campaign created and email sent successfully.');
    }
}
