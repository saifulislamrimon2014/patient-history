  <div class="sidebar" data-color="purple" data-background-color="white" data-image="../assets/img/sidebar-1.jpg">
    <!--
      Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

      Tip 2: you can also add an image using data-image tag
  -->
    <div class="logo"><a href="{{ route('admin.dashboard') }}" class="simple-text logo-normal">
       Dr. Rhonda Tucker 
      </a></div>
    <div class="sidebar-wrapper">
      <ul class="nav">
        <li class="nav-item {{ Request::is('doctors/dashboard') ? 'active' : '' }}"> {{-- short hand if-else, class 9 47 min --}}
          <a class="nav-link" href="{{ route('admin.dashboard') }}">
            <i class="material-icons">dashboard</i>
            <p>Dashboard</p>
          </a>
        </li>
        <li class="nav-item {{ Request::is('doctors/dashboard/records*') ? 'active' : '' }}">
          <a class="nav-link" href="{{ route('admin.dashboard.records') }}">
            <i class="material-icons">view_carousel</i>
            <p>Manage Records</p>
          </a>
        </li>
        <li class="nav-item {{ Request::is('doctors/dashboard/appointment*') ? 'active' : '' }}">
          <a class="nav-link" href="{{ route('admin.dashboard.appointment') }}">
            <i class="material-icons">view_carousel</i>
            <p>Appointments</p>
          </a>
        </li>
        <li class="nav-item {{ Request::is('doctors/contact*') ? 'active' : '' }}">
          <a class="nav-link" href="{{ route('admin.contact') }}">
            <i class="material-icons">view_carousel</i>
            <p>Contact Messages</p>
          </a>
        </li>
      </ul>
    </div>
  </div>