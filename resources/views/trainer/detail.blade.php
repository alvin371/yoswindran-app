@extends('layout/memberArea')
@section('title', 'TRAINER')
@section('container')

                <!-- Begin Page Content -->
                <div class="container">


                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h2 class="m-0 font-weight-bold text-center text-primary">SFI APPLICATION FORM</h2>
                        </div>
                        <div class="card-body">
                            <div class="btn btn-primary"><a href="{{url('/trainer')}}" style="text-decoration:none;color:white;">Back</a></div>
                            <hr>
                            <h5 class="text-primary text-center">Personal Data</h5>
                            <hr>
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead class="thead-light">
                                        <tr>
                                            <th>Family Name</th>
                                            <td>{{$trainer->familyname}}</td>
                                            <th>First Name</th>
                                            <td>{{$trainer->name}}</td>
                                        </tr>
                                        <tr>
                                            <th>Nationality</th>
                                            <td>{{$trainer->nationality}}</td>
                                            <th>Phone Number</th>
                                            <td>{{$trainer->phone}}</td>
                                        </tr>
                                        <tr>
                                            <th>Email</th>
                                            <td>{{$trainer->email}}</td>
                                            <th>Date of Birth</th>
                                            <td>{{$trainer->datebirth}}</td>
                                        </tr>
                                        <tr>
                                            <th>ID</th>
                                            <td>{{$trainer->idtrainer}}</td>
                                            <th>LOA</th>
                                            <td>{{$trainer->loa}}</td>
                                        </tr>
                                    </thead>
                            </div>
                            <table class="table table-bordered">
                                <h3 class="text-primary text-center">Licence Details</h3>
                                <hr>
                                <thead class="thead-light">
                                    <tr>
                                        <th colspan="3">License</th>
                                        <th colspan="3">Number</th>
                                        <th colspan="3">Date of Issue</th>
                                        <th colspan="3">Issuing Authority</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td colspan="3">{{$trainer->license}}</td>
                                        <td colspan="3">{{$trainer->licensenumber}}</td>
                                        <td colspan="3">{{$trainer->licensedate}}</td>
                                        <td colspan="3">{{$trainer->licenseauth}}</td>
                                    </tr>
                                    <tr>
                                        <td colspan="3"></td>
                                        <td colspan="3"></td>
                                        <td colspan="3"></td>
                                        <td colspan="3"></td>
                                    </tr>
                                </tbody>
                                <thead class="thead-light">
                                    <tr>
                                        <th colspan="6" class="text-center">Type Rating(Current or Expired)</th>
                                        <th colspan="6">Type Rating Instructor(Current or Expired)</th>
                                    </tr>
                                    <tr>
                                        <th colspan="3">Aircraft Type</th>
                                        <th colspan="3">Validity</th>
                                        <th colspan="3">Date of Last Flight</th>
                                        <th colspan="3">Validity</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td colspan="3">{{$trainer->rating1type}}</td>
                                        <td colspan="3">{{$trainer->rating1validity}}</td>
                                        <td colspan="3">{{$trainer->rating1date}}</td>
                                        <td colspan="3">{{$trainer->rating1rating}}</td>
                                    </tr>
                                    <tr>
                                        <td colspan="3"></td>
                                        <td colspan="3"></td>
                                        <td colspan="3"></td>
                                        <td colspan="3"></td>
                                    </tr>
                                </tbody>
                                <thead class="thead-light">
                                    <tr>
                                        <th colspan="3">Other Large Aircraft</th>
                                        <th colspan="3">Validity</th>
                                        <th colspan="3">Date of Last Flight</th>
                                        <th colspan="3">Validity</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td colspan="3">{{$trainer->rating2aircraft}}</td>
                                        <td colspan="3">{{$trainer->rating2validity}}</td>
                                        <td colspan="3">{{$trainer->rating2date}}</td>
                                        <td colspan="3">{{$trainer->rating2rating}}</td>
                                    </tr>
                                    <tr>
                                        <td colspan="3"></td>
                                        <td colspan="3"></td>
                                        <td colspan="3"></td>
                                        <td colspan="3"></td>
                                    </tr>
                                </tbody>
                                <thead class="thead-light">
                                    <tr>
                                        <th colspan="6" rowspan="6" class="text-center align-middle">Other
                                            Licences/Ratings/Certificates</th>
                                        <th colspan="4">Licences/Rating/Certificates</th>
                                        <th colspan="2">Validity</th>
                                    </tr>
                                    <tr>
                                        <td colspan="4">{{$trainer->otherlicense}}</td>
                                        <td colspan="2">{{$trainer->othervalidity}}</td>
                                    </tr>
                                    <tr>
                                        <td colspan="4"></td>
                                        <td colspan="2"></td>
                                    </tr>
                                    <tr>
                                        <td colspan="4"></td>
                                        <td colspan="2"></td>
                                    </tr>
                                    <tr>
                                        <td colspan="4"></td>
                                        <td colspan="2"></td>
                                    </tr>
                                </thead>
                                <thead class="thead-light">
                                    <tr>
                                        <th rowspan="5" class="text-center align-middle">English Level</th>
                                        <th colspan="4">Read</th>
                                        <th colspan="4">Write</th>
                                        <th colspan="4">Speak</th>
                                    </tr>
                                    <tr>
                                        <td colspan="4">{{$trainer->readlevel}}</td>
                                        <td colspan="4">{{$trainer->writelevel}}</td>
                                        <td colspan="4">{{$trainer->speaklevel}}</td>
                                    </tr>
                                    <tr>
                                        <td colspan="4"></td>
                                        <td colspan="4"></td>
                                        <td colspan="4"></td>
                                    </tr>
                                </thead>
                                <thead class="thead-light">
                                    <tr>
                                        <th colspan="12" class="text-center text-uppercase">in-flight aircraft
                                            operational experience
                                            <sup>1</sup></th>
                                    </tr>
                                    <tr>
                                        <th colspan="2">Type of Aircraft</th>
                                        <th colspan="2">Date From</th>
                                        <th colspan="2">Date To</th>
                                        <th colspan="2">Pilot-in-Command</th>
                                        <th colspan="2">First Officer</th>
                                        <th colspan="2">Experience as Captain conducting LIFUS <sup>2</sup></th>
                                    </tr>
                                    <tr>
                                        <td colspan="2">{{$trainer->exptype}}</td>
                                        <td colspan="2">{{$trainer->expdatefrom}}</td>
                                        <td colspan="2">{{$trainer->expdateend}}</td>
                                        <td colspan="2">{{$trainer->expcommand}}</td>
                                        <td colspan="2">{{$trainer->expofficer}}</td>
                                        <td colspan="2">{{$trainer->expcaptain}}</td>
                                    </tr>
                                    <tr>
                                        <td colspan="2"></td>
                                        <td colspan="2"></td>
                                        <td colspan="2"></td>
                                        <td colspan="2"></td>
                                        <td colspan="2"></td>
                                        <td colspan="2"></td>
                                    </tr>
                                    <tr>
                                        <td colspan="2"></td>
                                        <td colspan="2"></td>
                                        <td colspan="2"></td>
                                        <td colspan="2"></td>
                                        <td colspan="2"></td>
                                        <td colspan="2"></td>
                                    </tr>
                                </thead>
                                <thead class="thead-light">
                                    <tr>
                                        <th colspan="12" class="text-center text-uppercase">Flight Training Experience
                                            <sup>1</sup></th>
                                    </tr>
                                    <tr>
                                        <th colspan="2" rowspan="2" class="text-center align-middle">Type of Aircraft
                                        </th>
                                        <th colspan="4" class="text-center">FFS</th>
                                        <th colspan="6" class="text-center">Aircraft(Base Training)</th>
                                    </tr>
                                    <tr>
                                        <th colspan="2">Total</th>
                                        <th colspan="2">Last 12 Months</th>
                                        <th colspan="6">Total</th>
                                    </tr>
                                    <tr>
                                        <td colspan="2">{{$trainer->texptype}}</td>
                                        <td colspan="2">{{$trainer->texptotal}}</td>
                                        <td colspan="2">{{$trainer->texplast12}}</td>
                                        <td colspan="6">{{$trainer->texpaircraft}}</td>
                                    </tr>
                                    <tr>
                                        <td colspan="2"></td>
                                        <td colspan="2"></td>
                                        <td colspan="2"></td>
                                        <td colspan="6"></td>
                                    </tr>
                                    <tr>
                                        <td colspan="2"></td>
                                        <td colspan="2"></td>
                                        <td colspan="2"></td>
                                        <td colspan="6"></td>
                                    </tr>
                                </thead>
                                <thead class="thead-light">
                                    <tr>
                                        <th colspan="12" class="text-center text-uppercase">Other Operational Detail
                                        </th>
                                    </tr>
                                    <tr>
                                        <th colspan="3">Type of Aircraft</th>
                                        <th colspan="3">Since
                                            MM/YYYY
                                        </th>
                                        <th colspan="3">Last Flight</th>
                                        <th colspan="3">Last Training</th>
                                    </tr>
                                    <tr>
                                        <td colspan="3">{{$trainer->othertype}}</td>
                                        <td colspan="3">{{$trainer->otherdate}}</td>
                                        <td colspan="3">{{$trainer->otherflight}}</td>
                                        <td colspan="3">{{$trainer->othertraining}}</td>
                                    </tr>
                                    <tr>
                                        <td colspan="3"></td>
                                        <td colspan="3"></td>
                                        <td colspan="3"></td>
                                        <td colspan="3"></td>
                                    </tr>
                                    <tr>
                                        <td colspan="3"></td>
                                        <td colspan="3"></td>
                                        <td colspan="3"></td>
                                        <td colspan="3"></td>
                                    </tr>
                                </thead>
                                <thead class="thead-light">
                                    <tr>
                                        <td colspan="12" class="text-center" rowspan="4">
                                            <img src="{{asset('storage/'.$trainer->signature)}}" alt="">
                                        </td>
                                    </tr>
                                </thead>
                            </table>
                            </table>
                        </div>
                    </div>
                </div>

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- End of Main Content -->
@endsection