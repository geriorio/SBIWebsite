<?php

namespace App\Http\Controllers;

use App\Models\ContactForm;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ContactFormController extends Controller
{
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'full_name' => 'required|string|max:255',
            'email' => 'required|email:rfc,dns|max:255',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
            'source' => 'nullable|string|in:service,about,contact',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => $validator->errors()->first(),
                'errors' => $validator->errors()
            ], 422);
        }

        // Check for duplicate email in last 24 hours
        $existingContact = ContactForm::where('email', $request->email)
            ->where('created_at', '>=', now()->subHours(24))
            ->first();

        if ($existingContact) {
            return response()->json([
                'success' => false,
                'message' => 'You have already submitted a contact request. We will respond to your previous message soon.'
            ], 409);
        }

        try {
            $contactForm = ContactForm::create([
                'full_name' => $request->full_name,
                'email' => $request->email,
                'subject' => $request->subject,
                'message' => $request->message,
                'source' => $request->source ?? 'service',
                'status' => 'new',
            ]);

            return response()->json([
                'success' => true,
                'message' => 'Thank you for contacting us! We will respond within 24 hours.',
                'data' => $contactForm
            ], 201);

        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'An error occurred. Please try again later.'
            ], 500);
        }
    }
}
