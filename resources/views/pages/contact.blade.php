@extends('layouts.app')
@section('content')
<div class="breadcumb-wrapper ">
  <div class="container">
    <div class="breadcumb-content">
      <h1 class="breadcumb-title">Contact us</h1>
      <ul class="breadcumb-menu">
        <li><a href="/">Home</a></li>
        <li>Contact us</li>
      </ul>
    </div>
  </div>
</div>

<div class="space overflow-hidden contact-area-1 position-relative z-index-common" id="contact-sec">
  <div class="container">
    <div class="contact-wrap1">
      <div class="row gx-60 gy-40">
        <div class="col-xl-4 col-lg-5">

          {{-- Address --}}
          <div class="contact-feature">
            <div class="box-icon">
              <i class="fas fa-map-location-dot"></i>
            </div>
            <div class="media-body">
              <h3 class="box-title">Address</h3>
              <p class="box-text">
                {{ $infos->site_address ?? '' }}
              </p>
            </div>
          </div>

          {{-- Phone --}}
          <div class="contact-feature">
            <div class="box-icon" data-theme-color="#c62024">
              <i class="fas fa-phone-volume"></i>
            </div>
            <div class="media-body">
              <h3 class="box-title">Phone</h3>
              @if (!empty($infos->site_phone))
              <p class="box-text">
                <a href="tel:{{ $infos->site_phone }}">{{ $infos->site_phone }}</a>
              </p>
              @endif
            </div>
          </div>

          {{-- Email --}}
          <div class="contact-feature">
            <div class="box-icon" data-theme-color="">
              <i class="fas fa-envelope"></i>
            </div>
            <div class="media-body">
              <h3 class="box-title">Email</h3>
              @if (!empty($infos->site_email))
              <p class="box-text">
                <a href="mailto:{{ $infos->site_email }}">{{ $infos->site_email }}</a>
              </p>
              @endif
            </div>
          </div>

          {{-- Questions / Info --}}
          <div class="contact-feature" data-theme-color="#c62024">
            <div class="box-icon">
              <i class="fas fa-clock"></i>
            </div>
            <div class="media-body">
              <h3 class="box-title">Working Hours</h3>
              <p class="box-text">
                Mon-Fri : 9 am to 5 pm
              </p>
              <p class="box-text">
                Sat : 9 am to 3 pm
              </p>
            </div>
          </div>


        </div>

        <div class="col-xl-8 col-lg-7">
          <div class="contact-map">
            <div style="width: 100%">
              <iframe width="100%" height="500" frameborder="0" scrolling="no" marginheight="0"
                marginwidth="0"
                src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=Amawbia%20Awka%20Anambra%20State+(AGO%20Care%20Foundation)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"
                allowfullscreen="" loading="lazy">

                <a href="https://www.mapsdirections.info/de/evolkerung-auf-einer-karte-berechnen/">
                  Demografie Karte Deutschland
                </a>
              </iframe>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="contact-page-form-wrap space-top">
      <div class="row gy-40">
        <div class="col-xl-6 align-self-center">
          <div class="contact-thumb1-1">
            <img src="{{ asset('assets/img/normal/contact.png') }}" alt="img">
          </div>
        </div>
        <div class="col-xl-6">
          <div class="contact-form-v1 contact-page-form">
            <form action="" method="POST" class="contact-form style-border ajax-contact">
              @csrf
              <div class="row">
                <div class="form-group style-border col-12">
                  <input type="text" class="form-control" name="name" id="name"
                    placeholder="Your Name">
                </div>
                <div class="form-group style-border col-12">
                  <input type="email" class="form-control" name="email" id="email"
                    placeholder="Email Address">
                </div>
                <div class="form-group style-border col-12">
                  <input type="number" class="form-control" name="number" id="number"
                    placeholder="Phone Number">
                </div>
                <div class="form-group style-border col-12">
                  <textarea name="message" id="message" cols="30" rows="3" class="form-control"
                    placeholder="Type Your Message"></textarea>
                </div>
                <div class="form-btn col-12">
                  <button class="th-btn">Send a Message</button>
                </div>
              </div>
              <p class="form-messages mb-0 mt-3"></p>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

