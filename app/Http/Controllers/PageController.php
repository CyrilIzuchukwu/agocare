<?php

namespace App\Http\Controllers;

use App\Models\Post;

class PageController extends Controller
{
  public function home()
  {
    return view('welcome');
  }

  public function about()
  {
    return view('pages.about');
  }


  
  public function services()
  {
    return view('pages.services');
  }



  public function campaigns()
  {
    return view('pages.campaigns');
  }

  public function projects()
  {
    return view('pages.projects');
  }

  public function gallery()
  {
    return view('pages.gallery');
  }

  public function career()
  {
    return view('pages.career');
  }

  public function apply()
  {
    return view('pages.apply');
  }

  public function volunteer()
  {
    return view('pages.volunteer');
  }

  public function donate()
  {
    return view('pages.donate');
  }

  public function contact()
  {
    return view('pages.contact');
  }

  public function blog()
  {
    $posts      = Post::published()->latest()->paginate(6);
    $categories = Post::published()->distinct()->pluck('category');
    $recent     = Post::published()->latest()->take(4)->get();
    return view('pages.blog', compact('posts', 'categories', 'recent'));
  }

  public function blogDetails(string $slug)
  {
    $post       = Post::published()->where('slug', $slug)->firstOrFail();
    $related    = Post::published()->where('id', '!=', $post->id)->latest()->take(3)->get();
    $recent     = Post::published()->latest()->take(4)->get();
    $categories = Post::published()->distinct()->pluck('category');
    return view('pages.blog-details', compact('post', 'related', 'recent', 'categories'));
  }
}
