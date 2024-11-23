@extends('layouts.master')

@section('title', 'Cookies - pureblissy')

@section('content')

<div class="pb-section section-sub-nav pb-padding-remove">
        <div class="pb-container">
            <div pb-grid>
                <div class="pb-width-2-3@m">
                    <ul class="pb-breadcrumb pb-visible@m">
                        <li><a href="{{url('/')}}">Home</a></li>
                        <li><span>Cookies</span></li>
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
                      
                            <h1 class="pb-article-title pb-margin-bottom" id="introduction">Introduction</h1>
                            <!-- <p>Users of Pureblissy provide access to us and some other advertisement-based companies to collect some of their data with the help of cookies. No leakage of your personal information will be done. Pureblissy always helps you in safe surfing.</p> -->
                            <p>Welcome to the Pureblissy cookies-page. We always try to establish a great connection with our users, so in this section, we will tell you what a cookie is and how it works for both of us. Cookies are a collection of some text files with small pieces of useful data like username, sign-in details, sign-up location, IP address, and all.</p>
                          <div class="entry-content pb-margin-medium-top">
                           <h1 class="pb-article-title pb-margin-bottom" id="Cookies">Cookies</h1>
                            <p>A cookie is a tool that allows some of the websites to remember your login details along with your Pureblissy password so that it can help our website to spy on any negative person which may cause loss to our website in the future. Some of these data like remembering your purchased plan help us in advertisement creation and giving you purchasing suggestions.</p>
                           

                             <h1 class="pb-article-title pb-margin-bottom" id="collects-data">General categories we use for the above technology</h1>
                             <h1 class="pb-article-title pb-margin-bottom">Necessary Technologies</h1>
                             <p>Technologies used by us are cookies, beacons, and other same technologies which are so important for the procedures of our websites, their services, their application, and its tools.  These general technologies help us to access our sites.  This is used to access services, applications, tools and also allows making use of Pureblissy functions such as shopping-carts, a search which is saved, and similar functions.</p>
                             <h1 class="pb-article-title pb-margin-bottom" id="controls">Interaction Related</h1>
                           <p>We use an interaction-related category which helps us to determine the user's activity towards Pureblissy. It tells us about how you are using our platform or which link any visitor is visiting. This also helps us in improving our website content and adding more features to it. With the help of this category, we find an easier way of performance of Pureblissy for our Pureblissy.com website, its services, and its tools. It would be a part of our analytical practices. Thank you.</p>
                             <h1 class="pb-article-title pb-margin-bottom" id="sharing">Functions Related</h1>
                            <p>These allow Pureblissy to offer you enhanced functionality when accessing or using our sites, their services, their applications, and their tools. These functions are used to identify sign-in details or keep track of specific choices, interests, or items which are already searched in history, this category helps us to enhance the presentation of content on our special Pureblissy platform.</p>
                              <h1 class="pb-article-title pb-margin-bottom" id="secure">Ads Related</h1>
                           <p>Our platform may use cookies and web beacons which will be used to give content including ads regarding our services and your choices. Let us confirm that you or any third party can never put ads on our Pureblissy platform. Only Pureblissy has the right to show ads on this platform and with the help of these tools, we can customize our ad according to your choices. This feature includes all the technologies which will help you to get the value and use of the advertisements and content. This tool helps us in getting the knowledge of some previous surfing and ad click done by you. So, these are some of our technical tools which help us in designing the Pureblissy in a better way and user-friendly according to their interest. Thanks, Team Pureblissy. </p>         
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
                            <li><a href="#introduction">Introduction</a></li>
                            <li><a href="#Cookies">Cookies</a></li>
                            <li><a href="#collects-data">Necessary Technologies</li>
                            <li><a href="#controls">Interaction Related</a></li>
                            <li><a href="#sharing">Functions Related</a></li>
                            <li><a href="#secure">Ads Related</a></li>
                           
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection