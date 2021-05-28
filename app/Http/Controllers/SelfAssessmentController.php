<?php

namespace App\Http\Controllers;

use App\Datepicker;
use App\KitmUsers;
use App\Mail\FormActivation;
use App\Roles;
use App\SelfAssessment;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Mail;

class SelfAssessmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }
    public function activateView(){
        Datepicker::where('end_date','<=', Carbon::now()->toDateTimeString())->delete();
        $activated=Datepicker::exists();
        $data='';
        if($activated){
            $data=Datepicker::first();
        }
        $viewData = $this->loadViewData();
        return view('admin.pages.bandymasIvertinimas',compact(['data','activated']),$viewData);
    }
    public function activateForm(Request $request){
        $validateData = $request->validate([
            'data' => 'required',
            'laikas' => 'required'

        ]);
        if(!Datepicker::exists()){
            $date=new Carbon($request->data.$request->laikas);
            Datepicker::create([
                'end_date' => $date,
            ]);
            $viewData = $this->loadViewData();
            $data = array(
                'date' => $date,
                'email' => $viewData['userEmail']
            );
            $emailTo = KitmUsers::where('roles_id',3)->pluck('email')->all();
            Mail::to($emailTo)->send(new FormActivation($data));
        } else{
            return back()->with('danger', 'Forma galite aktivuoti tik vieną kartą. Jeigu norite atnaujinti, ištrinkite ir aktivuokite dar kartą');
        }
        return back();
    }
    public function deleteActivate(){
        Datepicker::whereNotNull('id')->delete();
        return back();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\SelfAssessment  $selfAssessment
     * @return \Illuminate\Http\Response
     */
    public function show(SelfAssessment $selfAssessment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\SelfAssessment  $selfAssessment
     * @return \Illuminate\Http\Response
     */
    public function edit(SelfAssessment $selfAssessment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\SelfAssessment  $selfAssessment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SelfAssessment $selfAssessment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\SelfAssessment  $selfAssessment
     * @return \Illuminate\Http\Response
     */
    public function destroy(SelfAssessment $selfAssessment)
    {
        //
    }

    public function assessment($page){
        $roles = Roles::all();
        switch ($page) {
            case 1:
                return view('admin.pages.assessment', compact('roles', 'page'));
            case 2:
                echo "i equals 1";
                break;
            case 3:
                echo "i equals 2";
                break;
        }
    }
}
