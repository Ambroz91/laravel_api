<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreWorkerRequest;
use App\Http\Requests\UpdateWorkerRequest;
use App\Http\Resources\WorkerResource;
use App\Models\Worker;

class WorkerController extends Controller
{
    /**
     * Display a listing of the resource.
     * @OA\GET(
     *     path="/api/v1/workers",
     *     tags={"Workers"},
     *     summary="Get List of All Workers",
     *     description="Get Workers List as JSON",
     *     operationId="index",
     * )
     */
    public function index()
    {
        return WorkerResource::collection(Worker::all());
    }

    /**
     * Store a newly created resource in storage.
     * @OA\POST(
     *     path="/api/v1/workers",
     *     tags={"Products"},
     *     summary="Create a New Worker",
     *     description="Create a New Worker",
     *     operationId="store",
     *     @OA\RequestBody(
     *          @OA\JsonContent(
     *              type="object",
     *              @OA\Property(property="firm_id", type="integer", required="YES" example=1),
     *              @OA\Property(property="firstname", type="string", required="YES" example="First Name"),
     *              @OA\Property(property="lastName", type="string", required="YES" example="Last Name"),
     *              @OA\Property(property="email", type="string", required="YES" example="email@email.email"),
     *              @OA\Property(property="phone", type="string", required="NO" example="111222333"),
     *          ),
     *      ),
     * )
     */
    public function store(StoreWorkerRequest $request)
    {
        $worker = Worker::create($request->validated());
        return WorkerResource::make($worker);
    }

    /**
     * Display the specified resource.
     * @OA\GET(
     *     path="/api/v1/workers/{id}",
     *     tags={"Workers"},
     *     summary="Get a Specyfic Worker",
     *     description="Get a Specyfic Worker based on ID",
     *     operationId="show",
     * )
     */
    public function show(Worker $worker)
    {
        return WorkerResource::make($worker);
    }

    /**
     * Update the specified resource in storage.
     * @OA\PUT(
     *     path="/api/v1/workers/{id}",
     *     tags={"Workers"},
     *     summary="Update a Specyfic Worker",
     *     description="Update a Specyfic Worker based on ID",
     *     @OA\RequestBody(
     *          @OA\JsonContent(
     *              type="object",
     *              @OA\Property(property="firm_id", type="integer", required="YES" example=1),
     *              @OA\Property(property="firstname", type="string", required="YES" example="First Name"),
     *              @OA\Property(property="lastName", type="string", required="YES" example="Last Name"),
     *              @OA\Property(property="email", type="string", required="YES" example="email@email.email"),
     *              @OA\Property(property="phone", type="string", required="NO" example="111222333"),
     *          ),
     *      ),
     *     operationId="update",
     * )
     */
    public function update(UpdateWorkerRequest $request, Worker $worker)
    {
       $worker->update($request->validated());
       return WorkerResource::make($worker);
    }

    /**
     * Remove the specified resource from storage.
     * @OA\DELETE(
     *     path="/api/v1/workers/{id}",
     *     tags={"Workers"},
     *     summary="Delete a Specyfic Worker",
     *     description="Delete a Specyfic Worker based on ID",
     *     operationId="destroy",
     * )
     */
    public function destroy(Worker $worker)
    {
        $worker->delete();
        return WorkerResource::make($worker);
    }
}
