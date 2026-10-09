@extends('layouts.admin')
@section('content')
@php($application = $volunteerApplication)
<div class="content">
  <div class="page-header"><div><h4 class="fw-bold mb-1">{{ $application->full_name }}</h4><h6 class="text-muted">{{ $application->reference }} · Submitted {{ $application->created_at->format('M d, Y g:i A') }}</h6></div><a href="{{ route('admin.volunteer-applications.index') }}" class="btn btn-light"><i class="ti ti-arrow-left me-1"></i> Applications</a></div>
  <div class="row g-4">
    <div class="col-lg-8">
      <div class="card mb-4"><div class="card-header"><h6 class="mb-0">Applicant Details</h6></div><div class="card-body">
        <div class="row g-4">
          <div class="col-md-3">@if($application->profile_photo)<img src="{{ Storage::url($application->profile_photo) }}" alt="{{ $application->full_name }}" class="img-fluid rounded">@else<div class="bg-light rounded p-5 text-center"><i class="ti ti-user fs-1 text-muted"></i></div>@endif</div>
          <div class="col-md-9"><div class="row g-3">
            @foreach(['Email'=>$application->email,'Phone'=>$application->phone,'Location'=>$application->location,'Occupation'=>$application->occupation ?: 'Not supplied','Volunteer area'=>$application->area,'Work mode'=>$application->work_mode,'Availability'=>$application->availability,'Hours per week'=>$application->hours_per_week ?: 'Not supplied'] as $key => $value)
            <div class="col-md-6"><small class="text-muted d-block">{{ $key }}</small><span class="fw-semibold">{{ $value }}</span></div>
            @endforeach
          </div></div>
        </div>
      </div></div>
      @foreach(['Skills'=>$application->skills,'Previous Experience'=>$application->experience,'Why They Want to Volunteer'=>$application->motivation] as $heading => $text)
      <div class="card mb-4"><div class="card-header"><h6 class="mb-0">{{ $heading }}</h6></div><div class="card-body"><p class="mb-0" style="white-space:pre-line">{{ $text ?: 'Not supplied.' }}</p></div></div>
      @endforeach
      @if($application->cv)<a href="{{ route('admin.volunteer-applications.cv', $application) }}" class="btn btn-light"><i class="ti ti-download me-1"></i> Download CV / Résumé</a>@endif
    </div>
    <div class="col-lg-4">
      <div class="card mb-4"><div class="card-header"><h6 class="mb-0">Review Decision</h6></div><div class="card-body">
        <form action="{{ route('admin.volunteer-applications.update', $application) }}" method="POST">@csrf @method('PATCH')
          <div class="mb-3"><label class="form-label fw-semibold">Status</label><select name="status" class="form-select">@foreach(\App\Models\VolunteerApplication::STATUSES as $value=>$label)<option value="{{ $value }}" @selected($application->status === $value)>{{ $label }}</option>@endforeach</select></div>
          <div class="mb-3"><label class="form-label fw-semibold">Private Admin Notes</label><textarea name="admin_notes" rows="6" class="form-control" placeholder="Interview notes, decision reasons, follow-up details...">{{ old('admin_notes', $application->admin_notes) }}</textarea></div>
          <button class="btn btn-secondary w-100"><i class="ti ti-device-floppy me-1"></i> Save Review</button>
        </form>
      </div></div>
      @if($application->status === 'accepted')
      <div class="card border-success"><div class="card-header"><h6 class="mb-0 text-success">Accepted Applicant</h6></div><div class="card-body">
        @if($application->team_member_id)
        <p>This applicant has already been added to Team Members.</p><a href="{{ route('admin.team.edit', $application->team_member_id) }}" class="btn btn-success w-100">Edit Volunteer Profile</a>
        @else
        <p class="text-muted">Create a draft Volunteer profile. It will remain hidden until you review and publish it.</p>
        <form action="{{ route('admin.volunteer-applications.add-to-team', $application) }}" method="POST">@csrf<button class="btn btn-success w-100"><i class="ti ti-user-plus me-1"></i> Add to Volunteer Team</button></form>
        @endif
      </div></div>
      @endif
    </div>
  </div>
</div>
@endsection
