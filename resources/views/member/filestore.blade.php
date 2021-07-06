@extends('layout/memberArea')
@section('title', 'MEMBER')
@section('container')
<!-- Begin Page Content -->
<div class="container">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Member File</h6>
        </div>
        <div class="card-body">
            <div class="btn btn-primary"><a href="{{url('/member')}}" style="text-decoration:none;color:white;">Back</a></div>
            <hr>
            <h4 class="text-primary text-uppercase">Certificates Form Upload</h4>
            <hr>
            <div class="table-responsive">
                <div class="d-flex flex justify-content-start my-5">
                    <button class="btn btn-primary" id="add_btn"><i class="fas fa-plus-square"></i> Add Input Form</button>
                </div>
                <form action="/file/{{$member->id}}/uploadMember" method="post" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" value="{{$member->id}}" name="memberID">
                    <div class="form-file">
                        <div class="d-flex flex-wrap">
                            <div class="custom-file col-10">
                                <input type="file" class="custom-file-input" multiple name="file[]">
                                <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-outline-danger my-5"><i class="fas fa-upload"></i>   Submit</button>
                </form>
            </div>
        </div>
    </div>
    <hr>
</div>
</div>
</div>

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

<script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.8.1/min/dropzone.min.js"
    integrity="sha512-OTNPkaN+JCQg2dj6Ht+yuHRHDwsq1WYsU6H0jDYHou/2ZayS2KXCfL28s/p11L0+GSppfPOqwbda47Q97pDP9Q=="
    crossorigin="anonymous"></script>
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
    $(document).ready(function(){
        $('#add_btn').on('click', function(){
            var html = `<div class="d-flex flex-wrap">
                        <div class="custom-file col-10">
                            <input type="file" class="custom-file-input" multiple name="file[]">
                            <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                        </div>
                            <i class="far fa-times-circle btn-outline-danger" id="remove" style="font-size:40px;cursor:pointer;margin-left:10px;"></i>
                        
                    </div>`
            $('.form-file').append(html);
        })
    })
    $(document).on("click",'#remove',function(){
        $(this).parent().remove()
    })
</script>
<script>
    $('.custom-file-input').on('change', function () {
        let fileName = $(this).val().split('\\').pop();
        $(this).next('.custom-file-label').addClass("selected").html(fileName);
    });
</script>

@include('sweetalert::alert')
</body>

</html>
@endsection
