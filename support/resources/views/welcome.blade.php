<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>pureblissy</title>
     <!-- Chrome, Firefox OS and Opera -->
    <meta name="theme-color" content="#2f80ed">
    <!-- Windows Phone -->
    <meta name="msapplication-navbutton-color" content="#2f80ed">
    <!-- iOS Safari -->
    <meta name="pureblissy-mobile-web-app-capable" content="yes">
    <meta name="pureblissy-mobile-web-app-status-bar-style" content="#2f80ed">
    <link rel="icon" type="image/png" href="{{ asset('public/assets/img/16x16.png')}}" sizes="16x16">
    <link rel="icon" type="image/png" href="{{ asset('public/assets/img/32x32.png')}}" sizes="32x32">
    <link rel="icon" type="image/png" href="{{ asset('public/assets/img/48x48.png')}}" sizes="48x48">
    <link rel="icon" type="image/png" href="{{ asset('public/assets/img/64x64.png')}}" sizes="64x64">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('public/assets/css/all.min.css')}}" />
    <script src="assets/js/jquery.js"></script>
    <link rel="stylesheet" href="{{ asset('public/assets/css/main.css')}}" />
    <link rel="stylesheet" href="{{ asset('public/assets/css/custom.css')}}" />   
    <script src="{{ asset('public/assets/js/main.js')}}"></script>
</head>

<body>
    <div class="section-hero pb-background-blend-color-burn pb-background-top-center pb-background-cover pb-section-large1 cta" style="background-image: url('{{asset('public/assets/img/city.jpg')}}');" >
        <nav class="pb-navbar-container pb-margin pb-navbar-transparent pb-light">
            <div class="pb-container">
                <div pb-navbar>
                    <div class="pb-navbar-left">
                        <a class="pb-navbar-item pb-logo pb-text-uppercase" href="{{url('/')}}"><!-- <span class="pb-margin-small-right" pb-icon="icon: lifesaver"></span> --> <img src="{{ asset('public/assets/img/pureblissy-white.png')}}" width="230" height="auto"></a>
                    </div>
                    <div class="pb-navbar-right">
                        <ul class="pb-navbar-nav pb-visible@m pb-margin-medium-left">
                            <li><a href="{{url('/contact')}}"><strong>Pureblissy Help Center</strong></a></li>
                          
                        </ul>
                      
                    </div>
                </div>
            </div>
        </nav>
        <div class="pb-container hero">
            <h1 class="pb-heading-primary pb-text-center pb-margin-large-top pb-margin-xlarge-bottom pb-light">How can we help you?</h1>
           <!--  <p class="pb-text-lead pb-text-center pb-light pb-margin-xlarge-bottom">Lead volutpat nibh ligula gravida. Magna auctor eget venenatis phasellus luctus sodales pulvinar</p> -->
            <div class="pb-flex pb-flex-center">
            
            </div>
        </div>
    </div>

    <div class="pb-section">
        <div class="pb-container">
            <div class="pb-child-width-1-3@s pb-grid-match pb-grid-medium pb-text-center" pb-grid>
                <div>
                    <a href="{{url('/signup-and-login')}}" class="box pb-border-rounded">
                        <h3>Signup and Login</h3>
                    </a>
                </div>
                <div>
                    <a href="{{url('/pureblissy-contact-team')}}" class="box pb-border-rounded">
                        <h3>Contact Team Pureblissy</h3>
                    </a>
                </div>
                <div>
                    <a href="{{url('/subscription-and-billing')}}" class="box pb-border-rounded">
                        <h3>Subscription and Billing</h3>
                    </a>
                </div>
               
            </div>
        </div>
    </div>

    <div class="pb-section pb-padding-remove-top pb-padding-remove-bottom">
        <div class="pb-container">
            <hr>
        </div>
    </div>

    <div class="pb-section">
        <div class="pb-container">
            <div class="pb-child-width-1-2@s text-dark" pb-grid>
                <div>
                    <h3>pureblissy Articles</h3>
                    <ul class="pb-list pb-list-large pb-list-divider link-icon-right">
                        <li><a href="{{url('/subscription-and-billing')}}">How to log in to your Pureblissy Account?</a></li>
                        <li><a href="{{url('/subscription-and-billing')}}">How to take a subscription plan?</a></li>
                        <li><a href="{{url('/subscription-and-billing')}}">Can I pause the Subscriptions plan?</a></li>
                        <li><a href="{{url('/subscription-and-billing')}}">how the request of renewal for your subscriptions will be done by our side?</a></li>
                        <li><a href="{{url('/subscription-and-billing')}}">How to cancel your subscription plan?</a></li>
                    </ul>

                </div>

                 <div class="mt-35">
                 
                    <ul class="pb-list pb-list-large pb-list-divider link-icon-right">
                        <li><a href="{{url('/subscription-and-billing')}}">What are the different ways to pay for Pureblissy?</a></li>
                        <li><a href="{{url('/subscription-and-billing')}}">Which currencies we do accept on the Pureblissy platform?</a></li>
                        <li><a href="{{url('/subscription-and-billing')}}">Will I get a subscription receipt?</a></li>
                        <li><a href="{{url('/subscription-and-billing')}}">Can I change my previous payment option?</a></li>
                    </ul>
                    
                </div>
          
            </div>
        </div>
    </div>

       <div class="pb-background-center-center pb-text-center">
            <div class="pb-background-muted1 pb-border-rounded1">
            
                <p class="mb-35">
                    <a href="{{url('/contact')}}" class="pb-button pb-button-primary pb-button-small">Pureblissy Help Center</a>
                </p>
            </div>
        </div>

    <footer id="footer" class="pb-section pb-margin-remove pb-section-xsmall pb-text-small pb-text-muted border-top">
        <div class="pb-container">
            <div class="pb-child-width-1-2@m pb-text-center" pb-grid>
                <div class="pb-text-right@m">
                                    Made with <i class="fa fa-heart text-danger" aria-hidden="true"></i> in India
                                </div>
              
                <div class="pb-flex-first@m pb-text-left@m">
                    <p class="pb-text-small">Copyright © 2021 <img src="{{ asset('public/assets/img/pureblissy.png')}}" width="70"></p>
                </div>
            </div>
        </div>
    </footer>

   
</body>

</html>
