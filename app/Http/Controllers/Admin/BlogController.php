<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class BlogController extends Controller
{
  public function index()
  {
    $posts = Post::latest()->get();
    return view('admin.blog.index', compact('posts'), ['pageTitle' => 'Blog Posts']);
  }

  public function create()
  {
    return view('admin.blog.create', ['pageTitle' => 'Create Post']);
  }

  public function store(Request $request)
  {
    $request->validate([
      'title'           => ['required', 'string', 'max:255'],
      'category'        => ['required', 'string', 'max:100'],
      'body'            => ['required', 'string'],
      'author'          => ['nullable', 'string', 'max:100'],
      'status'          => ['required', 'in:published,draft'],
      'featured_image'  => ['nullable', 'image', 'mimes:jpeg,png,jpg,webp', 'max:2048'],
    ]);

    $imagePath = null;
    if ($request->hasFile('featured_image')) {
      $image     = $request->file('featured_image');
      $filename  = Str::uuid() . '.' . $image->getClientOriginalExtension();
      $imagePath = $image->storeAs('blog', $filename, 'public');
    }

    Post::create([
      'title'          => $request->title,
      'slug'           => Post::generateSlug($request->title),
      'category'       => $request->category,
      'body'           => $request->body,
      'author'         => $request->author ?? 'AGO Cares Team',
      'status'         => $request->status,
      'featured_image' => $imagePath,
    ]);

    return redirect()->route('admin.blog.index')->with('success', 'Post created successfully.');
  }

  public function edit(Post $post)
  {
    return view('admin.blog.edit', compact('post'), ['pageTitle' => 'Edit Post']);
  }

  public function update(Request $request, Post $post)
  {
    $request->validate([
      'title'           => ['required', 'string', 'max:255'],
      'category'        => ['required', 'string', 'max:100'],
      'body'            => ['required', 'string'],
      'author'          => ['nullable', 'string', 'max:100'],
      'status'          => ['required', 'in:published,draft'],
      'featured_image'  => ['nullable', 'image', 'mimes:jpeg,png,jpg,webp', 'max:2048'],
    ]);

    $imagePath = $post->featured_image;
    if ($request->hasFile('featured_image')) {
      if ($imagePath && Storage::disk('public')->exists($imagePath)) {
        Storage::disk('public')->delete($imagePath);
      }
      $image     = $request->file('featured_image');
      $filename  = Str::uuid() . '.' . $image->getClientOriginalExtension();
      $imagePath = $image->storeAs('blog', $filename, 'public');
    }

    $post->update([
      'title'          => $request->title,
      'category'       => $request->category,
      'body'           => $request->body,
      'author'         => $request->author ?? 'AGO Cares Team',
      'status'         => $request->status,
      'featured_image' => $imagePath,
    ]);

    return redirect()->route('admin.blog.index')->with('success', 'Post updated successfully.');
  }

  public function destroy(Post $post)
  {
    if ($post->featured_image && Storage::disk('public')->exists($post->featured_image)) {
      Storage::disk('public')->delete($post->featured_image);
    }
    $post->delete();
    return redirect()->route('admin.blog.index')->with('success', 'Post deleted successfully.');
  }
}
