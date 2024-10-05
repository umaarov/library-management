<?php
/**
 * Created by PhpStorm.
 * User: hsuma
 * Date: 10/5/2024
 * Time: 12:26 PM
 */

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Book;
use App\Models\Category;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index()
    {
        $books = Book::all();
        return view('admin.books.index', compact('books'));
    }

    public function create()
    {
        $categories = Category::all();
        return view('admin.books.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'author' => 'required',
            'isbn' => 'nullable|size:13|unique:books,isbn',
            'published_year' => 'nullable|integer|min:1000|max:2100',
            'category_id' => 'required|exists:categories,id',
            'total_copies' => 'required|integer|min:1',
        ]);

        $request->merge(['available_copies' => $request->total_copies]);

        Book::create($request->all());

        return redirect()->route('books.index')->with('success', 'Book added successfully.');
    }



    public function edit(Book $book)
    {
        $categories = Category::all(); // Fetch all categories
        return view('admin.books.edit', compact('book', 'categories')); // Pass categories to the view
    }

    public function update(Request $request, Book $book)
    {
        $request->validate([
            'title' => 'required',
            'author' => 'required',
            'isbn' => 'size:13|unique:books,isbn,' . $book->id,
            'published_year' => 'integer|min:1000|max:2100',
            'category' => 'required|exists:categories,id', // Validate category
            'total_copies' => 'required|integer|min:1',
        ]);

        $book->update($request->all());
        return redirect()->route('books.index')->with('success', 'Book updated successfully.');
    }

    public function destroy(Book $book)
    {
        $book->delete();
        return redirect()->route('books.index')->with('success', 'Book deleted successfully.');
    }
}
