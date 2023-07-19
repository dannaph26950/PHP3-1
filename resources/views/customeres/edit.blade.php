@include('dashboard')
@include('layouts.menu')
<div class="container mt-2">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Sửa Khách Hàng</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('customeres.index') }}" enctype="multipart/form-data">
                    Quay lại</a>
            </div>
        </div>
    </div>
    @if(session('status'))
        <div class="alert alert-success mb-1 mt-1">
            {{ session('status') }}
        </div>
    @endif
    <form action="{{ route('customeres.update',$customer->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Tên:</strong>
                    <input type="text" name="name" value="{{ $customer->name }}" class="form-control"
                           placeholder="Tên ">
                    @error('name')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Email:</strong>
                    <input type="email" name="email" class="form-control" placeholder="Email"
                           value="{{ $customer->email }}">
                    @error('email')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Địa chỉ:</strong>
                    <input type="text" name="address" value="{{ $customer->address }}" class="form-control"
                           placeholder="Địa chỉ">
                    @error('address')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>SDT:</strong>
                    <input type="text" name="phone" value="{{ $customer->phone }}" class="form-control"
                           placeholder="Số Điện Thoại">
                    @error('phone')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <button type="submit" class="btn btn-primary ml-3">Gửi</button>
        </div>
    </form>
</div>

