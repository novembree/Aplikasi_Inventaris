<!doctype html>
<html lang="en" class="h-100">
  <head>
    <title>Welcome</title>

    {{-- <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/cover/"> --}}

    

    

<link href="/css/bootstrap.min.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      .b-example-divider {
        height: 3rem;
        background-color: rgba(0, 0, 0, .1);
        border: solid rgba(0, 0, 0, .15);
        border-width: 1px 0;
        box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
      }

      .b-example-vr {
        flex-shrink: 0;
        width: 1.5rem;
        height: 100vh;
      }

      .bi {
        vertical-align: -.125em;
        fill: currentColor;
      }

      .nav-scroller {
        position: relative;
        z-index: 2;
        height: 2.75rem;
        overflow-y: hidden;
      }

      .nav-scroller .nav {
        display: flex;
        flex-wrap: nowrap;
        padding-bottom: 1rem;
        margin-top: -1px;
        overflow-x: auto;
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="/tampilan.css" rel="stylesheet">
  </head>
  <body class="d-flex h-100 text-center text-bg-dark" style="background-image: url('/assets/inv2.jpg')">
    
<div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
  <header class="mb-auto">
    <div>
      <h3 class="float-md-start mb-0">Welcome</h3>
      <nav class="nav nav-masthead justify-content-center float-md-end">
        <a class="nav-link fw-bold py-1 px-0 " aria-current="page" href="/">Home</a>
        <a class="nav-link fw-bold py-1 px-0" href="/login">Login</a>
        {{-- <a class="nav-link fw-bold py-1 px-0" href="#">Contact</a> --}}
      </nav>
    </div>
  </header>

  <main class="px-3">
      @yield('konten')
  </main>

  <footer class="mt-auto text-white-50">
    <p>by <a href="https://www.instagram.com/arrbiim/" target="_blank" class="text-white">@AryoBhimo</a>.</p>
  </footer>
</div>


    
  </body>
</html>
