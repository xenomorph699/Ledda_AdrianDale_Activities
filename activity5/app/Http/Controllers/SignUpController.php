<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class SignUpController extends Controller
{
    public function create(Request $request)
    {
        // Define validation rules
        $rules = [
            'Name' => 'required',
            // Name must not be null
            'Email' => 'required|email',
            // Email must not be null and must be a valid email address
            'Password' => 'required|min:8',
            // Password must not be null and should have at least 8 characters
        ];

        // Define custom error messages (optional)
        $customMessages = [
            'Name.required' => 'The Name field is required.',
            'Email.required' => 'The Email field is required.',
            'Email.email' => 'Please enter a valid email address.',
            'Password.required' => 'The Password field is required.',
            'Password.min' => 'The Password must be at least 8 characters.',
        ];

        // Validate the input data using the request
        $this->validate($request, $rules, $customMessages);

        // If validation passes, save the user data
        $contact = new User();
        $contact->name = $request->input("Name");
        $contact->email = $request->input("Email");
        // $contact->password = $request->input("Password"); // You should hash the password  bcrypt($request->input("Password"));
        $contact->password =  bcrypt($request->input("Password")); // You should hash the password 
        $contact->save();

        return view('Auth.login');
    }
}
