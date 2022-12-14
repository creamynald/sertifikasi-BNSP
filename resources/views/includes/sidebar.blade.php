<!-- ======= Sidebar ======= -->
<aside id="sidebar" class="sidebar">

  <ul class="sidebar-nav" id="sidebar-nav">

    <li class="nav-item">
      <a class="nav-link " href="/dashboard">
        <i class="bi bi-grid"></i>
        <span>Dashboard</span>
      </a>
    </li><!-- End Dashboard Nav -->

    <li class="nav-item">
      <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
        <i class="bi bi-menu-button-wide"></i><span>Articles Management</span><i class="bi bi-chevron-down ms-auto"></i>
      </a>
      <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
        <li>
          <a href="{{ route('artikel.index') }}">
            <i class="bi bi-circle"></i><span>Article</span>
          </a>
        </li>
        <li>
          <a href="{{ route('kategori.index') }}">
            <i class="bi bi-circle"></i><span>Categories</span>
          </a>
        </li>
        <li>
          <a href="{{ route('playlist.index') }}">
            <i class="bi bi-circle"></i><span>Playlist Video</span>
          </a>
        </li>
        <li>
          <a href="{{ route('materi.index') }}">
            <i class="bi bi-circle"></i><span>Materi Video</span>
          </a>
        </li>
      </ul>
    </li><!-- End Components Nav -->

    <li class="nav-item">
      <a class="nav-link collapsed" data-bs-target="#components-nav2" data-bs-toggle="collapse" href="#">
        <i class="bi bi-menu-button-wide"></i><span>Website Management</span><i class="bi bi-chevron-down ms-auto"></i>
      </a>
      <ul id="components-nav2" class="nav-content collapse " data-bs-parent="#sidebar-nav">
        <li>
          <a href="{{ route('slide.index') }}">
            <i class="bi bi-circle"></i><span>Image Slider</span>
          </a>
        </li>
        <li>
          <a href="{{ route('banner.index') }}">
            <i class="bi bi-circle"></i><span>Banners</span>
          </a>
        </li>
        <li>
          <a href="{{ route('sambutan.index') }}">
            <i class="bi bi-circle"></i><span>Sambutan</span>
          </a>
        </li>
      </ul>
    </li><!-- End Components Nav -->

    <li class="nav-heading">Pages</li>

    <li class="nav-item">
      <a class="nav-link collapsed" href="{{ route('users.index') }}">
        <i class="bi bi-person"></i>
        <span>Users</span>
      </a>
    </li><!-- End Profile Page Nav -->

    <li class="nav-item">
      <a class="nav-link collapsed" href="{{ route('logout') }}"
        onclick="event.preventDefault();
        document.getElementById('logout-form').submit();">
        <i class="bi bi-box-arrow-in-left"></i>
        {{ __('Logout') }}
      </a>
      <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
        @csrf
    </form>
    </li><!-- End Login Page Nav -->

  </ul>

</aside><!-- End Sidebar-->