<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BookController extends Controller
{
    public function index(){
        $bookData = Book::all();
        return view('home', compact('bookData'));
    }

    public function getComedy(){
        $bookData = DB::table('books')
            ->join('book_categories', 'books.bookId', '=', 'book_categories.bookId')
            ->join('categories', 'book_categories.categoryId', '=', 'categories.categoryId')
            ->where('categoryName', 'Comedy')->get();
        return view('categories.comedy', compact('bookData'));
    }

    public function getFantasy(){
        $bookData = DB::table('books')
            ->join('book_categories', 'books.bookId', '=', 'book_categories.bookId')
            ->join('categories', 'book_categories.categoryId', '=', 'categories.categoryId')
            ->where('categoryName', 'Fantasy')->get();
        return view('categories.fantasy', compact('bookData'));
    }

    public function getMystery(){
        $bookData = DB::table('books')
            ->join('book_categories', 'books.bookId', '=', 'book_categories.bookId')
            ->join('categories', 'book_categories.categoryId', '=', 'categories.categoryId')
            ->where('categoryName', 'Mystery')->get();
        return view('categories.mystery', compact('bookData'));
    }

    public function getRomance(){
        $bookData = DB::table('books')
            ->join('book_categories', 'books.bookId', '=', 'book_categories.bookId')
            ->join('categories', 'book_categories.categoryId', '=', 'categories.categoryId')
            ->where('categoryName', 'Romance')->get();
        return view('categories.romance', compact('bookData'));
    }

    public function getBook1Details(){
        $bookData = DB::table('books')
            ->join('publishers', 'books.publisherId', '=', 'publishers.publisherId')
            ->where('bookId', 1)->get();
        return view('books.book1', compact('bookData'));
    }

    public function getBook2Details(){
        $bookData = DB::table('books')
            ->join('publishers', 'books.publisherId', '=', 'publishers.publisherId')
            ->where('bookId', 2)->get();
        return view('books.book2', compact('bookData'));
    }

    public function getBook3Details(){
        $bookData = DB::table('books')
            ->join('publishers', 'books.publisherId', '=', 'publishers.publisherId')
            ->where('bookId', 3)->get();
        return view('books.book3', compact('bookData'));
    }

    public function getBook4Details(){
        $bookData = DB::table('books')
            ->join('publishers', 'books.publisherId', '=', 'publishers.publisherId')
            ->where('bookId', 4)->get();
        return view('books.book4', compact('bookData'));
    }
}
