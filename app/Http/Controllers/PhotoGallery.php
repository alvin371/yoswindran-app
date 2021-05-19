<?php

namespace App\Http\Controllers;

use App\Models\PhotoModel;
use App\Models\PhotoGalleryModel;
use App\Models\ServicePhoto;
use App\Models\BlogPhoto;
use App\Models\CompanyProfilePhoto;
use App\Models\ContactUs;
use Illuminate\Http\Request;

class PhotoGallery extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $photo = PhotoModel::all();
        $pg = PhotoGalleryModel::all();
        $service = ServicePhoto::all();
        $blog = BlogPhoto::all();
        $company = CompanyProfilePhoto::all();
        $contact = ContactUs::all();

        return view('photoManagement/index', compact(['photo'],['pg'],['service'],['blog'],['company'], ['contact']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createHighlights()
    {
        //
        return view('photoManagement/createHiglights');
    }
    public function createPhoto()
    {
        //
        return view('photoManagement/createPhoto');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storeHighlights(Request $request)
    {
        //
        $photo = new PhotoModel;
        $request->validate([
            'photo' => 'image|mimes:jpeg,png,jpg|max:10240',
        ]);
        $photo->title = $request->title;
        $photo->hlcontent = $request->hlcontent;
        $photo->photo = $request->file('photo')->store('photogallery','public');
        $photo->save();
        return redirect('/photogallery')->with('success', 'Highlights Created Successfully!');
    }
    public function storePhoto(Request $request)
    {
        //
        $request->validate([
            'photo' => 'image|mimes:jpeg,png,jpg|max:10240',
        ]);
        $photo = new PhotoGalleryModel;
        $photo->title = $request->title;
        $photo->photo = $request->file('photo')->store('photogallery','public');
        $photo->save();
        return redirect('/photogallery')->with('success', 'Photo Created Successfully!');

    }
    public function storeFormus(Request $request)
    {
        //
        $contact = new ContactUs;
        $contact->email = $request->email;
        $contact->namaLengkap = $request->namaLengkap;
        $contact->Pesan = $request->Pesan;
        $contact->save();
        return redirect('/companyProfile')->with('success', 'Message has been sent!');

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
    public function editHighlights($id)
    {
        //
        return view('photoManagement.editHighlights',[
            'photo' => PhotoModel::findOrFail($id)
        ]);
    }
    public function editPhoto($id)
    {
        //
        return view('photoManagement.editPhoto',[
            'photo' => PhotoGalleryModel::findOrFail($id)
        ]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updateHighlights(Request $request, $id)
    {
        //
        $request->validate([
            'photo' => 'image|mimes:jpeg,png,jpg|max:10240',
        ]);
        $photo = PhotoModel::find($id);
        $photo->title = $request->title ? $request->title : $photo->title;
        $photo->hlcontent = $request->hlcontent ? $request->hlcontent : $photo->hlcontent;
        $photo->photo = $request->photo ? $request->photo : $photo->photo;
        $photo->save();
        return redirect('/photogallery')->with('success', 'Highlights Edited Successfully!');
    }
    public function updatePhoto(Request $request, $id)
    {
        //
        $request->validate([
            'photo' => 'image|mimes:jpeg,png,jpg|max:10240',
        ]);
        $photo = PhotoGalleryModel::find($id);
        $photo->title = $request->title ? $request->title : $photo->title;
        $photo->photo = $request->file('photo')->store('photogallery','public');
        $photo->save();
        return redirect('/photogallery')->with('success', 'Photo Edited Successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroyHighlights($id)
    {
        //
        PhotoModel::destroy($id);
        return redirect('/photogallery')->with('success', 'Highlights Deleted Successfully!');
    }
    public function destroyPhoto($id)
    {
        //
        PhotoGalleryModel::destroy($id);
        return redirect('/photogallery')->with('success', 'Photo Deleted Successfully!');
    }
    public function destroyFormus($id)
    {
        //
        ContactUs::destroy($id);
        return redirect('/photogallery')->with('success', 'Contact Us Form Deleted Successfully!');
    }


    // edit blog and services photo
    public function editBlogPhoto(){
        return view('photoManagement.editBlog',[
            'photo' => BlogPhoto::findOrFail(1)
        ]);
    }
    public function editServicesPhoto(){
        return view('photoManagement.editServices',[
            'photo' => ServicePhoto::findOrFail(1)
        ]);
    }
    public function editCompanyPhoto(){
        return view('photoManagement.editCompany',[
            'photo' => CompanyProfilePhoto::findOrFail(1)
        ]);
    }

    public function updateBlog(Request $request){
        $request->validate([
            'photo' => 'image|mimes:jpeg,png,jpg|max:10240',
        ]);
        $photo = BlogPhoto::find(1);
        $photo->name = $request->file('photo')->store('photogallery','public');
        $photo->save();
        return redirect('/photogallery')->with('success', 'Blog Photo Updated Successfully!');
    }
    public function updateServices(Request $request){
        $request->validate([
            'photo' => 'image|mimes:jpeg,png,jpg|max:10240',
        ]);
        $photo = ServicePhoto::find(1);
        $photo->name = $request->file('photo')->store('photogallery','public');
        $photo->save();
        return redirect('/photogallery')->with('success', 'Services Photo Updated Successfully!');
    }
    public function updateCompany(Request $request){
        $request->validate([
            'photo' => 'image|mimes:jpeg,png,jpg|max:10240',
        ]);
        $photo = CompanyProfilePhoto::find(1);
        $photo->photo = $request->file('photo')->store('photogallery','public');
        $photo->save();
        return redirect('/photogallery')->with('success','Company Profile Photo Updated Succesfully!');
    }
}
