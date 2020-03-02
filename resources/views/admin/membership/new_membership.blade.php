@extends('admin.template.master')

@section('content')
<div class="right_col" role="main">
  <div class="clearfix"></div>
    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          <div class="x_title">
            <h2>Add Membership</h2>
            <div class="clearfix"></div>
          </div>
          <div class="x_content"><br />
            @if(session()->has('msg'))
                <div class="alert alert-success">{{ session()->get('msg') }}</div>
            @endif
            <!-- Section For New User registration -->
            <form method="POST" autocomplete="off" action="{{ route('admin.add_membership') }}" class="form-horizontal form-label-left">
                @csrf

                <div class="well" style="overflow: auto">
                    <div class="form-row mb-3">
                        <div class="col-md-6 col-sm-12 col-xs-12 mb-3">
                            <label for="cate_id">Category</label>
                            <select class="form-control" name="cate_id" id="cate_id">
                                <option></option>
                                @if(!empty($category) && (count($category) > 0))
                                    @foreach($category as $key => $item)
                                        @if(old('cate_id') == $item->id)
                                            <option value="{{ $item->id }}" selected>
                                                {{ $item->category }}
                                            </option>
                                        @else
                                            <option value="{{ $item->id }}">
                                                {{ $item->category }}
                                            </option>
                                        @endif
                                    @endforeach
                                @endif
                            </select>
                            @error('cate_id')
                                <font style="font-weight: bold; color: red
                            ">{{ $message }}</font>
                            @enderror
                        </div>
                        <div class="col-md-6 col-sm-12 col-xs-12 mb-3">
                            <label for="membership_plan_name">Membership Plan Name</label>
                            <input type="text" class="form-control" name="membership_plan_name" placeholder="Enter Membership Plan Name" value="{{ old('membership_plan_name') }}">
                            @error('membership_plan_name')
                                <font style="font-weight: bold; color: red
                            ">{{ $message }}</font>
                            @enderror
                        </div>
                    </div>
                    <div class="form-row mb-3">
                        <div class="col-md-6 col-sm-12 col-xs-12 mb-3">
                            <label for="fees">Fees</label>
                            <input type="text" class="form-control" name="fees" placeholder="Enter Fees" id="fees" value="{{ old('fees') }}">
                            <font id="fees_check" style="font-weight: bold; color: red
                            "></font>
                            @error('fees')
                                <font style="font-weight: bold; color: red
                            ">{{ $message }}</font>
                            @enderror
                        </div>
                        <div class="col-md-6 col-sm-12 col-xs-12 mb-3">
                            <label for="period">Membership Period</label>
                            <select class="form-control" name="period" id="period" value="" required>
                                <option>Select Period</option>
                                @if(old('period') == 1)
                                    <option value="1">Monthly</option>
                                    <option value="2">Yearly</option>
                                @elseif(old('period') == 2)
                                    <option value="1">Monthly</option>
                                    <option value="2" selected>Yearly</option>
                                @else
                                    <option value="1">Monthly</option>
                                    <option value="2">Yearly</option>
                                @endif
                            </select>
                            @error('period')
                                <font style="font-weight: bold; color: red
                            ">{{ $message }}</font>
                            @enderror
                        </div>
                    </div>
                </div>

              <div class="ln_solid"></div>
                <div class="form-group">
                  <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                    <button type="submit" name="submit" class="btn btn-primary">Add Membership</button>
                    <a href="{{ route('admin.dashboard') }}" class="btn btn-danger">Cancel</a>
                  </div>
                </div>
            </form>
            <!-- End New User registration -->
            </div>
          </div>
        </div>
      </div>
</div>
@endsection

@section('script')
<script type="text/javascript">
$(document).ready(function () {

    $("#fees").keypress(function (e) {
        if (e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57)) {

            $("#fees_check").html("Digits Only").show().fadeOut("slow");
            return false;
        }
    });
});
</script>
@endsection
