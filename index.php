<?php
 
  include('include/header.php')

?>

<div class="latest--news">
    <div class="container">
        <div class="d-lg-flex align-items-center">
            <div class="latest-title d-flex align-items-center text-nowrap text-white text-uppercase">
                <i class="fa-solid fa-bolt"></i> Latest News
            </div>
            <div class="news-updates-list overflow-hidden mt-2 mb-2" data-marquee="true">
                <ul class="nav">
                    <li><a class="text-white"
                            href="iconschool/news_view/food-drive-collects-record-donations-for-local-shelter.html"><strong>01.</strong>
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry - <span
                                class='date-text'>10.Dec.2025</span></a></li>
                    <li><a class="text-white"
                            href="iconschool/news_view/mathletes-victorious-at-inter-school-competition.html"><strong>02.</strong>
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry - <span
                                class='date-text'>19.Nov.2025</span></a></li>
                    <li><a class="text-white"
                            href="iconschool/news_view/student-council-starts-new-mentorship-program.html"><strong>03.</strong>
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry - <span
                                class='date-text'>20.Aug.2025</span></a></li>
                    <li><a class="text-white"
                            href="iconschool/news_view/art-show-brings-color-to-campus-2025.html"><strong>04.</strong>
                            Art Show Brings Color to Campus - 2025 - <span class='date-text'>16.Jul.2025</span></a></li>
                    <li><a class="text-white"
                            href="iconschool/news_view/parent-teacher-conferences-scheduled-for-october-20th.html"><strong>05.</strong>
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry - <span
                                class='date-text'>20.Oct.2025</span></a></li>
                    <li><a class="text-white"
                            href="iconschool/news_view/annual-school-fair-a-resounding-success.html"><strong>06.</strong>
                            Annual School Fair a Resounding Success! - <span class='date-text'>19.Jun.2025</span></a>
                    </li>
                </ul>
            </div>
            <div class="current-date text-nowrap text-white">
                <span class="date-now"><i class="fa-regular fa-clock"></i> 13.Jul.2026</span>
            </div>
        </div>
    </div>
</div>
<!-- Main Slider Section Starts -->
<section class="main-slider">
    <div class="container-fluid">
        <ul class="main-slider-carousel owl-carousel owl-theme slide-nav">
            <li class="slider-wrapper">
                <div class="image" style="background-image: url(uploads/frontend/slider/home-slider-1592582779.jpg)">
                </div>
                <div class="slider-caption c-left">
                    <div class="container">
                        <div class="wrap-caption">
                            <h1>Welcome To <span>Anglo Arabic School</span></h1>
                            <div class="text center">Lorem Ipsum is simply dummy text printer took a galley of type and
                                scrambled it to make a type specimen book.</div>

                        </div>
                    </div>
                </div>
                <div class="slide-overlay"></div>
            </li>
            <li class="slider-wrapper">
                <div class="image" style="background-image: url(uploads/frontend/slider/home-slider-1592582805.jpg)">
                </div>
                <div class="slider-caption c-left">
                    <div class="container">
                        <div class="wrap-caption">
                            <h1>Smart <span>Class</span> Facility</h1>
                            <div class="text center">Lorem Ipsum is simply dummy text printer took a galley of type and
                                scrambled it to make a type specimen book.</div>

                        </div>
                    </div>
                </div>
                <div class="slide-overlay"></div>
            </li>
        </ul>
    </div>
