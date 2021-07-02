<?php

namespace App\Http\Controllers;

use App\Models\Member;
use App\Models\MemberFile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MemberController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        // $search = $request->search;
        $member = Member::all();
        // if($search){
        //     $member = Member::where('name','LIKE', '%'.$search.'%')->paginate(3);
        // }
        return view('member/index', compact('member'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('member/create');
    }
    public function uploadFile($id)
    {
        //
        $member = Member::find($id);
        return view('member.filestore', compact('member'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //'employercertificates'=>$request->file('employercertificates')->store('certificates','public'),
        // $files = $request->file('employercertificates');

        // if($request->hasFile('employercertificates'))
        // {
        //     foreach ($request->employercertificates as $file) {
        //         $filename = $file->getClientOriginalName();
        //         $file->store('certificates','public');
        //         $member = new Member;
        //         $member->employercertificates = $filename;
        //         $member->save();
        //     }
        // }

        
        $request->validate([
            'name' => 'required',
            'placebirth' => 'required',
            'datebirth' => 'required',
            'sex' => 'required',
            'email' => 'required',
            'maritalstatus' => 'required',
            'religion' => 'required',
            'address' => 'required',
            'telephone' => 'required',
            'office' => 'required',
            'traininglag' => 'required',
            'education' => 'required',
            'practical' => 'required',
            'initial' => 'required',
            'eemployer' => 'required',
            'educationdata' => 'required',
            'avitraining' => 'required',
            'othertrainings' => 'required',
            'diploma' => 'required',
        ]);
        // Member::create([
        //     'name'=>$request->name,
        //     'placebirth'=>$request->placebirth,
        //     'datebirth'=>$request->datebirth,
        //     'sex'=>$request->sex,
        //     'email'=>$request->email,
        //     'maritalstatus'=>$request->maritalstatus,
        //     'religion'=>$request->religion,
        //     'address'=>$request->address,
        //     'telephone'=>$request->telephone,
        //     'office'=>$request->office,
        //     'traininglag'=>$request->traininglag,
        //     'education'=>$request->education,
        //     'practical'=>$request->practical,
        //     'initial'=>$request->initial,
        //     'eemployer'=>$request->eemployer,
        //     // 'employercertificates'=>$request->file('employercertificates')->store('certificates','public'),
        //     'educationdata'=>$request->educationdata,
        //     // 'educationcertificates'=>$request->file('educationcertificates')->store('certificates','public'),
        //     'avitraining'=>$request->avitraining,
        //     // 'avicertificates'=>$request->file('avicertificates')->store('certificates','public'),
        //     'othertraining'=>$request->othertraining,
        //     // 'othercertificates'=>$request->file('othercertificates')->store('certificates','public'),
        //     'diploma'=>$request->diploma,
        //     // 'diplomacertificates'=>$request->file('diplomacertificates')->store('certificates','public'),
        // ]);

        $member = new Member;
        $member->name = $request->name;
        $member->member_id = $request->member_id;
        $member->placebirth = $request->placebirth;
        $member->datebirth = $request->datebirth;
        $member->sex = $request->sex;
        $member->email = $request->email;
        $member->maritalstatus = $request->maritalstatus;
        $member->religion = $request->religion;
        $member->address = $request->address;
        $member->telephone = $request->telephone;
        $member->office = $request->office;
        $member->traininglag = $request->traininglag;
        $member->education = $request->education;
        $member->practical = $request->practical;
        $member->initial = $request->initial;
        $member->eemployer = $request->eemployer;
        $member->educationdata = $request->educationdata;
        $member->avitraining = $request->avitraining;
        $member->othertrainings = $request->othertrainings;
        $member->diploma = $request->diploma;

        $member->save();
        return redirect('/member')->with('success', 'Member Created Successfully!');
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
        // return view('member.detail', compact('member'));
        $member = Member::with('MemberFile')->find($id);
        return view('member.detail', [
            'members' => $member
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
        // $files = DB::table('member_files')
        // ->where('memberId', '=', $id)->join('member','MemberId','=','member.id')->get();
        // // $member = Member::find($id);

        // return view('member.edit',['member' => $files]);
        // // return view('member.edit',[
        // //     'member' => member::findOrFail($id)
        // // ]);
        return view('member.edit',[
            'member' => member::findOrFail($id)
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
        $request->validate([
            'name' => 'required',
            'placebirth' => 'required',
            'datebirth' => 'required',
            'sex' => 'required',
            'email' => 'required',
            'maritalstatus' => 'required',
            'religion' => 'required',
            'address' => 'required',
            'telephone' => 'required',
            'office' => 'required',
            'traininglag' => 'required',
            'education' => 'required',
            'practical' => 'required',
            'initial' => 'required',
            'eemployer' => 'required',
            'educationdata' => 'required',
            'avitraining' => 'required',
            'othertrainings' => 'required',
            'diploma' => 'required',
        ]);
        // Member::where('id', $id)
        // ->update([
        //     'name'=>$request->name,
        //     'placebirth'=>$request->placebirth,
        //     'datebirth'=>$request->datebirth,
        //     'sex'=>$request->sex,
        //     'email'=>$request->email,
        //     'maritalstatus'=>$request->maritalstatus,
        //     'religion'=>$request->religion,
        //     'address'=>$request->address,
        //     'telephone'=>$request->telephone,
        //     'office'=>$request->office,
        //     'traininglag'=>$request->traininglag,
        //     'education'=>$request->education,
        //     'practical'=>$request->practical,
        //     'initial'=>$request->initial,
        //     'eemployer'=>$request->eemployer,
        //     'employercertificates'=>$request->file('employercertificates')->store('certificates','public'),
        //     'educationdata'=>$request->educationdata,
        //     'educationcertificates'=>$request->file('educationcertificates')->store('certificates','public'),
        //     'avitraining'=>$request->avitraining,
        //     'avicertificates'=>$request->file('avicertificates')->store('certificates','public'),
        //     'othertraining'=>$request->othertraining,
        //     'othercertificates'=>$request->file('othercertificates')->store('certificates','public'),
        //     'diploma'=>$request->diploma,
        //     'diplomacertificates'=>$request->file('diplomacertificates')->store('certificates','public'),
        // ]);

        $member = Member::find($id);

        $member->name = $request->name ? $request->name : $member->name;
        $member->placebirth = $request->placebirth ? $request->placebirth : $member->placebirth;
        $member->datebirth = $request->datebirth ? $request->datebirth : $member->datebirth;
        $member->sex = $request->sex ? $request->sex : $member->sex;
        $member->email = $request->email ? $request->email : $member->email;
        $member->maritalstatus = $request->maritalstatus ? $request->maritalstatus : $member->maritalstatus;
        $member->religion = $request->religion ? $request->religion : $member->religion;
        $member->address = $request->address ? $request->address : $member->address;
        $member->office = $request->office ? $request->office : $member->office;
        $member->traininglag = $request->traininglag ? $request->traininglag : $member->traininglag;
        $member->education = $request->education ? $request->education : $member->education;
        $member->practical = $request->practical ? $request->practical : $member->practical;
        $member->initial = $request->initial ? $request->initial : $member->initial;
        $member->eemployer = $request->eemployer ? $request->eemployer : $member->eemployer;
        $member->educationdata = $request->educationdata ? $request->educationdata : $member->educationdata;
        $member->avitraining = $request->avitraining ? $request->avitraining : $member->avitraining;
        $member->othertrainings = $request->othertrainings ? $request->othertrainings : $member->othertrainings;
        $member->diploma = $request->diploma ? $request->diploma : $member->diploma;

        $member->save();
        return redirect('member')->with('success', 'Member Edited Successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $member = Member::find($id);
        $member->delete();
        return redirect('/member')->with('success', 'Member Deleted Successfully!');
    }
}
