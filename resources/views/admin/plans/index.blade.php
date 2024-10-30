@extends('layouts.master')

@section('title','Users')

@section('content')

<!-- START PAGE CONTENT-->
 <div class="page-heading">
                <h4 class="page-title">Plans</h4>
            </div>
            <div class="page-content fade-in-up">
                <div class="ibox">
                    <div class="ibox-head">
                        <div class="ibox-title">Plans List</div>
                            <div class="ibox-tools">
                                <a class="btn btn-success text-white" href="{{url('admin/add-plan')}}">Add Plan</a>
                            </div>
                    </div>
                    <div class="ibox-body">
                        <table class="table table-striped table-bordered table-hover" id="example-table" cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Heading Name</th>
                                    <th>price Name</th>
                                     <th>Month Years</th>
                                    <th>Plan Desc</th>
                                    <th>Post QTY</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>ID</th>
                                    <th>Heading Name</th>
                                    <th>price Name</th>
                                     <th>Month Years</th>
                                    <th>Plan Desc</th>
                                    <th>Post QTY</th>
                                    <th>Action</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                @foreach ($Plans as $item)
                                <tr>
                                    <td>{{ $item->id }}</td>
                                    <td>{{ $item->heading_name }}</td>
                                    <td>{{ $item->price_name }}</td>
                                    <td>{{ $item->month_years }}</td>
                                    <td>{{ \Illuminate\Support\Str::words($item->plan_desc, 5, '...') }}</td>
                                    <td>{{ $item->post_qty }}</td>
                                    <td>
                                        <a href="{{ url('admin/plan/'. $item->id . '/edit') }}" class="btn btn-primary">Edit</a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

@endsection