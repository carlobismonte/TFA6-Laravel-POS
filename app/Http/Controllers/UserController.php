<?php

namespace App\Http\Controllers;

class UserController extends Controller
{
    public function index()
    {
        $users = [
            ['id' => 1, 'username' => 'admin', 'role' => 'Administrator'],
            ['id' => 2, 'username' => 'cashier1', 'role' => 'Cashier'],
            ['id' => 3, 'username' => 'cashier2', 'role' => 'Cashier'],
            ['id' => 4, 'username' => 'staff1', 'role' => 'Staff'],
            ['id' => 5, 'username' => 'manager', 'role' => 'Manager'],
        ];

        return view('users', compact('users'));
    }
}