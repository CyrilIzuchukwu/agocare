@extends('layouts.app')
@section('content')
{{-- ===== BREADCRUMB ===== --}}
<div class="breadcumb-wrapper">
  <div class="container">
    <div class="breadcumb-content">
      <h1 class="breadcumb-title">Our Services</h1>
      <ul class="breadcumb-menu">
        <li><a href="/">Home</a></li>
        <li>Our Services</li>
      </ul>
    </div>
  </div>
</div>

{{-- ===== 1. TARGET / FOCUS AREAS ===== --}}
<section class="space ago-service__target-focus" id="target-group">
  <div class="container">
    <div class="title-area text-center mb-50">
      <span class="sub-title">Who We Serve</span>
      <h2 class="sec-title">Target / Focus Areas</h2>
      <p class="sec-text mx-auto mt-15" style="max-width:640px;">AGO Cares Foundation works with the most
        vulnerable members of society. The foundation has a rolling admission and participation in any of the
        programmes is <strong>free</strong>.</p>
    </div>

    <div class="slider-area">
      <div class="swiper th-slider" id="targetSlider"
        data-slider-options='{"loop":true,"autoplay":{"delay":3500,"disableOnInteraction":false},"breakpoints":{"0":{"slidesPerView":1},"576":{"slidesPerView":"2"},"768":{"slidesPerView":"2"},"992":{"slidesPerView":"3"},"1200":{"slidesPerView":"3"}}}'>
        <div class="swiper-wrapper ago-svc__target-wrapper">
          @php
          $targets = [
          [
          'icon' => 'fas fa-sun',
          'title' => 'People with Albinism',
          'text' =>
          'Persons living with albinism who face stigma, discrimination, and lack access to healthcare and protective items.',
          ],
          [
          'icon' => 'fas fa-wheelchair',
          'title' => 'Physically & Mentally Challenged',
          'text' =>
          'Individuals with physical and mental disabilities who need support, skills training, and social inclusion.',
          ],
          [
          'icon' => 'fas fa-low-vision',
          'title' => 'The Blind & Visually Impaired',
          'text' =>
          'Persons with visual impairments who benefit from braille resources, assistive technology, and education.',
          ],
          [
          'icon' => 'fas fa-deaf',
          'title' => 'The Deaf & Mute',
          'text' =>
          'Individuals who are deaf or mute and require sign language education and communication support.',
          ],
          [
          'icon' => 'fas fa-ribbon',
          'title' => 'People Living with HIV/AIDS',
          'text' =>
          'Persons living with HIV/AIDS who need medical support, counselling, and social welfare assistance.',
          ],
          [
          'icon' => 'fas fa-hand-holding-medical',
          'title' => 'Leprosy Communities',
          'text' =>
          'People living in leprosy settlements who are often isolated and in need of medical care and welfare.',
          ],
          [
          'icon' => 'fas fa-female',
          'title' => 'Widows',
          'text' =>
          'Indigent widows in rural and urban communities who need economic empowerment and healthcare support.',
          ],
          [
          'icon' => 'fas fa-baby',
          'title' => 'Motherless Babies',
          'text' =>
          'Infants and young children without mothers who require nutrition, care, and welfare support.',
          ],
          [
          'icon' => 'fas fa-child',
          'title' => 'Orphans & Vulnerable Children',
          'text' =>
          'Orphaned and vulnerable children who need education, nutrition, clothing, and emotional support.',
          ],
          [
          'icon' => 'fas fa-user-clock',
          'title' => 'The Aged',
          'text' =>
          'Elderly persons who are age-discriminated and require healthcare, welfare, and social inclusion.',
          ],
          [
          'icon' => 'fas fa-hands-helping',
          'title' => 'The Poorest of the Poor',
          'text' =>
          'Generally the most vulnerable and poorest members of society who need all-round support and care.',
          ],
          ];
          @endphp
          @foreach ($targets as $t)
          <div class="swiper-slide ago-svc__target-slide">
            <div class="ago-svc__target-card">
              <div class="ago-svc__target-icon">
                <i class="{{ $t['icon'] }}"></i>
              </div>
              <h3 class="ago-svc__target-title">{{ $t['title'] }}</h3>
              <p class="ago-svc__target-text">{{ $t['text'] }}</p>
            </div>
          </div>
          @endforeach
        </div>
      </div>
      <button data-slider-prev="#targetSlider" class="slider-arrow slider-prev">
        <i class="far fa-arrow-left"></i>
      </button>
      <button data-slider-next="#targetSlider" class="slider-arrow slider-next">
        <i class="far fa-arrow-right"></i>
      </button>
    </div>

  </div>
