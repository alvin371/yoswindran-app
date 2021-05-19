@extends('layout/memberArea')
@section('title', 'MEMBER')
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
            @foreach($members as $member)
                <tr>
                    <td>Name</td>
                    <td>{{$member->name}}</td>
                </tr>
                <tr>
                    <td>Place and Date of Birth</td>
                    <td>{{$member->placebirth}}, {{$member->datebirth}}</td>
                </tr>
                <tr>
                    <td>Sex</td>
                    <td>{{$member->sex}}</td>
                </tr>
                <tr>
                    <td>Marital Status</td>
                    <td>{{$member->maritalstatus}}</td>
                </tr>
                <tr>
                    <td>Religion</td>
                    <td>{{$member->religion}}</td>
                </tr>
                <tr>
                    <td>Home Address</td>
                    <td>{{$member->address}}</td>
                </tr>
                <tr>
                    <td>Telephone No.</td>
                    <td>{{$member->telephone}}</td>
                </tr>
                <tr>
                    <td>Position/Office</td>
                    <td>{{$member->office}}</td>
                </tr>
                <tr>
                    <td>Training Languages</td>
                    <td>{{$member->traininglag}}</td>
                </tr>
                <tr>
                    <td>Latest Education</td>
                    <td>{{$member->education}}</td>
                </tr>
                <tr>
                    <td>Practical Training</td>
                    <td>{{$member->practical}}</td>
                </tr>
                <tr>
                    <td>Initial Skill Training</td>
                    <td>{{$member->initial}}</td>
                </tr>
        </div>
        <table class="table table-bordered">
            <hr>
            <h4 class="text-primary text-uppercase">Employment Data</h4>
            <hr>
            <tr>
                <td>Employment Data </td>
                <td colspan="2"><?php echo $member->eemployer; ?>
            </tr>
            <tr>
                <td>Job/Responsibilities Uploaded File</td>
                <td rowspan="10">
                
                <?php 
                $file = $member->employment;
                if($file === 'No file has uploaded yet'){
                    echo 'No File has uploaded yet, We suggest you to upload file in yellow button on coloumn remark';
                } else if($file != 'No file has uploaded yet'){?>
                <iframe src="{{asset('storage/'.$member->employment)}}" frameborder="10">
                <a href="{{asset('storage/'.$member->employment)}}">{{asset('storage/'.$member->employment)}}</a></iframe>
                </td>
                <td><a href="{{asset('storage/'.$member->employment)}}">File</a></td>
                <?php } ?>
            </tr>
        </table>
        <table class="table table-bordered">
            <hr>
            <h4 class="text-primary text-uppercase">Education</h4>
            <hr>
            <tr>
                <td>Education Data </td>
                <td colspan="2"><?php echo $member->educationdata; ?>
            </tr>
            <tr>
                <td>Education File Certificates</td>
                <td rowspan="10">
                <?php 
                $file = $member->employment;
                if($file === 'No file has uploaded yet'){
                    echo 'No File has uploaded yet, We suggest you to upload file in yellow button on coloumn remark';
                } else if($file != 'No file has uploaded yet'){?>
                <iframe src="{{asset('storage/'.$member->educationcertificates)}}" frameborder="10">
                <a href="{{asset('storage/'.$member->educationcertificates)}}">{{asset('storage/'.$member->educationcertificates)}}</a></iframe>
                </td>
                <td><a href="{{asset('storage/'.$member->educationcertificates)}}">File</a></td>
                <?php } ?>
            </tr>
        </table>
        <table class="table table-bordered">
            <hr>
            <h4 class="text-primary text-uppercase">Aviation Training</h4>
            <hr>
            <tr>
                <td>Aviation Training</td>
                <td colspan="2"><?php echo $member->avitraining; ?>
            </tr>
            <tr>
                <td>Aviation Training File</td>
                <td rowspan="10">
                <?php 
                $file = $member->employment;
                if($file === 'No file has uploaded yet'){
                    echo 'No File has uploaded yet, We suggest you to upload file in yellow button on coloumn remark';
                } else if($file != 'No file has uploaded yet'){?>
                <iframe src="{{asset('storage/'.$member->aviationtraining)}}" frameborder="10">
                <a href="{{asset('storage/'.$member->aviationtraining)}}">{{asset('storage/'.$member->aviationtraining)}}</a></iframe>
                </td>
                <td><a href="{{asset('storage/'.$member->aviationtraining)}}">File</a></td>
                <?php } ?>
            </tr>
        </table>
        <table class="table table-bordered">
            <hr>
            <h4 class="text-primary text-uppercase">Other Training</h4>
            <hr>
            <tr>
                <td>Other Training </td>
                <td colspan="2"><?php echo $member->othertrainings; ?>
            </tr>
            <tr>
                <td>Other Training File</td>
                <td rowspan="10">
                <?php 
                $file = $member->employment;
                if($file === 'No file has uploaded yet'){
                    echo 'No File has uploaded yet, We suggest you to upload file in yellow button on coloumn remark';
                } else if($file != 'No file has uploaded yet'){?>
                <iframe src="{{asset('storage/'.$member->othertraining)}}" frameborder="10">
                <a href="{{asset('storage/'.$member->othertraining)}}">{{asset('storage/'.$member->othertraining)}}</a></iframe>
                </td>
                <td><a href="{{asset('storage/'.$member->othertraining)}}">File</a></td>
                <?php } ?>
            </tr>
        </table>
        <table class="table table-bordered">
            <hr>
            <h4 class="text-primary text-uppercase">DIPLOMA/LICENSES HELD</h4>
            <hr>
            <tr>
                <td>Diploma Licenses </td>
                <td colspan="2"><?php echo $member->diploma; ?>
            </tr>
            <tr>
                <td>Diploma Licenses File</td>
                <td rowspan="10">
                <?php 
                $file = $member->employment;
                if($file === 'No file has uploaded yet'){
                    echo 'No File has uploaded yet, We suggest you to upload file in yellow button on coloumn remark';
                } else if($file != 'No file has uploaded yet'){?>
                <iframe src="{{asset('storage/'.$member->diplomafile)}}" frameborder="10">
                <a href="{{asset('storage/'.$member->diplomafile)}}">{{asset('storage/'.$member->diplomafile)}}</a></iframe>
                </td>
                <td><a href="{{asset('storage/'.$member->diplomafile)}}">File</a></td>
                <?php } ?>
            </tr>
            @endforeach
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