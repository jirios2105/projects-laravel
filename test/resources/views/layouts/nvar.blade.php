<nav>
   <div class="nav-wrapper">

     <a class="brand-logo" href="{{ url('/') }}">
         {{ config('app.name', 'Laravel') }}
     </a>
     <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
     <ul class="right hide-on-med-and-down">
       @guest
           <li>
               <a  href="{{ route('login') }}">{{ __('Login') }}</a>
           </li>
           <li >
               <a  href="{{ route('register') }}">{{ __('Register') }}</a>
           </li>
       @else
         <li >
             <a id="navbarDropdown"  class="dropdown-trigger" href="#!" data-target="dropdown2" >
                 {{ Auth::user()->name }} <span class="caret"></span>
                 <i class="material-icons right">arrow_drop_down</i>
             </a>


         </li>
       @endguest
     </ul>
   </div>
 </nav>


@include('layouts.sidenvar')

<ul id="dropdown1" class="dropdown-content">
  <li><a  href="{{ route('logout') }}"
     onclick="event.preventDefault();
                   document.getElementById('logout-form').submit();">
      {{ __('Logout') }}
  </a>
</li>
</ul>

<ul id="dropdown2" class="dropdown-content">
  <li><a  href="{{ route('logout') }}"
     onclick="event.preventDefault();
                   document.getElementById('logout-form').submit();">
      {{ __('Logout') }}
  </a>
</li>
</ul>
<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
    @csrf
</form>
