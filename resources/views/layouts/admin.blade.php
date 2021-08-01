<!doctype html>
<html class="h-100" lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>@yield('title', 'Admin panel')</title>
  <link rel="icon" href="{{ asset('favicon.ico') }}" type="image/x-icon" />

  <!-- Bootstrap core CSS -->
  {{-- <link href="{{ asset('assets/css/bootstrap-reboot.css') }}" rel="stylesheet"> --}}
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <!-- Custom styles for this template -->
  <link href="{{ asset('assets/admin/css/admin.css') }}" rel="stylesheet">

</head>

<body class="d-flex flex-column h-100">

  <x-admin.header />

  <div class="container-fluid flex-shrink-0 @if (request()->routeIs('auth')) bg-light @endif">
    <div class="row">
      @if (!request()->routeIs('auth'))
        <x-admin.sidebar />
      @endif
      <main class="col-md-9 col-lg-10 px-md-4 pt-3
        @if (request()->routeIs('auth')) mx-sm-auto @else ms-sm-auto @endif"
        >
        @yield('main')
      </main>

    </div>
  </div>

  <x-admin.footer />

  <x-admin.toast />

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
  </script>
  <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js"
    integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous">
  </script>
  <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>

  @stack('js')

  @stack('js-delete-element')

</body>

</html>
