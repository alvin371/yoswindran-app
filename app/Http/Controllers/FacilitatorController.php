<?php

namespace App\Http\Controllers;
use App\Models\Facilitator;
use Illuminate\Support\Facades\DB;
use App\Models\FacilitatorFile;
use Illuminate\Http\Request;

class FacilitatorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $facilitator = Facilitator::all();
        return view('facilitator.index', compact('facilitator'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('facilitator.create');
    }

    public function uploadFile($id)
    {
        //
        $facilitator = DB::table('facilitator_files')->where('loa', '=', $id)->get();
        foreach($facilitator as $f){
        return view('facilitator.filestore', compact('f'));
        }
        // $member = DB::table('member_files')
        //         ->where('memberId', '=', $id)->get();
        // dd($member);
        // return view('member.filestore', ['member' => $member]);

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
            'language' => 'required',
            'education' => 'required',
            'recurrent' => 'required',
            'initial' => 'required',
            'eemployer' => 'required',
            'educationdata' => 'required',
            'avitraining' => 'required',
            'othertraining' => 'required',
            'diploma' => 'required',
        ]);

        $facilitator = new Facilitator;
        $facilitator->idfacilitator = $request->idfacilitator;
        $facilitator->loa = $request->loa;
        $facilitator->name = $request->name;
        $facilitator->placebirth = $request->placebirth;
        $facilitator->datebirth = $request->datebirth;
        $facilitator->sex = $request->sex;
        $facilitator->email = $request->email;
        $facilitator->maritalstatus = $request->maritalstatus;
        $facilitator->religion = $request->religion;
        $facilitator->address = $request->address;
        $facilitator->telephone = $request->telephone;
        $facilitator->language = $request->language;
        $facilitator->education = $request->education;
        $facilitator->recurrent = $request->recurrent;
        $facilitator->initial = $request->initial;
        $facilitator->eemployer = $request->eemployer;
        $facilitator->educationdata = $request->educationdata;
        $facilitator->avitraining = $request->avitraining;
        $facilitator->othertraining = $request->othertraining;
        $facilitator->diploma = $request->diploma;

        $file = new FacilitatorFile;
        $file->loa = $request->loa;

        $file->save();
        $facilitator->save();
        // Facilitator::create([
        //     'name'=>$request->name,
        //     'placebirth'=>$request->placebirth,
        //     'datebirth'=>$request->datebirth,
        //     'sex'=>$request->sex,
        //     'email'=>$request->email,
        //     'maritalstatus'=>$request->maritalstatus,
        //     'religion'=>$request->religion,
        //     'address'=>$request->address,
        //     'telephone'=>$request->telephone,
        //     'language'=>$request->language,
        //     'education'=>$request->education,
        //     'recurrent'=>$request->recurrent,
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
        //     'diplomavalidity'=>$request->file('diplomavalidity')->store('certificates','public'),          
        // ]);
        return redirect('/facilitator')->with('success', 'Facilitator Created Successfully!');
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
        // return view('facilitator.detail', [
        //     'facilitator' => Facilitator::findOrFail($id)
        // ]);

        $f = DB::table('facilitators')->join('facilitator_files','facilitators.loa','facilitator_files.loa')->get();
        foreach($f as $facilitator){
            return view('facilitator.detail', [
                'facilitator' => $facilitator
            ]);
        }
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
        return view('facilitator.edit',[
            'facilitator' => Facilitator::findOrFail($id)
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
        // $request->validate([
        //     'name' => 'required',
        //     'placebirth' => 'required',
        //     'datebirth' => 'required',
        //     'sex' => 'required',
        //     'email' => 'required',
        //     'maritalstatus' => 'required',
        //     'religion' => 'required',
        //     'address' => 'required',
        //     'telephone' => 'required',
        //     'language' => 'required',
        //     'education' => 'required',
        //     'recurrent' => 'required',
        //     'initial' => 'required',
        //     'eemployer' => 'required',
        //     'employercertificates' => 'required',
        //     'educationdata' => 'required',
        //     'educationcertificates' => 'required',
        //     'avitraining' => 'required',
        //     'avicertificates' => 'required',
        //     'othertraining' => 'required',
        //     'othercertificates' => 'required',
        //     'diploma' => 'required',
        //     'diplomavalidity' => 'required',
        // ]);
        // Facilitator::where('id', $id)
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
        //     'language'=>$request->language,
        //     'education'=>$request->education,
        //     'recurrent'=>$request->recurrent,
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
        //     'diplomavalidity'=>$request->file('diplomavalidity')->store('certificates','public'), 
        // ]);
        // return redirect('facilitator')->with('success', 'Facilitator Edited Successfully!');

        $facilitator = Facilitator::find($id);
        $facilitator->idfacilitator = $request->idfacilitator ? $request->idfacilitator : $facilitator->idfacilitator;
        $facilitator->loa = $request->loa ? $request->loa : $facilitator->loa;
        $facilitator->name = $request->name ? $request->name : $facilitator->name;
        $facilitator->placebirth = $request->placebirth ? $request->placebirth : $facilitator->placebirth;
        $facilitator->datebirth = $request->datebirth ? $request->datebirth : $facilitator->datebirth;
        $facilitator->sex = $request->sex ? $request->sex : $facilitator->sex;
        $facilitator->email = $request->email ? $request->email : $facilitator->email;
        $facilitator->maritalstatus = $request->maritalstatus ? $request->maritalstatus : $facilitator->maritalstatus;
        $facilitator->religion = $request->religion ? $request->religion : $facilitator->religion;
        $facilitator->address = $request->address ? $request->address : $facilitator->address;
        $facilitator->telephone = $request->telephone ? $request->telephone : $facilitator->telephone;
        $facilitator->language = $request->language ? $request->language : $facilitator->language;
        $facilitator->education = $request->education ? $request->education : $facilitator->education;
        $facilitator->recurrent = $request->recurrent ? $request->recurrent : $facilitator->recurrent;
        $facilitator->initial = $request->initial ? $request->initial : $facilitator->initial;
        $facilitator->eemployer = $request->eemployer ? $request->eemployer : $facilitator->eemployer;
        $facilitator->educationdata = $request->educationdata ? $request->educationdata : $facilitator->educationdata;
        $facilitator->avitraining = $request->avitraining ? $request->avitraining : $facilitator->avitraining;
        $facilitator->othertraining = $request->othertraining ? $request->othertraining : $facilitator->othertraining;
        $facilitator->diploma = $request->diploma ? $request->diploma : $facilitator->diploma;
        $facilitator->save();
        return redirect('/facilitator')->with('success', 'Facilitator Edited Successfully!');
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
        // Facilitator::destroy($id);

        FacilitatorFile::where('loa', $id)->delete();
        Facilitator::where('loa',$id)->delete();
        return redirect('/facilitator')->with('success', 'Facilitator Deleted Successfully!');
    }
}
