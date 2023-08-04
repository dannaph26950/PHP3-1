@include('dashboard')
@include('layouts.menu')
<div class="container mt-2">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Tác giả</h2>
            </div>
            <div class="pull-right mb-2">
                <a class="btn btn-success" href="{{ route('authors.create') }}"> Thêm Tác Giả</a>
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
            <th>Tên Tác Giả</th>

            <th width="280px">Thay Đổi</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($authors as $c)
            <tr>
                <td>{{ $c->id }}</td>
                <td>{{ $c->name }}</td>

                <td>
                    <form action="{{ route('authors.destroy',$c->id) }}" method="Post">
                        <a class="btn btn-primary" href="{{ route('authors.edit',$c->id) }}">Sửa</a>
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Xóa</button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    {!! $authors ->links() !!}
</div>
