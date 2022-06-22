<?php

namespace App\Http\Controllers;

use App\Branch;
use App\Consultation;
use App\Hospital;
use App\Hotel;
use App\OperationPlan;
use App\Transfer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use TCG\Voyager\Facades\Voyager;
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

        return view('index', compact('branchs', 'hotels', 'hospitals', 'transfers'));
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
        $slug = 'consultations';

        $dataType = Voyager::model('DataType')->where('slug', '=', $slug)->first();

        app(VoyagerBaseController::class)->insertUpdateData($request, $slug, $dataType->addRows, new $dataType->model_name());

        return redirect()->back()->with('success', 'Consultation Submitted Successfully');
    }

    public function operations(Request $request)
    {
        $slug = 'operation-plans';

        $dataType = Voyager::model('DataType')->where('slug', '=', $slug)->first();

        app(VoyagerBaseController::class)->insertUpdateData($request, $slug, $dataType->addRows, new $dataType->model_name());

        return redirect()->back()->with('success', 'Operation plan Submitted Successfully');
    }

    public function getHospitals($id)
    {
        $hospitals = DB::table('branch_hospitals')->where('branch_id', $id)->pluck('hospital_id');
        if (!empty($hospitals)) {
            $hospitals = Hospital::whereIn('id', $hospitals)->get();
        }
        return response()->json(['data' => $hospitals]);
    }
}
