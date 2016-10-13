<?php

namespace App\Http\Controllers\Backend;

use App\Blog;
use App\Http\Requests\BlogStoreRequest;
use App\Http\Controllers\Controller;

/**
 * Class BlogController
 * @package App\Http\Controllers\Backend
 */
class BlogController extends Controller
{
    /**
     * @var Blog
     */
    private $blogs;

    /**
     * BlogController constructor.
     * @param Blog $blogs
     */
    public function __construct(Blog $blogs)
    {
        $this->blogs = $blogs;

        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blogs = $this->blogs->all();

        return view('backend.blogs.index', compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Blog $blog)
    {
        return view('backend.blogs.form',compact('blog'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(BlogStoreRequest $request)
    {
        $this->blogs->create($request->all());

        return redirect(route('blogs.index'))->with('message', 'Blog Post Created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $blog = $this->blogs->findOrFail($id);

        return view('backend.blogs.show', compact('blog'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $blog = $this->blogs->findOrFail($id);

        return view('backend.blogs.form', compact('blog'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(BlogStoreRequest $request, $id)
    {
        $blog = $this->blogs->findOrFail($id);

        $blog->update($request->all());

        return redirect(route('blogs.index'))->with('message', 'Blog Post Updated successfully');
    }

    /**
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function confirm($id)
    {
        $blog = $this->blogs->findOrFail($id);

        return view('backend.blogs.confirm', compact('blog'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $blog = $this->blogs->findOrFail($id);

        $blog->delete();

        return redirect(route('blogs.index'))->with('message', 'Blog Post deleted successfully');
    }

}
