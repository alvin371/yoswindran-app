@extends('layout/memberArea')
@section('title', 'PHOTO GALLERY')
@section('container')

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="row">
        <div class="col-9">
            <h5 class="h3 mb-1 text-gray-800">HIGHLIGHT PHOTO</h5>
        </div>
        <div class="col-3">
            <div class="d-flex mb-2">
                <div class="ml-auto p-2">
                    <a href="{{url('/photogallery/createH')}}" class="btn btn-primary btn-icon-split btn-sm">
                        <span class="icon text-white-50">
                            <i class="fas fa-plus"></i>
                        </span>
                        <span class="text">Add Photo</span>
                    </a>
                </div>
            </div>
        </div>

    </div>


    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary text-uppercase">Available Photo</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>NO</th>
                            <th>TITLE</th>
                            <th>CONTENT</th>
                            <th>PHOTO</th>
                            <th>REMARK</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>NO</th>
                            <th>TITLE</th>
                            <th>CONTENT</th>
                            <th>PHOTO</th>
                            <th>REMARK</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @foreach($photo as $p)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$p->title}}</td>
                            <td>{{$p->hlcontent}}</td>
                            <td><img src="{{asset('storage/'.$p->photo)}}" alt="{{$p->title}}" class="w-25"></td>
                            <td>
                                <div class="col-3">
                                    <form action="{{url('photogallery/highlightsDelete/'.$p->id)}}" method="post">
                                    @method('delete')
                                    @csrf
                                        <button type="submit" class="btn btn-danger btn-circle btn-sm d-block" onclick="return confirm('Are you sure?')">
                                                <i class="fa fa-trash"></i>
                                        </button>
                                    </form>
                                    <a href="{{url('/photogallery/'.$p->id.'/editHighlights')}}" class="btn btn-primary btn-circle btn-sm">
                                        <i class="fas fa-pen"></i>
                                    </a>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>


    <!-- Page Heading -->
    <div class="row">
        <div class="col-9">
            <h5 class="h3 mb-1 text-gray-800">SERVICE PHOTO</h5>
        </div>

    </div>


    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>NO</th>
                            <th>PAGE AFFECTED</th>
                            <th>PHOTO</th>
                            <th>REMARK</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>NO</th>
                            <th>PAGE AFFECTED</th>
                            <th>PHOTO</th>
                            <th>REMARK</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @foreach($service as $s)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$s->page}}</td>
                            <td><img src="{{asset('storage/'.$s->name)}}" alt="Services Photo" style="width:100px;height:100px;"></td>
                            <td>
                                <a href="{{url('/photogallery/servicephoto/')}}" class="btn btn-primary btn-circle btn-sm">
                                    <i class="fas fa-pen"></i>
                                </a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- Page Heading -->
    <div class="row">
        <div class="col-9">
            <h5 class="h3 mb-1 text-gray-800">BLOG PHOTO</h5>
        </div>
        <div class="col-3">
            <div class="d-flex mb-2">
                <div class="ml-auto p-2">
                    <a href="{{url('/blogManagement/create')}}" class="btn btn-primary btn-icon-split btn-sm">
                    </a>
                </div>
            </div>
        </div>

    </div>


    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>NO</th>
                            <th>PAGE AFFECTED</th>
                            <th>PHOTO</th>
                            <th>REMARK</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>NO</th>
                            <th>PAGE AFFECTED</th>
                            <th>PHOTO</th>
                            <th>REMARK</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @foreach($blog as $b)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$b->page}}</td>
                            <td><img src="{{asset('storage/'.$b->name)}}" alt="Blog Photo" style="width:400px;height:300px;"></td>
                            <td>
                                <a href="{{url('/photogallery/blogphoto/')}}" class="btn btn-primary btn-circle btn-sm">
                                    <i class="fas fa-pen"></i>
                                </a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- Page Heading -->
    <div class="row">
        <div class="col-9">
            <h5 class="h3 mb-1 text-gray-800">COMPANY PROFILE PHOTO</h5>
        </div>
        <div class="col-3">
            <div class="d-flex mb-2">
                <div class="ml-auto p-2">
                    <a href="{{url('/blogManagement/create')}}" class="btn btn-primary btn-icon-split btn-sm">
                    </a>
                </div>
            </div>
        </div>

    </div>


    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>NO</th>
                            <th>PAGE AFFECTED</th>
                            <th>PHOTO</th>
                            <th>REMARK</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>NO</th>
                            <th>PAGE AFFECTED</th>
                            <th>PHOTO</th>
                            <th>REMARK</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @foreach($company as $com)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$com->page}}</td>
                            <td><img src="{{asset('storage/'.$com->photo)}}" alt="Company Profile Photo" style="width:400px;height:300px;"></td>
                            <td>
                                <a href="{{url('/photogallery/companyphoto')}}" class="btn btn-primary btn-circle btn-sm">
                                    <i class="fas fa-pen"></i>
                                </a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>


    <!-- Page Heading -->
    <div class="row">
        <div class="col-9">
            <h5 class="h3 mb-1 text-gray-800">PHOTO GALLERY</h5>
        </div>
        <div class="col-3">
            <div class="d-flex mb-2">
                <div class="ml-auto p-2">
                    <a href="{{url('/photogallery/createP')}}" class="btn btn-primary btn-icon-split btn-sm">
                        <span class="icon text-white-50">
                            <i class="fas fa-plus"></i>
                        </span>
                        <span class="text">Add Photo</span>
                    </a>
                </div>
            </div>
        </div>

    </div>


    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>NO</th>
                            <th>TITLE</th>
                            <th>PHOTO</th>
                            <th>REMARK</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>NO</th>
                            <th>TITLE</th>
                            <th>PHOTO</th>
                            <th>REMARK</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @foreach($pg as $t)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$t->title}}</td>
                            <td><img src="{{asset('storage/'.$t->photo)}}" alt="{{$t->title}}" class="w-25"></td>
                            <td>
                                <div class="col-3">
                                    <form action="{{url('photogallery/photoDelete/'.$t->id)}}" method="post">
                                    @method('delete')
                                    @csrf
                                        <button type="submit" class="btn btn-danger btn-circle btn-sm d-block" onclick="return confirm('Are you sure?')">
                                                <i class="fa fa-trash"></i>
                                        </button>
                                    </form>
                                    <a href="{{url('/photogallery/'.$t->id.'/edit')}}" class="btn btn-primary btn-circle btn-sm">
                                        <i class="fas fa-pen"></i>
                                    </a>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    
    <!-- Page Heading -->
    <div class="row">
        <div class="col-9">
            <h5 class="h3 mb-1 text-gray-800">CONTACT US FORM</h5>
        </div>

    </div>


    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>NO</th>
                            <th>EMAIL</th>
                            <th>NAME</th>
                            <th>MESSAGE</th>
                            <th>REMARK</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>NO</th>
                            <th>EMAIL</th>
                            <th>NAME</th>
                            <th>MESSAGE</th>
                            <th>REMARK</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @foreach($contact as $c)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$c->email}}</td>
                            <td>{{$c->namaLengkap}}</td>
                            <td>{{$c->Pesan}}</td>
                            <td>
                                <form action="{{url('photogallery/formus/'.$c->id)}}" method="post">
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

                <form action="{{url('blogManagement/')}}" method="post">
                    <button type="button" class="btn btn-warning" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
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
</body>

</html>
@endsection
