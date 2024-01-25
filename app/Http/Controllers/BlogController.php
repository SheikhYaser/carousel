<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function create()
    {
        return view('create');
    }
    public function store(Blog $request)
    {
        $requestedData = $request->all();

        if ($request->hasFile('image')) {

            $image = $request->file('image');

            $requestedData['image'] = time() . '.' . $image->getClientOriginalExtension();

            $image->move(public_path('/admin/blogs'), $requestedData['image']);

        }

        Blog::create($requestedData);

        return redirect('/');
    }
}
