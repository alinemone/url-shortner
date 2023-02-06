<?php

namespace App\Infrustructure\Classes;

class Response
{
    /**
     * @param $data
     * @param int $code
     * @param null $message
     * @return \Illuminate\Http\JsonResponse
     */
    public static function return($data, $code = 200, $message = null)
    {
        return response()->json([
            'code'    => $code,
            'message' => $message,
            'data'    => $data
        ], $code)
            ->withHeaders([
                'Application-Version' => config('app.version')
            ]);
    }

    /**
     * @param bool $isCreated
     * @return \Illuminate\Http\JsonResponse
     */
    public static function created(bool $isCreated)
    {
        return response()->json([
            'code'    => $isCreated ? 201 : 500,
            'message' => null,
            'data'    => [
                'created' => $isCreated
            ]
        ], $isCreated ? 201 : 500)
            ->withHeaders([
                'Application-Version' => config('app.version')
            ]);
    }

    /**
     * @param bool $isUpdated
     * @return \Illuminate\Http\JsonResponse
     */
    public static function updated(bool $isUpdated)
    {
        return response()->json([
            'code'    => $isUpdated ? 200 : 500,
            'message' => null,
            'data'    => [
                'updated' => $isUpdated
            ]
        ], $isUpdated ? 200 : 500)
            ->withHeaders([
                'Application-Version' => config('app.version')
            ]);
    }

    /**
     * @param bool $isCreated
     * @return \Illuminate\Http\JsonResponse
     */
    public static function deleted(bool $isDeleted)
    {
        return response()->json([
            'code'    => $isDeleted ? 201 : 500,
            'message' => null,
            'data'    => [
                'deleted' => $isDeleted
            ]
        ], $isDeleted ? 201 : 500)
            ->withHeaders([
                'Application-Version' => config('app.version')
            ]);
    }
    /**
     * @param bool $isCreated
     * @return \Illuminate\Http\JsonResponse
     */
    public static function notFound()
    {
        return response()->json([
            'code'    => 404,
            'message' => trans('errors.exceptions.Model not found'),
            'data'    => null
        ], 404)
            ->withHeaders([
                'Application-Version' => config('app.version')
            ]);
    }

    /**
     * @param bool $isCreated
     * @return \Illuminate\Http\JsonResponse
     */
    public static function invalidData()
    {
        return response()->json([
            'code'    => 422,
            'message' => trans('errors.Invalid data'),
            'data'    => null
        ], 422)
            ->withHeaders([
                'Application-Version' => config('app.version')
            ]);
    }

    /**
     * @param bool $isCreated
     * @return \Illuminate\Http\JsonResponse
     */
    public static function accessDenied()
    {
        return response()->json([
            'code'    => 403,
            'message' => trans('errors.exceptions.Access denied'),
            'data'    => null
        ], 403)
            ->withHeaders([
                'Application-Version' => config('app.version')
            ]);
    }
}
