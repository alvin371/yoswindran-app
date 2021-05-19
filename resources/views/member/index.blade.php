@extends('layout/memberAreaLayoutIndex')
@section('title', 'MEMBER')
@section('container')
 <!-- Begin Page Content -->
 <div class="container-fluid">

<!-- Page Heading -->
<div class="row">
    <div class="col-9">
        <h5 class="h3 mb-1 text-gray-800 text-uppercase">Data Member/Trainee</h5>
    </div>
    <div class="col-3">
        <div class="d-flex mb-2">
            <div class="ml-auto p-2">
                <a href="{{url('/member/create')}}" class="btn btn-primary btn-icon-split btn-sm">
                    <span class="icon text-white-50">
                        <i class="fas fa-plus"></i>
                    </span>
                    <span class="text">Add Member</span>
                </a>
            </div>
        </div>
    </div>

</div>


<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">DATA MEMBER</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>NO</th>
                        <th>NAMA LENGKAP</th>
                        <th>STATUS</th>
                        <th>PHONE</th>
                        <th>EMAIL</th>
                        <th>SEJAK DARI</th>
                        <th>REMARK</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>NO</th>
                        <th>NAMA LENGKAP</th>
                        <th>STATUS</th>
                        <th>PHONE</th>
                        <th>EMAIL</th>
                        <th>SEJAK DARI</th>
                        <th>REMARK</th>
                    </tr>
                </tfoot>
                <tbody>
                @foreach($member as $m)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$m->name}}</td>
                        <td>{{$m->office}}</td>
                        <td>{{$m->telephone}}</td>
                        <td>{{$m->email}}</td>
                        <td>{{$m->created_at}}</td>
                        <td>
                            <a href="{{url('/member/file/'.$m->member_id)}}" class="btn btn-warning btn-circle btn-sm">
                                <i class="far fa-file-archive 3x"></i>
                            </a>
                            <a href="{{url('/member/'.$m->id.'/edit')}}" class="btn btn-primary btn-circle btn-sm">
                                <i class="fas fa-pen"></i>
                            </a>
                            <a href="{{url('/member/'.$m->member_id)}}" class="btn btn-success">
                                Data Lengkap
                            </a>
                            <form action="{{url('/member/'.$m->member_id)}}" method="post">
                            @method('delete')
                            @csrf
                                <button type="submit" class="btn btn-danger btn-circle btn-sm d-block" onclick="return confirm('Are you sure?')">
                                        <i class="fa fa-trash"></i>
                                </button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
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
        @foreach($member as $k)
            <form action="{{ route('member.destroy', $k->id) }}" method="post">
            @csrf
            @method('delete')
        @endforeach
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
                        <input type="hidden" id="id" name="id">
                        <button type="button" class="btn btn-warning" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-danger">Delete</button>
                </div>
            </div>
            </form>
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
     $(document).on('click','.delete',function(){
         let id = $(this).attr('data-attr');
         $('#id').val(id);
    });
    </script>
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
</body>

</html>
@endsection
