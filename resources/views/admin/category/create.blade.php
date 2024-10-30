@extends('layouts.master')

@section('title','Category')

@section('content')

<!-- START PAGE CONTENT-->
 <div class="page-heading">
                <h1 class="page-title">Add Category</h1>
            </div>
            <div class="page-content fade-in-up">
                <div class="row">
                    <div class="col-md-12">
                        <div class="ibox">
                            <div class="row">
                                <div class="col-lg-8">
                                    <div class="ibox">
                                        <div class="ibox-head">
                                            <div class="ibox-title">Add Category</div>
                                        </div>
                                        <div class="ibox-body">

                                            @if ($errors->any())
                                                <div class="alert alert-danger">
                                                    @foreach ($errors->all() as $error)
                                                        <div>{{ $error }}</div>
                                                    @endforeach
                                                </div>
                                             @endif

                                            <form action="{{url('admin/add-category')}}" method="POST" enctype="multipart/form-data">
                                                @csrf
                                                <div class="row">
                                                    <div class="col-sm-12 form-group">
                                                        <label>Category Name</label>
                                                        <input class="form-control" type="text" name="name" placeholder="Category Name">
                                                    </div>
                                                    <div class="col-sm-12 form-group">
                                                        <label>Slug</label>
                                                        <input class="form-control" type="text" name="slug" placeholder="Slug">
                                                    </div>
                                                    <div class="col-sm-12 form-group">
                                                        <label>Description</label>
                                                        <textarea name="description" rows="12" class="form-control"></textarea>
                                                    </div>
                                                    <div class="col-sm-12 form-group">
                                                        <label>Image</label>
                                                        <input class="form-control" type="file" name="cat_image">
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
                                                                <input type="hidden" name="navbar_status" value="0">
                                                                <input type="checkbox" name="navbar_status" value="1" {{ isset($category) && $category->navbar_status == '1' ? 'checked' : '' }} />
                                                                <span class="input-span"></span>Navbar Status
                                                            </label>

                                                            <label class="ui-checkbox">
                                                                <input type="hidden" name="navbar_footer" value="0">
                                                                <input type="checkbox" name="navbar_footer" value="1" {{ isset($category) && $category->navbar_footer == '1' ? 'checked' : '' }} />
                                                                <span class="input-span"></span>Navbar Footer
                                                            </label>

                                                            <label class="ui-checkbox">
                                                                <input type="hidden" name="navbar_sidebar" value="0">
                                                                <input type="checkbox" name="navbar_sidebar" value="1" {{ isset($category) && $category->navbar_sidebar == '1' ? 'checked' : '' }} />
                                                                <span class="input-span"></span>Navbar Sidebar
                                                            </label>

                                                            <label class="ui-checkbox">
                                                                <input type="hidden" name="status" value="0">
                                                                <input type="checkbox" name="status" value="1" {{ isset($category) && $category->status == '1' ? 'checked' : '' }} />
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
                            </div>
                    </div>
                </div>
            </div>
            </div>


@endsection