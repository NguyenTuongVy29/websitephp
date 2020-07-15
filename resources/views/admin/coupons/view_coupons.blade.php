@extends('layouts.adminLayout.admin_design')
@section('content')

<div id="content">
<div id="content-header">
<div id="breadcrumb"> <a href="{{url ('/admin/dashboard')}}" title="" class="tip-bottom"><i class="icon-home"></i> Dashboard</a>
<a href="#">Khuyến mãi</a> <a href="#" class="current">Danh sách khuyến mãi</a> </div>
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
<div class="container-fluid">
<hr>
<div class="row-fluid">
<div class="span12">
<div class="widget-box">
<div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
<h5>Danh sách khuyến mãi</h5>
</div>
<div class="widget-content nopadding">
<table class="table table-bordered data-table">
        <thead>
            <tr>
            <th>STT</th>
            <th>Mã khuyến mãi</th>
            <th>Giảm giá</th>
            <th>Loại giảm giá</th>
            <th>Ngày bắt đầu</th>
            <th>Ngày kết thúc</th>
            <th>Nội dung</th>
            <th>Tình trạng</th>
            <th>Hành động</th>
            </tr>
        </thead>
        <tbody>
        @foreach($coupons as $coupon)
            <tr class="gradeX">
            <td>{{ $coupon->id }}</td>
            <td>{{ $coupon->coupon_code }}</td>
            <td>
            {{ $coupon->amount }}
            @if($coupon->amount_type == "Percentage")  @else  @endif
            </td>
            <td>{{ $coupon->amount_type }}</td>
            <td>{{ $coupon->start_day }}</td>
            <td>{{ $coupon->expiry_date }}</td>
            <td>{{ $coupon->content }}</td>
            <td>
            @if($coupon->status=="1") Hoạt động @else Hết hạn @endif
            </td>
            <td class="center">
            <a href="{{url('/admin/edit-coupon/'.$coupon->id)}}" class="btn btn-primary btn-mini" title="Sửa">Sửa</a>
            <a  rel="{{$coupon->id}}" rel1="delete-coupon"
            href="javascript:" class="btn btn-danger btn-mini deleteRecord" title="Xóa">Xóa</a></div>
        </td>              
        @endforeach
        </tbody>
        </table>
</div>
</div>
</div>
</div>
</div>
</div>
@endsection
