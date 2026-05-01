@extends('layouts.app')
@section('content')

<div class="ago-apply-page">

  {{-- Breadcrumb --}}
  <div class="breadcumb-wrapper">
    <div class="container">
      <div class="breadcumb-content">
        <h1 class="breadcumb-title">Apply Online</h1>
        <ul class="breadcumb-menu">
          <li><a href="/">Home</a></li>
          <li>Apply Online</li>
        </ul>
      </div>
    </div>
  </div>

  {{-- Main Content --}}
  <section class="space" id="ago-apply-section">
    <div class="container">
      <div class="row gy-40">

        {{-- Left: Info --}}
        <div class="col-lg-4">
          <div class="title-area mb-35">
            <span class="sub-title">Join Our Team</span>
            <h2 class="sec-title">Apply to Work or Volunteer with AGO</h2>
            <p class="mt-20">Use this form to apply for any open position or volunteer role at AGO
              Cares Foundation. We review all applications and will contact you within 5 working days.</p>
          </div>

          <div class="ago-apply__info-card">
            <div class="ago-apply__info-icon"><i class="fas fa-clock"></i></div>
            <div>
              <h4>Response Time</h4>
              <p>We review applications within 5 working days and will reach out via email or phone.</p>
            </div>
          </div>
          <div class="ago-apply__info-card">
            <div class="ago-apply__info-icon"><i class="fas fa-map-marker-alt"></i></div>
            <div>
              <h4>Location</h4>
              <p>Amawbia, Anambra State, Nigeria. Remote and hybrid roles are also available.</p>
            </div>
          </div>
          <div class="ago-apply__info-card">
            <div class="ago-apply__info-icon"><i class="fas fa-envelope"></i></div>
            <div>
              <h4>Questions?</h4>
              <p>Email us at <a href="mailto:support@agofoundation.com.ng">support@agofoundation.com.ng</a></p>
            </div>
          </div>
          <div class="ago-apply__info-card">
            <div class="ago-apply__info-icon"><i class="fas fa-briefcase"></i></div>
            <div>
              <h4>View Open Positions</h4>
              <p>See all current job openings on our <a href="{{ route('career') }}">Career page</a>.</p>
            </div>
          </div>
        </div>

        {{-- Right: Form --}}
        <div class="col-lg-8">
          <div class="ago-apply__form-wrap">
            <div class="title-area mb-35">
              <h3 class="sec-title" style="font-size:26px;">Application Form</h3>
              <p>All fields marked with <span style="color:red">*</span> are required.</p>
            </div>

            <form action="" method="POST" enctype="multipart/form-data" class="ajax-contact">
              @csrf

              <p class="ago-apply__form-section-title">Personal Information</p>
              <div class="row">
                <div class="form-group col-md-6">
                  <input type="text" class="form-control" name="first_name" placeholder="First Name *" required>
                </div>
                <div class="form-group col-md-6">
                  <input type="text" class="form-control" name="last_name" placeholder="Last Name *" required>
                </div>
                <div class="form-group col-md-6">
                  <input type="email" class="form-control" name="email" placeholder="Email Address *" required>
                </div>
                <div class="form-group col-md-6">
                  <input type="tel" class="form-control" name="phone" placeholder="Phone Number *" required>
                </div>
                <div class="form-group col-md-6">
                  <input type="text" class="form-control" name="state" placeholder="State of Residence">
                </div>
                <div class="form-group col-md-6">
                  <input type="text" class="form-control" name="lga" placeholder="LGA">
                </div>
              </div>

              <p class="ago-apply__form-section-title">Application Details</p>
              <div class="row">
                <div class="form-group col-md-6">
                  <select class="form-control" name="application_type" required>
                    <option value="" disabled selected>Application Type *</option>
                    <option>Full-Time Employment</option>
                    <option>Part-Time Employment</option>
                    <option>Volunteer</option>
                    <option>Internship / NYSC</option>
                  </select>
                </div>
                <div class="form-group col-md-6">
                  <select class="form-control" name="position">
                    <option value="" disabled selected>Position Applying For</option>
                    <option>Program Officer – Disability Inclusion</option>
                    <option>Community Health Worker</option>
                    <option>Communications & Social Media Officer</option>
                    <option>Volunteer Coordinator</option>
                    <option>Medical Outreach Volunteer</option>
                    <option>Education Volunteer</option>
                    <option>Other</option>
                  </select>
                </div>
                <div class="form-group col-md-6">
                  <input type="text" class="form-control" name="qualification" placeholder="Highest Qualification">
                </div>
                <div class="form-group col-md-6">
                  <input type="text" class="form-control" name="experience" placeholder="Years of Experience">
                </div>
                <div class="form-group col-12">
                  <input type="text" class="form-control" name="skills" placeholder="Key Skills (e.g. Nursing, Teaching, IT, Social Work)">
                </div>
                <div class="form-group col-12">
                  <textarea class="form-control" name="cover_letter" rows="5"
                    placeholder="Cover Letter — Why do you want to join AGO Cares Foundation? *" required></textarea>
                </div>
              </div>

              <p class="ago-apply__form-section-title">Documents</p>
              <div class="row">
                <div class="col-md-6 mb-20">
                  <label class="ago-apply__file-label" for="ago_cv_upload">
                    <i class="fas fa-file-pdf"></i>
                    <span id="ago-cv-label">Upload CV / Resume (PDF)</span>
                  </label>
                  <input type="file" id="ago_cv_upload" name="cv" accept=".pdf,.doc,.docx"
                    onchange="document.getElementById('ago-cv-label').textContent = this.files[0]?.name || 'Upload CV / Resume'">
                </div>
                <div class="col-md-6 mb-20">
                  <label class="ago-apply__file-label" for="ago_cert_upload">
                    <i class="fas fa-file-alt"></i>
                    <span id="ago-cert-label">Upload Certificates (Optional)</span>
                  </label>
                  <input type="file" id="ago_cert_upload" name="certificates" accept=".pdf,.jpg,.png"
                    onchange="document.getElementById('ago-cert-label').textContent = this.files[0]?.name || 'Upload Certificates'">
                </div>
              </div>

              <div class="form-btn col-12 mt-10">
                <button type="submit" class="th-btn w-100">
                  Submit Application <i class="fas fa-paper-plane ms-2"></i>
                </button>
              </div>
              <p class="form-messages mb-0 mt-3 text-center"></p>
            </form>
          </div>
        </div>

      </div>
    </div>
  </section>

  {{-- CTA --}}
  <div class="cta-area-1 space-bottom">
    <div class="container z-index-common">
      <div class="cta-area-grid">
        <div class="cta-card" data-bg-src="{{ asset('assets/img/bg/cta-bg1-1.jpg') }}">
          <div class="shape-mockup cta-card-bg-shape" data-bottom="0" data-right="0"
            data-mask-src="{{ asset('assets/img/shape/cta_shape1_1.png') }}">
            <img src="{{ asset('assets/img/shape/cta_shape1_1.png') }}" alt="Decorative background shape">
          </div>
          <h3 class="box-title">View Open Positions</h3>
          <p class="box-text">Browse all current job openings and volunteer opportunities at AGO Cares Foundation.</p>
          <a href="{{ route('career') }}" class="th-btn style5">
            See Careers <i class="fas fa-arrow-up-right ms-2"></i>
          </a>
        </div>
        <div class="cta-card style2" data-bg-src="{{ asset('assets/img/bg/cta-bg1-2.jpg') }}">
          <div class="shape-mockup cta-card-bg-shape" data-bottom="0" data-left="0"
            data-mask-src="{{ asset('assets/img/shape/cta_shape1_1.png') }}">
            <img src="{{ asset('assets/img/shape/cta_shape1_1.png') }}" alt="Decorative background shape">
          </div>
          <h3 class="box-title">Support Our Mission</h3>
          <p class="box-text">Can't join us right now? You can still make a difference by donating to AGO Cares Foundation.</p>
          <a href="{{ route('donate') }}" class="th-btn style5">
            Donate Now <i class="fas fa-arrow-up-right ms-2"></i>
          </a>
        </div>
      </div>
    </div>
  </div>

</div>{{-- /.ago-apply-page --}}
@endsection
