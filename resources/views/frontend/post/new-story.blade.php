@extends('layouts.app') <!-- Adjust this based on your layout -->

@section('content')
    <div class="container">
                    <!--Begin Page Header-->
                        <div class="row">
                            <div class="col-12 archive-header">
                                <h1 class="mb-3">
                                    telewix
                                    <small>
                                        in {{ Auth::check() ? Auth::user()->name : '' }}
                                    </small>
                                </h1>
                            </div>
                        </div>

                    <!--End Page Header-->
                    @if ($errors->any())
                    <div class="alert alert-danger">
                        @foreach ($errors->all() as $error)
                            <div>{{ $error }}</div>
                        @endforeach
                    </div>
                 @endif
                    <form action="{{url('add-story')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-contact">
                                    <div class="form-group">
                                        <label>Category</label>
                                        <select name="category_id">
                                            <option value="">Select Category</option>
                                            @foreach ($categories as $cateitem)
                                                <option value="{{ $cateitem->id }}">{{ $cateitem->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    
                                    <div class="form-group">
                                        <label>Post Name </label>
                                        <input type="text" name="name" placeholder="Post Name">
                                    </div>
                                     
                                    <div class="form-group">
                                        <label>Short Description </label>
                                        <textarea type="text" name="short_description" placeholder="Short Description"></textarea>
                                    </div>
                                     <div class="form-group">
                                        <label>Image</label>
                                        <input type="file" name="thum_image">
                                    </div>
                                    <div class="form-group">
                                        <label>Description</label>
                                        <textarea type="text" id="post_summernote" name="description"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="tags">Tags</label>
                                       <input type="text" name="tags" id="tags" class="form-control">
                                    </div>
                                    <p><input type="submit" value="Send Post"></p>
                                </div>
                            </div>
                        </div> <!--entry-content-->
                    </form>
                </div> <!--container-->

@endsection
