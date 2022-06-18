<?php

namespace App\Http\Controllers;

use App\Branch;
use App\Consultation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $branchs = Branch::where('status', 1)->get();

        return view('index', compact('branchs'));
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function appointment()
    {
        return view('appointment');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function consultation(Request $request)
    {
        if ($request->file('document')) {
            $file = $request->file('document');
            $filename = time() . '_' . $file->getClientOriginalName();
            $location = 'storage/consultations/' . date('FY');
            $file->move($location, $filename);
        }

        $consultation = new consultation;
        $consultation->full_name = request('full_name');
        $consultation->phone = request('phone');
        $consultation->email = request('email');
        $consultation->description = request('description');
        $consultation->branch_id = request('branch_id');
        $consultation->document = 'consultations/' . date('FY') . '/' . $filename;
        $consultation->save();

        return redirect()->back()->with('success', 'Consultation submitted successfully');
    }
}
