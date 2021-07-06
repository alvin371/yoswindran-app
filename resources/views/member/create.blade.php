@extends('layout/memberArea')
@section('title', 'MEMBER')
@section('container')
<!-- Begin Page Content -->
<div class="container">


    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Add Member</h6>
        </div>
        <div class="card-body">
            <div class="btn btn-primary"><a href="{{url('/member')}}" style="text-decoration:none;color:white;">Back</a></div>
            <hr>
            <h4 class="text-primary text-uppercase">Personal Data</h4>
            <hr>
            <form method="post" enctype="multipart/form-data" action="/member">
                @csrf
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <p style="font-size:16px; font-weight:100;"><em>*Note</em> You can add ("-")" for uncertain data. Please fill in all the forms provided</p>
                        <div class="form-group">
                            <div class="col-6">
                                <label for="name">Name</label>
                                <input type="text" class="form-control @error('name') is-invalid @enderror" name="name"
                                    id="name" placeholder="Full Name" value="{{old('name')}}" required>
                                @error('name')
                                <div id="name" class="invalid-feedback">{{$message}}
                                </div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-6">
                                <label for="member_id">Member ID</label>
                                <input type="text" class="form-control @error('member_id') is-invalid @enderror" name="member_id"
                                    id="member_id" value="{{old('member_id')}}" required>
                                @error('member_id')
                                <div id="member_id" class="invalid-feedback">{{$message}}
                                </div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-6">
                                <label for="birth">Place and Date of Birth</label>
                                <input type="text" class="form-control  @error('placebirth') is-invalid @enderror mb-3"
                                    id="placebirth" placeholder="Example: Malang" name="placebirth"
                                    value="{{old('placebirth')}}" required>
                                @error('placebirth')
                                <div id="placebirth" class="invalid-feedback">{{$message}}
                                </div>
                                @enderror
                                <input type="date" class="form-control  @error('datebirth') is-invalid @enderror"
                                    name="datebirth" id="datebirth" value="{{old('datebirth')}}" required>
                                @error('datebirth')
                                <div id="datebirth" class="invalid-feedback">{{$message}}
                                </div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-6">
                                <label for="sex">Sex</label>
                                <select class="form-control  @error('sex') is-invalid @enderror" id="sex" name="sex">
                                    <option value="">Choose your own gender</option>
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                </select>
                                @error('sex')
                                <div id="sex" class="invalid-feedback">{{$message}}
                                </div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-6">
                                <label for="email">Email</label>
                                <input type="text" class="form-control  @error('email') is-invalid @enderror"
                                    value="{{old('email')}}" name="email" id="email" required>
                                @error('email')
                                <div id="email" class="invalid-feedback">{{$message}}
                                </div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-6">
                                <label for="maritalstatus">Marital Status</label>
                                <input type="text" class="form-control  @error('maritalstatus') is-invalid @enderror"
                                    value="{{old('maritalstatus')}}" name="maritalstatus" id="maritalstatus" required>
                                @error('maritalstatus')
                                <div id="maritalstatus" class="invalid-feedback">{{$message}}
                                </div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-6">
                                <label for="religion">Religion</label>
                                <select class="form-control  @error('religion') is-invalid @enderror" id="religion"
                                    name="religion">
                                    <option value="">Choose your own religion</option>
                                    <option value="Islam">Islam</option>
                                    <option value="Protestan" >Protestan</option>
                                    <option value="Katolik" >Katolik</option>
                                    <option value="Hindu" >Hindu</option>
                                    <option value="Budha">Budha</option>
                                    <option value="Konghucu">Konghucu</option>
                                </select>
                                @error('religion')
                                <div id="religion" class="invalid-feedback">{{$message}}
                                </div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-6">
                                <label for="address">Home Address</label>
                                <textarea class="form-control  @error('address') is-invalid @enderror" name="address"
                                    id="address" rows="3" required>{{old('address')}}</textarea>
                                @error('address')
                                <div id="address" class="invalid-feedback">{{$message}}
                                </div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-6">
                                <label for="telephone">Telephone No.</label>
                                <input type="text" class="form-control  @error('telephone') is-invalid @enderror"
                                    value="{{old('telephone')}}" name="telephone" id="telephone" required>
                                @error('telephone')
                                <div id="telephone" class="invalid-feedback">{{$message}}
                                </div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-6">
                                <label for="office">Position/Office</label>
                                <input type="text" class="form-control  @error('office') is-invalid @enderror"
                                    value="{{old('office')}}" name="office" id="office" required>
                                @error('office')
                                <div id="office" class="invalid-feedback">{{$message}}
                                </div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-6">
                                <label for="training-lag">Training Language</label>
                                <input type="text" class="form-control  @error('traininglag') is-invalid @enderror"
                                    value="{{old('traininglag')}}" name="traininglag" id="training-lag" required>
                                @error('traininglag')
                                <div id="traininglag" class="invalid-feedback">{{$message}}
                                </div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-6">
                                <label for="education">Latest Education</label>
                                <input type="text" class="form-control  @error('education') is-invalid @enderror"
                                    value="{{old('education')}}" name="education" id="education" required>
                                @error('education')
                                <div id="education" class="invalid-feedback">{{$message}}
                                </div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-6">
                                <label for="practical">Practical Training</label>
                                <input type="text" class="form-control  @error('practical') is-invalid @enderror"
                                    value="{{old('practical')}}" name="practical" id="practical" required>
                                @error('practical')
                                <div id="practical" class="invalid-feedback">{{$message}}
                                </div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-6">
                                <label for="initial">Initial Skill Training</label>
                                <input type="text" class="form-control  @error('initial') is-invalid @enderror"
                                    value="{{old('initial')}}" name="initial" id="initial" required>
                                @error('initial')
                                <div id="initial" class="invalid-feedback">{{$message}}
                                </div>
                                @enderror
                            </div>
                        </div>
                </div>
                <hr>
                <h4 class="text-primary text-uppercase">Employment Data</h4>
                <hr>
                <div class="employment">
                    <div class="form-group">
                        <div class="col-12">
                            <label for="eemployer">Employment Data</label>
                            <textarea name="eemployer" class="form-control @error('eemployer') is-invalid @enderror"
                                id="eemployer" rows="5" placeholder="" required>{{old('eemployer')}}</textarea>
                            @error('eemployer')
                            <div id="eemployer" class="invalid-feedback">
                                {{$message}}
                            </div>
                            @enderror
                        </div>
                    </div>
                </div>
                <hr>
                <h4 class="text-primary text-uppercase">Education</h4>
                <hr>
                <div class="education">
                    <div class="form-group">
                        <div class="col-12">
                            <label for="educationdata">Education Data</label>
                            <textarea name="educationdata"
                                class="form-control @error('educationdata') is-invalid @enderror" id="educationdata"
                                rows="5" placeholder="" required>{{old('educationdata')}}</textarea>
                            @error('educationdata')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                            @enderror
                        </div>
                    </div>
                </div>
                <hr>
                <h4 class="text-primary text-uppercase">Aviation Training</h4>
                <hr>
                <div class="aviation-training">
                    <div class="form-group">
                        <div class="col-12">
                            <label for="avitraining">Aviation Training</label>
                            <textarea name="avitraining" class="form-control @error('avitraining') is-invalid @enderror"
                                id="avitraining" rows="5" placeholder="" required>{{old('avitraining')}}</textarea>
                            @error('avitraining')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                            @enderror
                        </div>
                    </div>
                </div>
                <hr>
                <h4 class="text-primary text-uppercase">Other Training</h4>
                <hr>
                <div class="other-training">
                    <div class="form-group">
                        <div class="col-12">
                            <label for="othertraining">Other Training</label>
                            <textarea name="othertrainings"
                                class="form-control @error('othertrainings') is-invalid @enderror" id="othertrainings"
                                rows="5" placeholder="" required>{{old('othertrainings')}}</textarea>
                            @error('othertrainings')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                            @enderror
                        </div>
                    </div>
                </div>
                <hr>
                <h4 class="text-primary text-uppercase">Diploma/Licenses Held</h4>
                <hr>
                <div class="diploma">
                    <div class="form-group">
                        <div class="col-12">
                            <label for="diploma">Diploma/Licenses Held</label>
                            <textarea name="diploma" class="form-control @error('othertraining') is-invalid @enderror"
                                id="diploma" rows="5" placeholder="" required>{{old('diploma')}}</textarea>
                            @error('diploma')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                            @enderror
                        </div>
                    </div>
                </div>
                <hr>
                <div class="d-flex mb-2">
                    <div class="ml-auto p-2">
                        <button type="submit" class="btn btn-primary  mt-3">Submit</button>
                    </div>
                </div>
            </form>
            </table>
        </div>
    </div>
