<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegistrationController extends Controller
{



    public function stepOne(Request $request)
    {
        return view('account.step_one');
    }

    public function step1Submit(Request $request)
    {
        $validated = $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
        ]);

        $user = User::create([
            'first_name' => $validated['first_name'],
            'last_name' => $validated['last_name'],
            'email' => $validated['email'],
        ]);

        $request->session()->put('user_id', $user->id);

        return redirect()->route('registration.step2');
    }

    public function handleStep1(Request $request)
    {
        // Validate the input data
        $validatedData = $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:users,email',
        ]);

        // Store data in the session
        $request->session()->put('registration_data', $validatedData);

        // Redirect to the second form
        return redirect()->route('registration.step2');
    }

    public function step2(Request $request)
    {
        $user = User::find($request->session()->get('user_id'));

        if (!$user) {
            return redirect()->route('registration.step_one');
        }

        return view('account.register2', compact('user'));
    }

    public function step2Submit(Request $request)
    {
        // Retrieve the user ID from the session
        $user = User::find($request->session()->get('user_id'));

        if (!$user) {
            return redirect()->route('registration.step_one');
        }

        // Validate the request data
        $validated = $request->validate([
            'username' => 'required|unique:users,username',
            'password' => 'required|confirmed|min:6',
        ]);

        $user->update([
            'username' => $validated['username'],
            'password' => Hash::make($validated['password']),
            'title' => $request->title,
            'middle_name' => $request->middle_name,
            'degree' => $request->degree,
            'phone' => $request->phone,
            'position' => $request->position,
            'institution' => $request->institution,
            'department' => $request->department,
            'street_address' => $request->street_address,
            'city' => $request->city,
            'state' => $request->state,
            'postal_code' => $request->postal_code,
            'country' => $request->country,
            'is_reviewer' => $request->is_reviewer === 'Yes',
            'keywords' => json_encode($request->keywords),
        ]);

        // Store the updated data in the session
        $sessionData = [
            'username' => $validated['username'],
            'title' => $request->title ?? null,
            'middle_name' => $request->middle_name ?? null,
            'degree' => $request->degree ?? null,
            'phone' => $request->phone ?? null,
            'position' => $request->position ?? null,
            'institution' => $request->institution ?? null,
            'department' => $request->department ?? null,
            'street_address' => $request->street_address ?? null,
            'city' => $request->city ?? null,
            'state' => $request->state ?? null,
            'postal_code' => $request->postal_code ?? null,
            'country' => $request->country ?? null,
            'is_reviewer' => $request->is_reviewer === 'Yes', // Boolean value
            'keywords' => $request->keywords ? json_encode($request->keywords) : json_encode([]), // Default empty array if null
        ];

        // Store the session data
        $request->session()->put('registration_data', $sessionData);


        // Redirect to the next registration step
        return redirect()->route('registration.step3')->with('success', 'Registration completed successfully!');
    }

    public function step3(Request $request)
    {
        // Retrieve the user using the user ID from the session
        $user = User::find($request->session()->get('user_id'));

        // if (!$user) {
        //     return redirect()->route('registration.step_one');
        // }

        // Retrieve the registration data stored in the session
        // $user = $request->session()->get('registration_data');

        // Pass the user and registration data to the view
        return view('account.register3', compact('user'));
    }


    public function step3Submit(Request $request)
    {
        $request->validate([
            'accept_terms' => 'accepted',
        ]);

        // $user = User::find($request->session()->get('user_id'));
        // if (!$user) {
        //     return redirect()->route('registration.start')->with('error', 'No user data found.');
        // }

        // // Update user preferences (e.g., marketing opt-out)
        // $user = User::find($user->id);
        // $user->marketing_opt_out = $request->has('marketing_opt_out');
        // $user->save();

        // // Clear session data
        // session()->forget('user');

        return view('account.register4');
    }
}
