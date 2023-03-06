<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreDealerOrderDetailRequest;
use App\Http\Requests\UpdateDealerOrderDetailRequest;
use App\Models\DealerOrderDetail;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;

class DealerOrderDetailController extends Controller
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
    public function store(StoreDealerOrderDetailRequest $request): RedirectResponse
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(DealerOrderDetail $dealerOrderDetail): Response
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(DealerOrderDetail $dealerOrderDetail): Response
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateDealerOrderDetailRequest $request, DealerOrderDetail $dealerOrderDetail): RedirectResponse
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(DealerOrderDetail $dealerOrderDetail): RedirectResponse
    {
        //
    }
}
