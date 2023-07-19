<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categori;

class CategoryController extends Controller
{
    //
    public function index()
    {
        $categories = Categori::orderBy('id','desc')->paginate(5);
        return view('categories.index', compact('categories'));
    }
    public function create()
    {
        return view('categories.create');

    }
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',

        ]);

        Categori::create($request->post());

        return redirect()->route('categories.index')->with('success','Thêm Thành Công.');
    }
    public function show(Categories $categories)
    {
        return view('categories.show',compact('categories'));
    }
    public function edit( $id)
    {
        $categories=Categori::find($id);
        return view('categories.edit',compact('categories'));
    }

    public function update(Request $request,string $id)
    {
        Categori::find($id)->update($request->all());
//        $company->fill($request->post())->save();

        return redirect()->route('categories.index')->with('success','Sửa Thành Công.');
    }

    public function destroy(string $id)
    {
        Categori::find($id)->delete();
        return redirect()->route('categories.index')->with('success','Xóa Thành Công.');
    }

}
