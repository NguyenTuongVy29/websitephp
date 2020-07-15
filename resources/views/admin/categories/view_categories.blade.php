@extends('layouts.adminLayout.admin_design')
@section('content')

<div id="content">
    <div id="content-header">
        <div id="breadcrumb"> <a href="index.html" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Dashboard</a>
        <a href="#">Danh mục</a> <a href="#" class="current">Danh sách danh mục</a> </div>
        <h1>Danh mục</h1>
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
              <h5>Danh sách danh mục</h5>
            </div>
            <div class="widget-content nopadding">
              <table class="table table-bordered data-table">
                <thead>
                  <tr>
                    <th>STT</th>
                    <th>Tên danh mục</th>
                    <th>Bậc danh mục</th>
                    <th>URL danh mục</th>
                    <th>Thực hiện</th>
                  </tr>
                </thead>
                <tbody>
                @foreach($categories as $category)
                  <tr class="gradeX">
                  <td>{{ $category->id }}</td>
                    <td>{{ $category->Name }}</td>
                    <td>{{ $category->Parent_id }}</td>
                    <td>{{ $category->url }}</td>
                  <td class="center"><div class="fr"><a href="{{url('/admin/edit-category/'.$category->id)}}" class="btn btn-primary btn-mini">Sửa</a>
                    <a  rel="{{$category->id}}" rel1="delete-category"
                        href="javascript:" class="btn btn-danger btn-mini deleteRecord">Xóa</a></div></td>              
                </tr>
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