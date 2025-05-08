<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreQuoteRequest;
use App\Models\Quote;
use Illuminate\Support\Str;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //


    public function welcome()
    {
        return view('welcome', [
            'shipmentTypes' => ['By Air', 'By Ship', 'By Road'],
            'incoterms' => ['EXW', 'FCA', 'FOB', 'CIF', 'DAP', 'DDP']
        ]);
    }

    public function quote()
    {
        return view('quotedetails');
    }







    public function store(StoreQuoteRequest $request)
    {
        $validated = $request->validated();

        // Handle image uploads
        $images = [
            'image_1' => null,
            'image_2' => null,
            'image_3' => null,
            'image_4' => null,
        ];
        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $index => $image) {
                if ($index < 4) { // Limit to 4 images
                    $path = $image->store('quote_images', 'public');
                    $images["image_" . ($index + 1)] = $path;
                }
            }
        }

        // Generate unique tracking ID
        $trackingId = 'SHIP-' . Str::upper(Str::random(8));

        // Remove 'images' from validated data to prevent column error
        unset($validated['images']);

        // Create quote
        $quote = Quote::create(array_merge($validated, [
            'tracking_id' => $trackingId,
            'status' => 'Pending',
            'image_1' => $images['image_1'],
            'image_2' => $images['image_2'],
            'image_3' => $images['image_3'],
            'image_4' => $images['image_4'],
        ]));

        return redirect()->route('welcome')
            ->with('success', 'Quote request submitted successfully. Tracking ID: ' . $trackingId);
    }


    public function show(Request $request)
    {
        // Validate the tracking ID
        $request->validate([
            'tracking_id' => 'required|string|exists:quotes,tracking_id',
        ]);

        // Find the quote by tracking ID
        $quote = Quote::where('tracking_id', $request->tracking_id)->firstOrFail();

        // Pass the quote to the details view
        return view('quotedetails', compact('quote'));
    }
}
