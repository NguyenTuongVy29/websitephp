@extends('layouts.adminLayout.admin_design')
@section('content')

<div id="content">
<div id="content-header">
<div id="breadcrumb"> <a href="{{url ('/admin/dashboard')}}" title="" class="tip-bottom"><i class="icon-home"></i> Dashboard</a>
<a href="#">Khuyến mãi</a> <a href="#" class="current">Thêm khuyến mãi</a> </div>
<h1>Khuyến mãi</h1>
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
    <h5>Thêm khuyến mãi</h5>
  </div>
  <div class="widget-content nopadding">
  <form class="form-horizontal" method="post" action="{{ url('/admin/add-coupon') }}"
    name="add_coupon" id="add_coupon"> {{csrf_field()}}
      <div class="control-group">
        <label class="control-label">Mã khuyến mãi</label>
        <div class="controls">
          <input type="text" name="coupon_code" id="coupon_code" minlength="3" maxlength="10" required>
        </div>
      </div>
      <div class="control-group">
          <label class="control-label">Giảm giá</label>
          <div class="controls">
            <input type="number" name="amount" id="amount" min="1" required>
          </div>
        </div>
        <div class="control-group">
              <label class="control-label">Loại giảm giá</label>
              <div class="controls">
                  <select name="amount_type" id="amount_type" style="width:220px;">
                  <option>Chọn loại giảm giá </option>
                  <option value="Percentage">Tỷ lệ phần trăm</option>
                  <option value="Fixed">VNĐ</option>
                    </select>
              </div>
          </div>
        <div class="control-group">
            <label class="control-label">Ngày bắt đầu</label>
            <div class="controls">
              <input type="text" name="start_day" id="start_day" autocomplete="off" required>
            </div>
          </div>
        <div class="control-group">
            <label class="control-label">Ngày hết hạn</label>
            <div class="controls">
              <input type="text" name="expiry_date" id="expiry_date" autocomplete="off" required>
            </div>
          </div>
          <div class="control-group">
          <label class="control-label">Nội dung</label>
        <div class="controls">
          <input type="text" name="content" id="content" required>
        </div>
      </div>
          <div class="control-group">
            <label class="control-label">Hiệu lực</label>
            <div class="controls">
              <input type="checkbox" name="status" id="status" value="1">
            </div>
          </div>
            
      <div class="form-actions">
        <input type="submit" value="Thêm" class="btn btn-success">
      </div>
    </form>
  </div>
</div>
</div>
</div>
</div>
</div>

@endsection