<!-- Toggle -->
<div class="text-center mb-4">
    <div class="toggle-button contact-toggle d-inline-block" dir="ltr">
        <input type="checkbox" id="toggleBtn" {{ $errors->company->any() ? 'checked' : '' }}>
        <label for="toggleBtn" class="d-flex justify-content-between px-2 px-sm-3">
            <span class="fw-bold me-2 me-sm-3 me-md-4 fs-6 fs-sm-5">{{ __('theme.individual_user') }}</span>
            <span class="fw-bold ms-2 ms-sm-3 ms-md-4 fs-6 fs-sm-5">{{ __('theme.company_school') }}</span>
        </label>
    </div>
</div>
