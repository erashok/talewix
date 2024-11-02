@extends('layouts.app')

@section('content')
<div class="container">
    <!--hero section start-->
    <section class="hero-section ptb-120 position-relative overflow-hidden" style="background: url('assets/img/shape/color-particles-2.svg')no-repeat center top">
        <div class="container">
            <div class="row justify-content-center text-center">
                <div class="col-xl-8 col-lg-10 mb-5">
                    <div class="hero-content-wrap">
                        <h1 class="fw-bold display-5" data-aos="fade-up">Single Dashboard for All your Business Needs</h1>
                        <p class="lead" data-aos="fade-up" data-aos-delay="50">Uniquely network business experiences for
                            resource sucking solutions. Dynamically re-engineer cooperative networks via cross-media
                            expertise.</p>
                        <div class="action-btns text-center pt-4" data-aos="fade-up" data-aos-delay="100">
                            <a href="#" class="btn btn-primary me-lg-3 me-sm-3">Buy me Coffee</a>
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
                            <h2>Browse our world class features</h2>
                            <p>
                                Energistically underwhelm progressive metrics via value-added
                                impact magnetic world-class paradigms portals. Pontificate
                                reliable metrics with enabled maintain clicks-and-mortar
                                manufactured.
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
                    <div class="tab-content" id="testimonial-tabContent" data-aos="fade-up" data-aos-delay="100">
                        <div class="tab-pane fade active show" id="testimonial-tab-1" role="tabpanel">
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
                                            <div class="customer-info text-white d-flex align-items-center">
                                                <a href="#" class="video-icon popup-youtube text-decoration-none"><i class="fas fa-play"></i> <span class="text-white ms-2 small"> Watch Video</span></a>
                                            </div>
                                            <div class="position-absolute bg-primary-dark z--1 dot-mask dm-size-16 dm-wh-350 top--40 left--40 top-left"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="testimonial-tab-2" role="tabpanel">
                            <div class="row align-items-center justify-content-between">
                                <div class="col-lg-6 col-md-6">
                                    <div class="testimonial-tab-content mb-5 mb-lg-0 mb-md-0">
                                        <img src="{{ asset('upload/about/quotes-left.svg') }}" alt="testimonial quote" width="65" class="img-fluid mb-32">
                                        <div class="blockquote-title-review mb-4">
                                            <h3 class="mb-0 h4 fw-semi-bold">Embarrassed by the First Version.</h3>
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
                                            <p>Energistically streamline robust architectures whereas distributed
                                                mindshare. Intrinsicly leverage other's backend growth strategies
                                                through 24/365 products. Conveniently pursue revolutionary communities for compelling process improvements. </p>
                                        </blockquote>
                                        <div class="author-info mt-4">
                                            <h6 class="mb-0">Rupan Oberoi</h6>
                                            <span>Web Designer</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-5 col-md-6">
                                    <div class="author-img-wrap pt-5 ps-5">
                                        <div class="testimonial-video-wrapper position-relative">
                                            <img src="{{ asset('upload/about/1.jpg') }}" class="img-fluid rounded-custom shadow-lg" alt="testimonial author">
                                            <div class="customer-info text-white d-flex align-items-center">
                                                <a href="#" class="video-icon popup-youtube text-decoration-none"><i class="fas fa-play"></i> <span class="text-white ms-2 small"> Watch Video</span></a>
                                            </div>
                                            <div class="position-absolute bg-primary-dark z--1 dot-mask dm-size-16 dm-wh-350 top--40 left--40 top-left"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="testimonial-tab-3" role="tabpanel">
                            <div class="row align-items-center justify-content-between">
                                <div class="col-lg-6 col-md-6">
                                    <div class="testimonial-tab-content mb-5 mb-lg-0 mb-md-0">
                                        <img src="{{ asset('upload/about/quotes-left.svg') }}" alt="testimonial quote" width="65" class="img-fluid mb-32">
                                        <div class="blockquote-title-review mb-4">
                                            <h3 class="mb-0 h4 fw-semi-bold">Amazing Quiety template!</h3>
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
                                            <p>
                                                Appropriately negotiate interactive niches rather orchestrate scalable
                                                benefits whereas flexible systems. Objectively grow quality outsourcing
                                                without vertical methods of empowerment. Assertively negotiate just in time innovation after client-centered thinking.
                                            </p>
                                        </blockquote>
                                        <div class="author-info mt-4">
                                            <h6 class="mb-0">Jon Doe</h6>
                                            <span>Software Engineer</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-5 col-md-6">
                                    <div class="author-img-wrap pt-5 ps-5">
                                        <div class="testimonial-video-wrapper position-relative">
                                            <img src="assets/img/testimonial/t-3.jpg" class="img-fluid rounded-custom shadow-lg" alt="testimonial author">
                                            <div class="customer-info text-white d-flex align-items-center">
                                                <a href="http://www.youtube.com/watch?v=hAP2QF--2Dg" class="video-icon popup-youtube text-decoration-none"><i class="fas fa-play"></i> <span class="text-white ms-2 small"> Watch Video</span></a>
                                            </div>
                                            <div class="position-absolute bg-primary-dark z--1 dot-mask dm-size-16 dm-wh-350 top--40 left--40 top-left"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="testimonial-tab-4" role="tabpanel">
                            <div class="row align-items-center justify-content-between">
                                <div class="col-lg-6 col-md-6">
                                    <div class="testimonial-tab-content mb-5 mb-lg-0 mb-md-0">
                                        <img src="{{ asset('upload/about/quotes-left.svg') }}" alt="testimonial quote" width="65" class="img-fluid mb-32">
                                        <div class="blockquote-title-review mb-4">
                                            <h3 class="mb-0 h4 fw-semi-bold">Best Template for SAAS Company!</h3>
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
                                            <p>Competently repurpose cost effective strategic theme areas and customer
                                                directed meta-services. Objectively orchestrate orthogonal initiatives
                                                after enterprise-wide bandwidth. Dynamically generate extensive through cooperative channels time partnerships. </p>
                                        </blockquote>
                                        <div class="author-info mt-4">
                                            <h6 class="mb-0">Hanry Luice</h6>
                                            <span>App Developer</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-5 col-md-6">
                                    <div class="author-img-wrap pt-5 ps-5">
                                        <div class="testimonial-video-wrapper position-relative">
                                            <img src="assets/img/testimonial/t-4.jpg" class="img-fluid rounded-custom shadow-lg" alt="testimonial author">
                                            <div class="customer-info text-white d-flex align-items-center">
                                                <a href="http://www.youtube.com/watch?v=hAP2QF--2Dg" class="video-icon popup-youtube text-decoration-none"><i class="fas fa-play"></i> <span class="text-white ms-2 small"> Watch Video</span></a>
                                            </div>
                                            <div class="position-absolute bg-primary-dark z--1 dot-mask dm-size-16 dm-wh-350 top--40 left--40 top-left"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="testimonial-tab-5" role="tabpanel">
                            <div class="row align-items-center justify-content-between">
                                <div class="col-lg-6 col-md-6">
                                    <div class="testimonial-tab-content mb-5 mb-lg-0 mb-md-0">
                                        <img src="{{ asset('upload/about/quotes-left.svg') }}" alt="testimonial quote" width="65" class="img-fluid mb-32">
                                        <div class="blockquote-title-review mb-4">
                                            <h3 class="mb-0 h4 fw-semi-bold">It is Undeniably Good!</h3>
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
                                            <p>Appropriately disintermediate one-to-one vortals through cross functional
                                                infomediaries. Collaboratively pursue multidisciplinary systems through
                                                stand-alone architectures. Progressively transition covalent architectures whereas vertical applications procrastinate professional.</p>
                                        </blockquote>
                                        <div class="author-info mt-4">
                                            <h6 class="mb-0">Ami Nijai</h6>
                                            <span>Customer Support</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-5 col-md-6">
                                    <div class="author-img-wrap pt-5 ps-5">
                                        <div class="testimonial-video-wrapper position-relative">
                                            <img src="assets/img/testimonial/t-5.jpg" class="img-fluid rounded-custom shadow-lg" alt="testimonial author">
                                            <div class="customer-info text-white d-flex align-items-center">
                                                <a href="http://www.youtube.com/watch?v=hAP2QF--2Dg" class="video-icon popup-youtube text-decoration-none"><i class="fas fa-play"></i> <span class="text-white ms-2 small"> Watch Video</span></a>
                                            </div>
                                            <div class="position-absolute bg-primary-dark z--1 dot-mask dm-size-16 dm-wh-350 top--40 left--40 top-left"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <ul class="nav nav-pills testimonial-tab-menu mt-60" id="testimonial" role="tablist" data-aos="fade-up" data-aos-delay="100">
                        <li class="nav-item" role="presentation">
                            <div class="nav-link d-flex align-items-center rounded-custom border border-light border-2 testimonial-tab-link active" data-bs-toggle="pill" data-bs-target="#testimonial-tab-1" role="tab" aria-selected="false">
                                <div class="testimonial-thumb me-3">
                                    <img src="{{ asset('upload/about/1.jpg') }}" width="50" class="rounded-circle" alt="testimonial thumb">
                                </div>
                                <div class="author-info">
                                    <h6 class="mb-0">Joe Richard</h6>
                                    <span>Visual Designer</span>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item" role="presentation">
                            <div class="nav-link d-flex align-items-center rounded-custom border border-light border-2 testimonial-tab-link" data-bs-toggle="pill" data-bs-target="#testimonial-tab-2" role="tab" aria-selected="false">
                                <div class="testimonial-thumb me-3">
                                    <img src="{{ asset('upload/about/1.jpg') }}" width="50" class="rounded-circle" alt="testimonial thumb">
                                </div>
                                <div class="author-info">
                                    <h6 class="mb-0">Rupan Oberoi</h6>
                                    <span>Web Designer</span>
                                </div>
                            </div>

                        </li>
                        <li class="nav-item" role="presentation">
                            <div class="nav-link d-flex align-items-center rounded-custom border border-light border-2 testimonial-tab-link" data-bs-toggle="pill" data-bs-target="#testimonial-tab-3" role="tab" aria-selected="false">
                                <div class="testimonial-thumb me-3">
                                    <img src="{{ asset('upload/about/1.jpg') }}" width="50" class="rounded-circle" alt="testimonial thumb">
                                </div>
                                <div class="author-info">
                                    <h6 class="mb-0">Jon Doe</h6>
                                    <span>Software Engineer</span>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item" role="presentation">
                            <div class="nav-link d-flex align-items-center rounded-custom border border-light border-2 testimonial-tab-link" data-bs-toggle="pill" data-bs-target="#testimonial-tab-4" role="tab" aria-selected="false">
                                <div class="testimonial-thumb me-3">
                                    <img src="{{ asset('upload/about/1.jpg') }}" width="50" class="rounded-circle" alt="testimonial thumb">
                                </div>
                                <div class="author-info">
                                    <h6 class="mb-0">Hanry Luice</h6>
                                    <span>App Developer</span>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item" role="presentation">
                            <div class="nav-link d-flex align-items-center rounded-custom border border-light border-2 testimonial-tab-link" data-bs-toggle="pill" data-bs-target="#testimonial-tab-5" role="tab" aria-selected="true">
                                <div class="testimonial-thumb me-3">
                                    <img src="{{ asset('upload/about/1.jpg') }}" width="50" class="rounded-circle" alt="testimonial thumb">
                                </div>
                                <div class="author-info">
                                    <h6 class="mb-0">Ami Nijai</h6>
                                    <span>Customer Support</span>
                                </div>
                            </div>
                        </li>
                    </ul>
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