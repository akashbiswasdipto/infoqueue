<?php

namespace App\Http\Controllers;

use App\Models\SignUpData;
use Illuminate\Http\Request;

class FormController extends Controller
{
    public function showForm()
    {
        return view('signup');
    }

    public function submitForm(Request $request)
    {
        echo 'i am here';
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255', // Ensure the table name is correct
            'password' => 'required|string|min:8|confirmed',
        ]);

        SignUpData::create([
            'name' => $request->name,
            'email' => $request->email,
            'contact' => $request->contact,
            'password' => bcrypt($request->password), // Hash the password
        ]);

        return redirect()->route('new_user')->with('success', 'Form data submitted successfully!');
    }
}
