<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Ad;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Category::all();
        return
        view('categories.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return
        view('categories.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request -> validate([
            'name' => 'required|string|max:255|unique:categories,'
        ]);
        Category::create([
            'name' => $request -> name,
        ]);
        return
        redirect() -> route('categories.index') -> with('succes', 'Категоря созданна!');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $category = Category::findOrFail($id);
        $ads = Ad::where('category_id', $id) -> latest() -> paginate(10);
        return
        view('categories.show', compact('category', 'ads'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $category = Category::findOrFail($id);
        return
        view('category.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request -> validate([
            'name' => 'required|string|max:255|unique:categories,name,' . $id,
        ]);
        $category = Category::findOrFail($id);
        $category -> update([
            'name' => $request -> name,
        ]);
        return
        redirect() -> route('categories.index') -> with('succes', 'категория обновленна!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $category = Category::findOrFail($id);
        $category -> delete();
        return
        redirect() -> route('categories.index') -> with('succes', 'Категория удаленна!');
    }
}
