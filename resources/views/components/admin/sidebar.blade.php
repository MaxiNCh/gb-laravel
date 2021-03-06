<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar">
  <div class="position-sticky pt-3">
    <ul class="nav flex-column">
      <li class="nav-item">
        <a class="nav-link @if (request()->is('admin')) active @endif"
          aria-current="page" href="{{ route('admin.index') }}">
          <span data-feather="home"></span>
          Main
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link @if (request()->is('admin/categories')) active @endif" href="{{ route('admin.categories.index') }}">
          <span data-feather="file"></span>
          Categories
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link @if (request()->routeIs('admin.news.index')) active @endif" href="{{ route('admin.news.index') }}">
          <span data-feather="shopping-cart"></span>
          News
        </a>
      </li>
    </ul>
  </div>
</nav>