</section>






{{-- ===== 2. KEY STRATEGIES ===== --}}
<section class="space bg-smoke" id="key-strategies">
  <div class="container">
    <div class="title-area text-center mb-55">
      <span class="sub-title">How We Work</span>
      <h2 class="sec-title">Key Strategies</h2>
      <p class="sec-text mx-auto mt-15" style="max-width:600px;">AGO Cares Foundation employs four core strategies
        to ensure sustainable, impactful interventions for people with special needs across Nigeria.</p>
    </div>

    <div class="ago-ks__layout">

      {{-- Left: Vertical Tab List --}}
      <div class="ago-ks__tabs">
        <button class="ago-ks__tab active" data-ks="ks-advocacy">
          <span class="ago-ks__tab-icon"><i class="fas fa-bullhorn"></i></span>
          <span class="ago-ks__tab-label">Advocacy</span>
          <span class="ago-ks__tab-arrow"><i class="fas fa-chevron-right"></i></span>
        </button>
        <button class="ago-ks__tab" data-ks="ks-delivery">
          <span class="ago-ks__tab-icon"><i class="fas fa-hands-helping"></i></span>
          <span class="ago-ks__tab-label">Service Delivery</span>
          <span class="ago-ks__tab-arrow"><i class="fas fa-chevron-right"></i></span>
        </button>
        <button class="ago-ks__tab" data-ks="ks-networking">
          <span class="ago-ks__tab-icon"><i class="fas fa-network-wired"></i></span>
          <span class="ago-ks__tab-label">Networking</span>
          <span class="ago-ks__tab-arrow"><i class="fas fa-chevron-right"></i></span>
        </button>
        <button class="ago-ks__tab" data-ks="ks-capacity">
          <span class="ago-ks__tab-icon"><i class="fas fa-graduation-cap"></i></span>
          <span class="ago-ks__tab-label">Capacity Development</span>
          <span class="ago-ks__tab-arrow"><i class="fas fa-chevron-right"></i></span>
        </button>
      </div>

      {{-- Right: Dark Card Panels --}}
      <div class="ago-ks__panels">

        <div class="ago-ks__panel active" id="ks-advocacy">
          <div class="ago-ks__card">
            <div class="ago-ks__card-img">
              <img src="{{ asset('assets/img/target/target3.jpg') }}"
                alt="AGO Care Foundation advocacy — community engagement and policy reform">
            </div>
            <div class="ago-ks__card-body">
              <div class="ago-ks__card-icon"><i class="fas fa-bullhorn"></i></div>
              <h3 class="ago-ks__card-title">Advocacy for Lasting Change</h3>
              <p class="ago-ks__card-desc">Advocacy is the most important strategy employed by AGO Cares
                Foundation. It ensures interventions are sustainable by converting stakeholders from
                onlookers to activists and holding government accountable.</p>
              <ul class="ago-ks__card-list">
                <li><i class="fas fa-check-circle"></i> Holding government accountable</li>
                <li><i class="fas fa-check-circle"></i> Winning stakeholder support</li>
                <li><i class="fas fa-check-circle"></i> Policy reform campaigns</li>
              </ul>
              <a href="{{ route('donate') }}" class="th-btn mt-25">
                Support Our Work <i class="fas fa-arrow-up-right ms-2"></i>
              </a>
            </div>
          </div>
        </div>

        <div class="ago-ks__panel" id="ks-delivery">
          <div class="ago-ks__card">
            <div class="ago-ks__card-img">
              <img src="{{ asset('assets/img/target/target4.jpg') }}"
                alt="AGO Care Foundation service delivery — direct support to beneficiaries">
            </div>
            <div class="ago-ks__card-body">
              <div class="ago-ks__card-icon"><i class="fas fa-hands-helping"></i></div>
              <h3 class="ago-ks__card-title">Direct Service Delivery</h3>
              <p class="ago-ks__card-desc">Beneficiaries are usually from poor socio-economic backgrounds.
                AGO Cares provides material support as an intermediary measure while permanent,
                sustainable solutions are explored.</p>
              <ul class="ago-ks__card-list">
                <li><i class="fas fa-check-circle"></i> Nutrition and food support</li>
                <li><i class="fas fa-check-circle"></i> Medical services delivery</li>
                <li><i class="fas fa-check-circle"></i> Clothing and relief items</li>
              </ul>
              <a href="{{ route('donate') }}" class="th-btn mt-25">
                Support Our Work <i class="fas fa-arrow-up-right ms-2"></i>
              </a>
            </div>
          </div>
        </div>

        <div class="ago-ks__panel" id="ks-networking">
          <div class="ago-ks__card">
            <div class="ago-ks__card-img">
              <img src="{{ asset('assets/img/target/target2.jpeg') }}"
                alt="AGO Care Foundation networking — partnerships and collaborations">
            </div>
            <div class="ago-ks__card-body">
              <div class="ago-ks__card-icon"><i class="fas fa-network-wired"></i></div>
              <h3 class="ago-ks__card-title">Networking & Collaboration</h3>
              <p class="ago-ks__card-desc">AGO Cares Foundation values collaborations that result in
                positive change. Networking ensures interventions are effective by engaging all
                stakeholders and pooling resources from diverse backgrounds.</p>
              <ul class="ago-ks__card-list">
                <li><i class="fas fa-check-circle"></i> NGO and government partnerships</li>
                <li><i class="fas fa-check-circle"></i> Resource pooling</li>
                <li><i class="fas fa-check-circle"></i> Stakeholder engagement</li>
              </ul>
              <a href="{{ route('donate') }}" class="th-btn mt-25">
                Support Our Work <i class="fas fa-arrow-up-right ms-2"></i>
              </a>
            </div>
          </div>
        </div>

        <div class="ago-ks__panel" id="ks-capacity">
          <div class="ago-ks__card">
            <div class="ago-ks__card-img">
              <img src="{{ asset('assets/img/target/target1.jpeg') }}"
                alt="AGO Care Foundation capacity development — skills training and education">
            </div>
            <div class="ago-ks__card-body">
              <div class="ago-ks__card-icon"><i class="fas fa-graduation-cap"></i></div>
              <h3 class="ago-ks__card-title">Capacity Development</h3>
              <p class="ago-ks__card-desc">Capacity development improves the ability and competence of
                individuals and institutions. AGO Cares directly provides vocational skills and adult
                literacy education to persons living with disability.</p>
              <ul class="ago-ks__card-list">
                <li><i class="fas fa-check-circle"></i> Vocational skills training</li>
                <li><i class="fas fa-check-circle"></i> Adult literacy education</li>
                <li><i class="fas fa-check-circle"></i> Braille machines & assistive tech</li>
              </ul>
              <a href="{{ route('donate') }}" class="th-btn mt-25">
                Support Our Work <i class="fas fa-arrow-up-right ms-2"></i>
              </a>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>
