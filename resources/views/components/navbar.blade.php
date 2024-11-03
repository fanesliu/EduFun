<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        {{-- col 3 --}}
      <img class="col-1" src="{{asset('images\Logo.png')}}" alt="Logo">
{{-- disini col9 --}}
      <div class="col-9 d-flex justify-content-end" id="navbarNavDropdown">
        <ul class="navbar-nav gap-3">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{route('home.view')}}">Home</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Category
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <li><a class="dropdown-item" href="{{route('category.view',1)}}">Data Science</a></li>
              <li><a class="dropdown-item" href="{{route('category.view',2)}}">Network Security</a></li>
              {{-- <li><a class="dropdown-item" href="#">Something else here</a></li> --}}
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('writer.view')}}">Writes</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('aboutus.view')}}">About Us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('popular.view')}}">Popular</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>