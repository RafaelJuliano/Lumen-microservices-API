<?php

namespace App\Traits;

use Illuminate\Http\Response;

trait ApiResponser
{

    /**
     * Build success response
     * @param $data string/array $data
     * @param $code int $code
     * @return \Illuminate\Http\JsonResponse
     */
    private function successResponse($data, $code = Response::HTTP_OK)
    {
        return response()->json([
            'data' => $data,
            'code' => $code
        ], $code);
    }

    /**
     * Build error response
     * @param $data string/array $data
     * @param $code int $code
     * @return \Illuminate\Http\JsonResponse
     */
    private function errorResponse($message, $code)
    {
        return response()->json([
            'error' => $message,
            'code' => $code
        ], $code);
    }

}
