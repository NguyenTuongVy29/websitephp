@extends('layouts.frontLayout.front_design')
@section('content')

<section>
<div class="container">
<div class="row">
    @if(Session::has('flash_message_error'))
    <div class="alert alert-danger alert-block">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
        </button>
        <strong>{{ session('flash_message_error') }}</strong>
    </div>
    @endif
    <div class="col-sm-3">
        @include('layouts.FrontLayout.front_sidebar')
    </div>

    <style>
        .card-content h6 {
            text-decoration: line-through;
        }
        .price h4 {
            text-decoration: line-through;
        }
        
    </style>

    <div class="col-sm-9 padding-right">
        <div class="product-details"><!--product-details-->
            <div class="col-sm-5">
                <div class="view-product">
                    <div class="easyzoom easyzoom--overlay easyzoom--with-thumbnails">
                    <a href="{{asset('images/backend_img/products/small/'.$productDetails->image)}}">
                        <img class="mainImage" style="width:300px;" src="{{asset('images/backend_img/products/small/'.$productDetails->image)}}" style="height:300px;" />
                    </a>
                    </div>
                </div>
                <div id="similar-product" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="item active thumbnails">
                    <!-- Wrapper for slides -->
                    @foreach($productAltimages as $altImages)
                    
                            <a href="{{asset('images/backend_img/products/small/'.$productDetails->image)}}"
                                data-standard="{{asset('images/backend_img/products/small/'.$productDetails->image)}}">
                                <img class="changeImage" style="width:90px; height:90px;" src="{{asset('images/backend_img/products/small/'.$productDetails->image)}}" alt="" />
                            </a>
                        
                    @endforeach
                        @foreach($productAltimages as $altImages)
                     
                            <a href="{{asset('images/backend_img/products/large/'.$altImages->image)}}" 
                                data-standard="{{asset('images/backend_img/products/large/'.$altImages->image)}}">
                                <img class="changeImage" style="width:90px;height:90px; cursor:pointer;" src="{{asset('images/backend_img/products/large/'.$altImages->image)}}" alt="">
                        
                    @endforeach
                    @foreach($productAltimages as $altImages)
                    
                            <a href="{{asset('images/backend_img/products/medium/'.$altImages->image)}}" 
                                data-standard="{{asset('images/backend_img/products/medium/'.$altImages->image)}}">
                                <img class="changeImage" style="width:90px;height:90px; cursor:pointer;" src="{{asset('images/backend_img/products/medium/'.$altImages->image)}}" alt="">
                            </a>     
                        
                    @endforeach
                        </div>
                    </div>
                </div>
            </div>
        
            <div class="col-sm-7">
                <form name="addtocartForm" id="addtocartForm" action="{{url('add-cart')}}" method="post"> {{ csrf_field() }}
                    <input type="hidden" name="product_id" value="{{$productDetails->id}}">
                    <input type="hidden" name="product_name" value="{{$productDetails->product_name}}">
                    <input type="hidden" name="product_code" value="{{$productDetails->product_code}}">
                    <input type="hidden" name="new_price" id="price" value="{{$productDetails->new_price}}">
                <div class="product-information"> <!--/product-information-->
                    <img src="images/product-details/new.jpg" class="newarrival" alt="" />
                    <h2>{{ $productDetails->product_name }}</h2>
                    <p>
                        Mã sản phẩm: {{ $productDetails->product_code }}  
                    </p>
                    <img src="images/product-details/rating.png" alt="" />
                    <span class="price">
                    <h4>{{number_format($productDetails->old_price, 0)}} VNĐ</h4>
                    <span id="getPrice"> {{number_format($productDetails->new_price, 0)}} VNĐ</span> <br>
                    <label>Số lượng: </label>
                    <input type="text" name="quantity" value="1" />
                    @if($total_stock>0)
                    <button type="submit" class="btn btn-fefault cart" id="cartButton">
                        <i class="fa fa-shopping-cart"></i>
                        Đặt hàng
                    </button>
                    @endif
                    </span>
                    <p><b>Tình trạng: </b><span id="Availability">@if($total_stock>0) Còn hàng @else Tạm thời hết hàng @endif</p></span>
                    <a href=""><img src="images/product-details/share.png" class="share img-responsive"  alt="" /></a>
                </div><!--/product-information-->
                </form>
            </div>
        </div>
    </div><!--/product-details-->



