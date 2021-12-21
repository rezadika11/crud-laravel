
    <nav class="navbar navbar-expand-lg navbar-dark bg-success">
      <div class="container">
        <a class="navbar-brand" href="#">Almedia</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Home</a>
            </li>
            @if (auth()->user()->level=="admin")
            <li class="nav-item">
              <a class="nav-link" href="{{ route('about') }}">About</a>
            </li>
            @endif
            <li class="nav-item">
              <a class="nav-link" href="{{ route('blog') }}">Blog</a>
            </li>
          
            
          </ul>
          <ul class="navbar-nav ms-auto ">
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">{{ auth()->user()->name }}</a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Edit Password</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="{{ route('logout') }}">Logout</a></li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </nav>