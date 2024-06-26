<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Expense;

class ExpenseController extends Controller
{
    public function index()
    {
        $formData=Expense::all();
        return view('welcome', ['formData'=>$formData]);
    }

    public function displayCreateForm()
    {
        return view('create');
    }

    public function displayEditForm()
    {
        return view('edit');
    }
    public function store(Request $request)
    {
        //dd('test');

         // Create and store the data
         $formData = new Expense();
         $formData->title = $request->input('title');
         $formData->category = $request->input('category');
         $formData->amount = $request->input('amount');
         $formData->save();
         return redirect()->route('expense.home')->with('success', 'Data saved successfully!');

         
    }
}
