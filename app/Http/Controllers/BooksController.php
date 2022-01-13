<?php

namespace App\Http\Controllers;

use App\Http\Resources\BooksResource;
use App\Models\Books;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Auth;

class BooksController extends Controller
{

    /**
     * Return main book view with list of books.
     * 
     * @return Illuminate\Contracts\View\View|\Illuminate\Contracts\View\Factory
     */
    public function list()
    {
        $books = BooksResource::collection(Books::all());
        return view('Books.index', compact('books'));
    }

    /**
     * Show all the resources.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return BooksResource::collection(Books::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        return view('Books.add-book');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $book = $request->validateWithBag('newBook', [
            'title' => [
                'required',
                Rule::unique('books')->where(function ($query) use ($request) {
                    return $query->where('title', $request->title)->where('author', $request->author);
                })
            ],
            'author' => [
                'required',
                Rule::unique('books')->where(function ($query) use ($request) {
                    return $query->where('title', $request->title)->where('author', $request->author);
                })
            ],
            'release_date' => ['required'],
        ]);


        $book['added_by_user_id'] = Auth::id();

        $res = Books::create($book);
        return response()->json([
            'status' => '201',
            'data' => $res,
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Books  $books
     * @return \Illuminate\Http\Response
     */
    public function show(Books $book)
    {
        return new BooksResource($book);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Books  $books
     * @return \Illuminate\Http\Response
     */
    public function edit(Books $books)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Books  $books
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Books $book)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Books  $books
     * @return \Illuminate\Http\Response
     */
    public function destroy(Books $book)
    {
        $book->delete();
        return response(null, 204);
    }
}
