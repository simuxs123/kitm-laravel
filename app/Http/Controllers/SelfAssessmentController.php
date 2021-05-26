<?php

namespace App\Http\Controllers;

use App\Module;
use App\Roles;
use App\SelfAssessment;
use Illuminate\Http\Request;

class SelfAssessmentController extends Controller
{
    public function index()
    {
        $userName = explode(' ', session('userName'));
        $name = $userName[1];
        $surname = $userName[0];
        return view('admin.pages.teacher-survey', compact('name', 'surname'));
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

    public function assessment(){
        $roles = Roles::all();
        return view('admin.pages.assessment', compact('roles'));
    }
    public function page(){
        return view('admin.pages.page');
    }
}
