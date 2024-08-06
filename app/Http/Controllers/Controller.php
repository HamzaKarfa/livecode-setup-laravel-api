<?php

namespace App\Http\Controllers;

abstract class Controller
{
    public function sendSuccessResponse($data, $message = 'Success', $code = 200)
    {
        return response()->json([
            'status' => 'success',
            'message' => $message,
            'data' => $data
        ], $code);
    }

    public function sendErrorResponse($message = 'Error', $code = 500)
    {
        return response()->json([
            'status' => 'error',
            'message' => $message
        ], $code);
    }
}
