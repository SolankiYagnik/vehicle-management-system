  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>  
    </ul>

    <ul class="navbar-nav ml-auto">
      <div class="btn-group">
        <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          {{ Auth::user()->last_name }}
        </button>
        <div class="dropdown-menu dropdown-menu-right">
          <!-- Authentication -->
          <form method="POST" action="{{ route('logout') }}">
            @csrf
            {{-- <button href="{{ route('logout') }}" class="dropdown-item" type="submit">Logout</button> --}}
            <a href="{{ route('logout') }}" onclick="event.preventDefault();this.closest('form').submit();">Logout</a>
        </form>
        </div>
      </div>
    </ul>
  </nav>
  <!-- /.navbar -->