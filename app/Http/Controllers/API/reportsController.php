<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\reports;

class reportsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $fetchAll = reports::all();
        if($fetchAll){
            return response()->json([
                'status' => true,
                'message' => "Data has been fetched successfully",
                'data' => $fetchAll
            ], 200);
        }
        else
        {
            return response()->json([
                'status' => false,
                'message' => "failed to fetch data"
            ], 404); 
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'type' => 'required|string',
            'total_orders' => 'required|numeric',
            'total_customers' => 'required|numeric',
            'total_staff' => 'required|numeric',
            'total_stock' => 'required|numeric',
            'total_incomes' => 'required|numeric',
            'total_expense' => 'required|numeric',
        ]);

        $insertNewReport = new reports();
        $insertNewReport->type = $request->input('type');
        $insertNewReport->total_orders = $request->input('total_orders');
        $insertNewReport->total_customers = $request->input('total_customers');
        $insertNewReport->total_staff = $request->input('total_staff');
        $insertNewReport->total_stock = $request->input('total_stock');
        $insertNewReport->total_incomes = $request->input('total_incomes');
        $insertNewReport->total_expense = $request->input('total_expense');
        if($insertNewReport->save()){
            return response()->json([
                'status' => true,
                'message' => 'New Report has been added successfully',
                'data' => $insertNewReport
            ], 201);
        }
        else
        {
            return response()->json([
                'status' => false,
                'message' => 'failed to add new Report'
            ], 404);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $findReport = reports::find($id);
        if($findReport){
            return response()->json([
                'status' => true,
                'message' => 'report has been founded successfully',
                'data' => $findReport
            ], 200);
        }
        else
        {
            return response()->json([
                'status' => true,
                'message' => 'failed to find report'
            ], 404);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $updateReport = reports::find($id);
        if(!$updateReport){
            return response()->json(['message' => 'failed to find this ID'], 404);
        }
        $validated = $request->validate([
            'type' => 'required|string',
            'total_orders' => 'required|numeric',
            'total_customers' => 'required|numeric',
            'total_staff' => 'required|numeric',
            'total_stock' => 'required|numeric',
            'total_incomes' => 'required|numeric',
            'total_expense' => 'required|numeric',
        ]);

        $updateReport->type = $request->input('type');
        $updateReport->total_orders = $request->input('total_orders');
        $updateReport->total_customers = $request->input('total_customers');
        $updateReport->total_staff = $request->input('total_staff');
        $updateReport->total_stock = $request->input('total_stock');
        $updateReport->total_incomes = $request->input('total_incomes');
        $updateReport->total_expense = $request->input('total_expense');
        if($updateReport->save()){
            return response()->json([
                'status' => true,
                'message' => 'select report has been updated successfully',
                'data' => $updateReport
            ], 200);
        }
        else
        {
            return response()->json([
                'status' => false,
                'message' => 'failed to update report'
            ], 404);
        }       
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $deleteReport = reports::find($id)->forceDelete();
        if($deleteReport){
            return response()->json([
                'status' => true,
                'message' => 'report has been deleted successfully'
            ], 200);
        }
        else
        {
            return response()->json([
                'status' => false,
                'message' => 'failed to delete report'
            ], 404);
        }
    }
}
