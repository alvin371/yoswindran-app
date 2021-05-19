@extends('layout/memberArea')
@section('title','ASESOR')
@section('container')
 <!-- Begin Page Content -->
 <div class="container">


<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h2 class="m-0 font-weight-bold text-center text-primary">CURRICULUM VITAE</h2>
    </div>
    <div class="card-body">
        <hr>
        <h4 class="text-primary text-uppercase">Personal Data</h4>
        <hr>
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <tr>
                    <td>Name</td>
                    <td>{{$asesor->name}}</td>
                </tr>
                <tr>
                    <td>MET</td>
                    <td>{{$asesor->met}}</td>
                </tr>
                <tr>
                    <td>Sertifikat</td>
                    <td>{{$asesor->sertifikat}}</td>
                </tr>
                <tr>
                    <td>Place and Date of Birth</td>
                    <td>{{$asesor->placebirth}}, {{$asesor->datebirth}}</td>
                </tr>
                <tr>
                    <td>Sex</td>
                    <td>{{$asesor->sex}}</td>
                </tr>
                <tr>
                    <td>Marital Status</td>
                    <td>{{$asesor->maritalstatus}}</td>
                </tr>
                <tr>
                    <td>Religion</td>
                    <td>{{$asesor->religion}}</td>
                </tr>
                <tr>
                    <td>Home Address</td>
                    <td>{{$asesor->address}}</td>
                </tr>
                <tr>
                    <td>Telephone No.</td>
                    <td>{{$asesor->telephone}}</td>
                </tr>
                <tr>
                    <td>Position/Office</td>
                    <td>{{$asesor->office}}</td>
                </tr>
                <tr>
                    <td>LSP Registration</td>
                    <td>{{$asesor->lspregistration}}</td>
                </tr>
                <tr>
                    <td>Latest Education</td>
                    <td>{{$asesor->education}}</td>
                </tr>
                <tr>
                    <td>Master/Lead/Asesor/Training/Recurrent</td>
                    <td>{{$asesor->position}}</td>
                </tr>
                <tr>
                    <td>Initial Asesor Training</td>
                    <td>{{$asesor->initial}}</td>
                </tr>
        </div>
        <table class="table table-bordered">
            <hr>
            <h4 class="text-primary text-uppercase">Employment Data</h4>
            <hr>
            <tr>
                <td>Employer </td>
                <td colspan="2"><?php echo $asesor->eemployer; ?>
            </tr>
            <tr>
                <td>Job/Responsibilities Uploaded File</td>
                <td rowspan="10">
                <iframe src="{{asset('storage/'.$asesor->employercertificates)}}" frameborder="10">
                <a href="{{asset('storage/'.$asesor->employercertificates)}}">{{asset('storage/'.$asesor->employercertificates)}}</a></iframe>
                </td>
                <td><a href="{{asset('storage/'.$asesor->employercertificates)}}">File</a></td>
            </tr>
        </table>
        <table class="table table-bordered">
            <hr>
            <h4 class="text-primary text-uppercase">Education</h4>
            <hr>
            <tr>
                <td>Employer </td>
                <td colspan="2"><?php echo $asesor->educationdata; ?>
            </tr>
            <tr>
                <td>Job/Responsibilities Uploaded File</td>
                <td rowspan="10">
                <iframe src="{{asset('storage/'.$asesor->educationcertificates)}}" frameborder="10">
                <a href="{{asset('storage/'.$asesor->educationcertificates)}}">{{asset('storage/'.$asesor->educationcertificates)}}</a></iframe>
                </td>
                <td><a href="{{asset('storage/'.$asesor->educationcertificates)}}">File</a></td>
            </tr>
        </table>
        <table class="table table-bordered">
            <hr>
            <h4 class="text-primary text-uppercase">Aviation Training</h4>
            <hr>
            <tr>
                <td>Employer </td>
                <td colspan="2"><?php echo $asesor->avitraining; ?>
            </tr>
            <tr>
                <td>Job/Responsibilities Uploaded File</td>
                <td rowspan="10">
                <iframe src="{{asset('storage/'.$asesor->avicertificates)}}" frameborder="10">
                <a href="{{asset('storage/'.$asesor->avicertificates)}}">{{asset('storage/'.$asesor->avicertificates)}}</a></iframe>
                </td>
                <td><a href="{{asset('storage/'.$asesor->avicertificates)}}">File</a></td>
            </tr>
        </table>
        <table class="table table-bordered">
            <hr>
            <h4 class="text-primary text-uppercase">Other Training</h4>
            <hr>
            <tr>
                <td>Employer </td>
                <td colspan="2"><?php echo $asesor->othertraining; ?>
            </tr>
            <tr>
                <td>Job/Responsibilities Uploaded File</td>
                <td rowspan="10">
                <iframe src="{{asset('storage/'.$asesor->othercertificates)}}" frameborder="10">
                <a href="{{asset('storage/'.$asesor->othercertificates)}}">{{asset('storage/'.$asesor->othercertificates)}}</a></iframe>
                </td>
                <td><a href="{{asset('storage/'.$asesor->othercertificates)}}">File</a></td>
            </tr>
        </table>
        <table class="table table-bordered">
            <hr>
            <h4 class="text-primary text-uppercase">License Held</h4>
            <hr>
            <tr>
                <td>License Data</td>
                <td colspan="2"><?php echo $asesor->licenseheld; ?>
            </tr>
            <tr>
                <td>License Validity</td>
                <td rowspan="10">
                <iframe src="{{asset('storage/'.$asesor->licensevalidity)}}" frameborder="10">
                <a href="{{asset('storage/'.$asesor->licensevalidity)}}">{{asset('storage/'.$asesor->licensevalidity)}}</a></iframe>
                </td>
                <td><a href="{{asset('storage/'.$asesor->licensevalidity)}}">File</a></td>
            </tr>
        </table>
        <table class="table table-bordered">
            <hr>
            <h4 class="text-primary text-uppercase">Teaching Aspeck</h4>
            <hr>
            <tr>
                <td>Teaching Aspeck</td>
                <td colspan="2"><?php echo $asesor->teachingaspeck; ?>
            </tr>
        </table>
        <table class="table table-bordered">
        <hr>
        <h4 class="text-primary text-uppercase">Conclusion</h4>
        <hr>
        <tr>
            <td><?php echo $asesor->conclusion ?></td>
        </tr>
        </table>
        <table class="table table-bordered">
        <hr>
        <h4 class="text-primary text-uppercase">Recommendation</h4>
        <hr>
        <tr>
            <td><?php echo $asesor->recommendation ?></td>
        </tr>
        </table>
        <table class="table table-bordered">
        <hr>
        <h4 class="text-primary text-uppercase">Master Asesor</h4>
        <hr>
        <tr>
            <td><?php echo $asesor->masterasesor; ?></td>
        </tr>
        </table>
        <table class="table table-bordered">
            <hr>
        </table>
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
        CKEDITOR.replace('diploma');
    </script>
</body>

</html>
@endsection