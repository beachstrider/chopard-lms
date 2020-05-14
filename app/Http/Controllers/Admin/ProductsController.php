<?php

namespace DLW\Http\Controllers\Admin;

use DLW\Models\Product;
use Illuminate\Http\Request;
use DLW\Http\Controllers\Controller;

class ProductsController extends Controller
{
    public function __construct(){
        $this->middleware('admin.guard');
    }
    
    public function index()
    {
        return view('admin.products.index', ['title'=>'Products']);
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show(Product $product)
    {
        //
    }

    public function edit(Product $product)
    {
        //
    }

    public function update(Request $request, Product $product)
    {
        //
    }

    public function destroy(Product $product)
    {
        //
    }
}
