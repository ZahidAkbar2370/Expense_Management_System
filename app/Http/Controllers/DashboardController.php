<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Expense;
use Auth;

class DashboardController extends Controller
{
     public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function dashboard()
    {

        $totaydate = date('Y-m-d');

        $ydate=date('Y-m-d',strtotime("-1 days"));

        $waekdate=  date("Y-m-d", strtotime("-1 week")); 

        $monthdate=  date("Y-m-d", strtotime("-1 month"));

        $yeardate=  date("Y-m-d", strtotime("-1 year")); 


        $today_expense = Expense::where("user_id",Auth::user()->id)->where("expense_date", $totaydate)->sum("expense_cost");

        $yesterday_expense = Expense::where("user_id",Auth::user()->id)->where("expense_date", $ydate)->sum("expense_cost");

        $weak_expense = Expense::where("user_id",Auth::user()->id)->where("expense_date" , '>=' , $waekdate)->where("expense_date", '<=', $totaydate)->sum("expense_cost");

        $month_expense = Expense::where("user_id",Auth::user()->id)->where("expense_date" , '>=' , $monthdate)->where("expense_date", '<=', $totaydate)->sum("expense_cost");

        $year_expense = Expense::where("user_id",Auth::user()->id)->where("expense_date" , '>=' , $yeardate)->where("expense_date", '<=', $totaydate)->sum("expense_cost");

        $total_expense = Expense::where("user_id",Auth::user()->id)->sum("expense_cost");


        return view('Admin/Dashboard/dashboard',["today_expense" => $today_expense, "yesterday_expense" => $yesterday_expense, "weak_expense" => $weak_expense, "month_expense" => $month_expense, "year_expense" => $year_expense, "total_expense" => $total_expense]);
    }
}
