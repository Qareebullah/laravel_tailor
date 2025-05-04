<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\expense;

class expenseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $fetchAll = expense::all();
        if($fetchAll){
        return response()->json(
            [
                'status' => true,
                'message' => ' All Data fetch successfully',
                'data' => $fetchAll
            ], 200);
        }
        else
        {
        return response()->json(
            [
                'status' => false,
                'message' => 'failed to fetch Data'
            ], 404);
        }
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'purpose' => 'required|string|max:255',
            'amount' => 'required|numeric',
            'expense_by' => 'required|integer',
            'payment_method' => 'required|string',
            'reference' => 'required|string',
            'status' => 'required|string'
        ]);
        $insertExpense = new expense();
        $insertExpense->purpose = $request->input('purpose');
        $insertExpense->amount = $request->input('amount');
        $insertExpense->expense_by = $request->input('expense_by');
        $insertExpense->payment_method = $request->input('payment_method');
        $insertExpense->reference = $request->input('reference');
        $insertExpense->status = $request->input('status');
        $insertExpense->inserted_by = $request->input('inserted_by');
        if($insertExpense->save()){
            return response()->json([
                'status' => true,
                'message' => 'Expense has been inserted successfully'
            ], 201);
        }
        else{
            return response()->json([
                'status' => false,
                'message' => 'failed to insert expense'
            ], 404);
        }
        
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $findRecord = expense::find($id);
        if($findRecord){
            return response()->json(
                [
                    'status' => true,
                    'message' => 'Record has been founded successfully',
                    'data' => $findRecord
                ], 200);
            }
            else
            {
            return response()->json(
                [
                    'status' => false,
                    'message' => 'failed to find'
                ], 404);
            }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $updateRecord = expense::find($id);
        if(!$updateRecord){
            return response()->json([
                'status' => false,
                'message' => 'failed to fine such record'
            ], 404);
        }

        $validated = $request->validate([
            'purpose' => 'required|string|max:255',
            'amount' => 'required|numeric',
            'expense_by' => 'required|integer',
            'payment_method' => 'required|string',
            'reference' => 'required|string',
            'status' => 'required|string'
        ]);

        $updateRecord->purpose = $request->input('purpose');
        $updateRecord->amount = $request->input('amount');
        $updateRecord->expense_by = $request->input('expense_by');
        $updateRecord->payment_method = $request->input('payment_method');
        $updateRecord->reference = $request->input('reference');
        $updateRecord->status = $request->input('status');
        if($updateRecord->save()){
            return response()->json([
                'status' => true,
                'message' => 'Expense has been updated successfully'
            ], 200);
        }
        else{
            return response()->json([
                'status' => false,
                'message' => 'failed to update expense'
            ], 200);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $deleteRecord = expense::find($id)->forceDelete();
        if($deleteRecord){
            return response()->json(
                [
                    'status' => true,
                    'message' => 'Record has been deleted successfully'
                ], 200);
            }
            else
            {
            return response()->json(
                [
                    'status' => false,
                    'message' => 'failed to delete'
                ], 404);
            }
    }
}
