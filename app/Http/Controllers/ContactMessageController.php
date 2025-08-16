<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ContactMessage;

class ContactMessageController extends Controller
{
    public function store(Request $request)
    {
        $data = $request->only(['name', 'mail', 'subj', 'message']);
        ContactMessage::create($data);
        return back()->with('success', 'Your message has been sent!');
    }
}
