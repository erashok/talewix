@extends('layouts.app')

@section('meta_title', "$post->meta_title")
@section('meta_description', "$post->meta_description")
@section('meta_keyword', "$post->meta_keyword")
@section('content')
    
<div class="container">
                    <div class="entry-header">
                        <div class="mb-5">
                            <h1 class="entry-title m_b_2rem">
                            {{ $post->name }}
                            </h1>
                            <div class="entry-meta align-items-center">
                                <a class="author-avatar" href="#">
                                    <img src="{{ asset($post->user->pro_img ? 'upload/user_img/' . $post->user->pro_img : 'images/user-avatar.svg') }}" alt="Author Avatar">
                                </a>
                                <a href="#">{{ $post->user->name }}</a><br>
                                <span>{{ $post->created_at->format('M j, Y') }}</span>
                                <span class="middotDivider"></span>
                                {{-- <span class="readingTime" title="{{ $postitem->reading_time }}">{{ $postitem->reading_time }}</span> --}}
                            </div>
                            
                        </div>
                    </div> <!--end single header-->
                    <figure class="image zoom mb-5 text-center">
                        <img src="{{ asset('upload/post/' . $post->thum_image) }}" alt="{{ $post->name }}"  />
                    </figure>  <!--figure-->
                    <article class="entry-wraper mb-5">
                        <div class="entry-left-col">
                            <div class="social-sticky">
                                <a href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(Request::url()) }}" target="_blank"><i class="icon-facebook"></i></a>
                                <a href="https://twitter.com/intent/tweet?url={{ urlencode(Request::url()) }}&text={{ $post->name }}" target="_blank"><i class="icon-twitter"></i></a>
                                <a ref="https://api.whatsapp.com/send?text={{ urlencode(Request::url()) }}" target="_blank"><i class="icon-whatsapp"></i></a>
                                <a href="https://t.me/share/url?url={{ urlencode(Request::url()) }}&text={{ $post->name }}" target="_blank"><i class="icon-paper-plane"></i></a>
                            </div>
                        </div>
                        <div class="excerpt mb-4">
                             <p> {{ $post->short_description }}</p>
                            </div>
                        <div class="entry-main-content dropcap">
                            <p> {!! $post->description !!}</p>
                          </div>
                        <div class="entry-bottom">
                            <div class="tags-wrap heading">
                                <span class="tags">
                                
                                    @php
    
                                    $tagsArray = explode(',', $post->tags);
                                @endphp
                                
                                <div>
                                    @foreach ($tagsArray as $tag)
                                        <span>
                                            <a href="#" rel="tag">{{ trim($tag) }}</a></span> 
                                    @endforeach
                                        </span>   </div>
                        </div>
                    </article> <!--entry-content-->

                    <!--Begin post related-->
                    <div class="related-posts mb-5">
                        <h4 class="spanborder text-center">
                            <span>Related Posts</span>
                        </h4>
                        <div class="row justify-content-between">
                             <div class="divider-2"></div>
                             @foreach ($latest_posts as $latestitem)
                                <article class="col-md-4">
                                    <div class="mb-3 d-flex row">
                                        <figure class="col-md-5"><a href="{{ url($latestitem->category->slug.'/'.$latestitem->slug) }}" target="_blank"><img src="{{ asset('upload/post/' . $post->thum_image) }}" alt="post-title"></a></figure>
                                        <div class="entry-content col-md-7 pl-md-0">
                                            <h5 class="entry-title mb-3"><a href="{{ url($latestitem->category->slug.'/'.$latestitem->slug) }}" target="_blank">{{ $latestitem->name }}</a></h5>
                                            <div class="entry-meta align-items-center">
                                                <a href="#">{{ $latestitem->user->name}}</a> in <a href="#">Programing</a><br>
                                                <span>{{ $post->created_at->format('M j, Y') }}</span>
                                                <span class="middotDivider"></span>
                                                <span class="readingTime" title="3 min read">6 min read</span>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                             @endforeach
                           
                        </div>
                    </div>
                    <!--End post related-->

                </div> <!--container-->

@endsection