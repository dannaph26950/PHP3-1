<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    //
    public function index()
    {
        $products = Product::orderBy('id','desc')->paginate(5);
        return view('products.index', compact('products'));
    }
    public function create()
    {
        return view('products.create');
    }
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'author' => 'required',
            'price' => 'required',
            'date' => 'required',
            'quantity' => 'required',

        ]);

        Product::create($request->post());

        return redirect()->route('products.index')->with('success','Thêm Thành Công.');
    }
    public function destroy( string $id)
    {
        Product::find($id)->delete();
        return redirect()->route('products.index')->with('success','Xóa Thành Công.');
    }
    public function edit(string $id){
        $product=Product::find($id);
        return view('products.edit',compact('product'));
    }
    public function update(Request $request, $id)
    {
        Product::find($id)->update($request->all());
        return redirect()->route('products.index')->with('success','Sửa Thành Công.');
    }

}
