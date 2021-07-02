<?php

namespace App\Http\Controllers;
use App\Models\Account;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AccountController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        $account = Account::paginate(10);
        return view('accountManagement.index', compact('account'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('accountManagement/create');
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
        Account::create([
            'name'=>$request->name,
            'phone'=>$request->phone,
            'gender'=>$request->gender,
            'level'=>$request->level,
            'email'=>$request->email,
            'password'=>Hash::make($request->password),
            'photo'=>$request->file('photo')->store('docs','public'),
            'rememberToken'=>Hash::make($request->rememberToken),
        ]);
        return redirect('/account');
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
        return view('accountManagement.detail', [
            'account' => Account::findOrFail($id)
        ]);
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
        return view('accountManagement.edit',[
            'account' => Account::findOrFail($id)
        ]);
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
       


        $account = Account::find($id);

        $account->name = $request->name ? $request->name : $account->name;
        $account->phone = $request->phone ? $request->phone : $account->phone;
        $account->gender = $request->gender ? $request->gender : $account->gender;
        $account->level = $request->level ? $request->level : $account->level;
        $account->email = $request->email ? $request->email : $account->email;
        $account->password = $request->password ? Hash::make($request->password) : $account->password;
        $account->token = $request->token ? $request->token : $account->token;
        $account->photo = $request->photo ? $request->file('photo')->store('docs','public') : $account->photo;
        

        $account->save();
        return redirect('account');
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
        Account::destroy($id);
        return redirect('/account');
    }
}
