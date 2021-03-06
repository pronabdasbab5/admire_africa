@extends('admin.template.master')

@section('content')
<div class="right_col" role="main">
  <div class="clearfix"></div>
    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          <div class="x_title">
            <h2>Add Category</h2>
            <div class="clearfix"></div>
          </div>
          <div class="x_content"><br />
            @if(session()->has('msg'))
                <div class="alert alert-success">{{ session()->get('msg') }}</div>
            @endif
            <!-- Section For New User registration -->
            <form method="POST" autocomplete="off" action="{{ route('admin.add_category') }}" class="form-horizontal form-label-left" enctype="multipart/form-data">
                @method('PUT')
                @csrf

                <div class="well" style="overflow: auto">
                    <div class="form-row mb-3">
                        <div class="col-md-6 col-sm-12 col-xs-12 mb-3">
                            <label for="cate_name">Category Name</label>
                            <input type="text" class="form-control" name="cate_name" placeholder="Enter Category" id="cate_name">
                            @error('cate_name')
                                <font style="font-weight: bold; color: red">{{ $message }}</font>
                            @enderror
                        </div>
                        <div class="col-md-6 col-sm-12 col-xs-12 mb-3">
                            <label for="slug">Slug</label>
                            <input type="text" class="form-control" name="slug" placeholder="Enter Category" id="slug">
                            @error('slug')
                                <font style="font-weight: bold; color: red;">{{ $message }}</font>
                            @enderror
                        </div>
                        <div class="col-md-6 col-sm-12 col-xs-12 mb-3">
                            <label for="file">Upload Image (200*200)</label>
                            <input type="file" class="form-control" name="file" placeholder="Enter Category" id="file">
                            @error('file')
                                <font style="font-weight: bold; color: red;">{{ $message }}</font>
                            @enderror
                        </div>
                        <div class="col-md-6 col-sm-12 col-xs-12 mb-3">
                            <img width="100px" id="image">
                        </div>
                        <div class="col-md-12 col-sm-12 col-xs-12 mb-3">
                            <label for="rules">Rules</label>
                            <textarea name="rules"></textarea>
                        </div>
                    </div>
                </div>

              <div class="ln_solid"></div>
                <div class="form-group">
                  <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                    <button type="submit" name="submit" class="btn btn-primary">Add Category</button>
                    <a href="{{ route('admin.category_list') }}" class="btn btn-danger">Cancel</a>
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
<script src="https://cdn.ckeditor.com/4.13.1/standard/ckeditor.js"></script>
<script>
CKEDITOR.replace( 'rules' );
</script>
<script type="text/javascript">
$(document).ready(function(){

    $("#cate_name").keyup(function(){
        $("#slug").val($("#cate_name").val().toLowerCase());
    });

    $('#file').change(function(e){
        var url = URL.createObjectURL(e.target.files[0]);
        $('#image').attr('src', url);
    });
});
</script>
@endsection