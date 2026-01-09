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
                'title' => 'Create category',
                'category' => new Category()
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

    public function update(Category $category): View
    {
        return view(
            'category.form',
            [
                'title' => 'Update category',
                'category' => $category
            ]
        );
    }

    public function patch(Category $category, Request $request): RedirectResponse
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
        ]);
        $category->name = $validatedData['name'];
        $category->save();
        return redirect('/categories');
    }
    public function delete(Category $category): RedirectResponse
    {
        //TODO: Reject category deletion if an entry is already attached to it.
        $category->delete();
        return redirect('/categories');
    }
}

