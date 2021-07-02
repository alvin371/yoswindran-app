<?php

namespace App\Http\Controllers;
use App\Models\Asesor;
use Illuminate\Support\Facades\DB;
use App\Models\AsesorFile;
use Illuminate\Http\Request;

class AsesorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $asesor = Asesor::all();
        return view('asesor.index', compact('asesor'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('asesor.create');
    }
    public function uploadFile($id)
    {
        //
        $asesor = Asesor::find($id);
        return view('asesor.filestore', compact('asesor'));

        // return view('asesor.filestore', [
        //     'asesor' => AsesorFile::findOrFail($id)
        // ]);
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
        // Asesor::create([
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
        //     'lspregistration'=>$request->lspregistration,
        //     'education'=>$request->education,
        //     'position'=>$request->position,
        //     'initial'=>$request->initial,
        //     'eemployer'=>$request->eemployer,
        //     'employercertificates'=>$request->file('employercertificates')->store('certificates','public'),
        //     'educationdata'=>$request->educationdata,
        //     'educationcertificates'=>$request->file('educationcertificates')->store('certificates','public'),
        //     'avitraining'=>$request->avitraining,
        //     'avicertificates'=>$request->file('avicertificates')->store('certificates','public'),
        //     'othertraining'=>$request->othertraining,
        //     'othercertificates'=>$request->file('othercertificates')->store('certificates','public'),
        //     'licenseheld'=>$request->licenseheld,
        //     'licensevalidity'=>$request->file('licensevalidity')->store('certificates','public'),
        //     'teachingaspeck'=>$request->teachingaspeck,            
        //     'conclusion'=>$request->conclusion,            
        //     'recommendation'=>$request->recommendation,            
        //     'masterasesor'=>$request->masterasesor,            
        // ]);
        $asesor = new Asesor;
        $asesor->name = $request->name;
        $asesor->placebirth = $request->placebirth;
        $asesor->datebirth = $request->datebirth;
        $asesor->sex = $request->sex;
        $asesor->email = $request->email;
        $asesor->maritalstatus = $request->maritalstatus;
        $asesor->religion = $request->religion;
        $asesor->address = $request->address;
        $asesor->telephone = $request->telephone;
        $asesor->office = $request->office;
        $asesor->lspregistration = $request->lspregistration;
        $asesor->education = $request->education;
        $asesor->position = $request->position;
        $asesor->initial = $request->initial;
        $asesor->met = $request->met;
        $asesor->sertifikat = $request->sertifikat;
        $asesor->eemployer = $request->eemployer;
        $asesor->educationdata = $request->educationdata;
        $asesor->avitraining = $request->avitraining;
        $asesor->othertraining = $request->othertraining;
        $asesor->licenseheld = $request->licenseheld;
        $asesor->teachingaspeck = $request->teachingaspeck;
        $asesor->conclusion = $request->conclusion;
        $asesor->recommendation = $request->recommendation;
        $asesor->masterasesor = $request->masterasesor;
        
        $asesor->save();
        return redirect('/asesor')->with('success', 'Asesor Created Successfully!');
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
        // return view('asesor.detail', [
        //     'asesor' => Asesor::findOrFail($id)
        // ]);
        
        // $a = DB::table('asesors')->join('asesor_files','asesors.met','asesor_files.met')->where('asesors.met','=', $id)->get();
        // foreach($a as $asesor){
        //     return view('asesor.detail', [
        //         'asesor' => $asesor
        //     ]);
        // }
        $asesor = Asesor::with('AsesorFile')->find($id);
        return view('asesor.detail', [
            'asesor' => $asesor
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
        return view('asesor.edit',[
            'asesor' => Asesor::findOrFail($id)
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
        //     'office' => 'required',
        //     'lspregistration' => 'required',
        //     'education' => 'required',
        //     'position' => 'required',
        //     'initial' => 'required',
        //     'eemployer' => 'required',
        //     'employercertificates' => 'required',
        //     'educationdata' => 'required',
        //     'educationcertificates' => 'required',
        //     'avitraining' => 'required',
        //     'avicertificates' => 'required',
        //     'othertraining' => 'required',
        //     'othercertificates' => 'required',
        //     'licenseheld' => 'required',
        //     'licensevalidity' => 'required',
        //     'teachingaspeck' => 'required',
        //     'conclusion' => 'required',
        //     'recommendation' => 'required',
        //     'masterasesor' => 'required',
        // ]);
        // Asesor::where('id', $id)
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
        //     'lspregistration'=>$request->lspregistration,
        //     'education'=>$request->education,
        //     'position'=>$request->position,
        //     'initial'=>$request->initial,
        //     'eemployer'=>$request->eemployer,
        //     'employercertificates'=>$request->file('employercertificates')->store('certificates','public'),
        //     'educationdata'=>$request->educationdata,
        //     'educationcertificates'=>$request->file('educationcertificates')->store('certificates','public'),
        //     'avitraining'=>$request->avitraining,
        //     'avicertificates'=>$request->file('avicertificates')->store('certificates','public'),
        //     'othertraining'=>$request->othertraining,
        //     'othercertificates'=>$request->file('othercertificates')->store('certificates','public'),
        //     'licenseheld'=>$request->licenseheld,
        //     'licensevalidity'=>$request->file('licensevalidity')->store('certificates','public'),
        //     'teachingaspeck'=>$request->teachingaspeck,            
        //     'conclusion'=>$request->conclusion,            
        //     'recommendation'=>$request->recommendation,            
        //     'masterasesor'=>$request->masterasesor, 
        // ]);
        // return redirect('asesor')->with('success', 'Asesor Edited Successfully!');
        $asesor = Asesor::find($id);
        $asesor->name = $request->name ? $request->name : $asesor->name;
        $asesor->placebirth = $request->placebirth ? $request->placebirth : $asesor->placebirth;
        $asesor->datebirth = $request->datebirth ? $request->datebirth : $asesor->datebirth;
        $asesor->sex = $request->sex ? $request->sex : $asesor->sex;
        $asesor->email = $request->email ? $request->email : $asesor->email;
        $asesor->maritalstatus = $request->maritalstatus ? $request->maritalstatus : $asesor->maritalstatus;
        $asesor->religion = $request->religion ? $request->religion : $asesor->religion;
        $asesor->address = $request->address ? $request->address : $asesor->address;
        $asesor->telephone = $request->telephone ? $request->telephone : $asesor->telephone;
        $asesor->office = $request->office ? $request->office : $asesor->office;
        $asesor->lspregistration = $request->lspregistration ? $request->lspregistration : $asesor->lspregistration;
        $asesor->education = $request->education ? $request->education : $asesor->education;
        $asesor->position = $request->position ? $request->position : $asesor->position;
        $asesor->initial = $request->initial ? $request->initial : $asesor->initial;
        $asesor->met = $request->met ? $request->met : $asesor->met;
        $asesor->sertifikat = $request->sertifikat ? $request->sertifikat : $asesor->sertifikat;
        $asesor->eemployer = $request->eemployer ? $request->eemployer : $asesor->eemployer;
        $asesor->educationdata = $request->educationdata ? $request->educationdata : $asesor->educationdata;
        $asesor->avitraining = $request->avitraining ? $request->avitraining : $asesor->avitraining;
        $asesor->othertraining = $request->othertraining ? $request->othertraining : $asesor->othertraining;
        $asesor->licenseheld = $request->licenseheld ? $request->licenseheld : $asesor->licenseheld;
        $asesor->teachingaspeck = $request->teachingaspeck ? $request->teachingaspeck : $asesor->teachingaspeck;
        $asesor->conclusion = $request->conclusion ? $request->conclusion : $asesor->conclusion;
        $asesor->recommendation = $request->recommendation ? $request->recommendation : $asesor->recommendation;
        $asesor->masterasesor = $request->masterasesor ? $request->masterasesor : $asesor->masterasesor;

        $asesor->save();
        return redirect('/asesor')->with('success', 'Asesor Edited Successfully!');
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
        // Asesor::destroy($id);
        $asesor = Asesor::find($id);
        $asesor->delete();
        return redirect('/asesor')->with('success', 'asesor Deleted Successfully!');
    }
}
