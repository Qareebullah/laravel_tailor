<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\stock;

class stockController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $fetchAllStock = stock::all();
        if($fetchAllStock){
            return response()->json([
                'status' => true,
                'message' => 'Successfully fetch All Records from Stock'  
            ], 200);
        }
        else{
            return response()->json([
                'status' => false,
                'message' => 'failed to fetch All Records from Stock'  
            ], 200);
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'product' => 'required|string|max:255',
            'product_type' => 'required|string|max:255',
            'amount' => 'required|numeric',
            'color' => 'nullable|string|max:100',
            'purchase_price' => 'required|numeric',
            'expense' => 'nullable|numeric',
            'sell_price' => 'required|numeric',
            'medan_country' => 'nullable|string|max:200',
            'purchase_by' => 'nullable|string|max:255',
            'added_by' => 'required|integer',
        ]);
        $insertNewProduct = new Product();
        $insertNewProduct->product = $request->input('product');
        $insertNewProduct->product_type = $request->input('product_type');
        $insertNewProduct->amount = $request->input('amount');
        $insertNewProduct->color = $request->input('color');
        $insertNewProduct->purchase_price = $request->input('purchase_price');
        $insertNewProduct->expense = $request->input('expense');
        $insertNewProduct->sell_price = $request->input('sell_price');
        $insertNewProduct->medan_country = $request->input('medan_country');
        $insertNewProduct->purchase_by = $request->input('purchase_by');
        $insertNewProduct->added_by = $request->input('added_by');
    
        if($insertNewProduct->save()){
            return response()->json([
                'status' => true,
                'message' => "New Item has been added to the stock successfully"
            ], 201);
        }else{
            return response()->json([
                'status' => false,
                'message' => "failed to add New Item to the stock"
            ], 201);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $findStock = stock::find($id);
        if($findStock){
            return response()->json([
                'status' => true,
                'message' => "Item has been fined Successfully"
            ], 200);
        }else
        {
            return response()->json([
                'status' => true,
                'message' => "failed to find Item"
            ], 200);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $updateStock = stock::find($id);
        if (!$updateStock) {
            return response()->json([
                'status' => false,
                'message' => 'User with the mentioned not found.'
            ], 404); 
        }

        $validated = $request->validate([
            'product' => 'required|string|max:255',
            'product_type' => 'required|string|max:255',
            'amount' => 'required|numeric',
            'color' => 'nullable|string|max:100',
            'purchase_price' => 'required|numeric',
            'expense' => 'nullable|numeric',
            'sell_price' => 'required|numeric',
            'medan_country' => 'nullable|string|max:200',
            'purchase_by' => 'nullable|string|max:255',
            'added_by' => 'required|integer',
        ]);

        $updateStock->product = $request->input('product');
        $updateStock->product_type = $request->input('product_type');
        $updateStock->amount = $request->input('amount');
        $updateStock->color = $request->input('color');
        $updateStock->purchase_price = $request->input('purchase_price');
        $updateStock->expense = $request->input('expense');
        $updateStock->sell_price = $request->input('sell_price');
        $updateStock->medan_country = $request->input('medan_country');
        $updateStock->purchase_by = $request->input('purchase_by');
        $updateStock->added_by = $request->input('added_by');
        if($updateStock){
            return response()->json([
                'status' => true,
                'message' => "Item Has been updated successfully "
            ], 200);
        }
        else
        {
            return response()->json([
                'status' => false,
                'message' => "failed to update Item in the stock"
            ], 200);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $deleteStock = stock::find($id)->forceDelete();
        if($deleteStock){
            return response()->json([
                'status' => true,
                'message' => "Item has been deleted Successfully"
            ], 200);
        }
        else
        {
            return response()->json([
                'status' => false,
                'message' => "failed to deleted item from the stock"
            ], 200);
        }
    }
}
