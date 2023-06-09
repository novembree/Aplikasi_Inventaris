@extends('tampilan')
@section('konten')
<!DOCTYPE html>
<html>
<head>
    <link href="login.css" rel="stylesheet">

    <link href="/css/bootstrap.min.css" rel="stylesheet">

</head>
<body class="center">
    <main class="form-signin w-100 m-auto text-center">
        <form action="/register" method="POST">
          @csrf
          {{-- <img class="mb-4" src="../assets/brand/bootstrap-logo.svg" alt="" width="72" height="57"> --}}
          <h1 class="h3 mb-3 fw-normal">Please Register</h1>
          
          <div class="form-floating">
            <input type="text" class="form-control" id="floatingInput" placeholder="name@example.com" name="nama_member">
            <label for="floatingInput" class="text-dark">Nama Member</label>
          </div>
          <div class="form-floating">
            <input type="text" class="form-control" id="floatingInput" placeholder="name@example.com" name="username">
            <label for="floatingInput"class="text-dark">Username</label>
          </div>
          <div class="form-floating">
            <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="password">
            <label for="floatingPassword"class="text-dark">Password</label>
          </div>
          <select class="form-select form-select-lg mb-3 text-center" aria-label=".form-select-lg example" name="level">
            <option selected>Select Level</option>
            <option value="1">Admin</option>
            <option value="2" disabled>User</option>
          </select>
          <button class="w-50 btn btn-lg btn-primary" type="submit">Sign-up</button>
        </form>
      </main>
</body>
</html>
@endsection