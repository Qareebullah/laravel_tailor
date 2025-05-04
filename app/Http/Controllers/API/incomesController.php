<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\incomes;

class incomesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $fetchAll = incomes::all();
        if($fetchAll){
            return response()->json([
                'status' => true,
                'message' => "Data has been fetch Successfully",
                'data' => $fetchAll
            ], 200);
        }
        else
        {
            return response()->json([
                'status' => false,
                'message' => "failed to fetch Data"
            ], 404);
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'amount' => 'required|numeric',
            'source' => 'required|string',
            'description' => 'required|string',
            'payment_method' => 'required|string',
            'reference' => 'required|string',
            'status' => 'required|string',
            'inserted_by' => 'required|integer',
        ]);

        $insertIncomes = new incomes();
        $insertIncomes->amount = $request->input('amount');
        $insertIncomes->source = $request->input('source');
        $insertIncomes->description = $request->input('description');
        $insertIncomes->payment_method = $request->input('payment_method');
        $insertIncomes->reference = $request->input('reference');
        $insertIncomes->status = $request->input('status');
        $insertIncomes->inserted_by = $request->input('inserted_by');
        if($insertIncomes->save()){
            return response()->json([
                'status' => true,
                'message' => "New Record has been added successfully",
                'data' => $insertIncomes
            ], 201);
        }
        else
        {
            return response()->json([
                'status' => false,
                'message' => "failed to add New Record"
            ], 404);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $findRecord = incomes::find($id);
        if($findRecord){
            return response()->json([
                'status' => true, 
                'message' => "Record has been founded successfully",
                'data' => $findRecord 
            ], 200);
        }
        else
        {
            return response()->json([
                'status' => false, 
                'message' => "fail to fine the Record"
            ], 404);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $updateRecord = incomes::find($id);
        if(!$updateRecord){
            return response()->json('Record has not been founded', 404);
        }
        $validated = $request->validate([
            'amount' => 'required|numeric',
            'source' => 'required|string',
            'description' => 'required|string',
            'payment_method' => 'required|string',
            'reference' => 'required|string',
            'status' => 'required|string',
            'inserted_by' => 'required|integer',
        ]);
        $updateRecord->amount = $request->input('amount');
        $updateRecord->source = $request->input('source');
        $updateRecord->description = $request->input('description');
        $updateRecord->payment_method = $request->input('payment_method');
        $updateRecord->reference = $request->input('reference');
        $updateRecord->status = $request->input('status');
        $updateRecord->inserted_by = $request->input('inserted_by');
        if($updateRecord->save()){
            return response()->json([
                'status' => true,
                'message' => "Record has been updated successfully",
                'data' => $updateRecord
            ], 201);
        }
        else
        {
            return response()->json([
                'status' => false,
                'message' => "failed to update Record"
            ], 404);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $deleteRecord = incomes::find($id)->forceDelete();
        if($deleteRecord){
            return response()->json([
                'status' => true, 
                'message' => "Record has been deleted successfully"
            ], 200);
        }
        else
        {
            return response()->json([
                'status' => true, 
                'message' => "failed to delete Record"
            ], 404);
        }
    }
}
