
  <li><div  style="background-color:#1de9b6;" class="user-view">
    <div class="background">
      <img src="images/resolution_log.jpg">
    </div>
    <a href="/profile"><img class="circle" src="images/profile_picture.jpg"></a>
    <a href="/profile"><span class="white-text name">{{ Auth::user()->name }}</span></a>
    <a href="/profile"><span class="white-text email">{{ Auth::user()->email }}</span></a>
  </div></li>
  <li><a href="/"><i class="material-icons">home</i>Home</a></li>
  <li><a onclick="showFavs()";><i class="material-icons">favorite_border</i>Favs</a></li>
  <li><a class="waves-effect" href="/info"><i class="material-icons">info_outline</i>Info about this website</a></li>
  <li style="border-bottom:1px solid #b2dfdb; border-top:1px solid #b2dfdb"><a class="subheader">Hot Topics</a></li>
  <li><a href="/">#Topic</a></li>
  <li><a href="/">#Topic</a></li>
  <li><a href="/">#Topic</a></li>
  <li><a href="/">#Topic</a></li>
  <li class="nav-item"><a href="{{ url('/logout') }}">Logout</a>
  </li>
