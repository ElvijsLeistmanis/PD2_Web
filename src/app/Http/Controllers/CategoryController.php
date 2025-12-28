<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;

class CategoryController extends Controller {
    public function list(): View {
            $items = Category::orderBy('name', 'asc')->get();
            return view(
                'category.list', 
                [
                    'title' => 'Categories',
                    'items' => $items,
                ]
            );
    }   
}