</section>
<div class="container px-md-0 main-container">
    <div class="container gallery-album px-md-0 main-container">
        <ul id="doctors-filter" class="list-unstyled list-inline">
            <!-- <li class="list-inline-item"><a href="#" class="active" data-group="all">All</a></li> -->
            <li class="list-inline-item"><a href="#" class="active" data-group="1">Achievements</a></li>
            <li class="list-inline-item"><a href="#" data-group="2">Student's Life</a></li>
            <li class="list-inline-item"><a href="#" data-group="3">Sports</a></li>
        </ul>
        <ul id="doctors-grid" class="row grid">
            <!-- <li class="doctors-grid col-lg-4 col-md-6" data-groups='["all", "1"]'>
                <div class="bio-box">
                    <div class="gallery-album-item">
                        <div class="gallery-album-img">
                            <img src="uploads/frontend/gallery/gallery-1619150843.jpg" alt="Image">
                        </div>
                        <div class="gallery-album-title">
                            <h3>Celebration</h3>
                            <a class="btn" href="gallery/gallery_view/celebration.html"><i
                                    class="fas fa-photo-video"></i></a>
                        </div>
                        <div class="gallery-album-meta">
                            <p>By<a href="#">Jennifer Adams</a></p>
                        </div>
                        <div class="gallery-album-text">
                            <p>Lorem ipsum dolor sit amet elit. Phasellus nec pretium mi.Lorem ipsum dolor .</p>
                        </div>
                    </div>
                </div>
            </li> -->
            <li class="doctors-grid col-lg-4 col-md-6" data-groups='["1"]'>
                <div class="bio-box">
                    <div class="gallery-album-item">
                        <div class="gallery-album-img">
                            <img src="uploads/frontend/gallery/gallery-1619151140.jpg" alt="Image">
                        </div>
                        <div class="gallery-album-title">
                            <h3>Pre Primary</h3>
                            <a class="btn" href="gallery/gallery_view/pre-primary.html"><i
                                    class="fas fa-photo-video"></i></a>
                        </div>
                        <div class="gallery-album-meta">
                            <p>By<a href="#">Jennifer Adams</a></p>
                        </div>
                        <div class="gallery-album-text">
                            <p>Lorem ipsum dolor sit amet elit. Phasellus nec pretium mi.Lorem ipsum dolor .</p>
                        </div>
                    </div>
                </div>
            </li>
            <li class="doctors-grid col-lg-4 col-md-6" data-groups='["2"]'>
                <div class="bio-box">
                    <div class="gallery-album-item">
                        <div class="gallery-album-img">
                            <img src="uploads/frontend/gallery/defualt.png" alt="Image">
                        </div>
                        <div class="gallery-album-title">
                            <h3>Recreation Centre</h3>
                            <a class="btn" href="gallery/gallery_view/recreation-centre.html"><i
                                    class="fas fa-photo-video"></i></a>
                        </div>
                        <div class="gallery-album-meta">
                            <p>By<a href="#">Jennifer Adams</a></p>

                        </div>
                        <div class="gallery-album-text">
                            <p>Lorem ipsum dolor sit amet elit. Phasellus nec pretium mi.Lorem ipsum dolor .</p>
                        </div>
                    </div>
                </div>
            </li>
            <li class="doctors-grid col-lg-4 col-md-6" data-groups='["3"]'>
                <div class="bio-box">
                    <div class="gallery-album-item">
                        <div class="gallery-album-img">
                            <img src="uploads/frontend/gallery/defualt.png" alt="Image">
                        </div>
                        <div class="gallery-album-title">
                            <h3>Recreation Centre</h3>
                            <a class="btn" href="gallery/gallery_view/recreation-centre.html"><i
                                    class="fas fa-photo-video"></i></a>
                        </div>
                        <div class="gallery-album-meta">
                            <p>By<a href="#">Jennifer Adams</a></p>

                        </div>
                        <div class="gallery-album-text">
                            <p>Lorem ipsum dolor sit amet elit. Phasellus nec pretium mi.Lorem ipsum dolor .</p>
                        </div>
                    </div>
                </div>
            </li>
        </ul>
    </div>
    <!-- Features Section Starts -->
    <!-- Welcome Section Starts -->
    <section class="welcome-area">
        <div class="row">
            <div class="col-md-6 col-sm-12">
                <h2 class="main-heading1 lite" style="color: #000">Welcome To Education</h2>
                <div class="sec-title style-two mb-tt">
                    <h2 class="main-heading2">We will give you future</h2>
                    <span class="decor"><span class="inner"></span></span>
                </div>
                It is a long established fact that a reader will be distracted by the readable content of a page when
                looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution
                of letters, as opposed to using content.<br />
                <br />
                Making it look like readable English. Many desktop publishing packages and web page editors now use
                Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites
                still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes
                on purpose (injected humour and the like).
            </div>
            <div class="col-md-6 col-sm-12">
                <div class="wel-img">
                    <img src="uploads/frontend/home_page/wellcome18f90.png?src=1783942116" alt="image"
                        class="img-fluid">
                </div>
            </div>
        </div>
    </section>
</div>

<!-- Teachers Section Starts -->
<section class="featured-doctors" style="background-image: url(uploads/frontend/home_page/featured-parallax.jpg);">
    <div class="container px-md-0">
        <div class="sec-title text-center">
            <h2 style="color: #fff">Experience Teachers Team</h2>
            <p style="color: #fff">Making it look like readable English. Many desktop publishing packages and web page
                editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover
                many web sites still in their infancy. Various versions have evolved over the years, sometimes by
                accident.</p>
            <span class="decor"><span class="inner"></span></span>
        </div>
        <div class="row">
            <div class="col-lg-3 col-sm-6">
                <div class="bio-box">
                    <div class="profile-img">
                        <div class="dlab-border-left"></div>
                        <div class="dlab-border-right"></div>
                        <div class="dlab-media">
                            <img src="uploads/images/staff/dummy-01.jpg" alt="English"
                                class="img-fluid img-center-sm img-center-xs">
                        </div>

                    </div>
                    <div class="txt-holder txt-overflow">
                        <h5>Summer Simpson</h5>
                        <p class="designation">Science</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="bio-box">
                    <div class="profile-img">
                        <div class="dlab-border-left"></div>
                        <div class="dlab-border-right"></div>
                        <div class="dlab-media">
                            <img src="uploads/images/staff/dummy-01.jpg" alt="Teacher"
                                class="img-fluid img-center-sm img-center-xs">
                        </div>

                    </div>
                    <div class="txt-holder txt-overflow">
                        <h5>Jose McKinley</h5>
                        <p class="designation">General</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="bio-box">
                    <div class="profile-img">
                        <div class="dlab-border-left"></div>
                        <div class="dlab-border-right"></div>
                        <div class="dlab-media">
                            <img src="uploads/images/staff/dummy-01.jpg" alt="Teacher"
                                class="img-fluid img-center-sm img-center-xs">
                        </div>

                    </div>
                    <div class="txt-holder txt-overflow">
                        <h5>Nannie Henriques</h5>
                        <p class="designation">Science</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="bio-box">
                    <div class="profile-img">
                        <div class="dlab-border-left"></div>
                        <div class="dlab-border-right"></div>
                        <div class="dlab-media">
                            <img src="uploads/images/staff/dummy-01.jpg" alt="Science"
                                class="img-fluid img-center-sm img-center-xs">
                        </div>

                    </div>
                    <div class="txt-holder txt-overflow">
                        <h5>Tamica Halcomb</h5>
                        <p class="designation">Science</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Testimonial Section Starts -->
