@extends('layouts.app')


@section('content')

<div class="content-widget">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="row justify-content-between">
                                     @php
                                               $posts = App\Models\Post::where('ads_main', '1')
                                                ->where('status', '1')
                                                ->take(6)
                                                ->get();
                                         @endphp
                                        @foreach ($posts as $latest_post_item)
                                                 <article class="col-md-4">
                                                    <div class="mb-3 d-flex row">
                                                        <figure class="col-md-5">
                                                            <a href="{{ url($latest_post_item->category->slug . '/' . $latest_post_item->slug) }}">
                                                                <img src="{{ asset('upload/post/' . $latest_post_item->thum_image) }}" alt="post-title" class="zoom">
                                                            </a>
                                                        </figure>

                                                        <div class="entry-content col-md-7 pl-md-0">
                                                            <h5 class="entry-title mb-2"><a href="{{ url($latest_post_item->category->slug.'/'.$latest_post_item->slug) }}">{{$latest_post_item->name}}</a></h5>
                                                            <div class="entry-excerpt">
                                                                <p>
                                                                     {{ \Illuminate\Support\Str::words($latest_post_item->short_description, 12, '...') }}
                                                                </p>
                                                            </div>
                                                            <div class="entry-meta align-items-center">
                                                                <a href="#">{{ $latest_post_item->user->name}}</a> in <a href="#">Fashion</a><br>
                                                                <span>{{ $latest_post_item->created_at->format('M j, Y') }}</span>
                                                                <span class="middotDivider"></span>
                                                                <span class="readingTime" title="3 min read">4 min read</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </article>
                                        @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
    
                <div class="content-widget">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-8">
                                <h2 class="spanborder h4">
                                    <span>Most Recent</span>
                                </h2>

                                @foreach ($latest_posts as $latest_post_item)
                                    <article class="row justify-content-between mb-5 mr-0">
                                    <div class="col-md-9">
                                        <div class="align-self-center">
                                            <div class="capsSubtle"><a href="{{ url(Str::slug($latest_post_item->category->name))}}"> {{ $latest_post_item->category->name }}</a></div>
                                            <h3 class="entry-title mb-2"><a href="{{ url($latest_post_item->category->slug.'/'.$latest_post_item->slug) }}">{{$latest_post_item->name}}</a></h3>
                                            <div class="entry-excerpt">
                                                <p>
                                                     {{ \Illuminate\Support\Str::words($latest_post_item->short_description, 40, '...') }}
                                                </p>
                                            </div>
                                            <div class="entry-meta align-items-center">
                                                <a href="{{url('profile/'.$latest_post_item->user->id )}}">{{ $latest_post_item->user->name}}</a> in <a href="{{ url(Str::slug($latest_post_item->category->name))}}"> {{ $latest_post_item->category->name }}</a><br>
                                                <span>{{ $latest_post_item->created_at->format('M j, Y') }}</span>
                                                <span class="middotDivider"></span>
                                                <span class="readingTime" title="{{ $post->estimated_reading_time ?? '0' }} min read">{{ $post->estimated_reading_time ?? '0' }} min read</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 bgcover" style="background-image:url({{ asset('upload/post/' . ($latest_post_item->thum_image ?? 'upload/post/default-image.jpg')) }}); height: 180px; width: 180px;"></div>
                                </article>

                                @endforeach

                               
                            </div> <!--col-md-8-->
                            <div class="col-md-4 pl-md-5 sticky-sidebar">
                                <div class="sidebar-widget latest-tpl-4">
                                    <h4 class="spanborder">
                                        <span>Popular</span>
                                    </h4>
                                    <ol>

                                          @php
                                               $posts = App\Models\Post::where('right_sidebar', '1')
                                                ->where('status', '1')
                                                ->take(6)
                                                ->get();
                                         @endphp

                                           @foreach ($posts as $latest_post_item)
                                                 <li class="d-flex">
                                                    <div class="post-content">
                                                        <h5 class="entry-title mb-3"><a href="{{ url($latest_post_item->category->slug.'/'.$latest_post_item->slug) }}">{{$latest_post_item->name}}</a></h5>
                                                        <div class="entry-meta align-items-center">
                                                            <a href="#">{{ $latest_post_item->user->name}}</a> in <a href="#">Police</a><br>
                                                            <span>May 14</span>
                                                            <span class="middotDivider"></span>
                                                            <span class="readingTime" title="3 min read">3 min read</span>
                                                        </div>
                                                    </div>
                                                </li>
                                            @endforeach
                                       
                                    </ol>
                                </div>
                                <div class="sidebar-widget latest-tpl-4">
                                    <h4 class="spanborder">
                                        <span>Recommended topics</span>
                                    </h4>
                                    <div class="entry-bottom">
                                        <div class="tags-wrap heading">
                                            <span class="tags">
                                                @foreach ($all_categories as $all_topics)
                                                    <a href="{{ url($all_topics->slug) }}" rel="topics">{{ $all_topics->name }}</a>
                                                @endforeach
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div> <!--col-md-4-->
                        </div>
                    </div> <!--content-widget-->
                </div>
@endsection