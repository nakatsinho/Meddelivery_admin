<nav ui-nav>
  <ul class="nav">
    <li class="no-bg">
      <a href="{{ route('logout') }}" onclick="event.preventDefault();  document.getElementById('logout-form').submit();">
        <span class="nav-icon">
      	 <i class="material-icons">&#xe8ac;</i>
        </span>
        <span class="nav-text">Logout</span>
      </a>

      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
          @csrf
      </form>
    </li>
  </ul>
</nav>
