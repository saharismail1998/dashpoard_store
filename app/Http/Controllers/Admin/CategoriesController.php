<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Controllers\Admin\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Category;

class CategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // return collection of category 

        $flash_message=session('succses');
        $categories = Category::simplepaginate(10); // all categories  - split by paginate
        return view('admin.categories.index', [
            'entries' => $categories,
            'flash_message'=>$flash_message,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $parents=Category::all();
        return view('admin.categories.create',[
            'category'=>new Category(),
            'parents'=>$parents,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


        $this->validate($request,[
            'name'=>'required|string|min:3|max:255',
            'parent_id'=>'int|exists:catogries,id',
            'description'=>'string',
            'status'=>'exists:catogries,status',
        ]);

        //$request->post('name') OR
        //$request->name OR
        //$request->get('name'),

        $category=Category::create([
            'name'=>$request->input('name'),
            'parent_id'=>$request->input('parent_id'),
            'slug'=>$request->input('slug'),
            'status'=>$request->input('status'),
        ]);
        return redirect('admin/category')->with('succses','category created !');

// OR
        // $category=new Category([
        //     'name'=>$request->input('name'),
        //     'parent_id'=>$request->input('parent_id'),
        //     'slug'=>$request->input('slug'),
        //     'status'=>$request->input('status'),
        // ]);
        // $category->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //$category=   Category::where('id','=',$id)->first();
        $category = Category::find($id);
        if (!$category) {
            abort(404);
        }
        return view('admin.categories.show', [
            'category' => $category,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $parents=Category::where('id','<>',$id)->get();
        $status=Category::all();
        $category = Category::find($id);
        if (!$category) {
            abort(404);
        }
        return view('admin.categories.edit', [
            'category' => $category,
            'parents'=>$parents,
            'status'=>$status,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $category = Category::findOrFail($id);
        $category->update([
            'name' => $request->input('name'),
            // 'slug'=>Str::slug($request->input('name')),
            'parent_id' => $request->input('parent_id'),
            'status' => $request->input('status'),
        ]);
        return redirect('/admin/category')->with('succses','category updated !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Category::where('id','=',$id)->delete();
// OR
        // Category::destroy($id);

        //OR
        // $category=Category::findOrFail($id);
        // $category->delete();
        return redirect('/admin/category')->with('succses','category deleted !');


    }
}
