<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUnionRequest;
use App\Http\Requests\UpdateUnionRequest;
use App\Models\Union;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;

class UnionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): Response
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): Response
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreUnionRequest $request): RedirectResponse
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Union $union): Response
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Union $union): Response
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateUnionRequest $request, Union $union): RedirectResponse
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Union $union): RedirectResponse
    {
        //
    }
}
