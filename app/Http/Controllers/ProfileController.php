<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
        //
    }


     * Display the specified resource.
     */
    public function show(Profile $profile)
    {
        return response()->json([
            'name' => $profile->name,
            'lastname' => $profile->lastname,
            'email' => $profile->user->email,
            'city' => $profile->city,
            'country' => $profile->country,
            'summary' => $profile->summary,
        ]);
        return response()->json($profileData);
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Profile $profile)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Profile $profile)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Profile $profile)
    {
        //
    }
}
