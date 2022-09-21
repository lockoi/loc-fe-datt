@extends('admin.index')
@section('tieudetrang')
Thêm học kỳ
@endsection
@section('noidung')
<div class="container-fluid">
    <!-- Page Heading -->
    <div class="row">
        <div class="col-lg-12">
            <!-- Circle Buttons -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h3 class="m-0 font-weight-bold text-primary text-center">Thêm học kỳ</h3>
                </div>
                <div class="card-body">
                    <form>
                        <div class="form-group">
                          <label>Tên học kỳ</label>
                          <input type="text" class="form-control"placeholder="Học kỳ">
                        </div>
                        <button type="submit" class="btn btn-primary">Thêm</button>
                        <a href="admin/hocky/ds" type="submit" class="btn btn-primary">Danh sách</a>
                      </form>
                </div>
            </div>
        </div>
        </div>
    </div>
</div>
<!-- /.container-fluid -->
</div>
@endsection
