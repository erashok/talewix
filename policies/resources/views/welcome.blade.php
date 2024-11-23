@extends('layouts.master')

@section('title', 'Privacy')

@section('content')
    <div class="pb-section section-sub-nav pb-padding-remove">
        <div class="pb-container">
            <div pb-grid>
                <div class="pb-width-2-3@m">
                    <ul class="pb-breadcrumb pb-visible@m">
                        <li><a href="{{url('/')}}">Home</a></li>
                        <li><span>Privacy Policy & Terms </span></li>
                    </ul>
                </div>
               
            </div>
            <div class="border-top"></div>
        </div>
    </div>


    <div class="pb-section">
        <div class="pb-container">
            <div class="pb-child-width-1-2@s text-dark" pb-grid>
                 <div class="pb-hd">
                    <h3>Pureblissy Privacy Policy</h3>
                    <ul class="pb-list pb-list-large pb-list-divider link-icon-right">
                        <li>The pureblissy privacy policy page introduces policies of Pureblissy to its users. We value every customer so we always try to be transparent with our customers.</li>
                      
                    </ul>
                    <h5><a href="{{url('/privacy-policy')}}">Click here to know pureblissy privacy policy <i class="fa fa-arrow-right" aria-hidden="true"></i></a></h5>
                </div>

                  <div class="pb-hd">
                 <h3>Terms and Conditions</h3>
                    <ul class="pb-list pb-list-large pb-list-divider link-icon-right">
                        <li>In this section, our terms and conditions are mentioned. Visit this and go through our terms it will help you to know about all the basic rules possessed by us.</li>
                       
                       
                    </ul>
                    <h5><a href="{{url('/terms-of-service')}}">Click here to go through pureblissy terms and conditions<i class="fa fa-arrow-right" aria-hidden="true"></i></a></h5>
                </div>

          
            </div>

              <div class="pb-child-width-1-2@s text-dark pt-35" pb-grid>
                <div class="pb-hd">
                    <h3>Private and Security Rules</h3>
                    <ul class="pb-list pb-list-large pb-list-divider link-icon-right">
                        <li>In this section, we have discussed general privacy and security rules. Pureblissy aims to make privacy which is equal for all of our customers. We do not discriminate against any of our customers and it is our responsibility to make sure that all of our free content is accessible to all of you. Along with that, we are responsible for making your data safe private, and secure.</li>
                      
                    </ul>
                    <h5><a href="{{url('/our-privacy-and-security-principles')}}">Check out our Privacy and security rules here <i class="fa fa-arrow-right" aria-hidden="true"></i></a></h5>
                </div>

                <div class="pb-hd">
                    <h3>FAQ</h3>
                    <ul class="pb-list pb-list-large pb-list-divider link-icon-right">
                        <li>When we go through any website, a lot of general questions arises in our minds. Pureblissy FAQ is   one of those sections which solves your all the doubts in a while. We have discussed almost all the generalized problems that may come to you while surfing Pureblissy or going for a Plan on this platform.</li>
                      
                    </ul>
                    <h5><a href="{{url('/faq')}}">Explore our FAQ <i class="fa fa-arrow-right" aria-hidden="true"></i></a></h5>
                </div>
          
            </div>

             <div class="pb-child-width-1-2@s text-dark pt-35" pb-grid>
              

                 <div class="pb-hd">
                 <h3>Cookies</h3>
                    <ul class="pb-list pb-list-large pb-list-divider link-icon-right">
                        <li>Cookies is a technical tool which allows Pureblissy to store the data produced by you which will help Pureblissy to build a great relationship and connection with you. It will also help Pureblissy to make it function good, and this will also help to make an ad for you according to your preference and the previous search made by you.</li>
                       
                       
                    </ul>
                    <h5><a href="{{url('/cookies')}}">Click here to go to Cookies page <i class="fa fa-arrow-right" aria-hidden="true"></i></a></h5>
                </div>
                
          
            </div>
        </div>
    </div>
@endsection