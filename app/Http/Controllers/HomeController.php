<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function profile()
    {
        return view('profile');
    }

    public function setProfile(Request $request)
    {
        // dd($request->all());
        $validatedData = $request->validate([
            'date_of_birth' => 'required|date_format:d/m/Y',
            'credit_card' => 'required|credit_card'
        ]);

        return view('profile');
    }
}
