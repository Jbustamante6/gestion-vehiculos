<?php

namespace App\Http\Controllers;

use Illuminate\Http\Exceptions\HttpResponseException;
use App\Http\Requests\Auth\Login;
use App\Http\Services\Auth\AuthenticationService;

class AuthController extends Controller
{
    private $authService;

    public function __construct(AuthenticationService $authService)
    {
        $this->authService = $authService;
    }

    /**
     * Get a JWT via given credentials.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function login(Login $request)
    {
       try {
            $user = $this->authService->login($request['email'], $request['password']);
            return response()->json($user, 200);
        
        } catch (HttpResponseException $e) {
            response()->json("Email or parsword incorrect", 401);
        } 
        
    }
}