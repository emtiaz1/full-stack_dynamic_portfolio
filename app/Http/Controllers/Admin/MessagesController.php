<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ContactMessage;

class MessagesController extends Controller
{
    public function index()
    {
        $messages = \App\Models\ContactMessage::orderBy('created_at', 'desc')->get();
        return view('admin.messages', compact('messages'));
    }
    public function destroy($id)
    {
        $msg = \App\Models\ContactMessage::findOrFail($id);
        $msg->delete();
        return back()->with('success', 'Message deleted successfully!');
    }

    // Public: Store a new contact message
    public function store(\Illuminate\Http\Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'mail' => 'required|email|max:255',
            'subj' => 'nullable|string|max:255',
            'message' => 'required|string',
        ]);
        $msg = new \App\Models\ContactMessage();
        $msg->name = $validated['name'];
        $msg->mail = $validated['mail'];
        $msg->subj = $validated['subj'] ?? '';
        $msg->message = $validated['message'];
        $msg->save();
        return back()->with('success', 'Your message has been sent!');
    }
}
