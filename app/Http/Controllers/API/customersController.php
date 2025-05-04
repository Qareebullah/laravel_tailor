<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\customers;
class customersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return customers::all();

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'firstName' => 'required|string|max:200|min:3',
            'lastName' => 'required|string|max:200|min:3',
            'mobile' => 'required|string|max:13|min:10',
            'firstName' => 'required|string|max:200|min:3',
        ]);
        $storeCustomer = new customers();
        $storeCustomer->firstName = $request->input('firstName');
        $storeCustomer->lastName = $request->input('lastName');
        $storeCustomer->mobile = $request->input('mobile');
        $storeCustomer->added_by = $request->input('user_id');
        if($storeCustomer->save()){
            return response()->json([
                'status' => true,
                'message' => 'Customer has been added successfully',
            ], 201);
        } else {
            return response()->json([
                'status' => false,
                'message' => 'Failed to add customer!',
            ], 500);
        }
    }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $fetchSpecific = customers::find($id);
        if($fetchSpecific){
            return response()->json([
                'status' => true,
                'message' => 'Your customer has fetched successfully'
            ], 200);
        }else{
            return response()->json([
                'status' => false,
                'message' => 'Not Find'
            ], 404);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $updateCustomer = customers::find($id);
        if (!$updateCustomer) {
            return response()->json([
                'status' => false,
                'message' => 'Customer with mentioned not found.'
            ], 404);
        }

        $validated = $request->validate([
            'firstName' => 'required|string|max:200|min:3',
            'lastName' => 'required|string|max:200|min:3',
            'mobile' => 'required|string|max:13|min:10',
            'user_id' => 'required',
        ]);
        $updateCustomer->firstName = $request->firstName;
        $updateCustomer->lastName = $request->lastName;
        $updateCustomer->mobile = $request->mobile;
        $updateCustomer->added_by = $request->user_id;

        if($updateCustomer->save()){
            return response()->json([
                'status' => true,
                'message' => "Customer has been updated Successfully"
            ], 200);
        }else{
            return response()->json([
                'status' => false,
                'message' => 'failed to updated Customer'
            ], 404);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $deleteCustomer = customers::find($id)->delete()->forceDelete();

        if($deleteCustomer){
            return response()->json([
                'status' => true,
                'message' => 'Customer has been deleted Successfully'
            ], 200);
        }else{
            return response()->json([
                'status' => false,
                'message' => 'failed'
            ], 404);
        }
    }
}

