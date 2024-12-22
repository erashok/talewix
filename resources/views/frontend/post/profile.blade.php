@extends('layouts.app')

@section('content')
<div class="content-widget">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                @if (session('message'))
                                <div class="alert alert-success">{{session('message')}}</div>
                            @endif
                            </div>
                            <div class="col-md-8">
                                <div class="box box-author m_b_2rem">
                                    <div class="post-author row-flex">
                                        <div class="author-img">
                                            <img alt="author avatar" src="{{ $user->pro_img ? url('upload/user_img/' . $user->pro_img) : url('images/user-avatar.svg') }}" class="Prifle">
                                        </div>                                        
                                        <div class="author-content">
                                            <div class="top-author">
                                                <h5 class="heading-font">
                                                    <a href="{{url('profile/' .$user->id )}}" title="{{ $user->name }}" rel="author">
                                                        {{ $user->name }}
                                                        <span class="svgIcon svgIcon--star">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="#03a87c" class="bi bi-patch-check-fill" viewBox="0 0 16 16">
                                                                <path d="M10.067.87a2.89 2.89 0 0 0-4.134 0l-.622.638-.89-.011a2.89 2.89 0 0 0-2.924 2.924l.01.89-.636.622a2.89 2.89 0 0 0 0 4.134l.637.622-.011.89a2.89 2.89 0 0 0 2.924 2.924l.89-.01.622.636a2.89 2.89 0 0 0 4.134 0l.622-.637.89.011a2.89 2.89 0 0 0 2.924-2.924l-.01-.89.636-.622a2.89 2.89 0 0 0 0-4.134l-.637-.622.011-.89a2.89 2.89 0 0 0-2.924-2.924l-.89.01zm.287 5.984-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7 8.793l2.646-2.647a.5.5 0 0 1 .708.708"/>
                                                            </svg>
                                                        </span>
                                                    </a>
                                                </h5>
                                            </div>
                                            <p class="d-none d-md-block">{{ $user->short_bio }} </p>
                                            <span title="{{ $user->address }}">{{ $user->address }}</span>
                                            <div class="content-social-author">
                                                {{-- <a target="_blank" class="author-social" href="#">6 Followers</a>
                                                <a target="_blank" class="author-social" href="#">2 Following</a> --}}
                                                @if(isset($user) && Auth::check() && Auth::user()->id == $user->id)
                                                {{-- @if(Auth::user()->id == $user->id) --}}
                                                     <a class="author-social" href="#" data-toggle="modal" data-target="#editprofile{{$user->id}}">Edit profile</a>
                                                @else
                                                    <a class="author-social display-none" href="#" style="display: none">Edit profile</a>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                    
                                </div>
                                <h6 class="spanborder">
                                    <a href="{{ url('/profile') }}" class="mr-2"><span>Home</span></a>
                                    {{-- <a href="{{ url('/storfy-member') }}" class="mr-2"><span>Storfy Member</span></a> --}}
                                    {{-- <a href="{{ url('/about') }}" class="mr-2"><span>About</span></a> --}}
                                </h6>
                                @if($posts->isEmpty())
                                <div class="alert alert-info text-center">
                                    <strong>No posts available at the moment.</strong>
                                </div>
                            @else
                                @foreach($posts as $post)
                                    <?php $userSlug = Str::slug($post->user_name); ?>
                                    <article class="row justify-content-between mb-5 mr-0">
                                        <div class="col-md-9">
                                            <div class="align-self-center">
                                                <div class="capsSubtle mb-0">
                                                    <img alt="author avatar" src="{{ $post->user->pro_img ? url('upload/user_img/' . $post->user->pro_img) : url('images/user-avatar.svg') }}" class="Prifle-post" height="25" width="25">
                                                    <a href="{{url('profile/'.$post->user->id )}}">{{ $post->user->name }}</a>
                                                    {{-- Uncomment if you want to display category name --}}
                                                    {{-- <a href="{{ url(Str::slug($post->category->name)) }}">{{ $post->category->name }}</a> --}}
                                                </div>
                                                <h3 class="entry-title mb-2">
                                                    <a href="{{ url($post->category->slug.'/'.$post->slug) }}">{{$post->name}}</a>                                                      
                                                </h3>

                                                <div class="entry-excerpt">
                                                    <p>{{ \Illuminate\Support\Str::words($post->short_description, 30, '...') }}</p>
                                                </div>
                                                
                                                <div class="entry-meta align-items-center">
                                                    <span>{{ \Carbon\Carbon::parse($post->created_at)->format('F j') }}</span>
                                                    <span class="middotDivider"></span>
                                                    <span class="readingTime" title="{{ $post->estimated_reading_time ?? '0' }} min read">
                                                        {{ $post->estimated_reading_time ?? '0' }} min read
                                                    </span>
                                                   
                                                    {{-- @if(Auth::user()->id == $user->id) --}}
                                                    @if(isset($user) && Auth::check() && Auth::user()->id == $user->id)
                                                    <form action="{{ route('posts.destroy', $post->id) }}" method="POST" style="display:inline;" class="delete-form">
                                                        @csrf <!-- CSRF Token -->
                                                        @method('POST') <!-- Method Spoofing -->
                                                        <button type="button" class="badge badge-pill badge-danger delete-btn"><svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                                            <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0z"/>
                                                            <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4zM2.5 3h11V2h-11z"/>
                                                          </svg> Delete</button>
                                                    </form>
                                                    @else
                                                    <form action="{{ route('posts.destroy', $post->id) }}" method="POST" style="display:none;" class="delete-form">
                                                        @csrf <!-- CSRF Token -->
                                                        @method('POST') <!-- Method Spoofing -->
                                                        <button type="button" class="badge badge-pill badge-danger delete-btn"><svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                                            <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0z"/>
                                                            <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4zM2.5 3h11V2h-11z"/>
                                                          </svg> Delete</button>
                                                    </form>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3 bgcover" style="background-image:url({{ asset('upload/post/' . $post->thum_image) }});"></div>
                                    </article>
                                @endforeach
                            @endif
                            </div> <!--col-md-8-->
                            <div class="col-md-4 pl-md-5 sticky-sidebar">
                                <div class="sidebar-widget latest-tpl-4">
                                    <h5 class="spanborder widget-title">
                                        <span>Hightlight posts</span>
                                    </h5>
                                    <ol>
                                        @php
                                        $posts = App\Models\Post::where('ads_sidebar', '1')
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
                                                            <a href="{{url('profile/'.$latest_post_item->user->id )}}">{{ $latest_post_item->user->name }}</a><br>
                                                        @else
                                                            <a href="{{ route('login') }}">Login to view profile</a>
                                                        @endif  in 
                                                    <a href="{{ url(Str::slug($latest_post_item->category->name))}}">{{ $latest_post_item->category->name ?? 'Uncategorized' }}</a><br>
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

                <div class="modal fade" id="editprofile{{$user->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Profile information</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                {{-- <div class="profile-image-section">
                                    <img id="profileImage" src="{{ asset('upload/user_img/' . ($user->pro_img ?? 'images/user-avatar.svg')) }}" alt="Profile Picture" class="profile-image" />
                                    <div class="image-buttons">
                                        <input type="file" id="imageInput" accept="image/*" style="display: none;" />
                                        <a href="#" class="update-btn" id="updateImageBtn">Update</a>
                                        <a href="#" class="remove-btn" id="removeImageBtn">Remove</a>
                                    </div>
                                    <p class="image-info">Recommended: Square JPG, PNG, or GIF, at least 250 pixels per side.</p>
                                </div>
                                <div id="responseMessage"></div> --}}
                                <form action="{{ route('editProfile') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                
                                    <div class="form-group">
                                        <label for="name">Name*</label>
                                        <input type="text" id="name" name="name" value="{{ old('name', $user->name) }}" maxlength="50" placeholder="P Porker" />
                                        <span class="char-count">{{ strlen(old('name', $user->name)) }}/50</span>
                                        @error('name')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                
                                    <div class="form-group">
                                        <label for="user_slug">Username</label>
                                        <input type="text" id="user_slug" name="user_slug" maxlength="100" value="{{ old('user_slug', $user->user_slug) }}" placeholder="Add..." />
                
                                        <div class="d-flex justify-content-between">
                                            <span class="char-count">talewix.com/{{ $user->user_slug }}</span>
                                            <span class="char-count" id="charCount">
                                                {{ strlen(old('user_slug', $user->user_slug)) }}/100
                                            </span>
                                        </div>
                                        @error('user_slug')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                
                                    <div class="form-group">
                                        <label for="short-bio">Short bio</label>
                                        <textarea id="short-bio" maxlength="500" name="short_bio" placeholder="Write a short bio...">{{ old('short_bio', $user->short_bio) }}</textarea>
                                        <span class="char-count">{{ strlen(old('short_bio', $user->short_bio)) }}/500</span>
                                        @error('short_bio')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="address">Address</label>
                                        <input type="text" id="address" name="address" value="{{ old('address', $user->address) }}" maxlength="50" placeholder="address" />
                                        <span class="char-count">{{ strlen(old('address', $user->address)) }}/50</span>
                                        @error('address')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="form-actions">
                                        <button type="button" class="cancel-btn" data-dismiss="modal">Cancel</button>
                                        <button type="submit" class="save-btn">Save</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                


                    @endsection