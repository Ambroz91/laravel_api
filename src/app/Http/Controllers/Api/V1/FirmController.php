<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreFirmRequest;
use App\Http\Requests\UpdateFirmRequest;
use App\Http\Resources\FirmResource;
use App\Models\Firm;

class FirmController extends Controller
{
    /**
     * Display a listing of the resource.
     * @OA\GET(
     *     path="/api/v1/firms",
     *     tags={"Firms"},
     *     summary="Get List of All Firms",
     *     description="Get Firm List as JSON",
     *     operationId="index",
     * )
     */
    public function index()
    {
        return FirmResource::collection(Firm::all());
    }

    /**
     * Store a newly created resource in storage.
     * @OA\POST(
     *     path="/api/v1/firms",
     *     tags={"Products"},
     *     summary="Create New Firm",
     *     description="Create New Firm",
     *     operationId="store",
     *     @OA\RequestBody(
     *          @OA\JsonContent(
     *              type="object",
     *              @OA\Property(property="name", type="string", required="YES" example="My Firm"),
     *              @OA\Property(property="nip", type="integer", required="YES" example="111222333444555"),
     *              @OA\Property(property="address", type="string", required="YES" example=Test 12),
     *              @OA\Property(property="city", type="string", required="YES" example="Test City"),
     *              @OA\Property(property="postal", type="string", required="YES" example="88999"),
     *          ),
     *      ),
     * )
     */
    public function store(StoreFirmRequest $request)
    {
        $firm = Firm::create($request->validated());

        return FirmResource::make($firm);
    }

    /**
     * Display the specified resource.
     * @OA\GET(
     *     path="/api/v1/firms/{id}",
     *     tags={"Firms"},
     *     summary="Get a Specyfic Firm",
     *     description="Get a Specyfic Firm based on ID",
     *     operationId="show",
     * )
     */
    public function show(Firm $firm)
    {
        return FirmResource::make($firm);
    }

    /**
     * Update the specified resource in storage.
     * @OA\PUT(
     *     path="/api/v1/firms/{id}",
     *     tags={"Firms"},
     *     summary="Update a Specyfic Firm",
     *     description="Update a Specyfic Firm based on ID",
     *     @OA\RequestBody(
     *          @OA\JsonContent(
     *              type="object",
     *              @OA\Property(property="name", type="string", required="YES" example="My Firm"),
     *              @OA\Property(property="nip", type="integer", required="YES" example="111222333444555"),
     *              @OA\Property(property="address", type="string", required="YES" example=Test 12),
     *              @OA\Property(property="city", type="string", required="YES" example="Test City"),
     *              @OA\Property(property="postal", type="string", required="YES" example="88999"),
     *          ),
     *      ),
     *     operationId="update",
     * )
     */
    public function update(UpdateFirmRequest $request, Firm $firm)
    {
        $firm->update($request->validated());
        return FirmResource::make($firm);
    }

    /**
     * Remove the specified resource from storage.
     * @OA\DELETE(
     *     path="/api/v1/firms/{id}",
     *     tags={"Firms"},
     *     summary="Delete a Specyfic Firm",
     *     description="Delete a Specyfic Firm based on ID",
     *     operationId="destroy",
     * )
     */
    public function destroy(Firm $firm)
    {
        $firm->delete();
        return FirmResource::make($firm);
    }
}
