<div id="sidebar-menu">
  <ul class="metismenu list-unstyled" id="side-menu">
      <li class="menu-title" key="t-menu">Application</li>

      <li>
        <a href="/admin/dashboard" class="waves-effect {{ Request::is('admin/dashboard*') ? 'active' : '' }}">
            <i class="bx bx-home-circle"></i>
            <span key="t-dashboard">Dashboard</span>
        </a>
      </li>

      <li>
        <a href="/admin/student" class="waves-effect {{ Request::is('admin/student*') ? 'active' : '' }}">
            <i class="bx bx-user-circle"></i>
            <span key="t-student">Students</span>
        </a>
      </li>

      <li>
          <a href="/admin/contact" class="waves-effect {{ Request::is('admin/chart*') ? 'active' : '' }}">
              <i class="bx bx-book-content"></i>
              <span key="t-chart">Contacts</span>
          </a>
      </li>

        <li>
            <a href="/admin/document" class="waves-effect">
                <i class="bx bx-file"></i>
                <span key="t-chat">Document</span>
            </a>
        </li>

      <li>
          <a href="/admin/setting" class="waves-effect">
              <i class="bx bx-wrench"></i>
              {{-- <span class="badge rounded-pill bg-success float-end" key="t-new">New</span> --}}
              <span key="t-setting">Settings</span>
          </a>
      </li>

  </ul>
</div>