<div class="category-tab shop-details-tab"><!--category-tab-->
    <div class="col-sm-12">
        <ul class="nav nav-tabs">
            <li class="active"><a href="#description" data-toggle="tab">Mô tả</a></li>
            <li><a href="#detail" data-toggle="tab">Thông số kỹ thuật</a></li>
            <li><a href="#delivery" data-toggle="tab">Đánh giá</a></li>
        </ul>
    </div>

    <div class="tab-content">
        <div class="tab-pane fade active in" id="description" >
            <div class="col-sm-12">
                <p>{{ $productDetails->description }}</p>
            </div>
        </div>

    <div class="tab-pane fade" id="detail" >
        <table class="table table-striped">
            <tbody class="row">
                <tr>
                    <td class="col-sm-4">Thương hiệu</td>
                    <td class="col-sm-8">{{ $productDetails->thuong_hieu }}</td>
                </tr>
                <tr>
                    <td class="col-sm-4">Bảo hành</td>
                    <td class="col-sm-8">{{ $productDetails->bao_hanh }}</td>
                </tr>
                <tr>
                    <td class="col-sm-4">Màu sắc</td>
                    <td class="col-sm-8">{{ $productDetails->mau_sac }}</td>
                </tr>
                <tr>
                    <td class="col-sm-4">Series Laptop</td>
                    <td class="col-sm-8">{{ $productDetails->series_laptop }}</td>
                </tr>
                <tr>
                    <td class="col-sm-4">Màn hình</td>
                    <td class="col-sm-8">{{ $productDetails->man_hinh }}</td>
                </tr>
                <tr>
                    <td class="col-sm-4">CPU</td>
                    <td class="col-sm-8">{{ $productDetails->CPU }}</td>
                </tr>
                <tr>
                    <td class="col-sm-4">Thế hệ CPU</td>
                    <td class="col-sm-8">{{ $productDetails->thehe_CPU }}</td>
                </tr>
            </tbody>
        </table>

        <div class="bigfont">
            <input class="button" onclick="if 
            (this.parentNode.parentNode.getElementsByTagName('div')[1].getElementsByTagName('div')[0].style.display
            != '') { 
            this.parentNode.parentNode.getElementsByTagName('div')[1].getElementsByTagName('div')[0].style.display
            = ''; this.innerText = ''; this.value = 'Rút ngắn'; } else { 
            this.parentNode.parentNode.getElementsByTagName('div')[1].getElementsByTagName('div')[0].style.display
            = 'none'; this.innerText = ''; this.value = 'Xem thêm'; }"
            style="margin: 0px; padding: 0px; width: 100px; text-align: center;"
            type="button" value="Xem thêm" />
        </div>

        <div>
            <div style="display: none;">
                <table class="table table-striped">
                    <tbody>
                        <tr>
                            <td class="col-sm-4">RAM</td>
                            <td class="col-sm-8">{{ $productDetails->RAM }}</td>
                        </tr>
                        <tr>
                            <td>Chip đồ họa</td>
                            <td>{{ $productDetails->chip_do_hoa }}</td>
                        </tr>
                        <tr>
                            <td>Lưu trữ</td>
                            <td>{{ $productDetails->luu_tru }}</td>           
                        </tr>
                        <tr>
                            <td>Cổng xuất trình</td>
                            <td>{{ $productDetails->cong_xuat_trinh }}</td>
                        </tr>
                        <tr>
                            <td>Cổng kết nối</td>
                            <td>{{ $productDetails->cong_ket_noi }}</td>          
                        </tr>
                        <tr>
                            <td>Kết nối không dây</td>
                            <td>{{ $productDetails->ket_noi_khong_day }}</td>
                        </tr>
                        <tr>
                            <td>Bàn phím</td>
                            <td>{{ $productDetails->ban_phim }}</td>
                        </tr>
                        <tr>
                            <td>Hệ điều hành</td>
                            <td>{{ $productDetails->he_dieu_hanh }}</td>          
                        </tr>
                        <tr>
                            <td>Kích thước</td>
                            <td>{{ $productDetails->kich_thuoc }}</td>
                        </tr>
                        <tr>
                            <td>PIN</td>
                            <td>{{ $productDetails->pin }}</td>
                        </tr>
                        <tr>
                            <td>Khối lượng</td>
                            <td>{{ $productDetails->khoi_luong }}</td>          
                        </tr>
                        <tr>
                            <td>Bảo mật</td>
                            <td>{{ $productDetails->bao_mat }}</td>
                        </tr>
                        <tr>
                            <td>Đèn LED</td>
                            <td>{{ $productDetails->den_LED }}</td>
                        </tr>
                        <tr>
                            <td>Ổ đĩa</td>
                            <td>{{ $productDetails->o_dia }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>  
    <div class="tab-pane fade" id="delivery" >
            <div class="col-sm-12">
                <p>Đánh giá sản phẩm<br></p>
            </div>   
        </div>
</div>
</div><!--/category-tab-->



<div class="recommended_items"><!--recommended_items-->
<h2 class="title text-center">Sản phẩm cùng loại</h2>
<div id="recommended-item-carousel" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
        <?php $count=1; ?>
        @foreach($relatedProducts->chunk(4) as $chunk)
            <div <?php if($count==1){ ?> class="item active" <?php } else{ ?> class="item" <?php } ?>>	
            @foreach($chunk as $item)
            <div class="col-sm-3">
                <div class="product-image-wrapper">
                    <div class="single-products" style="height: 350px">
                        <div class="card row"> 
                            <div class="col-md-12">
                                <div class="productinfo text-center " style>
                                    <div class="card-header">
                                        <a href="{{url('product/'.$item->id)}}"> <img src="{{asset('images/backend_img/products/small/'.$item->image)}}" alt="" /> </a>
                                    </div>
                                    <div class="card-content" >
                                        <h6>{{number_format($item->old_price, 0)}} VNĐ</h6>
                                        <h5>{{number_format($item->new_price, 0)}} VNĐ</h5>
                                        <a href="{{url('product/'.$item->id)}}"><p>{{$item->product_name}}</p></a> 
                                    </div>                          
                                    <div class="separator clear-left d-flex align-items-end"> 
                                        <div class="card-footer">
                                            <div class="row">
                                                <p class="btn-add">
                                                <i class="fa fa-list"></i>
                                                <a href="{{url('product/'.$item->id)}}" class="item-details">Chi tiết</a>
                                                <i class="fa fa-shopping-cart"></i>
                                                <a href="{{url('product/'.$item->id)}}">Đặt hàng</a>
                                                </p> 
                                            </div>
                                        </div>
                                    </div>
                                </div> 
                            </div> 
                        </div> 
                    </div>
                </div>
            </div>
            @endforeach
            </div>
        <?php $count++; ?>
        @endforeach
    </div>
        <a class="left recommended-item-control" href="#recommended-item-carousel" data-slide="prev">
        <i class="fa fa-angle-left"></i>
        </a>
        <a class="right recommended-item-control" href="#recommended-item-carousel" data-slide="next">
        <i class="fa fa-angle-right"></i>
        </a>			
    </div>
</div><!--/recommended_items-->

</div>
</div>
</div>
</section>
<script>

</script>
@endsection