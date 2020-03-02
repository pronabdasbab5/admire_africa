@extends('admin.template.master')

@section('content')
<div class="right_col" role="main">
          <div class="">
            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Membership List</h2>
                    <ul class="navbar-right">
                      <a href="{{ route('admin.new_membership') }}" class="btn btn-primary">Add Membership</a>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
					
                    <table id="datatable" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                            <th>Sl No</th>
                            <th>Category</th>
                            <th>Membership Name</th>
                            <th>Fees</th>
                            <th>Period</th>
                            <th>Action</th>
                        </tr>
                      </thead>
                      <tbody class="form-text-element">
                        @if (count($membership_list) > 0)

                            @foreach ($membership_list as $key => $item)

                                <tr>
                                    <td>{{ $item->id }}</td>
                                    <td>{{ $item->category }}</td>
                                    <td>{{ $item->membership_name }}</td>
                                    <td>{{ $item->fees }}</td>
                                    <td>
                                        @if($item->period == 1)
                                            Monthly
                                        @else
                                            Yearly
                                        @endif
                                    </td>
                                    <td>
                                        <a href="{{ route('admin.edit_membership', ['membership_id' => $item->id]) }}" class="btn btn-danger">Edit</a>
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