<?php

namespace App\Http\Controllers;

use App\Models\Supplier;
use Illuminate\Http\Request;

class SupplierController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $suppliers = Supplier:: all();
        return view("suppliers", compact("suppliers"));
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
        $suppliers = new Supplier;
        $suppliers->name = $request->nombre;
        $suppliers->email = $request->email;
        $suppliers->save();
        return redirect()->route("suppliers.index");
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
        $supplier = Supplier:: find($id);
        return view("suppliers_edit", compact("supplier"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $supplier = Supplier:: find($id);
        $supplier->name = $request->nombre;
        $supplier->email = $request->email;
        $supplier->save();
        return redirect()->route("suppliers.index");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $supplier = Supplier:: find($id);
        $supplier->delete();
        return redirect()->route("suppliers.index");
    }
}
