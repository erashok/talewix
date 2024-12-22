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
                                                <div class="capsSubtle">{{ $category->name }}</div>
                                                <h3 class="entry-title mb-2">
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
                                                    @if(Auth::check())
                                                            <a href="{{url('profile/'.$postitem->user->id )}}">{{ $postitem->user->name }}</a><br>
                                                        @else
                                                            <a href="{{ route('login') }}">Login to view profile</a>
                                                        @endif       
                                                                                              
                                                        <br>
                                                    <span>{{ $postitem->created_at->format('M j, Y') }}</span>
                                                    <span class="middotDivider"></span>
                                                    <span class="readingTime" title="{{ $postitem->reading_time }}">{{ $postitem->reading_time }}</span>
                                                    
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
                                                            @if(Auth::check())
                                                            <a href="{{url('profile/'.$latest_post_item->user->id )}}">{{ $latest_post_item->user->name}}</a>
                                                         @else
                                                            <a href="{{ route('login') }}">Login to view profile</a>
                                                         @endif 
                                                            in <a href="{{ url(Str::slug($latest_post_item->category->name))}}"> {{ $latest_post_item->category->name }}</a><br>
                                                            <span>{{ $latest_post_item->created_at->format('M j, Y') }}</span>
                                                            <span class="middotDivider"></span>
                                                            <span class="readingTime" title="{{ $latest_post_item->estimated_reading_time ?? '0' }} min read">{{ $latest_post_item->estimated_reading_time ?? '0' }} min read</span>
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