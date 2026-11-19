<?php

namespace App\Http\Controllers;

use App\Mail\ContactInquiry;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:100'],
            'email' => ['required', 'email', 'max:150'],
            'phone' => ['required', 'string', 'max:50'],
            'site' => ['required', 'string', 'max:255'],
            'message' => ['required', 'string', 'max:5000'],
            'images' => ['nullable', 'array', 'max:3'],
            'images.*' => ['image', 'mimes:jpg,jpeg,png,webp', 'max:2048'],
        ]);

        $images = $validated['images'] ?? [];
        unset($validated['images']);

        Mail::to(config('mail.contact_recipient'))
            ->send(new ContactInquiry($validated, $images));

        return redirect()->route('contact')->with('contact_sent', true);
    }
}
