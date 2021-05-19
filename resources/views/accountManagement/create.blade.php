@extends('layout/memberArea')
@section('title', 'ACCOUNT MANAGEMENT')
@section('container')
<!-- Begin Page Content -->
<div class="container">


<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Add New Account</h6>
    </div>
    <div class="card-body">
        <hr>
        <h4 class="text-primary text-uppercase">input account Data</h4>
        <hr>
        <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <form method="post" enctype="multipart/form-data" action="/account">
        @csrf
                    <div class="form-group">
                        <div class="col-6">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" id="name"
                               name="name" placeholder="Full Name">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-6">
                            <label for="phone">Phone</label>
                            <input type="text" class="form-control" name="phone" id="phone">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-6">
                            <label for="gender">Sex</label>
                            <select class="form-control" id="gender" name="gender">
                                <option value="Choose Your Gender">Choose your own gender</option>
                                <option value="male">Male</option>
                                <option value="female">Female</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-6">
                            <label for="level">Level</label>
                            <select class="form-control" id="level" name="level">
                                <option value="Account Level not decided yet">Pick Account Level</option>
                                <option value="admin">Admin</option>
                                <option value="member">Member</option>
                                <option value="asesor">Asesor</option>
                                <option value="facilitator">Facilitator</option>
                                <option value="trainer">Trainer</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-6">
                            <label for="email">Email</label>
                            <input type="text" class="form-control" name="email" id="email">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-6">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" name="password" id="password">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-6">
                            <label for="password">Confirm Password</label>
                            <input type="password" class="form-control" name="password" id="password">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-6">
                            <label for="photo">Photo</label>
                            <input type="file" class="form-control" name="photo" id="photo">
                        </div>
                    </div
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