</section>




{{-- ===== 3. STRATEGIC OBJECTIVES ===== --}}
<section class="space" id="strategic-objectives">
  <div class="container">
    <div class="row gy-60 align-items-center">

      {{-- Left: Image with counter badge --}}
      <div class="col-lg-5">
        <div class="ago-obj__img-wrap">
          <img src="{{ asset('assets/img/normal/about_2_1.png') }}"
            alt="AGO Care Foundation strategic objectives — community impact" class="ago-obj__img">
          <div class="ago-obj__badge">
            <span class="ago-obj__badge-num">7</span>
            <span class="ago-obj__badge-label">Strategic<br>Objectives</span>
          </div>
        </div>
      </div>

      {{-- Right: Numbered list --}}
      <div class="col-lg-7">
        <div class="title-area mb-40">
          <h2 class="sec-title">Strategic Objectives</h2>
        </div>

        <ol class="ago-obj__list">
          <li class="ago-obj__item">
            <span class="ago-obj__dot"></span>
            <div><strong>Free Medical Assistance</strong> — Mobilize health professionals including
              Physicians, Ophthalmologists, Optometrists, Psychologists, Pharmacists, and Nurses to
              administer basic and specialist care to people with special needs.</div>
          </li>
          <li class="ago-obj__item">
            <span class="ago-obj__dot"></span>
            <div><strong>Skills Development</strong> — Provide free skills development opportunities in IT,
              Music, electronics technology, fashion, beauty management, and Crafts to people with special
              needs in Nigeria.</div>
          </li>
          <li class="ago-obj__item">
            <span class="ago-obj__dot"></span>
            <div><strong>Advocacy & Law Reform</strong> — Conduct advocacy for passage of improved laws and
              effective implementation through networking with NGOs and government Ministries,
              Departments, and Agencies.</div>
          </li>
          <li class="ago-obj__item">
            <span class="ago-obj__dot"></span>
            <div><strong>Academic Development</strong> — Provide financial support to facilitate academic
              development for people with special needs in Nigeria.</div>
          </li>
          <li class="ago-obj__item">
            <span class="ago-obj__dot"></span>
            <div><strong>Social Inclusion & Para Sports</strong> — Provide opportunities for social
              inclusion and economic empowerment through Para sports including Blind Football.</div>
          </li>
          <li class="ago-obj__item">
            <span class="ago-obj__dot"></span>
            <div><strong>Enterprise Support</strong> — Provide funding support for establishment of
              meaningful, profitable enterprises that ensure self-sustenance of people with special needs.
            </div>
          </li>
          <li class="ago-obj__item">
            <span class="ago-obj__dot"></span>
            <div><strong>Social Welfare Services</strong> — Provide social services through provision of
              basic necessities of life such as nutrition, clothing, and other resources that mitigate
              hardships.</div>
          </li>
        </ol>

        <a href="{{ route('donate') }}" class="th-btn mt-35">
          Support These Goals <i class="fas fa-arrow-up-right ms-2"></i>
        </a>
      </div>

    </div>
  </div>
