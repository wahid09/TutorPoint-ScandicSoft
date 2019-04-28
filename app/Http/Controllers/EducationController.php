<?php

namespace App\Http\Controllers;

use App\Model\user\Education;
use Auth;
use Carbon\Carbon;
use Illuminate\Http\Request;

class EducationController extends Controller
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
        return view('academic.academic', array('user' => Auth::user()));
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
            'education_lavel' => 'required',
            'major' => 'required',
            'institute_name' => 'required',
            'result' => 'required',
            'grade' => 'required',
            'passing_year' => 'required',
            'achievement' => 'required',
        ]);

        $info = new Education;

        $info->education_lavel= $request->education_lavel;
        $info->major= $request->major;
        $info->institute_name= $request->institute_name;
        $info->result= $request->result;
        $info->grade= $request->grade;
        $info->passing_year = Carbon::parse($request->passing_year)->format('y-m-d');
        $info->achievement= $request->achievement;
        $info->user_id = Auth::user()->id;

        $info->save();

        return redirect()->action('TutorProfileController@index')->with('success', 'Successfully updated your information');

        //return $request->all();
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
