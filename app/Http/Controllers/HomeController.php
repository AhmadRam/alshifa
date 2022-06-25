<?php

namespace App\Http\Controllers;

use App\Department;
use App\Consultation;
use App\Hospital;
use App\Hotel;
use App\OperationPlan;
use App\PatientsComment;
use App\Research;
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
        $departments = Department::where('status', 1)->get();

        $hotels = Hotel::all();

        $hospitals = Hospital::all();

        $transfers = Transfer::all();

        $researches = Research::all();

        $patientsComments = PatientsComment::all();

        return view('index', compact('departments', 'hotels', 'hospitals', 'transfers', 'researches', 'patientsComments'));
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function appointments()
    {
        $departments = Department::where('status', 1)->get();

        return view('appointment', compact('departments'));
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
        $hospitals = DB::table('department_hospitals')->where('department_id', $id)->pluck('hospital_id');
        if (!empty($hospitals)) {
            $hospitals = Hospital::whereIn('id', $hospitals)->get();
        }
        return response()->json(['data' => $hospitals]);
    }

    public function departmentPage($id)
    {
        $department = Department::find($id);

        return view('department', compact('department'));
    }

    public function operationPlanPage()
    {
        $departments = Department::where('status', 1)->get();

        $hotels = Hotel::all();

        $hospitals = Hospital::all();

        $transfers = Transfer::all();

        return view('operationPlan', compact('departments', 'hotels', 'hospitals', 'transfers'));
    }

    public function patientsCommentPage()
    {
        return view('patientsComment');
    }

    public function patientsComment(Request $request)
    {
        $slug = 'patients-comments';

        $dataType = Voyager::model('DataType')->where('slug', '=', $slug)->first();

        app(VoyagerBaseController::class)->insertUpdateData($request, $slug, $dataType->addRows, new $dataType->model_name());

        return redirect()->back()->with('success', 'Your rate Submitted Successfully');
    }
}
