<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\Profile;
class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $profile = Profile::all();
        return view('profile.index', compact('profile'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
        $profile = DB::table('users')->where('id', '=', $id)->get();

        foreach($profile as $editData){
            return view('profile.edit', [
                'editData' => $editData
            ]);
        }
    }
    public function password(Profile $editData)
    {
        //
        return view('profile.password', compact('editData'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updatepassword(Request $request,$id)
    {
        $request->validate([
            'password' => 'required',
        ]);
            Profile::where('id',$id)
            ->update([
                'password'=>Hash::make($request->password)
                ]);
                return redirect('/profile')->with('success', 'Password Updated Successfully!');
    }
    public function update(Request $request,$id)
    {
        //
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'gender' => 'required',
            'photo' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        
            Profile::where('id',$id)
            ->update([
                'name'=>$request->name,
                'email'=>$request->email,
                'phone'=>$request->phone,
                'gender'=>$request->gender,
                'photo'=>$request->file('photo')->store('docs','public'),
                ]);
                return redirect('/profile')->with('success', 'Profile Updated Successfully!');
            
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
