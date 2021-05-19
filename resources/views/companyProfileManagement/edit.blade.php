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

</div>


<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary text-uppercase">PROFILE</h6>
    </div>
    <div class="card-body">
    <hr>
    <h4>Company Profile</h4>
    <hr>
    <form class="form-horizontal" method="post" enctype="multipart/form-data" action="/companyProfileManagement/{{$companyProfileManagement->id}}">
    @method('patch')
    @csrf
    <div class="front-view">
                <div class="row">
                    <div class="col-4">
                        <div class="form-group">
                            <label for="companyname">Nama Perusahaan</label>
                            <input type="text" class="form-control" value="{{$companyProfileManagement->indonesian}}" name="indonesian" id="companyname" placeholder="Nama Indonesia">
                            <input type="text" class="form-control" value="{{$companyProfileManagement->international}}" name="international" id="companyname" placeholder="International Name">
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="form-group">
                            <label for="motto">Motto</label>
                            <textarea name="motto" class="form-control" value="" id="motto">{{$companyProfileManagement->motto}}</textarea>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="form-group">
                            <label for="photo">CEO Photo</label>
                            <input type="file" class="form-control" value="{{$companyProfileManagement->ceopict}}" name="ceopict" id="photo">
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="form-group">
                            <label for="ceoname">CEO Name</label>
                            <input type="text" class="form-control" value="{{$companyProfileManagement->ceoname}}" name="ceoname"
                                id="ceoname">
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="form-group">
                            <label for="ceoquote">CEO Quote</label>
                            <br>
                            <textarea name="ceoquote" class="form-control" id="ceoquote" cols="20" rows="6">{{$companyProfileManagement->ceoquote}}</textarea>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="form-group">
                            <label for="desc">Company Description</label>
                            <textarea name="desc" class="form-control" id="desc" cols="20" rows="6">{{$companyProfileManagement->desc}}</textarea>
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
                            <textarea name="address" class="form-control" value="" id="address" row="3">{{$companyProfileManagement->address}}</textarea>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="form-group">
                            <label for="phone">Phone</label>
                            <input type="text" class="form-control" value="{{$companyProfileManagement->phone}}" name="phone" id="phone">
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="form-group">
                            <label for="fax">Fax</label>
                            <input type="text" class="form-control" value="{{$companyProfileManagement->fax}}" name="fax" id="fax">
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="text" class="form-control" value="{{$companyProfileManagement->email}}" name="email"
                                id="email">
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="form-group">
                            <label for="csphone">Customer Service Phone</label>
                            <input type="text" class="form-control" value="{{$companyProfileManagement->csphone}}" name="csphone"
                                id="csphone">
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="form-group">
                            <label for="csemail">Customer Service Email</label>
                            <input type="text" class="form-control" value="{{$companyProfileManagement->csemail}}" name="csemail"
                                id="csemail">
                        </div>
                    </div>
                    <hr>
                    <h6 class="d-blok col-12 col-md-12 col-sm-12">Here Your Social Media Link!</h6>
                    <br>
                    <div class="col-4">
                        <div class="form-group">
                            <label for="facebook">Facebook Link</label>
                            <input type="text" class="form-control" value="{{$companyProfileManagement->facebook}}" name="facebook"
                                id="facebook">
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="form-group">
                            <label for="instagram">Instagram Link</label>
                            <input type="text" class="form-control" value="{{$companyProfileManagement->instagram}}" name="instagram"
                                id="instagram">
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="form-group">
                            <label for="twitter">Twitter Link</label>
                            <input type="text" class="form-control" value="{{$companyProfileManagement->twitter}}" name="twitter"
                                id="twitter">
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="form-group">
                            <label for="whatsapp">Whatsapp Link</label>
                            <input type="text" class="form-control" value="{{$companyProfileManagement->whatsapp}}" name="whatsapp"
                                id="whatsapp">
                        </div>
                    </div>
                </div>
        </div>
        <hr>
        <h4>Company Profile Page</h4>
        <hr>
        <div class="companypage">
                <div class="row">
                    <div class="col-4">
                        <div class="form-group">
                            <label for="photo">Index Photo/Highlights Photo</label>
                            <input type="file" class="form-control" name="indexphoto" id="photo">
                        </div>
                    </div>
                    <div class="col-8">
                        <div class="form-group">
                            <label for="content">Company Profile</label>
                            <textarea name="companycontent" class="form-control" id="content">{{$companyProfileManagement->content}}</textarea>
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
        CKEDITOR.replace('companycontent');
    </script>
</body>

</html>
@endsection