</section>



{{-- ===== 4. OUR PROGRAMS ===== --}}
<section class="ago-prog" id="programs">
  <div class="container">

    {{-- Header --}}
    <div class="ago-prog__header">
      <div class="ago-prog__header-text">
        <span class="ago-prog__sub">What We Do</span>
        <h2 class="ago-prog__title">Our Programs</h2>
        <p class="ago-prog__intro">AGO Cares Foundation is a non-profit NGO that works for improved personal
          development, economic empowerment, social inclusion and human rights of people with special needs in
          Nigeria — including persons with disability, widows, and age-discriminated vulnerable groups.
          Participation in all programs is <strong>free</strong>.</p>
      </div>
    </div>

    {{-- Tab Navigation --}}
    <div class="ago-prog__nav" role="tablist">
      <button class="ago-prog__nav-btn active" data-prog="prog-medical" role="tab">
        <i class="fas fa-stethoscope"></i>
        <span>Medical Aid</span>
      </button>
      <button class="ago-prog__nav-btn" data-prog="prog-academic" role="tab">
        <i class="fas fa-book-open"></i>
        <span>Academic Development</span>
      </button>
      <button class="ago-prog__nav-btn" data-prog="prog-skills" role="tab">
        <i class="fas fa-tools"></i>
        <span>Skills Development</span>
      </button>
      <button class="ago-prog__nav-btn" data-prog="prog-economic" role="tab">
        <i class="fas fa-coins"></i>
        <span>Economic Empowerment</span>
      </button>
      <button class="ago-prog__nav-btn" data-prog="prog-sports" role="tab">
        <i class="fas fa-running"></i>
        <span>Special Sports</span>
      </button>
      <button class="ago-prog__nav-btn" data-prog="prog-welfare" role="tab">
        <i class="fas fa-heart"></i>
        <span>Social Welfare</span>
      </button>
      <button class="ago-prog__nav-btn" data-prog="prog-advocacy" role="tab">
        <i class="fas fa-bullhorn"></i>
        <span>Advocacy</span>
      </button>
    </div>

    {{-- Tab Panels --}}
    <div class="ago-prog__panels">

      <div class="ago-prog__panel active" id="prog-medical">
        <div class="ago-prog__panel-inner">
          <div class="ago-prog__panel-icon"><i class="fas fa-stethoscope"></i></div>
          <div class="ago-prog__panel-body">
            <h3 class="ago-prog__panel-title">Medical Aid</h3>
            <p>People with special needs including the poor are provided with free medical assistance in
              order to optimise their health conditions. Medical programs include basic health checks,
              health education, sight tests and treatment, routine HIV/AIDS tests and counselling as well
              as other suitable medical programs that improve health.</p>
            <p>The Foundation employs the services of committed medical staff and also some specialists who
              volunteer their services to serve the poor. Part of AGO Cares Foundation's medical programs
              include applying technologies that assist people with disabilities to prevent further
              deterioration of health and cope with day to day life.</p>
          </div>
        </div>
      </div>

      <div class="ago-prog__panel" id="prog-academic">
        <div class="ago-prog__panel-inner">
          <div class="ago-prog__panel-icon"><i class="fas fa-book-open"></i></div>
          <div class="ago-prog__panel-body">
            <h3 class="ago-prog__panel-title">Academic Development</h3>
            <p>AGO Cares Foundation runs an effective adult literacy program for people with disabilities.
              Noteworthy is the Resource &amp; Recreational Centre for the Blind and Visually Impaired,
              which offers computer literacy for the blind, Braille Reading and Writing, Maths and
              Science, Audio and Braille Book Production, and recreational facilities including special
              games.</p>
            <p>Among the beneficiaries are undergraduates of several Nigerian Universities who passed
              generic computer-based tests (CBTs) that serve as qualifying examinations into Nigerian
              Universities. The Foundation also runs a sign language class for the deaf and mute and
              special educational programmes for the mentally challenged.</p>
          </div>
        </div>
      </div>

      <div class="ago-prog__panel" id="prog-skills">
        <div class="ago-prog__panel-inner">
          <div class="ago-prog__panel-icon"><i class="fas fa-tools"></i></div>
          <div class="ago-prog__panel-body">
            <h3 class="ago-prog__panel-title">Skills Development</h3>
            <p>Skills development programs serve people with disability who desire to acquire skills in
              various areas. The foundation provides various skills acquisition and vocational training
              packages including computer literacy, catering and fast food production, fashion designing,
              bead making/wire works, shoe and bag making, beauty and barbing salon management, Radio,
              Phone and TV repairs, Cosmetology, voice and musical band training, paint making, soap
              making among others.</p>
            <p>Besides engaging people with special needs, it also builds confidence and encourages them to
              become independent and employable.</p>
          </div>
        </div>
      </div>

      <div class="ago-prog__panel" id="prog-economic">
        <div class="ago-prog__panel-inner">
          <div class="ago-prog__panel-icon"><i class="fas fa-coins"></i></div>
          <div class="ago-prog__panel-body">
            <h3 class="ago-prog__panel-title">Economic Empowerment</h3>
            <p>AGO Cares Foundation complements the skills development program through the provision of
              financial support that allows the beneficiaries to become self-employed and self-reliant.
              This program also provides equipment that assist beneficiaries to start-up small
              enterprises.</p>
            <p>In 2016, one hundred and eighty (180) persons with special needs received equipment and
              funding support to commence small enterprises.</p>
          </div>
        </div>
      </div>

      <div class="ago-prog__panel" id="prog-sports">
        <div class="ago-prog__panel-inner">
          <div class="ago-prog__panel-icon"><i class="fas fa-running"></i></div>
          <div class="ago-prog__panel-body">
            <h3 class="ago-prog__panel-title">Special Sports For People With Disability</h3>
            <p>AGO Cares Foundation introduced exercise, fitness programs and Adaptive sports or para sports
              for persons with different forms of disabilities. This is part of AGO Cares Foundation's
              rehabilitation and reintegration program aimed at improving the health, well-being and
              quality of life of people with disability. It also offers them psychological benefits like
              good self-esteem, less stress, confidence, better anger management and a belief in their
              skills and abilities.</p>
            <p>The highlight of the sporting activities is the Blind and Visually Impaired Football for Men,
              women, and recently Children. For this purpose the foundation established a fully staffed,
              equipped and functional disability and Blind Football academy — the first of its kind in
              Nigeria.</p>
          </div>
        </div>
      </div>

      <div class="ago-prog__panel" id="prog-welfare">
        <div class="ago-prog__panel-inner">
          <div class="ago-prog__panel-icon"><i class="fas fa-heart"></i></div>
          <div class="ago-prog__panel-body">
            <h3 class="ago-prog__panel-title">Social Welfare</h3>
            <p>AGO Cares Foundation provides various forms of relief to people with special needs in
              Nigeria. This program caters for basic needs of individuals such as provision of clothing,
              nutrition and other relief materials depending on identified needs.</p>
            <p>The day to day requirements of persons with special needs are rendered pending such time when
              they are no longer necessary.</p>
          </div>
        </div>
      </div>

      <div class="ago-prog__panel" id="prog-advocacy">
        <div class="ago-prog__panel-inner">
          <div class="ago-prog__panel-icon"><i class="fas fa-bullhorn"></i></div>
          <div class="ago-prog__panel-body">
            <h3 class="ago-prog__panel-title">Advocacy</h3>
            <p>AGO Cares Foundation advocates for public policies that facilitate social inclusion, respect
              for dignity and Human Rights of people with special needs. Effective collaborations are
              forged with similar organizations and networks for the purpose of facilitating systemic and
              institutional strengthening and reforms in issues that negatively affect people with special
              needs in Nigeria.</p>
          </div>
        </div>
      </div>

    </div>{{-- /.ago-prog__panels --}}

    <div class="ago-prog__footer">
      <a href="{{ route('donate') }}" class="th-btn style5">
        Support Our Programs <i class="fas fa-arrow-up-right ms-2"></i>
      </a>
      <a href="{{ route('volunteer') }}" class="th-btn ms-3">
        Volunteer With Us <i class="fas fa-arrow-up-right ms-2"></i>
      </a>
    </div>

  </div>
