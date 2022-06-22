<?php

namespace App\Http\Controllers;

use App\Branch;
use App\Consultation;
use App\Hospital;
use App\Hotel;
use App\Transfer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use TCG\Voyager\Http\Controllers\VoyagerBaseController;

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

        $hotels = Hotel::all();

        $hospitals = Hospital::all();

        $transfers = Transfer::all();

        return view('index', compact('branchs', 'hotels', 'hospitals','transfers'));
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function appointments()
    {
        return view('appointment');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function consultations(Request $request)
    {
        app(VoyagerBaseController::class)->store($request);

        // if ($request->file('document')) {
        //     $file = $request->file('document');
        //     $filename = time() . '_' . $file->getClientOriginalName();
        //     $location = 'storage/consultations/' . date('FY');
        //     $file->move($location, $filename);
        // }
        // $consultation = new consultation;
        // $consultation->full_name = request('full_name');
        // $consultation->phone = request('phone');
        // $consultation->email = request('email');
        // $consultation->description = request('description');
        // $consultation->branch_id = request('branch_id');
        // $consultation->document = json_encode('[{"download_link":"consultations\\' . date('FY') . '/' . $filename . '","original_name":"' . $filename . '"}]');
        // $consultation->save();

        return redirect()->back()->with('success', 'Added New Consultation Successfully');
    }
}
