<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ url('/') }}" class="brand-link">
      <img src="{{ asset('backend/dist/img/AdminLTELogo.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">{{ config('app.name', 'Laravel') }}</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          
            <li class="nav-item">
                <a href="{{ route('admin.dashboard') }}" class="nav-link">
                  <i class="nav-icon fas fa-tachometer-alt"></i>
                  <p>
                    {{ __('Dashboard') }}
                  </p>
                </a>
            </li>

            <li class="nav-item">
              <a href="javascript:void(0)" class="nav-link">
                <i class="nav-icon fas fa-th"></i>
                <p>
                  {{ __('Goals') }}
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="{{ route('admin.goals.index') }}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>{{ __('All Goals') }}</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="{{ route('admin.goals.create') }}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>{{ __('Add Goal') }}</p>
                  </a>
                </li>
              </ul>
            </li>

            <li class="nav-item">
              <a href="javascript:void(0)" class="nav-link">
                <i class="nav-icon far fa-image"></i>
                <p>
                  {{ __('Events') }}
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="{{ route('admin.events.index') }}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>{{ __('All Events') }}</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="{{ route('admin.events.create') }}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>{{ __('Add Event') }}</p>
                  </a>
                </li>
              </ul>
            </li>

            <li class="nav-item">
              <a href="javascript:void(0)" class="nav-link">
                <i class="nav-icon fas fa-columns"></i>
                <p>
                  {{ __('Articles') }}
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="{{ route('admin.articles.index') }}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>{{ __('All Articles') }}</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="{{ route('admin.articles.create') }}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>{{ __('Add Article') }}</p>
                  </a>
                </li>
              </ul>
            </li>

            <li class="nav-item">
              <a href="javascript:void(0)" class="nav-link">
                <i class="nav-icon fas fa-copy"></i>
                <p>
                  {{ __('Entrance Exams') }}
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="{{ route('admin.exam_categories.index') }}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>{{ __('All Exam Categories') }}</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="{{ route('admin.exam_categories.create') }}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>{{ __('Add Exam Category') }}</p>
                  </a>
                </li>

                <li class="nav-item">
                  <a href="{{ route('admin.exams.index') }}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>{{ __('All Exams') }}</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="{{ route('admin.exams.create') }}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>{{ __('Add Exam') }}</p>
                  </a>
                </li>
              </ul>
            </li>

            <li class="nav-item">
              <a href="javascript:void(0)" class="nav-link">
                <i class="nav-icon fas fa-book"></i>
                <p>
                  {{ __('Pages') }}
                  <i class="fas fa-angle-left right"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="{{ route('admin.pages.index') }}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>{{ __('All Pages') }}</p>
                  </a>
                </li>
              </ul>
            </li>

            <li class="nav-item">
              <a href="{{ route('admin.settings.index') }}" class="nav-link">
                <i class="nav-icon fas fa-cog"></i>
                <p>
                  {{ __('Settings') }}
                </p>
              </a>
            </li>

            <li class="nav-item">
                <a href="{{ route('logout') }}" class="nav-link" onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                    <i class="nav-icon fas fa-sign-out-alt"></i>
                    <p>
                    {{ __('Logout') }}
                    </p>
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </li>

        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>