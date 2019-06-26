<div class="ui container">
  <div class="ui menu">
    <div class="header item">Company Logo</div>
    <a href='about-us' class="item">About Us</a>
    <a href='jobs' class="item">Jobs</a>
    <a href='locations' class="item">Locations</a>
    <div class="right menu">
      <div class="item">
        <div class="ui icon input">
          <input type="text" placeholder="Search...">
          <i class="search link icon"></i>
        </div>
      </div>
      @if (Route::has('login'))
        @auth
          <a class="ui item" href="{{ url('/home') }}">Home</a>
        @else
            <a class="ui item" href="{{ route('login') }}">Login</a>
            @if (Route::has('register'))
            <a class="ui item" href="{{ route('register') }}">Register</a>
            @endif
        @endauth
      @else
        <a class="ui item">Login</a>
      @endif
    </div>
  </div>
</div>
