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
                                            <img alt="author avatar" src="{{ $user->pro_img ? url('upload/user_img/' . $user->pro_img) : url('images/author-avata-1.jpg') }}" class="avatar">
                                        </div>                                        
                                        <div class="author-content">
                                            <div class="top-author">
                                                <h5 class="heading-font">
                                                    <a href="#" title="{{ $user->name }}" rel="author">
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
                                                <a class="author-social" href="#" data-toggle="modal" data-target="#editprofile{{$user->id}}">Edit profile</a>
                                            </div>
                                        </div>
                                    </div>
                                    
                                </div>
                                <h6 class="spanborder">
                                    <a href="{{ url('/profile') }}" class="mr-2"><span>Home</span></a>
                                    <a href="{{ url('/storfy-member') }}" class="mr-2"><span>Storfy Member</span></a>
                                    <a href="{{ url('/about') }}" class="mr-2"><span>About</span></a>
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
                                                    <img alt="author avatar" src="{{ $post->user->pro_img ? url('upload/user_img/' . $post->user->pro_img) : url('images/author-avata-1.jpg') }}" class="avatar" height="30" width="30">
                                                    <a href="{{ url('profile') }}">{{ $post->user->name }}</a>
                                                    {{-- Uncomment if you want to display category name --}}
                                                    {{-- <a href="{{ url(Str::slug($post->category->name)) }}">{{ $post->category->name }}</a> --}}
                                                </div>
                                                <h3 class="entry-title">
                                                    <a href="javascript:void(0);" onclick="redirectToPost('{{ $post->user_name }}', '{{ $post->slug }}')">
                                                        {{ $post->name }}
                                                    </a>
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
                                        <li class="d-flex">
                                            <div class="post-content">
                                                <h5 class="entry-title mb-3"><a href="#">President and the emails. Who will guard the guards?</a></h5>
                                                <div class="entry-meta align-items-center">
                                                    <a href="#">Alentica</a> in <a href="#">Police</a><br>
                                                    <span>May 14</span>
                                                    <span class="middotDivider"></span>
                                                    <span class="readingTime" title="3 min read">3 min read</span>
                                                    <span class="svgIcon svgIcon--star">
                                                        <svg class="svgIcon-use" width="15" height="15">
                                                            <path d="M7.438 2.324c.034-.099.09-.099.123 0l1.2 3.53a.29.29 0 0 0 .26.19h3.884c.11 0 .127.049.038.111L9.8 8.327a.271.271 0 0 0-.099.291l1.2 3.53c.034.1-.011.131-.098.069l-3.142-2.18a.303.303 0 0 0-.32 0l-3.145 2.182c-.087.06-.132.03-.099-.068l1.2-3.53a.271.271 0 0 0-.098-.292L2.056 6.146c-.087-.06-.071-.112.038-.112h3.884a.29.29 0 0 0 .26-.19l1.2-3.52z"></path>
                                                        </svg>
                                                    </span>
                                                </div>
                                            </div>
                                        </li>
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
                            <div class="profile-image-section">
                                <img id="profileImage" src="{{ asset('upload/user_img/' .$user->pro_img ?? 'images/default-image.jpg') }}" alt="Profile Picture" class="profile-image">
                                <div class="image-buttons"> 
                                    <input type="file" id="imageInput" accept="image/*" style="display:none;">
                                    <a href="#" class="update-btn" id="updateImageBtn">Update</a>
                                    <a href="#" class="remove-btn" id="removeImageBtn">Remove</a>
                                </div>
                                <p class="image-info">Recommended: Square JPG, PNG, or GIF, at least 250 pixels per side.</p>
                            </div>
                            <div id="responseMessage"></div>
                                <form action="{{ route('editProfile') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                
                                    <div class="form-group">
                                        <label for="name">Name*</label>
                                        <input type="text" id="name" name="name" value="{{ old('name', $user->name) }}" maxlength="50" placeholder="P Porker">
                                        <span class="char-count">{{ strlen(old('name', $user->name)) }}/50</span>
                                        @error('name')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                
                                    <div class="form-group">
                                        <label for="user_slug">Username</label>
                                        <input type="text" id="user_slug" name="user_slug" maxlength="100" value="{{ old('user_slug', $user->user_slug) }}" placeholder="Add...">
                                        
                                        <div class="d-flex justify-content-between">
                                            <span class="char-count">storfy.com/{{ $user->user_slug }}</span>
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
                                        <input type="text" id="address" name="address" value="{{ old('address', $user->address) }}" maxlength="50" placeholder="address">
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