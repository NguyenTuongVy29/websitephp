@extends('layouts.frontLayout.front_design')
@section('content')

<div id="contact-page" class="container" >
<div class="bg">
<div class="row">    		
<div class="col-sm-8">    			   			
<h2 class="title text-center">Liên hệ <strong>Với chúng tôi</strong></h2> 
<div class="status alert alert-success" style="display: none"></div>
<form id="main-contact-form" class="contact-form row" name="contact-form" method="post">
<div class="form-group col-md-6">
    <input type="text" name="name" class="form-control" required="required" placeholder="Họ và tên">
</div>
<div class="form-group col-md-6">
    <input type="email" name="email" class="form-control" required="required" placeholder="Email">
</div>
<div class="form-group col-md-12">
    <input type="text" name="subject" class="form-control" required="required" placeholder="Chủ đề">
</div>
<div class="form-group col-md-12">
    <textarea name="message" id="message" required="required" class="form-control" rows="8" placeholder="Nội dung tin nhắn của ban"></textarea>
</div>                        
<div class="form-group col-md-12">
    <input type="submit" name="submit" class="btn btn-primary pull-right" value="Gửi">
</div>
</form>   			    				    				
<div id="gmap" class="contact-map">
</div>
</div>
<div class="col-sm-4">
<div class="contact-info">
<h2 class="title text-center">Thông tin liên hệ</h2>
<address>
    <p>Laptop Shop</p>
    <p>Trường Đại học Tài chính - Marketing</p>
    <p>Thành phố Hồ Chí Minh</p>
    <p>Phone: 0123456789</p>
    <p>Fax: 123456789</p>
    <p>Email: vynguyenmy81@gmail.com</p>
</address>
<div class="social-networks">
    <h2 class="title text-center">Thông tin khác</h2>
    <ul>
        <li>
            <a href="#"><i class="fa fa-facebook"></i></a>
        </li>
        <li>
            <a href="#"><i class="fa fa-twitter"></i></a>
        </li>
        <li>
            <a href="#"><i class="fa fa-google-plus"></i></a>
        </li>
        <li>
            <a href="#"><i class="fa fa-youtube"></i></a>
        </li>
    </ul>
</div>
</div>
</div>			 		
</div>    	  
</div>	
</div><!--/#contact-page-->

@endsection