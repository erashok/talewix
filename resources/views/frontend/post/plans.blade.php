@extends('layouts.app')

@section('content')
    <div class="container my-5">
        <h3 class="text-center mb-5">Choose Your Subscription Plan</h3>
        <div class="row mb-5">
            @foreach ($plans as $plan)
                <div class="col-lg-4 col-md-6 mb-4 d-flex">
                    <div class="card shadow-sm border-light flex-fill">
                        <div class="card-body text-center">
                            <h4 class="card-title">{{ $plan->heading_name }}</h4>
                            <h5 class="card-subtitle mb-2">${{ $plan->price_name }}/{{ $plan->month_years }}</h5>
                            <p class="card-text">{{ $plan->plan_desc }}</p>
                            <ul class="list-unstyled">
                                <?php $tag_names = explode(',', $plan->tag_name); ?>
                                @foreach ($tag_names as $tag_namess)
                                    <li style="text-align: left">✔ {{ trim($tag_namess) }}</li>
                                @endforeach
                            </ul>
                            <button class="btn btn-primary subscribe-btn"
                                data-plan-id="{{ $plan->id }}" 
                                data-price="{{ $plan->price_name * 100 }}">
                                Buy Now
                            </button>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="row mb-5">
            <div class="col-md-6">
                <img src="http://127.0.0.1:8000/upload/post/default-image.jpg" />
            </div>
            <div class="col-md-6">
                <h4 class="spanborder">
                    <span>Evaluate Your Content Goals</span>
                </h4>
                <p>Your content goals should drive your choice of subscription. Are you just starting with casual blog posts, or are you looking to monetize your content and build a dedicated readership? Medium's free tier allows you to experiment, but if you're serious about your writing career, opting for a paid plan can unlock additional features like enhanced visibility, detailed analytics, and monetization opportunities. Ask yourself: "Am I writing as a hobby or aiming to make writing a sustainable income.</p>
            </div>
        </div>
        <div class="row mb-5">
             <div class="col-md-6">
                <h4 class="spanborder">
                    <span>Understand the Analytics You Need</span>
                </h4>
                <p>Analytics are crucial in understanding your audience and growing your blog. Medium's subscription plans differ in terms of the depth of analytics offered. A free subscription may provide basic stats on views and reads, but if you're looking to dive deeper—analyzing where your readers come from, which posts drive the most engagement, and what times are best to post—upgrading to a higher-tier subscription can give you these insights. The more you know, the better you can tailor your content strategy for success.</p>
            </div>
            <div class="col-md-6">
                 <img src="http://127.0.0.1:8000/upload/post/default-image.jpg" />
            </div>
        </div>
        <div class="row mb-5">
            <div class="col-md-6">
                 <img src="http://127.0.0.1:8000/upload/post/default-image.jpg" />
            </div>
            <div class="col-md-6">
                <h4 class="spanborder">
                    <span>Factor in Monetization Options</span>
                </h4>
                <p>For many writers, the ultimate goal is to generate income from their writing. Medium’s Partner Program is accessible only to paid subscribers, allowing you to earn money based on the engagement your stories receive. If you aim to turn your writing into a profitable venture, opting for a paid plan opens up avenues for direct income through this program, as well as enhanced tools to grow and engage your audience effectively.</p>
            </div>
        </div>
    </div>
@endsection

