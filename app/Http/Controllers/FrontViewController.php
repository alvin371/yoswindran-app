<?php

namespace App\Http\Controllers;
use App\Models\CompanyProfile;
use App\Models\BlogManagement;
use App\Models\ServiceManagement;
use Illuminate\Http\Request;

class FrontViewController extends Controller
{
    //
    public function home()
    {
        return view('frontView.home', [
            'companyProfileManagement' => CompanyProfile::find(1)
        ]);
    }
    public function services()
    {
        return view('frontView.services',[
            'companyProfileManagement' => CompanyProfile::find(1),
            'service' => ServiceManagement::All(),
            'photos' => ServicePhoto::find(1)
        ]);
    }
    public function blog()
    {
        return view('frontView.blog');
    }
    public function companyProfile()
    {
        return view('frontView.companyProfile');

    }
}
