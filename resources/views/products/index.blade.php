@include('dashboard')
@include('layouts.menu')
<div class="container mt-2">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Sách</h2>
            </div>
            <div class="pull-right mb-2">
                <a class="btn btn-success" href="{{ route('products.create') }}"> Thêm Sách</a>
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
            <th>Tên sách</th>
            <th>Tác Giả</th>
            <th>Giá</th>
            <th>Ngày</th>
            <th>Số lượng</th>
            <th width="280px">Thay Đổi</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($products as $product)
            <tr>
                <td>{{ $product->id }}</td>
                <td>{{ $product->name }}</td>
                <td>{{ $product->author }}</td>
                <td>{{ $product->price }}</td>
                <td>{{ $product->date }}</td>
                <td>{{ $product->quantity }}</td>
                <td>
                    <form action="{{ route('products.destroy',$product->id) }}" method="Post">
                        <a class="btn btn-primary" href="{{ route('products.edit',$product->id) }}">Sửa</a>
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Xóa</button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
{{--    {!! $companies->links() !!}--}}
</div>

