<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Register</title>

  <!-- Bootstrap core CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <link rel="stylesheet" href="{{ asset('assets/css/sign-in.css') }}">

  <!-- Custom styles for this template -->
  {{-- <link href="signin.css" rel="stylesheet"> --}}
</head>

<body class="text-center">

  <main class="form-register">
    @if ($errors->any())
      <ul class="list-group mb-3">
        @foreach ($errors->all() as $error)
          <li class="list-group-item list-group-item-danger text-start">{{ $error }}</li>
        @endforeach
      </ul>
    @endif
    <form method="POST" action="/register">
      @csrf
      <h1 class="h3 mb-3 fw-normal">Registration</h1>
      <div class="form-floating">
        <input type="text" name="name" class="form-control" id="floatingInput" placeholder="Name">
        <label for="floatingInput">Your name</label>
      </div>
      <div class="form-floating">
        <input type="email" name="email" class="form-control" id="floatingInput" placeholder="name@example.com">
        <label for="floatingInput">Email address</label>
      </div>
      <div class="form-floating">
        <input type="password" name="password" class="form-control" id="floatingPassword" placeholder="Password">
        <label for="floatingPassword">Password</label>
      </div>
      <div class="form-floating">
        <input type="password" name="password_confirmation" class="form-control" id="password_confirmation"
          placeholder="Password confirmation">
        <label for="password_confirmation">Password confirmation</label>
      </div>

      <button class="w-100 btn btn-lg btn-primary" type="submit">Register</button>
      <p class="mt-5 mb-3 text-muted">&copy; 2021. Maxim Zaboronkin. All rights reserved</p>
    </form>
  </main>



</body>

</html>
