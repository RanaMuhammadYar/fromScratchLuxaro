<?php

namespace App\Http\Controllers\Admin\Goldevine;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\Admin\Goldevine\Project;
use Illuminate\Support\Facades\Validator;

class ProjectResourceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projects = Project::with('user')->get();
        return view('frontend.admin.goldevine.project.index',compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('frontend.admin.goldevine.project.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $project = Validator::make($request->all(), [
            'title' => 'required',
            'description' => 'required',
            'image' => 'required',
        ]);
        if ($project->fails()) {
            return redirect()->back()->withErrors($project)->withInput()->with('error', 'Project Creation Failed');
        }else{
            $project = new Project();
            if ($request->hasFile('image')) {
                $path = asset('storage/'.$request->image->store('public/project'));
                $project->image = $path;
            }
            $project->title = $request->title;
            $project->description = $request->description;
            $project->status = 'Pending';
            $project->slug = Str::slug($request->title);
            $project->user_id = Auth::user()->id;
            $project->save();
            return redirect()->route('admin-goudevine-product.index')->with('success', 'Project Created Successfully');
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $project = Project::find($id);
        return view('frontend.admin.goldevine.project.edit',compact('project'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $project = Validator::make($request->all(), [
            'title' => 'required',
            'description' => 'required',
        ]);
        if ($project->fails()) {
            return redirect()->back()->withErrors($project)->withInput()->with('error', 'Project Update Failed');
        }else{
            $project = Project::find($id);
            if ($request->hasFile('image')) {
                $path = asset('storage/'.$request->image->store('public/project'));
                $project->image = $path;
            }
            $project->title = $request->title;
            $project->description = $request->description;
            $project->status = 'Pending';
            $project->slug = Str::slug($request->title);
            $project->user_id = Auth::user()->id;
            $project->save();
            return redirect()->route('admin-goudevine-product.index')->with('success', 'Project Updated Successfully');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $project = Project::find($id);
        $project->delete();
        return redirect()->back()->with('success', 'Project Deleted Successfully');
    }
}
