<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>Newsbox - user login</title>

    <!-- Favicon -->
    <link rel="icon" href="img/core-img/favicon.ico">

    <!-- Stylesheet -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/slstyle.css') }}">
</head>

<body>
    <!-- Main Content -->
    <section class="intro-news-area section-padding-100-0 mb-70">
        <div class="container">
            <!-- User signin form start-->
            <div class="container mt-5">
                <div class="row justify-content-center">
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-logo">
                                <a href=""><img src="img/core-img/logo.png" alt=""></a>
                            </div>
                            <div class="card-header">
                                <h3 class="text-center">Login</h3>
                            </div>
                            <div class="card-body">
                                <form action="#" method="POST">
                                    @csrf
                                    <div class="mb-3">
                                        <label for="Username" class="form-label">Username / Email</label>
                                        <input type="text" class="form-control" placeholder="Enter Username" name="username">
                                        <p class="signup-validation">Username / Email field is require</p>
                                    </div>

                                    <div class="mb-3">
                                        <label for="password" class="form-label">Password:</label>
                                        <input type="password" class="form-control" placeholder="Enter Password" name="password">
                                        <p class="signup-validation">Password field is require</p>
                                    </div>

                                    <h6 style="color:red;"><h6>
                                    <button type="submit" class="btn btn-primary w-100">Signin</button>
                                    <p>New user? <a href="{{ route('user_signup') }}" class="btn-login">Signup</a></p>
                                    <a href="" class="btn btn-primary">Back</a>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- User signin form End-->
        </div>
    </section>

    <!-- ##### All Javascript Script ##### -->
    <!-- jQuery-2.2.4 js -->
    <script src="js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="js/bootstrap/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="js/bootstrap/bootstrap.min.js"></script>

    <script>
        $(document).ready(function() {
            $("#user-signup").addClass('activePage');
        });
    </script>

</body>
</html>