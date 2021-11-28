<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Category;

class PageController extends Controller
{
    public function viewHome(){
        $books = Book::join('details', 'books.id', '=', 'details.book_id')
               ->simplepaginate(5);

        return view('home', ['books'=>$books]);
    }

    public function viewContact(){
        return view('contact');
    }

    public function viewCategory($category_id){
        $category = Category::where('id', $category_id)->value('category');

        $books = Book::join('details', 'books.id', '=', 'details.book_id')
               ->where('category_id', $category_id)
               ->simplepaginate(5);;

        return view('category', ['books'=>$books, 'category'=>$category]);
    }

    public function viewBookDetail($book_id){
        $book = Book::join('details', 'books.id', '=', 'details.book_id')
                ->where('book_id', $book_id)
                ->first();

        return view('bookDetail', ['book'=>$book]);
    }
}
