<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Models\Book;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;

/**
 * Class BookController
 *
 * @package App\Http\Controllers
 */
class BookController extends Controller
{

    /**
     * @todo Paginate books
     */
    public function index(Book $book)
    {
        return view('book.index')->with('books', $book->all());
    }

    public function create()
    {
        return view('book.create');
    }

    /**
     * @todo Take advantage of laravel`s implicit model binding
     */
    public function edit($id)
    {
        return view('book.edit')->with('book', Book::find($id));
    }

    /**
     * @todo validation
     * @todo Avoid file been override when moved due to duplicated name
     * @todo File description is not been saved, find out why
     * @todo Optimize this code...
     */
    public function store(Request $request, Book $book)
    {

        $path = $request->file('book')->storePublicly(
            'public/books'
        );

        $book->user()->associate(auth()->user());
        $book->create(array_merge(
            ['user_id' => auth()->user()->id], compact('path'), $request->all()
        ));

        return redirect()->back()->withMessage('Book was created successfully.');
    }

    /**
     * @todo Validation
     * @todo Take advantage of laravel`s implicit model binding
     */
    public function update(Request $request, $id)
    {
        $book = new Book();
        $book = $book->find($id);
        $book->user()->associate($request->user());
        $book->forceFill($request->except('_token'));
        $book->save();

        return redirect()->back('Book was updated successfully.');
    }

    /**
     * @todo Take advantage of laravel`s implicit model binding
     * @todo Check if user has permission to perform such action
     */
    public function delete($id)
    {
        $book = Book::find($id)->delete();
        return redirect()->back();
    }

    /**
     * @todo Makes $book->from($user)->... works
     * @todo Optimize query
     * @todo Paginate
     */
    public function userBooks(Book $book)
    {

//      $books = $book->from(auth()->user())->all();
        $books = $book->whereHas('user', function (Builder $query) {
            $query->where('user_id', auth()->user()->id)->with('user');
        });

        return view('book.index')->with('books', $books->get());
    }
}
