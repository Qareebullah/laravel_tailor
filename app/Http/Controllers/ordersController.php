<?php

namespace App\Http\Controllers;

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
                'message' => "Data has been fetched successfully"
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
        if(!$updatedOrder){
            return response()->json([''], 500);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