{{-- ===== COMPLAINTS SECTION ===== --}}
<section id="complaints" class=" space-extra2-bottom">
  <div class="container">
    <div class="row justify-content-center justify-content-lg-start">

      {{-- Left: Title + Quick Contact --}}
      <div class="col-xl-5">
        <div class="title-area mb-35">
          <span class="sub-title after-none before-none">
            <i class="far fa-heart text-theme"></i> Complaints & Feedback
          </span>
          <h2 class="sec-title">Have a Complaint or Concern?</h2>
          <p>We take all complaints seriously. If you have experienced any issue with our services,
            staff, or programs, please let us know. Your feedback helps us improve and serve
            our beneficiaries better.</p>
        </div>

        <div class="widget" data-bg-src="{{ asset('assets/img/bg/gray-bg2.png') }}" data-overlay="gray" data-opacity="5">
          <h3 class="widget_title">Submit a Complaint</h3>
          <form action="" method="POST" class="widget-contact-form ajax-contact">
            @csrf
            <div class="row">
              <div class="form-group col-12">
                <input type="text" class="form-control" name="complaint_name"
                  placeholder="Your Name" required>
              </div>
              <div class="form-group col-12">
                <input type="email" class="form-control" name="complaint_email"
                  placeholder="Email Address" required>
              </div>
              <div class="form-group col-12">
                <input type="tel" class="form-control" name="complaint_phone"
                  placeholder="Phone Number">
              </div>
              <div class="form-group col-12">
                <select class="form-control" name="complaint_type">
                  <option value="" disabled selected>Type of Complaint</option>
                  <option>Staff Conduct</option>
                  <option>Program / Service Issue</option>
                  <option>Donation / Financial Concern</option>
                  <option>Volunteer Experience</option>
                  <option>Website / Online Issue</option>
                  <option>Other</option>
                </select>
              </div>
              <div class="form-group col-12">
                <textarea name="complaint_message" cols="30" rows="4"
                  class="form-control"
                  placeholder="Describe your complaint or concern in detail..." required></textarea>
              </div>
              <div class="form-btn col-12">
                <button class="th-btn w-100">
                  Submit Complaint <i class="fas fa-paper-plane ms-2"></i>
                </button>
              </div>
            </div>
            <p class="form-messages mb-0 mt-3"></p>
          </form>
        </div>
      </div>

      {{-- Right: FAQ Accordion --}}
      <div class="col-xl-7">
        <div class="title-area mb-40 mt-4 mt-xl-0">
          <span class="sub-title">Common Questions</span>
          <h2 class="sec-title">Frequently Asked Questions</h2>
        </div>

        <div class="accordion mb-40" id="complaintsAccordion">

          <div class="accordion-card style3 active">
            <div class="accordion-header" id="faq-item-1">
              <button class="accordion-button" type="button"
                data-bs-toggle="collapse" data-bs-target="#faq-1"
                aria-expanded="true" aria-controls="faq-1">
                How do I submit a complaint to AGO Cares Foundation?
              </button>
            </div>
            <div id="faq-1" class="accordion-collapse collapse show"
              aria-labelledby="faq-item-1" data-bs-parent="#complaintsAccordion">
              <div class="accordion-body">
                <p class="faq-text">You can submit a complaint using the form on this page,
                  by emailing us at
                  <a href="mailto:support@agofoundation.com.ng">support@agofoundation.com.ng</a>,
                  or by calling us directly at
                  <a href="tel:+2349123263656">+234-912-326-3656</a>.
                  All complaints are treated with strict confidentiality.
                </p>
              </div>
            </div>
          </div>

          <div class="accordion-card style3">
            <div class="accordion-header" id="faq-item-2">
              <button class="accordion-button collapsed" type="button"
                data-bs-toggle="collapse" data-bs-target="#faq-2"
                aria-expanded="false" aria-controls="faq-2">
                How long does it take to resolve a complaint?
              </button>
            </div>
            <div id="faq-2" class="accordion-collapse collapse"
              aria-labelledby="faq-item-2" data-bs-parent="#complaintsAccordion">
              <div class="accordion-body">
                <p class="faq-text">We acknowledge all complaints within 48 hours of receipt.
                  Simple issues are typically resolved within 5 working days. Complex matters
                  may take up to 14 working days. We will keep you informed throughout the
                  process.</p>
              </div>
            </div>
          </div>

          <div class="accordion-card style3">
            <div class="accordion-header" id="faq-item-3">
              <button class="accordion-button collapsed" type="button"
                data-bs-toggle="collapse" data-bs-target="#faq-3"
                aria-expanded="false" aria-controls="faq-3">
                Will my complaint be kept confidential?
              </button>
            </div>
            <div id="faq-3" class="accordion-collapse collapse"
              aria-labelledby="faq-item-3" data-bs-parent="#complaintsAccordion">
              <div class="accordion-body">
                <p class="faq-text">Yes. All complaints are handled with the utmost
                  confidentiality. Your personal information will not be shared with
                  anyone outside the complaints handling team without your explicit
                  consent, unless required by law.</p>
              </div>
            </div>
          </div>

          <div class="accordion-card style3">
            <div class="accordion-header" id="faq-item-4">
              <button class="accordion-button collapsed" type="button"
                data-bs-toggle="collapse" data-bs-target="#faq-4"
                aria-expanded="false" aria-controls="faq-4">
                Can I report misconduct by a staff member or volunteer?
              </button>
            </div>
            <div id="faq-4" class="accordion-collapse collapse"
              aria-labelledby="faq-item-4" data-bs-parent="#complaintsAccordion">
              <div class="accordion-body">
                <p class="faq-text">Absolutely. We have a zero-tolerance policy for
                  misconduct. If you have witnessed or experienced inappropriate behaviour
                  from any AGO Cares staff member or volunteer, please report it immediately
                  using the complaint form or contact our leadership directly. All reports
                  are investigated thoroughly.</p>
              </div>
            </div>
          </div>

          <div class="accordion-card style3">
            <div class="accordion-header" id="faq-item-5">
              <button class="accordion-button collapsed" type="button"
                data-bs-toggle="collapse" data-bs-target="#faq-5"
                aria-expanded="false" aria-controls="faq-5">
                How can I track the status of my complaint?
              </button>
            </div>
            <div id="faq-5" class="accordion-collapse collapse"
              aria-labelledby="faq-item-5" data-bs-parent="#complaintsAccordion">
              <div class="accordion-body">
                <p class="faq-text">After submitting your complaint, you will receive a
                  reference number via email. You can use this reference to follow up
                  by emailing
                  <a href="mailto:support@agofoundation.com.ng">support@agofoundation.com.ng</a>
                  or calling our office during working hours (Mon–Fri, 9am–5pm).
                </p>
              </div>
            </div>
          </div>

          <div class="accordion-card style3">
            <div class="accordion-header" id="faq-item-6">
              <button class="accordion-button collapsed" type="button"
                data-bs-toggle="collapse" data-bs-target="#faq-6"
                aria-expanded="false" aria-controls="faq-6">
                What if I am not satisfied with the resolution?
              </button>
            </div>
            <div id="faq-6" class="accordion-collapse collapse"
              aria-labelledby="faq-item-6" data-bs-parent="#complaintsAccordion">
              <div class="accordion-body">
                <p class="faq-text">If you are not satisfied with how your complaint was
                  handled, you may escalate it to our Board of Directors by writing to
                  <a href="mailto:support@agofoundation.com.ng">support@agofoundation.com.ng</a>
                  with the subject line "Escalation – [Your Reference Number]". We are
                  committed to fair and transparent resolution at every level.
                </p>
              </div>
            </div>
          </div>

        </div>
      </div>

    </div>
  </div>
</section>
@endsection
