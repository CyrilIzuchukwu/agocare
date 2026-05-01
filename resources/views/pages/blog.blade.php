@extends('layouts.app')
@section('content')

<div class="ago-blog-page">

  {{-- Breadcrumb --}}
  <div class="breadcumb-wrapper">
    <div class="container">
      <div class="breadcumb-content">
        <h1 class="breadcumb-title">Blog & News</h1>
        <ul class="breadcumb-menu">
          <li><a href="/">Home</a></li>
          <li>Blog</li>
        </ul>
      </div>
    </div>
  </div>

  <section class="th-blog-wrapper space-top space-extra-bottom">
    <div class="container">
      <div class="row gx-40">

        {{-- Posts Column --}}
        <div class="col-xxl-8 col-lg-7">

          @forelse($posts as $post)
          <div class="th-blog blog-single has-post-thumbnail ago-blog__post">
            @if($post->featured_image)
            <div class="blog-img ago-blog__post-img-wrap">
              <a href="{{ route('blog.details', $post->slug) }}">
                <img src="{{ Storage::url($post->featured_image) }}"
                  alt="{{ $post->title }} — AGO Care Foundation"
                  class="ago-blog__post-img">
              </a>
            </div>
            @endif
            <div class="blog-content">
              <div class="blog-meta">
                <a href="{{ route('blog') }}">
                  <i class="fas fa-calendar-days"></i>
                  {{ $post->created_at->format('M d, Y') }}
                </a>
                <a href="{{ route('blog') }}">
                  <i class="fas fa-tags"></i>{{ $post->category }}
                </a>
                <a href="{{ route('blog.details', $post->slug) }}">
                  <i class="fas fa-user"></i>{{ $post->author }}
                </a>
              </div>
              <h2 class="blog-title">
                <a href="{{ route('blog.details', $post->slug) }}">{{ $post->title }}</a>
              </h2>
              <p class="blog-text">{{ $post->excerpt }}</p>
              <a href="{{ route('blog.details', $post->slug) }}" class="th-btn btn-sm">
                Read More <i class="fas fa-arrow-up-right ms-2"></i>
              </a>
            </div>
          </div>
          @empty
          <div class="text-center py-60">
            <i class="fas fa-newspaper" style="font-size:48px;color:#ddd;display:block;margin-bottom:16px;"></i>
            <h4>No posts published yet.</h4>
            <p class="text-muted">Check back soon for news and updates from AGO Cares Foundation.</p>
          </div>
          @endforelse

          {{-- Pagination --}}
          @if($posts->hasPages())
          <div class="th-pagination">
            <ul>
              @if($posts->onFirstPage())
              <li class="disabled"><span><i class="fas fa-arrow-left"></i></span></li>
              @else
              <li><a href="{{ $posts->previousPageUrl() }}"><i class="fas fa-arrow-left"></i></a></li>
              @endif

              @foreach($posts->getUrlRange(1, $posts->lastPage()) as $page => $url)
              <li class="{{ $page == $posts->currentPage() ? 'active' : '' }}">
                <a href="{{ $url }}">{{ $page }}</a>
              </li>
              @endforeach

              @if($posts->hasMorePages())
              <li><a href="{{ $posts->nextPageUrl() }}"><i class="fas fa-arrow-right"></i></a></li>
              @else
              <li class="disabled"><span><i class="fas fa-arrow-right"></i></span></li>
              @endif
            </ul>
          </div>
          @endif

        </div>

        {{-- Sticky Sidebar --}}
        <div class="col-xxl-4 col-lg-5">
          <aside class="sidebar-area ago-blog__sidebar-inner">

            {{-- Search --}}
            <div class="widget widget_search">
              <form class="search-form" action="{{ route('blog') }}" method="GET">
                <input type="text" name="q" placeholder="Search posts..."
                  value="{{ request('q') }}">
                <button type="submit"><i class="far fa-search"></i></button>
              </form>
            </div>

            {{-- Categories --}}
            <div class="widget widget_categories">
              <h3 class="widget_title">Categories</h3>
              <ul>
                @foreach($categories as $cat)
                <li>
                  <a href="{{ route('blog') }}">{{ $cat }}</a>
                  <span><i class="fas fa-arrow-right"></i></span>
                </li>
                @endforeach
                @if($categories->isEmpty())
                <li><span class="text-muted">No categories yet</span></li>
                @endif
              </ul>
            </div>

            {{-- Recent Posts --}}
            <div class="widget">
              <h3 class="widget_title">Recent Posts</h3>
              <div class="recent-post-wrap">
                @foreach($recent as $r)
                <div class="recent-post">
                  <div class="media-img">
                    <a href="{{ route('blog.details', $r->slug) }}">
                      @if($r->featured_image)
                      <img src="{{ Storage::url($r->featured_image) }}"
                        alt="{{ $r->title }} — recent post thumbnail">
                      @else
                      <img src="{{ asset('assets/img/blog/recent-post-1-1.jpg') }}"
                        alt="{{ $r->title }} — recent post thumbnail">
                      @endif
                    </a>
                  </div>
                  <div class="media-body">
                    <div class="recent-post-meta">
                      <a href="{{ route('blog') }}">
                        <i class="fas fa-calendar-days"></i>
                        {{ $r->created_at->format('M d, Y') }}
                      </a>
                    </div>
                    <h4 class="post-title">
                      <a class="text-inherit" href="{{ route('blog.details', $r->slug) }}">
                        {{ Str::limit($r->title, 45) }}
                      </a>
                    </h4>
                  </div>
                </div>
                @endforeach
                @if($recent->isEmpty())
                <p class="text-muted small">No posts yet.</p>
                @endif
              </div>
            </div>

            {{-- Donate CTA --}}
            <div class="widget ago-blog__sidebar-donate">
              <h3 class="widget_title">Support Our Work</h3>
              <p>
                Your donation helps us continue our outreach programs and change more lives.
              </p>
              <a href="{{ route('donate') }}" class="th-btn style5">
                Donate Now <i class="fas fa-heart ms-2"></i>
              </a>
            </div>

          </aside>
        </div>

      </div>
    </div>
  </section>

</div>{{-- /.ago-blog-page --}}
@endsection
