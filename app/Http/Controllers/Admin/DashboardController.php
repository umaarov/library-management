<?php
/**
 * Created by PhpStorm.
 * User: hsuma
 * Date: 10/5/2024
 * Time: 12:25 PM
 */

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Book;
use App\Models\User;
use App\Models\Loan;

class DashboardController extends Controller
{
    public function index()
    {
        $totalBooks = Book::count();
        $totalUsers = User::count();
        $totalLoans = Loan::count();

        return view('admin.dashboard', compact('totalBooks', 'totalUsers', 'totalLoans'));
    }
}
