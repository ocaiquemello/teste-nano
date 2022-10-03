<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $employees = listEmployees();

        return view('admin.index', compact('employees'));
    }
}
