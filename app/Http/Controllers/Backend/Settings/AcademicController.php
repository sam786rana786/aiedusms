<?php

namespace App\Http\Controllers\Backend\Settings;

use App\Models\General;
use App\Models\AcademicYear;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AcademicController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $academics = AcademicYear::all();
        return view('backend.settings.academic.create', ['academics' => $academics]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'year' => 'required',
            'starting_date' => 'required|date',
            'ending_date' => 'required|date',
            'status' => 'required'
        ]);

        // $school_id = General::findOrFail(1);

        $academic = new AcademicYear();
        $academic->year = $request->year;
        $academic->starting_date = $request->starting_date;
        $academic->ending_date = $request->ending_date;
        $academic->status = $request->status;
        $academic->school_id = 1;
        $academic->save();
        return redirect(route('academic_sessions.index'))->with('success', 'Academic Session has been saved and added successfully.');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(AcademicYear $academic_session)
    {
        return view('backend.settings.academic.edit', compact('academic_session'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, AcademicYear $academic_session)
    {
        $request->validate([
            'year' => 'required',
            'starting_date' => 'required|date',
            'ending_date' => 'required|date',
            'status' => 'required'
        ]);

        $academic_session->year = $request->year;
        $academic_session->starting_date = $request->starting_date;
        $academic_session->ending_date = $request->ending_date;
        $academic_session->status = $request->status;
        $academic_session->school_id = 1;
        $academic_session->save();
        return redirect(route('academic_sessions.index'))->with('success', 'Academic Session has been updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(AcademicYear $academic_session)
    {
        $academic_session->delete();
        return redirect(route('academic_sessions.index'))->with('success', 'Academic Session has been deleted successfully');
    }
}
