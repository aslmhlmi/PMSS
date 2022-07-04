<?php

namespace App\Http\Controllers;

use App\Staff;
use Illuminate\Http\Request;

class EngineerController extends Controller
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
        $staffs = Staff::where('position', 'Engineer')->get();


        return view('ProjectBy.Engineer.engineer',compact('staffs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('ProjectBy.Engineer.create');
        // return view('ProjectBy.Engineer.create');
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
        dd($request);
        $request->validate([

            'name'       => 'required',
            'position'   => 'required',
            'team'       => 'required',
            'department' => 'required',
            'type'       => 'required',
        ]);

        Staff::create($request->all());

        return redirect()->route('engineer.index')
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
        return view('ProjectBy.Engineer.engineer',compact('staff'));
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
        return view('ProjectBy.Engineer.edit',compact('staffs'));
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

        return redirect()->route('ProjectBy.Engineer.engineer')
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

        // dd($id);
        $staff = staff::find($id);
        $staff->delete();

        return redirect()->route('engineer.index')
        ->with('success','Staff deleted successfully');

    }
}
