<?php
/**
 * Created by PhpStorm.
 * User: hsuma
 * Date: 10/5/2024
 * Time: 12:27 PM
 */

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Loan;
use App\Models\Book;
use App\Models\User;
use Illuminate\Http\Request;

class LoanController extends Controller
{
    public function index()
    {
        $loans = Loan::with(['book', 'user'])->paginate(10);
        return view('admin.loans.index', compact('loans'));
    }

    public function create()
    {
        $books = Book::all();
        $users = User::all();
        return view('admin.loans.create', compact('books', 'users'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'book_id' => 'required|exists:books,id',
            'user_id' => 'required|exists:users,id',
            'loan_date' => 'required|date',
            'return_date' => 'required|date|after:loan_date',
        ]);

        Loan::create($request->all());
        return redirect()->route('loans.index')->with('success', 'Loan added successfully.');
    }

    public function edit(Loan $loan)
    {
        $books = Book::all();
        $users = User::all();
        return view('admin.loans.edit', compact('loan', 'books', 'users'));
    }

    public function update(Request $request, Loan $loan)
    {
        $request->validate([
            'book_id' => 'required|exists:books,id',
            'user_id' => 'required|exists:users,id',
            'loan_date' => 'required|date',
            'return_date' => 'required|date|after:loan_date',
        ]);

        $loan->update($request->all());
        return redirect()->route('loans.index')->with('success', 'Loan updated successfully.');
    }

    public function destroy(Loan $loan)
    {
        $loan->delete();
        return redirect()->route('loans.index')->with('success', 'Loan deleted successfully.');
    }
}
