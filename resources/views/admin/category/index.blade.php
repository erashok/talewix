@extends('layouts.master')

@section('title','Category')

@section('content')

<!-- Modal -->
<div class="modal fade" id="deleteModel" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
        <form action="{{ url('admin/delete-category/') }}" method="POST">
            @csrf
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Delete Category with Post</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <input type="hidden" name="category_delete_id" id="category_id" />
            Are you sure want delete category and post ?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-danger">Yes Delete</button>
            </div>
        </form>
    </div>
  </div>
</div>


<!-- START PAGE CONTENT-->
 <div class="page-heading">
                <h4 class="page-title">Category</h4>
                @if (session('message'))
                    <div class="alert alert-success">{{session('message')}}</div>
                @endif
            </div>
            <div class="page-content fade-in-up">
                <div class="ibox">
                    <div class="ibox-head">
                        <div class="ibox-title">Category List</div>
                            <div class="ibox-tools">
                                <a class="btn btn-success text-white" href="{{url('admin/add-category')}}">Add</a>
                            </div>
                    </div>
                    <div class="ibox-body">
                        <table class="table table-striped table-bordered table-hover" id="example-table" cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Category Name</th>
                                    <th>Image</th>
                                    <th>NavBar</th>
                                    <th>Footer</th>
                                    <th>Side Bar</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>ID</th>
                                    <th>Category Name</th>
                                    <th>Image</th>
                                    <th>NavBar</th>
                                    <th>Footer</th>
                                    <th>Side Bar</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </tfoot>
                            <tbody>
                               @foreach ($category as $item)
                                <tr>
                                    <td>{{ $item->id }}</td>
                                    <td>{{ $item->name }}</td>
                                    <td>
                                        @if ($item->cat_image)
                                            <img src="{{ asset('upload/category/'.$item->cat_image) }}" alt="{{ $item->name }}" width="25px">
                                        @else
                                            No Image
                                        @endif
                                    </td>
                                     <td><span class="badge {{ $item->navbar_status == '1' ? 'badge-pill badge-success' : 'badge-pill badge-danger' }}">
                                        {{ $item->navbar_status == '1' ? 'Active' : 'Inactive' }}
                                        </span>
                                    </td>
                                     <td><span class="badge {{ $item->navbar_footer == '1' ? 'badge-pill badge-success' : 'badge-pill badge-danger' }}">
                                        {{ $item->navbar_footer == '1' ? 'Active' : 'Inactive' }}
                                        </span>
                                    </td>
                                     <td><span class="badge {{ $item->navbar_sidebar == '1' ? 'badge-pill badge-success' : 'badge-pill badge-danger' }}">
                                        {{ $item->navbar_sidebar == '1' ? 'Active' : 'Inactive' }}
                                        </span>
                                    </td>
                                    <td><span class="badge {{ $item->status == '1' ? 'badge-pill badge-success' : 'badge-pill badge-danger' }}">
                                        {{ $item->status == '1' ? 'Active' : 'Inactive' }}
                                        </span>
                                    </td>
                                   <td>
                                        <a href="{{ url('admin/edit-category/'. $item->id) }}" class="btn btn-primary">Edit</a>
                                         {{-- <a href="{{ url('admin/delete-category/'. $item->id) }}" class="btn btn-dander">Delete</a> --}}

                                         <button type="button" class="btn btn-dander deleteCategoryBtn" value="{{ $item->id }}">Delete</button>
                                   </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

@endsection

@section('scripts')

<script>
$(document).ready(function (){
    // $('.deleteCategoryBtn').click(function (e){

        $(document).on('click', '.deleteCategoryBtn', function(e){
        e.preventDefault();
        var category_id = $(this).val();

        $('#category_id').val(category_id)
        $('#deleteModel').modal('show');
    }

)
}

)
</script>
@endsection