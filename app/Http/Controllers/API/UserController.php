<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\registration;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $fetchAllUsers = registration::all();
        if($fetchAllUsers){
            return response()->json([
                'status' => true,
                'message' => "Fetch All Users Successfully"
            ], 200);
        }
        else
        {
            return response()->json([
                'status' => false,
                'message' => "Failed"
            ], 404);
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'firstName' => 'required|string',
            'lastName' => 'required|string',
            'gender' => 'required|string',
            'dob' => 'required|string',
            'skills' => 'nullable|string',
            'salary' => 'nullable|numeric',
            'salary_type' => 'nullable|string',
            'mobile' => 'required|string',
            'agreement' => 'nullable|string',
            'agreement_file' => 'nullable|file|mimes:pdf,jpg,png',
            'photo' => 'nullable|image|mimes:jpg,jpeg,png',
            'added_by' => 'nullable|string',
        ]);

        $insertNewUser = new registration();
        $insertNewUser->firstName = $request->input('firstName');
        $insertNewUser->lastName = $request->input('lastName');
        $insertNewUser->gender = $request->input('gender');
        $insertNewUser->dob = $request->input('dob');
        $insertNewUser->skills = $request->input('skills');
        $insertNewUser->salary = $request->input('salary');
        $insertNewUser->salary_type = $request->input('salary_type');
        $insertNewUser->mobile = $request->input('mobile');
        $insertNewUser->agreement = $request->input('agreement');
        $insertNewUser->agreement_file = $request->input('agreement_copy');
        $insertNewUser->photo = $request->input('photo');
        $insertNewUser->added_by = $request->input('added_by');
    
        // Handle agreement_file upload
        if ($request->hasFile('agreement_file')) {
            $file = $request->file('agreement_file');
            $filename = time() . '_agreement.' . $file->getClientOriginalExtension();
            $file->move(public_path('uploads/agreements'), $filename);
            $insertNewUser->agreement_file = 'uploads/agreements/' . $filename;
        }
    
        // Handle photo upload
        if ($request->hasFile('photo')) {
            $photo = $request->file('photo');
            $photoName = time() . '_photo.' . $photo->getClientOriginalExtension();
            $photo->move(public_path('uploads/photos'), $photoName);
            $insertNewUser->photo = 'uploads/photos/' . $photoName;
        }
        if($insertNewUser->save()){
            return response()->json([
                'status' => true,
                'message' => "New User has been Added Successfully"
            ], 201);
        }
        else
        {
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
        $showAllUsers = registration::find($id);
        if($shoeAllUsers){
            return response()->json([
                'status' => true,
                'message' => "Selected ID fetch User Successfully"
            ], 200);
        }
        else
        {
            return response()->json([
                'status' => false,
                'message' => "Failed"
            ], 404);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $updateUser = registration::find($id);
        if (!$updateUser) {
            return response()->json([
                'status' => false,
                'message' => 'User with the mentioned not found.'
            ], 404);
        }

        $validated = $request->validate([
            'firstName' => 'required|string',
            'lastName' => 'required|string',
            'gender' => 'required|string',
            'dob' => 'required|string',
            'skills' => 'nullable|string',
            'salary' => 'nullable|numeric',
            'salary_type' => 'nullable|string',
            'mobile' => 'required|string',
            'agreement' => 'nullable|string',
            'agreement_file' => 'nullable|file|mimes:pdf,jpg,png',
            'photo' => 'nullable|image|mimes:jpg,jpeg,png',
            'added_by' => 'nullable|string',
        ]);

        $updateUser->firstName = $request->input('firstName');
        $updateUser->lastName = $request->input('lastName');
        $updateUser->gender = $request->input('gender');
        $updateUser->dob = $request->input('dob');
        $updateUser->skills = $request->input('skills');
        $updateUser->salary = $request->input('salary');
        $updateUser->salary_type = $request->input('salary_type');
        $updateUser->mobile = $request->input('mobile');
        $updateUser->agreement = $request->input('agreement');
        $updateUser->agreement_file = $request->input('agreement_copy');
        $updateUser->photo = $request->input('photo');
        $updateUser->added_by = $request->input('added_by');
    
        // Handle agreement_file upload
        if ($request->hasFile('agreement_file')) {
            $file = $request->file('agreement_file');
            $filename = time() . '_agreement.' . $file->getClientOriginalExtension();
            $file->move(public_path('uploads/agreements'), $filename);
            $updateUser->agreement_file = 'uploads/agreements/' . $filename;
        }
    
        // Handle photo upload
        if ($request->hasFile('photo')) {
            $photo = $request->file('photo');
            $photoName = time() . '_photo.' . $photo->getClientOriginalExtension();
            $photo->move(public_path('uploads/photos'), $photoName);
            $updateUser->photo = 'uploads/photos/' . $photoName;
        }
        if($updateUser->save()){
            return response()->json([
                'status' => true,
                'message' => "User has been updated Successfully"
            ], 200);
        }
        else
        {
            return response()->json([
                'status' => false,
                'message' => "Failed"
            ], 404);
        }
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $deleteUser = registration::find($id)->forceDelete();
        if($deleteUser){
            return response()->json([
                'status' => true,
                'message' => "Selected ID User deleted Successfully"
            ], 200);
        }
        else
        {
            return response()->json([
                'status' => false,
                'message' => "Failed"
            ], 404);
        }
    }
}
