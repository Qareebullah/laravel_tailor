<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\measurements;

class measurementsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $fetchAll = measurements::all();
        if($fetchAll){

        return response()->json([
            'status' => true,
            'message' => "Fetched All Records"
        ], 200);
        }
        else
        {
            return response()->json([
                'status' => false,
                'message' => "failed"
            ], 404);
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
                'customer_id' => 'string',
                'tailor_id' => 'string',
                'stock_id' => 'string',
                'length' => 'string',
                'chest' => 'string',
                'shoulder' => 'string',
                'sleeve' => 'string',
                'sleeve_type' => 'string',
                'collar_type' => 'string',
                'tonban_length' => 'string',
                'tonban_type' => 'nullable|string',
                'cuff_type' => 'nullable|string',
                'cuff_size' => 'nullable|string',
                'yakhan' => 'nullable|string',
                'yakhan_type' => 'nullable|string',
                'skirt_type' => 'nullable|string',
                'front_pocket' => 'nullable|string',
                'front_double_pockets' => 'nullable|string',
                'side_pocket' => 'nullable|string',
                'side_double_pockets' => 'nullable|string',
                'buttons_type' => 'nullable|string',
                'shirt_length' => 'nullable|string',
                'shirt_chest' => 'nullable|string',
                'shirt_shoulder' => 'nullable|string',
                'shirt_sleeve' => 'nullable|string',
                'shirt_collar' => 'nullable|string',
                'shirt_collar_type' => 'nullable|string',
                'shirt_front_pock' => 'nullable|string',
                'shirt_front_double_pockets' => 'nullable|string',
                'shirt_type' => 'nullable|string',
                'shirt_buttons_type' => 'nullable|string',
                'pant_length' => 'nullable|string',
                'pant_waist' => 'nullable|string',
                'pant_thigh' => 'nullable|string',
                'pant_type' => 'nullable|string',
                'pant_buttons' => 'nullable|string',
                'coat_length' => 'nullable|string',
                'coat_chest' => 'nullable|string',
                'coat_waist' => 'nullable|string',
                'coat_shoulder' => 'nullable|string',
                'coat_sleeve' => 'nullable|string',
                'coat_sleeve_type' => 'nullable|string',
                'coat_type' => 'nullable|string',
                'coat_pockets' => 'nullable|string',
                'coat_inside_pockets' => 'nullable|string',
                'coat_buttons' => 'nullable|string',
                'waistcoat_length' => 'nullable|string',
                'waistcoat_chest' => 'nullable|string',
                'waistcoat_waist' => 'nullable|string',
                'waistcoat_shoulder' => 'nullable|string',
                'waistcoat_type' => 'nullable|string',
                'waistcoat_pockets' => 'nullable|string',
                'waistcoat_inside_pockets' => 'nullable|string',
                'waistcoat_buttons' => 'nullable|string',
                'added_by' => 'string',
        ]);

        $addMeasurements = new measurements();
    
        // Required fields
        $addMeasurements->customer_id = $request->customer_id;
        $addMeasurements->tailor_id = $request->tailor_id;
        $addMeasurements->stock_id = $request->stock_id;
        $addMeasurements->added_by = $request->added_by;
        
        // Main measurements
        $addMeasurements->length = $request->length;
        $addMeasurements->chest = $request->chest;
        $addMeasurements->shoulder = $request->shoulder;
        $addMeasurements->sleeve = $request->sleeve;
        $addMeasurements->sleeve_type = $request->sleeve_type;
        $addMeasurements->collar_type = $request->collar_type;
        
        // Tonban measurements
        $addMeasurements->tonban_length = $request->tonban_length;
        $addMeasurements->tonban_type = $request->tonban_type;
        $addMeasurements->cuff_type = $request->cuff_type;
        $addMeasurements->cuff_size = $request->cuff_size;
        $addMeasurements->yakhan = $request->yakhan;
        $addMeasurements->yakhan_type = $request->yakhan_type;
        $addMeasurements->skirt_type = $request->skirt_type;
        
        // Pockets and buttons
        $addMeasurements->front_pocket = $request->front_pocket;
        $addMeasurements->front_double_pockets = $request->front_double_pockets;
        $addMeasurements->side_pocket = $request->side_pocket;
        $addMeasurements->side_double_pockets = $request->side_double_pockets;
        $addMeasurements->buttons_type = $request->buttons_type;
        
        // Shirt measurements
        $addMeasurements->shirt_length = $request->shirt_length;
        $addMeasurements->shirt_chest = $request->shirt_chest;
        $addMeasurements->shirt_shoulder = $request->shirt_shoulder;
        $addMeasurements->shirt_sleeve = $request->shirt_sleeve;
        $addMeasurements->shirt_collar = $request->shirt_collar;
        $addMeasurements->shirt_collar_type = $request->shirt_collar_type;
        $addMeasurements->shirt_front_pock = $request->shirt_front_pock;
        $addMeasurements->shirt_front_double_pockets = $request->shirt_front_double_pockets;
        $addMeasurements->shirt_type = $request->shirt_type;
        $addMeasurements->shirt_buttons_type = $request->shirt_buttons_type;
        
        // Pant measurements
        $addMeasurements->pant_length = $request->pant_length;
        $addMeasurements->pant_waist = $request->pant_waist;
        $addMeasurements->pant_thigh = $request->pant_thigh;
        $addMeasurements->pant_type = $request->pant_type;
        $addMeasurements->pant_buttons = $request->pant_buttons;
        
        // Coat measurements
        $addMeasurements->coat_length = $request->coat_length;
        $addMeasurements->coat_chest = $request->coat_chest;
        $addMeasurements->coat_waist = $request->coat_waist;
        $addMeasurements->coat_shoulder = $request->coat_shoulder;
        $addMeasurements->coat_sleeve = $request->coat_sleeve;
        $addMeasurements->coat_sleeve_type = $request->coat_sleeve_type;
        $addMeasurements->coat_type = $request->coat_type;
        $addMeasurements->coat_pockets = $request->coat_pockets;
        $addMeasurements->coat_inside_pockets = $request->coat_inside_pockets;
        $addMeasurements->coat_buttons = $request->coat_buttons;
        
        // Waistcoat measurements
        $addMeasurements->waistcoat_length = $request->waistcoat_length;
        $addMeasurements->waistcoat_chest = $request->waistcoat_chest;
        $addMeasurements->waistcoat_waist = $request->waistcoat_waist;
        $addMeasurements->waistcoat_shoulder = $request->waistcoat_shoulder;
        $addMeasurements->waistcoat_type = $request->waistcoat_type;
        $addMeasurements->waistcoat_pockets = $request->waistcoat_pockets;
        $addMeasurements->waistcoat_inside_pockets = $request->waistcoat_inside_pockets;
        $addMeasurements->waistcoat_buttons = $request->waistcoat_buttons;
        $addMeasurements->added_by = $request->added_by;
        
        if($addMeasurements->save()){
            return response()->json([
                'status' => true,
                'message' => "New Measurements has been add to the customer"
            ], 201);
        }
        else{
            return response()->json([
                'status' => false,
                'message' => "Failed"
            ], 404);
        }

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $findMeasurements = measurements::find($id);
        if($findMeasurements){
            return response()->json([
                'status' => true,
                'message' => "find Successfully"
            ], 200);
        }else{
            return response()->json([
                'status' => false,
                'message' => "failed"
            ], 404);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $findMeasurements = measurements::find($id);
        if (!$findMeasurements) {
            return response()->json([
                'status' => false,
                'message' => 'Measurements not found.'
            ], 404);
        }

        $validated = $request->validate([
            'customer_id' => 'string',
            'tailor_id' => 'string',
            'stock_id' => 'string',
            'length' => 'nullable|string',
            'chest' => 'nullable|string',
            'shoulder' => 'nullable|string',
            'sleeve' => 'nullable|string',
            'sleeve_type' => 'nullable|string',
            'collar_type' => 'nullable|string',
            'tonban_length' => 'nullable|string',
            'tonban_type' => 'nullable|string',
            'cuff_type' => 'nullable|string',
            'cuff_size' => 'nullable|string',
            'yakhan' => 'nullable|string',
            'yakhan_type' => 'nullable|string',
            'skirt_type' => 'nullable|string',
            'front_pocket' => 'nullable|string',
            'front_double_pockets' => 'nullable|string',
            'side_pocket' => 'nullable|string',
            'side_double_pockets' => 'nullable|string',
            'buttons_type' => 'nullable|string',
            'shirt_length' => 'nullable|string',
            'shirt_chest' => 'nullable|string',
            'shirt_shoulder' => 'nullable|string',
            'shirt_sleeve' => 'nullable|string',
            'shirt_collar' => 'nullable|string',
            'shirt_collar_type' => 'nullable|string',
            'shirt_front_pock' => 'nullable|string',
            'shirt_front_double_pockets' => 'nullable|string',
            'shirt_type' => 'nullable|string',
            'shirt_buttons_type' => 'nullable|string',
            'pant_length' => 'nullable|string',
            'pant_waist' => 'nullable|string',
            'pant_thigh' => 'nullable|string',
            'pant_type' => 'nullable|string',
            'pant_buttons' => 'nullable|string',
            'coat_length' => 'nullable|string',
            'coat_chest' => 'nullable|string',
            'coat_waist' => 'nullable|string',
            'coat_shoulder' => 'nullable|string',
            'coat_sleeve' => 'nullable|string',
            'coat_sleeve_type' => 'nullable|string',
            'coat_type' => 'nullable|string',
            'coat_pockets' => 'nullable|string',
            'coat_inside_pockets' => 'nullable|string',
            'coat_buttons' => 'nullable|string',
            'waistcoat_length' => 'nullable|string',
            'waistcoat_chest' => 'nullable|string',
            'waistcoat_waist' => 'nullable|string',
            'waistcoat_shoulder' => 'nullable|string',
            'waistcoat_type' => 'nullable|string',
            'waistcoat_pockets' => 'nullable|string',
            'waistcoat_inside_pockets' => 'nullable|string',
            'waistcoat_buttons' => 'nullable|string',
            'added_by' => 'string',
        ]);

        // Required fields
        $findMeasurements->customer_id = $request->customer_id;
        $findMeasurements->tailor_id = $request->tailor_id;
        $findMeasurements->stock_id = $request->stock_id;
        $findMeasurements->added_by = $request->added_by;
        
        // Main measurements
        $findMeasurements->length = $request->length;
        $findMeasurements->chest = $request->chest;
        $findMeasurements->shoulder = $request->shoulder;
        $findMeasurements->sleeve = $request->sleeve;
        $findMeasurements->sleeve_type = $request->sleeve_type;
        $findMeasurements->collar_type = $request->collar_type;
        
        // Tonban measurements
        $findMeasurements->tonban_length = $request->tonban_length;
        $findMeasurements->tonban_type = $request->tonban_type;
        $findMeasurements->cuff_type = $request->cuff_type;
        $findMeasurements->cuff_size = $request->cuff_size;
        $findMeasurements->yakhan = $request->yakhan;
        $findMeasurements->yakhan_type = $request->yakhan_type;
        $findMeasurements->skirt_type = $request->skirt_type;
        
        // Pockets and buttons
        $findMeasurements->front_pocket = $request->front_pocket;
        $findMeasurements->front_double_pockets = $request->front_double_pockets;
        $findMeasurements->side_pocket = $request->side_pocket;
        $findMeasurements->side_double_pockets = $request->side_double_pockets;
        $findMeasurements->buttons_type = $request->buttons_type;
        
        // Shirt measurements
        $findMeasurements->shirt_length = $request->shirt_length;
        $findMeasurements->shirt_chest = $request->shirt_chest;
        $findMeasurements->shirt_shoulder = $request->shirt_shoulder;
        $findMeasurements->shirt_sleeve = $request->shirt_sleeve;
        $findMeasurements->shirt_collar = $request->shirt_collar;
        $findMeasurements->shirt_collar_type = $request->shirt_collar_type;
        $findMeasurements->shirt_front_pock = $request->shirt_front_pock;
        $findMeasurements->shirt_front_double_pockets = $request->shirt_front_double_pockets;
        $findMeasurements->shirt_type = $request->shirt_type;
        $findMeasurements->shirt_buttons_type = $request->shirt_buttons_type;
        
        // Pant measurements
        $findMeasurements->pant_length = $request->pant_length;
        $findMeasurements->pant_waist = $request->pant_waist;
        $findMeasurements->pant_thigh = $request->pant_thigh;
        $findMeasurements->pant_type = $request->pant_type;
        $findMeasurements->pant_buttons = $request->pant_buttons;
        
        // Coat measurements
        $findMeasurements->coat_length = $request->coat_length;
        $findMeasurements->coat_chest = $request->coat_chest;
        $findMeasurements->coat_waist = $request->coat_waist;
        $findMeasurements->coat_shoulder = $request->coat_shoulder;
        $findMeasurements->coat_sleeve = $request->coat_sleeve;
        $findMeasurements->coat_sleeve_type = $request->coat_sleeve_type;
        $findMeasurements->coat_type = $request->coat_type;
        $findMeasurements->coat_pockets = $request->coat_pockets;
        $findMeasurements->coat_inside_pockets = $request->coat_inside_pockets;
        $findMeasurements->coat_buttons = $request->coat_buttons;
        
        // Waistcoat measurements
        $findMeasurements->waistcoat_length = $request->waistcoat_length;
        $findMeasurements->waistcoat_chest = $request->waistcoat_chest;
        $findMeasurements->waistcoat_waist = $request->waistcoat_waist;
        $findMeasurements->waistcoat_shoulder = $request->waistcoat_shoulder;
        $findMeasurements->waistcoat_type = $request->waistcoat_type;
        $findMeasurements->waistcoat_pockets = $request->waistcoat_pockets;
        $findMeasurements->waistcoat_inside_pockets = $request->waistcoat_inside_pockets;
        $findMeasurements->waistcoat_buttons = $request->waistcoat_buttons;
        $findMeasurements->added_by = $request->added_by;
        
        if($findMeasurements->save()){
            return response()->json([
                'status' => true,
                'message' => "Measurements has updated successfully"
            ], 200);
        }else{
            return response()->json([
                'status' => false,
                'message' => "Failed to Updated Measurements"
            ], 400);
        }

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $findMeasurements = measurements::find($id)->forceDelete();
        if($findMeasurements){
            return response()->json([
                'status' => true,
                'message' => "Measurements has been delete Successfully"
            ], 200);
        }else{
            return response()->json([
                'status' => false,
                'message' => "Failed"
            ], 404);
        }
    }
}
