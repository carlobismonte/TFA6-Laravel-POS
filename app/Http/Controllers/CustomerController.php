<?php

namespace App\Http\Controllers;

class CustomerController extends Controller
{
    public function index()
    {
        $customers = [
            ['id' => 1, 'name' => 'Carlo Bismonte', 'email' => 'carlo@example.com'],
            ['id' => 2, 'name' => 'Maria Santos', 'email' => 'maria@example.com'],
            ['id' => 3, 'name' => 'Pedro Reyes', 'email' => 'pedro@example.com'],
            ['id' => 4, 'name' => 'Ana Garcia', 'email' => 'ana@example.com'],
            ['id' => 5, 'name' => 'Jose Ramos', 'email' => 'jose@example.com'],
        ];

        return view('customers', compact('customers'));
    }
}