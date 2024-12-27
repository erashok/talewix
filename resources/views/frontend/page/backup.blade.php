@extends('layouts.app')

@section('content')
<div class="container">
    <!--hero section start-->
    <section class="hero-section ptb-120 position-relative overflow-hidden" style="background: url('assets/img/shape/color-particles-2.svg')no-repeat center top">
        <div class="container">
            <div class="row justify-content-center text-center">
                <div class="col-xl-8 col-lg-10 my-5">
                    <div class="hero-content-wrap">
                        <h1 class="fw-bold display-5" data-aos="fade-up">Find where your private info is exposed — and take it back</h1>
                        <p class="lead" data-aos="fade-up" data-aos-delay="50">We scan data breaches to see if your data has been leaked and give you steps to fix it.</p>
                        <div class="action-btns text-center pt-4" data-aos="fade-up" data-aos-delay="100">
                            <a href="#" class="btn tw-btn-secondary me-lg-3 me-sm-3"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-heart-fill" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314"/>
                                </svg> Donate Now
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="bg-dark position-absolute bottom-0 h-25 bottom-0 left-0 right-0 z--1 py-5"></div>
    </section> <!--hero section end-->
    <!--feature section start-->
    <section class="image-feature ptb-120">
        <div class="container">
            <div class="row justify-content-between align-items-center">
                <div class="col-lg-5 col-12">
                    <div class="feature-img-content">
                        <div class="section-heading" data-aos="fade-up">
                            <h2>We’ll help you fix your exposures</h2>
                                <p>Our mission is to put control of your personal data back in your hands. We’ll help you resolve data breaches and keep your info private — and we’ll respect your privacy in the process.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-12">
                    <div class="feature-img-holder p-lg-5 pt-3">
                        <div class="p-lg-5 p-3 bg-danger-soft position-relative rounded-custom d-block feature-img-wrap">
                            <div class="position-relative">
                                <img src="{{ asset('upload/about/widget-5.png') }}" class="img-fluid rounded-custom position-relative" alt="feature-image" data-aos="fade-up" data-aos-delay="50" />
                               </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="image-feature pt-60 pb-120">
        <div class="container">
            <div class="row justify-content-between align-items-center">
                <div class="col-lg-5 col-12 order-lg-1">
                    <div class="feature-img-content">
                        <div class="section-heading" data-aos="fade-up">
                            <h2>Measure your efficiency for business</h2>
                            <p>
                                Reliable metrics with enabled infomediaries. Holisticly maintain
                                clicks-and-mortar manufactured products empower viral customer
                                service through resource supply pandemic collaboration.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-12 order-lg-0">
                    <div class="feature-img-holder p-lg-5 pt-3">
                        <div class="bg-primary-soft p-lg-5 p-3 rounded-custom position-relative d-block feature-img-wrap">
                            <div class="position-relative">
                                <img src="{{ asset('upload/about/widget-5.png') }}" class="img-fluid rounded-custom position-relative" alt="feature-image" data-aos="fade-up" data-aos-delay="50" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="image-feature pt-60 pb-120">
        <div class="container">
            <div class="row justify-content-between align-items-center">
                <div class="col-lg-5 col-12">
                    <div class="feature-img-content">
                        <div class="section-heading" data-aos="fade-up">
                            <h2>We create software & digital product</h2>
                            <p>
                                Credibly deliver out-of-the-box benefits through just in time best
                                practices. Globally orchestrate holistic communities without
                                visualize performance based premium alignments.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-12">
                    <div class="feature-img-holder p-lg-5 pb-3">
                        <div class="bg-danger-soft p-lg-5 p-3 rounded-custom position-relative d-block feature-img-wrap">
                            <div class="position-relative">
                                <img src="{{ asset('upload/about/widget-5.png') }}" class="img-fluid rounded-custom position-relative" alt="feature-image" data-aos="fade-up" data-aos-delay="50" />
                               
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--feature section end-->
    <!--customer review tab section start-->
    <section class="customer-review-tab ptb-120  bg-light-subtle position-relative z-2">
        <div class="container">
            <div class="row justify-content-center align-content-center">
                <div class="col-md-10 col-lg-6">
                    <div class="section-heading text-center" data-aos="fade-up">
                        <h2>What They Say About Us</h2>
                        <p>Uniquely promote adaptive quality vectors rather than stand-alone e-markets. pontificate alternative architectures whereas iterate.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                     <div class="row align-items-center justify-content-between">
                                <div class="col-lg-6 col-md-6">
                                    <div class="testimonial-tab-content mb-5 mb-lg-0 mb-md-0">
                                        <img src="{{ asset('upload/about/quotes-left.svg') }}" alt="testimonial quote" width="65" class="img-fluid mb-32">
                                        <div class="blockquote-title-review mb-4">
                                            <h3 class="mb-0 h4 fw-semi-bold">The Best Template You Got to Have it!</h3>
                                            <ul class="review-rate mb-0 list-unstyled list-inline">
                                                <li class="list-inline-item"><i class="fas fa-star text-warning"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fas fa-star text-warning"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fas fa-star text-warning"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fas fa-star text-warning"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fas fa-star text-warning"></i>
                                                </li>
                                            </ul>
                                        </div>

                                        <blockquote class="blockquote">
                                            <p>Globally network long-term high-impact schemas vis-a-vis distinctive
                                                e-commerce
                                                cross-media infrastructures rather than ethical sticky alignments rather
                                                than global. Plagiarize technically sound total linkage for leveraged value media web-readiness and premium processes.</p>
                                        </blockquote>
                                        <div class="author-info mt-4">
                                            <h6 class="mb-0">Joe Richard</h6>
                                            <span>Visual Designer</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-5 col-md-6">
                                    <div class="author-img-wrap pt-5 ps-5">
                                        <div class="testimonial-video-wrapper position-relative">
                                            <img src="{{ asset('upload/about/widget-5.png') }}" class="img-fluid rounded-custom shadow-lg" alt="testimonial author">
                                        </div>
                                    </div>
                                </div>
                            </div>
                </div>
            </div>
        </div>
    </section> <!--customer review tab section end-->