</div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
<!-- Footer -->
<footer class="sticky-footer bg-white">
    <div class="container my-auto">
        <div class="copyright text-center my-auto">
            <span>Copyright &copy; Alvin Dimas 2021</span>
        </div>
    </div>
</footer>
<!-- End of Footer -->

</div>
<!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>

<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                <a class="btn btn-primary" href="{{url('/logout')}}">Logout</a>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="delete" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Confirm</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Are you sure want to delete this item?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-warning    " data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-danger">Delete</button>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap core JavaScript-->
<script src="{{asset('css/Admin/vendor/jquery/jquery.min.js')}}"></script>
<script src="{{asset('css/Admin/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

<!-- Core plugin JavaScript-->
<script src="{{asset('css/Admin/vendor/jquery-easing/jquery.easing.min.js')}}"></script>

<!-- Custom scripts for all pages-->
<script src="{{asset('css/Admin/js/sb-admin-2.min.js')}}"></script>

<!-- Page level plugins -->
<script src="{{asset('css/Admin/vendor/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('css/Admin/vendor/datatables/dataTables.bootstrap4.min.js')}}"></script>

<!-- Page level custom scripts -->
<script src="{{asset('css/Admin/js/demo/datatables-demo.js')}}"></script>
<script>
    $(".reveal").on('click', function () {
        var $pwd = $(".pwd");
        if ($pwd.attr('type') === 'password') {
            $pwd.attr('type', 'text');
        } else {
            $pwd.attr('type', 'password');
        }
    });

</script>
<script src="{{asset('/css/ckeditor/ckeditor.js')}}"></script>
<script src="{{asset('/js/dropzone/dist/dropzone.js')}}"></script>

<script>
    CKEDITOR.replace('eemployer');
    CKEDITOR.replace('educationdata');
    CKEDITOR.replace('avitrainings');
    CKEDITOR.replace('othertraining');
    CKEDITOR.replace('diploma');

</script>
<script>
    $('.custom-file-input').on('change', function () {
        let fileName = $(this).val().split('\\').pop();
        $(this).next('.custom-file-label').addClass("selected").html(fileName);
    });

</script>
@include('sweetalert::alert')
</body>

</html>
@endsection
