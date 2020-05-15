<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Login Page | Obama - Responsive admin template.</title>
    <link rel="shortcut icon" href="img/favicon.ico">
    <!--STYLESHEET-->
    <!--=================================================-->
    <!--Roboto Slab Font [ OPTIONAL ] -->
    <link href="{{ url('backend/http://fonts.googleapis.com/css?family=Roboto+Slab:400,300,100,700') }}" rel="stylesheet">
    <link href="{{ url('backend/http://fonts.googleapis.com/css?family=Roboto:500,400italic,100,700italic,300,700,500italic,400') }}" rel="stylesheet">
    <!--Bootstrap Stylesheet [ REQUIRED ]-->
    <link href="{{ url('backend/css/bootstrap.min.css') }}" rel="stylesheet">
    <!--Jasmine Stylesheet [ REQUIRED ]-->
    <link href="{{ url('backend/css/style.css') }}" rel="stylesheet">
    <!--SCRIPT-->
    <!--=================================================-->
</head>
<body>
    <div id="container">
        <!-- LOGIN FORM -->
        <!--===================================================-->
        <div class="lock-wrapper">
            <div class="row">
                <div class="col-xs-12">
                    <div class="lock-box">
                        <div class="main">
                            <h3>Please Log In, or <a href="#">Sign Up</a></h3>
                            <!--- start session message---------- -->
                            @if(count($errors)> 0)
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach($errors->all() as $error)
                                            <li>{{$error}}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            @if(session()->has('msg'))
                                <div  class="alert alert-success" >
                                    {{session()->get('msg')}}
                                </div>
                            @endif
                            <!-- End session message ---------------->
                            <form action="/admin/login" method="post">
                            @csrf
                                <div class="form-group">
                                    <label for="inputUsernameEmail">E-mail</label>
                                    <input type="email" class="form-control" name="email" id="inputUsernameEmail">
                                </div>
                                <div class="form-group">
                                    <a class="pull-right" href="#">Forgot password?</a>
                                    <label for="inputPassword">Password</label>
                                    <input type="password" class="form-control" name="password" id="inputPassword">
                                </div>       
                                <div class="pull-left pad-btm">
                                    <div class="checkbox">
                                        <label class="form-checkbox form-icon form-text">
                                            <input type="checkbox"> Remember Me
                                        </label>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn btn-primary pull-right">
                                    Log In
                                </button>
                            </form>

                        </div>

                    </div>
                </div>

            </div>
        </div>
        <!--===================================================-->
        <!-- END OF CONTAINER -->
        <!--JAVASCRIPT-->
        <!--=================================================-->
        <script src="{{ url('backend/js/jquery-2.1.1.min.js') }}"></script>
        <script src="{{ url('backend/js/bootstrap.min.js') }}"></script>
</body>

</html>