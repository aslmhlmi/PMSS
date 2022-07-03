<?php

namespace App\Http\Controllers;

use App\Project;
use Illuminate\Http\Request;

class nt_demoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $projects = Project::all();

        return view('NetTeam.ntdemo',compact('projects'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('NetTeam.ntdemo.create');

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
            'id'            => 'required',
            'team'          => 'required',
            'presale'       => 'required',
            'enduser'       => 'required',
            'partner'       => 'required',
            'product'       => 'required',

            'staff_id'      => 'required',

            'workingstatus' => 'required',
            'status'        => 'required',
            'postatus'      => 'required',
            'startdate'     => 'required',
            'enddate'       => 'required',

            'mdays'         => 'required',
            'pocupdate'     => 'required',
            'remark'        => 'required',
        ]);

        Project::create($request->all());

        return redirect()->route('NetTeam.ntdemo.index')
                        ->with('success','Project Created Successfully!.');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function show(Project $project)
    {
        //
        return view('NetTeam.ntdemo.show',compact('project'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function edit(Project $project)
    {
        //
        return view('NetTeam.ntdemo.edit',compact('project'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Project $project)
    {
        //
        $request->validate([
            'id'            => 'required',
            'team'          => 'required',
            'presale'       => 'required',
            'enduser'       => 'required',
            'partner'       => 'required',
            'product'       => 'required',

            'staff_id'      => 'required',

            'workingstatus' => 'required',
            'status'        => 'required',
            'postatus'      => 'required',
            'startdate'     => 'required',
            'enddate'       => 'required',

            'mdays'         => 'required',
            'pocupdate'     => 'required',
            'remark'        => 'required',
        ]);

        $project->update($request->all());

        return redirect()->route('NetTeam.ntdemo.index')
                        ->with('success','Project updated successfully');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function destroy(Project $project)
    {
        //
        $project->delete();

        return redirect()->route('NetTeam.ntdemo.index')
                        ->with('success','Product deleted successfully');

    }
}
