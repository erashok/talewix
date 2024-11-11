@extends('layouts.master')

@section('title','Edit Post')

@section('content')

<!-- START PAGE CONTENT-->
 <div class="page-heading">
                <h4 class="page-title">Post</h4>
                @if (session('message'))
                    <div class="alert alert-success">{{session('message')}}</div>
                @endif
            </div>
            <div class="page-content fade-in-up">
                <div class="ibox">
                    <div class="ibox-head">
                        <div class="ibox-title">Post List</div>
                            <div class="ibox-tools">
                                <a class="btn btn-danger text-white" href="{{url('admin/posts')}}">Back</a>
                            </div>
                    </div>
                    <div class="ibox-body">

                                            @if ($errors->any())
                                                <div class="alert alert-danger">
                                                    @foreach ($errors->all() as $error)
                                                        <div>{{ $error }}</div>
                                                    @endforeach
                                                </div>
                                             @endif

                                            <form action="{{ url('admin/update-post/'.$post->id) }}" method="POST" enctype="multipart/form-data">
                                                @csrf
                                                @method('PUT')
                                                <div class="row">
                                                    <div class="col-sm-12 form-group">
                                                        <label>Category</label>
                                                        <select name="category_id" class="form-control">
                                                            <option value="">---Select---</option>
                                                            @foreach ($category as $cateitem)
                                                                <option value="{{ $cateitem->id }}" {{$post->category_id == $cateitem->id ? 'selected':''}}>{{ $cateitem->name }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                    <div class="col-sm-12 form-group">
                                                        <label>Post Name</label>
                                                        <input class="form-control" type="text" name="name" value="{{$post->name}}" placeholder="Title Name" required>
                                                    </div>
                                                    <div class="col-sm-12 form-group">
                                                        <label>Slug</label>
                                                        <input class="form-control" type="text" name="slug" value="{{$post->slug}}" placeholder="Slug" required>
                                                    </div>
                                                    <div class="col-sm-12 form-group">
                                                        <label>Short Description</label>
                                                        <textarea name="short_description" rows="6" class="form-control" required>{!! $post->short_description !!}</textarea>
                                                    </div>
                                                    <div class="col-sm-12 form-group">
                                                        <label>Description</label>
                                                        <textarea name="description" rows="16" id="post_summernote" class="form-control" required>{!! $post->description !!}</textarea>
                                                    </div>
                                                    <div class="col-sm-12 form-group">
                                                        {{-- @if($errors->has('tags'))
                                                                        <div class="alert alert-danger">{{ $errors->first('tags') }}</div>
                                                                    @endif --}}
                                                        <label>tags</label>
                                                        <input type="text" name="tags" id="tags" class="form-control" placeholder="Add tags" value="{{$post->tags}}">
                                                    </div>
                                                    <div class="col-sm-12 form-group">
                                                        <label>YouTube Frame (Optional)</label>
                                                        <input type="text" name="yt_frame" class="form-control" value="{{ old('yt_frame') }}">
                                                    </div>
                                                    <div class="col-sm-12 form-group">
                                                        <label>Thumbnail Image</label>
                                                        <input class="form-control" type="file" name="thum_image">
                                                    </div>
                                                    <div class="col-sm-12 form-group">
                                                        <label>Meta Title</label>
                                                        <input class="form-control" type="text" name="meta_title" value="{{$post->meta_title}}" placeholder="Meta Title">
                                                    </div>
                                                    <div class="col-sm-12 form-group">
                                                        <label>Meta Description</label>
                                                        <textarea class="form-control" name="meta_description" rows="6">{!! $post->meta_description !!}</textarea>
                                                    </div>
                                                    <div class="col-sm-12 form-group">
                                                        <label>Meta keyword</label>
                                                        <textarea class="form-control" name="meta_keyword" rows="5">{!! $post->meta_keyword !!}</textarea>
                                                    </div>
                                                    <div class="col-sm-12">
                                                       <div class="check-list m-b-20 m-t-10">
                                                            <label class="ui-checkbox">
                                                                {{-- <input type="hidden" name="ads_main" value="0"> --}}
                                                                <input type="checkbox" name="ads_main" value="1" {{ isset($post) && $post->ads_main == '1' ? 'checked' : '0' }} />
                                                                <span class="input-span"></span>Ads Main
                                                            </label>
                                                             <label class="ui-checkbox">
                                                               {{-- / <input type="hidden" name="ads_sidebar" value="0"> --}}
                                                                <input type="checkbox" name="ads_sidebar" value="1" {{ isset($post) && $post->ads_sidebar == '1' ? 'checked' : '0' }} />
                                                                <span class="input-span"></span>Ads Sidebar
                                                            </label>
                                                             <label class="ui-checkbox">
                                                                {{-- <input type="hidden" name="right_sidebar" value="0"> --}}
                                                                <input type="checkbox" name="right_sidebar" value="1" {{ isset($post) && $post->right_sidebar == '1' ? 'checked' : '0' }} />
                                                                <span class="input-span"></span>right Sidebar
                                                            </label>

                                                            <label class="ui-checkbox">
                                                                {{-- <input type="hidden" name="status" value="0"> --}}
                                                                <input type="checkbox" name="status" value="1" {{ isset($post) && $post->status == '1' ? 'checked' : '0' }} />
                                                                <span class="input-span"></span>Status
                                                            </label>
                                                        </div>

                                                    </div>
                                                </div>
                                                <div class="fixed-bottom1">
                                                    <div class="form-group">
                                                    <button class="btn btn-success" type="submit">Update</button>
                                                </div>
                                                </div>
                                            </form>
                                        </div>
                </div>
            </div>

@endsection