<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Models\orders;

class ordersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $fetchAllOrders = orders::all();
        if($fetchAllOrders){
            return response()->json([
                'status' => true,
                'message' => "Data has been fetched successfully",
                'data' => $fetchAllOrders
            ], 200);
        }
        else
        {
            return response()->json([
                'status' => false,
                'message' => "failed to fetch data from the database"
            ], 404);
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $validatedData = $request->validate([
            'customer_id' => 'required|string',
            'tailor_id' => 'required|string',
            'added_by' => 'required|string',
            'order_status' => 'required|string',
            'payment' => 'required|numeric',
            'due' => 'required|numeric',
            'total' => 'required|numeric',
            'payment_status' => 'required|string'
        ]);

        $insertNewOrder = new orders();
        $insertNewOrder->customer_id = $request->input('customer_id');
        $insertNewOrder->tailor_id = $request->input('tailor_id');
        $insertNewOrder->added_by = $request->input('added_by');
        $insertNewOrder->order_status = $request->input('order_status');
        $insertNewOrder->payment = $request->input('payment');
        $insertNewOrder->due = $request->input('due');
        $insertNewOrder->total = $request->input('total');
        $insertNewOrder->payment_status = $request->input('payment_status');
        if($insertNewOrder->save()){
            return response()->json([
                'status' => true,
                'message' => "New record has been added successfully"
            ], 201);
        }
        else
        {
            return response()->json([
                'status' => false,
                'message' =>  "failed to fetch data from database"
            ], 404);
        }

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $founded = orders::find($id);
        if($founded){
            return response()->json([
                'status' => true,
                'message' => "find successfully"
            ], 200);
        }
        else
        {
            return response()->json([
                'status' => false,
                'message' => "failed to find the order"
            ], 404);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $updateOrder = orders::find($id);
        if(!$updateOrder){
            return response()->json([
                'status' => false,
                'message' => "Order with the mentioned id not found"
            ], 404);
        }

        $validatedData = $request->validate([
            'customer_id' => 'required|string',
            'tailor_id' => 'required|string',
            'added_by' => 'required|string',
            'order_status' => 'required|string',
            'payment' => 'required|numeric',
            'due' => 'required|numeric',
            'total' => 'required|numeric',
            'payment_status' => 'required|string'
        ]);

        $updateOrder->customer_id = $request->input('customer_id');
        $updateOrder->tailor_id = $request->input('tailor_id');
        $updateOrder->added_by = $request->input('added_by');
        $updateOrder->order_status = $request->input('order_status');
        $updateOrder->payment = $request->input('payment');
        $updateOrder->due = $request->input('due');
        $updateOrder->total = $request->input('total');
        $updateOrder->payment_status = $request->input('payment_status');
        if($updateOrder->save()){
            return response()->json([
                'status' => true,
                'message' => 'order has been updated successfully'
            ], 200);
        }
        else
        {
            return response()->json([
                'status' => false,
                'message' => 'failed to updated order'
            ], 404);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $deleteOrder = orders::find($id)->forceDelete();
        if($deleteOrder){
            return response()->json([
                'status' => true,
                'message' => 'order has been deleted successfully'
            ], 200);
        }
        else
        {
            return response()->json([
                'status' => false,
                'message' => 'failed to delete order'
            ], 404);
        }
    }
}
