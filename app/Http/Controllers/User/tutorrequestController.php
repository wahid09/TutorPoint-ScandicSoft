<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Model\user\area;
use App\Model\user\district;
use App\Model\user\tutorrequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class tutorrequestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('user.requesttutor.show');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $districts = district::all();
        $districts = DB::table("districts")->pluck("name","id");
        $areas = area::all();
        $mediums = DB::table("media")->pluck("name","id");
        $classes = DB::table("studentclasses")->pluck("name","id");
        $subjects = DB::table("subjects")->pluck("name","id");
        $days = DB::table("days")->pluck("name","id");
        $sex = DB::table("genders")->pluck("gender","id");
        $salaries = DB::table("salaries")->pluck("name","id");
        return view('user.requesttutor.request', compact('districts', 'areas', 'mediums', 'classes', 'subjects', 'days', 'sex', 'salaries'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $this->validate($request, [
        //     'name'        => 'required',
        //     'school_name' => 'required',
        //     'address'     => 'required',
        //     'mobile'      => 'required',
        //     'email'       => 'required|string|email|max:255|unique:users',
        // ]);
        $tutorequest = new tutorrequest;
        $tutorequest->name = $request->name;
        $tutorequest->district_id = $request->district_id;
        $tutorequest->area_id = $request->area_id;
        $tutorequest->medium_id = $request->medium_id;
        $tutorequest->class_id = $request->class_id;
        $tutorequest->subject_id = $request->subject_id;
        $tutorequest->school_name = $request->school_name;
        $tutorequest->school_name = $request->school_name;
        $tutorequest->day_id = $request->day_id;
        $tutorequest->gender_id = $request->gender_id;
        $tutorequest->salary_id = $request->salary_id;
        $tutorequest->address = $request->address;
        $tutorequest->mobile = $request->mobile;
        $tutorequest->email = $request->email;
        $tutorequest->note = $request->note;
        //$area->districts()->sync($request->districts);
        $tutorequest->save();

        // return $tutorequest;


        return redirect(route('request.index'))->with('success', 'Your request are submitted successfully');
        //return redirect()->back()->with('success', '');

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
