<?php
namespace App\Traits;


use Illuminate\Http\Response;


trait ApiResponser
{
/**
* Build success response
* @param string|array $data
* @param int $code
* @return Illuminate\Http\JsonResponse
*/
    public function successResponse($data, $code = Response::HTTP_OK)
    {
    return response()->json(['data' => $data, 'site' => 2], $code);
    }

/**
* Build valid responses
* @param string|array $message
* @param int $code
* @return Illuminate\Http\JsonResponse
*/
public function validResponse($data, $code = Response::HTTP_OK)
{
    return response()->json(['data' => $data], $code);
}

/**
* Build error responses
* @param string|array $message
* @param int $code
* @return Illuminate\Http\JsonResponse
*/
    public function errorResponse($message, $code)
    {
    return response()->json(['error' => $message, 'site' => 2, 'code' => $code], $code);
    }
    /**
    * Build error responses
    * @param string|array $message
    * @param int $code
    * @return Illuminate\Http\Response
    */
    public function errorMessage($message, $code)
    {
        return response($message, $code)->header('Content-Type', 'application/json');
    }
}