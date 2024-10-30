@extends('layouts.master')

@section('title','Users')

@section('content')

<!-- START PAGE CONTENT-->
 <div class="page-heading">
                <h4 class="page-title">Users</h4>
            </div>
            <div class="page-content fade-in-up">
                <div class="ibox">
                    <div class="ibox-head">
                        <div class="ibox-title">Users List</div>
                    </div>
                    <div class="ibox-body">
                        <table class="table table-striped table-bordered table-hover" id="example-table" cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                     <th>Role As</th>
                                    <th>Edit</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                   <th>ID</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Role As</th>
                                    <th>Edit</th>
                                </tr>
                            </tfoot>
                            <tbody>
                               @foreach ($users as $item)
                                <tr>
                                    <td>{{ $item->id }}</td>
                                    <td>{{ $item->name }}</td>
                                    <td>{{ $item->email }}</td>
                                    <td>{{ $item->role_as == '1' ? 'Admin':'User' }}</td>
                                    <td> <a href="{{ url('admin/user/'. $item->id) }}" class="btn btn-primary">Edit</a></td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

@endsection