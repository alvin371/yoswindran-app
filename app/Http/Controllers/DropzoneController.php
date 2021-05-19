<?php

namespace App\Http\Controllers;
use App\Models\MemberFile;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;

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
        
        // $member = DB::table('member_files')->where('member_id', '=', $id)->update([
        //     'member_id' => $request->member_id,
        //     'employment' => $request->file('employment')->store('memberFile','public'),
        //     'educationcertificates' => $request->file('educationcertificates')->store('memberFile','public'),
        //     'aviationtraining' => $request->file('aviationtraining')->store('memberfile','public'),
        //     'othertraining' => $request->file('othertraining')->store('memberFile','public'),
        //     'diplomafile' => $request->file('diplomafile')->store('memberFile','public'),
        // ]);
       
        
        // $member = MemberFile::where($id, 'member_id');
        // $member->someColumn = $request->someColumn;
        // $member->fill($request->input())->save();
        // dd($member);
        $member = DB::table('member_files')->where('member_id', '=', $id)->get();
      
        // $member->getChanges(); // ["name" => "a new name"]
        
        // $member->save();
        foreach($member as $m){
            $m->wasChanged();
            $m->member_id = $request->member_id ? $request->member_id : $member->member_id;
            $m->employment = $request->file('employment')->store('memberFile','public') ? $request->employment : $member->employment;
            $m->educationcertificates = $request->file('educationcertificates')->store('memberFile','public') ? $request->educationcertificates : $member->educationcertificates;
            $m->aviationtraining = $request->file('aviationtraining')->store('memberFile','public') ? $request->aviationtraining : $member->aviationtraining;
            $m->othertraining = $request->file('othertraining')->store('memberFile','public') ? $request->othertraining : $member->othertraining;
            $m->diplomafile = $request->file('diplomafile')->store('memberFile','public') ? $request->diplomafile : $member->diplomafile;

            $m->save();
            return redirect('/member')->with('success', 'Data Member files has been successfully added');
        }
        // $member->update([
        //     'member_id' => $request->member_id,
        //     'employment' => $request->file('employment')->store('memberFile','public') ? $request->employment : $member->employment,
        //     'educationcertificates' => $request->file('educationcertificates')->store('memberFile','public') ? $request->educationcertificates : $member->educationcertificates,
        //     'aviationtraining' => $request->file('aviationtraining')->store('memberfile','public') ? $request->aviationtraining : $member->aviationtraining,
        //     'othertraining' => $request->file('othertraining')->store('memberFile','public') ? $request->othertraining : $member->othertraining,
        //     'diplomafile' => $request->file('diplomafile')->store('memberFile','public') ? $request->diplomafile : $member->diplomafile,
        // ]);
        // $member->member_id = $request->member_id ? $request->member_id : $member->member_id;
        // $member->employment = $request->file('employment')->store('memberFile','public');
        // $member->educationcertificates = $request->file('education')->store('memberFile','public');
        // $member->aviationtraining = $request->file('aviationtraining')->store('memberfile','public');
        // $member->othertraining = $request->file('othertraining')->store('memberFile','public');
        // $member->diploma = $request->file('diploma')->store('memberFile','public');
        // $member->save();
        // $member->getDirty(); 
        
        
        
    }
    public function storeAsesor(Request $request, $id)
    {
        DB::table('asesor_files')->where('met', '=', $id)->update([
            'met' => $request->met,
            'employercertificates' => $request->file('employercertificates')->store('asesorFile','public'),
            'educationcertificates' => $request->file('educationcertificates')->store('asesorFile','public'),
            'avicertificates' => $request->file('avicertificates')->store('asesorFile','public'),
            'othercertificates' => $request->file('othercertificates')->store('asesorFile','public'),
            'licensevalidity' => $request->file('licensevalidity')->store('asesorFile','public'),
        ]);
        return redirect('/asesor')->with('success', 'Data Asesor files has been successfully added');
    }
    public function storeFacilitator(Request $request, $id)
    {
        DB::table('facilitator_files')->where('loa', '=', $id)->update([
            'loa' => $request->loa,
            'employercertificates' => $request->file('employercertificates')->store('facilitatorFile','public'),
            'educationcertificates' => $request->file('educationcertificates')->store('facilitatorFile','public'),
            'avicertificates' => $request->file('avicertificates')->store('facilitatorFile','public'),
            'othercertificates' => $request->file('othercertificates')->store('facilitatorFile','public'),
            'diplomavalidity' => $request->file('diplomavalidity')->store('facilitatorFile','public'),
        ]);
        return redirect('/facilitator')->with('success', 'Data Facilitator files has been successfully added');
    }
}
