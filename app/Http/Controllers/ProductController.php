<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;


class ProductController extends Controller
{

    public function index() {

        $products = Product::all();
        return view('admin.products.index', compact('products'));
    }

    public function show() {

        $products = Product::all();
        return view('admin.products.index', compact('products'));
    }

    public function create() {
        return view('admin.products.create');
    }

    public function store(Request $request) {
        
        // verify the form
        $request->validate([
            'name' => 'required',
            'price' => 'required',
            'description' => 'required'
        ]);

        // save the data into database
        Product::create([
            'name' => $request->name,
            'price' => $request->price,
            'description' => $request->description,
        ]);

        // session message
        $request->session()->flash('msg', 'Your product has been added');

        // redirect the page
        return redirect(to: 'products/create');
    }

    public function destroy($id) {
        $product = Product::find($id);
        
        $product->delete();

        session()->flash('msg', 'Product has been deleted');

        return redirect(to:'products');
    }

    public function edit($id) {
        $product = Product::find($id);

        return view('admin.products.edit', compact('product'));
    }

    public function update(Request $request, $id) {
        
        $product = Product::find($id);
        
        $request->validate([
            'name' => 'required',
            'price' => 'required',
            'description' => 'required'
        ]);

        $product->update([
            'name' => $request->name,
            'price' => $request->price,
            'description' => $request->description
        ]);

        $request->session()->flash('msg', 'Product has been updated');

        return redirect(to: 'products');
    }
}
