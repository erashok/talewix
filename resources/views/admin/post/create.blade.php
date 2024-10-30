@extends('layouts.master')

@section('title','Add Post')

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
                                <a class="btn btn-success text-white" href="{{url('admin/add-post')}}">Add Post</a>
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

                                            <form action="{{url('admin/add-post')}}" method="POST" enctype="multipart/form-data">
                                                @csrf
                                                <div class="row">
                                                    <div class="col-sm-12 form-group">
                                                        <label>Category</label>
                                                        <select name="category_id" class="form-control">
                                                            @foreach ($category as $cateitem)
                                                                <option value="{{ $cateitem->id }}">{{ $cateitem->name }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                    <div class="col-sm-12 form-group">
                                                        <label>Post Name</label>
                                                        <input class="form-control" type="text" name="name" placeholder="Title Name" required>
                                                    </div>
                                                    <div class="col-sm-12 form-group">
                                                        <label>Slug</label>
                                                        <input class="form-control" type="text" name="slug" placeholder="Slug" required>
                                                    </div>
                                                    <div class="col-sm-12 form-group">
                                                        <label>Short Description</label>
                                                        <textarea name="short_description" rows="6" class="form-control" required></textarea>
                                                    </div>
                                                    <div class="col-sm-12 form-group">
                                                        <label>Description</label>
                                                        <textarea name="description" id="post_summernote" rows="16" class="form-control" required></textarea>
                                                    </div>
                                                    <div class="col-sm-12 form-group">
                                                        @if($errors->has('tags'))
                                                                        <div class="alert alert-danger">{{ $errors->first('tags') }}</div>
                                                                    @endif
                                                        <label>tags</label>
                                                        <input type="text" name="tags" id="tags" class="form-control" placeholder="Add tags" value="{{ old('tags') }}">
                                                    </div>
                                                    <div class="col-sm-12 form-group">
                                                        <label>YouTube Frame (Optional)</label>
                                                        <input type="text" name="yt_frame" class="form-control" value="{{ old('yt_frame') }}">
                                                    </div>
                                                    <div class="col-sm-12 form-group">
                                                        <label>Image</label>
                                                        <input class="form-control" type="file" name="thum_image">
                                                    </div>
                                                    <div class="col-sm-12 form-group">
                                                        <label>Meta Title</label>
                                                        <input class="form-control" type="text" name="meta_title" placeholder="Meta Title">
                                                    </div>
                                                    <div class="col-sm-12 form-group">
                                                        <label>Meta Description</label>
                                                        <textarea class="form-control" name="meta_description" rows="6"></textarea>
                                                    </div>
                                                    <div class="col-sm-12 form-group">
                                                        <label>Meta keyword</label>
                                                        <textarea class="form-control" name="meta_keyword" rows="5"></textarea>
                                                    </div>
                                                    <div class="col-sm-12">
                                                       <div class="check-list m-b-20 m-t-10">
                                                            <label class="ui-checkbox">
                                                                <input type="hidden" name="ads_main" value="0">
                                                                <input type="checkbox" name="ads_main" value="1" {{ isset($posts) && $posts->ads_main == '1' ? 'checked' : '' }} />
                                                                <span class="input-span"></span>Ads Main
                                                            </label>
                                                             <label class="ui-checkbox">
                                                                <input type="hidden" name="ads_sidebar" value="0">
                                                                <input type="checkbox" name="ads_sidebar" value="1" {{ isset($posts) && $posts->ads_sidebar == '1' ? 'checked' : '' }} />
                                                                <span class="input-span"></span>Ads Sidebar
                                                            </label>
                                                             <label class="ui-checkbox">
                                                                <input type="hidden" name="right_sidebar" value="0">
                                                                <input type="checkbox" name="right_sidebar" value="1" {{ isset($posts) && $posts->right_sidebar == '1' ? 'checked' : '' }} />
                                                                <span class="input-span"></span>right Sidebar
                                                            </label>

                                                            <label class="ui-checkbox">
                                                                <input type="hidden" name="status" value="0">
                                                                <input type="checkbox" name="status" value="1" {{ isset($posts) && $posts->status == '1' ? 'checked' : '' }} />
                                                                <span class="input-span"></span>Status
                                                            </label>
                                                        </div>

                                                    </div>
                                                </div>
                                                <div class="fixed-bottom1">
                                                    <div class="form-group">
                                                    <button class="btn btn-success" type="submit">Submit</button>
                                                </div>
                                                </div>
                                            </form>
                                        </div>
                </div>
            </div>

@endsection