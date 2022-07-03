<?php

namespace App\Http\Controllers;

use App\Staff;
use Illuminate\Http\Request;

class StaffController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        // $staffs = Staff::latest()->paginate(5);
        $staffs = Staff::all();

        // $staffs = Staff::idDescending()->get();
// dd($staffs);
        return view('ProjectBy.AccManager.accmanager',compact('staffs'));
            // ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('ProjectBy.AccManager.create');
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
        $request->validate([

            'name'       => 'required',
            'position'   => 'required',
            'team'       => 'required',
            'department' => 'required',
            'type'       => 'required',
        ]);

        Staff::create($request->all());

        return redirect()->route('staffs.index')
                        ->with('success','Product created successfully.');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Staff  $staff
     * @return \Illuminate\Http\Response
     */
    public function show(Staff $staff)
    {
        //
        return view('ProjectBy.AccManager.show',compact('staff'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Staff  $staff
     * @return \Illuminate\Http\Response
     */
    public function edit(Staff $staff)
    {
        //
        return view('ProjectBy.AccManager.edit',compact('staffs'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Staff  $staff
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Staff $staff)
    {
        //
        $request->validate([

            'name'       => 'required',
            'position'   => 'required',
            'team'       => 'required',
            'department' => 'required',
            'type'       => 'required',
        ]);

        $staff->update($request->all());

        return redirect()->route('ProjectBy.AccManager.accmanager')
                        ->with('success','Staff updated successfully');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Staff  $staff
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $staff = staff::find($id);
        $staff->delete();

        return redirect()->route('ProjectBy.AccManager.accmanager')
                        ->with('success','Staff deleted successfully');

    }
}
