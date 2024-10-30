@extends('layouts.master')

@section('title','Add Plan')

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
                        <div class="ibox-title">Plan List</div>
                            <div class="ibox-tools">
                                <a class="btn btn-success text-white" href="{{url('admin/add-plan')}}">Add Post</a>
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

                                            <form action="{{url('admin/add-plan')}}" method="POST" enctype="multipart/form-data">
                                                @csrf
                                                <div class="row">
                                                    <div class="col-sm-12 form-group">
                                                        <label>Heading</label>
                                                        <input class="form-control" type="text" name="heading_name" placeholder="Name">
                                                    </div>
                                                    <div class="col-sm-12 form-group">
                                                        <label>Price</label>
                                                        <input class="form-control" type="text" name="price_name" placeholder="Price">
                                                    </div>
                                                    <div class="col-sm-12 form-group">
                                                        <label>Month Years</label>
                                                        <input class="form-control" type="text" name="month_years" placeholder="Price">
                                                    </div>
                                                    <div class="col-sm-12 form-group">
                                                        <label>Short Description</label>
                                                        <input class="form-control" type="text" name="plan_desc" placeholder="Description">
                                                    </div>
                                                    <div class="col-sm-12 form-group">
                                                        <label>Tag Name</label>
                                                        <textarea name="tag_name" id="post_summernote" rows="8" class="form-control"></textarea>
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