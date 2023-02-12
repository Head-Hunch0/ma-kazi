<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/resources/css/app.css">
    <link rel="icon" type="image/png/ico" href="/favicon.ico">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <title>Ma-Kazi</title>

</head>
<nav class="navbar navbar-expand-lg bg-light">
  <div class="container-fluid">
    <a class="navbar-brand text-monospace " href="/"><img src="{{asset('/images/Untitled design.png')}}" alt="" width="50">Ma-Kazi </a>
    
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0 mx-lg-5">
        @auth
            <li class="nav-item mx-lg-5">
            <a class="nav-link mx-lg-5" href="/user/logout">Log Out <img src="{{asset('/images/logout.png')}}" alt="" width="30"></a>
            </li>

        @else
        <li class="nav-item mx-lg-5">
          <a class="nav-link mx-lg-5" href="/user/register">Register<img src="{{asset('/images/register.png')}}" alt="" width="50"></a>
        </li>
        <li class="nav-item mx-lg-5">
          <a class="nav-link mx-lg-5" href="/user/login/form">Login<img src="{{asset('/images/log-in.png')}}" alt="" width="50"></a>
        </li>
        @endauth
        
      </ul>

    </div>
  </div>
</nav>
        {{-- <div class="alert alert-warning alert-dismissible fade show" role="alert">
        Welcome! {{auth()->user()->name}}.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div> --}}
<div class="container d-flex justify-content-center" style="width: 80%">
  <div class=" m-3 p-3 justify-content-center">
    <form class="d-flex" role="search" action="/listings/all">
    <input class="form-control me-2 border-primary" name="search" type="search" placeholder="Search Jobs" aria-label="Search" style="max-width: 500px">
    <button class="btn btn-outline-success" type="submit">Search</button>
  </form>
  </div>
</div>
<body>
@include('sweetalert::alert')
<main class=""> 
    @yield('content')
</main>
<nav class="navbar">
  <div class="container-fluid">
    {{-- <a class="navbar-brand" href="#">Sticky bottom</a> --}}
  </div>
</nav>
<div class="row text-center p-3 bg-light border">
  <div class="col">
       <p>Copyright @2023 Ma-Kazi.</p> 
    <span class="fw-bold">Call US +254 712 345 678</span>
  </div>
  <div class="col">
  <a href="/listings/create" class="btn btn-info mx-5">Post Jobs</a>
  </div>
</div>
</body>
<flash-message/>
</html>
<script>
  (() => {
  'use strict'

  // Fetch all the forms we want to apply custom Bootstrap validation styles to
  const forms = document.querySelectorAll('.needs-validation')

  // Loop over them and prevent submission
  Array.from(forms).forEach(form => {
    form.addEventListener('submit', event => {
      if (!form.checkValidity()) {
        event.preventDefault()
        event.stopPropagation()
      }

      form.classList.add('was-validated')
    }, false)
  })
})()
</script>