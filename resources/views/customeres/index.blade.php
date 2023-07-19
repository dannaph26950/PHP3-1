@include('dashboard')
@include('layouts.menu')
    <div class="container mt-2">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2>Khách Hàng</h2>
                </div>
                <div class="pull-right mb-2">
                    <a class="btn btn-success" href="{{ route('customeres.create') }}"> Thêm Khách Hàng</a>
                </div>
            </div>
        </div>
@if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
@endif
<table class="table table-bordered">
    <thead>
    <tr>
        <th>STT</th>
        <th>Tên</th>
        <th>Email</th>
        <th>Địa chỉ</th>
        <th>SDT</th>
        <th width="280px">Thay Đổi</th>
    </tr>
    </thead>
    <tbody>
    @foreach ($customeres as $customer)
        <tr>
            <td>{{ $customer->id }}</td>
            <td>{{ $customer->name }}</td>
            <td>{{ $customer->email }}</td>
            <td>{{ $customer->address }}</td>
            <td>{{ $customer->phone }}</td>
            <td>
                <form action="{{ route('customeres.destroy',$customer->id) }}" method="Post">
                    <a class="btn btn-primary" href="{{ route('customeres.edit',$customer->id) }}">Sửa</a>
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Xóa</button>
                </form>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
{{--{!! $companies->links() !!}--}}
</div>

