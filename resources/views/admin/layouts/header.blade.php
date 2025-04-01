<!-- ======= Header ======= -->
@php
    $setting = getSetting();
  @endphp

<style>
    .profile_picture {
        width: 40px;
        height: 40px;
        border-radius: 50%;
        object-fit: cover;
    }
</style>
<header id="header" class="header fixed-top d-flex align-items-center">
    <div class="d-flex align-items-center justify-content-between">
        <a href="{{  url('admin') }}" class="logo d-flex align-items-center">
            <img src="assets/img/logo.png" alt="">
            <span class="d-none d-lg-block">{{ $setting->name ?? '' }}</span>
        </a>
        <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->

    <nav class="header-nav ms-auto">
        <ul class="d-flex align-items-center">
            <li class="nav-item dropdown pe-3">
                <a class="nav-link d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
                    @if(!empty(Session::get('photo')))
                        <img src="{{ env('IMAGE_SHOW_PATH') . 'profile/' . Session::get('photo') }}" alt="Profile"
                            class="profile_picture">
                    @else
                        <img src="{{ env('IMAGE_SHOW_PATH') . 'default/profileDom.jpg' }}" alt="Profile"
                            class="profile_picture">
                    @endif
                    <span class="d-none d-md-block dropdown-toggle ps-2">{{ Session::get('name') ?? ''}}</span>
                </a><!-- End Profile Iamge Icon -->

                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
                    <li class="dropdown-header">
                        <h6>{{ Session::get('name') ?? ''}}</h6>
                        <span>{{ Session::get('role_name') ?? ''}}</span>
                    </li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>

                    <li>
                        <a class="dropdown-item d-flex align-items-center"
                            href="{{ url('admin/edit_user') }}/{{ Session::get('id') ?? ''  }}">
                            <i class="bi bi-person"></i>
                            <span>My Profile</span>
                        </a>
                    </li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>

                    <li>
                        <a class="dropdown-item d-flex align-items-center" href="{{ url('admin/logout') }}">
                            <i class="bi bi-box-arrow-right"></i>
                            <span>Sign Out</span>
                        </a>
                    </li>

                </ul><!-- End Profile Dropdown Items -->
            </li><!-- End Profile Nav -->

        </ul>
    </nav><!-- End Icons Navigation -->

</header>

<!-- End Header -->

<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
        class="bi bi-arrow-up-short"></i></a>