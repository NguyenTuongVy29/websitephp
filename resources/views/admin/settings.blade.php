@extends('layouts.adminLayout.admin_design');
@section('content')
    <div id="content">
    <div id="content-header">
        <div id="breadcrumb"> <a href="{{ url('/admin/dashboard') }}" title="" class="tip-bottom"><i class="icon-home"></i>Dashboard</a><a href="#" class="current">Cài đặt</a> </div>
        <h1>Cài đặt</h1>
    </div>
    <div class="container-fluid"><hr>
        <div class="row-fluid">
        <div class="row-fluid">
            <div class="span12">
            <div class="widget-box">
                <div class="widget-title"> <span class="icon"> <i class="icon-info-sign"></i> </span>
                <h5>Đổi mật khẩu</h5>
                </div>
                <div class="widget-content nopadding">
                <form class="form-horizontal" method="post" action="#" name="password_validate" id="password_validate" novalidate="novalidate">
                <div class="control-group">
                    <label class="control-label">Mật khẩu hiện tại</label>
                    <div class="controls">
                        <input type="password" name="current_pwd" id="current_pwd"  />
                        <span id="chkPwd"></span>
                    </div>
                    </div>
                    <div class="control-group">
                    <label class="control-label">Mật khẩu mới</label>
                    <div class="controls">
                        <input type="password" name="new_pwd" id="new_pwd"  />
                    </div>
                    </div>
                    <div class="control-group">
                    <label class="control-label">Xác nhận mật khẩu mới</label>
                    <div class="controls">
                        <input type="password" name="confirm_pwd" id="confirm_pwd" 
                         />
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
    </div>
@endsection