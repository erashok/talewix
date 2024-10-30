@extends('layouts.master')

@section('title','Post')

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
                                <a class="btn btn-success btn-sm" href="{{url('admin/add-post')}}">Add</a>
                            </div>
                    </div>
                    <div class="ibox-body">
                        <ul class="nav nav-pills">
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="pill" href="#Pending" role="tab" aria-controls="pills-Pending" aria-selected="true">Pending</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="pill" href="#AdsPending" role="tab" aria-controls="pills-AdsPending" aria-selected="false">Ads Pending</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="pill" href="#Acitve" role="tab" aria-controls="pills-Acitve" aria-selected="false">Acitve</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="pill" href="#Suspended" role="tab" aria-controls="pills-Suspended" aria-selected="false">Suspended</a>
                            </li>
                        </ul>
                        <div class="tab-content mt-3">
                            <div class="tab-pane fade show active" id="Pending" role="tabpanel" aria-labelledby="Pending-tab">
                                <table class="table table-striped table-bordered table-hover" id="example-table" cellspacing="0" width="100%">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Category Name</th>
                                            <th>Post Name</th>
                                            <th>Short Description </th>
                                            <th>Tags</th>
                                            <th>Image</th>
                                            <th>Ads Main</th>
                                            <th>Ads Sidebar</th>
                                            <th>Right Sidebar </th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                        <th>ID</th>
                                            <th>Category Name</th>
                                            <th>Post Name</th>
                                            <th>Short Description </th>
                                            <th>Tags</th>
                                            <th>Thumnail Image</th>
                                            <th>Ads Main</th>
                                            <th>Ads Sidebar</th>
                                            <th>Right Sidebar </th>
                                            <th>Status</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        @foreach ($posts as $item)
                                        <tr>
                                            <td>{{ $item->id }}</td>
                                            <td>{{ $item->category->name ?? 'No category' }}</td>
                                            <td>{{ $item->name }}</td>
                                            <td>
                                                @php
                                                    $description = explode(' ', $item->short_description);
                                                    $limitedDescription = implode(' ', array_slice($description, 0, 10));
                                                @endphp
                                                {{ $limitedDescription }}
                                            </td>
                                            <td>
                                                @php
                                                    // Decode the tags and handle possible issues
                                                    $tags = json_decode($item->tags, true); // Add true to convert to associative array
                                                @endphp
                                                @if(is_array($tags) && !empty($tags))
                                                    <ul>
                                                        @foreach($tags as $tag)
                                                            @if(is_string($tag)) <!-- Ensure $tag is a string before displaying -->
                                                                <li>{{ e($tag) }}</li> <!-- Use e() to escape HTML entities -->
                                                            @endif
                                                        @endforeach
                                                    </ul>
                                                @else
                                                    No tags available
                                                @endif
                                            </td>
                                            <td>
                                                @if ($item->thum_image)
                                                    <img src="{{ asset('upload/post/'.$item->thum_image) }}" alt="{{ $item->name }}" width="25px">
                                                @else
                                                    No Image
                                                @endif
                                            </td>
                                            <td>
                                                <span class="badge {{ $item->ads_main == '1' ? 'badge-pill badge-success' : 'badge-pill badge-danger' }}">
                                                    {{ $item->ads_main == '1' ? 'Active' : 'Inactive' }}
                                                </span>
                                            </td>
                                            <td>
                                                <span class="badge {{ $item->ads_sidebar == '1' ? 'badge-pill badge-success' : 'badge-pill badge-danger' }}">
                                                    {{ $item->ads_sidebar == '1' ? 'Active' : 'Inactive' }}
                                                </span>
                                            </td>
                                            <td>
                                                <span class="badge {{ $item->right_sidebar == '1' ? 'badge-pill badge-success' : 'badge-pill badge-danger' }}">
                                                    {{ $item->right_sidebar == '1' ? 'Active' : 'Inactive' }}
                                                </span>
                                            </td>
                                            <td>
                                                <span class="badge {{ $item->status == '1' ? 'badge-pill badge-success' : 'badge-pill badge-danger' }}">
                                                    {{ $item->status == '1' ? 'Active' : 'Inactive' }}
                                                </span>
                                            </td>
                                            <td>
                                                <a href="{{ url('admin/post/' . $item->id) }}" class="btn btn-primary">Edit</a>
                                                <a href="{{ url('admin/delete-post/' . $item->id) }}" class="btn btn-danger">Delete</a>
                                            </td>
                                        </tr>
                                        @endforeach
                                        
                                    </tbody>
                                </table>
                            </div>
                            <div class="tab-pane fade" id="AdsPending" role="tabpanel" aria-labelledby="AdsPending-tab">
                               Paid Pending
                            </div>
                            <div class="tab-pane fade" id="Acitve" role="tabpanel" aria-labelledby="Acitve-tab">
                               Acitve
                            </div>
                            <div class="tab-pane fade" id="Suspended" role="tabpanel" aria-labelledby="Suspended-tab">
                                Suspended
                            </div>
                        </div>
                    </div>
                </div>
            </div>

@endsection