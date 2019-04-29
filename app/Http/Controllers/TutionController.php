<?php

namespace App\Http\Controllers;

use App\Model\user\Tutioninfo;
use Auth;
use Illuminate\Http\Request;

class TutionController extends Controller
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

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tution.tution', array('user' => Auth::user()));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    	$this->validate($request, [
    		'degree' => 'required',
    		'salary' => 'required',
    		'status' => 'required',
    		'days' => 'required',
    		'tution_style' => 'required',
    		'learning_place' => 'required',
    		'tution_approach' => 'required',
    		'medium' => 'required',
    		'preferred_class' => 'required',
    		'preferred_subject' => 'required',
    		'district' => 'required',
    	]);

    	$info = new Tutioninfo;

    	$info->degree = $request->degree;
    	$info->salary = $request->salary;
    	$info->status = $request->status;
    	$info->days = $request->days;
    	$info->tution_style = $request->tution_style;
    	$info->learning_place = $request->learning_place;
    	$info->tution_approach = $request->tution_approach;
    	$info->medium = $request->medium;
    	$info->preferred_class = $request->preferred_class;
    	$info->preferred_subject = $request->preferred_subject;
    	$info->district = $request->district;
    	$info->area = $request->area;
    	$info->user_id = Auth::user()->id;

    	$info->save();

    	return redirect()->action('TutorProfileController@index')->with('success', 'Successfully updated your information');
       //return $info;
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
