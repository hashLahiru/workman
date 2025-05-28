<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function sendContact(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:100',
            'email' => 'required|email|max:100',
            'subject' => 'required|string|max:150',
            'message' => 'required|string|max:500',
            'privacy_policy' => 'accepted',
        ]);
        try {
            Mail::to('hasinthalahiru333@gmail.com')->send(new \App\Mail\ContactMail($data));
            Mail::to($data['email'])->send(new \App\Mail\ThankYouMail($data));
            Log::info("Contact Request email sent successfully", $data);
            return back()->with('success', 'Contact request sent successfully!');
        } catch (\Exception $e) {
            Log::error("Failed to send inquiry email: " . $e->getMessage());
            return back()->with('error', 'Failed to Contact request. Please try again later.');
        }
    }
}
