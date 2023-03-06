<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreDealerOrderRequest;
use App\Http\Requests\UpdateDealerOrderRequest;
use App\Models\DealerOrder;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;

class DealerOrderController extends Controller
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
    public function store(StoreDealerOrderRequest $request): RedirectResponse
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(DealerOrder $dealerOrder): Response
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(DealerOrder $dealerOrder): Response
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateDealerOrderRequest $request, DealerOrder $dealerOrder): RedirectResponse
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(DealerOrder $dealerOrder): RedirectResponse
    {
        //
    }
}
