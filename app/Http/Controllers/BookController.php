<?php

namespace App\Http\Controllers;

use App\Http\Resources\BookResource;
use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index()
    {
        $criteria = Book::paginate(6);
        return new BookResource($criteria);
    }

    public function top($count)
    {
        $criteria = Book::select('*')
            ->orderBy('views', 'DESC')
            ->limit($count)
            ->get();
        return new BookResource($criteria);
    }
}
