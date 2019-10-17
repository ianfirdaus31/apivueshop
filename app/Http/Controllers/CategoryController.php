<?php

namespace App\Http\Controllers;

use App\Http\Resources\CategoryResource;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $criteria = Category::paginate(6);
        return new CategoryResource($criteria);
    }

    public function random($count)
    {
        $criteria = Category::select('*')
            ->inRandomOrder()
            ->limit($count)
            ->get();
        return new CategoryResource($criteria);
    }
}
