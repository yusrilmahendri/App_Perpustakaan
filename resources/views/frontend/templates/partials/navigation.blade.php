<div class="navbar-fixed">
    <nav>
        <div class="nav-wrapper">
            <a href="/" class="brand-logo"> Perpusku</a>
            <a href="#" data-target="mobile-demo" class="sidenav-trigger">
                <i class="material-icons">Menu</i></a>
            <ul class="right hide-on-med-and-down">
              @guest
                <li><a href="{{  route('login') }}">login</a></li>
                <li><a href="{{  route('register') }}">Register</a></li>    
                @else
                 <ul id="dropdown1" class="dropdown-content">
                  
                  <li><a href="{{ route('home') }}">Home</a></li>

                    <li><a href="{{ route('logout') }}" 
                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a></li>
                 </ul>

                 <!-- so trigger logout --> 
                 <form id="logout-form" action="{{ route('logout') }}" method="POST" style="displayL none;">
                    @csrf
                </form>

                   <li><a href="#" class="dropdown-trigger" data-target="dropdown1">
                       {{ auth()->user()->name }}
                   </a></li>
              @endguest
            </ul>
        </div>
    </nav>
</div>

<ul class="sidenav" id="mobile-demo" sttle="margin-left:100px;">
   @guest
      <li><a href="{{  route('login') }}">Login</a></li>
      <li><a href="{{  route('register') }}">Register</a></li>

      @else
       <li><a href="{{ route('home') }}">Home</a></li>
        <li><a href="{{ route('logout') }}" 
          onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a></li>
        </ul>
   @endguest
</ul>

  <!-- so trigger logout --> 
    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="displayL none;">
      @csrf
    </form>