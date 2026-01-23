<aside class="sidebar-left border-right bg-white shadow" id="leftSidebar" data-simplebar>
    <a href="#" class="btn collapseSidebar toggle-btn d-lg-none text-muted ml-2 mt-3" data-toggle="toggle">
        <i class="fe fe-x"><span class="sr-only"></span></i>
    </a>
    <nav class="vertnav navbar navbar-light">
        <!-- Brand -->
        <div class="w-100 mb-4 d-flex">
            <a class="navbar-brand mx-auto mt-2 flex-fill text-center" href="#">
                <svg version="1.1" id="logo" class="navbar-brand-img brand-sm" xmlns="http://www.w3.org/2000/svg"
                    xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 120 120"
                    xml:space="preserve">
                    <g>
                        <polygon class="st0" points="78,105 15,105 24,87 87,87" />
                        <polygon class="st0" points="96,69 33,69 42,51 105,51" />
                        <polygon class="st0" points="78,33 15,33 24,15 87,15" />
                    </g>
                </svg>
            </a>
        </div>

        <!-- Menu -->
        <ul class="navbar-nav flex-fill w-100 mb-2">

            <x-sidebar-tab href="{{ route('admin.products.index') }}" icon="bi-box-seam"
                title="{{ __('keywords.products') }}">
            </x-sidebar-tab>
            <x-sidebar-tab href="{{ route('admin.sections.index') }}" icon="bi-layout-text-window"
                title="{{ __('keywords.sections') }}">
            </x-sidebar-tab>
            <x-sidebar-tab href="{{ route('admin.services.index') }}" icon="bi-grid-1x2-fill"
                title="{{ __('keywords.services') }}">
            </x-sidebar-tab>
            <x-sidebar-tab href="{{ route('admin.messages.index') }}" icon="bi-envelope"
                title="{{ __('keywords.messages') }}">
            </x-sidebar-tab>
            <x-sidebar-tab href="{{ route('admin.requests.index') }}" icon="bi-file-earmark-text"
                title="{{ __('keywords.demo_requests') }}">
            </x-sidebar-tab>
            <x-sidebar-tab href="{{ route('admin.subscribers.index') }}" icon="bi-people"
                title="{{ __('keywords.subscribers') }}">
            </x-sidebar-tab>
            <x-sidebar-tab href="{{ route('admin.trainees.index') }}" icon="bi bi-mortarboard"
                title="{{ __('keywords.trainees') }}">
            </x-sidebar-tab>




        </ul>

        <!-- Logout -->
        <div class="btn-box w-100 mt-4 mb-1">
            <form action="{{ route('admin.logout') }}" method="POST">
                @csrf
                <button class="btn btn-danger btn-lg w-100 d-flex align-items-center justify-content-center gap-2">
                    <i class="fe fe-log-out fs-5"></i>
                    <span class="small fw-semibold">{{ __('keywords.logout') }}</span>
                </button>
            </form>
        </div>

    </nav>
</aside>
