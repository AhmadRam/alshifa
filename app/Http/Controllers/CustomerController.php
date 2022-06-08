<?php

namespace App\Http\Controllers;

use App\Models\User;

class CustomerController extends Controller
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
        $customer = auth()->user();
        return view('customer.profile')->with('customer', $customer);
    }

    /**
     * update the customer profile.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function update()
    {
        $customer = User::find(auth()->user()->id);
        $customer->name = request('name');
        $customer->email = request('email');
        $customer->save();

        return redirect()->back()->with('success', 'Profile updated successfully');
    }
}
