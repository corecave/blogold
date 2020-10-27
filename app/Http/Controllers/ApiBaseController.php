<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\JsonResponse;
use Illuminate\Routing\Controller as BaseController;

class ApiBaseController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;


    /**
     * Send JSON Success Response.
     *
     * @param array|\Illuminate\Database\Eloquent\Collection|string $data
     * @param string $message
     * @return \Illuminate\Http\JsonResponse
     */
    protected function successResponse($data, $message = null, $status = 200)
    {
        return new JsonResponse([
            'success' => true,
            'message' => $message ?: 'Success.',
            'data' => $data
        ], $status);
    }
    /**
     * Send JSON Failure Response.
     *
     * @param array|\Illuminate\Database\Eloquent\Collection|string $data
     * @param string $message
     * @return \Illuminate\Http\JsonResponse
     */
    protected function failedResponse($data, $message = null, $status = 200)
    {
        return new JsonResponse([
            'success' => false,
            'message' => $message ?: 'Failure.',
            'data' => $data
        ], $status);
    }
}
