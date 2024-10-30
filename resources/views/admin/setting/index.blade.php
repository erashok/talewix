@extends('layouts.master')

@section('title','Setting')

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
                    <div class="ibox-body">

                                            <form action="{{url('admin/settings')}}" method="POST" enctype="multipart/form-data">
                                                @csrf
                                                <div class="row">
                                                    <div class="col-sm-12 form-group">
                                                        <label>Website Name</label>
                                                        <input class="form-control" type="text" name="website_name" placeholder="Website Name">
                                                    </div>
                                                    <div class="col-sm-12 form-group">
                                                        <label>Website Logo</label>
                                                        <input class="form-control" type="text" name="Website-logo" placeholder="Website-logo">
                                                    </div>
                                                    <div class="col-sm-12 form-group">
                                                        <label>Website Favicon</label>
                                                        <input class="form-control" type="file" name="Website_favicon" placeholder="Website Favicon">
                                                    </div>
                                                    <div class="col-sm-12 form-group">
                                                        <label>Description</label>
                                                        <input type="text" name="description" class="form-control" placeholder="Description">
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