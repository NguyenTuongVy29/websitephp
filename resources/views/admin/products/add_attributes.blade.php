@extends('layouts.adminLayout.admin_design')
@section('content')

<div id="content">
    <div id="content-header">
      <div id="breadcrumb"> <a href="{{url ('/admin/dashboard')}}" title="" class="tip-bottom"><i class="icon-home"></i> Home</a>
        <a href="#">Thuộc tính sản phẩm</a>  </div>
      <h1>Thuộc tính sản phẩm</h1>
      @if(Session::has('flash_message_error'))
        <div class="alert alert-error alert-block">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
            </button>
        <strong>{{ session('flash_message_error') }}</strong>
        </div>
        @endif
        @if(Session::has('flash_message_success'))
        <div class="alert alert-success alert-block">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
            </button>
        <strong>{{ session('flash_message_success') }}</strong>
        </div>
        @endif
    </div>
    <div class="container-fluid"><hr>
      <div class="row-fluid">
        <div class="span12">
          <div class="widget-box">
            <div class="widget-title"> <span class="icon"> <i class="icon-info-sign"></i> </span>
              <h5>Thêm thuộc tính sản phẩm</h5>
            </div>
            <div class="widget-content nopadding">
                <form enctype="multipart/form-data" class="form-horizontal" method="post" action="{{ url('/admin/add-attributes/'.$productDetails->id) }}"
                name="add_attribute" id="add_attribute"> {{csrf_field()}}
                <input type="hidden" name="product_id" value="{{$productDetails->id}}">
                   <div class="control-group">
                    <label class="control-label">Tên sản phẩm: </label>
                    <label class="control-label"><strong>{{$productDetails->product_name}}</strong></label>
                   </div>
                       <div class="control-group">
                        <label class="control-label"></label>
                        <div class="field_wrapper">
                        <div>
                        <input type="text" name="sku[]" id="sku" placeholder="Mã sản phẩm" style="width:120px;" required/>
                        <input type="text" name="new_price[]" id="new_price" placeholder="Giá" style="width:120px;" required/>
                        <input type="text" name="stock[]" id="stock" placeholder="Tình trạng" style="width:120px;"required/>
                        <a href="javascript:void(0);" class="add_button" title="">Thêm</a>
                            </div>
                        </div>
                        </div>
                   <div class="form-actions">
                     <input type="submit" value="Thêm thuộc tính" class="btn btn-success">
                   </div>
                 </form>
            </div>
          </div>
        </div>
      </div>
      <div class="row-fluid">
        <div class="span12">
        <div class="widget-box">
        <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
        <h5>Danh sách thuộc tính</h5>
        </div>
        <div class="widget-content nopadding">
        <form enctype="multipart/form-data" action="{{ url('/admin/edit-attributes/'.$productDetails->id) }}" method="post"> {{ csrf_field() }}
        <table class="table table-bordered data-table">
          <thead>
            <tr>
              <th>STT</th>
              <th>Mã sản phẩm</th>
              <th>Giá</th>
              <th>Tình trạng trong kho</th>
              <th>Hành động</th>
            </tr>
          </thead>
          <tbody>
          @foreach($productDetails['attributes'] as $attribute)
              <tr class="gradeX">
              <td><input type="hidden" name="idAttr[]" value="{{$attribute->id }}"> {{$attribute->id }}</td>
              <td>{{ $attribute->sku }}</td>
              <td><input type="type" name="new_price[]" value="{{$attribute->price }}"></td>
              <td><input type="type" name="stock[]" value="{{$attribute->stock }}"></td>
            <td class="center"><div class="fr">
              <input type="submit" value="Sửa" class="btn btn-primary btn-mini">
            <a  rel="{{$attribute->id}}" rel1="delete-attribute"
              href="javascript:" class="btn btn-danger btn-mini deleteRecord">Xóa</a></div></td>              
          </tr> 
          @endforeach
          </tbody>
        </table>
          </form>
        </div>
        </div>
        </div>
        </div>
    </div>
  </div>
@endsection