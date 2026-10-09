@extends('layouts.admin')
@push('styles')
<style>
  .ago-app-filter { border:1px solid #e8edf3; color:#526072; background:#fff; }
  .ago-app-filter:hover { border-color:#153b64; color:#153b64; }
  .ago-app-filter.active { border-color:#153b64; background:#153b64; color:#fff; }
  .ago-app-filter .badge { min-width:24px; }
  .ago-application-list { display:grid; gap:16px; }
  .ago-application-card { display:grid; grid-template-columns:minmax(280px,1.5fr) minmax(170px,.8fr) minmax(180px,1fr) 120px 110px 104px; align-items:center; gap:20px; padding:20px 22px; border:1px solid #e6ebf1; border-radius:14px; background:#fff; box-shadow:0 4px 16px rgba(21,59,100,.035); transition:.2s ease; }
  .ago-application-card:hover { border-color:rgba(21,59,100,.24); box-shadow:0 10px 28px rgba(21,59,100,.08); transform:translateY(-1px); }
  .ago-applicant { display:flex; align-items:center; min-width:0; gap:14px; }
  .ago-applicant img { width:52px; height:52px; flex:0 0 52px; object-fit:cover; border:1px solid #e2e8ef; border-radius:50%; background:#f4f6f8; }
  .ago-applicant__text { min-width:0; }
  .ago-applicant__name { overflow:hidden; margin-bottom:3px; color:#153b64; font-size:16px; font-weight:700; text-overflow:ellipsis; white-space:nowrap; }
  .ago-applicant__email { overflow:hidden; color:#737f8f; font-size:13px; text-overflow:ellipsis; white-space:nowrap; }
  .ago-applicant__ref { color:#9aa4b2; font-size:11px; font-weight:600; letter-spacing:.03em; }
  .ago-app-meta { min-width:0; }
  .ago-app-meta__label { display:block; margin-bottom:4px; color:#9aa4b2; font-size:11px; font-weight:700; letter-spacing:.06em; text-transform:uppercase; }
  .ago-app-meta__value { display:block; overflow:hidden; color:#344154; font-size:14px; font-weight:600; text-overflow:ellipsis; white-space:nowrap; }
  .ago-app-meta__sub { display:block; margin-top:3px; color:#7b8796; font-size:12px; }
  .ago-app-status { justify-self:start; padding:7px 11px; border-radius:999px; font-size:12px; font-weight:700; }
  .ago-app-empty { padding:64px 24px; border:1px dashed #d8e0e9; border-radius:14px; background:#fff; color:#8490a0; text-align:center; }
  @media (max-width:1399px) { .ago-application-card { grid-template-columns:minmax(260px,1.5fr) minmax(160px,.8fr) minmax(170px,1fr) 105px 100px; } .ago-application-card__date { display:none; } }
  @media (max-width:991px) { .ago-application-card { grid-template-columns:1fr 1fr; } .ago-application-card__applicant { grid-column:1 / -1; } .ago-application-card__action { justify-self:end; } }
  @media (max-width:575px) { .ago-application-card { grid-template-columns:1fr; gap:14px; padding:18px; } .ago-application-card__applicant { grid-column:auto; } .ago-application-card__action { width:100%; justify-self:stretch; } .ago-application-card__action .btn { width:100%; } .ago-app-meta__value { white-space:normal; } }
</style>
@endpush
@section('content')
<div class="content">
  <div class="page-header">
    <div><h4 class="fw-bold mb-1">Volunteer Applications</h4><h6 class="text-muted">Review applications before adding accepted volunteers to the public team</h6></div>
  </div>
  <div class="d-flex flex-wrap gap-2 mb-4">
    <a href="{{ route('admin.volunteer-applications.index') }}" class="btn ago-app-filter {{ $status === '' ? 'active' : '' }}">All <span class="badge bg-light text-dark ms-1">{{ $counts->sum() }}</span></a>
    @foreach(\App\Models\VolunteerApplication::STATUSES as $value => $label)
    <a href="{{ route('admin.volunteer-applications.index', ['status' => $value]) }}" class="btn ago-app-filter {{ $status === $value ? 'active' : '' }}">{{ $label }} <span class="badge bg-light text-dark ms-1">{{ $counts[$value] ?? 0 }}</span></a>
    @endforeach
  </div>
  <div class="ago-application-list">
    @forelse($applications as $application)
    <article class="ago-application-card">
      <div class="ago-applicant ago-application-card__applicant">
        <img src="{{ $application->profile_photo ? Storage::url($application->profile_photo) : asset('assets/img/user/user-icon.jpg') }}" alt="">
        <div class="ago-applicant__text">
          <div class="ago-applicant__name">{{ $application->full_name }}</div>
          <div class="ago-applicant__email" title="{{ $application->email }}">{{ $application->email }}</div>
          <div class="ago-applicant__ref">{{ $application->reference }}</div>
        </div>
      </div>
      <div class="ago-app-meta"><span class="ago-app-meta__label">Interest Area</span><span class="ago-app-meta__value" title="{{ $application->area }}">{{ $application->area }}</span><span class="ago-app-meta__sub">{{ $application->work_mode }}</span></div>
      <div class="ago-app-meta"><span class="ago-app-meta__label">Availability</span><span class="ago-app-meta__value" title="{{ $application->availability }}">{{ $application->availability }}</span></div>
      <div class="ago-app-meta ago-application-card__date"><span class="ago-app-meta__label">Applied</span><span class="ago-app-meta__value">{{ $application->created_at->format('M d, Y') }}</span></div>
      <span class="ago-app-status {{ match($application->status) {'accepted'=>'bg-success-subtle text-success','rejected'=>'bg-danger-subtle text-danger','reviewing'=>'bg-info-subtle text-info',default=>'bg-warning-subtle text-warning'} }}">{{ ucfirst($application->status) }}</span>
      <div class="ago-application-card__action"><a href="{{ route('admin.volunteer-applications.show', $application) }}" class="btn btn-sm btn-secondary"><i class="ti ti-eye me-1"></i> Review</a></div>
    </article>
    @empty
    <div class="ago-app-empty"><i class="ti ti-clipboard-off fs-1 d-block mb-2"></i><strong>No volunteer applications found</strong><div class="small mt-1">Applications matching this filter will appear here.</div></div>
    @endforelse
  </div>
  <div class="mt-4">{{ $applications->links() }}</div>
</div>
@endsection
