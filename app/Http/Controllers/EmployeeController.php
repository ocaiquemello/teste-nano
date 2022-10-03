<?php

namespace App\Http\Controllers;

use App\Http\Requests\EmployeeRequest;
use App\Models\Employee;
use Exception;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function index()
    {
        $employees = listEmployees();

        return view('admin.employee.index', compact('employees'));
    }

    public function register()
    {
        return view('admin.employee.register');
    }

    public function create(EmployeeRequest $request)
    {
        try {
            $validated = $request->validated();

            $employee = Employee::create([
                'name' => $validated['name'],
                'login' => $validated['login'],
                'password' => $validated['password'],
                'current_balance' => $validated['current_balance'],
                'admin_id' => auth()->user()->id
            ]);

            return redirect()->back()->with('success', 'Funcionário cadastrado com sucesso!');
        } catch (Exception $e) {
            return redirect()->back()->withInput()->with('error', $e->getMessage());
        }
    }

    public function edit($id)
    {
        $employee = Employee::where('id', $id)->first();

        return view('admin.employee.edit', compact('employee'));
    }

    public function update(Request $request, $id)
    {
        try {
            Employee::where('id', $id)->update([
                'name' => $request->name,
                'login' => $request->login,
                'current_balance' => str_replace(['.',','], ['','.'], $request->current_balance),
            ]);

            return redirect()->back()->with('success', 'Funcionário atualizado com sucesso!');
        } catch (Exception $e) {
            return redirect()->back()->withInput()->with('error', $e->getMessage());
        }
    }

    public function delete($id)
    {
        try {
            Employee::where('id', $id)->delete();

            return redirect()->back()->with('success', 'Funcionário deletado com sucesso!');
        } catch (Exception $e) {
            return redirect()->back()->withInput()->with('error', $e->getMessage());
        }
    }
}
