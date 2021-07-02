<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta content="" name="keywords">
    <meta content="" name="description">
    <link href="{{asset('css/img/icon.png')}}" rel="icon">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <link rel="stylesheet" href="{{asset('css/signin.css')}}">

    <!-- font awesome -->
    <script src="https://kit.fontawesome.com/dca5fddf5a.js" crossorigin="anonymous"></script>

    <title>Affiliate Website</title>
</head>

<body>
    
    <div class="container">
        <div class="card text-center my-5">
            <div class="card-header">
               Reset Password
            </div>
            <div class="card-body">
                <h5 class="card-title">Type Your Email Here!</h5>
                <p class="card-text">If you forgot your password, type your email address here!</p>
                <p class="card-text">We will send you code for confirmation</p>
                <form action="{{url('/email-forgot')}}" method='post'>
                @csrf
                    <div class="form-group">
                        <label for="exampleInputEmail1">Insert Email</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" name="email" aria-describedby="emailHelp">
                        <small id="emailHelp" class="form-text text-muted">Check your email to get code!</small>
                    </div>
                    <button type="submit">Submit</button>
                </form>
            </div>
            <div class="card-header">
               <a href="/" class="alert alert-info">Back to Home</a>
            </div>
        </div>
    </div>

    <script src="{{asset('js/script.js')}}"></script>
    <!-- Optional JavaScript; choose one of the two! -->
    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
    </script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
</body>

</html>