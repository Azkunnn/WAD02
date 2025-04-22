<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class BookController extends Controller
{


    public function index()
    {
        $books = DB::table('books')->get();
        return view('books.index', ['books' => $books]);
    }
}