</section>


{{-- ===== 5. INTERVENTIONS ===== --}}
<section class="ago-int" id="interventions">
  {{-- Header --}}
  <div class="ago-int__header">
    <div class="container">
      {{-- <span class="sub-title">Detailed Breakdown</span> --}}
      <h2 class="sec-title">Our Interventions</h2>
      <p>Select a group below to explore the specific objectives and actions we take on their behalf.</p>
    </div>
  </div>

  {{-- Group Selector --}}
  <div class="ago-int__selector">
    <div class="container">
      <div class="ago-int__groups">
        <button class="ago-int__group active" data-group="disability">
          <span class="ago-int__group-icon"><i class="fas fa-wheelchair"></i></span>
          <span class="ago-int__group-label">People with<br>Disability</span>
          <span class="ago-int__group-count">6 Interventions</span>
        </button>
        <button class="ago-int__group" data-group="widows">
          <span class="ago-int__group-icon"><i class="fas fa-female"></i></span>
          <span class="ago-int__group-label">Widows</span>
          <span class="ago-int__group-count">3 Interventions</span>
        </button>
        <button class="ago-int__group" data-group="aged">
          <span class="ago-int__group-icon"><i class="fas fa-user-clock"></i></span>
          <span class="ago-int__group-label">The Young<br>& Elderly</span>
          <span class="ago-int__group-count">2 Interventions</span>
        </button>
      </div>
    </div>
  </div>

  {{-- Panels --}}
  <div class="ago-int__body">
    <div class="container">

      {{-- Panel: People with Disability --}}
      <div class="ago-int__panel active" id="int-disability">
        <div class="ago-int__row">
          <div class="ago-int__num">01</div>
          <div class="ago-int__content">
            <div class="ago-int__meta">
              <i class="fas fa-laptop-code ago-int__icon"></i>
              <h4 class="ago-int__title">Economic Empowerment</h4>
            </div>
            <p class="ago-int__obj">To improve capacity of persons living with disability for self-sustenance.</p>
            <ul class="ago-int__actions">
              <li>Provide training in Computer operations, bead making, catering, and other skill areas</li>
              <li>Facilitate self-employment through provision of equipment, funds, and performance incentives</li>
            </ul>
          </div>
        </div>
        <div class="ago-int__row">
          <div class="ago-int__num">02</div>
          <div class="ago-int__content">
            <div class="ago-int__meta">
              <i class="fas fa-graduation-cap ago-int__icon"></i>
              <h4 class="ago-int__title">Academic Development</h4>
            </div>
            <p class="ago-int__obj">To improve academic capacity of persons living with disability.</p>
            <ul class="ago-int__actions">
              <li>Provide adult literacy education for persons living with disability</li>
              <li>Prepare prospective undergraduates for CBTs including UME/PUME through IT training</li>
              <li>Facilitate academic pursuits via provision of wheelchairs, visual aids, hearing aids, etc.</li>
              <li>Facilitate school attendance through provision of bursaries to undergraduate persons with disability</li>
            </ul>
          </div>
        </div>
        <div class="ago-int__row">
          <div class="ago-int__num">03</div>
          <div class="ago-int__content">
            <div class="ago-int__meta">
              <i class="fas fa-heartbeat ago-int__icon"></i>
              <h4 class="ago-int__title">Medicare</h4>
            </div>
            <p class="ago-int__obj">To improve health outcomes of persons with special needs.</p>
            <ul class="ago-int__actions">
              <li>Provide psychological rehabilitation through personal and group counselling</li>
              <li>Provide basic and specialist care including free medical checks and prescribed medications</li>
              <li>Conduct health talks to sensitize persons with disability on hygiene and health optimization</li>
            </ul>
          </div>
        </div>
        <div class="ago-int__row">
          <div class="ago-int__num">04</div>
          <div class="ago-int__content">
            <div class="ago-int__meta">
              <i class="fas fa-bullhorn ago-int__icon"></i>
              <h4 class="ago-int__title">Advocacy</h4>
            </div>
            <p class="ago-int__obj">To promote fairness in perceptions of and attitudes towards persons with disability.</p>
            <ul class="ago-int__actions">
              <li>Conduct public enlightenment campaigns for improved attitudes towards persons with disability</li>
              <li>Persuade government MDAs to make and implement laws that improve lives of persons with disability</li>
              <li>Hold seminars and workshops on legal rights and privileges as Nigerian citizens</li>
            </ul>
          </div>
        </div>
        <div class="ago-int__row">
          <div class="ago-int__num">05</div>
          <div class="ago-int__content">
            <div class="ago-int__meta">
              <i class="fas fa-hands-helping ago-int__icon"></i>
              <h4 class="ago-int__title">Welfare</h4>
            </div>
            <p class="ago-int__obj">To promote welfare of persons living with disability.</p>
            <ul class="ago-int__actions">
              <li>Provide meals for persons with disability during training or interventions</li>
              <li>Facilitate access of mentally challenged persons to free meals-on-wheels daily</li>
              <li>Provide materials and resources that improve well-being of persons with disability</li>
            </ul>
          </div>
        </div>
        <div class="ago-int__row ago-int__row--accent">
          <div class="ago-int__num">06</div>
          <div class="ago-int__content">
            <div class="ago-int__meta">
              <i class="fas fa-running ago-int__icon"></i>
              <h4 class="ago-int__title">Exercise, Fitness &amp; Sports</h4>
            </div>
            <p class="ago-int__obj">Rehabilitation and reintegration through adaptive sports.</p>
            <ul class="ago-int__actions">
              <li><strong>Health:</strong> Regular exercise and sporting activities for health and well-being</li>
              <li><strong>Psychological:</strong> Reduce anxiety, depression, and increase self-esteem</li>
              <li><strong>Social:</strong> Gain new experiences, friendships, and counter stigmatization</li>
            </ul>
          </div>
        </div>
      </div>

      {{-- Panel: Widows --}}
      <div class="ago-int__panel" id="int-widows">
        <div class="ago-int__row">
          <div class="ago-int__num">01</div>
          <div class="ago-int__content">
            <div class="ago-int__meta">
              <i class="fas fa-heartbeat ago-int__icon"></i>
              <h4 class="ago-int__title">Medicare</h4>
            </div>
            <p class="ago-int__obj">To promote better health outcomes for widows.</p>
            <ul class="ago-int__actions">
              <li>Operate mobile clinics providing medical outreach for indigent widows in rural communities</li>
              <li>Provide basic and specialist healthcare including free medical checks and prescribed medications</li>
              <li>Provide health education to indigent widows</li>
            </ul>
          </div>
        </div>
        <div class="ago-int__row">
          <div class="ago-int__num">02</div>
          <div class="ago-int__content">
            <div class="ago-int__meta">
              <i class="fas fa-briefcase ago-int__icon"></i>
              <h4 class="ago-int__title">Economic Empowerment</h4>
            </div>
            <p class="ago-int__obj">To promote improved livelihood for widows.</p>
            <ul class="ago-int__actions">
              <li>Provide skills learning opportunities in various trades and skill areas</li>
              <li>Establish linkages with NDE, State SMEs centres, SDGs offices, and CSOs</li>
              <li>Provide Basic SMEs Management education for women and vulnerable young people</li>
              <li>Provide SMEs start-up support including equipment and money to trained indigent widows</li>
            </ul>
          </div>
        </div>
        <div class="ago-int__row">
          <div class="ago-int__num">03</div>
          <div class="ago-int__content">
            <div class="ago-int__meta">
              <i class="fas fa-bullhorn ago-int__icon"></i>
              <h4 class="ago-int__title">Advocacy</h4>
            </div>
            <p class="ago-int__obj">To advocate for policy reforms that promote dignity and Human Rights of widows.</p>
            <ul class="ago-int__actions">
              <li>Establish linkages with the legislature to facilitate passage of bills promoting dignity of widows</li>
              <li>Conduct advocacy actions for implementation of laws that promote dignity and human rights of widows</li>
            </ul>
          </div>
        </div>
      </div>

      {{-- Panel: The Young & Elderly --}}
      <div class="ago-int__panel" id="int-aged">
        <div class="ago-int__row">
          <div class="ago-int__num">01</div>
          <div class="ago-int__content">
            <div class="ago-int__meta">
              <i class="fas fa-heartbeat ago-int__icon"></i>
              <h4 class="ago-int__title">Medicare</h4>
            </div>
            <p class="ago-int__obj">To promote better health outcomes for age-discriminated vulnerable groups.</p>
            <ul class="ago-int__actions">
              <li>Provide basic and specialist care including free medical checks and prescribed medications</li>
              <li>Provide health monitoring devices and services to the aged</li>
              <li>Provide health tips to young people and their caregivers to enhance health outcomes</li>
            </ul>
          </div>
        </div>
        <div class="ago-int__row">
          <div class="ago-int__num">02</div>
          <div class="ago-int__content">
            <div class="ago-int__meta">
              <i class="fas fa-hands-helping ago-int__icon"></i>
              <h4 class="ago-int__title">Welfare</h4>
            </div>
            <p class="ago-int__obj">To support the welfare of age-discriminated vulnerable groups.</p>
            <ul class="ago-int__actions">
              <li>Provide basic necessities including nutrition, clothing, and essential relief materials</li>
              <li>Facilitate access to social services and community support programs</li>
              <li>Provide emotional and psychological support to isolated elderly persons</li>
            </ul>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

