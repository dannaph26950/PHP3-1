@include('dashboard')
@include('layouts.menu')
<div class="container mt-2">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Danh Mục Sách</h2>
            </div>
            <div class="pull-right mb-2">
                <a class="btn btn-success" href="{{ route('categories.create') }}"> Thêm Danh Mục</a>
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
            <th>Tên Danh Mục</th>

            <th width="280px">Thay Đổi</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($categories as $c)
            <tr>
                <td>{{ $c->id }}</td>
                <td>{{ $c->name }}</td>

                <td>
                    <form action="{{ route('categories.destroy',$c->id) }}" method="Post">
                        <a class="btn btn-primary" href="{{ route('categories.edit',$c->id) }}">Sửa</a>
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Xóa</button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    {!! $categories->links() !!}
</div>
