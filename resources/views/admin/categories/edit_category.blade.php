@extends('layouts.adminLayout.admin_design')
@section('content')

<div id="content">
<div id="content-header">
<div id="breadcrumb"> <a href="index.html" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Dashboard</a>
  <a href="#">Danh mục</a> <a href="#" class="current">Cập nhật danh mục</a> </div>
<h1>Danh mục</h1>
</div>
<div class="container-fluid"><hr>
<div class="row-fluid">
  <div class="span12">
    <div class="widget-box">
      <div class="widget-title"> <span class="icon"> <i class="icon-info-sign"></i> </span>
        <h5>Cập nhật danh mục</h5>
      </div>
      <div class="widget-content nopadding">
      <form class="form-horizontal" method="post" action="{{url('/admin/edit-category/'.$categoryDetails->id)}}"
        name="edit_category" id="edit_category" novalidate="novalidate"> {{csrf_field()}}
        <div class="control-group">
          <label class="control-label">Tên danh mục</label>
          <div class="controls">
              <input type="text" name="category_name" id="category_name" value="{{$categoryDetails->Name}}">
          </div>
        </div>
          <div class="control-group">
              <label class="control-label">Loại sản phẩm</label>
              <div class="controls">
                  <select name="Parent_id" style="width:220px;">
                      <option value="0">Chọn loại sản phẩm</option>
                      @foreach($levels as $val)
                    <option value="{{ $val->id}}" @if( $val->id ==$categoryDetails->Parent_id) selected @endif>{{ $val->Name}}</option>
                    @endforeach
                    </select>
              </div>
            </div>
          <div class="control-group">
              <label class="control-label">Mô tả</label>
              <div class="controls">
                <textarea name="description" id="description">{{$categoryDetails->description}} </textarea>
              </div>
            </div>
          <div class="control-group">
            <label class="control-label">URL</label>
            <div class="controls">
              <input type="text" name="url" id="url" value="{{$categoryDetails->url}}">
            </div>
          </div>
          <div class="form-actions">
            <input type="submit" value="Cập nhật" class="btn btn-success">
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
</div>
</div>

@endsection