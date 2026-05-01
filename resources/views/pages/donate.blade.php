@extends('layouts.app')
@section('content')

<div class="ago-donate-page">

  {{-- Breadcrumb --}}
  <div class="breadcumb-wrapper">
    <div class="container">
      <div class="breadcumb-content">
        <h1 class="breadcumb-title">Donate</h1>
        <ul class="breadcumb-menu">
          <li><a href="/">Home</a></li>
          <li>Donate</li>
        </ul>
      </div>
    </div>
  </div>

  {{-- Intro --}}
  <section class="space" id="ago-donate-intro">
    <div class="container">
      <div class="row gy-40 align-items-center">
        <div class="col-lg-7">
          <div class="title-area mb-35">
            <span class="sub-title">Your Generosity Matters</span>
            <h2 class="sec-title">Every Naira You Give Changes a Life</h2>
            <p class="mt-20">Your donation to AGO Cares Foundation directly funds healthcare, education,
              skills training, and welfare support for persons with disabilities, people living with
              albinism, and vulnerable children across Nigeria.</p>
            <p class="mt-15">No amount is too small. Whether you give once or set up a recurring
              donation, your generosity creates lasting change in the lives of those who need it most.</p>
          </div>

          <div class="row gy-20 mb-35">
            <div class="col-sm-3 col-6">
              <div class="counter-card">
                <h2 class="box-number text-theme"><span class="counter-number">500</span><span class="fw-light">+</span></h2>
                <p class="box-text">Lives Touched</p>
              </div>
            </div>
            <div class="col-sm-3 col-6">
              <div class="counter-card">
                <h2 class="box-number"><span class="counter-number">40</span><span class="fw-light">+</span></h2>
                <p class="box-text">Communities</p>
              </div>
            </div>
            <div class="col-sm-3 col-6">
              <div class="counter-card">
                <h2 class="box-number text-theme"><span class="counter-number">25</span><span class="fw-light">+</span></h2>
                <p class="box-text">Volunteers</p>
              </div>
            </div>
            <div class="col-sm-3 col-6">
              <div class="counter-card">
                <h2 class="box-number"><span class="counter-number">5</span><span class="fw-light">+</span></h2>
                <p class="box-text">Years Active</p>
              </div>
            </div>
          </div>

          <div class="btn-wrap">
            <a href="#ago-donate-give" class="th-btn">
              Donate Now <i class="fas fa-heart ms-2"></i>
            </a>
            <a href="{{ route('contact') }}" class="th-btn style-border ms-3">
              Contact Us <i class="fas fa-arrow-up-right ms-2"></i>
            </a>
          </div>
        </div>

        <div class="col-lg-5">
          <div class="img-box2">
            <div class="img1">
              <img src="{{ asset('assets/img/normal/about_2_1.png') }}"
                alt="AGO Care Foundation beneficiaries receiving support and care">
            </div>
            <div class="img2 jump">
              <img src="{{ asset('assets/img/normal/about_2_2.png') }}"
                alt="AGO Care Foundation volunteer helping a beneficiary">
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  {{-- Impact --}}
  <section class="space bg-smoke" id="ago-donate-impact">
    <div class="container">
      <div class="title-area text-center mb-50">
        <span class="sub-title">Your Impact</span>
        <h2 class="sec-title">What Your Donation Does</h2>
      </div>
      <div class="ago-donate__impact-grid">
        <div class="ago-donate__impact-card">
          <i class="fas fa-pills"></i>
          <span class="ago-donate__impact-amount">₦5,000</span>
          <h4>Provides a month's supply of sunscreen for a person living with albinism</h4>
        </div>
        <div class="ago-donate__impact-card">
          <i class="fas fa-book-open"></i>
          <span class="ago-donate__impact-amount">₦10,000</span>
          <h4>Covers school supplies for one child with special needs for a term</h4>
        </div>
        <div class="ago-donate__impact-card">
          <i class="fas fa-wheelchair"></i>
          <span class="ago-donate__impact-amount">₦50,000</span>
          <h4>Funds a wheelchair or mobility aid for a person with physical disability</h4>
        </div>
        <div class="ago-donate__impact-card">
          <i class="fas fa-heartbeat"></i>
          <span class="ago-donate__impact-amount">₦100,000</span>
          <h4>Sponsors a full medical outreach camp serving 50+ community members</h4>
        </div>
      </div>
    </div>
  </section>

  {{-- Bank Transfer + Online Form --}}
  <section class="space" id="ago-donate-give">
    <div class="container">
      <div class="row gy-40">

        {{-- Bank Transfer --}}
        <div class="col-lg-6">
          <div class="title-area mb-40">
            <span class="sub-title">Bank Transfer</span>
            <h2 class="sec-title">Donate via Bank Transfer</h2>
            <p>Transfer directly to any of our accounts below. Please use your name as the payment
              reference and send us a confirmation via email or WhatsApp.</p>
          </div>

          <div class="ago-donate__bank-card">
            <div class="ago-donate__bank-icon"><i class="fas fa-landmark"></i></div>
            <div>
              <div class="ago-donate__bank-name">Keystone Bank Plc</div>
              <div class="ago-donate__bank-acct-name">AGO Cares Foundation for People with Disability</div>
              <div class="ago-donate__bank-number">
                <span class="ago-donate__acct-label">Account No:</span>
                <strong>0000 000 0000</strong>
                <button class="ago-donate__copy-btn" onclick="navigator.clipboard.writeText('0000000000')">
                  <i class="far fa-copy"></i> Copy
                </button>
              </div>
            </div>
          </div>

          <div class="ago-donate__bank-card">
            <div class="ago-donate__bank-icon"><i class="fas fa-landmark"></i></div>
            <div>
              <div class="ago-donate__bank-name">Ecobank Nigeria Plc</div>
              <div class="ago-donate__bank-acct-name">AGO Cares Foundation for People with Disability</div>
              <div class="ago-donate__bank-number">
                <span class="ago-donate__acct-label">Account No:</span>
                <strong>0000 000 000</strong>
                <button class="ago-donate__copy-btn" onclick="navigator.clipboard.writeText('0000000000')">
                  <i class="far fa-copy"></i> Copy
                </button>
              </div>
            </div>
          </div>

          <p class="ago-donate__note">
            <i class="fas fa-info-circle text-theme me-1"></i>
            After donating, please send your name, amount, and bank to
            <a href="mailto:support@agofoundation.com.ng">support@agofoundation.com.ng</a>
            or WhatsApp <a href="https://wa.me/2349123263656">+234-912-326-3656</a>
            so we can acknowledge your gift.
          </p>
        </div>

        {{-- Online Donation Form --}}
        <div class="col-lg-6">
          <div class="ago-donate__form-wrap">
            <div class="title-area mb-30">
              <span class="sub-title">Online Donation</span>
              <h3 class="sec-title" style="font-size:26px;">Make a Donation</h3>
            </div>

            <div class="ago-donate__amount-grid">
              <button class="ago-donate__amount-btn" onclick="agoSetAmount(this,'5000')">₦5,000</button>
              <button class="ago-donate__amount-btn" onclick="agoSetAmount(this,'10000')">₦10,000</button>
              <button class="ago-donate__amount-btn" onclick="agoSetAmount(this,'25000')">₦25,000</button>
              <button class="ago-donate__amount-btn" onclick="agoSetAmount(this,'50000')">₦50,000</button>
              <button class="ago-donate__amount-btn" onclick="agoSetAmount(this,'100000')">₦100,000</button>
              <button class="ago-donate__amount-btn" onclick="agoSetAmount(this,'')">Custom</button>
            </div>

            <form action="" method="POST">
              @csrf
              <div class="row">
                <div class="form-group col-md-6">
                  <input type="text" class="form-control" name="donor_name" placeholder="Full Name" required>
                </div>
                <div class="form-group col-md-6">
                  <input type="email" class="form-control" name="donor_email" placeholder="Email Address" required>
                </div>
                <div class="form-group col-md-6">
                  <input type="tel" class="form-control" name="donor_phone" placeholder="Phone Number">
                </div>
                <div class="form-group col-md-6">
                  <input type="number" class="form-control" name="amount" id="ago-donation-amount" placeholder="Amount (₦)" required>
                </div>
                <div class="form-group col-12">
                  <select class="form-control" name="cause">
                    <option value="" disabled selected>Select a Cause</option>
                    <option>General Fund</option>
                    <option>Albinism Support</option>
                    <option>Disability Empowerment</option>
                    <option>Children & Orphans</option>
                    <option>Medical Outreach</option>
                    <option>Education Support</option>
                  </select>
                </div>
                <div class="form-group col-12">
                  <textarea class="form-control" name="message" rows="3" placeholder="Leave a message (optional)"></textarea>
                </div>
                <div class="form-btn col-12">
                  <button type="submit" class="th-btn w-100">
                    <i class="fas fa-heart me-2"></i> Donate Now
                  </button>
                </div>
              </div>
            </form>
          </div>
        </div>

      </div>
    </div>
  </section>

  {{-- Gifts in Kind --}}
  <section class="space bg-smoke" id="ago-donate-gifts">
    <div class="container">
      <div class="title-area text-center mb-50">
        <span class="sub-title">Non-Cash Donations</span>
        <h2 class="sec-title">Gifts in Kind</h2>
        <p class="mx-auto" style="max-width:600px;">Can't donate cash? We also accept items that directly support our beneficiaries. Every item counts.</p>
      </div>
      <div class="service-grid-wrapper">
        <div class="feature-card style2">
          <div class="feature-card-bg-shape">
            <img src="{{ asset('assets/img/shape/feature-card-bg-shape1-1.png') }}" alt="Decorative card background shape">
          </div>
          <div class="box-icon"><i class="fas fa-medkit"></i></div>
          <h3 class="box-title">Medical Supplies</h3>
          <p class="box-text">Wheelchairs, blood pressure monitors, audiometers, stethoscopes, malaria kits, hygiene kits, and pharmaceuticals.</p>
        </div>
        <div class="feature-card style2">
          <div class="feature-card-bg-shape">
            <img src="{{ asset('assets/img/shape/feature-card-bg-shape1-1.png') }}" alt="Decorative card background shape">
          </div>
          <div class="box-icon"><i class="fas fa-apple-alt"></i></div>
          <h3 class="box-title">Food Items</h3>
          <p class="box-text">Baby formula, powdered milk, beans, rice, noodles, cereal, nutritional drinks, and canned foods.</p>
        </div>
        <div class="feature-card style2">
          <div class="feature-card-bg-shape">
            <img src="{{ asset('assets/img/shape/feature-card-bg-shape1-1.png') }}" alt="Decorative card background shape">
          </div>
          <div class="box-icon"><i class="fas fa-tools"></i></div>
          <h3 class="box-title">Vocational Equipment</h3>
          <p class="box-text">Sewing machines, computers, printers, industrial gas cookers, electric mixers, and generators.</p>
        </div>
      </div>
      <div class="text-center mt-40">
        <a href="{{ route('contact') }}" class="th-btn">
          Contact Us to Donate Items <i class="fas fa-arrow-up-right ms-2"></i>
        </a>
      </div>
    </div>
  </section>

</div>{{-- /.ago-donate-page --}}

<script>
  function agoSetAmount(btn, value) {
    document.querySelectorAll('.ago-donate-page .ago-donate__amount-btn').forEach(function(b) {
      b.classList.remove('active');
    });
    btn.classList.add('active');
    var input = document.getElementById('ago-donation-amount');
    if (value) {
      input.value = value;
    } else {
      input.value = '';
      input.focus();
    }
  }
</script>

@endsection
