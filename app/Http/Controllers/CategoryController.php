<?php

namespace App\Http\Controllers;

use App\Models\category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = category::all();
        return view('admin.category.index',[ 'data'=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.category.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
    //    $data ['category_name']=$request->category_name;
    //    $data ['category_description']=$request->category_description;
    //    category::create($data);
    //    return back();

        // =============== Caregory From validation=================
    $request->validate([
        'category_name' => 'required|max:255',
        'category_description' => 'required',
    ]);

        category::create($request->all());
        return redirect()->route('categories.index')->withSuccess('Added Successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(category $category)
    {
        // $data=['category']= $category;
        // return view ('admin.category.show',$data);

        // return view ('admin.category.show',compact ('$category'));

       return view ('admin.category.show',['data'=>$category]);

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(category $category)
    {
        return view ('admin.category.edit',['data'=>$category]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, category $category)
    {
        $category->update($request->all());
        return redirect()->route ('categories.index')->with('success','updated successfully !');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(category $category)
    {
        $category->delete();
        return redirect()->route('categories.index')->with('success','Delete successfully !');
    }
}
