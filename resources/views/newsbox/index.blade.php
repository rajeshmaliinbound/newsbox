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

                        <!-- Intro News Filter -->
                        <div class="intro-news-filter d-flex justify-content-between">
                            <h6>Browsing : News</h6>
                        </div>

                        <div class="tab-content" id="nav-tabContent">
                            <!-- for LETEST Section -->
                            <div class="tab-pane fade show active" id="nav-1" role="tabpanel" aria-labelledby="nav1">
                                <div class="row">
                                    <!-- Single News Area 1 -->
                                    <?php
                                        for($i=1; $i<=6;$i++){ ?>
                                        <div class="col-12 col-sm-6">
                                            <div class="single-blog-post style-2 mb-5">
                                                <!-- Blog Thumbnail -->
                                                <div class="blog-thumbnail">
                                                    <a href="#"><img src="img/bg-img/14.jpg" alt=""></a>
                                                    <span style="font-weight: 600; color: red;" class="post-date">Catagory</span>
                                                </div>

                                                <!-- Blog Content -->
                                                <div class="blog-content">
                                                    <span class="post-date">June 20, 2018</span>
                                                    <a href="#" class="post-title">Elon Musk: Tesla worker admitted to sabotage</a>
                                                </div>
                                            </div>
                                        </div>
                                    <?php }
                                    ?>

                                    <!-- <div class="col-12">
                                        <div class="load-more-button text-center">
                                            <a href="#" class="btn newsbox-btn">Load More</a>
                                        </div>
                                    </div> -->
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
        $(document).ready(function(){
            $("#homepage").addClass('activePage');
        });
    </script>
@endsection