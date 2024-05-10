<?php

namespace App\Http\Services\Auth;

interface AuthenticationInterface
{
  public function login(String $email, String $password);
}
