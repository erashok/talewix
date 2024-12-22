<!-- resources/views/frontend/post/search.blade.php -->

@extends('layouts.app') <!-- Adjust this based on your layout -->

@section('content')
   <div class="content-widget">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-8">
                                <h4 class="spanborder">
                                    Results for
                                    <span>"{{ $query }}"</span>
                                </h4>
                                @if($posts->isEmpty())
                                <p>No results found.</p>
                            @else
                                @foreach($posts as $post)
                                <article class="row justify-content-between mb-5 mr-0">
                                    <div class="col-md-9">
                                        <div class="align-self-center">
                                            <div class="capsSubtle mb-0">{{ $post->category->name }}</div>
                                            <h3 class="entry-title mb-2">
                                                <a href="{{ url($post->category->slug.'/'.$post->slug) }}">
                                                    {{ $post->name }}
                                                </a>
                                            </h3>
                                            <div class="entry-excerpt mb-2">
                                                <p>
                                                    {{ \Illuminate\Support\Str::words($post->short_description, 30, '...') }}
                                                </p>
                                            </div>
                                            <div class="entry-meta align-items-center">
                                                <a href="{{ url('user.profile', ['slug' => Str::slug($post->user_name)]) }}">{{ $post->user_name }}</a> in 
                                                <a href="{{ url('category.show', ['slug' => Str::slug($post->category->name)]) }}">{{ $post->category->name }}</a><br>
                                                <span>{{ \Carbon\Carbon::parse($post->created_at)->format('F j') }}</span>
                                                <span class="middotDivider"></span>
                                                <span class="readingTime" title="{{ $post->estimated_reading_time }} min read">{{ $post->estimated_reading_time }} min read</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 bgcover" style="background-image:url({{ asset('upload/post/' . ($post->thum_image ?? 'upload/post/default-image.jpg')) }}); height: 180px; width: 180px;"></div>
                                </article>
                                @endforeach
                            @endif
                            

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
                                                    <a href="#">{{ $latest_post_item->user->name }}</a> in 
                                                    <a href="#">{{ $latest_post_item->category->name ?? 'Uncategorized' }}</a><br>
                                                    <span>{{ $latest_post_item->created_at->format('M j, Y') }}</span>
                                                </div>
                                            </div>
                                        </li>
                                        @endforeach
                                    </div>
                                    </ol>
                                </div>
                            </div> <!--col-md-4-->
                        </div>
                    </div> <!--content-widget-->
                </div>

@endsection
