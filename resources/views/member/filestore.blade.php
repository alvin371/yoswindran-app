@extends('layout/memberArea')
@section('title', 'MEMBER')
@section('container')
<!-- Begin Page Content -->
<div class="container">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Member File</h6>
        </div>

        <div class="card-body">
            <h4 class="text-primary text-uppercase">Certificates Form Upload</h4>
            <hr>
            <div class="table-responsive">
            <form method="post" enctype="multipart/form-data" action="/file/{{$m->member_id}}/uploadMember">
            @method('patch')
            @csrf
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <div class="upload-body">
                    <input type="hidden" value="{{$m->member_id}}" name="member_id">
                        <div class="form-group">
                            <h6 class="d-block ml-3">Upload Your CV Here!</h6>
                            <div class="col-12">
                                <div class="input-group mb-3">
                                    <div class="custom-file">
                                        <input type="file"
                                            class="custom-file-input  @error('employment') is-invalid @enderror"
                                            id="employment" aria-labelledby  name="employment"
                                            aria-describedby="employment" aria-label>
                                        <label class="custom-file-label visually-hidden" for="employment"
                                           >Choose File</label>
                                        @error('employment')
                                        <div id="employment" class="invalid-feedback">{{$message}}
                                        </div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="form-group">
                            <h6 class="d-block ml-3">Upload Your Education Certificates Here!</h6>
                            <div class="col-12">
                                <div class="input-group mb-3">
                                    <div class="custom-file">
                                        <input type="file"
                                            class="custom-file-input  @error('educationcertificates') is-invalid @enderror"
                                            value="{{old('educationcertificates')}}" name="educationcertificates"
                                            id="educationcertificates" aria-describedby="inputGroupFileAddon01"
                                            >
                                        @error('educationcertificates')
                                        <div id="educationcertificates" class="invalid-feedback">{{$message}}
                                        </div>
                                        @enderror
                                        <label class="custom-file-label" for="inputGroupFile01">Choose
                                            file</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="form-group">
                            <h6 class="d-block ml-3">Upload Your Aviation Certificates Here!</h6>
                            <div class="col-12">
                                <div class="input-group mb-3">
                                    <div class="custom-file">
                                        <input type="file"
                                            class="custom-file-input  @error('aviationtraining') is-invalid @enderror"
                                            value="{{old('aviationtraining')}}" name="aviationtraining"
                                            id="aviationtraining" aria-describedby="inputGroupFileAddon01" >
                                        @error('aviationtraining')
                                        <div id="aviationtraining" class="invalid-feedback">{{$message}}
                                        </div>
                                        @enderror
                                        <label class="custom-file-label" for="inputGroupFile01">Choose
                                            file</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <h6 class="d-block ml-3">Upload Your Other Training Certificates Here!</h6>
                            <div class="col-12">
                                <div class="input-group mb-3">
                                    <div class="custom-file">
                                        <input type="file"
                                            class="custom-file-input  @error('othertraining') is-invalid @enderror"
                                            value="{{old('othertraining')}}" name="othertraining"
                                            id="othertraining" aria-describedby="inputGroupFileAddon01" >
                                        @error('othertraining')
                                        <div id="othertraining" class="invalid-feedback">{{$message}}
                                        </div>
                                        @enderror
                                        <label class="custom-file-label" for="inputGroupFile01">Choose
                                            file</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="form-group">
                            <h6 class="d-block ml-3">Upload Your Diploma Certificates Here!</h6>
                            <div class="col-12">
                                <div class="input-group mb-3">
                                    <div class="custom-file">
                                        <input type="file"
                                            class="custom-file-input  @error('diplomafile') is-invalid @enderror"
                                            value="{{old('diplomafile')}}" name="diplomafile"
                                            id="diplomafile" aria-describedby="inputGroupFileAddon01" >
                                        @error('diplomafile')
                                        <div id="diplomafile" class="invalid-feedback">{{$message}}
                                        </div>
                                        @enderror
                                        <label class="custom-file-label" for="inputGroupFile01">Choose
                                            file</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </table>
                </form>
            </div>
        </div>
            </div>
            <hr>
        </div>
    </div>
</div>

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

<script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.8.1/min/dropzone.min.js"
    integrity="sha512-OTNPkaN+JCQg2dj6Ht+yuHRHDwsq1WYsU6H0jDYHou/2ZayS2KXCfL28s/p11L0+GSppfPOqwbda47Q97pDP9Q=="
    crossorigin="anonymous"></script>
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
