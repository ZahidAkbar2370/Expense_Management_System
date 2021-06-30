<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Expense;
use Auth;

class ExpenseController extends Controller
{
     public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        $all_expenses = Expense::where("user_id",Auth::user()->id)->get();

        return view('Admin/Expense/view_expenses',["all_expenses" => $all_expenses]);
    }


    public function create()
    {
        return view('Admin/Expense/add_expense');
    }

    public function store(Request $request)
    {
        $add_expense = Expense::create([
                'user_id' => Auth::user()->id,
                'expense_date' => $request->expense_date,
                'expense_item' => $request->expense_item,
                'expense_cost' => $request->expense_cost,
        ]);

        return redirect("view-expenses");
    }

    public function destroy($id)
    {
        $delete_expense = Expense::find($id)->delete();

        return redirect("view-expenses");
    }
}
