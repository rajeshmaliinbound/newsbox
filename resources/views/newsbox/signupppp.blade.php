@extends('layouts.master')

<!-- Title -->
@section('title', 'Newsbox -> home')

<!-- css -->
@section('style')
<style>
    .section-padding-100-0 {
        padding-top: 0px;
        padding-bottom: 0;
    }

    .signup-validation {
        color: red;
    }
</style>
@endsection

@section('content')
<!-- Preloader -->
<div class="preloader d-flex align-items-center justify-content-center">
    <div class="lds-ellipsis">
        <div></div>
        <div></div>
        <div></div>
        <div></div>
    </div>
</div>

<!-- ##### Intro News Area Start##### -->
<section class="intro-news-area section-padding-100-0 mb-70">
    <div class="container">
        <!-- User signup form start-->
        <div class="container mt-5">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="text-center">Signup</h3>
                        </div>
                        <div class="card-body">
                            <form action="#" method="POST">
                                @csrf
                                <div class="mb-3">
                                    <label for="Name" class="form-label">Name:</label>
                                    <input type="text" class="form-control" id="Name" maxlength="20" placeholder="Enter name" name="name" oninput="nametextCount()">
                                    <span id="nametxtcount"></span>
                                    <p class="signup-validation"></p>
                                </div>

                                <div class="mb-3">
                                    <label for="Username" class="form-label">Username:</label>
                                    <input type="text" class="form-control" maxlength="20" placeholder="Enter Username" name="username">
                                    <p class="signup-validation"></p>
                                </div>

                                <div class="mb-3">
                                    <label for="email" class="form-label">Email:</label>
                                    <input type="text" class="form-control" placeholder="Enter Email" name="email">
                                    <p class="signup-validation"></p>
                                </div>

                                <div class="mb-3">
                                    <label for="password" class="form-label">Password:</label>
                                    <input type="password" class="form-control" placeholder="Enter Password" name="password">
                                    <p class="signup-validation"></p>
                                </div>

                                <div class="mb-3">
                                    <label for="gender">Gender:</label>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="gender" id="male" value="male">
                                        <label class="form-check-label" for="male">Male</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="gender" id="female" value="female">
                                        <label class="form-check-label" for="female">Female</label>
                                    </div>
                                    <p class="signup-validation"></p>
                                </div>

                                <h6 style="color:red;"><h6>
                                <button type="submit" class="btn btn-primary w-100">Signup</button>
                                <a href="">Back</a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- User signup form start-->
    </div>
</section>
<!-- ##### Intro News Area End ##### -->

<!-- ##### All Javascript Script ##### -->
<!-- jQuery-2.2.4 js -->
<script src="js/jquery/jquery-2.2.4.min.js"></script>
<!-- Popper js -->
<script src="js/bootstrap/popper.min.js"></script>
<!-- Bootstrap js -->
<script src="js/bootstrap/bootstrap.min.js"></script>
<!-- All Plugins js -->
<script src="js/plugins/plugins.js"></script>
<!-- Active js -->
<script src="js/active.js"></script>
@endsection

<!-- script -->
@section('script')
<script>
    $(document).ready(function() {
        $("#user-signup").addClass('activePage');
    });

    // function nametextCount() {
    //     var nametext = document.getElementById('Name');
    //     var count = document.getElementById('nametxtcount');
    //     count.textContent = `${nametext.value.length} / 20`;
    // }
</script>
@endsection