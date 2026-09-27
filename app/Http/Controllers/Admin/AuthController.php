<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function showLogin()
    {
        if (session('admin_authenticated')) {
            return redirect()->route('admin.chat');
        }
        
        return view('admin.login');
    }
    
    public function login(Request $request)
    {
        $request->validate([
            'username' => 'required|string',
            'password' => 'required|string',
        ]);
        
        // Hardcoded admin credentials
        $adminUsername = 'admin';
        $adminPassword = 'password';
        
        if ($request->username === $adminUsername && $request->password === $adminPassword) {
            session(['admin_authenticated' => true]);
            return redirect()->route('admin.chat');
        }
        
        return back()->withErrors(['login' => 'Invalid credentials'])->withInput();
    }
    
    public function logout()
    {
        session()->forget('admin_authenticated');
        return redirect()->route('admin.login');
    }
}
