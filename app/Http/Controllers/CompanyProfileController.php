<?php

namespace App\Http\Controllers;
use App\Models\CompanyProfile;
use App\Models\BlogManagement;
use App\Models\ServiceManagement;
use App\Models\PhotoModel;
use App\Models\CompanyProfilePhoto;
use App\Models\PhotoGalleryModel;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class CompanyProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $companyProfileManagement = CompanyProfile::All();
        return view('companyProfileManagement/index', compact('companyProfileManagement'));
    }
    public function showCompanyProfile()
    {
        return view('frontView/companyProfile', [
            'companyProfileManagement' => CompanyProfile::findOrFail(1),
            'companyProfile' => CompanyProfilePhoto::findOrFail(1),
        ]);
    }
    public function showIndex()
    {
        $photo = PhotoModel::all();
        $companyProfileManagement = DB::table('companyprofiles')->find('1');
        $blogManagement = DB::table('blogmanagement')->get();
        $service = DB::table('servicemanagements')->get();
        $gallery = PhotoGalleryModel::all();
        return view('frontView.home', compact('companyProfileManagement','blogManagement','service','photo','gallery'));
    }
    public function showFrontView()
    {
        return view('layout/main', [
            'companyProfileManagement' => CompanyProfile::findOrFail(1)
        ]);
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
        return view('companyProfileManagement.edit', [
            'companyProfileManagement' => CompanyProfile::findOrFail($id)
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
        //     'indonesian' => 'required',
        //     'international' => 'required',
        //     'motto' => 'required',
        //     'photo' => 'required',
        //     'ceoname' => 'required',
        //     'ceoquote' => 'required',
        //     'desc' => 'required',
        //     'address' => 'required',
        //     'fax' => 'required',
        //     'email' => 'required',
        //     'csphone' => 'required',
        //     'csemail' => 'required',
        //     'indexphoto' => 'required',
        //     'content' => 'required',
        // ]);
        // CompanyProfile::where('id', $id)
        // ->update([
        //     'indonesian'=>$request->indonesian,
        //     'international'=>$request->international,
        //     'motto'=>$request->motto,
        //     'photo'=>$request->file('ceopict')->store('blog','public'),
        //     'ceoname'=>$request->ceoname,
        //     'ceoquote'=>$request->ceoquote,
        //     'desc'=>$request->desc,
        //     'address'=>$request->address,
        //     'phone'=>$request->phone,
        //     'fax'=>$request->fax,
        //     'email'=>$request->email,
        //     'csphone'=>$request->csphone,
        //     'csemail'=>$request->csemail,
        //     'indexphoto'=>$request->file('indexphoto')->store('blog','public'),
        //     'content'=>$request->companycontent,
        // ]);
        // return redirect('/companyProfileManagement')->with('success', 'Company Profile Updated Successfully!');

        $cprofile = CompanyProfile::find($id);
        $cprofile->indonesian = $request->indonesian ? $request->indonesian : $cprofile->indonesian;
        $cprofile->international = $request->international ? $request->international : $cprofile->international;
        $cprofile->motto = $request->motto ? $request->motto : $cprofile->motto;
        $cprofile->photo = $request->photo ? $request->photo : $cprofile->photo;
        $cprofile->ceoname = $request->ceoname ? $request->ceoname : $cprofile->ceoname;
        $cprofile->ceoquote = $request->ceoquote ? $request->ceoquote : $cprofile->ceoquote;
        $cprofile->desc = $request->desc ? $request->desc : $cprofile->desc;
        $cprofile->address = $request->address ? $request->address : $cprofile->address;
        $cprofile->phone = $request->phone ? $request->phone : $cprofile->phone;
        $cprofile->fax = $request->fax ? $request->fax : $cprofile->fax;
        $cprofile->email = $request->email ? $request->email : $cprofile->email;
        $cprofile->csphone = $request->csphone ? $request->csphone : $cprofile->csphone;
        $cprofile->csemail = $request->csemail ? $request->csemail : $cprofile->csemail;
        $cprofile->facebook = $request->facebook ? $request->facebook : $cprofile->facebook;
        $cprofile->instagram = $request->instagram ? $request->instagram : $cprofile->instagram;
        $cprofile->twitter = $request->twitter ? $request->twitter : $cprofile->twitter;
        $cprofile->whatsapp = $request->whatsapp ? $request->whatsapp : $cprofile->whatsapp;
        $cprofile->indexphoto = $request->indexphoto ? $request->indexphoto : $cprofile->indexphoto;
        $cprofile->content = $request->companycontent ? $request->companycontent : $cprofile->companycontent;

        $cprofile->save();
        return redirect('/companyProfileManagement')->with('success', 'Company Profile Updated Successfully!');
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
