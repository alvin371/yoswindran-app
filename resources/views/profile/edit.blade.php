@extends('layout/memberArea')
@section('title','PROFILE')
@section('container')
 <!-- Begin Page Content -->
 <div class="container">


<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Edit Profile</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <form method="post" enctype="multipart/form-data" action="{{url("/profile/{$editData->id}")}}">
            @method('patch')
            @csrf
                    <div class="form-group">
                        <div class="col-6">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" id="name"
                                value="{{$editData->name}}" name="name">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-6">
                            <label for="email">Email</label>
                            <input type="text" class="form-control" name="email" id="email"
                            value="{{$editData->email}}">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-6">
                            <label for="phone">Phone</label>
                            <input type="text" class="form-control" name="phone" id="phone"
                            value="{{$editData->phone}}">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-6">
                            <label for="gender">Gender</label>
                            <select class="form-control @error('gender') is-invalid @enderror" id="gender" name="gender">
                            <?php $value=$editData->gender; ?>
                                <option value="">Choose your own gender</option>
                                <option value="Male" <?php if($value==='Male') echo 'selected="selected"';?>>Male</option>
                                <option value="Female" <?php if($value==='Female') echo 'selected="selected"';?>>Female</option>
                            </select>
                                @error('gender')
                                <div class="invalid-feedback">
                                  {{$message}}
                                </div>
                                @enderror
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-6">
                            <label for="photo">Upload Your Photo!</label>
                            <div class="custom-file">
                                <input value="{{$editData->photo}}" type="file" class="custom-file-input @error('photo') is-invalid @enderror" id="photo"
                                    aria-describedby="inputGroupFileAddon01" name="photo">
                                <label class="custom-file-label" for="photo">Choose
                                    Photo</label>
                            @error('photo')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                             @enderror
                            </div>
                        </div>
                    </div>
                    <hr>
                    <button type="submit" class="btn btn-primary  mt-3">Submit</button>
                </form>
            </table>
        </div>
    </div>
</div>
</div>

</div>
<!-- /.container-fluid -->
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
    @include('sweetalert::alert')
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