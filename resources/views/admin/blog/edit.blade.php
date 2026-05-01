@extends('layouts.admin')
@section('content')

<link rel="stylesheet" href="{{ asset('dashboard_assets/plugins/quill/quill.snow.css') }}">

<div class="content ago-admin-blog">
  <div class="page-header">
    <div>
      <h4 class="fw-bold mb-1">Edit Post</h4>
      <h6 class="text-muted">{{ Str::limit($post->title, 60) }}</h6>
    </div>
    <a href="{{ route('admin.blog.index') }}" class="btn btn-secondary">
      <i class="ti ti-arrow-left me-1"></i> Back to Posts
    </a>
  </div>

  <form action="{{ route('admin.blog.update', $post) }}" method="POST" enctype="multipart/form-data" id="blogForm">
    @csrf @method('PATCH')

    <div class="row g-4">

      {{-- Left: Main Content --}}
      <div class="col-lg-8">

        <div class="card mb-4">
          <div class="card-header">
            <h6 class="mb-0">Post Content</h6>
          </div>
          <div class="card-body">

            <div class="mb-3">
              <label class="form-label fw-semibold">Title <span class="text-danger">*</span></label>
              <input type="text" name="title" id="postTitle"
                class="form-control form-control-lg @error('title') is-invalid @enderror"
                value="{{ old('title', $post->title) }}" required>
              @error('title')<div class="invalid-feedback">{{ $message }}</div>@enderror
            </div>

            <div class="mb-3">
              <label class="form-label fw-semibold">Content <span class="text-danger">*</span></label>
              <input type="hidden" name="body" id="bodyInput" value="{{ old('body', $post->body) }}">
              <div id="quillEditor" class="ago-quill-editor">
                {!! old('body', $post->body) !!}
              </div>
              @error('body')<div class="text-danger small mt-1">{{ $message }}</div>@enderror
            </div>

          </div>
        </div>

        {{-- Featured Image --}}
        <div class="card">
          <div class="card-header">
            <h6 class="mb-0">Featured Image</h6>
          </div>
          <div class="card-body">
            @if($post->featured_image)
            <img id="imgPreview"
              src="{{ Storage::url($post->featured_image) }}"
              alt="{{ $post->title }} featured image"
              class="ago-img-preview mb-3">
            @else
            <img id="imgPreview" src="" alt="Preview" class="ago-img-preview mb-3" style="display:none;">
            @endif
            <label class="ago-drop-zone" for="featuredImage">
              <i class="ti ti-photo-up"></i>
              <span id="dropLabel">{{ $post->featured_image ? 'Replace image' : 'Click to upload' }}</span>
              <small class="text-muted d-block mt-1">JPEG, PNG, WebP — max 2MB</small>
            </label>
            <input type="file" id="featuredImage" name="featured_image"
              accept="image/jpeg,image/png,image/jpg,image/webp" class="d-none">
            @error('featured_image')<div class="text-danger small mt-1">{{ $message }}</div>@enderror
          </div>
        </div>

      </div>

      {{-- Right: Meta --}}
      <div class="col-lg-4">

        <div class="card mb-4">
          <div class="card-header">
            <h6 class="mb-0">Publish</h6>
          </div>
          <div class="card-body">
            <div class="mb-3">
              <label class="form-label fw-semibold">Status</label>
              <select name="status" class="form-select @error('status') is-invalid @enderror">
                <option value="draft" {{ old('status', $post->status) === 'draft' ? 'selected' : '' }}>Draft</option>
                <option value="published" {{ old('status', $post->status) === 'published' ? 'selected' : '' }}>Published</option>
              </select>
            </div>
            <button type="submit" class="btn btn-secondary w-100">
              <i class="ti ti-device-floppy me-1"></i> Save Changes
            </button>
          </div>
        </div>

        <div class="card mb-4">
          <div class="card-header">
            <h6 class="mb-0">Post Details</h6>
          </div>
          <div class="card-body">
            <div class="mb-3">
              <label class="form-label fw-semibold">Category <span class="text-danger">*</span></label>
              <input type="text" name="category"
                class="form-control @error('category') is-invalid @enderror"
                value="{{ old('category', $post->category) }}" required>
              @error('category')<div class="invalid-feedback">{{ $message }}</div>@enderror
            </div>
            <div class="mb-3">
              <label class="form-label fw-semibold">Author</label>
              <input type="text" name="author"
                class="form-control"
                value="{{ old('author', $post->author) }}">
            </div>
            <div class="mb-0">
              <label class="form-label fw-semibold">URL Slug</label>
              <input type="text" class="form-control bg-light"
                value="{{ $post->slug }}" readonly>
              <small class="text-muted">Slug is fixed after creation</small>
            </div>
          </div>
        </div>

        <div class="card">
          <div class="card-header">
            <h6 class="mb-0">Danger Zone</h6>
          </div>
          <div class="card-body">
            <form action="{{ route('admin.blog.destroy', $post) }}" method="POST"
              onsubmit="return confirm('Permanently delete this post?')">
              @csrf @method('DELETE')
              <button type="submit" class="btn btn-danger w-100">
                <i class="ti ti-trash me-1"></i> Delete Post
              </button>
            </form>
          </div>
        </div>

      </div>
    </div>
  </form>
</div>

<script src="{{ asset('dashboard_assets/plugins/quill/quill.min.js') }}"></script>
<script>
  (function() {
    var quill = new Quill('#quillEditor', {
      theme: 'snow',
      modules: {
        toolbar: [
          [{
            header: [1, 2, 3, false]
          }],
          ['bold', 'italic', 'underline', 'strike'],
          [{
            list: 'ordered'
          }, {
            list: 'bullet'
          }],
          ['blockquote', 'code-block'],
          ['link', 'image'],
          [{
            align: []
          }],
          ['clean']
        ]
      }
    });

    document.getElementById('blogForm').addEventListener('submit', function() {
      document.getElementById('bodyInput').value = quill.root.innerHTML;
    });

    document.getElementById('featuredImage').addEventListener('change', function() {
      var file = this.files[0];
      if (!file) return;
      var reader = new FileReader();
      reader.onload = function(e) {
        var preview = document.getElementById('imgPreview');
        preview.src = e.target.result;
        preview.style.display = 'block';
        document.getElementById('dropLabel').textContent = file.name;
      };
      reader.readAsDataURL(file);
    });
  })();
</script>
@endsection
