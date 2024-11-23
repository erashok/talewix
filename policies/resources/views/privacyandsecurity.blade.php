@extends('layouts.master')

@section('title', 'Our Privacy and Security Principles - pureblissy')

@section('content')

<div class="pb-section section-sub-nav pb-padding-remove">
    <div class="pb-container">
        <div pb-grid>
            <div class="pb-width-2-3@m">
                <ul class="pb-breadcrumb pb-visible@m">
                    <li><a href="{{url('/')}}">Home</a></li>
                    <li><span>Our Privacy and Security Principles</span></li>
                </ul>
            </div>

        </div>
        <div class="border-top"></div>
    </div>
</div>

<div class="pb-section pb-section-small pb-padding-remove-bottom section-content">
    <div class="pb-container pb-position-relative">
        <div pb-grid>
            <div class="pb-width-3-4@m">
                <article class="pb-article">
                    <h1 class="pb-article-title pb-margin-bottom" id="introduction">Security of your information</h1>
                    <p>We assure you that Pureblissy would not share your personal information with any organizations or any external user of Pureblissy.</p>
                    <div class="entry-content pb-margin-medium-top">



                        <h1 class="pb-article-title pb-margin-bottom" id="collects">We secure your information</h1>
                        <p>Your information is safe with us as we are practicing strong security concerns. We detect certain threats and automatically block those threats before reaching you. Threats like unauthorized access, alteration, or destruction of information may inform you through notifications.</p>
                        
                        <ol class="ol-pretty pb-list-large">
                            <li>We would prevent unauthorized access to our system.</li>
                            <li>We would use encrypted data while transitioning.</li>
                            <li>We would not share your personal information with our employees/ agents. Any fraud is subject to strict contractual confidentiality obligations and may be disciplined or terminated if they fail to meet these rules.</li>
                        </ol>

                        <h1 class="pb-article-title pb-margin-bottom" id="resources">Other useful resources</h1>
                        <p>You can go to the following links and read terms of Pureblissy, some general FAQs , to read Cookies, Articles etc. </p>

                        <p><a href="{{url('/terms-of-service')}}"> Terms of Service</a> By clicking this link, You can read terms and conditions of the Pureblissy page and regarding its product use. We would like you to read it before using our platform. </p>

                        <p><a href="{{url('/privacy-policy')}}">Privacy Policy</a> Pureblissy Privacy Policy page explains what information we collect and why, how we use it, and how to review and update it.</p>

                        <p><a href="{{url('/our-privacy-and-security-principles')}}">Our Privacy and Security Principles</a> The Pureblissy Privacy and Security Principles can help you in data information about how to manage Pureblissy data. </p>
                        <p><a href="{{url('/faq')}}">FAQ</a> FAQs are the general questions that may come around while using our Pureblissy product.</p>

                        <p><a href="{{url('/cookies')}}">Cookies</a> Cookies page explain you about our techniques of storing your data. This is a tool which help us to store your all data.</p>

                    </div>




                </article>
            </div>
            <div class="pb-width-1-4@m">
                <div pb-sticky="offset: 100" class="scrollspy pb-sticky pb-active pb-card pb-card-small pb-card-body pb-padding-remove-top pb-visible@m">

                    <ul class="pb-nav pb-nav-default" pb-scrollspy-nav="closest: li; scroll: true; offset: 30">
                        <li><a href="#introduction">Security of your information</a></li>
                        <li><a href="#collects">We secure your information</a></li>

                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection