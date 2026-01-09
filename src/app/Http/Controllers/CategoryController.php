<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function list(): View
    {
        $items = Category::orderBy('name', 'asc')->get();
        return view(
            'category.list',
            [
                'title' => 'Categories',
                'items' => $items,
            ]
        );
    }

    public function create(): View
    {
        return view(
            'category.form',
            [
                'title' => 'Create category'
            ]
        );
    }

    public function put(Request $request): RedirectResponse
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
        ]);
        $category = new Category();
        $category->name = $validatedData['name'];
        $category->save();
        return redirect('/categories');
    }
}
