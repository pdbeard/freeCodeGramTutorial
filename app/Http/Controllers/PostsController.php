<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class PostsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function create()
    {
        return view('posts/create');
    }

    public function store()
    {
        $data = request()->validate([
            'caption'=>'required',
            'image'=>['required', 'image'],
        ]);

        // stores locally into the uploads directory. Will create it automatically in storage
        // must enable 'php artisan storage:link' to make images accesible on website.
        $imagePath=request('image')->store('uploads','public');

        $image = Image::make(public_path("storage/{$imagePath}"))->fit(1200,1200);
        $image->save();

        auth()->user()->posts()->create([
            'caption' => $data['caption'],
            'image' => $imagePath,
            'title' => 'Test', //Only because I didn't nullable title
        ]);

        return redirect('/profile/' . auth()->user()->id);

        dd(request()->all());
    }
}
