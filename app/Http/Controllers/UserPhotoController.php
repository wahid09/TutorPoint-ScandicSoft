<?php

namespace App\Http\Controllers;

//use Illuminate\Auth\Middleware\Auth;
//use Illuminate\Auth\user;
use Illuminate\Http\Request;
use Auth;
use Image;

class UserPhotoController extends Controller
{
    //public function __construct()
    //{
       // $this->middleware('auth');
   // }
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
        //$users = user::get();
        return view('userphoto.userphoto', array('user' => Auth::user()) );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        /*return $request->all();*/
        if($request->hasFile('avatar')){
            $avatar = $request->file('avatar');
            $filename = time(). '.' .$avatar->getClientOriginalExtension();
            Image::make($avatar)->resize(300, 300)->save(public_path('/uploads/avatars/' .$filename));
            $user = Auth::user();
            $user->avatar = $filename;
            $user->save();
        }
        return view('userphoto.userphoto', array('user' => Auth::user()) );
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
