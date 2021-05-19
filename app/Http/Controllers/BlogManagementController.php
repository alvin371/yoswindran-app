<?php

namespace App\Http\Controllers;
use App\Models\BlogManagement;
use App\Models\CompanyProfile;
use App\Models\BlogPhoto;
use Illuminate\Http\Request;

class BlogManagementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $blogManagement = BlogManagement::all();
        return view('blogManagement/index', compact('blogManagement'));
    }
    public function showBlog()
    {
        $companyProfileManagement = CompanyProfile::find(1);
        $blogManagement = BlogManagement::paginate(6);
        $photos = BlogPhoto::find(1);
        return view('frontView.blog', compact('companyProfileManagement','blogManagement','photos'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('blogManagement/create');
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
            'photo' => 'required',
            'postby' => 'required',
            'desc' => 'required',
            'contenttext' => 'required',
        ]);
        BlogManagement::create([
            'title'=>$request->title,
            'photo'=>$request->file('photo')->store('blog','public'),
            'postby'=>$request->postby,
            'desc'=>$request->desc,
            'content'=>$request->contenttext,
        ]);
        return redirect('/blogManagement')->with('success', 'Blog Added Successfully!');
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
        return view('blogManagement.detail', [
            'blogManagement' => BlogManagement::findOrFail($id)
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
        return view('blogManagement.edit', [
            'blogManagement' => BlogManagement::findOrFail($id)
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
            'photo' => 'required',
            'postby' => 'required',
            'desc' => 'required',
            'contenttext' => 'required',
        ]);
        BlogManagement::where('id', $id)
        ->update([
            'title'=>$request->title,
            'photo'=>$request->file('photo')->store('blog','public'),
            'postby'=>$request->postby,
            'desc'=>$request->desc,
            'content'=>$request->contenttext,
        ]);
        return redirect('/blogManagement')->with('success', 'Blog Updated Successfully!');
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
        BlogManagement::destroy($id);
        return redirect('/blogManagement')->with('success', 'Blog Deleted Successfully!');
    }

    public function showDetailBlog($id)
    {
        return view('frontView.detailBlog', [
            'companyProfileManagement' => CompanyProfile::find(1),
            'blogManagement' => BlogManagement::findOrFail($id)
        ]);
    }
}
