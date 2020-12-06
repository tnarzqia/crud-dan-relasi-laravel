<?php

namespace App\Http\Controllers;

use App\Category;
use App\Post;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //untuk menampilkan semua data dari database

        //untuk menampilkan data dengan array assosiatif
        $data = Category::all();
        return view('pages/category/index')->with([
            'data' => $data,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //untuk menampilkan form tambah data
        return view('pages/category/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //menghandle request dari user ke database
        $new_category = new \App\Category;
        $new_category->title = $request->get('title');
        $new_category->description = $request->get('description');
        $new_category->save();

        return redirect()->route('category.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        //show tidak untuk form
        //untuk menampilkan detail
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // untuk menampilkan form edit beserta isinya
        // find0rFail harus primary key
        $data = Category::findOrFail($id);

        return view('pages/category/edit')->with([
            'data' => $data,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $category = Category::findOrFail($id);
        $category->title = $request->get('title');
        $category->description = $request->get('description');
        $category->save();

        return redirect()->route('category.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //untuk delete
        $delete = Category::findOrFail($id);
        $delete->delete();

        return redirect()->route('category.index');
    }
    public function test()
    {
        $data = Post::with('category')->get();

        return view('pages/category/test')->with([
            'items' => $data,
            'PageTitle' => 'Data Category dari Controller',
        ]);
    }
}
