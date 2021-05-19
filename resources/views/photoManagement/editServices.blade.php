@extends('layout/memberArea')
@section('title', 'PHOTO GALLERY')
@section('container')
<!-- Begin Page Content -->
<div class="container">


    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Edit Service Highlights Photo</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <form method="post" enctype="multipart/form-data" action="/photogallery/updateServices">
                        @method('patch')
                        @csrf
                        <div class="form-group">
                            <div class="col-6">
                                <img src="{{asset('storage/'.$photo->photo)}}" alt="Services Photo">
                            </div>
                        </div>
                        @error('photo')
                        <div class="alert alert-danger" role="alert">
                        {{$message}}
                        </div>
                        @enderror
                        <div class="form-group">
                            <h6 class="d-block ml-3">You can change your photo!</h6>
                            <div class="col-12">
                                <div class="input-group mb-3">
                                    <div class="custom-file">
                                        <input type="file"
                                            class="custom-file-input  @error('photo') is-invalid @enderror"
                                            value="{{old('photo')}}" name="photo"
                                            id="photo" aria-describedby="inputGroupFileAddon01" accept=".jpg, .jpeg, .png"
                                            >
                                        <label class="custom-file-label" for="inputGroupFile01">Choose
                                            file</label>
                                    </div>
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
