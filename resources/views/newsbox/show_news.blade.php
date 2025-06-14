@extends('layouts.master')

<!-- Title -->
@section('title', 'Newsbox -> home')

<!-- css -->
@section('style')
<style>
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

<!-- ##### Intro News Area Start ##### -->
<section class="intro-news-area section-padding-100-0 mb-70">
    <div class="container">
        <!-- All the news sections start-->
        <div class="row justify-content-center">
            <!-- Intro News Tabs Area -->
            <div class="col-12 col-lg-8">
                <div class="intro-news-tab">
                    <div class="tab-content" id="nav-tabContent">
                        <!-- for LETEST Section -->
                        <div class="tab-pane fade show active" id="nav-1" role="tabpanel" aria-labelledby="nav1">
                            <div class="row">
                                <!-- Single News Area -->
                                <div class="col-12">
                                    <div class="single-blog-post style-2 mb-5">
                                        <!-- Blog Thumbnail -->
                                        <div class="blog-thumbnail">
                                            <a href="#"><img src="img/bg-img/24.jpg" alt=""></a>
                                            <span style="font-weight: 600; color: red;" class="post-date">Catagory</span>
                                        </div>

                                        <!-- Blog Content -->
                                        <div class="blog-content">
                                            <span class="post-date">June 20, 2018</span>
                                            <a href="#" class="post-title">Elon Musk: Tesla worker admitted to sabotage</a>
                                            <a href="#" class="post-author mb-30">By Michael Smith</a>
                                            <p>Nullam lacinia ex eleifend orci porttitor,
                                                <strong>suscipit interdum</strong>
                                                augue condimentum. Etiam pretium turpis eget nibh
                                                <strong>laoreet iaculis</strong>.
                                                Proin ac urna at lectus volutpat
                                                <strong>lobortis</strong>.
                                                Vestibulum venenatis iaculis diam
                                                <strong>vitae lobortis</strong>.
                                                Donec tincidunt viverra elit, sed consectetur
                                                est pr etium ac. <strong>Mauris nec mauris</strong> tellus.

                                                Nullam lacinia ex eleifend orci porttitor,
                                                <strong>suscipit interdum</strong>
                                                augue condimentum. Etiam pretium turpis eget nibh
                                                <strong>laoreet iaculis</strong>.
                                                Proin ac urna at lectus volutpat
                                                <strong>lobortis</strong>.
                                                Vestibulum venenatis iaculis diam
                                                <strong>vitae lobortis</strong>.
                                                Donec tincidunt viverra elit, sed consectetur
                                                est pr etium ac. <strong>Mauris nec mauris</strong> tellus.

                                                Nullam lacinia ex eleifend orci porttitor,
                                                <strong>suscipit interdum</strong>
                                                augue condimentum. Etiam pretium turpis eget nibh
                                                <strong>laoreet iaculis</strong>.
                                                Proin ac urna at lectus volutpat
                                                <strong>lobortis</strong>.
                                                Vestibulum venenatis iaculis diam
                                                <strong>vitae lobortis</strong>.
                                                Donec tincidunt viverra elit, sed consectetur
                                                est pr etium ac. <strong>Mauris nec mauris</strong> tellus.
                                            </p>
                                            <p>Nullam lacinia ex eleifend orci porttitor, suscipit interdum augue condimentum. Etiam pretium turpis eget nibh laoreet iaculis. Proin ac urna at lectus volutpat lobortis. Vestibulum venenatis iaculis diam vitae lobortis. Donec tincidunt viverra elit, sed consectetur est pr etium ac.</p>
                                            <p>Mauris nec mauris tellus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed elit nisl, faucibus eu tempus vel, imperdiet at felis. Sed sed nibh et augue feugiat pharetra. Praesent ultrices nec tortor et gravida. Sed id rhoncus est. Interdum et malesuada fames ac ante ipsum primis in faucibus. Curabitur vitae luctus turpis. Maecenas diam ex, mattis vel dolor ut, fermentum consectetur ex. </p>
                                            <h5 class="mb-30">A good news after all</h5>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed elit nisl, faucibus eu tempus vel, imperdiet at felis. Sed sed nibh et augue feugiat pharetra. Praesent ultrices nec tortor et gravida. Sed id rhoncus est. Interdum et malesuada fames ac ante ipsum primis in faucibus. Curabitur vitae luctus turpis. Maecenas diam ex, mattis vel dolor ut, fermentum consectetur ex.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Sidebar Widget -->
            @include('partials.sidebar')

        </div>
        <!-- All the news sections End-->
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
        // $("#homepage").addClass('activePage');
    });
</script>
@endsection