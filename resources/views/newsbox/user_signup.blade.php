<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>Newsbox - user signup</title>

    <!-- Favicon -->
    <link rel="icon" href="img/core-img/favicon.ico">

    <!-- Font Awesome cdn -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

    <!-- Stylesheet -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/slstyle.css') }}">
</head>

<body>
    <!-- Main Content -->
    <section class="intro-news-area section-padding-100-0 mb-70">
        <div class="container">
            <!-- User signup form start-->
            <div class="container mt-5">
                <div class="row justify-content-center">
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-logo">
                                <a href=""><img src="img/core-img/logo.png" alt=""></a>
                            </div>
                            <div class="card-header">
                                <h3 class="text-center">Signup</h3>
                            </div>
                            <div class="card-body">
                                <form action="#" method="POST">
                                    @csrf
                                    <div class="mb-3">
                                        <label for="Name" class="form-label">Name:</label>
                                        <input type="text" class="form-control" id="Name" maxlength="20" placeholder="Enter name" name="name" oninput="nametextCount()" required>
                                        <span id="nametxtcount"></span>
                                        <p class="validName"></p>
                                    </div>

                                    <div class="mb-3">
                                        <label for="Username" class="form-label">Username:</label>
                                        <input type="text" class="form-control" id="Username" maxlength="20" placeholder="Enter Username" name="username" required>
                                        <p class="validUsername"></p>
                                    </div>

                                    <div class="mb-3">
                                        <label for="email" class="form-label">Email:</label>
                                        <input type="text" class="form-control" id="Email" placeholder="Enter Email" name="email" required>
                                        <p class="validEmail"></p>
                                    </div>

                                    <div class="mb-3">
                                        <label for="password" class="form-label">Password:</label>
                                        <input type="password" class="form-control" id="Password" placeholder="Enter Password" name="password" required>
                                        <p class="validPassword"></p>
                                    </div>

                                    <div class="mb-3">
                                        <label for="gender">Gender:</label>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="gender" id="male" value="male" required>
                                            <label class="form-check-label" for="male">Male</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="gender" id="female" value="female" required>
                                            <label class="form-check-label" for="female">Female</label>
                                        </div>
                                        <p class="Gendervalid"></p>
                                    </div>

                                    <h6 style="color:red;"><h6>
                                    <a href="" type="submit" class="btn btn-primary w-100">Signup</a>
                                    <p>Already have an account? <a href="{{ route('user_login') }}" class="btn-login">Signin</a></p>
                                    <a href="" class="btn btn-primary">Back</a> 
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- User signup form end-->
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
            $("input").blur(function(){
                inputId = $(this).attr('id');
                if($(this).val()=== ''){
                    $(".valid"+inputId).text(inputId +" is Require");
                    $(".valid"+inputId).css({ "color": "red"})
                }
            });
        });

        $("input").focus(function(){
            inputId = $(this).attr('id');
            $(".valid"+inputId).text("");
        });

        // Regular Expression validation
    </script>
</body>
</html>