</div>
<style>

.icon-box i {
    width: 55px;
    height: 55px;
    line-height: 55px;
    text-align: center;
    font-size: 22px;
}
.about-icon-box img {
    width: 60px;
    height: 60px;
    line-height: 60px;
    padding: 15px;
    border-radius: 50%;
    background-color: #fff;
    border-color: #fff;
    -webkit-box-shadow: 0 10px 20px 0 rgba(0, 0, 0, .1);
    box-shadow: 0 10px 20px 0 rgba(0, 0, 0, .1)
}

.about-icon-box h5,
.about-icon-box .h5 {
    font-size: 18px;
    font-weight: 500
}

.service-tabs .nav-pills {
    border-bottom: 2px solid var(--bs-secondary-light)
}

.service-tabs .nav-pills .nav-link {
    font-weight: 600;
    font-size: 18px;
    padding: 0;
    padding-bottom: 20px;
    color: #fff;
    position: relative
}

@media(min-width: 767px)and (max-width: 992px) {
    .service-tabs .nav-pills {
        border-bottom: 0
    }
}

@media(min-width: 320px)and (max-width: 767px) {
    .service-tabs .nav-pills {
        border-bottom: 0
    }
}

.service-tabs .nav-pills .nav-link.active,
.service-tabs .nav-pills .show>.nav-link {
    color: var(--bs-white);
    background: none;
    border-radius: 0
}

.service-tabs .nav-pills .nav-link.active::after {
    position: absolute;
    content: "";
    bottom: -2px;
    height: 2px;
    width: 100%;
    left: 0;
    background-color: var(--bs-primary)
}

.tab-right-content h2,
.tab-right-content .h2 {
    font-size: 34px
}

.tab-right-content p {
    font-size: 18px
}

.tab-right-content ul li span {
    padding-left: 10px
}

.tab-button .nav-pills .nav-link {
    margin: 0 15px;
    font-weight: 600;
    color: var(--body-color);
    padding: 0;
    border-bottom: 2px solid rgba(0, 0, 0, 0);
    -webkit-transition: all .3s;
    transition: all .3s
}

.tab-button .nav-pills .nav-link.active,
.tab-button .nav-pills .show>.nav-link {
    color: var(--bs-primary);
    background: none;
    border-radius: 0;
    border-bottom: 2px solid var(--bs-primary);
    -webkit-transition: all .3s;
    transition: all .3s
}


</style>

@endsection

DB_DATABASE=u372123786_talewix
DB_USERNAME=u372123786_talewix
DB_PASSWORD=U^~mTD|7u


Ashok@Verma@#1994#;
