<header id="page-topbar">
  <div class="navbar-header">
      <div class="d-flex">
          <!-- LOGO -->
          <div class="navbar-brand-box">
              <a href="/admin/dashboard" class="logo logo-dark">
                  <span class="logo-sm">
                      <img src="/images/logo.png" alt="" height="50">
                  </span>
                  <span class="logo-lg">
                      <img src="/images/logo.png" alt="" height="50">
                  </span>
              </a>

              {{-- <a href="/" class="logo logo-light">
                  <span class="logo-sm">
                      <img src="/images/logo.png" alt="" height="30">
                  </span>
                  <span class="logo-lg">
                      <img src="/images/logo.png" alt="" height="30">
                  </span>
              </a> --}}
          </div>

          <button type="button" class="btn btn-sm px-3 font-size-16 header-item waves-effect" id="vertical-menu-btn">
              <i class="fa fa-fw fa-bars"></i>
          </button>
      </div>

      <div class="d-flex">

          <div class="dropdown d-inline-block">
              <button type="button" class="btn header-item waves-effect"
              data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <img id="header-lang-img" src="/assets/images/indonesia.png" alt="Header Language" height="46">
              </button>
          </div>

          <div class="dropdown d-inline-block">
              <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown"
              data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <img class="rounded-circle header-profile-user" src="/assets/images/man.png"
                      alt="Header Avatar">
                  <span class="d-none d-xl-inline-block ms-1" key="t-henry">{{ auth()->user()->name }}</span>
                  <i class="mdi mdi-chevron-down d-none d-xl-inline-block"></i>
              </button>
              <div class="dropdown-menu dropdown-menu-end">
                  <!-- item-->
                  <a class="dropdown-item" href="javascript:void(0)"><i class="bx bx-user font-size-16 align-middle me-1"></i> <span key="t-profile">Profile</span></a>
                  
                  <a class="dropdown-item d-block" href="/admin/setting"><i class="bx bx-wrench font-size-16 align-middle me-1"></i> <span key="t-settings">Setting</span></a>

                  <a class="dropdown-item d-block" href="javascript:void(0)"><span class="badge bg-success float-end">0</span><i class="bx bx-message-dots font-size-16 align-middle me-1"></i> <span key="t-message">Message</span></a>

                  <div class="dropdown-divider"></div>

                  <form action="/logout" method="post">
                    @csrf
                    <button type="submit" class="dropdown-item text-danger"><i class="bx bx-power-off font-size-16 align-middle me-1 text-danger"></i> <span key="t-logout">Logout</span></button>
                  </form>
              </div>
          </div>

      </div>
  </div>
</header>