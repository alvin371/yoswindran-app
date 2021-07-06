@extends('layout/memberArea')
@section('title', 'ASESOR')
@section('container')
<!-- Begin Page Content -->
<div class="container">


<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Edit Data Asesor</h6>
    </div>
    <div class="card-body">
        <div class="btn btn-primary"><a href="{{url('/asesor')}}" style="text-decoration:none;color:white;">Back</a></div>
        <hr>
        <h4 class="text-primary text-uppercase">Personal Data</h4>
        <hr>
        <form class="form-horizontal" method="post" enctype="multipart/form-data" action="/asesor/{{$asesor->id}}">
        @method('patch')
        @csrf
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <div class="form-group">
                        <div class="col-6">
                            <label for="name">Name</label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror" value="{{$asesor->name}}" name="name" id="name"
                                placeholder="Full Name" required>
                            @error('name')
                                <div id="name" class="invalid-feedback">{{$message}}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-6">
                            <label for="placebirth">Place and Date of Birth</label>
                            <input type="text" class="form-control mb-3 @error('placebirth') is-invalid @enderror" name="placebirth" value="{{$asesor->placebirth}}" id="placebirth"
                                placeholder="Example: Malang" required>
                            @error('placebirth')
                                <div id="placebirth" class="invalid-feedback">{{$message}}
                                </div>
                            @enderror
                            <input type="date" class="form-control @error('datebirth') is-invalid @enderror" name="datebirth" value="{{$asesor->datebirth}}" id="datebirth" required>
                            @error('datebirth')
                                <div id="datebirth" class="invalid-feedback">{{$message}}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-6">
                            <label for="sex">Sex</label>
                            <select class="form-control @error('sex') is-invalid @enderror" id="sex" value="{{$asesor->sex}}" name="sex">
                                <option value="">Choose your own gender</option>
                                <?php $value=$asesor->sex; ?>
                                <option value="Male"  <?php if($value==='Male') echo 'selected="selected"';?>>Male</option>
                                <option value="Female"  <?php if($value==='Female') echo 'selected="selected"';?>>Female</option>
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
                            <input type="text" class="form-control @error('email') is-invalid @enderror" value="{{$asesor->email}}" name="email" id="email" required>
                            @error('email')
                                <div id="email" class="invalid-feedback">{{$message}}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-6">
                            <label for="maritalstatus">Marital Status</label>
                            <input type="text" class="form-control @error('maritalstatus') is-invalid @enderror" value="{{$asesor->maritalstatus}}" name="maritalstatus" id="maritalstatus" required>
                            @error('maritalstatus')
                                <div id="maritalstatus" class="invalid-feedback">{{$message}}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-6">
                            <label for="religion">Religion</label>
                            <select class="form-control  @error('religion') is-invalid @enderror" id="religion" name="religion">
                            <?php $value=$asesor->religion; ?>
                                <option value="">Choose your own religion</option>
                                <option value="Islam"  <?php if($value==='Islam') echo 'selected="selected"';?>>Islam</option>
                                <option value="Protestan" <?php if($value==='Protestan') echo 'selected="selected"';?>>Protestan</option>
                                <option value="Katolik"  <?php if($value==='Katolik') echo 'selected="selected"';?>>Katolik</option>
                                <option value="Hindu"  <?php if($value==='Hindu') echo 'selected="selected"';?>>Hindu</option>
                                <option value="Budha"  <?php if($value==='Budha') echo 'selected="selected"';?>>Budha</option>
                                <option value="Konghucu"  <?php if($value==='Konghucu') echo 'selected="selected"';?>>Konghucu</option>
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
                            <textarea class="form-control @error('address') is-invalid @enderror" value="" name="address" id="address" rows="3">{{$asesor->address}}</textarea>
                            @error('address')
                                <div id="address" class="invalid-feedback">{{$message}}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-6">
                            <label for="telephone">Telephone No.</label>
                            <input type="text" class="form-control @error('telephone') is-invalid @enderror" value="{{$asesor->telephone}}" name="telephone" id="telephone" >
                            @error('telephone')
                                <div id="telephone" class="invalid-feedback">{{$message}}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-6">
                            <label for="office">Position/Office</label>
                            <input type="text" class="form-control @error('office') is-invalid @enderror" value="{{$asesor->office}}" name="office" id="office" >
                            @error('office')
                                <div id="office" class="invalid-feedback">{{$message}}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-6">
                            <label for="lspregistration">LSP Registration</label>
                            <input type="text" class="form-control @error('lspregistration') is-invalid @enderror" value="{{$asesor->lspregistration}}" name="lspregistration"
                                id="lspregistration" >
                            @error('lspregistration')
                                <div id="lspregistration" class="invalid-feedback">{{$message}}
                                </div>
                            @enderror   
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-6">
                            <label for="education">Education</label>
                            <input type="text" class="form-control @error('education') is-invalid @enderror" value="{{$asesor->education}}" name="education" id="education" >
                            @error('education')
                                <div id="education" class="invalid-feedback">{{$message}}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-6">
                            <label for="position">Master/Lead/Asesor/Training/Recurrent</label>
                            <input type="text" class="form-control  @error('position') is-invalid @enderror" value="{{$asesor->position}}" name="position" id="position" >
                            @error('position')
                                <div id="position" class="invalid-feedback">{{$message}}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-6">
                            <label for="initial">Initial Asesor Training</label>
                            <input type="text" class="form-control @error('initial') is-invalid @enderror" value="{{$asesor->initial}}" name="initial" id="initial" >
                            @error('initial')
                                <div id="initial" class="invalid-feedback">{{$message}}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-6">
                            <label for="met">MET</label>
                            <input type="text" class="form-control @error('met') is-invalid @enderror" value="{{$asesor->met}}" name="met" id="met" >
                            @error('met')
                                <div id="met" class="invalid-feedback">{{$message}}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-6">
                            <label for="sertifikat">Sertifikat</label>
                            <input type="text" class="form-control @error('sertifikat') is-invalid @enderror" value="{{$asesor->sertifikat}}" name="sertifikat" id="sertifikat" >
                            @error('sertifikat')
                                <div id="sertifikat" class="invalid-feedback">{{$message}}
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
                    <textarea name="eemployer" class="form-control @error('eemployer') is-invalid @enderror"  id="eemployer" rows="5" placeholder="" ></textarea>
                    @error('eemployer')
                            <div id="eemployer" class="invalid-feedback">{{$message}}
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
                    <textarea name="educationdata" id="educationdata" class="form-control @error('educationdata') is-invalid @enderror" rows="5" placeholder="" ></textarea>
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
                    <textarea name="avitraining" class="form-control @error('avitraining') is-invalid @enderror"  id="avitraining" rows="5" placeholder=""></textarea>
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
                    <textarea name="othertraining" class="form-control @error('othertraining') is-invalid @enderror"  id="othertraining" rows="5" placeholder=""></textarea>
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
        <div class="diploma">
        <div class="form-group">
                <div class="col-12">
                    <label for="licenseheld">License Data</label>
                    <textarea name="licenseheld" class="form-control @error('licenseheld') is-invalid @enderror" id="licenseheld" rows="5" placeholder=""></textarea>
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
                    <textarea name="teachingaspeck" class="form-control @error('teachingaspeck') is-invalid @enderror" id="teachingaspeck" rows="5" placeholder="" ></textarea>
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
            <input type="text" class="form-control  @error('conclusion') is-invalid @enderror" name="conclusion"  id="conclusion">
            @error('conclusion')
                <div id="conclusion" class="invalid-feedback">{{$message}}
                </div>
            @enderror
        <hr>
        <h4 class="text-primary text-uppercase">Recommendation</h4>
        <hr>
            <input type="text" class="form-control  @error('recomendation') is-invalid @enderror" name="recommendation"  id="recommendation">
            @error('recommendation')
                <div id="recommendation" class="invalid-feedback">{{$message}}
                </div>
            @enderror
        <hr>
        <h4 class="text-primary text-uppercase">Master Asesor</h4>
        <hr>
            <input type="text" class="form-control  @error('masterasesor') is-invalid @enderror" name="masterasesor"  id="masterasesor">
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
            $(".reveal").on('click',function() {
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
</body>

</html>
@endsection