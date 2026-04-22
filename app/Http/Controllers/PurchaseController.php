<?php

namespace App\Http\Controllers;

use App\Models\Purchase;
use App\Models\Product;
use Illuminate\Http\Request;

class PurchaseController extends Controller
{
    public function index()
    {
        $products = Product:: all();
        $purchases = Purchase:: all();
        return view("purchases", compact("products", "purchases"));
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
        $purchase = new Purchase;
        $purchase->quantity = $request->cantidad;
        $purchase->product_id = $request->productos;
        $purchase->user_id = auth()->id();
        $purchase->save();
        return redirect()->route("purchases.index");
    
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
        $purchase = Purchase:: find($id);
        $products = Product::all();
        return view("purchases_edit", compact("products", "purchase"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $purchase = Purchase:: find($id);
        $purchase->quantity = $request->cantidad;
        $purchase->product_id = $request->productos;
        $purchase->user_id = auth()->id();
        $purchase->save();
        return redirect()->route("purchases.index");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $purchase = Purchase:: find($id);
        $purchase->delete();
        return redirect()->route("purchases.index");
    }
}
