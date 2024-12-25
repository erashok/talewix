@extends('layouts.app')

@section('content')
<div class="container">
   
    <section class="hero-section ptb-120 position-relative overflow-hidden" style="background: url('assets/img/shape/color-particles-2.svg')no-repeat center top">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-lg-12 my-4">
                    <div class="hero-content-wrap">
                        <h2 class="fw-bold display-5" data-aos="fade-up"> Contact Us</h2>
                        <p class="lead">If you have any questions, concerns, or requests regarding this Contact Us, please contact us at:</p>
                        <p class="lead"><strong>Email:</strong> support@talewix.com</p>
                        <p class="lead"><strong>Address:</strong>Talewix, Varanasi, India</p>
                        <p class="lead">Thank you for trusting Talewix as your platform for storytelling. Your privacy is our priority.</p>
                    </div>
                </div>
            </div>
        </div>
    </section> 
</div>
<style>
.lead {
    font-size: 1.15rem;
    font-weight: 300;
}
.icon-box i {
    width: 55px;
    height: 55px;
    line-height: 55px;
    text-align: center;
    font-size: 22px;
}
.hero-content-wrap h2 {
    font-size: 30px;
    line-height: 1.2em;
    font-weight: bold;
    color: #0c0c0d;
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