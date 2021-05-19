<?php

namespace App\Http\Controllers;
use App\Models\ServiceManagement;
use App\Models\CompanyProfile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ServicesManagementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $servicemanagement = ServiceManagement::paginate(10);
        return view('servicesManagement/index', compact('servicemanagement'));
    }
    public function showServices()
    {
        // $service = ServiceManagement::All();
        // return view('frontView/services', compact('service'));

        $companyProfileManagement = DB::table('companyprofiles')->find('1');
        $blogManagement = DB::table('blogmanagement')->get();
        $service = DB::table('servicemanagements')->get();
        $photos = DB::table('servicephoto')->find('1');

        return view('frontView.services', compact('companyProfileManagement','service','photos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('servicesManagement/create');
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
            'title' => 'required',
            'shortdesc' => 'required',
            'trainer' => 'required',
            'trainerdesc' => 'required',
            'photo' => 'required',
            'postby' => 'required',
            'contenttext' => 'required',
        ]);
        ServiceManagement::create([
            'title'=>$request->title,
            'shortdesc'=>$request->shortdesc,
            'trainer'=>$request->trainer,
            'trainerdesc'=>$request->trainerdesc,
            'photo'=>$request->file('photo')->store('certificates','public'),
            'postby'=>$request->postby,
            'content'=>$request->contenttext,
        ]);
        return redirect('/servicesManagement')->with('success', 'Services Added Successfully!');
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
        return view('servicesManagement.detail', [
            'servicesManagement' => ServiceManagement::findOrFail($id)
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
        return view('servicesManagement.edit', [
            'servicesManagement' => ServiceManagement::findOrFail($id)
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
            'title' => 'required',
            'shortdesc' => 'required',
            'trainer' => 'required',
            'trainerdesc' => 'required',
            'photo' => 'required',
            'postby' => 'required',
            'contenttext' => 'required',
        ]);
        ServiceManagement::where('id', $id)
        ->update([
            'title'=>$request->title,
            'shortdesc'=>$request->shortdesc,
            'trainer'=>$request->trainer,
            'trainerdesc'=>$request->trainerdesc,
            'photo'=>$request->file('photo')->store('certificates','public'),
            'postby'=>$request->postby,
            'content'=>$request->contenttext,
        ]);
        return redirect('/servicesManagement')->with('success', 'Services Updated Successfully!');
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
        ServiceManagement::destroy($id);
        return redirect('/servicesManagement')->with('success', 'Services Deleted Successfully!');
    }
    public function showDetailServices($id)
    {
        return view('frontView.detailServices', [
            'companyProfileManagement' => CompanyProfile::find(1),
            'serviceManagement' => ServiceManagement::findOrFail($id)
        ]);
    }
}
