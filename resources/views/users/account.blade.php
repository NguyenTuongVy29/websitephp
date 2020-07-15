@extends('layouts.frontLayout.front_design')
@section('content')

<section id="form" style="margin-top:20px;"><!--form-->
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
        @if(Session::has('flash_message_success'))
        <div class="alert alert-success alert-block">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
        <strong>{{ session('flash_message_success') }}</strong>
        </div>
        @endif
        <div class="breadcrumbs">
                <ol class="breadcrumb">
                <li class="active">Tài khoản của bạn</li>
                </ol>
        </div>
            <div class="col-sm-4 col-sm-offset-1">
                <div class="login-form">
                    <h2>Cập nhật thông tin</h2>
            <form id="accountForm" name="accountForm" action="{{url('/account')}}" method="post"> {{csrf_field()}}
            <input value="{{$userDetails->email}}" type="text" name="email" id="email" placeholder="Email">
            <input value="{{$userDetails->name}}" type="text" name="name" id="name" placeholder="Tên">
                <input value="{{$userDetails->street}}" type="text" name="street" id="street" placeholder="Số nhà/ Tên đường">
                <input value="{{$userDetails->sub_district}}" type="text" name="sub_district" id="sub_district" placeholder="Phường/ Xã">
                <input value="{{$userDetails->district}}" type="text" name="district" id="district" placeholder="Quận/ Huyện">
                <select name="country" id="country">
                    <option value="">Tỉnh/ Thành phố</option>
                    @foreach($countries as $country)
                <option value="{{$country->country_name}}" @if($country->country_name == $userDetails->country) selected @endif>
                    {{$country->country_name}}</option>
                @endforeach
                </select>
                <input value="{{$userDetails->postcode}}" style="margin-top:10px;" type="text" name="postcode" id="postcode" placeholder="Mã bưu điện">
                <input value="{{$userDetails->mobile}}" type="text" name="mobile" id="mobile" placeholder="Điện thoại">
                <button type="submit" class="btn btn-default">Cập nhật</button>
            </form>
                </div>
            </div>
            <div class="col-sm-1">
                <h2 class="or">HOẶC</h2>
            </div>
            <div class="col-sm-4">
                <div class="signup-form">
                    <h2>Đổi mật khẩu</h2>
                <form class="passwordForm" name="passwordForm" action="{{url('/update-user-pwd')}}" method="POST">{{csrf_field()}}
                <input type="password" name="current_pwd" id="current_pwd" placeholder="Mật khẩu hiện tại" required="required">
                <span id="chkPwd"></span>
                <input type="password" name="new_pwd" id="new_pwd" placeholder="Mật khẩu mới" required="required">
                <input type="password" name="confirm_pwd" id="confirm_pwd" placeholder="Xác nhận mật khẩu mới" required="required">
                <span id="con_pwd"></span>
                <button type="submit" class="btn btn-default">Cập nhật</button>
                </form>
                </div>
            </div>
        </div>
    </div>
</section><!--/form-->
<script>
    var password = document.getElementById("new_pwd")
  , confirm_password = document.getElementById("confirm_pwd");

function validatePassword(){
  if(new_pwd.value != confirm_pwd.value) {
    confirm_pwd.setCustomValidity("Passwords Don't Match");
  } else {
    confirm_pwd.setCustomValidity('');
  }
}

new_pwd.onchange = validatePassword;
confirm_pwd.onkeyup = validatePassword;
</script>
@endsection