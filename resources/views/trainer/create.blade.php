@extends('layout/memberArea')
@section('title','TRAINER')
@section('container')
<!-- Begin Page Content -->
<div class="container">


<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Add Trainer</h6>
    </div>
    <div class="card-body">
        <div class="btn btn-primary"><a href="{{url('/trainer')}}" style="text-decoration:none;color:white;">Back</a></div>
        <hr>
        <h4 class="text-primary text-uppercase">Personal Data</h4>
        <hr>
        <div class="table-responsive">
        <form method="post" enctype="multipart/form-data" action="/trainer">
        @csrf
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <p style="font-size:16px; font-weight:100;"><em>*Note</em> You can add ("-")" for uncertain data. Please fill in all the forms provided</p>
                    <div class="form-group">
                        <div class="col-6">
                            <label for="id">ID</label>
                            <input type="text" name="id" class="form-control @error('id') is-invalid @enderror"  value="{{old('id')}}"id="id">
                            @error('id')
                            <div id="id" class="invalid-feedback">{{$message}}
                            </div>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-6">
                            <label for="loa">LOA</label>
                            <input type="text" name="loa" class="form-control @error('loa') is-invalid @enderror"  value="{{old('loa')}}"id="loa">
                            @error('loa')
                            <div id="loa" class="invalid-feedback">{{$message}}
                            </div>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-6">
                            <label for="familyname">Family Name</label>
                            <input type="text" name="familyname" class="form-control @error('familyname') is-invalid @enderror"  value="{{old('familyname')}}"id="familyname">
                            @error('familyname')
                            <div id="familyname" class="invalid-feedback">{{$message}}
                            </div>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-6">
                            <label for="nationality">Nationality</label>
                            <input type="text" class="form-control @error('nationality') is-invalid @enderror" value="{{old('nationality')}}" name="nationality"
                                id="nationality" placeholder="Indonesia">
                            @error('nationality')
                            <div id="nationality" class="invalid-feedback">{{$message}}
                            </div>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-6">
                            <label for="email">Email</label>
                            <input type="text" class="form-control @error('email') is-invalid @enderror" value="{{old('email')}}" name="email" id="email"
                                placeholder="youremail@mail.com">
                            @error('email')
                            <div id="email" class="invalid-feedback">{{$message}}
                            </div>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-6">
                            <label for="name">First Name</label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror" value="{{old('name')}}" name="name"
                                id="name">
                            @error('name')
                            <div id="name" class="invalid-feedback">{{$message}}
                            </div>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-6">
                            <label for="phone">Phone Number</label>
                            <input type="text" class="form-control @error('phone') is-invalid @enderror" value="{{old('phone')}}" name="phone" id="phone"
                                placeholder="08774212">
                            @error('phone')
                            <div id="phone" class="invalid-feedback">{{$message}}
                            </div>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-6">
                            <label for="date">Date of Birth</label>
                            <input type="date" class="form-control @error('date') is-invalid @enderror" value="{{old('date')}}" name="datebirth" id="date">
                            @error('date')
                            <div id="date" class="invalid-feedback">{{$message}}
                            </div>
                            @enderror
                        </div>
                    </div>
        </div>
        <hr>
        <h4 class="text-primary text-uppercase">Licence Detail</h4>
        <hr>
        <div class="employment">
                <div class="row">
                    <div class="col-4">
                        <div class="form-group">
                            <label for="license">LICENCE</label>
                            <input type="text" class="form-control @error('license') is-invalid @enderror" value="{{old('license')}}" name="license" id="license">
                            @error('license')
                            <div id="license" class="invalid-feedback">{{$message}}
                            </div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="form-group">
                            <label for="licensenumber">Number</label>
                            <input type="text" class="form-control @error('licensenumber') is-invalid @enderror" value="{{old('licensenumber')}}" name="licensenumber" id="licensenumber">
                            @error('licensenumber')
                            <div id="licensenumber" class="invalid-feedback">{{$message}}
                            </div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="form-group">
                            <label for="licensedate">Date of Issue</label>
                            <input type="date" class="form-control @error('licensedate') is-invalid @enderror" value="{{old('licensedate')}}" name="licensedate" id="licensedate">
                            @error('licensedate')
                            <div id="licensedate" class="invalid-feedback">{{$message}}
                            </div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="form-group">
                            <label for="licenseauth">Issuing Authority</label>
                            <input type="text" class="form-control @error('licenseauth') is-invalid @enderror" value="{{old('licenseauth')}}" name="licenseauth" id="licenseauth">
                            @error('licenseauth')
                            <div id="licenseauth" class="invalid-feedback">{{$message}}
                            </div>
                            @enderror
                        </div>
                    </div>
                </div>
        </div>
        <hr>
        <h4 class="text-primary text-uppercase">Type Rating Instructor I</h4>
        <hr>
        <div class="education">
                <div class="row">
                    <div class="col-4">
                        <div class="form-group">
                            <label for="rating1type">Rating Type</label>
                            <input type="text" class="form-control @error('rating1type') is-invalid @enderror" value="{{old('rating1type')}}" name="rating1type" id="rating1type">
                            @error('rating1type')
                            <div id="rating1type" class="invalid-feedback">{{$message}}
                            </div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="form-group">
                            <label for="rating1validity">Validity</label>
                            <input type="text" class="form-control @error('rating1validity') is-invalid @enderror" value="{{old('rating1validity')}}" value="{{old('rating1validity')}}" name="rating1validity" id="validity">
                            @error('rating1validity')
                            <div id="rating1validity" class="invalid-feedback">{{$message}}
                            </div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="form-group">
                            <label for="rating1date">Date of Last Flight</label>
                            <input type="date" class="form-control @error('rating1date') is-invalid @enderror" value="{{old('rating1date')}}" name="rating1date" id="rating1date">
                            @error('rating1date')
                            <div id="rating1date" class="invalid-feedback">{{$message}}
                            </div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="form-group">
                            <label for="rating1rating">Type Rating Instructor(Validity)</label>
                            <input type="text" class="form-control @error('rating1rating') is-invalid @enderror" value="{{old('rating1rating')}}" name="rating1rating"
                                id="rating1rating">
                            @error('rating1rating')
                            <div id="rating1rating" class="invalid-feedback">{{$message}}
                            </div>
                            @enderror
                        </div>
                    </div>
                </div>
        </div>
        <hr>
        <h4 class="text-primary text-uppercase">Type Rating Instructor II</h4>
        <hr>
        <div class="aviation-training">
                <div class="row">
                    <div class="col-4">
                        <div class="form-group">
                            <label for="rating2aircraft">Other Large Aircraft</label>
                            <input type="text" class="form-control @error('rating2aircraft') is-invalid @enderror" value="{{old('rating2aircraft')}}" name="rating2aircraft"
                                id="rating2aircraft">
                            @error('rating2aircraft')
                            <div id="rating2aircraft" class="invalid-feedback">{{$message}}
                            </div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="form-group">
                            <label for="rating2validity">Validity</label>
                            <input type="text" class="form-control @error('rating2validity') is-invalid @enderror" value="{{old('rating2validity')}}" name="rating2validity"
                                id="rating2validity">
                            @error('rating2validity')
                            <div id="rating2validity" class="invalid-feedback">{{$message}}
                            </div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="form-group">
                            <label for="rating2date">Date of Last Flight</label>
                            <input type="date" class="form-control @error('rating2date') is-invalid @enderror" value="{{old('rating2date')}}" name="rating2date"
                                id="rating2date">
                            @error('rating2date')
                            <div id="rating2date" class="invalid-feedback">{{$message}}
                            </div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="form-group">
                            <label for="rating2rating">Type Rating Instructor(Validity)</label>
                            <input type="text" class="form-control @error('rating2rating') is-invalid @enderror" value="{{old('rating2rating')}}" name="rating2rating"
                                id="rating2rating">
                            @error('rating2rating')
                            <div id="rating2rating" class="invalid-feedback">{{$message}}
                            </div>
                            @enderror
                        </div>
                    </div>
                </div>
        </div>
        <hr>
        <h4 class="text-primary text-uppercase">Other Licences/Ratings/Certificates</h4>
        <hr>
        <div class="other-training">
                <div class="row">
                    <div class="col-4">
                        <div class="form-group">
                            <label for="otherlicense">License/Rating/Certificates</label>
                            <input type="text" class="form-control @error('otherlicense') is-invalid @enderror" value="{{old('otherlicense')}}" name="otherlicense"
                                id="otherlicense">
                            @error('otherlicense')
                            <div id="otherlicense" class="invalid-feedback">{{$message}}
                            </div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="form-group">
                            <label for="othervalidty">Validity</label>
                            <input type="text" class="form-control @error('othervailidity') is-invalid @enderror" value="{{old('othervailidity')}}" name="othervalidity"
                                id="othervalidty">
                            @error('othervailidity')
                            <div id="othervalidity" class="invalid-feedback">{{$message}}
                            </div>
                            @enderror
                        </div>
                    </div>
                </div>
        </div>
        <hr>
        <h4 class="text-primary text-uppercase">English Level</h4>
        <hr>
        <div class="englishlevel">
                <div class="row">
                    <div class="col-4">
                        <label for="read">Read</label>
                        <select class="form-control @error('readlevel') is-invalid @enderror" value="{{old('read')}}" id="read" name="readlevel">
                            <option value="">English Level</option>
                            <option value="Fluent">Fluent</option>
                            <option value="Good">Good</option>
                            <option value="Basic">Basic</option>
                        </select>
                        @error('readlevel')
                            <div id="read" class="invalid-feedback">{{$message}}
                            </div>
                        @enderror
                    </div>
                    <div class="col-4">
                        <label for="write">Write</label>
                        <select class="form-control @error('writelevel') is-invalid @enderror" value="{{old('writelevel')}}" id="write" name="writelevel">
                            <option value="">English Level</option>
                            <option value="Fluent">Fluent</option>
                            <option value="Good">Good</option>
                            <option value="Basic">Basic</option>
                        </select>
                        @error('writelevel')
                            <div id="write" class="invalid-feedback">{{$message}}
                            </div>
                        @enderror
                    </div>
                    <div class="col-4">
                        <label for="speak">Speak</label>
                        <select class="form-control @error('speaklevel') is-invalid @enderror" value="{{old('speaklevel')}}" id="speak" name="speaklevel">
                            <option value="">English Level</option>
                            <option value="Fluent">Fluent</option>
                            <option value="Good">Good</option>
                            <option value="Basic">Basic</option>
                        </select>
                        @error('speaklevel')
                            <div id="speak" class="invalid-feedback">{{$message}}
                            </div>
                        @enderror
                    </div>
                </div>
        </div>
        <hr>
        <h4 class="text-primary">IN-FLIGHT AIRCRAFT OPERATIONAL EXPERIENCE<sup>1</sup></h4>
        <hr>
        <div class="operational">
                <div class="row">
                    <div class="col-4">
                        <div class="form-group">
                            <label for="aircraft-type">Type of Aircraft</label>
                            <input type="text" class="form-control @error('exptype') is-invalid @enderror" value="{{old('exptype')}}" name="exptype"
                                id="aircraft-type">
                            @error('exptype')
                                <div id="aircraft-type" class="invalid-feedback">{{$message}}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="form-group">
                            <label for="date-from">Date From</label>
                            <input type="date" class="form-control @error('expdatefrom') is-invalid @enderror" value="{{old('expdatefrom')}}" name="expdatefrom" id="date-from">
                            @error('expdatefrom')
                                <div id="date-from" class="invalid-feedback">{{$message}}
                                </div>
                            @enderror
                            <label for="date-to">Date To</label>
                            <input type="date" class="form-control @error('expdateend') is-invalid @enderror" value="{{old('expdateend')}}" name="expdateend" id="date-to">
                            @error('expdateend')
                                <div id="date-to" class="invalid-feedback">{{$message}}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="form-group">
                            <label for="pilot-command">Pilot-in-Command</label>
                            <input type="text" class="form-control @error('expcommand') is-invalid @enderror" value="{{old('expcommand')}}" name="expcommand"
                                id="pilot-command">
                            @error('expcommand')
                                <div id="pilot-command" class="invalid-feedback">{{$message}}
                                </div>
                            @enderror
                            <label for="first-officer">First Officer</label>
                            <input type="text" class="form-control @error('expofficer') is-invalid @enderror" value="{{old('expofficer')}}" name="expofficer"
                                id="first-officer">
                            @error('expofficer')
                                <div id="first-officer" class="invalid-feedback">{{$message}}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                            <label for="pilot-command">Experience as Captain Conducting LIFUS
                                <sup>2</sup></label>
                            <input type="text" class="form-control @error('expcaptain') is-invalid @enderror" value="{{old('expcaptain')}}" name="expcaptain"
                                id="pilot-command">
                            @error('expcaptain')
                                <div id="pilot-command" class="invalid-feedback">{{$message}}
                                </div>
                            @enderror
                        </div>
                    </div>
                </div>
        </div>
        <hr>
        <h4 class="text-primary text-uppercase"> flight training experience <sup>1</sup></h4>
        <hr>
        <div class="flight-exp">
            <div class="row">
                <div class="col-4">
                    <div class="form-group">
                        <label for="aircraft-type-exp">Type of Aircraft</label>
                        <input type="text" class="form-control @error('texptype') is-invalid @enderror" value="{{old('texptype')}}" name="texptype"
                            id="aircraft-type-exp">
                        @error('texptype')
                        <div id="aircraft-type-exp" class="invalid-feedback">{{$message}}
                        </div>
                        @enderror
                    </div>
                </div>
                <div class="col-4">
                    <div class="form-group">
                        <h6 class="text-center">FFS</h6>
                        <label for="exp-total">Total</label>
                        <input type="text" class="form-control @error('texptotal') is-invalid @enderror" value="{{old('texptotal')}}" name="texptotal" id="exp-total">
                        @error('texptotal')
                            <div id="exp-total" class="invalid-feedback">{{$message}}
                            </div>
                        @enderror
                        <label for="exp-lastmonth">Last 12 Months </label>
                        <input type="text" class="form-control @error('texplast12') is-invalid @enderror" value="{{old('texplast12')}}" name="texplast12"
                            id="exp-lastmonth">
                        @error('texplast12')
                            <div id="exp-lastmonth" class="invalid-feedback">{{$message}}
                            </div>
                        @enderror
                    </div>
                </div>
                <div class="col-4">
                    <div class="form-group">
                        <label for="exp-basetraining">Aircraft(Base Training)</label>
                        <input type="text" class="form-control @error('texpaircraft') is-invalid @enderror" value="{{old('texpaircraft')}}" name="texpaircraft"
                            id="exp-basetraining">
                        @error('texpaircraft')
                        <div id="exp-basetraining" class="invalid-feedback">{{$message}}
                        </div>
                        @enderror
                    </div>
                </div>
            </div>
        </div>
        <hr>
        <h4 class="text-primary text-uppercase">Other operational details</h4>
        <hr>
        <div class="other-operational">
            <div class="row">
                <div class="col-4">
                    <div class="form-group">
                        <label for="aircraft-type-other">Type of Aircraft</label>
                        <input type="text" class="form-control @error('othertype') is-invalid @enderror" value="{{old('othertype')}}" name="othertype"
                            id="aircraft-type-other">
                        @error('othertype')
                        <div id="aircraft-type-other" class="invalid-feedback">{{$message}}
                        </div>
                        @enderror
                    </div>
                </div>
                <div class="col-4">
                    <div class="form-group">
                        <label for="date-other">Since</label>
                        <input type="date" class="form-control @error('otherdate') is-invalid @enderror" value="{{old('otherdate')}}" name="otherdate" id="date-other">
                        @error('otherdate')
                            <div id="date-other" class="invalid-feedback">{{$message}}
                            </div>
                        @enderror
                    </div>
                </div>
                <div class="col-4">
                    <div class="form-group">
                        <label for="last-flight-other">Last Flight</label>
                        <input type="text" class="form-control @error('otherflight') is-invalid @enderror" value="{{old('otherflight')}}" name="otherflight"
                            id="last-flight-other">
                        @error('otherflight')
                        <div id="last-flight-other" class="invalid-feedback">{{$message}}
                        </div>
                        @enderror
                    </div>
                </div>
                <div class="col-4">
                    <div class="form-group">
                        <label for="last-training-other">Last Training</label>
                        <input type="text" class="form-control @error('othertraining') is-invalid @enderror" value="{{old('othertraining')}}" name="othertraining" id="last-training-other">
                        @error('othertraining')
                            <div id="last-training-other" class="invalid-feedback">{{$message}}
                            </div>
                        @enderror
                    </div>
                </div>
            </div>
        </div>
        <hr>
        <h4 class="text-primary text-uppercase text-center">Declaration</h4>
        <hr>
        <div class="declaration">
            <div class="row">
                <div class="col-12">
                    <p>I, the undersigned, declare on my word of honor that:</p>
                    <ul style="list-style-type: square;">
                        <li>the information provided in this application form is true and complete
                        </li>
                        <li>I have not been subject to any sanctions, including the suspension,
                            limitation or revocation of any of hloding or held licenses, ratings or
                            certificates during the last 3 years</li>
                        <li>I have not been responsible for any aeronautical incident or
                            aeronautical accident during the last 3 years</li>
                    </ul>
                    <p>Applicant Name and Signature:</p>
                    <div class="form-group">
                        <input type="file" class="form-control @error('signature') is-invalid @enderror" value="{{old('signature')}}" name="signature" id="signature">
                        @error('signature')
                            <div id="signature" class="invalid-feedback">{{$message}}
                            </div>
                        @enderror
                    </div>
                </div>
            </div>
        </div>
        <div class="d-flex mb-2">
            <div class="ml-auto p-2">
                <button type="submit" class="btn btn-primary  mt-3">Submit</button>
            </div>
        </div>
        </table>
        </form>
    </div>
</div>
</div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
@endsection