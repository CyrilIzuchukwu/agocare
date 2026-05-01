@extends('layouts.admin')
@section('content')
<div class="content">
  <div class="page-header">
    <div>
      <h4 class="fw-bold mb-1">Site Settings</h4>
      <h6 class="text-muted">Manage your website configuration</h6>
    </div>
    <div>
      <a href="{{ route('admin.dashboard') }}" class="btn btn-secondary">
        ← Back to Dashboard
      </a>
    </div>
  </div>



  <form action="{{ route('admin.settings.update') }}" method="POST" id="settingsForm">
    @csrf

    <div class="add-product">
      <div class="accordions-items-seperate" id="accordionSpacingExample">
        <!-- Basic Information Section -->
        <div class="accordion-item border mb-4">
          <h2 class="accordion-header" id="headingBasicInfo">
            <div class="accordion-button collapsed bg-white" data-bs-toggle="collapse"
              data-bs-target="#basicInfo" aria-expanded="true" aria-controls="basicInfo">
              <div class="d-flex align-items-center justify-content-between flex-fill">
                <h5 class="d-flex align-items-center">
                  <span>🏢 Basic Information</span>
                </h5>
              </div>
            </div>
          </h2>

          <div id="basicInfo" class="accordion-collapse collapse show" aria-labelledby="headingBasicInfo">
            <div class="accordion-body border-top">
              <div class="row">
                <div class="col-md-6 mb-3">
                  <label class="form-label">Site Name <span class="text-danger">*</span></label>
                  <input type="text" name="site_name" id="site_name"
                    class="form-control @error('site_name') is-invalid @enderror"
                    value="{{ old('site_name', $settings->site_name ?? '') }}"
                    placeholder="Enter your site name" required>
                  @error('site_name')
                  <div class="text-danger">{{ $message }}</div>
                  @enderror
                </div>

                <div class="col-md-6 mb-3">
                  <label class="form-label">Support Email</label>
                  <input type="email" name="site_email" id="site_email"
                    class="form-control @error('site_email') is-invalid @enderror"
                    value="{{ old('site_email', $settings->site_email ?? '') }}"
                    placeholder="support@example.com">
                  @error('site_email')
                  <div class="text-danger">{{ $message }}</div>
                  @enderror
                </div>

                <div class="col-md-6 mb-3">
                  <label class="form-label">Phone Number</label>
                  <input type="text" name="site_phone" id="site_phone"
                    class="form-control @error('site_phone') is-invalid @enderror"
                    value="{{ old('site_phone', $settings->site_phone ?? '') }}"
                    placeholder="+234 xxx xxx xxxx">
                  @error('site_phone')
                  <div class="text-danger">{{ $message }}</div>
                  @enderror
                </div>

                <div class="col-md-6 mb-3">
                  <label class="form-label">Address</label>
                  <input type="text" name="site_address" id="site_address"
                    class="form-control @error('site_address') is-invalid @enderror"
                    value="{{ old('site_address', $settings->site_address ?? '') }}"
                    placeholder="Enter your address">
                  @error('site_address')
                  <div class="text-danger">{{ $message }}</div>
                  @enderror
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Social Media Section -->
        <div class="accordion-item border mb-4">
          <h2 class="accordion-header" id="headingSocialMedia">
            <div class="accordion-button collapsed bg-white" data-bs-toggle="collapse"
              data-bs-target="#socialMedia" aria-expanded="true" aria-controls="socialMedia">
              <div class="d-flex align-items-center justify-content-between flex-fill">
                <h5 class="d-flex align-items-center">
                  <span>📱 Social Media</span>
                </h5>
              </div>
            </div>
          </h2>

          <div id="socialMedia" class="accordion-collapse collapse show" aria-labelledby="headingSocialMedia">
            <div class="accordion-body">
              <div class="row">
                <div class="col-md-6 mb-3">
                  <label class="form-label">Facebook URL</label>
                  <div class="input-group">
                    <span class="input-group-text bg-light">
                      <i data-feather="facebook" class="text-primary"></i>
                    </span>
                    <input type="url" name="site_fb" id="site_fb"
                      class="form-control @error('site_fb') is-invalid @enderror"
                      value="{{ old('site_fb', $settings->site_fb ?? '') }}"
                      placeholder="https://facebook.com/yourpage">
                  </div>
                  @error('site_fb')
                  <div class="text-danger">{{ $message }}</div>
                  @enderror
                </div>

                <div class="col-md-6 mb-3">
                  <label class="form-label">Instagram URL</label>
                  <div class="input-group">
                    <span class="input-group-text bg-light">
                      <i data-feather="instagram" class="text-danger"></i>
                    </span>
                    <input type="url" name="site_instagram" id="site_instagram"
                      class="form-control @error('site_instagram') is-invalid @enderror"
                      value="{{ old('site_instagram', $settings->site_instagram ?? '') }}"
                      placeholder="https://instagram.com/yourprofile">
                  </div>
                  @error('site_instagram')
                  <div class="text-danger">{{ $message }}</div>
                  @enderror
                </div>

                <div class="col-md-6 mb-3">
                  <label class="form-label">Twitter URL</label>
                  <div class="input-group">
                    <span class="input-group-text bg-light">
                      <i data-feather="twitter" class="text-info"></i>
                    </span>
                    <input type="url" name="site_twitter" id="site_twitter"
                      class="form-control @error('site_twitter') is-invalid @enderror"
                      value="{{ old('site_twitter', $settings->site_twitter ?? '') }}"
                      placeholder="https://twitter.com/company/yourcompany">
                  </div>
                  @error('site_twitter')
                  <div class="text-danger">{{ $message }}</div>
                  @enderror
                </div>

                <div class="col-md-6 mb-3">
                  <label class="form-label">YouTube URL</label>
                  <div class="input-group">
                    <span class="input-group-text bg-light">
                      <i data-feather="youtube" class="text-danger"></i>
                    </span>
                    <input type="url" name="site_youtube" id="site_youtube"
                      class="form-control @error('site_youtube') is-invalid @enderror"
                      value="{{ old('site_youtube', $settings->site_youtube ?? '') }}"
                      placeholder="https://youtube.com/c/yourchannel">
                  </div>
                  @error('site_youtube')
                  <div class="text-danger">{{ $message }}</div>
                  @enderror
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="col-lg-12">
      <div class="d-flex justify-content-end gap-2 mb-4">
        <button type="reset" class="btn btn-secondary">Reset Changes</button>
        <button type="submit" class="btn btn-primary" id="updateSettings">
          Update Settings
        </button>
      </div>
    </div>
  </form>

  {{-- ===== MAINTENANCE MODE CARD ===== --}}
  <div class="card border-0 shadow-sm mb-4">
    <div class="card-header bg-white border-bottom d-flex align-items-center justify-content-between py-3">
      <div class="d-flex align-items-center gap-2">
        <i class="ti ti-tool fs-18 text-warning"></i>
        <h5 class="mb-0 fw-semibold">Maintenance Mode</h5>
      </div>
      @if($settings->maintenance_mode ?? false)
      <span class="badge bg-danger-subtle text-danger px-3 py-2">
        <i class="ti ti-alert-circle me-1"></i> Currently Active
      </span>
      @else
      <span class="badge bg-success-subtle text-success px-3 py-2">
        <i class="ti ti-circle-check me-1"></i> Site is Live
      </span>
      @endif
    </div>
    <div class="card-body">
      <div class="row align-items-start gy-3">
        <div class="col-lg-7">
          <p class="text-muted mb-3">
            When maintenance mode is <strong>active</strong>, all public pages will show a maintenance screen.
            Admins can still log in and access the dashboard normally.
          </p>
          <form action="{{ route('admin.settings.maintenance') }}" method="POST">
            @csrf
            <div class="mb-3">
              <label class="form-label fw-semibold">Custom Maintenance Message <span class="text-muted fw-normal">(optional)</span></label>
              <textarea name="maintenance_message" rows="3" class="form-control"
                placeholder="We are currently performing scheduled maintenance. We will be back shortly.">{{ old('maintenance_message', $settings->maintenance_message ?? '') }}</textarea>
              <div class="form-text">Leave blank to use the default message.</div>
            </div>
            <button type="submit"
              class="btn {{ ($settings->maintenance_mode ?? false) ? 'btn-success' : 'btn-warning' }} px-4"
              onclick="return confirm('{{ ($settings->maintenance_mode ?? false) ? 'Disable maintenance mode and bring the site back online?' : 'Enable maintenance mode? The public site will be unavailable.' }}')">
              <i class="ti ti-{{ ($settings->maintenance_mode ?? false) ? 'circle-check' : 'tool' }} me-1"></i>
              {{ ($settings->maintenance_mode ?? false) ? 'Disable Maintenance Mode' : 'Enable Maintenance Mode' }}
            </button>
          </form>
        </div>
        <div class="col-lg-5">
          <div class="rounded-3 p-4 {{ ($settings->maintenance_mode ?? false) ? 'bg-danger-subtle' : 'bg-light' }}">
            <h6 class="fw-bold mb-3">
              <i class="ti ti-info-circle me-1"></i> How it works
            </h6>
            <ul class="list-unstyled mb-0 small text-muted">
              <li class="mb-2"><i class="ti ti-check text-success me-2"></i>Admins can always access <code>/admin</code></li>
              <li class="mb-2"><i class="ti ti-check text-success me-2"></i>Login page remains accessible</li>
              <li class="mb-2"><i class="ti ti-x text-danger me-2"></i>All public pages return 503</li>
              <li class="mb-2"><i class="ti ti-x text-danger me-2"></i>Visitors see the maintenance screen</li>
              <li><i class="ti ti-check text-success me-2"></i>Toggle off instantly restores the site</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<script>
  document.addEventListener('DOMContentLoaded', function() {
    // Initialize Feather Icons
    if (typeof feather !== 'undefined') {
      feather.replace();
    }

    // Form submission handler
    const form = document.getElementById('settingsForm');
    const submitButton = document.getElementById('updateSettings');

    if (form && submitButton) {
      form.addEventListener('submit', function(e) {
        submitButton.innerHTML = `
                        <span class="spinner-border spinner-border-sm me-1" role="status" aria-hidden="true"></span>
                        Updating...
                    `;
        submitButton.disabled = true;
        submitButton.classList.add('opacity-50');

        // Allow form to submit normally
      });
    }

    // Reset button handler
    const resetButton = form.querySelector('button[type="reset"]');
    if (resetButton) {
      resetButton.addEventListener('click', function() {
        // Optional: Add confirmation dialog
        if (confirm('Are you sure you want to reset all changes?')) {
          form.reset();
        }
      });
    }
  });
</script>

<style>
  .accordion-header {
    cursor: pointer !important;
  }

  .input-group-text {
    min-width: 45px;
    justify-content: center;
  }

  .alert {
    border: none;
    border-radius: 8px;
  }

  .alert-success {
    background-color: #d1f2eb;
    color: #0d5e4d;
  }
</style>
@endsection
