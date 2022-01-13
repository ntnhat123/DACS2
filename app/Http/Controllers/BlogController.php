<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Blog;


use App\Http\Requests\BlogRequest;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blogs = Blog::paginate(10);

        return view('inventory.blog.index', compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('inventory.blog.create');
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,Blog $blog)
    {
        // $blog->title=$request->input('title');
        // $blog->description=$request->input('description');
        // if ($request->hasfile('image')) {
        //     $file = $request->file('image');
        //     $extension = $file->getClientoriginalExtension(); // getting image extension
        //     $filename = time(). '.' . $extension;
        //     $file->move('/assets/img/blog/', $filename);
        //     $blog = Blog::create([
                
        //         'image'=> $filename,
               
        //     ]);
        // } else{
        //     return $request;
            
        // }
        

        $blog->create($request->all());
        
        return redirect()->route('inventory.blog.index')->withStatus('Thêm blog thành công.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Blog $blog)
    {
        return view('inventory.blog.show', compact('blogs'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Blog $blog)
    {
        return view('inventory.blog.edit')->with('blog', $blog);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Blog $blog)
    {
        $blog->update($request->all());

        return redirect()
            ->route('inventory.blog.index')
            ->withStatus('Cập nhật thành công.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Blog $blog)
    {
        $blog->delete();

        return redirect()
            ->route('inventory.blog.index')
            ->withStatus('Xóa thành công.');
    }
    public function datablog(Request $request){
        
        $blog = Blog::find($request->id);
    
        return view('blog-details')->with('blog', $blog);

    }
}

