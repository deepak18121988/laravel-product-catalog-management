<?php

namespace App\Repositories;

use Illuminate\Support\Facades\Auth;
use App\Repositories\Interfaces\AuthRepositoryInterface;

class AuthRepository implements AuthRepositoryInterface
{
    public function login(array $data)
    {
        if(Auth::attempt([
            'email' => $data['email'],
            'password' => $data['password']
        ]))
        {
            return true;
        }

        return false;
    }
}