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
                                <button type="submit" class="btn btn-primary w-100">Login</button>
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
</script>
@endsection