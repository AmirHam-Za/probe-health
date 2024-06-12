<?php

namespace App\Exceptions;

use Throwable;
use Illuminate\Database\QueryException;
use Tymon\JWTAuth\Exceptions\JWTException;
use Illuminate\Auth\AuthenticationException;
use Tymon\JWTAuth\Exceptions\TokenExpiredException;
use Tymon\JWTAuth\Exceptions\TokenInvalidException;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Symfony\Component\HttpKernel\Exception\UnauthorizedHttpException;

class Handler extends ExceptionHandler
{
    /**
     * The list of the inputs that are never flashed to the session on validation exceptions.
     *
     * @var array<int, string>
     */
    protected $dontFlash = [
        'current_password',
        'password',
        'password_confirmation',
    ];

    /**
     * Register the exception handling callbacks for the application.
     */
    public function register(): void
    {
        $this->reportable(function (Throwable $e) {
            //
        });

        $this->renderable(function (UnauthorizedHttpException $e, $request) {
            if ($request->is('api/*')) {
                $previousException = $e->getPrevious();

                if ($previousException instanceof TokenExpiredException) {
                    return response()->json(['error' => 'Token has expired'], 401);
                } elseif ($previousException instanceof TokenInvalidException) {
                    return response()->json(['error' => 'Token is invalid'], 401);
                } elseif ($previousException instanceof JWTException) {
                    return response()->json(['error' => 'Token is not provided'], 401);
                }

                return response()->json(['error' => 'Unauthorized'], 401);
            }
        });

        $this->renderable(function (QueryException $e, $request) {
            if ($request->is('api/*')) {
                return response()->json(['error' => 'Server error occurred. Please try again later.'], 500);
            }
        });

        $this->renderable(function (ModelNotFoundException $e, $request) {
            if ($request->is('api/*')) {
                return response()->json(['error' => 'Resource not found'], 404);
            }
        });

        $this->renderable(function (AuthenticationException $e, $request) {
            if ($request->is('api/*')) {
                return response()->json(['error' => 'Unauthenticated'], 401);
            }
        });

        $this->renderable(function (Throwable $e, $request) {
            if ($request->is('api/*')) {
                return response()->json(['error' => 'An unexpected error occurred. Please try again later.'], 500);
            }
        });
    }
}
