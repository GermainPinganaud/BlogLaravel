<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreBlogCategory;
use Illuminate\Http\Request;
use App\Category;

class CategoryController extends Controller
{
    protected $redirectTo = '/category'

    public function index(){
        //Code métier :
        $categories = Category::all();
        return view('category.list', ['categories' => $categories]);
    }
    public function create(){
        return view('category.create');
    }

    public function store(StoreBlogCategory $request){
        $category = new Category;
        $category->label = $request->label;
        $category->save();

        return redirect($this->redirectTo);
    }
    public function update(){

    }
    public function edit(StoreBlogCategory $request){

        return redirect($this->redirectTo);
    }
    public function delete($id) {
        $category = Category::find($id);
        $category->delete();

        return redirect($this->redirectTo);
    }
}