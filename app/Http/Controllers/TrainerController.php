<?php

namespace App\Http\Controllers;

use App\Models\Trainer;
use Illuminate\Http\Request;

class TrainerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $trainer = Trainer::all();
        return view('trainer.index', compact('trainer'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('trainer.create');
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
        // $request->validate([
        //     'familyname' => 'required',
        //     'nationality' => 'required',
        //     'email' => 'required',
        //     'name' => 'required',
        //     'phone' => 'required',
        //     'datebirth' => 'required',
        //     'license' => 'required',
        //     'licensenumber' => 'required',
        //     'licensedate' => 'required',
        //     'licenseauth' => 'required',
        //     'rating1type' => 'required',
        //     'rating1validity' => 'required',
        //     'rating1date' => 'required',
        //     'rating1rating' => 'required',
        //     'rating2aircraft' => 'required',
        //     'rating2validity' => 'required',
        //     'rating2date' => 'required',
        //     'rating2rating' => 'required',
        //     'otherlicense' => 'required',
        //     'othervalidity' => 'required',
        //     'readlevel' => 'required',
        //     'writelevel' => 'required',
        //     'speaklevel' => 'required',
        //     'exptype' => 'required',
        //     'expdatefrom' => 'required',
        //     'expdateend' => 'required',
        //     'expcommand' => 'required',
        //     'expofficer' => 'required',
        //     'expcaptain' => 'required',
        //     'texptype' => 'required',
        //     'texptotal' => 'required',
        //     'texplast12' => 'required',
        //     'texpaircraft' => 'required',
        //     'othertype' => 'required',
        //     'otherdate' => 'required',
        //     'otherflight' => 'required',
        //     'othertraining' => 'required',
        //     'signature' => 'required',
        // ]);
        Trainer::create([
            'idtrainer'=>$request->id,
            'loa'=>$request->loa,
            'familyname'=>$request->familyname,
            'nationality'=>$request->nationality,
            'email'=>$request->email,
            'name'=>$request->name,
            'phone'=>$request->phone,
            'datebirth'=>$request->datebirth,
            'license'=>$request->license,
            'licensenumber'=>$request->licensenumber,
            'licensedate'=>$request->licensedate,
            'licenseauth'=>$request->licenseauth,
            'rating1type'=>$request->rating1type,
            'rating1validity'=>$request->rating1validity,
            'rating1date'=>$request->rating1date,
            'rating1rating'=>$request->rating1rating,
            'rating2aircraft'=>$request->rating2aircraft,
            'rating2validity'=>$request->rating2validity,
            'rating2date'=>$request->rating2date,
            'rating2rating'=>$request->rating2rating,
            'otherlicense'=>$request->otherlicense,
            'othervalidity'=>$request->othervalidity,
            'readlevel'=>$request->readlevel,
            'writelevel'=>$request->writelevel,
            'speaklevel'=>$request->speaklevel,
            'exptype'=>$request->exptype,
            'expdatefrom'=>$request->expdatefrom,
            'expdateend'=>$request->expdateend,
            'expcommand'=>$request->expcommand,
            'expofficer'=>$request->expofficer,
            'expcaptain'=>$request->expcaptain,
            'texptype'=>$request->texptype,
            'texptotal'=>$request->texptotal,
            'texplast12'=>$request->texplast12,
            'texpaircraft'=>$request->texpaircraft,
            'othertype'=>$request->othertype,
            'otherdate'=>$request->otherdate,
            'otherflight'=>$request->otherflight,
            'othertraining'=>$request->othertraining,
            'signature'=>$request->file('signature')->store('signature','public'),
        ]);
        return redirect('/trainer')->with('success', 'Trainer Created Successfully!');
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
        return view('trainer.detail', [
            'trainer' => Trainer::findOrFail($id)
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
        return view('trainer.edit', [
            'trainer' => Trainer::findOrFail($id)
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
        //     'familyname' => 'required',
        //     'nationality' => 'required',
        //     'email' => 'required',
        //     'name' => 'required',
        //     'phone' => 'required',
        //     'datebirth' => 'required',
        //     'license' => 'required',
        //     'licensenumber' => 'required',
        //     'licensedate' => 'required',
        //     'licenseauth' => 'required',
        //     'rating1type' => 'required',
        //     'rating1validity' => 'required',
        //     'rating1date' => 'required',
        //     'rating1rating' => 'required',
        //     'rating2aircraft' => 'required',
        //     'rating2validity' => 'required',
        //     'rating2date' => 'required',
        //     'rating2rating' => 'required',
        //     'otherlicense' => 'required',
        //     'othervalidity' => 'required',
        //     'readlevel' => 'required',
        //     'writelevel' => 'required',
        //     'speaklevel' => 'required',
        //     'exptype' => 'required',
        //     'expdatefrom' => 'required',
        //     'expdateend' => 'required',
        //     'expcommand' => 'required',
        //     'expofficer' => 'required',
        //     'expcaptain' => 'required',
        //     'texptype' => 'required',
        //     'texptotal' => 'required',
        //     'texplast12' => 'required',
        //     'texpaircraft' => 'required',
        //     'othertype' => 'required',
        //     'otherdate' => 'required',
        //     'otherflight' => 'required',
        //     'othertraining' => 'required',
        //     'signature' => 'required',
        // ]);
        // Trainer::where('id', $id)
        // ->update([
        //     'familyname'=>$request->familyname,
        //     'nationality'=>$request->nationality,
        //     'email'=>$request->email,
        //     'name'=>$request->name,
        //     'phone'=>$request->phone,
        //     'datebirth'=>$request->datebirth,
        //     'license'=>$request->license,
        //     'licensenumber'=>$request->licensenumber,
        //     'licensedate'=>$request->licensedate,
        //     'licenseauth'=>$request->licenseauth,
        //     'rating1type'=>$request->rating1type,
        //     'rating1validity'=>$request->rating1validity,
        //     'rating1date'=>$request->rating1date,
        //     'rating1rating'=>$request->rating1rating,
        //     'rating2aircraft'=>$request->rating2aircraft,
        //     'rating2validity'=>$request->rating2validity,
        //     'rating2date'=>$request->rating2date,
        //     'rating2rating'=>$request->rating2rating,
        //     'otherlicense'=>$request->otherlicense,
        //     'othervalidity'=>$request->othervalidity,
        //     'readlevel'=>$request->readlevel,
        //     'writelevel'=>$request->writelevel,
        //     'speaklevel'=>$request->speaklevel,
        //     'exptype'=>$request->exptype,
        //     'expdatefrom'=>$request->expdatefrom,
        //     'expdateend'=>$request->expdateend,
        //     'expcommand'=>$request->expcommand,
        //     'expofficer'=>$request->expofficer,
        //     'expcaptain'=>$request->expcaptain,
        //     'texptype'=>$request->texptype,
        //     'texptotal'=>$request->texptotal,
        //     'texplast12'=>$request->texplast12,
        //     'texpaircraft'=>$request->texpaircraft,
        //     'othertype'=>$request->othertype,
        //     'otherdate'=>$request->otherdate,
        //     'otherflight'=>$request->otherflight,
        //     'othertraining'=>$request->othertraining,
        //     'signature'=>$request->file('signature')->store('signature','public'),
        // ]);
        // return redirect('trainer')->with('success', 'Trainer Edited Successfully!');

        $trainer = Trainer::find($id);
        $trainer->idtrainer = $request->id ? $request->id : $trainer->id;
        $trainer->loa = $request->loa ? $request->loa : $trainer->loa;
        $trainer->familyname = $request->familyname ? $request->familyname : $trainer->familyname;
        $trainer->nationality = $request->nationality ? $request->nationality : $trainer->nationality;
        $trainer->email = $request->email ? $request->email : $trainer->email;
        $trainer->name = $request->name ? $request->name : $trainer->name;
        $trainer->phone = $request->phone ? $request->phone : $trainer->phone;
        $trainer->datebirth = $request->datebirth ? $request->datebirth : $trainer->datebirth;
        $trainer->license = $request->license ? $request->license : $trainer->license;
        $trainer->licensenumber = $request->licensenumber ? $request->licensenumber : $trainer->licensenumber;
        $trainer->licensedate = $request->licensedate ? $request->licensedate : $trainer->licensedate;
        $trainer->licenseauth = $request->licenseauth ? $request->licenseauth : $trainer->licenseauth;
        $trainer->rating1type = $request->rating1type ? $request->rating1type : $trainer->rating1type;
        $trainer->rating1validity = $request->rating1validity ? $request->rating1validity : $trainer->rating1validity;
        $trainer->rating1date = $request->rating1date ? $request->rating1date : $trainer->rating1date;
        $trainer->rating1rating = $request->rating1rating ? $request->rating1rating : $trainer->rating1rating;
        $trainer->rating2aircraft = $request->rating2aircraft ? $request->rating2aircraft : $trainer->rating2aircraft;
        $trainer->rating2validity = $request->rating2validity ? $request->rating2validity : $trainer->rating2validity;
        $trainer->rating2date = $request->rating2date ? $request->rating2date : $trainer->rating2date;
        $trainer->rating2rating = $request->rating2rating ? $request->rating2rating : $trainer->rating2rating;
        $trainer->otherlicense = $request->otherlicense ? $request->otherlicense : $trainer->otherlicense;
        $trainer->othervalidity = $request->othervalidity ? $request->othervalidity : $trainer->othervalidity;
        $trainer->readlevel = $request->readlevel ? $request->readlevel : $trainer->readlevel;
        $trainer->writelevel = $request->writelevel ? $request->writelevel : $trainer->writelevel;
        $trainer->speaklevel = $request->speaklevel ? $request->speaklevel : $trainer->speaklevel;
        $trainer->exptype = $request->exptype ? $request->exptype : $trainer->exptype;
        $trainer->expdatefrom = $request->expdatefrom ? $request->expdatefrom : $trainer->expdatefrom;
        $trainer->expdateend = $request->expdateend ? $request->expdateend : $trainer->expdateend;
        $trainer->expcommand = $request->expcommand ? $request->expcommand : $trainer->expcommand;
        $trainer->expofficer = $request->expofficer ? $request->expofficer : $trainer->expofficer;
        $trainer->expcaptain = $request->expcaptain ? $request->expcaptain : $trainer->expcaptain;
        $trainer->texptype = $request->texptype ? $request->texptype : $trainer->texptype;
        $trainer->texptotal = $request->texptotal ? $request->texptotal : $trainer->texptotal;
        $trainer->texplast12 = $request->texplast12 ? $request->texplast12 : $trainer->texplast12;
        $trainer->texpaircraft = $request->texpaircraft ? $request->texpaircraft : $trainer->texpaircraft;
        $trainer->othertype = $request->othertype ? $request->othertype : $trainer->othertype;
        $trainer->otherdate = $request->otherdate ? $request->otherdate : $trainer->otherdate;
        $trainer->otherflight = $request->otherflight ? $request->otherflight : $trainer->otherflight;
        $trainer->othertraining = $request->othertraining ? $request->othertraining : $trainer->othertraining;
        $trainer->save();
        return redirect('/trainer')->with('success', 'Trainer Edited Successfully!');
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
        Trainer::destroy($id);
        return redirect('/trainer')->with('success', 'Trainer Deleted Successfully!');
    }
}
