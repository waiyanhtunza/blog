<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('auth.login');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('auth.register');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $data = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',   
        ]);
        $newUser = User::create($data);
        
        return redirect()->route('login');

    }

    /**
     * Display the specified resource.
     */
    // public function show(string $id)
    // {
        
    // }

    public function show(Request $request)
    {
        // Validate the request data
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        // Retrieve email and password from the request
        $credentials = $request->only('email', 'password');

        // Attempt to authenticate the user using the provided credentials
        if (Auth::attempt($credentials)) {
            // If authentication is successful, redirect to the intended URL or 'dashboard'
            return redirect()->route('auth.show')
                ->withSuccess('You have Successfully logged in');
        }

        // If authentication fails, redirect back to the login page with an error message
        // return redirect()->route('auth.show')->withSuccess('Oppes! You have entered invalid credentials');
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
