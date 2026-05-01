@extends('layouts.admin')
@section('content')
<div class="content">
  <div class="page-header">
    <div>
      <h4 class="fw-bold mb-1">Blog Posts</h4>
      <h6 class="text-muted">Manage all blog posts and news articles</h6>
    </div>
    <div>
      <a href="{{ route('admin.blog.create') }}" class="btn btn-secondary">
        <i class="ti ti-plus me-1"></i> New Post
      </a>
    </div>
  </div>

  <div class="card">
    <div class="card-body p-0">
      <div class="table-responsive">
        <table class="table table-hover mb-0">
          <thead class="table-light">
            <tr>
              <th width="50">#</th>
              <th>Title</th>
              <th>Category</th>
              <th>Author</th>
              <th>Status</th>
              <th>Date</th>
              <th width="120">Actions</th>
            </tr>
          </thead>
          <tbody>
            @forelse($posts as $post)
            <tr>
              <td>{{ $loop->iteration }}</td>
              <td>
                <div class="d-flex align-items-center gap-2">
                  @if($post->featured_image)
                  <img src="{{ Storage::url($post->featured_image) }}"
                    alt="{{ $post->title }}"
                    style="width:48px;height:36px;object-fit:cover;border-radius:4px;">
                  @else
                  <div style="width:48px;height:36px;background:#f0f0f0;border-radius:4px;display:flex;align-items:center;justify-content:center;">
                    <i class="ti ti-photo text-muted"></i>
                  </div>
                  @endif
                  <div>
                    <div class="fw-semibold" style="max-width:280px;white-space:nowrap;overflow:hidden;text-overflow:ellipsis;">
                      {{ $post->title }}
                    </div>
                    <small class="text-muted">/blog/{{ $post->slug }}</small>
                  </div>
                </div>
              </td>
              <td><span class="badge bg-light text-dark">{{ $post->category }}</span></td>
              <td>{{ $post->author }}</td>
              <td>
                @if($post->status === 'published')
                <span class="badge bg-success-subtle text-success">Published</span>
                @else
                <span class="badge bg-warning-subtle text-warning">Draft</span>
                @endif
              </td>
              <td>{{ $post->created_at->format('M d, Y') }}</td>
              <td>
                <div class="d-flex gap-1">
                  <a href="{{ route('blog.details', $post->slug) }}" target="_blank"
                    class="btn btn-sm btn-light" title="View">
                    <i class="ti ti-eye"></i>
                  </a>
                  <a href="{{ route('admin.blog.edit', $post) }}"
                    class="btn btn-sm btn-secondary" title="Edit">
                    <i class="ti ti-edit"></i>
                  </a>
                  <form action="{{ route('admin.blog.destroy', $post) }}" method="POST"
                    onsubmit="return confirm('Delete this post?')">
                    @csrf @method('DELETE')
                    <button type="submit" class="btn btn-sm btn-danger" title="Delete">
                      <i class="ti ti-trash"></i>
                    </button>
                  </form>
                </div>
              </td>
            </tr>
            @empty
            <tr>
              <td colspan="7" class="text-center py-5 text-muted">
                <i class="ti ti-article fs-2 d-block mb-2"></i>
                No posts yet. <a href="{{ route('admin.blog.create') }}">Create your first post</a>.
              </td>
            </tr>
            @endforelse
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
@endsection
