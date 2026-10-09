@extends('layouts.admin')
@section('content')
<div class="content">
  <div class="page-header">
    <div>
      <h4 class="fw-bold mb-1">Team Members</h4>
      <h6 class="text-muted">Manage leadership, board members, executives and volunteers</h6>
    </div>
    <a href="{{ route('admin.team.create') }}" class="btn btn-secondary">
      <i class="ti ti-plus me-1"></i> Add Member
    </a>
  </div>

  <div class="accordions-items-seperate" id="teamAccordion">
  @foreach(\App\Models\TeamMember::GROUPS as $group => $label)
  @php
    $collapseId = 'team'.\Illuminate\Support\Str::studly($group);
    $groupMembers = $members->get($group, collect());
    $isOpen = $loop->first;
    $groupIcons = [
      'leadership' => 'ti-crown',
      'board' => 'ti-building-community',
      'executive' => 'ti-briefcase',
      'volunteer' => 'ti-heart-handshake',
    ];
  @endphp
  <div class="accordion-item border mb-4">
    <h2 class="accordion-header">
      <div class="accordion-button bg-white {{ $isOpen ? '' : 'collapsed' }}" data-bs-toggle="collapse"
        data-bs-target="#{{ $collapseId }}" aria-expanded="{{ $isOpen ? 'true' : 'false' }}"
        aria-controls="{{ $collapseId }}" role="button">
        <div class="d-flex align-items-center gap-3 flex-fill">
          <span class="d-inline-flex align-items-center justify-content-center rounded-circle bg-light text-secondary" style="width:38px;height:38px;">
            <i class="ti {{ $groupIcons[$group] }} fs-18"></i>
          </span>
          <div>
            <h5 class="mb-0">{{ $label }}</h5>
            <small class="text-muted">{{ $groupMembers->count() }} {{ \Illuminate\Support\Str::plural('member', $groupMembers->count()) }}</small>
          </div>
        </div>
      </div>
    </h2>
    <div id="{{ $collapseId }}" class="accordion-collapse collapse {{ $isOpen ? 'show' : '' }}">
    <div class="accordion-body border-top p-0">
      <div class="table-responsive">
        <table class="table table-hover mb-0">
          <thead class="table-light"><tr><th>Member</th><th>Position</th><th>Homepage</th><th>Status</th><th>Order</th><th width="100">Actions</th></tr></thead>
          <tbody>
            @forelse($groupMembers as $member)
            <tr>
              <td>
                <div class="d-flex align-items-center gap-2">
                  <img src="{{ $member->image ? Storage::url($member->image) : asset('assets/img/user/user-icon.jpg') }}" alt="{{ $member->name }}" style="width:44px;height:44px;object-fit:cover;border-radius:50%;">
                  <span class="fw-semibold">{{ $member->name }}</span>
                </div>
              </td>
              <td>{{ $member->position }}</td>
              <td><span class="badge {{ $member->show_on_homepage ? 'bg-success-subtle text-success' : 'bg-light text-muted' }}">{{ $member->show_on_homepage ? 'Shown' : 'Hidden' }}</span></td>
              <td><span class="badge {{ $member->is_published ? 'bg-success-subtle text-success' : 'bg-warning-subtle text-warning' }}">{{ $member->is_published ? 'Published' : 'Draft' }}</span></td>
              <td>{{ $member->sort_order }}</td>
              <td><div class="d-flex gap-1">
                <a href="{{ route('admin.team.edit', $member) }}" class="btn btn-sm btn-secondary" title="Edit"><i class="ti ti-edit"></i></a>
                <form action="{{ route('admin.team.destroy', $member) }}" method="POST" onsubmit="return confirm('Delete this team member?')">@csrf @method('DELETE')<button class="btn btn-sm btn-danger" title="Delete"><i class="ti ti-trash"></i></button></form>
              </div></td>
            </tr>
            @empty
            <tr><td colspan="6" class="text-center py-4 text-muted">No {{ strtolower($label) }} added yet.</td></tr>
            @endforelse
          </tbody>
        </table>
      </div>
    </div>
    </div>
  </div>
  @endforeach
  </div>
</div>
@endsection
