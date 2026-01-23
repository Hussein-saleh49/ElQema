<!-- Footer -->
<footer class="footer">
    <div class="container">

        <!-- Top -->
        <div class="footer-top">
            <!-- Left -->
            <div class="footer-brand">

                <form action="{{ route("front.subscribe.store") }}" method="POST" class="footer-form">
                    @csrf


                    <!-- البريد الإلكتروني -->
                    <input type="email" name="email" placeholder="{{ __('theme.footer_enter_email') }}"
                        value="{{ old('email') }}">
                    @error('email', 'subscriber')
                        <span class="text-danger small">{{ $message }}</span>
                    @enderror

                    <button type="submit">
                        <i class="bi bi-send"></i>
                    </button>

                  
                    @if (session('success'))
                        <div class="text-success mt-2">{{ session('success') }}</div>
                    @endif

                    @if (session('error'))
                        <div class="text-danger mt-2">{{ session('error') }}</div>
                    @endif
                </form>



                <h4 class="brand-title">{{ __('theme.footer_brand_title') }}</h4>
                <p class="brand-desc">
                    {{ __('theme.footer_brand_desc') }}
                </p>

                <div class="social-icons">
                    <a href="#"><i class="bi bi-facebook"></i></a>
                    <a href="#"><i class="bi bi-instagram"></i></a>
                    <a href="#"><i class="bi bi-twitter-x"></i></a>
                    <a href="#"><i class="bi bi-linkedin"></i></a>
                </div>
            </div>

            <!-- Links -->
            <div class="footer-links">
                <div>
                    <h6>{{ __('theme.footer_about_us') }}</h6>
                    <a href="{{ route("front.services") }}">{{ __('theme.footer_services') }}</a>
                    <a href="{{ route("front.training") }}">{{ __('theme.footer_training') }}</a>
                    <a href="{{ route("front.education") }}">{{ __('theme.footer_education') }}</a>
                    <a href="{{ route("front.contacts") }}">{{ __('theme.footer_contact_us') }}</a>
                </div>

                <div>
                    <h6>{{ __('theme.footer_support') }}</h6>
                    <a href="#">{{ __('theme.footer_knowledge') }}</a>
                    <a href="#">{{ __('theme.footer_live_chat') }}</a>
                    <a href="#">{{ __('theme.footer_leadership') }}</a>
                    <a href="#">{{ __('theme.footer_privacy_policy') }}</a>
                </div>

                <div>
                    <h6>{{ __('theme.footer_jobs') }}</h6>
                    <a href="#">{{ __('theme.footer_our_team') }}</a>
                </div>

                {{-- <div>
                    <h6>{{ __('theme.footer_horizon') }}</h6>
                    <a href="#">{{ __('theme.footer_smart_ok') }}</a>
                    <a href="#">{{ __('theme.footer_hivision') }}</a>
                </div> --}}
            </div>
        </div>

        <!-- Bottom -->
        <div class="footer-bottom text-center py-3">
            &copy; {{ date('Y') }} {{ __('theme.footer_brand_title') }}. All rights reserved.
        </div>

    </div>
</footer>
