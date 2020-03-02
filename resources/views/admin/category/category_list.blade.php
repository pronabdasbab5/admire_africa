@extends('admin.template.master')

@section('content')
<div class="right_col" role="main">
          <div class="">
            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Category List</h2>
                    <ul class="navbar-right">
                      <a href="{{ route('admin.new_category') }}" class="btn btn-primary">Add Category</a>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
					
                    <table id="datatable" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                            <th>Sl No</th>
                            <th>Image</th>
                            <th>Name</th>
                            <th>Slug</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                      </thead>
                      <tbody class="form-text-element">
                        @if (count($category_list) > 0)

                            @foreach ($category_list as $key => $item)

                                <tr>
                                    <td>{{ $item->id }}</td>
                                    <td><img src="{{ asset('assets/category/'.$item->image.'') }}" height="100px"></td>
                                    <td>{{ $item->category }}</td>
                                    <td>{{ $item->slug }}</td>
                                    <td>
                                    @if($item->status == 1)
                                        <a class="btn btn-success">Active</a>
                                    @else
                                        <a class="btn btn-danger">In-Active</a>
                                    @endif
                                    </td>
                                    <td>
                                        @if($item->status == 1)
                                            <a href="{{ route('admin.category_status', ['category_id' => $item->id, 'status' => 2]) }}" class="btn btn-primary">In-Active</a>
                                        @else
                                            <a href="{{ route('admin.category_status', ['category_id' => $item->id, 'status' => 1]) }}" class="btn btn-primary">Active</a>
                                        @endif
                                        <a href="{{ route('admin.edit_category', ['category_id' => $item->id]) }}" class="btn btn-danger">Edit</a>
                                    </td>
                                </tr> 
                            @endforeach
                        @endif
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
@endsection