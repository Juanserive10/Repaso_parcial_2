<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Supplier;
use Illuminate\Http\Request;

class ProductController extends Controller{

    public function index()
    {
        $products = Product:: all();
        $suppliers = Supplier:: all();
        return view("products", compact("products", "suppliers"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $product = new Product;
        $product->name = $request->nombre;
        $product->price = $request->precio;
        $product->supplier_id = $request->proveedores;
        $product->save();
        return redirect()->route("products.index");
    
    }
    /**
     * Display the specified resource.
     */
    public function show(Supplier $supplier)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $product = Product:: find($id);
        $suppliers = Supplier:: all();
        return view("products_edit", compact("product", "suppliers"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $product = Product:: find($id);
        $product->name = $request->nombre;
        $product->price = $request->precio;
        $product->supplier_id = $request->proveedores;
        $product->save();
        return redirect()->route("products.index");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $product = Product:: find($id);
        $product->delete();
        return redirect()->route("products.index");
    }
}
