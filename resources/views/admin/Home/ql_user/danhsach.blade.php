@extends('admin.index')
@section('tieudetrang')
Danh sách người dùng
@endsection
@section('noidung')
<div class="container-fluid">
    <!-- Page Heading -->
    <div class="row">
        <div class="col-lg-12">
            <!-- Circle Buttons -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h3 class="m-0 font-weight-bold text-primary text-center">Danh sách người dùng</h3>
                </div>
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                          <tr style="background-color: rgb(247, 250, 67)">
                            <th class="text-center text-primary">STT</th>
                            <th class="text-center text-primary">Mã User</th>
                            <th class="text-center text-primary">Họ tên</th>
                            <th class="text-center text-primary">Email</th>
                            <th class="text-center text-primary">Vai trò</th>
                            <th class="text-center text-primary">Sửa</th>
                            <th class="text-center text-primary">Xóa</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td class="text-center">1</td>
                            <td>PC01</td>
                            <td>Doe</td>
                            <td class="text-center">doe1234@gmail.com</td>
                            <td class="text-center">Sinh viên</td>
                            <td class="text-center text-primary"><a href="admin/user/sua"><i class="fas fa-edit"></i></a></td>
                            <td class="text-center text-primary"><a href=""><i class="fa fa-trash"></i></a></td>
                          </tr>
                          <tr>
                            <td class="text-center">2</td>
                            <td>PC01</td>
                            <td>Jone</td>
                            <td class="text-center">jone1234@gmail.com</td>
                            <td class="text-center">Giảng viên</td>
                            <td class="text-center text-primary"><a href="admin/user/sua"><i class="fas fa-edit"></i></a></td>
                            <td class="text-center text-primary"><a href=""><i class="fa fa-trash"></i></a></td>
                          </tr>
                        </tbody>
                      </table>
                      <a href="admin/user/them" type="submit" class="btn btn-primary">Thêm môn học</a>
                </div>
            </div>
        </div>
        </div>
    </div>
</div>
<!-- /.container-fluid -->
</div>
@endsection
