@extends('layout/memberArea')
@section('title', 'ASESOR')
@section('container')
<!-- Begin Page Content -->
<div class="container">


    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Add Asesor</h6>
        </div>
        <div class="card-body">
            <hr>
            <h4 class="text-primary text-uppercase">Personal Data</h4>
            <hr>
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <form method="post" enctype="multipart/form-data" action="/asesor">
                        @csrf
                        <div class="form-group">
                            <div class="col-6">
                                <label for="name">Name</label>
                                <input type="text" class="form-control @error('name') is-invalid @enderror" id="name"
                                    name="name" placeholder="Full Name" value="{{old('name')}}" required>
                                @error('name')
                                <div id="name" class="invalid-feedback">{{$message}}
                                </div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-6">
                                <label for="placebirth">Place and Date of Birth</label>
                                <input type="text" class="form-control @error('placebirth') is-invalid @enderror mb-3"
                                    name="placebirth" id="placebirth" placeholder="Example: Malang"
                                    value="{{old('placebirth')}}" required>
                                @error('placebirth')
                                <div id="placebirth" class="invalid-feedback">{{$message}}
                                </div>
                                @enderror
                                <input type="date" class="form-control" name="datebirth" id="datebirth"
                                    value="{{old('datebirth')}}" required>
                                @error('datebirth')
                                <div id="datebirth" class="invalid-feedback">{{$message}}
                                </div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-6">
                                <label for="sex">Sex</label>
                                <select class="form-control @error('sex') is-invalid @enderror" id="sex" name="sex"
                                    value="{{old('sex')}}" required>
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
                            <div class="col-6">
                                <label for="email">Email</label>
                                <input type="text" class="form-control @error('email') is-invalid @enderror"
                                    name="email" id="email" value="{{old('email')}}" required>
                                @error('email')
                                <div id="email" class="invalid-feedback">{{$message}}
                                </div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-6">
                                <label for="maritalstatus">Marital Status</label>
                                <input type="text" class="form-control @error('maritalstatus') is-invalid @enderror"
                                    name="maritalstatus" id="maritalstatus" value="{{old('maritalstatus')}}" required>
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
                                    name="religion" value="{{old('relgion')}}" required>
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
                                    name="address" rows="3" required>{{old('address')}}</textarea>
                                @error('address')
                                <div id="address" class="invalid-feedback">{{$message}}
                                </div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-6">
                                <label for="telephone">Telephone No.</label>
                                <input type="text" class="form-control @error('telephone') is-invalid @enderror"
                                    name="telephone" id="telephone" value="{{old('telephone')}}" required>
                                @error('telephone')
                                <div id="telephone" class="invalid-feedback">{{$message}}
                                </div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-6">
                                <label for="office">Position/Office</label>
                                <input type="text" class="form-control @error('office') is-invalid @enderror"
                                    name="office" id="office" value="{{old('office')}}" required>
                                @error('office')
                                <div id="office" class="invalid-feedback">{{$message}}
                                </div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-6">
                                <label for="lspregistration">LSP Registration</label>
                                <input type="text" class="form-control @error('lspregistration') is-invalid @enderror"
                                    name="lspregistration" id="lspregistration" value="{{old('lspregistration')}}"
                                    required>
                                @error('lspregistration')
                                <div id="lspregistration" class="invalid-feedback">{{$message}}
                                </div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-6">
                                <label for="education">Education</label>
                                <input type="text" class="form-control @error('education') is-invalid @enderror"
                                    name="education" id="education" value="{{old('education')}}" required>
                                @error('education')
                                <div id="education" class="invalid-feedback">{{$message}}
                                </div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-6">
                                <label for="position">Master/Lead/Asesor/Training/Recurrent</label>
                                <input type="text" class="form-control @error('position') is-invalid @enderror"
                                    name="position" id="position" value="{{old('position')}}" required>
                                @error('position')
                                <div id="position" class="invalid-feedback">{{$message}}
                                </div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-6">
                                <label for="initial">Initial Asesor Training</label>
                                <input type="text" class="form-control @error('initial') is-invalid @enderror"
                                    name="initial" id="initial" value="{{old('initial')}}" required>
                                @error('initial')
                                <div id="initial" class="invalid-feedback">{{$message}}
                                </div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-6">
                                <label for="met">MET</label>
                                <input type="text" class="form-control @error('met') is-invalid @enderror"
                                    name="met" id="met" value="{{old('met')}}" required>
                                @error('met')
                                <div id="met" class="invalid-feedback">{{$message}}
                                </div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-6">
                                <label for="sertifikat">Sertifikat</label>
                                <input type="text" class="form-control @error('sertifikat') is-invalid @enderror"
                                    name="sertifikat" id="sertifikat" value="{{old('sertifikat')}}" required>
                                @error('sertifikat')
                                <div id="sertifikat" class="invalid-feedback">{{$message}}
                                </div>
                                @enderror
                            </div>
                        </div>
            </div>
            <!-- HEEERRRRRRRRRRRRRRREEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEE!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!111 -->
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
                        <div id="eemployer" class="invalid-feedback">{{$message}}
                        </div>
                        @enderror
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
                            <label for="avitraining">Aviation Training Data</label>
                            <textarea name="avitraining" class="form-control @error('avitraining') is-invalid @enderror"
                                id="avitraining" rows="5" placeholder="" required>{{old('avitraining')}}</textarea>
                            @error('avitraining')
                            <div id="avitraining" class="invalid-feedback">{{$message}}
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
                            <label for="othertraining">Other Training Data</label>
                            <textarea name="othertraining"
                                class="form-control @error('othertraining') is-invalid @enderror" id="othertraining"
                                rows="5" placeholder="" required>{{old('othertraining')}}</textarea>
                            @error('othertraining')
                            <div id="othertraining" class="invalid-feedback">{{$message}}
                            </div>
                            @enderror
                        </div>
                    </div>
                </div>
                <hr>
                <h4 class="text-primary text-uppercase">Licenses Held</h4>
                <hr>
                <div class="license">
                    <div class="form-group">
                        <div class="col-12">
                            <label for="licenseheld">License Data</label>
                            <textarea name="licenseheld" class="form-control @error('licenseheld') is-invalid @enderror"
                                id="licenseheld" rows="5" placeholder="" required>{{old('licenseheld')}}</textarea>
                            @error('licenseheld')
                            <div id="licenseheld" class="invalid-feedback">{{$message}}
                            </div>
                            @enderror
                        </div>
                    </div>
                </div>
                <hr>
                <h4 class="text-primary text-uppercase">TEACHING ASPECK</h4>
                <hr>
                <div class="teaching-aspect">
                    <div class="form-group">
                        <div class="col-12">
                            <label for="teachingaspeck">Teaching Aspeck Data</label>
                            <textarea name="teachingaspeck"
                                class="form-control @error('teachingaspeck') is-invalid @enderror" id="teachingaspeck"
                                rows="5" placeholder="" required>{{old('teachingaspeck')}}</textarea>
                            @error('teachingaspeck')
                            <div id="teachingaspeck" class="invalid-feedback">{{$message}}
                            </div>
                            @enderror
                        </div>
                    </div>
                </div>
                <hr>
                <h4 class="text-primary text-uppercase">Conclusion</h4>
                <hr>
                <input type="text" class="form-control @error('conclusion') is-invalid @enderror" name="conclusion"
                    id="conclusion" value="{{old('conclusion')}}" required>
                @error('conclusion')
                <div id="conclusion" class="invalid-feedback">{{$message}}
                </div>
                @enderror
                <hr>
                <h4 class="text-primary text-uppercase">Recommendation</h4>
                <hr>
                <input type="text" class="form-control @error('recommendation') is-invalid @enderror"
                    name="recommendation" id="recommendation" value="{{old('recommendation')}}" required>
                @error('recommendation')
                <div id="recommendation" class="invalid-feedback">{{$message}}
                </div>
                @enderror
                <hr>
                <h4 class="text-primary text-uppercase">Master Asesor</h4>
                <hr>
                <input type="text" class="form-control @error('masterasesor') is-invalid @enderror" name="masterasesor"
                    id="asesor-master" value="{{old('masterasesor')}}" required>
                @error('masterasesor')
                <div id="masterasesor" class="invalid-feedback">{{$message}}
                </div>
                @enderror
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
<script>
    CKEDITOR.replace('eemployer');
    CKEDITOR.replace('educationdata');
    CKEDITOR.replace('avitraining');
    CKEDITOR.replace('othertraining');
    CKEDITOR.replace('licenseheld');
    CKEDITOR.replace('teachingaspeck');

</script>
<script>
    $('.custom-file-input').on('change', function () {
        let fileName = $(this).val().split('\\').pop();
        $(this).next('.custom-file-label').addClass("selected").html(fileName);
    });

</script>
</body>

</html>
@endsection
