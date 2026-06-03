<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\Interfaces\AuthRepositoryInterface;
use Illuminate\Support\Facades\Auth;
class AuthController extends Controller
{
    protected $authRepository;

    public function __construct(
        AuthRepositoryInterface $authRepository
    )
    {
        $this->authRepository = $authRepository;
    }

    public function login()
    {
        return view('auth.login');
    }

    public function loginSubmit(Request $request)
    {
        $request->validate([
            'email'=>'required',
            'password'=>'required'
        ]);

        $login = $this->authRepository
            ->login($request->all());

        if($login)
        {
            return redirect()->route('admin.dashboard');
        }

        return back()->with(
            'error',
            'Invalid Credentials'
        );
    }

    public function logout()
    {
        auth()->logout();

        return redirect()->route('login');
    }
}