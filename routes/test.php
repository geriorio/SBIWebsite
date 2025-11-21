<?php

use Illuminate\Support\Facades\Route;
use App\Models\NewsletterSubscription;

Route::get('/test-newsletter-submit', function() {
    try {
        $sub = NewsletterSubscription::create([
            'email' => 'webtest@example.com',
            'status' => 'active',
            'subscribed_at' => now(),
        ]);
        
        return response()->json([
            'success' => true,
            'message' => 'Test subscription created',
            'data' => $sub,
            'total_count' => NewsletterSubscription::count()
        ]);
    } catch (\Exception $e) {
        return response()->json([
            'success' => false,
            'error' => $e->getMessage()
        ], 500);
    }
});

Route::post('/test-newsletter-api', function(\Illuminate\Http\Request $request) {
    $validator = \Illuminate\Support\Facades\Validator::make($request->all(), [
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
        $existing = NewsletterSubscription::where('email', $request->email)->first();

        if ($existing && $existing->status === 'active') {
            return response()->json([
                'success' => false,
                'message' => 'This email is already subscribed.'
            ], 409);
        }

        $sub = NewsletterSubscription::create([
            'email' => $request->email,
            'status' => 'active',
            'subscribed_at' => now(),
        ]);

        return response()->json([
            'success' => true,
            'message' => 'Thank you for subscribing!',
            'data' => $sub
        ], 201);

    } catch (\Exception $e) {
        return response()->json([
            'success' => false,
            'message' => $e->getMessage()
        ], 500);
    }
});
