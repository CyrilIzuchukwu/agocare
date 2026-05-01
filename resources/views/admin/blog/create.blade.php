@extends('layouts.admin')
@section('content')
{{-- Quill CSS --}}
<link rel="stylesheet" href="{{ asset('dashboard_assets/plugins/quill/quill.snow.css') }}">

<div class="content ago-admin-blog">
  <div class="page-header">
    <div>
      <h4 class="fw-bold mb-1">Create New Post</h4>
      <h6 class="text-muted">Write and publish a new blog article</h6>
    </div>
    <a href="{{ route('admin.blog.index') }}" class="btn btn-secondary">
      <i class="ti ti-arrow-left me-1"></i> Back to Posts
    </a>
  </div>

  <form action="{{ route('admin.blog.store') }}" method="POST" enctype="multipart/form-data" id="blogForm">
    @csrf

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
                value="{{ old('title') }}" placeholder="Enter post title" required>
              @error('title')
              <div class="invalid-feedback">{{ $message }}</div>
              @enderror
            </div>

            <div class="mb-3">
              <label class="form-label fw-semibold">Content <span class="text-danger">*</span></label>
              {{-- Hidden input that holds Quill HTML --}}
              <input type="hidden" name="body" id="bodyInput" value="{{ old('body') }}">
              {{-- Quill editor container --}}
              <div id="quillEditor" class="ago-quill-editor">
                {!! old('body') !!}
              </div>
              @error('body')
              <div class="text-danger small mt-1">{{ $message }}</div>
              @enderror
            </div>

          </div>
        </div>

        {{-- Featured Image --}}
        <div class="card">
          <div class="card-header">
            <h6 class="mb-0">Featured Image</h6>
          </div>
          <div class="card-body">
            <img id="imgPreview" src="" alt="Preview" class="ago-img-preview mb-3">
            <label class="ago-drop-zone" for="featuredImage">
              <i class="ti ti-photo-up"></i>
              <span id="dropLabel">Click to upload or drag & drop</span>
              <small class="text-muted d-block mt-1">JPEG, PNG, WebP — max 2MB</small>
            </label>
            <input type="file" id="featuredImage" name="featured_image"
              accept="image/jpeg,image/png,image/jpg,image/webp" class="d-none">
            @error('featured_image')
            <div class="text-danger small mt-1">{{ $message }}</div>
            @enderror
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
                <option value="draft" {{ old('status') === 'draft' ? 'selected' : '' }}>Draft</option>
                <option value="published" {{ old('status') === 'published' ? 'selected' : '' }}>
                  Published</option>
              </select>
              @error('status')
              <div class="invalid-feedback">{{ $message }}</div>
              @enderror
            </div>
            <button type="submit" class="btn btn-secondary w-100">
              <i class="ti ti-send me-1"></i> Publish Post
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
                value="{{ old('category') }}" placeholder="e.g. Medical Outreach" required>
              @error('category')
              <div class="invalid-feedback">{{ $message }}</div>
              @enderror
            </div>
            <div class="mb-3">
              <label class="form-label fw-semibold">Author</label>
              <input type="text" name="author"
                class="form-control @error('author') is-invalid @enderror"
                value="{{ old('author', 'AGO Cares Team') }}" placeholder="Author name">
              @error('author')
              <div class="invalid-feedback">{{ $message }}</div>
              @enderror
            </div>
            <div class="mb-0">
              <label class="form-label fw-semibold">URL Slug</label>
              <input type="text" id="slugPreview" class="form-control bg-light"
                placeholder="Auto-generated from title" readonly>
              <small class="text-muted">Generated automatically from the title</small>
            </div>
          </div>
        </div>

      </div>
    </div>
  </form>
</div>

{{-- Quill JS --}}
<script src="{{ asset('dashboard_assets/plugins/quill/quill.min.js') }}"></script>
<script>
  (function() {
    // Init Quill
    var quill = new Quill('#quillEditor', {
      theme: 'snow',
      placeholder: 'Write your post content here...',
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

    // Sync Quill content to hidden input on form submit
    document.getElementById('blogForm').addEventListener('submit', function() {
      document.getElementById('bodyInput').value = quill.root.innerHTML;
    });

    // Auto-generate slug from title
    document.getElementById('postTitle').addEventListener('input', function() {
      var slug = this.value.toLowerCase()
        .replace(/[^a-z0-9\s-]/g, '')
        .trim()
        .replace(/\s+/g, '-');
      document.getElementById('slugPreview').value = slug;
    });

    // Image preview
    document.getElementById('featuredImage').addEventListener('change', function() {
      var file = this.files[0];
      if (!file) return;
      var reader = new FileReader();
      reader.onload = function(e) {
        var preview = document.getElementById('imgPreview');
        preview.src = e.target.result;
        preview.classList.add('show');
        document.getElementById('dropLabel').textContent = file.name;
      };
      reader.readAsDataURL(file);
    });
  })();
</script>
@endsection
