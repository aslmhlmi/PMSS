<?php

namespace App\Http\Controllers;

use App\Project;
use Illuminate\Http\Request;
use DB;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    // public function deployment()
    // {
    //     //
    //     $projects=DB::select('select * from projects');

    //     //   $dd('double qoute');
    //     return view ('ManageEngine.medeployment',['projects'=>$projects]);
    //     // return view('ManageEngine.medeployment');

    // }

    // public function poc()
    // {
    //     //
    //     $projects=DB::select('select * from projects');

    //     return view('ManageEngine.mepoc',['projects'=>$projects]);
    // }
    // public function demo()
    // {
    //     //
    //     $projects=DB::select('select * from projects');

    //     return view('ManageEngine.medemo',['projects'=>$projects]);
    // }


    // public function deployment()
    // {
    //     //
    //     return view('bndeployment');
    // }

    // public function poc()
    // {
    //     //
    //     return view('bnpoc');
    // }
    // public function demo()
    // {
    //     //
    //     return view('bndemo');
    // }

    public function index()
    {
        // $projects = Project::latest()->paginate(5);
        $projects = Project::all();

        return view('ManageEngine.medeployment',compact('projects'));
        // return view('ManageEngine.mepoc',compact('projects'));
        // return view('ManageEngine.medemo',compact('projects'));
        // return view('ManageEngine.medeployment',compact('projects'));
        // return view('ManageEngine.medeployment',compact('projects'));
        // return view('ManageEngine.medeployment',compact('projects'));
        // return view('ManageEngine.medeployment',compact('projects'));
        // return view('ManageEngine.medeployment',compact('projects'));
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
        return view('ManageEngine.modal.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request);
        // dd('test');
        $request->validate([

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


        // $test=
        Project::create($request->all());
        // dd($test);

        return redirect()->route('projects.index')
                        ->with('success','Project Created Successfully!.');
        // $this->validate($request,[
        //     'id'            => 'required',
        //     'team'          => 'required',
        //     'presale'       => 'required',
        //     'enduser'       => 'required',
        //     'partner'       => 'required',
        //     'product'       => 'required',

        //     'staff_id'      => 'required',

        //     'workingstatus' => 'required',
        //     'status'        => 'required',
        //     'postatus'      => 'required',
        //     'startdate'     => 'required',
        //     'enddate'       => 'required',

        //     'mdays'         => 'required',
        //     'pocupdate'     => 'required',
        //     'remark'        => 'required',
        // ]);

        // $proj = new Project;

        // $proj -> id             = $request->input('id');
        // $proj -> team           = $request->input('team');
        // $proj -> presale        = $request->input('presale');
        // $proj -> enduser        = $request->input('enduser');
        // $proj -> partner        = $request->input('partner');
        // $proj -> product        = $request->input('product');

        // $proj -> staff_id       = $request->input('staff_id');

        // $proj -> workingstatus  = $request->input('workingstatus');
        // $proj -> status         = $request->input('status');
        // $proj -> postatus       = $request->input('postatus');
        // $proj -> startdate      = $request->input('startdate');
        // $proj -> enddate        = $request->input('enddate');
        // $proj -> mdays          = $request->input('mday');
        // $proj -> pocupdate      = $request->input('pocupdate');
        // $proj -> remark         = $request->input('remark');

        // $proj->save();

        // $dd('double qoute');

        // return redirect('/medeployment')->with('success', 'Data saved');

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
        return view('ManageEngine.CRUD.show',compact('projects'));
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
        return view('ManageEngine.CRUD.edit',compact('project'));
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

        return redirect()->route('ManageEngine.index')
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

        return redirect()->route('projects.index')
                        ->with('success','Product deleted successfully');

    }
}
