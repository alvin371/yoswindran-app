<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\Profile;
use App\Models\User;
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
        $profile = User::find($id);
        return view('profile.edit', [
            'editData' => $profile
        ]);
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
        $profile = User::find($id);
        $profile->name =  $request->name ? $request->name : $profile-name;     
        $profile->email =  $request->email ? $request->email : $profile-email;     
        $profile->phone =  $request->phone ? $request->phone : $profile-phone;     
        $profile->gender =  $request->gender ? $request->gender : $profile-gender;     
        $profile->password =  $request->password ? $request->password : $profile-password;
        $profile->photo = $request->photo ? $request->file('photo')->store('ProfilePicture','public') : $profile->photo;     

        $profile->save();
            // Profile::where('id',$id)
            // ->update([
            //     'name'=>$request->name,
            //     'email'=>$request->email,
            //     'phone'=>$request->phone,
            //     'gender'=>$request->gender,
            //     'photo'=>$request->file('photo')->store('docs','public'),
            //     ]);


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
