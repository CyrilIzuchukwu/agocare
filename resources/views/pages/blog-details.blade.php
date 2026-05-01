@extends('layouts.app')
@section('content')

<div class="ago-blog-details-page">

  {{-- Breadcrumb --}}
  <div class="breadcumb-wrapper">
    <div class="container">
      <div class="breadcumb-content">
        <h1 class="breadcumb-title">Blog Details</h1>
        <ul class="breadcumb-menu">
          <li><a href="/">Home</a></li>
          <li><a href="{{ route('blog') }}">Blog</a></li>
          <li>{{ Str::limit($post->title, 40) }}</li>
        </ul>
      </div>
    </div>
  </div>

  <section class="th-blog-wrapper blog-details space-top space-extra2-bottom">
    <div class="container">
      <div class="row gx-40">

        {{-- Main Content --}}
        <div class="col-xxl-8 col-lg-7">
          <div class="th-blog blog-single">

            {{-- Featured Image --}}
            @if($post->featured_image)
            <div class="blog-img">
              <img src="{{ Storage::url($post->featured_image) }}"
                alt="{{ $post->title }} — AGO Care Foundation featured image">
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
                <a href="{{ route('blog') }}">
                  <i class="fas fa-user"></i>{{ $post->author }}
                </a>
              </div>

              <h2 class="blog-title">{{ $post->title }}</h2>

              {{-- Quill-rendered body --}}
              <div class="ago-blog-details__body">
                {!! $post->body !!}
              </div>

              {{-- Tags & Share --}}
              <div class="share-links clearfix mt-30">
                <div class="row justify-content-between align-items-center">
                  <div class="col-md-auto mb-2">
                    <span class="share-links-title">Category:</span>
                    <div class="tagcloud d-inline-block ms-2">
                      <a href="{{ route('blog') }}">{{ $post->category }}</a>
                    </div>
                  </div>
                  <div class="col-md-auto mb-2">
                    <span class="share-links-title">Share:</span>
                    <div class="th-social align-items-center ms-2">
                      <a href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(request()->url()) }}"
                        target="_blank" rel="noopener" aria-label="Share on Facebook">
                        <i class="fab fa-facebook-f"></i>
                      </a>
                      <a href="https://twitter.com/intent/tweet?url={{ urlencode(request()->url()) }}&text={{ urlencode($post->title) }}"
                        target="_blank" rel="noopener" aria-label="Share on Twitter">
                        <i class="fab fa-twitter"></i>
                      </a>
                      <a href="https://www.linkedin.com/shareArticle?url={{ urlencode(request()->url()) }}"
                        target="_blank" rel="noopener" aria-label="Share on LinkedIn">
                        <i class="fab fa-linkedin-in"></i>
                      </a>
                      <a href="https://wa.me/?text={{ urlencode($post->title . ' ' . request()->url()) }}"
                        target="_blank" rel="noopener" aria-label="Share on WhatsApp">
                        <i class="fab fa-whatsapp"></i>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          {{-- Author Box --}}
          <div class="ago-blog-details__author">
            <img src="{{ asset('assets/img/blog/blog-author.jpg') }}"
              alt="{{ $post->author }} — AGO Care Foundation"
              class="ago-blog-details__author-img">
            <div>
              <div class="ago-blog-details__author-name">{{ $post->author }}</div>
              <div class="ago-blog-details__author-role">AGO Cares Foundation</div>
              <p class="mb-0" style="font-size:14px;color:#666;">
                We are committed to improving the quality of life of persons with disabilities,
                people living with albinism, and vulnerable children across Nigeria.
              </p>
            </div>
          </div>

          {{-- Prev / Next --}}
          @if($related->isNotEmpty())
          <div class="ago-blog-details__nav">
            @php $prev = $related->first(); $next = $related->last(); @endphp
            <a href="{{ route('blog.details', $prev->slug) }}" class="ago-blog-details__nav-link">
              <div class="ago-blog-details__nav-icon"><i class="fas fa-arrow-left"></i></div>
              <div>
                <span class="ago-blog-details__nav-label">Previous Post</span>
                <span class="ago-blog-details__nav-title">{{ Str::limit($prev->title, 50) }}</span>
              </div>
            </a>
            @if($related->count() > 1)
            <a href="{{ route('blog.details', $next->slug) }}" class="ago-blog-details__nav-link ago-blog-details__nav-link--next">
              <div>
                <span class="ago-blog-details__nav-label">Next Post</span>
                <span class="ago-blog-details__nav-title">{{ Str::limit($next->title, 50) }}</span>
              </div>
              <div class="ago-blog-details__nav-icon"><i class="fas fa-arrow-right"></i></div>
            </a>
            @endif
          </div>
          @endif

          {{-- Comment Form --}}
          <div class="th-comment-form" id="ago-comment-form">
            <div class="form-title">
              <h3 class="blog-inner-title h4 mb-2">Leave a Reply</h3>
              <p class="form-text">Your email address will not be published. Required fields are marked *</p>
            </div>
            <form action="" method="POST">
              @csrf
              <div class="row">
                <div class="col-md-6 form-group style-border">
                  <input type="text" name="comment_name"
                    placeholder="Your Name *" class="form-control" required>
                </div>
                <div class="col-md-6 form-group style-border">
                  <input type="email" name="comment_email"
                    placeholder="Your Email *" class="form-control" required>
                </div>
                <div class="col-12 form-group style-border">
                  <input type="url" name="comment_website"
                    placeholder="Website (optional)" class="form-control">
                </div>
                <div class="col-12 form-group style-border">
                  <textarea name="comment_message" rows="5"
                    placeholder="Write your comment here..."
                    class="form-control" required></textarea>
                </div>
                <div class="col-12 form-group mb-0">
                  <button type="submit" class="th-btn btn-fw">
                    Submit Comment <i class="fas fa-paper-plane ms-2"></i>
                  </button>
                </div>
              </div>
            </form>
          </div>

        </div>

        {{-- Sticky Sidebar --}}
        <div class="col-xxl-4 col-lg-5">
          <aside class="sidebar-area ago-blog-details__sidebar-inner">

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

            {{-- Related Posts --}}
            @if($related->isNotEmpty())
            <div class="widget">
              <h3 class="widget_title">Related Posts</h3>
              <div class="recent-post-wrap">
                @foreach($related as $rel)
                <div class="recent-post">
                  <div class="media-img">
                    <a href="{{ route('blog.details', $rel->slug) }}">
                      @if($rel->featured_image)
                      <img src="{{ Storage::url($rel->featured_image) }}"
                        alt="{{ $rel->title }} — related post thumbnail">
                      @else
                      <img src="{{ asset('assets/img/blog/recent-post-1-2.jpg') }}"
                        alt="{{ $rel->title }} — related post thumbnail">
                      @endif
                    </a>
                  </div>
                  <div class="media-body">
                    <div class="recent-post-meta">
                      <a href="{{ route('blog') }}">
                        <i class="fas fa-tags"></i>{{ $rel->category }}
                      </a>
                    </div>
                    <h4 class="post-title">
                      <a class="text-inherit" href="{{ route('blog.details', $rel->slug) }}">
                        {{ Str::limit($rel->title, 45) }}
                      </a>
                    </h4>
                  </div>
                </div>
                @endforeach
              </div>
            </div>
            @endif

            {{-- Donate CTA --}}
            <div class="widget ago-blog-details__sidebar-donate">
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

</div>{{-- /.ago-blog-details-page --}}
@endsection
