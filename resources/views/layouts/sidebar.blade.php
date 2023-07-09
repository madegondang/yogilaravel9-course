<aside id="sidebar-wrapper">
    <div class="sidebar-brand">
      <a href="#">Stisla</a>
    </div>
    <div class="sidebar-brand sidebar-brand-sm">
      <a href="#">St</a>
    </div>
    <ul class="sidebar-menu">
      @section('sidebar')
      @if (Auth::check())
    @if (Auth::user()->role =='superadmin')
    <li><a class="nav-link" href="{{ route('superadmin') }}"><i class="fas fa-home"></i> <span>Home</span></a></li>
    @elseif (Auth::user()->role =='admin')
    <li><a class="nav-link" href="{{ route('admin') }}"><i class="fas fa-home"></i> <span>Home</span></a></li>
    @elseif (Auth::user()->role =='user')
    <li><a class="nav-link" href="{{ route('home') }}"><i class="fas fa-home"></i> <span>Home</span></a></li>
    @endif
  @endif
      @show
    </ul>    
  </aside>