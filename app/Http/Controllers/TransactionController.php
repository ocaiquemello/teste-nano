<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use Exception;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    public function index()
    {
        $transactions = listTransactions();

        return view('admin.transaction.index', compact('transactions'));
    }

    public function register()
    {
        $employees = listEmployees();

        return view('admin.transaction.register', compact('employees'));
    }

    public function create(Request $request)
    {
        try {
            Transaction::create([
                'value' => $request->value,
                'type' => $request->type,
                'observation' => $request->observation,
                'employee_id' => $request->employee,
                'admin_id' => auth()->user()->id
            ]);

            return redirect()->back()->with('success', 'Movimentação cadastrada com sucesso!');
        } catch (Exception $e) {
            return redirect()->back()->withInput()->with('error', $e->getMessage());
        }
    }

    public function extract($id)
    {
        $extract = Transaction::where('employee_id', $id)->paginate(15);

        return view('admin.transaction.extract', compact('extract'));
    }
}
