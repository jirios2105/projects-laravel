<ul class="sidenav" id="mobile-demo">
  @guest
      <li>
          <a  href="{{ route('login') }}">{{ __('Login') }}</a>
      </li>
      <li >
          <a  href="{{ route('register') }}">{{ __('Register') }}</a>
      </li>
  @else
      <li >
          <a id="navbarDropdown"  class="dropdown-trigger" href="#!" data-target="dropdown1" >
              {{ Auth::user()->name }} <span class="caret"></span>
              <i class="material-icons right">arrow_drop_down</i>
          </a>


      </li>

  @endguest
</ul>
