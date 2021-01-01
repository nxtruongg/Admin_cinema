@extends('admin.master')
@section('title')
    <h3 class="page-header ">
       Danh Sách Rạp/
        <a href="{{ Route('admin.rap.create') }} " class="btn btn-info" style="margin-top:-8px;">Thêm mới</a>
    </h3>
@stop
@section('content')                 
<div class="panel panel-default">
<div class="panel-heading">
    <b><i>Danh sách Rạp</i></b>
</div>
<!-- /.panel-heading -->
<div class="panel-body">
    <div class="dataTable_wrapper">

    <table class="table table-striped table-bordered table-hover" id="">
        <thead>
           
            <tr>
                <th>Mã Rạp</th>
                <th>Tên Rạp</th>
                <th>Địa chỉ</th>
                <th>Số phòng</th>
                <th>Số điện thoại</th>
                <th>Trạng thái</th>
                <th>Xóa</th>
                <th>Sửa</th>
            </tr>
            
        </thead>
        @foreach($rap as $rp)
        <tbody>
       
        <td>{{ $rp -> MaRap }}</td>
                <td>{{ $rp -> TenRap }}</td>
                <td>{{ $rp -> DiaChi }}</td>
                <td>{{ $rp -> SoPhong }}</td>
                <td>{{ $rp -> SDT }}</td>
                <td>{{ $rp -> TrangThai }}</td>
               
               
                <td class="center">
                <a onclick="return confirmDel('Bạn có chắc muốn xóa dữ liệu này?')" href="{{ Route('admin.rap.delete',$rp->MaRap) }}" type="button" class="btn btn-danger" data-toggle="tooltip" data-placement="left" title="Xóa"><i class="fa fa-trash-o  fa-fw"></i></a>
                <td class="center"><a href="{{ Route('admin.rap.update',$rp->MaRap) }}" type="button" class="btn btn-primary" data-toggle="tooltip" data-placement="left" title="Chỉnh sửa"><i class="fa fa-pencil fa-fw"></i></a>
                </td>
           
               
        </tbody>
        @endforeach
    </table>
   
</div>
    <!-- /.row -->
</div>
</div>
@stop