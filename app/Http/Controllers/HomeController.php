<?php

namespace App\Http\Controllers;

use App\Department;
use App\Consultation;
use App\Hospital;
use App\Hotel;
use App\OperationPlan;
use App\OurService;
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
        $departments = Department::where('status', 1)->orderBy('sort_order', 'asc')->get();

        $hospitals = Hospital::all();

        $patientsComments = PatientsComment::all();

        $our_services = OurService::all();

        return view('index', compact('departments', 'hospitals', 'patientsComments', 'our_services'));
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
            $hospitals = Hospital::whereIn('id', $hospitals)->orderBy('sort_order', 'asc')->get();
        }
        return response()->json(['data' => $hospitals]);
    }

    public function departmentPage($id)
    {
        $department = Department::find($id);

        return view('department', compact('department'));
    }

    public function hospitalPage($id)
    {
        $hospital = Hospital::find($id);

        return view('hospital', compact('hospital'));
    }

    public function hotelPage($id)
    {
        $hotel = Hotel::find($id);

        return view('hotel', compact('hotel'));
    }

    public function researchPage($id)
    {
        $research = Research::find($id);

        return view('research', compact('research'));
    }

    public function operationPlanPage()
    {
        $transfers = Transfer::all();

        return view('operationPlan', compact('transfers'));
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
