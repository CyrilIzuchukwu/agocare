@extends('layouts.admin')
@section('content')

<div class="content">
  <div class="page-header">
    <div>
      <h4 class="fw-bold mb-1">SEO Settings</h4>
      <h6 class="text-muted">Manage meta tags, Open Graph, Twitter Card, analytics and structured data</h6>
    </div>
    <a href="{{ route('admin.dashboard') }}" class="btn btn-secondary">
      <i class="ti ti-arrow-left me-1"></i> Back to Dashboard
    </a>
  </div>

  <form action="{{ route('admin.seo.update') }}" method="POST" enctype="multipart/form-data" id="seoForm">
    @csrf

    <div class="add-product">
      <div class="accordions-items-seperate" id="seoAccordion">

        {{-- ===== 1. BASIC SEO ===== --}}
        <div class="accordion-item border mb-4">
          <h2 class="accordion-header">
            <div class="accordion-button bg-white" data-bs-toggle="collapse"
              data-bs-target="#seoBasic" aria-expanded="true">
              <div class="d-flex align-items-center gap-2 flex-fill">
                <span class="ago-seo-badge ago-seo-badge--blue">
                  <i class="ti ti-search"></i>
                </span>
                <h5 class="mb-0">Basic SEO</h5>
                <small class="text-muted ms-2">Title, description, keywords, robots</small>
              </div>
            </div>
          </h2>
          <div id="seoBasic" class="accordion-collapse collapse show">
            <div class="accordion-body border-top">
              <div class="row g-3">
                <div class="col-12">
                  <label class="form-label fw-semibold">
                    Meta Title
                    <span class="ago-seo-counter" id="titleCounter">0/70</span>
                  </label>
                  <input type="text" name="meta_title" id="metaTitle"
                    class="form-control @error('meta_title') is-invalid @enderror"
                    value="{{ old('meta_title', $seo->meta_title) }}"
                    placeholder="AGO Care Foundation — Hope. Care. Dignity."
                    maxlength="70">
                  <div class="form-text">Recommended: 50–70 characters. Appears in browser tab and search results.</div>
                  @error('meta_title')<div class="invalid-feedback">{{ $message }}</div>@enderror
                </div>

                <div class="col-12">
                  <label class="form-label fw-semibold">
                    Meta Description
                    <span class="ago-seo-counter" id="descCounter">0/160</span>
                  </label>
                  <textarea name="meta_description" id="metaDesc" rows="3"
                    class="form-control @error('meta_description') is-invalid @enderror"
                    placeholder="AGO Cares Foundation supports persons with disabilities, people living with albinism, and vulnerable children across Nigeria."
                    maxlength="160">{{ old('meta_description', $seo->meta_description) }}</textarea>
                  <div class="form-text">Recommended: 120–160 characters. Shown in search result snippets.</div>
                  @error('meta_description')<div class="invalid-feedback">{{ $message }}</div>@enderror
                </div>

                <div class="col-md-8">
                  <label class="form-label fw-semibold">Meta Keywords</label>
                  <input type="text" name="meta_keywords"
                    class="form-control @error('meta_keywords') is-invalid @enderror"
                    value="{{ old('meta_keywords', $seo->meta_keywords) }}"
                    placeholder="AGO Care Foundation, disability, albinism, Nigeria NGO, charity">
                  <div class="form-text">Comma-separated. Less important for modern SEO but still useful.</div>
                  @error('meta_keywords')<div class="invalid-feedback">{{ $message }}</div>@enderror
                </div>

                <div class="col-md-4">
                  <label class="form-label fw-semibold">Robots Directive</label>
                  <select name="robots" class="form-select @error('robots') is-invalid @enderror">
                    @foreach(['index, follow', 'noindex, nofollow', 'index, nofollow', 'noindex, follow'] as $opt)
                    <option value="{{ $opt }}" {{ old('robots', $seo->robots) === $opt ? 'selected' : '' }}>
                      {{ $opt }}
                    </option>
                    @endforeach
                  </select>
                  @error('robots')<div class="invalid-feedback">{{ $message }}</div>@enderror
                </div>

                <div class="col-12">
                  <label class="form-label fw-semibold">Canonical URL <span class="text-muted fw-normal">(optional)</span></label>
                  <input type="url" name="canonical_url"
                    class="form-control @error('canonical_url') is-invalid @enderror"
                    value="{{ old('canonical_url', $seo->canonical_url) }}"
                    placeholder="https://agofoundation.com.ng">
                  <div class="form-text">Leave blank to use the current page URL automatically.</div>
                  @error('canonical_url')<div class="invalid-feedback">{{ $message }}</div>@enderror
                </div>
              </div>
            </div>
          </div>
        </div>

        {{-- ===== 2. OPEN GRAPH ===== --}}
        <div class="accordion-item border mb-4">
          <h2 class="accordion-header">
            <div class="accordion-button collapsed bg-white" data-bs-toggle="collapse"
              data-bs-target="#seoOG" aria-expanded="false">
              <div class="d-flex align-items-center gap-2 flex-fill">
                <span class="ago-seo-badge ago-seo-badge--indigo">
                  <i class="ti ti-brand-facebook"></i>
                </span>
                <h5 class="mb-0">Open Graph</h5>
                <small class="text-muted ms-2">Facebook, LinkedIn sharing preview</small>
              </div>
            </div>
          </h2>
          <div id="seoOG" class="accordion-collapse collapse">
            <div class="accordion-body border-top">
              <div class="row g-3">
                <div class="col-md-8">
                  <label class="form-label fw-semibold">OG Title</label>
                  <input type="text" name="og_title"
                    class="form-control @error('og_title') is-invalid @enderror"
                    value="{{ old('og_title', $seo->og_title) }}"
                    placeholder="Leave blank to use Meta Title" maxlength="95">
                  @error('og_title')<div class="invalid-feedback">{{ $message }}</div>@enderror
                </div>

                <div class="col-md-4">
                  <label class="form-label fw-semibold">OG Type</label>
                  <select name="og_type" class="form-select">
                    @foreach(['website', 'article', 'organization'] as $t)
                    <option value="{{ $t }}" {{ old('og_type', $seo->og_type) === $t ? 'selected' : '' }}>
                      {{ ucfirst($t) }}
                    </option>
                    @endforeach
                  </select>
                </div>

                <div class="col-12">
                  <label class="form-label fw-semibold">OG Description</label>
                  <textarea name="og_description" rows="2"
                    class="form-control @error('og_description') is-invalid @enderror"
                    placeholder="Leave blank to use Meta Description" maxlength="200">{{ old('og_description', $seo->og_description) }}</textarea>
                  @error('og_description')<div class="invalid-feedback">{{ $message }}</div>@enderror
                </div>

                <div class="col-12">
                  <label class="form-label fw-semibold">OG Image <span class="text-muted fw-normal">(1200×630px recommended)</span></label>
                  @if($seo->og_image)
                  <div class="mb-2">
                    <img src="{{ Storage::url($seo->og_image) }}" alt="Current OG Image"
                      class="ago-seo-img-preview">
                    <small class="text-muted d-block mt-1">Current image</small>
                  </div>
                  @endif
                  <input type="file" name="og_image" class="form-control"
                    accept="image/jpeg,image/png,image/jpg,image/webp">
                  @error('og_image')<div class="text-danger small mt-1">{{ $message }}</div>@enderror
                </div>
              </div>
            </div>
          </div>
        </div>

        {{-- ===== 3. TWITTER CARD ===== --}}
        <div class="accordion-item border mb-4">
          <h2 class="accordion-header">
            <div class="accordion-button collapsed bg-white" data-bs-toggle="collapse"
              data-bs-target="#seoTwitter" aria-expanded="false">
              <div class="d-flex align-items-center gap-2 flex-fill">
                <span class="ago-seo-badge ago-seo-badge--sky">
                  <i class="ti ti-brand-twitter"></i>
                </span>
                <h5 class="mb-0">Twitter Card</h5>
                <small class="text-muted ms-2">Twitter / X sharing preview</small>
              </div>
            </div>
          </h2>
          <div id="seoTwitter" class="accordion-collapse collapse">
            <div class="accordion-body border-top">
              <div class="row g-3">
                <div class="col-md-6">
                  <label class="form-label fw-semibold">Card Type</label>
                  <select name="twitter_card" class="form-select">
                    <option value="summary_large_image" {{ old('twitter_card', $seo->twitter_card) === 'summary_large_image' ? 'selected' : '' }}>Summary Large Image</option>
                    <option value="summary" {{ old('twitter_card', $seo->twitter_card) === 'summary' ? 'selected' : '' }}>Summary</option>
                  </select>
                </div>

                <div class="col-md-6">
                  <label class="form-label fw-semibold">Twitter @handle <span class="text-muted fw-normal">(optional)</span></label>
                  <input type="text" name="twitter_site"
                    class="form-control"
                    value="{{ old('twitter_site', $seo->twitter_site) }}"
                    placeholder="@agocaresfoundation">
                </div>

                <div class="col-12">
                  <label class="form-label fw-semibold">Twitter Title</label>
                  <input type="text" name="twitter_title"
                    class="form-control"
                    value="{{ old('twitter_title', $seo->twitter_title) }}"
                    placeholder="Leave blank to use OG Title or Meta Title" maxlength="70">
                </div>

                <div class="col-12">
                  <label class="form-label fw-semibold">Twitter Description</label>
                  <textarea name="twitter_description" rows="2"
                    class="form-control"
                    placeholder="Leave blank to use OG Description" maxlength="200">{{ old('twitter_description', $seo->twitter_description) }}</textarea>
                </div>

                <div class="col-12">
                  <label class="form-label fw-semibold">Twitter Image <span class="text-muted fw-normal">(leave blank to use OG Image)</span></label>
                  @if($seo->twitter_image)
                  <div class="mb-2">
                    <img src="{{ Storage::url($seo->twitter_image) }}" alt="Current Twitter Image"
                      class="ago-seo-img-preview">
                  </div>
                  @endif
                  <input type="file" name="twitter_image" class="form-control"
                    accept="image/jpeg,image/png,image/jpg,image/webp">
                </div>
              </div>
            </div>
          </div>
        </div>

        {{-- ===== 4. STRUCTURED DATA ===== --}}
        <div class="accordion-item border mb-4">
          <h2 class="accordion-header">
            <div class="accordion-button collapsed bg-white" data-bs-toggle="collapse"
              data-bs-target="#seoSchema" aria-expanded="false">
              <div class="d-flex align-items-center gap-2 flex-fill">
                <span class="ago-seo-badge ago-seo-badge--green">
                  <i class="ti ti-code"></i>
                </span>
                <h5 class="mb-0">Structured Data (Schema.org)</h5>
                <small class="text-muted ms-2">Rich results in Google Search</small>
              </div>
            </div>
          </h2>
          <div id="seoSchema" class="accordion-collapse collapse">
            <div class="accordion-body border-top">
              <div class="row g-3">
                <div class="col-md-4">
                  <label class="form-label fw-semibold">Schema Type</label>
                  <input type="text" name="schema_type"
                    class="form-control"
                    value="{{ old('schema_type', $seo->schema_type ?? 'Organization') }}"
                    placeholder="Organization">
                </div>
                <div class="col-md-8">
                  <label class="form-label fw-semibold">Organization Name</label>
                  <input type="text" name="schema_name"
                    class="form-control"
                    value="{{ old('schema_name', $seo->schema_name) }}"
                    placeholder="AGO Care Foundation">
                </div>
                <div class="col-md-6">
                  <label class="form-label fw-semibold">Organization URL</label>
                  <input type="url" name="schema_url"
                    class="form-control"
                    value="{{ old('schema_url', $seo->schema_url) }}"
                    placeholder="https://agofoundation.com.ng">
                </div>
                <div class="col-md-6">
                  <label class="form-label fw-semibold">Logo Image</label>
                  @if($seo->schema_logo)
                  <div class="mb-2">
                    <img src="{{ Storage::url($seo->schema_logo) }}" alt="Schema Logo"
                      style="height:40px;object-fit:contain;">
                  </div>
                  @endif
                  <input type="file" name="schema_logo" class="form-control"
                    accept="image/jpeg,image/png,image/jpg,image/webp,image/svg+xml">
                </div>
              </div>
            </div>
          </div>
        </div>

        {{-- ===== 5. ANALYTICS & TRACKING ===== --}}
        <div class="accordion-item border mb-4">
          <h2 class="accordion-header">
            <div class="accordion-button collapsed bg-white" data-bs-toggle="collapse"
              data-bs-target="#seoAnalytics" aria-expanded="false">
              <div class="d-flex align-items-center gap-2 flex-fill">
                <span class="ago-seo-badge ago-seo-badge--orange">
                  <i class="ti ti-chart-bar"></i>
                </span>
                <h5 class="mb-0">Analytics & Tracking</h5>
                <small class="text-muted ms-2">Google Analytics, GTM, Facebook Pixel</small>
              </div>
            </div>
          </h2>
          <div id="seoAnalytics" class="accordion-collapse collapse">
            <div class="accordion-body border-top">
              <div class="row g-3">
                <div class="col-md-6">
                  <label class="form-label fw-semibold">Google Analytics ID</label>
                  <input type="text" name="google_analytics_id"
                    class="form-control"
                    value="{{ old('google_analytics_id', $seo->google_analytics_id) }}"
                    placeholder="G-XXXXXXXXXX or UA-XXXXXXXX-X">
                  <div class="form-text">Google Analytics 4 Measurement ID or Universal Analytics ID.</div>
                </div>

                <div class="col-md-6">
                  <label class="form-label fw-semibold">Google Tag Manager ID</label>
                  <input type="text" name="google_tag_manager_id"
                    class="form-control"
                    value="{{ old('google_tag_manager_id', $seo->google_tag_manager_id) }}"
                    placeholder="GTM-XXXXXXX">
                </div>

                <div class="col-md-6">
                  <label class="form-label fw-semibold">Google Site Verification</label>
                  <input type="text" name="google_site_verification"
                    class="form-control"
                    value="{{ old('google_site_verification', $seo->google_site_verification) }}"
                    placeholder="Verification code from Google Search Console">
                </div>

                <div class="col-md-6">
                  <label class="form-label fw-semibold">Facebook Pixel ID</label>
                  <input type="text" name="facebook_pixel_id"
                    class="form-control"
                    value="{{ old('facebook_pixel_id', $seo->facebook_pixel_id) }}"
                    placeholder="XXXXXXXXXXXXXXXX">
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>{{-- /accordion --}}
    </div>

    <div class="d-flex justify-content-end gap-2 mb-4">
      <button type="reset" class="btn btn-danger">Reset</button>
      <button type="submit" class="btn btn-secondary px-5" id="seoSubmitBtn">
        <i class="ti ti-device-floppy me-1"></i> Save SEO Settings
      </button>
    </div>

  </form>
</div>

<script>
  (function() {
    // Character counters
    function counter(inputId, counterId, max) {
      var el = document.getElementById(inputId);
      var ct = document.getElementById(counterId);
      if (!el || !ct) return;

      function update() {
        var len = el.value.length;
        ct.textContent = len + '/' + max;
        ct.className = 'ago-seo-counter' + (len > max * 0.9 ? ' ago-seo-counter--warn' : '');
      }
      el.addEventListener('input', update);
      update();
    }
    counter('metaTitle', 'titleCounter', 70);
    counter('metaDesc', 'descCounter', 160);

    // Submit spinner
    document.getElementById('seoForm').addEventListener('submit', function() {
      var btn = document.getElementById('seoSubmitBtn');
      btn.innerHTML = '<span class="spinner-border spinner-border-sm me-1"></span> Saving...';
      btn.disabled = true;
    });
  })();
</script>
@endsection
