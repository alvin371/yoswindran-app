@extends('layout/memberArea')
@section('title','PROFILE')
@section('container')

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="row">
        <div class="col-9">
            <h5 class="h3 mb-1 text-gray-800">PROFILE</h5>
        </div>
    </div>
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Username</h6>
        </div>
        <div class="row">
            <div class="col-12 text-center">
                @if((auth()->user()->photo) === '')

                <img src="{{ asset('css/img/photos.jpg') }}" alt="Profile Picture2"
                    style="width:300px; border-radius:50%;" />
                @else
                <img src="{{ asset('storage/'.auth()->user()->photo) }}" alt="Profile Picture1"
                    style="width:300px; border-radius:50%;" />

                @endif
            </div>
        </div>
        <div class="row">
            <div class="col-12 text-center my-2">
                <h1>{{auth()->user()->name}}</h1>
                <h3>{{auth()->user()->level}}</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <table class="table">
                    <tbody>
                        <tr>
                            <th scope="row">Email</th>
                            <td>{{auth()->user()->email}}</td>
                        </tr>
                        <tr>
                            <th scope="row">Phone</th>
                            <td>{{auth()->user()->phone}}</td>
                        </tr>
                        <tr>
                            <th scope="row">Gender</th>
                            <td>{{auth()->user()->name}}</td>
                        </tr>
                    </tbody>
                    <tbody>
                        <tr>
                            <th class="text-left">
                                <?php $id = auth()->user()->id; ?>
                                <a href="{{url("/profile/$id/edit")}}" class="badge badge-success d-inline"> Edit
                                    Profile</a>
                            </th>
                        </tr>
                    </tbody>
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
    $(".reveal").on('click', function () {
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
