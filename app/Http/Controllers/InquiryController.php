<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

class InquiryController extends Controller
{
    public function sendContact(Request $request)
    {
        $data = $request->validate([
            'workman_type' => 'required|string|max:100',
            'name' => 'required|string|max:100',
            'district' => 'required|string|max:100',
            'area' => 'required|string|max:100',
            'contact_number' => 'required|string|max:20',
            'address' => 'required|string|max:255',
            'notes' => 'nullable|string|max:500',
        ]);
        try {
            Mail::to('hasinthalahiru333@gmail.com')->send(new \App\Mail\InquiryMail($data));
            Log::info("Inquiry email sent successfully", $data);
            return back()->with('success', 'Inquiry sent successfully!');
        } catch (\Exception $e) {
            Log::error("Failed to send inquiry email: " . $e->getMessage());
            return back()->with('error', 'Failed to send inquiry. Please try again later.');
        }
    }
}
