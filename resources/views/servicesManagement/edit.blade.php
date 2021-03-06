@extends('layout/memberArea')
@section('title','SERVICE MANAGEMENT')
@section('container')
<!-- Begin Page Content -->
<div class="container">


<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Edit Services</h6>
    </div>
    <div class="card-body">
        <form method="post" enctype="multipart/form-data" action="/servicesManagement/{{$servicesManagement->id}}">
        @method('patch')
        @csrf
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <div class="form-group">
                            <div class="col-6">
                                <label for="title">Title</label>
                                <input type="text" class="form-control" value="{{$servicesManagement->title}}" name="title" id="title"
                                    placeholder="Your Services Title">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-6">
                                <label for="shortdesc">Short Description</label>
                                <textarea class="form-control" value="shortdesc" name="shortdesc" id="shortdesc" rows="3">{{$servicesManagement->shortdesc}}</textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-6">
                                <label for="trainer">Trainer Name</label>
                                <input type="text" class="form-control" value="{{$servicesManagement->trainer}}" name="trainer" id="trainer">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-6">
                                <label for="trainerdesc">Trainer Description</label>
                                <textarea class="form-control" value="title" name="trainerdesc" id="trainerdesc" rows="3">{{$servicesManagement->trainerdesc}}</textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-6">
                                <label for="photo">Photo</label>
                                <input type="file" class="form-control" value="{{$servicesManagement->photo}}" name="photo" id="photo">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-6">
                                <label for="postby">Post By</label>
                                <input type="text" class="form-control" value="{{$servicesManagement->postby}}" name="postby" id="postby">
                            </div>
                        </div>
                        <hr>
                        <div class="form-group">
                            <div class="col-12">
                                <label for="content">Content Text Here!</label>
                                <textarea name="contenttext" class="form-control" value="title" id="content">{{$servicesManagement->content}}</textarea>
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
                        <span aria-hidden="true">??</span>
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
        CKEDITOR.replace('contenttext');
    </script>
</body>

</html>
@endsection