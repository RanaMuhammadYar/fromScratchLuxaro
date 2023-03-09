<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Admin\DelivoryOption;
use Illuminate\Support\Facades\Validator;

class DelivoryOptionCotroller extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth']);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $delivoryOptions = DelivoryOption::all();
        return view('frontend.admin.delivoryoption.index',compact('delivoryOptions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('frontend.admin.delivoryoption.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validate = Validator::make($request->all(), [
            'title' => 'required',
            'description' => 'required',
        ]);
        if ($validate->fails()) {
            return redirect()->back()->withErrors($validate)->withInput()->with('error', 'Delivory Option not created.');
        }else{
            DelivoryOption::create([
                'title' => $request->title,
                'description' => $request->description,
            ]);
            return redirect()->route('delivory-option.index')->with('success', 'Delivory Option created successfully.');
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

        $delivoryOption = DelivoryOption::find($id);
        return view('frontend.admin.delivoryoption.edit',compact('delivoryOption'));
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

        $validate = Validator::make($request->all(), [
            'title' => 'required',
            'description' => 'required',
        ]);

        if ($validate->fails()) {
            return redirect()->back()->withErrors($validate)->withInput()->with('error', 'Delivory Option not created.');
        }else{

            $delivoryOption = DelivoryOption::find($id);
            $delivoryOption->title = $request->title;
            $delivoryOption->description = $request->description;
            $delivoryOption->save();
            return redirect()->route('delivory-option.index')->with('success','Delivory Option Updated Successfully');
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
        $delivoryOption = DelivoryOption::find($id);
        $delivoryOption->delete();
        return redirect()->route('delivory-option.index')->with('success','Delivory Option Deleted Successfully');
    }
}
