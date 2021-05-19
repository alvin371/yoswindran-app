@extends('layout/memberArea')
@section('title', 'COMPANY PROFILE MANAGEMENT')
@section('container')
<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<div class="row">
    <div class="col-9">
        <h5 class="h3 mb-1 text-gray-800">COMPANY PROFILE</h5>
    </div>
    <div class="col-3">
        <div class="d-flex mb-2">
            <div class="ml-auto p-2">
                <a href="{{url('/companyProfileManagement/1/edit')}}" class="btn btn-primary btn-icon-split btn-sm">
                    <span class="icon text-white-50">
                        <i class="fas fa-plus"></i>
                    </span>
                    <span class="text">Edit Company Profile</span>
                </a>
            </div>
        </div>
    </div>

</div>


<!-- DataTales Example -->
@foreach($companyProfileManagement as $c)
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary text-uppercase">PROFILE</h6>
    </div>
    <div class="card-body">
    <hr>
    <h4>Company Profile</h4>
    <hr>
    <div class="front-view">
                <div class="row">
                    <div class="col-6">
                        <div class="form-group">
                            <label for="companyname">Nama Perusahaan</label>
                            <input type="text" class="form-control" value="{{$c->indonesian}}" name="indonesian" id="companyname" placeholder="Nama Indonesia">
                            <input type="text" class="form-control" value="{{$c->international}}" name="international" id="companyname" placeholder="International Name">
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label for="motto">Motto</label>
                            <textarea name="motto" value="" class="form-control" id="motto">{{$c->motto}}</textarea>
                        </div>
                    </div>
                    <div class="col-12 text-center">
                    <hr>
                        <div class="form-group">
                            <label for="photo">CEO Photo</label>
                            <br>
                            <img src="{{asset('storage/'.$c->photo)}}" id="photo"style="width:300px; height:500px;"alt="">
                        </div>
                    <hr>
                    </div>
                    <div class="col-4">
                        <div class="form-group">
                            <label for="ceoname">CEO Name</label>
                            <input type="text" class="form-control" value="{{$c->ceoname}}" name="ceoname"
                                id="ceoname">
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="form-group">
                            <label for="ceoquote">CEO Quote</label>
                            <input type="text" class="form-control" value="{{$c->ceoquote}}" name="ceoquote"
                                id="ceoquote">
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="form-group">
                            <label for="desc">Company Description</label>
                            <textarea name="desc" class="form-control" value="" id="desc" row="3">{{$c->desc}}</textarea>
                        </div>
                    </div>
                </div>
        </div>
        <hr>
    <h4>Office Information</h4>
    <hr>
    <div class="footer">
                <div class="row">
                    <div class="col-4">
                        <div class="form-group">
                            <label for="address">Address</label>
                            <textarea name="address" class="form-control" id="address" row="3">{{$c->address}}</textarea>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="form-group">
                            <label for="phone">Phone</label>
                            <input type="phone" value="{{$c->phone}}" class="form-control" name="phone" id="phone">
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="form-group">
                            <label for="fax">Fax</label>
                            <input type="fax" class="form-control" value="{{$c->fax}}" name="fax" id="fax">
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="text" class="form-control" value="{{$c->email}}" name="email"
                                id="email">
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="form-group">
                            <label for="csphone">Customer Service Phone</label>
                            <input type="text" class="form-control" value="{{$c->csphone}}" name="csphone"
                                id="csphone">
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="form-group">
                            <label for="csemail">Customer Service Email</label>
                            <input type="text" class="form-control" value="{{$c->csemail}}" name="csemail"
                                id="csemail">
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="form-group">
                            <label for="csemail">Social Media Link</label>
                            <br>
                            <div class="icon">
                                <a href="{{$c->facebook}}"><i class="fab fa-facebook-square fa-2x"></i></a>
                                <a href="{{$c->twitter}}"><i class="fab fa-twitter fa-2x"></i></a>
                                <a href="{{$c->instagram}}"><i class="fab fa-instagram fa-2x"></i></a>
                                <a href="{{$c->whatsapp}}"><i class="fab fa-whatsapp fa-2x"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
        <hr>
        <h4>Company Profile Page</h4>
        <hr>
        <div class="companypage">
                <div class="row">
                    <div class="col-12 text-center">
                        <div class="form-group">
                            <label for="indexphoto">Index Photo/Highlights Photo</label>
                            <br>
                            <img src="{{asset('storage/'.$c->indexphoto)}}" style="height:720px; width: 1080px;" id="indexphoto " alt="">
                        </div>
                    </div>
                    <div class="col-12 text-center">
                        <div class="form-group">
                            <label for="content">Company Profile</label>
                            <hr>
                            <?php echo $c->content; ?>
                            <hr>
                        </div>
                    </div>
                </div>
        </div>
    </div>
</div>
@endforeach

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
                @foreach($companyProfileManagement as $as)
                <form action="{{url('asesor/'.$as->id)}}" method="post">
                @method('delete')
                @csrf
                @endforeach
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
