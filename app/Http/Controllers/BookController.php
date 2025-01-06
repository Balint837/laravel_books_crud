<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreBookRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $books = DB::table('books')
            ->orderBy('books.title')
            ->get();
        // dd($books);
        return view('books.index', ['books' => $books]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('books.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreBookRequest $request)
    {
        $validated = $request->validated();
        
        if (DB::table('books')->insert($validated)) {
            return redirect()->route('books.index')->with('success', 'Book created successfully');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $book = DB::table('books')
            ->where('books.id', '=', $id)
            ->first();

        if (!$book) {
            abort(404);
        }

        return view('books.show', ['book' => $book]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $book = DB::table('books')
            ->where('books.id', '=', $id)
            ->first();

        return view('books.edit', ['book' => $book]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreBookRequest $request, string $id)
    {
        $validated = $request->validated();

        DB::table('books')
            ->where('id', '=', $id)
            ->update($validated);
        return redirect()->route('books.show', $id)->with('success', 'Book updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        DB::table('books')->delete($id);
        
        return redirect()->route('books.index')->with('success', 'Book deleted successfully');
    }
}
