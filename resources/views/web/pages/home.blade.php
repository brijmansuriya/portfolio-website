@extends('web.layout.master')
@section('content')
<div role="main" class="main">


    @include('web.includes.slider');

    <div class="container">

        <div class="row text-center pt-3">
            <div class="col-md-10 mx-md-auto">
                <h1 class="word-rotator slide font-weight-bold text-8 mb-3 appear-animation" data-appear-animation="fadeInUpShorter">
                    <span>Porto is </span>
                    <span class="word-rotator-words bg-dark">
                        <b class="is-visible">incredibly</b>
                        <b>especially</b>
                        <b>extremely</b>
                    </span>
                    <span> beautiful and fully responsive.</span>
                </h1>
                <p class="lead appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="300">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce elementum, nulla vel pellentesque consequat, ante nulla hendrerit arcu, ac tincidunt mauris lacus sed leo.
                </p>
            </div>
        </div>

    </div>
    <div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200">
        <div class="home-concept mt-5">
            <div class="container">

                <div class="row text-center">
                    <span class="sun"></span>
                    <span class="cloud"></span>
                    <div class="col-lg-2 ms-lg-auto">
                        <div class="process-image">
                            <img src="img/home/home-concept-item-1.png" alt="" />
                            <strong>Strategy</strong>
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="process-image process-image-on-middle">
                            <img src="img/home/home-concept-item-2.png" alt="" />
                            <strong>Planning</strong>
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="process-image">
                            <img src="img/home/home-concept-item-3.png" alt="" />
                            <strong>Build</strong>
                        </div>
                    </div>
                    <div class="col-lg-4 ms-lg-auto">
                        <div class="project-image">
                            <div id="fcSlideshow" class="fc-slideshow">
                                <ul class="fc-slides">
                                    <li><a href="#"><img class="img-fluid" src="img/projects/project-home-1.jpg" alt="" /></a></li>
                                    <li><a href="#"><img class="img-fluid" src="img/projects/project-home-2.jpg" alt="" /></a></li>
                                    <li><a href="#"><img class="img-fluid" src="img/projects/project-home-3.jpg" alt="" /></a></li>
                                </ul>
                            </div>
                            <strong class="our-work">Our Work</strong>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- RECENT POSTS -->
    <section id="blog" class="section section-height-3 border-0 m-0 appear-animation" data-appear-animation="fadeIn">
        <div class="container pb-3">
            <div class="row mb-3">

            </div>
            <div class="row">
                <div class="row pb-3">
                    <div class="col-lg-8">
                        <h2 class="font-weight-normal text-7">Our <strong class="font-weight-extra-bold">Expertise</strong></h2>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="feature-box feature-box-style-2">
                                    <div class="feature-box-icon">
                                        <i class="icons icon-support text-color-primary"></i>
                                    </div>
                                    <div class="feature-box-info">
                                        <h4 class="font-weight-bold text-4-5 mb-1">Customer Support</h4>
                                        <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit massa</p>
                                    </div>
                                </div>
                                <div class="feature-box feature-box-style-2">
                                    <div class="feature-box-icon">
                                        <i class="icons icon-doc text-color-primary"></i>
                                    </div>
                                    <div class="feature-box-info">
                                        <h4 class="font-weight-bold text-4-5 mb-1">HTML5 / CSS3 / JS</h4>
                                        <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit massa</p>
                                    </div>
                                </div>
                                <div class="feature-box feature-box-style-2">
                                    <div class="feature-box-icon">
                                        <i class="icons icon-social-google text-color-primary"></i>
                                    </div>
                                    <div class="feature-box-info">
                                        <h4 class="font-weight-bold text-4-5 mb-1">500+ Google Fonts</h4>
                                        <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit massa</p>
                                    </div>
                                </div>
                                <div class="feature-box feature-box-style-2">
                                    <div class="feature-box-icon">
                                        <i class="icons icon-pencil text-color-primary"></i>
                                    </div>
                                    <div class="feature-box-info">
                                        <h4 class="font-weight-bold text-4-5 mb-1">Colors</h4>
                                        <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit massa</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="feature-box feature-box-style-2">
                                    <div class="feature-box-icon">
                                        <i class="icons icon-layers text-color-primary"></i>
                                    </div>
                                    <div class="feature-box-info">
                                        <h4 class="font-weight-bold text-4-5 mb-1">Sliders</h4>
                                        <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit massa</p>
                                    </div>
                                </div>
                                <div class="feature-box feature-box-style-2">
                                    <div class="feature-box-icon">
                                        <i class="icons icon-user text-color-primary"></i>
                                    </div>
                                    <div class="feature-box-info">
                                        <h4 class="font-weight-bold text-4-5 mb-1">Icons</h4>
                                        <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit massa</p>
                                    </div>
                                </div>
                                <div class="feature-box feature-box-style-2">
                                    <div class="feature-box-icon">
                                        <i class="icons icon-menu text-color-primary"></i>
                                    </div>
                                    <div class="feature-box-info">
                                        <h4 class="font-weight-bold text-4-5 mb-1">Buttons</h4>
                                        <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit massa</p>
                                    </div>
                                </div>
                                <div class="feature-box feature-box-style-2">
                                    <div class="feature-box-icon">
                                        <i class="icons icon-screen-desktop text-color-primary"></i>
                                    </div>
                                    <div class="feature-box-info">
                                        <h4 class="font-weight-bold text-4-5 mb-1">Lightbox</h4>
                                        <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit massa</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <h2 class="font-weight-normal text-6">and more...</h2>

                        <div class="accordion accordion-modern" id="accordion">
                            <div class="card card-default">
                                <div class="card-header">
                                    <h4 class="card-title m-0">
                                        <a class="accordion-toggle text-color-dark font-weight-bold" data-bs-toggle="collapse" data-bs-parent="#accordion" href="#collapseOne">
                                            <i class="icons icon-diamond text-color-primary"></i>
                                            Creative Websites
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseOne" class="collapse show">
                                    <div class="card-body text-2">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blanorem ipsum dolor sit amet, consecte.</p>
                                        <p class="mb-0">Adipiscing elit phasellus blanit ma... <a href="#" class="d-block text-color-dark font-weight-semibold pt-4">read more <i class="fas fa-angle-right position-relative top-1 ms-1"></i></a></p>
                                    </div>
                                </div>
                            </div>
                            <div class="card card-default">
                                <div class="card-header">
                                    <h4 class="card-title m-0">
                                        <a class="accordion-toggle text-color-dark font-weight-bold" data-bs-toggle="collapse" data-bs-parent="#accordion" href="#collapseTwo">
                                            <i class="icons icon-bubble text-color-primary"></i>
                                            Contact Forms
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseTwo" class="collapse">
                                    <div class="card-body text-2">
                                        <p class="mb-0">Donec tellus massa, tristique sit amet condimentum vel, facilisis quis sapien.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card card-default">
                                <div class="card-header">
                                    <h4 class="card-title m-0">
                                        <a class="accordion-toggle text-color-dark font-weight-bold" data-bs-toggle="collapse" data-bs-parent="#accordion" href="#collapseThree">
                                            <i class="icons icon-grid text-color-primary"></i>
                                            Portfolio Pages
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseThree" class="collapse">
                                    <div class="card-body text-2">
                                        <p class="mb-0">Donec tellus massa, tristique sit amet condimentum vel, facilisis quis sapien.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- RECENT POSTS -->
    <!-- RECENT POSTS -->
    <section id="blog" class="section bg-color section-height-3 border-0 m-0 appear-animation" data-appear-animation="fadeIn">
        <div class="container pb-3">
            <div class="row mb-3">
                <div class="col">
                    <div class="overflow-hidden">
                        <h2 class="text-color-primary font-weight-semibold text-3 line-height-7 positive-ls-2 mb-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="200">RECENT POSTS</h2>
                    </div>
                    <div class="overflow-hidden mb-4">
                        <h3 class="text-color-dark font-weight-bold text-transform-none line-height-3 text-10 pe-1 mb-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="400">Our Blog</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="600">
                    <div class="owl-carousel carousel-shadow-1 show-nav-title custom-dots-style-1 dots-dark" data-plugin-options="{'responsive': {'479': {'items': 1}, '768': {'items': 2}, '979': {'items': 2}, '1199': {'items': 2}, '1440': {'items': 3}}, 'margin': 20, 'loop': false, 'dots': true, 'dotsVerticalOffset': '30px', 'nav': false, 'autoHeight': true}">
                        <div>
                            <article>
                                <div class="card border-0 border-radius-0 p-1">
                                    <div class="card-body p-3 z-index-1">
                                        <a href="#" class="d-block opacity-hover-8">
                                            <img class="card-img-top border-radius-0 mb-2" src="img/demos/blog-1.jpg" alt="Card Image">
                                        </a>

                                        <div class="card-body p-0">
                                            <h4 class="card-title text-5 font-weight-bold pb-2 mb-2"><a class="text-color-dark text-color-hover-primary text-decoration-none" href="#">Lorem ipsum dolor sit amet</a></h4>
                                            <p class="card-text mb-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc viverra lorem , consectetur adipiscing elit...</p>

                                        </div>
                                    </div>
                                </div>
                            </article>
                        </div>
                        <div>
                            <article>
                                <div class="card border-0 border-radius-0 p-1">
                                    <div class="card-body p-3 z-index-1">
                                        <a href="#" class="d-block opacity-hover-8">
                                            <img class="card-img-top border-radius-0 mb-2" src="img/demos/blog-1.jpg" alt="Card Image">
                                        </a>

                                        <div class="card-body p-0">
                                            <h4 class="card-title text-5 font-weight-bold pb-2 mb-2"><a class="text-color-dark text-color-hover-primary text-decoration-none" href="#">Lorem ipsum dolor sit amet</a></h4>
                                            <p class="card-text mb-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc viverra lorem , consectetur adipiscing elit...</p>

                                        </div>
                                    </div>
                                </div>
                            </article>
                        </div>
                        <div>
                            <article>
                                <div class="card border-0 border-radius-0 p-1">
                                    <div class="card-body p-3 z-index-1">
                                        <a href="#" class="d-block opacity-hover-8">
                                            <img class="card-img-top border-radius-0 mb-2" src="img/demos/blog-1.jpg" alt="Card Image">
                                        </a>

                                        <div class="card-body p-0">
                                            <h4 class="card-title text-5 font-weight-bold pb-2 mb-2"><a class="text-color-dark text-color-hover-primary text-decoration-none" href="#">Lorem ipsum dolor sit amet</a></h4>
                                            <p class="card-text mb-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc viverra lorem , consectetur adipiscing elit...</p>

                                        </div>
                                    </div>
                                </div>
                            </article>
                        </div>
                        <div>
                            <article>
                                <div class="card border-0 border-radius-0 p-1">
                                    <div class="card-body p-3 z-index-1">
                                        <a href="#" class="d-block opacity-hover-8">
                                            <img class="card-img-top border-radius-0 mb-2" src="img/demos/blog-1.jpg" alt="Card Image">
                                        </a>

                                        <div class="card-body p-0">
                                            <h4 class="card-title text-5 font-weight-bold pb-2 mb-2"><a class="text-color-dark text-color-hover-primary text-decoration-none" href="#">Lorem ipsum dolor sit amet</a></h4>
                                            <p class="card-text mb-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc viverra lorem , consectetur adipiscing elit...</p>

                                        </div>
                                    </div>
                                </div>
                            </article>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- RECENT POSTS -->

    <section class="section border-0 m-0">
        <div class="container py-3">
            <div class="row">
                <div class="col">
                    <h2 class="text-color-primary font-weight-semibold text-3 positive-ls-2 mb-0">HAPPY CLIENTS</h2>
                    <h3 class="text-color-dark font-weight-bold text-transform-none text-10 mb-5">Testimonials</h3>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="owl-carousel custom-dots-style-1 dots-dark mb-0" data-plugin-options="{'responsive': {'576': {'items': 1}, '768': {'items': 1}, '992': {'items': 2}, '1200': {'items': 2}}, 'autoplay': true, 'autoplayTimeout': 7000, 'loop': true, 'dots': true, 'nav': false}">
                        <div>
                            <div class="custom-testimonial-style-1 testimonial testimonial-with-quotes testimonial-remove-right-quote testimonial-style-2 text-start mb-0">
                                <blockquote class="pt-0">
                                    <p class="text-color-dark font-weight-medium text-5 line-height-6">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus dicta culpa esse eius provident qui animi. </p>
                                    <div class="divider divider-small divider-small-sm ps-4 ms-3">
                                        <hr>
                                    </div>
                                    <div class="testimonial-author ps-4 ms-3">
                                        <p class="alternative-font-4 text-start">
                                            <strong class="font-weight-medium text-color-dark opacity-9">John Albert Doe</strong>
                                        </p>
                                    </div>
                                </blockquote>
                            </div>
                        </div>
                        <div>
                            <div class="custom-testimonial-style-1 testimonial testimonial-with-quotes testimonial-remove-right-quote testimonial-style-2 text-start mb-0">
                                <blockquote class="pt-0">
                                    <p class="text-color-dark font-weight-medium text-5 line-height-6">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus dicta culpa esse eius provident qui animi. </p>
                                    <div class="divider divider-small divider-small-sm ps-4 ms-3">
                                        <hr>
                                    </div>
                                    <div class="testimonial-author ps-4 ms-3">
                                        <p class="alternative-font-4 text-start">
                                            <strong class="font-weight-medium text-color-dark opacity-9">John Albert Doe</strong>
                                        </p>
                                    </div>
                                </blockquote>
                            </div>
                        </div>
                        <div>
                            <div class="custom-testimonial-style-1 testimonial testimonial-with-quotes testimonial-remove-right-quote testimonial-style-2 text-start mb-0">
                                <blockquote class="pt-0">
                                    <p class="text-color-dark font-weight-medium text-5 line-height-6">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus dicta culpa esse eius provident qui animi. </p>
                                    <div class="divider divider-small divider-small-sm ps-4 ms-3">
                                        <hr>
                                    </div>
                                    <div class="testimonial-author ps-4 ms-3">
                                        <p class="alternative-font-4 text-start">
                                            <strong class="font-weight-medium text-color-dark opacity-9">John Albert Doe</strong>
                                        </p>
                                    </div>
                                </blockquote>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div id="examples" class="container py-2">
        <div class="row">
                <div class="col">
                    <hr class="solid my-5">

                    <h4>All The Best You Need</h4>
                </div>
            </div>

            <div class="row align-items-center">
                <div class="col-lg-6 pe-lg-5">

                    <h3 class="font-weight-bold text-8 line-height-2 text-transform-none mb-3">Lorem ipsum dolor sit amet consectetur adipiscing</h3>

                    <p class="text-4 line-height-6 font-weight-medium">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse eu enim vitae risus accumsan volutpat sagittis at libero. Cras quis nunc id diam semper euismod.</p>

                    <a href="#" class="btn btn-primary btn-modern font-weight-bold text-2 py-3 btn-px-5 mt-2">GET STARTED NOW <i class="fas fa-arrow-right ms-2"></i></a>

                </div>
                <div class="col-lg-3" style="padding-top: 120px;">

                    <div class="card border-radius-2 bg-color-light box-shadow-1 mb-4">
                        <div class="card-body p-relative zindex-1">

                            <div class="feature-box feature-box-primary text-center d-flex flex-column align-items-center">
                                <div class="feature-box-icon border-radius-2 mb-3 w-auto h-auto p-4 text-5">
                                    <i class="far fa-heart"></i>
                                </div>
                                <div class="feature-box-info p-0 mt-2">
                                    <h4 class="mb-2">Loved By Customers</h4>
                                    <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing metus elit. Quisque rutrum pellentesque imperdiet.</p>
                                    <a href="#" class="read-more text-color-primary font-weight-semibold mt-2 text-2">Read More <i class="fas fa-angle-right position-relative top-1 ms-1"></i></a>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="card border-radius-2 bg-color-light box-shadow-1 mb-4">
                        <div class="card-body p-relative zindex-1">

                            <div class="feature-box feature-box-primary text-center d-flex flex-column align-items-center">
                                <div class="feature-box-icon border-radius-2 mb-3 w-auto h-auto p-4 text-5">
                                    <i class="far fa-file-alt"></i>
                                </div>
                                <div class="feature-box-info p-0 mt-2">
                                    <h4 class="mb-2">Well Documented</h4>
                                    <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing metus elit. Quisque rutrum pellentesque imperdiet.</p>
                                    <a href="#" class="read-more text-color-primary font-weight-semibold mt-2 text-2">Read More <i class="fas fa-angle-right position-relative top-1 ms-1"></i></a>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>

                <div class="col-lg-3">

                    <div class="card border-radius-2 bg-color-light box-shadow-1 mb-4">
                        <div class="card-body p-relative zindex-1">

                            <div class="feature-box feature-box-primary text-center d-flex flex-column align-items-center">
                                <div class="feature-box-icon border-radius-2 mb-3 w-auto h-auto p-4 text-5">
                                    <i class="far fa-star"></i>
                                </div>
                                <div class="feature-box-info p-0 mt-2">
                                    <h4 class="mb-2">Winner Design</h4>
                                    <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing metus elit. Quisque rutrum pellentesque imperdiet.</p>
                                    <a href="#" class="read-more text-color-primary font-weight-semibold mt-2 text-2">Read More <i class="fas fa-angle-right position-relative top-1 ms-1"></i></a>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="card border-radius-2 bg-color-light box-shadow-1 mb-4">
                        <div class="card-body p-relative zindex-1">

                            <div class="feature-box feature-box-primary text-center d-flex flex-column align-items-center">
                                <div class="feature-box-icon border-radius-2 mb-3 w-auto h-auto p-4 text-5">
                                    <i class="far fa-edit"></i>
                                </div>
                                <div class="feature-box-info p-0 mt-2">
                                    <h4 class="mb-2">Customizable</h4>
                                    <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing metus elit. Quisque rutrum pellentesque imperdiet.</p>
                                    <a href="#" class="read-more text-color-primary font-weight-semibold mt-2 text-2">Read More <i class="fas fa-angle-right position-relative top-1 ms-1"></i></a>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
    </div>



    <section class="section section-custom-map appear-animation lazyload" data-appear-animation="fadeInUpShorter" data-src-bg="img/map.png" style="background-color: transparent; background-position: center 0; background-repeat: no-repeat;">
        <section class="section section-default section-footer">
            <div class="container">
                <div class="row mt-5 appear-animation" data-appear-animation="fadeInUpShorter">

                    <div class="row text-center pt-4">
                        <div class="col">
                            <h2 class="word-rotator slide font-weight-bold text-8 mb-2">
                                <span>We're not the only ones </span>
                                <span class="word-rotator-words bg-primary">
                                    <b class="is-visible">excited</b>
                                    <b>happy</b>
                                </span>
                                <span> about Porto Template...</span>
                            </h2>
                            <h4 class="text-primary lead tall text-4">45,000 CUSTOMERS IN 100 COUNTRIES USE PORTO TEMPLATE. MEET OUR CUSTOMERS.</h4>
                        </div>
                    </div>

                    <div class="row text-center mt-5">
                        <div class="owl-carousel owl-theme carousel-center-active-item" data-plugin-options="{'responsive': {'0': {'items': 1}, '476': {'items': 1}, '768': {'items': 5}, '992': {'items': 7}, '1200': {'items': 7}}, 'autoplay': true, 'autoplayTimeout': 3000, 'dots': false}">
                            <div>
                                <img class="img-fluid" src="img/logos/logo-1.png" alt="">
                            </div>
                            <div>
                                <img class="img-fluid" src="img/logos/logo-2.png" alt="">
                            </div>
                            <div>
                                <img class="img-fluid" src="img/logos/logo-3.png" alt="">
                            </div>
                            <!-- <div>
                                <img class="img-fluid" src="img/logos/logo-4.png" alt="">
                            </div> -->
                            <div>
                                <img class="img-fluid" src="img/logos/logo-5.png" alt="">
                            </div>
                            <div>
                                <img class="img-fluid" src="img/logos/logo-6.png" alt="">
                            </div>
                            <!-- <div>
                                <img class="img-fluid" src="img/logos/logo-4.png" alt="">
                            </div> -->
                            <div>
                                <img class="img-fluid" src="img/logos/logo-2.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </section>
</div>
@endsection