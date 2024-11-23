@extends('layouts.master')

@section('title', 'Our Privacy and Security Principles - pureblissy')

@section('content')

<div class="pb-section section-sub-nav pb-padding-remove">
    <div class="pb-container">
        <div pb-grid>
            <div class="pb-width-2-3@m">
                <ul class="pb-breadcrumb pb-visible@m">
                    <li><a href="{{url('/')}}">Home</a></li>
                    <li><span>Pureblissy Help Center</span></li>
                </ul>
            </div>

        </div>
        <div class="border-top"></div>
    </div>
</div>

<div class="pb-section pb-section-small pb-padding-remove-bottom section-content ">
    <div class="pb-container container-xs pb-35">
        <div class="brd">
            <header class="pb-hd">
                <h1 class="pb-margin-bottom">Pureblissy Help Center</h1>
            </header>
            <div class="entry-content">

                <p>Please use this form to submit an Pureblissy related complaint to our team.</p>
            </div>


            <div>
                @if (Session::has('error'))
                <div class="alert alert-danger alert-dismissible">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    {{Session::get('error')}}
                </div>
                @endif
                @if(session()->has('message'))
                <div class="alert alert-success">
                    {{ session()->get('message') }}
                </div>
                @endif

                <form action="{{ url('/contact') }}" method="post" class="pb-form-stacked" role="form" enctype="multipart/form-data">
                    @csrf
                    <div class="pb-margin">
                        <label class="pb-form-label" for="form-stacked-text">Contact Name <span class="text-danger">*</span></label>
                        <div class="pb-form-controls">
                            <input class="pb-input" id="form-stacked-text" name="name" required="" type="text">
                            <span class="help-block">
                                @if ($errors->has('name'))
                                <span class="text-danger">{{ $errors->first('name') }}</span>
                                @endif
                            </span>
                        </div>
                    </div>
                    <div class="pb-margin">
                        <label class="pb-form-label" for="form-stacked-text">Contact Email <span class="text-danger">*</span></label>
                        <div class="pb-form-controls">
                            <input class="pb-input" id="form-stacked-text" type="email" required="" name="email">
                            <span class="help-block">
                                @if ($errors->has('email'))
                                <span class="text-danger">{{ $errors->first('email') }}</span>
                                @endif
                            </span>
                        </div>
                    </div>
                    <div class="pb-margin">
                        <label class="pb-form-label" for="form-stacked-text">Please provide a phone number we can call to reach you <span class="text-danger">*</span></label>
                        <div class="pb-form-controls">
                            <input class="pb-input" id="form-stacked-text" type="number" required="" name="number">
                            <span class="help-block">
                                @if ($errors->has('number'))
                                <span class="text-danger">{{ $errors->first('number') }}</span>
                                @endif
                            </span>
                        </div>
                    </div>
                    <div class="pb-margin">
                        <label class="pb-form-label" for="form-stacked-text">Pureblissy Customer ID <span class="text-danger">*</span></label>
                        <div class="pb-form-controls">
                            <input class="pb-input" id="form-stacked-text" type="text" required="" name="customer_id">
                            <span class="help-block">
                                @if ($errors->has('customer_id'))
                                <span class="text-danger">{{ $errors->first('customer_id') }}</span>
                                @endif
                            </span>
                        </div>
                    </div>
                    <div class="pb-margin">
                        <label class="pb-form-label" for="form-stacked-select">Subject <span class="text-danger">*</span></label>
                        <div class="pb-form-controls">
                            <textarea class="pb-input" id="form-stacked-text" name="subject" type="text" required=""></textarea>
                            <span class="help-block">
                                @if ($errors->has('subject'))
                                <span class="text-danger">{{ $errors->first('subject') }}</span>
                                @endif
                            </span>
                        </div>
                    </div>
                    <div class="pb-margin">
                        <label class="pb-form-label" for="form-stacked-text">Comment <span class="text-danger">*</span></label>
                        <div class="pb-form-controls">
                            <textarea class="pb-textarea" rows="5" name="comment" required=""></textarea>
                            <span class="help-block">
                                @if ($errors->has('comment'))
                                <span class="text-danger">{{ $errors->first('comment') }}</span>
                                @endif
                            </span>
                        </div>
                    </div>
                    <div class="pb-margin">
                        <label class="pb-form-label" for="form-stacked-select">Submit an attachment</label>
                        <div class="pb-form-controls">
                            <input class="" id="form-stacked-text" type="file" name="attachment1">
                        </div>
                    </div>
                    <div class="pb-margin">
                        <div class="pb-form-controls">
                            <button class="vote pb-button pb-button-primary pb-width-1-1 pb-width-auto@s"><i class="fa fa-floppy-o"></i> Submit</button>
                            <p class="vote-thanks pb-margin-remove">Thank you for contacting us. You are very important to us, all information received will always remain confidential !</p>
                        </div>
                    </div>
                    <div class="pb-margin">

                        <label class="pb-form-label">Some account and system information will be sent to Pureblissy, and support calls and chats may be recorded. We will use this information to improve support quality and training, to help address technical issues, and to improve our products and services, subject to our <a href="https://policies.pureblissy.com/en/privacy-policy" target="_blank"> Privacy Policy</a> and <a href="https://policies.pureblissy.com/en/terms-of-service" target="_blank"> Terms of Service.</a></label>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection