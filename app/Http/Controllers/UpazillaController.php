<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUpazillaRequest;
use App\Http\Requests\UpdateUpazillaRequest;
use App\Models\Upazilla;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;

class UpazillaController extends Controller
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
    public function store(StoreUpazillaRequest $request): RedirectResponse
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Upazilla $upazilla): Response
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Upazilla $upazilla): Response
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateUpazillaRequest $request, Upazilla $upazilla): RedirectResponse
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Upazilla $upazilla): RedirectResponse
    {
        //
    }
}
