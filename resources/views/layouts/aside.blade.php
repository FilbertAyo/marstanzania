<nav class="pc-sidebar">
  <div class="navbar-wrapper">
    <div class="m-header">
      <a href="{{ route('dashboard') }}" class="b-brand text-primary">
        <!-- ========   Change your logo from here   ============ -->
        <img src="{{ asset('assets/images/shortblogo.png') }}" class="img-fluid logo-lg p-4" alt="logo">
      </a>
    </div>
    <div class="navbar-content">
      <ul class="pc-navbar">
        <li class="pc-item">
          <a href="{{ route('dashboard') }}" class="pc-link">
            <span class="pc-micon"><i class="ti ti-dashboard"></i></span>
            <span class="pc-mtext">Dashboard</span>
          </a>
        </li>

        <li class="pc-item pc-caption">
          <label>Managements</label>
          <i class="ti ti-dashboard"></i>
        </li>
        <li class="pc-item">
          <a href="{{ route('catalogues.index') }}" class="pc-link">
            <span class="pc-micon"><i class="ti ti-book"></i></span>
            <span class="pc-mtext">Catalogue</span>
          </a>
        </li>

      </ul>

    </div>
  </div>
</nav>
