<?php

namespace App\Http\Controllers;
use App\Models\MemberFile;
use App\Models\AsesorFile;
use App\Models\FacilitatorFile;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class DropzoneController extends Controller
{
    //
    public function dropzoneMember($id){

        // return view('member.filestore');

        return view('member.filestore', [
            'member' => MemberFile::findOrFail(1)
        ]);
    }
    public function storeMember(Request $request, $id)
    {
        // if($request->hasfile('file'))
        //  {
        //     foreach($request->file('file') as $file)
        //     {
        //         $name = time().'.'.$file->extension();
        //         $file->move(public_path().'/files/', $name);  
        //         $data[] = $name;  
        //     }
        //  }


        //  $file= new MemberFile();
        //  $file->filename=json_encode($data);
        //  $file->memberID = $request->memberID;
        //  $file->save();

         if ($request->hasfile('file')) {
            $files = $request->file('file');

            foreach($files as $file) {
                $name = $file->getClientOriginalName();
                $path = $file->storeAs('MemberFile', $name, 'public');

                MemberFile::create([
                    'filename' => $name,
                    'memberID' => $request->memberID,
                  ]);
            }
         }


        return back()->with('success', 'Data Your files has been successfully added');
        
    }
    public function storeAsesor(Request $request, $id)
    {
        // DB::table('asesor_files')->where('met', '=', $id)->update([
        //     'met' => $request->met,
        //     'employercertificates' => $request->file('employercertificates')->store('asesorFile','public'),
        //     'educationcertificates' => $request->file('educationcertificates')->store('asesorFile','public'),
        //     'avicertificates' => $request->file('avicertificates')->store('asesorFile','public'),
        //     'othercertificates' => $request->file('othercertificates')->store('asesorFile','public'),
        //     'licensevalidity' => $request->file('licensevalidity')->store('asesorFile','public'),
        // ]);
        // return redirect('/asesor')->with('success', 'Data Asesor files has been successfully added');

        if ($request->hasfile('file')) {
            $files = $request->file('file');

            foreach($files as $file) {
                $name = $file->getClientOriginalName();
                $path = $file->storeAs('AsesorFile', $name, 'public');

                AsesorFile::create([
                    'filename' => $name,
                    'asesorID' => $request->asesorID,
                  ]);
            }
         }


        return back()->with('success', 'Data Your files has been successfully added');
    }
    public function storeFacilitator(Request $request, $id)
    {
        if ($request->hasfile('file')) {
            $files = $request->file('file');

            foreach($files as $file) {
                $name = $file->getClientOriginalName();
                $path = $file->storeAs('FacilitatorFile', $name, 'public');

                FacilitatorFile::create([
                    'filename' => $name,
                    'facilitatorID' => $request->facilitatorID,
                  ]);
            }
         }


        return back()->with('success', 'Data Your files has been successfully added');
    }
}
