<?php

namespace App\Http\Controllers;

use App\Models\NewsletterSubscription;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class NewsletterController extends Controller
{
    public function subscribe(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email:rfc|max:255',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => $validator->errors()->first(),
                'errors' => $validator->errors()
            ], 422);
        }

        try {
            // Check if email already exists
            $existing = NewsletterSubscription::where('email', $request->email)->first();

            if ($existing) {
                if ($existing->status === 'active') {
                    return response()->json([
                        'success' => false,
                        'message' => 'This email is already subscribed to our newsletter.'
                    ], 409);
                } else {
                    // Reactivate subscription
                    $existing->update([
                        'status' => 'active',
                        'subscribed_at' => now(),
                        'unsubscribed_at' => null,
                    ]);

                    return response()->json([
                        'success' => true,
                        'message' => 'Welcome back! You have been resubscribed to our newsletter.'
                    ], 200);
                }
            }

            // Create new subscription
            NewsletterSubscription::create([
                'email' => $request->email,
                'status' => 'active',
                'subscribed_at' => now(),
            ]);

            return response()->json([
                'success' => true,
                'message' => 'Thank you for subscribing! You will receive our monthly insights and updates.'
            ], 201);

        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'An error occurred. Please try again later.'
            ], 500);
        }
    }
}
