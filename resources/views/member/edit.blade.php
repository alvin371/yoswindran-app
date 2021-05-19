@extends('layout.memberArea')
@section('title','MEMBER')
@section('container')
<!-- Begin Page Content -->
<div class="container">


    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Edit Data Member</h6>
        </div>
        <div class="card-body">
            <hr>
            <h4 class="text-primary text-uppercase">Personal Data</h4>
            <hr>
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <form class="form-horizontal" method="post" enctype="multipart/form-data"
                        action="/member/{{$member->id}}">
                        @method('patch')
                        @csrf
                        <div class="form-group">
                            <div class="col-6">
                                <label for="name">Name</label>
                                <input value="{{$member->name}} " type="text"
                                    class="form-control @error('name') is-invalid @enderror" id="name" name="name"
                                    placeholder="Full Name" required>
                                @error('name')
                                <div id="name" class="invalid-feedback">{{$message}}
                                </div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-6">
                                <label for="birth">Place and Date of Birth</label>
                                <input value="{{$member->placebirth}}" type="text"
                                    class="form-control @error('placebirth') is-invalid @enderror" name="placebirth"
                                    id="placebirth" placeholder="Example: Malang" required>
                                @error('placebirth')
                                <div id="placebirth" class="invalid-feedback">{{$message}}
                                </div>
                                @enderror
                                <input value="{{$member->datebirth}}" type="date"
                                    class="form-control @error('datebirth') is-invalid @enderror" name="datebirth"
                                    id="datebirth" required>
                                @error('datebirth')
                                <div id="datebirth" class="invalid-feedback">{{$message}}
                                </div>
                                @enderror

                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-6">
                                <label for="sex">Sex</label>
                                <select value="{{$member->sex}}" class="form-control @error('sex') is-invalid @enderror"
                                    id="sex" name="sex" required>
                                    <?php $value=$member->sex; ?>
                                    <option value="">Choose your own gender</option>
                                    <option value="Male" <?php if($value==='Male') echo 'selected="selected"';?>>Male</option>
                                    <option value="Female" <?php if($value==='Female') echo 'selected="selected"';?>>Female</option>
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
                                <input type="text" class="form-control @error('email') is-invalid @enderror"
                                    name="email" id="email" value="{{$member->email}}" required>
                                @error('email')
                                <div id="email" class="invalid-feedback">{{$message}}
                                </div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-6">
                                <label for="maritalstatus">Marital Status</label>
                                <input value="{{$member->maritalstatus}}" type="text"
                                    class="form-control @error('maritalstatus') is-invalid @enderror"
                                    name="maritalstatus" id="maritalstatus" required>
                                @error('maritalstatus')
                                <div id="maritalstatus" class="invalid-feedback">{{$message}}
                                </div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-6">
                                <label for="religion">Religion</label>
                                <select class="form-control @error('religion') is-invalid @enderror" id="religion"
                                    name="religion" required>
                                    <?php $value=$member->religion; ?>
                                    <option value="">Choose your own religion</option>
                                    <option value="Islam" <?php if($value==='Islam') echo 'selected="selected"';?>>Islam</option>
                                    <option value="Protestan" <?php if($value==='Protestan') echo 'selected="selected"';?>>Protestan</option>
                                    <option value="Katolik" <?php if($value==='Katolik') echo 'selected="selected"';?>>Katolik</option>
                                    <option value="Hindu" <?php if($value==='Hindu') echo 'selected="selected"';?>>Hindu</option>
                                    <option value="Budha" <?php if($value==='Budha') echo 'selected="selected"';?>>Budha</option>
                                    <option value="Konghucu" <?php if($value==='Konghucu') echo 'selected="selected"';?>>Konghucu</option>
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
                                <textarea class="form-control @error('address') is-invalid @enderror" id="address"
                                    name="address" rows="3" required>{{$member->address}}</textarea>
                                @error('address')
                                <div id="address" class="invalid-feedback">{{$message}}
                                </div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-6">
                                <label for="telephone">Telephone No.</label>
                                <input value="{{$member->telephone}}" type="text"
                                    class="form-control @error('telephone') is-invalid @enderror" name="telephone"
                                    id="telephone" required>
                                @error('telephone')
                                <div id="telephone" class="invalid-feedback">{{$message}}
                                </div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-6">
                                <label for="office">Position/Office</label>
                                <input value="{{$member->office}}" type="text"
                                    class="form-control @error('office') is-invalid @enderror" name="office" id="office"
                                    required>
                                @error('office')
                                <div id="office" class="invalid-feedback">{{$message}}
                                </div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-6">
                                <label for="traininglag">Training Language</label>
                                <input value="{{$member->traininglag}}" type="text"
                                    class="form-control @error('traininglag') is-invalid @enderror" name="traininglag"
                                    id="traininglag" required>
                                @error('traininglag')
                                <div id="traininglag" class="invalid-feedback">Training Language Form not filled yet
                                </div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-6">
                                <label for="education">Latest Education</label>
                                <input value="{{$member->education}}" type="text"
                                    class="form-control @error('education') is-invalid @enderror" name="education"
                                    id="education" required>
                                @error('education')
                                <div id="education" class="invalid-feedback">{{$message}}
                                </div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-6">
                                <label for="practical">Practical Training</label>
                                <input value="{{$member->practical}}" type="text"
                                    class="form-control @error('practical') is-invalid @enderror" name="practical"
                                    id="practical" required>
                                @error('practical')
                                <div id="practical" class="invalid-feedback">Practical Training Form not filled yet
                                </div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-6">
                                <label for="initial">Initial Skill Training</label>
                                <input value="{{$member->initial}}" type="text"
                                    class="form-control @error('initial') is-invalid @enderror" name="initial"
                                    id="initial" required>
                                @error('initial')
                                <div id="initial" class="invalid-feedback">Initial Training Form must be filled
                                </div>
                                @enderror
                            </div>
                        </div> 
                        <hr>
                        <h4 class="text-primary text-uppercase">Employment Data</h4>
                        <hr>
                        <div class="employment">
                            <div class="form-group">
                                <div class="col-12">
                                    <label for="eemployer">Employment Data</label>
                                    <textarea name="eemployer" id="eemployer" rows="5" placeholder=""
                                        class="form-control @error('eemployer') is-invalid @enderror"
                                        required>{{$member->eemployer}}</textarea>
                                    @error('eemployer')
                                    <div id="eemployer" class="invalid-feedback">Employment Data Form must be filled
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
                                    <textarea name="educationdata" id="educationdata" rows="5" placeholder=""
                                        class="form-control @error('educationdata') is-invalid @enderror"
                                        required>{{$member->educationdata}}</textarea>
                                    @error('educationdata')
                                    <div id="educationdata" class="invalid-feedback">{{$message}}
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
                                    <label for="address">Aviation Training</label>
                                    <textarea name="avitraining" id="address" rows="5" placeholder=""
                                        class="form-control @error('avitraining') is-invalid @enderror"
                                        required>{{$member->avitraining}}</textarea>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <h4 class="text-primary text-uppercase">Other Training</h4>
                        <hr>
                        <div class="other-training">
                            <div class="form-group">
                                <div class="col-12">
                                    <label for="address">Other Training</label>
                                    <textarea name="othertrainings" id="address" rows="5" placeholder=""
                                        class="form-control @error('othertrainings') is-invalid @enderror"
                                        required>{{$member->othertrainings}}</textarea>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <h4 class="text-primary text-uppercase">Diploma/Licenses Held</h4>
                        <hr>
                        <div class="diploma">
                            <div class="form-group">
                                <div class="col-12">
                                    <label for="address">Diploma/Licenses Held</label>
                                    <textarea name="diploma" id="address" rows="5" placeholder=""
                                        class="form-control @error('diploma') is-invalid @enderror"
                                        required>{{$member->diploma}}</textarea>
                                </div>
                            </div>
                        </div>
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
<script src="{{asset('/css/ckeditor/ckeditor.js')}}"></script>
<script>
    CKEDITOR.replace('eemployer');
    CKEDITOR.replace('educationdata');
    CKEDITOR.replace('avitraining');
    CKEDITOR.replace('othertraining');
    CKEDITOR.replace('diploma');

</script>
</body>

</html>
@endsection
