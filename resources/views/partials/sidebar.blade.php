<div class="col-12 col-sm-9 col-md-6 col-lg-4">
    <div class="sidebar-area">
        <!-- Latest News Widget -->
        <div class="single-widget-area news-widget mb-30">
            <h4>Top 10 Latest News</h4>

            <!-- Single News Area -->
             <?php
             for($i=1; $i<=10;$i++){ ?>
             <div class="single-blog-post d-flex style-4 mb-30">
                <!-- Blog Thumbnail -->
                <div class="blog-thumbnail">
                    <a href="#"><img src="img/bg-img/1.jpg" alt=""></a>
                </div>

                <!-- Blog Content -->
                <div class="blog-content">
                    <span style="font-weight: 600; color: blue;" class="post-date">Catagory</span><br>
                    <span class="post-date">June 20, 2018</span>
                    <a href="#" class="post-title">Nearly a quarter have no emergency savings</a>
                </div>
            </div>
             <?php }
             ?>
        </div>
    </div>
</div>