{{-- ===== CTA ===== --}}
<div class="cta-area-1 space-bottom">
  <div class="container z-index-common">
    <div class="cta-area-grid">
      <div class="cta-card" data-bg-src="{{ asset('assets/img/bg/cta-bg1-1.jpg') }}">
        <div class="shape-mockup cta-card-bg-shape" data-bottom="0" data-right="0"
          data-mask-src="{{ asset('assets/img/shape/cta_shape1_1.png') }}">
          <img src="{{ asset('assets/img/shape/cta_shape1_1.png') }}" alt="Decorative background shape">
        </div>
        <h3 class="box-title">Become a Volunteer</h3>
        <p class="box-text">Join our team and help deliver these programs directly to the people who need them
          most.</p>
        <a href="{{ route('volunteer') }}" class="th-btn style5">
          Volunteer With Us <i class="fas fa-arrow-up-right ms-2"></i>
        </a>
      </div>
      <div class="cta-card style2" data-bg-src="{{ asset('assets/img/bg/cta-bg1-2.jpg') }}">
        <div class="shape-mockup cta-card-bg-shape" data-bottom="0" data-left="0"
          data-mask-src="{{ asset('assets/img/shape/cta_shape1_1.png') }}">
          <img src="{{ asset('assets/img/shape/cta_shape1_1.png') }}" alt="Decorative background shape">
        </div>
        <h3 class="box-title">Support Our Programs</h3>
        <p class="box-text">Your donation funds these programs and ensures they reach the most vulnerable
          people in our communities.</p>
        <a href="{{ route('donate') }}" class="th-btn style5">
          Donate Now <i class="fas fa-arrow-up-right ms-2"></i>
        </a>
      </div>
    </div>
  </div>