<section class="testimonial-wrapper">
    <div class="container px-md-0">
        <div class="sec-title text-center">
            <h2>WHAT PEOPLE SAYS</h2>
            <p>Fusce sem dolor, interdum in efficitur at, faucibus nec lorem. Sed nec molestie justo.</p>
            <span class="decor"><span class="inner"></span></span>
        </div>
        <div class="testimonial-carousel owl-carousel owl-theme">
            <div class="single-testimonial-style">
                <div class="inner-content">
                    <div class="review-box">
                        <ul>
                            <li><i class="fas fa-star"></i></li>
                            <li><i class="fas fa-star"></i></li>
                            <li><i class="fas fa-star"></i></li>
                            <li><i class="fas fa-star"></i></li>
                            <li><i class="fas fa-star"></i></li>
                        </ul>
                    </div>
                    <div class="text-box">
                        <p>&ldquo;Intexure have done an excellent job presenting the analysis & insights. I am confident
                            in saying have helped encounter is to be welcomed and every pain avoided&rdquo;..</p>
                    </div>
                    <div class="client-info">
                        <div class="image">
                            <img src="uploads/app_image/defualt.png" alt="Awesome Image">
                        </div>
                        <div class="title">
                            <h3>Ellie Hepsie</h3>
                            <span>Los Angeles</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="single-testimonial-style">
                <div class="inner-content">
                    <div class="review-box">
                        <ul>
                            <li><i class="fas fa-star"></i></li>
                            <li><i class="fas fa-star"></i></li>
                            <li><i class="fas fa-star"></i></li>
                            <li><i class="fas fa-star"></i></li>
                            <li><i class="fas fa-star"></i></li>
                        </ul>
                    </div>
                    <div class="text-box">
                        <p>&ldquo;Intexure have done an excellent job presenting the analysis & insights. I am confident
                            in saying have helped encounter is to be welcomed and every pain avoided&rdquo;..</p>
                    </div>
                    <div class="client-info">
                        <div class="image">
                            <img src="uploads/app_image/defualt.png" alt="Awesome Image">
                        </div>
                        <div class="title">
                            <h3>Joy Kaylynn</h3>
                            <span>Los Angeles</span>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<!-- Statistics Section Starts -->
<section class="counters-wrapper" style="background-image: url(uploads/frontend/home_page/counter-parallax1.jpg);">
    <div class="container px-md-0">
        <div class="sec-title text-center">
            <h2 style="color: #fff">20 years experience in the field of study</h2>
            <p style="color: #fff">Lorem Ipsum is simply dummy text printer took a galley of type and scrambled it to
                make a type specimen book.</p>
            <span class="decor"><span class="inner"></span></span>
        </div>
        <div class="row">
            <!-- widget count item -->
            <div class="col-lg-3 col-sm-6 col-xs-6 text-center">
                <div class="counters-item">
                    <i class="fas fa-user-tie"></i>
                    <div style="color: #fff">
                        <span class="counter" data-count="4">0</span>
                    </div>
                    <h3 style="color: #fff">Certified Teachers</h3>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 col-xs-6 text-center">
                <div class="counters-item">
                    <i class="fas fa-user-graduate"></i>
                    <div style="color: #fff">
                        <span class="counter" data-count="8">0</span>
                    </div>
                    <h3 style="color: #fff">Students Enrolled</h3>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 col-xs-6 text-center">
                <div class="counters-item">
                    <i class="far fa-file-video"></i>
                    <div style="color: #fff">
                        <span class="counter" data-count="45">0</span>
                    </div>
                    <h3 style="color: #fff">Live Classes</h3>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 col-xs-6 text-center">
                <div class="counters-item">
                    <i class="fas fa-school"></i>
                    <div style="color: #fff">
                        <span class="counter" data-count="2">0</span>
                    </div>
                    <h3 style="color: #fff">Branch</h3>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="testimonial-wrapper">
    <div class="container px-md-0">
    </div>
</section>
<?php
 
  include('include/footer.php')

?>