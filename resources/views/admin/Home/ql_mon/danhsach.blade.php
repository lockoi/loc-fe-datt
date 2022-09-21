@extends('admin.index')
@section('tieudetrang')
Danh sách môn học
@endsection
@section('noidung')
<div class="container-fluid">
    <!-- Page Heading -->
    <div class="row">
        <div class="col-lg-12">
            <!-- Circle Buttons -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h3 class="m-0 font-weight-bold text-primary text-center">Danh Sách môn học</h3>
                </div>
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                          <tr style="background-color: rgb(247, 250, 67)">
                            <th class="text-center text-primary">STT</th>
                            <th class="text-center text-primary">Mã môn học</th>
                            <th class="text-center text-primary">Tên môn học</th>
                            <th class="text-center text-primary">Thời gian bắt đầu</th>
                            <th class="text-center text-primary">Thời gian kết thúc</th>
                            <th class="text-center text-primary">Sửa</th>
                            <th class="text-center text-primary">Xóa</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td class="text-center">1</td>
                            <td>John</td>
                            <td>Doe</td>
                            <td class="text-center">11/11/2022 11:22</td>
                            <td class="text-center">12/11/2022 23:59</td>
                            <td class="text-center text-primary"><a href="admin/monhoc/sua"><i class="fas fa-edit"></i></a></td>
                            <td class="text-center text-primary"><a href=""><i class="fa fa-trash"></i></a></td>
                          </tr>
                        </tbody>
                      </table>
                      <a href="admin/monhoc/them" type="submit" class="btn btn-primary">Thêm môn học</a>
                </div>
            </div>
        </div>
        </div>
    </div>
</div>
<!-- /.container-fluid -->
</div>
@endsection
