
<ul>
  {{-- <li>@foreach ($posts => $post) --}}
    <div class="row section scrollspy" style="padding:10px; margin-top:10px;">
      <div class="content-box col s12" style="padding:20px; margin-top:40px; background: #f2f2f2; border-radius:10px;">
        <div class="i_title" style="text-align:center; margin: -57px 0 0 0;">
          <a href="/profile" class="tooltip"><img class="responsive-img circle" src="images/profile_picture.jpg" style="width:60px; box-shadow: 0 6px 10px 0 rgba(0, 0, 0, 0.2);"><span class="tooltiptext">@Username{{-- $user->username --}}</span></a>
        </div>
          <p class="col s12">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.{{-- $post->post --}}</p>
      </div>
    </div>
  {{-- @endforeach</li> --}}
</ul>
