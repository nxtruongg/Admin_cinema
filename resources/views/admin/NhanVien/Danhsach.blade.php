@extends('admin.master')
@section('title')
    <h3 class="page-header ">
       Nhân Viên/
        <a href="{{ Route('admin.nhanvien.create') }} " class="btn btn-info" style="margin-top:-8px;">Thêm mới</a>
    </h3>
@stop
@section('content')                 
<div class="panel panel-default">
<div class="panel-heading">
    <b><i>Danh Sách Nhân Viên</i></b>
</div>
<!-- /.panel-heading -->
<div class="panel-body">
    <div class="dataTable_wrapper">

    <table class="table table-striped table-bordered table-hover" id="">
        <thead>
           
            <tr>
                <th>Mã Nhân Viên</th>
                <th>Tên Nhân Viên</th>
                <th>CMND</th>
                <th>Số điện thoại</th>
                <th>Địa chỉ</th>
                <th>Mã Rạp</th>
                <th>Email</th>
                <th>Hình ảnh</th>
                <th>Tên tài khoản</th>
                <th>Mật khẩu</th>
                <th>Trạng thái</th>
                <th>Xóa</th>
                <th>Sửa</th>
            </tr>
            
        </thead>
        @foreach($nhanvien as $nv)
        <tbody>
       
        <td>{{ $nv -> MaNV }}</td>
                <td>{{ $nv -> TenNV }}</td>
                <td>{{ $nv -> CMND }}</td>
                <td>{{ $nv -> SDT }}</td>
                <td>{{ $nv -> DiaChi }}</td>
                <td>{{ $nv -> MaRap }}</td>
                <td>{{ $nv -> Email }}</td>
                
                <td>
                <img src="{{ asset('/upload/phim/'.$nv->Hinh) }}" alt="Image" style="width: 70px; height: 40px;">
                </td>
                <td>{{ $nv -> TenTK }}</td>
                <td>{{ $nv -> MK }}</td>
                <td>{{ $nv -> TrangThai }}</td>
                
                
                
               
                
                   
                   
                <td class="center">
                <a onclick="return confirmDel('Bạn có chắc muốn xóa dữ liệu này?')" href="{{ Route('admin.nhanvien.delete',$nv->MaNV) }}" type="button" class="btn btn-danger" data-toggle="tooltip" data-placement="left" title="Xóa"><i class="fa fa-trash-o  fa-fw"></i></a>
                <td class="center"><a href="{{ Route('admin.nhanvien.update',$nv->MaNV) }}" type="button" class="btn btn-primary" data-toggle="tooltip" data-placement="left" title="Chỉnh sửa"><i class="fa fa-pencil fa-fw"></i></a>
                </td>
           
               
        </tbody>
        @endforeach
    </table>
   
</div>
    <!-- /.row -->
</div>
</div>
@stop
