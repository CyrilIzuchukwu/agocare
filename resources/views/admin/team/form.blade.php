@extends('layouts.admin')
@section('content')
@php($editing = $member->exists)
<div class="content">
  <div class="page-header">
    <div><h4 class="fw-bold mb-1">{{ $editing ? 'Edit' : 'Add' }} Team Member</h4><h6 class="text-muted">This profile can be displayed across the public website</h6></div>
    <a href="{{ route('admin.team.index') }}" class="btn btn-secondary"><i class="ti ti-arrow-left me-1"></i> Back</a>
  </div>
  <form action="{{ $editing ? route('admin.team.update', $member) : route('admin.team.store') }}" method="POST" enctype="multipart/form-data">
    @csrf @if($editing) @method('PATCH') @endif
    <div class="row g-4">
      <div class="col-lg-8">
        <div class="card"><div class="card-header"><h6 class="mb-0">Profile</h6></div><div class="card-body">
          <div class="row g-3">
            <div class="col-md-6"><label class="form-label fw-semibold">Full name *</label><input name="name" class="form-control @error('name') is-invalid @enderror" value="{{ old('name', $member->name) }}" required>@error('name')<div class="invalid-feedback">{{ $message }}</div>@enderror</div>
            <div class="col-md-6"><label class="form-label fw-semibold">Official position *</label><input name="position" class="form-control @error('position') is-invalid @enderror" value="{{ old('position', $member->position) }}" placeholder="e.g. Foundation Secretary" required>@error('position')<div class="invalid-feedback">{{ $message }}</div>@enderror</div>
            <div class="col-md-6"><label class="form-label fw-semibold">Section *</label><select name="group" class="form-select" required>@foreach($groups as $value => $label)<option value="{{ $value }}" @selected(old('group', $member->group) === $value)>{{ $label }}</option>@endforeach</select></div>
            <div class="col-md-6"><label class="form-label fw-semibold">Display order *</label><input type="number" name="sort_order" min="0" max="9999" class="form-control" value="{{ old('sort_order', $member->sort_order ?? 0) }}" required><small class="text-muted">Lower numbers appear first.</small></div>
            <div class="col-12"><label class="form-label fw-semibold">Biography</label><textarea name="bio" rows="7" class="form-control @error('bio') is-invalid @enderror" placeholder="Brief professional profile, responsibilities or contribution">{{ old('bio', $member->bio) }}</textarea>@error('bio')<div class="invalid-feedback">{{ $message }}</div>@enderror</div>
          </div>
        </div></div>
      </div>
      <div class="col-lg-4">
        <div class="card mb-4"><div class="card-header"><h6 class="mb-0">Photograph</h6></div><div class="card-body">
          <img id="memberPreview" src="{{ $member->image ? Storage::url($member->image) : asset('assets/img/user/user-icon.jpg') }}" alt="Preview" style="width:100%;max-height:320px;object-fit:cover;border-radius:8px" class="mb-3">
          <input id="memberImage" type="file" name="image" accept="image/jpeg,image/png,image/webp" class="form-control @error('image') is-invalid @enderror">@error('image')<div class="invalid-feedback">{{ $message }}</div>@enderror
          <small class="text-muted">JPEG, PNG or WebP, maximum 3MB.</small>
        </div></div>
        <div class="card"><div class="card-header"><h6 class="mb-0">Visibility</h6></div><div class="card-body">
          <div class="form-check form-switch mb-3"><input type="checkbox" name="is_published" value="1" class="form-check-input" id="published" @checked(old('is_published', $member->exists ? $member->is_published : true))><label for="published" class="form-check-label">Published</label></div>
          <div class="form-check form-switch mb-4"><input type="checkbox" name="show_on_homepage" value="1" class="form-check-input" id="homepage" @checked(old('show_on_homepage', $member->show_on_homepage))><label for="homepage" class="form-check-label">Show on homepage</label></div>
          <button class="btn btn-secondary w-100"><i class="ti ti-device-floppy me-1"></i> {{ $editing ? 'Save Changes' : 'Add Member' }}</button>
        </div></div>
      </div>
    </div>
  </form>
</div>
<script>document.getElementById('memberImage').addEventListener('change', function(){if(this.files[0]) document.getElementById('memberPreview').src=URL.createObjectURL(this.files[0]);});</script>
@endsection
