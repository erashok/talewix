@extends('layouts.app')

@section('meta_title', "$category->meta_title")
@section('meta_description', "$category->meta_description")
@section('meta_keyword', "$category->meta_keyword")

@section('content')
    
<div class="content-widget">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-8">
                                <h4 class="spanborder">
                                    <span>{{ $category->name }}</span>
                                </h4>
                                <article class="first mb-3">
                                    <figure><img src="{{ asset('upload/category/' . $category->cat_image) }}" alt="{{ $category->name }}"></figure>
                                    <h1 class="entry-title mb-3">
                                        <a href="{{ url($category->slug) }}">{{ $category->meta_title }}</a>
                                    </h1>

                                    <div class="entry-excerpt">
                                        <p>
                                           {{ $category->description }}
                                        </p>
                                    </div>
                                </article>
                                <div class="divider"></div>

                                @forelse ($post as $postitem)
                                    <article class="row justify-content-between mb-5 mr-0">
                                        <div class="col-md-9 ">
                                            <div class="align-self-center">
                                                <div class="capsSubtle mb-2">{{ $category->name }}</div>
                                                <h3 class="entry-title mb-3">
                                                        <a href="{{ url('/'.$category->slug.'/'.$postitem->slug) }}">
                                                            {{ $postitem->name }}
                                                        </a>
                                                    </h3>

                                                <div class="entry-excerpt">
                                                  
                                                     <p>
                                                     {{ \Illuminate\Support\Str::words($postitem->short_description, 40, '...') }}
                                                </p>
                                                </div>
                                                <div class="entry-meta align-items-center">
                                                    <a href="{{url('profile')}}">{{ $postitem->user->name}}</a><br>
                                                    <span>{{ $postitem->created_at->format('M j, Y') }}</span>
                                                    <span class="middotDivider"></span>
                                                    <span class="readingTime" title="{{ $postitem->reading_time }}">{{ $postitem->reading_time }}</span>
                                                    <span class="svgIcon svgIcon--star">
                                                        <svg class="svgIcon-use" width="15" height="15">
                                                            <path d="M7.438 2.324c.034-.099.09-.099.123 0l1.2 3.53a.29.29 0 0 0 .26.19h3.884c.11 0 .127.049.038.111L9.8 8.327a.271.271 0 0 0-.099.291l1.2 3.53c.034.1-.011.131-.098.069l-3.142-2.18a.303.303 0 0 0-.32 0l-3.145 2.182c-.087.06-.132.03-.099-.068l1.2-3.53a.271.271 0 0 0-.098-.292L2.056 6.146c-.087-.06-.071-.112.038-.112h3.884a.29.29 0 0 0 .26-.19l1.2-3.52z"></path>
                                                        </svg>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    <div class="col-md-3 bgcover" style="background-image:url({{ asset('upload/post/' . ($postitem->thum_image ?? 'upload/post/default-image.jpg')) }}); height: 180px; width: 180px;"></div>

                                </article>

                                @empty
                                       
                                <h3>No Post Available</h3>
                                @endforelse

                            </div> <!--col-md-8-->
                            <div class="col-md-4 pl-md-5 sticky-sidebar">
                                <div class="sidebar-widget latest-tpl-4">
                                    <h5 class="spanborder widget-title">
                                        <span>Popular in Culture</span>
                                    </h5>
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
                                                        <h5 class="entry-title mb-2"><a href="{{ url($latest_post_item->category->slug.'/'.$latest_post_item->slug) }}">{{$latest_post_item->name}}</a></h5>
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
                            </div> <!--col-md-4-->
                        </div>
                    </div> <!--content-widget-->
                </div>


@endsection