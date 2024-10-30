@extends('layouts.master')

@section('title','User Edit')

@section('content')

<!-- START PAGE CONTENT-->
 <div class="page-heading">
                <h4 class="page-title">User</h4>
            </div>
            <div class="page-content fade-in-up">
                <div class="ibox">
                    <div class="ibox-head">
                        <div class="ibox-title">User Edit</div>
                        <div class="ibox-tools">
                                <a class="btn btn-danger text-white" href="{{url('admin/users')}}">Back</a>
                            </div>
                    </div>
                    <div class="ibox-body">
                       
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Name</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" value="{{$user->name}}" disabled>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Email</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" value="{{$user->email}}" disabled>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Created Date</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" value="{{$user->created_at->format('d/m/Y')}}" disabled>
                                        </div>
                                    </div>
                                     <form class="form-horizontal" action="{{url('admin/update-user/'.$user->id)}}" method="POST">
                                        @csrf
                                        @method('PUT')
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Role As</label>
                                            <div class="col-sm-10">
                                              <select name="role_as" class="form-control" id="">
                                                <option value="1" {{$user->role_as == '1'?'selected':''}} >Admin</option>
                                                <option value="0" {{$user->role_as == '0'?'selected':''}} >User</option>
                                                <option value="2" {{$user->role_as == '2'?'selected':''}} >Blogger</option>
                                              </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-sm-10 ml-sm-auto">
                                                <button class="btn btn-info" type="submit">Update User Role</button>
                                            </div>
                                        </div>
                                </form>
                    </div>
                </div>
            </div>

@endsection