</div>


<script>
  (function() {
    var tabs = document.querySelectorAll('.ago-ks__tab');
    var panels = document.querySelectorAll('.ago-ks__panel');
    tabs.forEach(function(tab) {
      tab.addEventListener('click', function() {
        tabs.forEach(function(t) {
          t.classList.remove('active');
        });
        panels.forEach(function(p) {
          p.classList.remove('active');
        });
        tab.classList.add('active');
        var id = tab.getAttribute('data-ks');
        var panel = document.getElementById(id);
        if (panel) panel.classList.add('active');
      });
    });
  })();
</script>

<script>
  (function() {
    var btns = document.querySelectorAll('.ago-prog__nav-btn');
    var panels = document.querySelectorAll('.ago-prog__panel');
    btns.forEach(function(btn) {
      btn.addEventListener('click', function() {
        btns.forEach(function(b) {
          b.classList.remove('active');
        });
        panels.forEach(function(p) {
          p.classList.remove('active');
        });
        btn.classList.add('active');
        var panel = document.getElementById(btn.getAttribute('data-prog'));
        if (panel) panel.classList.add('active');
      });
    });
  })();
</script>

<script>
  (function() {
    var groups = document.querySelectorAll('.ago-int__group');
    var panels = document.querySelectorAll('.ago-int__panel');

    groups.forEach(function(btn) {
      btn.addEventListener('click', function() {
        groups.forEach(function(b) {
          b.classList.remove('active');
        });
        panels.forEach(function(p) {
          p.classList.remove('active');
          p.classList.remove('ago-int__panel--in');
        });
        btn.classList.add('active');
        var target = document.getElementById('int-' + btn.getAttribute('data-group'));
        if (target) {
          target.classList.add('active');
          requestAnimationFrame(function() {
            target.classList.add('ago-int__panel--in');
          });
        }
      });
    });

    // init first panel
    var first = document.querySelector('.ago-int__panel.active');
    if (first) {
      requestAnimationFrame(function() {
        first.classList.add('ago-int__panel--in');
      });
    }
  })();
</script>
@endsection
