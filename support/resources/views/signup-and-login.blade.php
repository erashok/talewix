@extends('layouts.master')

@section('title', 'Our Privacy and Security Principles - pureblissy')

@section('content')

    <div class="pb-section section-sub-nav pb-padding-remove">
        <div class="pb-container">
            <div pb-grid>
                <div class="pb-width-2-3@m">
                    <ul class="pb-breadcrumb pb-visible@m">
                        <li><a href="{{url('/')}}">Home</a></li>
                        <li><span>Sign Up and Login</span></li>
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
                        <header>
                            <h1 class="pb-article-title pb-margin-bottom">Sign Up and Login </h1>
                            <div class="author-box pb-card">
                                <div class="pb-card-header pb-padding-remove">
                                    <div class="pb-grid-small pb-flex-middle  pb-position-relative" pb-grid>
                                        <div class="pb-width-auto">
                                            <img class="pb-border-circle" width="40" height="40" src="{{ asset('public/assets/img/joshua.jpg')}}">
                                        </div>
                                        <div class="pb-width-expand">
                                            <h5 class="pb-card-title">Ashok</h5>
                                            <p class="pb-article-meta pb-margin-remove-top">Created: Dec 10, 2021 - Updated: Dec 26, 2021</p>
                                        </div>
                                      
                                    </div>
                                </div>
                            </div>
                        </header>
                        <div class="entry-content pb-margin-medium-top">
                            <p>Here are all steps to log in or sign up to the Pureblissy Platform.
To take a subscription to any plan you must have a Pureblissy login account. Steps to create a login account are following:- 
</p>
<p>Go to the sign-up page. Link- <a href="https://pureblissy.com/userSignup">Signup</a></p>
<p><strong>Enter your name.</strong><br>
    <strong>Enter your email id.</strong><br>
    <strong>Enter your phone number.</strong><br>
    <strong>Enter your address.</strong><br>
    <strong>Create your desired password.</strong><br>
    <strong>Click on “Sign up”.</strong><br>
    <strong>Verify your E-mail by entering the OTP* sent to your email id.</strong><br>


</p>

<p>After signing up to subscribe you have to log in with your log-in account and credentials. Login to Pureblissy by using this link. <a href="https://pureblissy.com/customerLogin">login</a></p>


<p><strong>Enter your user id or email id</strong><br>
    <strong>Enter your password</strong><br>
    <strong>Click on the ‘Login’ button</strong><br>

</p>
                        </div>
                         <div class="article-votes pb-text-center pb-margin-medium-top pb-padding pb-padding-remove-horizontal border-bottom border-top">
                            <h3>Was this article helpful?</h3>
                            <a href="#" class="vote pb-button pb-button-outline-primary"><i class="fa fa-check" aria-hidden="true"></i> Yes</a>
                            <a href="#" class="vote pb-button pb-button-outline-primary pb-margin-small-left"><i class="fa fa-times" aria-hidden="true"></i> No</a>
                            <p class="vote-thanks pb-margin-remove">Thanks so much for your feedback!</p>
                            <p class="vote-question text-dark">Have more questions? <a href="{{url('/contact')}}">Submit a request</a></p>
                        </div>
                       
                        <div class="pb-child-width-1-2@s text-dark article-related pb-margin-medium-top pb-margin-medium-bottom" pb-grid>
                            <div>
                               <h3>pureblissy Articles</h3>
                                <ul class="pb-list pb-list-large">
                                     <li><a href="{{url('/subscription-and-billing')}}">How to log in to your Pureblissy Account?</a></li>
                        <li><a href="{{url('/subscription-and-billing')}}">How to take a subscription plan?</a></li>
                        <li><a href="{{url('/subscription-and-billing')}}">Can I pause the Subscriptions plan?</a></li>
                        <li><a href="{{url('/subscription-and-billing')}}">how the request of renewal for your subscriptions will be done by our side?</a></li>
                        <li><a href="{{url('/subscription-and-billing')}}">How to cancel your subscription plan?</a></li>
                                </ul>
                            </div>
                            <div>
                                <div class="mt-35">
                                <ul class="pb-list pb-list-large">
                                     <li><a href="{{url('/subscription-and-billing')}}">What are the different ways to pay for Pureblissy?</a></li>
                        <li><a href="{{url('/subscription-and-billing')}}">Which currencies we do accept on the Pureblissy platform?</a></li>
                        <li><a href="{{url('/subscription-and-billing')}}">Will I get a subscription receipt?</a></li>
                        <li><a href="{{url('/subscription-and-billing')}}">Can I change my previous payment option?</a></li>
                                </ul>
                            </div>
                            </div>
                        </div>
                      
                     
                    </article>
                </div>
               
            </div>
        </div>
    </div>

@endsection