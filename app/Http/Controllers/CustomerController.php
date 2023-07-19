<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;
class CustomerController extends Controller
{
    public function index()
    {
        $customeres = Customer::orderBy('id','desc')->paginate(5);
        return view('Customeres.index', compact('customeres'));
    }
    public function create()
    {
        return view('Customeres.create');
    }
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'address' => 'required',
            'phone'=>'required',
        ]);

        Customer::create($request->post());

        return redirect()->route('customeres.index')->with('success','Thêm Thành Công.');
    }
    public function destroy(string $id)
    {
        Customer::find($id)->delete();
        return redirect()->route('customeres.index')->with('success','Xóa Thành Công.');
    }
    /// edit Customer
    ///
    public function edit(string $id)
    {
        $customer=Customer::find($id);
        return view('customeres.edit',compact('customer'));
    }
    public function update(Request $request,string $id)
    {
        Customer::find($id)->update($request->all());
//        $company->fill($request->post())->save();
        return redirect()->route('customeres.index')->with('success','Sửa Thành Công.');
    }

}

