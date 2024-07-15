<?php

namespace App\Http\Controllers;

use App\Models\Feedback;
use Illuminate\Http\Request;

class FeedbackController extends Controller
{
    public function index()
    {
        $feedbacks = Feedback::orderBy('created_at', 'desc')->take(4)->get();
        // dd($feedbacks);

        return view('home', ['feedbacks' => $feedbacks]);
    }

    public function store(Request $request)
    {
        // Validasi request
        $validated = $request->validate([
            'name' => 'required|string|min:2|max:255',
            'email' => 'required|string|email|max:255',
            'feedback' => 'required|string|max:80',
        ]);

        // Membuat dan menyimpan data feedback
        if (is_array($validated)) {
            $feedback = new Feedback;

            $feedback->name = $validated['name'];
            $feedback->email = $validated['email'];
            $feedback->feedback = $validated['feedback'];

            $feedback->save();

            return redirect()->back()->with('success', 'Terima kasih atas feedback yang diberikan 😊');
        }
    }
}
