<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class HomeController extends Controller
{
    public function showhome(){
        $books = DB::table('books')->select(['title', 'creator', 'image', 'price', 'id'])->get();
    
        return view('home', ['books'=>$books]);
    }

    public function showbook($book_id){
        $book = DB::table('books')->select(['title', 'creator', 'image', 'price', 'id', 'description'])->where('id', (int) $book_id)->get();
        $book = $book[0];
        return view('book', ['book'=>$book]);
    }
}
