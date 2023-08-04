<?php

    namespace App\Http\Controllers;

    use Illuminate\Http\Request;
    use App\Models\Author;

    class AuthorController extends Controller
    {
        //
        public function index()
        {
            $authors = Author::orderBy('id','desc')->paginate(5);
            return view('authors.index', compact('authors'));
        }
        public function create()
        {
            return view('authors.create');

        }
        public function store(Request $request)
        {
            $request->validate([
                'name' => 'required',

            ]);

            author::create($request->post());

            return redirect()->route('authors.index')->with('success','Thêm Thành Công.');
        }
        public function show(authors $authors)
        {
            return view('authors.show',compact('authors'));
        }
        public function edit( $id)
        {
            $authors=author::find($id);
            return view('authors.edit',compact('authors'));
        }

        public function update(Request $request,string $id)
        {
            author::find($id)->update($request->all());
//        $company->fill($request->post())->save();

            return redirect()->route('authors.index')->with('success','Sửa Thành Công.');
        }

        public function destroy(string $id)
        {
            author::find($id)->delete();
            return redirect()->route('authors.index')->with('success','Xóa Thành Công.');
        }

    }
