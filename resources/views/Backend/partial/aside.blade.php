<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
  <div class="app-brand demo">
    <a href="index.html" class="app-brand-link">
      <span class="app-brand-logo demo">
        <!-- Logo SVG -->
        <svg width="25" viewBox="0 0 25 42" xmlns="http://www.w3.org/2000/svg">
          <!-- SVG paths omitted for brevity -->
        </svg>
      </span>
      <span class="app-brand-text demo menu-text fw-bolder ms-2">Sneat</span>
    </a>

    <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
      <i class="bx bx-chevron-left bx-sm align-middle"></i>
    </a>
  </div>

  <div class="menu-inner-shadow"></div>

  <ul class="menu-inner py-1">
    <!-- Dashboard -->
    <li class="menu-item active">
      <a href="index.html" class="menu-link">
        <i class="menu-icon tf-icons bx bx-home-circle"></i>
        <div data-i18n="Analytics">Dashboard</div>
      </a>
    </li>

    <!-- File Manager Section -->
    <li class="menu-item">
  <a href="javascript:void(0);" class="menu-link menu-toggle">
    <i class="menu-icon tf-icons bx bx-dock-top"></i>
    <div>Filemanager</div>
  </a>
  <ul class="menu-sub">
    <li class="menu-item">
      <a href="{{ route('files.create') }}" class="menu-link">Create</a>
    </li>
    <li class="menu-item">
      <a href="{{ route('files.index') }}" class="menu-link">Manage</a>
    </li>
  </ul>
</li>

  </ul>
</aside>
