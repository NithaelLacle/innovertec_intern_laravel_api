<?php

namespace App\DTOs;

final class ResponseApiDTO
{
    /**
     * Create a new class instance.
     */
    public function __construct()
    {
        //
    }

    public static function success(mixed $data, $message = 'Success', $statusCode = 200)
    {
        return response()->json([
            'success' => true,
            'message' => $message,
            'data' => $data
        ], $statusCode);
    }

    public static function error(mixed $errors, $message = 'Error', $statusCode = 400, $meta = null)
    {
        return response()->json([
            'success' => false,
            'message' => $message,
            'errors' => $errors,
            'meta' => $meta
        ], $statusCode);
    }
}
