<?php

namespace App\Http\Controllers;

use App\Model\user\PersonalInfo;
use Auth;
use Illuminate\Http\Request;

class personalInformationController extends Controller
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
        return view('personalinformation.personalinformation', array('user' => Auth::user()));
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
            'bod' => 'required',
            'blood' => 'required',
            'sex' => 'required',
            'maritalstatus' => 'required',
            'religion' => 'required',
            'address' => 'required',
            'phone' => 'required',
            'experiance' => 'required',
        ]);

        $info = new PersonalInfo;

        $info->bod = $request->bod;
        $info->blood = $request->blood;
        $info->interest = $request->interest;
        $info->sex = $request->sex;
        $info->maritalstatus = $request->maritalstatus;
        $info->religion = $request->religion;
        $info->address = $request->address;
        $info->phone = $request->phone;
        $info->experiance = $request->experiance;
        $info->user_id = Auth::user();

        $info->save();

        return redirect(route('profile.show'))->with('success', 'Successfully updated your information');
        //return view('profile.show', array('user' => Auth::user()));

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
