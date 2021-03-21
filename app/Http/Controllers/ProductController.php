<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{

    public function index() {

        $products = Product::all();
        return view(view: 'admin.products.index', compact(varname: 'products'));
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

    public function details() {

    }
}
