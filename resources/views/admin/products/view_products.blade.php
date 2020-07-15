@extends('layouts.adminLayout.admin_design')
@section('content')

<div id="content">
<div id="content-header">
<div id="breadcrumb"> <a href="{{url ('/admin/dashboard')}}" title="" class="tip-bottom"><i class="icon-home"></i> Dashboard</a>
  <a href="{{url ('/admin/view-products')}}">Sản phẩm</a> <a href="{{url ('/admin/view-products')}}" class="current">Danh sách sản phẩm</a> </div>
  <h1>Sản phẩm</h1>
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
    <h5>Danh sách sản phẩm</h5>
</div>
<div class="widget-content nopadding">
  <table class="table table-bordered data-table">
    <thead>
      <tr>
        <th>STT</th>
        <th>Thương hiệu</th>
        <th>Tên sản phẩm</th>
        <th>Mã sản phẩm</th>
        <th>Giá cũ (VNĐ)</th>
        <th>Giá mới (VNĐ)</th>
        <th>Ảnh</th>
        <th>Hành động</th>
      </tr>
    </thead>
    <tbody>
    @foreach($products as $product)
        <tr class="gradeX">
        <td>{{ $product->id }}</td>
        <td>{{ $product->category_name }}</td>
        <td>{{ $product->product_name }}</td>
        <td>{{ $product->product_code }}</td>
        <td>{{number_format($product->old_price, 0) }}</td>
        <td>{{ number_format($product->new_price, 0)}}</td>
        <td>
            @if(!empty($product->image))
        <img src="{{asset('/images/backend_img/products/small/'.$product->image)}}"
        style="width:60px;">
        </td>
            @endif
      <td class="center">
        <div class="btn-group"><a href="#myModal{{ $product->id }}" data-toggle="modal" 
        class="btn btn-success btn-mini" title="Chi tiết">Chi tiết</a>
        <a href="{{url('/admin/edit-product/'.$product->id)}}" class="btn btn-primary btn-mini" title="Cập nhật sản phẩm">Sửa</a>
        <a href="{{url('/admin/add-attributes/'.$product->id)}}" class="btn btn-info btn-mini" title="Thuộc tính">Thuộc tính</a> 
        <a href="{{url('/admin/add-images/'.$product->id)}}" class="btn btn-warning btn-mini" title="Thêm ảnh">Thêm ảnh</a> 
      <a  rel="{{$product->id}}" rel1="delete-product"
        href="javascript:" class="btn btn-danger btn-mini deleteRecord" title="Delete Products">Xóa
      </a>
      </div>
      </td>              
    </tr> 
      <div id="myModal{{ $product->id }}" class="modal hide">
        <div class="modal-header">
          <button data-dismiss="modal" class="close" type="button">X</button>
            <h2>{{ $product->product_name }}</h2>
        </div>
               
        <div class="modal-body">
          <pre><b><ins>Mã sản phẩm:</ins></b> &emsp;&emsp;  {{ $product->product_code }}</pre> 
          <pre><b><ins>Mô tả:</ins></b> &emsp;&emsp; <p style="">{{ $product->description }}</p></pre> 
          <pre><b><ins>Giá cũ:</ins></b> &emsp;&emsp; {{$product->old_price }}</pre> 
          <pre><b><ins>Giá mới:</ins></b> &emsp;&emsp; {{$product->new_price }}</pre>
          <pre><b><ins>Thương hiệu:</ins></b> &emsp;&emsp; {{ $product->thuong_hieu }}</pre> 
          <pre><b><ins>Bảo hành:</ins></b> &emsp;&emsp; {{ $product->bao_hanh }}</pre>
          <pre><b><ins>Màu sắc:</ins></b> &emsp;&emsp; {{ $product->mau_sac }}</pre> 
          <pre><b><ins>Series laptop:</ins></b> &emsp;&emsp; {{$product->series_laptop }}</pre> 
          <pre><b><ins>Màn hình:</ins></b> &emsp;&emsp;<p> {{ $product->man_hinh }}</p></pre> 
          <pre><b><ins>CPU:</ins></b> &emsp;&emsp; {{ $product->CPU }}</pre> 
          <pre><b><ins>Thế hệ CPU:</ins></b> &emsp;&emsp; {{$product->thehe_CPU }}</pre> 
          <pre><b><ins>RAM:</ins></b> &emsp;&emsp; {{$product->RAM }}</pre>
          <pre><b><ins>Chip đồ họa:</ins></b> &emsp;&emsp; {{ $product->chip_do_hoa }}</pre> 
          <pre><b><ins>Lưu trữ:</ins></b> &emsp;&emsp; {{ $product->luu_tru }}</pre>
          <pre><b><ins>Cổng xuất trình:</ins></b> &emsp;&emsp; {{ $product->cong_xuat_trinh }}</pre> 
          <pre><b><ins>Cổng kết nối:</ins></b> &emsp;&emsp; {{$product->cong_ket_noi }}</pre>
          <pre><b><ins>Kết nối không dây:</ins></b> &emsp;&emsp; {{$product->ket_noi_khong_day }}</pre> 
          <pre><b><ins>Bàn phím:</ins></b> &emsp;&emsp; {{$product->ban_phim }}</pre>
          <pre><b><ins>Hệ điều hành:</ins></b> &emsp;&emsp; {{ $product->he_dieu_hanh }}</pre> 
          <pre><b><ins>Kích thước:</ins></b> &emsp;&emsp; {{ $product->	kich_thuoc }}</pre>
          <pre><b><ins>PIN:</ins></b> &emsp;&emsp; {{ $product->pin }}</pre> 
          <pre><b><ins>Khối lượng:</ins></b> &emsp;&emsp; {{$product->khoi_luong }}</pre> 
          <pre><b><ins>Bảo mật:</ins></b> &emsp;&emsp; {{ $product->bao_mat }}</pre> 
          <pre><b><ins>Đèn LED:</ins></b> &emsp;&emsp; {{ $product->den_LED }}</pre> 
          <pre><b><ins>Ổ đĩa:</ins></b> &emsp;&emsp; {{$product->o_dia }}</pre> 
          <pre><b><ins>Ngày tạo:</ins></b> &emsp;&emsp; {{$product->created_at }}</pre>
          <pre><b><ins>Ngày cập nhật:</ins></b> &emsp;&emsp; {{ $product->updated_at }}</pre>                   
        </div>
      </div>
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

