@extends('layouts.adminLayout.admin_design')
@section('content')

<div id="content">
    <div id="content-header">
      <div id="breadcrumb"> <a href="{{url ('/admin/dashboard')}}" title="" class="tip-bottom"><i class="icon-home"></i> Dashboard</a>
        <a href="{{url ('/admin/view-products')}}">Sản phẩm</a> <a href="" class="current">Cập nhật sản phẩm</a> </div>
      <h1>Cập nhật sản phẩm</h1>
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
              <h5>Cập nhật sản phẩm</h5>
            </div>
            <div class="widget-content nopadding">
            <form enctype="multipart/form-data" class="form-horizontal" method="post" action="{{ url('/admin/edit-product/'.$productDetails->id) }}"
             name="edit_product" id="edit_product" novalidate="novalidate"> {{csrf_field()}}
             <div class="control-group">
                <label class="control-label">Loại</label>
                <div class="controls">
                    <select name="category_id" id="category_id" style="width:220px;">
                    <?php echo $categories_dropdown; ?>
                      </select>
                </div>
              </div>
                <div class="control-group">
                  <label class="control-label">Tên sản phẩm</label>
                  <div class="controls">
                  <input type="text" name="product_name" id="product_name" value="{{$productDetails->product_name}}">
                  </div>
                </div>
                <div class="control-group">
                    <label class="control-label">Mã sản phẩm</label>
                    <div class="controls">
                      <input type="text" name="product_code" id="product_code" value="{{$productDetails->product_code}}">
                    </div>
                  </div>
                <div class="control-group">
                    <label class="control-label">Mô tả</label>
                    <div class="controls">
                      <textarea name="description" id="description">{{$productDetails->description}}</textarea>
                    </div>
                  </div>
                    <div class="control-group">
                      <label class="control-label">Giá cũ</label>
                      <div class="controls">
                        <input type="text" name="old_price" id="old_price" value="{{$productDetails->old_price}}">
                      </div>
                    </div>
                    <div class="control-group">
                      <label class="control-label">Giá mới</label>
                      <div class="controls">
                        <input type="text" name="new_price" id="new_price" value="{{$productDetails->new_price}}">
                      </div>
                    </div>
                    <div class="control-group">
                      <label class="control-label">Thương hiệu</label>
                      <div class="controls">
                        <input type="text" name="thuong_hieu" id="thuong_hieu" value="{{$productDetails->thuong_hieu}}">
                      </div>
                    </div>
                    <div class="control-group">
                      <label class="control-label">Bảo hành</label>
                      <div class="controls">
                        <input type="text" name="bao_hanh" id="bao_hanh" value="{{$productDetails->bao_hanh}}">
                      </div>
                    </div>
                    <div class="control-group">
                      <label class="control-label">Màu sắc</label>
                      <div class="controls">
                        <input type="text" name="mau_sac" id="mau_sac" value="{{$productDetails->mau_sac}}">
                      </div>
                    </div>
                    <div class="control-group">
                      <label class="control-label">Series laptop</label>
                      <div class="controls">
                        <input type="text" name="series_laptop" id="series_laptop" value="{{$productDetails->series_laptop}}">
                      </div>
                    </div>
                    <div class="control-group">
                      <label class="control-label">Màn hình</label>
                      <div class="controls">
                        <input type="text" name="man_hinh" id="man_hinh" value="{{$productDetails->man_hinh}}">
                      </div>
                    </div>
                    <div class="control-group">
                      <label class="control-label">CPU</label>
                      <div class="controls">
                        <input type="text" name="CPU" id="CPU" value="{{$productDetails->CPU}}">
                      </div>
                    </div>
                    <div class="control-group">
                      <label class="control-label">Thế hệ CPU</label>
                      <div class="controls">
                        <input type="text" name="thehe_CPU" id="thehe_CPU" value="{{$productDetails->thehe_CPU}}">
                      </div>
                    </div>
                    <div class="control-group">
                      <label class="control-label">RAM</label>
                      <div class="controls">
                        <input type="text" name="RAM" id="RAM" value="{{$productDetails->RAM}}">
                      </div>
                    </div>
                    <div class="control-group">
                      <label class="control-label">Chip đồ họa</label>
                      <div class="controls">
                        <input type="text" name="chip_do_hoa" id="chip_do_hoa" value="{{$productDetails->chip_do_hoa}}">
                      </div>
                    </div>
                    <div class="control-group">
                      <label class="control-label">Lưu trữ</label>
                      <div class="controls">
                        <input type="text" name="luu_tru" id="luu_tru" value="{{$productDetails->luu_tru}}">
                      </div>
                    </div>
                    <div class="control-group">
                      <label class="control-label">Cổng xuất trình</label>
                      <div class="controls">
                        <input type="text" name="cong_xuat_trinh" id="cong_xuat_trinh" value="{{$productDetails->cong_xuat_trinh}}">
                      </div>
                    </div>
                    <div class="control-group">
                      <label class="control-label">Cổng kết nối</label>
                      <div class="controls">
                        <input type="text" name="cong_ket_noi" id="cong_ket_noi" value="{{$productDetails->cong_ket_noi}}">
                      </div>
                    </div>
                    <div class="control-group">
                      <label class="control-label">Kết nối không dây</label>
                      <div class="controls">
                        <input type="text" name="ket_noi_khong_day" id="ket_noi_khong_day" value="{{$productDetails->ket_noi_khong_day}}">
                      </div>
                    </div>
                    <div class="control-group">
                      <label class="control-label">Bàn phím</label>
                      <div class="controls">
                        <input type="text" name="ban_phim" id="ban_phim" value="{{$productDetails->ban_phim}}">
                      </div>
                    </div>
                    <div class="control-group">
                      <label class="control-label">Hệ điều hành</label>
                      <div class="controls">
                        <input type="text" name="he_dieu_hanh" id="he_dieu_hanh" value="{{$productDetails->he_dieu_hanh}}">
                      </div>
                    </div>
                    <div class="control-group">
                      <label class="control-label">Kích thước</label>
                      <div class="controls">
                        <input type="text" name="kich_thuoc" id="kich_thuoc" value="{{$productDetails->kich_thuoc}}">
                      </div>
                    </div>
                    <div class="control-group">
                      <label class="control-label">PIN</label>
                      <div class="controls">
                        <input type="text" name="pin" id="pin" value="{{$productDetails->pin}}">
                      </div>
                    </div>
                    <div class="control-group">
                      <label class="control-label">Khối lượng</label>
                      <div class="controls">
                        <input type="text" name="khoi_luong" id="khoi_luong" value="{{$productDetails->khoi_luong}}">
                      </div>
                    </div>
                    <div class="control-group">
                      <label class="control-label">Bảo mật</label>
                      <div class="controls">
                        <input type="text" name="bao_mat" id="bao_mat" value="{{$productDetails->bao_mat}}">
                      </div>
                    </div>
                    <div class="control-group">
                      <label class="control-label">Đèn LED</label>
                      <div class="controls">
                        <input type="text" name="den_LED" id="den_LED" value="{{$productDetails->den_LED}}">
                      </div>
                    </div>
                    <div class="control-group">
                      <label class="control-label">Ổ đĩa</label>
                      <div class="controls">
                        <input type="text" name="o_dia" id="o_dia" value="{{$productDetails->o_dia}}">
                      </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">Ảnh</label>
                        <div class="controls">
                          <input type="file" name="image" id="image">
                        <input type="hidden" name="current_image" value="{{$productDetails->image}}">
                        @if(!empty($productDetails->image))
                        <img style="width:50px;" src="{{asset('/images/backend_img/products/small/'.$productDetails->image)}}"> 
                        | <a href="{{url('/admin/delete-product-image/'.$productDetails->id)}}">Xóa</a>
                        @endif    
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