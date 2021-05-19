@extends('layout/memberArea')
@section('title', 'FACILITATOR')
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
                    <td>{{$facilitator->name}}</td>
                </tr>
                <tr>
                    <td>ID</td>
                    <td>{{$facilitator->idfacilitator}}</td>
                </tr>
                <tr>
                    <td>LOA</td>
                    <td>{{$facilitator->loa}}</td>
                </tr>
                <tr>
                    <td>Place and Date of Birth</td>
                    <td>{{$facilitator->placebirth}}, {{$facilitator->datebirth}} </td>
                </tr>
                <tr>
                    <td>Sex</td>
                    <td>{{$facilitator->sex}}</td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td>{{$facilitator->email}}</td>
                </tr>
                <tr>
                    <td>Marital Status</td>
                    <td>{{$facilitator->maritalstatus}}</td>
                </tr>
                <tr>
                    <td>Religion</td>
                    <td>{{$facilitator->religion}}</td>
                </tr>
                <tr>
                    <td>Home Address</td>
                    <td>{{$facilitator->address}}
                    </td>
                </tr>
                <tr>
                    <td>Telephone No.</td>
                    <td>{{$facilitator->telephone}}</td>
                </tr>
                <tr>
                    <td>Facilitation Languages</td>
                    <td>{{$facilitator->language}}</td>
                </tr>
                <tr>
                    <td>Latest Education</td>
                    <td>{{$facilitator->education}}</td>
                </tr>
                <tr>
                    <td>Recurrent Training</td>
                    <td>{{$facilitator->recurrent}}</td>
                </tr>
                <tr>
                    <td>Initial Facilitator Training</td>
                    <td>{{$facilitator->initial}}</td>
                </tr>
        </div>
        <table class="table table-bordered">
            <hr>
            <h4 class="text-primary text-uppercase">Employment Data</h4>
            <hr>
            <tr>
                <td>Employer </td>
                <td colspan="2"><?php echo $facilitator->eemployer; ?>
            </tr>
            <tr>
                <td>Job/Responsibilities Uploaded File</td>
                <td rowspan="10">
                    <iframe src="{{asset('storage/'.$facilitator->employercertificates)}}" frameborder="10">
                    <a href="{{asset('storage/'.$facilitator->employercertificates)}}">{{asset('storage/'.$facilitator->employercertificates)}}</a></iframe>
                </td>
                <td><a href="{{asset('storage/'.$facilitator->employercertificates)}}">File</a></td>
            </tr>
        </table>
        <table class="table table-bordered">
            <hr>
            <h4 class="text-primary text-uppercase">Education</h4>
            <hr>
            <tr>
                <td>Education Data </td>
                <td colspan="2"><?php echo $facilitator->educationdata; ?>
            </tr>
            <tr>
                <td>Education Certificates</td>
                <td rowspan="10">
                    <iframe src="{{asset('storage/'.$facilitator->educationcertificates)}}" frameborder="10">
                    <a href="{{asset('storage/'.$facilitator->educationcertificates)}}">{{asset('storage/'.$facilitator->educationcertificates)}}</a></iframe>
                </td>
                <td><a href="{{asset('storage/'.$facilitator->educationcertificates)}}">File</a></td>
            </tr>
        </table>
        <table class="table table-bordered">
            <hr>
            <h4 class="text-primary text-uppercase">Aviation Training</h4>
            <hr>
            <tr>
                <td>Aviation Training Data </td>
                <td colspan="2"><?php echo $facilitator->avitraining; ?>
            </tr>
            <tr>
                <td>Aviation Certificates</td>
                <td rowspan="10">
                    <iframe src="{{asset('storage/'.$facilitator->avicertificates)}}" frameborder="10">
                    <a href="{{asset('storage/'.$facilitator->avicertificates)}}">{{asset('storage/'.$facilitator->avicertificates)}}</a></iframe>
                </td>
                <td><a href="{{asset('storage/'.$facilitator->avicertificates)}}">File</a></td>
            </tr>
        </table>
        <table class="table table-bordered">
            <hr>
            <h4 class="text-primary text-uppercase">Other Training</h4>
            <hr>
            <tr>
                <td>Other Training Data </td>
                <td colspan="2"><?php echo $facilitator->othertraining; ?>
            </tr>
            <tr>
                <td>Education Certificates</td>
                <td rowspan="10">
                    <iframe src="{{asset('storage/'.$facilitator->othercertificates)}}" frameborder="10">
                    <a href="{{asset('storage/'.$facilitator->othercertificates)}}">{{asset('storage/'.$facilitator->othercertificates)}}</a></iframe>
                </td>
                <td><a href="{{asset('storage/'.$facilitator->othercertificates)}}">File</a></td>
            </tr>
        </table>
        <table class="table table-bordered">
            <hr>
            <h4 class="text-primary text-uppercase">DIPLOMA/LICENSES HELD</h4>
            <hr>
            <tr>
                <td>License Data </td>
                <td colspan="2"><?php echo $facilitator->diploma; ?>
            </tr>
            <tr>
                <td>Education Certificates</td>
                <td rowspan="10">
                    <iframe src="{{asset('storage/'.$facilitator->diplomavalidity)}}" frameborder="10">
                    <a href="{{asset('storage/'.$facilitator->diplomavalidity)}}">{{asset('storage/'.$facilitator->diplomavalidity)}}</a></iframe>
                </td>
                <td><a href="{{asset('storage/'.$facilitator->diplomavalidity)}}">File</a></td>
            </tr>
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
        CKEDITOR.replace('licenseheld');
        CKEDITOR.replace('teachingaspeck');
    </script>
</body>

</html>
@endsection