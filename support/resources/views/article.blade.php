@extends('layouts.master')

@section('title', 'Our Privacy and Security Principles - pureblissy')

@section('content')

    <div class="pb-section section-sub-nav pb-padding-remove">
        <div class="pb-container">
            <div pb-grid>
                <div class="pb-width-2-3@m">
                    <ul class="pb-breadcrumb pb-visible@m">
                        <li><a href="{{url('/')}}">Home</a></li>
                        <li><span>How to setup payment gateways</span></li>
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
                            <h1 class="pb-article-title pb-margin-bottom">How to setup payment gateways</h1>
                            <div class="author-box pb-card">
                                <div class="pb-card-header pb-padding-remove">
                                    <div class="pb-grid-small pb-flex-middle  pb-position-relative" pb-grid>
                                        <div class="pb-width-auto">
                                            <img class="pb-border-circle" width="40" height="40" src="{{ asset('public/assets/img/joshua.jpg')}}">
                                        </div>
                                        <div class="pb-width-expand">
                                            <h5 class="pb-card-title">Ashok Verma</h5>
                                            <p class="pb-article-meta pb-margin-remove-top">Created: Sep 06, 2016 - Updated: Apr 26, 2017</p>
                                        </div>
                                      
                                    </div>
                                </div>
                            </div>
                        </header>
                        <div class="entry-content pb-margin-medium-top">
                            <p class="pb-text-lead">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat occaecat cupidatat culpa qui officia deserunt mollit anim id est laborum.</p>
                            <h2 id="animation-repeat">Instalation</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                            <h2 id="animation-delay">Quick Setup</h2>
                            <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillriatur. Excepteur sint occaecat cupidatat non proident,
                                sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                            <h4>Change your password</h4>
                            <ol class="ol-pretty pb-list-large">
                                <li>Click your team name to open the Team Menu.</li>
                                <li>Select Profile & account. This will open your profile on the right side of your screen.</li>
                                <li>Under your name, click Account Settings. This will open your Account settings.</li>
                                <li>By Password, click expand.</li>
                                <li>Enter your Current Password, and then a New Password.</li>
                                <li>Click Save Password.</li>
                            </ol>
                            <h2 id="animation-fade">Advanced Options</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                            <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                            <h2 id="animation-scale-up">Content Import</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                            <div class="pb-alert-primary" pb-alert>
                                <p>If you've followed the steps above, but have yet to receive a password reset email, please check all tabs, folders, and spam filters in your inbox.</p>
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                        </div>
                        <div class="article-votes pb-text-center pb-margin-medium-top pb-padding pb-padding-remove-horizontal border-bottom border-top">
                            <h3>Was this article helpful?</h3>
                            <a href="#" class="vote pb-button pb-button-outline-primary"><i class="fa fa-check" aria-hidden="true"></i> Yes</a>
                            <a href="#" class="vote pb-button pb-button-outline-primary pb-margin-small-left"><i class="fa fa-times" aria-hidden="true"></i> No</a>
                            <p class="vote-thanks pb-margin-remove">Thanks so much for your feedback!</p>
                            <p class="vote-question text-dark">Have more questions? <a href="contact.html">Submit a request</a></p>
                        </div>
                        <div class="pb-child-width-1-2@s text-dark article-related pb-margin-medium-top pb-margin-medium-bottom" pb-grid>
                            <div>
                                <h3>Recently Viewed Articles</h3>
                                <ul class="pb-list pb-list-large">
                                    <li><a href="#">Sed ut perspiciatis unde omnis iste laudantium, totam rem aperiam</a></li>
                                    <li><a href="#">Lorem ipsum dolor sit amet, elabore et dolore magna aliqua</a></li>
                                    <li><a href="#">Dolor sit amet, consectetur adipiscing elit, sed do eiusmod</a></li>
                                </ul>
                            </div>
                            <div>
                                <h3>Related Articles</h3>
                                <ul class="pb-list pb-list-large">
                                    <li><a href="#">Apsum dolor sit amet, consectet tempor incididunt ut dolore magna aliqua</a></li>
                                    <li><a href="#">Hadem sit amet, consectetur adipiscing elit, sed do eiusmod</a></li>
                                    <li><a href="#">Lorem ipsum dolor tempor incididunt ut labore et dolore magna aliqua</a></li>
                                </ul>
                            </div>
                        </div>
                      
                     
                    </article>
                </div>
                <div class="pb-width-1-4@m">
                    <div pb-sticky="offset: 100" class="scrollspy pb-sticky pb-active pb-card pb-card-small pb-card-body pb-padding-remove-top pb-visible@m">
                     
                        <ul class="pb-nav pb-nav-default" pb-scrollspy-nav="closest: li; scroll: true; offset: 30">
                            <li><a href="#animation-repeat">Instalation</a></li>
                            <li><a href="#animation-delay">Quick Setup</a></li>
                            <li><a href="#animation-fade">Advanced Options</a></li>
                            <li><a href="#animation-scale-up">Content Import</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection