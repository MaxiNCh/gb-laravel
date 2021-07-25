<header class="blog-header py-3">
  <div class="row flex-nowrap justify-content-between align-items-center">
    <div class="col-4 pt-1">
      <a class="link-secondary" href="#">Subscribe</a>
    </div>
    <div class="col-4 text-center">
      <a class="blog-header-logo text-dark" href="#">Geekbrains news</a>
    </div>
    <div class="col-4 d-flex justify-content-end align-items-center">
      <a class="link-secondary" href="#" aria-label="Search">
        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" stroke="currentColor"
          stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="mx-3" role="img" viewBox="0 0 24 24">
          <title>Search</title>
          <circle cx="10.5" cy="10.5" r="7.5" />
          <path d="M21 21l-5.2-5.2" />
        </svg>
      </a>
      @auth
        <span class="me-3">Hello, {{ Auth::user()->name }}.</span>
        @if (Auth::user()->is_admin)
          <a class="btn btn-sm btn-outline-secondary me-3" href="{{ route('admin.index') }}">Admin panel</a>
        @endif
        <a class="btn btn-sm btn-outline-secondary" href="{{ route('logout') }}">Sign out</a>
      @endauth
      @guest
        <a class="btn btn-sm btn-outline-secondary" href="{{ route('login') }}">Sign in</a>
      @endguest
    </div>
  </div>
</header>
