<header id="header">
  <div class="headerr">
  <div class="container-fluid">
    <div id="logo" class="pull-left m-0 pt-0">
      <a href="/"><img src="https://res.cloudinary.com/syfon/image/upload/v1536857508/favicon.png" alt="" title="" / class="logo"></a>
    </div>

    <nav id="nav-menu-container">
      <ul class="nav-menu pt-3">
        <li class="menu-active"><a href="/">Home</a></li>
        <li class="menu"><a href="/about">About Us</a></li>
        <li class="menu"><a href="/learn">Learn</a></li>
        <li class="menu-active"><a href="/news">News</a></li>
        <!--<li class="menu"><a href="/test">Test</a></li>-->
        @if (Auth::check())
          <li class="menu"><a href="/logout">Logout</a></li>
        @endif
      </ul>
    </nav>
  </div>
</div>
</header>
