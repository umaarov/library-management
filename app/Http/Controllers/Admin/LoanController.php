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
        $loans = Loan::with('book', 'user')->get();
        return view('admin.loans.index', compact('loans'));
    }

    public function create()
    {
        $books = Book::where('available_copies', '>', 0)->get();
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

        $loan = Loan::create($request->all());
        // Decrease available copies of the book
        $loan->book->decrement('available_copies');

        return redirect()->route('loans.index')->with('success', 'Loan added successfully.');
    }

    public function returnBook(Loan $loan)
    {
        $loan->update(['status' => 'returned', 'actual_return_date' => now()]);
        $loan->book->increment('available_copies');
        return redirect()->route('loans.index')->with('success', 'Book returned successfully.');
    }

    public function destroy(Loan $loan)
    {
        $loan->delete();
        return redirect()->route('loans.index')->with('success', 'Loan deleted successfully.');
    }
}
